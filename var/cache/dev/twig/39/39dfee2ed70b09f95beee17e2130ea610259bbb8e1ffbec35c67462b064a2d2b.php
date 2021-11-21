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

/* a_propos/index.html.twig */
class __TwigTemplate_6c3f693860aa32d8d72dd9d085b6c9a85d91aaf1fc2857e35dfdeb47ec88a66a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "a_propos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "a_propos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "a_propos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- START THE FEATURETTES -->
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apropos"]) || array_key_exists("apropos", $context) ? $context["apropos"] : (function () { throw new RuntimeError('Variable "apropos" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 9
            echo "    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 12) % 2)) {
                echo "2";
            } else {
                echo "1";
            }
            echo "\">
            <h2 class=\"featurette-heading\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "<span class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "subtitle", [], "any", false, false, false, 13), "html", null, true);
            echo "</span></h2>
            <p class=\"lead\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-md-5 order-md-";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "id", [], "any", false, false, false, 16) % 2)) {
                echo "1";
            } else {
                echo "2";
            }
            echo "\">
            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/first.jpg"), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"Un savoir-faire\">
        </div>
    </div>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <hr class=\"featurette-divider\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "a_propos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  108 => 17,  100 => 16,  95 => 14,  89 => 13,  81 => 12,  76 => 9,  72 => 8,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block content %}

    <!-- START THE FEATURETTES -->
{% for information in apropos %}
    <hr class=\"featurette-divider\">

    <div class=\"row featurette\">
        <div class=\"col-md-7 order-md-{% if information.id %2  %}2{% else %}1{% endif %}\">
            <h2 class=\"featurette-heading\">{{ information.title }}<span class=\"text-muted\">{{ information.subtitle }}</span></h2>
            <p class=\"lead\">{{ information.description }}</p>
        </div>
        <div class=\"col-md-5 order-md-{% if information.id %2  %}1{% else %}2{% endif %}\">
            <img src=\"{{ asset('assets/images/first.jpg') }}\" class=\"img-fluid\" alt=\"Un savoir-faire\">
        </div>
    </div>

   {% endfor %}
    <hr class=\"featurette-divider\">

{% endblock %}", "a_propos/index.html.twig", "C:\\Users\\oumayma\\PhpstormProjects\\boutique\\templates\\a_propos\\index.html.twig");
    }
}
