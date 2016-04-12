<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b3faacba7b17405b0fc52fdcfa6f4d92a562141e79f67865158d080b2a9cd5be extends Twig_Template
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
        $__internal_bca5a383113a249b26da468636eb61f904cce17db1dc708b812e9925f0301b8e = $this->env->getExtension("native_profiler");
        $__internal_bca5a383113a249b26da468636eb61f904cce17db1dc708b812e9925f0301b8e->enter($__internal_bca5a383113a249b26da468636eb61f904cce17db1dc708b812e9925f0301b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bca5a383113a249b26da468636eb61f904cce17db1dc708b812e9925f0301b8e->leave($__internal_bca5a383113a249b26da468636eb61f904cce17db1dc708b812e9925f0301b8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
