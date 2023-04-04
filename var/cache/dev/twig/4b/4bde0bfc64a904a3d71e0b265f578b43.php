<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/blog/index.html.twig */
class __TwigTemplate_f679fce3c97e896250c6d2c631d117d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gérer le blog";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/admin/blog/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Gérer les articles de blogs</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alerte alrt-success\">
            <i class=\"fa-solid fa-check\" style=\"color: #0f172a;\"></i>
            <p>";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <div class=\"text-center content-page\">
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.blog.new");
        echo "\" class=\"create button\">Ajouter un article <i class=\"fa-solid fa-plus\" style=\"color: #ffffff;\"></i></a>
        <table class=\"blogs-table\">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"actions\">
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.blog.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn-green\"><i class=\"fa-solid fa-pen-to-square\" style=\"color: #ffffff;\"></i></a>
                        <form method=\"post\" action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.blog.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet article ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 35))), "html", null, true);
            echo "\">
                            <button class=\"btn-red\"><i class=\"fa-solid fa-trash\" style=\"color: #ffffff;\"></i></button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 41,  175 => 35,  170 => 33,  166 => 32,  161 => 30,  157 => 29,  154 => 28,  150 => 27,  137 => 17,  133 => 15,  124 => 12,  120 => 10,  116 => 9,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Gérer le blog{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/admin/blog/index.css') }}\">
{% endblock %}
{% block body %}
    <h1>Gérer les articles de blogs</h1>

    {% for message in app.flashes('success') %}
        <div class=\"alerte alrt-success\">
            <i class=\"fa-solid fa-check\" style=\"color: #0f172a;\"></i>
            <p>{{ message }}</p>
        </div>
    {% endfor %}

    <div class=\"text-center content-page\">
        <a href=\"{{ path('admin.blog.new') }}\" class=\"create button\">Ajouter un article <i class=\"fa-solid fa-plus\" style=\"color: #ffffff;\"></i></a>
        <table class=\"blogs-table\">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% for blog in blogs %}
                <tr>
                    <td>{{ blog.id }}</td>
                    <td>{{ blog.title }}</td>
                    <td class=\"actions\">
                        <a href=\"{{ path('admin.blog.edit', {id: blog.id}) }}\" class=\"btn-green\"><i class=\"fa-solid fa-pen-to-square\" style=\"color: #ffffff;\"></i></a>
                        <form method=\"post\" action=\"{{ path('admin.blog.delete', {id: blog.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet article ?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ blog.id) }}\">
                            <button class=\"btn-red\"><i class=\"fa-solid fa-trash\" style=\"color: #ffffff;\"></i></button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "admin/blog/index.html.twig", "/var/www/web/dev.silvus.me/blogo/templates/admin/blog/index.html.twig");
    }
}
