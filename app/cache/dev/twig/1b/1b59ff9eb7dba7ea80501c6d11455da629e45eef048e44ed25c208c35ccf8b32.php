<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_89bdcebce2fe550262f957a562322c3d49068f32540a5f7df192793de4e2d782 extends Twig_Template
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
        $__internal_2f7faff58a7a46e84582e9fb0c5c39a148eb5b9643687296c8405f202f4f4f3b = $this->env->getExtension("native_profiler");
        $__internal_2f7faff58a7a46e84582e9fb0c5c39a148eb5b9643687296c8405f202f4f4f3b->enter($__internal_2f7faff58a7a46e84582e9fb0c5c39a148eb5b9643687296c8405f202f4f4f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f7faff58a7a46e84582e9fb0c5c39a148eb5b9643687296c8405f202f4f4f3b->leave($__internal_2f7faff58a7a46e84582e9fb0c5c39a148eb5b9643687296c8405f202f4f4f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
