<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4ac7fa07c31881a640cc247cf244ac3eb9787ee88c3a6cbc8bac59ad62a1ec5c extends Twig_Template
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
        $__internal_b555f529e2c0290144d6dad23124c9fde8090841b84f8153853172bfb211e58b = $this->env->getExtension("native_profiler");
        $__internal_b555f529e2c0290144d6dad23124c9fde8090841b84f8153853172bfb211e58b->enter($__internal_b555f529e2c0290144d6dad23124c9fde8090841b84f8153853172bfb211e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b555f529e2c0290144d6dad23124c9fde8090841b84f8153853172bfb211e58b->leave($__internal_b555f529e2c0290144d6dad23124c9fde8090841b84f8153853172bfb211e58b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
