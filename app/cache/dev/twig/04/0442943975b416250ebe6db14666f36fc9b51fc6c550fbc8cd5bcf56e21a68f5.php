<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fadfe81adb1c751d644d0c413d0603d04b5b84e7a52200e1a9d3722bc2cdd60a extends Twig_Template
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
        $__internal_cab43ca64894e8d0f87e335ded93144b20c3d6fd3d0e715a4a8cb8101c42bc24 = $this->env->getExtension("native_profiler");
        $__internal_cab43ca64894e8d0f87e335ded93144b20c3d6fd3d0e715a4a8cb8101c42bc24->enter($__internal_cab43ca64894e8d0f87e335ded93144b20c3d6fd3d0e715a4a8cb8101c42bc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cab43ca64894e8d0f87e335ded93144b20c3d6fd3d0e715a4a8cb8101c42bc24->leave($__internal_cab43ca64894e8d0f87e335ded93144b20c3d6fd3d0e715a4a8cb8101c42bc24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
