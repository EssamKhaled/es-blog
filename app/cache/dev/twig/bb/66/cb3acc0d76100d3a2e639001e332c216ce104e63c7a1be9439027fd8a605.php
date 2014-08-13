<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bb66cb3acc0d76100d3a2e639001e332c216ce104e63c7a1be9439027fd8a605 extends Twig_Template
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
        echo "    <form class=\"form-vertical login-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <h3 class=\"form-title\">Login to your account</h3>
        <div class=\"alert alert-error hide\">
            <button class=\"close\" data-dismiss=\"alert\"></button>
            <span>Enter any username and password.</span>
        </div>
        ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "            <div class=\"alert alert-error\">
                <button class=\"close\" data-dismiss=\"alert\"></button>
                <span>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 17
        echo "        <div class=\"control-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
            <div class=\"controls\">
                <div class=\"input-icon left\">
                    <i class=\"icon-user\"></i>
                    <input class=\"m-wrap placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"_username\"/>
                </div>
            </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
            <div class=\"controls\">
                <div class=\"input-icon left\">
                    <i class=\"icon-lock\"></i>
                    <input class=\"m-wrap placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\"/>
                </div>
            </div>
        </div>
        <div class=\"form-actions\">
            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn green pull-left\">
                Login <i class=\"m-icon-swapright m-icon-white\"></i>
            </button>
        </div>
        <div class=\"create-account\">
            <p>
                Don't have an account yet ?&nbsp;
                <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" id=\"register-btn\" >Create an account</a>
            </p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  57 => 17,  51 => 14,  47 => 12,  45 => 11,  36 => 5,  31 => 4,  28 => 3,);
    }
}
