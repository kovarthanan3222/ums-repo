<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cfa0c436b069980c1a1293ce338a222842789107c24d7b4f04217d6e3a386166 extends Twig_Template
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
        $__internal_ba97222dd873d029a8bdabb2d1adaa7448bb4610f2450926ffc43d42d972acf9 = $this->env->getExtension("native_profiler");
        $__internal_ba97222dd873d029a8bdabb2d1adaa7448bb4610f2450926ffc43d42d972acf9->enter($__internal_ba97222dd873d029a8bdabb2d1adaa7448bb4610f2450926ffc43d42d972acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ba97222dd873d029a8bdabb2d1adaa7448bb4610f2450926ffc43d42d972acf9->leave($__internal_ba97222dd873d029a8bdabb2d1adaa7448bb4610f2450926ffc43d42d972acf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
