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

/* security/login.html.twig */
class __TwigTemplate_3694748488d7afef42669ffe913dadc4240bbd3a7e0e62476eed69cc0cc166e8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
\t<style>
\t\t.btn-login {
\t\t\tfont-size: 0.9rem;
\t\t\tletter-spacing: 0.05rem;
\t\t\tpadding: 0.75rem 1rem;
\t\t}

\t\t.btn-google {
\t\t\tcolor: white !important;
\t\t\tbackground-color: #ea4335;
\t\t}

\t\t.btn-facebook {
\t\t\tcolor: white !important;
\t\t\tbackground-color: #3b5998;
\t\t}
\t</style>


\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
\t\t\t\t<div class=\"card border-0 shadow rounded-3 my-5\">
\t\t\t\t\t<div class=\"card-body p-4 p-sm-5\">
\t\t\t\t\t\t<h5 class=\"h2 card-title text-center mb-5\">Connexion</h5>
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 34
        echo "
\t\t\t\t\t\t\t";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 42
        echo "
\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Adresse Email</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-login text-uppercase fw-bold\" type=\"submit\">Se connecter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t<div class=\"d-grid mb-2\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-google btn-login text-uppercase fw-bold\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-google me-2\"></i>S'enregistrer avec google</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-facebook btn-login text-uppercase fw-bold\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f me-2\"></i>S'enregistrer avec Facebook</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        // line 82
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 82,  131 => 53,  119 => 44,  115 => 42,  109 => 39,  105 => 38,  101 => 36,  99 => 35,  96 => 34,  90 => 32,  88 => 31,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<style>
\t\t.btn-login {
\t\t\tfont-size: 0.9rem;
\t\t\tletter-spacing: 0.05rem;
\t\t\tpadding: 0.75rem 1rem;
\t\t}

\t\t.btn-google {
\t\t\tcolor: white !important;
\t\t\tbackground-color: #ea4335;
\t\t}

\t\t.btn-facebook {
\t\t\tcolor: white !important;
\t\t\tbackground-color: #3b5998;
\t\t}
\t</style>


\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
\t\t\t\t<div class=\"card border-0 shadow rounded-3 my-5\">
\t\t\t\t\t<div class=\"card-body p-4 p-sm-5\">
\t\t\t\t\t\t<h5 class=\"h2 card-title text-center mb-5\">Connexion</h5>
\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\tYou are logged in as
\t\t\t\t\t\t\t\t\t{{ app.user.username }},
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
\t\t\t\t\t\t\t\t<label for=\"inputEmail\">Adresse Email</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
\t\t\t\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-login text-uppercase fw-bold\" type=\"submit\">Se connecter</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t<div class=\"d-grid mb-2\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-google btn-login text-uppercase fw-bold\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-google me-2\"></i>S'enregistrer avec google</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-facebook btn-login text-uppercase fw-bold\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f me-2\"></i>S'enregistrer avec Facebook</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{#
\tUncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\tSee https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t<div class=\"checkbox mb-3\">
\t\t\t<label>
\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t</label>
\t\t</div>
#}

{% endblock %}
", "security/login.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\security\\login.html.twig");
    }
}
