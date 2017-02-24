<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af5e1cc4d9ea882aee127efb15d092ec8068a7f67c5f69695744f16368ddd22f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b862466cb0c3256c939494e640a26d3cda78ad9cf7d96a5870c7944a007c280f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b862466cb0c3256c939494e640a26d3cda78ad9cf7d96a5870c7944a007c280f->enter($__internal_b862466cb0c3256c939494e640a26d3cda78ad9cf7d96a5870c7944a007c280f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b862466cb0c3256c939494e640a26d3cda78ad9cf7d96a5870c7944a007c280f->leave($__internal_b862466cb0c3256c939494e640a26d3cda78ad9cf7d96a5870c7944a007c280f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_daf0e43ca34bfe5ab1a284cb6e00d2400fe4be243aaa912f2f6ad598ad64a17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf0e43ca34bfe5ab1a284cb6e00d2400fe4be243aaa912f2f6ad598ad64a17e->enter($__internal_daf0e43ca34bfe5ab1a284cb6e00d2400fe4be243aaa912f2f6ad598ad64a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_daf0e43ca34bfe5ab1a284cb6e00d2400fe4be243aaa912f2f6ad598ad64a17e->leave($__internal_daf0e43ca34bfe5ab1a284cb6e00d2400fe4be243aaa912f2f6ad598ad64a17e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11e8166168f33bbd7a515f8887cc142c094f45e9931589c96b0e929a89312f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e8166168f33bbd7a515f8887cc142c094f45e9931589c96b0e929a89312f04->enter($__internal_11e8166168f33bbd7a515f8887cc142c094f45e9931589c96b0e929a89312f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_11e8166168f33bbd7a515f8887cc142c094f45e9931589c96b0e929a89312f04->leave($__internal_11e8166168f33bbd7a515f8887cc142c094f45e9931589c96b0e929a89312f04_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_202005eb21f52d2d88b518b1decdb4cb3e87291fb6753796503bfe30e168d3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202005eb21f52d2d88b518b1decdb4cb3e87291fb6753796503bfe30e168d3c1->enter($__internal_202005eb21f52d2d88b518b1decdb4cb3e87291fb6753796503bfe30e168d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_202005eb21f52d2d88b518b1decdb4cb3e87291fb6753796503bfe30e168d3c1->leave($__internal_202005eb21f52d2d88b518b1decdb4cb3e87291fb6753796503bfe30e168d3c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
