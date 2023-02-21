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

/* conversation/groupinfo.html.twig */
class __TwigTemplate_5d47c8c4190a0c7e362edae4079a2241 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/groupinfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/groupinfo.html.twig"));

        // line 2
        $context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-turbo=\"false\">
\t<head>
\t\t";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
\t\t";
        // line 15
        ob_start();
        // line 16
        echo "\t\t";
        $this->displayBlock('page_title', $context, $blocks);
        // line 19
        echo "\t\t";
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "\t\t<title>";
        echo twig_striptags((isset($context["page_title_block_output"]) || array_key_exists("page_title_block_output", $context) ? $context["page_title_block_output"] : (function () { throw new RuntimeError('Variable "page_title_block_output" does not exist.', 20, $this->source); })()));
        echo "</title>

\t\t";
        // line 22
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 30
        echo "
\t\t";
        // line 31
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 35
        echo "
\t\t";
        // line 36
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 39
        echo "
\t\t";
        // line 40
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 50
        echo "
\t\t";
        // line 51
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 55
        echo "
\t\t";
        // line 56
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 56, $this->source); })()), "i18n", [], "any", false, false, false, 56), "textDirection", [], "any", false, false, false, 56))) {
            // line 57
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "assets", [], "any", false, false, false, 57), "defaultAssetPackageName", [], "any", false, false, false, 57)), "html", null, true);
            echo "\">
\t\t";
        }
        // line 59
        echo "
\t\t";
        // line 60
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 65
        echo "\t</head>

\t";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 1006
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_metas"));

        // line 8
        echo "\t\t\t<meta charset=\"UTF-8\">


\t\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t\t<meta name=\"generator\" content=\"EasyAdmin\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 17
        echo "\t\t\t";
        $this->displayBlock("content_title", $context, $blocks);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 23
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 23, $this->source); })()), "assets", [], "any", false, false, false, 23), "defaultAssetPackageName", [], "any", false, false, false, 23)), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/build/admin.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/admin2.scss"), "html", null, true);
        echo "\">
\t\t\t<link href='https://fonts.googleapis.com/css?family=Noto+Emoji' rel='stylesheet'>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 32
        echo "\t\t\t";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 32), "cssAssets", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 32), "cssAssets", [], "any", false, false, false, 32)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 32), "cssAssets", [], "any", false, false, false, 32)) : ([]))], false);
        echo "
\t\t\t";
        // line 33
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "webpackEncoreAssets", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "webpackEncoreAssets", [], "any", false, false, false, 33)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "webpackEncoreAssets", [], "any", false, false, false, 33)) : ([]))], false);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 37
        echo "\t\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 37, $this->source); })()), "dashboardFaviconPath", [], "any", false, false, false, 37)), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 41
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 41, $this->source); })()), "assets", [], "any", false, false, false, 41), "defaultAssetPackageName", [], "any", false, false, false, 41)), "html", null, true);
        echo "\"></script>

\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://johannburkard.de/resources/Johann/jquery.highlight-4.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js\"></script>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 52
        echo "\t\t\t";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 52), "jsAssets", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 52), "jsAssets", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 52), "jsAssets", [], "any", false, false, false, 52)) : ([]))], false);
        echo "
\t\t\t";
        // line 53
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 53), "webpackEncoreAssets", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 53), "webpackEncoreAssets", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 53), "webpackEncoreAssets", [], "any", false, false, false, 53)) : ([]))], false);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 61
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 61), "headContents", [], "any", true, true, false, 61) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 61), "headContents", [], "any", false, false, false, 61)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 61), "headContents", [], "any", false, false, false, 61)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 62
            echo "\t\t\t\t";
            echo $context["htmlContent"];
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "\t\t<body class=\"content1\" ";
        $this->displayBlock('body_attr', $context, $blocks);
        echo " id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\" data-ea-content-width=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 68), "contentWidth", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 68), "contentWidth", [], "any", false, false, false, 68)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 68), "contentWidth", [], "any", false, false, false, 68)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 68)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 68)) : ("normal")))), "html", null, true);
        echo "\" data-ea-sidebar-width=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 68), "sidebarWidth", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 68), "sidebarWidth", [], "any", false, false, false, 68)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 68), "sidebarWidth", [], "any", false, false, false, 68)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 68) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 68)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 68)) : ("normal")))), "html", null, true);
        echo "\" data-ea-dark-scheme-is-enabled=\"";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 68, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 68)) ? ("true") : ("false"));
        echo "\">
\t\t\t";
        // line 69
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 72
        echo "\t\t\t";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 75
        echo "
\t\t\t";
        // line 76
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 1006
        $this->displayBlock('body_javascript', $context, $blocks);
        $this->displayBlock('configured_body_contents', $context, $blocks);
        echo "</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_body_attr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attr"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 70
        echo "\t\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 70, $this->source); })()), "assets", [], "any", false, false, false, 70), "defaultAssetPackageName", [], "any", false, false, false, 70)), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        // line 73
        echo "\t\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 73, $this->source); })()), "assets", [], "any", false, false, false, 73), "defaultAssetPackageName", [], "any", false, false, false, 73)), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 77
        echo "\t\t\t\t";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 80
        echo "
\t\t\t\t";
        // line 81
        ob_start();
        // line 82
        echo "\t\t\t\t";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 82, $this->source); })()), "userMenu", [], "any", false, false, false, 82), "avatarUrl", [], "any", false, false, false, 82))) {
            // line 83
            echo "\t\t\t\t\t<span class=\"user-avatar\">
\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t<i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t<i class=\"user-avatar-icon-foreground ";
            // line 86
            echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t";
        } else {
            // line 90
            echo "\t\t\t\t\t<img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 90, $this->source); })()), "userMenu", [], "any", false, false, false, 90), "avatarUrl", [], "any", false, false, false, 90), "html", null, true);
            echo "\"/>
\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo "
\t\t\t\t";
        // line 94
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 95
        echo "
\t\t\t\t";
        // line 96
        ob_start();
        // line 97
        echo "\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t\t\t<div>";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "\t\t\t\t\t\t\t\t<span class=\"user-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t<a class=\"inline-block navtext u-text-black-900 no-underline hover-2 py-2 px-4\" href=\"/";
        // line 105
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105)) ? ("public/logout") : ("public/login"));
        echo "\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\t";
        // line 106
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) ? ("Logout") : ("Login"));
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 112
        $this->displayBlock('user_menu', $context, $blocks);
        // line 131
        echo "\t\t\t\t</ul>
\t\t\t\t";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo "
\t\t\t\t";
        // line 134
        ob_start();
        // line 135
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 135, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 135) || twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 135, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 135))) {
            // line 136
            echo "\t\t\t\t\t<div class=\"dropdown dropdown-settings\">
\t\t\t\t\t\t<a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-gear\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t";
            // line 142
            if (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 142, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 142)) {
                // line 143
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-header dropdown-locales-label\">";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 147, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 149
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", [0 => "_locale", 1 => twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 149)], "method", false, false, false, 149), "html", null, true);
                    echo "\" class=\"dropdown-item";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "locale", [], "any", false, false, false, 149) == twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 149))) {
                        echo " active";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 150
                    if (twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 150)) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 151), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 153), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeDto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "\t\t\t\t\t\t\t";
            }
            // line 158
            echo "
\t\t\t\t\t\t\t";
            // line 159
            if (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 159, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 159)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 160, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 160)) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-header dropdown-appearance-label\">";
                // line 165
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-sun\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-moon\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t";
        $context["settings_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t";
        // line 192
        $this->displayBlock('wrapper', $context, $blocks);
        // line 1006
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 78
        echo "\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 78, $this->source); })()), "templatePath", [0 => "flash_messages"], "method", false, false, false, 78));
        echo "
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 113
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 113, $this->source); })()), "userMenu", [], "any", false, false, false, 113), "items", [], "any", false, false, false, 113)) > 0)) {
            // line 114
            echo "\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 115, $this->source); })()), "userMenu", [], "any", false, false, false, 115), "items", [], "any", false, false, false, 115));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 116
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                // line 117
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 117) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 117))) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 119
$context["item"], "isMenuSection", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 120), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 120), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 120), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 120), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 121
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 121))) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 122), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 124), [],                     // line 2
(isset($context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"]) || array_key_exists("__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715", $context) ? $context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"] : (function () { throw new RuntimeError('Variable "__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715" does not exist.', 2, $this->source); })())), "html", null, true);
                    // line 124
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 192
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 193
        echo "\t\t\t\t\t\t<div class=\"responsive-header\">
\t\t\t\t\t\t\t";
        // line 194
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 224
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t\t\t";
        // line 228
        $this->displayBlock('sidebar', $context, $blocks);
        // line 252
        echo "
