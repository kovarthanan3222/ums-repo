<?php

/* PropelBundle:Panel:explain.html.twig */
class __TwigTemplate_b1b4f663fef27f2d7b1a5dc8c09ae5bea60c98ba97cb075c24bbe4965325a177 extends Twig_Template
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
        $__internal_d98c8e5be44b2f2d0e8b9551339f8961b610510e1e6356a7d6581fb281e8edc9 = $this->env->getExtension("native_profiler");
        $__internal_d98c8e5be44b2f2d0e8b9551339f8961b610510e1e6356a7d6581fb281e8edc9->enter($__internal_d98c8e5be44b2f2d0e8b9551339f8961b610510e1e6356a7d6581fb281e8edc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PropelBundle:Panel:explain.html.twig"));

        // line 1
        echo "<h2>Explanation</h2>

<table>
    <tr>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 6
            echo "            <th>";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </tr>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "    <tr>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "            <td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</table>
";
        
        $__internal_d98c8e5be44b2f2d0e8b9551339f8961b610510e1e6356a7d6581fb281e8edc9->leave($__internal_d98c8e5be44b2f2d0e8b9551339f8961b610510e1e6356a7d6581fb281e8edc9_prof);

    }

    public function getTemplateName()
    {
        return "PropelBundle:Panel:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  64 => 14,  55 => 12,  51 => 11,  48 => 10,  44 => 9,  41 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <h2>Explanation</h2>*/
/* */
/* <table>*/
/*     <tr>*/
/*         {% for label in data[0]|keys %}*/
/*             <th>{{ label }}</th>*/
/*         {% endfor %}*/
/*     </tr>*/
/*     {% for row in data %}*/
/*     <tr>*/
/*         {% for item in row %}*/
/*             <td>{{ item }}</td>*/
/*         {% endfor %}*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
