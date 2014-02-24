<?php

/* BlogMainBundle:Default:editBlog.html.twig */
class __TwigTemplate_5b973f1d99dca33c04835c474998b7c6524852318b4c0c8e7f66eaf9a8dcc427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BlogMainBundle::mainView.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogMainBundle::mainView.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>Blog</title>
\t
\t<script type=\"text/javascript\">
\t\tfunction validateForm()
\t\t{
\t\t\tvar title = document.forms[\"blogForm\"][\"title\"].value;
\t\t\tvar text = document.forms[\"blogForm\"][\"blogText\"].value;
\t\t\t
\t\t\tif (title == \"\" || text == \"\")
\t\t\t{
\t\t\t  alert(\"Popunite Formu!\");
\t\t\t  return false;
\t\t\t}
\t\t}
\t\t
\t\tfunction confirmationDialog()
\t\t{
\t\t\tvar r=confirm(\"Želite li izbrisati zapis?\");
\t\t\tif (r==true)
\t\t\t{
\t\t\t\treturn true;
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\t</script>
\t
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "
<div class=\"container\">

\t";
        // line 41
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 42
            echo "\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t<p class=\"text-center\"> ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </p>
\t\t</div>
\t";
        }
        // line 47
        echo "\t
\t<form method=\"POST\" action= ";
        // line 48
        echo twig_escape_filter($this->env, ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . "/updateBlog"), "html", null, true);
        echo " class=\"form-horizontal\" role=\"form\" name=\"blogForm\" onsubmit=\"javascript: return validateForm();\">
\t\t<input type=\"hidden\" name=\"id\" value=";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getId", array(), "method"), "html", null, true);
        echo ">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"title\" class=\"col-sm-2 control-label\">Naslov</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"title\" class=\"form-control\" id=\"title\" placeholder=\"Unesite naslov...\" maxlength=\"30\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTitle", array(), "method"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t  
\t\t<div class=\"form-group\">
\t\t\t<label for=\"category\" class=\"col-sm-2 control-label\">Kategorija</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select id = \"category\" name=\"category\">\t
\t\t\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "\t\t\t\t\t\t<option value = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getId", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 63
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getId", array(), "method") == $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getCategory", array(), "method"), "getId", array(), "method"))) {
                // line 64
                echo "\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getName", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t  
\t\t<div class=\"form-group\">
\t\t\t<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Text</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<textarea class=\"form-control\" name=\"blogText\" rows=\"5\" placeholder=\"Unesite text...\" maxlength=\"500\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getText", array(), "method"), "html", null, true);
        echo "
\t\t\t\t</textarea>
\t\t\t</div>
\t\t</div>
\t  
\t  
\t\t<div class=\"row\">
\t\t\t<button type=\"submit\" class=\"btn btn btn-default btn-lg btn-block\">
\t\t\t\t\tPotvrdi
\t\t\t</button>
\t\t</div>
\t
\t</form>

\t
\t<div class=\"row\">
\t\t<form role=\"form\" method=\"POST\" action=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "\" name=\"cancel\">
\t\t\t<button type=\"submit\" class=\"btn btn btn-default btn-lg btn-block\">
\t\t\t\t\tPoništi
\t\t\t</button>
\t\t</form>
\t</div>
\t
\t<div class=\"row\">
\t\t<form role=\"form\" method=\"POST\" action=\"";
        // line 99
        echo twig_escape_filter($this->env, ((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")) . "/deleteBlog"), "html", null, true);
        echo "\" name=\"delete\" onsubmit=\"javascript: return confirmationDialog();\">
\t\t\t<input type=\"hidden\" name=\"id\" value=";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getId", array(), "method"), "html", null, true);
        echo ">
\t\t\t<button type=\"submit\" class=\"btn btn btn-default btn-lg btn-block\">
\t\t\t\t\tObriši
\t\t\t</button>
\t\t</form>
\t</div>
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "BlogMainBundle:Default:editBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 100,  175 => 99,  164 => 91,  145 => 75,  136 => 68,  127 => 66,  123 => 64,  121 => 63,  116 => 62,  112 => 61,  101 => 53,  94 => 49,  90 => 48,  87 => 47,  81 => 44,  77 => 42,  75 => 41,  70 => 38,  67 => 37,  32 => 4,  29 => 3,);
    }
}
