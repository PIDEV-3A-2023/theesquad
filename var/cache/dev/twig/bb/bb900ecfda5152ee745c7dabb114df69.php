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

/* @KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig */
class __TwigTemplate_80b30bbc43058765ed697301829959df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'karser_recaptcha3_widget' => [$this, 'block_karser_recaptcha3_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig"));

        // line 1
        $this->displayBlock('karser_recaptcha3_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_karser_recaptcha3_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "karser_recaptcha3_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "karser_recaptcha3_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()), "hidden")) : ("hidden"));
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "

        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "enabled", [], "any", false, false, false, 6)) {
            // line 7
            $context["validJsId"] = twig_replace_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), ["-" => "_"]);
            // line 8
            echo "            <script type=\"text/javascript\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 8), "script_nonce_csp", [], "any", true, true, false, 8)) {
                echo "nonce=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "script_nonce_csp", [], "any", false, false, false, 8), "html", null, true);
                echo "\"";
            }
            echo ">
                var recaptchaCallback_";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["validJsId"]) || array_key_exists("validJsId", $context) ? $context["validJsId"] : (function () { throw new RuntimeError('Variable "validJsId" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " = function() {
                    grecaptcha.execute('";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "site_key", [], "any", false, false, false, 10), "html", null, true);
            echo "', {action: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "action_name", [], "any", false, false, false, 10), "html", null, true);
            echo "'}).then(function(token) {
                        document.getElementById('";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "').value = token;
                    });
                    setTimeout(recaptchaCallback_";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["validJsId"]) || array_key_exists("validJsId", $context) ? $context["validJsId"] : (function () { throw new RuntimeError('Variable "validJsId" does not exist.', 13, $this->source); })()), "html", null, true);
            echo ", 100000);
                };
            </script>
            <script type=\"text/javascript\" src=\"https://";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "host", [], "any", false, false, false, 16), "html", null, true);
            echo "/recaptcha/api.js?render=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "site_key", [], "any", false, false, false, 16), "html", null, true);
            echo "&hl=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16), "html", null, true);
            echo "&onload=recaptchaCallback_";
            echo twig_escape_filter($this->env, (isset($context["validJsId"]) || array_key_exists("validJsId", $context) ? $context["validJsId"] : (function () { throw new RuntimeError('Variable "validJsId" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" async defer";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 16), "script_nonce_csp", [], "any", true, true, false, 16)) {
                echo " nonce=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "script_nonce_csp", [], "any", false, false, false, 16), "html", null, true);
                echo "\"";
            }
            echo "></script>";
        }
        // line 18
        echo "    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 2,  123 => 18,  107 => 16,  101 => 13,  96 => 11,  90 => 10,  86 => 9,  77 => 8,  75 => 7,  73 => 6,  68 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block karser_recaptcha3_widget %}
    {% apply spaceless %}
        {%- set type = type|default('hidden') -%}
        {{ block('form_widget_simple') }}

        {% if form.vars.enabled -%}
            {% set validJsId = id | replace({'-':'_'})  %}
            <script type=\"text/javascript\" {% if form.vars.script_nonce_csp is defined %}nonce=\"{{ form.vars.script_nonce_csp }}\"{% endif %}>
                var recaptchaCallback_{{ validJsId }} = function() {
                    grecaptcha.execute('{{ form.vars.site_key }}', {action: '{{ form.vars.action_name }}'}).then(function(token) {
                        document.getElementById('{{ id }}').value = token;
                    });
                    setTimeout(recaptchaCallback_{{ validJsId }}, 100000);
                };
            </script>
            <script type=\"text/javascript\" src=\"https://{{ form.vars.host }}/recaptcha/api.js?render={{ form.vars.site_key }}&hl={{ form.vars.locale }}&onload=recaptchaCallback_{{ validJsId }}\" async defer{% if form.vars.script_nonce_csp is defined %} nonce=\"{{ form.vars.script_nonce_csp }}\"{% endif %}></script>
        {%- endif %}
    {% endapply %}
{% endblock %}
", "@KarserRecaptcha3/Form/karser_recaptcha3_widget.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\vendor\\karser\\karser-recaptcha3-bundle\\Resources\\views\\Form\\karser_recaptcha3_widget.html.twig");
    }
}
