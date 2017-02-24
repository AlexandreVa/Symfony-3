<?php

/* IKNSABlogBundle:post:show.html.twig */
class __TwigTemplate_3942873c8b80c3a4d5425669e887c174e58f5d97609949058f621238717fb01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:show.html.twig", 1);
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
        $__internal_69f2e20f6f78acd738a2f2b3a1fa5263369c1abf1a99c0af39afe1c4adb9b398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f2e20f6f78acd738a2f2b3a1fa5263369c1abf1a99c0af39afe1c4adb9b398->enter($__internal_69f2e20f6f78acd738a2f2b3a1fa5263369c1abf1a99c0af39afe1c4adb9b398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f2e20f6f78acd738a2f2b3a1fa5263369c1abf1a99c0af39afe1c4adb9b398->leave($__internal_69f2e20f6f78acd738a2f2b3a1fa5263369c1abf1a99c0af39afe1c4adb9b398_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6ed6d1e9b2dbef80a27c67747d16d5f4534a16d2313ee92ec7cfa9977caf6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ed6d1e9b2dbef80a27c67747d16d5f4534a16d2313ee92ec7cfa9977caf6d8->enter($__internal_f6ed6d1e9b2dbef80a27c67747d16d5f4534a16d2313ee92ec7cfa9977caf6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div style=\"padding-bottom:20px; border-radius:20px;\"class=\"container\">
    <h1><br>Détail du poste</h1>
            <a  style=\"margin-right:5px;\"class=\"btn btn btn-outline-success\" type=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">
            <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
            </a><br><br>
    <div style=\"margin-bottom:25px;\" class=\"row\">
      <div class=\"col-sm-6 col-lg-6\">
        <table class=\"table\">
            <tbody class=\"thead-default\">
                <tr>
                    <th  style=\"width:10%;\">Id</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 20, $this->getSourceContext()); })()), "getImage", array())) {
            // line 21
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/pictures/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 21, $this->getSourceContext()); })()), "getImage", array()))), "html", null, true);
            echo "\">
                        ";
        } else {
            // line 23
            echo "                            <p>Aucune image</p>
                        ";
        }
        // line 25
        echo "                    </td>
                </tr>
                <tr>
                    <th>Titre</th>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 29, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Extrait</th>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 33, $this->getSourceContext()); })()), "summary", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6 col-lg-6\">
    <table class=\"table\">
        <tbody class=\"thead-default\">
            <tr>
                <th>Contenu</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 43, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 47, $this->getSourceContext()); })()), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 47, $this->getSourceContext()); })()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>
                    ";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 52, $this->getSourceContext()); })()), "user", array())) {
            // line 53
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 53, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 55
            echo "                        <i>Annonymous</i>
                    ";
        }
        // line 57
        echo "                </td>
            </tr>
            <tr>
              <th>
              <div class=\"row\">
              <a  style=\"margin-left:80px;\"class=\"btn btn btn-outline-info\" type=\"button\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 62, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
              </a>
              </div>
              <th/>
              ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 67, $this->getSourceContext()); })()), 'form_start');
        echo "
                  <button  class=\"btn btn btn-outline-danger\" type=\"submit\" value=\"Delete\">
                  <i class=\"fa fa-trash-o fa-lg\"></i>
                  </button>
              ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 71, $this->getSourceContext()); })()), 'form_end');
        echo "
              <th>
              </th>
            </tr>
        </tbody>
    </table>
    </div>
  </div>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h4>Ajouter un commentaire </h4>
        ";
        // line 82
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 83
            echo "            ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), 'form_start');
            echo "
                ";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), 'widget');
            echo "
                <input class=\"btn btn-secondary\" style=\"\" type=\"submit\" value=\"Créer\" />
            ";
            // line 86
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), 'form_end');
            echo "
        ";
        }
        // line 88
        echo "      </div>
      <div class=\"col-sm-6\">
        <h4>Liste des commentaires </h4>
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 91, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 92
            echo "            <hr>
            <i>Ecrit par : <b>";
            // line 93
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "user", array()), "username", array())), "html", null, true);
            echo "</b> le <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "createdAt", array()), "date", array()), "d/m/y h:i"), "html", null, true);
            echo "</em></i>
            <p>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "comment", array()), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "      </div>
