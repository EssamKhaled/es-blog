<?php

/* BackendBundle:Post:index.html.twig */
class __TwigTemplate_a92ca1caf451304bc6899ddc06c0a24896e4a3885571a7e2dac0d8069d65859e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_main_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-fluid\">
    <div class=\"span12\">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class=\"portlet box blue\">
            <div class=\"portlet-title\">
                <div class=\"caption\"><i class=\"icon-edit\"></i>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Available Articles", array(), "messages");
        echo "</div>
                <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\"></a>
                        <a href=\"javascript:;\" class=\"remove\"></a>
                </div>
            </div>
            <div class=\"portlet-body\">
                <div class=\"table-toolbar\">
                    <div class=\"btn-group\">
                        <button class=\"btn green\" onclick=\"window.location.href='";
        // line 18
        echo $this->env->getExtension('routing')->getPath("new_article");
        echo "'\">
                        Add New <i class=\"icon-plus\"></i>
                        </button>
                    </div>
                </div>
                <table class=\"table table-striped table-hover table-bordered\">
                    <thead>
                        <tr>
                            <th>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("#", array(), "messages");
        echo "</th>
                            <th>";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Picture", array(), "messages");
        echo "</th>
                            <th>";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Title", array(), "messages");
        echo "</th>
                            <th>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Category", array(), "messages");
        echo "</th>
                            <th>";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        echo "</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                        <tr>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                            <td style=\"width:160px;\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "html", null, true);
            echo "\" width=\"150\"></td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 43
                echo "                                   <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </ul>
                            </td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isPublished"), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_article", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn mini blue\"><i class=\"icon-edit\"></i> Edit</a>                                
                                <a href=\"#static\" class=\" btn mini red\" data-toggle=\"modal\" ><i class=\"icon-remove\"></i> Delete</a>
                                <div id=\"static\" class=\"modal hide fade\" tabindex=\"-1\" data-backdrop=\"static\" data-keyboard=\"false\">
                                    <div class=\"modal-body\">
                                        <p>Are you sure you want to Delete this Article?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">No</button>
                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"  class=\"btn red\">Yes</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 63,  140 => 57,  129 => 49,  124 => 47,  120 => 45,  111 => 43,  107 => 42,  101 => 39,  96 => 38,  92 => 37,  89 => 36,  85 => 35,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  50 => 18,  38 => 9,  31 => 4,  28 => 3,);
    }
}
