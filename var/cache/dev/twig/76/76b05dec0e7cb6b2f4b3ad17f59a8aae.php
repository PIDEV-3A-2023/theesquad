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

/* admin/listCoachs.html.twig */
class __TwigTemplate_d58fb25c1349357124a988bb4044b51d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listCoachs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listCoachs.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboardAdmin.html.twig", "admin/listCoachs.html.twig", 1);
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
            <h1 class=\"h3 mb-0 text-gray-800\">Listes des Coachs validés</h1>
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
                            <th>Télèphone</th>
                            <th>Adresse e-mail</th>
                            <th>État e-mail</th>
                            <th>État compte</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 34
            echo "                            <tr>
                                <td>
                                    <img style=\"width: 60px; height: 60px; object-fit: cover;\" class=\"img-profile rounded-circle\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 36))), "html", null, true);
            echo "\">
                                    <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                                </td>
                                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["coach"], "dateNaissance", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "dateNaissance", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "telephone", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "email", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo ((twig_get_attribute($this->env, $this->source, $context["coach"], "verified", [], "any", false, false, false, 42)) ? ("Vérifié") : ("Non vérifié"));
            echo "</td>
                                <td>";
            // line 43
            echo ((twig_get_attribute($this->env, $this->source, $context["coach"], "etatCompte", [], "any", false, false, false, 43)) ? ("Confirmé") : ("Non confirmé"));
            echo "</td>
                                <td>
                                    <a class=\"btn btn-circle btn-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_showCoach", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
                                    <a class=\"btn btn-circle btn-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Désactiver compte\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Coach_desactiver", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><i class=\"fas fa-user-times\"></i></a>
                                    <a class=\"btn btn-circle btn-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Confirmer\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Coach_confirmer", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><i class=\"fas fa-check-circle\"></i></a>
                                    <a class=\"btn btn-circle btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["coach"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "                            <tr>
                                <td colspan=\"12\">no records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 66, $this->source); })()));
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
        return "admin/listCoachs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 66,  170 => 56,  161 => 52,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  112 => 37,  108 => 36,  104 => 34,  99 => 33,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboardAdmin.html.twig' %}

{% block admin %}



    <div class=\"container-fluid\">

        <!-- Page Heading -->
        <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Listes des Coachs validés</h1>
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
                            <th>Télèphone</th>
                            <th>Adresse e-mail</th>
                            <th>État e-mail</th>
                            <th>État compte</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for coach in coaches %}
                            <tr>
                                <td>
                                    <img style=\"width: 60px; height: 60px; object-fit: cover;\" class=\"img-profile rounded-circle\" src=\"{{ asset('Client_img/' ~ coach.image) }}\">
                                    <span>{{ coach.nom }} {{ coach.prenom }}</span>
                                </td>
                                <td>{{ coach.dateNaissance ? coach.dateNaissance|date('Y-m-d') : '' }}</td>
                                <td>{{ coach.telephone }}</td>
                                <td>{{ coach.email }}</td>
                                <td>{{ coach.verified ? 'Vérifié' : 'Non vérifié' }}</td>
                                <td>{{ coach.etatCompte ? 'Confirmé' : 'Non confirmé' }}</td>
                                <td>
                                    <a class=\"btn btn-circle btn-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Voir\" href=\"{{ path('app_admin_showCoach', {'id': coach.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                                    <a class=\"btn btn-circle btn-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Désactiver compte\" href=\"{{ path('app_Coach_desactiver', {'id': coach.id}) }}\"><i class=\"fas fa-user-times\"></i></a>
                                    <a class=\"btn btn-circle btn-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Confirmer\" href=\"{{ path('app_Coach_confirmer', {'id': coach.id}) }}\"><i class=\"fas fa-check-circle\"></i></a>
                                    <a class=\"btn btn-circle btn-dark\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\" href=\"{{ path('app_coach_delete', {'id': coach.id}) }}\"><i class=\"fas fa-trash-alt\"></i></a>
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
                                {{ knp_pagination_render(coaches) }}
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}
", "admin/listCoachs.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\admin\\listCoachs.html.twig");
    }
}