\t\t\t\t\t\t\t\t<div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<section class=\"main-content\">
\t\t\t\t\t\t\t";
        // line 258
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 258, $this->source); })()), "crud", [], "any", false, false, false, 258)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 258, $this->source); })()), "crud", [], "any", false, false, false, 258), "isSearchEnabled", [], "any", false, false, false, 258));
        // line 259
        echo "\t\t\t\t\t\t\t<aside class=\"content-top ";
        echo (((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 259, $this->source); })())) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 260
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 334
        echo "\t\t\t\t\t\t\t</aside>

\t\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t\t";
        // line 337
        $this->displayBlock('content', $context, $blocks);
        // line 997
        echo "
\t\t\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</body>
\t\t\t\t\t</html>
\t\t\t\t</body>
\t\t\t</html>
\t\t</body>
\t</html>
</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 194
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 195
        echo "\t\t\t\t\t\t\t\t<button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-bars\"></i>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
\t\t\t\t\t\t\t\t\t";
        // line 200
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 205
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown user-menu-wrapper ";
        // line 207
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 207, $this->source); })()))) ? ("user-is-impersonated") : (""));
        echo " ms-auto\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\tclass=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t";
        // line 212
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 212, $this->source); })()), "userMenu", [], "any", false, false, false, 212), "avatarDisplayed", [], "any", false, false, false, 212)) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 213, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 215, $this->source); })()), "user", [], "any", false, false, false, 215))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 219, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 222, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 200
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 201
        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 201, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 201)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 201, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 201));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 202
        echo twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 202, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 202);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 228
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 229
        echo "\t\t\t\t\t\t\t\t\t<header class=\"main-header\">
\t\t\t\t\t\t\t\t\t\t";
        // line 230
        $this->displayBlock('header', $context, $blocks);
        // line 246
        echo "\t\t\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t\t\t";
        // line 248
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 251
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 230
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 231
        echo "\t\t\t\t\t\t\t\t\t\t\t<nav class=\"navbar\" role=\"navigation\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 232
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 244
        echo "\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 232
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        // line 233
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 234
        $this->displayBlock('header_logo', $context, $blocks);
        // line 242
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 235
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 235, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 235)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 235, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 235));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-custom\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo-emre1.png"), "html", null, true);
        echo "\" class=\"logo-emre\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 236, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 236);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-compact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 248
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 249
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 249, $this->source); })()), "templatePath", [0 => "main_menu"], "method", false, false, false, 249));
        echo "
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 260
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 261
        echo "\t\t\t\t\t\t\t\t\t<div class=\"content-search\">
\t\t\t\t\t\t\t\t\t\t";
        // line 262
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 262, $this->source); })())) {
            // line 263
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('search', $context, $blocks);
            // line 313
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 314
        echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-custom-menu\">

\t\t\t\t\t\t\t\t\t\t";
        // line 318
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 330
        echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
        // line 332
        echo twig_escape_filter($this->env, (isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 332, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 263
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 264
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-action-search\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 266
        $this->displayBlock('search_form', $context, $blocks);
        // line 311
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 266
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 267
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 288
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudAction\" value=\"index\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "query", [], "any", false, false, false, 290), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 290), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "query", [], "any", false, false, false, 291), "get", [0 => "menuIndex"], "method", false, false, false, 291), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 292, $this->source); })()), "request", [], "any", false, false, false, 292), "query", [], "any", false, false, false, 292), "get", [0 => "submenuIndex"], "method", false, false, false, 292), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search content-search-icon\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"content-search-label\" data-value=\"";
        // line 299
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "request", [], "any", false, false, false, 299), "get", [0 => "query"], "method", false, false, false, 299), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control ";
        // line 300
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "request", [], "any", false, false, false, 300), "get", [0 => "query"], "method", false, false, false, 300))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 300), "get", [0 => "query"], "method", true, true, false, 300) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 300), "get", [0 => "query"], "method", false, false, false, 300)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 300), "get", [0 => "query"], "method", false, false, false, 300), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 300, $this->source); })()), "i18n", [], "any", false, false, false, 300), "translationParameters", [], "any", false, false, false, 300), "EasyAdminBundle"), [],         // line 2
(isset($context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"]) || array_key_exists("__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715", $context) ? $context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"] : (function () { throw new RuntimeError('Variable "__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 300
        echo "\" spellcheck=\"false\" autocorrect=\"off\" oninput=\"this.parentNode.dataset.value=this.value\" ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 300, $this->source); })()), "crud", [], "any", false, false, false, 300), "currentAction", [], "any", false, false, false, 300) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 300, $this->source); })()), "crud", [], "any", false, false, false, 300), "autofocusSearch", [], "any", false, false, false, 300) == true))) {
            echo " autofocus=\"autofocus\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 303
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "request", [], "any", false, false, false, 303), "get", [0 => "query"], "method", false, false, false, 303)) {
            // line 304
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 304), "html", null, true);
            echo "\" class=\"content-search-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 308
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 267
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 268
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 268, $this->source); })()), "search", [], "any", false, false, false, 268), "appliedFilters", [], "any", false, false, false, 268));
        foreach ($context['_seq'] as $context["field"] => $context["array"]) {
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["array"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_test_iterable($context["value"])) {
                    // line 272
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                        // line 273
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 274
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_test_iterable($context["iterValue"])) {
                            // line 275
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                            foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                // line 276
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[";
                                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["subIndex"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["subIterValue"], "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 278
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 279
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[";
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "][";
                            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                            echo "]\" value=\"";
                            echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 281
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 285
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 318
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 319
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 319, $this->source); })()))) ? ("user-is-impersonated") : (""));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 321, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 322
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 322, $this->source); })()), "userMenu", [], "any", false, false, false, 322), "isNameDisplayed", [], "any", false, false, false, 322)) {
            // line 323
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 323, $this->source); })()), "userMenu", [], "any", false, false, false, 323), "name", [], "any", false, false, false, 323), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 325
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 327, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 337
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 338
        echo "\t\t\t\t\t\t\t\t\t<article class=\"content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 339
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 415
        echo "

\t\t\t\t\t\t\t\t<!-- MDB -->


\t\t\t\t\t\t\t\t";
        // line 427
        echo "\t\t\t\t\t\t\t\t<div class=\"chat-box2 test5\">

