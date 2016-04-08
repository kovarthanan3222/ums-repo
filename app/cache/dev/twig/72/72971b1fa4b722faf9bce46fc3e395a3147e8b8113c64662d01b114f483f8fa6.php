<?php

/* UserBundle:Default:addUser.html.twig */
class __TwigTemplate_057dc27d4077b76b2ce25dc7b791358a3723c9bedd61afa8e662f7615c839fb5 extends Twig_Template
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
        $__internal_d394aa2cbd9371982c880e87fd0875ab9daaa3fa813ff1c99f01d6c615503460 = $this->env->getExtension("native_profiler");
        $__internal_d394aa2cbd9371982c880e87fd0875ab9daaa3fa813ff1c99f01d6c615503460->enter($__internal_d394aa2cbd9371982c880e87fd0875ab9daaa3fa813ff1c99f01d6c615503460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:addUser.html.twig"));

        // line 2
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
        // line 12
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
        <h3 class=\"text-muted\">Add user</h3>
      </div>

      ";
        // line 38
        echo "      <form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
          <fieldset>
    <div id=\"legend\">
      <legend class=\"\">Register</legend>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "schoolName", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "schoolName", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "collegeName", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "collegeName", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bloodGroup", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'label');
        echo "</label>
      <div class=\"controls\">
        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateOfBirth", array()), 'widget');
        echo "
      </div>
    </div>
      ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    <div class=\"duplicateForm\">  
    <div class=\"tags\">      
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">Email Id</label>
      <div class=\"controls\">
";
        // line 100
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userdetailss", array()), "vars", array()), "prototype", array()), "emailId", array()), 'widget');
        echo "
      </div>
    </div>
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">Mobile No</label>
      <div class=\"controls\">
";
        // line 108
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userdetailss", array()), "vars", array()), "prototype", array()), "mobileNo", array()), 'widget');
        echo "
      </div>
    </div>
      
      
      </div>
      </div>
      <input type=\"hidden\" id=\"indexCount\" value=\"1\">
      <a href=\"javascript:void(0)\" onclick=\"duplicateForm(indexCount.value)\"> Add Email / Mobile No</a>
      
    <div class=\"control-group\">
      <!-- Username -->
      
      <div class=\"controls\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Insert\"/>
      </div>
    </div>
    </fieldset>
    </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script>
    
    ";
        // line 164
        echo "    
    
    

function duplicateForm(index){
    
    var formdata = \$( \".tags\" ).clone().appendTo( \".duplicateForm\" );
    
    \$('.duplicateForm input[name=\"users[userdetailss][][emailId]\"]');
    
            
            var OriginalFiled = \$('.duplicateForm :input[name=\"users[userdetailss][][emailId]\"]');
    
    
    
}
    
</script>
  </body>
</html>


";
        // line 187
        echo "



";
        
        $__internal_d394aa2cbd9371982c880e87fd0875ab9daaa3fa813ff1c99f01d6c615503460->leave($__internal_d394aa2cbd9371982c880e87fd0875ab9daaa3fa813ff1c99f01d6c615503460_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 187,  216 => 164,  209 => 133,  180 => 108,  169 => 100,  159 => 92,  153 => 89,  148 => 87,  140 => 82,  135 => 80,  127 => 75,  122 => 73,  114 => 68,  109 => 66,  101 => 61,  96 => 59,  88 => 54,  83 => 52,  75 => 47,  70 => 45,  59 => 38,  34 => 12,  22 => 2,);
    }
}
/* {#{{dump(form.userdetailss)}}#}*/
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
/*         <h3 class="text-muted">Add user</h3>*/
/*       </div>*/
/* */
/*       {#<form action="" method="post" {{ form_enctype(form) }}>*/
/*           {{ form_widget(form) }}*/
/*           <input type="submit">*/
/*     </form>#}*/
/*       <form action="" method="post" {{ form_enctype(form) }}>*/
/*           <fieldset>*/
/*     <div id="legend">*/
/*       <legend class="">Register</legend>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.firstName) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.firstName) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.lastName) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.lastName) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.schoolName) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.schoolName) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.collegeName) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.collegeName) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.bloodGroup) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.bloodGroup) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.gender) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.gender) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">{{ form_label(form.dateOfBirth) }}</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.dateOfBirth) }}*/
/*       </div>*/
/*     </div>*/
/*       {{ form_widget(form._token) }}*/
/*     <div class="duplicateForm">  */
/*     <div class="tags">      */
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">Email Id</label>*/
/*       <div class="controls">*/
/* {#        {{ form_widget(form.userdetailss.emailId) }}#}*/
/*         {{ form_widget(form.userdetailss.vars.prototype.emailId) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">Mobile No</label>*/
/*       <div class="controls">*/
/* {#        {{ form_widget(form.userdetailss.emailId) }}#}*/
/*         {{ form_widget(form.userdetailss.vars.prototype.mobileNo) }}*/
/*       </div>*/
/*     </div>*/
/*       */
/*       */
/*       </div>*/
/*       </div>*/
/*       <input type="hidden" id="indexCount" value="1">*/
/*       <a href="javascript:void(0)" onclick="duplicateForm(indexCount.value)"> Add Email / Mobile No</a>*/
/*       */
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       */
/*       <div class="controls">*/
/*         <input type="submit" class="btn btn-success" value="Insert"/>*/
/*       </div>*/
/*     </div>*/
/*     </fieldset>*/
/*     </form>*/
/* */
/*     </div>*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/*     */
/*     <script>*/
/*     */
/*     {#var $collectionHolder;*/
/* */
/* // setup an "add a tag" link*/
/*     var $addTagLink = $('<a href="#" class="add_tag_link">Add Details</a>');*/
/*     */
/*     var $newLinkLi = $('<li></li>').append($addTagLink);*/
/*     */
/* */
/*     $(document).ready(function() {*/
/* */
/*     // Get the ul that holds the collection of tags*/
/*     $collectionHolder = $('div.tags');*/
/* */
/*     // add the "add a tag" anchor and li to the tags ul*/
/*     $collectionHolder.append($newLinkLi);*/
/* */
/*     // count the current form inputs we have (e.g. 2), use that as the new*/
/*     // index when inserting a new item (e.g. 2)*/
/*     $collectionHolder.data('index', $collectionHolder.find(':input').length);*/
/*     $addTagLink.on('click', function(e) {*/
/*         // prevent the link from creating a "#" on the URL*/
/*         e.preventDefault();*/
/* */
/*         // add a new tag form (see next code block)*/
/*         addTagForm($collectionHolder, $newLinkLi);*/
/*     });*/
/* });#}*/
/*     */
/*     */
/*     */
/* */
/* function duplicateForm(index){*/
/*     */
/*     var formdata = $( ".tags" ).clone().appendTo( ".duplicateForm" );*/
/*     */
/*     $('.duplicateForm input[name="users[userdetailss][][emailId]"]');*/
/*     */
/*             */
/*             var OriginalFiled = $('.duplicateForm :input[name="users[userdetailss][][emailId]"]');*/
/*     */
/*     */
/*     */
/* }*/
/*     */
/* </script>*/
/*   </body>*/
/* </html>*/
/* */
/* */
/* {#{{dump(form)}}#}*/
/* */
/* */
/* */
/* */
/* */
