<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ba71ac22afaa98be3b405e2324c7fcdb309a53ad8093aa6d28581b23e51e0c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4ffb46bc4ddafcd53f33b96ea5cff4c930778088bcbc5d193f70ee182043a63 = $this->env->getExtension("native_profiler");
        $__internal_f4ffb46bc4ddafcd53f33b96ea5cff4c930778088bcbc5d193f70ee182043a63->enter($__internal_f4ffb46bc4ddafcd53f33b96ea5cff4c930778088bcbc5d193f70ee182043a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ffb46bc4ddafcd53f33b96ea5cff4c930778088bcbc5d193f70ee182043a63->leave($__internal_f4ffb46bc4ddafcd53f33b96ea5cff4c930778088bcbc5d193f70ee182043a63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cec7d76d7dcab9a222b95c08a11f607626778d7cf999350dd6beb1b577a3976 = $this->env->getExtension("native_profiler");
        $__internal_7cec7d76d7dcab9a222b95c08a11f607626778d7cf999350dd6beb1b577a3976->enter($__internal_7cec7d76d7dcab9a222b95c08a11f607626778d7cf999350dd6beb1b577a3976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cec7d76d7dcab9a222b95c08a11f607626778d7cf999350dd6beb1b577a3976->leave($__internal_7cec7d76d7dcab9a222b95c08a11f607626778d7cf999350dd6beb1b577a3976_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6bec6adc298a511c869d56b316299d127e75c36eb37a19de07afc5ffefe95c9 = $this->env->getExtension("native_profiler");
        $__internal_b6bec6adc298a511c869d56b316299d127e75c36eb37a19de07afc5ffefe95c9->enter($__internal_b6bec6adc298a511c869d56b316299d127e75c36eb37a19de07afc5ffefe95c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6bec6adc298a511c869d56b316299d127e75c36eb37a19de07afc5ffefe95c9->leave($__internal_b6bec6adc298a511c869d56b316299d127e75c36eb37a19de07afc5ffefe95c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45439b29e1e0ad71f1591d5aab052ee1d55665dcabac03834bfed832a02685c3 = $this->env->getExtension("native_profiler");
        $__internal_45439b29e1e0ad71f1591d5aab052ee1d55665dcabac03834bfed832a02685c3->enter($__internal_45439b29e1e0ad71f1591d5aab052ee1d55665dcabac03834bfed832a02685c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45439b29e1e0ad71f1591d5aab052ee1d55665dcabac03834bfed832a02685c3->leave($__internal_45439b29e1e0ad71f1591d5aab052ee1d55665dcabac03834bfed832a02685c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
