<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7502a2d084a9cc02eb764547ee54680b047aabe47090922c5ef545cd17441287 extends Twig_Template
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
        $__internal_353d347a0d69f3cb13f0529f0be20fc5d945872e85c92722906fe71093ba61a5 = $this->env->getExtension("native_profiler");
        $__internal_353d347a0d69f3cb13f0529f0be20fc5d945872e85c92722906fe71093ba61a5->enter($__internal_353d347a0d69f3cb13f0529f0be20fc5d945872e85c92722906fe71093ba61a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_353d347a0d69f3cb13f0529f0be20fc5d945872e85c92722906fe71093ba61a5->leave($__internal_353d347a0d69f3cb13f0529f0be20fc5d945872e85c92722906fe71093ba61a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
