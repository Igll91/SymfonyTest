<?php

/* BlogMainBundle:Default:index.html.twig */
class __TwigTemplate_ab3c52a4dbcb0f48e65e9bd7b483bf01f8655a88b27a2cfad37e625a0c94c861 extends Twig_Template
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
\t<title>Moj Blog</title>
\t
\t<script type=\"text/javascript\">
\t\tfunction validateForm(arg1, arg2)
\t\t{
\t\t\tvar a = document.forms[arg1][arg2].value;
\t\t\t
\t\t\tif (a == \"\")
\t\t\t{
\t\t\t  alert(\"Popunite Formu!\");
\t\t\t  return false;
\t\t\t}
\t\t}
\t</script>
\t
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
<div class=\"container\">

\t";
        // line 26
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 27
            echo "\t\t<div class=\"alert alert-info alert-dismissable\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t<p class=\"text-center\"> ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo " </p>
\t\t</div>
\t";
        }
        // line 32
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<p class=\"text-center\">
\t\t\t\t<strong> Filtriraj po kategoriji: </strong>

\t\t\t\t<select>
\t\t\t\t
\t\t\t\t\t<option value = \"-1\" >- Ništa nije odabrano -</option>
\t\t\t\t\t
\t\t\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t\t\t\t\t<option value = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getId", array(), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getName", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t</select>
\t\t
\t\t\t\t<!-- Button trigger modal -->
\t\t\t\t<button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t  +
\t\t\t\t</button>

\t\t\t\t";
        // line 52
        $context["currentPathCat"] = ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method")) . "spremiKategoriju");
        // line 53
        echo "\t\t\t\t
\t\t\t\t<!-- Modal -->
\t\t\t\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t  <div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Dodavanje nove kategorije.</h4>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t  <form role=\"form\" method=\"POST\" action=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["currentPathCat"]) ? $context["currentPathCat"] : null), "html", null, true);
        echo "\" name=\"newCategory\" onsubmit='javascript: return validateForm(\"newCategory\", \"newCategoryText\");'>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"newCategoryTextID\" name = \"newCategoryText\" maxlength=\"15\" placeholder=\"Unesite naziv nove kategorije...\">
\t\t\t\t\t\t  <div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Spremi</button>
\t\t\t\t\t\t  </div>
\t\t\t\t\t  </form>
\t\t\t\t\t  
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</p>
\t\t</div>
\t</div>
\t
\t";
        // line 79
        $context["currentPathBlog"] = ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method")) . "newBlog");
        // line 80
        echo "\t";
        $context["currentPathBlogEdit"] = ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "attributes"), "get", array(0 => "_route"), "method")) . "editBlog");
        // line 81
        echo "\t
\t<div class=\"row\">
\t\t<form role=\"form\" method=\"POST\" action=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["currentPathBlog"]) ? $context["currentPathBlog"] : null), "html", null, true);
        echo "\" name=\"newBlog\">
\t\t\t<button type=\"submit\" class=\"btn btn btn-default btn-lg btn-block\">
\t\t\t\t\tNovi Članak
\t\t\t</button>
\t\t</form>
\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">

\t\t\t";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t  <p>Naslov: <strong> ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getTitle", array(), "method"), "html", null, true);
            echo " </strong> </p>
\t\t\t\t\t\t  <footer>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</footer>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<p> <kbd>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getText", array(), "method"), "html", null, true);
            echo " </kbd> </p>
\t\t\t\t\t
\t\t\t\t\t<form role=\"form\" method=\"POST\" action=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["currentPathBlogEdit"]) ? $context["currentPathBlogEdit"] : null), "html", null, true);
            echo "\" name=\"editBlog\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getId", array(), "method"), "html", null, true);
            echo ">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn btn-danger btn-lg btn-block\">
\t\t\t\t\t\t\tUredi
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BlogMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 112,  192 => 105,  188 => 104,  183 => 102,  176 => 98,  172 => 97,  167 => 94,  163 => 93,  150 => 83,  146 => 81,  143 => 80,  141 => 79,  122 => 63,  110 => 53,  108 => 52,  99 => 45,  88 => 43,  84 => 42,  72 => 32,  66 => 29,  62 => 27,  60 => 26,  55 => 23,  52 => 22,  32 => 4,  29 => 3,);
    }
}
