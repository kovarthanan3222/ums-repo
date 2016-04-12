<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e679fbddfe356066cac16fe6bede2bcdee8f981f8e2045e0650fd6fdf89ce697 extends Twig_Template
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
        $__internal_ae8af621d239894f44c08413c553c65c45f3947c2f16e8fd0e93752482e4aa21 = $this->env->getExtension("native_profiler");
        $__internal_ae8af621d239894f44c08413c553c65c45f3947c2f16e8fd0e93752482e4aa21->enter($__internal_ae8af621d239894f44c08413c553c65c45f3947c2f16e8fd0e93752482e4aa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ae8af621d239894f44c08413c553c65c45f3947c2f16e8fd0e93752482e4aa21->leave($__internal_ae8af621d239894f44c08413c553c65c45f3947c2f16e8fd0e93752482e4aa21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
