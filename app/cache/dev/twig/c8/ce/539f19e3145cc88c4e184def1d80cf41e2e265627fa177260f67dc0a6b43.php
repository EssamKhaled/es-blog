<?php

/* BackendBundle::base.html.twig */
class __TwigTemplate_c8ce539f19e3145cc88c4e184def1d80cf41e2e265627fa177260f67dc0a6b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LayoutBundle:Backend:mainLayout.html.twig");

        $this->blocks = array(
            'main_menu' => array($this, 'block_main_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LayoutBundle:Backend:mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_menu($context, array $blocks = array())
    {
        // line 4
        echo "<li class=\"start\">
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">
        <i class=\"icon-dashboard\"></i>
        <span class=\"title\">Dashboard</span>
    </a>
</li>
<li>
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("backend_category");
        echo "\">
        <i class=\"icon-list\"></i>
        <span class=\"title\">Category</span>
    </a>
</li>
<li>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("backend_post");
        echo "\">
        <i class=\"icon-list\"></i>
        <span class=\"title\">Post</span>
    </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  43 => 11,  34 => 5,  31 => 4,  28 => 3,);
    }
}
