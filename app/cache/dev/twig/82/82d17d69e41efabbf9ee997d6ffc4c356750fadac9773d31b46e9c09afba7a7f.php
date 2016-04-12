<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b17ce6dce29fd43b6231b09318fb4c9b5ef3c63cf7c730bbfb0155ae009036c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c6c12cbccda240ee044fb4be59e35cc3d3e527aa3651df8ba87678b4cc01477 = $this->env->getExtension("native_profiler");
        $__internal_7c6c12cbccda240ee044fb4be59e35cc3d3e527aa3651df8ba87678b4cc01477->enter($__internal_7c6c12cbccda240ee044fb4be59e35cc3d3e527aa3651df8ba87678b4cc01477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7c6c12cbccda240ee044fb4be59e35cc3d3e527aa3651df8ba87678b4cc01477->leave($__internal_7c6c12cbccda240ee044fb4be59e35cc3d3e527aa3651df8ba87678b4cc01477_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
