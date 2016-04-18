<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_11721d2e9a0355136a8ea6cacf3f5c6a9f5b3256151c01d598f22642d24d8bca extends Twig_Template
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
        $__internal_48ed84f9f9d6ac85b2e358fc8aae428488f8e7915d7f5036d1e9e99cff96a1b7 = $this->env->getExtension("native_profiler");
        $__internal_48ed84f9f9d6ac85b2e358fc8aae428488f8e7915d7f5036d1e9e99cff96a1b7->enter($__internal_48ed84f9f9d6ac85b2e358fc8aae428488f8e7915d7f5036d1e9e99cff96a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

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
    <style>
        
        .active{
            \tbackground-color: #aaa;
        }
    </style>
  </head>
  <body>
    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills pull-right\">
            ";
        // line 34
        echo "          </ul>
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
\t\t    <td>Gender</td>
                    <td>Date Of Birth</td>
                    <td>Edit</td>
                    <td>View</td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 56
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
            // line 57
            echo "                    <tr>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) + (3 * ((isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")) - 1))), "html", null, true);
            echo " </td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "schoolName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "collegeName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "bloodGroup", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "gender", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dateOfBirth", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_editpage", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Edit</a></td>
                    <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_viewpage", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">View</a></td>
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
        // line 71
        echo "    
    
                
            </tbody>
            
        </table>
";
        // line 78
        echo "    <a ";
        if (((isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")) == 1)) {
            echo " class=\"active\" ";
        }
        echo " href=\"";
        echo $this->env->getExtension('routing')->getPath("user_listpage", array("pageId" => 1));
        echo "\">First|</a>
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")), "getLinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 80
            echo "        <a ";
            if (($context["page"] == (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")))) {
                echo " class=\"active\" ";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_listpage", array("pageId" => $context["page"])), "html", null, true);
            echo "\">Page";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "|</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        <a ";
        if (((isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")) == $this->getAttribute((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")), "lastPage", array()))) {
            echo " class=\"active\" ";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_listpage", array("pageId" => $this->getAttribute((isset($context["usersList"]) ? $context["usersList"] : $this->getContext($context, "usersList")), "lastPage", array()))), "html", null, true);
        echo "\">Last</a>
    </div>
        

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>


";
        // line 95
        echo "

";
        
        $__internal_48ed84f9f9d6ac85b2e358fc8aae428488f8e7915d7f5036d1e9e99cff96a1b7->leave($__internal_48ed84f9f9d6ac85b2e358fc8aae428488f8e7915d7f5036d1e9e99cff96a1b7_prof);

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
        return array (  214 => 95,  206 => 89,  191 => 82,  176 => 80,  172 => 79,  163 => 78,  155 => 71,  137 => 67,  133 => 66,  129 => 65,  125 => 64,  121 => 63,  117 => 62,  113 => 61,  109 => 60,  105 => 59,  101 => 58,  98 => 57,  81 => 56,  57 => 34,  34 => 11,  22 => 1,);
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
/*     <style>*/
/*         */
/*         .active{*/
/*             	background-color: #aaa;*/
/*         }*/
/*     </style>*/
/*   </head>*/
/*   <body>*/
/*     <div class="container">*/
/*       <div class="header clearfix">*/
/*         <nav>*/
/*           <ul class="nav nav-pills pull-right">*/
/*             {#<li role="presentation" class="active"><a href="#">Home</a></li>*/
/*             <li role="presentation"><a href="#">About</a></li>*/
/*             <li role="presentation"><a href="#">Contact</a></li>#}*/
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
/* 		    <td>Gender</td>*/
/*                     <td>Date Of Birth</td>*/
/*                     <td>Edit</td>*/
/*                     <td>View</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for user in usersList %}*/
/*                     <tr>*/
/*                         <td>{{ (loop.index) + (3 *(pageId - 1)) }} </td>*/
/*                         <td>{{ user.firstName}}</td>*/
/*                     <td>{{ user.lastName }}</td>*/
/*                     <td>{{ user.schoolName }}</td>*/
/*                     <td>{{ user.collegeName }}</td>*/
/*                     <td>{{ user.bloodGroup }}</td>*/
/*                     <td>{{ user.gender }}</td>*/
/*                     <td>{{ user.dateOfBirth|date("m/d/Y") }}</td>*/
/*                     <td><a href="{{ path('user_editpage',{'id':user.id}) }}">Edit</a></td>*/
/*                     <td><a href="{{ path('user_viewpage',{'id':user.id}) }}">View</a></td>*/
/*                     </tr>*/
/*                     */
/*     {% endfor %}*/
/*     */
/*     */
/*                 */
/*             </tbody>*/
/*             */
/*         </table>*/
/* {#    {{dump(usersList)}}#}*/
/*     <a {% if pageId == 1 %} class="active" {% endif %} href="{{ path('user_listpage',{'pageId':1}) }}">First|</a>*/
/*     {% for page in usersList.getLinks  %}*/
/*         <a {% if page == pageId %} class="active" {% endif %} href="{{ path('user_listpage',{'pageId':page}) }}">Page{{ page }}|</a>*/
/*         {% endfor %}*/
/*         <a {% if pageId == usersList.lastPage %} class="active" {% endif %} href="{{ path('user_listpage',{'pageId':usersList.lastPage}) }}">Last</a>*/
/*     </div>*/
/*         */
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
