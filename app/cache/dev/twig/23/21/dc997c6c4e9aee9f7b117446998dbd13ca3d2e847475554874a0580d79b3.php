<?php

/* LayoutBundle:Backend:mainLayout.html.twig */
class __TwigTemplate_2321dc997c6c4e9aee9f7b117446998dbd13ca3d2e847475554874a0580d79b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'html_tags' => array($this, 'block_html_tags'),
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
            'body_tags' => array($this, 'block_body_tags'),
            'body' => array($this, 'block_body'),
            'main_menu' => array($this, 'block_main_menu'),
            'page_title' => array($this, 'block_page_title'),
            'bread_crumbs' => array($this, 'block_bread_crumbs'),
            'main_content' => array($this, 'block_main_content'),
            'footer_text' => array($this, 'block_footer_text'),
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

    // line 6
    public function block_html_tags($context, array $blocks = array())
    {
        // line 7
        echo "<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
";
    }

    // line 12
    public function block_metas($context, array $blocks = array())
    {
        // line 13
        echo "    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "ES - BloG ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/style-metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-tag/css/bootstrap-tag.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-wysihtml5bootstrap-wysihtml5.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />
    <!-- BEGIN:File Upload Plugin CSS files-->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
    <!-- END:File Upload Plugin CSS files-->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/css/pages/inbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "    <!-- BEGIN JAVASCRIPTS -->
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-1.10.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap/js/bootstrap-rtl.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <!--[if lt IE 9]>
    <script src=\"assets/plugins/excanvas.min.js\"></script>
    <script src=\"assets/plugins/respond.min.js\"></script>
    <![endif]-->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-tag/js/bootstrap-tag.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <!-- BEGIN:File Upload Plugin JS files-->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/vendor/tmpl.min.js"), "html", null, true);
        echo "\"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/vendor/load-image.min.js"), "html", null, true);
        echo "\"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <!-- The basic File Upload plugin -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <!-- The File Upload file processing plugin -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/jquery.fileupload-fp.js"), "html", null, true);
        echo "\"></script>
    <!-- The File Upload user interface plugin -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"), "html", null, true);
        echo "\"></script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
    <!--[if gte IE 8]><script src=\"assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js\"></script><![endif]-->
    <!-- END:File Upload Plugin JS files-->
    <!-- END PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/scripts/app.js"), "html", null, true);
        echo "\"></script>
    <!-- END JAVASCRIPTS -->
";
    }

    // line 92
    public function block_documentReady($context, array $blocks = array())
    {
        // line 93
        echo "    <script>
        jQuery(document).ready(function() {
           App.init();
        });
    </script>
";
    }

    // line 100
    public function block_body_tags($context, array $blocks = array())
    {
        echo "<body class=\"page-header-fixed\">";
    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
        // line 103
        echo "    <!-- BEGIN HEADER -->
    <div class=\"header navbar navbar-inverse navbar-fixed-top\">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <!-- BEGIN LOGO -->
                <a class=\"brand\" href=\"index.html\">
                    <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" />
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href=\"javascript:;\" class=\"btn-navbar collapsed\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/img/menu-toggler.png"), "html", null, true);
        echo "\" alt=\"\" />
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class=\"nav pull-left\">
                    <li class=\"dropdown user\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <span class=\"username\">Admin</span>
                            <i class=\"icon-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><i class=\"icon-tasks\"></i> ES-BloG </a></li>
                                    <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-key\"></i> Log Out</a></li>
                            </ul>
                    </li>                    
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class=\"page-container row-fluid\">
        <!-- BEGIN SIDEBAR -->
        <div class=\"page-sidebar nav-collapse collapse\">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class=\"page-sidebar-menu\">

                ";
        // line 145
        $this->displayBlock('main_menu', $context, $blocks);
        // line 153
        echo "            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN PAGE -->
        <div class=\"page-content\">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id=\"portlet-config\" class=\"modal hide\">
                <div class=\"modal-header\">
                    <button data-dismiss=\"modal\" class=\"close\" type=\"button\"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class=\"modal-body\">
                    Widget Settings form goes here
                </div>
            </div>
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE CONTAINER-->
            <div class=\"container-fluid\">
                <!-- BEGIN PAGE HEADER-->
                <div class=\"row-fluid\">
                    <div class=\"span12\">

                        ";
        // line 176
        $this->displayBlock('page_title', $context, $blocks);
        // line 179
        echo "                        ";
        $this->displayBlock('bread_crumbs', $context, $blocks);
        // line 182
        echo "                    </div>
                </div>
                ";
        // line 184
        $this->displayBlock('main_content', $context, $blocks);
        // line 189
        echo "            </div>
            <!-- END PAGE CONTAINER-->
        </div>
        <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class=\"footer\">
        <div class=\"footer-inner\">
            ";
        // line 198
        $this->displayBlock('footer_text', $context, $blocks);
        // line 199
        echo "        </div>
        <div class=\"footer-tools\">
            <span class=\"go-top\">
                <i class=\"icon-angle-up\"></i>
            </span>
        </div>
    </div>
    <!-- END FOOTER -->
";
    }

    // line 145
    public function block_main_menu($context, array $blocks = array())
    {
        // line 146
        echo "                <li class=\"start\">
                    <a href=\"index.html\">
                        <i class=\"icon-dashboard\"></i>
                        <span class=\"title\">Dashboard</span>
                    </a>
                </li>
                ";
    }

    // line 176
    public function block_page_title($context, array $blocks = array())
    {
        // line 177
        echo "                        
                        ";
    }

    // line 179
    public function block_bread_crumbs($context, array $blocks = array())
    {
        // line 180
        echo "
                        ";
    }

    // line 184
    public function block_main_content($context, array $blocks = array())
    {
        // line 185
        echo "                    <div class=\"row-fluid\">
                        Demo
                    </div>
                ";
    }

    // line 198
    public function block_footer_text($context, array $blocks = array())
    {
        echo " 2013 &copy; Metronic by keenthemes. ";
    }

    public function getTemplateName()
    {
        return "LayoutBundle:Backend:mainLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 198,  426 => 185,  423 => 184,  418 => 180,  415 => 179,  410 => 177,  407 => 176,  397 => 146,  394 => 145,  382 => 199,  380 => 198,  369 => 189,  367 => 184,  363 => 182,  360 => 179,  358 => 176,  333 => 153,  331 => 145,  310 => 127,  306 => 126,  292 => 115,  284 => 110,  275 => 103,  272 => 102,  266 => 100,  257 => 93,  254 => 92,  247 => 88,  239 => 83,  234 => 81,  229 => 79,  224 => 77,  219 => 75,  214 => 73,  209 => 71,  204 => 69,  199 => 67,  195 => 66,  191 => 65,  187 => 64,  180 => 60,  176 => 59,  172 => 58,  168 => 57,  160 => 52,  156 => 51,  152 => 50,  147 => 48,  143 => 47,  139 => 45,  136 => 44,  129 => 40,  124 => 38,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  70 => 22,  67 => 21,  61 => 19,  53 => 13,  50 => 12,  43 => 7,  40 => 6,);
    }
}
