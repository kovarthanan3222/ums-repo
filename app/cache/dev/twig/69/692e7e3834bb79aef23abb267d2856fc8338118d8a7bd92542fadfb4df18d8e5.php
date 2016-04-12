<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_97672401f38fddb94f44bec27e72b5926e5909882ff5cde5a713228159845ccf extends Twig_Template
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
        $__internal_9a436c5353e10a1b0f449842aff2a6a506eddef6d6b21ef0487ac46ef69b6bc1 = $this->env->getExtension("native_profiler");
        $__internal_9a436c5353e10a1b0f449842aff2a6a506eddef6d6b21ef0487ac46ef69b6bc1->enter($__internal_9a436c5353e10a1b0f449842aff2a6a506eddef6d6b21ef0487ac46ef69b6bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9a436c5353e10a1b0f449842aff2a6a506eddef6d6b21ef0487ac46ef69b6bc1->leave($__internal_9a436c5353e10a1b0f449842aff2a6a506eddef6d6b21ef0487ac46ef69b6bc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
