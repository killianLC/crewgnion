<?php

/* maps/mapsI.html.twig */
class __TwigTemplate_51333ac1a75fe7ee3a518b34c626cf24c855b29f711b816b0764d53d90b15f69 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maps/mapsI.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps/mapsI.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps/mapsI.html.twig"));

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

        echo "Maps";
        
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
        echo "<div class=\"container mt-3\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            echo "    <div class=\"alert alert-success mb-2\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <div class=\"row color_white\">
        <span class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mr bg-dark border border-primary rounded color_white\">
            <h2 class=\"text-center\">Point n° : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo " 
                ";
        // line 15
        if (twig_test_empty((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 15, $this->source); })()))) {
            echo "<span class=\"badge badge-danger\"><i class=\"far fa-times-circle\"></i></span>
                ";
        } else {
            // line 16
            echo "<span class=\"badge badge-success\"><i class=\"far fa-check-circle\"></i></span>
                ";
        }
        // line 17
        echo "</h2>
            </span>
            ";
        // line 19
        if ( !twig_test_empty((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 21
                echo "            <span class=\"col-xs-9 col-sm-5 col-md-3 mb-2 mx-auto bg-dark border border-primary rounded color_white \">
                <h4 class=\"text-center mx-auto\">Résolue le : ";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["position"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</h4>
            </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "        </div>
    </div>
    <div class=\"border-top border-primary mt-2 mb-2 mx-auto\"></div>  
    <div id=\"map\" class=\"mt-3\"></div>
    <div class=\"container mt-3\">
        <div class=\"row color_white\">
            <span class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mx-auto bg-dark border border-primary rounded color_white\">
                <h2 class=\"text-center mt-1\">Distance : ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new Twig_Error_Runtime('Variable "distance" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " Km</h2>
            </span>
            <span class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mx-auto bg-dark border border-primary rounded color_white\">
                
                    ";
        // line 37
        if ( !twig_test_empty((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "                    <h4 class=\"text-center mt-2\">Voir la question : 
                    <a href=\"/maps/Question/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 39, $this->source); })()), "id", array()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->source); })()), "user", array()), "id", array()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["user_lat"]) || array_key_exists("user_lat", $context) ? $context["user_lat"] : (function () { throw new Twig_Error_Runtime('Variable "user_lat" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["user_lng"]) || array_key_exists("user_lng", $context) ? $context["user_lng"] : (function () { throw new Twig_Error_Runtime('Variable "user_lng" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "\" class=\"badge badge-success\"><i class=\"far fa-question-circle\"></i></a></h4>
                    ";
        } elseif ((        // line 40
(isset($context["distanceM"]) || array_key_exists("distanceM", $context) ? $context["distanceM"] : (function () { throw new Twig_Error_Runtime('Variable "distanceM" does not exist.', 40, $this->source); })()) > twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 40, $this->source); })()), "rayon", array()))) {
            // line 41
            echo "                    <h4 class=\"text-center mt-2\">Validé la quête : <a class=\"btn btn-danger disabled\"><i class=\"far fa-times-circle\"></i></a></h4>
                    ";
        } else {
            // line 43
            echo "                    <h4 class=\"text-center mt-2\">Validé la quête : <a href=\"/maps/Question/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 43, $this->source); })()), "id", array()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "user", array()), "id", array()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["user_lat"]) || array_key_exists("user_lat", $context) ? $context["user_lat"] : (function () { throw new Twig_Error_Runtime('Variable "user_lat" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "&";
            echo twig_escape_filter($this->env, (isset($context["user_lng"]) || array_key_exists("user_lng", $context) ? $context["user_lng"] : (function () { throw new Twig_Error_Runtime('Variable "user_lng" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\" class=\"badge badge-success\"><i class=\"far fa-check-circle\"></i></a></h4>
                    ";
        }
        // line 45
        echo "                </span>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        <script>
            
            var map, infoWindow;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {          
                    zoom: 8,
                });
                infoWindow = new google.maps.InfoWindow;
                
                var pointF = {
                    path: 'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z',
                    fillColor: '#28a745',
                    fillOpacity: 1,
                    scale: 1,
                    strokeColor: '',
                    strokeWeight: 0
                };
                var pointNF = {
                    path: 'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z',
                    fillColor: '#dc3545',
                    fillOpacity: 1,
                    scale: 1,
                    strokeColor: '',
                    strokeWeight: 0
                };
                
                var rayonPos = new google.maps.Circle({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    map: map,
                    center: {lat: ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 83, $this->source); })()), "latitude", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 83, $this->source); })()), "longitude", array()), "html", null, true);
        echo "},
                    radius: ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 84, $this->source); })()), "rayon", array()), "html", null, true);
        echo "
                });
                
                ";
        // line 87
        if (twig_test_empty((isset($context["positionF"]) || array_key_exists("positionF", $context) ? $context["positionF"] : (function () { throw new Twig_Error_Runtime('Variable "positionF" does not exist.', 87, $this->source); })()))) {
            // line 88
            echo "                marker = new google.maps.Marker({
                    map: map,
                    icon : pointNF,
                    animation: google.maps.Animation.DROP,
                    position: {lat: ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 92, $this->source); })()), "latitude", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 92, $this->source); })()), "longitude", array()), "html", null, true);
            echo "}
                });
                ";
        } else {
            // line 95
            echo "                marker = new google.maps.Marker({
                    map: map,
                    icon : pointF,
                    animation: google.maps.Animation.DROP,
                    position: {lat: ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 99, $this->source); })()), "latitude", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new Twig_Error_Runtime('Variable "position" does not exist.', 99, $this->source); })()), "longitude", array()), "html", null, true);
            echo "}
                });
                ";
        }
        // line 102
        echo "                
                
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var infowindow = new google.maps.InfoWindow({
                            content: '<div class=\"container\">'+
                                'Vous êtes ici !'+
                                '</div>'
                            });
                            var marker = new google.maps.Marker({
                                position: pos,
                                map: map,
                                icon: {
                                    path: 'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z',
                                    fillColor: '#007bff',
                                    fillOpacity: 1,
                                    scale: 1,
                                    strokeColor: '',
                                    strokeWeight: 0
                                },
                                animation: google.maps.Animation.DROP
                            });
                            marker.addListener('click', function() {
                                infowindow.open(map, marker);
                            });
                            
                            infoWindow.open(map);
                            map.setCenter(pos);
                        }, function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                        });
                    } else {
                        // Browser doesn't support Geolocation
                        handleLocationError(false, infoWindow, map.getCenter());
                    }
                }
                
                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\\'t support geolocation.');
                    infoWindow.open(map);
                }
                
                function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }
            </script>
            <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBGqu93anG2RuN7R9imKXX9f7OwDsNewh0&callback=initMap\">
        </script>                                          
        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "maps/mapsI.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 102,  275 => 99,  269 => 95,  261 => 92,  255 => 88,  253 => 87,  247 => 84,  241 => 83,  206 => 50,  197 => 49,  184 => 45,  172 => 43,  168 => 41,  166 => 40,  156 => 39,  153 => 38,  151 => 37,  144 => 33,  135 => 26,  132 => 25,  123 => 22,  120 => 21,  115 => 20,  113 => 19,  109 => 17,  105 => 16,  100 => 15,  96 => 14,  92 => 12,  83 => 9,  80 => 8,  76 => 7,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Maps{% endblock %}                                            

