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

/* contact/contact.html.twig */
class __TwigTemplate_787b289dc55a86203c9a8fd6f2e77556b71ddb56a85bf844e19d0c869f9dc215 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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
        echo "<div class=\"container\">
    <center><h1>Contactez-nous !</h1></center>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Votre prénom"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 18, $this->source); })()), "mail", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Votre mail"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 21, $this->source); })()), "telephone", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Votre téléphone"]]);
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Votre message"]]);
        echo "
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
   </div> 
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcontact"]) || array_key_exists("formcontact", $context) ? $context["formcontact"] : (function () { throw new RuntimeError('Variable "formcontact" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  97 => 24,  91 => 21,  85 => 18,  79 => 15,  73 => 12,  67 => 9,  62 => 6,  55 => 5,  47 => 1,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formcontact 'bootstrap_4_layout.html.twig' %}

{% block body %}
<div class=\"container\">
    <center><h1>Contactez-nous !</h1></center>

    {{ form_start(formcontact)}}

    <div class=\"form-group\">
        {{ form_row(formcontact.nom, { 'attr' : { placeholder : \"Votre nom\" }}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(formcontact.prenom, { 'attr' : { placeholder : \"Votre prénom\" }}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(formcontact.mail, { 'attr' : { placeholder : \"Votre mail\" }}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(formcontact.telephone, { 'attr' : { placeholder : \"Votre téléphone\" }}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(formcontact.description, { 'attr' : { placeholder : \"Votre message\" }}) }}
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
   </div> 
    {{ form_end(formcontact)}}
{% endblock %}", "contact/contact.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\contact\\contact.html.twig");
    }
}
