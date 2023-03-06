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

/* buttons.html.twig */
class __TwigTemplate_0f0f3d20763e364e74ab548fa801be53 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buttons.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "buttons.html.twig", 1);
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

        echo "   
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-4 text-gray-800\">Buttons</h1>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">

                            <!-- Circle Buttons -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Circle Buttons</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>Use Font Awesome Icons (included with this theme package) along with the circle
                                        buttons as shown in the examples below!</p>
                                    <!-- Circle Buttons (Default) -->
                                    <div class=\"mb-2\">
                                        <code>.btn-circle</code>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-circle\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-success btn-circle\">
                                        <i class=\"fas fa-check\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-info btn-circle\">
                                        <i class=\"fas fa-info-circle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-warning btn-circle\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-danger btn-circle\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                    <!-- Circle Buttons (Small) -->
                                    <div class=\"mt-4 mb-2\">
                                        <code>.btn-circle .btn-sm</code>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-circle btn-sm\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-success btn-circle btn-sm\">
                                        <i class=\"fas fa-check\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-info btn-circle btn-sm\">
                                        <i class=\"fas fa-info-circle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-warning btn-circle btn-sm\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-danger btn-circle btn-sm\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                    <!-- Circle Buttons (Large) -->
                                    <div class=\"mt-4 mb-2\">
                                        <code>.btn-circle .btn-lg</code>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-circle btn-lg\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-success btn-circle btn-lg\">
                                        <i class=\"fas fa-check\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-info btn-circle btn-lg\">
                                        <i class=\"fas fa-info-circle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-warning btn-circle btn-lg\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-danger btn-circle btn-lg\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Brand Buttons -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Brand Buttons</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>Google and Facebook buttons are available featuring each company's respective
                                        brand color. They are used on the user login and registration pages.</p>
                                    <p>You can create more custom buttons by adding a new color variable in the
                                        <code>_variables.scss</code> file and then using the Bootstrap button variant
                                        mixin to create a new style, as demonstrated in the <code>_buttons.scss</code>
                                        file.</p>
                                    <a href=\"#\" class=\"btn btn-google btn-block\"><i class=\"fab fa-google fa-fw\"></i>
                                        .btn-google</a>
                                    <a href=\"#\" class=\"btn btn-facebook btn-block\"><i
                                            class=\"fab fa-facebook-f fa-fw\"></i> .btn-facebook</a>

                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6\">

                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Split Buttons with Icon</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>Works with any button colors, just use the <code>.btn-icon-split</code> class and
                                        the markup in the examples below. The examples below also use the
                                        <code>.text-white-50</code> helper class on the icons for additional styling,
                                        but it is not required.</p>
                                    <a href=\"#\" class=\"btn btn-primary btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-flag\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Primary</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-success btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-check\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Success</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-info btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-info-circle\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Info</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-warning btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-exclamation-triangle\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Warning</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-danger btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-trash\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Danger</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-secondary btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-arrow-right\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Secondary</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-light btn-icon-split\">
                                        <span class=\"icon text-gray-600\">
                                            <i class=\"fas fa-arrow-right\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Light</span>
                                    </a>
                                    <div class=\"mb-4\"></div>
                                    <p>Also works with small and large button classes!</p>
                                    <a href=\"#\" class=\"btn btn-primary btn-icon-split btn-sm\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-flag\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Small</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-primary btn-icon-split btn-lg\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-flag\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Large</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("             {% extends 'baseBack.html.twig' %} 

{% block body %}   
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <h1 class=\"h3 mb-4 text-gray-800\">Buttons</h1>

                    <div class=\"row\">

                        <div class=\"col-lg-6\">

                            <!-- Circle Buttons -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Circle Buttons</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>Use Font Awesome Icons (included with this theme package) along with the circle
                                        buttons as shown in the examples below!</p>
                                    <!-- Circle Buttons (Default) -->
                                    <div class=\"mb-2\">
                                        <code>.btn-circle</code>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-circle\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-success btn-circle\">
                                        <i class=\"fas fa-check\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-info btn-circle\">
                                        <i class=\"fas fa-info-circle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-warning btn-circle\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-danger btn-circle\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                    <!-- Circle Buttons (Small) -->
                                    <div class=\"mt-4 mb-2\">
                                        <code>.btn-circle .btn-sm</code>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-circle btn-sm\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-success btn-circle btn-sm\">
                                        <i class=\"fas fa-check\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-info btn-circle btn-sm\">
                                        <i class=\"fas fa-info-circle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-warning btn-circle btn-sm\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-danger btn-circle btn-sm\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                    <!-- Circle Buttons (Large) -->
                                    <div class=\"mt-4 mb-2\">
                                        <code>.btn-circle .btn-lg</code>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-circle btn-lg\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-success btn-circle btn-lg\">
                                        <i class=\"fas fa-check\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-info btn-circle btn-lg\">
                                        <i class=\"fas fa-info-circle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-warning btn-circle btn-lg\">
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    </a>
                                    <a href=\"#\" class=\"btn btn-danger btn-circle btn-lg\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Brand Buttons -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Brand Buttons</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>Google and Facebook buttons are available featuring each company's respective
                                        brand color. They are used on the user login and registration pages.</p>
                                    <p>You can create more custom buttons by adding a new color variable in the
                                        <code>_variables.scss</code> file and then using the Bootstrap button variant
                                        mixin to create a new style, as demonstrated in the <code>_buttons.scss</code>
                                        file.</p>
                                    <a href=\"#\" class=\"btn btn-google btn-block\"><i class=\"fab fa-google fa-fw\"></i>
                                        .btn-google</a>
                                    <a href=\"#\" class=\"btn btn-facebook btn-block\"><i
                                            class=\"fab fa-facebook-f fa-fw\"></i> .btn-facebook</a>

                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6\">

                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Split Buttons with Icon</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>Works with any button colors, just use the <code>.btn-icon-split</code> class and
                                        the markup in the examples below. The examples below also use the
                                        <code>.text-white-50</code> helper class on the icons for additional styling,
                                        but it is not required.</p>
                                    <a href=\"#\" class=\"btn btn-primary btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-flag\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Primary</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-success btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-check\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Success</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-info btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-info-circle\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Info</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-warning btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-exclamation-triangle\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Warning</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-danger btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-trash\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Danger</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-secondary btn-icon-split\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-arrow-right\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Secondary</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-light btn-icon-split\">
                                        <span class=\"icon text-gray-600\">
                                            <i class=\"fas fa-arrow-right\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Light</span>
                                    </a>
                                    <div class=\"mb-4\"></div>
                                    <p>Also works with small and large button classes!</p>
                                    <a href=\"#\" class=\"btn btn-primary btn-icon-split btn-sm\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-flag\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Small</span>
                                    </a>
                                    <div class=\"my-2\"></div>
                                    <a href=\"#\" class=\"btn btn-primary btn-icon-split btn-lg\">
                                        <span class=\"icon text-white-50\">
                                            <i class=\"fas fa-flag\"></i>
                                        </span>
                                        <span class=\"text\">Split Button Large</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
                {% endblock %}", "buttons.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidevErij\\ProjetPidev - Copie 2\\templates\\buttons.html.twig");
    }
}
