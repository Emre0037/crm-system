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
        $context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
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
        // line 31
        echo "
\t\t";
        // line 32
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 36
        echo "
\t\t";
        // line 37
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 40
        echo "
\t\t";
        // line 41
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 51
        echo "
\t\t";
        // line 52
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 56
        echo "
\t\t";
        // line 57
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 57, $this->source); })()), "i18n", [], "any", false, false, false, 57), "textDirection", [], "any", false, false, false, 57))) {
            // line 58
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 58, $this->source); })()), "assets", [], "any", false, false, false, 58), "defaultAssetPackageName", [], "any", false, false, false, 58)), "html", null, true);
            echo "\">
\t\t";
        }
        // line 60
        echo "
\t\t";
        // line 61
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 66
        echo "\t</head>

\t";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 969
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
\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/admin2.scss"), "html", null, true);
        echo "\">
\t\t\t<link href='https://fonts.googleapis.com/css?family=Noto+Emoji' rel='stylesheet'>
\t\t


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 33
        echo "\t\t\t";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "cssAssets", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "cssAssets", [], "any", false, false, false, 33)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 33), "cssAssets", [], "any", false, false, false, 33)) : ([]))], false);
        echo "
\t\t\t";
        // line 34
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 34), "webpackEncoreAssets", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 34), "webpackEncoreAssets", [], "any", false, false, false, 34)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 34), "webpackEncoreAssets", [], "any", false, false, false, 34)) : ([]))], false);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 38
        echo "\t\t\t<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 38, $this->source); })()), "dashboardFaviconPath", [], "any", false, false, false, 38)), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 42
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 42, $this->source); })()), "assets", [], "any", false, false, false, 42), "defaultAssetPackageName", [], "any", false, false, false, 42)), "html", null, true);
        echo "\"></script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://johannburkard.de/resources/Johann/jquery.highlight-4.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js\"></script>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 53
        echo "\t\t\t";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 53), "jsAssets", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 53), "jsAssets", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 53), "jsAssets", [], "any", false, false, false, 53)) : ([]))], false);
        echo "
\t\t\t";
        // line 54
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 54), "webpackEncoreAssets", [], "any", true, true, false, 54) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 54), "webpackEncoreAssets", [], "any", false, false, false, 54)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 54), "webpackEncoreAssets", [], "any", false, false, false, 54)) : ([]))], false);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 62
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 62), "headContents", [], "any", true, true, false, 62) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 62), "headContents", [], "any", false, false, false, 62)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 62), "headContents", [], "any", false, false, false, 62)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 63
            echo "\t\t\t\t";
            echo $context["htmlContent"];
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "\t\t<body class=\"content1\" ";
        $this->displayBlock('body_attr', $context, $blocks);
        echo " id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\" data-ea-content-width=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 69), "contentWidth", [], "any", true, true, false, 69) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 69), "contentWidth", [], "any", false, false, false, 69)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 69), "contentWidth", [], "any", false, false, false, 69)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 69) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 69)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 69)) : ("normal")))), "html", null, true);
        echo "\" data-ea-sidebar-width=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 69), "sidebarWidth", [], "any", true, true, false, 69) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 69), "sidebarWidth", [], "any", false, false, false, 69)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 69), "sidebarWidth", [], "any", false, false, false, 69)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 69) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 69)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 69)) : ("normal")))), "html", null, true);
        echo "\" data-ea-dark-scheme-is-enabled=\"";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 69, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 69)) ? ("true") : ("false"));
        echo "\">
\t\t\t";
        // line 70
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 73
        echo "\t\t\t";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 76
        echo "
\t\t\t";
        // line 77
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 969
        $this->displayBlock('body_javascript', $context, $blocks);
        $this->displayBlock('configured_body_contents', $context, $blocks);
        echo "</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
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

    // line 70
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_layout"));

        // line 71
        echo "\t\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 71, $this->source); })()), "assets", [], "any", false, false, false, 71), "defaultAssetPackageName", [], "any", false, false, false, 71)), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_page_color_scheme"));

        // line 74
        echo "\t\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 74, $this->source); })()), "assets", [], "any", false, false, false, 74), "defaultAssetPackageName", [], "any", false, false, false, 74)), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 78
        echo "\t\t\t\t";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 81
        echo "
\t\t\t\t";
        // line 82
        ob_start();
        // line 83
        echo "\t\t\t\t";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 83, $this->source); })()), "userMenu", [], "any", false, false, false, 83), "avatarUrl", [], "any", false, false, false, 83))) {
            // line 84
            echo "\t\t\t\t\t<span class=\"user-avatar\">
\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t<i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
\t\t\t\t\t\t\t<i class=\"user-avatar-icon-foreground ";
            // line 87
            echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t<img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 91, $this->source); })()), "userMenu", [], "any", false, false, false, 91), "avatarUrl", [], "any", false, false, false, 91), "html", null, true);
            echo "\"/>
\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        echo "
\t\t\t\t";
        // line 95
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 96
        echo "
\t\t\t\t";
        // line 97
        ob_start();
        // line 98
        echo "\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t<li class=\"dropdown-user-details\">
\t\t\t\t\t\t<div>";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 102
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
            // line 103
            echo "\t\t\t\t\t\t\t\t<span class=\"user-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t<a class=\"inline-block navtext u-text-black-900 no-underline hover-2 py-2 px-4\" href=\"/";
        // line 106
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) ? ("public/logout") : ("public/login"));
        echo "\" @click=\"isOpen = false\">
\t\t\t\t\t\t\t\t\t";
        // line 107
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) ? ("Logout") : ("Login"));
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 113
        $this->displayBlock('user_menu', $context, $blocks);
        // line 132
        echo "\t\t\t\t</ul>
\t\t\t\t";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 134
        echo "
\t\t\t\t";
        // line 135
        ob_start();
        // line 136
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 136, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 136) || twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 136, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 136))) {
            // line 137
            echo "\t\t\t\t\t<div class=\"dropdown dropdown-settings\">
\t\t\t\t\t\t<a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fas fa-gear\"></i>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t";
            // line 143
            if (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 143, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 143)) {
                // line 144
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-header dropdown-locales-label\">";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 148, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 148));
                foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", [0 => "_locale", 1 => twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 150)], "method", false, false, false, 150), "html", null, true);
                    echo "\" class=\"dropdown-item";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "request", [], "any", false, false, false, 150), "locale", [], "any", false, false, false, 150) == twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 150))) {
                        echo " active";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 151
                    if (twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 151)) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 152), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 154), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeDto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t\t\t\t\t\t\t";
            }
            // line 159
            echo "