{% block body %}
<div class=\"container mt-3\">
    {% for flash_message in app.session.flashBag.get('success') %}
    <div class=\"alert alert-success mb-2\">
        {{ flash_message }}
    </div>
    {% endfor %}
    <div class=\"row color_white\">
        <span class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mr bg-dark border border-primary rounded color_white\">
            <h2 class=\"text-center\">Point n° : {{ position.id }} 
                {% if positionF is empty %}<span class=\"badge badge-danger\"><i class=\"far fa-times-circle\"></i></span>
                {% else %}<span class=\"badge badge-success\"><i class=\"far fa-check-circle\"></i></span>
                {% endif %}</h2>
            </span>
            {% if positionF is not empty %}
            {% for position in positionF %}
            <span class=\"col-xs-9 col-sm-5 col-md-3 mb-2 mx-auto bg-dark border border-primary rounded color_white \">
                <h4 class=\"text-center mx-auto\">Résolue le : {{ position.date | date('d/m/Y') }}</h4>
            </span>
            {% endfor %}
            {% endif %}
        </div>
    </div>
    <div class=\"border-top border-primary mt-2 mb-2 mx-auto\"></div>  
    <div id=\"map\" class=\"mt-3\"></div>
    <div class=\"container mt-3\">
        <div class=\"row color_white\">
            <span class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mx-auto bg-dark border border-primary rounded color_white\">
                <h2 class=\"text-center mt-1\">Distance : {{distance}} Km</h2>
            </span>
            <span class=\"col-xs-11 col-sm-6 col-md-5 mb-2 mx-auto bg-dark border border-primary rounded color_white\">
                
                    {% if positionF is not empty %}
                    <h4 class=\"text-center mt-2\">Voir la question : 
                    <a href=\"/maps/Question/{{ position.id }}&{{ app.user.id }}&{{ user_lat }}&{{ user_lng }}\" class=\"badge badge-success\"><i class=\"far fa-question-circle\"></i></a></h4>
                    {% elseif distanceM > position.rayon %}
                    <h4 class=\"text-center mt-2\">Validé la quête : <a class=\"btn btn-danger disabled\"><i class=\"far fa-times-circle\"></i></a></h4>
                    {% else %}
                    <h4 class=\"text-center mt-2\">Validé la quête : <a href=\"/maps/Question/{{ position.id }}&{{ app.user.id }}&{{ user_lat }}&{{ user_lng }}\" class=\"badge badge-success\"><i class=\"far fa-check-circle\"></i></a></h4>
                    {% endif %}
                </span>
            </div>
        </div>
        {% endblock %}
        {% block javascripts %}
        <script>
            
            var map, infoWindow;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {          
                    zoom: 8,
                });
                infoWindow = new google.maps.InfoWindow;
                
                var pointF = {
                    path: 'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z',
                    fillColor: '#28a745',
                    fillOpacity: 1,
                    scale: 1,
                    strokeColor: '',
                    strokeWeight: 0
                };
                var pointNF = {
                    path: 'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z',
                    fillColor: '#dc3545',
                    fillOpacity: 1,
                    scale: 1,
                    strokeColor: '',
                    strokeWeight: 0
                };
                
                var rayonPos = new google.maps.Circle({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    map: map,
                    center: {lat: {{ position.latitude }}, lng: {{ position.longitude }}},
                    radius: {{ position.rayon }}
                });
                
                {% if positionF is empty %}
                marker = new google.maps.Marker({
                    map: map,
                    icon : pointNF,
                    animation: google.maps.Animation.DROP,
                    position: {lat: {{ position.latitude }}, lng: {{ position.longitude }}}
                });
                {% else %}
                marker = new google.maps.Marker({
                    map: map,
                    icon : pointF,
                    animation: google.maps.Animation.DROP,
                    position: {lat: {{ position.latitude }}, lng: {{ position.longitude }}}
                });
                {% endif %}
                
                
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var infowindow = new google.maps.InfoWindow({
                            content: '<div class=\"container\">'+
                                'Vous êtes ici !'+
                                '</div>'
                            });
                            var marker = new google.maps.Marker({
                                position: pos,
                                map: map,
                                icon: {
                                    path: 'M0-48c-9.8 0-17.7 7.8-17.7 17.4 0 15.5 17.7 30.6 17.7 30.6s17.7-15.4 17.7-30.6c0-9.6-7.9-17.4-17.7-17.4z',
                                    fillColor: '#007bff',
                                    fillOpacity: 1,
                                    scale: 1,
                                    strokeColor: '',
                                    strokeWeight: 0
                                },
                                animation: google.maps.Animation.DROP
                            });
                            marker.addListener('click', function() {
                                infowindow.open(map, marker);
                            });
                            
                            infoWindow.open(map);
                            map.setCenter(pos);
                        }, function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                        });
                    } else {
                        // Browser doesn't support Geolocation
                        handleLocationError(false, infoWindow, map.getCenter());
                    }
                }
                
                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                    infoWindow.setPosition(pos);
                    infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\\'t support geolocation.');
                    infoWindow.open(map);
                }
                
                function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }
            </script>
            <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBGqu93anG2RuN7R9imKXX9f7OwDsNewh0&callback=initMap\">
        </script>                                          
        
        {% endblock %}
", "maps/mapsI.html.twig", "C:\\wamp64\\www\\crewgnion\\templates\\maps\\mapsI.html.twig");
    }
}
