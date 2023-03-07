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
class __TwigTemplate_6f49ffcb579b4c44a038f0502e6280b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'coach' => [$this, 'block_coach'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "coach/dashboardCoach.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "exercice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
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
    public function block_coach($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        // line 28
        echo " <!-- Topbar Search -->
                 <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_recherche");
        echo "\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon nom...\"
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
                    </nav>
 <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-2 text-gray-800\">Exercices relatives au differentes événements</h1>
                    <div style=\"display :flex;\">
                            <div class=\"col-lg-10\">
                            <p class=\"mb-4\"></p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 135px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 57
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 81
            echo "                                            <tr>
                                                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "nom", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "duree", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exercice"], "evenement", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
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
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 95)]), "html", null, true);
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
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">Modifier</a>


                                                    <form style=\"width: 4px;margin: 0px 3px 0px 3px; width: 80px!important;\" method=\"post\" action=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Etes vous sur à propos la suppression de cet élément?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 109))), "html", null, true);
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
            // line 122
            echo "                                                 <tr>
                                                 <td colspan=\"6\">no records found</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
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
        // line 136
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 136, $this->source); })()));
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
        // line 149
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
        return array (  282 => 149,  266 => 136,  254 => 126,  245 => 122,  227 => 109,  223 => 108,  217 => 105,  204 => 95,  191 => 85,  187 => 84,  183 => 83,  179 => 82,  176 => 81,  171 => 80,  145 => 57,  122 => 36,  115 => 31,  110 => 28,  100 => 27,  69 => 7,  59 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coach/dashboardCoach.html.twig' %}


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
{% block coach %}
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
                            <p class=\"mb-4\"></p>
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



 

{% endblock %}", "exercice/index.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\exercice\\index.html.twig");
    }
}