\t\t\t\t\t\t\t";
            // line 160
            if (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 160, $this->source); })()), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 160)) {
                // line 161
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 161, $this->source); })()), "dashboardLocales", [], "any", false, false, false, 161)) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<span class=\"dropdown-header dropdown-appearance-label\">";
                // line 166
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-sun\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-moon\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t\t\t\t\t\t<span>";
                // line 183
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 187
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t";
        $context["settings_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        echo "
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t";
        // line 193
        $this->displayBlock('wrapper', $context, $blocks);
        // line 969
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 79
        echo "\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 79, $this->source); })()), "templatePath", [0 => "flash_messages"], "method", false, false, false, 79));
        echo "
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_menu"));

        // line 114
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 114, $this->source); })()), "userMenu", [], "any", false, false, false, 114), "items", [], "any", false, false, false, 114)) > 0)) {
            // line 115
            echo "\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 116, $this->source); })()), "userMenu", [], "any", false, false, false, 116), "items", [], "any", false, false, false, 116));
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
                // line 117
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 118) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 118))) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 120
$context["item"], "isMenuSection", [], "any", false, false, false, 120)) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 121), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 121), "html", null, true);
                    echo "\" target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 121), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 121), "html", null, true);
                    echo "\" referrerpolicy=\"origin-when-cross-origin\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 122
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 122))) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 123), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 125), [],                     // line 2
(isset($context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"]) || array_key_exists("__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08", $context) ? $context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"] : (function () { throw new RuntimeError('Variable "__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08" does not exist.', 2, $this->source); })())), "html", null, true);
                    // line 125
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 128
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
            // line 130
            echo "\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 193
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 194
        echo "\t\t\t\t\t\t<div class=\"responsive-header\">
\t\t\t\t\t\t\t";
        // line 195
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 225
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t\t\t<aside class=\"sidebar\">
\t\t\t\t\t\t\t\t";
        // line 229
        $this->displayBlock('sidebar', $context, $blocks);
        // line 253
        echo "
\t\t\t\t\t\t\t\t<div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
\t\t\t\t\t\t\t</aside>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<section class=\"main-content\">
\t\t\t\t\t\t\t";
        // line 259
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 259, $this->source); })()), "crud", [], "any", false, false, false, 259)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 259, $this->source); })()), "crud", [], "any", false, false, false, 259), "isSearchEnabled", [], "any", false, false, false, 259));
        // line 260
        echo "\t\t\t\t\t\t\t<aside class=\"content-top ";
        echo (((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 260, $this->source); })())) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 261
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 335
        echo "\t\t\t\t\t\t\t</aside>

\t\t\t\t\t\t\t<div class=\"content-wrapper\">
\t\t\t\t\t\t\t\t";
        // line 338
        $this->displayBlock('content', $context, $blocks);
        // line 962
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

    // line 195
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 196
        echo "\t\t\t\t\t\t\t\t<button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-bars\"></i>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
\t\t\t\t\t\t\t\t\t";
        // line 201
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 206
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown user-menu-wrapper ";
        // line 208
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 208, $this->source); })()))) ? ("user-is-impersonated") : (""));
        echo " ms-auto\">
\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\tclass=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t";
        // line 213
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 213, $this->source); })()), "userMenu", [], "any", false, false, false, 213), "avatarDisplayed", [], "any", false, false, false, 213)) {
            // line 214
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 214, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 216
            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 218
        echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 220, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 223, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 201
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header_logo"));

        // line 202
        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 202, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 202)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 202, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 202));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 203
        echo twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 203, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 203);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 229
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 230
        echo "\t\t\t\t\t\t\t\t\t<header class=\"main-header\">
\t\t\t\t\t\t\t\t\t\t";
        // line 231
        $this->displayBlock('header', $context, $blocks);
        // line 247
        echo "\t\t\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t\t\t";
        // line 249
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 252
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 231
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 232
        echo "\t\t\t\t\t\t\t\t\t\t\t<nav class=\"navbar\" role=\"navigation\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 233
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 245
        echo "\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 233
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navbar"));

        // line 234
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"header-logo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 235
        $this->displayBlock('header_logo', $context, $blocks);
        // line 243
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 235
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 236
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 236, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 236)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 236, $this->source); })()), "dashboardRouteName", [], "any", false, false, false, 236));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-custom\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo-emre1.png"), "html", null, true);
        echo "\" class=\"logo-emre\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 237, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 237);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"logo-compact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 249
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 250
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 250, $this->source); })()), "templatePath", [0 => "main_menu"], "method", false, false, false, 250));
        echo "
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 261
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top_header"));

        // line 262
        echo "\t\t\t\t\t\t\t\t\t<div class=\"content-search\">
