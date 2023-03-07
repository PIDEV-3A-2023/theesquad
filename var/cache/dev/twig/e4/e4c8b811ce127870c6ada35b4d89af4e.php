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

/* registration/register.html.twig */
class __TwigTemplate_6c0895a18d77c55c5b31315137e89972 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
                                    <h1 class=\"h4 text-gray-900 mb-4\">Vous êtes...</h1>
                                </div>
                                <div class=\"user\">

                                    <div class=\"row g-4\">
                                        <!-- Item -->
                                        <div class=\"col-sm-6 col-md-4 col-xl-3\">
                                        </div>

                                        <!-- Item -->
                                        <div class=\"col-sm-6 col-md-4 col-xl-3\">
                                            <div class=\"bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition\">
                                                <!-- Image -->
                                                <div class=\"icon-xl bg-body mx-auto rounded-circle mb-3\">
                                                    <img style=\"width: 200px; height: 200px; object-fit: cover;\" src=\"assets\\img\\Clientimg.svg\" alt=\"\">
                                                </div>
                                                <!-- Title -->
                                                <h5 class=\"mb-1\"><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registerClient");
        echo "\" class=\"stretched-link\">Client</a></h5>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class=\"col-sm-6 col-md-4 col-xl-3\">
                                            <div class=\"bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition\">
                                                <!-- Image -->
                                                <div class=\"icon-xl bg-body mx-auto rounded-circle mb-3\">
                                                    <img style=\"width: 200px; height: 200px; object-fit: cover;\" src=\"assets\\img\\Coachimg.svg\" alt=\"\">
                                                </div>
                                                <!-- Title -->
                                                <h5 class=\"mb-1\"><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registerCoach");
        echo "\" class=\"stretched-link\">Coach</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 59
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
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  139 => 56,  128 => 48,  113 => 36,  82 => 7,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                                    <h1 class=\"h4 text-gray-900 mb-4\">Vous êtes...</h1>
                                </div>
                                <div class=\"user\">

                                    <div class=\"row g-4\">
                                        <!-- Item -->
                                        <div class=\"col-sm-6 col-md-4 col-xl-3\">
                                        </div>

                                        <!-- Item -->
                                        <div class=\"col-sm-6 col-md-4 col-xl-3\">
                                            <div class=\"bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition\">
                                                <!-- Image -->
                                                <div class=\"icon-xl bg-body mx-auto rounded-circle mb-3\">
                                                    <img style=\"width: 200px; height: 200px; object-fit: cover;\" src=\"assets\\img\\Clientimg.svg\" alt=\"\">
                                                </div>
                                                <!-- Title -->
                                                <h5 class=\"mb-1\"><a href=\"{{ path('app_registerClient') }}\" class=\"stretched-link\">Client</a></h5>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class=\"col-sm-6 col-md-4 col-xl-3\">
                                            <div class=\"bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition\">
                                                <!-- Image -->
                                                <div class=\"icon-xl bg-body mx-auto rounded-circle mb-3\">
                                                    <img style=\"width: 200px; height: 200px; object-fit: cover;\" src=\"assets\\img\\Coachimg.svg\" alt=\"\">
                                                </div>
                                                <!-- Title -->
                                                <h5 class=\"mb-1\"><a href=\"{{ path('app_registerCoach') }}\" class=\"stretched-link\">Coach</a></h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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

{% endblock %}
", "registration/register.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\registration\\register.html.twig");
    }
}
