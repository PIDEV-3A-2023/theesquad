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

/* client/dashboardClient.html.twig */
class __TwigTemplate_48975ebd211176c645b6e54563c4f52a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'client' => [$this, 'block_client'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboardClient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dashboardClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/dashboardClient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div id=\"page-top\">
            <!-- Page Wrapper -->
            <div id=\"wrapper\">

                <!-- Sidebar -->
                <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

                    <!-- Sidebar - Brand -->
                    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
                        <div class=\"sidebar-brand-icon rotate-n-15\">
                            <i class=\"fas fa-h-square\"></i>
                        </div>
                        <div class=\"sidebar-brand-text mx-3\">HealthConnect</div>
                    </a>

                    <!-- Divider -->
                    <hr class=\"sidebar-divider my-0\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><i class=\"fas fa-address-card\"></i><span>Mon Profil</span></a>
                    </li>

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_listCoach");
            echo "\"><i class=\"fas fa-user-ninja\"></i><span>Coach</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichage_evenement_front");
            echo "\"><i class=\"fas fa-list\"></i><span>Evenement</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class=\"sidebar-divider d-none d-md-block\">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class=\"text-center d-none d-md-inline\">
                        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
                    </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                    <!-- Main Content -->
                    <div id=\"content\">

                        <!-- Topbar -->
                        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                                <i class=\"fa fa-bars\"></i>
                            </button>

                            <!-- Topbar Search -->


                            <!-- Topbar Navbar -->
                            <ul class=\"navbar-nav ml-auto\">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class=\"nav-item dropdown no-arrow d-sm-none\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-search fa-fw\"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                         aria-labelledby=\"searchDropdown\">
                                        <form class=\"form-inline mr-auto w-100 navbar-search\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                                       placeholder=\"Search for...\" aria-label=\"Search\"
                                                       aria-describedby=\"basic-addon2\">
                                                <div class=\"input-group-append\">
                                                    <button class=\"btn btn-primary\" type=\"button\">
                                                        <i class=\"fas fa-search fa-sm\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <div class=\"topbar-divider d-none d-sm-block\"></div>

                                <!-- Nav Item - User Information -->
                                <li class=\"nav-item dropdown no-arrow\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "prenom", [], "any", false, false, false, 97), "html", null, true);
            echo "</span>
                                        <img style=\"width: 50px; height: 50px; object-fit: cover;\" class=\"img-profile rounded-circle\"
                                             src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "image", [], "any", false, false, false, 99))), "html", null, true);
            echo "\">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_editpassword", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Mot de passe
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        ";
            // line 126
            $this->displayBlock('client', $context, $blocks);
            // line 127
            echo "                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class=\"sticky-footer bg-white\">
                        <div class=\"container my-auto\">
                            <div class=\"copyright text-center my-auto\">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class=\"scroll-to-top rounded\" href=\"#page-top\">
                <i class=\"fas fa-angle-up\"></i>
            </a>

        </div>
    ";
        } else {
            // line 155
            echo "        <script>
            window.location.href = ";
            // line 156
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo ";
        </script>
    ";
        }
        // line 159
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_client($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "client/dashboardClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 126,  262 => 159,  256 => 156,  253 => 155,  223 => 127,  221 => 126,  205 => 113,  197 => 108,  190 => 104,  182 => 99,  175 => 97,  108 => 33,  101 => 29,  93 => 24,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if app.user %}
        <div id=\"page-top\">
            <!-- Page Wrapper -->
            <div id=\"wrapper\">

                <!-- Sidebar -->
                <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

                    <!-- Sidebar - Brand -->
                    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
                        <div class=\"sidebar-brand-icon rotate-n-15\">
                            <i class=\"fas fa-h-square\"></i>
                        </div>
                        <div class=\"sidebar-brand-text mx-3\">HealthConnect</div>
                    </a>

                    <!-- Divider -->
                    <hr class=\"sidebar-divider my-0\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_client_show', {'id': app.user.id}) }}\"><i class=\"fas fa-address-card\"></i><span>Mon Profil</span></a>
                    </li>

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_client_listCoach') }}\"><i class=\"fas fa-user-ninja\"></i><span>Coach</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('affichage_evenement_front') }}\"><i class=\"fas fa-list\"></i><span>Evenement</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class=\"sidebar-divider d-none d-md-block\">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class=\"text-center d-none d-md-inline\">
                        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
                    </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                    <!-- Main Content -->
                    <div id=\"content\">

                        <!-- Topbar -->
                        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                                <i class=\"fa fa-bars\"></i>
                            </button>

                            <!-- Topbar Search -->


                            <!-- Topbar Navbar -->
                            <ul class=\"navbar-nav ml-auto\">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class=\"nav-item dropdown no-arrow d-sm-none\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-search fa-fw\"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                         aria-labelledby=\"searchDropdown\">
                                        <form class=\"form-inline mr-auto w-100 navbar-search\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                                       placeholder=\"Search for...\" aria-label=\"Search\"
                                                       aria-describedby=\"basic-addon2\">
                                                <div class=\"input-group-append\">
                                                    <button class=\"btn btn-primary\" type=\"button\">
                                                        <i class=\"fas fa-search fa-sm\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <div class=\"topbar-divider d-none d-sm-block\"></div>

                                <!-- Nav Item - User Information -->
                                <li class=\"nav-item dropdown no-arrow\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ app.user.nom }} {{ app.user.prenom }}</span>
                                        <img style=\"width: 50px; height: 50px; object-fit: cover;\" class=\"img-profile rounded-circle\"
                                             src=\"{{ asset('Client_img/' ~ app.user.image) }}\">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"{{ path('app_client_edit', {'id': app.user.id}) }}\">
                                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_client_editpassword', {'id': app.user.id}) }}\">
                                            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Mot de passe
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                            <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                            </ul>

                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        {% block client %}{% endblock %}
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class=\"sticky-footer bg-white\">
                        <div class=\"container my-auto\">
                            <div class=\"copyright text-center my-auto\">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class=\"scroll-to-top rounded\" href=\"#page-top\">
                <i class=\"fas fa-angle-up\"></i>
            </a>

        </div>
    {% else %}
        <script>
            window.location.href = {{ path('app_login') }};
        </script>
    {% endif %}

{% endblock %}", "client/dashboardClient.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\client\\dashboardClient.html.twig");
    }
}
