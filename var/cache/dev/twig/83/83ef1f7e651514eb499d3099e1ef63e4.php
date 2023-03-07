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

/* client/show.html.twig */
class __TwigTemplate_7a4b80058819a1befc6f549edd6bfbc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent = $this->loadTemplate("client/dashboardClient.html.twig", "client/show.html.twig", 1);
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
        <main>
            <header class=\"page-header page-header-compact page-header-light border-bottom bg-white mb-4\">
                <div class=\"container-xl px-4\">
                    <div class=\"page-header-content\">
                        <div class=\"row align-items-center justify-content-between pt-3\">
                            <div class=\"col-auto mb-3\">
                                <h3 class=\"page-header-title\">
                                    <div class=\"page-header-icon\"><i data-feather=\"user\"></i></div>
                                    Mon profil
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
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "image", [], "any", false, false, false, 29))), "html", null, true);
        echo "\" alt=\"\" />

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
                                            <label class=\"small mb-1\" for=\"inputFirstName\">Nom: </label>
                                            <span>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLastName\">Prénom: </label>
                                            <span>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (organization name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputOrgName\">Adresse: </label>
                                            <span>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "adresse", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLocation\">Ville: </label>
                                            <span>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "ville", [], "any", false, false, false, 63), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class=\"mb-3\">
                                        <label class=\"small mb-1\" for=\"inputEmailAddress\">Adresse e-mail: </label>
                                        <span>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "email", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Numéro de téléphone: </label>
                                            <span>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "telephone", [], "any", false, false, false, 76), "html", null, true);
        echo "</span>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Date de naissance: </label>
                                            <span>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "dateNaissance", [], "any", false, false, false, 81), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Taille (cm): </label>
                                            <span>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "taille", [], "any", false, false, false, 89), "html", null, true);
        echo "</span>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Poids (kg): </label>
                                            <span>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "poids", [], "any", false, false, false, 94), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 94,  179 => 89,  168 => 81,  160 => 76,  150 => 69,  141 => 63,  133 => 58,  122 => 50,  114 => 45,  95 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client/dashboardClient.html.twig' %}

{% block client %}
    <div id=\"layoutSidenav_content\">
        <main>
            <header class=\"page-header page-header-compact page-header-light border-bottom bg-white mb-4\">
                <div class=\"container-xl px-4\">
                    <div class=\"page-header-content\">
                        <div class=\"row align-items-center justify-content-between pt-3\">
                            <div class=\"col-auto mb-3\">
                                <h3 class=\"page-header-title\">
                                    <div class=\"page-header-icon\"><i data-feather=\"user\"></i></div>
                                    Mon profil
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
                                            <label class=\"small mb-1\" for=\"inputFirstName\">Nom: </label>
                                            <span>{{ app.user.nom }}</span>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLastName\">Prénom: </label>
                                            <span>{{ app.user.prenom }}</span>
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (organization name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputOrgName\">Adresse: </label>
                                            <span>{{ app.user.adresse }}</span>
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLocation\">Ville: </label>
                                            <span>{{ app.user.ville }}</span>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class=\"mb-3\">
                                        <label class=\"small mb-1\" for=\"inputEmailAddress\">Adresse e-mail: </label>
                                        <span>{{ app.user.email }}</span>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Numéro de téléphone: </label>
                                            <span>{{ app.user.telephone }}</span>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Date de naissance: </label>
                                            <span>{{ app.user.dateNaissance }}</span>
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Taille (cm): </label>
                                            <span>{{ app.user.taille }}</span>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Poids (kg): </label>
                                            <span>{{ app.user.poids }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
{% endblock %}

", "client/show.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\client\\show.html.twig");
    }
}
