<?php

/* accueil/info.html.twig */
class __TwigTemplate_02349ae74cb34a659ed790726ad1257be00e034b446bc1dfcd267dad2748f123 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accueil/info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h4 class=\" mt-2 text-center color_white\">Site réalisé par Johan Belhomme grâce au framework Symfony et à la library Bootstrap</h4>

<img class=\"col-xs-11 col-sm-5 col-md-5 mt-5 mr-2 mb-2 \" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/symfony.png"), "html", null, true);
        echo "\">
<img class=\" col-xs-9 col-sm-4 col-md-3 mt-5 mr-2 mb-2 \" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bootstrap.png"), "html", null, true);
        echo "\">

<div class=\"border-top border-primary mt-2 mb-2 mx-auto\"></div>

<div class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mt-2 bg-dark border border-primary rounded color_white\">
Nombre d'inscrit : <span class=\"badge badge-primary\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nbUser"]) || array_key_exists("nbUser", $context) ? $context["nbUser"] : (function () { throw new Twig_Error_Runtime('Variable "nbUser" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</span><br>
Nombre de CC total collecter: <span class=\"badge badge-warning\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["nbCC"]) || array_key_exists("nbCC", $context) ? $context["nbCC"] : (function () { throw new Twig_Error_Runtime('Variable "nbCC" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</span><br>
Nombre d'experience collecter : <span class=\"badge badge-success\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["nbXp"]) || array_key_exists("nbXp", $context) ? $context["nbXp"] : (function () { throw new Twig_Error_Runtime('Variable "nbXp" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</span><br>
Nombre de tournois réalisé sur le site : <span class=\"badge badge-secondary\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nbT"]) || array_key_exists("nbT", $context) ? $context["nbT"] : (function () { throw new Twig_Error_Runtime('Variable "nbT" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</span><br>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  78 => 15,  74 => 14,  70 => 13,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h4 class=\" mt-2 text-center color_white\">Site réalisé par Johan Belhomme grâce au framework Symfony et à la library Bootstrap</h4>

<img class=\"col-xs-11 col-sm-5 col-md-5 mt-5 mr-2 mb-2 \" src=\"{{ asset('images/symfony.png') }}\">
<img class=\" col-xs-9 col-sm-4 col-md-3 mt-5 mr-2 mb-2 \" src=\"{{ asset('images/bootstrap.png') }}\">

<div class=\"border-top border-primary mt-2 mb-2 mx-auto\"></div>

<div class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mt-2 bg-dark border border-primary rounded color_white\">
Nombre d'inscrit : <span class=\"badge badge-primary\">{{ nbUser }}</span><br>
Nombre de CC total collecter: <span class=\"badge badge-warning\">{{ nbCC }}</span><br>
Nombre d'experience collecter : <span class=\"badge badge-success\">{{ nbXp }}</span><br>
Nombre de tournois réalisé sur le site : <span class=\"badge badge-secondary\">{{ nbT }}</span><br>
</div>


{% endblock %}", "accueil/info.html.twig", "C:\\wamp64\\www\\crewgnion\\templates\\accueil\\info.html.twig");
    }
}
