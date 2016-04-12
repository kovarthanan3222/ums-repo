<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_61e6d59504f0a9888cdc5434473c9766e7d668b5c4793c14d82cc6adccf59f54 extends Twig_Template
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
        $__internal_c78a8abf369baa2b073f081e3b8271ec2dd6441df7c6699df96f0973e13563f8 = $this->env->getExtension("native_profiler");
        $__internal_c78a8abf369baa2b073f081e3b8271ec2dd6441df7c6699df96f0973e13563f8->enter($__internal_c78a8abf369baa2b073f081e3b8271ec2dd6441df7c6699df96f0973e13563f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c78a8abf369baa2b073f081e3b8271ec2dd6441df7c6699df96f0973e13563f8->leave($__internal_c78a8abf369baa2b073f081e3b8271ec2dd6441df7c6699df96f0973e13563f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
