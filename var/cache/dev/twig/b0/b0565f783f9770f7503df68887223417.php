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

/* admin/infoCoach.html.twig */
class __TwigTemplate_85820a494934b0359afc2c85d3b37ef7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'admin' => [$this, 'block_admin'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/dashboardAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/infoCoach.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/infoCoach.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboardAdmin.html.twig", "admin/infoCoach.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

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
                                    Coach profil
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), "html", null, true);
        echo "</span>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLastName\">Prénom: </label>
                                            <span>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Numéro de téléphone: </label>
                                            <span>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 58, $this->source); })()), "telephone", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Date de naissance: </label>
                                            <span>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 63, $this->source); })()), "dateNaissance", [], "any", false, false, false, 63), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class=\"mb-3\">
                                        <label class=\"small mb-1\" for=\"inputEmailAddress\">Adresse e-mail: </label>
                                        <span>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-12\">
                        <!-- Profile picture card-->
                        <div class=\"card mb-4 mb-xl-0\">
                            <div class=\"card-header\">Diplôme</div>
                            <div class=\"card-body text-center\">
                                <!-- Profile picture image-->
                                <img class=\"img-account-profile mb-2\"  src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("diplome_img/" . twig_get_attribute($this->env, $this->source, (isset($context["coach"]) || array_key_exists("coach", $context) ? $context["coach"] : (function () { throw new RuntimeError('Variable "coach" does not exist.', 82, $this->source); })()), "diplome", [], "any", false, false, false, 82))), "html", null, true);
        echo "\" alt=\"\" />
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
        return "admin/infoCoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 82,  150 => 69,  141 => 63,  133 => 58,  122 => 50,  114 => 45,  95 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/dashboardAdmin.html.twig' %}

{% block admin %}
    <div id=\"layoutSidenav_content\">
        <main>
            <header class=\"page-header page-header-compact page-header-light border-bottom bg-white mb-4\">
                <div class=\"container-xl px-4\">
                    <div class=\"page-header-content\">
                        <div class=\"row align-items-center justify-content-between pt-3\">
                            <div class=\"col-auto mb-3\">
                                <h3 class=\"page-header-title\">
                                    <div class=\"page-header-icon\"><i data-feather=\"user\"></i></div>
                                    Coach profil
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
                                <img class=\"img-account-profile rounded-circle mb-2\" style=\"width: 100px; height: 100px; object-fit: cover;\" src=\"{{ asset('Client_img/' ~ coach.image) }}\" alt=\"\" />

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
                                            <span>{{ coach.nom }}</span>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputLastName\">Prénom: </label>
                                            <span>{{ coach.prenom }}</span>
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class=\"row gx-3 mb-3\">
                                        <!-- Form Group (phone number)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputPhone\">Numéro de téléphone: </label>
                                            <span>{{ coach.telephone }}</span>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class=\"col-md-6\">
                                            <label class=\"small mb-1\" for=\"inputBirthday\">Date de naissance: </label>
                                            <span>{{ coach.dateNaissance }}</span>
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class=\"mb-3\">
                                        <label class=\"small mb-1\" for=\"inputEmailAddress\">Adresse e-mail: </label>
                                        <span>{{ coach.email }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-12\">
                        <!-- Profile picture card-->
                        <div class=\"card mb-4 mb-xl-0\">
                            <div class=\"card-header\">Diplôme</div>
                            <div class=\"card-body text-center\">
                                <!-- Profile picture image-->
                                <img class=\"img-account-profile mb-2\"  src=\"{{ asset('diplome_img/' ~ coach.diplome) }}\" alt=\"\" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
{% endblock %}

", "admin/infoCoach.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\admin\\infoCoach.html.twig");
    }
}
