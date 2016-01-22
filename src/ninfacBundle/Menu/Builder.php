<?php

// src/ninfacBundle/Menu/Builder.php
namespace ninfacBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

use Knp\Menu\Matcher\Matcher;
use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $factory = new MenuFactory();
        
//        $menu = $factory->createItem('My menu');
//        $menu->addChild('Home', array('uri' => '/'));
//        $menu->addChild('Comments', array('uri' => '#comments'));
//        $menu->addChild('Symfony2', array('uri' => 'http://symfony-reloaded.org/'));
//

        $menu = $factory->createItem('root');

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $blog = $em->getRepository('AppBundle:Blog')->findOneBy(array('id'=>1));

        $menu->addChild($blog->getBlowShow(), array(
            'uri' => 'blog_show',
            'routeParameters' => array('id' => $blog->getId())
        ));
        $menu->setChildrenAttribute('class', 'dropdown-menu');  // cambio del atributo class en la etiqueta <ul> para el menu

        
        $menu->addChild('Home', array('uri' => 'homepage'));
        
        
        // create another menu item
        //$menu->addChild('About Me', array('uri' => 'about'));
        // you can also add sub level's to your menu's as follows
        //$menu['About Me']->addChild('Edit profile', array('uri' => 'edit_profile'));

        // ... add more children
//
        
        $renderer = new ListRenderer(new Matcher());
        echo $renderer->render($menu);
        
        return $menu;

    }
   
}