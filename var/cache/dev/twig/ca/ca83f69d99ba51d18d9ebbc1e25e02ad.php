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

/* admin/listClients.html.twig */
class __TwigTemplate_22671d6cdb006fee1e12fab886e75502 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'admin' => [$this, 'block_admin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboardAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listClients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listClients.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboardAdmin.html.twig", "admin/listClients.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 4
        echo "


    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Listes des Clients vérifiés</h1>
        </div>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">

            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered text-center\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Nom & Prénom</th>
                            <th>DateNaissance</th>
                            <th>Genre</th>
                            <th>Télèphone</th>
                            <th>Adresse e-mail</th>
                            <th>État e-mail</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 34
            echo "                            <tr>
                                <td>
                                    <img style=\"width: 60px; height: 60px; object-fit: cover;\" class=\"img-profile rounded-circle\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, $context["client"], "image", [], "any", false, false, false, 36))), "html", null, true);
            echo "\">
                                    <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                                </td>
                                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["client"], "dateNaissance", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "dateNaissance", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "genre", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo ((twig_get_attribute($this->env, $this->source, $context["client"], "verified", [], "any", false, false, false, 43)) ? ("Vérifié") : ("Non vérifié"));
            echo "</td>
                                <td>
                                    <a class=\"btn btn-circle btn-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Désactiver compte\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_desactiver", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-times\"></i></a>
                                    <a class=\"btn btn-circle btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                            <tr>
                                <td colspan=\"12\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "



                        </tbody>
                    </table>
                    <div class=\"card-footer bg-transparent p-0\">
                        <!-- Pagination START -->
                        <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            <!-- Content -->
                            <p class=\"mb-0 text-center text-sm-start\"></p>
                            <!-- Pagination -->
                            <nav class=\"d-flex justify-content-center mb-0\" aria-label=\"navigation\">
                                ";
        // line 67
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 67, $this->source); })()));
        echo "
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
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
        return "admin/listClients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 67,  162 => 54,  153 => 50,  144 => 46,  140 => 45,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  112 => 37,  108 => 36,  104 => 34,  99 => 33,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboardAdmin.html.twig' %}

{% block admin %}



    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Listes des Clients vérifiés</h1>
        </div>

        <!-- DataTales Example -->
        <div class=\"card shadow mb-4\">

            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered text-center\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th>Nom & Prénom</th>
                            <th>DateNaissance</th>
                            <th>Genre</th>
                            <th>Télèphone</th>
                            <th>Adresse e-mail</th>
                            <th>État e-mail</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for client in clients %}
                            <tr>
                                <td>
                                    <img style=\"width: 60px; height: 60px; object-fit: cover;\" class=\"img-profile rounded-circle\" src=\"{{ asset('Client_img/' ~ client.image) }}\">
                                    <span>{{ client.nom }} {{ client.prenom }}</span>
                                </td>
                                <td>{{ client.dateNaissance ? client.dateNaissance|date('Y-m-d') : '' }}</td>
                                <td>{{ client.genre }}</td>
                                <td>{{ client.telephone }}</td>
                                <td>{{ client.email }}</td>
                                <td>{{ client.verified ? 'Vérifié' : 'Non vérifié' }}</td>
                                <td>
                                    <a class=\"btn btn-circle btn-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Désactiver compte\" href=\"{{ path('app_client_desactiver', {'id': client.id}) }}\"><i class=\"fas fa-user-times\"></i></a>
                                    <a class=\"btn btn-circle btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" href=\"{{ path('app_client_delete', {'id': client.id}) }}\"><i class=\"fas fa-trash-alt\"></i></a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"12\">no records found</td>
                            </tr>
                        {% endfor %}




                        </tbody>
                    </table>
                    <div class=\"card-footer bg-transparent p-0\">
                        <!-- Pagination START -->
                        <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            <!-- Content -->
                            <p class=\"mb-0 text-center text-sm-start\"></p>
                            <!-- Pagination -->
                            <nav class=\"d-flex justify-content-center mb-0\" aria-label=\"navigation\">
                                {{ knp_pagination_render(clients) }}
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "admin/listClients.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\admin\\listClients.html.twig");
    }
}
