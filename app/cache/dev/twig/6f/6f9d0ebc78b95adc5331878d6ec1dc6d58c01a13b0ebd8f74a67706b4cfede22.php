<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_a5041f58d12f3644af0a520e52934cde277fe05a35c248e3401809dacedc7530 extends Twig_Template
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
        $__internal_c0efd437eee27abde04ebc2dadf68687445032d19f9de6e2ef1cd743dda243fd = $this->env->getExtension("native_profiler");
        $__internal_c0efd437eee27abde04ebc2dadf68687445032d19f9de6e2ef1cd743dda243fd->enter($__internal_c0efd437eee27abde04ebc2dadf68687445032d19f9de6e2ef1cd743dda243fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>
";
        
        $__internal_c0efd437eee27abde04ebc2dadf68687445032d19f9de6e2ef1cd743dda243fd->leave($__internal_c0efd437eee27abde04ebc2dadf68687445032d19f9de6e2ef1cd743dda243fd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* <form action="" method="post" {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/* */
/*     <input type="submit" />*/
/* </form>*/
/* */
