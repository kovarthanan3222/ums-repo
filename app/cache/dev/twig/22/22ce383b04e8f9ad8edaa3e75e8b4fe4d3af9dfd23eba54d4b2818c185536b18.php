<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a1f66c4e2b59ba89cc05ebb6be705c4a549f51306353c12bc9d3bddb3a6018ef extends Twig_Template
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
        $__internal_9a58528aeb1049e113e5a7adb6912b06f6d00f3aaf422046dd2c583abc49cea4 = $this->env->getExtension("native_profiler");
        $__internal_9a58528aeb1049e113e5a7adb6912b06f6d00f3aaf422046dd2c583abc49cea4->enter($__internal_9a58528aeb1049e113e5a7adb6912b06f6d00f3aaf422046dd2c583abc49cea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9a58528aeb1049e113e5a7adb6912b06f6d00f3aaf422046dd2c583abc49cea4->leave($__internal_9a58528aeb1049e113e5a7adb6912b06f6d00f3aaf422046dd2c583abc49cea4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
