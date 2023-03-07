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

/* reset_password/request.html.twig */
class __TwigTemplate_b13146f0b1f59966cb0c1cb4d4fb711d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 6
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
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
                                            <h1 class=\"h4 text-gray-900 mb-2\">Mot de passe oublié?</h1>
                                            <p class=\"mb-4\">Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>
                                        </div>
                                        <div class=\"user\">
                                            <div class=\"form-group\">
                                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-control-user"]]);
        echo "
                                            </div>

                                            <button class=\"btn btn-primary btn-user btn-block\">Envoyer un e-mail de réinitialisation du mot de passe</button>
                                        </div>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer un compte!</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 41
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

        </div>
    </div>
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  126 => 41,  120 => 38,  110 => 31,  85 => 9,  82 => 8,  73 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    {% for flash_error in app.flashes('reset_password_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    {{ form_start(requestForm) }}
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
                                            <h1 class=\"h4 text-gray-900 mb-2\">Mot de passe oublié?</h1>
                                            <p class=\"mb-4\">Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>
                                        </div>
                                        <div class=\"user\">
                                            <div class=\"form-group\">
                                                {{ form_widget(requestForm.email,{'attr':{'class':'form-control form-control-user'}}) }}
                                            </div>

                                            <button class=\"btn btn-primary btn-user btn-block\">Envoyer un e-mail de réinitialisation du mot de passe</button>
                                        </div>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"{{ path('app_register') }}\">Créer un compte!</a>
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

        </div>
    </div>
    {{ form_end(requestForm) }}
{% endblock %}
", "reset_password/request.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\reset_password\\request.html.twig");
    }
}
