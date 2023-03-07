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

/* client/edit.html.twig */
class __TwigTemplate_82b5a1ba8e8b7e6d47095d1fb45e0d07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent = $this->loadTemplate("client/dashboardClient.html.twig", "client/edit.html.twig", 1);
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
                                    Modifier mon profil
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class=\"container-xl px-4 mt-4\">
                <div class=\"row\">
                    <div class=\"col-xl-4\">
                        <!-- Profile picture card-->
                        <div class=\"card mb-4 mb-xl-0\">
                            <div class=\"card-header\">Photo de profil</div>
                            <div class=\"card-body text-center\">
                                <!-- Profile picture image-->
                                <img class=\"img-account-profile rounded-circle mb-2\" style=\"width: 100px; height: 100px; object-fit: cover;\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30))), "html", null, true);
        echo "\" alt=\"\" />
                                <!-- Profile picture help block-->
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"small font-italic text-muted mb-4\">JPG or PNG</div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-8\">
                        <!-- Account details card-->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">Information Profil</div>
                            <div class=\"card-body\">
                                <div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (first name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputFirstName\">Nom</label>
                                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nom", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nom", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLastName\">Prénom</label>
                                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prenom", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (organization name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputOrgName\">Adresse</label>
                                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "adresse", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLocation\">Ville</label>
                                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "ville", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class=\"mb-3\">
                                        <label class=\"small mb-1\" for=\"inputEmailAddress\">Adresse e-mail</label>
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Numéro de téléphone</label>
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "telephone", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "telephone", [], "any", false, false, false, 85), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Date de naissance</label>
                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "dateNaissance", [], "any", false, false, false, 90), 'widget');
        echo "
                                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "dateNaissance", [], "any", false, false, false, 91), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Taille (cm)</label>
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "taille", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "taille", [], "any", false, false, false, 100), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Poids (kg)</label>
                                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "poids", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "poids", [], "any", false, false, false, 106), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 118,  229 => 106,  225 => 105,  217 => 100,  213 => 99,  202 => 91,  198 => 90,  190 => 85,  186 => 84,  176 => 77,  172 => 76,  163 => 70,  155 => 65,  151 => 64,  140 => 56,  136 => 55,  128 => 50,  124 => 49,  104 => 32,  99 => 30,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                                    Modifier mon profil
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class=\"container-xl px-4 mt-4\">
                <div class=\"row\">
                    <div class=\"col-xl-4\">
                        <!-- Profile picture card-->
                        <div class=\"card mb-4 mb-xl-0\">
                            <div class=\"card-header\">Photo de profil</div>
                            <div class=\"card-body text-center\">
                                <!-- Profile picture image-->
                                <img class=\"img-account-profile rounded-circle mb-2\" style=\"width: 100px; height: 100px; object-fit: cover;\" src=\"{{ asset('Client_img/' ~ app.user.image) }}\" alt=\"\" />
                                <!-- Profile picture help block-->
                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                                <div class=\"small font-italic text-muted mb-4\">JPG or PNG</div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-8\">
                        <!-- Account details card-->
                        <div class=\"card mb-4\">
                            <div class=\"card-header\">Information Profil</div>
                            <div class=\"card-body\">
                                <div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (first name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputFirstName\">Nom</label>
                                            {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.nom,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLastName\">Prénom</label>
                                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.prenom,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (organization name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputOrgName\">Adresse</label>
                                            {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.adresse,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLocation\">Ville</label>
                                            {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class=\"mb-3\">
                                        <label class=\"small mb-1\" for=\"inputEmailAddress\">Adresse e-mail</label>
                                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                        {{ form_errors(form.email,{'attr':{'class':'text-danger'}}) }}
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Numéro de téléphone</label>
                                            {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.telephone,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Date de naissance</label>
                                            {{ form_widget(form.dateNaissance) }}
                                            {{ form_errors(form.dateNaissance,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Taille (cm)</label>
                                            {{ form_widget(form.taille, {'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.taille,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Poids (kg)</label>
                                            {{ form_widget(form.poids, {'attr': {'class': 'form-control'}}) }}
                                            {{ form_errors(form.poids,{'attr':{'class':'text-danger'}}) }}
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{ form_end(form) }}
    </div>


{% endblock %}
", "client/edit.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\client\\edit.html.twig");
    }
}
