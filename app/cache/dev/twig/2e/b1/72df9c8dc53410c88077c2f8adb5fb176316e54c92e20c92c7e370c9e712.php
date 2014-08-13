<?php

/* BackendBundle:Dashboard:index.html.twig */
class __TwigTemplate_2eb172df9c8dc53410c88077c2f8adb5fb176316e54c92e20c92c7e370c9e712 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 5
            echo "        <div class=\"alert alert-block alert-warning fade in\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\"></button>
            <h4 class=\"alert-heading\">New Comment Needs your Approval</h4>
            <br>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentAuthor"), "html", null, true);
            echo "</p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentContent"), "html", null, true);
            echo "</p>
            <p>
                <a href=\"#static\" class=\" btn red\" data-toggle=\"modal\" ><i class=\"icon-remove\"></i> Delete</a>
                <a class=\"btn blue\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_approve", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Approve</a>
                <div id=\"static\" class=\"modal hide fade\" tabindex=\"-1\" data-backdrop=\"static\" data-keyboard=\"false\">
                    <div class=\"modal-body\">
                        <p>Are you sure you want to Delete this Comment ?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">No</button>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"  class=\"btn red\">Yes</a>
                    </div>
                </div>                
            </p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BackendBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  52 => 13,  46 => 10,  42 => 9,  36 => 5,  31 => 4,  28 => 3,);
    }
}
