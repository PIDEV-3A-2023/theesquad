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

/* baseFront.html.twig */
class __TwigTemplate_4b93c4bc9485b60f048b80f527f28823 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
            <!-- Basic -->
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <!-- Mobile Metas -->
            <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
            <!-- Site Metas -->
            <title>Game Info</title>
            <meta name=\"keywords\" content=\"\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "

        
    </head>
    <body>
     <div id=\"preloader\">
         <img class=\"preloader\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/loading-img.gif"), "html", null, true);
        echo "\" alt=\"\">
      </div>

        <section id=\"top\">

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
                     <p class=\"headline\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i> Top Headlines :</p>
                     <!--made by vipul mirajkar thevipulm.appspot.com-->
                     <h1>
                     <a href=\"\" class=\"typewrite\" data-period=\"2000\" data-type='[ \"Contrary to popular belief, Lorem Ipsum is not simply random text.\", \"Lorem Ipsum is simply dummy text of the printing and typesetting industry.\", \"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\"]'>
                     <span class=\"wrap\"></span>
                     </a>
                     </h1\t   
                     <span class=\"wrap\"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
        </section>
        ";
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "        <footer id=\"footer\" class=\"footer\">
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
      <a href=\"#home\" data-scroll class=\"dmtop global-radius\"><i class=\"fa fa-angle-up\"></i></a>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "                <link rel=\"shortcut icon\" href=\"\" type=\"image/x-icon\" />
                <link rel=\"apple-touch-icon\" href=\"\">
                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        echo "\">
                <!-- Site CSS -->
                <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/style.css"), "html", null, true);
        echo "\">
                <!-- Colors CSS -->
                <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/colors.css"), "html", null, true);
        echo "\">
                <!-- ALL VERSION CSS -->\t
                <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/versions.css"), "html", null, true);
        echo "\">
                <!-- Responsive CSS -->
                <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/responsive.css"), "html", null, true);
        echo "\">
                <!-- Custom CSS -->
                <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/custom.css"), "html", null, true);
        echo "\">
                <!-- font family -->
                <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
                <!-- end font family -->
                <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/3dslider.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "                  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://code.jquery.com/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://www.jqueryscript.net/css/jquerysctipttop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
                <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/3dslider.js"), "html", null, true);
        echo "\"></script>
                 <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/all.js"), "html", null, true);
        echo "\"></script>
                 <!-- ALL PLUGINS -->
                 <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 131,  299 => 44,  294 => 42,  290 => 41,  286 => 40,  281 => 39,  271 => 38,  259 => 35,  252 => 31,  247 => 29,  242 => 27,  237 => 25,  232 => 23,  227 => 21,  222 => 18,  212 => 17,  193 => 14,  167 => 132,  165 => 131,  83 => 52,  75 => 46,  73 => 38,  70 => 37,  67 => 17,  62 => 14,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
            <!-- Basic -->
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <!-- Mobile Metas -->
            <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
            <!-- Site Metas -->
            <title>Game Info</title>
            <meta name=\"keywords\" content=\"\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
                <link rel=\"shortcut icon\" href=\"\" type=\"image/x-icon\" />
                <link rel=\"apple-touch-icon\" href=\"\">
                <!-- Bootstrap CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css')}}\">
                <!-- Site CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset('Front/style.css')}}\">
                <!-- Colors CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset('Front/css/colors.css')}}\">
                <!-- ALL VERSION CSS -->\t
                <link rel=\"stylesheet\" href=\"{{ asset('Front/css/versions.css')}}\">
                <!-- Responsive CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset('Front/css/responsive.css')}}\">
                <!-- Custom CSS -->
                <link rel=\"stylesheet\" href=\"{{ asset('Front/css/custom.css')}}\">
                <!-- font family -->
                <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
                <!-- end font family -->
                <link rel=\"stylesheet\" href=\"{{ asset('Front/css/3dslider.css')}}\" />
        {% endblock %}

        {% block javascripts %}
                  <script src=\"{{ asset('http://code.jquery.com/jquery-1.11.1.min.js')}}\"></script>
                <link href=\"{{ asset('http://www.jqueryscript.net/css/jquerysctipttop.css')}}\" rel=\"stylesheet\" type=\"text/css\">
                <script src=\"{{ asset('Front/js/3dslider.js')}}\"></script>
                 <script src=\"{{ asset('Front/js/all.js')}}\"></script>
                 <!-- ALL PLUGINS -->
                 <script src=\"{{ asset('Front/js/custom.js')}}\"></script>
        {% endblock %}


        
    </head>
    <body>
     <div id=\"preloader\">
         <img class=\"preloader\" src=\"{{ asset('Front/images/loading-img.gif')}}\" alt=\"\">
      </div>

        <section id=\"top\">

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
                     <p class=\"headline\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i> Top Headlines :</p>
                     <!--made by vipul mirajkar thevipulm.appspot.com-->
                     <h1>
                     <a href=\"\" class=\"typewrite\" data-period=\"2000\" data-type='[ \"Contrary to popular belief, Lorem Ipsum is not simply random text.\", \"Lorem Ipsum is simply dummy text of the printing and typesetting industry.\", \"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.\"]'>
                     <span class=\"wrap\"></span>
                     </a>
                     </h1\t   
                     <span class=\"wrap\"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
        </section>
        {% block body %}{% endblock %}
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
      <a href=\"#home\" data-scroll class=\"dmtop global-radius\"><i class=\"fa fa-angle-up\"></i></a>
    </body>
</html>
", "baseFront.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\baseFront.html.twig");
    }
}
