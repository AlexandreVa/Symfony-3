<?php

/* IKNSABlogBundle::layout.html.twig */
class __TwigTemplate_6bd5b787f289508996bd9e83a94d53fcaf6cff72db18fe7fa570aaf78e285112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/blog.html.twig", "IKNSABlogBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67e717b895a693d438caa00e2cbccb5497ba3f6d758f39868b8419fa32d0c3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e717b895a693d438caa00e2cbccb5497ba3f6d758f39868b8419fa32d0c3a1->enter($__internal_67e717b895a693d438caa00e2cbccb5497ba3f6d758f39868b8419fa32d0c3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e717b895a693d438caa00e2cbccb5497ba3f6d758f39868b8419fa32d0c3a1->leave($__internal_67e717b895a693d438caa00e2cbccb5497ba3f6d758f39868b8419fa32d0c3a1_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/blog.html.twig' %}", "IKNSABlogBundle::layout.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/layout.html.twig");
    }
}
