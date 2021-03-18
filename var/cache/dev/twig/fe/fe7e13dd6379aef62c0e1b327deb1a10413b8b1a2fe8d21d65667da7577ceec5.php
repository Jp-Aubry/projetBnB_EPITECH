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

/* partials/header.html.twig */
class __TwigTemplate_8357108806e1c7608ea2c89d16be8d2a083a146cfc2434f1f63d02389d9d2e9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-expand-lg sticky-top navbar-dark bg-primary\">
<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">YesWeekend !</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">ACCUEIL</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\">ANNONCES</a>
        </li>
    </ul>
    <ul class=\"navbar-nav ml-auto\">
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <li class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "picture", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "fullName", [], "any", false, false, false, 21), "html", null, true);
            echo "
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                    <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_create");
            echo "\" class=\"dropdown-item\">Créer une annonce</a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
            echo "\" class=\"dropdown-item\">Mon compte</a>
                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_bookings");
            echo "\" class=\"dropdown-item\">Mes réservations</a>
                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
            echo "\" class=\"dropdown-item\">Modifier mon profil</a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"dropdown-item\">Déconnexion</a>
                </div>
            </li>
        ";
        } else {
            // line 35
            echo "                <li class=\"nav-item\">
                <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\" class=\"nav-link\">INSCRIPTION</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"nav-link\">CONNEXION</a>
            </li>
        ";
        }
        // line 42
        echo "    </ul>
</div>
</nav>

";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "flashes", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 47
            echo "    <div class=\"container\">
        <div class=\"alert alert-";
            // line 48
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 50
                echo "                <p>";
                echo $context["message"];
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
<script>
    (new IntersectionObserver(function(e,o){
    if (e[0].intersectionRatio > 0){
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class','stuck');
    };
})).observe(document.querySelector('.trigger'));
</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 55,  158 => 52,  149 => 50,  145 => 49,  141 => 48,  138 => 47,  134 => 46,  128 => 42,  122 => 39,  116 => 36,  113 => 35,  106 => 31,  101 => 29,  97 => 28,  93 => 27,  88 => 25,  77 => 21,  73 => 19,  71 => 18,  64 => 14,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-expand-lg sticky-top navbar-dark bg-primary\">
<a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">YesWeekend !</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
    <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">ACCUEIL</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('ads_index') }}\">ANNONCES</a>
        </li>
    </ul>
    <ul class=\"navbar-nav ml-auto\">
        {% if app.user %}
            <li class=\"nav-item dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                    <img src=\"{{app.user.picture}}\" class=\"avatar avatar-mini\" alt=\"Avatar de {{app.user.fullName}}\"> {{ app.user.fullName }}
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                    <a href=\"{{ path('ads_create') }}\" class=\"dropdown-item\">Créer une annonce</a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"{{ path('account_index') }}\" class=\"dropdown-item\">Mon compte</a>
                    <a href=\"{{ path('account_bookings') }}\" class=\"dropdown-item\">Mes réservations</a>
                    <a href=\"{{ path('account_profile') }}\" class=\"dropdown-item\">Modifier mon profil</a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"{{ path('account_logout') }}\" class=\"dropdown-item\">Déconnexion</a>
                </div>
            </li>
        {% else %}
                <li class=\"nav-item\">
                <a href=\"{{ path('account_register') }}\" class=\"nav-link\">INSCRIPTION</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('account_login') }}\" class=\"nav-link\">CONNEXION</a>
            </li>
        {% endif %}
    </ul>
</div>
</nav>

{% for label, messages in app.flashes %}
    <div class=\"container\">
        <div class=\"alert alert-{{ label }}\">
            {% for message in messages %}
                <p>{{ message | raw }}</p>
            {% endfor %}
        </div>
    </div>
{% endfor %}

<script>
    (new IntersectionObserver(function(e,o){
    if (e[0].intersectionRatio > 0){
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class','stuck');
    };
})).observe(document.querySelector('.trigger'));
</script>

", "partials/header.html.twig", "/home/aubry/Bureau/projetbnb(copie)/projetbnbV9/templates/partials/header.html.twig");
    }
}
