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

/* conversation/chat.html.twig */
class __TwigTemplate_2f2de6b917e8525320b54afcee1f3449 extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/chat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/chat.html.twig"));

        // line 2
        $context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
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
        // line 1286
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
        // line 1286
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
        // line 1286
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
(isset($context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"]) || array_key_exists("__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d", $context) ? $context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"] : (function () { throw new RuntimeError('Variable "__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d" does not exist.', 2, $this->source); })())), "html", null, true);
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
        // line 1279
        echo "
\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t</body>
\t\t\t</html>
\t\t</body>
\t</body>
</html></section>";
        
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
(isset($context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"]) || array_key_exists("__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d", $context) ? $context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"] : (function () { throw new RuntimeError('Variable "__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d" does not exist.', 2, $this->source); })())), "html", null, true);
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
        // line 479
        echo "

\t\t\t\t\t\t\t\t\t<!-- MDB -->


\t\t\t\t\t\t\t\t\t";
        // line 491
        echo "\t\t\t\t\t\t\t\t\t<div class=\"chat-box2 test5\">

\t\t\t\t\t\t\t\t\t\t<div id=\"content \" class=\"container py-5\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 chatbox1 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body2\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIncoming messages
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 509
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 510
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter($this->env, (isset($context["data2"]) || array_key_exists("data2", $context) ? $context["data2"] : (function () { throw new RuntimeError('Variable "data2" does not exist.', 510, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 510, $this->source); })()), "created_at", [], "any", false, false, false, 510) < twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 510, $this->source); })()), "created_at", [], "any", false, false, false, 510)); }), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 511
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 511), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 511, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 511) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 511, $this->source); })()), "user", [], "any", false, false, false, 511), "id", [], "any", false, false, false, 511)))) {
                // line 512
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 513
                if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 513) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "user", [], "any", false, false, false, 513), "id", [], "any", false, false, false, 513)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 513)))) {
                    // line 514
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel flex-row\"> <img src=\"";
                    // line 515
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 515), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 517
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 517), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 517), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 518
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 518), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 521
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 521), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small timeago text-muted mb-1\">";
                    // line 525
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 525)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 529
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 530
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFriends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 537
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 538
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data3"]) || array_key_exists("data3", $context) ? $context["data3"] : (function () { throw new RuntimeError('Variable "data3" does not exist.', 538, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 539
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 540
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 540), (isset($context["conversationgroupIds"]) || array_key_exists("conversationgroupIds", $context) ? $context["conversationgroupIds"] : (function () { throw new RuntimeError('Variable "conversationgroupIds" does not exist.', 540, $this->source); })()))) {
                // line 541
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 541), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 541, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 541) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "id", [], "any", false, false, false, 541)))) {
                    // line 542
                    echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 545
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel friendssection flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 547
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 547), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 549
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 549), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 549), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 550
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 550), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 553
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 553), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 554
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 554), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small  text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-info\">View profiel<a href=\"";
                    // line 562
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 562), "idconversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 562)]), "html", null, true);
                    echo "\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
                    // line 566
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_group", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 566, $this->source); })()), "user", [], "any", false, false, false, 566), "id", [], "any", false, false, false, 566), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 566, $this->source); })())]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 573
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 574
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 575
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGroups
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data5"]) || array_key_exists("data5", $context) ? $context["data5"] : (function () { throw new RuntimeError('Variable "data5" does not exist.', 578, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 579
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 581
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 581), (isset($context["conversationgroupIds"]) || array_key_exists("conversationgroupIds", $context) ? $context["conversationgroupIds"] : (function () { throw new RuntimeError('Variable "conversationgroupIds" does not exist.', 581, $this->source); })()))) {
                // line 582
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 582), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 582, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 582) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 582, $this->source); })()), "user", [], "any", false, false, false, 582), "id", [], "any", false, false, false, 582)))) {
                    // line 583
                    echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 586
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/jpeg;base64,";
                    // line 589
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "image", [], "any", false, false, false, 589), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 591
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 591, $this->source); })()), "user", [], "any", false, false, false, 591), "id", [], "any", false, false, false, 591), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 591), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 592
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_name", [], "any", false, false, false, 592), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 595
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_disc", [], "any", false, false, false, 595), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 603
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.group_info", ["idConversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 603)]), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Group info

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"deletegroup/";
                    // line 610
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 610, $this->source); })()), "user", [], "any", false, false, false, 610), "id", [], "any", false, false, false, 610), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 610), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 617
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 618
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 619
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 620
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 621
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 632
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 633
        echo "
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-lg-7 chatbox3 col-xl-8\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 637
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 637, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 637, $this->source); })()), "created_at", [], "any", false, false, false, 637) > twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 637, $this->source); })()), "created_at", [], "any", false, false, false, 637)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 638
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 639
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled myUL\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 643
            if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "user_id", [], "any", false, false, false, 643) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 643, $this->source); })()), "user", [], "any", false, false, false, 643), "id", [], "any", false, false, false, 643)) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 643) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 643, $this->source); })()), "request", [], "any", false, false, false, 643), "requesturi", [], "any", false, false, false, 643), "/")))))) {
                // line 644
                echo "

  ";
                // line 647
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 647)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 647)))) {
                    // line 648
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=";
                    // line 650
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 650), "html", null, true);
                    echo " alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 655
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 655), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 660
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 660)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,";
                    // line 666
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 666), "html", null, true);
                    echo "\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div><br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 668
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 668), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
";
                }
                // line 675
                echo "
