<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_a8d7e582d7961f0f8c74dd2a59af3316b72a8bbb8395061ef8012d15143d4e4d extends Twig_Template
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
        $__internal_6e0b82e46777e01cbbb1c07b07f571fb74a79ac8df38550f3a7e0aabe02bdcb3 = $this->env->getExtension("native_profiler");
        $__internal_6e0b82e46777e01cbbb1c07b07f571fb74a79ac8df38550f3a7e0aabe02bdcb3->enter($__internal_6e0b82e46777e01cbbb1c07b07f571fb74a79ac8df38550f3a7e0aabe02bdcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UMS</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills pull-right\">
            <li role=\"presentation\" class=\"active\"><a href=\"#\">Home</a></li>
            <li role=\"presentation\"><a href=\"#\">About</a></li>
            <li role=\"presentation\"><a href=\"#\">Contact</a></li>
          </ul>
        </nav>
        <h3 class=\"text-muted\">User List</h3>
      </div>

        <table class=\"table\">

            <thead>
                <tr>
                    <td>S. No</td>
                    <td>First Name</td>
                    <td>Last name</td>
                    <td>School</td>
                    <td>College</td>
                    <td>Blood Group</td>
                    <td>Date Of Birth</td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "schoolName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "collegeName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "bloodGroup", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "collegeName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dateOfBirth", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                    </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                
            </tbody>

        </table>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>


";
        // line 75
        echo "

";
        
        $__internal_6e0b82e46777e01cbbb1c07b07f571fb74a79ac8df38550f3a7e0aabe02bdcb3->leave($__internal_6e0b82e46777e01cbbb1c07b07f571fb74a79ac8df38550f3a7e0aabe02bdcb3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 75,  150 => 69,  138 => 59,  121 => 56,  117 => 55,  113 => 54,  109 => 53,  105 => 52,  101 => 51,  97 => 50,  93 => 49,  90 => 48,  73 => 47,  34 => 11,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>UMS</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/*     <div class="container">*/
/*       <div class="header clearfix">*/
/*         <nav>*/
/*           <ul class="nav nav-pills pull-right">*/
/*             <li role="presentation" class="active"><a href="#">Home</a></li>*/
/*             <li role="presentation"><a href="#">About</a></li>*/
/*             <li role="presentation"><a href="#">Contact</a></li>*/
/*           </ul>*/
/*         </nav>*/
/*         <h3 class="text-muted">User List</h3>*/
/*       </div>*/
/* */
/*         <table class="table">*/
/* */
/*             <thead>*/
/*                 <tr>*/
/*                     <td>S. No</td>*/
/*                     <td>First Name</td>*/
/*                     <td>Last name</td>*/
/*                     <td>School</td>*/
/*                     <td>College</td>*/
/*                     <td>Blood Group</td>*/
/*                     <td>Date Of Birth</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for user in usersList %}*/
/*                     <tr>*/
/*                         <td>{{ loop.index }} </td>*/
/*                         <td>{{ user.firstName}}</td>*/
/*                     <td>{{ user.lastName }}</td>*/
/*                     <td>{{ user.schoolName }}</td>*/
/*                     <td>{{ user.collegeName }}</td>*/
/*                     <td>{{ user.bloodGroup }}</td>*/
/*                     <td>{{ user.collegeName }}</td>*/
/*                     <td>{{ user.dateOfBirth|date("m/d/Y") }}</td>*/
/*                     </tr>*/
/*     {% endfor %}*/
/*                 */
/*             </tbody>*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*   </body>*/
/* </html>*/
/* */
/* */
/* {#{{dump(form)}}#}*/
/* */
/* */
/* */
