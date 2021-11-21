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

/* account/order_show.html.twig */
class __TwigTemplate_06b55390b508f8dc9777184c81b253a5327a53908b677f0e2efdc91a6c7a7ddf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ma commande - Ma Boutique ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
    <h1>Ma commande n° ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "reference", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\">Retour</a>
    <hr>

    <p><strong>Statut de la commande : </strong>
        ";
        // line 12
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12), 1))) {
            // line 13
            echo "            Commande validée
        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14), 2))) {
            // line 15
            echo "            Préparation en cours
        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "state", [], "any", false, false, false, 16), 3))) {
            // line 17
            echo "            Livraison en cours
        ";
        }
        // line 19
        echo "    </p>
    <p><strong>Commande passée le :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "createAt", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Référence de ma commande : </strong> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "reference", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
    <p><strong>Transporteur choisi : </strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "carrierName", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>

    <hr>
    <strong>Détails : </strong>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "orderDetails", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "            <tr>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 42) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <div class=\"text-right\">
        <p><strong>Sous-total :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "getTotal", [], "any", false, false, false, 49) / 100), 2, ",", "."), "html", null, true);
        echo " €</p>
        <p><strong>Livraison :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "carrierPrice", [], "any", false, false, false, 50) / 100), 2, ",", "."), "html", null, true);
        echo " €</p>
        <p><strong>Total :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "getTotal", [], "any", false, false, false, 51) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 51, $this->source); })()), "carrierPrice", [], "any", false, false, false, 51)) / 100), 2, ",", "."), "html", null, true);
        echo " € </p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 51,  185 => 50,  181 => 49,  175 => 45,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  151 => 38,  147 => 37,  129 => 22,  125 => 21,  121 => 20,  118 => 19,  114 => 17,  112 => 16,  109 => 15,  107 => 14,  104 => 13,  102 => 12,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - Ma Boutique {% endblock %}

{% block content %}

    <h1>Ma commande n° {{ order.reference }}</h1>
    <a href=\"{{ path('account_order') }}\">Retour</a>
    <hr>

    <p><strong>Statut de la commande : </strong>
        {% if order.state == 1 %}
            Commande validée
        {% elseif order.state == 2 %}
            Préparation en cours
        {% elseif order.state == 3 %}
            Livraison en cours
        {% endif %}
    </p>
    <p><strong>Commande passée le :</strong> {{ order.createAt|date('d/m/Y') }}</p>
    <p><strong>Référence de ma commande : </strong> {{ order.reference }}</p>
    <p><strong>Transporteur choisi : </strong> {{ order.carrierName }}</p>

    <hr>
    <strong>Détails : </strong>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        {% for product in order.orderDetails %}
            <tr>
            <th>{{ product.product }}</th>
            <td>{{ product.quantity }}</td>
            <td>{{ (product.price / 100)|number_format(2, ',', '.') }} €</td>
            <td>{{ (product.total / 100)|number_format(2, ',', '.') }} €</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"text-right\">
        <p><strong>Sous-total :</strong> {{ (order.getTotal / 100)|number_format(2, ',', '.') }} €</p>
        <p><strong>Livraison :</strong> {{ (order.carrierPrice / 100)|number_format(2, ',', '.') }} €</p>
        <p><strong>Total :</strong> {{ ((order.getTotal + order.carrierPrice) / 100)|number_format(2, ',', '.') }} € </p>
    </div>

{% endblock %}
", "account/order_show.html.twig", "C:\\Users\\oumayma\\PhpstormProjects\\blogsymfony\\ma-boutique\\templates\\account\\order_show.html.twig");
    }
}
