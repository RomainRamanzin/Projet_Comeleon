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

/* presentation/index.html.twig */
class __TwigTemplate_2704c694905f79882463097585e553e51940dc9156dc0682022917a3ac8d3d8c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presentation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"container p-xl\">
\t\t";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "\t\t\t<div class=\"container text-center my-4\">
\t\t\t<a href=\"/presentation/new\" class=\"btn mt-4 px-4 btn-outline-primary\">Ajouter une Presentation</a>
\t\t\t</div>
\t\t";
        }
        // line 11
        echo "\t\t";
        $context["nb"] = 1;
        // line 12
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presentations"]) || array_key_exists("presentations", $context) ? $context["presentations"] : (function () { throw new RuntimeError('Variable "presentations" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 13
            echo "
\t\t\t";
            // line 14
            if ((0 === twig_compare(((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 14, $this->source); })()) % 2), 0))) {
                // line 15
                echo "\t\t\t\t<h1 class=\"card-title my-4 text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "title", [], "any", false, false, false, 15), "html", null, true);
                echo "</h1>
\t\t\t\t<div class=\"card mb-3 border-light\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<img src=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "imageLien", [], "any", false, false, false, 19), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<p class=\"card-text lead\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["presentation"], "content", [], "any", false, false, false, 23);
                echo "</p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">Ecrit le
\t\t\t\t\t\t\t\t\t\t";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "createAt", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "createAt", [], "any", false, false, false, 28), "H:i"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
                // line 29
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 31), "html", null, true);
                    echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 32), "html", null, true);
                    echo "/delete\" onclick=\"return confirm('Voulez vous vraiment supprimer la presentation ?')\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            } else {
                // line 40
                echo "
\t\t\t\t<h1 class=\"card-title my-4 text-center\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "title", [], "any", false, false, false, 41), "html", null, true);
                echo "</h1>
\t\t\t\t<div class=\"card mb-3 border-light\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<p class=\"card-text lead\">";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["presentation"], "content", [], "any", false, false, false, 46);
                echo "</p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">Ecrit le
\t\t\t\t\t\t\t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "createAt", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "createAt", [], "any", false, false, false, 51), "H:i"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
                // line 52
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "id", [], "any", false, false, false, 55), "html", null, true);
                    echo "/delete\" onclick=\"return confirm('Voulez vous vraiment supprimer la presentation ?')\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<img src=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presentation"], "imageLien", [], "any", false, false, false, 61), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            }
            // line 67
            echo "\t\t\t";
            $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 67, $this->source); })()) + 1);
            // line 68
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "presentation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  194 => 68,  191 => 67,  182 => 61,  176 => 57,  171 => 55,  167 => 54,  164 => 53,  162 => 52,  158 => 51,  153 => 49,  147 => 46,  139 => 41,  136 => 40,  128 => 34,  123 => 32,  119 => 31,  116 => 30,  114 => 29,  110 => 28,  105 => 26,  99 => 23,  92 => 19,  84 => 15,  82 => 14,  79 => 13,  74 => 12,  71 => 11,  65 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"container p-xl\">
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<div class=\"container text-center my-4\">
\t\t\t<a href=\"/presentation/new\" class=\"btn mt-4 px-4 btn-outline-primary\">Ajouter une Presentation</a>
\t\t\t</div>
\t\t{% endif %}
\t\t{% set nb = 1 %}
\t\t{% for presentation in presentations %}

\t\t\t{% if nb % 2 == 0 %}
\t\t\t\t<h1 class=\"card-title my-4 text-center\">{{ presentation.title }}</h1>
\t\t\t\t<div class=\"card mb-3 border-light\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<img src=\"{{ presentation.imageLien }}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<p class=\"card-text lead\">{{ presentation.content | raw }}</p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">Ecrit le
\t\t\t\t\t\t\t\t\t\t{{ presentation.createAt | date('d/m/Y') }}
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t{{ presentation.createAt | date('H:i') }}</div>
\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/{{ presentation.id }}/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/{{ presentation.id }}/delete\" onclick=\"return confirm('Voulez vous vraiment supprimer la presentation ?')\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% else %}

\t\t\t\t<h1 class=\"card-title my-4 text-center\">{{ presentation.title }}</h1>
\t\t\t\t<div class=\"card mb-3 border-light\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<p class=\"card-text lead\">{{ presentation.content | raw }}</p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"date\">Ecrit le
\t\t\t\t\t\t\t\t\t\t{{ presentation.createAt | date('d/m/Y') }}
\t\t\t\t\t\t\t\t\t\tà
\t\t\t\t\t\t\t\t\t\t{{ presentation.createAt | date('H:i') }}</div>
\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/{{ presentation.id }}/edit\" class=\"btn btn-outline-primary\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a href=\"/presentation/{{ presentation.id }}/delete\" onclick=\"return confirm('Voulez vous vraiment supprimer la presentation ?')\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<img src=\"{{ presentation.imageLien }}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endif %}
\t\t\t{% set nb = nb + 1 %}
\t\t{% endfor %}
\t</div>

{% endblock %}
", "presentation/index.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\presentation\\index.html.twig");
    }
}
