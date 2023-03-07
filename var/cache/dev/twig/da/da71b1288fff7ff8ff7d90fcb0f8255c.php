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

/* security/login.html.twig */
class __TwigTemplate_6615bd9e208b4f215e6dce595ee57900 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo "
    <script src=\"https://www.google.com/recaptcha/api.js?render=6Le3r7skAAAAAOEuT2bWAY6BQKXLT4_S2k84EZa8\"></script>

    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6Le3r7skAAAAAOEuT2bWAY6BQKXLT4_S2k84EZa8', {action: 'submit'}).then(function(token) {
                    // Add your logic to submit to your backend server here.
                });
            });
        }
    </script>

    <div class=\"bg-gradient-primary\">
        <div class=\"container\">

            <!-- Outer Row -->
            <div class=\"row justify-content-center\">

                <div class=\"col-xl-5 col-lg-12 col-md-9\">

                    <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\"card-body p-0\">
                            <!-- Nested Row within Card Body -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 d-none d-lg-block\"></div>
                                <div class=\"col-lg-12\">
                                    <div class=\"p-5\">
                                        <div class=\"text-center\">
                                            <h1 class=\"h4 text-gray-900 mb-4\">Bienvenue !</h1>
                                        </div>
                                        <form class=\"user\" method=\"post\">

                                            ";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageData", [], "any", false, false, false, 39), "security"), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 41
        echo "
                                            ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                                <div class=\"mb-3\">
                                                    You are logged in as ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "userIdentifier", [], "any", false, false, false, 44), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                                </div>
                                            ";
        }
        // line 47
        echo "
                                            <div class=\"form-group\">
                                                <input type=\"email\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Entrer l'adresse e-mail...\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-user\" autocomplete=\"email\" required autofocus>
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" class=\"form-control form-control-user\" autocomplete=\"current-password\" required>
                                            </div>

                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                                            <div class=\"flex justify-between items-center mb-6\">
                                                <div class=\"form-group form-check\">
                                                    <input type=\"checkbox\" class=\"form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer\" name=\"_remember_me\"/>
                                                    <label class=\"form-check-label inline-block text-gray-800\">Se rappeler de moi</label>
                                                </div>
                                            </div>


                                                ";
        // line 76
        echo "
                                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                                S'identifier
                                            </button>

                                        </form>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Mot de passe oublié?</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer un compte!</a>
                                        </div>
                                    </div>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 87,  165 => 84,  155 => 76,  142 => 56,  132 => 49,  128 => 47,  120 => 44,  117 => 43,  115 => 42,  112 => 41,  106 => 39,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <script src=\"https://www.google.com/recaptcha/api.js?render=6Le3r7skAAAAAOEuT2bWAY6BQKXLT4_S2k84EZa8\"></script>

    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6Le3r7skAAAAAOEuT2bWAY6BQKXLT4_S2k84EZa8', {action: 'submit'}).then(function(token) {
                    // Add your logic to submit to your backend server here.
                });
            });
        }
    </script>

    <div class=\"bg-gradient-primary\">
        <div class=\"container\">

            <!-- Outer Row -->
            <div class=\"row justify-content-center\">

                <div class=\"col-xl-5 col-lg-12 col-md-9\">

                    <div class=\"card o-hidden border-0 shadow-lg my-5\">
                        <div class=\"card-body p-0\">
                            <!-- Nested Row within Card Body -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 d-none d-lg-block\"></div>
                                <div class=\"col-lg-12\">
                                    <div class=\"p-5\">
                                        <div class=\"text-center\">
                                            <h1 class=\"h4 text-gray-900 mb-4\">Bienvenue !</h1>
                                        </div>
                                        <form class=\"user\" method=\"post\">

                                            {% if error %}
                                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                            {% endif %}

                                            {% if app.user %}
                                                <div class=\"mb-3\">
                                                    You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                                </div>
                                            {% endif %}

                                            <div class=\"form-group\">
                                                <input type=\"email\" value=\"{{ last_username }}\" placeholder=\"Entrer l'adresse e-mail...\" name=\"email\" id=\"inputEmail\" class=\"form-control form-control-user\" autocomplete=\"email\" required autofocus>
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"Password\" class=\"form-control form-control-user\" autocomplete=\"current-password\" required>
                                            </div>

                                            <input type=\"hidden\" name=\"_csrf_token\"
                                                   value=\"{{ csrf_token('authenticate') }}\">

                                            <div class=\"flex justify-between items-center mb-6\">
                                                <div class=\"form-group form-check\">
                                                    <input type=\"checkbox\" class=\"form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer\" name=\"_remember_me\"/>
                                                    <label class=\"form-check-label inline-block text-gray-800\">Se rappeler de moi</label>
                                                </div>
                                            </div>


                                                {#
                                            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                                            See https://symfony.com/doc/current/security/remember_me.html

                                            <div class=\"checkbox mb-3\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                                </label>
                                            </div>
                                            #}

                                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                                S'identifier
                                            </button>

                                        </form>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"{{ path('app_forgot_password_request') }}\">Mot de passe oublié?</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"{{ path('app_register') }}\">Créer un compte!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

{% endblock %}
", "security/login.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\security\\login.html.twig");
    }
}
