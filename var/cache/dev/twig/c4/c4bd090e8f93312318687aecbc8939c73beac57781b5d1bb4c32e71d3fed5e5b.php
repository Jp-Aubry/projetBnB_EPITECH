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

/* ad/show.html.twig */
class __TwigTemplate_a18438780c790e232b53a0717fbdfa00a1e32a87154151174173c4dd4c2c09d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
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

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"ad-title\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 9, $this->source); })()), "coverImage", [], "any", false, false, false, 9), "html", null, true);
        echo ")\">  
    <div class=\"container-1\">
        <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 12, $this->source); })()), "introduction", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <p class=\"h2\">
            <strong>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 14, $this->source); })()), "rooms", [], "any", false, false, false, 14), "html", null, true);
        echo " chambres</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), 2, ",", " "), "html", null, true);
        echo "&euro;</strong> par nuit
        </p>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Réserver !</a>

        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18)))) {
            // line 19
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 19, $this->source); })()), "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes vous sur de vouloir supprimer l'annonce : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
            echo " ?`)\">Supprimer votre annonce !</a>
        ";
        }
        // line 22
        echo "    </div>      
</div>

<div class=\"container\">
<div class=\"parallax\"></div>
    <div class=\"row\">
        <div class=\"col-md-8 mb-3\">  
            ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29);
        echo "

            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 33, $this->source); })()), "images", [], "any", false, false, false, 33));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 34
            echo "                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 34), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 34)) {
                echo "class=\"active\"";
            }
            echo "></li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </ol>
                <div class=\"carousel-inner\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 38, $this->source); })()), "images", [], "any", false, false, false, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 39
            echo "                        <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                echo "active";
            }
            echo "\">
                            <img class=\"d-block w-100\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 40), "html", null, true);
            echo "\" alt=\"First slide\">
                             <div class=\"carousel-caption d-none d-md-block\">
                                <h5>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</h5>
                                <p>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>

            <hr>

            ";
        // line 60
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 60, $this->source); })()), "comments", [], "any", false, false, false, 60)), 0)) {
            // line 61
            echo "                <h2 class=\"mb-3\">Commentaires de nos voyageurs :</h2>

                <div class=\"alert alert-primary\">
                    <h4 class=\"alert-heading text-center\">
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                Note globale donnée par nos voyageurs
                            </div>
                            <div class=\"col\">
                                ";
            // line 70
            $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 70)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 70, $this->source); })()), "avgRatings", [], "any", false, false, false, 70)]));
            // line 71
            echo "                                <br>
                                <small>(Calculée sur ";
            // line 72
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 72, $this->source); })()), "comments", [], "any", false, false, false, 72)), "html", null, true);
            echo " avis)</small>
                            </div>
                        </div>
                    </h4>
                </div>

                ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 78, $this->source); })()), "comments", [], "any", false, false, false, 78));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 79
                echo "                <div class=\"bg-light rounded mb-3 py-3 px-3\">
                    <strong>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 80), "firstName", [], "any", false, false, false, 80), "html", null, true);
                echo "</strong> a dit :
                    <blockquote>
                    ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 82), "html", null, true);
                echo "
                    </blockquote>
                    <strong>Note donnée : </strong>
                    ";
                // line 85
                $this->loadTemplate("partials/rating.html.twig", "ad/show.html.twig", 85)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 85)]));
                // line 86
                echo "                </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "            ";
        } else {
            // line 89
            echo "                <h2>Cette annonce n'a pas encore reçu de commentaires ...</h2>
            ";
        }
        // line 91
        echo "        
        </div>
        <div class=\"col\">
            ";
        // line 94
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 94, $this->source); })()), "author", [], "any", false, false, false, 94);
        // line 95
        echo "            <div class=\"row mb-3 align-items-center\">
                <div class=\"col-3\"> 
                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 97, $this->source); })()), "slug", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 98, $this->source); })()), "picture", [], "any", false, false, false, 98), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 98, $this->source); })()), "fullName", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
                    </a>
                </div>
                <div class=\"col\">
                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 102, $this->source); })()), "slug", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\">
                        <h3>";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 103, $this->source); })()), "fullName", [], "any", false, false, false, 103), "html", null, true);
        echo "</h3>
                    </a>
                    <span class=\"badge badge-primary\">";
        // line 105
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 105, $this->source); })()), "ads", [], "any", false, false, false, 105)), "html", null, true);
        echo " annonces</span>
                </div>
            </div>
            ";
        // line 108
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108);
        echo "
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 108,  374 => 105,  369 => 103,  365 => 102,  356 => 98,  352 => 97,  348 => 95,  346 => 94,  341 => 91,  337 => 89,  334 => 88,  319 => 86,  317 => 85,  311 => 82,  306 => 80,  303 => 79,  286 => 78,  277 => 72,  274 => 71,  272 => 70,  261 => 61,  259 => 60,  244 => 47,  226 => 43,  222 => 42,  217 => 40,  210 => 39,  193 => 38,  189 => 36,  168 => 34,  151 => 33,  144 => 29,  135 => 22,  128 => 20,  123 => 19,  121 => 18,  116 => 16,  109 => 14,  104 => 12,  100 => 11,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ad.title}}
{% endblock %}

