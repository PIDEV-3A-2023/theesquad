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

/* reset_password/reset.html.twig */
class __TwigTemplate_457a53b1cf07a00b03adbe0e9c36c7c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/reset.html.twig", 1);
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
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 5, $this->source); })()), 'form_start');
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
                                            <h1 class=\"h4 text-gray-900 mb-2\">Forgot Your Password?</h1>
                                            <p class=\"mb-4\">Enter your password.</p>
                                        </div>
                                        <div class=\"user\">
                                            <div class=\"form-group\">
                                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'widget');
        echo "
                                            </div>

                                            <button class=\"btn btn-primary\">Reset password</button>
                                        </div>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Create an Account!</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Already have an account? Login!</a>
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
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  112 => 37,  106 => 34,  96 => 27,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {{ form_start(resetForm) }}
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
                                            <h1 class=\"h4 text-gray-900 mb-2\">Forgot Your Password?</h1>
                                            <p class=\"mb-4\">Enter your password.</p>
                                        </div>
                                        <div class=\"user\">
                                            <div class=\"form-group\">
                                                {{ form_widget(resetForm.plainPassword) }}
                                            </div>

                                            <button class=\"btn btn-primary\">Reset password</button>
                                        </div>
                                        <hr>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"{{ path('app_register') }}\">Create an Account!</a>
                                        </div>
                                        <div class=\"text-center\">
                                            <a class=\"small\" href=\"{{ path('app_login') }}\">Already have an account? Login!</a>
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
    {{ form_end(resetForm) }}
{% endblock %}

", "reset_password/reset.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\reset_password\\reset.html.twig");
    }
}