\t\t\t\t\t\t\t\t\t\t";
        // line 263
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 263, $this->source); })())) {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $this->displayBlock('search', $context, $blocks);
            // line 314
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-custom-menu\">

\t\t\t\t\t\t\t\t\t\t";
        // line 319
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 331
        echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
        // line 333
        echo twig_escape_filter($this->env, (isset($context["settings_dropdown"]) || array_key_exists("settings_dropdown", $context) ? $context["settings_dropdown"] : (function () { throw new RuntimeError('Variable "settings_dropdown" does not exist.', 333, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 264
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 265
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"form-action-search\" method=\"get\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 267
        $this->displayBlock('search_form', $context, $blocks);
        // line 312
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 267
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 268
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 289
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudAction\" value=\"index\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 291, $this->source); })()), "request", [], "any", false, false, false, 291), "query", [], "any", false, false, false, 291), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 291), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 292, $this->source); })()), "request", [], "any", false, false, false, 292), "query", [], "any", false, false, false, 292), "get", [0 => "menuIndex"], "method", false, false, false, 292), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "query", [], "any", false, false, false, 293), "get", [0 => "submenuIndex"], "method", false, false, false, 293), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-widget\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search content-search-icon\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"content-search-label\" data-value=\"";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "request", [], "any", false, false, false, 300), "get", [0 => "query"], "method", false, false, false, 300), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control ";
        // line 301
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 301, $this->source); })()), "request", [], "any", false, false, false, 301), "get", [0 => "query"], "method", false, false, false, 301))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 301), "get", [0 => "query"], "method", true, true, false, 301) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 301), "get", [0 => "query"], "method", false, false, false, 301)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 301), "get", [0 => "query"], "method", false, false, false, 301), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 301, $this->source); })()), "i18n", [], "any", false, false, false, 301), "translationParameters", [], "any", false, false, false, 301), "EasyAdminBundle"), [],         // line 2
(isset($context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"]) || array_key_exists("__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08", $context) ? $context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"] : (function () { throw new RuntimeError('Variable "__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 301
        echo "\" spellcheck=\"false\" autocorrect=\"off\" oninput=\"this.parentNode.dataset.value=this.value\" ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 301, $this->source); })()), "crud", [], "any", false, false, false, 301), "currentAction", [], "any", false, false, false, 301) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 301, $this->source); })()), "crud", [], "any", false, false, false, 301), "autofocusSearch", [], "any", false, false, false, 301) == true))) {
            echo " autofocus=\"autofocus\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 304
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 304, $this->source); })()), "request", [], "any", false, false, false, 304), "get", [0 => "query"], "method", false, false, false, 304)) {
            // line 305
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 305), "html", null, true);
            echo "\" class=\"content-search-reset\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-fw fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 309
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 268
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form_filters"));

        // line 269
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 269, $this->source); })()), "search", [], "any", false, false, false, 269), "appliedFilters", [], "any", false, false, false, 269));
        foreach ($context['_seq'] as $context["field"] => $context["array"]) {
            // line 270
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["array"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 271
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_test_iterable($context["value"])) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                        // line 274
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 275
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_test_iterable($context["iterValue"])) {
                            // line 276
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                            foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                // line 277
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
                            // line 279
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 280
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
                        // line 282
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filters[";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 319
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 320
        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["impersonator_permission"]) || array_key_exists("impersonator_permission", $context) ? $context["impersonator_permission"] : (function () { throw new RuntimeError('Variable "impersonator_permission" does not exist.', 320, $this->source); })()))) ? ("user-is-impersonated") : (""));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["user_menu_avatar"]) || array_key_exists("user_menu_avatar", $context) ? $context["user_menu_avatar"] : (function () { throw new RuntimeError('Variable "user_menu_avatar" does not exist.', 322, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 323
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 323, $this->source); })()), "userMenu", [], "any", false, false, false, 323), "isNameDisplayed", [], "any", false, false, false, 323)) {
            // line 324
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 324, $this->source); })()), "userMenu", [], "any", false, false, false, 324), "name", [], "any", false, false, false, 324), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 326
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["user_menu_dropdown"]) || array_key_exists("user_menu_dropdown", $context) ? $context["user_menu_dropdown"] : (function () { throw new RuntimeError('Variable "user_menu_dropdown" does not exist.', 328, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 338
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 339
        echo "\t\t\t\t\t\t\t\t\t<article class=\"content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 340
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 477
        echo "


\t\t\t\t\t\t\t\t\t<!-- MDB -->


\t\t\t\t\t\t\t\t\t";
        // line 490
        echo "\t\t\t\t\t\t\t\t\t<div class=\"chat-box2 test5\">

\t\t\t\t\t\t\t\t\t\t<div id=\"content \"class=\"container py-5\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 chatbox1 col-lg-5 col-xl-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body2\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIncoming messages
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mb-0\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 508
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 509
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter($this->env, (isset($context["data2"]) || array_key_exists("data2", $context) ? $context["data2"] : (function () { throw new RuntimeError('Variable "data2" does not exist.', 509, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 509, $this->source); })()), "created_at", [], "any", false, false, false, 509) < twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 509, $this->source); })()), "created_at", [], "any", false, false, false, 509)); }), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 510
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 510), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 510, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 510) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 510, $this->source); })()), "user", [], "any", false, false, false, 510), "id", [], "any", false, false, false, 510)))) {
                // line 511
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 512
                if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 512) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 512, $this->source); })()), "user", [], "any", false, false, false, 512), "id", [], "any", false, false, false, 512)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 512)))) {
                    // line 513
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel flex-row\"> <img src=\"";
                    // line 514
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 514), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 516
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 516), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 516), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 517
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 517), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 520
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 520), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small timeago text-muted mb-1\">";
                    // line 524
                    echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 524)), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1 \">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 528
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 529
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"section2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFriends
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 536
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 537
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data3"]) || array_key_exists("data3", $context) ? $context["data3"] : (function () { throw new RuntimeError('Variable "data3" does not exist.', 537, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 538
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 539
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 539), (isset($context["conversationgroupIds"]) || array_key_exists("conversationgroupIds", $context) ? $context["conversationgroupIds"] : (function () { throw new RuntimeError('Variable "conversationgroupIds" does not exist.', 539, $this->source); })()))) {
                // line 540
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 540), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 540, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 540) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 540, $this->source); })()), "user", [], "any", false, false, false, 540), "id", [], "any", false, false, false, 540)))) {
                    // line 541
                    echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 544
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex userlabel friendssection flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 546
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 546), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 548
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 548), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 548), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 549
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 549), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 552
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 552), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 553
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 553), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small  text-muted mb-1\"></p>
\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t<div class=\"dropdown3-content\">
\t\t<p class=\"text-info\">View profiel<a href=\"";
                    // line 561
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 561), "idconversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 561)]), "html", null, true);
                    echo "\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
                    // line 565
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_group", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 565, $this->source); })()), "user", [], "any", false, false, false, 565), "id", [], "any", false, false, false, 565), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 565, $this->source); })())]), "html", null, true);
                    echo "\"><i class=\"fa-solid fa-trash-can deleteicon1\"></i></a></p><br>
\t</div>
</div>
\t";
                }
                // line 569
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 570
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 571
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGroups
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 574
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data5"]) || array_key_exists("data5", $context) ? $context["data5"] : (function () { throw new RuntimeError('Variable "data5" does not exist.', 574, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 575
            echo "\t\t