\t\t\t\t\t\t\t\t\t<div id=\"content \" class=\"container py-5\">

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 chatbox1 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body2\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIncoming messages
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 445
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 446
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter($this->env, (isset($context["data2"]) || array_key_exists("data2", $context) ? $context["data2"] : (function () { throw new RuntimeError('Variable "data2" does not exist.', 446, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 446, $this->source); })()), "created_at", [], "any", false, false, false, 446) < twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 446, $this->source); })()), "created_at", [], "any", false, false, false, 446)); }), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 447
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 447), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 447, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 447) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 447, $this->source); })()), "user", [], "any", false, false, false, 447), "id", [], "any", false, false, false, 447)))) {
                // line 448
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 449
                if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 449) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "id", [], "any", false, false, false, 449)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 449)))) {
                    // line 450
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel flex-row\"> <img src=\"";
                    // line 451
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 451), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 453
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 453), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 453), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 454
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 454), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 457
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 457), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small timeago text-muted mb-1\">";
                    // line 461
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 461)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 465
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 466
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFriends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 473
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data3"]) || array_key_exists("data3", $context) ? $context["data3"] : (function () { throw new RuntimeError('Variable "data3" does not exist.', 474, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 475
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 476
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 476), (isset($context["conversationgroupIds"]) || array_key_exists("conversationgroupIds", $context) ? $context["conversationgroupIds"] : (function () { throw new RuntimeError('Variable "conversationgroupIds" does not exist.', 476, $this->source); })()))) {
                // line 477
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 477), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 477, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 477) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 477, $this->source); })()), "user", [], "any", false, false, false, 477), "id", [], "any", false, false, false, 477)))) {
                    // line 478
                    echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 481
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel friendssection flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 483
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 483), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 485
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 485), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 485), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 486
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 486), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 489
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 489), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 490
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 490), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small  text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
<p class=\"text-info\">View profiel<a href=\"";
                    // line 498
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 498), "idconversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 498)]), "html", null, true);
                    echo "\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
                    // line 502
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_group", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "user", [], "any", false, false, false, 502), "id", [], "any", false, false, false, 502), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 502, $this->source); })())]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 509
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 510
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGroups
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data5"]) || array_key_exists("data5", $context) ? $context["data5"] : (function () { throw new RuntimeError('Variable "data5" does not exist.', 514, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 515
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 517
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 517), (isset($context["conversationgroupIds"]) || array_key_exists("conversationgroupIds", $context) ? $context["conversationgroupIds"] : (function () { throw new RuntimeError('Variable "conversationgroupIds" does not exist.', 517, $this->source); })()))) {
                // line 518
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 518), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 518, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 518) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 518, $this->source); })()), "user", [], "any", false, false, false, 518), "id", [], "any", false, false, false, 518)))) {
                    // line 519
                    echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 522
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/jpeg;base64,";
                    // line 525
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "image", [], "any", false, false, false, 525), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 527
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 527, $this->source); })()), "user", [], "any", false, false, false, 527), "id", [], "any", false, false, false, 527), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 527), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 528
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_name", [], "any", false, false, false, 528), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 531
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_disc", [], "any", false, false, false, 531), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 539
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.group_info", ["idConversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 539)]), "html", null, true);
                    echo "\"><p>Group info
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"deletegroup/";
                    // line 544
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 544, $this->source); })()), "user", [], "any", false, false, false, 544), "id", [], "any", false, false, false, 544), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 544), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 551
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 552
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 553
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 557
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 568
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 569
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        echo "<div class=\"headtextgroupinfo\">Group Info </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 chatbox3 col-xl-8\"> <div class=\"groupbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"gobackbutton\" onclick=\"goBack()\">Go Back</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data5"]) || array_key_exists("data5", $context) ? $context["data5"] : (function () { throw new RuntimeError('Variable "data5" does not exist.', 573, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 574
            if ((twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 574) == (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 574, $this->source); })()))) {
                // line 583
                echo "<form method=\"POST\" enctype=\"multipart/form-data\">
  <a href=\"#\">
  <p class=\"edit-text\"> </p> <i class=\" edit-icon3 fa-solid fa-pen-to-square\" id=\"edit-icon3\"></i>
  </a>
  <div class=\"containerimage2\">
    <img src=\"data:image/jpeg;base64,";
                // line 588
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "image", [], "any", false, false, false, 588), "html", null, true);
                echo "\" alt=\"avatar\" class=\"rounded-circle  mx-auto  align-self-center me-3 shadow-1-strong\" width=\"100\">
    <div class=\"overlayimage2 rounded-circle  mx-auto  align-self-center me-3 shadow-1-strong pt-4\" width=\"100\">
      <label for=\"file-upload\">
        <div class=\"texthover\">
          <i class=\"fa-solid fa-camera cameraicon\"></i><br>Change profile image</div>
      </label>
      <input type=\"file\" id=\"file-upload\" name=\"file-upload\" style=\"display:none;\" value=\"";
                // line 594
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "image", [], "any", false, false, false, 594), "html", null, true);
                echo "\">
    </div>
  </div>
  <div class=\"pt-3 groupboxtext\">
    <a href=\"http://crm-system:2525/public/messages/";
                // line 598
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 598, $this->source); })()), "user", [], "any", false, false, false, 598), "id", [], "any", false, false, false, 598), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 598), "html", null, true);
                echo "\">
      <span class=\"name-display\">
        <p class=\"fw-bold mb-0\">";
                // line 600
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_name", [], "any", false, false, false, 600), "html", null, true);
                echo "</p>
      </span>
    </a>
    <span class=\"form-display\" style=\"display:none;\">
      <div class=\"field field_v2\">
        <label for=\"groupname\" class=\"ha-screen-reader\"></label>
        <input id=\"groupname\" name=\"groupname\" class=\"field__input\" placeholder=\"";
                // line 606
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_name", [], "any", false, false, false, 606), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_name", [], "any", false, false, false, 606), "html", null, true);
                echo "\">
        <span class=\"field__label-wrap\" aria-hidden=\"true\">
          <span class=\"field__label\">new group name</span>
        </span>
      </div>
    </span>
    <span class=\"name-display\">";
                // line 612
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_disc", [], "any", false, false, false, 612), "html", null, true);
                echo "</span>
    <span class=\"form-display\" style=\"display:none;\">
      <div class=\"field field_v2\">
        <label for=\"groupdisc\" class=\"ha-screen-reader\"></label>
        <input id=\"groupdisc\" name=\"groupdisc\" class=\"field__input\" placeholder=\"";
                // line 616
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_disc", [], "any", false, false, false, 616), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_disc", [], "any", false, false, false, 616), "html", null, true);
                echo "\">
        <span class=\"field__label-wrap\" aria-hidden=\"true\">
          <span class=\"field__label\">new group Discription</span>
        </span>
      </div>
      <button type=\"submit\" class=\"submitbutton\">
\t  \t<span>Save</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" viewbox=\"0 0 29.756 29.756\" style=\"enable-background:new 0 0 29.756 29.756;\" xml:space=\"preserve\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
    </span>
  </div>
</form>



";
                // line 641
                echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 644
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "
<div class=\"groupbox2\">
\t<a href=\"#popup1\">
\t\t<p class=\"edit-text\"></p>
\t\t<i class=\" edit-icon4 fa-solid fa-user-plus\" ></i>
\t</a>
\t<span class=\"name-display2\">New user group
\t</span>

\t\t
\t



\t<p class=\"listcounter\">
\t\t";
        // line 661
        echo twig_escape_filter($this->env, (isset($context["numUsers"]) || array_key_exists("numUsers", $context) ? $context["numUsers"] : (function () { throw new RuntimeError('Variable "numUsers" does not exist.', 661, $this->source); })()), "html", null, true);
        echo "
\t\tUsers in this group</p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data3"]) || array_key_exists("data3", $context) ? $context["data3"] : (function () { throw new RuntimeError('Variable "data3" does not exist.', 666, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 667
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 667) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 667, $this->source); })()), "request", [], "any", false, false, false, 667), "requesturi", [], "any", false, false, false, 667), "/"))))) {
                // line 668
                echo "<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabels  flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 670
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 670), "html", null, true);
                echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                // line 675
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 675), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 678
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 678), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 679
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 679), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-info\">View profiel<a href=\"";
                // line 685
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 685), "idconversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 685)]), "html", null, true);
                echo "\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
                // line 689
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_Delete_Group", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 689), "idconversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 689, $this->source); })())]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 696
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 697
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
<div id=\"popup1\" class=\"overlay\">
\t\t\t<div class=\"popup-add-user\">

\t\t<div class=\"popup-header-user\" > 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"closeicon\" href=\"#\">&times;</a>
\t\t\t\t\t\t\t\t\t<div class=\"new-user-text\">Add new users\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t<div class=\"users-bluetext\">Users</div>
\t\t\t\t";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data4"]) || array_key_exists("data4", $context) ? $context["data4"] : (function () { throw new RuntimeError('Variable "data4" does not exist.', 711, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["newconv1"]) {
            // line 712
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["newconv1"], "id", [], "any", false, false, false, 712) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 712, $this->source); })()), "user", [], "any", false, false, false, 712), "id", [], "any", false, false, false, 712))) {
                // line 713
                echo "\t\t\t\t\t\t<div class=\"checkbox-wrapper-26\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 715
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "avatar", [], "any", false, false, false, 715), "html", null, true);
                echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fw-normal mb-0\">";
                // line 717
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "email", [], "any", false, false, false, 717), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t";
                // line 719
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "firstname", [], "any", false, false, false, 719), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 720
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "lastname", [], "any", false, false, false, 720), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row3\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"field[";
                // line 725
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "id", [], "any", false, false, false, 725), "html", null, true);
                echo "]\" id=\"field_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "id", [], "any", false, false, false, 725), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "id", [], "any", false, false, false, 725), "html", null, true);
                echo "\">


\t\t\t\t\t\t\t\t<label for=\"field_";
                // line 728
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["newconv1"], "id", [], "any", false, false, false, 728), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"tick_mark\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"submitbutton3\">
\t  \t\t<a  href=\"";
                // line 736
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_Add", ["userid" => twig_get_attribute($this->env, $this->source, $context["newconv1"], "id", [], "any", false, false, false, 736), "idconversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 736, $this->source); })())]), "html", null, true);
                echo "\"><span>Save</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" viewbox=\"0 0 29.756 29.756\" style=\"enable-background:new 0 0 29.756 29.756;\" xml:space=\"preserve\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t";
            }
            // line 745
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newconv1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 746
        echo "\t\t\t</div>
\t\t</div>
</div>

\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t


