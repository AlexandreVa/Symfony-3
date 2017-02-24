<?php

/* IKNSABlogBundle:post:edit.html.twig */
class __TwigTemplate_f47006aa676d5a61960f9c1cd438f6ee5acd32b982adb2353ed4f761ce9bc267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b75fbeba3d8ef92dfcd5cbe42d2601bc8fa8f5e8ac515fc7073d0e09fa5811a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b75fbeba3d8ef92dfcd5cbe42d2601bc8fa8f5e8ac515fc7073d0e09fa5811a->enter($__internal_6b75fbeba3d8ef92dfcd5cbe42d2601bc8fa8f5e8ac515fc7073d0e09fa5811a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b75fbeba3d8ef92dfcd5cbe42d2601bc8fa8f5e8ac515fc7073d0e09fa5811a->leave($__internal_6b75fbeba3d8ef92dfcd5cbe42d2601bc8fa8f5e8ac515fc7073d0e09fa5811a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43d3cfa416bfdf6555e2615a26ac9bbb86775d3b938edd809530981e157e37e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d3cfa416bfdf6555e2615a26ac9bbb86775d3b938edd809530981e157e37e1->enter($__internal_43d3cfa416bfdf6555e2615a26ac9bbb86775d3b938edd809530981e157e37e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center  \">Editer un poste</h1>
    <div class=\"container\">
    <a class=\"btn btn btn-outline-success\" type=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
    </a><br><br>

      <div>
        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "
            <input type=\"submit\" value=\"Valider\" />
        ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        echo "
      </div>
      <br><br>
      <div>
                ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
                    <button  class=\"btn btn btn-outline-danger\" type=\"submit\" value=\"Delete\">
                    <i class=\"fa fa-trash-o fa-lg\"></i>
                    </button>
                ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
     </div>
    </div>
";
        
        $__internal_43d3cfa416bfdf6555e2615a26ac9bbb86775d3b938edd809530981e157e37e1->leave($__internal_43d3cfa416bfdf6555e2615a26ac9bbb86775d3b938edd809530981e157e37e1_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  68 => 18,  61 => 14,  56 => 12,  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"text-align:center  \">Editer un poste</h1>
    <div class=\"container\">
    <a class=\"btn btn btn-outline-success\" type=\"button\" href=\"{{ path('post_index') }}\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
    </a><br><br>

      <div>
        {{ form_start(edit_form) }}
            {{ form_widget(edit_form) }}
            <input type=\"submit\" value=\"Valider\" />
        {{ form_end(edit_form) }}
      </div>
      <br><br>
      <div>
                {{ form_start(delete_form) }}
                    <button  class=\"btn btn btn-outline-danger\" type=\"submit\" value=\"Delete\">
                    <i class=\"fa fa-trash-o fa-lg\"></i>
                    </button>
                {{ form_end(delete_form) }}
     </div>
    </div>
{% endblock %}
", "IKNSABlogBundle:post:edit.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/edit.html.twig");
    }
}
