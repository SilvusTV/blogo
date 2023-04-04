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

/* base.html.twig */
class __TwigTemplate_d402b493fbf0345f1cc863af05897ca9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/Logo.png"), "html", null, true);
        echo "\">
        ";
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/footer.css"), "html", null, true);
        echo "\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
    <nav class=\"navbar jcontent-center\">
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"navbar-btn home ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 21, $this->source); })()) == "home"))) {
            echo "active";
        }
        echo "\">Accueil</a>
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog.index");
        echo "\" class=\"navbar-btn blog ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 22, $this->source); })()) == "blog"))) {
            echo "active";
        }
        echo "\">Blog</a>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("who");
        echo "\" class=\"navbar-btn who ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 23, $this->source); })()) == "who"))) {
            echo "active";
        }
        echo "\">Qui sommes nous ?</a>
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"navbar-btn contact ";
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 24, $this->source); })()) == "contact"))) {
            echo "active";
        }
        echo "\">Contact</a>
    </nav>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    </body>
<footer>
    <div class=\"footer block\">
        <div class=\"left-part\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/blog-us.png"), "html", null, true);
        echo "\" alt=\"blog-us logo text\" width=\"50%\">
            <div class=\"address\">
                <h1>Adresse</h1>
                <a href=\"https://www.google.fr/maps/place/ESGI+Aix-en-Provence/@43.5094452,5.4366797,15.61z/data=!4m6!3m5!1s0x12c98d8132772773:0x671b3f89fff5d7f0!8m2!3d43.5135555!4d5.428063!16s%2Fg%2F11fqv12pzy\" target=\"_blank\">684 Avenue du Club Hippique,<br>Aix-en-Provence 13100</a>
            </div>
        </div>
        <div class=\"midle-part\">
            <span class=\"quote\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/quote.svg"), "html", null, true);
        echo "\" alt=\"quotes\"></span>
            <p>La technologie n'est pas un substitut à la motivation et à l'engagement, mais elle peut être un catalyseur pour les deux.</p>
            <p>- Zig Ziglar</p>
        </div>
        <div class=\"right-part\">
            <div class=\"newsletter\">
                <h1>Newsletter</h1>
                <form action=\"\" method=\"post\">
                    <input type=\"email\" name=\"email-input\" id=\"email-input\" class=\"email-input\" placeholder=\"✉ Entrez votre adresse email\">
                    <button type=\"submit\" class=\"button\">S'abonner →</button>
                </form>
            </div>
            <div class=\"liens\">
                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sitemap");
        echo "\" class=\"sitemap \">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
            <script src=\"https://kit.fontawesome.com/cdc2e02d98.js\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  232 => 26,  218 => 15,  208 => 14,  195 => 11,  185 => 10,  166 => 5,  149 => 51,  133 => 38,  123 => 31,  117 => 27,  115 => 26,  106 => 24,  98 => 23,  90 => 22,  82 => 21,  77 => 18,  75 => 14,  72 => 13,  70 => 10,  66 => 9,  61 => 8,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('/assets/img/Logo.png') }}\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/main.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/footer.css') }}\">
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
            <script src=\"https://kit.fontawesome.com/cdc2e02d98.js\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
    <nav class=\"navbar jcontent-center\">
        <a href=\"{{ path('home') }}\" class=\"navbar-btn home {% if current_menu  is defined and current_menu == 'home' %}active{% endif %}\">Accueil</a>
        <a href=\"{{ path('blog.index') }}\" class=\"navbar-btn blog {% if current_menu  is defined and current_menu == 'blog' %}active{% endif %}\">Blog</a>
        <a href=\"{{ path('who') }}\" class=\"navbar-btn who {% if current_menu  is defined and current_menu == 'who' %}active{% endif %}\">Qui sommes nous ?</a>
        <a href=\"{{ path('contact') }}\" class=\"navbar-btn contact {% if current_menu  is defined and current_menu == 'contact' %}active{% endif %}\">Contact</a>
    </nav>
        {% block body %}{% endblock %}
    </body>
<footer>
    <div class=\"footer block\">
        <div class=\"left-part\">
            <img src=\"{{ asset('/assets/img/blog-us.png') }}\" alt=\"blog-us logo text\" width=\"50%\">
            <div class=\"address\">
                <h1>Adresse</h1>
                <a href=\"https://www.google.fr/maps/place/ESGI+Aix-en-Provence/@43.5094452,5.4366797,15.61z/data=!4m6!3m5!1s0x12c98d8132772773:0x671b3f89fff5d7f0!8m2!3d43.5135555!4d5.428063!16s%2Fg%2F11fqv12pzy\" target=\"_blank\">684 Avenue du Club Hippique,<br>Aix-en-Provence 13100</a>
            </div>
        </div>
        <div class=\"midle-part\">
            <span class=\"quote\"><img src=\"{{  asset('/assets/img/quote.svg') }}\" alt=\"quotes\"></span>
            <p>La technologie n'est pas un substitut à la motivation et à l'engagement, mais elle peut être un catalyseur pour les deux.</p>
            <p>- Zig Ziglar</p>
        </div>
        <div class=\"right-part\">
            <div class=\"newsletter\">
                <h1>Newsletter</h1>
                <form action=\"\" method=\"post\">
                    <input type=\"email\" name=\"email-input\" id=\"email-input\" class=\"email-input\" placeholder=\"✉ Entrez votre adresse email\">
                    <button type=\"submit\" class=\"button\">S'abonner →</button>
                </form>
            </div>
            <div class=\"liens\">
                <a href=\"{{ path('sitemap') }}\" class=\"sitemap \">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
</html>
", "base.html.twig", "/var/www/web/dev.silvus.me/blogo/templates/base.html.twig");
    }
}
