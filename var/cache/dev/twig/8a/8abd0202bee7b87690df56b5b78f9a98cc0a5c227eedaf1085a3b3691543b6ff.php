<?php

/* base.html.twig */
class __TwigTemplate_daf647d4021bf0eeccbb50bc521634636434713993403999e06e6741496a73aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5575a4ea49fc68e1542ccbeb4b1bb5d87f146056a4a6f43339707f0f513511c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5575a4ea49fc68e1542ccbeb4b1bb5d87f146056a4a6f43339707f0f513511c5->enter($__internal_5575a4ea49fc68e1542ccbeb4b1bb5d87f146056a4a6f43339707f0f513511c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"/font/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    </head>
    <style>


    .center-block {
      display: block;
      margin-right: auto;
      margin-left: auto;
    }

    </style>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_5575a4ea49fc68e1542ccbeb4b1bb5d87f146056a4a6f43339707f0f513511c5->leave($__internal_5575a4ea49fc68e1542ccbeb4b1bb5d87f146056a4a6f43339707f0f513511c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01340295cbb8b57d1c32045d75e07e19884eff4dcfe6f7a2fc2f383df28b2c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01340295cbb8b57d1c32045d75e07e19884eff4dcfe6f7a2fc2f383df28b2c02->enter($__internal_01340295cbb8b57d1c32045d75e07e19884eff4dcfe6f7a2fc2f383df28b2c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01340295cbb8b57d1c32045d75e07e19884eff4dcfe6f7a2fc2f383df28b2c02->leave($__internal_01340295cbb8b57d1c32045d75e07e19884eff4dcfe6f7a2fc2f383df28b2c02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49f0a19fe22a842f6c36ead2fc7ee9239a54d8753f34d61ddfc439d7b60a89d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f0a19fe22a842f6c36ead2fc7ee9239a54d8753f34d61ddfc439d7b60a89d7->enter($__internal_49f0a19fe22a842f6c36ead2fc7ee9239a54d8753f34d61ddfc439d7b60a89d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_49f0a19fe22a842f6c36ead2fc7ee9239a54d8753f34d61ddfc439d7b60a89d7->leave($__internal_49f0a19fe22a842f6c36ead2fc7ee9239a54d8753f34d61ddfc439d7b60a89d7_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_760242bdc7deb89ef046f775cd722643c82e3bedfabc2434db5000db5b1a5930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760242bdc7deb89ef046f775cd722643c82e3bedfabc2434db5000db5b1a5930->enter($__internal_760242bdc7deb89ef046f775cd722643c82e3bedfabc2434db5000db5b1a5930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_760242bdc7deb89ef046f775cd722643c82e3bedfabc2434db5000db5b1a5930->leave($__internal_760242bdc7deb89ef046f775cd722643c82e3bedfabc2434db5000db5b1a5930_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_844db2fdca69c7716022a2411db302255089ef8c9640b87bc9be5bb0e0a4414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844db2fdca69c7716022a2411db302255089ef8c9640b87bc9be5bb0e0a4414f->enter($__internal_844db2fdca69c7716022a2411db302255089ef8c9640b87bc9be5bb0e0a4414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_844db2fdca69c7716022a2411db302255089ef8c9640b87bc9be5bb0e0a4414f->leave($__internal_844db2fdca69c7716022a2411db302255089ef8c9640b87bc9be5bb0e0a4414f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  95 => 23,  84 => 6,  72 => 5,  63 => 25,  60 => 24,  58 => 23,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"/font/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\"/>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
    </head>
    <style>


    .center-block {
      display: block;
      margin-right: auto;
      margin-left: auto;
    }

    </style>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony3/app/Resources/views/base.html.twig");
    }
}
