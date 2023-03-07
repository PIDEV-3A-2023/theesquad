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

/* client/editpassword.html.twig */
class __TwigTemplate_31d76d5370f98e79fdf54fef4d99df11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'client' => [$this, 'block_client'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "client/dashboardClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/editpassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/editpassword.html.twig"));

        $this->parent = $this->loadTemplate("client/dashboardClient.html.twig", "client/editpassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        // line 4
        echo "    <div id=\"layoutSidenav_content\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        <main>
            <header class=\"page-header page-header-compact page-header-light border-bottom bg-white mb-4\">
                <div class=\"container-xl px-4\">
                    <div class=\"page-header-content\">
                        <div class=\"row align-items-center justify-content-between pt-3\">
                            <div class=\"col-auto mb-3\">
                                <h3 class=\"page-header-title\">
                                    <div class=\"page-header-icon\"><i data-feather=\"user\"></i></div>
                                    Modifier mon mot de passe
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class=\"container-xl px-4 mt-4\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <!-- Change password card-->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">Modifier mot de passe</div>
                            <div class=\"card-body\">
                                <!-- Form Group (current password)-->
                                <div class=\"mb-3\">
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "plainPassword", [], "any", false, false, false, 31), 'widget');
        echo "
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </main>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/editpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  104 => 32,  100 => 31,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client/dashboardClient.html.twig' %}

{% block client %}
    <div id=\"layoutSidenav_content\">
        {{ form_start(form,{'attr':{'novalidate':'novalidate'}} ) }}
        <main>
            <header class=\"page-header page-header-compact page-header-light border-bottom bg-white mb-4\">
                <div class=\"container-xl px-4\">
                    <div class=\"page-header-content\">
                        <div class=\"row align-items-center justify-content-between pt-3\">
                            <div class=\"col-auto mb-3\">
                                <h3 class=\"page-header-title\">
                                    <div class=\"page-header-icon\"><i data-feather=\"user\"></i></div>
                                    Modifier mon mot de passe
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class=\"container-xl px-4 mt-4\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <!-- Change password card-->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">Modifier mot de passe</div>
                            <div class=\"card-body\">
                                <!-- Form Group (current password)-->
                                <div class=\"mb-3\">
                                    {{ form_widget(form.plainPassword) }}
                                    {{ form_errors(form.plainPassword,{'attr':{'class':'text-danger'}}) }}
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </main>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "client/editpassword.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\client\\editpassword.html.twig");
    }
}
