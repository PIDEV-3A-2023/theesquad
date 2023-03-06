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

/* exercice/index.html.twig */
class __TwigTemplate_a9364f39e9c3e9d1b7d05ea18880e953 extends Template
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
        // line 3
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "exercice/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Exercice index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
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

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo " <!-- Topbar Search -->
                 <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_recherche");
        echo "\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon nom...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                ";
        // line 39
        echo "                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div> 
                        </div>
                    </form>
                    </nav>
 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Exercices relatives au differentes événements</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target=\"_blank\"
                                    href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 135px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_new");
        echo "\">Nouveau exercice</a>
                            </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Durée</th>
                                            <th>Nom de l'événement</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 86
            echo "                                            <tr>
                                                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "nom", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "duree", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exercice"], "evenement", [], "any", false, false, false, 90), "nom", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                                <td style=\"display: flex;\" HEIGHT=\"10%\">
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">Afficher</a>
    
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\"  href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">Modifier</a>


                                                    <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 114))), "html", null, true);
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
            // line 127
            echo "                                                 <tr>
                                                 <td colspan=\"6\">no records found</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "

                                    </tbody>
                                </table>
                                 <!-- Pagination START -->
                         <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            <!-- Content -->
                            <p class=\"mb-0 text-center text-sm-start\"></p>
                            <!-- Pagination -->
                            <nav class=\"d-flex justify-content-center mb-0\" aria-label=\"navigation\">
                                ";
        // line 141
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 141, $this->source); })()));
        echo "
                            </nav>
                        </div>  
                        <!-- Pagination END -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_tri");
        echo "\">Trier selon nom</a>
                            </div>



 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exercice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 154,  288 => 141,  276 => 131,  267 => 127,  249 => 114,  245 => 113,  239 => 110,  226 => 100,  213 => 90,  209 => 89,  205 => 88,  201 => 87,  198 => 86,  193 => 85,  167 => 62,  142 => 39,  135 => 34,  130 => 31,  120 => 30,  89 => 10,  79 => 9,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'baseBack.html.twig' %} 

{% block title %}Exercice index{% endblock %}

{# ce script sera exécuté lorsque le document est pret cad lorsque toutes les ressources de la page ont été chargées. #}

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
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"{{ path('app_exercice_recherche') }}\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon nom...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                                {# <input value=\"Recherche\" type=\"submit\" class=\"form-control bg-light border-0 small\"> #}
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"submit\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div> 
                        </div>
                    </form>
                    </nav>
 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Exercices relatives au differentes événements</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\">DataTables is a third party plugin that is used to generate the demo table below.
                                For more information about DataTables, please visit the <a target=\"_blank\"
                                    href=\"https://datatables.net\">official DataTables documentation</a>.</p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 135px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('app_exercice_new') }}\">Nouveau exercice</a>
                            </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class=\"card shadow mb-4\">
                        <div class=\"card-header py-3\">
                            <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Durée</th>
                                            <th>Nom de l'événement</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        {% for exercice in exercices %}
                                            <tr>
                                                <td>{{ exercice.id }}</td>
                                                <td>{{ exercice.nom }}</td>
                                                <td>{{ exercice.duree }}</td>
                                                <td>{{ exercice.evenement.nom }}</td>
                                                <td style=\"display: flex;\" HEIGHT=\"10%\">
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\" href=\"{{ path('app_exercice_show', {'id': exercice.id}) }}\">Afficher</a>
    
                                                    <a style=\"justify-content: center;
                                                display: inline-flex;
                                                width: 90px!important;
                                                height: 35px;
                                                background-color: #4c71de;
                                                color: white;
                                                padding-top: 5px;
                                                border-radius: 10px;
                                                margin: 0px 3px 0px 3px; width: 80px!important;\"  href=\"{{ path('app_exercice_edit', {'id': exercice.id}) }}\">Modifier</a>


                                                    <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"{{ path('app_exercice_delete', {'id': exercice.id}) }}\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ exercice.id) }}\">
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
                                 <!-- Pagination START -->
                         <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            <!-- Content -->
                            <p class=\"mb-0 text-center text-sm-start\"></p>
                            <!-- Pagination -->
                            <nav class=\"d-flex justify-content-center mb-0\" aria-label=\"navigation\">
                                {{ knp_pagination_render(exercices) }}
                            </nav>
                        </div>  
                        <!-- Pagination END -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"{{ path('app_exercice_tri') }}\">Trier selon nom</a>
                            </div>



 

{% endblock %}", "exercice/index.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidevErij\\ProjetPidev - Copie 2\\templates\\exercice\\index.html.twig");
    }
}
