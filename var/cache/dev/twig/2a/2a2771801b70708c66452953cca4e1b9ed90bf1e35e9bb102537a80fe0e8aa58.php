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
class __TwigTemplate_c918a8d6f0bdb18caf4ff6e45fbeae65342e72b36248f323412ac31501169c20 extends Template
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
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'filters' => [$this, 'block_filters'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/index.html.twig"));

        // line 5
        $context["__internal_a8361bda96d06210aa4f487253bcdd6517352e62ffde5668d9a2ef6c7ef17eb4"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 8
        $context["has_batch_actions"] = ((false && array_key_exists("batch_form", $context)) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 8, $this->source); })()), "crud", [], "any", false, false, false, 8), "actions", [], "any", false, false, false, 8), "batchActions", [], "any", false, false, false, 8)), 0)));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 10, $this->source); })())), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 10, $this->source); })())), "name", [], "any", false, false, false, 10)), "html", null, true))) : (print ("")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("index" . (((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 11, $this->source); })())), 0))) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 11, $this->source); })())), "name", [], "any", false, false, false, 11))) : (""))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "crud", [], "any", false, false, false, 15), "defaultPageTitle", [0 => "index"], "method", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16))) ? ((isset($context["default_title"]) || array_key_exists("default_title", $context) ? $context["default_title"] : (function () { throw new RuntimeError('Variable "default_title" does not exist.', 16, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "crud", [], "any", false, false, false, 16), "customPageTitle", [0 => "index"], "method", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 16, $this->source); })()), "i18n", [], "any", false, false, false, 16), "translationParameters", [], "any", false, false, false, 16),         // line 5
