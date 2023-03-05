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

/* evenement/index.html.twig */
class __TwigTemplate_82be62418b2548526ee5151e248be517 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script>
    //Le script utilise la bibliothèque jQuery, qui doit être incluse sur la page pour que ce code fonctionne.
        \$(document).ready(function () {
            // ajoute un gestionnaire d'événements sur l'élément HTML input avec l'attribut name \"search\". 
           // Ce gestionnaire est déclenché à chaque fois que l'utilisateur saisit une valeur dans l'input.

            \$('input[name=\"search\"]').on('input', function () {

            //Le code trouve ensuite le formulaire parent de l'élément input en utilisant la méthode \"closest\"
            //puis le soumet en appelant la méthode \"submit\".

                \$(this).closest('form').submit();

         ///En conséquence, lorsque l'utilisateur tape quelque chose dans l'input, le formulaire est soumis automatiquement
         /// , ce qui déclenche la recherche en utilisant la valeur de l'input.
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo " <!-- Topbar Search -->
                 <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_recherche");
        echo "\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon adresse...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                ";
        // line 36
        echo "                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div> 
                        </div>
                       
                    </form>
                    <div class=\"col-lg-4\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier");
        echo "\">Calendrier</a>
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf");
        echo "\">pdf</a>
                            </div>
                    </nav>
                                
                    </nav>
 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target=\"_blank\"
                                    href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\">Nouvel événement</a>
                            </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Evenements disponibles</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Adresse</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                     
                                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 93
            echo "                                            <tr>
                                                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                                                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                                                <td>";
            // line 97
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 97)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 97), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "adresse", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                                                <td style=\"display: flex;\" >
                                                    <a style=\"justify-content: center;
    display: inline-flex;
    width: 90px!important;
    height: 35px;
    background-color: #4c71de;
    color: white;
    padding-top: 5px;
    border-radius: 10px;
    margin: 0px 3px 0px 3px;\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">Afficher</a>
    
                                                    <a style=\"justify-content: center;
    display: inline-flex;
    width: 90px!important;
    height: 35px;
    background-color: #4c71de;
    color: white;
    padding-top: 5px;
    border-radius: 10px;
    margin: 0px 3px 0px 3px;\"  href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\">Modifier</a>


           <form style=\"width: 4px;margin: 0px 3px 0px 3px; \" method=\"post\" action=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
             <input type=\"hidden\" name=\"_token\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 122))), "html", null, true);
            echo "\">
            <button style=\"justify-content: center;
    display: inline-flex;
    width: 90px!important;
    height: 35px;
    background-color: #fd3838;
    color: white;
    padding-top: 5px;
    border-radius: 10px;\"  class=\"btn\">Supprimer</button>
                                                </form>
                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 135
            echo "                                            <tr>
                                                <td colspan=\"6\">no records found</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
                    <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_date");
        echo "\">Trier selon date</a>
                            </div>




    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 153,  296 => 139,  287 => 135,  269 => 122,  265 => 121,  259 => 118,  246 => 108,  233 => 98,  229 => 97,  225 => 96,  221 => 95,  217 => 94,  214 => 93,  209 => 92,  184 => 70,  161 => 50,  155 => 47,  142 => 36,  135 => 31,  130 => 28,  120 => 27,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Evenement index{% endblock %}

{% block javascripts %}
    {{ parent() }}
     <script>
    //Le script utilise la bibliothèque jQuery, qui doit être incluse sur la page pour que ce code fonctionne.
        \$(document).ready(function () {
            // ajoute un gestionnaire d'événements sur l'élément HTML input avec l'attribut name \"search\". 
           // Ce gestionnaire est déclenché à chaque fois que l'utilisateur saisit une valeur dans l'input.

            \$('input[name=\"search\"]').on('input', function () {

            //Le code trouve ensuite le formulaire parent de l'élément input en utilisant la méthode \"closest\"
            //puis le soumet en appelant la méthode \"submit\".

                \$(this).closest('form').submit();

         ///En conséquence, lorsque l'utilisateur tape quelque chose dans l'input, le formulaire est soumis automatiquement
         /// , ce qui déclenche la recherche en utilisant la valeur de l'input.
            });
        });
    </script>
{% endblock %}

{% block body %}
 <!-- Topbar Search -->
                 <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"{{ path('app_evenement_recherche') }}\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon adresse...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                {# <input value=\"Recherche\" type=\"submit\" class=\"form-control bg-light border-0 small\"> #}
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div> 
                        </div>
                       
                    </form>
                    <div class=\"col-lg-4\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('calendrier') }}\">Calendrier</a>
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('pdf') }}\">pdf</a>
                            </div>
                    </nav>
                                
                    </nav>
 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Tables</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target=\"_blank\"
                                    href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('app_evenement_new') }}\">Nouvel événement</a>
                            </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">Evenements disponibles</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Adresse</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                     
                                        {% for evenement in evenements %}
                                            <tr>
                                                <td>{{ evenement.id }}</td>
                                                <td>{{ evenement.nom }}</td>
                                                <td>{{ evenement.type }}</td>
                                                <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
                                                <td>{{ evenement.adresse }}</td>
                                                <td style=\"display: flex;\" >
                                                    <a style=\"justify-content: center;
    display: inline-flex;
    width: 90px!important;
    height: 35px;
    background-color: #4c71de;
    color: white;
    padding-top: 5px;
    border-radius: 10px;
    margin: 0px 3px 0px 3px;\" href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\">Afficher</a>
    
                                                    <a style=\"justify-content: center;
    display: inline-flex;
    width: 90px!important;
    height: 35px;
    background-color: #4c71de;
    color: white;
    padding-top: 5px;
    border-radius: 10px;
    margin: 0px 3px 0px 3px;\"  href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\">Modifier</a>


           <form style=\"width: 4px;margin: 0px 3px 0px 3px; \" method=\"post\" action=\"{{ path('app_evenement_delete', {'id': evenement.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
             <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evenement.id) }}\">
            <button style=\"justify-content: center;
    display: inline-flex;
    width: 90px!important;
    height: 35px;
    background-color: #fd3838;
    color: white;
    padding-top: 5px;
    border-radius: 10px;\"  class=\"btn\">Supprimer</button>
                                                </form>
                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"6\">no records found</td>
                                            </tr>
                                        {% endfor %}


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
                    <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('app_evenement_date') }}\">Trier selon date</a>
                            </div>




    
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\evenement\\index.html.twig");
    }
}