\t\t\t\t\t\t\t";
                // line 677
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 677)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 677)))) {
                    // line 678
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=";
                    // line 680
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 680), "html", null, true);
                    echo " alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 685
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 685), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 690
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 690)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 694
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 694), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
";
                }
                // line 701
                echo "
\t\t\t\t\t\t";
                // line 703
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 703)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 703)))) {
                    // line 704
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=";
                    // line 706
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 706), "html", null, true);
                    echo " alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 711
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 711), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 716
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 716)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,";
                    // line 724
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 724), "html", null, true);
                    echo "\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
";
                }
                // line 730
                echo "

\t";
                // line 733
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 733))) {
                    // line 734
                    echo "
\t<li class=\"d-flex justify-content-between mb-4\">
\t\t<a href=\"#popup1\">
\t\t\t<img src=";
                    // line 737
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 737), "html", null, true);
                    echo " alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t<div class=\"card2\">
\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t";
                    // line 742
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 742), "html", null, true);
                    echo "
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t";
                    // line 747
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 747)), "html", null, true);
                    echo "</p>
\t\t\t</div>
\t\t\t<div class=\"card-body-file-main\">
\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t<div class=\"card-body-file\">
\t\t\t\t\t\t<a class=\"file-download-text\" target=\"_blank\" href=\"";
                    // line 752
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profileImages/" . twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 752))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 752), "html", null, true);
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 754
                    if (twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 754)) {
                        // line 755
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.download_file", ["filename" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 755)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-circle-down downloadButton\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div></li>

";
                    }
                }
                // line 765
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 767
            echo "
";
            // line 769
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 770
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "user_id", [], "any", false, false, false, 770) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 770, $this->source); })()), "user", [], "any", false, false, false, 770), "id", [], "any", false, false, false, 770)) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 770) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 770, $this->source); })()), "request", [], "any", false, false, false, 770), "requesturi", [], "any", false, false, false, 770), "/")))))) {
                // line 771
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t     ";
                // line 773
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 773)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 773)))) {
                    // line 774
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 778
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 778), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 782
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 782)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/";
                    // line 786
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 786), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,";
                    // line 790
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 790), "html", null, true);
                    echo "\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div><br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 792
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 792), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"";
                    // line 797
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 797), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 799
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 800
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 800)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 800)))) {
                    // line 801
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 805
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 805), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 809
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 809)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/";
                    // line 813
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 813), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 816
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 816), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"";
                    // line 822
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 822), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 826
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 827
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 827)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 827)))) {
                    // line 828
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 832
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 832), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 836
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 836)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/";
                    // line 840
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 840), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,";
                    // line 846
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_image", [], "any", false, false, false, 846), "html", null, true);
                    echo "\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"";
                    // line 850
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 850), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 852
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 858
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 858))) {
                    // line 859
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 863
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 863), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 867
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 867)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-file-main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"file-download-text\" target=\"_blank\" href=\"";
                    // line 872
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profileImages/" . twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 872))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 872), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 874
                    if (twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 874)) {
                        // line 875
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.download_file", ["filename" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "message_file", [], "any", false, false, false, 875)]), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"file-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-circle-down downloadButton\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/";
                        // line 879
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 879), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"";
                        // line 884
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 884), "html", null, true);
                        echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 887
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 890
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 894
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagemenu\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 898
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 898, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 900
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 901
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 901, $this->source); })()), "user", [], "any", false, false, false, 901), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 901, $this->source); })()), "user", [], "any", false, false, false, 901), "id", [], "any", false, false, false, 901)]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 902
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 902, $this->source); })()), "conversation", [], "any", false, false, false, 902), 'row', ["value" => twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 902, $this->source); })()), "request", [], "any", false, false, false, 902), "requesturi", [], "any", false, false, false, 902), "/")))]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-face-grin-wide messageicon3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapperfile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-paperclip messageicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"icons-container\">
 <label class=\"image-upload-label\">
  <i class=\"fa-regular fa-image imageiconzone\" id=\"message_image_input\"></i>
  ";
        // line 910
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 910, $this->source); })()), "message_image", [], "any", false, false, false, 910), 'widget', ["label" => false, "attr" => ["accept" => "image/*", "class" => "image-upload", "id" => "message_image_input"]]);
        echo "
</label>
<label class=\"image-upload-label\">
  <i class=\"fa-regular fa-file fileiconzone\" id=\"message_file_input\"></i> 
  \t";
        // line 914
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 914, $this->source); })()), "message_file", [], "any", false, false, false, 914), 'row', ["label" => false, "attr" => ["accept" => ".pdf,.png,.jpg,.doc,.docx,.txt,.xlsx,.pptx", "class" => "file-upload", "id" => "message_file_input"]]);
        echo "
