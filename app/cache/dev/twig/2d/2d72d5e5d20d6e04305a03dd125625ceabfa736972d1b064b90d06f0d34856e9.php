<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9cd7dc98ab3d4d52084e7e1691bc6e0bada788d86d8fdacba840e7f3e203acf1 extends Twig_Template
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
        $__internal_ef74931599c89268e35596938e2e2b48913a22369ff36da57af6c19006e808aa = $this->env->getExtension("native_profiler");
        $__internal_ef74931599c89268e35596938e2e2b48913a22369ff36da57af6c19006e808aa->enter($__internal_ef74931599c89268e35596938e2e2b48913a22369ff36da57af6c19006e808aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ef74931599c89268e35596938e2e2b48913a22369ff36da57af6c19006e808aa->leave($__internal_ef74931599c89268e35596938e2e2b48913a22369ff36da57af6c19006e808aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