(isset($context["__internal_a8361bda96d06210aa4f487253bcdd6517352e62ffde5668d9a2ef6c7ef17eb4"]) || array_key_exists("__internal_a8361bda96d06210aa4f487253bcdd6517352e62ffde5668d9a2ef6c7ef17eb4", $context) ? $context["__internal_a8361bda96d06210aa4f487253bcdd6517352e62ffde5668d9a2ef6c7ef17eb4"] : (function () { throw new RuntimeError('Variable "__internal_a8361bda96d06210aa4f487253bcdd6517352e62ffde5668d9a2ef6c7ef17eb4" does not exist.', 5, $this->source); })()))));
        $___internal_90b0919543a521935c86404a844ded9a5f7f3b994568700133e006dfcbe2d835_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_90b0919543a521935c86404a844ded9a5f7f3b994568700133e006dfcbe2d835_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["global_actions"]) || array_key_exists("global_actions", $context) ? $context["global_actions"] : (function () { throw new RuntimeError('Variable "global_actions" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 23), ["action" => $context["action"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 29
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 43
        echo "    ";
        // line 44
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", [0 => "sort"], "method", false, false, false, 44)));
        // line 45
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", [0 => "sort"], "method", false, false, false, 45));
        // line 46
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 47
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 47, $this->source); })())), 0));
        // line 48
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 48, $this->source); })()), "crud", [], "any", false, false, false, 48), "isSearchEnabled", [], "any", false, false, false, 48);
        // line 49
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 49, $this->source); })())), 0));
        // line 50
        echo "    ";
        $context["has_datagrid_tools"] = ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 50, $this->source); })()) || (isset($context["has_filters"]) || array_key_exists("has_filters", $context) ? $context["has_filters"] : (function () { throw new RuntimeError('Variable "has_filters" does not exist.', 50, $this->source); })()));
        // line 51
        echo "
    ";
        // line 52
        if ((isset($context["has_datagrid_tools"]) || array_key_exists("has_datagrid_tools", $context) ? $context["has_datagrid_tools"] : (function () { throw new RuntimeError('Variable "has_datagrid_tools" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "        <div class=\"datagrid-header-tools\">
            <div class=\"datagrid-search\">
                ";
            // line 55
            $this->displayBlock('search', $context, $blocks);
            // line 81
            echo "            </div>

            <div class=\"datagrid-filters\">
                ";
            // line 84
            $this->displayBlock('filters', $context, $blocks);
            // line 99
            echo "            </div>
        </div>
    ";
        }
        // line 102
        echo "
    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding ";
        // line 104
        echo (( !(isset($context["has_footer"]) || array_key_exists("has_footer", $context) ? $context["has_footer"] : (function () { throw new RuntimeError('Variable "has_footer" does not exist.', 104, $this->source); })())) ? ("without-footer") : (""));
        echo "\">
            <table class=\"table datagrid with-rounded-top ";
        // line 105
        echo (( !(isset($context["has_footer"]) || array_key_exists("has_footer", $context) ? $context["has_footer"] : (function () { throw new RuntimeError('Variable "has_footer" does not exist.', 105, $this->source); })())) ? ("with-rounded-bottom") : (""));
        echo "\">
                <thead>
                ";
        // line 107
        $this->displayBlock('table_head', $context, $blocks);
        // line 134
        echo "                </thead>

                <tbody>
                ";
        // line 137
        $this->displayBlock('table_body', $context, $blocks);
        // line 193
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 197
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 197, $this->source); })())), 0))) {
            // line 198
            echo "            <div class=\"content-panel-footer without-padding without-border\">
                ";
            // line 199
            $this->displayBlock('paginator', $context, $blocks);
            // line 202
            echo "            </div>
        ";
        }
        // line 204
        echo "    </div>

    ";
        // line 206
        $this->displayBlock('delete_form', $context, $blocks);
        // line 209
        echo "
    ";
        // line 210
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })())), 0))) {
            // line 211
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 56
        echo "                    ";
        if ((isset($context["has_search"]) || array_key_exists("has_search", $context) ? $context["has_search"] : (function () { throw new RuntimeError('Variable "has_search" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                ";
            // line 59
            $this->displayBlock('search_form', $context, $blocks);
            // line 77
            echo "                            </form>
                        </div>
                    ";
        }
        // line 80
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                    ";
        // line 61
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "all", [], "any", false, false, false, 61), ["referrer" => null, "page" => 1]);
        // line 64
        echo "
                                    ";
        // line 67
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray((isset($context["query_parameters"]) || array_key_exists("query_parameters", $context) ? $context["query_parameters"] : (function () { throw new RuntimeError('Variable "query_parameters" does not exist.', 67, $this->source); })())));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 68
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 73
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", true, true, false, 73) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 73, $this->source); })()), "i18n", [], "any", false, false, false, 73), "translationParameters", [], "any", false, false, false, 73), "EasyAdminBundle"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 85
        echo "                    ";
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 85, $this->source); })())), 0))) {
            // line 86
            echo "                        ";
            $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 86), "query", [], "any", false, true, false, 86), "all", [], "any", false, true, false, 86), "filters", [], "array", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 86), "query", [], "any", false, true, false, 86), "all", [], "any", false, true, false, 86), "filters", [], "array", false, false, false, 86), [])) : ([])));
            // line 87
            echo "                        <div class=\"btn-group action-filters\">
                            <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "setAction", [0 => "renderFilters"], "method", false, false, false, 88), "includeReferrer", [], "method", false, false, false, 88), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
            echo (((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 88, $this->source); })())) ? ("action-filters-applied") : (""));
            echo "\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 89, $this->source); })()), "i18n", [], "any", false, false, false, 89), "translationParameters", [], "any", false, false, false, 89), "EasyAdminBundle"), "html", null, true);
            if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 89, $this->source); })())) {
                echo " <span class=\"text-primary\">(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 89, $this->source); })())), "html", null, true);
                echo ")</span>";
            }
            // line 90
            echo "                            </a>
                            ";
            // line 91
            if ((isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 91, $this->source); })())) {
                // line 92
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "unset", [0 => "filters"], "method", false, false, false, 92), "html", null, true);
                echo "\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            ";
            }
            // line 96
            echo "                        </div>
                    ";
        }
        // line 98
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 108
        echo "                    <tr>
                        ";
        // line 109
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 109, $this->source); })())) {
            // line 110
            echo "                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        ";
        }
        // line 112
        echo "
                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 113, $this->source); })())), "fields", [], "any", true, true, false, 113) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 113, $this->source); })())), "fields", [], "any", false, false, false, 113)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 113, $this->source); })())), "fields", [], "any", false, false, false, 113)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 114
            echo "                            ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 114, $this->source); })()), "search", [], "any", false, false, false, 114), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 114)], "method", false, false, false, 114);
            // line 115
            echo "                            ";
            $context["next_sort_direction"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 115, $this->source); })())) ? ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 115, $this->source); })()), "search", [], "any", false, false, false, 115), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 115)], "method", false, false, false, 115), "DESC"))) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 116
            echo "                            ";
            $context["column_icon"] = (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 116, $this->source); })())) ? ((((0 === twig_compare((isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 116, $this->source); })()), "DESC"))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 117
            echo "
                            <th class=\"";
            // line 118
            echo (((isset($context["is_sorting_field"]) || array_key_exists("is_sorting_field", $context) ? $context["is_sorting_field"] : (function () { throw new RuntimeError('Variable "is_sorting_field" does not exist.', 118, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 118)) ? ("field-virtual") : (""));
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 118), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 118, $this->source); })()), "i18n", [], "any", false, false, false, 118), "textDirection", [], "any", false, false, false, 118), "html", null, true);
            echo "\">
                                ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 119)) {
                // line 120
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 120) => (isset($context["next_sort_direction"]) || array_key_exists("next_sort_direction", $context) ? $context["next_sort_direction"] : (function () { throw new RuntimeError('Variable "next_sort_direction" does not exist.', 120, $this->source); })())]]), "includeReferrer", [], "method", false, false, false, 120), "html", null, true);
                echo "\">
                                        ";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 121);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["column_icon"]) || array_key_exists("column_icon", $context) ? $context["column_icon"] : (function () { throw new RuntimeError('Variable "column_icon" does not exist.', 121, $this->source); })()), "html", null, true);
                echo "\"></i>
                                    </a>
                                ";
            } else {
                // line 124
                echo "                                    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 124);
                echo "</span>
                                ";
            }
            // line 126
            echo "                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                        <th ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 129, $this->source); })()), "crud", [], "any", false, false, false, 129), "showEntityActionsAsDropdown", [], "any", false, false, false, 129)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 129, $this->source); })()), "i18n", [], "any", false, false, false, 129), "textDirection", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 130, $this->source); })()), "i18n", [], "any", false, false, false, 130), "translationParameters", [], "any", false, false, false, 130), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        </th>
                    </tr>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 138
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 138, $this->source); })()));
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
            // line 139
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 139)) {
                // line 140
                echo "                            ";
                $context["some_results_are_hidden"] = true;
                // line 141
                echo "                        ";
            } else {
                // line 142
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 142), "html", null, true);
                echo "\">
                                ";
                // line 143
                if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 143, $this->source); })())) {
                    // line 144
                    echo "                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 144), "html", null, true);
                    echo "\"></td>
                                ";
                }
                // line 146
                echo "
                                ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 148
                    echo "                                    <td class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 148), (isset($context["sort_field_name"]) || array_key_exists("sort_field_name", $context) ? $context["sort_field_name"] : (function () { throw new RuntimeError('Variable "sort_field_name" does not exist.', 148, $this->source); })())))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 148), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 148), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 148, $this->source); })()), "i18n", [], "any", false, false, false, 148), "textDirection", [], "any", false, false, false, 148), "html", null, true);
                    echo "\">
                                        ";
                    // line 149
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 149), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "
                                ";
                // line 153
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 174
                echo "                            </tr>

                        ";
            }
            // line 177
            echo "                    ";
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
            // line 178
            echo "                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                ";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 180, $this->source); })()), "i18n", [], "any", false, false, false, 180), "translationParameters", [], "any", false, false, false, 180), "EasyAdminBundle"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "
                    ";
        // line 185
        if ((isset($context["some_results_are_hidden"]) || array_key_exists("some_results_are_hidden", $context) ? $context["some_results_are_hidden"] : (function () { throw new RuntimeError('Variable "some_results_are_hidden" does not exist.', 185, $this->source); })())) {
            // line 186
            echo "                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"";
            // line 187
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 187, $this->source); })())), "fields", [], "any", false, false, false, 187)) + 1), "html", null, true);
            echo "\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </td>
                        </tr>
                    ";
        }
        // line 192
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 153
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_actions"));

        // line 154
        echo "                                    <td class=\"actions\">
                                        ";
        // line 155
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 155, $this->source); })()), "crud", [], "any", false, false, false, 155), "showEntityActionsAsDropdown", [], "any", false, false, false, 155)) {
            // line 156
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 156, $this->source); })()), "actions", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 157
                echo "                                                ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 157), ["action" => $context["action"], "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 157, $this->source); })()), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 157, $this->source); })()), "crud", [], "any", false, false, false, 157), "showEntityActionsAsDropdown", [], "any", false, false, false, 157)], false);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                        ";
        } else {
            // line 160
            echo "                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 166, $this->source); })()), "actions", [], "any", false, false, false, 166));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 167
                echo "                                                        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 167), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 167, $this->source); })()), "crud", [], "any", false, false, false, 167), "showEntityActionsAsDropdown", [], "any", false, false, false, 167)], false);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                                </div>
                                            </div>
                                        ";
        }
        // line 172
        echo "                                    </td>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 200
        echo "                    ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 200, $this->source); })()), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 200));
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 207
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 216
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"";
        // line 228
        echo twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getCrudUrlBuilder(), "setAction", [0 => "edit"], "method", false, false, false, 228);
        echo "\"
                        + \"&entityId=\" + this.closest('[data-id]').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('[data-id]').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 259
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })())), 0))) {
            // line 260
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            let setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 290
        echo "

            ";
        // line 292
        if ((isset($context["has_batch_actions"]) || array_key_exists("has_batch_actions", $context) ? $context["has_batch_actions"] : (function () { throw new RuntimeError('Variable "has_batch_actions" does not exist.', 292, $this->source); })())) {
            // line 293
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            ";
        }
        // line 342
        echo "        });
    </script>

    ";
        // line 345
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 345, $this->source); })()), "request", [], "any", false, false, false, 345), "get", [0 => "query"], "method", false, false, false, 345))) {
            // line 346
            echo "        <script type=\"text/javascript\">
            const search_query = \"";
            // line 347
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 347), "query", [], "any", true, true, false, 347)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 347), "query", [], "any", false, false, false, 347), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1011 => 347,  1008 => 346,  1006 => 345,  1001 => 342,  950 => 293,  948 => 292,  944 => 290,  912 => 260,  910 => 259,  876 => 228,  860 => 216,  850 => 215,  837 => 207,  827 => 206,  814 => 200,  804 => 199,  793 => 172,  788 => 169,  779 => 167,  775 => 166,  767 => 160,  764 => 159,  755 => 157,  750 => 156,  748 => 155,  745 => 154,  735 => 153,  725 => 192,  718 => 188,  714 => 187,  711 => 186,  709 => 185,  706 => 184,  696 => 180,  692 => 178,  679 => 177,  674 => 174,  672 => 153,  669 => 152,  660 => 149,  649 => 148,  645 => 147,  642 => 146,  636 => 144,  634 => 143,  629 => 142,  626 => 141,  623 => 140,  620 => 139,  601 => 138,  591 => 137,  577 => 130,  569 => 129,  566 => 128,  559 => 126,  553 => 124,  545 => 121,  540 => 120,  538 => 119,  528 => 118,  525 => 117,  522 => 116,  519 => 115,  516 => 114,  512 => 113,  509 => 112,  505 => 110,  503 => 109,  500 => 108,  490 => 107,  480 => 98,  476 => 96,  468 => 92,  466 => 91,  463 => 90,  456 => 89,  450 => 88,  447 => 87,  444 => 86,  441 => 85,  431 => 84,  415 => 73,  410 => 70,  399 => 68,  394 => 67,  391 => 64,  388 => 61,  386 => 60,  376 => 59,  366 => 80,  361 => 77,  359 => 59,  355 => 57,  352 => 56,  342 => 55,  328 => 211,  326 => 210,  323 => 209,  321 => 206,  317 => 204,  313 => 202,  311 => 199,  308 => 198,  306 => 197,  300 => 193,  298 => 137,  293 => 134,  291 => 107,  286 => 105,  282 => 104,  278 => 102,  273 => 99,  271 => 84,  266 => 81,  264 => 55,  260 => 53,  258 => 52,  255 => 51,  252 => 50,  249 => 49,  246 => 48,  243 => 47,  240 => 46,  237 => 45,  234 => 44,  232 => 43,  222 => 42,  208 => 29,  198 => 28,  188 => 25,  179 => 23,  174 => 22,  154 => 21,  144 => 20,  134 => 14,  131 => 5,  129 => 16,  127 => 15,  125 => 14,  115 => 13,  96 => 11,  77 => 10,  67 => 4,  65 => 8,  63 => 5,  50 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entities \\EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\EntityDtoCollection #}
{# @var paginator \\EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityPaginator #}
{% extends ea.templatePath('layout') %}
{% trans_default_domain ea.i18n.translationDomain %}

{# TODO: change this when reenabling batch actions #}
{% set has_batch_actions = false and batch_form is defined and ea.crud.actions.batchActions|length > 0 %}

{% block body_id entities|length > 0 ? 'ea-index-' ~ entities|first.name : '' %}
{% block body_class 'index' ~ (entities|length > 0 ? ' index-' ~ entities|first.name : '') %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set default_title = ea.crud.defaultPageTitle('index')|trans(ea.i18n.translationParameters, 'EasyAdminBundle') %}
        {{ ea.crud.customPageTitle is null ? default_title|raw : ea.crud.customPageTitle('index')|trans(ea.i18n.translationParameters)|raw }}
    {%- endapply -%}
{% endblock %}

{% block page_actions %}
    {% block global_actions %}
        {% for action in global_actions %}
            {{ include(action.templatePath, { action: action }, with_context = false) }}
        {% endfor %}
    {% endblock global_actions %}
{% endblock page_actions %}

{% block content_header %}
    {{ parent() }}

    {# TODO:
    {% block batch_actions %}
        {% for batchAction in ea.crud.actions.batchActions %}
            {{ include(batchAction.templatePath, { action: batchAction }, with_context = false) }}
        {% endfor %}

        {{ include('@EasyAdmin/crud/includes/_batch_action_modal.html.twig', {}, with_context = false) }}
    {% endblock %}
    #}
{% endblock content_header %}

{% block main %}
    {# sort can be multiple; let's consider the sorting field the first one #}
    {% set sort_field_name = app.request.get('sort')|keys|first %}
    {% set sort_order = app.request.get('sort')|first %}
    {% set some_results_are_hidden = false %}
    {% set has_footer = entities|length != 0 %}
    {% set has_search = ea.crud.isSearchEnabled %}
    {% set has_filters = filters|length > 0 %}
    {% set has_datagrid_tools = has_search or has_filters %}

    {% if has_datagrid_tools %}
        <div class=\"datagrid-header-tools\">
            <div class=\"datagrid-search\">
                {% block search %}
                    {% if has_search %}
                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                {% block search_form %}
                                    {# reset the referrer and page number whenever a new query is performed #}
                                    {% set query_parameters = ea.request.query.all|merge({
                                        referrer: null, page: 1,
                                    }) %}

                                    {# browsers remove the query string when submitting forms using GET;
                                       that's why all query string parameters are added as hidden form fields #}
                                    {% for paramName, paramValue in query_parameters|ea_flatten_array %}
                                        <input type=\"hidden\" name=\"{{ paramName }}\" value=\"{{ paramValue }}\">
                                    {% endfor %}

                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query') ?? '' }}\" placeholder=\"{{ 'action.search'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}\">
                                        </div>
                                    </div>
                                {% endblock %}
                            </form>
                        </div>
                    {% endif %}
                {% endblock search %}
            </div>

            <div class=\"datagrid-filters\">
                {% block filters %}
                    {% if filters|length > 0 %}
                        {% set applied_filters = ea.request.query.all['filters']|default([])|keys %}
                        <div class=\"btn-group action-filters\">
                            <a href=\"{{ ea_url().setAction('renderFilters').includeReferrer() }}\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button {{ applied_filters ? 'action-filters-applied' }}\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> {{ 'filter.title'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}{% if applied_filters %} <span class=\"text-primary\">({{ applied_filters|length }})</span>{% endif %}
                            </a>
                            {% if applied_filters %}
                                <a href=\"{{ ea_url().unset('filters') }}\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            {% endif %}
                        </div>
                    {% endif %}
                {% endblock filters %}
            </div>
        </div>
    {% endif %}

    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding {{ not has_footer ? 'without-footer' }}\">
            <table class=\"table datagrid with-rounded-top {{ not has_footer ? 'with-rounded-bottom' }}\">
                <thead>
                {% block table_head %}
                    <tr>
                        {% if has_batch_actions %}
                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        {% endif %}

                        {% for field in entities|first.fields ?? [] %}
                            {% set is_sorting_field = ea.search.isSortingField(field.property) %}
                            {% set next_sort_direction = is_sorting_field ? (ea.search.sortDirection(field.property) == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                            {% set column_icon = is_sorting_field ? (next_sort_direction == 'DESC' ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                            <th class=\"{{ is_sorting_field ? 'sorted' }} {{ field.isVirtual ? 'field-virtual' }} text-{{ field.textAlign }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                {% if field.isSortable %}
                                    <a href=\"{{ ea_url({ page: 1, sort: { (field.property): next_sort_direction } }).includeReferrer() }}\">
                                        {{ field.label|raw }} <i class=\"fa fa-fw {{ column_icon }}\"></i>
                                    </a>
                                {% else %}
                                    <span>{{ field.label|raw }}</span>
                                {% endif %}
                            </th>
                        {% endfor %}

                        <th {% if ea.crud.showEntityActionsAsDropdown %}width=\"10px\"{% endif %} dir=\"{{ ea.i18n.textDirection }}\">
                            <span class=\"sr-only\">{{ 'action.entity_actions'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}</span>
                        </th>
                    </tr>
                {% endblock table_head %}
                </thead>

                <tbody>
                {% block table_body %}
                    {% for entity in entities %}
                        {% if not entity.isAccessible %}
                            {% set some_results_are_hidden = true %}
                        {% else %}
                            <tr data-id=\"{{ entity.primaryKeyValueAsString }}\">
                                {% if has_batch_actions %}
                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"{{ entity.primaryKeyValue }}\"></td>
                                {% endif %}

                                {% for field in entity.fields %}
                                    <td class=\"{{ field.property == sort_field_name ? 'sorted' }} text-{{ field.textAlign }} {{ field.cssClass }}\" dir=\"{{ ea.i18n.textDirection }}\">
                                        {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
                                    </td>
                                {% endfor %}

                                {% block entity_actions %}
                                    <td class=\"actions\">
                                        {% if not ea.crud.showEntityActionsAsDropdown %}
                                            {% for action in entity.actions %}
                                                {{ include(action.templatePath, { action: action, entity: entity, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                            {% endfor %}
                                        {% else %}
                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    {% for action in entity.actions %}
                                                        {{ include(action.templatePath, { action: action, isIncludedInDropdown: ea.crud.showEntityActionsAsDropdown }, with_context = false) }}
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        {% endif %}
                                    </td>
                                {% endblock entity_actions %}
                            </tr>

                        {% endif %}
                    {% else %}
                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                {{ 'datagrid.no_results'|trans(ea.i18n.translationParameters, 'EasyAdminBundle') }}
                            </td>
                        </tr>
                    {% endfor %}

                    {% if some_results_are_hidden %}
                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"{{ entities|first.fields|length + 1 }}\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> {{ 'datagrid.hidden_results'|trans({}, 'EasyAdminBundle') }}</span>
                            </td>
                        </tr>
                    {% endif %}
                {% endblock table_body %}
                </tbody>
            </table>
        </div>

        {% if entities|length > 0 %}
            <div class=\"content-panel-footer without-padding without-border\">
                {% block paginator %}
                    {{ include(ea.templatePath('crud/paginator')) }}
                {% endblock paginator %}
            </div>
        {% endif %}
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', with_context = false) }}
    {% endblock delete_form %}

    {% if filters|length > 0 %}
        {{ include('@EasyAdmin/crud/includes/_filters_modal.html.twig') }}
    {% endif %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const fieldName = this.closest('.custom-switch').dataset.fieldname;

                    const toggleUrl = \"{{ ea_url().setAction('edit')|raw }}\"
                        + \"&entityId=\" + this.closest('[data-id]').dataset.id
                        + \"&fieldName=\" + fieldName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('[data-id]').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__entityId_placeholder__', id));
                        deleteForm.trigger('submit');
                    });
            });

            {% if filters|length > 0 %}
            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            let setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            {% endif %}


            {% if has_batch_actions %}
            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            {% endif %}
        });
    </script>

    {% if app.request.get('query') is not empty %}
        <script type=\"text/javascript\">
            const search_query = \"{{ ea.search.query|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/crud/index.html.twig", "C:\\Users\\oumayma\\PhpstormProjects\\boutique\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\index.html.twig");
    }
}
