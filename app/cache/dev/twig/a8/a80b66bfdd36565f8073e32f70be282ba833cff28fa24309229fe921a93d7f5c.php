<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_26d86d39b8ba578ac58bb134071b39ed7e4abdb57c871547af98c8a751f371c2 extends Twig_Template
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
        $__internal_c3fe3a6b9ef3386f9e334da60f9d99881c70511637b87039fd904dab7c273515 = $this->env->getExtension("native_profiler");
        $__internal_c3fe3a6b9ef3386f9e334da60f9d99881c70511637b87039fd904dab7c273515->enter($__internal_c3fe3a6b9ef3386f9e334da60f9d99881c70511637b87039fd904dab7c273515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3fe3a6b9ef3386f9e334da60f9d99881c70511637b87039fd904dab7c273515->leave($__internal_c3fe3a6b9ef3386f9e334da60f9d99881c70511637b87039fd904dab7c273515_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
