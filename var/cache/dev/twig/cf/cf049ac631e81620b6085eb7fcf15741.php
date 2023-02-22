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

/* evenement/FrontEvenementExercices.html.twig */
class __TwigTemplate_d671329930d9ec5696898039b861b686 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/FrontEvenementExercices.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/FrontEvenementExercices.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "evenement/FrontEvenementExercices.html.twig", 1);
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
        echo "                  ";
        // line 30
        echo "

              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 33
            echo "                <div class=\"container\">
                  <div class=\"feature-post small-blog\">
                     <div class=\"col-md-5\">
                        <div class=\"feature-img\">
                        <img  src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Back/img/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"\" width=\"400\" height=\"300\" />
                           ";
            // line 39
            echo "                        </div>
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"feature-cont\">
                           <div class=\"post-info\">
                              
                                 <h2 ><Font color=\"#30458B\"><B>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</B></Font></h2>
                                 <h5><B>duree : </B>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "duree", [], "any", false, false, false, 46), "html", null, true);
            echo "</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/FrontEvenementExercices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 57,  107 => 50,  100 => 46,  96 => 45,  88 => 39,  84 => 37,  78 => 33,  74 => 32,  70 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'baseFront.html.twig' %}

        {% block body %}
                  {# <div class=\"container\">
                  <div class=\"feature-post small-blog\">
                     <div class=\"col-md-5\">
                        <div class=\"feature-img\">
                        <img  src=\"{{ asset('Back/img/' ~ ev.image )  }}\" alt=\"\" width=\"400\" height=\"300\" />
                        </div>
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"feature-cont\">
                           <div class=\"post-info\">
                              
                                 <h2 ><Font color=\"#30458B\"><B>{{ev.nom}}</B></Font></h2>
                                 <h5><B>Date : </B>{{ev.date|date('Y-m-d')}}</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <h4><B>Adresse : </B>{{ev.adresse}}</B></h4>
                              <p>{{ev.description}}</p>
                              <div class=\"full\" >
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5\" href=\"#\">Details</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              </div> #}


              {% for e in exercices %}
                <div class=\"container\">
                  <div class=\"feature-post small-blog\">
                     <div class=\"col-md-5\">
                        <div class=\"feature-img\">
                        <img  src=\"{{ asset('Back/img/' ~ e.image )  }}\" alt=\"\" width=\"400\" height=\"300\" />
                           {# <img src=\"images/post2.png\" class=\"img-responsive\" alt=\"#\" /> #}
                        </div>
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"feature-cont\">
                           <div class=\"post-info\">
                              
                                 <h2 ><Font color=\"#30458B\"><B>{{e.nom}}</B></Font></h2>
                                 <h5><B>duree : </B>{{e.duree}}</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <p>{{e.description}}</p>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>
              {% endfor %}

        {% endblock %}

", "evenement/FrontEvenementExercices.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\evenement\\FrontEvenementExercices.html.twig");
    }
}
