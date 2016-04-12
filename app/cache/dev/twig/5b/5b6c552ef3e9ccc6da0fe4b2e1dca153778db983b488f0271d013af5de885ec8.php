<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_51efe474c507e552b14ac342c6bb690d59dbf6cb503a94d560f36d4003e692a0 extends Twig_Template
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
        $__internal_ff9512945768654210df94d9d6d3741c3dacaf6b8cb5274a55458b079872bc98 = $this->env->getExtension("native_profiler");
        $__internal_ff9512945768654210df94d9d6d3741c3dacaf6b8cb5274a55458b079872bc98->enter($__internal_ff9512945768654210df94d9d6d3741c3dacaf6b8cb5274a55458b079872bc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ff9512945768654210df94d9d6d3741c3dacaf6b8cb5274a55458b079872bc98->leave($__internal_ff9512945768654210df94d9d6d3741c3dacaf6b8cb5274a55458b079872bc98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
