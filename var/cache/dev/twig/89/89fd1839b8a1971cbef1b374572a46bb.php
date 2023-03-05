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
class __TwigTemplate_0c943f7afe919ecfe473e04382d122b7 extends Template
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
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "exercice/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Exercice";
        
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
        echo "  
        <div style=\"display:flex;\">
        <div class=\"col-lg-8\">
            <h1>Exercice</h1>
        </div>
        <div class=\"col-lg-4\" style=\"display :flex\">
            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">Retourner</a>

            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Modifier</a>

            <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21))), "html", null, true);
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
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duree</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 45, $this->source); })()), "duree", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Evenement</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 49, $this->source); })()), "evenement", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
            </tr>

             <tr>
                <th>image</th>
                <td>
                <img  src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Back/img/" . twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 55, $this->source); })()), "image", [], "any", false, false, false, 55))), "html", null, true);
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
        return array (  166 => 55,  157 => 49,  150 => 45,  143 => 41,  136 => 37,  129 => 33,  114 => 21,  110 => 20,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Exercice{% endblock %}

{% block body %}
  
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
", "exercice/show.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\exercice\\show.html.twig");
    }
}
