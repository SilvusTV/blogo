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

/* blog/index.html.twig */
class __TwigTemplate_fc5c258692ac0142b7af162c5d8b67cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        echo "Le blog";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/blog/index.css"), "html", null, true);
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
        echo "    <h1>Le Blog</h1>
    <div class=\"text-center content-page\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 10
            echo "        <div class=\"blog_block block\">
            ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, $context["blog"], "thumbnail", [], "any", false, false, false, 11) != null)) {
                // line 12
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "thumbnail", [], "any", false, false, false, 12), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "thumbnail", [], "any", false, false, false, 12), "html", null, true);
                echo "\" class=\"img\">
            ";
            }
            // line 14
            echo "            <h2 class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog.show", ["id" => twig_get_attribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 14), "slug" => twig_get_attribute($this->env, $this->source, $context["blog"], "slug", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></h2>
            <p class=\"short-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 15)), 0, 400), "html", null, true);
            echo "...</p>
            <div class=\"info\">
                <div class=\"author\">
                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["blog"], "idauthor", [], "any", false, false, false, 18), [], "array", false, false, false, 18), "profilpic", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 18, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["blog"], "idauthor", [], "any", false, false, false, 18), [], "array", false, false, false, 18), "firstname", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"profil-pic\">
                    <div class=\"name\">
                        <p class=\"firstname\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["blog"], "idauthor", [], "any", false, false, false, 20), [], "array", false, false, false, 20), "firstname", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        <p class=\"lastname\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 21, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["blog"], "idauthor", [], "any", false, false, false, 21), [], "array", false, false, false, 21), "lastname", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"publish-date\">
                    <i class=\"fa-solid fa-clock\"></i>
                    <p class=\"date\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "createdat", [], "any", false, false, false, 26), "d/m/Y H:i"), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 31,  167 => 26,  159 => 21,  155 => 20,  147 => 18,  141 => 15,  134 => 14,  125 => 12,  123 => 11,  120 => 10,  116 => 9,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Le blog{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/blog/index.css') }}\">
{% endblock %}
{% block body %}
    <h1>Le Blog</h1>
    <div class=\"text-center content-page\">
        {% for blog in blogs %}
        <div class=\"blog_block block\">
            {% if blog.thumbnail != null%}
                <img src=\"{{ asset('/assets/img/')}}{{blog.thumbnail}}\" alt=\"{{blog.thumbnail}}\" class=\"img\">
            {% endif %}
            <h2 class=\"title\"><a href=\"{{ path('blog.show', {id: blog.id, slug: blog.slug }) }}\" class=\"title\">{{ blog.title }}</a></h2>
            <p class=\"short-text\">{{blog.content| striptags | slice(0, 400) }}...</p>
            <div class=\"info\">
                <div class=\"author\">
                    <img src=\"{{ asset('/assets/img/')}}{{authorInformations[blog.idauthor].profilpic  }}\" alt=\"{{ authorInformations[blog.idauthor].firstname }}\" class=\"profil-pic\">
                    <div class=\"name\">
                        <p class=\"firstname\">{{ authorInformations[blog.idauthor].firstname }}</p>
                        <p class=\"lastname\">{{ authorInformations[blog.idauthor].lastname }}</p>
                    </div>
                </div>
                <div class=\"publish-date\">
                    <i class=\"fa-solid fa-clock\"></i>
                    <p class=\"date\">{{ blog.createdat|date('d/m/Y H:i')}}</p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
{% endblock %}", "blog/index.html.twig", "/var/www/web/dev.silvus.me/blogo/templates/blog/index.html.twig");
    }
}
