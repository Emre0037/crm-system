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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_7ff33910b47f7fd56f3bf0def7cf116a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 2
        $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 7
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 7, $this->source); })()), "crud", [], "any", false, false, false, 7), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 7);
        // line 44
        $context["has_batch_actions"] = (twig_length_filter($this->env, (isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 44, $this->source); })())) > 0);
        // line 1
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "@EasyAdmin/crud/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        (((twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 4, $this->source); })())) > 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 4, $this->source); })())), "name", [], "any", false, false, false, 4)), "html", null, true))) : (print ("")));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("ea-index" . (((twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 5, $this->source); })())) > 0)) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 5, $this->source); })())), "name", [], "any", false, false, false, 5))) : (""))), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 10
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 11, $this->source); })()), "headContents", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 12
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 17
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 18, $this->source); })()), "bodyContents", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 19
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 24
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 25, $this->source); })()), "cssAssets", [], "any", false, false, false, 25)], false);
        echo "
    ";
        // line 26
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 26, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 26)], false);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 30
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 31, $this->source); })()), "jsAssets", [], "any", false, false, false, 31)], false);
        echo "
    ";
        // line 32
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, (isset($context["ea_field_assets"]) || array_key_exists("ea_field_assets", $context) ? $context["ea_field_assets"] : (function () { throw new RuntimeError('Variable "ea_field_assets" does not exist.', 32, $this->source); })()), "webpackEncoreAssets", [], "any", false, false, false, 32)], false);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 36
        ob_start();
        // line 37
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 37, $this->source); })()), "crud", [], "any", false, false, false, 37), "customPageTitle", [0 => "index", 1 => null, 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 37, $this->source); })()), "i18n", [], "any", false, false, false, 37), "translationParameters", [], "any", false, false, false, 37)], "method", false, false, false, 37);
        // line 38
        echo "        ";
        echo (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 38, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 39, $this->source); })()), "crud", [], "any", false, false, false, 39), "defaultPageTitle", [0 => "index", 1 => null, 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 39, $this->source); })()), "i18n", [], "any", false, false, false, 39), "translationParameters", [], "any", false, false, false, 39)], "method", false, false, false, 39), [],         // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })()))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 40
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 40, $this->source); })()), [],         // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })()))));
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 46
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 46, $this->source); })())) > 0)) {
            // line 47
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 48
            $this->displayBlock('filters', $context, $blocks);
            // line 61
            echo "        </div>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('global_actions', $context, $blocks);
        // line 71
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 49
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 49), "query", [], "any", false, true, false, 49), "all", [], "any", false, true, false, 49), "filters", [], "array", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 49), "query", [], "any", false, true, false, 49), "all", [], "any", false, true, false, 49), "filters", [], "array", false, false, false, 49), [])) : ([])));
        // line 50
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 51), "includeReferrer", [], "method", false, false, false, 51), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo (((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 51, $this->source); })())) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 52, $this->source); })()), "i18n", [], "any", false, false, false, 52), "translationParameters", [], "any", false, false, false, 52), "EasyAdminBundle"), [],         // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 52
        if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 52, $this->source); })())) {
            echo " <span class=\"action-filters-button-count\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 52, $this->source); })())), "html", null, true);
            echo ")</span>";
        }
        // line 53
        echo "                    </a>
                    ";
        // line 54
        if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 55), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 59
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 65
        echo "        <div class=\"global-actions\">
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 67
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 67), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 72
        echo "        ";
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "            <div class=\"batch-actions d-none\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batch_actions"]) || array_key_exists("batch_actions", $context) ? $context["batch_actions"] : (function () { throw new RuntimeError('Variable "batch_actions" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 75
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 75), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </div>
        ";
        }
        // line 79
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 83
        echo "    ";
        // line 84
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "get", [0 => "sort"], "method", false, false, false, 84)));
        // line 85
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "get", [0 => "sort"], "method", false, false, false, 85));
        // line 86
        echo "    ";
        $context["some_results_are_hidden"] = twig_array_reduce($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 86, $this->source); })()), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 86, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "isAccessible", [], "any", false, false, false, 86)); }, false);
        // line 87
        echo "    ";
        $context["has_footer"] = (twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 87, $this->source); })())) != 0);
        // line 88
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 88, $this->source); })()), "crud", [], "any", false, false, false, 88), "isSearchEnabled", [], "any", false, false, false, 88);
        // line 89
        echo "    ";
        $context["has_filters"] = (twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 89, $this->source); })())) > 0);
        // line 90
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 90, $this->source); })()));
        // line 91
        echo "
    <table class=\"table datagrid ";
        // line 92
        echo ((twig_test_empty((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 92, $this->source); })()))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 93
        if (((isset($context["num_results"]) || array_key_exists("num_results", $context) ? $context["num_results"] : (function () { throw new RuntimeError('Variable "num_results" does not exist.', 93, $this->source); })()) > 0)) {
            // line 94
            echo "            <thead>
            ";
            // line 95
            $this->displayBlock('table_head', $context, $blocks);
            // line 128
            echo "            </thead>
        ";
        }
        // line 130
        echo "
        <tbody>
        ";
        // line 132
        $this->displayBlock('table_body', $context, $blocks);
        // line 212
        echo "        </tbody>

        <tfoot>
        ";
        // line 215
        $this->displayBlock('table_footer', $context, $blocks);
        // line 217
        echo "        </tfoot>
    </table>

    ";
        // line 220
        if ((twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 220, $this->source); })())) > 0)) {
            // line 221
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 222
            $this->displayBlock('paginator', $context, $blocks);
            // line 225
            echo "        </div>
    ";
        }
        // line 227
        echo "
    ";
        // line 228
        $this->displayBlock('delete_form', $context, $blocks);
        // line 231
        echo "
    ";
        // line 232
        if ((isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 232, $this->source); })())) {
            // line 233
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 235
        echo "
    ";
        // line 236
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 236, $this->source); })())) {
            // line 237
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 96
        echo "                <tr>
                    ";
        // line 97
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 104
        echo "
                    ";
        // line 105
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 106
        echo "                    ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 107
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 107, $this->source); })())), "fields", [], "any", true, true, false, 107) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 107, $this->source); })())), "fields", [], "any", false, false, false, 107)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 107, $this->source); })())), "fields", [], "any", false, false, false, 107)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 108
            echo "                        ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 108, $this->source); })()), "search", [], "any", false, false, false, 108), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 108)], "method", false, false, false, 108);
            // line 109
            echo "                        ";
            $context["next_sort_direction"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 109, $this->source); })())) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 109, $this->source); })()), "search", [], "any", false, false, false, 109), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 109)], "method", false, false, false, 109) == (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 109, $this->source); })()))) ? ((isset($context["ea_sort_asc"]) || array_key_exists("ea_sort_asc", $context) ? $context["ea_sort_asc"] : (function () { throw new RuntimeError('Variable "ea_sort_asc" does not exist.', 109, $this->source); })())) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 109, $this->source); })())))) : ((isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 109, $this->source); })())));
            // line 110
            echo "                        ";
            $context["column_icon"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 110, $this->source); })())) ? (((((isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 110, $this->source); })()) == (isset($context["ea_sort_desc"]) || array_key_exists("ea_sort_desc", $context) ? $context["ea_sort_desc"] : (function () { throw new RuntimeError('Variable "ea_sort_desc" does not exist.', 110, $this->source); })()))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 111
            echo "
                        <th class=\"";
            // line 112
            echo (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 112, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 112)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 112), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_0 = (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 112, $this->source); })())) && is_string($__internal_compile_1 = "field-") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 112), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 112, $this->source); })()), "i18n", [], "any", false, false, false, 112), "textDirection", [], "any", false, false, false, 112), "html", null, true);
            echo "\">
                            ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 113)) {
                // line 114
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 114) => (isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 114, $this->source); })())]]), "includeReferrer", [], "method", false, false, false, 114), "html", null, true);
                echo "\">
                                    ";
                // line 115
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 115), [],                 // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })()));
                // line 115
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["column_icon"]) || array_key_exists("column_icon", $context) ? $context["column_icon"] : (function () { throw new RuntimeError('Variable "column_icon" does not exist.', 115, $this->source); })()), "html", null, true);
                echo "\"></i>
                                </a>
                            ";
            } else {
                // line 118
                echo "                                <span>";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 118), [],                 // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })()));
                // line 118
                echo "</span>
                            ";
            }
            // line 120
            echo "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
                    <th class=\"";
        // line 123
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 123, $this->source); })()), "crud", [], "any", false, false, false, 123), "showEntityActionsAsDropdown", [], "any", false, false, false, 123)) ? ("actions-as-dropdown-table-head") : (""));
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 123, $this->source); })()), "i18n", [], "any", false, false, false, 123), "textDirection", [], "any", false, false, false, 123), "html", null, true);
        echo "\">
                        <span class=\"sr-only\">";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 124, $this->source); })()), "i18n", [], "any", false, false, false, 124), "translationParameters", [], "any", false, false, false, 124), "EasyAdminBundle"), [],         // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 124
        echo "</span>
                    </th>
                </tr>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 133
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 133, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 134
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 134)) {
                // line 135
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 135), "html", null, true);
                echo "\">
                        ";
                // line 136
                if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 136, $this->source); })())) {
                    // line 137
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 139), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 143
                echo "
                        ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 144));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 145
                    echo "                            <td data-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 145), [],                     // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })())), "html_attr");
                    // line 145
                    echo "\" class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 145) == (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 145, $this->source); })()))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 145), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 145), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 145, $this->source); })()), "i18n", [], "any", false, false, false, 145), "textDirection", [], "any", false, false, false, 145), "html", null, true);
                    echo "\">
                                ";
                    // line 146
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 146), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "
                        ";
                // line 150
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 178
                echo "                    </tr>

                ";
            }
            // line 181
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 182
            echo "                ";
            $this->displayBlock('table_body_empty', $context, $blocks);
            // line 202
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "
            ";
        // line 204
        if ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 204, $this->source); })())) {
            // line 205
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 211
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 150
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 151
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 151, $this->source); })()), "crud", [], "any", false, false, false, 151), "showEntityActionsAsDropdown", [], "any", false, false, false, 151)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 152, $this->source); })()), "actions", [], "any", false, false, false, 152), "count", [], "any", false, false, false, 152) > 0)) {
            // line 153
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 153, $this->source); })()), "crud", [], "any", false, false, false, 153), "showEntityActionsAsDropdown", [], "any", false, false, false, 153)) {
                // line 154
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 157
                echo "                                                ";
                // line 158
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 164, $this->source); })()), "actions", [], "any", false, false, false, 164));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 165
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 165), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 165, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 165, $this->source); })()), "crud", [], "any", false, false, false, 165), "showEntityActionsAsDropdown", [], "any", false, false, false, 165)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                echo "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 170
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 170, $this->source); })()), "actions", [], "any", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 171
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 171), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 171, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 171, $this->source); })()), "crud", [], "any", false, false, false, 171), "showEntityActionsAsDropdown", [], "any", false, false, false, 171)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                                        
                                    ";
            }
            // line 175
            echo "                                ";
        }
        // line 176
        echo "                            </td>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 182
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body_empty"));

        // line 183
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 14));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 184
            echo "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 193
            if ((3 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 193))) {
                // line 194
                echo "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 196
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 196, $this->source); })()), "i18n", [], "any", false, false, false, 196), "translationParameters", [], "any", false, false, false, 196), "EasyAdminBundle"), [],                 // line 2
(isset($context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"]) || array_key_exists("__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223", $context) ? $context["__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223"] : (function () { throw new RuntimeError('Variable "__internal_c170acb0bc5fa8fe31c08955c18b0f3d1fc1f464631ef0cbbef5e444acd2e223" does not exist.', 2, $this->source); })())), "html", null, true);
                // line 196
                echo "
                                </td>
                            </tr>
                        ";
            }
            // line 200
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 215
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_footer"));

        // line 216
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 223
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 223, $this->source); })()), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 223), ["render_detailed_pagination" =>  !(isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 223, $this->source); })())]);
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 228
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 229
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1046 => 229,  1036 => 228,  1023 => 223,  1013 => 222,  1003 => 216,  993 => 215,  983 => 201,  969 => 200,  963 => 196,  961 => 2,  960 => 196,  956 => 194,  954 => 193,  943 => 184,  925 => 183,  915 => 182,  904 => 176,  901 => 175,  897 => 173,  888 => 171,  883 => 170,  878 => 167,  869 => 165,  865 => 164,  857 => 158,  855 => 157,  851 => 154,  848 => 153,  846 => 152,  841 => 151,  831 => 150,  821 => 211,  814 => 207,  810 => 205,  808 => 204,  805 => 203,  799 => 202,  796 => 182,  783 => 181,  778 => 178,  776 => 150,  773 => 149,  764 => 146,  753 => 145,  751 => 2,  749 => 145,  745 => 144,  742 => 143,  735 => 139,  731 => 137,  729 => 136,  724 => 135,  721 => 134,  702 => 133,  692 => 132,  679 => 124,  677 => 2,  676 => 124,  670 => 123,  667 => 122,  660 => 120,  656 => 118,  654 => 2,  652 => 118,  645 => 115,  643 => 2,  642 => 115,  637 => 114,  635 => 113,  623 => 112,  620 => 111,  617 => 110,  614 => 109,  611 => 108,  606 => 107,  603 => 106,  601 => 105,  598 => 104,  590 => 98,  588 => 97,  585 => 96,  575 => 95,  561 => 237,  559 => 236,  556 => 235,  550 => 233,  548 => 232,  545 => 231,  543 => 228,  540 => 227,  536 => 225,  534 => 222,  531 => 221,  529 => 220,  524 => 217,  522 => 215,  517 => 212,  515 => 132,  511 => 130,  507 => 128,  505 => 95,  502 => 94,  500 => 93,  496 => 92,  493 => 91,  490 => 90,  487 => 89,  484 => 88,  481 => 87,  478 => 86,  475 => 85,  472 => 84,  470 => 83,  460 => 82,  450 => 79,  446 => 77,  437 => 75,  433 => 74,  430 => 73,  427 => 72,  417 => 71,  406 => 69,  397 => 67,  393 => 66,  390 => 65,  380 => 64,  369 => 59,  361 => 55,  359 => 54,  356 => 53,  350 => 52,  348 => 2,  347 => 52,  341 => 51,  338 => 50,  335 => 49,  325 => 48,  314 => 71,  312 => 64,  309 => 63,  305 => 61,  303 => 48,  300 => 47,  297 => 46,  287 => 45,  277 => 36,  274 => 2,  273 => 40,  272 => 2,  271 => 39,  269 => 38,  267 => 37,  265 => 36,  255 => 35,  243 => 32,  239 => 31,  234 => 30,  224 => 29,  212 => 26,  208 => 25,  203 => 24,  193 => 23,  176 => 19,  172 => 18,  167 => 17,  157 => 16,  140 => 12,  136 => 11,  131 => 10,  121 => 9,  102 => 5,  83 => 4,  72 => 1,  70 => 44,  68 => 7,  66 => 2,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}
{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'ea-index' ~ (entities|length > 0 ? ' ea-index-' ~ entities|first.name : '') %}

