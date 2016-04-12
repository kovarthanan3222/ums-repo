<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_385f21f27ed0efcc83c01edf505beb413338989c7440089be9cd66b57cd2c43d extends Twig_Template
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
        $__internal_cfb18eecf93d71cdbd7be41b4d7f7b913e8205b2d04955594d09b99be1f1e8fc = $this->env->getExtension("native_profiler");
        $__internal_cfb18eecf93d71cdbd7be41b4d7f7b913e8205b2d04955594d09b99be1f1e8fc->enter($__internal_cfb18eecf93d71cdbd7be41b4d7f7b913e8205b2d04955594d09b99be1f1e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cfb18eecf93d71cdbd7be41b4d7f7b913e8205b2d04955594d09b99be1f1e8fc->leave($__internal_cfb18eecf93d71cdbd7be41b4d7f7b913e8205b2d04955594d09b99be1f1e8fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
