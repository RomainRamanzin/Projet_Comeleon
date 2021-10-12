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

/* presentation/page.html.twig */
class __TwigTemplate_b70f42af7bdb1f0aeb66043a4ca9734bda6b2324a2069ec7255d69b489ad6690 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation/page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "presentation/page.html.twig", 1);
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1> Changement du texte </h1>

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPresentation"]) || array_key_exists("formPresentation", $context) ? $context["formPresentation"] : (function () { throw new RuntimeError('Variable "formPresentation" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
        
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPresentation"]) || array_key_exists("formPresentation", $context) ? $context["formPresentation"] : (function () { throw new RuntimeError('Variable "formPresentation" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPresentation"]) || array_key_exists("formPresentation", $context) ? $context["formPresentation"] : (function () { throw new RuntimeError('Variable "formPresentation" does not exist.', 16, $this->source); })()), "content", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPresentation"]) || array_key_exists("formPresentation", $context) ? $context["formPresentation"] : (function () { throw new RuntimeError('Variable "formPresentation" does not exist.', 17, $this->source); })()), "imageLien", [], "any", false, false, false, 17), 'row');
        echo "
        
        
        </br>
        <center><button type=\"submit\" class=\"btn btn-primary\"> Enregistrer </button></center>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPresentation"]) || array_key_exists("formPresentation", $context) ? $context["formPresentation"] : (function () { throw new RuntimeError('Variable "formPresentation" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "presentation/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  82 => 17,  78 => 16,  74 => 15,  69 => 13,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1> Changement du texte </h1>

        {{ form_start(formPresentation) }}
        
        {{ form_row(formPresentation.title) }}
        {{ form_row(formPresentation.content) }}
        {{ form_row(formPresentation.imageLien) }}
        
        
        </br>
        <center><button type=\"submit\" class=\"btn btn-primary\"> Enregistrer </button></center>
        {{ form_end(formPresentation) }}
</div>
    
{% endblock %}
", "presentation/page.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\presentation\\page.html.twig");
    }
}
