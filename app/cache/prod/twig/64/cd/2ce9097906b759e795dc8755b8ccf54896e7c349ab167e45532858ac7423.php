<?php

/* BlogMainBundle::mainView.html.twig */
class __TwigTemplate_64cd2ce9097906b759e795dc8755b8ccf54896e7c349ab167e45532858ac7423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

";
        // line 12
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3108fb8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3108fb8_0") : $this->env->getExtension('assets')->getAssetUrl("js/3108fb8_jquery-2.1.0.min_1.js");
            // line 13
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "3108fb8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3108fb8") : $this->env->getExtension('assets')->getAssetUrl("js/3108fb8.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 15
        echo "
\t";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f5c20a7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5c20a7_0") : $this->env->getExtension('assets')->getAssetUrl("css/f5c20a7_part_1_bootstrap_1.css");
            // line 17
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "f5c20a7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5c20a7") : $this->env->getExtension('assets')->getAssetUrl("css/f5c20a7.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
\t";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "13ed44b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13ed44b_0") : $this->env->getExtension('assets')->getAssetUrl("js/13ed44b_part_1_bootstrap_1.js");
            // line 21
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "13ed44b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_13ed44b") : $this->env->getExtension('assets')->getAssetUrl("js/13ed44b.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 23
        echo "\t
\t
\t<div class=\"jumbotron\">\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-6 col-md-4\">
\t\t\t\t\t<!--Sidebar content-->
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t  <h1>Dobrodošli <small>... na Moj Blog!</small></h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-8\">
\t\t\t\t\t<!--Body content-->
\t\t\t\t\t";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7b55b1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b55b1_0") : $this->env->getExtension('assets')->getAssetUrl("images/e7b55b1_blog_1.png");
            // line 37
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Blog icon\" class=\"img-rounded img-responsive\"/>
\t\t\t\t\t";
        } else {
            // asset "e7b55b1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b55b1") : $this->env->getExtension('assets')->getAssetUrl("images/e7b55b1.png");
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Blog icon\" class=\"img-rounded img-responsive\"/>
\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 39
        echo "\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t <div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t\t<blockquote class=\"blockquote-reverse\">
\t\t\t\t\t  <p>Carpe diem!.</p>
\t\t\t\t\t  <footer>Quintus Horatius <cite title=\"Source Title\">Flaccus</cite></footer>
\t\t\t\t\t</blockquote>
\t\t\t\t </div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 52
        $this->displayBlock('head', $context, $blocks);
        // line 54
        echo "\t
\t";
        // line 55
        $this->displayBlock('content', $context, $blocks);
    }

    // line 52
    public function block_head($context, array $blocks = array())
    {
        // line 53
        echo "\t";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        // line 56
        echo "\t";
    }

    public function getTemplateName()
    {
        return "BlogMainBundle::mainView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 56,  139 => 55,  136 => 54,  134 => 52,  119 => 39,  105 => 37,  101 => 36,  86 => 23,  68 => 20,  65 => 19,  51 => 17,  47 => 16,  44 => 15,  30 => 13,  25 => 12,  21 => 1,  205 => 112,  192 => 105,  188 => 104,  183 => 102,  176 => 98,  172 => 97,  167 => 94,  163 => 93,  150 => 55,  146 => 53,  143 => 52,  141 => 79,  122 => 63,  110 => 53,  108 => 52,  99 => 45,  88 => 43,  84 => 42,  72 => 21,  66 => 29,  62 => 27,  60 => 26,  55 => 23,  52 => 22,  32 => 4,  29 => 3,);
    }
}
