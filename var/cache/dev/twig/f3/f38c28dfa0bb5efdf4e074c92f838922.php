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
class __TwigTemplate_c4bdf692c6f9556c4f01c7d94bec2afd extends Template
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
         <header>
            <div class=\"container\">
               <div class=\"header-top\">
                  <div class=\"row\">
                     <div class=\"col-md-6\">
                        <div class=\"full\">
                           <div class=\"logo\">
                              <a href=\"index.html\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/logo.png"), "html", null, true);
        echo "\" alt=\"#\" /></a>
                           </div>
                        </div>
                     </div>
                     <div class=\"col-md-6\">
                        <div class=\"right_top_section\">
                           <!-- social icon -->
                           <ul class=\"social-icons pull-left\">
                              <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                              <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                              <li><a class=\"youtube\" href=\"#\"><i class=\"fa fa-youtube-play\"></i></a></li>
                              <li><a class=\"pinterest\" href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class=\"login\">
                              <li class=\"login-modal\">
                                 <a href=\"#\" class=\"login\"><i class=\"fa fa-user\"></i>Login</a>
                              </li>
                              <li>
                                 <div class=\"cart-option\">
                                    <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"header-bottom\">
                  <div class=\"row\">
                     <div class=\"col-md-12\">
                        <div class=\"full\">
                           <div class=\"main-menu-section\">
                              <div class=\"menu\">
                                 <nav class=\"navbar navbar-inverse\">
                                    <div class=\"navbar-header\">
                                       <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\">
                                       <span class=\"sr-only\">Toggle navigation</span>
                                       <span class=\"icon-bar\"></span>
                                       <span class=\"icon-bar\"></span>
                                       <span class=\"icon-bar\"></span>
                                       </button>
                                       <a class=\"navbar-brand\" href=\"#\">Menu</a>
                                    </div>
                                    <div class=\"collapse navbar-collapse js-navbar-collapse\">
                                       <ul class=\"nav navbar-nav\">
                                          <li class=\"active\"><a href=\"index.html\">Home</a></li>
                                          <li><a href=\"about.html\">About</a></li>
                                          <li><a href=\"team.html\">Team</a></li>
                                          <li><a href=\"news.html\">News</a></li>
                                          <li class=\"dropdown mega-dropdown\">
                                             <a href=\"match\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Match<span class=\"caret\"></span></a>\t\t\t\t
                                             <ul class=\"dropdown-menu mega-dropdown-menu\">
                                                <li class=\"col-sm-8\">
                                                   <ul>
                                                      <li class=\"dropdown-header\">Men Collection</li>
                                                      <div id=\"menCollection\" class=\"carousel slide\" data-ride=\"carousel\">
                                                         <div class=\"carousel-inner\">
                                                            <div class=\"item active\">
                                                               <div class=\"banner-for-match\"><a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/match-banner1.jpg"), "html", null, true);
        echo "\" alt=\"#\" /></a></div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class=\"item\">
                                                               <div class=\"banner-for-match\"><a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/match-banner1.jpg"), "html", null, true);
        echo "\" alt=\"#\" /></a></div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class=\"item\">
                                                               <div class=\"banner-for-match\"><a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/match-banner1.jpg"), "html", null, true);
        echo "\" alt=\"#\" /></a></div>
                                                            </div>
                                                            <!-- End Item -->                                
                                                         </div>
                                                         <!-- End Carousel Inner -->
                                                         <!-- Controls -->
                                                         <a class=\"left carousel-control\" href=\"#menCollection\" role=\"button\" data-slide=\"prev\">
                                                         <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                         <span class=\"sr-only\">Previous</span>
                                                         </a>
                                                         <a class=\"right carousel-control\" href=\"#menCollection\" role=\"button\" data-slide=\"next\">
                                                         <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                                         <span class=\"sr-only\">Next</span>
                                                         </a>
                                                      </div>
                                                      <!-- /.carousel -->
                                                   </ul>
                                                </li>
                                                <li class=\"col-sm-4\">
                                                   <ul class=\"menu-inner\">
                                                      <li class=\"dropdown-header\">Next Matchs</li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                                          <li><a href=\"blog.html\">Blog</a></li>
                                          <li><a href=\"contact.html\">contact</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class=\"search-bar\">
                                    <div id=\"imaginary_container\">
                                       <div class=\"input-group stylish-input-group\">
                                          <input type=\"text\" class=\"form-control\"  placeholder=\"Search\" >
                                          <span class=\"input-group-addon\">
                                          <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>  
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
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
                              <h3>If you Don’t Practice<br>You <span class=\"color-yellow\">Don’t Derserve</span><br>to win!</h3>
                              <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                                 please consider donating a small sum to help pay..
                              </p>
                              <button class=\"btn btn-primary btn-lg\">Read More</button>
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
        // line 273
        $this->displayBlock('body', $context, $blocks);
        // line 274
        echo "        <footer id=\"footer\" class=\"footer\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-4\">
                  <div class=\"full\">
                     <div class=\"footer-widget\">
                        <div class=\"footer-logo\">
                           <a href=\"#\"><img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"#\" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
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
                        <h3>Menu</h3>
                        <ul class=\"footer-menu\">
                           <li><a href=\"about.html\">About Us</a></li>
                           <li><a href=\"team.html\">Our Team</a></li>
                           <li><a href=\"news.html\">Latest News</a></li>
                           <li><a href=\"matche.html\">Recent Matchs</a></li>
                           <li><a href=\"blog.html\">Our Blog</a></li>
                           <li><a href=\"contact.html\">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-3\">
                  <div class=\"full\">
                     <div class=\"footer-widget\">
                        <h3>Contact us</h3>
                        <ul class=\"address-list\">
                           <li><i class=\"fa fa-map-marker\"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class=\"fa fa-phone\"></i> 123 456 7890</li>
                           <li><i style=\"font-size:20px;top:5px;\" class=\"fa fa-envelope\"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-3\">
                  <div class=\"full\">
                     <div class=\"contact-footer\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404\" width=\"600\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class=\"footer-bottom\">
            <div class=\"container\">
               <p>Copyright © 2018 Distributed by <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a></p>
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

    // line 273
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
        return array (  516 => 273,  504 => 44,  499 => 42,  495 => 41,  491 => 40,  486 => 39,  476 => 38,  464 => 35,  457 => 31,  452 => 29,  447 => 27,  442 => 25,  437 => 23,  432 => 21,  427 => 18,  417 => 17,  398 => 14,  330 => 281,  321 => 274,  319 => 273,  175 => 132,  168 => 128,  161 => 124,  97 => 63,  83 => 52,  75 => 46,  73 => 38,  70 => 37,  67 => 17,  62 => 14,  47 => 1,);
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
         <header>
            <div class=\"container\">
               <div class=\"header-top\">
                  <div class=\"row\">
                     <div class=\"col-md-6\">
                        <div class=\"full\">
                           <div class=\"logo\">
                              <a href=\"index.html\"><img src=\"{{ asset('Front/images/logo.png')}}\" alt=\"#\" /></a>
                           </div>
                        </div>
                     </div>
                     <div class=\"col-md-6\">
                        <div class=\"right_top_section\">
                           <!-- social icon -->
                           <ul class=\"social-icons pull-left\">
                              <li><a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                              <li><a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                              <li><a class=\"youtube\" href=\"#\"><i class=\"fa fa-youtube-play\"></i></a></li>
                              <li><a class=\"pinterest\" href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class=\"login\">
                              <li class=\"login-modal\">
                                 <a href=\"#\" class=\"login\"><i class=\"fa fa-user\"></i>Login</a>
                              </li>
                              <li>
                                 <div class=\"cart-option\">
                                    <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"header-bottom\">
                  <div class=\"row\">
                     <div class=\"col-md-12\">
                        <div class=\"full\">
                           <div class=\"main-menu-section\">
                              <div class=\"menu\">
                                 <nav class=\"navbar navbar-inverse\">
                                    <div class=\"navbar-header\">
                                       <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\">
                                       <span class=\"sr-only\">Toggle navigation</span>
                                       <span class=\"icon-bar\"></span>
                                       <span class=\"icon-bar\"></span>
                                       <span class=\"icon-bar\"></span>
                                       </button>
                                       <a class=\"navbar-brand\" href=\"#\">Menu</a>
                                    </div>
                                    <div class=\"collapse navbar-collapse js-navbar-collapse\">
                                       <ul class=\"nav navbar-nav\">
                                          <li class=\"active\"><a href=\"index.html\">Home</a></li>
                                          <li><a href=\"about.html\">About</a></li>
                                          <li><a href=\"team.html\">Team</a></li>
                                          <li><a href=\"news.html\">News</a></li>
                                          <li class=\"dropdown mega-dropdown\">
                                             <a href=\"match\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Match<span class=\"caret\"></span></a>\t\t\t\t
                                             <ul class=\"dropdown-menu mega-dropdown-menu\">
                                                <li class=\"col-sm-8\">
                                                   <ul>
                                                      <li class=\"dropdown-header\">Men Collection</li>
                                                      <div id=\"menCollection\" class=\"carousel slide\" data-ride=\"carousel\">
                                                         <div class=\"carousel-inner\">
                                                            <div class=\"item active\">
                                                               <div class=\"banner-for-match\"><a href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('Front/images/match-banner1.jpg')}}\" alt=\"#\" /></a></div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class=\"item\">
                                                               <div class=\"banner-for-match\"><a href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('Front/images/match-banner1.jpg')}}\" alt=\"#\" /></a></div>
                                                            </div>
                                                            <!-- End Item -->
                                                            <div class=\"item\">
                                                               <div class=\"banner-for-match\"><a href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('Front/images/match-banner1.jpg')}}\" alt=\"#\" /></a></div>
                                                            </div>
                                                            <!-- End Item -->                                
                                                         </div>
                                                         <!-- End Carousel Inner -->
                                                         <!-- Controls -->
                                                         <a class=\"left carousel-control\" href=\"#menCollection\" role=\"button\" data-slide=\"prev\">
                                                         <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                         <span class=\"sr-only\">Previous</span>
                                                         </a>
                                                         <a class=\"right carousel-control\" href=\"#menCollection\" role=\"button\" data-slide=\"next\">
                                                         <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                                         <span class=\"sr-only\">Next</span>
                                                         </a>
                                                      </div>
                                                      <!-- /.carousel -->
                                                   </ul>
                                                </li>
                                                <li class=\"col-sm-4\">
                                                   <ul class=\"menu-inner\">
                                                      <li class=\"dropdown-header\">Next Matchs</li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                      <li><a href=\"#\">Contrary vs classical</a></li>
                                                      <li><a href=\"#\">Discovered vs undoubtable</a></li>
                                                   </ul>
                                                </li>
                                             </ul>
                                          </li>
                                          <li><a href=\"blog.html\">Blog</a></li>
                                          <li><a href=\"contact.html\">contact</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                 <div class=\"search-bar\">
                                    <div id=\"imaginary_container\">
                                       <div class=\"input-group stylish-input-group\">
                                          <input type=\"text\" class=\"form-control\"  placeholder=\"Search\" >
                                          <span class=\"input-group-addon\">
                                          <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>  
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
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
                              <h3>If you Don’t Practice<br>You <span class=\"color-yellow\">Don’t Derserve</span><br>to win!</h3>
                              <p>If you use this site regularly and would like to help keep the site on the Internet,<br>
                                 please consider donating a small sum to help pay..
                              </p>
                              <button class=\"btn btn-primary btn-lg\">Read More</button>
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
               <div class=\"col-md-4\">
                  <div class=\"full\">
                     <div class=\"footer-widget\">
                        <div class=\"footer-logo\">
                           <a href=\"#\"><img src=\"{{ asset('Front/images/footer-logo.png')}}\" alt=\"#\" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
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
                        <h3>Menu</h3>
                        <ul class=\"footer-menu\">
                           <li><a href=\"about.html\">About Us</a></li>
                           <li><a href=\"team.html\">Our Team</a></li>
                           <li><a href=\"news.html\">Latest News</a></li>
                           <li><a href=\"matche.html\">Recent Matchs</a></li>
                           <li><a href=\"blog.html\">Our Blog</a></li>
                           <li><a href=\"contact.html\">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-3\">
                  <div class=\"full\">
                     <div class=\"footer-widget\">
                        <h3>Contact us</h3>
                        <ul class=\"address-list\">
                           <li><i class=\"fa fa-map-marker\"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class=\"fa fa-phone\"></i> 123 456 7890</li>
                           <li><i style=\"font-size:20px;top:5px;\" class=\"fa fa-envelope\"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class=\"col-md-3\">
                  <div class=\"full\">
                     <div class=\"contact-footer\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404\" width=\"600\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class=\"footer-bottom\">
            <div class=\"container\">
               <p>Copyright © 2018 Distributed by <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a></p>
            </div>
         </div>
      </footer>
      <a href=\"#home\" data-scroll class=\"dmtop global-radius\"><i class=\"fa fa-angle-up\"></i></a>
    </body>
</html>
", "baseFront.html.twig", "C:\\Users\\User\\Desktop\\ProjetPidev - Copie 2\\templates\\baseFront.html.twig");
    }
}
