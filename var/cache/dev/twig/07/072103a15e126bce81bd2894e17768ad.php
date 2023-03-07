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
class __TwigTemplate_1b5016c715ab1b509d4254ce1675fa31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("coach/dashboardCoach.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
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

    // line 25
    public function block_coach($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        // line 26
        echo " <!-- Topbar Search -->
                 <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_recherche");
        echo "\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon adresse,nom...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            ";
        // line 34
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
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier");
        echo "\">Calendrier</a>
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 48
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
                            <p class=\"mb-4\"></p>
                            </div>

                            <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 66
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
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 88, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 89
            echo "                                            <tr>
                                                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nom", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "type", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                                 <td>";
            // line 93
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true))) : (print ("")));
            echo " <br></br>
                                           <span style=\"color:red;\"> Il vous reste ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "joursRestants", [], "method", false, false, false, 94), "html", null, true);
            echo " jours!</td> 
                                                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "adresse", [], "any", false, false, false, 95), "html", null, true);
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
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 105)]), "html", null, true);
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
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\">Modifier</a>


           <form style=\"width: 4px;margin: 0px 3px 0px 3px; \" method=\"post\" action=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
             <input type=\"hidden\" name=\"_token\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 119))), "html", null, true);
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
            // line 132
            echo "                                            <tr>
                                                <td colspan=\"6\">no records found</td>
                                            </tr>
                                  ";
            // line 136
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "

                                    </tbody>
                                </table>
                             <div class=\"card-footer bg-transparent p-0\">
                        ";
        // line 152
        echo "                    </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
                    <div class=\"col-lg-2\">
                                <a style =\"justify-content: center;display: inline-flex;width: 140px!important;height: 
                                35px;background-color: #4c71de;color: white;padding-top: 5px;border-radius: 10px;\" 
                                href=\"";
        // line 163
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
        return array (  300 => 163,  287 => 152,  280 => 137,  274 => 136,  269 => 132,  251 => 119,  247 => 118,  241 => 115,  228 => 105,  215 => 95,  211 => 94,  207 => 93,  203 => 92,  199 => 91,  195 => 90,  192 => 89,  187 => 88,  162 => 66,  141 => 48,  135 => 45,  122 => 34,  115 => 29,  110 => 26,  100 => 25,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'coach/dashboardCoach.html.twig' %}

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
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" method=\"post\" action=\"{{ path('app_evenement_recherche') }}\">
                        <div class=\"input-group\">
                            <input name=\"search\" type=\"text\" class=\"form-control bg-light border-0 small js-search-input\" placeholder=\"Recherche selon adresse,nom...\"
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
                            <p class=\"mb-4\"></p>
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
                                                 <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }} <br></br>
                                           <span style=\"color:red;\"> Il vous reste {{ evenement.joursRestants() }} jours!</td> 
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
                                  {# <div class=\"align-center\">{{knp_pagination_render(evenement)}}</div>    #}
                                        {% endfor %}


                                    </tbody>
                                </table>
                             <div class=\"card-footer bg-transparent p-0\">
                        {# <!-- Pagination START -->
                         <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            <!-- Content -->
                            <p class=\"mb-0 text-center text-sm-start\"></p>
                            <!-- Pagination -->
                            <nav class=\"d-flex justify-content-center mb-0\" aria-label=\"navigation\">
                                {{ knp_pagination_render(evenements) }}
                            </nav>
                        </div>  
                        <!-- Pagination END --> #}
                    </div>
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
", "evenement/index.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\evenement\\index.html.twig");
    }
}
