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
class __TwigTemplate_68160353b5397749b025e2d4d2417533 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "evenement/edit.html.twig", 1);
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

        echo "Edit Evenement";
        
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
        // line 32
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
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 47
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'errors'))) {
            // line 48
            echo "                                        <div class=\"alert alert-danger\" >
                                            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'errors');
            echo "
                                        </div>
                                    ";
        }
        // line 52
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                </div>

                                <div class=\"col-sm-6\">
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
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                
                            </div>
                         


                                <div class=\"form-group\">
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
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "adresse", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Adresse"]]);
        echo "   
                                </div>
                                
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "   
                                 <div class=\"form-group\">
                                  ";
        // line 79
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'errors'))) {
            // line 80
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 84
        echo "                                </div>

                                <div class=\"form-group\" style=\"display : flex ;\">
                                <div style=\"margin-top: 6px;\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "date", [], "any", false, false, false, 88), 'label', ["label" => "Date"]);
        echo "
                                </div>
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "date", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                                    ";
        // line 91
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "date", [], "any", false, false, false, 91), 'errors'))) {
            // line 92
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "date", [], "any", false, false, false, 93), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 96
        echo "                                </div>

                                 ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "image", [], "any", false, false, false, 98), 'row');
        echo "

                                <button class=\"btn btn-primary btn-user btn-block\">";
        // line 100
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 100, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>

                                ";
        // line 105
        echo "                                <hr>
                               
                            ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo " 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"";
        // line 110
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
        // line 120
        echo "
    ";
        // line 121
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
        return array (  276 => 121,  273 => 120,  261 => 110,  255 => 107,  251 => 105,  246 => 100,  241 => 98,  237 => 96,  231 => 93,  228 => 92,  226 => 91,  222 => 90,  217 => 88,  211 => 84,  205 => 81,  202 => 80,  200 => 79,  195 => 77,  188 => 74,  182 => 71,  179 => 70,  177 => 69,  165 => 61,  159 => 58,  156 => 57,  154 => 56,  146 => 52,  140 => 49,  137 => 48,  135 => 47,  128 => 43,  115 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %} 

{% block title %}Edit Evenement{% endblock %}

{% block body %}
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
", "evenement/edit.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\evenement\\edit.html.twig");
    }
}
