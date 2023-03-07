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

/* evenement/pdf_file.html.twig */
class __TwigTemplate_f430dc5f9eb9c484e85da4a8a18d9241 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/pdf_file.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/pdf_file.html.twig"));

        // line 25
        echo "







";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
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
  <img  src=\"data:image/jpeg;base64,";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["logobase64"]) || array_key_exists("logobase64", $context) ? $context["logobase64"] : (function () { throw new RuntimeError('Variable "logobase64" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" />
  <br></br>
  <br></br>
  <br></br>

                <div class=\"container-fluid\">

                    
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3 ;style=text-align: center; color: #4c71de;\">
                    <h2 style=\"text-align: center; color: #4c71de;\">Evenements disponibles</h2>
                        </div>
                        <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered  border: 2px solid blue; \" border=2 id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th style=\"text-align:center;\">Id</th>
                                    <th style=\"text-align:center;\">Nom</th>
                                    <th style=\"text-align:center;\">Type</th>
                                    <th style=\"text-align:center;\">Date</th>
                                    <th style=\"text-align:center;\">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 85
            echo "                                <tr>
                                    <td style=\"text-align:center;\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 89
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 89), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                    <td style=\"text-align:center;\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "adresse", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 93
            echo "                                <tr>
                                    <td colspan=\"5\" style=\"text-align:center;\">No records found</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
        return "evenement/pdf_file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 97,  190 => 93,  182 => 90,  178 => 89,  174 => 88,  170 => 87,  166 => 86,  163 => 85,  158 => 84,  129 => 58,  107 => 38,  97 => 37,  86 => 34,  76 => 33,  62 => 111,  60 => 37,  57 => 36,  55 => 33,  45 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{# 
                       <table border=1>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Adresse</th>
                                        </tr>
                                                                    
                                        {% for evenement in evenements %}
                                            <tr>
                                                <td>{{ evenement.id }}</td>
                                                <td>{{ evenement.nom }}</td>
                                                <td>{{ evenement.type }}</td>
                                                <td>{{ evenement.date ? evenement.date|date('Y-m-d ') : '' }}</td>
                                                <td>{{ evenement.adresse }}</td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"6\">no records found</td>
                                            </tr>
                                        {% endfor %}
                                </table> #}








{% block javascripts %}
   
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
  <img  src=\"data:image/jpeg;base64,{{ logobase64 }}\" />
  <br></br>
  <br></br>
  <br></br>

                <div class=\"container-fluid\">

                    
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3 ;style=text-align: center; color: #4c71de;\">
                    <h2 style=\"text-align: center; color: #4c71de;\">Evenements disponibles</h2>
                        </div>
                        <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered  border: 2px solid blue; \" border=2 id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th style=\"text-align:center;\">Id</th>
                                    <th style=\"text-align:center;\">Nom</th>
                                    <th style=\"text-align:center;\">Type</th>
                                    <th style=\"text-align:center;\">Date</th>
                                    <th style=\"text-align:center;\">Adresse</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for evenement in evenements %}
                                <tr>
                                    <td style=\"text-align:center;\">{{ evenement.id }}</td>
                                    <td style=\"text-align:center;\">{{ evenement.nom }}</td>
                                    <td style=\"text-align:center;\">{{ evenement.type }}</td>
                                    <td style=\"text-align:center;\">{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
                                    <td style=\"text-align:center;\">{{ evenement.adresse }}</td>
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




{# <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Evenements disponibles</title>
    </head>
    <body>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>                                     
                    {% for evenement in evenements %}
                        <tr>
                            <td>{{ evenement.id }}</td>
                            <td>{{ evenement.nom }}</td>
                            <td>{{ evenement.type }}</td>
                            <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
                            <td>{{ evenement.adresse }}</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\">no records found</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </body>
</html>  #}", "evenement/pdf_file.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\evenement\\pdf_file.html.twig");
    }
}
