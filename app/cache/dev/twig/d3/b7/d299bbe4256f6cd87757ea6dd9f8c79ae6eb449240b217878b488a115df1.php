<?php

/* BlogMainBundle:Default:test.html.twig */
class __TwigTemplate_d3b7d299bbe4256f6cd87757ea6dd9f8c79ae6eb449240b217878b488a115df1 extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "BlogMainBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
