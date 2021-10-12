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

/* prestation/index.html.twig */
class __TwigTemplate_98618dc7410a6fa4383b49d2c78221d033dc6b451fa9a3ae5567b352099abcd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<style></style>

\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 10
            echo "\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"card  text-center mb-4\">
\t\t\t\t\t\t<div class=\"iconbox iconbox__style-02 mt-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "image", [], "any", false, false, false, 13), "html", null, true);
            echo "\"class=\"img-fluid\" width=\"590\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "titre", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<a href=\"/prestation/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"/prestation/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "/edit\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">a partir de ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 20), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  74 => 13,  69 => 10,  65 => 9,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<style></style>

\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t{% for prestation in prestations %}
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"card  text-center mb-4\">
\t\t\t\t\t\t<div class=\"iconbox iconbox__style-02 mt-4\">
\t\t\t\t\t\t\t<img src=\"{{ prestation.image }}\"class=\"img-fluid\" width=\"590\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ prestation.titre }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ prestation.description }}</p>
\t\t\t\t\t\t\t\t\t<a href=\"/prestation/{{ prestation.id }}/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"/prestation/{{ prestation.id }}/edit\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">a partir de {{ prestation.prix }}€</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>


{% endblock %}
", "prestation/index.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\prestation\\index.html.twig");
    }
}
