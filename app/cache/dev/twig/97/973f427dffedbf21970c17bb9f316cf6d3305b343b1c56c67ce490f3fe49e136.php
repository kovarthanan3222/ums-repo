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
        $__internal_0aae0c173ea5290d8d98350b959ce70b5697957758f81b140e363cd9494c8f03 = $this->env->getExtension("native_profiler");
        $__internal_0aae0c173ea5290d8d98350b959ce70b5697957758f81b140e363cd9494c8f03->enter($__internal_0aae0c173ea5290d8d98350b959ce70b5697957758f81b140e363cd9494c8f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aae0c173ea5290d8d98350b959ce70b5697957758f81b140e363cd9494c8f03->leave($__internal_0aae0c173ea5290d8d98350b959ce70b5697957758f81b140e363cd9494c8f03_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bfc03ebfd67734b3048a1d66758d319b4f7d80e61b0c8a281c37ba53a4cae733 = $this->env->getExtension("native_profiler");
        $__internal_bfc03ebfd67734b3048a1d66758d319b4f7d80e61b0c8a281c37ba53a4cae733->enter($__internal_bfc03ebfd67734b3048a1d66758d319b4f7d80e61b0c8a281c37ba53a4cae733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bfc03ebfd67734b3048a1d66758d319b4f7d80e61b0c8a281c37ba53a4cae733->leave($__internal_bfc03ebfd67734b3048a1d66758d319b4f7d80e61b0c8a281c37ba53a4cae733_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16c9ad46b315c5be26197bab0cc184de40f32bc0c814f74954f3e350a6551e2e = $this->env->getExtension("native_profiler");
        $__internal_16c9ad46b315c5be26197bab0cc184de40f32bc0c814f74954f3e350a6551e2e->enter($__internal_16c9ad46b315c5be26197bab0cc184de40f32bc0c814f74954f3e350a6551e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16c9ad46b315c5be26197bab0cc184de40f32bc0c814f74954f3e350a6551e2e->leave($__internal_16c9ad46b315c5be26197bab0cc184de40f32bc0c814f74954f3e350a6551e2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef67e6eaefaa990ed415d08d0c6f25ae7145efa7d48c88b2b8a0d5f50d99d0fc = $this->env->getExtension("native_profiler");
        $__internal_ef67e6eaefaa990ed415d08d0c6f25ae7145efa7d48c88b2b8a0d5f50d99d0fc->enter($__internal_ef67e6eaefaa990ed415d08d0c6f25ae7145efa7d48c88b2b8a0d5f50d99d0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef67e6eaefaa990ed415d08d0c6f25ae7145efa7d48c88b2b8a0d5f50d99d0fc->leave($__internal_ef67e6eaefaa990ed415d08d0c6f25ae7145efa7d48c88b2b8a0d5f50d99d0fc_prof);

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
