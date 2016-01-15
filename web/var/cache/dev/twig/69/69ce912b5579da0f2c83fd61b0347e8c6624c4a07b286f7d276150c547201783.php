<?php

/* base.html.twig */
class __TwigTemplate_6f111b86adf6f17f3475ae1ff958857ea306acb43a94f48a432d0b9d684aac83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d91ff0f3bc859b00b0308626909beb222e662a5ae7f7d0e837d2093b6f1a6ae8 = $this->env->getExtension("native_profiler");
        $__internal_d91ff0f3bc859b00b0308626909beb222e662a5ae7f7d0e837d2093b6f1a6ae8->enter($__internal_d91ff0f3bc859b00b0308626909beb222e662a5ae7f7d0e837d2093b6f1a6ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d91ff0f3bc859b00b0308626909beb222e662a5ae7f7d0e837d2093b6f1a6ae8->leave($__internal_d91ff0f3bc859b00b0308626909beb222e662a5ae7f7d0e837d2093b6f1a6ae8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a0a88e4cb709d11f96c7d2f40777179386b74bbd590fc727a672d11436dc5d1 = $this->env->getExtension("native_profiler");
        $__internal_8a0a88e4cb709d11f96c7d2f40777179386b74bbd590fc727a672d11436dc5d1->enter($__internal_8a0a88e4cb709d11f96c7d2f40777179386b74bbd590fc727a672d11436dc5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a0a88e4cb709d11f96c7d2f40777179386b74bbd590fc727a672d11436dc5d1->leave($__internal_8a0a88e4cb709d11f96c7d2f40777179386b74bbd590fc727a672d11436dc5d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11e2762bf0a4b4b65a3870ad73e1ed061ff3a300b67d29fc65fdd0985fb21155 = $this->env->getExtension("native_profiler");
        $__internal_11e2762bf0a4b4b65a3870ad73e1ed061ff3a300b67d29fc65fdd0985fb21155->enter($__internal_11e2762bf0a4b4b65a3870ad73e1ed061ff3a300b67d29fc65fdd0985fb21155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11e2762bf0a4b4b65a3870ad73e1ed061ff3a300b67d29fc65fdd0985fb21155->leave($__internal_11e2762bf0a4b4b65a3870ad73e1ed061ff3a300b67d29fc65fdd0985fb21155_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca08a0e047ebb685ecd6c101c9b2d5cd928b5d02a254c40413b724043a2f5f8b = $this->env->getExtension("native_profiler");
        $__internal_ca08a0e047ebb685ecd6c101c9b2d5cd928b5d02a254c40413b724043a2f5f8b->enter($__internal_ca08a0e047ebb685ecd6c101c9b2d5cd928b5d02a254c40413b724043a2f5f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca08a0e047ebb685ecd6c101c9b2d5cd928b5d02a254c40413b724043a2f5f8b->leave($__internal_ca08a0e047ebb685ecd6c101c9b2d5cd928b5d02a254c40413b724043a2f5f8b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b7be33e57d3cedf92cf8a416a6cbd3485a58b57c8e8564ef19565a2b6c39aa6 = $this->env->getExtension("native_profiler");
        $__internal_5b7be33e57d3cedf92cf8a416a6cbd3485a58b57c8e8564ef19565a2b6c39aa6->enter($__internal_5b7be33e57d3cedf92cf8a416a6cbd3485a58b57c8e8564ef19565a2b6c39aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5b7be33e57d3cedf92cf8a416a6cbd3485a58b57c8e8564ef19565a2b6c39aa6->leave($__internal_5b7be33e57d3cedf92cf8a416a6cbd3485a58b57c8e8564ef19565a2b6c39aa6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
