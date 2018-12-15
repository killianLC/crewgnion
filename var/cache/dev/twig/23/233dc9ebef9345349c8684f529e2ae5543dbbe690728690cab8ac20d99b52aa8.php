<?php

/* maps/listePositionNF.html.twig */
class __TwigTemplate_28fdbb139568332c5d1b286f371e6ee82d31ef07f07896cff8ea749c98340ece extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maps/listePositionNF.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps/listePositionNF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps/listePositionNF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste Position";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2 class=\"text-center color_white mt-5\">Positions non validées :</h2>
<div class=\"border-top border-primary mt-2 mx-auto\">
</div>
<div class=\"table-responsive-md mt-3\">
    <table class=\"table table-dark\">
        <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">Position</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["positionsNF"]) || array_key_exists("positionsNF", $context) ? $context["positionsNF"] : (function () { throw new Twig_Error_Runtime('Variable "positionsNF" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["positionNF"]) {
            // line 20
            echo "            <tr>
                <th class=\"color_white\" scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["positionNF"], "id", array()), "html", null, true);
            echo "</a></th>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["positionNF"], "nomVille", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn btn-warning fas fa-map-marked-alt\" href=\"/maps/mapsI/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["positionNF"], "id", array()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->source); })()), "user", array()), "id", array()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["user_lat"]) || array_key_exists("user_lat", $context) ? $context["user_lat"] : (function () { throw new Twig_Error_Runtime('Variable "user_lat" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["user_lng"]) || array_key_exists("user_lng", $context) ? $context["user_lng"] : (function () { throw new Twig_Error_Runtime('Variable "user_lng" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\"></a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['positionNF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maps/listePositionNF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 26,  102 => 23,  98 => 22,  94 => 21,  91 => 20,  87 => 19,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Liste Position{% endblock %}

{% block body %}
<h2 class=\"text-center color_white mt-5\">Positions non validées :</h2>
<div class=\"border-top border-primary mt-2 mx-auto\">
</div>
<div class=\"table-responsive-md mt-3\">
    <table class=\"table table-dark\">
        <thead>
            <tr>
                <th scope=\"col\">N°</th>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">Position</th>
            </tr>
        </thead>
        <tbody>
            {% for positionNF in positionsNF %}
            <tr>
                <th class=\"color_white\" scope=\"row\">{{ positionNF.id }}</a></th>
                <td>{{ positionNF.nomVille }}</td>
                <td><a class=\"btn btn-warning fas fa-map-marked-alt\" href=\"/maps/mapsI/{{ positionNF.id }}&{{ app.user.id }}&{{ user_lat }}&{{ user_lng }}\"></a></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    {% endblock %}", "maps/listePositionNF.html.twig", "C:\\wamp64\\www\\crewgnion\\templates\\maps\\listePositionNF.html.twig");
    }
}
