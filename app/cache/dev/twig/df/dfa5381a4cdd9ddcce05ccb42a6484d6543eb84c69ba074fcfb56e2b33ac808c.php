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
        $__internal_d0343d4ae3a29d3e471896d9107a24255cfdc5117d33a7d5270f0fac8b6cab48 = $this->env->getExtension("native_profiler");
        $__internal_d0343d4ae3a29d3e471896d9107a24255cfdc5117d33a7d5270f0fac8b6cab48->enter($__internal_d0343d4ae3a29d3e471896d9107a24255cfdc5117d33a7d5270f0fac8b6cab48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0343d4ae3a29d3e471896d9107a24255cfdc5117d33a7d5270f0fac8b6cab48->leave($__internal_d0343d4ae3a29d3e471896d9107a24255cfdc5117d33a7d5270f0fac8b6cab48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f00d9b410ca9dc5fd7ee1691e0c90115b0c2185ccd245b42bde3ffb4709380f3 = $this->env->getExtension("native_profiler");
        $__internal_f00d9b410ca9dc5fd7ee1691e0c90115b0c2185ccd245b42bde3ffb4709380f3->enter($__internal_f00d9b410ca9dc5fd7ee1691e0c90115b0c2185ccd245b42bde3ffb4709380f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f00d9b410ca9dc5fd7ee1691e0c90115b0c2185ccd245b42bde3ffb4709380f3->leave($__internal_f00d9b410ca9dc5fd7ee1691e0c90115b0c2185ccd245b42bde3ffb4709380f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72275cd1dcfd4025f204019e1af60c318426b3ebd4149a1c1c4e40e721ece67c = $this->env->getExtension("native_profiler");
        $__internal_72275cd1dcfd4025f204019e1af60c318426b3ebd4149a1c1c4e40e721ece67c->enter($__internal_72275cd1dcfd4025f204019e1af60c318426b3ebd4149a1c1c4e40e721ece67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72275cd1dcfd4025f204019e1af60c318426b3ebd4149a1c1c4e40e721ece67c->leave($__internal_72275cd1dcfd4025f204019e1af60c318426b3ebd4149a1c1c4e40e721ece67c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_77ec5ff274cf572487325e6f596a5ccb9678a0a5ef8d46706360d4a27c74bbf8 = $this->env->getExtension("native_profiler");
        $__internal_77ec5ff274cf572487325e6f596a5ccb9678a0a5ef8d46706360d4a27c74bbf8->enter($__internal_77ec5ff274cf572487325e6f596a5ccb9678a0a5ef8d46706360d4a27c74bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_77ec5ff274cf572487325e6f596a5ccb9678a0a5ef8d46706360d4a27c74bbf8->leave($__internal_77ec5ff274cf572487325e6f596a5ccb9678a0a5ef8d46706360d4a27c74bbf8_prof);

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
