<?php

/* ::base.html.twig */
class __TwigTemplate_3bfba42a717d2ce7b63c9b797a1f24e68e64fc0fde32cb81258c80821b10fb8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_963b469e4bdd3928e8574ba190572a1e2f32404f715da5d63544303025668974 = $this->env->getExtension("native_profiler");
        $__internal_963b469e4bdd3928e8574ba190572a1e2f32404f715da5d63544303025668974->enter($__internal_963b469e4bdd3928e8574ba190572a1e2f32404f715da5d63544303025668974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_963b469e4bdd3928e8574ba190572a1e2f32404f715da5d63544303025668974->leave($__internal_963b469e4bdd3928e8574ba190572a1e2f32404f715da5d63544303025668974_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a8099cb0b44660a543b71781e74aaad964bc40235dbfb93a02e24e56c61a0b7 = $this->env->getExtension("native_profiler");
        $__internal_5a8099cb0b44660a543b71781e74aaad964bc40235dbfb93a02e24e56c61a0b7->enter($__internal_5a8099cb0b44660a543b71781e74aaad964bc40235dbfb93a02e24e56c61a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5a8099cb0b44660a543b71781e74aaad964bc40235dbfb93a02e24e56c61a0b7->leave($__internal_5a8099cb0b44660a543b71781e74aaad964bc40235dbfb93a02e24e56c61a0b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f538facae86ae6f3b77f784d43d809241181c3ee35e66ebabd7f5b8456981974 = $this->env->getExtension("native_profiler");
        $__internal_f538facae86ae6f3b77f784d43d809241181c3ee35e66ebabd7f5b8456981974->enter($__internal_f538facae86ae6f3b77f784d43d809241181c3ee35e66ebabd7f5b8456981974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f538facae86ae6f3b77f784d43d809241181c3ee35e66ebabd7f5b8456981974->leave($__internal_f538facae86ae6f3b77f784d43d809241181c3ee35e66ebabd7f5b8456981974_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30337ac6373c6c09fe57bda82b7a443bf39a90915874df91a6f8eaf379e68ba6 = $this->env->getExtension("native_profiler");
        $__internal_30337ac6373c6c09fe57bda82b7a443bf39a90915874df91a6f8eaf379e68ba6->enter($__internal_30337ac6373c6c09fe57bda82b7a443bf39a90915874df91a6f8eaf379e68ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30337ac6373c6c09fe57bda82b7a443bf39a90915874df91a6f8eaf379e68ba6->leave($__internal_30337ac6373c6c09fe57bda82b7a443bf39a90915874df91a6f8eaf379e68ba6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_999fdc9cab630994786277c366f6a4d1d13b2d7bdd8d6aea9830015d741f208b = $this->env->getExtension("native_profiler");
        $__internal_999fdc9cab630994786277c366f6a4d1d13b2d7bdd8d6aea9830015d741f208b->enter($__internal_999fdc9cab630994786277c366f6a4d1d13b2d7bdd8d6aea9830015d741f208b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_999fdc9cab630994786277c366f6a4d1d13b2d7bdd8d6aea9830015d741f208b->leave($__internal_999fdc9cab630994786277c366f6a4d1d13b2d7bdd8d6aea9830015d741f208b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
