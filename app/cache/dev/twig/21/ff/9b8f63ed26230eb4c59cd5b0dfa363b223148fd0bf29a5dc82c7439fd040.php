<?php

/* FrontendBundle:Article:recentArticles.html.twig */
class __TwigTemplate_21ff9b8f63ed26230eb4c59cd5b0dfa363b223148fd0bf29a5dc82c7439fd040 extends Twig_Template
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
        echo "<h2>Recent News</h2>
<div class=\"recent-news margin-bottom-10\">

    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            echo "        
        <div class=\"row-fluid margin-bottom-10\">
            <div class=\"span3\">
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "html", null, true);
            echo "\" alt=\"\">                        
            </div>
            <div class=\"span9 recent-news-inner\">
                <h3><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_view", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
            echo "</a></h3>
                <p>";
            // line 12
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), 0, 50) . "..."), "html", null, true);
            echo "</p>
            </div>                        
        </div>    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Article:recentArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  46 => 12,  40 => 11,  33 => 8,  24 => 4,  23 => 2,  19 => 1,  420 => 271,  417 => 270,  410 => 266,  406 => 265,  400 => 262,  395 => 260,  391 => 259,  387 => 258,  383 => 257,  379 => 256,  375 => 255,  368 => 252,  363 => 114,  358 => 113,  353 => 107,  348 => 65,  345 => 64,  207 => 115,  204 => 114,  202 => 113,  195 => 108,  193 => 107,  149 => 64,  144 => 62,  126 => 47,  113 => 38,  106 => 33,  101 => 31,  97 => 30,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  70 => 23,  67 => 22,  61 => 20,  50 => 13,  41 => 6,  38 => 5,  73 => 24,  65 => 15,  60 => 12,  57 => 11,  52 => 8,  47 => 7,  44 => 6,  39 => 5,  35 => 4,  30 => 3,  151 => 67,  136 => 29,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 21,  98 => 19,  93 => 29,  76 => 21,  69 => 13,  62 => 11,  55 => 8,  51 => 6,  34 => 5,  31 => 4,  28 => 5,);
    }
}