// classnames icons
var buttons = document.getElementsByClassName(\"fa-gear\");
var searchbutton = document.getElementsByClassName(\" fa-magnifying-glass\");
var deletebutton = document.getElementsByClassName(\" fa-trash-can\");
var editbutton = document.getElementsByClassName(\" fa-pen-to-square\");

// this is for the setting icon
for (var i = 0; i < buttons.length; i++) {
buttons[i].addEventListener(\"click\", function () {
this.classList.toggle(\"fa-spin\");
});
}
document.addEventListener(\"click\", function (event) {
var target = event.target;
var isButton = false;

for (var i = 0; i < buttons.length; i++) {
if (target == buttons[i]) {
isButton = true;
break;
}
}

if (! isButton) {
for (var i = 0; i < buttons.length; i++) {
buttons[i].classList.remove(\"fa-spin\");
}
}
});

// this is for the search icon

for (var i = 0; i < searchbutton.length; i++) {
searchbutton[i].addEventListener(\"click\", function () {
if (this.classList.contains(\"fa-beat\")) {
this.classList.remove(\"fa-beat\");
} else {
this.classList.add(\"fa-beat\");
}
});
}

// this is for the delete button
for (var i = 0; i < deletebutton.length; i++) {
deletebutton[i].addEventListener(\"click\", function () {
this.classList.toggle(\"fa-beat-fade\");
});
}
document.addEventListener(\"click\", function (event) {
var target = event.target;
var isButton = false;

for (var i = 0; i < deletebutton.length; i++) {
if (target == deletebutton[i]) {
isButton = true;
break;
}
}

if (! isButton) {
for (var i = 0; i < deletebutton.length; i++) {
deletebutton[i].classList.remove(\"fa-beat-fade\");
}
}
});
// search filter function
jQuery.fn.highlight = function (pat) {
function innerHighlight(node, pat) {
var skip = 0;
if (node.nodeType == 3) {
var pos = node.data.toUpperCase().indexOf(pat);
pos -= (node.data.substr(0, pos).toUpperCase().length - node.data.substr(0, pos).length);
if (pos >= 0) {
var spannode = document.createElement('span');
spannode.className = 'highlight';
var middlebit = node.splitText(pos);
var endbit = middlebit.splitText(pat.length);
var middleclone = middlebit.cloneNode(true);
spannode.appendChild(middleclone);
middlebit.parentNode.replaceChild(spannode, middlebit);
skip = 1;
}
} else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
for (var i = 0; i < node.childNodes.length; ++ i) {
i += innerHighlight(node.childNodes[i], pat);
}
}
return skip;
}
return this.length && pat && pat.length ? this.each(function () {
innerHighlight(this, pat.toUpperCase());
}) : this;
};

jQuery.fn.removeHighlight = function () {
return this.find(\"span.highlight\").each(function () {
this.parentNode.firstChild.nodeName;
with (this.parentNode) {
replaceChild(this.firstChild, this);
normalize();
}
}).end();
};

\$(document).ready(function () {
\$('#my-input').on('input', function () {
\$('.messagecontent').removeHighlight().highlight(\$(this).val());
});
});

// sendbutton aniamtion
gsap.registerPlugin();

document.querySelectorAll('.sendbutton').forEach(element => {

let path = element.querySelector('.btn-layer path'),
tl = gsap.timeline();

element.addEventListener('click', e => {

element.classList.add('active')

tl.to(path, {
morphSVG: 'M136,77.5h-1H4.8H4c-2.2,0-4-1.8-4-4v-47c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0C44,22.5,66,10,66,10  s3,12.5,69.1,12.5c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47C140,75.7,138.2,77.5,136,77.5z',
duration: .3,
delay: .3
}).to(path, {
morphSVG: 'M136,77.5c0,0-11.7,0-12,0c-90,0-94.2,0-94.2,0s-10.8,0-25.1,0c-0.2,0-0.8,0-0.8,0c-2.2,0-4-1.8-4-4v-47  c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0c39.1,0,61.1,0,61.1,0s3,0,69.1,0c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47  C140,75.7,138.2,77.5,136,77.5z',
duration: 1.7,
ease: 'elastic.out(1, .15)',
onComplete() {
element.classList.remove('active')
}
})
})
})
// this is for the edit button
for (var i = 0; i < editbutton.length; i++) {
  editbutton[i].addEventListener(\"click\", function() {
    if (this.classList.contains(\"fa-beat-fade\")) {
      this.classList.remove(\"fa-beat-fade\");
    } else {
      this.classList.add(\"fa-beat-fade\");
    }
  });
}

// this is for the delete users fucntion dropdown
function toggleDropdown(element) {
var dropdownContainers = document.getElementsByClassName(\"dropdown3-content\");
for (var i = 0; i < dropdownContainers.length; i++) {
dropdownContainers[i].style.display = \"none\";
}

var parent = element.parentElement;
var dropdownContainer = parent.getElementsByClassName(\"dropdown3-content\")[0];

if (dropdownContainer.style.display === \"block\") {
dropdownContainer.style.display = \"none\";
} else {
dropdownContainer.style.display = \"block\";

document.addEventListener(\"click\", function (event) {
if (! dropdownContainer.contains(event.target) && event.target !== element) {
dropdownContainer.style.display = \"none\";
}
});
}
}

//go back button
function goBack() {
  window.history.back();
}

//edit group info function
//first one
\$(document).ready(function() {
\t\$(\"#edit-icon3\").click(function() {
\t\t\$(\".name-display\").toggle();
\t\t\$(\".form-display\").toggle();
\t});
});

//second part edit
const editIcon = document.querySelector('.edit-icon3');

const section2 = document.querySelector('.groupbox2');

editIcon.addEventListener('click', () => {
  if (section2.classList.contains('move-down')) {
    section2.classList.remove('move-down');
  } else {
    section2.classList.add('move-down');
  }
});




//group create button function
let btn = document.querySelector(\".submitbutton\");

btn.addEventListener(\"click\", active);

function active() {
  btn.classList.toggle(\"is_active\");
}
//secong one
//group create button function
let btn2 = document.querySelector(\".submitbutton3\");

btn2.addEventListener(\"click\", active);

function active() {
  btn2.classList.toggle(\"is_active\");
}


\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t";
        // line 986
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 987
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 995
        echo "\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 339
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 340
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 340), "helpMessage", [], "any", true, true, false, 340) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 340), "helpMessage", [], "any", false, false, false, 340)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 340), "helpMessage", [], "any", false, false, false, 340)) : ("")));
        // line 341
        echo "\t\t\t\t\t\t\t\t\t\t\t<section class=\"content-header1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 342
        $this->displayBlock('content_header', $context, $blocks);
        // line 410
        echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</section>


\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 342
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 343
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-header-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 345
        $this->displayBlock('content_title', $context, $blocks);
        // line 346
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 348
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"logo-emre1\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo-emre1.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChatroom


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data4"]) || array_key_exists("data4", $context) ? $context["data4"] : (function () { throw new RuntimeError('Variable "data4" does not exist.', 352, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 353
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"overlay-";
            // line 354
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 354), "html", null, true);
            echo "\" class=\"overlay\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"close close-icon\" href=\"#\">&times;</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold headtext2 mb-3 \">";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 360), "html", null, true);
            echo "'s Profile
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 362), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"underline\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold  profileheadtext profiletextsection mb-0\">full name</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 372
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 373
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 373), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 374
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 374), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\" profiletextsection profileheadtext fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "emailfull", [], "any", false, false, false, 384), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon2 fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 397
        $this->displayBlock('content_help', $context, $blocks);
        // line 404
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 409
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 397
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 398
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 398, $this->source); })())) {
            // line 399
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 399, $this->source); })()), "crud", [], "any", false, false, false, 399), "helpMessage", [], "any", false, false, false, 399), [],             // line 2
(isset($context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"]) || array_key_exists("__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715", $context) ? $context["__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715"] : (function () { throw new RuntimeError('Variable "__internal_0b6735e357e0ca52e2fed3dfba97e22600b664aefc142fb3a27eb6fdb1b37715" does not exist.', 2, $this->source); })())), "html_attr");
            // line 399
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 403
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 404
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 405
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 406
        $this->displayBlock('page_actions', $context, $blocks);
        // line 407
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 406
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 987
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 988
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 989
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 989, $this->source); })()))) {
            // line 990
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"content-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 991
            echo twig_escape_filter($this->env, (isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 991, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 994
        echo "\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1006
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 1006), "bodyContents", [], "any", true, true, false, 1006) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 1006), "bodyContents", [], "any", false, false, false, 1006)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 1006), "bodyContents", [], "any", false, false, false, 1006)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            echo $context["htmlContent"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conversation/groupinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2592 => 1006,  2582 => 994,  2576 => 991,  2573 => 990,  2570 => 989,  2567 => 988,  2557 => 987,  2539 => 406,  2528 => 407,  2526 => 406,  2523 => 405,  2513 => 404,  2503 => 403,  2497 => 399,  2495 => 2,  2493 => 399,  2490 => 398,  2480 => 397,  2462 => 345,  2452 => 409,  2449 => 404,  2447 => 397,  2439 => 391,  2426 => 384,  2413 => 374,  2409 => 373,  2406 => 372,  2396 => 362,  2391 => 360,  2382 => 354,  2379 => 353,  2375 => 352,  2367 => 348,  2365 => 346,  2363 => 345,  2359 => 343,  2349 => 342,  2335 => 410,  2333 => 342,  2330 => 341,  2327 => 340,  2317 => 339,  2306 => 995,  2304 => 987,  2301 => 986,  2071 => 746,  2065 => 745,  2053 => 736,  2042 => 728,  2032 => 725,  2024 => 720,  2020 => 719,  2015 => 717,  2010 => 715,  2006 => 713,  2003 => 712,  1999 => 711,  1983 => 697,  1977 => 696,  1967 => 689,  1960 => 685,  1951 => 679,  1947 => 678,  1941 => 675,  1933 => 670,  1929 => 668,  1926 => 667,  1922 => 666,  1914 => 661,  1897 => 646,  1890 => 644,  1885 => 641,  1860 => 616,  1853 => 612,  1842 => 606,  1833 => 600,  1826 => 598,  1819 => 594,  1810 => 588,  1803 => 583,  1801 => 574,  1797 => 573,  1790 => 569,  1788 => 568,  1776 => 557,  1772 => 554,  1766 => 553,  1763 => 552,  1760 => 551,  1749 => 544,  1741 => 539,  1730 => 531,  1724 => 528,  1718 => 527,  1713 => 525,  1708 => 522,  1704 => 519,  1701 => 518,  1699 => 517,  1695 => 515,  1691 => 514,  1686 => 511,  1680 => 510,  1677 => 509,  1667 => 502,  1660 => 498,  1649 => 490,  1645 => 489,  1639 => 486,  1633 => 485,  1628 => 483,  1624 => 481,  1620 => 478,  1617 => 477,  1615 => 476,  1612 => 475,  1608 => 474,  1605 => 473,  1598 => 467,  1592 => 466,  1589 => 465,  1582 => 461,  1575 => 457,  1569 => 454,  1563 => 453,  1558 => 451,  1555 => 450,  1553 => 449,  1550 => 448,  1547 => 447,  1542 => 446,  1540 => 445,  1521 => 427,  1514 => 415,  1512 => 339,  1509 => 338,  1499 => 337,  1486 => 327,  1482 => 325,  1476 => 323,  1474 => 322,  1470 => 321,  1464 => 319,  1454 => 318,  1444 => 287,  1438 => 286,  1432 => 285,  1422 => 283,  1419 => 282,  1413 => 281,  1401 => 279,  1398 => 278,  1381 => 276,  1376 => 275,  1373 => 274,  1371 => 273,  1366 => 272,  1363 => 271,  1361 => 270,  1356 => 269,  1351 => 268,  1341 => 267,  1329 => 308,  1321 => 304,  1319 => 303,  1310 => 300,  1308 => 2,  1303 => 300,  1299 => 299,  1289 => 292,  1285 => 291,  1281 => 290,  1277 => 288,  1274 => 267,  1264 => 266,  1253 => 311,  1251 => 266,  1247 => 264,  1237 => 263,  1225 => 332,  1221 => 330,  1219 => 318,  1213 => 314,  1210 => 313,  1207 => 263,  1205 => 262,  1202 => 261,  1192 => 260,  1179 => 249,  1169 => 248,  1151 => 236,  1144 => 235,  1134 => 234,  1123 => 242,  1121 => 234,  1118 => 233,  1108 => 232,  1097 => 244,  1095 => 232,  1092 => 231,  1082 => 230,  1072 => 251,  1070 => 248,  1066 => 246,  1064 => 230,  1061 => 229,  1051 => 228,  1038 => 202,  1031 => 201,  1021 => 200,  1009 => 222,  1003 => 219,  999 => 217,  993 => 215,  987 => 213,  984 => 212,  978 => 207,  974 => 205,  972 => 200,  965 => 195,  955 => 194,  936 => 997,  934 => 337,  929 => 334,  927 => 260,  922 => 259,  920 => 258,  912 => 252,  910 => 228,  904 => 224,  902 => 194,  899 => 193,  889 => 192,  879 => 130,  876 => 129,  861 => 127,  856 => 124,  854 => 2,  852 => 124,  846 => 122,  844 => 121,  833 => 120,  831 => 119,  828 => 118,  826 => 117,  823 => 116,  806 => 115,  803 => 114,  800 => 113,  790 => 112,  777 => 78,  767 => 77,  757 => 1006,  755 => 192,  751 => 190,  748 => 189,  743 => 186,  736 => 182,  727 => 176,  718 => 170,  710 => 165,  706 => 163,  702 => 161,  699 => 160,  697 => 159,  694 => 158,  691 => 157,  680 => 153,  674 => 151,  672 => 150,  664 => 149,  661 => 148,  657 => 147,  651 => 144,  648 => 143,  646 => 142,  638 => 136,  635 => 135,  633 => 134,  630 => 133,  626 => 131,  624 => 112,  615 => 106,  611 => 105,  608 => 104,  602 => 102,  600 => 101,  595 => 99,  591 => 97,  589 => 96,  586 => 95,  584 => 94,  581 => 93,  578 => 92,  572 => 90,  565 => 86,  560 => 83,  557 => 82,  555 => 81,  552 => 80,  549 => 77,  539 => 76,  526 => 73,  516 => 72,  503 => 70,  493 => 69,  440 => 68,  428 => 1006,  426 => 76,  423 => 75,  420 => 72,  418 => 69,  403 => 68,  393 => 67,  383 => 64,  374 => 62,  369 => 61,  359 => 60,  347 => 53,  342 => 52,  332 => 51,  312 => 41,  302 => 40,  289 => 37,  279 => 36,  267 => 33,  262 => 32,  252 => 31,  237 => 25,  233 => 24,  228 => 23,  218 => 22,  205 => 17,  195 => 16,  180 => 8,  170 => 7,  159 => 1006,  157 => 67,  153 => 65,  151 => 60,  148 => 59,  142 => 57,  140 => 56,  137 => 55,  135 => 51,  132 => 50,  130 => 40,  127 => 39,  125 => 36,  122 => 35,  120 => 31,  117 => 30,  115 => 22,  109 => 20,  106 => 19,  103 => 16,  101 => 15,  98 => 14,  96 => 7,  89 => 5,  85 => 3,  83 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% trans_default_domain ea.i18n.translationDomain %}

