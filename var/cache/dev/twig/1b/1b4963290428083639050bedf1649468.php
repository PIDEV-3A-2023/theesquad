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

/* exercice/edit.html.twig */
class __TwigTemplate_e5fbff7ce7bb557e5c9feb3007da471b extends Template
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
        // line 14
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "exercice/edit.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier Exercice";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "

   <div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Modifier un exercice!</h1>
                            </div>
                             ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                 ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nom"]]);
        echo " 
                                    
                                    ";
        // line 37
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'errors'))) {
            // line 38
            echo "                                        <div class=\"alert alert-danger\" >
                                            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors');
            echo "
                                        </div>
                                    ";
        }
        // line 42
        echo "                                </div>

                         
                                 <div class=\"col-sm-6\">
                             ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "duree", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Duree"]]);
        echo "

                                ";
        // line 48
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "duree", [], "any", false, false, false, 48), 'errors'))) {
            // line 49
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "duree", [], "any", false, false, false, 50), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 53
        echo "                                    </div>
                                
                            </div> 
                         


                                <div class=\"form-group\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "   
                                  ";
        // line 61
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), 'errors'))) {
            // line 62
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 66
        echo "                                </div>

                                   <div class=\"form-group\">
                             ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "evenement", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "Nom Evenement"]]);
        echo " 

                                ";
        // line 71
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "evenement", [], "any", false, false, false, 71), 'errors'))) {
            // line 72
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "evenement", [], "any", false, false, false, 73), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 76
        echo "                                    </div>
                                

                                   ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "image", [], "any", false, false, false, 79), 'row');
        echo "  

                                    ";
        // line 86
        echo "                                <button class=\"btn btn-primary btn-user btn-block\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 86, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>
                                <hr> 
                               
                            ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo " 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_index");
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
        return "exercice/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 92,  210 => 89,  203 => 86,  198 => 79,  193 => 76,  187 => 73,  184 => 72,  182 => 71,  177 => 69,  172 => 66,  166 => 63,  163 => 62,  161 => 61,  157 => 60,  148 => 53,  142 => 50,  139 => 49,  137 => 48,  132 => 46,  126 => 42,  120 => 39,  117 => 38,  115 => 37,  110 => 35,  103 => 31,  88 => 18,  78 => 17,  59 => 15,  36 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{# <!DOCTYPE html>

<title>Edit Exercice</title>

{% block body %}
    <h1>Edit Exercice</h1>

    {{ include('exercice/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path('app_exercice_index') }}\">back to list</a>

    {{ include('exercice/_delete_form.html.twig') }}
{% endblock %} #}
{% extends 'baseBack.html.twig' %}
{% block title %}Modifier Exercice{% endblock %}

{% block body %}


   <div class=\"container\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
            <div class=\"card-body p-0\">
                <!-- Nested Row within Card Body -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">Modifier un exercice!</h1>
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
                             {{ form_widget(form.duree,{ 'attr': {'class': 'form-control form-control-user','placeholder' : 'Duree'} }) }}

                                {% if form_errors(form.duree) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.duree) }}
                                </div>
                                {% endif %}
                                    </div>
                                
                            </div> 
                         


                                <div class=\"form-group\">
                                {{ form_widget(form.description,{ 'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'} }) }}   
                                  {% if form_errors(form.description) is not empty %}
                                                    <div class=\"alert alert-danger\" >
                                                    {{ form_errors(form.description) }}
                                                </div>
                                                {% endif %}
                                </div>

                                   <div class=\"form-group\">
                             {{ form_widget(form.evenement,{ 'attr': {'class': 'form-control ', 'placeholder' : 'Nom Evenement' } })}} 

                                {% if form_errors(form.evenement) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.evenement) }}
                                </div>
                                {% endif %}
                                    </div>
                                

                                   {{ form_row(form.image) }}  

                                    {# {% if form_errors(form.image) is not empty %}
                                    <div class=\"alert alert-danger\" >
                                    {{ form_errors(form.evenement) }}
                                    </div>
                                     {% endif %} #}
                                <button class=\"btn btn-primary btn-user btn-block\">{{ button_label|default('Update') }}</button>
                                <hr> 
                               
                            {{ form_end(form) }} 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"{{ path('app_exercice_index') }}\">back to list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "exercice/edit.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\exercice\\edit.html.twig");
    }
}
