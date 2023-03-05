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

/* exercice/pdf_file.html.twig */
class __TwigTemplate_abd905dfab1905bacb03cc3ee4d9a2d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/pdf_file.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/pdf_file.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
table {
  border-color: #4c71de;
  line-height: 2;
}
img {
    position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: auto;
    }
title {
        color: #4c71de;
        margin: 0 auto;
        text-align: center;
    }

</style>
 <!-- Begin Page Content -->
  ";
        // line 27
        echo "  <br></br>
  <br></br>
  <br></br>

                <div class=\"container-fluid\">

                    
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3 ;style=text-align: center; color: #4c71de;\">
                    <h2 style=\"text-align: center; color: #4c71de;\">Exercices disponibles</h2>
                        </div>
                        <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered  border: 2px solid blue; \" border=2 id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th style=\"text-align:center;\">Id</th>
                                    <th style=\"text-align:center;\">Nom</th>
                                    <th style=\"text-align:center;\">Description</th>
                                    <th style=\"text-align:center;\">Duree</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 52
            echo "                                <tr>
                                    <td style=\"text-align:center;\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "duree", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                                <tr>
                                    <td colspan=\"5\" style=\"text-align:center;\">No records found</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </tbody>
                        </table>
                    </div>
                        </div>

                    </div>

                </div>
              



    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exercice/pdf_file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 63,  171 => 59,  163 => 56,  159 => 55,  155 => 54,  151 => 53,  148 => 52,  143 => 51,  117 => 27,  95 => 6,  85 => 5,  74 => 2,  64 => 1,  52 => 77,  50 => 5,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block javascripts %}
   
{% endblock %}

{% block body %}
<style>
table {
  border-color: #4c71de;
  line-height: 2;
}
img {
    position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: auto;
    }
title {
        color: #4c71de;
        margin: 0 auto;
        text-align: center;
    }

</style>
 <!-- Begin Page Content -->
  {# <img  src=\"data:image/jpeg;base64,{{ logobase64 }}\" /> #}
  <br></br>
  <br></br>
  <br></br>

                <div class=\"container-fluid\">

                    
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3 ;style=text-align: center; color: #4c71de;\">
                    <h2 style=\"text-align: center; color: #4c71de;\">Exercices disponibles</h2>
                        </div>
                        <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered  border: 2px solid blue; \" border=2 id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th style=\"text-align:center;\">Id</th>
                                    <th style=\"text-align:center;\">Nom</th>
                                    <th style=\"text-align:center;\">Description</th>
                                    <th style=\"text-align:center;\">Duree</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for exercice in exercices %}
                                <tr>
                                    <td style=\"text-align:center;\">{{ exercice.id }}</td>
                                    <td style=\"text-align:center;\">{{ exercice.nom }}</td>
                                    <td style=\"text-align:center;\">{{ exercice.description }}</td>
                                    <td style=\"text-align:center;\">{{ exercice.duree}}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"5\" style=\"text-align:center;\">No records found</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                        </div>

                    </div>

                </div>
              



    
{% endblock %}


", "exercice/pdf_file.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\exercice\\pdf_file.html.twig");
    }
}
