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
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<p class=\"text-center\">
\t\t\t\t<strong> Filtriraj po kategoriji: </strong>

\t\t\t\t<select>
\t\t\t\t
\t\t\t\t\t<option value = \"-1\" >- Ništa nije odabrano -</option>
\t\t\t\t\t
\t\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "\t\t\t\t\t\t<option value = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getId", array(), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getName", array(), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</select>
\t\t
\t\t\t\t<!-- Button trigger modal -->
\t\t\t\t<button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t  +
\t\t\t\t</button>

\t\t\t\t";
        // line 30
        $context["currentPath"] = ($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method")) . "spremiKategoriju");
        // line 31
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
        // line 41
        echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
        echo "\" name=\"newCategory\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"newCategoryText\" name = \"newCategoryText\" placeholder=\"Unesite naziv nove kategorije...\">
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
\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">

\t\t\t";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t  <p>Naslov: <strong> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getTitle", array(), "method"), "html", null, true);
            echo " </strong> </p>
\t\t\t\t\t\t  <footer>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getCategory", array(), "method"), "getName", array(), "method"), "html", null, true);
            echo "</footer>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<p> <kbd>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getText", array(), "method"), "html", null, true);
            echo " </kbd> </p>
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"btn btn btn-danger btn-lg btn-block\">
\t\t\t\t\tUredi
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        return array (  147 => 76,  134 => 69,  127 => 65,  123 => 64,  118 => 61,  114 => 60,  92 => 41,  80 => 31,  78 => 30,  69 => 23,  58 => 21,  54 => 20,  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
