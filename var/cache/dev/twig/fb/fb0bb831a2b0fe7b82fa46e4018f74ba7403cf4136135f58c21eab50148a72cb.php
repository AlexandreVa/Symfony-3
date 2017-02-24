<?php

/* IKNSABlogBundle:post:new.html.twig */
class __TwigTemplate_2438d001a5ff57968e4b6fd978136c3091606fdef16e14ab5ee2c867cc755366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:new.html.twig", 1);
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
        $__internal_0628b66d654b036ada6d1626fcdfb6bca842779e599baae4c276f7ae490a777c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0628b66d654b036ada6d1626fcdfb6bca842779e599baae4c276f7ae490a777c->enter($__internal_0628b66d654b036ada6d1626fcdfb6bca842779e599baae4c276f7ae490a777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0628b66d654b036ada6d1626fcdfb6bca842779e599baae4c276f7ae490a777c->leave($__internal_0628b66d654b036ada6d1626fcdfb6bca842779e599baae4c276f7ae490a777c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b851281427cd927ec166c2ab821225a7c5d3d386b4a62e50c06b71046a40921b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b851281427cd927ec166c2ab821225a7c5d3d386b4a62e50c06b71046a40921b->enter($__internal_b851281427cd927ec166c2ab821225a7c5d3d386b4a62e50c06b71046a40921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center  \">Création de poste</h1>
    <div class=\"container\">
    <a class=\"btn btn btn-outline-success\" type=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
    </a>
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        echo "
        <input class=\"btn btn btn-outline-primary\" type=\"submit\" value=\"Create\" />
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_b851281427cd927ec166c2ab821225a7c5d3d386b4a62e50c06b71046a40921b->leave($__internal_b851281427cd927ec166c2ab821225a7c5d3d386b4a62e50c06b71046a40921b_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  54 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 style=\"text-align:center  \">Création de poste</h1>
    <div class=\"container\">
    <a class=\"btn btn btn-outline-success\" type=\"button\" href=\"{{ path('post_index') }}\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
    </a>
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class=\"btn btn btn-outline-primary\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    </div>
{% endblock %}
", "IKNSABlogBundle:post:new.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/new.html.twig");
    }
}