{% block body %}

<div class=\"ad-title\" style=\"background-image: url({{ ad.coverImage }})\">  
    <div class=\"container-1\">
        <h1>{{ ad.title}}</h1>
        <p>{{ ad.introduction }}</p>
        <p class=\"h2\">
            <strong>{{ ad.rooms }} chambres</strong> pour <strong>{{ ad.price | number_format(2, ',', ' ')}}&euro;</strong> par nuit
        </p>
        <a href=\"{{ path('booking_create', {'slug' : ad.slug}) }}\" class=\"btn btn-success\">Réserver !</a>

        {% if app.user and app.user == ad.author %}
            <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            <a href=\"{{ path('ads_delete', {'slug': ad.slug}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes vous sur de vouloir supprimer l'annonce : {{ ad.title}} ?`)\">Supprimer votre annonce !</a>
        {% endif %}
    </div>      
</div>

<div class=\"container\">
<div class=\"parallax\"></div>
    <div class=\"row\">
        <div class=\"col-md-8 mb-3\">  
            {{ ad.content| raw}}

            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    {% for image in ad.images %}
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.first %}class=\"active\"{% endif %}></li>
                    {% endfor %}
                </ol>
                <div class=\"carousel-inner\">
                    {% for image in ad.images %}
                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                            <img class=\"d-block w-100\" src=\"{{ image.url }}\" alt=\"First slide\">
                             <div class=\"carousel-caption d-none d-md-block\">
                                <h5>{{ ad.title }}</h5>
                                <p>{{ image.caption }}</p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>

            <hr>

            {% if ad.comments | length > 0 %}
                <h2 class=\"mb-3\">Commentaires de nos voyageurs :</h2>

                <div class=\"alert alert-primary\">
                    <h4 class=\"alert-heading text-center\">
                        <div class=\"row align-items-center\">
                            <div class=\"col\">
                                Note globale donnée par nos voyageurs
                            </div>
                            <div class=\"col\">
                                {% include 'partials/rating.html.twig' with {'rating': ad.avgRatings}%}
                                <br>
                                <small>(Calculée sur {{ad.comments | length}} avis)</small>
                            </div>
                        </div>
                    </h4>
                </div>

                {% for comment in ad.comments %}
                <div class=\"bg-light rounded mb-3 py-3 px-3\">
                    <strong>{{ comment.author.firstName }}</strong> a dit :
                    <blockquote>
                    {{comment.content}}
                    </blockquote>
                    <strong>Note donnée : </strong>
                    {% include 'partials/rating.html.twig' with {'rating': comment.rating} %}
                </div>
                {% endfor %}
            {% else %}
                <h2>Cette annonce n'a pas encore reçu de commentaires ...</h2>
            {% endif %}
        
        </div>
        <div class=\"col\">
            {% set a = ad.author %}
            <div class=\"row mb-3 align-items-center\">
                <div class=\"col-3\"> 
                    <a href=\"{{ path('user_show', {'slug': a.slug}) }}\">
                    <img src=\"{{a.picture}}\" class=\"avatar avatar-medium\" alt=\"avatar de {{ a.fullName }}\">
                    </a>
                </div>
                <div class=\"col\">
                    <a href=\"{{ path('user_show', {'slug': a.slug}) }}\">
                        <h3>{{ a.fullName }}</h3>
                    </a>
                    <span class=\"badge badge-primary\">{{a.ads | length }} annonces</span>
                </div>
            </div>
            {{ a.description | raw}}
        </div>
    </div>
</div>

{% endblock %}", "ad/show.html.twig", "/home/aubry/Bureau/projetbnb(copie)/projetbnbV9/templates/ad/show.html.twig");
    }
}
