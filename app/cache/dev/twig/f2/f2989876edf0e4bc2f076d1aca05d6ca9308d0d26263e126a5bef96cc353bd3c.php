<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_22e3c42f66e44f168f02c31fc3d75c90f682cf0f45ff59e022af8434e996bac3 extends Twig_Template
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
        $__internal_482040b9e3c010847f341f321bf26a34b382df1f048ba3019ef1aac737edf442 = $this->env->getExtension("native_profiler");
        $__internal_482040b9e3c010847f341f321bf26a34b382df1f048ba3019ef1aac737edf442->enter($__internal_482040b9e3c010847f341f321bf26a34b382df1f048ba3019ef1aac737edf442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_482040b9e3c010847f341f321bf26a34b382df1f048ba3019ef1aac737edf442->leave($__internal_482040b9e3c010847f341f321bf26a34b382df1f048ba3019ef1aac737edf442_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
