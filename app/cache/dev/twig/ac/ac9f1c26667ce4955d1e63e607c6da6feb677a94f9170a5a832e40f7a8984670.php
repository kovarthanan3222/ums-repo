<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7a3b4c6019e33550456ea0cdf678d63b850faa4dfcc90840325f2b9978fa07ca extends Twig_Template
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
        $__internal_37f971f70782f32faf6c362b5c3c415aa051e8f68cb3aeeed2f812f9ed208e4e = $this->env->getExtension("native_profiler");
        $__internal_37f971f70782f32faf6c362b5c3c415aa051e8f68cb3aeeed2f812f9ed208e4e->enter($__internal_37f971f70782f32faf6c362b5c3c415aa051e8f68cb3aeeed2f812f9ed208e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_37f971f70782f32faf6c362b5c3c415aa051e8f68cb3aeeed2f812f9ed208e4e->leave($__internal_37f971f70782f32faf6c362b5c3c415aa051e8f68cb3aeeed2f812f9ed208e4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