\t\t\t\t\t
\t\t\t";
            // line 577
            if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 577), (isset($context["conversationgroupIds"]) || array_key_exists("conversationgroupIds", $context) ? $context["conversationgroupIds"] : (function () { throw new RuntimeError('Variable "conversationgroupIds" does not exist.', 577, $this->source); })()))) {
                // line 578
                echo "                   \t";
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 578), (isset($context["conversationIds"]) || array_key_exists("conversationIds", $context) ? $context["conversationIds"] : (function () { throw new RuntimeError('Variable "conversationIds" does not exist.', 578, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 578) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "user", [], "any", false, false, false, 578), "id", [], "any", false, false, false, 578)))) {
                    // line 579
                    echo "       
\t\t\t 
\t\t\t\t
\t\t";
                    // line 583
                    echo "             \t<li class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <img src=\"data:image/jpeg;base64,";
                    // line 586
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "image", [], "any", false, false, false, 586), "html", null, true);
                    echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://crm-system:2525/public/messages/";
                    // line 588
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "id", [], "any", false, false, false, 588), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 588), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                    // line 589
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_name", [], "any", false, false, false, 589), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 592
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "group_disc", [], "any", false, false, false, 592), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-1\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 600
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.group_info", ["idConversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 600)]), "html", null, true);
                    echo "\"><p>Group info
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-people-group topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"deletegroup/";
                    // line 605
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 605, $this->source); })()), "user", [], "any", false, false, false, 605), "id", [], "any", false, false, false, 605), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 605), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-trash-can deleteicon2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 612
                    echo "                   ";
                }
                // line 613
                echo "\t\t\t\t          ";
            }
            // line 614
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 615
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 616
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 627
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 628
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-lg-7 chatbox3 col-xl-8\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 632
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 632, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 632, $this->source); })()), "created_at", [], "any", false, false, false, 632) > twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 632, $this->source); })()), "created_at", [], "any", false, false, false, 632)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 633
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 634
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled myUL\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 638
            if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "user_id", [], "any", false, false, false, 638) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 638, $this->source); })()), "user", [], "any", false, false, false, 638), "id", [], "any", false, false, false, 638)) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 638) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 638, $this->source); })()), "request", [], "any", false, false, false, 638), "requesturi", [], "any", false, false, false, 638), "/")))))) {
                // line 639
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=";
                // line 642
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 642), "html", null, true);
                echo " alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 647
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 647), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 651
                echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 651)), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 655
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 655), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/";
                // line 656
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 656), "html", null, true);
                echo "\"><i class=\"fa-solid fa-trash-can deleteicon\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 663
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 666
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "user_id", [], "any", false, false, false, 666) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 666, $this->source); })()), "user", [], "any", false, false, false, 666), "id", [], "any", false, false, false, 666)) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 666) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 666, $this->source); })()), "request", [], "any", false, false, false, 666), "requesturi", [], "any", false, false, false, 666), "/")))))) {
                // line 667
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 672
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 672), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 676
                echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "created_at", [], "any", false, false, false, 676)), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 685
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "content", [], "any", false, false, false, 685), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/";
                // line 688
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 688), "html", null, true);
                echo "\"><i class=\"fa-solid fa-trash-can deleteicon\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 693
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 693), "html", null, true);
                echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 696
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 699
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagemenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 706
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 706, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 708
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 709
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 709, $this->source); })()), "user", [], "any", false, false, false, 709), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 709, $this->source); })()), "user", [], "any", false, false, false, 709), "id", [], "any", false, false, false, 709)]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 710, $this->source); })()), "conversation", [], "any", false, false, false, 710), 'row', ["value" => twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 710, $this->source); })()), "request", [], "any", false, false, false, 710), "requesturi", [], "any", false, false, false, 710), "/")))]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-face-grin-wide messageicon3\"></i>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-paperclip messageicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"chatbox4 \" id=\"emojis\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"emoji-picker-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 718, $this->source); })()), "content", [], "any", false, false, false, 718), 'row', ["label" => false, "attr" => ["class" => "message-box"]]);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


<button class=\"sendbutton\" type=\"submit\">
  <svg class=\"btn-layer\">
    <path d=\"M136,77.5c0,0-11.7,0-12,0c-90,0-94.2,0-94.2,0s-10.8,0-25.1,0c-0.2,0-0.8,0-0.8,0c-2.2,0-4-1.8-4-4v-47  c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0c39.1,0,61.1,0,61.1,0s3,0,69.1,0c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47  C140,75.7,138.2,77.5,136,77.5z\"/>
  </svg>
  <svg class=\"plane\">
    <use xlink:href=\"#plane\" />
  </svg>
 
</button>

<!-- SVG -->
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 140 100\" id=\"btn-layer\" preserveAspectRatio=\"none\">
    <path d=\"M133,77.5H7c-3.9,0-7-3.1-7-7v-41c0-3.9,3.1-7,7-7h126c3.9,0,7,3.1,7,7v41C140,74.4,136.9,77.5,133,77.5z\"/>
  </symbol>
  <symbol xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 26\" id=\"plane\" preserveAspectRatio=\"none\">
    <path d=\"M5.25,15.24,18.42,3.88,7.82,17l0,4.28a.77.77,0,0,0,1.36.49l3-3.68,5.65,2.25a.76.76,0,0,0,1-.58L22,.89A.77.77,0,0,0,20.85.1L.38,11.88a.76.76,0,0,0,.09,1.36Z\" />
  </symbol>
