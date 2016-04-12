<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1c4d3fcbc8ad587f06f6f4e6c717035f738412136d8bb8c82a0263ddf9457a16 extends Twig_Template
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
        $__internal_403e41b3f903659ba1b284491f6b6f14ae5bb5b5e421d9552450584844b9e6de = $this->env->getExtension("native_profiler");
        $__internal_403e41b3f903659ba1b284491f6b6f14ae5bb5b5e421d9552450584844b9e6de->enter($__internal_403e41b3f903659ba1b284491f6b6f14ae5bb5b5e421d9552450584844b9e6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_403e41b3f903659ba1b284491f6b6f14ae5bb5b5e421d9552450584844b9e6de->leave($__internal_403e41b3f903659ba1b284491f6b6f14ae5bb5b5e421d9552450584844b9e6de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