</div>
</div>


";
        
        $__internal_f6ed6d1e9b2dbef80a27c67747d16d5f4534a16d2313ee92ec7cfa9977caf6d8->leave($__internal_f6ed6d1e9b2dbef80a27c67747d16d5f4534a16d2313ee92ec7cfa9977caf6d8_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 96,  202 => 94,  196 => 93,  193 => 92,  189 => 91,  184 => 88,  179 => 86,  174 => 84,  169 => 83,  167 => 82,  153 => 71,  146 => 67,  138 => 62,  131 => 57,  127 => 55,  121 => 53,  119 => 52,  109 => 47,  102 => 43,  89 => 33,  82 => 29,  76 => 25,  72 => 23,  66 => 21,  64 => 20,  56 => 15,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div style=\"padding-bottom:20px; border-radius:20px;\"class=\"container\">
    <h1><br>Détail du poste</h1>
            <a  style=\"margin-right:5px;\"class=\"btn btn btn-outline-success\" type=\"button\" href=\"{{ path('post_index') }}\">
            <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
            </a><br><br>
    <div style=\"margin-bottom:25px;\" class=\"row\">
      <div class=\"col-sm-6 col-lg-6\">
        <table class=\"table\">
            <tbody class=\"thead-default\">
                <tr>
                    <th  style=\"width:10%;\">Id</th>
                    <td>{{ post.id }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        {% if post.getImage %}
                            <img src=\"{{ asset('uploads/pictures/' ~ post.getImage) }}\">
                        {% else %}
                            <p>Aucune image</p>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Titre</th>
                    <td>{{ post.title }}</td>
                </tr>
                <tr>
                    <th>Extrait</th>
                    <td>{{ post.summary }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-6 col-lg-6\">
    <table class=\"table\">
        <tbody class=\"thead-default\">
            <tr>
                <th>Contenu</th>
                <td>{{ post.content }}</td>
            </tr>
            <tr>
                <th>Date de création</th>
                <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>
                    {% if post.user %}
                        {{ post.user.username }}
                    {% else %}
                        <i>Annonymous</i>
                    {% endif %}
                </td>
            </tr>
            <tr>
              <th>
              <div class=\"row\">
              <a  style=\"margin-left:80px;\"class=\"btn btn btn-outline-info\" type=\"button\" href=\"{{ path('post_edit', { 'id': post.id }) }}\">
              <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
              </a>
              </div>
              <th/>
              {{ form_start(delete_form) }}
                  <button  class=\"btn btn btn-outline-danger\" type=\"submit\" value=\"Delete\">
                  <i class=\"fa fa-trash-o fa-lg\"></i>
                  </button>
              {{ form_end(delete_form) }}
              <th>
              </th>
            </tr>
        </tbody>
    </table>
    </div>
  </div>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h4>Ajouter un commentaire </h4>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ form_start(form) }}
                {{ form_widget(form) }}
                <input class=\"btn btn-secondary\" style=\"\" type=\"submit\" value=\"Créer\" />
            {{ form_end(form) }}
        {% endif %}
      </div>
      <div class=\"col-sm-6\">
        <h4>Liste des commentaires </h4>
        {% for comment in comments %}
            <hr>
            <i>Ecrit par : <b>{{ comment.user.username|title }}</b> le <em>{{ comment.createdAt.date|date('d/m/y h:i') }}</em></i>
            <p>{{ comment.comment }}</p>
        {% endfor %}
      </div>
</div>
</div>


{% endblock %}
", "IKNSABlogBundle:post:show.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/post/show.html.twig");
    }
}
