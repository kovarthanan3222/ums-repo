<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ceaf8f325e66f731d9fc27c9ee3f91125896379a1ead20cd1249fbaa67952b0e extends Twig_Template
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
        $__internal_1d33a5a70681421c35f8942308ba3cce161324f415958bdf865a81e693a17447 = $this->env->getExtension("native_profiler");
        $__internal_1d33a5a70681421c35f8942308ba3cce161324f415958bdf865a81e693a17447->enter($__internal_1d33a5a70681421c35f8942308ba3cce161324f415958bdf865a81e693a17447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1d33a5a70681421c35f8942308ba3cce161324f415958bdf865a81e693a17447->leave($__internal_1d33a5a70681421c35f8942308ba3cce161324f415958bdf865a81e693a17447_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
