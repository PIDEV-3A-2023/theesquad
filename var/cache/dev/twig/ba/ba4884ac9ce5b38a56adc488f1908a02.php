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

/* registration/registerClient.html.twig */
class __TwigTemplate_7d38a9d78b09720f3db921bddc4f528f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registerClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registerClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/registerClient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 5
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "


    <div class=\"bg-gradient-primary\">
        <div class=\"container\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-5 d-none d-lg-block\"></div>
                        <div class=\"col-lg-12\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Créez un compte Client !</h1>
                                </div>
                                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"user\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                            <label>Nom</label>
                                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>Prénom</label>
                                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                            <label>Genre</label>
                                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "genre", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "genre", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>Date de naissance</label>
                                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "dateNaissance", [], "any", false, false, false, 46), 'widget');
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label>E-mail</label>
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Mot de passe</label>
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "plainPassword", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                    </div>

                                    <div class=\"form-group\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "agreeTerms", [], "any", false, false, false, 64), 'widget');
        echo "
                                        <label>Accepter les termes et conditions</label>
                                    </div>

                                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">S'inscrire</button>

                                </div>
                                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Vous avez déjà un compte? Connexion!</a>
                                </div>
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
        return "registration/registerClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 77,  193 => 74,  187 => 71,  177 => 64,  169 => 59,  165 => 58,  157 => 53,  153 => 52,  144 => 46,  137 => 42,  133 => 41,  123 => 34,  119 => 33,  112 => 29,  108 => 28,  100 => 23,  82 => 7,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}



    <div class=\"bg-gradient-primary\">
        <div class=\"container\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div class=\"col-lg-5 d-none d-lg-block\"></div>
                        <div class=\"col-lg-12\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Créez un compte Client !</h1>
                                </div>
                                {{ form_start(registrationForm,{'attr':{'novalidate':'novalidate'}} ) }}
                                <div class=\"user\">
                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                            <label>Nom</label>
                                            {{ form_widget(registrationForm.nom,{'attr':{'class':'form-control form-control-user'}}) }}
                                            {{ form_errors(registrationForm.nom,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>Prénom</label>
                                            {{ form_widget(registrationForm.prenom,{'attr':{'class':'form-control form-control-user'}}) }}
                                            {{ form_errors(registrationForm.prenom,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                    </div>

                                    <div class=\"form-group row\">
                                        <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                            <label>Genre</label>
                                            {{ form_widget(registrationForm.genre,{'attr':{'class':'form-control form-control-user'}}) }}
                                            {{ form_errors(registrationForm.genre,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <label>Date de naissance</label>
                                            {{ form_widget(registrationForm.dateNaissance) }}
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label>E-mail</label>
                                        {{ form_widget(registrationForm.email,{'attr':{'class':'form-control form-control-user'}}) }}
                                        {{ form_errors(registrationForm.email,{'attr':{'class':'text-danger'}}) }}
                                    </div>

                                    <div class=\"form-group\">
                                        <label>Mot de passe</label>
                                        {{ form_widget(registrationForm.plainPassword ,{'attr':{'class':'form-control form-control-user'}}) }}
                                        {{ form_errors(registrationForm.plainPassword,{'attr':{'class':'text-danger'}}) }}

                                    </div>

                                    <div class=\"form-group\">
                                        {{ form_widget(registrationForm.agreeTerms) }}
                                        <label>Accepter les termes et conditions</label>
                                    </div>

                                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">S'inscrire</button>

                                </div>
                                {{ form_end(registrationForm) }}
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"{{ path('app_login') }}\">Vous avez déjà un compte? Connexion!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "registration/registerClient.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\registration\\registerClient.html.twig");
    }
}
