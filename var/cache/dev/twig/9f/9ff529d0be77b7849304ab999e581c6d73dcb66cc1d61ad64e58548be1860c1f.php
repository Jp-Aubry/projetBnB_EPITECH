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

/* booking/book.html.twig */
class __TwigTemplate_27c3a66a42b281a32d2cfbe6be344fc3da4b5add625da78ca3095e255502fa5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylsheets' => [$this, 'block_stylsheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "booking/book.html.twig", 1);
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

        echo "Réserver l'annonce : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylsheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylsheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylsheets"));

        // line 6
        echo "  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css\" integrity=\"sha256-JDBcnYeV19J14isGd3EtnsCQK05d8PczJ5+fvEvBJvI=\" crossorigin=\"anonymous\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container\">
        <h1>Réserver pour l'annonce : <em>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</em></h1>

        <p>Vous êtes sur le point de réserver le bien de <strong>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "author", [], "any", false, false, false, 13), "fullName", [], "any", false, false, false, 13), "html", null, true);
        echo "</strong>dites nous tout, on s'occupe du reste !</p>

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
        <div class=\"alert alert-light\">
            <h4>Quelles sont les dates qui vous intéressent ?</h4>
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "startDate", [], "any", false, false, false, 20), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "endDate", [], "any", false, false, false, 23), 'row');
        echo "
                </div>
            </div>
            <h4 class=\"mt-2\">Montant du séjour : <span id=\"amount\">...</span>&euro;</h4>
            <span id=\"days\">0</span> nuit(s) à ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), 2, ",", " "), "html", null, true);
        echo " &euro; par nuit

            <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "comment", [], "any", false, false, false, 30), 'row');
        echo "
        </div>
        <h4><sttrong>Vous avez terminé !</sttrong></h4>
            <p>Week-end de rêve ? Hébergement professionnel ? YesWeekend !</p>

            <button type=\"submit\" class=\"btn btn-success\">Je réserve !</button>

            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
            <br>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js\" integrity=\"sha256-tW5LzEC7QjhG0CiAvxlseMTs2qJS7u3DRPauDjFJ3zo=\" crossorigin=\"anonymous\"></script>

    <script>
        \$(document).ready(function(){
            \$('#booking_startDate, #booking_endDate').datepicker({
                format: 'dd/mm/yyyy',
                datesDisabled: [
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 50, $this->source); })()), "notAvailableDays", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 51
            echo "                        \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "format", [0 => "d/m/Y"], "method", false, false, false, 51), "html", null, true);
            echo "\",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                ],
                startDate: new Date()
            });

            \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
        });

        function calculateAmount(){
            const endDate = new Date(\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/,'\$3-\$2-\$1'));
            const startDate = new Date(\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/,'\$3-\$2-\$1'));

            if(startDate && endDate && startDate < endDate){
                const DAY_TIME = 24 * 60 * 60 * 1000;

                const interval = endDate.getTime() - startDate.getTime();
                const days = interval / DAY_TIME;
                const amount = days * ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 69, $this->source); })()), "price", [], "any", false, false, false, 69), "html", null, true);
        echo ";

                \$('#days').text(days);
                \$('#amount').text(amount.toLocaleString('fr-FR'));
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 69,  209 => 53,  200 => 51,  196 => 50,  187 => 43,  177 => 42,  163 => 37,  153 => 30,  147 => 27,  140 => 23,  134 => 20,  126 => 15,  121 => 13,  116 => 11,  113 => 10,  103 => 9,  92 => 6,  82 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réserver l'annonce : {{ad.title}}!{% endblock %}

{% block stylsheets %}
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css\" integrity=\"sha256-JDBcnYeV19J14isGd3EtnsCQK05d8PczJ5+fvEvBJvI=\" crossorigin=\"anonymous\" />
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Réserver pour l'annonce : <em>{{ad.title}}</em></h1>

        <p>Vous êtes sur le point de réserver le bien de <strong>{{ad.author.fullName}}</strong>dites nous tout, on s'occupe du reste !</p>

        {{form_start(form)}}
        <div class=\"alert alert-light\">
            <h4>Quelles sont les dates qui vous intéressent ?</h4>
            <div class=\"row\">
                <div class=\"col\">
                    {{form_row(form.startDate)}}
                </div>
                <div class=\"col\">
                    {{form_row(form.endDate)}}
                </div>
            </div>
            <h4 class=\"mt-2\">Montant du séjour : <span id=\"amount\">...</span>&euro;</h4>
            <span id=\"days\">0</span> nuit(s) à {{ad.price | number_format(2, ',', ' ')}} &euro; par nuit

            <h4 class=\"mt-3\">Vous avez un commentaire ?</h4>
            {{ form_row(form.comment)}}
        </div>
        <h4><sttrong>Vous avez terminé !</sttrong></h4>
            <p>Week-end de rêve ? Hébergement professionnel ? YesWeekend !</p>

            <button type=\"submit\" class=\"btn btn-success\">Je réserve !</button>

            {{form_end(form)}}
            <br>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js\" integrity=\"sha256-tW5LzEC7QjhG0CiAvxlseMTs2qJS7u3DRPauDjFJ3zo=\" crossorigin=\"anonymous\"></script>

    <script>
        \$(document).ready(function(){
            \$('#booking_startDate, #booking_endDate').datepicker({
                format: 'dd/mm/yyyy',
                datesDisabled: [
                    {% for day in ad.notAvailableDays %}
                        \"{{ day.format('d/m/Y') }}\",
                    {% endfor %}
                ],
                startDate: new Date()
            });

            \$('#booking_startDate, #booking_endDate').on('change', calculateAmount);
        });

        function calculateAmount(){
            const endDate = new Date(\$('#booking_endDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/,'\$3-\$2-\$1'));
            const startDate = new Date(\$('#booking_startDate').val().replace(/(\\d+)\\/(\\d+)\\/(\\d{4})/,'\$3-\$2-\$1'));

            if(startDate && endDate && startDate < endDate){
                const DAY_TIME = 24 * 60 * 60 * 1000;

                const interval = endDate.getTime() - startDate.getTime();
                const days = interval / DAY_TIME;
                const amount = days * {{ ad.price }};

                \$('#days').text(days);
                \$('#amount').text(amount.toLocaleString('fr-FR'));
            }
        }
    </script>
{% endblock %}
", "booking/book.html.twig", "/home/aubry/Bureau/projetbnb(copie)/projetbnbV9/templates/booking/book.html.twig");
    }
}
