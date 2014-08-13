<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a45bc8fcc3ed2272b500c1ab7c849a26ac822ba88450b29667a0b3de338a1aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LayoutBundle:Backend:security.html.twig");

        $this->blocks = array(
            'security_content' => array($this, 'block_security_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LayoutBundle:Backend:security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_security_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <form class=\"form-vertical login-form\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\">
        
        <h3 class=\"form-title\">Create New account</h3>
        <div class=\"control-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "            
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn green pull-left\">
                Create <i class=\"m-icon-swapright m-icon-white\"></i>
            </button>
        </div>
        <div class=\"create-account\">
            <p>
                Already have an account ? &nbsp;
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" id=\"register-btn\" >Login</a>
            </p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  43 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
