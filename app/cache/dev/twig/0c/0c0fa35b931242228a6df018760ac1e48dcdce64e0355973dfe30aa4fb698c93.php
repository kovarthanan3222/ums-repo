<?php

/* PropelBundle:Collector:propel.html.twig */
class __TwigTemplate_f47868185bda214dd87c360ceb9461f51c7e652e4fbb5446b3ea9c5247f17e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "PropelBundle:Collector:propel.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e14ada8a2b4157014534db6fd587cc07c0e6afe4d196d71036590089a91aea0 = $this->env->getExtension("native_profiler");
        $__internal_7e14ada8a2b4157014534db6fd587cc07c0e6afe4d196d71036590089a91aea0->enter($__internal_7e14ada8a2b4157014534db6fd587cc07c0e6afe4d196d71036590089a91aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PropelBundle:Collector:propel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e14ada8a2b4157014534db6fd587cc07c0e6afe4d196d71036590089a91aea0->leave($__internal_7e14ada8a2b4157014534db6fd587cc07c0e6afe4d196d71036590089a91aea0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d613d106eca1e7e0ad4dd2f700ec32fac20a5a5f47649437cdcf956fff1aff82 = $this->env->getExtension("native_profiler");
        $__internal_d613d106eca1e7e0ad4dd2f700ec32fac20a5a5f47649437cdcf956fff1aff82->enter($__internal_d613d106eca1e7e0ad4dd2f700ec32fac20a5a5f47649437cdcf956fff1aff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array())) {
            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        <img alt=\"Propel\" height=\"20\" src=\"data:image/png;base64,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\" />
        <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()), "html", null, true);
            echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        </span>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
    ";
            // line 15
            ob_start();
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "
    ";
            // line 17
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "PropelBundle:Collector:propel.html.twig", 17)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        }
        
        $__internal_d613d106eca1e7e0ad4dd2f700ec32fac20a5a5f47649437cdcf956fff1aff82->leave($__internal_d613d106eca1e7e0ad4dd2f700ec32fac20a5a5f47649437cdcf956fff1aff82_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_781f19df10f91d79026250eb85dcb8397e4e2ee98bbf0d548b45d6c46e2fe32d = $this->env->getExtension("native_profiler");
        $__internal_781f19df10f91d79026250eb85dcb8397e4e2ee98bbf0d548b45d6c46e2fe32d->enter($__internal_781f19df10f91d79026250eb85dcb8397e4e2ee98bbf0d548b45d6c46e2fe32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 22
        echo "    <span class=\"label";
        echo (((0 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array()))) ? (" disabled") : (""));
        echo "\">
        <span class=\"icon\"><img height=\"24\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/propel/images/profiler/propel.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
        <strong>Propel</strong>
    </span>
";
        
        $__internal_781f19df10f91d79026250eb85dcb8397e4e2ee98bbf0d548b45d6c46e2fe32d->leave($__internal_781f19df10f91d79026250eb85dcb8397e4e2ee98bbf0d548b45d6c46e2fe32d_prof);

    }

    // line 28
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dded8d20ef76507bb729050a7e0f6f62b90eac478ec9926e2ea49298e140c26 = $this->env->getExtension("native_profiler");
        $__internal_3dded8d20ef76507bb729050a7e0f6f62b90eac478ec9926e2ea49298e140c26->enter($__internal_3dded8d20ef76507bb729050a7e0f6f62b90eac478ec9926e2ea49298e140c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 29
        echo "    ";
        // line 30
        echo "    <style type=\"text/css\">
    .SQLKeyword {
        color: blue;
        white-space: nowrap;
    }
    .SQLName {
        color: #464646;
        white-space: nowrap;
    }
    .SQLInfo, .SQLComment {
        color: gray;
        display: block;
        font-size: 0.9em;
        margin: 3px 0;
    }

    .SQLExplain {
       margin: 5px;
    }

    .SQLExplain .error {
        background-color: #F2DEDE;
        border-color: #EED3D7;
        color: #B94A48;
        padding: 8px 35px 8px 14px;
        font-weight: bold;
    }

    #content .SQLExplain h2 {
        font-size: 17px;
        margin-bottom: 0;
    }
    </style>

    <h2>Queries</h2>
    <table summary=\"Show logged queries\">
        <thead>
            <tr>
                <th>SQL queries</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 72
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "querycount", array())) {
            // line 73
            echo "            <tr><td>No queries.</td></tr>
        ";
        } else {
            // line 75
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "queries", array()));
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 76
                echo "            <tr>
                <td>
                    <a name=\"propel-query-";
                // line 78
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ></a>
                    <code>";
                // line 79
                echo $this->env->getExtension('propel_syntax_extension')->formatSQL($this->getAttribute($context["query"], "sql", array()));
                echo "</code>
                    ";
                // line 80
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "query"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method") == $context["i"]))) {
                    // line 81
                    echo "                        <div class=\"SQLExplain\">
                        ";
                    // line 82
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PropelBundle:Panel:explain", array("token" =>                     // line 83
(isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => "propel", "query" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 85
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query"), "method"), "connection" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 86
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "connection"), "method"))), array());
                    // line 88
                    echo "                        </div>
                    ";
                }
                // line 90
                echo "                    <div class=\"SQLInfo\">
                        Time: ";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "time", array()), "html", null, true);
                echo " - Memory: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "memory", array()), "html", null, true);
                echo " - Connection: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "connection", array()), "html", null, true);
                echo "

                        ";
                // line 93
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "query", 1 =>  -1), "method") != $context["i"])) {
                    // line 94
                    echo "                            - <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "propel", "token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "connection" => $this->getAttribute($context["query"], "connection", array()), "query" => $context["i"])), "html", null, true);
                    echo "#propel-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">Explain the query</a>
                        ";
                }
                // line 96
                echo "                    </div>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "        ";
        }
        // line 101
        echo "        </tbody>
    </table>

    ";
        // line 104
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PropelBundle:Panel:configuration"), array());
        
        $__internal_3dded8d20ef76507bb729050a7e0f6f62b90eac478ec9926e2ea49298e140c26->leave($__internal_3dded8d20ef76507bb729050a7e0f6f62b90eac478ec9926e2ea49298e140c26_prof);

    }

    public function getTemplateName()
    {
        return "PropelBundle:Collector:propel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 104,  225 => 101,  222 => 100,  213 => 96,  205 => 94,  203 => 93,  194 => 91,  191 => 90,  187 => 88,  185 => 86,  184 => 85,  183 => 83,  182 => 82,  179 => 81,  177 => 80,  173 => 79,  169 => 78,  165 => 76,  160 => 75,  156 => 73,  154 => 72,  110 => 30,  108 => 29,  102 => 28,  91 => 23,  86 => 22,  80 => 21,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  56 => 10,  50 => 7,  47 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* {% if collector.querycount %}*/
/*     {% set icon %}*/
/*         <img alt="Propel" height="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAcCAYAAAB2+A+pAAACzmlDQ1BJQ0MgUHJvZmlsZQAAeNqNk8trFFkUh7/q3KCQIAy0r14Ml1lIkCSUDzQiPtJJbKKxbcpEkyBIp/p2d5mb6ppb1XEUEcnGpc4we/GxcOEf4MKFK90oEXwhiHsVRRTcqLSL6nRX8HlWX/3Oub9zzi0udNrFINApCXN+ZJxcVk5OTcsVz0ixni4ydBXdMBgsFMYAikGg+SY+PsECeNj3/fxPo6sUunNgrYTU+5IKXej4DNQqk1PTIDSQPhkFEYhzQNrE+v9Aeibm60DajDtDIG4Bq9zARCDuAQNutViCTgH0VhI1Mwme03W3Oc8fQLfyJw4DGyB1VoUjTbYWSsXhA0A/WK9KangE6AXretnbNwr0AM/LZt9EzNZGLxodjzl1xNf5sSav82fyh5qeIoiyzpJ/OH94ZEk/UdxfADJgObO1Aw6wBlJ7T1fHj8Zs6dPVoXyTH5m6MwH8BalrgS6MxbOl7jCFRuHho/CROOTI0keAoUYZDw+NRw6Fj8LgETL73UpNIcGSHC/xeYnB42/qKCQOR8jmWehtOUj7qf3Gfmxftq/Zry9m6j3tzII57rmLF95RQGFavs1sc6bY36XGIBpNBcVca6cwMWliurJ/MdN2chcvvFPn8x8TW6pEpz5mUITMYvCYR6EJUQwmuv3o9hT67plb69q9Houbxx523z2z7K5q32ylWlst/27XJc8r8afYJEbFgNiBFHvEXrFbDIsBsVOMtU5M4ONxEoUhpIjG5xRy2f9bqiV+awCkc8pXxnOlk8vKgqmVPa0ST/QX6d+MyalpGdN0HW6EsHZrW/vgYAHWmsW2Fh2EXW+h40Fb68nA6ktwc5tbN/NNa8u6D5H6JwIYqgWnjFepRnKzbW+Xg0GglRz13f5eWdRaGq9SjUJpVKjMvCr1E5a3bI5durPQ+aLR+LABVvwHX/5tND5daTS+XIWO53BbfwXAvP1FP6ZP5AAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAG9gAABvYBDBXjEwAAAAd0SU1FB9sEBhQVGSw3+igAAAWFSURBVEjH3VdfTFtVGP+d09v2jna0pYzC7EbpmsBguAw6+kCydJJh4nhYiMaYKInbNMvigpo49+CDL0bji89LlhgWH8TFaII004VIMmDAKGF/Ojr5t1YYpfS2pZTb295/vgACg4Hb9MHzdr/zfd/v/r7zO+d8B/i/jWQyueXcvXv3/h3QyclJspm9p6eHjIyMUABgXgTQ4OAg6urqcPv2bQ3HcXA6nTIAjI+PV8disUZVVc+m0+mKxcXFrMlkegfANfK8oAMDA/B4POtsIyMjJwVBOJtKpV4VBGGXoigghMBoNM6Wl5cfstvt8WdmnEgkcOXKlXWgfr//eCKR+DwSiRzL5XKQZRmEEAUAZVkWJSUlZ+12e3x4eFjzTMAPHjzQtLS0KB0dHery2p3I5XJfRSKRGlmWIUkSCCGglEKn01FKqWgymV6vrKz0VVZWoqamRib/RKVms3nj2r6RSqXO53I5bzabBQBoNBqwLAtK6RTDMCMGgyFotVp/dDqd/uWqoLa2dntxhcNhDAwMrAO9f//+W3Nzc5disdjLoigCACwWCzQaTS+ltJ1SOujxeMYppdyaLUSMRqNaVlYGAHgqY1VVQcjfLkNDQ69KknQ1nU4XZbNZ6PX6P81m87DJZPoulUpdr62tTa/4jo2NFTAMc0Kv15v37t17eWOuLRlnMplVxzt37rwmiuK5paWlGlEUg2az+arNZvt+3759/g0/ag0EAqclSWpJJBKHeJ6HVqudEUWxkxAyvdZ3O8a6aDTanEwma+bn5wMOh6Pfbrc/3Og3OzvriUajrTzP10uStD+Xy0FVVeh0Olgslm+qq6s/7u3t1dTX18s7BaahUMjicDi4zeYnJibqFhYWPuV5vlmWZSiKAkVRBAAswzDIz8/3HTly5CQAxGIxFBYWbl9qnudX9uAToKOjow1LS0vnHz9+3CxJElRVhaqqAACWZVlKKQwGw0B1dfV5AAgEAutAt2UcDAZRUVGx+j09PX18Zmbmg1wu1yyK4qoGWJYFwzAhrVY7RCm9vnv37kmHw9FLCMkCgCAIYFl2XW5mi0Mera2tq6Acx3nC4fDXU1NTxwBAlmWwLBs3GAwhlmU7M5nM5cOHD0cIIdLaPGNjY9Tlcilr1bwl40gkQoqLi9XlwKp4PP4RIeTM8vr5jUbjWH5+/g+lpaW/EkL4NXEv+f3+g4uLi2U2my3t9Xp/IoQIW1VzHeO5uTlis9lUjuOq4vH4Z6IoHmMYZpQQ8mFxcfHdkpKSHkKIuDbm1q1b9clk8mJPT0+NLMv2bDaLTCbzB4BfAOwM2Gazqel0Ok8QhFcopdd4nv/E7XZPbwwSRdHQ19f3Nsdx56ampg7KsqxfEVleXl5mz5497xNCFp+mnydKHYvFSGFhobrFeW3p7+9/M51OX8pkMqUralYURQFA9Xo9bDbb6YaGhm/dbjd8Ph+Kioq2B15YWIDJZNpsP7M+n+8Cz/NnBEEolyQJlFKoqgpK6Yqqx3Q63RdNTU1tO7l0nmDc1dVFGhoa1GVAY1dX13vz8/MXRFEsWwFavoGiOp2uW6/XX1dVtdflcnFOp5MDgM7OTmi1WjQ2Nm4NHAgEUFVVheHhYRIOh8mpU6cUALh582ZrNBr9kuf5XQzDgBAyYzQapzUazc9VVVUD+/fv/32zhN3d3fB6vdsz5jgOVqt11XDjxo13U6nURUpphSRJI3l5eX0ajab76NGjd61W68PNkrS3t8PtduPAgQM7bibI0NAQ3G43gsFgUywWuygIgqooym9arbbD6/VOEkJWr7qysjLS1tZG7Xa74nQ61efuEkOhUOHExMSJ/v5+22bz0Wj0xffAoVBoU3tBQcFTm/LnHQQAHj16BEVRiKIoqsvl+k9eGn8BMMeiAFTierUAAAAASUVORK5CYII=" />*/
/*         <span class="sf-toolbar-value">{{ collector.querycount }}</span>*/
/*         <span class="sf-toolbar-info-piece-additional-detail">*/
/*             <span class="sf-toolbar-label">in</span>*/
/*             <span class="sf-toolbar-value">{{ '%0.2f'|format(collector.time * 1000) }}</span>*/
/*             <span class="sf-toolbar-label">ms</span>*/
/*         </span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}{% endset %}*/
/* */
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { link: profiler_url } %}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label{{ 0 == collector.querycount ? ' disabled' }}">*/
/*         <span class="icon"><img height="24" src="{{ asset('bundles/propel/images/profiler/propel.png') }}" alt="" /></span>*/
/*         <strong>Propel</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {# the panel content #}*/
/*     <style type="text/css">*/
/*     .SQLKeyword {*/
/*         color: blue;*/
/*         white-space: nowrap;*/
/*     }*/
/*     .SQLName {*/
/*         color: #464646;*/
/*         white-space: nowrap;*/
/*     }*/
/*     .SQLInfo, .SQLComment {*/
/*         color: gray;*/
/*         display: block;*/
/*         font-size: 0.9em;*/
/*         margin: 3px 0;*/
/*     }*/
/* */
/*     .SQLExplain {*/
/*        margin: 5px;*/
/*     }*/
/* */
/*     .SQLExplain .error {*/
/*         background-color: #F2DEDE;*/
/*         border-color: #EED3D7;*/
/*         color: #B94A48;*/
/*         padding: 8px 35px 8px 14px;*/
/*         font-weight: bold;*/
/*     }*/
/* */
/*     #content .SQLExplain h2 {*/
/*         font-size: 17px;*/
/*         margin-bottom: 0;*/
/*     }*/
/*     </style>*/
/* */
/*     <h2>Queries</h2>*/
/*     <table summary="Show logged queries">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>SQL queries</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% if not collector.querycount %}*/
/*             <tr><td>No queries.</td></tr>*/
/*         {% else %}*/
/*             {% for i, query in collector.queries %}*/
/*             <tr>*/
/*                 <td>*/
/*                     <a name="propel-query-{{ i }}" ></a>*/
/*                     <code>{{ query.sql|format_sql }}</code>*/
/*                     {% if app.request.query.has('query') and app.request.query.get('query') == i %}*/
/*                         <div class="SQLExplain">*/
/*                         {% render controller('PropelBundle:Panel:explain', {*/
/*                             'token': token,*/
/*                             'panel': 'propel',*/
/*                             'query': app.request.query.get('query'),*/
/*                             'connection': app.request.query.get('connection')*/
/*                         }) %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="SQLInfo">*/
/*                         Time: {{ query.time }} - Memory: {{ query.memory }} - Connection: {{ query.connection }}*/
/* */
/*                         {% if app.request.query.get('query', -1) != i %}*/
/*                             - <a href="{{ path('_profiler', {'panel': 'propel', 'token': token, 'connection': query.connection, 'query': i}) }}#propel-query-{{ i }}">Explain the query</a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% render controller('PropelBundle:Panel:configuration') %}*/
/* {% endblock %}*/
/* */
