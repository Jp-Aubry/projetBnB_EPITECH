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

/* booking/show.html.twig */
class __TwigTemplate_c2edb7812ebd0a4650633136c61316b21defed357ac1480baa7175e0d930b128 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "réservation n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 7, $this->source); })()), "ad", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 8, $this->source); })()), "author", [], "any", false, false, false, 8);
        // line 9
        echo "

    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation (n°";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo ")</h1>

        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", [0 => "withAlert"], "method", false, false, false, 14)) {
            // line 15
            echo "
            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de
                    <strong>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 21, $this->source); })()), "fullName", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                    </strong>
                    pour l'annonce
                    <strong>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                    </strong>
                    a bien été prise en compte !
                </p>
            </div>

        ";
        }
        // line 32
        echo "
        <div class=\"row-md\">
            <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2>Détails</h2>
                <dl class=\"row\">
                    <dt class=\"col-md-4\">Numéro</dt>
                    <dd class=\"col-md-8\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Date d'arrivée</dt>
                    <dd class=\"col-md-8\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 41, $this->source); })()), "startDate", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Date de départ</dt>
                    <dd class=\"col-md-8\">";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 43, $this->source); })()), "endDate", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Nombre de nuits</dt>
                    <dd class=\"col-md-8\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 45, $this->source); })()), "duration", [], "any", false, false, false, 45), "html", null, true);
        echo "</dd>
                    <dt class=\"col-md-4\">Montant totale</dt>
                    <dd class=\"col-md-8\">";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 47, $this->source); })()), "amount", [], "any", false, false, false, 47), 2, ",", " "), "html", null, true);
        echo " &euro;</dd>
                    <dt class=\"col-md-4\">Commentaire</dt>
                    <dd class=\"col-md-8\">";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", false, false, false, 49), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                </dl>

                <hr>

                <h2 class=\"alert-heading\">Votre hôte</h2>

                <div class=\"row mb-3\">
                    <div class=\"col-3\">
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 58, $this->source); })()), "picture", [], "any", false, false, false, 58), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 58, $this->source); })()), "fullName", [], "any", false, false, false, 58), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"col-9\">
                        <h4>
                            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 62, $this->source); })()), "slug", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 62, $this->source); })()), "fullName", [], "any", false, false, false, 62), "html", null, true);
        echo "</a>
                        </h4>

                        <span class=\"badge badge-primary\">";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 65, $this->source); })()), "ads", [], "any", false, false, false, 65)), "html", null, true);
        echo "</span> annonces
                    </div>
                </div>
                ";
        // line 68
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68);
        echo "

                <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 70, $this->source); })()), "slug", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Plus d'info sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 70, $this->source); })()), "firstName", [], "any", false, false, false, 70), "html", null, true);
        echo "</a>
            </div>

                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    ";
        // line 75
        if (1 === twig_compare(twig_date_converter($this->env), twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 75, $this->source); })()), "endDate", [], "any", false, false, false, 75)))) {
            // line 76
            echo "                        ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 76, $this->source); })()), "ad", [], "any", false, false, false, 76), "getCommentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)], "method", false, false, false, 76);
            // line 77
            echo "                        ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 77, $this->source); })()))) {
                // line 78
                echo "                            <blockquote>    
                                ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 79, $this->source); })()), "content", [], "any", false, false, false, 79), "html", null, true);
                echo "
                            </blockquote>
                            <strong>Note : </strong> ";
                // line 81
                $this->loadTemplate("partials/rating.html.twig", "booking/show.html.twig", 81)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 81, $this->source); })()), "rating", [], "any", false, false, false, 81)]));
                // line 82
                echo "                        ";
            } else {
                // line 83
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_start');
                echo "
                            ";
                // line 84
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'widget');
                echo "
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
                            ";
                // line 86
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
                echo "
                        ";
            }
            // line 88
            echo "                    ";
        } else {
            // line 89
            echo "                        <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet !</p>
                    ";
        }
        // line 91
        echo "                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert-heading\">Votre hébergement</h2>

                    <h4>
                         <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 98, $this->source); })()), "slug", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 98, $this->source); })()), "title", [], "any", false, false, false, 98), "html", null, true);
        echo "</a>
                    </h4>
                    <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 100, $this->source); })()), "coverImage", [], "any", false, false, false, 100), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 100, $this->source); })()), "title", [], "any", false, false, false, 100), "html", null, true);
        echo "\" class=\"img-fluid\">

                    ";
        // line 102
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 102, $this->source); })()), "content", [], "any", false, false, false, 102);
        echo "

                    <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 104, $this->source); })()), "slug", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 104,  289 => 102,  282 => 100,  275 => 98,  266 => 91,  262 => 89,  259 => 88,  254 => 86,  249 => 84,  244 => 83,  241 => 82,  239 => 81,  234 => 79,  231 => 78,  228 => 77,  225 => 76,  223 => 75,  213 => 70,  208 => 68,  202 => 65,  194 => 62,  185 => 58,  173 => 49,  168 => 47,  163 => 45,  158 => 43,  153 => 41,  148 => 39,  139 => 32,  127 => 25,  118 => 21,  110 => 15,  108 => 14,  103 => 12,  98 => 9,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}réservation n°{{booking.id}}!{% endblock %}

