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

/* account/order.html.twig */
class __TwigTemplate_3b70be27d5f9b59f93bf9185313bf789a2e64981f3e0a0ef9ed2f230289e5ce5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo "Mes commandes - Ma Boutique";
        
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
        echo "    <h1>Mes commandes</h1>
    <p>C'est dans cet espace que vous allez pouvoir gérer toutes vos commandes.</p>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>
    ";
        // line 9
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 9, $this->source); })())), 0))) {
            // line 10
            echo "        <hr>
        <p class=\"text-center\">Vous n'avez pas encore passé de commandes sur Ma Boutique.
    ";
        } else {
            // line 13
            echo "        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Produit(s)</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 26
                echo "                <tr>
                    <td><span class=\"badge badge-secondary\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 27), "html", null, true);
                echo "</span></td>
                    <td>
                        ";
                // line 29
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 29), 1))) {
                    // line 30
                    echo "                            <p>Commande validée</p>
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 31
$context["order"], "state", [], "any", false, false, false, 31), 2))) {
                    // line 32
                    echo "                            <p>Préparation en cours</p>
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 33
$context["order"], "state", [], "any", false, false, false, 33), 3))) {
                    // line 34
                    echo "                            <p>Livraison en cours</p>
                        ";
                }
                // line 36
                echo "                    </td>
                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createAt", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 38)), "html", null, true);
                echo "</td>
                    <!-- Je reprends ma méthode getTotal() de mon entité Order() pour effectuer le calcul --->
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 40) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 40)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td class=\"text-right\"><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">Voir
                            ma commande</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  161 => 41,  157 => 40,  152 => 38,  148 => 37,  145 => 36,  141 => 34,  139 => 33,  136 => 32,  134 => 31,  131 => 30,  129 => 29,  124 => 27,  121 => 26,  117 => 25,  103 => 13,  98 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes - Ma Boutique{% endblock %}

{% block content %}
    <h1>Mes commandes</h1>
    <p>C'est dans cet espace que vous allez pouvoir gérer toutes vos commandes.</p>
    <a href=\"{{ path('account') }}\">Retour</a>
    {% if orders|length == 0 %}
        <hr>
        <p class=\"text-center\">Vous n'avez pas encore passé de commandes sur Ma Boutique.
    {% else %}
        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Passé le</th>
                <th scope=\"col\">Produit(s)</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td><span class=\"badge badge-secondary\">{{ order.reference }}</span></td>
                    <td>
                        {% if order.state == 1 %}
                            <p>Commande validée</p>
                        {% elseif order.state == 2 %}
                            <p>Préparation en cours</p>
                        {% elseif order.state == 3 %}
                            <p>Livraison en cours</p>
                        {% endif %}
                    </td>
                    <td>{{ order.createAt|date('d/m/Y') }}</td>
                    <td>{{ order.orderDetails|length }}</td>
                    <!-- Je reprends ma méthode getTotal() de mon entité Order() pour effectuer le calcul --->
                    <td>{{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',', '.') }} €</td>
                    <td class=\"text-right\"><a href=\"{{ path('account_order_show', {'reference' : order.reference}) }}\">Voir
                            ma commande</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "account/order.html.twig", "C:\\Users\\oumayma\\PhpstormProjects\\blogsymfony\\ma-boutique\\templates\\account\\order.html.twig");
    }
}
