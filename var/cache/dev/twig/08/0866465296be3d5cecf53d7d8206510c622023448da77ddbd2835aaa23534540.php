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

/* partials/footer.html.twig */
class __TwigTemplate_c56ced0561337b19663e0a1a9abe2f5979718f09ec1a522a0eec7b0417c5997b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"/css/footer.css\">
<div class=\"container-2\">
    <footer class='mt-2 bg-light py-2 text-center'>
        <div id=\"fb-root\"></div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"
            nonce=\"RycgrfeY\"></script>
        <p>@Copyright 2019-2020 Copyright.be - Tous droits réservés YesWeekend !</p>
        <div class=\"fb-share-button\" data-href=\"https://www.facebook.com/\" data-layout=\"button_count\" data-size=\"small\">
            <a target=\"_blank\"
                href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F&amp;src=sdkpreparse\"
                class=\"fb-xfbml-parse-ignore\">Partager</a></div>
        <div><a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\"
                data-show-count=\"false\">Tweet</a>
            <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>
    </footer>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"/css/footer.css\">
<div class=\"container-2\">
    <footer class='mt-2 bg-light py-2 text-center'>
        <div id=\"fb-root\"></div>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0\"
            nonce=\"RycgrfeY\"></script>
        <p>@Copyright 2019-2020 Copyright.be - Tous droits réservés YesWeekend !</p>
        <div class=\"fb-share-button\" data-href=\"https://www.facebook.com/\" data-layout=\"button_count\" data-size=\"small\">
            <a target=\"_blank\"
                href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F&amp;src=sdkpreparse\"
                class=\"fb-xfbml-parse-ignore\">Partager</a></div>
        <div><a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\"
                data-show-count=\"false\">Tweet</a>
            <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>
    </footer>
</div>", "partials/footer.html.twig", "/home/aubry/Bureau/projetbnb(copie)/projetbnbV9/templates/partials/footer.html.twig");
    }
}
