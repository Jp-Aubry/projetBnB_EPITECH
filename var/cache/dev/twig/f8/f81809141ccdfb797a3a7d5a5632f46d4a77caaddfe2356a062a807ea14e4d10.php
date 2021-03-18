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
class __TwigTemplate_df52d5e8085203ba06c957db503016ac0ac5868026b65ef74dba4b65bee586c5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Bienvenue sur LE site de City-trip !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

<div class=\"fond\">
    <div class=\"text\">
        <h1 class=\"display-md-3\">Bienvenue sur YesWeekend !</h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent</p>
        <hr class=\"my-8\">
        <br>
        <p class=\"lead\">
        <div class=\"ad-button\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" class=\"btn btn-primary btn-lg\"  role=\"button\"> VOIR NOS ANNONCES !</a>
        </div>
        </p>
    </div> 
    <br>  
</div>
    
<div class=\"container\">
<div class=\"parallax\">
<br>  
    <h2 class=\"h1 my-4 text-center\">NOS DÉSTINATIONS STARS !</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">  
                <div class=\"card-header text-center\">
                    3 chambres, <strong>150 €/nuit</strong> <br>
                    <small>  <i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></small>
                </div> 
                <img src=\"http://www.sunoversea.net/wp-content/uploads/WPL/531/thimg_MUNA_Vista-terraza-vivienda-1000x666_1120x800.jpg\" alt=\"Image de l'appart\"
                style=\"height: 200px; width: 100%; display: block\"> 

                <div class=\"card-body\">
                <h4 class=\"card-title\">
                    Demeure contemporaine en Sicile
                
                </h4>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam. Reprehenderit non doloremque recusandae voluptas nostrum nisi quis nobis impedit.
                </p>
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">  
                <div class=\"card-header text-center\">
                    3 chambres, <strong>200 €/nuit</strong> <br>
                    <small> <i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></small>
                </div> 
                <img src=\"https://www.costas-casas.fr/db/huizen/1450029781124476_006.jpg\" alt=\"Image de l'appart\"
                style=\"height: 200px; width: 100%; display: block\"> 

                <div class=\"card-body\">
                <h4 class=\"card-title\">
                Villa sur les hauteurs de Barcelone
                </h4>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam. Reprehenderit non doloremque recusandae voluptas nostrum nisi quis nobis impedit.
                </p>
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">  
                <div class=\"card-header text-center\">
                    3 chambres, <strong>150 €/nuit</strong> <br>
                    <small> <i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></small>
                </div> 
                <img src=\"https://www.realista.com/wp-content/uploads/2017/05/New-project-villa-for-sale_El-Mirador-del-Paraiso_Benahavis_Realista-Quality-Properties-Marbella-7.jpg\" alt=\"Image de l'appart\"
                style=\"height: 200px; width: 100%; display: block\"> 

                <div class=\"card-body\">
                <h4 class=\"card-title\">
                Propriété d'architecte en Croatie
                </h4>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam. Reprehenderit non doloremque recusandae voluptas nostrum nisi quis nobis impedit.
                </p>
                <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    
    <h2 class=\"h1 my-5 text-center\">NOS PROPRIÉTAIRES STARS !</h2>
    

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Maverick</h4>
                    
                    <hr>

                    <div class=\"card-text\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/3/33/Tom_Cruise_by_Gage_Skidmore_2.jpg\" alt=\"Avatar\" class=\"float-left mr-3 avatar avatar\">
                    <p>Visiting Paris was my dream after filming \"Mission : impossible\". Thank you Yesweekend ! </p>
                    <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" class=\"btn btn-primary\">En savoir plus !</a>
                    </div>
                </div>
            </div>
        
        </div>
        <div class=\"col\">
            <div class=\"card bg-light border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">J.LO</h4>
                    
                    <hr>

                    <div class=\"card-text\">
                    <img src=\"https://mui.today/__export/1583284132743/sites/mui/img/2020/03/03/jennifer-lopez-jan-2020-billboard-a-1548.jpg_345486724.jpg\" alt=\"Avatar\" class=\"float-left mr-3 avatar avatar\">
                    <p>Thanks a lot ! I love visit Europe and always find what i wanna do with you...</p>
                    <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_index");
        echo "\" class=\"btn btn-primary\">En savoir plus !</a>
                    </div>
                </div>
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 123,  202 => 107,  179 => 87,  156 => 67,  133 => 47,  101 => 18,  80 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
    Bienvenue sur LE site de City-trip !
{% endblock %}

{% block body %} 

