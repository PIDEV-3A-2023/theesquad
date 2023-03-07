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
class __TwigTemplate_e9271d2c22eda3b55c7bcae8617b58c1 extends Template
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
        // line 14
        return "coach/dashboardCoach.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/edit.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "exercice/edit.html.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_coach($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        // line 17
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
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "user"]]);
        echo "

                             <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                 ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nom"]]);
        echo " 
                                    
                                    ";
        // line 36
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors'))) {
            // line 37
            echo "                                        <div class=\"alert alert-danger\" >
                                            ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'errors');
            echo "
                                        </div>
                                    ";
        }
        // line 41
        echo "                                </div>

                         
                                 <div class=\"col-sm-6\">
                             ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "duree", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Duree"]]);
        echo "

                                ";
        // line 47
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "duree", [], "any", false, false, false, 47), 'errors'))) {
            // line 48
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "duree", [], "any", false, false, false, 49), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 52
        echo "                                    </div>
                                
                            </div> 
                         


                                <div class=\"form-group\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "   
                                  ";
        // line 60
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'errors'))) {
            // line 61
            echo "                                                    <div class=\"alert alert-danger\" >
                                                    ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'errors');
            echo "
                                                </div>
                                                ";
        }
        // line 65
        echo "                                </div>

                                   <div class=\"form-group\">
                             ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "evenement", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control ", "placeholder" => "Nom Evenement"]]);
        echo " 

                                ";
        // line 70
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "evenement", [], "any", false, false, false, 70), 'errors'))) {
            // line 71
            echo "                                    <div class=\"alert alert-danger\" >
                                    ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "evenement", [], "any", false, false, false, 72), 'errors');
            echo "
                                </div>
                                ";
        }
        // line 75
        echo "                                    </div>
                                

                                   ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "image", [], "any", false, false, false, 78), 'row');
        echo "  

                                    ";
        // line 85
        echo "                                <button class=\"btn btn-primary btn-user btn-block\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 85, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>
                                <hr> 
                               
                            ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo " 
                            <hr>
                            <div class=\"text-center\">
                                    <a href=\"";
        // line 91
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
        return array (  196 => 91,  190 => 88,  183 => 85,  178 => 78,  173 => 75,  167 => 72,  164 => 71,  162 => 70,  157 => 68,  152 => 65,  146 => 62,  143 => 61,  141 => 60,  137 => 59,  128 => 52,  122 => 49,  119 => 48,  117 => 47,  112 => 45,  106 => 41,  100 => 38,  97 => 37,  95 => 36,  90 => 34,  83 => 30,  68 => 17,  58 => 16,  35 => 14,);
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
{% extends 'coach/dashboardCoach.html.twig' %}

{% block coach %}


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

{% endblock %}", "exercice/edit.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\exercice\\edit.html.twig");
    }
}
