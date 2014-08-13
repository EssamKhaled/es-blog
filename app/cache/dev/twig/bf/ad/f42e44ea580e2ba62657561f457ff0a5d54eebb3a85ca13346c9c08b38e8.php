<?php

/* BackendBundle:Post:new.html.twig */
class __TwigTemplate_bfadf42e44ea580e2ba62657561f457ff0a5d54eebb3a85ca13346c9c08b38e8 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Create a new Article", array(), "messages");
        echo "</div>
                <div class=\"tools\">
                    <a href=\"javascript:;\" class=\"collapse\"></a>
                </div>
            </div>
            <div class=\"portlet-body form\">
                <!-- BEGIN FORM-->
                <form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("create_article");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" autocomplete=\"off\" id=\"form_sample_1\" class=\"form-horizontal\">
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
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Content", array(), "messages");
        echo "<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Category", array(), "messages");
        echo "<span class=\"required\">*</span></label>
                        <div class=\"controls\">
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
                        </div>
                    </div>     
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 61
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPublished"), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 67
        echo $this->env->getExtension('translator')->getTranslator()->trans("Image", array(), "messages");
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget');
        echo "
                        </div>
                    </div>                        
                        
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div class=\"form-actions\">
                        <button type=\"submit\" class=\"btn blue\">Create</button>
                        <a  href=\"";
        // line 76
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
        return "BackendBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 76,  160 => 73,  153 => 69,  148 => 67,  141 => 63,  136 => 61,  129 => 57,  124 => 55,  117 => 51,  112 => 49,  105 => 45,  100 => 43,  85 => 33,  75 => 26,  68 => 21,  65 => 20,  55 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  33 => 5,  30 => 4,);
    }
}
