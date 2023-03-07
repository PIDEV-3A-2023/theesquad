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

/* base2.html.twig */
class __TwigTemplate_25de0a6c0b297a9f6b2300c6bd5aa802 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<!-- Basic -->
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
<!-- Site Metas -->
<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<!-- Site Icons -->
   <link rel=\"shortcut icon\" href=\"\" type=\"image/x-icon\" />
   <link rel=\"apple-touch-icon\" href=\"\">
<!-- Bootstrap CSS -->
   <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Site CSS -->
   <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/style.css"), "html", null, true);
        echo "\">
<!-- Responsive CSS -->
   <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/responsive.css"), "html", null, true);
        echo "\">
<!-- Custom CSS -->
   <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/custom.css"), "html", null, true);
        echo "\">
<!-- font family -->
   <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
<!-- end font family -->
   <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/3dslider.css"), "html", null, true);
        echo "\" />

    <link href=\"http://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body class=\"game_info\" data-spy=\"scroll\" data-target=\".header\">
     ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "     <!-- LOADER -->
     <div id=\"preloader\">
         <img class=\"preloader\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/loading-img.gif"), "html", null, true);
        echo "\" alt=\"\">
     </div>
     <!-- END LOADER -->


      <script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>

      <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/3dslider.js"), "html", null, true);
        echo "\"></script>
     <!-- ALL JS FILES -->
     <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/all.js"), "html", null, true);
        echo "\"></script>
     <!-- ALL PLUGINS -->
     <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
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
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 31,  136 => 10,  121 => 45,  116 => 43,  111 => 41,  101 => 34,  97 => 32,  95 => 31,  86 => 25,  79 => 21,  74 => 19,  69 => 17,  64 => 15,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<!-- Basic -->
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
<!-- Site Metas -->
<title>{% block title %}Home!{% endblock %}</title>
<!-- Site Icons -->
   <link rel=\"shortcut icon\" href=\"\" type=\"image/x-icon\" />
   <link rel=\"apple-touch-icon\" href=\"\">
<!-- Bootstrap CSS -->
   <link rel=\"stylesheet\" href=\"{{asset('Front/css/bootstrap.min.css')}}\">
<!-- Site CSS -->
   <link rel=\"stylesheet\" href=\"{{asset('Front/style.css')}}\">
<!-- Responsive CSS -->
   <link rel=\"stylesheet\" href=\"{{asset('Front/css/responsive.css')}}\">
<!-- Custom CSS -->
   <link rel=\"stylesheet\" href=\"{{asset('Front/css/custom.css')}}\">
<!-- font family -->
   <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
<!-- end font family -->
   <link rel=\"stylesheet\" href=\"{{asset('Front/css/3dslider.css')}}\" />

    <link href=\"http://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body class=\"game_info\" data-spy=\"scroll\" data-target=\".header\">
     {% block body %}{% endblock %}
     <!-- LOADER -->
     <div id=\"preloader\">
         <img class=\"preloader\" src=\"{{ asset('Front/images/loading-img.gif') }}\" alt=\"\">
     </div>
     <!-- END LOADER -->


      <script src=\"http://code.jquery.com/jquery-1.11.1.min.js\"></script>

      <script src=\"{{asset('Front/js/3dslider.js')}}\"></script>
     <!-- ALL JS FILES -->
     <script src=\"{{ asset('Front/js/all.js')}}\"></script>
     <!-- ALL PLUGINS -->
     <script src=\"{{ asset('Front/js/custom.js') }}\"></script>

</body>
</html>
", "base2.html.twig", "C:\\Users\\wiki\\Desktop\\integration\\HealthConnect\\templates\\base2.html.twig");
    }
}
