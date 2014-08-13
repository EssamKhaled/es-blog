<?php

/* LayoutBundle:Backend:security.html.twig */
class __TwigTemplate_832472e5ae8fd6bc9ba95d196d3ac59a77d31735bf9b1dc0c4b4c6e0e23f8fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'html_tags' => array($this, 'block_html_tags'),
            'metas' => array($this, 'block_metas'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_tags' => array($this, 'block_body_tags'),
            'body' => array($this, 'block_body'),
            'security_content' => array($this, 'block_security_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "legacy Template Layout";
    }

    // line 6
    public function block_html_tags($context, array $blocks = array())
    {
        // line 7
        echo "<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<!-- BEGIN HEAD -->
";
    }

    // line 13
    public function block_metas($context, array $blocks = array())
    {
        // line 14
        echo "    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/style-metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/select2/select2_metro.css"), "html", null, true);
        echo "\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/pages/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\" />
";
    }

    // line 39
    public function block_body_tags($context, array $blocks = array())
    {
        echo "<body class=\"login\">";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        echo "    
\t<!-- BEGIN LOGO -->
\t<div class=\"logo\">
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/img/logo-big.png"), "html", null, true);
        echo "\" alt=\"\" />             
            </a>
\t\t
\t</div>
\t<!-- END LOGO -->
\t<!-- BEGIN LOGIN -->
\t<div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            ";
        // line 53
        $this->displayBlock('security_content', $context, $blocks);
        // line 54
        echo "            <!-- END LOGIN FORM -->        
            <!-- BEGIN FORGOT PASSWORD FORM -->

            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->

            <!-- END REGISTRATION FORM -->
\t</div>
\t<!-- END LOGIN -->
\t<!-- BEGIN COPYRIGHT -->
\t<div class=\"copyright\">
\t\t2013 &copy; Metronic. Admin Dashboard Template.
\t</div>
\t<!-- END COPYRIGHT -->

";
    }

    // line 53
    public function block_security_content($context, array $blocks = array())
    {
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "    <!-- BEGIN JAVASCRIPTS -->
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery-1.10.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/bootstrap/js/bootstrap-rtl.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <!--[if lt IE 9]>
    <script src=\"assets/plugins/excanvas.min.js\"></script>
    <script src=\"assets/plugins/respond.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/plugins/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elshaablegacylayout/Backend/assets/scripts/login.js"), "html", null, true);
        echo "\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- END JAVASCRIPTS -->
";
    }

    // line 99
    public function block_documentReady($context, array $blocks = array())
    {
        // line 100
        echo "    <script>
        jQuery(document).ready(function() {
          App.init();
          Login.init();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "LayoutBundle:Backend:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 100,  238 => 99,  230 => 94,  226 => 93,  220 => 90,  214 => 87,  210 => 86,  206 => 85,  202 => 84,  194 => 79,  190 => 78,  186 => 77,  181 => 75,  177 => 74,  173 => 72,  170 => 71,  165 => 53,  146 => 54,  144 => 53,  133 => 45,  129 => 44,  122 => 41,  116 => 39,  108 => 33,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 20,  56 => 14,  53 => 13,  45 => 7,  42 => 6,  36 => 4,);
    }
}
