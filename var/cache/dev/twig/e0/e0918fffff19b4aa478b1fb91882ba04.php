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

/* client/listCoachsC.html.twig */
class __TwigTemplate_79705395feaa5c149bdcf81805353b1f extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/listCoachsC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/listCoachsC.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "client/listCoachsC.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section id=\"top\">
        <header>
            <div class=\"container\">
                <div class=\"header-top\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"full\">
                                <div class=\"logo\">
                                    <a href=\"\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/logo.png"), "html", null, true);
        echo "\" alt=\"#\" /></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </header>
        <div class=\"inner-page-banner\">
            <div class=\"container\">
            </div>
        </div>
        <div class=\"inner-information-text\">
            <div class=\"container\">
                <h3>Liste des Coachs</h3>
            </div>
        </div>
    </section>
    <section id=\"contant\" class=\"contant main-heading team\">
        <div class=\"row\">
            <div class=\"container\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coaches"]) || array_key_exists("coaches", $context) ? $context["coaches"] : (function () { throw new RuntimeError('Variable "coaches" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coach"]) {
            // line 35
            echo "                    <div class=\"col-md-3 column\">
                        <div class=\"card\">
                            <img class=\"img-responsive\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, $context["coach"], "image", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"\" style=\"width:100%; height: 100%;\">
                            <div class=\"\">
                                <h4>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "nom", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo "</h4>
                                <p class=\"title\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "email", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                                <p class=\"title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coach"], "telephone", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coach'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
        </div>
    </section>
    <footer id=\"footer\" class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <p>Copyright © 2023 Distributed by <a href=\"\" target=\"_blank\">HealthConnect</a></p>
            </div>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/listCoachsC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  127 => 41,  123 => 40,  117 => 39,  112 => 37,  108 => 35,  104 => 34,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}
    <section id=\"top\">
        <header>
            <div class=\"container\">
                <div class=\"header-top\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"full\">
                                <div class=\"logo\">
                                    <a href=\"\"><img src=\"{{ asset('Front/images/logo.png') }}\" alt=\"#\" /></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </header>
        <div class=\"inner-page-banner\">
            <div class=\"container\">
            </div>
        </div>
        <div class=\"inner-information-text\">
            <div class=\"container\">
                <h3>Liste des Coachs</h3>
            </div>
        </div>
    </section>
    <section id=\"contant\" class=\"contant main-heading team\">
        <div class=\"row\">
            <div class=\"container\">
                {% for coach in coaches %}
                    <div class=\"col-md-3 column\">
                        <div class=\"card\">
                            <img class=\"img-responsive\" src=\"{{ asset('Client_img/' ~ coach.image) }}\" alt=\"\" style=\"width:100%; height: 100%;\">
                            <div class=\"\">
                                <h4>{{ coach.nom }} {{ coach.prenom }}</h4>
                                <p class=\"title\">{{ coach.email }}</p>
                                <p class=\"title\">{{ coach.telephone }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    <footer id=\"footer\" class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <p>Copyright © 2023 Distributed by <a href=\"\" target=\"_blank\">HealthConnect</a></p>
            </div>
        </div>
    </footer>
{% endblock %}
", "client/listCoachsC.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\client\\listCoachsC.html.twig");
    }
}
