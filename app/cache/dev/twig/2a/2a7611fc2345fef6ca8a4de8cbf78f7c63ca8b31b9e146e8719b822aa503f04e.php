<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_755139ca92a7e8f7437803f9ecc15b910475f0fcce71d9036ffdba33c4167c9b extends Twig_Template
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
        $__internal_36176d4990cf0a8e3dc0a76992e1023b8e42a37ddda72405ec7e7a6237402757 = $this->env->getExtension("native_profiler");
        $__internal_36176d4990cf0a8e3dc0a76992e1023b8e42a37ddda72405ec7e7a6237402757->enter($__internal_36176d4990cf0a8e3dc0a76992e1023b8e42a37ddda72405ec7e7a6237402757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_36176d4990cf0a8e3dc0a76992e1023b8e42a37ddda72405ec7e7a6237402757->leave($__internal_36176d4990cf0a8e3dc0a76992e1023b8e42a37ddda72405ec7e7a6237402757_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
