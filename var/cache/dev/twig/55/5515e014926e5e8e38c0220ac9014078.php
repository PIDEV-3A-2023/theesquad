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

/* evenement/show.html.twig */
class __TwigTemplate_7924f062492306fcd1c398d85ce2f0ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "evenement/show.html.twig", 1);
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
";
        // line 6
        echo "
    <div style=\"display:flex;\">
        <div class=\"col-lg-8\">
            <h1>Evenement</h1>
        </div>
        <div class=\"col-lg-4\" style=\"display :flex\">
            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">back to list</a>

            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">edit</a>

            <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21))), "html", null, true);
        echo "\">
                <button style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px;
                background-color: #fd3838; color: white; padding-top: 5px; border-radius: 10px;\"  
                class=\"btn\">Supprimer</button>
            </form>
        </div>
    </div>


    
    
    <table class=\"table \">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "date", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 52, $this->source); })()), "adresse", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
              <tr>
                <th>Description</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>image</th>
                ";
        // line 62
        echo "                <td>
                <img  src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Back/img/" . twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63))), "html", null, true);
        echo "\" alt=\"\" width=\"80\" height=\"80\" />
                ";
        // line 65
        echo "                </td>
            </tr>
        </tbody>
    </table>
    

    
<h1>Exercices</h1>
    <table class=\"table\">
        <tbody>
           ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 76
            echo "            <tr>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "nom", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </tr>
        </tbody>
    </table>

     <a style=\"justify-content: center; display: inline-flex; width: 150px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_new");
        echo "\">Ajouter Exercice</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 85,  192 => 79,  184 => 77,  181 => 76,  177 => 75,  165 => 65,  161 => 63,  158 => 62,  150 => 56,  143 => 52,  136 => 48,  129 => 44,  122 => 40,  115 => 36,  97 => 21,  93 => 20,  88 => 18,  81 => 14,  71 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coach/dashboardCoach.html.twig' %}

{% block coach %}
 
{# {{ dump(evenement)}} affiche l contenu mtaa l variable fel page bch taaref fama erreur walee #}

    <div style=\"display:flex;\">
        <div class=\"col-lg-8\">
            <h1>Evenement</h1>
        </div>
        <div class=\"col-lg-4\" style=\"display :flex\">
            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"{{ path('app_evenement_index') }}\">back to list</a>

            <a style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\">edit</a>

            <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"{{ path('app_evenement_delete', {'id': evenement.id}) }}\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
                <button style=\"justify-content: center; display: inline-flex; width: 90px!important; height: 35px;
                background-color: #fd3838; color: white; padding-top: 5px; border-radius: 10px;\"  
                class=\"btn\">Supprimer</button>
            </form>
        </div>
    </div>


    
    
    <table class=\"table \">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ evenement.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ evenement.nom }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ evenement.type }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ evenement.adresse }}</td>
            </tr>
              <tr>
                <th>Description</th>
                <td>{{ evenement.description }}</td>
            </tr>

            <tr>
                <th>image</th>
                {# <a href=\"{{ asset('uploads/brochures/' ~ product.brochureFilename) }}\">View brochure (PDF)</a> #}
                <td>
                <img  src=\"{{ asset('Back/img/' ~ evenement.image )  }}\" alt=\"\" width=\"80\" height=\"80\" />
                {# {{ asset('Back/img' ~ evenement.image)  }} #}
                </td>
            </tr>
        </tbody>
    </table>
    

    
<h1>Exercices</h1>
    <table class=\"table\">
        <tbody>
           {% for exercice in exercices %}
            <tr>
                <td>{{ exercice.nom }}</td>
             {% endfor %}
            </tr>
        </tbody>
    </table>

     <a style=\"justify-content: center; display: inline-flex; width: 150px!important; height: 35px; background-color: #4c71de;
                    color: white; padding-top: 5px; border-radius: 10px; margin: 0px 3px 0px 3px;\"
                    href=\"{{ path('app_exercice_new') }}\">Ajouter Exercice</a>
{% endblock %}
", "evenement/show.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\evenement\\show.html.twig");
    }
}
