<?php

/* UserBundle:Default:edit.html.twig */
class __TwigTemplate_5fd4e9848190d14d0c4c45cf697142b8df687bd6b7bee8d23c996b5ccde7751c extends Twig_Template
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
        $__internal_a0b3bd7e6be589e92e393c7f091cbb996319c0787d202f7d1c4d7ba3e222b9e4 = $this->env->getExtension("native_profiler");
        $__internal_a0b3bd7e6be589e92e393c7f091cbb996319c0787d202f7d1c4d7ba3e222b9e4->enter($__internal_a0b3bd7e6be589e92e393c7f091cbb996319c0787d202f7d1c4d7ba3e222b9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:edit.html.twig"));

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
            ";
        // line 29
        echo "          </ul>
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
    <div class=\"multipleEmail\">  
    <div class=\"emailSection\">      
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">Email Id</label>
      <div class=\"controls\">
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userEmails", array()), "vars", array()), "prototype", array()), "emailId", array()), 'widget');
        echo "
      </div>
    </div>
      </div>
      </div>
      <a href=\"javascript:void(0)\" onclick=\"addEmailIdForm()\"> Add Email Id</a>
      <div class=\"multipleMobile\">  
    <div class=\"mobileSection\">
    <div class=\"control-group\">
      <!-- Username -->
      <label class=\"control-label\"  for=\"username\">Mobile No</label>
      <div class=\"controls\">
        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userMobiles", array()), "vars", array()), "prototype", array()), "mobileNo", array()), 'widget');
        echo "
      </div>
    </div>
    
      </div>
       
      </div>
     <a href=\"javascript:void(0)\" onclick=\"addMobileNoForm()\"> Add Mobile No</a>
     
      
    <div class=\"control-group\">
      <!-- Username -->
      
      <div class=\"controls\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Update\"/>
      </div>
    </div>
    </fieldset>
    </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script>
    
    ";
        // line 167
        echo "    
\$(\"#users_userEmails___name___emailId\").attr(\"name\",\"users[userEmails][][emailId]\");
\$(\"#users_userMobiles___name___mobileNo\").attr(\"name\",\"users[userMobiles][][mobileNo]\");
    

function addMobileNoForm(){
    
    var formdata = \$( \".multipleMobile\" ).append('<div class=\"controls\"><input id=\"users_userMobiles___name___mobileNo\" type=\"text\" maxlength=\"100\" required=\"required\" name=\"users[userMobiles][][mobileNo]\"></input></div>');
    
}
function addEmailIdForm(){
    
    var formdata = \$( \".multipleEmail\" ).append('<div class=\"controls\"><input id=\"users_userEmails___name___emailId\" type=\"text\" maxlength=\"100\" required=\"required\" name=\"users[userEmails][][emailId]\"></input></div>');
    
}
    
</script>
  </body>
</html>


";
        // line 189
        echo "



";
        
        $__internal_a0b3bd7e6be589e92e393c7f091cbb996319c0787d202f7d1c4d7ba3e222b9e4->leave($__internal_a0b3bd7e6be589e92e393c7f091cbb996319c0787d202f7d1c4d7ba3e222b9e4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 189,  218 => 167,  211 => 136,  183 => 111,  168 => 99,  158 => 92,  152 => 89,  147 => 87,  139 => 82,  134 => 80,  126 => 75,  121 => 73,  113 => 68,  108 => 66,  100 => 61,  95 => 59,  87 => 54,  82 => 52,  74 => 47,  69 => 45,  58 => 38,  51 => 29,  34 => 12,  22 => 2,);
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
/*             {#<li role="presentation" class="active"><a href="#">Home</a></li>*/
/*             <li role="presentation"><a href="#">About</a></li>*/
/*             <li role="presentation"><a href="#">Contact</a></li>#}*/
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
/*     <div class="multipleEmail">  */
/*     <div class="emailSection">      */
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">Email Id</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.userEmails.vars.prototype.emailId) }}*/
/*       </div>*/
/*     </div>*/
/*       </div>*/
/*       </div>*/
/*       <a href="javascript:void(0)" onclick="addEmailIdForm()"> Add Email Id</a>*/
/*       <div class="multipleMobile">  */
/*     <div class="mobileSection">*/
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       <label class="control-label"  for="username">Mobile No</label>*/
/*       <div class="controls">*/
/*         {{ form_widget(form.userMobiles.vars.prototype.mobileNo) }}*/
/*       </div>*/
/*     </div>*/
/*     */
/*       </div>*/
/*        */
/*       </div>*/
/*      <a href="javascript:void(0)" onclick="addMobileNoForm()"> Add Mobile No</a>*/
/*      */
/*       */
/*     <div class="control-group">*/
/*       <!-- Username -->*/
/*       */
/*       <div class="controls">*/
/*         <input type="submit" class="btn btn-success" value="Update"/>*/
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
/* $("#users_userEmails___name___emailId").attr("name","users[userEmails][][emailId]");*/
/* $("#users_userMobiles___name___mobileNo").attr("name","users[userMobiles][][mobileNo]");*/
/*     */
/* */
/* function addMobileNoForm(){*/
/*     */
/*     var formdata = $( ".multipleMobile" ).append('<div class="controls"><input id="users_userMobiles___name___mobileNo" type="text" maxlength="100" required="required" name="users[userMobiles][][mobileNo]"></input></div>');*/
/*     */
/* }*/
/* function addEmailIdForm(){*/
/*     */
/*     var formdata = $( ".multipleEmail" ).append('<div class="controls"><input id="users_userEmails___name___emailId" type="text" maxlength="100" required="required" name="users[userEmails][][emailId]"></input></div>');*/
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
