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

/* avis/createAvis.html.twig */
class __TwigTemplate_34d69df4b27fdd6879074abc7d15763268e780840456306b65e3ab7c9ce2b0f3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/createAvis.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "avis/createAvis.html.twig", 1);
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
    <center><h1>Création d'un avis !</h1></center>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
<div class=\"container\">
    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Titre de l'avis"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 15, $this->source); })()), "auteur", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Contenu de l'avis"]]);
        echo "
    </div>

    <button type=\"submit\" class=\"btn btn-success\">Ajouter l'avis</button>
    </div>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAvis"]) || array_key_exists("formAvis", $context) ? $context["formAvis"] : (function () { throw new RuntimeError('Variable "formAvis" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/createAvis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  85 => 18,  79 => 15,  73 => 12,  67 => 9,  62 => 6,  55 => 5,  47 => 1,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formAvis 'bootstrap_4_layout.html.twig' %}

{% block body %}

    <center><h1>Création d'un avis !</h1></center>

    {{ form_start(formAvis)}}
<div class=\"container\">
    <div class=\"form-group\">
        {{ form_row(formAvis.titre, { 'attr' : { placeholder : \"Titre de l'avis\" }}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(formAvis.auteur, { 'attr' : { placeholder : \"Votre nom\" }}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(formAvis.content, { 'attr' : { placeholder : \"Contenu de l'avis\" }}) }}
    </div>

    <button type=\"submit\" class=\"btn btn-success\">Ajouter l'avis</button>
    </div>
    {{ form_end(formAvis)}}
{% endblock %}", "avis/createAvis.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\avis\\createAvis.html.twig");
    }
}
