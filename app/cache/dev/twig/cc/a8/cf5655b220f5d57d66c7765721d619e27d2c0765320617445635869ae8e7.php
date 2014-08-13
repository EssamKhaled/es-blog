<?php

/* BackendBundle:Post:edit.html.twig */
class __TwigTemplate_cca8cf5655b220f5d57d66c7765721d619e27d2c0765320617445635869ae8e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'documentReady' => array($this, 'block_documentReady'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/layout/Backend/assets/scripts/form-validation.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 11
    public function block_documentReady($context, array $blocks = array())
    {
        // line 12
        echo "    <script>
        jQuery(document).ready(function() {
           App.init();
           FormValidation.init();
        });
    </script>
";
    }

    // line 20
    public function block_main_content($context, array $blocks = array())
    {
        // line 21
        echo "<div class=\"row-fluid\">
    <div class=\"span12\">
        <!-- BEGIN VALIDATION STATES-->
        <div class=\"portlet box blue\">
            <div class=\"portlet-title\">
                <div class=\"caption\"><i class=\"icon-reorder\"></i>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Article", array(), "messages");
        echo "</div>
                <div class=\"tools\">
                    <a href=\"javascript:;\" class=\"collapse\"></a>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <!-- BEGIN FORM-->
                <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_article", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo " method=\"POST\" autocomplete=\"off\" id=\"form_sample_1\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />                    
                    <div class=\"alert alert-error hide\">
                        <button class=\"close\" data-dismiss=\"alert\"></button>
                        You have some form errors. Please check below.
                    </div>
                    <div class=\"alert alert-success hide\">
                        <button class=\"close\" data-dismiss=\"alert\"></button>
                        Your form validation is successful!
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 44
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Category", array(), "messages");
        echo "<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category"), 'widget');
        echo "
                        </div>
                    </div>    
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isPublished"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("Image", array(), "messages");
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image"), 'widget');
        echo "
                        </div>
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/articles/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "html", null, true);
        echo "\" width=\"150\">
                    </div>                        
                        
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                    <div class=\"form-actions\">
                        <button type=\"submit\" class=\"btn blue\">Edit</button>
                        <a  href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("backend_post");
        echo "\" class=\"btn\">Cancel</a>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 78,  166 => 75,  159 => 72,  154 => 70,  149 => 68,  142 => 64,  137 => 62,  130 => 58,  125 => 56,  118 => 52,  113 => 50,  106 => 46,  101 => 44,  85 => 33,  75 => 26,  68 => 21,  65 => 20,  55 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  33 => 5,  30 => 4,);
    }
}
