<?php

namespace ninfacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if($session->has('id'))
        {
            return $this->render('ninfacBundle:Default:index.html.twig');            
        }
            else
        {
            $this->get('session')->getFlashBag()->add(
                        'mensaje',
                        'Debe estar logeado'
                        );
            return $this->render('ninfacBundle:Usuarios:login.html.twig');
        }
    }
    
    /**
     * @Route("/")
     */
    public function loginAction(Request $request)
    {
        if ($request->getMethod()=="POST")
        {
            $correo = $request->get('correo');
            $pass = $request->get('pass');
//            die($correo.'<br>'.$pass);
            //buscar en repositorio
            $user = $this->getDoctrine()->getRepository('ninfacBundle:Usuarios')->findOneBy(array('correo'=>$correo, 'pass'=>$pass));
            if ($user)
            {
                $session = $request->getSession();
                $session->set('id', $user->getId());
                $session->set('nombre', $user->getNombre());
//                echo $session->get('nombre');exit;
                return $this->redirect($this->generateUrl('ninfac_home'));
            }
            else
            {
                /*
                 * mostrar mensaje en la vista getFlash esta definida en la vista
                 */
                $this->get('session')->getFlashBag()->add(
                        'mensaje',
                        'Los dastos ingresados no son validos'
                        );
            }
        }
        return $this->render('ninfacBundle:Usuarios:login.html.twig');
    }
 
    
    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        $this->get('session')->getFlashBag()->add(
                'mensaje',
                'La sessión ha finalizado'
                );
        return $this->redirect($this->generateUrl('ninfac_login'));       
    }
}