\t</label>
  </div>
  </div>
  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"chatbox4 \" id=\"emojis\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"emoji-picker-container tijdelijk\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"file-selected\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 923
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 923, $this->source); })()), "content", [], "any", false, false, false, 923), 'row', ["label" => false, "attr" => ["class" => "message-box"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"sendbutton\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"btn-layer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M136,77.5c0,0-11.7,0-12,0c-90,0-94.2,0-94.2,0s-10.8,0-25.1,0c-0.2,0-0.8,0-0.8,0c-2.2,0-4-1.8-4-4v-47  c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0c39.1,0,61.1,0,61.1,0s3,0,69.1,0c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47  C140,75.7,138.2,77.5,136,77.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"plane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"#plane\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- SVG -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 140 100\" id=\"btn-layer\" preserveaspectratio=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M133,77.5H7c-3.9,0-7-3.1-7-7v-41c0-3.9,3.1-7,7-7h126c3.9,0,7,3.1,7,7v41C140,74.4,136.9,77.5,133,77.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 28 26\" id=\"plane\" preserveaspectratio=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.25,15.24,18.42,3.88,7.82,17l0,4.28a.77.77,0,0,0,1.36.49l3-3.68,5.65,2.25a.76.76,0,0,0,1-.58L22,.89A.77.77,0,0,0,20.85.1L.38,11.88a.76.76,0,0,0,.09,1.36Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 947
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 947, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 953
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<script src=\"";
        // line 956
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/emojiLib/jquery-3.6.3.js"), "html", null, true);
        echo "\"></script>


\t\t\t\t\t\t\t\t<script src=\"";
        // line 959
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/emojiLib/vanillaEmojiPicker.js"), "html", null, true);
        echo "\"></script>


\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tnew EmojiPicker({
trigger: [
{
selector: '.messageicon3',
insertInto: '.message-box' // '.selector' can be used without array
},
],
closeButton: true
});

// searchbar function
document.getElementById('my-button').onclick = function () {
document.getElementById('my-input').classList.toggle('show');
}

// classnames icons
var buttons = document.getElementsByClassName(\"fa-gear\");
var searchbutton = document.getElementsByClassName(\" fa-magnifying-glass\");
var deletebutton = document.getElementsByClassName(\" fa-trash-can\");

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
//files icons 
const wrapper = document.querySelector('.wrapperfile');
const icons = document.querySelectorAll('.icons-container i');

wrapper.addEventListener('click', () => {
  wrapper.classList.toggle('clicked');
});

icons.forEach((icon) => {
  icon.addEventListener('click', (event) => {
    event.stopPropagation();
  });
});
// JavaScript code
const fileInput = document.querySelector('#message_file_input');
const imageInput2 = document.querySelector('#message_image_input');
const fileSelected = document.querySelector('#chat_form_content');

fileInput.addEventListener('change', () => {
  // Get the list of selected files
  const files = fileInput.files;
  // Update the display element with the file names
  fileSelected.textContent = `Selected file(s): \${Array.from(files).map(file => file.name).join(', ')}`;
});

imageInput2.addEventListener('change', () => {
  // Get the list of selected files
  const files = imageInput2.files;
  // Update the display element with the file names
  fileSelected.textContent = `Selected file(s): \${Array.from(files).map(file => file.name).join(', ')}`;
});


//file type icons
function addFileIcon() {
  const fileLinks = document.querySelectorAll('a[href\$=\".pdf\"], a[href\$=\".doc\"], a[href\$=\".docx\"], a[href\$=\".xls\"], a[href\$=\".xlsx\"], a[href\$=\".ppt\"], a[href\$=\".pptx\"]');

  fileLinks.forEach(function(link) {
    const fileExtension = link.href.split('.').pop().toLowerCase();
    const fileIcon = link.querySelector('.file-icon');

    if (fileIcon !== null) {
      switch (fileExtension) {
        case 'pdf':
          fileIcon.classList.add('fa-regular', 'fa-file-pdf');
          break;
        case 'doc':
        case 'docx':
          fileIcon.classList.add('fa-solid', 'fa-file-word');
          break;
        case 'xls':
        case 'xlsx':
          fileIcon.classList.add('fa-solid', 'fa-file-excel');
          break;
        case 'ppt':
        case 'pptx':
          fileIcon.classList.add('fa-solid', 'fa-file-powerpoint');
          break;
        default:
          // no icon found
          break;
      }
    }
  });
}

  window.onload = addFileIcon;

// send fies function
";
        // line 1255
        echo "\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t";
        // line 1268
        echo "
\t\t\t\t\t\t\t\t";
        // line 1269
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 1277
        echo "\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t";
        
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
        // line 428
        echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-header2\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 431
        if (((isset($context["isGroup"]) || array_key_exists("isGroup", $context) ? $context["isGroup"] : (function () { throw new RuntimeError('Variable "isGroup" does not exist.', 431, $this->source); })()) == true)) {
            // line 432
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\" onclick=\"clickMe()\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\" class=\"searchbar\"></span>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.group_info", ["idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 440, $this->source); })())]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Group info

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
            // line 447
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_group", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 447, $this->source); })()), "user", [], "any", false, false, false, 447), "id", [], "any", false, false, false, 447), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 447, $this->source); })())]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 456
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\" onclick=\"clickMe()\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\" class=\"searchbar\"></span>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-info\">View profiel<a href=\"";
            // line 464
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => (isset($context["otherUser"]) || array_key_exists("otherUser", $context) ? $context["otherUser"] : (function () { throw new RuntimeError('Variable "otherUser" does not exist.', 464, $this->source); })()), "idconversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 464, $this->source); })())]), "html", null, true);
            echo "\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
            // line 468
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 468, $this->source); })()), "user", [], "any", false, false, false, 468), "id", [], "any", false, false, false, 468), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 468, $this->source); })())]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 477
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
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
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data3"]) || array_key_exists("data3", $context) ? $context["data3"] : (function () { throw new RuntimeError('Variable "data3" does not exist.', 351, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 352) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "user", [], "any", false, false, false, 352), "id", [], "any", false, false, false, 352)) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 352) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "request", [], "any", false, false, false, 352), "requesturi", [], "any", false, false, false, 352), "/")))))) {
                // line 353
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"topuserinfosection\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex topmenulabel flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 355
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 355), "html", null, true);
                echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 358
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 358), "idconversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 358)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                // line 359
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 359), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 362
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 362), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 363
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 363), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 367
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data4"]) || array_key_exists("data4", $context) ? $context["data4"] : (function () { throw new RuntimeError('Variable "data4" does not exist.', 370, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 371
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"overlay-";
            // line 372
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 372), "html", null, true);
            echo "\" class=\"overlay\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"close close-icon\" href=\"#\">&times;</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold headtext2 mb-3 \">";
            // line 378
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 378), "html", null, true);
            echo "'s Profile
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 380), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"underline\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold  profileheadtext profiletextsection mb-0\">full name</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 390
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 391), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 392), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\" profiletextsection profileheadtext fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 402
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "emailfull", [], "any", false, false, false, 402), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon2 fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 415
        $this->displayBlock('content_help', $context, $blocks);
        // line 422
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 427
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        
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

    // line 415
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 416
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 416, $this->source); })())) {
            // line 417
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 417, $this->source); })()), "crud", [], "any", false, false, false, 417), "helpMessage", [], "any", false, false, false, 417), [],             // line 2
(isset($context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"]) || array_key_exists("__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d", $context) ? $context["__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d"] : (function () { throw new RuntimeError('Variable "__internal_776e58b407089951df54e7f0e112999c3cef6b6f631551d4b1121ab9889fbd6d" does not exist.', 2, $this->source); })())), "html_attr");
            // line 417
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 421
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 422
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 423
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 424
        $this->displayBlock('page_actions', $context, $blocks);
        // line 425
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 424
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

    // line 1269
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 1270
        echo "\t\t\t\t\t\t\t\t\t";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 1271
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 1271, $this->source); })()))) {
            // line 1272
            echo "\t\t\t\t\t\t\t\t\t\t<section class=\"content-footer\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1273
            echo twig_escape_filter($this->env, (isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 1273, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t";
        }
        // line 1276
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1286
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
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 1286), "bodyContents", [], "any", true, true, false, 1286) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 1286), "bodyContents", [], "any", false, false, false, 1286)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 1286), "bodyContents", [], "any", false, false, false, 1286)) : ([])));
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
        return "conversation/chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2985 => 1286,  2975 => 1276,  2969 => 1273,  2966 => 1272,  2963 => 1271,  2960 => 1270,  2950 => 1269,  2932 => 424,  2921 => 425,  2919 => 424,  2916 => 423,  2906 => 422,  2896 => 421,  2890 => 417,  2888 => 2,  2886 => 417,  2883 => 416,  2873 => 415,  2855 => 345,  2845 => 427,  2842 => 422,  2840 => 415,  2832 => 409,  2819 => 402,  2806 => 392,  2802 => 391,  2799 => 390,  2789 => 380,  2784 => 378,  2775 => 372,  2772 => 371,  2768 => 370,  2764 => 368,  2758 => 367,  2751 => 363,  2747 => 362,  2741 => 359,  2737 => 358,  2731 => 355,  2727 => 353,  2724 => 352,  2720 => 351,  2713 => 348,  2711 => 346,  2709 => 345,  2705 => 343,  2695 => 342,  2684 => 477,  2672 => 468,  2665 => 464,  2655 => 456,  2643 => 447,  2633 => 440,  2623 => 432,  2621 => 431,  2616 => 428,  2614 => 342,  2611 => 341,  2608 => 340,  2598 => 339,  2587 => 1277,  2585 => 1269,  2582 => 1268,  2579 => 1255,  2331 => 959,  2325 => 956,  2320 => 953,  2311 => 947,  2287 => 923,  2275 => 914,  2268 => 910,  2257 => 902,  2253 => 901,  2250 => 900,  2246 => 898,  2240 => 894,  2230 => 890,  2225 => 887,  2219 => 884,  2211 => 879,  2203 => 875,  2201 => 874,  2194 => 872,  2186 => 867,  2179 => 863,  2173 => 859,  2170 => 858,  2163 => 852,  2158 => 850,  2151 => 846,  2142 => 840,  2135 => 836,  2128 => 832,  2122 => 828,  2119 => 827,  2117 => 826,  2110 => 822,  2101 => 816,  2095 => 813,  2088 => 809,  2081 => 805,  2075 => 801,  2072 => 800,  2070 => 799,  2065 => 797,  2057 => 792,  2052 => 790,  2045 => 786,  2038 => 782,  2031 => 778,  2025 => 774,  2022 => 773,  2019 => 771,  2016 => 770,  2014 => 769,  2011 => 767,  2007 => 765,  1992 => 755,  1990 => 754,  1983 => 752,  1975 => 747,  1967 => 742,  1959 => 737,  1954 => 734,  1952 => 733,  1948 => 730,  1939 => 724,  1928 => 716,  1920 => 711,  1912 => 706,  1908 => 704,  1905 => 703,  1902 => 701,  1892 => 694,  1885 => 690,  1877 => 685,  1869 => 680,  1865 => 678,  1862 => 677,  1859 => 675,  1849 => 668,  1844 => 666,  1835 => 660,  1827 => 655,  1819 => 650,  1815 => 648,  1812 => 647,  1808 => 644,  1806 => 643,  1800 => 639,  1798 => 638,  1793 => 637,  1788 => 633,  1786 => 632,  1774 => 621,  1772 => 620,  1766 => 619,  1763 => 618,  1760 => 617,  1749 => 610,  1739 => 603,  1728 => 595,  1722 => 592,  1716 => 591,  1711 => 589,  1706 => 586,  1702 => 583,  1699 => 582,  1697 => 581,  1693 => 579,  1689 => 578,  1684 => 575,  1678 => 574,  1675 => 573,  1665 => 566,  1658 => 562,  1647 => 554,  1643 => 553,  1637 => 550,  1631 => 549,  1626 => 547,  1622 => 545,  1618 => 542,  1615 => 541,  1613 => 540,  1610 => 539,  1606 => 538,  1603 => 537,  1596 => 531,  1590 => 530,  1587 => 529,  1580 => 525,  1573 => 521,  1567 => 518,  1561 => 517,  1556 => 515,  1553 => 514,  1551 => 513,  1548 => 512,  1545 => 511,  1540 => 510,  1538 => 509,  1519 => 491,  1512 => 479,  1510 => 339,  1507 => 338,  1497 => 337,  1484 => 327,  1480 => 325,  1474 => 323,  1472 => 322,  1468 => 321,  1462 => 319,  1452 => 318,  1442 => 287,  1436 => 286,  1430 => 285,  1420 => 283,  1417 => 282,  1411 => 281,  1399 => 279,  1396 => 278,  1379 => 276,  1374 => 275,  1371 => 274,  1369 => 273,  1364 => 272,  1361 => 271,  1359 => 270,  1354 => 269,  1349 => 268,  1339 => 267,  1327 => 308,  1319 => 304,  1317 => 303,  1308 => 300,  1306 => 2,  1301 => 300,  1297 => 299,  1287 => 292,  1283 => 291,  1279 => 290,  1275 => 288,  1272 => 267,  1262 => 266,  1251 => 311,  1249 => 266,  1245 => 264,  1235 => 263,  1223 => 332,  1219 => 330,  1217 => 318,  1211 => 314,  1208 => 313,  1205 => 263,  1203 => 262,  1200 => 261,  1190 => 260,  1177 => 249,  1167 => 248,  1149 => 236,  1142 => 235,  1132 => 234,  1121 => 242,  1119 => 234,  1116 => 233,  1106 => 232,  1095 => 244,  1093 => 232,  1090 => 231,  1080 => 230,  1070 => 251,  1068 => 248,  1064 => 246,  1062 => 230,  1059 => 229,  1049 => 228,  1036 => 202,  1029 => 201,  1019 => 200,  1007 => 222,  1001 => 219,  997 => 217,  991 => 215,  985 => 213,  982 => 212,  976 => 207,  972 => 205,  970 => 200,  963 => 195,  953 => 194,  936 => 1279,  934 => 337,  929 => 334,  927 => 260,  922 => 259,  920 => 258,  912 => 252,  910 => 228,  904 => 224,  902 => 194,  899 => 193,  889 => 192,  879 => 130,  876 => 129,  861 => 127,  856 => 124,  854 => 2,  852 => 124,  846 => 122,  844 => 121,  833 => 120,  831 => 119,  828 => 118,  826 => 117,  823 => 116,  806 => 115,  803 => 114,  800 => 113,  790 => 112,  777 => 78,  767 => 77,  757 => 1286,  755 => 192,  751 => 190,  748 => 189,  743 => 186,  736 => 182,  727 => 176,  718 => 170,  710 => 165,  706 => 163,  702 => 161,  699 => 160,  697 => 159,  694 => 158,  691 => 157,  680 => 153,  674 => 151,  672 => 150,  664 => 149,  661 => 148,  657 => 147,  651 => 144,  648 => 143,  646 => 142,  638 => 136,  635 => 135,  633 => 134,  630 => 133,  626 => 131,  624 => 112,  615 => 106,  611 => 105,  608 => 104,  602 => 102,  600 => 101,  595 => 99,  591 => 97,  589 => 96,  586 => 95,  584 => 94,  581 => 93,  578 => 92,  572 => 90,  565 => 86,  560 => 83,  557 => 82,  555 => 81,  552 => 80,  549 => 77,  539 => 76,  526 => 73,  516 => 72,  503 => 70,  493 => 69,  440 => 68,  428 => 1286,  426 => 76,  423 => 75,  420 => 72,  418 => 69,  403 => 68,  393 => 67,  383 => 64,  374 => 62,  369 => 61,  359 => 60,  347 => 53,  342 => 52,  332 => 51,  312 => 41,  302 => 40,  289 => 37,  279 => 36,  267 => 33,  262 => 32,  252 => 31,  237 => 25,  233 => 24,  228 => 23,  218 => 22,  205 => 17,  195 => 16,  180 => 8,  170 => 7,  159 => 1286,  157 => 67,  153 => 65,  151 => 60,  148 => 59,  142 => 57,  140 => 56,  137 => 55,  135 => 51,  132 => 50,  130 => 40,  127 => 39,  125 => 36,  122 => 35,  120 => 31,  117 => 30,  115 => 22,  109 => 20,  106 => 19,  103 => 16,  101 => 15,  98 => 14,  96 => 7,  89 => 5,  85 => 3,  83 => 2,);
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

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data3 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id != app.user.id and chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"topuserinfosection\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex topmenulabel flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('messages.user_info', { 'userid': chat_data.id , 'idconversation': chat_data.conversation_id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.firstname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.lastname }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data4 %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"overlay-{{chat_data.id}}\" class=\"overlay\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"close close-icon\" href=\"#\">&times;</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold headtext2 mb-3 \">{{ chat_data.firstname }}'s Profile
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"underline\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold  profileheadtext profiletextsection mb-0\">full name</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% block edit_form %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {{ form(edit_form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% endblock edit_form %} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.firstname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.lastname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\" profiletextsection profileheadtext fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\tchat_data.emailfull\t}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon2 fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% block content_help %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if has_help_message %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"{{ ea.crud.helpMessage|trans|e('html_attr') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% block page_actions_wrapper %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block page_actions %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endblock content_header %}
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-header2\">
\t\t\t\t\t\t\t\t\t\t\t{% if isGroup == true %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\" onclick=\"clickMe()\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\" class=\"searchbar\"></span>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('messages.group_info', { 'idConversation': conversation_id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Group info

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_group', { 'id': app.user.id, 'idConversation': conversation_id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\" onclick=\"clickMe()\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\" class=\"searchbar\"></span>


\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-info\">View profiel<a href=\"{{ path('messages.user_info', { 'userid': otherUser , 'idconversation': conversation_id}) }}\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_user', { 'id': app.user.id, 'idConversation': conversation_id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock content_header_wrapper %}


\t\t\t\t\t\t\t\t\t<!-- MDB -->


\t\t\t\t\t\t\t\t\t{# <style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t .card {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</style> #}
\t\t\t\t\t\t\t\t\t<div class=\"chat-box2 test5\">

\t\t\t\t\t\t\t\t\t\t<div id=\"content \" class=\"container py-5\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 chatbox1 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body2\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIncoming messages
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <h1>WERKT NIET</h1> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# voor als je eeen limiet wilt geven aan de aantal dingen laat zien|slice(0, 5) #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data2|sort((a, b) => a.created_at < b.created_at)|slice(0, 10) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.conversation_id in conversationIds and chat_data.id != app.user.id %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id != app.user.id and chat_data.id is not null  %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel flex-row\"> <img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/{{chat_data.id}}/{{chat_data.conversation_id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small timeago text-muted mb-1\">{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFriends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% if participant1 is not null and participant2 is not null %} #}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data3 %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.conversation_id in conversationgroupIds %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.conversation_id in conversationIds and chat_data.id != app.user.id %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#link kan moeten verander van ap.user.id naar conversation_id #}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel friendssection flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/{{chat_data.id}}/{{chat_data.conversation_id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{chat_data.firstname}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{chat_data.lastname}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small  text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-info\">View profiel<a href=\"{{ path('messages.user_info', { 'userid': chat_data.id , 'idconversation': chat_data.conversation_id}) }}\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_group', { 'id': app.user.id, 'idConversation': conversation_id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGroups
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data5 %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id not in conversationgroupIds %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id in conversationIds and chat_data.id != app.user.id %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{#link kan moeten verander van ap.user.id naar conversation_id #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/jpeg;base64,{{ chat_data.image }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/{{app.user.id}}/{{chat_data.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.group_name }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.group_disc }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('messages.group_info', { 'idConversation': chat_data.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Group info

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
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

\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-lg-7 chatbox3 col-xl-8\">
\t\t\t\t\t\t\t\t\t\t\t\t{# RECHTE KANT als in berichten box#}
\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data|sort((a, b) => a.created_at > b.created_at)  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <input type=\"submit\" value=\"Submit\"> <a href=\"/delete\"></a></input>> #}


\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled myUL\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.user_id != app.user.id and chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}


  {# dit zijn bericht dat en een bericht en een foto hebben/BerichtYesFotoYes  #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.content is not empty and chat_data.message_image is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src={{ chat_data.avatar }} alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,{{ chat_data.message_image }}\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div><br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
{% endif %}

\t\t\t\t\t\t\t{# Dit zijn bericht dat alleen een bericht hebben en geen foto of bestand/BerichtYesFotoNo #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.content is not empty and chat_data.message_image is empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src={{ chat_data.avatar }} alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
{% endif %}

\t\t\t\t\t\t{# dit zijn bericht die geen bericht hebben maar alleen een foto/BerichtNoFotoYes #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.content is empty and chat_data.message_image is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src={{ chat_data.avatar }} alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,{{ chat_data.message_image }}\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
{% endif %}


\t{# dit zijn bericht dat een bestand hebben deze worden apart weergegeven  #}
{% if chat_data.message_file is not empty %}

\t<li class=\"d-flex justify-content-between mb-4\">
\t\t<a href=\"#popup1\">
\t\t\t<img src={{ chat_data.avatar }} alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t<div class=\"card2\">
\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t</div>
\t\t\t<div class=\"card-body-file-main\">
\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t<div class=\"card-body-file\">
\t\t\t\t\t\t<a class=\"file-download-text\" target=\"_blank\" href=\"{{ asset('profileImages/' ~ chat_data.message_file) }}\">{{chat_data.message_file}}</a>
\t\t\t\t\t</div>
\t\t\t\t\t{% if chat_data.message_file %}
\t\t\t\t\t\t<a href=\"{{ path('messages.download_file', { filename: chat_data.message_file }) }}\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-circle-down downloadButton\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div></li>

{% endif %}{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

{# RECHTE KANT #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ app.request.requesturi|last}} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.user_id == app.user.id and chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t     {# dit zijn bericht dat en een bericht en een foto hebben/BerichtYesFotoYes  #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.content is not empty and chat_data.message_image is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/{{ chat_data.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,{{ chat_data.message_image }}\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div><br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# Dit zijn bericht dat alleen een bericht hebben en geen foto of bestand/BerichtYesFotoNo #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.content is not empty and chat_data.message_image is empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/{{ chat_data.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# dit zijn bericht die geen bericht hebben maar alleen een foto/BerichtNoFotoYes #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.content is empty and chat_data.message_image is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-image-bericht\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/{{ chat_data.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\" text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/png;base64,{{ chat_data.message_image }}\" alt=\"Image\" style=\"border-radius:10px;\" width=\"200\"/></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# dit zijn bericht dat een bestand hebben deze worden apart weergegeven  #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.message_file is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-file-main\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"file-download-text\" target=\"_blank\" href=\"{{ asset('profileImages/' ~ chat_data.message_file) }}\">{{chat_data.message_file}}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.message_file %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('messages.download_file', { filename: chat_data.message_file }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"file-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-circle-down downloadButton\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/{{ chat_data.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}{# {{ convid }} #}{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagemenu\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(chatForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ form_row(chatForm.content) }} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(chatForm.user, {'value' :  app.user.id  }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(chatForm.conversation , {'value' : (app.request.requesturi|split('/')|reverse|first) }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-face-grin-wide messageicon3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wrapperfile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-paperclip messageicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"icons-container\">
 <label class=\"image-upload-label\">
  <i class=\"fa-regular fa-image imageiconzone\" id=\"message_image_input\"></i>
  {{ form_widget(chatForm.message_image, {'label':false, 'attr': {'accept': 'image/*', 'class': 'image-upload', 'id': 'message_image_input'}}) }}
</label>
<label class=\"image-upload-label\">
  <i class=\"fa-regular fa-file fileiconzone\" id=\"message_file_input\"></i> 
  \t{{ form_row(chatForm.message_file, {'label': false, 'attr': {'accept': '.pdf,.png,.jpg,.doc,.docx,.txt,.xlsx,.pptx', 'class': 'file-upload', 'id': 'message_file_input'} }) }}
\t</label>
  </div>
  </div>
  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"chatbox4 \" id=\"emojis\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"emoji-picker-container tijdelijk\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"file-selected\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(chatForm.content, {'label':false, 'attr': {'class': 'message-box'} } )}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"sendbutton\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"btn-layer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M136,77.5c0,0-11.7,0-12,0c-90,0-94.2,0-94.2,0s-10.8,0-25.1,0c-0.2,0-0.8,0-0.8,0c-2.2,0-4-1.8-4-4v-47  c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0c39.1,0,61.1,0,61.1,0s3,0,69.1,0c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47  C140,75.7,138.2,77.5,136,77.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"plane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"#plane\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- SVG -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 140 100\" id=\"btn-layer\" preserveaspectratio=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M133,77.5H7c-3.9,0-7-3.1-7-7v-41c0-3.9,3.1-7,7-7h126c3.9,0,7,3.1,7,7v41C140,74.4,136.9,77.5,133,77.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 28 26\" id=\"plane\" preserveaspectratio=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.25,15.24,18.42,3.88,7.82,17l0,4.28a.77.77,0,0,0,1.36.49l3-3.68,5.65,2.25a.76.76,0,0,0,1-.58L22,.89A.77.77,0,0,0,20.85.1L.38,11.88a.76.76,0,0,0,.09,1.36Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t <input type=\"file\" id=\"file-input\" name=\"file\" style=\"display:none;\" accept=\".pdf,.png,.jpg,.doc,.docx,.txt,.xlsx,.pptx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <p id=\"filename\"></p> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(chatForm) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{# </div> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<script src=\"{{ asset('/public/emojiLib/jquery-3.6.3.js') }}\"></script>


\t\t\t\t\t\t\t\t<script src=\"{{ asset('/public/emojiLib/vanillaEmojiPicker.js') }}\"></script>


\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tnew EmojiPicker({
trigger: [
{
selector: '.messageicon3',
insertInto: '.message-box' // '.selector' can be used without array
},
],
closeButton: true
});

// searchbar function
document.getElementById('my-button').onclick = function () {
document.getElementById('my-input').classList.toggle('show');
}

// classnames icons
var buttons = document.getElementsByClassName(\"fa-gear\");
var searchbutton = document.getElementsByClassName(\" fa-magnifying-glass\");
var deletebutton = document.getElementsByClassName(\" fa-trash-can\");

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
//files icons 
const wrapper = document.querySelector('.wrapperfile');
const icons = document.querySelectorAll('.icons-container i');

wrapper.addEventListener('click', () => {
  wrapper.classList.toggle('clicked');
});

icons.forEach((icon) => {
  icon.addEventListener('click', (event) => {
    event.stopPropagation();
  });
});
// JavaScript code
const fileInput = document.querySelector('#message_file_input');
const imageInput2 = document.querySelector('#message_image_input');
const fileSelected = document.querySelector('#chat_form_content');

fileInput.addEventListener('change', () => {
  // Get the list of selected files
  const files = fileInput.files;
  // Update the display element with the file names
  fileSelected.textContent = `Selected file(s): \${Array.from(files).map(file => file.name).join(', ')}`;
});

imageInput2.addEventListener('change', () => {
  // Get the list of selected files
  const files = imageInput2.files;
  // Update the display element with the file names
  fileSelected.textContent = `Selected file(s): \${Array.from(files).map(file => file.name).join(', ')}`;
});


//file type icons
function addFileIcon() {
  const fileLinks = document.querySelectorAll('a[href\$=\".pdf\"], a[href\$=\".doc\"], a[href\$=\".docx\"], a[href\$=\".xls\"], a[href\$=\".xlsx\"], a[href\$=\".ppt\"], a[href\$=\".pptx\"]');

  fileLinks.forEach(function(link) {
    const fileExtension = link.href.split('.').pop().toLowerCase();
    const fileIcon = link.querySelector('.file-icon');

    if (fileIcon !== null) {
      switch (fileExtension) {
        case 'pdf':
          fileIcon.classList.add('fa-regular', 'fa-file-pdf');
          break;
        case 'doc':
        case 'docx':
          fileIcon.classList.add('fa-solid', 'fa-file-word');
          break;
        case 'xls':
        case 'xlsx':
          fileIcon.classList.add('fa-solid', 'fa-file-excel');
          break;
        case 'ppt':
        case 'pptx':
          fileIcon.classList.add('fa-solid', 'fa-file-powerpoint');
          break;
        default:
          // no icon found
          break;
      }
    }
  });
}

  window.onload = addFileIcon;

// send fies function
{# var paperclip = document.querySelector('.fa-paperclip');
var fileInput = document.getElementById('file-input');
var filename = document.getElementById('file-label');
var chatContent = document.querySelector('.message-box');

paperclip.addEventListener('click', function () {
fileInput.click();
});

fileInput.addEventListener('change', function () {
if (fileInput.files && fileInput.files[0]) {
var file = fileInput.files[0];
var reader = new FileReader();
reader.onload = function (e) {
var fileData = e.target.result;
chatContent.value = fileData;
var fileName = file.name;
var fileIcon = getFileIcon(fileName);
var fileLabel = '<i class=\"' + fileIcon + '\"></i>' + fileName;
filename.innerHTML = fileLabel;
}
reader.readAsDataURL(file);
} else {
chatContent.value = '';
filename.innerHTML = '';
}
});

function getFileIcon(fileName) {
var fileExt = fileName.split('.').pop();
switch (fileExt) {
case 'pdf':
return 'far fa-file-pdf';
case 'png':
case 'jpg':
case 'jpeg':
return 'far fa-file-image';
case 'doc':
case 'docx':
return 'far fa-file-word';
case 'txt':
return 'far fa-file-alt';
case 'xlsx':
case 'xls':
return 'far fa-file-excel';
case 'pptx':
return 'far fa-file-powerpoint';
default:
return 'far fa-file';
}
} #}
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t{# <section id=\"main\" class=\"content-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block main %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/ Home
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section> #}

\t\t\t\t\t\t\t\t{% block content_footer_wrapper %}
\t\t\t\t\t\t\t\t\t{% set content_footer = block('content_footer') is defined ? block('content_footer') : '' %}
\t\t\t\t\t\t\t\t\t{% if content_footer is not empty %}
\t\t\t\t\t\t\t\t\t\t<section class=\"content-footer\">
\t\t\t\t\t\t\t\t\t\t\t{{ content_footer }}
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t{% endblock content %}

\t\t\t\t\t\t<div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
\t\t\t\t\t</div>
\t\t\t\t</body>
\t\t\t</html>
\t\t</body>
\t</body>
</html></section>{% endblock wrapper %}</div>{% endblock wrapper_wrapper %}{% block body_javascript %}{% endblock body_javascript %}{% block configured_body_contents %}{% for htmlContent in ea.assets.bodyContents ?? [] %}{{ htmlContent|raw }}{% endfor %}{% endblock %}</body>{% endblock body %}</html>
", "conversation/chat.html.twig", "C:\\wamp64\\www\\project\\crm-system\\templates\\conversation\\chat.html.twig");
    }
}
