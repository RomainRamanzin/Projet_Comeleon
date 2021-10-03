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

/* acceuil/index.html.twig */
class __TwigTemplate_3a31cbc242af00db5f2c84b70c1a77511359ec01b900a0910be3edc84eb58282 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil/index.html.twig", 1);
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
\t\t.bd-placeholder-img {
\t\t\tfont-size: 1.125rem;
\t\t\ttext-anchor: middle;
\t\t\t-webkit-user-select: none;
\t\t\t-moz-user-select: none;
\t\t\tuser-select: none;
\t\t}

\t\t@media(min-width: 768px) {
\t\t\t.bd-placeholder-img-lg {
\t\t\t\tfont-size: 3.5rem;
\t\t\t}
\t\t}
\t\t.p-xl {
  \t\tpadding: 40px !important;
\t</style>


\t<div class=\"container col-xxl-8 px-4 py-5\">
\t\t<div class=\"row flex-lg-row-reverse align-items-center g-5 py-5\">
\t\t\t<div class=\"col-10 col-sm-8 col-lg-6\">
\t\t\t\t<img src=\"https://image.freepik.com/vecteurs-libre/composition-isometrique-pour-fixation-fuites-chaudiere_1284-17770.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h1 class=\"display-5 fw-bold lh-1 mb-3\">Un problème ?
\t\t\t\t</br>
\t\t\t\tNous sommes là 👍</h1>
\t\t\t<p class=\"lead\">Une
\t\t\t\t<strong>panne de chauffage</strong>
\t\t\t\tau début de l\\'hiver peut gâcher votre vie quotidienne... Mais pas avec
\t\t\t\t<strong>VERYPRO
\t\t\t\t</strong>
\t\t\t\t! Spécialisé en chauffage,
\t\t\t\t<strong>nous pouvons intervenir pour tout type de pannes.</strong>
\t\t\t\tChauffe-eau, chauffage, électrique ou à gaz, nous sommes là pour vous !</p>
\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-start\">
\t\t\t\t<a href=\"/prestation\" type=\"button\" class=\"btn btn-primary btn-lg px-4 me-md-2\">Nos Prestations</a>
\t\t\t\t<a href=\"#\" type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\">Nous Contacter</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container p-xl\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://img.icons8.com/flat_round/128/000000/star--v1.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Excellente Réputation</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nos chauffagistes sont sélectionnés pour leur
\t\t\t\t\t\t\t\t<strong>sérieux</strong>
\t\t\t\t\t\t\t\tet leur
\t\t\t\t\t\t\t\t<strong>professionnalisme</strong>.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://img.icons8.com/flat_round/128/000000/phone-message--v2.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">A votre écoute</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nous adaptons nos interventions à votre environnement.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://cdn2.iconfinder.com/data/icons/business-271/135/38-128.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Sur rendez-vous</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nous estimons au mieux le temps nécessaire à chaque intervention.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://img.icons8.com/cute-clipart/128/000000/timer.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">En urgence</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Une urgence ? Précisez le nous pour accélérer votre intervention !</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container p-xl\">
\t<div class=\"card mb-3 border-light\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"https://www.raquin-duchon.com/wp-content/uploads/photo-plombier.jpg\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title mb-4\">Spécialiste du chauffage</h1>
\t\t\t\t\t<p class=\"card-text lead\">
\t\t\t\t\t\t<strong>VERYPRO</strong>
\t\t\t\t\t\ttravaille avec les
\t\t\t\t\t\t<strong>chauffagistes</strong>
\t\t\t\t\t\tles plus
\t\t\t\t\t\t<strong>sérieux</strong>
\t\t\t\t\t\tet
\t\t\t\t\t\t<strong>consciencieux</strong>
\t\t\t\t\t\tde votre région !<br/><br/>
\t\t\t\t\t\tQue ce soit pour l’<strong>
\t\t\t\t\t\t\tinstallation</strong>, le
\t\t\t\t\t\t<strong>dépannage</strong>
\t\t\t\t\t\tou l’
\t\t\t\t\t\t<strong>entretien</strong>
\t\t\t\t\t\tde votre chaudière, chauffe-eau ou chauffage, nous saurons répondre à votre demande !</p>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a href=\"/prestation\" type=\"button\" class=\"btn btn-primary\">Voir Nos Offres</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container p-xl\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">DÉPANNAGE DE CHAUDIÈRE À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Panne de chauffage ou eau chaude
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\tPièces non incluses<br/>
\t\t\t\t\t\t\t\tMain d’œuvre</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">MAINTENANCE DE CHAUDIÈRE À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Entretien annuel<br/>
\t\t\t\t\t\t\t\tPièces non incluses<br/>
\t\t\t\t\t\t\t\tMain d’œuvre<br/>
\t\t\t\t\t\t\t\tDéplacement</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">CHAUFFE BAIN À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Chauffe eau gaz<br/>
\t\t\t\t\t\t\t\tPièces incluses<br/>
\t\t\t\t\t\t\t\tMise en route<br/>
\t\t\t\t\t\t\t\tMain d’œuvre incluse</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">INSTALLATION DE CHAUDIÈRE À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Chaudière à gaz économique<br/>
\t\t\t\t\t\t\t\tPièces incluses<br/>
\t\t\t\t\t\t\t\tMain d’œuvre incluse</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>


<div class=\"container p-xl\">
\t<div class=\"card mb-3 border-light\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title mb-4\">Spécialiste du chauffage</h1>
\t\t\t\t\t<p class=\"card-text lead\">
\t\t\t\t\t\tLes  <strong>travaux de chauffagerie</strong> n'ont aucun secret pour nous. <strong>Installation d'un chauffe-eau électrique</strong> ou <strong>entretien d'une chaudière</strong>, nous avons l'habitude de faire divers interventions, dont voici un petit panel :<br/><br/>
\t\t\t\t\t\t- Entretien de chaudière à gaz, au charbon, aux multicombustible ou au fioul.<br/>
\t\t\t\t\t\t- Installation de chauffe-eau électrique<br/>
\t\t\t\t\t\t- Entretien de chaudière collective</p>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a href=\"/prestation\" type=\"button\" class=\"btn btn-primary\">Voir Nos Offres</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"https://storage.googleapis.com/assets-monsite-medias/monsitemoncommerce.com-la-plomberie-longonienne/2020/11/3a47bf1a-istock-5170613592.jpg\" class=\"img-fluid rounded-end\" alt=\"...\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "acceuil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<style>
\t\t.bd-placeholder-img {
\t\t\tfont-size: 1.125rem;
\t\t\ttext-anchor: middle;
\t\t\t-webkit-user-select: none;
\t\t\t-moz-user-select: none;
\t\t\tuser-select: none;
\t\t}

\t\t@media(min-width: 768px) {
\t\t\t.bd-placeholder-img-lg {
\t\t\t\tfont-size: 3.5rem;
\t\t\t}
\t\t}
\t\t.p-xl {
  \t\tpadding: 40px !important;
\t</style>


\t<div class=\"container col-xxl-8 px-4 py-5\">
\t\t<div class=\"row flex-lg-row-reverse align-items-center g-5 py-5\">
\t\t\t<div class=\"col-10 col-sm-8 col-lg-6\">
\t\t\t\t<img src=\"https://image.freepik.com/vecteurs-libre/composition-isometrique-pour-fixation-fuites-chaudiere_1284-17770.jpg\" class=\"d-block mx-lg-auto img-fluid\" alt=\"Bootstrap Themes\" width=\"700\" height=\"500\" loading=\"lazy\">
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h1 class=\"display-5 fw-bold lh-1 mb-3\">Un problème ?
\t\t\t\t</br>
\t\t\t\tNous sommes là 👍</h1>
\t\t\t<p class=\"lead\">Une
\t\t\t\t<strong>panne de chauffage</strong>
\t\t\t\tau début de l\\'hiver peut gâcher votre vie quotidienne... Mais pas avec
\t\t\t\t<strong>VERYPRO
\t\t\t\t</strong>
\t\t\t\t! Spécialisé en chauffage,
\t\t\t\t<strong>nous pouvons intervenir pour tout type de pannes.</strong>
\t\t\t\tChauffe-eau, chauffage, électrique ou à gaz, nous sommes là pour vous !</p>
\t\t\t<div class=\"d-grid gap-2 d-md-flex justify-content-md-start\">
\t\t\t\t<a href=\"/prestation\" type=\"button\" class=\"btn btn-primary btn-lg px-4 me-md-2\">Nos Prestations</a>
\t\t\t\t<a href=\"#\" type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\">Nous Contacter</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container p-xl\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://img.icons8.com/flat_round/128/000000/star--v1.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Excellente Réputation</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nos chauffagistes sont sélectionnés pour leur
\t\t\t\t\t\t\t\t<strong>sérieux</strong>
\t\t\t\t\t\t\t\tet leur
\t\t\t\t\t\t\t\t<strong>professionnalisme</strong>.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://img.icons8.com/flat_round/128/000000/phone-message--v2.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">A votre écoute</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nous adaptons nos interventions à votre environnement.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://cdn2.iconfinder.com/data/icons/business-271/135/38-128.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Sur rendez-vous</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nous estimons au mieux le temps nécessaire à chaque intervention.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t<img src=\"https://img.icons8.com/cute-clipart/128/000000/timer.png\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">En urgence</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Une urgence ? Précisez le nous pour accélérer votre intervention !</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container p-xl\">
\t<div class=\"card mb-3 border-light\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"https://www.raquin-duchon.com/wp-content/uploads/photo-plombier.jpg\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title mb-4\">Spécialiste du chauffage</h1>
\t\t\t\t\t<p class=\"card-text lead\">
\t\t\t\t\t\t<strong>VERYPRO</strong>
\t\t\t\t\t\ttravaille avec les
\t\t\t\t\t\t<strong>chauffagistes</strong>
\t\t\t\t\t\tles plus
\t\t\t\t\t\t<strong>sérieux</strong>
\t\t\t\t\t\tet
\t\t\t\t\t\t<strong>consciencieux</strong>
\t\t\t\t\t\tde votre région !<br/><br/>
\t\t\t\t\t\tQue ce soit pour l’<strong>
\t\t\t\t\t\t\tinstallation</strong>, le
\t\t\t\t\t\t<strong>dépannage</strong>
\t\t\t\t\t\tou l’
\t\t\t\t\t\t<strong>entretien</strong>
\t\t\t\t\t\tde votre chaudière, chauffe-eau ou chauffage, nous saurons répondre à votre demande !</p>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a href=\"/prestation\" type=\"button\" class=\"btn btn-primary\">Voir Nos Offres</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container p-xl\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">DÉPANNAGE DE CHAUDIÈRE À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Panne de chauffage ou eau chaude
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\tPièces non incluses<br/>
\t\t\t\t\t\t\t\tMain d’œuvre</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">MAINTENANCE DE CHAUDIÈRE À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Entretien annuel<br/>
\t\t\t\t\t\t\t\tPièces non incluses<br/>
\t\t\t\t\t\t\t\tMain d’œuvre<br/>
\t\t\t\t\t\t\t\tDéplacement</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">CHAUFFE BAIN À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Chauffe eau gaz<br/>
\t\t\t\t\t\t\t\tPièces incluses<br/>
\t\t\t\t\t\t\t\tMise en route<br/>
\t\t\t\t\t\t\t\tMain d’œuvre incluse</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card border-light text-center\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"iconbox iconbox__style-02\">
\t\t\t\t\t🚧
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">INSTALLATION DE CHAUDIÈRE À GAZ</h5>
\t\t\t\t\t\t\t<p class=\"card-text lead\">Chaudière à gaz économique<br/>
\t\t\t\t\t\t\t\tPièces incluses<br/>
\t\t\t\t\t\t\t\tMain d’œuvre incluse</p>
\t\t\t\t\t\t\t<a href=\"/prestation\" class=\"btn btn-outline-primary\">Voir les Tarifs</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>


<div class=\"container p-xl\">
\t<div class=\"card mb-3 border-light\">
\t\t<div class=\"row g-0\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title mb-4\">Spécialiste du chauffage</h1>
\t\t\t\t\t<p class=\"card-text lead\">
\t\t\t\t\t\tLes  <strong>travaux de chauffagerie</strong> n'ont aucun secret pour nous. <strong>Installation d'un chauffe-eau électrique</strong> ou <strong>entretien d'une chaudière</strong>, nous avons l'habitude de faire divers interventions, dont voici un petit panel :<br/><br/>
\t\t\t\t\t\t- Entretien de chaudière à gaz, au charbon, aux multicombustible ou au fioul.<br/>
\t\t\t\t\t\t- Installation de chauffe-eau électrique<br/>
\t\t\t\t\t\t- Entretien de chaudière collective</p>
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a href=\"/prestation\" type=\"button\" class=\"btn btn-primary\">Voir Nos Offres</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"https://storage.googleapis.com/assets-monsite-medias/monsitemoncommerce.com-la-plomberie-longonienne/2020/11/3a47bf1a-istock-5170613592.jpg\" class=\"img-fluid rounded-end\" alt=\"...\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>{% endblock %}
", "acceuil/index.html.twig", "C:\\WorkSpace\\Projet_Comeleon\\templates\\acceuil\\index.html.twig");
    }
}
