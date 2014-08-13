<?php

/* BackendBundle:Category:index.html.twig */
class __TwigTemplate_3810c99c1ad1b96e866452b0b333ec0266e7b784203854f6e903eaca1418dc3e extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Available Categories", array(), "messages");
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
        echo $this->env->getExtension('routing')->getPath("new_category");
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</th>                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>                            
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>                            
                            <td>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_category", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn mini blue\"><i class=\"icon-edit\"></i> Edit</a>                                
                                <a href=\"#static\" class=\" btn mini red\" data-toggle=\"modal\" ><i class=\"icon-remove\"></i> Delete</a>
                                <div id=\"static\" class=\"modal hide fade\" tabindex=\"-1\" data-backdrop=\"static\" data-keyboard=\"false\">
                                    <div class=\"modal-body\">
                                        <p>Are you sure you want to Delete this Category ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">No</button>
                                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 51
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
        return "BackendBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 51,  100 => 45,  89 => 37,  84 => 35,  80 => 34,  77 => 33,  73 => 32,  65 => 27,  61 => 26,  50 => 18,  38 => 9,  31 => 4,  28 => 3,);
    }
}
