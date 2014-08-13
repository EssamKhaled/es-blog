<?php

/* FrontendBundle:Article:categoryFilter.html.twig */
class __TwigTemplate_40579506e421d423fb4e68ad90c3a7102e568ab78468620f1342143a55b2896a extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filter_category", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-tags\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Article:categoryFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,  96 => 10,  90 => 9,  79 => 5,  58 => 12,  42 => 6,  37 => 5,  32 => 3,  27 => 1,  420 => 271,  417 => 270,  410 => 266,  406 => 265,  400 => 262,  395 => 260,  391 => 259,  387 => 258,  383 => 257,  379 => 256,  375 => 255,  368 => 252,  363 => 114,  358 => 113,  353 => 107,  348 => 65,  345 => 64,  207 => 115,  204 => 114,  202 => 113,  195 => 108,  193 => 107,  149 => 64,  144 => 62,  126 => 47,  113 => 38,  106 => 12,  101 => 11,  97 => 30,  89 => 28,  85 => 6,  81 => 26,  77 => 25,  70 => 23,  67 => 2,  61 => 13,  50 => 9,  41 => 6,  38 => 5,  73 => 4,  65 => 15,  60 => 12,  57 => 11,  52 => 10,  47 => 7,  44 => 7,  39 => 5,  35 => 4,  30 => 2,  151 => 67,  136 => 29,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 21,  98 => 19,  93 => 29,  76 => 21,  69 => 13,  62 => 11,  55 => 11,  51 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
