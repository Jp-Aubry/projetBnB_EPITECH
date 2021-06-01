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

/* admin/account/login.html.twig */
class __TwigTemplate_f62e289fcd5585273602eefdb39b12dbf9e062999bd282d4a790b5861ebb6611 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion à l'administration</title>
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <script src=\"https://kit.fontawesome.com/e3f1f5a88d.js\" crossorigin=\"anonymous\"></script>

    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .card {
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div class=\"col-md-4\">
        <div class=\"card bg-light\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">
                    <i class=\"fas fa-lock\">Connexion à l'administration</i>
                </h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 31
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                    <div class=\"alert alert-warning\">
                        <p>Les informations fournies ne sont pas valides.</p>
                    </div>
                ";
        }
        // line 36
        echo "                <form method=\"post\">
                    <div class=\"form-group\"><label for=\"_username\">Email</label><input type=\"text\" 
                    class=\"form-control\" placeholder=\"Adresse email\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\"></div>
                    <div class=\"form-group\"><label for=\"_password\">Mot de passe</label><input type=\"password\" 
                    class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\"></div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary float-right\">
                            <i class=\"fas fa-lock-open \"></i>
                                Connexion !
                        </button>
                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-link\">
                            <i class=\"fas fa-arrow-circle-left\"></i>
                            Retour au site
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  87 => 38,  83 => 36,  77 => 32,  75 => 31,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion à l'administration</title>
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <script src=\"https://kit.fontawesome.com/e3f1f5a88d.js\" crossorigin=\"anonymous\"></script>

    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .card {
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div class=\"col-md-4\">
        <div class=\"card bg-light\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">
                    <i class=\"fas fa-lock\">Connexion à l'administration</i>
                </h4>
            </div>
            <div class=\"card-body\">
                {% if hasError %}
                    <div class=\"alert alert-warning\">
                        <p>Les informations fournies ne sont pas valides.</p>
                    </div>
                {% endif %}
                <form method=\"post\">
                    <div class=\"form-group\"><label for=\"_username\">Email</label><input type=\"text\" 
                    class=\"form-control\" placeholder=\"Adresse email\" name=\"_username\" value=\"{{username}}\"></div>
                    <div class=\"form-group\"><label for=\"_password\">Mot de passe</label><input type=\"password\" 
                    class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\"></div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary float-right\">
                            <i class=\"fas fa-lock-open \"></i>
                                Connexion !
                        </button>
                        <a href=\"{{ path('homepage') }}\" class=\"btn btn-link\">
                            <i class=\"fas fa-arrow-circle-left\"></i>
                            Retour au site
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>", "admin/account/login.html.twig", "/home/aubry/Bureau/projetbnb_EPITECH NE/templates/admin/account/login.html.twig");
    }
}
