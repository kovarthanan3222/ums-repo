<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f3f8109501e4aabc7ab01ec6d77606d20928701a24655d276a272755175a0743 extends Twig_Template
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
        $__internal_1f60ab0bc64be8177862e35b70c803cac458401fb849da19a4cb193b6e7fcbe0 = $this->env->getExtension("native_profiler");
        $__internal_1f60ab0bc64be8177862e35b70c803cac458401fb849da19a4cb193b6e7fcbe0->enter($__internal_1f60ab0bc64be8177862e35b70c803cac458401fb849da19a4cb193b6e7fcbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1f60ab0bc64be8177862e35b70c803cac458401fb849da19a4cb193b6e7fcbe0->leave($__internal_1f60ab0bc64be8177862e35b70c803cac458401fb849da19a4cb193b6e7fcbe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
