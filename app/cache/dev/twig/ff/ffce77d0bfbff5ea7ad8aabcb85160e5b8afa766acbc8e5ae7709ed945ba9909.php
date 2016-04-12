<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6e1e1df03755651c64dbc15dd3602620c35b51776a7489881df95e800d4afb90 extends Twig_Template
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
        $__internal_d9b48394379abf55b3f33a78ac39269eb8bbbcae3e1719f75d44101f802194bd = $this->env->getExtension("native_profiler");
        $__internal_d9b48394379abf55b3f33a78ac39269eb8bbbcae3e1719f75d44101f802194bd->enter($__internal_d9b48394379abf55b3f33a78ac39269eb8bbbcae3e1719f75d44101f802194bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d9b48394379abf55b3f33a78ac39269eb8bbbcae3e1719f75d44101f802194bd->leave($__internal_d9b48394379abf55b3f33a78ac39269eb8bbbcae3e1719f75d44101f802194bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
