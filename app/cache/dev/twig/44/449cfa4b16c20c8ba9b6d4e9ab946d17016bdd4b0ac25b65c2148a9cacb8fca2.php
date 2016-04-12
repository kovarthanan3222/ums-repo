<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cb147749ae970cac31986d0702bf956695d633e427294c05d81e0d1295c567ee extends Twig_Template
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
        $__internal_469d19d8eb391b20ac15614cc3918c176c681be48018bf2d7a55d774fb583e02 = $this->env->getExtension("native_profiler");
        $__internal_469d19d8eb391b20ac15614cc3918c176c681be48018bf2d7a55d774fb583e02->enter($__internal_469d19d8eb391b20ac15614cc3918c176c681be48018bf2d7a55d774fb583e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_469d19d8eb391b20ac15614cc3918c176c681be48018bf2d7a55d774fb583e02->leave($__internal_469d19d8eb391b20ac15614cc3918c176c681be48018bf2d7a55d774fb583e02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