{% set ea_field_assets = ea.crud.fieldAssets(constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Crud::PAGE_INDEX')) %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in ea_field_assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea_field_assets.cssAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea_field_assets.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea_field_assets.jsAssets }, with_context = false) }}
    {{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea_field_assets.webpackEncoreAssets }, with_context = false) }}
{% endblock %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set custom_page_title = ea.crud.customPageTitle('index', null, ea.i18n.translationParameters) %}
        {{ custom_page_title is null
            ? ea.crud.defaultPageTitle('index', null, ea.i18n.translationParameters)|trans|raw
            : custom_page_title|trans|raw }}
    {%- endapply -%}
{% endblock %}

{% set has_batch_actions = batch_actions|length > 0 %}
{% block page_actions %}
    {% if filters|length > 0 %}
        <div class=\"datagrid-filters\">
            {% block filters %}
                {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"{{ ea_url().setAction('renderFilters').includeReferrer() }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled {{ applied_filters ? 'action-filters-applied' }}\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> {{ t('filter.title', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}{% if applied_filters %} <span class=\"action-filters-button-count\">({{ applied_filters|length }})</span>{% endif %}
                    </a>
                    {% if applied_filters %}
                        <a href=\"{{ ea_url().unset('filters') }}\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    {% endif %}
                </div>
            {% endblock filters %}
        </div>
    {% endif %}

    {% block global_actions %}
        <div class=\"global-actions\">
            {% for action in global_actions %}
                {{ include(action.templatePath, { action: action }, with_context = false) }}
            {% endfor %}
        </div>
    {% endblock global_actions %}
    {% block batch_actions %}
        {% if has_batch_actions %}
            <div class=\"batch-actions d-none\">
                {% for action in batch_actions %}
                    {{ include(action.templatePath, { action: action }, with_context = false) }}
                {% endfor %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock page_actions %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_field_name = app.request.get('sort')|keys|first %}
    {% set sort_order = app.request.get('sort')|first %}
    {% set some_results_are_hidden = entities|reduce((some_results_are_hidden, entity) => some_results_are_hidden or not entity.isAccessible, false) %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set num_results = entities|length %}

    <table class=\"table datagrid {{ entities is empty ? 'datagrid-empty' }}\">
        {% if num_results > 0 %}
            <thead>
            {% block table_head %}
                <tr>
                    {% if has_batch_actions %}
                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    {% endif %}

                    {% set ea_sort_asc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::ASC') %}
                    {% set ea_sort_desc = constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Config\\\\Option\\\\SortOrder::DESC') %}
                    {% for field in entities|first.fields ?? [] %}
                        {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                        {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == ea_sort_desc ? ea_sort_asc : ea_sort_desc) : ea_sort_desc %}
                        {% set column_icon = is_sorting_field ? (next_sort_direction == ea_sort_desc ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                        <th class=\"{{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} header-for-{{ field.cssClass|split(' ')|filter(class => class starts with 'field-')|join('') }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                            {% if field.isSortable %}
                                <a href=\"{{ ea_url({ page: 1, sort: { (field.property): next_sort_direction } }).includeReferrer() }}\">
                                    {{ field.label|trans|raw }} <i class=\"fa fa-fw {{ column_icon }}\"></i>
                                </a>
                            {% else %}
                                <span>{{ field.label|trans|raw }}</span>
                            {% endif %}
                        </th>
                    {% endfor %}

                    <th class=\"{{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown-table-head' }}\" dir=\"{{ ea.i18n.textDirection }}\">
                        <span class=\"sr-only\">{{ t('action.entity_actions', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}</span>
                    </th>
                </tr>
            {% endblock table_head %}
            </thead>
        {% endif %}

        <tbody>
        {% block table_body %}
            {% for entity in entities %}
                {% if entity.isAccessible %}
                    <tr data-id=\"{{ entity.primaryKeyValueAsString }}\">
                        {% if has_batch_actions %}
                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"{{ entity.primaryKeyValue }}\">
                                </div>
                            </td>
                        {% endif %}

                        {% for field in entity.fields %}
                            <td data-label=\"{{ field.label|trans|e('html_attr') }}\" class=\"{{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
                            </td>
                        {% endfor %}

                        {% block entity_actions %}
                            <td class=\"actions {{ ea.crud.showEntityActionsAsDropdown ? 'actions-as-dropdown' }}\">
                                {% if entity.actions.count > 0 %}
                                    {% if ea.crud.showEntityActionsAsDropdown %}
                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                {# don't use FontAwesome 'fa-ellipsis-h' icon here because it doesn't look good #}
                                                {# this icon is 'dots-horizontal' icon from https://heroicons.com/ #}
                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                {% for action in entity.actions %}
                                                    {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                {% endfor %}
                                            </div>
                                        </div>
                                    {% else %}
                                        {% for action in entity.actions %}
                                            {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                        {% endfor %}
                                        
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endblock entity_actions %}
                    </tr>

                {% endif %}
            {% else %}
                {% block table_body_empty %}
                    {% for i in 1..14 %}
                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        {% if 3 == loop.index %}
                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    {{ t('datagrid.no_results', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}
                                </td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                {% endblock table_body_empty %}
            {% endfor %}

            {% if some_results_are_hidden %}
                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                    </td>
                </tr>
            {% endif %}
        {% endblock table_body %}
        </tbody>

        <tfoot>
        {% block table_footer %}
        {% endblock table_footer %}
        </tfoot>
    </table>

    {% if entities|length > 0 %}
        <div class=\"content-panel-footer without-padding without-border\">
            {% block paginator %}
                {{ include(ea.templatePath('crud/paginator'), { render_detailed_pagination: not some_results_are_hidden }) }}
            {% endblock paginator %}
        </div>
    {% endif %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context = false) }}
    {% endblock delete_form %}

    {% if has_filters %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}

    {% if has_batch_actions %}
        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context = false) }}
    {% endif %}
{% endblock main %}", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\project\\crm-system\\templates\\bundles\\EasyAdminBundle\\crud\\index.html.twig");
    }
}
