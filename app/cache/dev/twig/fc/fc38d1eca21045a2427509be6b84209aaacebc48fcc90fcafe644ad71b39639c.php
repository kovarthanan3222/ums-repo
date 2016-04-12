<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a4d91e43a3b57185177a70a67d13f44ac9d6d59f896258a59c06cf5ecce41e80 extends Twig_Template
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
        $__internal_72448ccd56a41f256fe0383d262e1e0d7c9cc277a574775ab91377524278e108 = $this->env->getExtension("native_profiler");
        $__internal_72448ccd56a41f256fe0383d262e1e0d7c9cc277a574775ab91377524278e108->enter($__internal_72448ccd56a41f256fe0383d262e1e0d7c9cc277a574775ab91377524278e108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_72448ccd56a41f256fe0383d262e1e0d7c9cc277a574775ab91377524278e108->leave($__internal_72448ccd56a41f256fe0383d262e1e0d7c9cc277a574775ab91377524278e108_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
