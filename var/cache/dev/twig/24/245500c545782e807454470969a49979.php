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

/* security/login.html.twig */
class __TwigTemplate_e4f68973cf3360a4453b0b8407590e19 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "


";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<head>
    <title>Logboek (Calendar)</title>

    <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.1/jquery-ui.js\"></script>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js\"></script>
    <script type=\"module\" src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js\"></script>


    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
 

             <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/build/admin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css\">
";
        // line 23
        echo "    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css\"/>

  
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo " <body class=\"content1 \">
 <a href=\"/public/home\" class=\"btn btn-primary goback\">Go Back</a>
<div class= \"background1\">

    <form method=\"post\">
       

        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "email", [], "any", false, false, false, 42), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 45
        echo "        
        <div class=\"section1\">
        <div class=\"w-4/5 m-auto fadeIn animated text-center input-container\">
            <div class=\"py-12 border-b section8 border-gray-200\">
                <p class=\"text3\">
                    Login
                </p>

     
  <div class=\"field field_v1\">
    <label for=\"email\" class=\"ha-screen-reader\" ></label>
    <input  class=\"field__input\"  type=\"email\"
                        ";
        // line 58
        echo "                        name=\"email\"
                        id=\"inputEmail\"
                        class=\" block emailfield\"
                        placeholder=\"test@gmail.com....\"
                        autocomplete=\"email\"
                        required
                        autofocus>
    <span class=\"field__label-wrap\" aria-hidden=\"true\">
      <span class=\"field__label\">Email</span>
    </span>
  </div>

    <div class=\"field field_v2\">
    <label for=\"password\" class=\"ha-screen-reader\"></label>
    <input id=\"last-name\"  class=\"field__input\" type=\"password\"
                        name=\"password\"
                        id=\"inputPassword\"
                        class=\"block emailfield1\"
                        autocomplete=\"current-password\"
                        placeholder=\"strong password\"
                        required>
    <span class=\"field__label-wrap\" aria-hidden=\"true\">
      <span class=\"field__label\">Password</span>
    </span>
  </div>    
            
                <input
                        type=\"hidden\"
                        name=\"_csrf_token\"
                        value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
<div>
                <button
                        class=\"button1\"
                         role=\"button\"
                    >
                    Sign in
                </button>

                </div>
            </div>
        </div>
        </div>

    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 87,  165 => 58,  151 => 45,  143 => 42,  140 => 41,  138 => 40,  129 => 33,  119 => 32,  104 => 23,  99 => 20,  88 => 11,  86 => 10,  84 => 9,  76 => 2,  66 => 1,  54 => 105,  52 => 32,  47 => 29,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<head>
    <title>Logboek (Calendar)</title>

    <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.13.1/jquery-ui.js\"></script>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    {#    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/cjs/popper.min.js\"></script> #}
    {#    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/tooltip.js/1.3.1/tooltip.min.js\"></script> #}
    {#    <script src=\"home/emreatelierix/public_html/monologger/assets/bootstrap.bundle.js\"></script> #}
    <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js\" defer></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js\"></script>
    <script type=\"module\" src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js\"></script>


    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
 

             <link rel=\"stylesheet\" href=\"{{ asset('/public/build/admin.css') }}\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css\">
{#    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css\"/>#}
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css\"/>

  
</head>
{% endblock %}



{% block body %}
 <body class=\"content1 \">
 <a href=\"/public/home\" class=\"btn btn-primary goback\">Go Back</a>
<div class= \"background1\">

    <form method=\"post\">
       

        {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.email }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}
        
        <div class=\"section1\">
        <div class=\"w-4/5 m-auto fadeIn animated text-center input-container\">
            <div class=\"py-12 border-b section8 border-gray-200\">
                <p class=\"text3\">
                    Login
                </p>

     
  <div class=\"field field_v1\">
    <label for=\"email\" class=\"ha-screen-reader\" ></label>
    <input  class=\"field__input\"  type=\"email\"
                        {# value=\"{{ last_username }}\" #}
                        name=\"email\"
                        id=\"inputEmail\"
                        class=\" block emailfield\"
                        placeholder=\"test@gmail.com....\"
                        autocomplete=\"email\"
                        required
                        autofocus>
    <span class=\"field__label-wrap\" aria-hidden=\"true\">
      <span class=\"field__label\">Email</span>
    </span>
  </div>

    <div class=\"field field_v2\">
    <label for=\"password\" class=\"ha-screen-reader\"></label>
    <input id=\"last-name\"  class=\"field__input\" type=\"password\"
                        name=\"password\"
                        id=\"inputPassword\"
                        class=\"block emailfield1\"
                        autocomplete=\"current-password\"
                        placeholder=\"strong password\"
                        required>
    <span class=\"field__label-wrap\" aria-hidden=\"true\">
      <span class=\"field__label\">Password</span>
    </span>
  </div>    
            
                <input
                        type=\"hidden\"
                        name=\"_csrf_token\"
                        value=\"{{ csrf_token('authenticate') }}\"
                >
<div>
                <button
                        class=\"button1\"
                         role=\"button\"
                    >
                    Sign in
                </button>

                </div>
            </div>
        </div>
        </div>

    </form>

{% endblock %}


", "security/login.html.twig", "C:\\wamp64\\www\\project\\crm-system\\templates\\security\\login.html.twig");
    }
}
