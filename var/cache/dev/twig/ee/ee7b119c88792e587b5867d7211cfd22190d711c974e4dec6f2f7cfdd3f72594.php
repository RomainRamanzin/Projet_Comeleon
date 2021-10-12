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

/* avis/show.html.twig */
class __TwigTemplate_4c96f3ef7a71ddb04688e46759d8333f046032213c09b52331fcd12a4afe8bec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <avis>
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
        <div class=\"metadata\">Ecrit le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "H:i"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 9, $this->source); })()), "auteur", [], "any", false, false, false, 9), "html", null, true);
        echo "</div>
        <div class=\"content\">
           ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11);
        echo "   
        </div>
    </avis>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  67 => 9,  63 => 8,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

    <avis>
        <h2>{{avi.titre}}</h2>
        <div class=\"metadata\">Ecrit le {{ avi.createdAt | date('d/m/y') }} à {{ avi.createdAt | date('H:i') }} par {{ avi.auteur }}</div>
        <div class=\"content\">
           {{ avi.content | raw}}   
        </div>
    </avis>
{% endblock %}
", "avis/show.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\avis\\show.html.twig");
    }
}
