<?php

/* FrontendBundle::base.html.twig */
class __TwigTemplate_43e0811ce19840e52f77286205f4f7ef836a03e5aaee38b18c57a40d3e80abf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LayoutBundle:Frontend:mainLayout.html.twig");

        $this->blocks = array(
            'login_user' => array($this, 'block_login_user'),
            'category_filter' => array($this, 'block_category_filter'),
            'recent_articles' => array($this, 'block_recent_articles'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LayoutBundle:Frontend:mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_login_user($context, array $blocks = array())
    {
        echo "    
    ";
        // line 4
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            echo "       
       <a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">Admin Panel</a>
    ";
        } else {
            // line 6
            echo "       
       <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
    ";
        }
        // line 8
        echo "    
";
    }

    // line 11
    public function block_category_filter($context, array $blocks = array())
    {
        // line 12
        echo "  <div class=\"blog-tags margin-bottom-20\">
        <h2>Filter by Category</h2>
        <ul>
            ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Article:getCategories"));
        echo "
        </ul>
    </div>
";
    }

    // line 20
    public function block_recent_articles($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Article:getRecentArticles"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  65 => 15,  60 => 12,  57 => 11,  52 => 8,  47 => 7,  44 => 6,  39 => 5,  35 => 4,  30 => 3,  151 => 31,  136 => 29,  132 => 28,  130 => 27,  124 => 24,  120 => 23,  116 => 21,  98 => 19,  93 => 18,  76 => 21,  69 => 13,  62 => 11,  55 => 8,  51 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