</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 747
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["chatForm"]) || array_key_exists("chatForm", $context) ? $context["chatForm"] : (function () { throw new RuntimeError('Variable "chatForm" does not exist.', 747, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 753
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/emojiLib/jquery-3.6.3.js"), "html", null, true);
        echo "\"></script>


\t\t\t\t\t\t\t\t<script src=\"";
        // line 759
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

//searchbar function
document.getElementById('my-button').onclick = function() {
\tdocument.getElementById('my-input').classList.toggle('show');
}

\t//classnames icons
    var buttons = document.getElementsByClassName(\"fa-gear\");
\tvar searchbutton = document.getElementsByClassName(\" fa-magnifying-glass\");
\tvar deletebutton = document.getElementsByClassName(\" fa-trash-can\");
  
  //this is for the setting icon
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener(\"click\", function() {
      this.classList.toggle(\"fa-spin\");
    });
  }
  document.addEventListener(\"click\", function(event) {
    var target = event.target;
    var isButton = false;

    for (var i = 0; i < buttons.length; i++) {
      if (target == buttons[i]) {
        isButton = true;
        break;
      }
    }

    if (!isButton) {
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove(\"fa-spin\" );
      }
    }
  });

 // this is for the search icon

  for (var i = 0; i < searchbutton.length; i++) {
    searchbutton[i].addEventListener(\"click\", function() {
      if (this.classList.contains(\"fa-beat\")) {
        this.classList.remove(\"fa-beat\");
      } else {
        this.classList.add(\"fa-beat\");
      }
    });
  }

  // this is for the delete button
  for (var i = 0; i < deletebutton.length; i++) {
    deletebutton[i].addEventListener(\"click\", function() {
      this.classList.toggle(\"fa-beat-fade\");
    });
  }
  document.addEventListener(\"click\", function(event) {
    var target = event.target;
    var isButton = false;

    for (var i = 0; i < deletebutton.length; i++) {
      if (target == deletebutton[i]) {
        isButton = true;
        break;
      }
    }

    if (!isButton) {
      for (var i = 0; i < deletebutton.length; i++) {
        deletebutton[i].classList.remove(\"fa-beat-fade\" );
      }
    }
  });
//search filter function
jQuery.fn.highlight = function(pat) {
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
  }
  else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
   for (var i = 0; i < node.childNodes.length; ++i) {
    i += innerHighlight(node.childNodes[i], pat);
   }
  }
  return skip;
 }
 return this.length && pat && pat.length ? this.each(function() {
  innerHighlight(this, pat.toUpperCase());
 }) : this;
};

jQuery.fn.removeHighlight = function() {
 return this.find(\"span.highlight\").each(function() {
  this.parentNode.firstChild.nodeName;
  with (this.parentNode) {
   replaceChild(this.firstChild, this);
   normalize();
  }
 }).end();
};

\$(document).ready(function(){
    \$('#my-input').on('input',function(){
        \$('.messagecontent').removeHighlight().highlight(\$(this).val()); 
    });        
});

//sendbutton aniamtion
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

    document.addEventListener(\"click\", function(event) {
      if (!dropdownContainer.contains(event.target) && event.target !== element) {
        dropdownContainer.style.display = \"none\";
      }
    });
  }
}


\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t";
        // line 951
        echo "
\t\t\t\t\t\t\t\t";
        // line 952
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 960
        echo "\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 340
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header_wrapper"));

        // line 341
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 341), "helpMessage", [], "any", true, true, false, 341) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 341), "helpMessage", [], "any", false, false, false, 341)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 341), "helpMessage", [], "any", false, false, false, 341)) : ("")));
        // line 342
        echo "\t\t\t\t\t\t\t\t\t\t\t<section class=\"content-header1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 343
        $this->displayBlock('content_header', $context, $blocks);
        // line 432
        echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-header2\">
\t";
        // line 435
        if (((isset($context["isGroup"]) || array_key_exists("isGroup", $context) ? $context["isGroup"] : (function () { throw new RuntimeError('Variable "isGroup" does not exist.', 435, $this->source); })()) == true)) {
            // line 436
            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\"  onclick=\"clickMe()\" ></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\"  class=\"searchbar\"></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t<div class=\"dropdown3-content\">
\t\t<p>Send<i class=\"fa-solid topmenuicon4 fa-share\"></i></p><br><br>
\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
            // line 449
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_group", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "id", [], "any", false, false, false, 449), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 449, $this->source); })())]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash-can deleteicon1\"></i></a></p><br>
\t</div>
</div>



\t";
        } else {
            // line 456
            echo "\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\"  onclick=\"clickMe()\" ></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\"  class=\"searchbar\"></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t<div class=\"dropdown3-content\">
\t\t<p>Send<i class=\"fa-solid topmenuicon4 fa-share\"></i></p><br><br>
\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"";
            // line 469
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.category_delete_user", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 469, $this->source); })()), "user", [], "any", false, false, false, 469), "id", [], "any", false, false, false, 469), "idConversation" => (isset($context["conversation_id"]) || array_key_exists("conversation_id", $context) ? $context["conversation_id"] : (function () { throw new RuntimeError('Variable "conversation_id" does not exist.', 469, $this->source); })())]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash-can deleteicon1\"></i></a></p><br>
\t</div>
</div>


\t";
        }
        // line 475
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 343
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 344
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-header-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 346
        $this->displayBlock('content_title', $context, $blocks);
        // line 347
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 349
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"logo-emre1\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Logo-emre1.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChatroom

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data3"]) || array_key_exists("data3", $context) ? $context["data3"] : (function () { throw new RuntimeError('Variable "data3" does not exist.', 352, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 353
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 353) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "user", [], "any", false, false, false, 353), "id", [], "any", false, false, false, 353)) && (twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 353) == twig_first($this->env, twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 353, $this->source); })()), "request", [], "any", false, false, false, 353), "requesturi", [], "any", false, false, false, 353), "/")))))) {
                // line 354
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"topuserinfosection\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex topmenulabel flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 356
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 356), "html", null, true);
                echo "\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 359
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages.user_info", ["userid" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 359), "idconversation" => twig_get_attribute($this->env, $this->source, $context["chat_data"], "conversation_id", [], "any", false, false, false, 359)]), "html", null, true);
                echo "\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">";
                // line 360
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "email", [], "any", false, false, false, 360), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 363
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 363), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 364
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 364), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 368
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 369
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data4"]) || array_key_exists("data4", $context) ? $context["data4"] : (function () { throw new RuntimeError('Variable "data4" does not exist.', 371, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["chat_data"]) {
            // line 372
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  id=\"overlay-";
            // line 373
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "id", [], "any", false, false, false, 373), "html", null, true);
            echo "\" class=\"overlay\">