<!DOCTYPE html>
<html lang=\"{{ ea.i18n.htmlLocale }}\" dir=\"{{ ea.i18n.textDirection }}\" data-turbo=\"false\">
\t<head>
\t\t{% block head_metas %}
\t\t\t<meta charset=\"UTF-8\">


\t\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t\t<meta name=\"generator\" content=\"EasyAdmin\"/>
\t\t{% endblock head_metas %}

\t\t{% set page_title_block_output %}
\t\t{% block page_title %}
\t\t\t{{ block('content_title') }}
\t\t{% endblock %}
\t\t{% endset %}
\t\t<title>{{ page_title_block_output|striptags|raw }}</title>

\t\t{% block head_stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('app.css', ea.assets.defaultAssetPackageName) }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('/public/build/admin.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('/public/admin2.scss') }}\">
\t\t\t<link href='https://fonts.googleapis.com/css?family=Noto+Emoji' rel='stylesheet'>


\t\t{% endblock %}

\t\t{% block configured_stylesheets %}
\t\t\t{{ include('@EasyAdmin/includes/_css_assets.html.twig', { assets: ea.assets.cssAssets ?? [] }, with_context = false) }}
\t\t\t{{ include('@EasyAdmin/includes/_encore_link_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
\t\t{% endblock %}

\t\t{% block head_favicon %}
\t\t\t<link rel=\"shortcut icon\" href=\"{{ asset(ea.dashboardFaviconPath) }}\">
\t\t{% endblock %}

\t\t{% block head_javascript %}
\t\t\t<script src=\"{{ asset('app.js', ea.assets.defaultAssetPackageName) }}\"></script>

\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t\t\t<script src=\"https://johannburkard.de/resources/Johann/jquery.highlight-4.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js\"></script>


\t\t{% endblock head_javascript %}

\t\t{% block configured_javascripts %}
\t\t\t{{ include('@EasyAdmin/includes/_js_assets.html.twig', { assets: ea.assets.jsAssets ?? [] }, with_context = false) }}
\t\t\t{{ include('@EasyAdmin/includes/_encore_script_tags.html.twig', { assets: ea.assets.webpackEncoreAssets ?? [] }, with_context = false) }}
\t\t{% endblock %}

\t\t{% if 'rtl' == ea.i18n.textDirection %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('app.rtl.css', ea.assets.defaultAssetPackageName) }}\">
\t\t{% endif %}

\t\t{% block configured_head_contents %}
\t\t\t{% for htmlContent in ea.assets.headContents ?? [] %}
\t\t\t\t{{ htmlContent|raw }}
\t\t\t{% endfor %}
\t\t{% endblock %}
\t</head>

\t{% block body %}
\t\t<body class=\"content1\" {% block body_attr %} {% endblock %} id=\"{% block body_id %}{% endblock %}\" class=\"ea {% block body_class %}{% endblock %}\" data-ea-content-width=\"{{ ea.crud.contentWidth ?? ea.dashboardContentWidth ?? 'normal' }}\" data-ea-sidebar-width=\"{{ ea.crud.sidebarWidth ?? ea.dashboardSidebarWidth ?? 'normal' }}\" data-ea-dark-scheme-is-enabled=\"{{ ea.dashboardHasDarkModeEnabled ? 'true' : 'false' }}\">
\t\t\t{% block javascript_page_layout %}
\t\t\t\t<script src=\"{{ asset('page-layout.js', ea.assets.defaultAssetPackageName) }}\"></script>
\t\t\t{% endblock javascript_page_layout %}
\t\t\t{% block javascript_page_color_scheme %}
\t\t\t\t<script src=\"{{ asset('page-color-scheme.js', ea.assets.defaultAssetPackageName) }}\"></script>
\t\t\t{% endblock javascript_page_color_scheme %}

\t\t\t{% block wrapper_wrapper %}
\t\t\t\t{% block flash_messages %}
\t\t\t\t\t{{ include(ea.templatePath('flash_messages')) }}
\t\t\t\t{% endblock flash_messages %}

\t\t\t\t{% set user_menu_avatar %}
\t\t\t\t{% if null == ea.userMenu.avatarUrl %}
\t\t\t\t\t<span class=\"user-avatar\">
\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t<i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t<i class=\"user-avatar-icon-foreground {{ ea.user is not null ? 'fa fa-user' : 'fas fa-user-slash' }} fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t{% else %}
\t\t\t\t\t<img class=\"user-avatar\" src=\"{{ ea.userMenu.avatarUrl }}\"/>
\t\t\t\t{% endif %}
\t\t\t\t{% endset %}

\t\t\t\t{% set impersonator_permission = constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\AuthenticatedVoter::IS_IMPERSONATOR') is defined ? 'IS_IMPERSONATOR' : 'ROLE_PREVIOUS_ADMIN' %}

\t\t\t\t{% set user_menu_dropdown %}
\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t\t\t<div>{{ user_menu_avatar }}</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<span class=\"user-label\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t<a class=\"inline-block navtext u-text-black-900 no-underline hover-2 py-2 px-4\" href=\"/{{ app.user ? 'public/logout' : 'public/login'}}\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\t{{ app.user ? 'Logout' : 'Login'}}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t{% block user_menu %}
\t\t\t\t\t\t{% if ea.userMenu.items|length > 0 %}
\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t{% for item in ea.userMenu.items %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{% if item.isMenuSection and not loop.first %}
\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t{% elseif not item.isMenuSection %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ item.linkUrl }}\" class=\"dropdown-item user-action {{ item.cssClass }}\" target=\"{{ item.linkTarget }}\" rel=\"{{ item.linkRel }}\" referrerpolicy=\"origin-when-cross-origin\">
\t\t\t\t\t\t\t\t\t\t\t{% if item.icon is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw {{ item.icon }}\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<span>{{ item.label|trans }}</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endblock user_menu %}
\t\t\t\t</ul>
\t\t\t\t{% endset %}

\t\t\t\t{% set settings_dropdown %}
\t\t\t\t{% if ea.dashboardLocales or ea.dashboardHasDarkModeEnabled %}
\t\t\t\t\t<div class=\"dropdown dropdown-settings\">
\t\t\t\t\t\t<a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-gear\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t{% if ea.dashboardLocales %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-header dropdown-locales-label\">{{ 'settings.locale'|trans(domain = 'EasyAdminBundle') }}</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t{% for localeDto in ea.dashboardLocales %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ ea_url().set('_locale', localeDto.locale) }}\" class=\"dropdown-item{% if app.request.locale == localeDto.locale %} active{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t{% if localeDto.icon %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"{{ localeDto.icon }}\"></i>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ localeDto.name }}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if ea.dashboardHasDarkModeEnabled %}
\t\t\t\t\t\t\t\t{% if ea.dashboardLocales %}
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-header dropdown-appearance-label\">{{ 'settings.appearance.label'|trans(domain = 'EasyAdminBundle') }}</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-sun\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ 'settings.appearance.light'|trans(domain = 'EasyAdminBundle') }}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-moon\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ 'settings.appearance.dark'|trans(domain = 'EasyAdminBundle') }}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t\t\t\t\t\t<span>{{ 'settings.appearance.auto'|trans(domain = 'EasyAdminBundle') }}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% endset %}

\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t{% block wrapper %}
\t\t\t\t\t\t<div class=\"responsive-header\">
\t\t\t\t\t\t\t{% block responsive_header %}
\t\t\t\t\t\t\t\t<button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-bars\"></i>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
\t\t\t\t\t\t\t\t\t{% block responsive_header_logo %}
\t\t\t\t\t\t\t\t\t\t<a class=\"responsive-logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ ea.dashboardTitle|raw }}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endblock responsive_header_logo %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown user-menu-wrapper {{ is_granted(impersonator_permission) ? 'user-is-impersonated' }} ms-auto\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\tclass=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t{# to make the site design consistent, always display the user avatar in responsive header
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                   and hide the user name (because there's no space left) regardless of the user config #}
\t\t\t\t\t\t\t\t\t\t{% if ea.userMenu.avatarDisplayed %}
\t\t\t\t\t\t\t\t\t\t\t{{ user_menu_avatar }}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"user-avatar fa fa-fw {{ ea.user is not null ? 'fa-user' : 'fa-user-times' }}\"></i>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t{{ user_menu_dropdown }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{{ settings_dropdown }}
\t\t\t\t\t\t\t{% endblock responsive_header %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t\t\t{% block sidebar %}
\t\t\t\t\t\t\t\t\t<header class=\"main-header\">
\t\t\t\t\t\t\t\t\t\t{% block header %}
\t\t\t\t\t\t\t\t\t\t\t<nav class=\"navbar\" role=\"navigation\">
\t\t\t\t\t\t\t\t\t\t\t\t{% block header_navbar %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block header_logo %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"logo\" title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path(ea.dashboardRouteName) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-custom\"><img src=\"{{ asset('images/Logo-emre1.png') }}\" class=\"logo-emre\">{{ ea.dashboardTitle|raw }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-compact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock header_logo %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock header_navbar %}
\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t{% endblock header %}
\t\t\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t\t\t{% block main_menu_wrapper %}
\t\t\t\t\t\t\t\t\t\t{{ include(ea.templatePath('main_menu')) }}
\t\t\t\t\t\t\t\t\t{% endblock main_menu_wrapper %}
\t\t\t\t\t\t\t\t{% endblock sidebar %}

\t\t\t\t\t\t\t\t<div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<section class=\"main-content\">
\t\t\t\t\t\t\t{% set has_search = ea.crud is not null and ea.crud.isSearchEnabled %}
\t\t\t\t\t\t\t<aside class=\"content-top {{ has_search ? 'ea-search-enabled' : 'ea-search-disabled' }}\">
\t\t\t\t\t\t\t\t{% block content_top_header %}
\t\t\t\t\t\t\t\t\t<div class=\"content-search\">
\t\t\t\t\t\t\t\t\t\t{% if has_search %}
\t\t\t\t\t\t\t\t\t\t\t{% block search %}

\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-action-search\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% block search_form %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block search_form_filters %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for field, array in ea.search.appliedFilters %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for key, value in array %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# This code re-applies your filters on searches, an iterable check is needed in cases we have more than one object for a filter #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if value is iterable %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for index, iterValue in value %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# This sub-level iterable check is needed in cases we have more complex filters like the DateTimeFilter cf. issue #5038 #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if iterValue is iterable %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for subIndex, subIterValue in iterValue %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}][{{ subIndex }}]\" value=\"{{ subIterValue }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}][{{ index }}]\" value=\"{{ iterValue }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[{{ field }}][{{ key }}]\" value=\"{{ value }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudAction\" value=\"index\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudControllerFqcn\" value=\"{{ ea.request.query.get('crudControllerFqcn') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"menuIndex\" value=\"{{ ea.request.query.get('menuIndex') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submenuIndex\" value=\"{{ ea.request.query.get('submenuIndex') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search content-search-icon\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"content-search-label\" data-value=\"{{ app.request.get('query') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control {{ app.request.get('query') is null ? 'is-blank' }}\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query') ?? '' }}\" placeholder=\"{{ t('action.search', ea.i18n.translationParameters, 'EasyAdminBundle')|trans }}\" spellcheck=\"false\" autocorrect=\"off\" oninput=\"this.parentNode.dataset.value=this.value\" {% if ea.crud.currentAction == 'index' and ea.crud.autofocusSearch == true %} autofocus=\"autofocus\" {% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.request.get('query') %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ ea_url().unset('query') }}\" class=\"content-search-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t{% endblock search %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-custom-menu\">

\t\t\t\t\t\t\t\t\t\t{% block header_custom_menu %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown user-menu-wrapper {{ is_granted(impersonator_permission) ? 'user-is-impersonated' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user_menu_avatar }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if ea.userMenu.isNameDisplayed %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">{{ ea.userMenu.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t{{ user_menu_dropdown }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endblock header_custom_menu %}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{{ settings_dropdown }}
\t\t\t\t\t\t\t\t{% endblock content_top_header %}
\t\t\t\t\t\t\t</aside>

\t\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t\t{% block content %}
\t\t\t\t\t\t\t\t\t<article class=\"content\">
\t\t\t\t\t\t\t\t\t\t{% block content_header_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t{% set has_help_message = (ea.crud.helpMessage ?? '') is not empty %}
\t\t\t\t\t\t\t\t\t\t\t<section class=\"content-header1\">
\t\t\t\t\t\t\t\t\t\t\t\t{% block content_header %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-header-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block content_title %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <i class=\"fa fa-building\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"logo-emre1\" src=\"{{asset('images/Logo-emre1.png')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChatroom


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data4 %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"overlay-{{chat_data.id}}\" class=\"overlay\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"close close-icon\" href=\"#\">&times;</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold headtext2 mb-3 \">{{ chat_data.firstname }}'s Profile
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"underline\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold  profileheadtext profiletextsection mb-0\">full name</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% block edit_form %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {{ form(edit_form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% endblock edit_form %} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.firstname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.lastname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\" profiletextsection profileheadtext fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\tchat_data.emailfull\t}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon2 fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% block content_help %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if has_help_message %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html_attr') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t{% block page_actions_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block page_actions %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t{% endblock content_header %}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</section>


\t\t\t\t\t\t\t\t{% endblock content_header_wrapper %}


\t\t\t\t\t\t\t\t<!-- MDB -->


\t\t\t\t\t\t\t\t{# <style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t .card {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</style> #}
\t\t\t\t\t\t\t\t<div class=\"chat-box2 test5\">

\t\t\t\t\t\t\t\t\t<div id=\"content \" class=\"container py-5\">

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 chatbox1 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body2\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tIncoming messages
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <h1>WERKT NIET</h1> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# voor als je eeen limiet wilt geven aan de aantal dingen laat zien|slice(0, 5) #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data2|sort((a, b) => a.created_at < b.created_at)|slice(0, 10) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.conversation_id in conversationIds and chat_data.id != app.user.id %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id != app.user.id and chat_data.id is not null  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel flex-row\"> <img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/{{chat_data.id}}/{{chat_data.conversation_id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small timeago text-muted mb-1\">{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFriends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% if participant1 is not null and participant2 is not null %} #}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data3 %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.conversation_id in conversationgroupIds %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.conversation_id in conversationIds and chat_data.id != app.user.id %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#link kan moeten verander van ap.user.id naar conversation_id #}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel friendssection flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/{{chat_data.id}}/{{chat_data.conversation_id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{chat_data.firstname}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{chat_data.lastname}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small  text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
<p class=\"text-info\">View profiel<a href=\"{{ path('messages.user_info', { 'userid': chat_data.id , 'idconversation': chat_data.conversation_id}) }}\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_group', { 'id': app.user.id, 'idConversation': conversation_id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGroups
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data5 %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id not in conversationgroupIds %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id in conversationIds and chat_data.id != app.user.id %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#link kan moeten verander van ap.user.id naar conversation_id #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/jpeg;base64,{{ chat_data.image }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/{{app.user.id}}/{{chat_data.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.group_name }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.group_disc }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('messages.group_info', { 'idConversation': chat_data.id }) }}\"><p>Group info
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"deletegroup/{{ app.user.id}}/{{ chat_data.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{chat_data.group_name}} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{# {{ app.user.id}} #}
\t\t\t\t\t\t\t\t\t\t\t{# <div class=\"monitor\"> #}
\t\t\t\t\t\t\t\t\t\t\t{# HUUSKES #}<div class=\"headtextgroupinfo\">Group Info </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-7 chatbox3 col-xl-8\"> <div class=\"groupbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"gobackbutton\" onclick=\"goBack()\">Go Back</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data5 %}
{% if chat_data.id == conversation_id %}
{# 
\t\t<div class=\"containerimage\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">
\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlayimage\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"texthover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-camera cameraicon\"></i><br>Change profile image</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
<form method=\"POST\" enctype=\"multipart/form-data\">
  <a href=\"#\">
  <p class=\"edit-text\"> </p> <i class=\" edit-icon3 fa-solid fa-pen-to-square\" id=\"edit-icon3\"></i>
  </a>
  <div class=\"containerimage2\">
    <img src=\"data:image/jpeg;base64,{{ chat_data.image }}\" alt=\"avatar\" class=\"rounded-circle  mx-auto  align-self-center me-3 shadow-1-strong\" width=\"100\">
    <div class=\"overlayimage2 rounded-circle  mx-auto  align-self-center me-3 shadow-1-strong pt-4\" width=\"100\">
      <label for=\"file-upload\">
        <div class=\"texthover\">
          <i class=\"fa-solid fa-camera cameraicon\"></i><br>Change profile image</div>
      </label>
      <input type=\"file\" id=\"file-upload\" name=\"file-upload\" style=\"display:none;\" value=\"{{ chat_data.image }}\">
    </div>
  </div>
  <div class=\"pt-3 groupboxtext\">
    <a href=\"http://crm-system:2525/public/messages/{{app.user.id}}/{{chat_data.id}}\">
      <span class=\"name-display\">
        <p class=\"fw-bold mb-0\">{{ chat_data.group_name }}</p>
      </span>
    </a>
    <span class=\"form-display\" style=\"display:none;\">
      <div class=\"field field_v2\">
        <label for=\"groupname\" class=\"ha-screen-reader\"></label>
        <input id=\"groupname\" name=\"groupname\" class=\"field__input\" placeholder=\"{{ chat_data.group_name }}\" value=\"{{ chat_data.group_name }}\">
        <span class=\"field__label-wrap\" aria-hidden=\"true\">
          <span class=\"field__label\">new group name</span>
        </span>
      </div>
    </span>
    <span class=\"name-display\">{{ chat_data.group_disc }}</span>
    <span class=\"form-display\" style=\"display:none;\">
      <div class=\"field field_v2\">
        <label for=\"groupdisc\" class=\"ha-screen-reader\"></label>
        <input id=\"groupdisc\" name=\"groupdisc\" class=\"field__input\" placeholder=\"{{ chat_data.group_disc }}\" value=\"{{ chat_data.group_disc }}\">
        <span class=\"field__label-wrap\" aria-hidden=\"true\">
          <span class=\"field__label\">new group Discription</span>
        </span>
      </div>
      <button type=\"submit\" class=\"submitbutton\">
\t  \t<span>Save</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" viewbox=\"0 0 29.756 29.756\" style=\"enable-background:new 0 0 29.756 29.756;\" xml:space=\"preserve\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
    </span>
  </div>
</form>



{# <span class=\"name-display\">{{ chat_data.firstname }} {{ chat_data.lastname }}</span>
\t<span class=\"form-display\" style=\"display: none;\">  <input type=\"text\" id=\"firstname\" name=\"firstname\" value=\"{{ chat_data.firstname }}\">  <input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"{{ chat_data.lastname }}\"><button type=\"submit\">Save</button></span>
\t<a href=\"#\">
\t\t<i class=\"fa-solid editicon fa-pen\" id=\"edit-icon\"></i>
\t</a> #}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

<div class=\"groupbox2\">
\t<a href=\"#popup1\">
\t\t<p class=\"edit-text\"></p>
\t\t<i class=\" edit-icon4 fa-solid fa-user-plus\" ></i>
\t</a>
\t<span class=\"name-display2\">New user group
\t</span>

\t\t
\t



\t<p class=\"listcounter\">
\t\t{{ numUsers }}
\t\tUsers in this group</p>



\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data3 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if  chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}
<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabels  flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.firstname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.lastname }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-info\">View profiel<a href=\"{{ path('messages.user_info', { 'userid': chat_data.id , 'idconversation': chat_data.conversation_id}) }}\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.user_Delete_Group', { 'userid': chat_data.id, 'idconversation': conversation_id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
<div id=\"popup1\" class=\"overlay\">
\t\t\t<div class=\"popup-add-user\">

\t\t<div class=\"popup-header-user\" > 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"closeicon\" href=\"#\">&times;</a>
\t\t\t\t\t\t\t\t\t<div class=\"new-user-text\">Add new users\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t<div class=\"users-bluetext\">Users</div>
\t\t\t\t{% for newconv1 in data4 %}
\t\t\t\t\t{% if newconv1.id != app.user.id  %}
\t\t\t\t\t\t<div class=\"checkbox-wrapper-26\">
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<img src=\"{{ newconv1.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t<p class=\"fw-normal mb-0\">{{ newconv1.email }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t{{newconv1.firstname}}
\t\t\t\t\t\t\t\t\t\t{{newconv1.lastname}}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row3\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"field[{{newconv1.id}}]\" id=\"field_{{newconv1.id}}\" value=\"{{ newconv1.id }}\">


\t\t\t\t\t\t\t\t<label for=\"field_{{newconv1.id}}\">
\t\t\t\t\t\t\t\t\t<div class=\"tick_mark\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"submitbutton3\">
\t  \t\t<a  href=\"{{ path('messages.user_Add', { 'userid': newconv1.id, 'idconversation': conversation_id }) }}\"><span>Save</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" viewbox=\"0 0 29.756 29.756\" style=\"enable-background:new 0 0 29.756 29.756;\" xml:space=\"preserve\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
</div>

\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t


// classnames icons
var buttons = document.getElementsByClassName(\"fa-gear\");
var searchbutton = document.getElementsByClassName(\" fa-magnifying-glass\");
var deletebutton = document.getElementsByClassName(\" fa-trash-can\");
var editbutton = document.getElementsByClassName(\" fa-pen-to-square\");

// this is for the setting icon
for (var i = 0; i < buttons.length; i++) {
buttons[i].addEventListener(\"click\", function () {
this.classList.toggle(\"fa-spin\");
});
}
document.addEventListener(\"click\", function (event) {
var target = event.target;
var isButton = false;

for (var i = 0; i < buttons.length; i++) {
if (target == buttons[i]) {
isButton = true;
break;
}
}

if (! isButton) {
for (var i = 0; i < buttons.length; i++) {
buttons[i].classList.remove(\"fa-spin\");
}
}
});

// this is for the search icon

for (var i = 0; i < searchbutton.length; i++) {
searchbutton[i].addEventListener(\"click\", function () {
if (this.classList.contains(\"fa-beat\")) {
this.classList.remove(\"fa-beat\");
} else {
this.classList.add(\"fa-beat\");
}
});
}

// this is for the delete button
for (var i = 0; i < deletebutton.length; i++) {
deletebutton[i].addEventListener(\"click\", function () {
this.classList.toggle(\"fa-beat-fade\");
});
}
document.addEventListener(\"click\", function (event) {
var target = event.target;
var isButton = false;

for (var i = 0; i < deletebutton.length; i++) {
if (target == deletebutton[i]) {
isButton = true;
break;
}
}

if (! isButton) {
for (var i = 0; i < deletebutton.length; i++) {
deletebutton[i].classList.remove(\"fa-beat-fade\");
}
}
});
// search filter function
jQuery.fn.highlight = function (pat) {
function innerHighlight(node, pat) {
var skip = 0;
if (node.nodeType == 3) {
var pos = node.data.toUpperCase().indexOf(pat);
pos -= (node.data.substr(0, pos).toUpperCase().length - node.data.substr(0, pos).length);
if (pos >= 0) {
var spannode = document.createElement('span');
spannode.className = 'highlight';
var middlebit = node.splitText(pos);
var endbit = middlebit.splitText(pat.length);
var middleclone = middlebit.cloneNode(true);
spannode.appendChild(middleclone);
middlebit.parentNode.replaceChild(spannode, middlebit);
skip = 1;
}
} else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
for (var i = 0; i < node.childNodes.length; ++ i) {
i += innerHighlight(node.childNodes[i], pat);
}
}
return skip;
}
return this.length && pat && pat.length ? this.each(function () {
innerHighlight(this, pat.toUpperCase());
}) : this;
};

jQuery.fn.removeHighlight = function () {
return this.find(\"span.highlight\").each(function () {
this.parentNode.firstChild.nodeName;
with (this.parentNode) {
replaceChild(this.firstChild, this);
normalize();
}
}).end();
};

\$(document).ready(function () {
\$('#my-input').on('input', function () {
\$('.messagecontent').removeHighlight().highlight(\$(this).val());
});
});

// sendbutton aniamtion
gsap.registerPlugin();

document.querySelectorAll('.sendbutton').forEach(element => {

let path = element.querySelector('.btn-layer path'),
tl = gsap.timeline();

element.addEventListener('click', e => {

element.classList.add('active')

tl.to(path, {
morphSVG: 'M136,77.5h-1H4.8H4c-2.2,0-4-1.8-4-4v-47c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0C44,22.5,66,10,66,10  s3,12.5,69.1,12.5c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47C140,75.7,138.2,77.5,136,77.5z',
duration: .3,
delay: .3
}).to(path, {
morphSVG: 'M136,77.5c0,0-11.7,0-12,0c-90,0-94.2,0-94.2,0s-10.8,0-25.1,0c-0.2,0-0.8,0-0.8,0c-2.2,0-4-1.8-4-4v-47  c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0c39.1,0,61.1,0,61.1,0s3,0,69.1,0c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47  C140,75.7,138.2,77.5,136,77.5z',
duration: 1.7,
ease: 'elastic.out(1, .15)',
onComplete() {
element.classList.remove('active')
}
})
})
})
// this is for the edit button
for (var i = 0; i < editbutton.length; i++) {
  editbutton[i].addEventListener(\"click\", function() {
    if (this.classList.contains(\"fa-beat-fade\")) {
      this.classList.remove(\"fa-beat-fade\");
    } else {
      this.classList.add(\"fa-beat-fade\");
    }
  });
}

// this is for the delete users fucntion dropdown
function toggleDropdown(element) {
var dropdownContainers = document.getElementsByClassName(\"dropdown3-content\");
for (var i = 0; i < dropdownContainers.length; i++) {
dropdownContainers[i].style.display = \"none\";
}

var parent = element.parentElement;
var dropdownContainer = parent.getElementsByClassName(\"dropdown3-content\")[0];

if (dropdownContainer.style.display === \"block\") {
dropdownContainer.style.display = \"none\";
} else {
dropdownContainer.style.display = \"block\";

document.addEventListener(\"click\", function (event) {
if (! dropdownContainer.contains(event.target) && event.target !== element) {
dropdownContainer.style.display = \"none\";
}
});
}
}

//go back button
function goBack() {
  window.history.back();
}

//edit group info function
//first one
\$(document).ready(function() {
\t\$(\"#edit-icon3\").click(function() {
\t\t\$(\".name-display\").toggle();
\t\t\$(\".form-display\").toggle();
\t});
});

//second part edit
const editIcon = document.querySelector('.edit-icon3');

const section2 = document.querySelector('.groupbox2');

editIcon.addEventListener('click', () => {
  if (section2.classList.contains('move-down')) {
    section2.classList.remove('move-down');
  } else {
    section2.classList.add('move-down');
  }
});




//group create button function
let btn = document.querySelector(\".submitbutton\");

btn.addEventListener(\"click\", active);

function active() {
  btn.classList.toggle(\"is_active\");
}
//secong one
//group create button function
let btn2 = document.querySelector(\".submitbutton3\");

btn2.addEventListener(\"click\", active);

function active() {
  btn2.classList.toggle(\"is_active\");
}


\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t{# <section id=\"main\" class=\"content-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block main %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/ Home
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section> #}

\t\t\t\t\t\t\t\t\t\t{% block content_footer_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t{% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
\t\t\t\t\t\t\t\t\t\t\t{% if content_footer is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"content-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ content_footer }}
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t\t{% endblock content %}

\t\t\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</body>
\t\t\t\t\t</html>
\t\t\t\t</body>
\t\t\t</html>
\t\t</body>
\t</html>
</section>{% endblock wrapper %}</div>{% endblock wrapper_wrapper %}{% block body_javascript %}{% endblock body_javascript %}{% block configured_body_contents %}{% for htmlContent in ea.assets.bodyContents ?? [] %}{{ htmlContent|raw }}{% endfor %}{% endblock %}</body>{% endblock body %}</html>
", "conversation/groupinfo.html.twig", "C:\\wamp64\\www\\project\\crm-system\\templates\\conversation\\groupinfo.html.twig");
    }
}