{% block body %}

    {% set ad = booking.ad %}
    {% set author = ad.author %}


    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation (n°{{booking.id}})</h1>

        {% if app.request.query.get('withAlert') %}

            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Bravo !</h4>
                <p>
                    Votre réservation auprès de
                    <strong>
                        <a href=\"{{ path(\"user_show\", {'slug': author.slug}) }}\">{{ author.fullName}}</a>
                    </strong>
                    pour l'annonce
                    <strong>
                        <a href=\"{{ path(\"ads_show\", {'slug': ad.slug}) }}\">{{ ad.title }}</a>
                    </strong>
                    a bien été prise en compte !
                </p>
            </div>

        {% endif %}

        <div class=\"row-md\">
            <div class=\"col\">
            <div class=\"alert alert-light\">
                <h2>Détails</h2>
                <dl class=\"row\">
                    <dt class=\"col-md-4\">Numéro</dt>
                    <dd class=\"col-md-8\">{{booking.id}}</dd>
                    <dt class=\"col-md-4\">Date d'arrivée</dt>
                    <dd class=\"col-md-8\">{{booking.startDate | date('d/m/Y')}}</dd>
                    <dt class=\"col-md-4\">Date de départ</dt>
                    <dd class=\"col-md-8\">{{booking.endDate | date('d/m/Y')}}</dd>
                    <dt class=\"col-md-4\">Nombre de nuits</dt>
                    <dd class=\"col-md-8\">{{booking.duration}}</dd>
                    <dt class=\"col-md-4\">Montant totale</dt>
                    <dd class=\"col-md-8\">{{booking.amount | number_format(2, ',', ' ')}} &euro;</dd>
                    <dt class=\"col-md-4\">Commentaire</dt>
                    <dd class=\"col-md-8\">{{booking.comment | default('Aucun commentaire')}}</dd>
                </dl>

                <hr>

                <h2 class=\"alert-heading\">Votre hôte</h2>

                <div class=\"row mb-3\">
                    <div class=\"col-3\">
                        <img src=\"{{ author.picture }}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{ author.fullName }}\">
                    </div>
                    <div class=\"col-9\">
                        <h4>
                            <a href=\"{{ path('user_show', {'slug' : author.slug}) }}\">{{ author.fullName}}</a>
                        </h4>

                        <span class=\"badge badge-primary\">{{author.ads | length}}</span> annonces
                    </div>
                </div>
                {{author.description | raw}}

                <a href=\"{{ path(\"user_show\", {'slug' : author.slug})}}\" class=\"btn btn-success\">Plus d'info sur {{author.firstName}}</a>
            </div>

                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Votre avis compte !</h2>
                    {% if date() > date(booking.endDate) %}
                        {% set comment = booking.ad.getCommentFromAuthor(app.user) %}
                        {% if comment is not null %}
                            <blockquote>    
                                {{ comment.content }}
                            </blockquote>
                            <strong>Note : </strong> {% include 'partials/rating.html.twig' with {'rating': comment.rating} %}
                        {% else %}
                            {{ form_start(form) }}
                            {{ form_widget(form) }}
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer !</button>
                            {{ form_end(form) }}
                        {% endif %}
                    {% else %}
                        <p>Vous ne pourrez pas noter cette annonce tant que votre voyage ne sera pas complet !</p>
                    {% endif %}
                </div>
            </div>
            <div class=\"col\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert-heading\">Votre hébergement</h2>

                    <h4>
                         <a href=\"{{ path('ads_show', {'slug' : ad.slug}) }}\">{{ad.title}}</a>
                    </h4>
                    <img src=\"{{ad.coverImage}}\" alt=\"Image de {{ad.title}}\" class=\"img-fluid\">

                    {{ad.content | raw}}

                    <a href=\"{{ path('ads_show', {'slug' : ad.slug}) }}\" class=\"btn btn-success\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "booking/show.html.twig", "/home/aubry/Bureau/projetbnb(copie)/projetbnbV9/templates/booking/show.html.twig");
    }
}
