<?php

/* LayoutBundle:Frontend:mainLayout.html.twig */
class __TwigTemplate_7ee5dea12e352612e7f110dbf5f6a1ec5ec780f2ef0482075f5ee1c9bfa7ee8a extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'login_user' => array($this, 'block_login_user'),
            'articles' => array($this, 'block_articles'),
            'category_filter' => array($this, 'block_category_filter'),
            'recent_articles' => array($this, 'block_recent_articles'),
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

    // line 5
    public function block_html_tags($context, array $blocks = array())
    {
        // line 6
        echo "<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<!-- BEGIN HEAD -->

";
    }

    // line 13
    public function block_metas($context, array $blocks = array())
    {
        echo "  
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />  
";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo " ES - BloG ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">    
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">    
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/css/style-metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/fancybox/source/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/css/themes/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\" />
";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        echo "   

    <!-- BEGIN HEADER -->
    <div class=\"front-header\">
        <div class=\"container\">
            <div class=\"navbar\">
                <div class=\"navbar-inner\">
                    <!-- BEGIN LOGO (you can use logo image instead of text)-->
                    <a class=\"brand logo-v1\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/img/logo_blue.png"), "html", null, true);
        echo "\" id=\"logoimg\" alt=\"\">
                    </a>
                    <!-- END LOGO -->

                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"nav-collapse collapse\">
                        <ul class=\"nav\">                
                            <li class=\"active\"><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Blog</a></li>                                                     
                            <li>
                                ";
        // line 64
        $this->displayBlock('login_user', $context, $blocks);
        // line 67
        echo "                            </li>
                        
                        </ul>
                                               
                    </div>
                    <!-- BEGIN TOP NAVIGATION MENU -->
                </div>
            </div>
        </div>        
    </div>
    <!-- END HEADER -->

    <!-- BEGIN BREADCRUMBS -->   
    <div class=\"row-fluid breadcrumbs margin-bottom-40\">
        <div class=\"container\">
            <div class=\"span4\">
                <h1>Blog Page</h1>
            </div>
            <div class=\"span8\">
             
            </div>
        </div>
    </div>
    <!-- END BREADCRUMBS -->

    <!-- BEGIN CONTAINER -->   
    <div class=\"container min-hight\">
        <!-- BEGIN BLOG -->
        <div class=\"row-fluid\">
            <!-- BEGIN LEFT SIDEBAR -->            
            ";
        // line 97
        $this->displayBlock('articles', $context, $blocks);
        // line 98
        echo "            <!-- END LEFT SIDEBAR -->

            <!-- BEGIN RIGHT SIDEBAR -->            
            <div class=\"span3 blog-sidebar\">
                
                ";
        // line 103
        $this->displayBlock('category_filter', $context, $blocks);
        // line 104
        echo "                ";
        $this->displayBlock('recent_articles', $context, $blocks);
        // line 105
        echo "                
                                    

           


            </div>
            <!-- END RIGHT SIDEBAR -->            
        </div>
        <!-- END BEGIN BLOG -->
    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <div class=\"front-footer\">
        <div class=\"container\">
            <div class=\"row-fluid\">
                <div class=\"span4 space-mobile\">
                    <!-- BEGIN ABOUT -->                    
                    <h2>About</h2>
                    <p class=\"margin-bottom-30\">Vivamus imperdiet felis consectetur onec eget orci adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                    <div class=\"clearfix\"></div>                    
                    <!-- END ABOUT -->          

                                  
                </div>
                <div class=\"span4 space-mobile\">
                    <!-- BEGIN CONTACTS -->                                    
                    <h2>Contact Us</h2>
                    <address class=\"margin-bottom-40\">
                        Loop, Inc. <br />
                        795 Park Ave, Suite 120 <br />
                        San Francisco, CA 94107 <br />
                        P: (234) 145-1810 <br />
                        Email: <a href=\"mailto:info@keenthemes.com\">info@keenthemes.com</a>                        
                    </address>
                    <!-- END CONTACTS -->                                    

                    <!-- BEGIN SUBSCRIBE -->                                    
                    <h2>Monthly Newsletter</h2>  
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form action=\"#\" class=\"form-search\">
                        <div class=\"input-append\">
                            <input style=\"background:#fff;\" class=\"m-wrap\" type=\"text\"><button class=\"btn theme-btn\" type=\"button\">SUBSCRIBE</button>
                        </div>
                    </form>
                    <!-- END SUBSCRIBE -->                                    
                </div>
                <div class=\"span4\">
                    <!-- BEGIN TWITTER BLOCK -->                                                    
                    <h2>Latest Tweets</h2>
                    <dl class=\"dl-horizontal f-twitter\">
                        <dt><i class=\"icon-twitter\"></i></dt>
                        <dd>
                            <a href=\"#\">@keenthemes</a>
                            Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                            <span>3 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class=\"dl-horizontal f-twitter\">
                        <dt><i class=\"icon-twitter\"></i></dt>
                        <dd>
                            <a href=\"#\">@keenthemes</a>
                            Sequat ipsum dolor onec eget orci fermentum condimentum lorem sit consectetur adipiscing
                            <span>8 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class=\"dl-horizontal f-twitter\">
                        <dt><i class=\"icon-twitter\"></i></dt>
                        <dd>
                            <a href=\"#\">@keenthemes</a>
                            Remonde sequat ipsum dolor lorem sit consectetur adipiscing
                            <span>12 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class=\"dl-horizontal f-twitter\">
                        <dt><i class=\"icon-twitter\"></i></dt>
                        <dd>
                            <a href=\"#\">@keenthemes</a>
                            Pilsum dolor lorem sit consectetur adipiscing orem sequat
                            <span>16 min ago</span>
                        </dd>
                    </dl>                    
                    <!-- END TWITTER BLOCK -->                                                                        
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN COPYRIGHT -->
    <div class=\"front-copyright\">
        <div class=\"container\">
            <div class=\"row-fluid\">
                <div class=\"span8\">
                    <p>
                        <span class=\"margin-right-10\">2013 © Metronic. ALL Rights Reserved.</span> 
                        <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Terms of Service</a>
                    </p>
                </div>
                <div class=\"span4\">
                    <ul class=\"social-footer\">
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-skype\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-github\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-dropbox\"></i></a></li>
                    </ul>                
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    ";
    }

    // line 64
    public function block_login_user($context, array $blocks = array())
    {
        // line 65
        echo "                                    <a href=\"\">Login</a>
                                ";
    }

    // line 97
    public function block_articles($context, array $blocks = array())
    {
    }

    // line 103
    public function block_category_filter($context, array $blocks = array())
    {
    }

    // line 104
    public function block_recent_articles($context, array $blocks = array())
    {
    }

    // line 226
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/jquery-1.10.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/hover-dropdown.js"), "html", null, true);
        echo "\"></script> 
    <!--[if lt IE 9]>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>  
    <![endif]-->   
    <!-- END CORE PLUGINS -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/scripts/index.js"), "html", null, true);
        echo "\"></script>      
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/scripts/app.js"), "html", null, true);
        echo "\"></script>          
    <!-- END JAVASCRIPTS --> 
";
    }

    // line 244
    public function block_documentReady($context, array $blocks = array())
    {
        // line 245
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            App.init();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "LayoutBundle:Frontend:mainLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 245,  394 => 244,  387 => 240,  383 => 239,  377 => 236,  372 => 234,  368 => 233,  364 => 232,  360 => 231,  356 => 230,  352 => 229,  345 => 226,  340 => 104,  335 => 103,  330 => 97,  325 => 65,  322 => 64,  200 => 105,  197 => 104,  195 => 103,  188 => 98,  186 => 97,  154 => 67,  152 => 64,  147 => 62,  129 => 47,  125 => 46,  113 => 38,  106 => 33,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  73 => 24,  70 => 23,  67 => 22,  61 => 20,  50 => 13,  41 => 6,  38 => 5,);
    }
}
