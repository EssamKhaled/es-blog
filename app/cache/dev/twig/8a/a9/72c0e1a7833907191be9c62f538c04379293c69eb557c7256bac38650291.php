<?php

/* FrontendBundle:Article:view.html.twig */
class __TwigTemplate_8aa972c0e1a7833907191be9c62f538c04379293c69eb557c7256bac38650291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::base.html.twig");

        $this->blocks = array(
            'articles' => array($this, 'block_articles'),
            'documentReady' => array($this, 'block_documentReady'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_articles($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span9 blog-item margin-bottom-40\">
    <div class=\"blog-item-img\">
        <!-- BEGIN CAROUSEL -->            
        <div class=\"front-carousel\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/articles/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "html", null, true);
        echo "\" alt=\"\">                     
        </div>
        <!-- END CAROUSEL -->             
    </div>
    <h2><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</a></h2>
    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
        echo "</p>
    
    <ul class=\"blog-info\">
        <li><i class=\"icon-user\"></i> By admin</li>
        <li><i class=\"icon-calendar\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created"), "d-M-Y"), "html", null, true);
        echo " </li>
        
        <li>
            <i class=\"icon-tags\"></i>
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "
                ";
            // line 23
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                echo ", &nbsp;";
            }
            echo "                                
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            
        </li>
    </ul>
    
    <ol id=\"update\">
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 30
            echo "            ";
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "approved") == "YES")) {
                // line 31
                echo "            <li>
                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                    <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/img/people/img1-small.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"media-object\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "commentAuthor"), "html", null, true);
                echo " <span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
                echo " </span></h4>
                        <p>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "commentContent"), "html", null, true);
                echo "</p>
                    </div>
                </div>
                <hr>
            </li>
            ";
            }
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </ol>
    <div id=\"flash\"></div>
    
    
    <div class=\"post-comment\">
        <h3>Leave a Comment</h3>
        <form  action=\"#\" method=\"post\" id=\"commentForm\">
            <label>Name</label>
            <input type=\"text\"  id=\"name\" class=\"span7 m-wrap\">
            <label>Email <span class=\"color-red\">*</span></label>
            <input type=\"text\"  id=\"email\" class=\"span7 m-wrap\">
            <label>Message</label>
            <textarea id=\"comment\" class=\"span10 m-wrap\" rows=\"8\"></textarea>
            <p><button class=\"btn theme-btn\" id=\"submit\" type=\"submit\">Post a Comment</button></p>
        </form>
    </div>
</div>
";
    }

    // line 64
    public function block_documentReady($context, array $blocks = array())
    {
        // line 65
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            App.init();
            
            \$(function() {
                \$(\"#submit\").click(function(e){
                    e.preventDefault();
                    
                    var name = \$(\"#name\").val();
                    var email = \$(\"#email\").val();
                    var comment = \$(\"#comment\").val();
                    var dataString = 'name='+ name + '&email=' + email + '&comment=' + comment + '&id=' + '";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "';
                    
                    if(name=='' || email=='' || comment==''){
                        alert('Please Give Valid Details');
                    }
                    else{
                        \$(\"#flash\").show();
                        \$(\"#flash\").fadeIn(400).html('<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/img/ajax-loader.gif"), "html", null, true);
        echo "\" />Loading Comment...');
                                                      
                        \$.ajax({
                            type: \"POST\",
                            url: \"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("add_comment");
        echo "\",
                            data: dataString,
                            cache: false,
                            success: function(res){
                            var commentDate = '<li><div class=\"media\"><a href=\"#\" class=\"pull-left\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Frontend/assets/img/people/img1-small.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"media-object\"></a><div class=\"media-body\"><h4 class=\"media-heading\">'+name+'<span>'+";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
        echo "+'-'+";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
        echo "+'-'+";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "+'</span></h4><p>'+comment+'</p></div></div><hr></li>';
                                \$(\"ol#update\").append(commentDate);
                                \$(\"ol#update li:last\").fadeIn(\"slow\");
                                \$(\"#flash\").hide();
                                \$('#commentForm')[0].reset();
                                alert('Sorry! this comment needs the Author Approval.');
                                \$(\"ol#update li:last\").css( \"background-color\" ,\"#FAF9E9\" );
                                
                            }
                        });     
                    }
                    return false;
                }); 
            });            
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 91,  204 => 87,  197 => 83,  187 => 76,  174 => 65,  171 => 64,  150 => 45,  144 => 44,  135 => 38,  129 => 37,  123 => 34,  118 => 31,  115 => 30,  111 => 29,  104 => 24,  86 => 23,  81 => 22,  64 => 21,  57 => 17,  50 => 13,  46 => 12,  38 => 8,  32 => 4,  29 => 3,);
    }
}
