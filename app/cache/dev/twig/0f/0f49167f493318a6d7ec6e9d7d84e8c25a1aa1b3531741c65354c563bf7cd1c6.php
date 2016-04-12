<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0072ee7a1a48ee2278300acbc18544bd8f9d10859eccf67b413fe09dd7baf18c extends Twig_Template
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
        $__internal_04f7c37b740fbba2692f9d55fba8039e4e97d0a3a72e3564e62729763b37e6b6 = $this->env->getExtension("native_profiler");
        $__internal_04f7c37b740fbba2692f9d55fba8039e4e97d0a3a72e3564e62729763b37e6b6->enter($__internal_04f7c37b740fbba2692f9d55fba8039e4e97d0a3a72e3564e62729763b37e6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_04f7c37b740fbba2692f9d55fba8039e4e97d0a3a72e3564e62729763b37e6b6->leave($__internal_04f7c37b740fbba2692f9d55fba8039e4e97d0a3a72e3564e62729763b37e6b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
