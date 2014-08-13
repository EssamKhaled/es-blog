<?php

/* ::base.html.twig */
class __TwigTemplate_da1613d26b95e4c28630f5ebf7b2bb4b328f40c1510627a5814025932c604755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tags' => array($this, 'block_html_tags'),
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_tags' => array($this, 'block_body_tags'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('html_tags', $context, $blocks);
        // line 3
        echo "    <head>
        ";
        // line 4
        $this->displayBlock('metas', $context, $blocks);
        // line 5
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    ";
        // line 9
        $this->displayBlock('body_tags', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('documentReady', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 2
    public function block_html_tags($context, array $blocks = array())
    {
        echo "<html>";
    }

    // line 4
    public function block_metas($context, array $blocks = array())
    {
        echo "<meta charset=\"UTF-8\" />";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body_tags($context, array $blocks = array())
    {
        echo "<body>";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_documentReady($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  90 => 9,  79 => 5,  58 => 12,  42 => 6,  37 => 5,  32 => 3,  27 => 1,  420 => 271,  417 => 270,  410 => 266,  406 => 265,  400 => 262,  395 => 260,  391 => 259,  387 => 258,  383 => 257,  379 => 256,  375 => 255,  368 => 252,  363 => 114,  358 => 113,  353 => 107,  348 => 65,  345 => 64,  207 => 115,  204 => 114,  202 => 113,  195 => 108,  193 => 107,  149 => 64,  144 => 62,  126 => 47,  113 => 38,  106 => 12,  101 => 11,  97 => 30,  89 => 28,  85 => 6,  81 => 26,  77 => 25,  70 => 23,  67 => 2,  61 => 13,  50 => 9,  41 => 6,  38 => 5,  73 => 4,  65 => 15,  60 => 12,  57 => 11,  52 => 10,  47 => 7,  44 => 7,  39 => 5,  35 => 4,  30 => 2,  151 => 67,  136 => 29,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 21,  98 => 19,  93 => 29,  76 => 21,  69 => 13,  62 => 11,  55 => 11,  51 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
