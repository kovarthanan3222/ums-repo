<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_387d40e0aed94cf25d2a2f205e751aa94aab634aa24c9492e3bc04635fd7d248 extends Twig_Template
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
        $__internal_9f133c1bc4aab0b7ee41e6885350f21b0d0ffc3f45a2769c2118823113b42a2d = $this->env->getExtension("native_profiler");
        $__internal_9f133c1bc4aab0b7ee41e6885350f21b0d0ffc3f45a2769c2118823113b42a2d->enter($__internal_9f133c1bc4aab0b7ee41e6885350f21b0d0ffc3f45a2769c2118823113b42a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9f133c1bc4aab0b7ee41e6885350f21b0d0ffc3f45a2769c2118823113b42a2d->leave($__internal_9f133c1bc4aab0b7ee41e6885350f21b0d0ffc3f45a2769c2118823113b42a2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
