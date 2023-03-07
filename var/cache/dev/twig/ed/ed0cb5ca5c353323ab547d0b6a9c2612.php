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

/* exercice/show.html.twig */
class __TwigTemplate_57e446a86daae6ff8298946bccb76086 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'coach' => [$this, 'block_coach'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "coach/dashboardCoach.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "exercice/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_coach($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        // line 4
        echo "  
        <div style=\"display:flex;\">
        <div class=\"col-lg-8\">
            <h1>Exercice</h1>
        </div>
        <div class=\"col-lg-4\" style=\"display :flex\">
            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">Retourner</a>

            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Modifier</a>

            <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19))), "html", null, true);
        echo "\">
                <button style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px;
                background-color: #fd3838; color: white; padding-top: 5px; border-radius: 10px;\"  
                class=\"btn\">Supprimer</button>
            </form>
        </div>
    </div>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 43, $this->source); })()), "duree", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Evenement</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 47, $this->source); })()), "evenement", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
            </tr>

             <tr>
                <th>image</th>
                <td>
                    <img  src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Back/img/" . twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53))), "html", null, true);
        echo "\" alt=\"\" width=\"80\" height=\"80\" />
                </td>
            </tr>
        </tbody>
    </table>

  

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exercice/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  137 => 47,  130 => 43,  123 => 39,  116 => 35,  109 => 31,  94 => 19,  90 => 18,  85 => 16,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coach/dashboardCoach.html.twig' %}

{% block coach %}
  
        <div style=\"display:flex;\">
        <div class=\"col-lg-8\">
            <h1>Exercice</h1>
        </div>
        <div class=\"col-lg-4\" style=\"display :flex\">
            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"{{ path('app_evenement_index') }}\">Retourner</a>

            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"{{ path('app_exercice_edit', {'id': exercice.id}) }}\">Modifier</a>

            <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"{{ path('app_exercice_delete', {'id': exercice.id}) }}\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ exercice.id) }}\">
                <button style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px;
                background-color: #fd3838; color: white; padding-top: 5px; border-radius: 10px;\"  
                class=\"btn\">Supprimer</button>
            </form>
        </div>
    </div>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ exercice.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ exercice.nom }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ exercice.description }}</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>{{ exercice.duree }}</td>
            </tr>
             <tr>
                <th>Evenement</th>
                <td>{{ exercice.evenement.nom }}</td>
            </tr>

             <tr>
                <th>image</th>
                <td>
                    <img  src=\"{{ asset('Back/img/' ~ exercice.image )  }}\" alt=\"\" width=\"80\" height=\"80\" />
                </td>
            </tr>
        </tbody>
    </table>

  

{% endblock %}
", "exercice/show.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\exercice\\show.html.twig");
    }
}
