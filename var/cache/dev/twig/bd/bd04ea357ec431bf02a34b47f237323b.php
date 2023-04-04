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

/* home.html.twig */
class __TwigTemplate_1119040b6e52d882d2b80b931bbcdfa0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        echo "Home";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/homePage.css"), "html", null, true);
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
        echo "    <section class=\"landing-page\">
        <div class=\"welcome\">
            <div class=\"text\">
                <span class=\"welcome-txt\">Bienvenue sur</span>
                <h1>BLOG-US</h1>
                <span class=\"description-txt\">
                Notre blog personnel axé sur la technologie ! Découvrez les dernières tendances, gadgets, logiciels, applications mobiles et bien plus encore. Que vous soyez un professionnel de l'informatique ou un passionné de technologie, vous trouverez des astuces, des conseils et des analyses approfondies ici. Restez à jour sur les dernières nouvelles et tendances technologiques en nous rejoignant.
                </span>
            </div>
            <div class=\"image\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/Logo.png"), "html", null, true);
        echo "\" alt=\"Blog-us logo\">
            </div>
        </div>
        <div class=\"us block\">
            <div class=\"text\">
                <h1>L'équipe</h1>
                <p>Découvrez ici qui compose l'équipe</p>
            </div>
            <div class=\"equipe\">
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        echo "#hugo\">
                    <div class=\"hugo equipe-case\">
                        <p class=\"name\">Hugo</p>
                        <p class=\"work\">Développer</p>
                    </div>
                </a>
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        echo "#corentin\">
                    <div class=\"corentin equipe-case\">
                        <p class=\"name\">Corentin</p>
                        <p class=\"work\">Designer UX|UI</p>
                    </div>
                </a>
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        echo "#marc\">
                    <div class=\"marc equipe-case\">
                        <p class=\"name\">Marc</p>
                        <p class=\"work\">Content Manager</p>
                    </div>
                </a>
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        echo "#valentin\">
                    <div class=\"valentin equipe-case\">
                        <p class=\"name\">Valentin</p>
                        <p class=\"work\">Content Manager</p>
                    </div>
                </a>
                <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        echo "#florent\">
                    <div class=\"florent equipe-case\">
                        <p class=\"name\">Florent</p>
                        <p class=\"work\">Content Manager</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 50,  163 => 44,  154 => 38,  145 => 32,  136 => 26,  124 => 17,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Home{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/homePage.css') }}\">
{% endblock %}
{% block body %}
    <section class=\"landing-page\">
        <div class=\"welcome\">
            <div class=\"text\">
                <span class=\"welcome-txt\">Bienvenue sur</span>
                <h1>BLOG-US</h1>
                <span class=\"description-txt\">
                Notre blog personnel axé sur la technologie ! Découvrez les dernières tendances, gadgets, logiciels, applications mobiles et bien plus encore. Que vous soyez un professionnel de l'informatique ou un passionné de technologie, vous trouverez des astuces, des conseils et des analyses approfondies ici. Restez à jour sur les dernières nouvelles et tendances technologiques en nous rejoignant.
                </span>
            </div>
            <div class=\"image\">
                <img src=\"{{ asset('/assets/img/Logo.png') }}\" alt=\"Blog-us logo\">
            </div>
        </div>
        <div class=\"us block\">
            <div class=\"text\">
                <h1>L'équipe</h1>
                <p>Découvrez ici qui compose l'équipe</p>
            </div>
            <div class=\"equipe\">
                <a href=\"{{ path('who') }}#hugo\">
                    <div class=\"hugo equipe-case\">
                        <p class=\"name\">Hugo</p>
                        <p class=\"work\">Développer</p>
                    </div>
                </a>
                <a href=\"{{ path('who') }}#corentin\">
                    <div class=\"corentin equipe-case\">
                        <p class=\"name\">Corentin</p>
                        <p class=\"work\">Designer UX|UI</p>
                    </div>
                </a>
                <a href=\"{{ path('who') }}#marc\">
                    <div class=\"marc equipe-case\">
                        <p class=\"name\">Marc</p>
                        <p class=\"work\">Content Manager</p>
                    </div>
                </a>
                <a href=\"{{ path('who') }}#valentin\">
                    <div class=\"valentin equipe-case\">
                        <p class=\"name\">Valentin</p>
                        <p class=\"work\">Content Manager</p>
                    </div>
                </a>
                <a href=\"{{ path('who') }}#florent\">
                    <div class=\"florent equipe-case\">
                        <p class=\"name\">Florent</p>
                        <p class=\"work\">Content Manager</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
{% endblock %}
", "home.html.twig", "/var/www/web/dev.silvus.me/blogo/templates/home.html.twig");
    }
}
