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

/* home/index.html.twig */
class __TwigTemplate_02802e5ae46d77cb24915a59d1f7c2f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "home/index.html.twig", 1);
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
        echo "    <section id=\"top\">
        <header>
            <div class=\"container\">
                <div class=\"header-top\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"full\">
                                <div class=\"logo\">

                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"right_top_section\">
                                <!-- social icon -->
                                <ul class=\"social-icons pull-left\">
                                </ul>

                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class=\"login\">
                                    <li class=\"login-modal\">
                                        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"login\"><i class=\"fa fa-user\"></i>Connexion</a>
                                    </li>
                                    <li>
                                        <div class=\"cart-option\">
                                            <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\"><i class=\"fa fa-user\"></i>S'inscrire</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <div class=\"full-slider\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <!-- First slide -->
                    <div class=\"item active deepskyblue\" data-ride=\"carousel\" data-interval=\"5000\">
                        <div class=\"carousel-caption\">
                            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\"></div>
                            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"slider-contant\" data-animation=\"animated fadeInRight\">
                                    <h3>Le sport est dépassement de soi.<span class=\"color-yellow\">Le sport est école de vie. </span></h3>
                                    <p> Le sport va chercher la peur pour la dominer, la fatigue pour en triompher, la difficulté pour la vaincre.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Second slide -->
                    <div class=\"item skyblue\" data-ride=\"carousel\" data-interval=\"5000\">
                        <div class=\"carousel-caption\">
                            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\"></div>
                            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"slider-contant\" data-animation=\"animated fadeInRight\">
                                    <h3>If you Don’t Practice<br>You <span class=\"color-yellow\">Don’t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                                    <button class=\"btn btn-primary btn-lg\">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Third slide -->
                    <div class=\"item darkerskyblue\" data-ride=\"carousel\" data-interval=\"5000\">
                        <div class=\"carousel-caption\">
                            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\"></div>
                            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"slider-contant\" data-animation=\"animated fadeInRight\">
                                    <h3>If you Don’t Practice<br>You <span class=\"color-yellow\">Don’t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                                    <button class=\"btn btn-primary btn-lg\">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.carousel-inner -->
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
            <div class=\"news\">
                <div class=\"container\">
                    <div class=\"heading-slider\">
                        <p class=\"headline\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i> N'oubliez pas :</p>
                        <!--made by vipul mirajkar thevipulm.appspot.com-->
                        <h1>
                            <a href=\"\" class=\"typewrite\" data-period=\"2000\" data-type='[ \" Il faut se fixer des buts avant de pouvoir les atteindre.\", \" Il faut se fixer des buts avant de pouvoir les atteindre..\", \" Il faut se fixer des buts avant de pouvoir les atteindre..\"]'>
                                <span class=\"wrap\"></span>
                            </a>
                        </h1
                        <span class=\"wrap\"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Begin Page Content -->
    <!-- /.container-fluid -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">

                            </div>
                            <p>La plupart de nos événements ont des choix d'itinéraires difficiles et faciles car nous sommes toujours désireux d'encourager de nouveaux coureurs.</p>
                            <ul class=\"social-icons style-4 pull-left\">
                                <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a class=\"youtube\" href=\"#\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                <li><a class=\"pinterest\" href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">

                            <ul class=\"footer-menu\">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">

                            <ul class=\"address-list\">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">
                            <h3>Contactez-nous</h3>
                            <ul class=\"address-list\">
                                <li><i class=\"fa fa-phone\"></i> 123 456 7890</li>
                                <li><i style=\"font-size:20px;top:5px;\" class=\"fa fa-envelope\"></i> HealthConnect@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <p>Copyright © 2023 Distributed by <a target=\"_blank\">ESPRIT</a></p>
            </div>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  92 => 26,  68 => 4,  58 => 3,  35 => 1,);
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

                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"right_top_section\">
                                <!-- social icon -->
                                <ul class=\"social-icons pull-left\">
                                </ul>

                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class=\"login\">
                                    <li class=\"login-modal\">
                                        <a href=\"{{ path('app_login') }}\" class=\"login\"><i class=\"fa fa-user\"></i>Connexion</a>
                                    </li>
                                    <li>
                                        <div class=\"cart-option\">
                                            <a href=\"{{ path('app_register') }}\"><i class=\"fa fa-user\"></i>S'inscrire</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <div class=\"full-slider\">
            <div id=\"carousel-example-generic\" class=\"carousel slide\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <!-- First slide -->
                    <div class=\"item active deepskyblue\" data-ride=\"carousel\" data-interval=\"5000\">
                        <div class=\"carousel-caption\">
                            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\"></div>
                            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"slider-contant\" data-animation=\"animated fadeInRight\">
                                    <h3>Le sport est dépassement de soi.<span class=\"color-yellow\">Le sport est école de vie. </span></h3>
                                    <p> Le sport va chercher la peur pour la dominer, la fatigue pour en triompher, la difficulté pour la vaincre.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Second slide -->
                    <div class=\"item skyblue\" data-ride=\"carousel\" data-interval=\"5000\">
                        <div class=\"carousel-caption\">
                            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\"></div>
                            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"slider-contant\" data-animation=\"animated fadeInRight\">
                                    <h3>If you Don’t Practice<br>You <span class=\"color-yellow\">Don’t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                                    <button class=\"btn btn-primary btn-lg\">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                    <!-- Third slide -->
                    <div class=\"item darkerskyblue\" data-ride=\"carousel\" data-interval=\"5000\">
                        <div class=\"carousel-caption\">
                            <div class=\"col-lg-7 col-md-7 col-sm-12 col-xs-12\"></div>
                            <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                <div class=\"slider-contant\" data-animation=\"animated fadeInRight\">
                                    <h3>If you Don’t Practice<br>You <span class=\"color-yellow\">Don’t Derserve</span><br>to win!</h3>
                                    <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                                    <button class=\"btn btn-primary btn-lg\">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.carousel-inner -->
                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
            <div class=\"news\">
                <div class=\"container\">
                    <div class=\"heading-slider\">
                        <p class=\"headline\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i> N'oubliez pas :</p>
                        <!--made by vipul mirajkar thevipulm.appspot.com-->
                        <h1>
                            <a href=\"\" class=\"typewrite\" data-period=\"2000\" data-type='[ \" Il faut se fixer des buts avant de pouvoir les atteindre.\", \" Il faut se fixer des buts avant de pouvoir les atteindre..\", \" Il faut se fixer des buts avant de pouvoir les atteindre..\"]'>
                                <span class=\"wrap\"></span>
                            </a>
                        </h1
                        <span class=\"wrap\"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Begin Page Content -->
    <!-- /.container-fluid -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">

                            </div>
                            <p>La plupart de nos événements ont des choix d'itinéraires difficiles et faciles car nous sommes toujours désireux d'encourager de nouveaux coureurs.</p>
                            <ul class=\"social-icons style-4 pull-left\">
                                <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a class=\"youtube\" href=\"#\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                <li><a class=\"pinterest\" href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">

                            <ul class=\"footer-menu\">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">

                            <ul class=\"address-list\">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"full\">
                        <div class=\"footer-widget\">
                            <h3>Contactez-nous</h3>
                            <ul class=\"address-list\">
                                <li><i class=\"fa fa-phone\"></i> 123 456 7890</li>
                                <li><i style=\"font-size:20px;top:5px;\" class=\"fa fa-envelope\"></i> HealthConnect@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"container\">
                <p>Copyright © 2023 Distributed by <a target=\"_blank\">ESPRIT</a></p>
            </div>
        </div>
    </footer>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\home\\index.html.twig");
    }
}
