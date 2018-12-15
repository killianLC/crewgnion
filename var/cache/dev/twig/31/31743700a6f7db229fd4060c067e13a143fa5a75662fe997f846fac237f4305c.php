<?php

/* maps/question.html.twig */
class __TwigTemplate_eff285677ef35015104433c32fb1d5d988acfb10c3cf051f4dd0728a287fad8c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maps/question.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps/question.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps/question.html.twig"));

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

        echo "Question";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 7
            echo "<div class=\"alert alert-success mb-2 mt-2 \">
    ";
            // line 8
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 12
            echo "<div class=\"alert alert-danger mb-2 mt-2\">
    ";
            // line 13
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        if (twig_test_empty((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "<div class=\"row mx-auto mb-2 mt-2 bg-dark border border-danger rounded \">
    <a onclick=\"history.go(-1)\" class=\"btn btn-warning mt-2 ml-2 mb-2 \"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Point n° : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 19, $this->source); })()), "id", array()), "html", null, true);
            echo "</h4>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Nombre d'essai : ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["nbEssai"]) || array_key_exists("nbEssai", $context) ? $context["nbEssai"] : (function () { throw new Twig_Error_Runtime('Variable "nbEssai" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</h4>
</div>
";
        } else {
            // line 23
            echo "<div class=\"row mx-auto mb-2 mt-2 bg-dark border border-success rounded \">
    <a onclick=\"history.go(-1)\" class=\"btn btn-warning mt-2 mb-2 ml-2\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Point n° : ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 25, $this->source); })()), "id", array()), "html", null, true);
            echo "</h4>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Nombre d'essai : ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["nbEssai"]) || array_key_exists("nbEssai", $context) ? $context["nbEssai"] : (function () { throw new Twig_Error_Runtime('Variable "nbEssai" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "</h4>
</div>
";
        }
        // line 29
        echo "<div class=\"border-top border-primary mt-3 mb-3 mx-auto\"></div>
<div class=\"card text-center bg-dark color_white\">
    <div class=\"card-header\">
        <h4>Question : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 32, $this->source); })()), "getLibelleQuestion", array()), "html", null, true);
        echo "</h4>
    </div>
    <div class=\"row card-body\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new Twig_Error_Runtime('Variable "reponses" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 36
            echo "        ";
            if ( !twig_test_empty((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 36, $this->source); })()))) {
                // line 37
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["reponse"], "getReponseBonne", array()) == true)) {
                    // line 38
                    echo "        <div class=\"col-xs-9 col-sm-6 col-md-5 ml-2 mb-3 mt-2 mx-auto\">
            <a href=\"#\" class=\"btn btn-success btn-lg\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "getLibelleReponse", array(), "method"), "html", null, true);
                    echo "</a>                
        </div>
        ";
                } else {
                    // line 42
                    echo "        <div class=\"col-xs-9 col-sm-6 col-md-5 ml-2 mb-3 mt-2 mx-auto\">
            <a href=\"#\" class=\"btn btn-danger btn-lg\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "getLibelleReponse", array(), "method"), "html", null, true);
                    echo "</a>                
        </div>
        ";
                }
                // line 46
                echo "        ";
            } else {
                // line 47
                echo "        <div class=\"col-xs-9 col-sm-6 col-md-5 ml-2 mb-3 mt-2 mx-auto\">
            <a href=\"/maps/mapsI/repondre/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new Twig_Error_Runtime('Variable "question" does not exist.', 48, $this->source); })()), "getId", array()), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 48, $this->source); })()), "id", array()), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "user", array()), "id", array()), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "getId", array()), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, (isset($context["user_lat"]) || array_key_exists("user_lat", $context) ? $context["user_lat"] : (function () { throw new Twig_Error_Runtime('Variable "user_lat" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "&";
                echo twig_escape_filter($this->env, (isset($context["user_lng"]) || array_key_exists("user_lng", $context) ? $context["user_lng"] : (function () { throw new Twig_Error_Runtime('Variable "user_lng" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-primary btn-lg\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "getLibelleReponse", array(), "method"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
</form>
</div>
</span>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maps/question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 52,  197 => 51,  179 => 48,  176 => 47,  173 => 46,  167 => 43,  164 => 42,  158 => 39,  155 => 38,  152 => 37,  149 => 36,  145 => 35,  139 => 32,  134 => 29,  128 => 26,  124 => 25,  120 => 23,  114 => 20,  110 => 19,  106 => 17,  104 => 16,  95 => 13,  92 => 12,  88 => 11,  79 => 8,  76 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Question{% endblock %}                                            

{% block body %}
{% for flash_message in app.session.flashBag.get('success') %}
<div class=\"alert alert-success mb-2 mt-2 \">
    {{ flash_message }}
</div>
{% endfor %}
{% for flash_message in app.session.flashBag.get('danger') %}
<div class=\"alert alert-danger mb-2 mt-2\">
    {{ flash_message }}
</div>
{% endfor %}
{% if positionF is empty %}
<div class=\"row mx-auto mb-2 mt-2 bg-dark border border-danger rounded \">
    <a onclick=\"history.go(-1)\" class=\"btn btn-warning mt-2 ml-2 mb-2 \"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Point n° : {{ position.id }}</h4>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Nombre d'essai : {{ nbEssai }}</h4>
</div>
{% else %}
<div class=\"row mx-auto mb-2 mt-2 bg-dark border border-success rounded \">
    <a onclick=\"history.go(-1)\" class=\"btn btn-warning mt-2 mb-2 ml-2\"><i class=\"fas fa-arrow-left\"></i> Retour</a>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Point n° : {{ position.id }}</h4>
    <h4 class=\"mx-auto mt-2 mb-2 color_white\">Nombre d'essai : {{ nbEssai }}</h4>
</div>
{% endif %}
<div class=\"border-top border-primary mt-3 mb-3 mx-auto\"></div>
<div class=\"card text-center bg-dark color_white\">
    <div class=\"card-header\">
        <h4>Question : {{ question.getLibelleQuestion }}</h4>
    </div>
    <div class=\"row card-body\">
        {% for reponse in reponses %}
        {% if positionF is not empty %}
        {% if reponse.getReponseBonne == true %}
        <div class=\"col-xs-9 col-sm-6 col-md-5 ml-2 mb-3 mt-2 mx-auto\">
            <a href=\"#\" class=\"btn btn-success btn-lg\">{{ reponse.getLibelleReponse() }}</a>                
        </div>
        {% else  %}
        <div class=\"col-xs-9 col-sm-6 col-md-5 ml-2 mb-3 mt-2 mx-auto\">
            <a href=\"#\" class=\"btn btn-danger btn-lg\">{{ reponse.getLibelleReponse() }}</a>                
        </div>
        {% endif %}
        {% else %}
        <div class=\"col-xs-9 col-sm-6 col-md-5 ml-2 mb-3 mt-2 mx-auto\">
            <a href=\"/maps/mapsI/repondre/{{ question.getId }}&{{ position.id }}&{{ app.user.id }}&{{ reponse.getId }}&{{ user_lat }}&{{ user_lng }}\" class=\"btn btn-primary btn-lg\">{{ reponse.getLibelleReponse() }}</a>
        </div>
        {% endif %}
        {% endfor %}
    </div>
</form>
</div>
</span>
</div>

{% endblock %}", "maps/question.html.twig", "C:\\wamp64\\www\\crewgnion\\templates\\maps\\question.html.twig");
    }
}
