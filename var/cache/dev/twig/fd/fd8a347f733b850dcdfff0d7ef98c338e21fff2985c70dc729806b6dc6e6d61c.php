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
class __TwigTemplate_f5a8bd5be8538ceaffe3a9917f5cea2505d7a8b4c04f16fcde621373f1c1d6aa extends Template
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

\t<div class=\"container mt-5 text-center\">
\t\t";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "\t\t\t<a href=\"/prestation/new\" class=\"btn mb-4 px-4 btn-outline-primary\">Ajouter une Prestation</a>
\t\t";
        }
        // line 11
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestations"]) || array_key_exists("prestations", $context) ? $context["prestations"] : (function () { throw new RuntimeError('Variable "prestations" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 13
            echo "\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"card  text-center mb-4\">
\t\t\t\t\t\t<div class=\"iconbox iconbox__style-02 mt-4\">
\t\t\t\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"img-fluid\" width=\"590\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "titre", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["prestation"], "description", [], "any", false, false, false, 20);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">a partir de
\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "prix", [], "any", false, false, false, 22), "html", null, true);
            echo "€</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
            // line 24
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"/prestation/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/prestation/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestation"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "/delete\" onclick=\"return confirm('Voulez vous vraiment supprimer la prestation ?')\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return array (  125 => 34,  114 => 28,  109 => 26,  104 => 25,  102 => 24,  97 => 22,  92 => 20,  88 => 19,  82 => 16,  77 => 13,  73 => 12,  70 => 11,  66 => 9,  64 => 8,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<style></style>

\t<div class=\"container mt-5 text-center\">
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<a href=\"/prestation/new\" class=\"btn mb-4 px-4 btn-outline-primary\">Ajouter une Prestation</a>
\t\t{% endif %}
\t\t<div class=\"row\">
\t\t\t{% for prestation in prestations %}
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"card  text-center mb-4\">
\t\t\t\t\t\t<div class=\"iconbox iconbox__style-02 mt-4\">
\t\t\t\t\t\t\t<img src=\"{{ prestation.image }}\" class=\"img-fluid\" width=\"590\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ prestation.titre }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ prestation.description | raw }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">a partir de
\t\t\t\t\t\t\t\t\t\t<strong>{{ prestation.prix }}€</strong>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t\t\t<a href=\"/prestation/{{ prestation.id }}/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"/prestation/{{ prestation.id }}/delete\" onclick=\"return confirm('Voulez vous vraiment supprimer la prestation ?')\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t\t{% endif %}
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
