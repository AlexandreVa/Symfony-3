<?php

/* IKNSABlogBundle:post:index.html.twig */
class __TwigTemplate_9e79c5a0b868f068a9be9ea4503a59f6d846872c5e1d22bf77056d490c4c1f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:index.html.twig", 1);
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
        $__internal_a606c6452df0477ae695948cbec2a8c3e8503da77bd7e5ec1478813c4950916e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a606c6452df0477ae695948cbec2a8c3e8503da77bd7e5ec1478813c4950916e->enter($__internal_a606c6452df0477ae695948cbec2a8c3e8503da77bd7e5ec1478813c4950916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a606c6452df0477ae695948cbec2a8c3e8503da77bd7e5ec1478813c4950916e->leave($__internal_a606c6452df0477ae695948cbec2a8c3e8503da77bd7e5ec1478813c4950916e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d944dccaac994e5350e485d98823e91d6c27f11b38b6c05751ce84f33e42207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d944dccaac994e5350e485d98823e91d6c27f11b38b6c05751ce84f33e42207->enter($__internal_1d944dccaac994e5350e485d98823e91d6c27f11b38b6c05751ce84f33e42207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 5
            echo "        <div id=\"notice\" class=\"notice alert alert-notice\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <h1 style=\"text-align:center;\"><br>Liste de poste<br><br></h1>
    <div class=\"container\">
    <table class=\"table table-bordered\">
        <thead class =\"thead-inverse\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Extrait</th>
                <th>Date de création</th>
                <th>Auteur</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 24, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 31
            if ($context["post"]) {
                // line 32
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "username", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 34
                echo "                        <i>Annonymous</i>
                    ";
            }
            // line 36
            echo "                </td>
                <td style=\"text-align:center;\">
                    ";
            // line 38
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()) && twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "extension", array()))) {
                // line 39
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/pictures/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array())) . ".") . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "extension", array()))), "html", null, true);
                echo "\" style=\"width:75px;max-height:75px;\">
                    ";
            } else {
                // line 41
                echo "                        <i>Aucune image</i>
                    ";
            }
            // line 43
            echo "                </td>
                <td style=\"text-align:center;\">
                            <a class=\"btn btn btn-outline-info\" type=\"button\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                            </a>
                            <a class=\"btn btn btn-outline-danger\" type=\"button\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
            <a class=\"btn btn btn-success\" type=\"button\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">
            <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>  Ajouter un nouveau poste
            </a>
    </div>
";
        
        $__internal_1d944dccaac994e5350e485d98823e91d6c27f11b38b6c05751ce84f33e42207->leave($__internal_1d944dccaac994e5350e485d98823e91d6c27f11b38b6c05751ce84f33e42207_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  152 => 54,  140 => 48,  134 => 45,  130 => 43,  126 => 41,  120 => 39,  118 => 38,  114 => 36,  110 => 34,  104 => 32,  102 => 31,  95 => 29,  91 => 28,  87 => 27,  81 => 26,  78 => 25,  74 => 24,  57 => 9,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for flash in app.session.flashBag.get('notice') %}
        <div id=\"notice\" class=\"notice alert alert-notice\">
            {{ flash }}
        </div>
    {% endfor %}
    <h1 style=\"text-align:center;\"><br>Liste de poste<br><br></h1>
    <div class=\"container\">
    <table class=\"table table-bordered\">
        <thead class =\"thead-inverse\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Extrait</th>
                <th>Date de création</th>
                <th>Auteur</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.summary }}</td>
                <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    {% if post %}
                        {{ post.username }}
                    {% else %}
                        <i>Annonymous</i>
                    {% endif %}
                </td>
                <td style=\"text-align:center;\">
                    {% if post.id and post.extension %}
                        <img src=\"{{ asset('uploads/pictures/' ~ post.id ~ '.' ~ post.extension) }}\" style=\"width:75px;max-height:75px;\">
                    {% else %}
                        <i>Aucune image</i>
                    {% endif %}
                </td>
                <td style=\"text-align:center;\">
                            <a class=\"btn btn btn-outline-info\" type=\"button\" href=\"{{ path('post_show', { 'id': post.id }) }}\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                            </a>
                            <a class=\"btn btn btn-outline-danger\" type=\"button\" href=\"{{ path('post_edit', { 'id': post.id }) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
            <a class=\"btn btn btn-success\" type=\"button\" href=\"{{ path('post_new') }}\">
            <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>  Ajouter un nouveau poste
            </a>
    </div>
{% endblock %}
", "IKNSABlogBundle:post:index.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/index.html.twig");
    }
}
