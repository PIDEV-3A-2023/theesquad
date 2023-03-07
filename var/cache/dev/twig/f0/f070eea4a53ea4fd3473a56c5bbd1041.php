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

/* evenement/edit.html.twig */
class __TwigTemplate_5ce10ce583ff8b9a7833697f01325a29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "evenement/edit.html.twig", 1);
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

    ";
        // line 30
        echo "<div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Modifier un événement</h1>
                            </div>
                             ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 45
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'errors'))) {
            // line 46
            echo "                                        <div class=\"alert alert-danger\" >
                                            ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'errors');
            echo "
                                        </div>
                                    ";
        }
        // line 50
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                </div>

                                <div class=\"col-sm-6\">
                                ";
        // line 54
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'errors'))) {
            // line 55
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 59
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                
                            </div>
                         


                                <div class=\"form-group\">
                                  ";
        // line 67
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "adresse", [], "any", false, false, false, 67), 'errors'))) {
            // line 68
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "adresse", [], "any", false, false, false, 69), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 72
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "adresse", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Adresse"]]);
        echo "   
                                </div>
                                
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "description", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "   
                                 <div class=\"form-group\">
                                  ";
        // line 77
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'errors'))) {
            // line 78
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 82
        echo "                                </div>

                                <div class=\"form-group\" style=\"display : flex ;\">
                                <div style=\"margin-top: 6px;\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "date", [], "any", false, false, false, 86), 'label', ["label" => "Date"]);
        echo "
                                </div>
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "date", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                    ";
        // line 89
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "date", [], "any", false, false, false, 89), 'errors'))) {
            // line 90
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "date", [], "any", false, false, false, 91), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 94
        echo "                                </div>

                                 ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96), 'row');
        echo "

                                <button class=\"btn btn-primary btn-user btn-block\">";
        // line 98
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 98, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>

                                ";
        // line 103
        echo "                                <hr>
                               
                            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo " 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"";
        // line 108
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
        // line 118
        echo "
    ";
        // line 119
        echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 119,  253 => 118,  241 => 108,  235 => 105,  231 => 103,  226 => 98,  221 => 96,  217 => 94,  211 => 91,  208 => 90,  206 => 89,  202 => 88,  197 => 86,  191 => 82,  185 => 79,  182 => 78,  180 => 77,  175 => 75,  168 => 72,  162 => 69,  159 => 68,  157 => 67,  145 => 59,  139 => 56,  136 => 55,  134 => 54,  126 => 50,  120 => 47,  117 => 46,  115 => 45,  108 => 41,  95 => 30,  68 => 4,  58 => 3,  35 => 1,);
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

    {# {{ include('evenement/new.html.twig', {'button_label': 'Update'}) }} #}
<div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Modifier un événement</h1>
                            </div>
                             {{form_start(form,{'attr':{'novalidate':'novalidate' , 'class' : 'user' }})}}

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {% if form_errors(form.nom) is not empty %}
                                        <div class=\"alert alert-danger\" >
                                            {{ form_errors(form.nom) }}
                                        </div>
                                    {% endif %}
                                    {{ form_widget(form.nom,{ 'attr': {'class': 'form-control form-control-user'  } }) }}
                                </div>

                                <div class=\"col-sm-6\">
                                {% if form_errors(form.type) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.type) }}
                                </div>
                                {% endif %}
                                        {{ form_widget(form.type,{ 'attr': {'class': 'form-control'} }) }}
                                    </div>
                                
                            </div>
                         


                                <div class=\"form-group\">
                                  {% if form_errors(form.adresse) is not empty %}
                                                    <div class=\"alert alert-danger\" >
                                                    {{ form_errors(form.adresse) }}
                                                </div>
                                                {% endif %}
                                {{ form_widget(form.adresse,{ 'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Adresse'} }) }}   
                                </div>
                                
                                {{ form_widget(form.description,{ 'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'} }) }}   
                                 <div class=\"form-group\">
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

                                 {{ form_row(form.image) }}

                                <button class=\"btn btn-primary btn-user btn-block\">{{ button_label|default('Update') }}</button>

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
    {# <a href=\"{{ path('app_evenement_index') }}\">back to list</a> #}

    {{ include('evenement/_delete_form.html.twig') }}
{% endblock %}
", "evenement/edit.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\evenement\\edit.html.twig");
    }
}
