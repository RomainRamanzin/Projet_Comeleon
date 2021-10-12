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
class __TwigTemplate_5b6752482a2ce7e7bdc937137d8f0c6c37c57139a8335755476e1cdb946d3348 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">


\t\t<header class=\"p-3 bg-dark text-white\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
\t\t\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
\t\t\t\t\t\t<img class=\"img-fluid img-thumbnail\" width=\"120\" src=\"https://t3.ftcdn.net/jpg/01/37/37/10/240_F_137371088_fgyexgp5eh97Ds4BVgVxZULaFgbLBIjh.jpg\">
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/presentation\" class=\"nav-link px-2 text-white\">Qui Sommes Nous ?</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"nav-link px-2 text-white\">Nos Prestations</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/avis\" class=\"nav-link px-2 text-white\">Avis</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/contact\" class=\"nav-link px-2 text-white\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "    \t\t\t\t\t<a href=\"/logout\" type=\"button\" class=\"btn btn-outline-danger\">Se déconnecter</a>
\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t<a href=\"/login\" type=\"button\" class=\"btn btn-outline-light me-2\">Se Connecter</a>
\t\t\t\t\t\t<a href=\"/register\" type=\"button\" class=\"btn btn-outline-warning\">Créer un compte</a>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>


\t\t";
        // line 48
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 51
        echo "
\t\t";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "\t</head>
\t<body>
\t\t";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "\t</body>


\t<div class=\"container\">
\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
\t\t\t<p class=\"col-md-3 mb-0 text-muted\">© 2021 Company, Inc</p>

\t\t\t<img class=\"img-fluid img-thumbnail\" width=\"120\" src=\"https://t3.ftcdn.net/jpg/01/37/37/10/240_F_137371088_fgyexgp5eh97Ds4BVgVxZULaFgbLBIjh.jpg\">

\t\t\t<ul class=\"nav col-md-5 justify-content-end\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/\" class=\"nav-link px-2 text-muted\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/presentation\" class=\"nav-link px-2 text-muted\">Qui Sommes Nous ?</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/prestation\" class=\"nav-link px-2 text-muted\">Nos Prestations</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/avis\" class=\"nav-link px-2 text-muted\">Avis</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/contact\" class=\"nav-link px-2 text-muted\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</footer>
\t</div>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 49
        echo "\t\t\t";
        // line 50
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "\t\t\t";
        // line 54
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  179 => 57,  172 => 54,  170 => 53,  163 => 52,  156 => 50,  154 => 49,  147 => 48,  111 => 58,  109 => 57,  105 => 55,  103 => 52,  100 => 51,  97 => 48,  89 => 40,  84 => 37,  80 => 35,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">


\t\t<header class=\"p-3 bg-dark text-white\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start\">
\t\t\t\t\t<a href=\"/\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
\t\t\t\t\t\t<img class=\"img-fluid img-thumbnail\" width=\"120\" src=\"https://t3.ftcdn.net/jpg/01/37/37/10/240_F_137371088_fgyexgp5eh97Ds4BVgVxZULaFgbLBIjh.jpg\">
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/\" class=\"nav-link px-2 text-white\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/presentation\" class=\"nav-link px-2 text-white\">Qui Sommes Nous ?</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"nav-link px-2 text-white\">Nos Prestations</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/avis\" class=\"nav-link px-2 text-white\">Avis</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"/contact\" class=\"nav-link px-2 text-white\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    \t\t\t\t\t<a href=\"/logout\" type=\"button\" class=\"btn btn-outline-danger\">Se déconnecter</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"/login\" type=\"button\" class=\"btn btn-outline-light me-2\">Se Connecter</a>
\t\t\t\t\t\t<a href=\"/register\" type=\"button\" class=\"btn btn-outline-warning\">Créer un compte</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>


\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{#{{ encore_entry_link_tags('app') }}#}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{#{{ encore_entry_script_tags('app') }}#}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>


\t<div class=\"container\">
\t\t<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
\t\t\t<p class=\"col-md-3 mb-0 text-muted\">© 2021 Company, Inc</p>

\t\t\t<img class=\"img-fluid img-thumbnail\" width=\"120\" src=\"https://t3.ftcdn.net/jpg/01/37/37/10/240_F_137371088_fgyexgp5eh97Ds4BVgVxZULaFgbLBIjh.jpg\">

\t\t\t<ul class=\"nav col-md-5 justify-content-end\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/\" class=\"nav-link px-2 text-muted\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/presentation\" class=\"nav-link px-2 text-muted\">Qui Sommes Nous ?</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/prestation\" class=\"nav-link px-2 text-muted\">Nos Prestations</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/avis\" class=\"nav-link px-2 text-muted\">Avis</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/contact\" class=\"nav-link px-2 text-muted\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</footer>
\t</div>
</html>
", "base.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\base.html.twig");
    }
}