\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"close close-icon\" href=\"#\">&times;</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold headtext2 mb-3 \">";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 381), "html", null, true);
            echo "'s Profile
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "avatar", [], "any", false, false, false, 383), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"underline\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold  profileheadtext profiletextsection mb-0\">full name</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 393
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 394
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "firstname", [], "any", false, false, false, 394), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 395
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "lastname", [], "any", false, false, false, 395), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\" profiletextsection profileheadtext fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chat_data"], "emailfull", [], "any", false, false, false, 405), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon2 fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chat_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 419
        $this->displayBlock('content_help', $context, $blocks);
        // line 426
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 431
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 346
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

    // line 419
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_help"));

        // line 420
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["has_help_message"]) || array_key_exists("has_help_message", $context) ? $context["has_help_message"] : (function () { throw new RuntimeError('Variable "has_help_message" does not exist.', 420, $this->source); })())) {
            // line 421
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 421, $this->source); })()), "crud", [], "any", false, false, false, 421), "helpMessage", [], "any", false, false, false, 421), [],             // line 2
(isset($context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"]) || array_key_exists("__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08", $context) ? $context["__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08"] : (function () { throw new RuntimeError('Variable "__internal_e853742f0841227e3cc47f74a9a62374eb0c107567ba5d9215508b2f4c02ca08" does not exist.', 2, $this->source); })())), "html_attr");
            // line 421
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-question-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 425
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 426
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions_wrapper"));

        // line 427
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 428
        $this->displayBlock('page_actions', $context, $blocks);
        // line 429
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 428
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

    // line 952
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        // line 953
        echo "\t\t\t\t\t\t\t\t\t";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 954
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !twig_test_empty((isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 954, $this->source); })()))) {
            // line 955
            echo "\t\t\t\t\t\t\t\t\t\t<section class=\"content-footer\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 956
            echo twig_escape_filter($this->env, (isset($context["content_footer"]) || array_key_exists("content_footer", $context) ? $context["content_footer"] : (function () { throw new RuntimeError('Variable "content_footer" does not exist.', 956, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t";
        }
        // line 959
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 969
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
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 969), "bodyContents", [], "any", true, true, false, 969) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 969), "bodyContents", [], "any", false, false, false, 969)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 969), "bodyContents", [], "any", false, false, false, 969)) : ([])));
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
        return array (  2565 => 969,  2555 => 959,  2549 => 956,  2546 => 955,  2543 => 954,  2540 => 953,  2530 => 952,  2512 => 428,  2501 => 429,  2499 => 428,  2496 => 427,  2486 => 426,  2476 => 425,  2470 => 421,  2468 => 2,  2466 => 421,  2463 => 420,  2453 => 419,  2435 => 346,  2425 => 431,  2422 => 426,  2420 => 419,  2412 => 413,  2398 => 405,  2385 => 395,  2381 => 394,  2378 => 393,  2368 => 383,  2363 => 381,  2352 => 373,  2349 => 372,  2345 => 371,  2341 => 369,  2335 => 368,  2328 => 364,  2324 => 363,  2318 => 360,  2314 => 359,  2308 => 356,  2304 => 354,  2301 => 353,  2297 => 352,  2290 => 349,  2288 => 347,  2286 => 346,  2282 => 344,  2272 => 343,  2261 => 475,  2252 => 469,  2237 => 456,  2227 => 449,  2212 => 436,  2210 => 435,  2205 => 432,  2203 => 343,  2200 => 342,  2197 => 341,  2187 => 340,  2176 => 960,  2174 => 952,  2171 => 951,  1988 => 759,  1982 => 756,  1977 => 753,  1969 => 747,  1937 => 718,  1926 => 710,  1922 => 709,  1919 => 708,  1915 => 706,  1907 => 700,  1901 => 699,  1897 => 696,  1891 => 693,  1883 => 688,  1876 => 685,  1868 => 676,  1861 => 672,  1854 => 667,  1851 => 666,  1847 => 663,  1837 => 656,  1833 => 655,  1826 => 651,  1819 => 647,  1811 => 642,  1806 => 639,  1804 => 638,  1798 => 634,  1796 => 633,  1791 => 632,  1786 => 628,  1784 => 627,  1772 => 616,  1770 => 615,  1764 => 614,  1761 => 613,  1758 => 612,  1747 => 605,  1739 => 600,  1728 => 592,  1722 => 589,  1716 => 588,  1711 => 586,  1706 => 583,  1701 => 579,  1698 => 578,  1696 => 577,  1692 => 575,  1688 => 574,  1683 => 571,  1677 => 570,  1674 => 569,  1667 => 565,  1660 => 561,  1649 => 553,  1645 => 552,  1639 => 549,  1633 => 548,  1628 => 546,  1624 => 544,  1620 => 541,  1617 => 540,  1615 => 539,  1612 => 538,  1608 => 537,  1605 => 536,  1598 => 530,  1592 => 529,  1589 => 528,  1582 => 524,  1575 => 520,  1569 => 517,  1563 => 516,  1558 => 514,  1555 => 513,  1553 => 512,  1550 => 511,  1547 => 510,  1542 => 509,  1540 => 508,  1521 => 490,  1513 => 477,  1511 => 340,  1508 => 339,  1498 => 338,  1485 => 328,  1481 => 326,  1475 => 324,  1473 => 323,  1469 => 322,  1463 => 320,  1453 => 319,  1443 => 288,  1437 => 287,  1431 => 286,  1421 => 284,  1418 => 283,  1412 => 282,  1400 => 280,  1397 => 279,  1380 => 277,  1375 => 276,  1372 => 275,  1370 => 274,  1365 => 273,  1362 => 272,  1360 => 271,  1355 => 270,  1350 => 269,  1340 => 268,  1328 => 309,  1320 => 305,  1318 => 304,  1309 => 301,  1307 => 2,  1302 => 301,  1298 => 300,  1288 => 293,  1284 => 292,  1280 => 291,  1276 => 289,  1273 => 268,  1263 => 267,  1252 => 312,  1250 => 267,  1246 => 265,  1236 => 264,  1224 => 333,  1220 => 331,  1218 => 319,  1212 => 315,  1209 => 314,  1206 => 264,  1204 => 263,  1201 => 262,  1191 => 261,  1178 => 250,  1168 => 249,  1150 => 237,  1143 => 236,  1133 => 235,  1122 => 243,  1120 => 235,  1117 => 234,  1107 => 233,  1096 => 245,  1094 => 233,  1091 => 232,  1081 => 231,  1071 => 252,  1069 => 249,  1065 => 247,  1063 => 231,  1060 => 230,  1050 => 229,  1037 => 203,  1030 => 202,  1020 => 201,  1008 => 223,  1002 => 220,  998 => 218,  992 => 216,  986 => 214,  983 => 213,  977 => 208,  973 => 206,  971 => 201,  964 => 196,  954 => 195,  937 => 962,  935 => 338,  930 => 335,  928 => 261,  923 => 260,  921 => 259,  913 => 253,  911 => 229,  905 => 225,  903 => 195,  900 => 194,  890 => 193,  880 => 131,  877 => 130,  862 => 128,  857 => 125,  855 => 2,  853 => 125,  847 => 123,  845 => 122,  834 => 121,  832 => 120,  829 => 119,  827 => 118,  824 => 117,  807 => 116,  804 => 115,  801 => 114,  791 => 113,  778 => 79,  768 => 78,  758 => 969,  756 => 193,  752 => 191,  749 => 190,  744 => 187,  737 => 183,  728 => 177,  719 => 171,  711 => 166,  707 => 164,  703 => 162,  700 => 161,  698 => 160,  695 => 159,  692 => 158,  681 => 154,  675 => 152,  673 => 151,  665 => 150,  662 => 149,  658 => 148,  652 => 145,  649 => 144,  647 => 143,  639 => 137,  636 => 136,  634 => 135,  631 => 134,  627 => 132,  625 => 113,  616 => 107,  612 => 106,  609 => 105,  603 => 103,  601 => 102,  596 => 100,  592 => 98,  590 => 97,  587 => 96,  585 => 95,  582 => 94,  579 => 93,  573 => 91,  566 => 87,  561 => 84,  558 => 83,  556 => 82,  553 => 81,  550 => 78,  540 => 77,  527 => 74,  517 => 73,  504 => 71,  494 => 70,  441 => 69,  429 => 969,  427 => 77,  424 => 76,  421 => 73,  419 => 70,  404 => 69,  394 => 68,  384 => 65,  375 => 63,  370 => 62,  360 => 61,  348 => 54,  343 => 53,  333 => 52,  313 => 42,  303 => 41,  290 => 38,  280 => 37,  268 => 34,  263 => 33,  253 => 32,  237 => 25,  233 => 24,  228 => 23,  218 => 22,  205 => 17,  195 => 16,  180 => 8,  170 => 7,  159 => 969,  157 => 68,  153 => 66,  151 => 61,  148 => 60,  142 => 58,  140 => 57,  137 => 56,  135 => 52,  132 => 51,  130 => 41,  127 => 40,  125 => 37,  122 => 36,  120 => 32,  117 => 31,  115 => 22,  109 => 20,  106 => 19,  103 => 16,  101 => 15,  98 => 14,  96 => 7,  89 => 5,  85 => 3,  83 => 2,);
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
\t\t\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('/public/admin2.scss') }}\">
\t\t\t<link href='https://fonts.googleapis.com/css?family=Noto+Emoji' rel='stylesheet'>
\t\t


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

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://johannburkard.de/resources/Johann/jquery.highlight-4.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js\"></script>


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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                   and hide the user name (because there's no space left) regardless of the user config #}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"logo-emre1\" src=\"{{asset('images/Logo-emre1.png')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tChatroom

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data3 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.id != app.user.id and chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"topuserinfosection\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex topmenulabel flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-1\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('messages.user_info', { 'userid': chat_data.id , 'idconversation': chat_data.conversation_id}) }}\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">{{ chat_data.email }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.firstname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.lastname }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data4 %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  id=\"overlay-{{chat_data.id}}\" class=\"overlay\">


\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"close close-icon\" href=\"#\">&times;</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"font-weight-bold headtext2 mb-3 \">{{ chat_data.firstname }}'s Profile
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex avatarprofile align-self-center me-3 shadow-1-strong\" width=\"140\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"underline\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pt-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold  profileheadtext profiletextsection mb-0\">full name</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {% block edit_form %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        {{ form(edit_form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% endblock edit_form %} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.firstname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.lastname }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\" profiletextsection profileheadtext fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEmail</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"profiletextsection profiletext small text-muted\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{\tchat_data.emailfull\t}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid editicon2 fa-pen\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

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
\t{% if isGroup == true %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\"  onclick=\"clickMe()\" ></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\"  class=\"searchbar\"></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t<div class=\"dropdown3-content\">
\t\t<p>Send<i class=\"fa-solid topmenuicon4 fa-share\"></i></p><br><br>
\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_group', { 'id': app.user.id, 'idConversation': conversation_id }) }}\"><i class=\"fa-solid fa-trash-can deleteicon1\"></i></a></p><br>
\t</div>
</div>



\t{% else %}
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-magnifying-glass topmenuicon2\" id=\"my-button\"  onclick=\"clickMe()\" ></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"span searchbar-location\"><input type=\"search\" placeholder=\"Search by..\" oninput=\"this.parentNode.dataset.value=this.value\" id=\"my-input\"  class=\"searchbar\"></span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown3\">

\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon5\" onclick=\"toggleDropdown(this)\"></i>
\t<div class=\"dropdown3-content\">
\t\t<p>Send<i class=\"fa-solid topmenuicon4 fa-share\"></i></p><br><br>
\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_user', { 'id': app.user.id, 'idConversation': conversation_id }) }}\"><i class=\"fa-solid fa-trash-can deleteicon1\"></i></a></p><br>
\t</div>
</div>


\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endblock content_header_wrapper %}



\t\t\t\t\t\t\t\t\t<!-- MDB -->


\t\t\t\t\t\t\t\t\t{# <style>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t .card {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    border: 0;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</style> #}
\t\t\t\t\t\t\t\t\t<div class=\"chat-box2 test5\">

\t\t\t\t\t\t\t\t\t\t<div id=\"content \"class=\"container py-5\">

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
\t<i class=\"fa-solid fa-ellipsis-vertical topmenuicon3\" onclick=\"toggleDropdown(this)\"></i>
\t<div class=\"dropdown3-content\">
\t\t<p class=\"text-info\">View profiel<a href=\"{{ path('messages.user_info', { 'userid': chat_data.id , 'idconversation': chat_data.conversation_id}) }}\" class=\"a-profile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" fa-solid fa-address-card topmenuicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p><br><br>
\t\t<p class=\"text-danger textsection\">Delete<a class=\"text-white font-weight-bold\" href=\"{{ path('messages.category_delete_group', { 'id': app.user.id, 'idConversation': conversation_id }) }}\"><i class=\"fa-solid fa-trash-can deleteicon1\"></i></a></p><br>
\t</div>
</div>
\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"sectionlabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGroups
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for chat_data in data5 %}
\t\t
\t\t\t\t\t
\t\t\t{% if chat_data.id not in conversationgroupIds %}
                   \t{% if chat_data.id in conversationIds and chat_data.id != app.user.id %}
       
\t\t\t 
\t\t\t\t
\t\t{#link kan moeten verander van ap.user.id naar conversation_id #}
             \t<li class=\"p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <img src=\"data:image/jpeg;base64,{{ chat_data.image }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-center me-3 shadow-1-strong\" width=\"60\">
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
\t\t\t\t\t\t{# {{chat_data.group_name}} #}
                   {% endif %}
\t\t\t\t          {% endif %}
\t\t\t\t\t\t{% endfor %}
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
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-lg-7 chatbox3 col-xl-8\">
\t\t\t\t\t\t\t\t\t\t\t\t{# RECHTE KANT #}
\t\t\t\t\t\t\t\t\t\t\t\t{% for chat_data in data|sort((a, b) => a.created_at > b.created_at)  %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <input type=\"submit\" value=\"Submit\"> <a href=\"/delete\"></a></input>> #}


\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled myUL\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.user_id != app.user.id and chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src={{ chat_data.avatar }} alt=\"avatar\" class=\"rounded-circle d-flex align-self-start me-3 shadow-1-strong\" width=\"60\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#popup1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/{{ chat_data.id}}\"><i class=\"fa-solid fa-trash-can deleteicon\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ app.request.requesturi|last}} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if chat_data.user_id == app.user.id and chat_data.conversation_id == app.request.requesturi|split('/')|reverse|first %}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between mb-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header d-flex justify-content-between p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.email }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.created_at|time_diff }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"mb-0 messagecontent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ form_start(chatDelete) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  {{\tform_widget(chatDelete)\t}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  {{\tform_end(chatDelete)}} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ chat_data.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-white font-weight-bold\" href=\"delete/{{ chat_data.id}}\"><i class=\"fa-solid fa-trash-can deleteicon\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ chat_data.avatar }}\" alt=\"avatar\" class=\"rounded-circle d-flex align-self-start ms-3 shadow-1-strong\" width=\"60\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ convid }} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagemenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"messagebox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(chatForm) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ form_row(chatForm.content) }} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(chatForm.user, {'value' :  app.user.id  }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(chatForm.conversation , {'value' : (app.request.requesturi|split('/')|reverse|first) }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-face-grin-wide messageicon3\"></i>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-paperclip messageicon4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"chatbox4 \" id=\"emojis\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"emoji-picker-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(chatForm.content, {'label':false, 'attr': {'class': 'message-box'} } )}}

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>


<button class=\"sendbutton\" type=\"submit\">
  <svg class=\"btn-layer\">
    <path d=\"M136,77.5c0,0-11.7,0-12,0c-90,0-94.2,0-94.2,0s-10.8,0-25.1,0c-0.2,0-0.8,0-0.8,0c-2.2,0-4-1.8-4-4v-47  c0-2.2,1.8-4,4-4c0,0,0.6,0,0.9,0c39.1,0,61.1,0,61.1,0s3,0,69.1,0c0.2,0,0.9,0,0.9,0c2.2,0,4,1.8,4,4v47  C140,75.7,138.2,77.5,136,77.5z\"/>
  </svg>
  <svg class=\"plane\">
    <use xlink:href=\"#plane\" />
  </svg>
 
</button>

<!-- SVG -->
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
  <symbol xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 140 100\" id=\"btn-layer\" preserveAspectRatio=\"none\">
    <path d=\"M133,77.5H7c-3.9,0-7-3.1-7-7v-41c0-3.9,3.1-7,7-7h126c3.9,0,7,3.1,7,7v41C140,74.4,136.9,77.5,133,77.5z\"/>
  </symbol>
  <symbol xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 26\" id=\"plane\" preserveAspectRatio=\"none\">
    <path d=\"M5.25,15.24,18.42,3.88,7.82,17l0,4.28a.77.77,0,0,0,1.36.49l3-3.68,5.65,2.25a.76.76,0,0,0,1-.58L22,.89A.77.77,0,0,0,20.85.1L.38,11.88a.76.76,0,0,0,.09,1.36Z\" />
  </symbol>
</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

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

//searchbar function
document.getElementById('my-button').onclick = function() {
\tdocument.getElementById('my-input').classList.toggle('show');
}

\t//classnames icons
    var buttons = document.getElementsByClassName(\"fa-gear\");
\tvar searchbutton = document.getElementsByClassName(\" fa-magnifying-glass\");
\tvar deletebutton = document.getElementsByClassName(\" fa-trash-can\");
  
  //this is for the setting icon
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener(\"click\", function() {
      this.classList.toggle(\"fa-spin\");
    });
  }
  document.addEventListener(\"click\", function(event) {
    var target = event.target;
    var isButton = false;

    for (var i = 0; i < buttons.length; i++) {
      if (target == buttons[i]) {
        isButton = true;
        break;
      }
    }

    if (!isButton) {
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove(\"fa-spin\" );
      }
    }
  });

 // this is for the search icon

  for (var i = 0; i < searchbutton.length; i++) {
    searchbutton[i].addEventListener(\"click\", function() {
      if (this.classList.contains(\"fa-beat\")) {
        this.classList.remove(\"fa-beat\");
      } else {
        this.classList.add(\"fa-beat\");
      }
    });
  }

  // this is for the delete button
  for (var i = 0; i < deletebutton.length; i++) {
    deletebutton[i].addEventListener(\"click\", function() {
      this.classList.toggle(\"fa-beat-fade\");
    });
  }
  document.addEventListener(\"click\", function(event) {
    var target = event.target;
    var isButton = false;

    for (var i = 0; i < deletebutton.length; i++) {
      if (target == deletebutton[i]) {
        isButton = true;
        break;
      }
    }

    if (!isButton) {
      for (var i = 0; i < deletebutton.length; i++) {
        deletebutton[i].classList.remove(\"fa-beat-fade\" );
      }
    }
  });
//search filter function
jQuery.fn.highlight = function(pat) {
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
  }
  else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
   for (var i = 0; i < node.childNodes.length; ++i) {
    i += innerHighlight(node.childNodes[i], pat);
   }
  }
  return skip;
 }
 return this.length && pat && pat.length ? this.each(function() {
  innerHighlight(this, pat.toUpperCase());
 }) : this;
};

jQuery.fn.removeHighlight = function() {
 return this.find(\"span.highlight\").each(function() {
  this.parentNode.firstChild.nodeName;
  with (this.parentNode) {
   replaceChild(this.firstChild, this);
   normalize();
  }
 }).end();
};

\$(document).ready(function(){
    \$('#my-input').on('input',function(){
        \$('.messagecontent').removeHighlight().highlight(\$(this).val()); 
    });        
});

//sendbutton aniamtion
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

    document.addEventListener(\"click\", function(event) {
      if (!dropdownContainer.contains(event.target) && event.target !== element) {
        dropdownContainer.style.display = \"none\";
      }
    });
  }
}


\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t{# <section id=\"main\" class=\"content-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block main %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t/ Home
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</section> #}

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
