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

/* exercice/index.html.twig */
class __TwigTemplate_dd2354d21673e883594e12a5e8582b07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 41
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "exercice/index.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Exercice index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Exercices relatives au differentes événements</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target=\"_blank\"
                                    href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 135px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_new");
        echo "\">Nouveau exercice</a>
                            </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Durée</th>
                                            <th>Nom de l'événement</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 88
            echo "                                            <tr>
                                                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "nom", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "duree", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exercice"], "evenement", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                                <td style=\"display: flex;\" HEIGHT=\"10%\">
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">Afficher</a>
    
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\"  href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\">Modifier</a>


                                                    <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 116))), "html", null, true);
            echo "\">
                                                        <button style=\"justify-content: center;
                                               display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #fd3838;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;\"  class=\"btn\">Supprimer</button>
                                                                                            </form>
                                                                                            </td>
                                                                                        </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 129
            echo "                                                 <tr>
                                                 <td colspan=\"6\">no records found</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exercice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 133,  206 => 129,  188 => 116,  184 => 115,  178 => 112,  165 => 102,  152 => 92,  148 => 91,  144 => 90,  140 => 89,  137 => 88,  132 => 87,  106 => 64,  88 => 48,  78 => 47,  59 => 43,  36 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{# <!DOCTYPE html>

<title>Exercice index</title>

{% block body %}
    <h1>Exercice index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Duree</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for exercice in exercices %}
            <tr>
                <td>{{ exercice.id }}</td>
                <td>{{ exercice.nom }}</td>
                <td>{{ exercice.description }}</td>
                <td>{{ exercice.duree }}</td>
                <td>
                    <a href=\"{{ path('app_exercice_show', {'id': exercice.id}) }}\">show</a>
                    <a href=\"{{ path('app_exercice_edit', {'id': exercice.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_exercice_new') }}\">Create new</a>
{% endblock %}#}

{% extends 'baseBack.html.twig' %} 

{% block title %}Exercice index{% endblock %}



{% block body %}

 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Exercices relatives au differentes événements</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target=\"_blank\"
                                    href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 135px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('app_exercice_new') }}\">Nouveau exercice</a>
                            </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Durée</th>
                                            <th>Nom de l'événement</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        {% for exercice in exercices %}
                                            <tr>
                                                <td>{{ exercice.id }}</td>
                                                <td>{{ exercice.nom }}</td>
                                                <td>{{ exercice.duree }}</td>
                                                <td>{{ exercice.evenement.nom }}</td>
                                                <td style=\"display: flex;\" HEIGHT=\"10%\">
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\" href=\"{{ path('app_exercice_show', {'id': exercice.id}) }}\">Afficher</a>
    
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\"  href=\"{{ path('app_exercice_edit', {'id': exercice.id}) }}\">Modifier</a>


                                                    <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"{{ path('app_exercice_delete', {'id': exercice.id}) }}\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ exercice.id) }}\">
                                                        <button style=\"justify-content: center;
                                               display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #fd3838;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;\"  class=\"btn\">Supprimer</button>
                                                                                            </form>
                                                                                            </td>
                                                                                        </tr>
                                                {% else %}
                                                 <tr>
                                                 <td colspan=\"6\">no records found</td>
                                                </tr>
                                                {% endfor %}


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



 

{% endblock %}", "exercice/index.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\exercice\\index.html.twig");
    }
}
