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

/* registration/register.html.twig */
class __TwigTemplate_eb983f5badf435928244a1347b74a2a7 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
 ";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Create an account ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
   

         ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 10
            echo "             <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
         <div class=\"section9\"></div>

         <div class=\"text7\">

             <h1> Maak een Account aan </h1>

             <div class=\"text8\">

                 ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start');
        echo "

                 ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row');
        echo "

                 <div class=\"text8\">

                     ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'row', ["label" => "Password"]);
        // line 30
        echo "

                     <div class=\"text8\">
                         <button class=\"uppercase hvr-bounce-to-bottom mt-15 bg-orange-500 submitbutton text-gray-100 text-lg w-1/5 mt-10 font-extrabold py-4 px-8 rounded-3xl\"
                                 type=\"submit\">Register
                         </button>
                         ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
                     </div>
                 </div>
             </div>

         </div>

     ";
        // line 59
        echo "
    

 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 59,  144 => 36,  136 => 30,  134 => 27,  127 => 23,  122 => 21,  111 => 12,  102 => 10,  98 => 9,  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %} Create an account {% endblock %}

 {% block body %}

   

         {% for flash_error in app.flashes('verify_email_error') %}
             <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
         {% endfor %}

         <div class=\"section9\"></div>

         <div class=\"text7\">

             <h1> Maak een Account aan </h1>

             <div class=\"text8\">

                 {{ form_start(registrationForm) }}

                 {{ form_row(registrationForm.email) }}

                 <div class=\"text8\">

                     {{ form_row(registrationForm.plainPassword, {
                         label: 'Password'

                     }) }}

                     <div class=\"text8\">
                         <button class=\"uppercase hvr-bounce-to-bottom mt-15 bg-orange-500 submitbutton text-gray-100 text-lg w-1/5 mt-10 font-extrabold py-4 px-8 rounded-3xl\"
                                 type=\"submit\">Register
                         </button>
                         {{ form_end(registrationForm) }}
                     </div>
                 </div>
             </div>

         </div>

     {# {% else %}

         <div class=\"section10 fadeIn animated \">
             <div class=\"section11\">

                 <p class=\"text10\"> Om gebruik te kunnen maken van het logboek verzoeken wij u eerst in te loggen als
                     medewerker </p>
                 <button><a
                             class=\"uppercase hvr-bounce-to-bottom mt-15 bg-orange-500 submitbutton1 text-gray-100 text-lg mt-10 font-extrabold py-4 px-8 rounded-3xl\"
                             href=\"/login\"
                             @click=\"isOpen = false\">
                         Login
                     </a>
                 </button>
             </div>
         </div> #}

    

 {% endblock %}", "registration/register.html.twig", "C:\\wamp64\\www\\project\\crm-system\\templates\\registration\\register.html.twig");
    }
}
