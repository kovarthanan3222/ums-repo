<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2599e562e922a478fd6f7fcfc4ac090296086107bdf58ca493ed55f4c20c84e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f1f6ec348f6c42ee06754f2319f0ab122b2dc6b74c41414a84bb2a9d0d0d82e = $this->env->getExtension("native_profiler");
        $__internal_7f1f6ec348f6c42ee06754f2319f0ab122b2dc6b74c41414a84bb2a9d0d0d82e->enter($__internal_7f1f6ec348f6c42ee06754f2319f0ab122b2dc6b74c41414a84bb2a9d0d0d82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7f1f6ec348f6c42ee06754f2319f0ab122b2dc6b74c41414a84bb2a9d0d0d82e->leave($__internal_7f1f6ec348f6c42ee06754f2319f0ab122b2dc6b74c41414a84bb2a9d0d0d82e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e4713028c5ef85696fbd36417c2242cbdf42f05f1a731033e8f5c7e334dfdde = $this->env->getExtension("native_profiler");
        $__internal_5e4713028c5ef85696fbd36417c2242cbdf42f05f1a731033e8f5c7e334dfdde->enter($__internal_5e4713028c5ef85696fbd36417c2242cbdf42f05f1a731033e8f5c7e334dfdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5e4713028c5ef85696fbd36417c2242cbdf42f05f1a731033e8f5c7e334dfdde->leave($__internal_5e4713028c5ef85696fbd36417c2242cbdf42f05f1a731033e8f5c7e334dfdde_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
