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

/* evenement/FrontEvenement.html.twig */
class __TwigTemplate_b820282b8e6b48d9a46dab4943568e74 extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/FrontEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/FrontEvenement.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "evenement/FrontEvenement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 5) > twig_date_converter($this->env))) {
                // line 6
                echo "                  <div class=\"container\">
                  <div class=\"feature-post small-blog\">
                     <div class=\"col-md-5\">
                        <div class=\"feature-img\">
                        <img  src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Back/img/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 10))), "html", null, true);
                echo "\" alt=\"\" width=\"400\" height=\"350\" />
                           ";
                // line 12
                echo "                        </div>
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"feature-cont\">
                           <div class=\"post-info\">
                              
                                 <h2 ><Font color=\"#30458B\"><B>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 18), "html", null, true);
                echo "</B></Font></h2>
                                 <h5><B>Date : </B>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true);
                echo "</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <h4><B>Adresse : </B>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "adresse", [], "any", false, false, false, 23), "html", null, true);
                echo "</B></h4>
                              <p>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
                              <div class=\"full\" >
                              
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5\" 
                                 href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichage_exercices_evenement_front", ["id" => twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Details</a>
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5; margin-left: 10px\" 
                                 ";
                // line 31
                echo "                                 >Participer</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>
            ";
            }
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/FrontEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  131 => 39,  121 => 31,  116 => 28,  109 => 24,  105 => 23,  98 => 19,  94 => 18,  86 => 12,  82 => 10,  76 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'baseFront.html.twig' %}

        {% block body %}
            {% for e in ev %}
                  {% if e.date> date() %}
                  <div class=\"container\">
                  <div class=\"feature-post small-blog\">
                     <div class=\"col-md-5\">
                        <div class=\"feature-img\">
                        <img  src=\"{{ asset('Back/img/' ~ e.image )  }}\" alt=\"\" width=\"400\" height=\"350\" />
                           {# <img src=\"images/post2.png\" class=\"img-responsive\" alt=\"#\" /> #}
                        </div>
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"feature-cont\">
                           <div class=\"post-info\">
                              
                                 <h2 ><Font color=\"#30458B\"><B>{{e.nom}}</B></Font></h2>
                                 <h5><B>Date : </B>{{e.date|date('Y-m-d')}}</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <h4><B>Adresse : </B>{{e.adresse}}</B></h4>
                              <p>{{e.description}}</p>
                              <div class=\"full\" >
                              
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5\" 
                                 href=\"{{ path('affichage_exercices_evenement_front', {'id': e.id}) }}\">Details</a>
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5; margin-left: 10px\" 
                                 {# href=\"{{ path('', {}) }}\" #}
                                 >Participer</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>
            {% endif %}
            {% endfor %}
        {% endblock %}

", "evenement/FrontEvenement.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\evenement\\FrontEvenement.html.twig");
    }
}
