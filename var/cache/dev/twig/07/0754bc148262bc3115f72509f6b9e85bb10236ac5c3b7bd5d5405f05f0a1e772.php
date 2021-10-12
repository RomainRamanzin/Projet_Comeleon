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

/* avis/index.html.twig */
class __TwigTemplate_4be96954a40b4da0ddb81bb0204c0e34bfb8f1caf085948d7655d25f8152598f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/index.html.twig", 1);
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
        echo " 
\t

\t<center><h1>Avis du site</h1></center>
    <center><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_nouveau");
        echo "\" class=\"btn btn-primary\" style=\"background-color:#2A2A2A;\">Ajouter</a></center>
    </br>
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 12
            echo "\t\t<div class=\"container\">
            <div class=\"card card-color-men\">
  <div class=\"card-header\" style=\"background-color: #2A2A2A; color:white;\">
    
    <h3 class=\"person-name\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "auteur", [], "any", false, false, false, 16), "html", null, true);
            echo "</h3>
    <p class=\"comment-date\">Ecrit le
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "createdAt", [], "any", false, false, false, 18), "d/m/y"), "html", null, true);
            echo "
\t\t\t\t\tà
\t\t\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "createdAt", [], "any", false, false, false, 20), "H:i"), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_show", ["id" => twig_get_attribute($this->env, $this->source, $context["avi"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" ><button style=\" background-color:#393939; color:white;\">Lire l'avis</button></a>
  </div>
  <div class=\"card-body\">
    <p class=\"comment-text\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["avi"], "content", [], "any", false, false, false, 24);
            echo "</p>
  </div>
</div>
</div>
</br>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t


\t
\t\t</div>

\t\t
\t






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  100 => 24,  94 => 21,  90 => 20,  85 => 18,  80 => 16,  74 => 12,  70 => 11,  65 => 9,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
 
\t

\t<center><h1>Avis du site</h1></center>
    <center><a href=\"{{ path('avis_nouveau')}}\" class=\"btn btn-primary\" style=\"background-color:#2A2A2A;\">Ajouter</a></center>
    </br>
\t\t{% for avi in avis %}
\t\t<div class=\"container\">
            <div class=\"card card-color-men\">
  <div class=\"card-header\" style=\"background-color: #2A2A2A; color:white;\">
    
    <h3 class=\"person-name\">{{ avi.auteur }}</h3>
    <p class=\"comment-date\">Ecrit le
\t\t\t\t\t{{ avi.createdAt | date('d/m/y') }}
\t\t\t\t\tà
\t\t\t\t\t{{ avi.createdAt | date('H:i') }}</p>
                    <a href=\"{{ path('avis_show', {'id' : avi.id}) }}\" ><button style=\" background-color:#393939; color:white;\">Lire l'avis</button></a>
  </div>
  <div class=\"card-body\">
    <p class=\"comment-text\">{{ avi.content | raw}}</p>
  </div>
</div>
</div>
</br>

\t\t{% endfor %}
\t


\t
\t\t</div>

\t\t
\t






{% endblock %}
", "avis/index.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\avis\\index.html.twig");
    }
}
