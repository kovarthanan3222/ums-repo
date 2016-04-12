<?php

/* PropelBundle:Panel:configuration.html.twig */
class __TwigTemplate_afd332298ed46f32635299ed136075ee5fd2da890fc53b7788ed44817e8fa11a extends Twig_Template
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
        $__internal_df25c9ec3f89b27d2e76ccd43aa1df530b0d6df12248438e3159341bef0cb12e = $this->env->getExtension("native_profiler");
        $__internal_df25c9ec3f89b27d2e76ccd43aa1df530b0d6df12248438e3159341bef0cb12e->enter($__internal_df25c9ec3f89b27d2e76ccd43aa1df530b0d6df12248438e3159341bef0cb12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PropelBundle:Panel:configuration.html.twig"));

        // line 1
        echo "<h2>Propel configuration</h2>

<table summary=\"Current Propel configuration\">
    <thead>
    </thead>
    <tbody>
        <tr>
            <th>Propel version</th>
            <td>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["propel_version"]) ? $context["propel_version"] : $this->getContext($context, "propel_version")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Default connection</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["default_connection"]) ? $context["default_connection"] : $this->getContext($context, "default_connection")), "html", null, true);
        echo "</td>
        <tr>
            <th>Logging</th>
            <td>";
        // line 16
        echo (((isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging"))) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Propel path</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Phing path</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["phing_path"]) ? $context["phing_path"] : $this->getContext($context, "phing_path")), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<h2>Propel connections</h2>

<table summary=\"Current Propel connections\">
    <thead>
        <tr>
            <th>Connection name</th>
            <th colspan=\"2\" style=\"text-align: center;\">Configuration parameters</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "datasources", array()));
        foreach ($context['_seq'] as $context["name"] => $context["config"]) {
            // line 40
            echo "        <tr>
            <th rowspan=\"5\" style=\"vertical-align: top;\">
                ";
            // line 42
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
            </th>
            <th>Adapter</th>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "adapter", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>DSN</th>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["config"], "connection", array()), "dsn", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Class</th>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["config"], "connection", array()), "classname", array()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Options</th>
            <td>
                <ul>
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["config"], "connection", array()), "options", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 60
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </ul>
            </td>
        </tr>
        <tr>
            <th>Attributes</th>
            <td>
                <ul>
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["config"], "connection", array()), "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 70
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tbody>
</table>
";
        
        $__internal_df25c9ec3f89b27d2e76ccd43aa1df530b0d6df12248438e3159341bef0cb12e->leave($__internal_df25c9ec3f89b27d2e76ccd43aa1df530b0d6df12248438e3159341bef0cb12e_prof);

    }

    public function getTemplateName()
    {
        return "PropelBundle:Panel:configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 76,  153 => 72,  142 => 70,  138 => 69,  129 => 62,  118 => 60,  114 => 59,  105 => 53,  98 => 49,  91 => 45,  85 => 42,  81 => 40,  77 => 39,  59 => 24,  52 => 20,  45 => 16,  39 => 13,  32 => 9,  22 => 1,);
    }
}
/* <h2>Propel configuration</h2>*/
/* */
/* <table summary="Current Propel configuration">*/
/*     <thead>*/
/*     </thead>*/
/*     <tbody>*/
/*         <tr>*/
/*             <th>Propel version</th>*/
/*             <td>{{ propel_version }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Default connection</th>*/
/*             <td>{{ default_connection }}</td>*/
/*         <tr>*/
/*             <th>Logging</th>*/
/*             <td>{{ logging ? 'enabled' : 'disabled' }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Propel path</th>*/
/*             <td>{{ path }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Phing path</th>*/
/*             <td>{{ phing_path }}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* <h2>Propel connections</h2>*/
/* */
/* <table summary="Current Propel connections">*/
/*     <thead>*/
/*         <tr>*/
/*             <th>Connection name</th>*/
/*             <th colspan="2" style="text-align: center;">Configuration parameters</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for name, config in configuration.datasources %}*/
/*         <tr>*/
/*             <th rowspan="5" style="vertical-align: top;">*/
/*                 {{ name }}*/
/*             </th>*/
/*             <th>Adapter</th>*/
/*             <td>{{ config.adapter }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>DSN</th>*/
/*             <td>{{ config.connection.dsn }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Class</th>*/
/*             <td>{{ config.connection.classname }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Options</th>*/
/*             <td>*/
/*                 <ul>*/
/*                     {% for key, value in config.connection.options %}*/
/*                     <li>{{ key }} : {{ value }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Attributes</th>*/
/*             <td>*/
/*                 <ul>*/
/*                     {% for key, value in config.connection.attributes %}*/
/*                     <li>{{ key }} : {{ value }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
