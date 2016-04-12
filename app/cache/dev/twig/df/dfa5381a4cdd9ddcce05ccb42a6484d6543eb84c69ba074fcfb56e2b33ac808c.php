<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7cf2a5d0f1c0c8840db318e4e95b94c0cd7fe1b4561b19e81a028acf42c03108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c38da70be9201aa316c8e1aa104ef88c42d1254707b2e22cac01157f755e2b53 = $this->env->getExtension("native_profiler");
        $__internal_c38da70be9201aa316c8e1aa104ef88c42d1254707b2e22cac01157f755e2b53->enter($__internal_c38da70be9201aa316c8e1aa104ef88c42d1254707b2e22cac01157f755e2b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38da70be9201aa316c8e1aa104ef88c42d1254707b2e22cac01157f755e2b53->leave($__internal_c38da70be9201aa316c8e1aa104ef88c42d1254707b2e22cac01157f755e2b53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_849ede2ea51b1f1dcff41bd8c252e12a94ed4ee2ddb65d04e9f454618ff50e9f = $this->env->getExtension("native_profiler");
        $__internal_849ede2ea51b1f1dcff41bd8c252e12a94ed4ee2ddb65d04e9f454618ff50e9f->enter($__internal_849ede2ea51b1f1dcff41bd8c252e12a94ed4ee2ddb65d04e9f454618ff50e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_849ede2ea51b1f1dcff41bd8c252e12a94ed4ee2ddb65d04e9f454618ff50e9f->leave($__internal_849ede2ea51b1f1dcff41bd8c252e12a94ed4ee2ddb65d04e9f454618ff50e9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c2e7beaa40f6626c593cbff74bf319af7ba85c58e8355c4147f420e3aaa5e19 = $this->env->getExtension("native_profiler");
        $__internal_0c2e7beaa40f6626c593cbff74bf319af7ba85c58e8355c4147f420e3aaa5e19->enter($__internal_0c2e7beaa40f6626c593cbff74bf319af7ba85c58e8355c4147f420e3aaa5e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c2e7beaa40f6626c593cbff74bf319af7ba85c58e8355c4147f420e3aaa5e19->leave($__internal_0c2e7beaa40f6626c593cbff74bf319af7ba85c58e8355c4147f420e3aaa5e19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb52d102fd9d22e18a81ce1357050aeb0b7c09ad89497f45c7df567f757575dc = $this->env->getExtension("native_profiler");
        $__internal_cb52d102fd9d22e18a81ce1357050aeb0b7c09ad89497f45c7df567f757575dc->enter($__internal_cb52d102fd9d22e18a81ce1357050aeb0b7c09ad89497f45c7df567f757575dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb52d102fd9d22e18a81ce1357050aeb0b7c09ad89497f45c7df567f757575dc->leave($__internal_cb52d102fd9d22e18a81ce1357050aeb0b7c09ad89497f45c7df567f757575dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
