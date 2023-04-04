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

/* who/index.html.twig */
class __TwigTemplate_996c79825ccafa8ae466758776a14160 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "who/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "who/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "who/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Qui Sommes-nous ?";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/who.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <section class=\"content\">
        <div class=\"hugo fiche left block\">
            <span id=\"hugo\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>COMBE</h1>
                    <div class=\"second-line\">
                        <h1>Hugo</h1>
                        <h3>Développeur</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Je m'appelle Hugo COMBE et j'ai 19 ans. Ayant obtenu mon baccalauréat général avec une spécialité en mathématiques et physique ainsi qu'une option math-expert, je suis actuellement en première année à l'ESGI. Mes centres d'intérêt sont nombreux et incluent notamment le sport automobile, l'informatique, l'actualité et le journalisme, la photographie et la finance. Bien que je sois dyslexique, dysorthographique et autiste, j'aborde chaque jour avec détermination et persévérance pour évoluer et améliorer mes compétences.</p>
                <p class=\"desc-pro desc\">Je travaille actuellement chez <a href=\"https://www.websource.fr/\">\"Websource\"</a>, une agence web, mais je rejoindrai bientôt une entreprise spécialisée dans l'e-learning et la cybersécurité nommée <a href=\"https://kamae.fr/\">\"Kamaé\"</a> à partir du 12 avril 2023. Étant donné que je ne peux pas me permettre de ne pas travailler, j'ai eu plusieurs emplois saisonniers tels que travailler dans les champs ou à la banque. En mai 2021, j'ai créé ma propre auto-entreprise où je travaille généralement avec des personnalités du web pour des entretiens logiciels ou des développements spécifiques.</p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-istj\">ISTJ</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"https://github.com/SilvusTV\">Github</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/hugo-combe-813483210/\">Linkedin</a></span>
                </div>
            </div>
        </div>

        <div class=\"corentin fiche right block\">
            <span id=\"corentin\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>METTON</h1>
                    <div class=\"second-line\">
                        <h1>Corentin</h1>
                        <h3>Designer UX|UI</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Je suis un jeune étudiant de 19 ans qui poursuit ses études à l'ESGI, et je suis fasciné par le développent. En parallèle des cours , je travaille en intérimaire a inter marcher pour me faire une peu d'argents car a défauts de mes compères je n'ai pas de d'alternance dans ce milieu que j'aimerai faire passer de loisir a travaille. Je ne veux pas être un personnage principale comme dans des romans moi le rôle que j'apprécie est celui du meilleur ami du héros et pour terminer je suis l'exacte opposer a Hugo Combe</p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-enfp\">ENFP</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"https://github.com/Crtmetton\">Github</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/corentin-metton-b5053021a/\">Linkedin</a></span>
                </div>
            </div>
        </div>

        <div class=\"marc fiche left block\">
            <span id=\"marc\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>TELENA</h1>
                    <div class=\"second-line\">
                        <h1>Marc</h1>
                        <h3>Content manager</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Je suis un jeune étudiant de 18 ans qui poursuit ses études à l'ESGI, et je suis fasciné par le développement web. Je souhaite faire de cette passion mon métier à l'avenir. En dehors des cours, je me ressource en pratiquant la course camarguaise, un sport traditionnel du sud de la France qui me permet de me déconnecter du monde numérique. En tant que personne de type ISFP, je suis plutôt réservé et j'ai un penchant pour les décisions concrètes et réfléchies. Je suis impliqué dans les projets qui me tiennent à cœur et je suis déterminé à les mener à bien, même si cela peut parfois demander beaucoup d'efforts. </p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-isfp\">ISFP</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"#\" style=\"text-decoration: none \">Undefined</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/marc-telena-119a02233/\">Linkedin</a></span>
                </div>
            </div>
        </div>

        <div class=\"valentin fiche right block\">
            <span id=\"valentin\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>ROLLY</h1>
                    <div class=\"second-line\">
                        <h1>Valentin</h1>
                        <h3>Content manager</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Étudiant en première année en informatique, j'ai pour ambition de me spécialiser en cybersécurité. J'aime découvrir comment résoudre de nouveaux problèmes ainsi que m'améliorer en général. J'ai pour passion le parkour que je pratique depuis quelques années maintenant, ainsi que voyager. De personnalité ESFP, j'aime agir en groupe et avec liberté ainsi que créer une bonne atmosphère avec les gens avec qui je travaille.</p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-esfp\">ESFP</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"#\" style=\"text-decoration: none \">Undefined</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/valentin-rolly-bb89b7254/\">Linkedin</a></span>
                </div>
            </div>
        </div>
        <div class=\"florent fiche left block\">
            <span id=\"florent\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
            <div class=\"name\">
                <h1>COLOMBARI</h1>
                <div class=\"second-line\">
                    <h1>Florent</h1>
                    <h3>Content manager</h3>
                </div>
            </div>
            <p class=\"desc-perso desc\">Florent Colombari, né en 2000 et étudiant en 1 ère année en cybersécurité à l’ESGI, située à Aix en Provence. J’ai, depuis petit, baigné dans un monde rempli de technologies, évoluant de plus en plus, et de jours en jours. Ce que j’aime le plus : me documenter sur comment fonctionnent les réseaux sociaux actuels, avec leurs évolutions et leurs failles. Et lorsque je ne suis pas plongé dans mes cours ou mes sessions de code, j’aime faire de la musique. Je compose pour mon propre plaisir, mais j’en produit aussi pour des artistes. Toute ma famille habitant dans les environs, nous avons toujours été soudés, et passer du temps avec eux m’est très cher. Pour moi, mon Professional goal serait de devenir Manager/ Leader en Cybersécurité</p>
            <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/\" style=\"text-decoration: none \">****</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"#\" style=\"text-decoration: none \">Undefined</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/florent-colombari-981b48165/\">Linkedin</a></span>
                </div>
            </div>
        </div>

    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "who/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 8,  102 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Qui Sommes-nous ?{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/assets/css/who.css') }}\">
{% endblock %}
{% block body %}
    <section class=\"content\">
        <div class=\"hugo fiche left block\">
            <span id=\"hugo\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>COMBE</h1>
                    <div class=\"second-line\">
                        <h1>Hugo</h1>
                        <h3>Développeur</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Je m'appelle Hugo COMBE et j'ai 19 ans. Ayant obtenu mon baccalauréat général avec une spécialité en mathématiques et physique ainsi qu'une option math-expert, je suis actuellement en première année à l'ESGI. Mes centres d'intérêt sont nombreux et incluent notamment le sport automobile, l'informatique, l'actualité et le journalisme, la photographie et la finance. Bien que je sois dyslexique, dysorthographique et autiste, j'aborde chaque jour avec détermination et persévérance pour évoluer et améliorer mes compétences.</p>
                <p class=\"desc-pro desc\">Je travaille actuellement chez <a href=\"https://www.websource.fr/\">\"Websource\"</a>, une agence web, mais je rejoindrai bientôt une entreprise spécialisée dans l'e-learning et la cybersécurité nommée <a href=\"https://kamae.fr/\">\"Kamaé\"</a> à partir du 12 avril 2023. Étant donné que je ne peux pas me permettre de ne pas travailler, j'ai eu plusieurs emplois saisonniers tels que travailler dans les champs ou à la banque. En mai 2021, j'ai créé ma propre auto-entreprise où je travaille généralement avec des personnalités du web pour des entretiens logiciels ou des développements spécifiques.</p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-istj\">ISTJ</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"https://github.com/SilvusTV\">Github</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/hugo-combe-813483210/\">Linkedin</a></span>
                </div>
            </div>
        </div>

        <div class=\"corentin fiche right block\">
            <span id=\"corentin\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>METTON</h1>
                    <div class=\"second-line\">
                        <h1>Corentin</h1>
                        <h3>Designer UX|UI</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Je suis un jeune étudiant de 19 ans qui poursuit ses études à l'ESGI, et je suis fasciné par le développent. En parallèle des cours , je travaille en intérimaire a inter marcher pour me faire une peu d'argents car a défauts de mes compères je n'ai pas de d'alternance dans ce milieu que j'aimerai faire passer de loisir a travaille. Je ne veux pas être un personnage principale comme dans des romans moi le rôle que j'apprécie est celui du meilleur ami du héros et pour terminer je suis l'exacte opposer a Hugo Combe</p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-enfp\">ENFP</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"https://github.com/Crtmetton\">Github</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/corentin-metton-b5053021a/\">Linkedin</a></span>
                </div>
            </div>
        </div>

        <div class=\"marc fiche left block\">
            <span id=\"marc\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>TELENA</h1>
                    <div class=\"second-line\">
                        <h1>Marc</h1>
                        <h3>Content manager</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Je suis un jeune étudiant de 18 ans qui poursuit ses études à l'ESGI, et je suis fasciné par le développement web. Je souhaite faire de cette passion mon métier à l'avenir. En dehors des cours, je me ressource en pratiquant la course camarguaise, un sport traditionnel du sud de la France qui me permet de me déconnecter du monde numérique. En tant que personne de type ISFP, je suis plutôt réservé et j'ai un penchant pour les décisions concrètes et réfléchies. Je suis impliqué dans les projets qui me tiennent à cœur et je suis déterminé à les mener à bien, même si cela peut parfois demander beaucoup d'efforts. </p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-isfp\">ISFP</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"#\" style=\"text-decoration: none \">Undefined</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/marc-telena-119a02233/\">Linkedin</a></span>
                </div>
            </div>
        </div>

        <div class=\"valentin fiche right block\">
            <span id=\"valentin\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
                <div class=\"name\">
                    <h1>ROLLY</h1>
                    <div class=\"second-line\">
                        <h1>Valentin</h1>
                        <h3>Content manager</h3>
                    </div>
                </div>
                <p class=\"desc-perso desc\">Étudiant en première année en informatique, j'ai pour ambition de me spécialiser en cybersécurité. J'aime découvrir comment résoudre de nouveaux problèmes ainsi que m'améliorer en général. J'ai pour passion le parkour que je pratique depuis quelques années maintenant, ainsi que voyager. De personnalité ESFP, j'aime agir en groupe et avec liberté ainsi que créer une bonne atmosphère avec les gens avec qui je travaille.</p>
                <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/la-personnalite-esfp\">ESFP</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"#\" style=\"text-decoration: none \">Undefined</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/valentin-rolly-bb89b7254/\">Linkedin</a></span>
                </div>
            </div>
        </div>
        <div class=\"florent fiche left block\">
            <span id=\"florent\" class=\"anchor\"></span>
            <div class=\"img\"></div>
            <div class=\"text\">
            <div class=\"name\">
                <h1>COLOMBARI</h1>
                <div class=\"second-line\">
                    <h1>Florent</h1>
                    <h3>Content manager</h3>
                </div>
            </div>
            <p class=\"desc-perso desc\">Florent Colombari, né en 2000 et étudiant en 1 ère année en cybersécurité à l’ESGI, située à Aix en Provence. J’ai, depuis petit, baigné dans un monde rempli de technologies, évoluant de plus en plus, et de jours en jours. Ce que j’aime le plus : me documenter sur comment fonctionnent les réseaux sociaux actuels, avec leurs évolutions et leurs failles. Et lorsque je ne suis pas plongé dans mes cours ou mes sessions de code, j’aime faire de la musique. Je compose pour mon propre plaisir, mais j’en produit aussi pour des artistes. Toute ma famille habitant dans les environs, nous avons toujours été soudés, et passer du temps avec eux m’est très cher. Pour moi, mon Professional goal serait de devenir Manager/ Leader en Cybersécurité</p>
            <span class=\"personality\">
                <b>Type de personnalité : </b>
                <a href=\"https://www.16personalities.com/fr/\" style=\"text-decoration: none \">****</a>
            </span>
                <div class=\"social\">
                    <span class=\"github\"><i class=\"fa-brands fa-square-github\"></i> : <a href=\"#\" style=\"text-decoration: none \">Undefined</a></span>
                    <span class=\"LinkedIn\"><i class=\"fa-brands fa-linkedin\"></i> : <a href=\"https://www.linkedin.com/in/florent-colombari-981b48165/\">Linkedin</a></span>
                </div>
            </div>
        </div>

    </section>
{% endblock %}
", "who/index.html.twig", "/var/www/web/dev.silvus.me/blogo/templates/who/index.html.twig");
    }
}
