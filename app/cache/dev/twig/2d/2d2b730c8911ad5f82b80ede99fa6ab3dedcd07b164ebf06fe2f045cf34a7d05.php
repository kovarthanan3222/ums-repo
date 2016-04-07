<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_a8d7e582d7961f0f8c74dd2a59af3316b72a8bbb8395061ef8012d15143d4e4d extends Twig_Template
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
        $__internal_02760d15645a230aa43116ec7c3a852849c584f2e4e8116735ee05cf4e1b6e72 = $this->env->getExtension("native_profiler");
        $__internal_02760d15645a230aa43116ec7c3a852849c584f2e4e8116735ee05cf4e1b6e72->enter($__internal_02760d15645a230aa43116ec7c3a852849c584f2e4e8116735ee05cf4e1b6e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

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
        
        $__internal_02760d15645a230aa43116ec7c3a852849c584f2e4e8116735ee05cf4e1b6e72->leave($__internal_02760d15645a230aa43116ec7c3a852849c584f2e4e8116735ee05cf4e1b6e72_prof);

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
