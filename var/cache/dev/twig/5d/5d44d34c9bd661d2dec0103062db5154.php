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

/* LiveTestPage.html.twig */
class __TwigTemplate_1a8b3b0eb4e44cd34cd9bdb3a537b1cd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LiveTestPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "LiveTestPage.html.twig"));

        // line 1
        echo "<tr >
    <th>test1</th>
    <td>
        Votes: <span class=\"badge bg-secondary\"></span>
    </td>
    <td style=\"width: 250px;\">
       
            <div class=\"alert alert-success\">
                Thanks for voting! <i class=\"fa fa-check-circle\"></i>
            </div>
       
            <button
                type=\"button\"
                class=\"btn btn-secondary\"
                data-action=\"live#action\"
                data-action-name=\"vote(direction=up)\"
            >
                <i class=\"fa fa-arrow-up\"></i>
            </button>
            <button
                type=\"button\"
                class=\"btn btn-secondary\"
                data-action=\"live#action\"
                data-action-name=\"vote(direction=down)\"
            >
                <i class=\"fa fa-arrow-down\"></i>
            </button>

    </td>
</tr>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "LiveTestPage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr >
    <th>test1</th>
    <td>
        Votes: <span class=\"badge bg-secondary\"></span>
    </td>
    <td style=\"width: 250px;\">
       
            <div class=\"alert alert-success\">
                Thanks for voting! <i class=\"fa fa-check-circle\"></i>
            </div>
       
            <button
                type=\"button\"
                class=\"btn btn-secondary\"
                data-action=\"live#action\"
                data-action-name=\"vote(direction=up)\"
            >
                <i class=\"fa fa-arrow-up\"></i>
            </button>
            <button
                type=\"button\"
                class=\"btn btn-secondary\"
                data-action=\"live#action\"
                data-action-name=\"vote(direction=down)\"
            >
                <i class=\"fa fa-arrow-down\"></i>
            </button>

    </td>
</tr>", "LiveTestPage.html.twig", "C:\\wamp64\\www\\project\\crm-system\\templates\\LiveTestPage.html.twig");
    }
}