<div class=\"fond\">
    <div class=\"text\">
        <h1 class=\"display-md-3\">Bienvenue sur YesWeekend !</h1>
        <p class=\"lead\">Nous mettons en relation les voyageurs et les propriétaires qui veulent profiter d'opportunités et gagner de l'argent</p>
        <hr class=\"my-8\">
        <br>
        <p class=\"lead\">
        <div class=\"ad-button\">
            <a href=\"{{ path('ads_index') }}\" class=\"btn btn-primary btn-lg\"  role=\"button\"> VOIR NOS ANNONCES !</a>
        </div>
        </p>
    </div> 
    <br>  
</div>
    
<div class=\"container\">
<div class=\"parallax\">
<br>  
    <h2 class=\"h1 my-4 text-center\">NOS DÉSTINATIONS STARS !</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">  
                <div class=\"card-header text-center\">
                    3 chambres, <strong>150 €/nuit</strong> <br>
                    <small>  <i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></small>
                </div> 
                <img src=\"http://www.sunoversea.net/wp-content/uploads/WPL/531/thimg_MUNA_Vista-terraza-vivienda-1000x666_1120x800.jpg\" alt=\"Image de l'appart\"
                style=\"height: 200px; width: 100%; display: block\"> 

                <div class=\"card-body\">
                <h4 class=\"card-title\">
                    Demeure contemporaine en Sicile
                
                </h4>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam. Reprehenderit non doloremque recusandae voluptas nostrum nisi quis nobis impedit.
                </p>
                <a href=\"{{ path('ads_index') }}\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">  
                <div class=\"card-header text-center\">
                    3 chambres, <strong>200 €/nuit</strong> <br>
                    <small> <i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></small>
                </div> 
                <img src=\"https://www.costas-casas.fr/db/huizen/1450029781124476_006.jpg\" alt=\"Image de l'appart\"
                style=\"height: 200px; width: 100%; display: block\"> 

                <div class=\"card-body\">
                <h4 class=\"card-title\">
                Villa sur les hauteurs de Barcelone
                </h4>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam. Reprehenderit non doloremque recusandae voluptas nostrum nisi quis nobis impedit.
                </p>
                <a href=\"{{ path('ads_index') }}\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">  
                <div class=\"card-header text-center\">
                    3 chambres, <strong>150 €/nuit</strong> <br>
                    <small> <i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i><i class=\"fas fa-star\"></i></small>
                </div> 
                <img src=\"https://www.realista.com/wp-content/uploads/2017/05/New-project-villa-for-sale_El-Mirador-del-Paraiso_Benahavis_Realista-Quality-Properties-Marbella-7.jpg\" alt=\"Image de l'appart\"
                style=\"height: 200px; width: 100%; display: block\"> 

                <div class=\"card-body\">
                <h4 class=\"card-title\">
                Propriété d'architecte en Croatie
                </h4>
                <p class=\"card-text\">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, numquam. Reprehenderit non doloremque recusandae voluptas nostrum nisi quis nobis impedit.
                </p>
                <a href=\"{{ path('ads_index') }}\" class=\"btn btn-primary\" role=\"button\">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    
    <h2 class=\"h1 my-5 text-center\">NOS PROPRIÉTAIRES STARS !</h2>
    

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"card bg-light border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Maverick</h4>
                    
                    <hr>

                    <div class=\"card-text\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/3/33/Tom_Cruise_by_Gage_Skidmore_2.jpg\" alt=\"Avatar\" class=\"float-left mr-3 avatar avatar\">
                    <p>Visiting Paris was my dream after filming \"Mission : impossible\". Thank you Yesweekend ! </p>
                    <a href=\"{{ path('ads_index') }}\" class=\"btn btn-primary\">En savoir plus !</a>
                    </div>
                </div>
            </div>
        
        </div>
        <div class=\"col\">
            <div class=\"card bg-light border-secondary mb-3\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">J.LO</h4>
                    
                    <hr>

                    <div class=\"card-text\">
                    <img src=\"https://mui.today/__export/1583284132743/sites/mui/img/2020/03/03/jennifer-lopez-jan-2020-billboard-a-1548.jpg_345486724.jpg\" alt=\"Avatar\" class=\"float-left mr-3 avatar avatar\">
                    <p>Thanks a lot ! I love visit Europe and always find what i wanna do with you...</p>
                    <a href=\"{{ path('ads_index') }}\" class=\"btn btn-primary\">En savoir plus !</a>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>


{% endblock %}", "home.html.twig", "/home/aubry/Bureau/projetbnb(copie)/projetbnbV9/templates/home.html.twig");
    }
}
