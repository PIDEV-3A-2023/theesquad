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

/* evenement/new.html.twig */
class __TwigTemplate_26de5d51fc3cb9caad46a0fecc36cef7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/new.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "evenement/new.html.twig", 1);
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
        echo "<style>
 #evenement_date_month{
    border: 1px solid #d1d3e2;
    width: 150px;
    border-radius: 5px;
 }

 #evenement_date_day{
    border: 1px solid #d1d3e2;
    width: 150px;
    border-radius: 5px;
 }

 #evenement_date_year{
    border: 1px solid #d1d3e2;
    width: 150px;
    border-radius: 5px;
 }

 #evenement_date{
    border : transparent;
 }

</style>

   <div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Créer un événement!</h1>
                            </div>
                             ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                 ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nom"]]);
        echo " 
                                    
                                    ";
        // line 46
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'errors'))) {
            // line 47
            echo "                                        <div class=\"alert alert-danger\" >
                                            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), 'errors');
            echo "
                                        </div>
                                    ";
        }
        // line 51
        echo "                                </div>

                                <div class=\"col-sm-6\">
                             ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                ";
        // line 56
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), 'errors'))) {
            // line 57
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 61
        echo "                                    </div>
                                
                            </div>
                         


                                <div class=\"form-group\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "adresse", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Adresse"]]);
        echo "   
                                  ";
        // line 69
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "adresse", [], "any", false, false, false, 69), 'errors'))) {
            // line 70
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "adresse", [], "any", false, false, false, 71), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 74
        echo "                                </div>

                                 <div class=\"form-group\">
                             ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "   
                                  ";
        // line 78
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'errors'))) {
            // line 79
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 83
        echo "                                </div>

                                <div class=\"form-group\" style=\"display : flex ;\">
                                <div style=\"margin-top: 6px;\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "date", [], "any", false, false, false, 87), 'label', ["label" => "Date"]);
        echo "
                                </div>
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "date", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                    ";
        // line 90
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "date", [], "any", false, false, false, 90), 'errors'))) {
            // line 91
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "date", [], "any", false, false, false, 92), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 95
        echo "                                </div>

                                 ";
        // line 103
        echo "
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "image", [], "any", false, false, false, 104), 'row');
        echo "

                                <button class=\"btn btn-primary btn-user btn-block\">";
        // line 106
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 106, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

                                ";
        // line 111
        echo "                                <hr>
                               
                            ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_end');
        echo " 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">back to list</a>
                            </div>
                        </div>
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
        return "evenement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 116,  241 => 113,  237 => 111,  232 => 106,  227 => 104,  224 => 103,  220 => 95,  214 => 92,  211 => 91,  209 => 90,  205 => 89,  200 => 87,  194 => 83,  188 => 80,  185 => 79,  183 => 78,  179 => 77,  174 => 74,  168 => 71,  165 => 70,  163 => 69,  159 => 68,  150 => 61,  144 => 58,  141 => 57,  139 => 56,  134 => 54,  129 => 51,  123 => 48,  120 => 47,  118 => 46,  113 => 44,  106 => 40,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coach/dashboardCoach.html.twig' %}

{% block coach %}
<style>
 #evenement_date_month{
    border: 1px solid #d1d3e2;
    width: 150px;
    border-radius: 5px;
 }

 #evenement_date_day{
    border: 1px solid #d1d3e2;
    width: 150px;
    border-radius: 5px;
 }

 #evenement_date_year{
    border: 1px solid #d1d3e2;
    width: 150px;
    border-radius: 5px;
 }

 #evenement_date{
    border : transparent;
 }

</style>

   <div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Créer un événement!</h1>
                            </div>
                             {{form_start(form,{'attr':{'novalidate':'novalidate' , 'class' : 'user' }})}}

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                 {{ form_widget(form.nom,{ 'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'nom' } }) }} 
                                    
                                    {% if form_errors(form.nom) is not empty %}
                                        <div class=\"alert alert-danger\" >
                                            {{ form_errors(form.nom) }}
                                        </div>
                                    {% endif %}
                                </div>

                                <div class=\"col-sm-6\">
                             {{ form_widget(form.type,{ 'attr': {'class': 'form-control'} }) }}

                                {% if form_errors(form.type) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.type) }}
                                </div>
                                {% endif %}
                                    </div>
                                
                            </div>
                         


                                <div class=\"form-group\">
                                {{ form_widget(form.adresse,{ 'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Adresse'} }) }}   
                                  {% if form_errors(form.adresse) is not empty %}
                                                    <div class=\"alert alert-danger\" >
                                                    {{ form_errors(form.adresse) }}
                                                </div>
                                                {% endif %}
                                </div>

                                 <div class=\"form-group\">
                             {{ form_widget(form.description,{ 'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'} }) }}   
                                  {% if form_errors(form.description) is not empty %}
                                                    <div class=\"alert alert-danger\" >
                                                    {{ form_errors(form.description) }}
                                                </div>
                                                {% endif %}
                                </div>

                                <div class=\"form-group\" style=\"display : flex ;\">
                                <div style=\"margin-top: 6px;\">
                                    {{ form_label(form.date,\"Date\") }}
                                </div>
                                    {{ form_widget(form.date,{ 'attr': {'class': 'form-control'} }) }} 
                                    {% if form_errors(form.date) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.date) }}
                                </div>
                                {% endif %}
                                </div>

                                 {# {{ form_row(form.image) }}
                                   {% if form_errors(form.image) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.image) }}
                                </div>
                                {% endif %} #}

                            {{ form_row(form.image) }}

                                <button class=\"btn btn-primary btn-user btn-block\">{{ button_label|default('Save') }}</button>

                                {# <a href=\"login.html\" class=\"btn btn-primary btn-user btn-block\">
                                    Register Account
                                </a> #}
                                <hr>
                               
                            {{ form_end(form) }} 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"{{ path('app_evenement_index') }}\">back to list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}
", "evenement/new.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\evenement\\new.html.twig");
    }
}
