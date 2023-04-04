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

/* blog/show.html.twig */
class __TwigTemplate_55c4b14b236918f7d9d2a687914c8c10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/blog/show.css"), "html", null, true);
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
        echo "   ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 7, $this->source); })()), "thumbnail", [], "any", false, false, false, 7)) {
            // line 8
            echo "       <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 8, $this->source); })()), "thumbnail", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 8, $this->source); })()), "thumbnail", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"img\">
    ";
        }
        // line 10
        echo "    <h1 class=\"blog-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
    <div class=\"info\">
        <div class=\"author\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 13, $this->source); })()), "idauthor", [], "any", false, false, false, 13), [], "array", false, false, false, 13), "profilpic", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 13, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 13, $this->source); })()), "idauthor", [], "any", false, false, false, 13), [], "array", false, false, false, 13), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"profil-pic\">
                <p class=\"firstname\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 14, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 14, $this->source); })()), "idauthor", [], "any", false, false, false, 14), [], "array", false, false, false, 14), "firstname", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <p class=\"lastname\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["authorInformations"]) || array_key_exists("authorInformations", $context) ? $context["authorInformations"] : (function () { throw new RuntimeError('Variable "authorInformations" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 15, $this->source); })()), "idauthor", [], "any", false, false, false, 15), [], "array", false, false, false, 15), "lastname", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
        </div>
        <div class=\"publish-date\">
            <i class=\"fa-solid fa-clock\"></i>
            <p class=\"date\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 19, $this->source); })()), "createdat", [], "any", false, false, false, 19), "d/m/Y H:i"), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"blog-content\">
        ";
        // line 23
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23), "html", null, true));
        echo "
    </div>
    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog.index");
        echo "\" class=\"button back\">← Retour</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 25,  156 => 23,  149 => 19,  142 => 15,  138 => 14,  131 => 13,  124 => 10,  115 => 8,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Le blog{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/blog/show.css') }}\">
{% endblock %}
{% block body %}
   {% if blog.thumbnail %}
       <img src=\"{{ asset('/assets/img/')}}{{blog.thumbnail}}\" alt=\"{{ blog.thumbnail }}\" class=\"img\">
    {% endif %}
    <h1 class=\"blog-title\">{{ blog.title }}</h1>
    <div class=\"info\">
        <div class=\"author\">
            <img src=\"{{ asset('/assets/img/')}}{{authorInformations[blog.idauthor].profilpic  }}\" alt=\"{{ authorInformations[blog.idauthor].firstname }}\" class=\"profil-pic\">
                <p class=\"firstname\">{{ authorInformations[blog.idauthor].firstname }}</p>
                <p class=\"lastname\">{{ authorInformations[blog.idauthor].lastname }}</p>
        </div>
        <div class=\"publish-date\">
            <i class=\"fa-solid fa-clock\"></i>
            <p class=\"date\">{{ blog.createdat|date('d/m/Y H:i')}}</p>
        </div>
    </div>
    <div class=\"blog-content\">
        {{ blog.content | nl2br }}
    </div>
    <a href=\"{{ path('blog.index')}}\" class=\"button back\">← Retour</a>
{% endblock %}", "blog/show.html.twig", "/var/www/web/dev.silvus.me/blogo/templates/blog/show.html.twig");
    }
}
