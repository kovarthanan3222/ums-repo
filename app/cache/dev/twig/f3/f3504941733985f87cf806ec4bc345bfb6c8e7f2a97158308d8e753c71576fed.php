<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ef95e05e5e089c5ac92fae38fc81ba834064a05b640bb9cee2dc34c83c3033de extends Twig_Template
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
        $__internal_8110e0c155cb410a0c2c88390848679676731ab4932c8851db25ec43d37a40a6 = $this->env->getExtension("native_profiler");
        $__internal_8110e0c155cb410a0c2c88390848679676731ab4932c8851db25ec43d37a40a6->enter($__internal_8110e0c155cb410a0c2c88390848679676731ab4932c8851db25ec43d37a40a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8110e0c155cb410a0c2c88390848679676731ab4932c8851db25ec43d37a40a6->leave($__internal_8110e0c155cb410a0c2c88390848679676731ab4932c8851db25ec43d37a40a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
