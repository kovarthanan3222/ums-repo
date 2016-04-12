<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ecb8ce6661f499deb915142b9643a9f3bef345605d3cb31f614a8f3b87bdb1ea extends Twig_Template
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
        $__internal_e5f1be0ca6492ace1b8fd8986dfce39a69d97b1ffbc7f7560fb8a04aaf1dc7de = $this->env->getExtension("native_profiler");
        $__internal_e5f1be0ca6492ace1b8fd8986dfce39a69d97b1ffbc7f7560fb8a04aaf1dc7de->enter($__internal_e5f1be0ca6492ace1b8fd8986dfce39a69d97b1ffbc7f7560fb8a04aaf1dc7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e5f1be0ca6492ace1b8fd8986dfce39a69d97b1ffbc7f7560fb8a04aaf1dc7de->leave($__internal_e5f1be0ca6492ace1b8fd8986dfce39a69d97b1ffbc7f7560fb8a04aaf1dc7de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
