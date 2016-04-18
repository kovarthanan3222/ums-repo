<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0ca6f969ad5a8900aca9df9fbb304088fc9acff19f94b9489b1e6581947276ac extends Twig_Template
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
        $__internal_bda92f099bd4391f89520f79205622d97927af3c745a5995a6fe76d3551cd0b3 = $this->env->getExtension("native_profiler");
        $__internal_bda92f099bd4391f89520f79205622d97927af3c745a5995a6fe76d3551cd0b3->enter($__internal_bda92f099bd4391f89520f79205622d97927af3c745a5995a6fe76d3551cd0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda92f099bd4391f89520f79205622d97927af3c745a5995a6fe76d3551cd0b3->leave($__internal_bda92f099bd4391f89520f79205622d97927af3c745a5995a6fe76d3551cd0b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abbfbc9ef57cd2971ebf284247ddabf0cd851ef06599469dea205b8e8f47e641 = $this->env->getExtension("native_profiler");
        $__internal_abbfbc9ef57cd2971ebf284247ddabf0cd851ef06599469dea205b8e8f47e641->enter($__internal_abbfbc9ef57cd2971ebf284247ddabf0cd851ef06599469dea205b8e8f47e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_abbfbc9ef57cd2971ebf284247ddabf0cd851ef06599469dea205b8e8f47e641->leave($__internal_abbfbc9ef57cd2971ebf284247ddabf0cd851ef06599469dea205b8e8f47e641_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68b04211a750dec7f25d3953d4c229d487990331da96ce4424fab6b641b83a43 = $this->env->getExtension("native_profiler");
        $__internal_68b04211a750dec7f25d3953d4c229d487990331da96ce4424fab6b641b83a43->enter($__internal_68b04211a750dec7f25d3953d4c229d487990331da96ce4424fab6b641b83a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68b04211a750dec7f25d3953d4c229d487990331da96ce4424fab6b641b83a43->leave($__internal_68b04211a750dec7f25d3953d4c229d487990331da96ce4424fab6b641b83a43_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71badfd236897ceb4df43de1fc9a44a3a4af742b23f95f4aa369dda22d7a160b = $this->env->getExtension("native_profiler");
        $__internal_71badfd236897ceb4df43de1fc9a44a3a4af742b23f95f4aa369dda22d7a160b->enter($__internal_71badfd236897ceb4df43de1fc9a44a3a4af742b23f95f4aa369dda22d7a160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71badfd236897ceb4df43de1fc9a44a3a4af742b23f95f4aa369dda22d7a160b->leave($__internal_71badfd236897ceb4df43de1fc9a44a3a4af742b23f95f4aa369dda22d7a160b_prof);

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
