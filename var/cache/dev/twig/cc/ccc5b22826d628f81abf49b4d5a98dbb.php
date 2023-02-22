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

/* evenement/Front.html.twig */
class __TwigTemplate_954edff72beeef7e67677cec4c7b517c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/Front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/Front.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "evenement/Front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ev"]) || array_key_exists("ev", $context) ? $context["ev"] : (function () { throw new RuntimeError('Variable "ev" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 36
            echo "                  <div class=\"container\">
                  <div class=\"feature-post small-blog\">
                     <div class=\"col-md-5\">
                        <div class=\"feature-img\">
                        <img  src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Back/img/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"\" width=\"400\" height=\"300\" />
                           ";
            // line 42
            echo "                        </div>
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"feature-cont\">
                           <div class=\"post-info\">
                              
                                 <h2 ><Font color=\"#30458B\"><B>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</B></Font></h2>
                                 <h5><B>Date : </B>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "date", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true);
            echo "</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <h4><B>Adresse : </B>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "adresse", [], "any", false, false, false, 53), "html", null, true);
            echo "</B></h4>
                              <p>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                              <div class=\"full\" >
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5\" href=\"#\">Details</a>
                              </div>
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
        // line 65
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/Front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 65,  106 => 54,  102 => 53,  95 => 49,  91 => 48,  83 => 42,  79 => 40,  73 => 36,  68 => 35,  58 => 34,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'baseFront.html.twig' %}

{#{% block body %}
<table border=1>
<tr>
<td>Id</td>
<td>Nom</td>
<td>Description</td>
<td>Date</td>
<td>Adresse</td>
<td>Image</td>

</tr>

{% for e in ev %}
<tr>
<td>{{e.id}}</td>
<td>{{e.nom}}</td>
<td>{{e.description}}</td>
<td>{{e.date|date('Y-m-d')}}</td>
<td>{{e.adresse}}</td>
 <tr>
                 #}
                {# <a href=\"{{ asset('uploads/brochures/' ~ product.brochureFilename) }}\">View brochure (PDF)</a> #}
                {# <td>
                <img  src=\"{{ asset('Back/img/' ~ e.image )  }}\" alt=\"\" width=\"80\" height=\"80\" /> #}
                {# {{ asset('Back/img' ~ evenement.image)  }} #}
                {# </td>
</tr>
</tr>
{% endfor %}
</table>
{% endblock %} #}
        {% block body %}
            {% for e in ev %}
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
                                 <h5><B>Date : </B>{{e.date|date('Y-m-d')}}</h5>
                              
                           </div>
                           <div class=\"post-heading\">
                              <h4><B>Adresse : </B>{{e.adresse}}</B></h4>
                              <p>{{e.description}}</p>
                              <div class=\"full\" >
                                 <a class=\"btn\" style=\"background-color:#30458B; border-color:#daeee5; color:#daeee5\" href=\"#\">Details</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>

            {% endfor %}
        {% endblock %}

", "evenement/Front.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\evenement\\Front.html.twig");
    }
}