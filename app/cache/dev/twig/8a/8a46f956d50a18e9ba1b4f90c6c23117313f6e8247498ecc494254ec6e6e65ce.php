<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_18cfee6c327396990c97e74b5747c0a628207cddfba400f5f1b20caaf49453c1 extends Twig_Template
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
        $__internal_4e08588113a88ef5c60eb73ed17dd0c81c63c6ba61769b1b55d95512412cbefc = $this->env->getExtension("native_profiler");
        $__internal_4e08588113a88ef5c60eb73ed17dd0c81c63c6ba61769b1b55d95512412cbefc->enter($__internal_4e08588113a88ef5c60eb73ed17dd0c81c63c6ba61769b1b55d95512412cbefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4e08588113a88ef5c60eb73ed17dd0c81c63c6ba61769b1b55d95512412cbefc->leave($__internal_4e08588113a88ef5c60eb73ed17dd0c81c63c6ba61769b1b55d95512412cbefc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
