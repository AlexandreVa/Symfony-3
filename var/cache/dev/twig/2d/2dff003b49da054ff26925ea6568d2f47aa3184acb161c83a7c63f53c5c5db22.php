<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e57b30ddd23499f889c856c794b1b33135deafc3f24491e5c00807618236b652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe3c4e67683aeb2b28794d6312bb9edddaae551eb7d32ae7784a102111434e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3c4e67683aeb2b28794d6312bb9edddaae551eb7d32ae7784a102111434e56->enter($__internal_fe3c4e67683aeb2b28794d6312bb9edddaae551eb7d32ae7784a102111434e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3c4e67683aeb2b28794d6312bb9edddaae551eb7d32ae7784a102111434e56->leave($__internal_fe3c4e67683aeb2b28794d6312bb9edddaae551eb7d32ae7784a102111434e56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2952bd1ba83281031235f556add2c96e02857f499cd36562cc96bd3a473d7b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2952bd1ba83281031235f556add2c96e02857f499cd36562cc96bd3a473d7b67->enter($__internal_2952bd1ba83281031235f556add2c96e02857f499cd36562cc96bd3a473d7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2952bd1ba83281031235f556add2c96e02857f499cd36562cc96bd3a473d7b67->leave($__internal_2952bd1ba83281031235f556add2c96e02857f499cd36562cc96bd3a473d7b67_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_957e5460f259bcbec04bceaf52a2db231f6f48ef7ed70e2845990e84c1b649ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957e5460f259bcbec04bceaf52a2db231f6f48ef7ed70e2845990e84c1b649ef->enter($__internal_957e5460f259bcbec04bceaf52a2db231f6f48ef7ed70e2845990e84c1b649ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_957e5460f259bcbec04bceaf52a2db231f6f48ef7ed70e2845990e84c1b649ef->leave($__internal_957e5460f259bcbec04bceaf52a2db231f6f48ef7ed70e2845990e84c1b649ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cacab2b692c13371df364402b6c60d66c479dbef4999a7d8e0e72eae3fefc2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacab2b692c13371df364402b6c60d66c479dbef4999a7d8e0e72eae3fefc2ba->enter($__internal_cacab2b692c13371df364402b6c60d66c479dbef4999a7d8e0e72eae3fefc2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cacab2b692c13371df364402b6c60d66c479dbef4999a7d8e0e72eae3fefc2ba->leave($__internal_cacab2b692c13371df364402b6c60d66c479dbef4999a7d8e0e72eae3fefc2ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
