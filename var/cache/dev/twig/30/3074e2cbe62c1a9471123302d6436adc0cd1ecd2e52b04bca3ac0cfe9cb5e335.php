<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_98c9e86979415716758e84d07242ab07d5f94573de82ffad31656e7261911b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abe64e30e5dfb20941bdfef664796a142c7af06eab42de0efe7c1d6cc72e196e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe64e30e5dfb20941bdfef664796a142c7af06eab42de0efe7c1d6cc72e196e->enter($__internal_abe64e30e5dfb20941bdfef664796a142c7af06eab42de0efe7c1d6cc72e196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe64e30e5dfb20941bdfef664796a142c7af06eab42de0efe7c1d6cc72e196e->leave($__internal_abe64e30e5dfb20941bdfef664796a142c7af06eab42de0efe7c1d6cc72e196e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_261c5d0f6b372fc68ea51913658b4f84289011c952665c51751abfd48e24f8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261c5d0f6b372fc68ea51913658b4f84289011c952665c51751abfd48e24f8ef->enter($__internal_261c5d0f6b372fc68ea51913658b4f84289011c952665c51751abfd48e24f8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_261c5d0f6b372fc68ea51913658b4f84289011c952665c51751abfd48e24f8ef->leave($__internal_261c5d0f6b372fc68ea51913658b4f84289011c952665c51751abfd48e24f8ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
