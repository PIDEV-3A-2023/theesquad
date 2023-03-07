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

/* coach/dashboardCoach.html.twig */
class __TwigTemplate_cf6b367b3466778d6b4ac7d36298f3be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'coach' => [$this, 'block_coach'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/dashboardCoach.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coach/dashboardCoach.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coach/dashboardCoach.html.twig", 1);
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

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"><i class=\"fas fa-address-card\"></i><span>Mon Profil</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
            echo "\"><i class=\"fas fa-list\"></i><span>Evenement</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_index");
            echo "\"><i class=\"fas fa-list\"></i><span>Exercice</span></a>
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
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "nom", [], "any", false, false, false, 98), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "prenom", [], "any", false, false, false, 98), "html", null, true);
            echo "</span>
                                        <img style=\"width: 50px; height: 50px; object-fit: cover;\" class=\"img-profile rounded-circle\"
                                             src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Client_img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "image", [], "any", false, false, false, 100))), "html", null, true);
            echo "\">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                         aria-labelledby=\"userDropdown\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coach_editpassword", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Mot de passe
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"";
            // line 114
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
            // line 127
            $this->displayBlock('coach', $context, $blocks);
            // line 128
            echo "                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class=\"sticky-footer bg-white\">
                        <div class=\"container my-auto\">
                            <div class=\"copyright text-center my-auto\">
                                <span>Copyright &copy; Your Website 2023</span>
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
            // line 156
            echo "        <script>
            window.location.href = ";
            // line 157
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo ";
        </script>
    ";
        }
        // line 160
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_coach($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "coach"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coach/dashboardCoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 127,  263 => 160,  257 => 157,  254 => 156,  224 => 128,  222 => 127,  206 => 114,  198 => 109,  191 => 105,  183 => 100,  176 => 98,  108 => 33,  101 => 29,  94 => 25,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
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

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_coach_show', {'id': app.user.id}) }}\"><i class=\"fas fa-address-card\"></i><span>Mon Profil</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_evenement_index') }}\"><i class=\"fas fa-list\"></i><span>Evenement</span></a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_exercice_index') }}\"><i class=\"fas fa-list\"></i><span>Exercice</span></a>
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
                                        <a class=\"dropdown-item\" href=\"{{ path('app_coach_edit', {'id': app.user.id}) }}\">
                                            <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                            Modifier Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_coach_editpassword', {'id': app.user.id}) }}\">
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
                        {% block coach %}{% endblock %}
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class=\"sticky-footer bg-white\">
                        <div class=\"container my-auto\">
                            <div class=\"copyright text-center my-auto\">
                                <span>Copyright &copy; Your Website 2023</span>
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

{% endblock %}", "coach/dashboardCoach.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\coach\\dashboardCoach.html.twig");
    }
}
