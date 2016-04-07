<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a902bb2d0e6aebfe898539e2678f1e9690d26218ca48e701d37861ef93e154cc extends Twig_Template
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
        $__internal_7ddbdb36e7d9d43547054aba00cb6c73dc647dbef27b5b047382b156f90bf710 = $this->env->getExtension("native_profiler");
        $__internal_7ddbdb36e7d9d43547054aba00cb6c73dc647dbef27b5b047382b156f90bf710->enter($__internal_7ddbdb36e7d9d43547054aba00cb6c73dc647dbef27b5b047382b156f90bf710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ddbdb36e7d9d43547054aba00cb6c73dc647dbef27b5b047382b156f90bf710->leave($__internal_7ddbdb36e7d9d43547054aba00cb6c73dc647dbef27b5b047382b156f90bf710_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2764fbd1921bffe72620a704512cf154555893cc48fd82c227ea0780d587790b = $this->env->getExtension("native_profiler");
        $__internal_2764fbd1921bffe72620a704512cf154555893cc48fd82c227ea0780d587790b->enter($__internal_2764fbd1921bffe72620a704512cf154555893cc48fd82c227ea0780d587790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2764fbd1921bffe72620a704512cf154555893cc48fd82c227ea0780d587790b->leave($__internal_2764fbd1921bffe72620a704512cf154555893cc48fd82c227ea0780d587790b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb7784755f1e5e70ae4fd1b97d5be1ecc8f9851325d52064e9cbf214bf53748e = $this->env->getExtension("native_profiler");
        $__internal_bb7784755f1e5e70ae4fd1b97d5be1ecc8f9851325d52064e9cbf214bf53748e->enter($__internal_bb7784755f1e5e70ae4fd1b97d5be1ecc8f9851325d52064e9cbf214bf53748e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb7784755f1e5e70ae4fd1b97d5be1ecc8f9851325d52064e9cbf214bf53748e->leave($__internal_bb7784755f1e5e70ae4fd1b97d5be1ecc8f9851325d52064e9cbf214bf53748e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b965654fb77a27f8c84c4e2ab51c7d8ec58e3d4844159164132e5a3d37d45f6 = $this->env->getExtension("native_profiler");
        $__internal_6b965654fb77a27f8c84c4e2ab51c7d8ec58e3d4844159164132e5a3d37d45f6->enter($__internal_6b965654fb77a27f8c84c4e2ab51c7d8ec58e3d4844159164132e5a3d37d45f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b965654fb77a27f8c84c4e2ab51c7d8ec58e3d4844159164132e5a3d37d45f6->leave($__internal_6b965654fb77a27f8c84c4e2ab51c7d8ec58e3d4844159164132e5a3d37d45f6_prof);

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
