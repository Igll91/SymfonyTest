<?php

/* BlogMainBundle:Default:error.html.twig */
class __TwigTemplate_d9c7a7160b798e93a7f20d0fc3b6f1a566a9bbb463f62be45de5a946ec924fff extends Twig_Template
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
\t<title>Error</title>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"jumbotron\">
\t\t<div class=\"alert alert-danger\">
\t\t\t<p class=\"text-center\"> ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo " </p>
\t\t</div>
\t\t
\t\t<form role=\"form\" method=\"GET\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "\" name=\"newCategory\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Povratak</button>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "BlogMainBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  45 => 11,  41 => 9,  38 => 8,  32 => 4,  29 => 3,);
    }
}
