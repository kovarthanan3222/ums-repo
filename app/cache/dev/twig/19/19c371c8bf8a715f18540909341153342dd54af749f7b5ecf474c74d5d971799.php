<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4409305d525678ccbbf396b8bb4f77daf9f69b257204bbe1de80021067fc1203 extends Twig_Template
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
        $__internal_a52d4af914edfdf1f9f6396ba72cb9cf223fe8c36827725f2ac766328b117a03 = $this->env->getExtension("native_profiler");
        $__internal_a52d4af914edfdf1f9f6396ba72cb9cf223fe8c36827725f2ac766328b117a03->enter($__internal_a52d4af914edfdf1f9f6396ba72cb9cf223fe8c36827725f2ac766328b117a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a52d4af914edfdf1f9f6396ba72cb9cf223fe8c36827725f2ac766328b117a03->leave($__internal_a52d4af914edfdf1f9f6396ba72cb9cf223fe8c36827725f2ac766328b117a03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
