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

/* cart/index.html.twig */
class __TwigTemplate_7ee4693faa0a2dcf727179f3aed0a746cdb146d26400e40147d16d3dc7324b32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier - Ma Boutique";
        
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
    <h1>Mon panier</h1>
    <p>Retrouver l'ensemble des produits que vous avez ajouté à votre panier.</p>

    ";
        // line 10
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })())), 0))) {
            // line 11
            echo "
        <table class=\"table mt-3\">
            <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\"></th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>

            <!-- Déclaration d'une nouvelle variable Twig pour calculer le prix total d'un panier --->
            ";
            // line 26
            $context["total"] = null;
            // line 27
            echo "
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 29
                echo "                <tr>
                    <!-- Le nom 'product' représente la clé --->
                    <th>
                        <img src=\"/uploads/images/products/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "illustration", [], "any", false, false, false, 32), "html", null, true);
                echo "\"
                             alt=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo "\" height=\"50px\"> <br/>
                    </th>
                    <td>
                        ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo " <br/>
                        <small>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "subtitle", [], "any", false, false, false, 37), "html", null, true);
                echo "</small>
                    </td>
                    <td>
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/remove.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                        </a>
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43), "html", null, true);
                echo "
                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/plus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouté une quantité à mon produit\">
                        </a>
                    </td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "price", [], "any", false, false, false, 48) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td>
                        <!-- Paramètre du produit = son id --->
                        <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
                echo "\" height=\"20px\"
                                 alt=\"Supprimer mon produit\">
                        </a>
                    </td>
                </tr>
                ";
                // line 58
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 58), "price", [], "any", false, false, false, 58) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 58)));
                // line 59
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
            </tbody>
        </table>

        <div class=\"text-right mb-5 \">
            <!-- Affichage total du nombre de produits --->
            <b>Nombre de produits : </b> ";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 67, $this->source); })())), "html", null, true);
            echo " <br/>
            <b>Total de mon panier : </b> ";
            // line 68
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " € <br/>
            <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-primary mt-3\">Valider mon panier</a>
        </div>

    ";
        } else {
            // line 73
            echo "        <hr>
        <p><b>Votre panier est vide.</b></p>
    ";
        }
        // line 76
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  224 => 73,  217 => 69,  213 => 68,  209 => 67,  201 => 61,  194 => 59,  192 => 58,  184 => 53,  180 => 52,  174 => 49,  170 => 48,  164 => 45,  160 => 44,  156 => 43,  151 => 41,  147 => 40,  141 => 37,  137 => 36,  131 => 33,  127 => 32,  122 => 29,  118 => 28,  115 => 27,  113 => 26,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - Ma Boutique{% endblock %}

{% block content %}

    <h1>Mon panier</h1>
    <p>Retrouver l'ensemble des produits que vous avez ajouté à votre panier.</p>

    {% if cart|length > 0 %}

        <table class=\"table mt-3\">
            <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\"></th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>

            <!-- Déclaration d'une nouvelle variable Twig pour calculer le prix total d'un panier --->
            {% set total = null %}

            {% for product in cart %}
                <tr>
                    <!-- Le nom 'product' représente la clé --->
                    <th>
                        <img src=\"/uploads/images/products/{{ product.product.illustration }}\"
                             alt=\"{{ product.product.name }}\" height=\"50px\"> <br/>
                    </th>
                    <td>
                        {{ product.product.name }} <br/>
                        <small>{{ product.product.subtitle }}</small>
                    </td>
                    <td>
                        <a href=\"{{ path('decrease_to_cart', { 'id' : product.product.id}) }}\">
                            <img src=\"{{ asset('assets/images/remove.png') }}\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                        </a>
                        {{ product.quantity }}
                        <a href=\"{{ path('add_to_cart', { 'id' : product.product.id}) }}\">
                            <img src=\"{{ asset('assets/images/plus.png') }}\" height=\"12px\" alt=\"Ajouté une quantité à mon produit\">
                        </a>
                    </td>
                    <td>{{ (product.product.price / 100)|number_format(2, ',', '.') }} €</td>
                    <td>{{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }} €</td>
                    <td>
                        <!-- Paramètre du produit = son id --->
                        <a href=\"{{ path('delete_to_cart', {'id' : product.product.id}) }}\">
                            <img src=\"{{ asset('assets/images/delete.png') }}\" height=\"20px\"
                                 alt=\"Supprimer mon produit\">
                        </a>
                    </td>
                </tr>
                {% set total = total + (product.product.price * product.quantity) %}

            {% endfor %}

            </tbody>
        </table>

        <div class=\"text-right mb-5 \">
            <!-- Affichage total du nombre de produits --->
            <b>Nombre de produits : </b> {{ cart|length }} <br/>
            <b>Total de mon panier : </b> {{ (total / 100)|number_format(2, ',', '.') }} € <br/>
            <a href=\"{{ path('order') }}\" class=\"btn btn-primary mt-3\">Valider mon panier</a>
        </div>

    {% else %}
        <hr>
        <p><b>Votre panier est vide.</b></p>
    {% endif %}

{% endblock %}
", "cart/index.html.twig", "C:\\Users\\oumayma\\PhpstormProjects\\blogsymfony\\ma-boutique\\templates\\cart\\index.html.twig");
    }
}
