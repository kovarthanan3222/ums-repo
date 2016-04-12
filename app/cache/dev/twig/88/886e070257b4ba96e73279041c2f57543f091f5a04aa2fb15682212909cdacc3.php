<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e67809016e8676f882048aa562ab91a8683fe7ef51275f9fe30a28fb0b44cbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a8a2ffd29af10c18c6a5952080da82ca25a4104ccc52af05d76e352077ace5be = $this->env->getExtension("native_profiler");
        $__internal_a8a2ffd29af10c18c6a5952080da82ca25a4104ccc52af05d76e352077ace5be->enter($__internal_a8a2ffd29af10c18c6a5952080da82ca25a4104ccc52af05d76e352077ace5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a2ffd29af10c18c6a5952080da82ca25a4104ccc52af05d76e352077ace5be->leave($__internal_a8a2ffd29af10c18c6a5952080da82ca25a4104ccc52af05d76e352077ace5be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08d9b6d906fc2d6d981a9a10fd749ae57d704c7a79f99cfc2968e3bfdf391fd4 = $this->env->getExtension("native_profiler");
        $__internal_08d9b6d906fc2d6d981a9a10fd749ae57d704c7a79f99cfc2968e3bfdf391fd4->enter($__internal_08d9b6d906fc2d6d981a9a10fd749ae57d704c7a79f99cfc2968e3bfdf391fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_08d9b6d906fc2d6d981a9a10fd749ae57d704c7a79f99cfc2968e3bfdf391fd4->leave($__internal_08d9b6d906fc2d6d981a9a10fd749ae57d704c7a79f99cfc2968e3bfdf391fd4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11e344dd913842d4d877463cb2d8fd363cbbfe0a303d46ac7b140c547a5c01b3 = $this->env->getExtension("native_profiler");
        $__internal_11e344dd913842d4d877463cb2d8fd363cbbfe0a303d46ac7b140c547a5c01b3->enter($__internal_11e344dd913842d4d877463cb2d8fd363cbbfe0a303d46ac7b140c547a5c01b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_11e344dd913842d4d877463cb2d8fd363cbbfe0a303d46ac7b140c547a5c01b3->leave($__internal_11e344dd913842d4d877463cb2d8fd363cbbfe0a303d46ac7b140c547a5c01b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
