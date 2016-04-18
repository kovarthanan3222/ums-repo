<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e7616db8be65853bc460c9573ada6ee8ba85ffc1a18af6c35a292f07b1f8a15 extends Twig_Template
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
        $__internal_2e537e26123d5d30d2210457712996824fa03edd8577f56a92b399192879bb46 = $this->env->getExtension("native_profiler");
        $__internal_2e537e26123d5d30d2210457712996824fa03edd8577f56a92b399192879bb46->enter($__internal_2e537e26123d5d30d2210457712996824fa03edd8577f56a92b399192879bb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e537e26123d5d30d2210457712996824fa03edd8577f56a92b399192879bb46->leave($__internal_2e537e26123d5d30d2210457712996824fa03edd8577f56a92b399192879bb46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b800f008218e57017d820dad7b914e833de54fc79c272d7c2c2a307d57b47dbb = $this->env->getExtension("native_profiler");
        $__internal_b800f008218e57017d820dad7b914e833de54fc79c272d7c2c2a307d57b47dbb->enter($__internal_b800f008218e57017d820dad7b914e833de54fc79c272d7c2c2a307d57b47dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b800f008218e57017d820dad7b914e833de54fc79c272d7c2c2a307d57b47dbb->leave($__internal_b800f008218e57017d820dad7b914e833de54fc79c272d7c2c2a307d57b47dbb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18acefb2a1b2bcd164e97f20fc94fbb8b8951a09fb68bcb17a91ecfb5aec89ec = $this->env->getExtension("native_profiler");
        $__internal_18acefb2a1b2bcd164e97f20fc94fbb8b8951a09fb68bcb17a91ecfb5aec89ec->enter($__internal_18acefb2a1b2bcd164e97f20fc94fbb8b8951a09fb68bcb17a91ecfb5aec89ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18acefb2a1b2bcd164e97f20fc94fbb8b8951a09fb68bcb17a91ecfb5aec89ec->leave($__internal_18acefb2a1b2bcd164e97f20fc94fbb8b8951a09fb68bcb17a91ecfb5aec89ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa106b2661f1dae4c69f73404f848cbfb4b9874c8b5a25f7a103c10d8512a2ca = $this->env->getExtension("native_profiler");
        $__internal_aa106b2661f1dae4c69f73404f848cbfb4b9874c8b5a25f7a103c10d8512a2ca->enter($__internal_aa106b2661f1dae4c69f73404f848cbfb4b9874c8b5a25f7a103c10d8512a2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aa106b2661f1dae4c69f73404f848cbfb4b9874c8b5a25f7a103c10d8512a2ca->leave($__internal_aa106b2661f1dae4c69f73404f848cbfb4b9874c8b5a25f7a103c10d8512a2ca_prof);

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
