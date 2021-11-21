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

/* order/add.html.twig */
class __TwigTemplate_a60a79e6707394c7d46c803f004e2c00ace7fb1c6c9190527a05fdd9f8bff49b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement de ma commande ! Ma Boutique";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h2>Mon récapitulatif</h2>
    <p>Vérifier vos informations avant de passer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong> <br />
            <div class=\"form-check mt-3\">
                ";
        // line 17
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })());
        echo "
            </div>
            <hr>
            <strong>Mon transporteur</strong> <br />
            <div class=\"form-check\">
                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo " <br />
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo " <br />
                ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24) / 100), 2, ",", "."), "html", null, true);
        echo " € <br />
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b> <br />
            </div>

            <div class=\"order-summary\">
                ";
        // line 34
        $context["total"] = null;
        // line 35
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 36
            echo "                    <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo " mt-2 ";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/images/products/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "illustration", [], "any", false, false, false, 38), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "\" height=\"75px\"> <br/>
                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo " <br />
                            <small>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "subtitle", [], "any", false, false, false, 43), "html", null, true);
            echo "
                                <br />
                                x ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45), "html", null, true);
            echo "
                            </small>
                        </div>
                        <div class=\"col-2 my-auto\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "price", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49)) / 100), 2, ",", "."), "html", null, true);
            echo "€
                        </div>
                    </div>
                    ";
            // line 52
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 52)));
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>


            <hr>
            <strong>Sous-Total :  </strong> ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br />
            <strong>Livraison : </strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59) / 100), 2, ",", "."), "html", null, true);
        echo " €
            <hr>
            <strong>Total : </strong> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 61, $this->source); })()), "price", [], "any", false, false, false, 61) / 100)), 2, ",", "."), "html", null, true);
        echo " €


            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | ";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 64, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 71
        echo "    <script type=\"text/javascript\">
        /*// Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe(\"pk_test_51IC9puBDBKaV4yhuv4OVtJAfYz1WHNGQ7MRY2RPcnrKvvHar2LBMiuUX7T4CAye2wUuKHdGYxjP38LHFb1u8JeJP00RQ5jO9Ot\");
        var checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function () {
                fetch(\"/commande/create-session/";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "\", {
                    method: \"POST\",
                })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    if (session.error == 'order') {
                        window.location.replace('";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "')

                    } else {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    }

                })
                .then(function (result) {
                    // If redirectToCheckout fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using error.message.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {

                    console.error(\"Error:\", error);
                });
        });*/
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 85,  258 => 77,  250 => 71,  240 => 70,  225 => 64,  219 => 61,  214 => 59,  210 => 58,  204 => 54,  198 => 53,  196 => 52,  190 => 49,  183 => 45,  178 => 43,  174 => 42,  168 => 39,  164 => 38,  156 => 36,  151 => 35,  149 => 34,  136 => 24,  132 => 23,  128 => 22,  120 => 17,  111 => 10,  101 => 9,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}Paiement de ma commande ! Ma Boutique{% endblock %}

{% block content %}
    <h2>Mon récapitulatif</h2>
    <p>Vérifier vos informations avant de passer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong> <br />
            <div class=\"form-check mt-3\">
                {{ delivery|raw }}
            </div>
            <hr>
            <strong>Mon transporteur</strong> <br />
            <div class=\"form-check\">
                {{ carrier.name }} <br />
                {{ carrier.description }} <br />
                {{ (carrier.price / 100)|number_format(2, ',', '.') }} € <br />
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b> <br />
            </div>

            <div class=\"order-summary\">
                {% set total = null %}
                {% for key, product in cart %}
                    <div class=\"row {% if key > 0 %} mt-2 {% endif %}\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/images/products/{{ product.product.illustration }}\"
                                 alt=\"{{ product.product.name }}\" height=\"75px\"> <br/>
                        </div>
                        <div class=\"col-8 my-auto\">
                            {{ product.product.name }} <br />
                            <small>{{ product.product.subtitle }}
                                <br />
                                x {{ product.quantity }}
                            </small>
                        </div>
                        <div class=\"col-2 my-auto\">
                            {{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }}€
                        </div>
                    </div>
                    {% set total = total + (product.product.price * product.quantity) %}
                {% endfor %}
            </div>


            <hr>
            <strong>Sous-Total :  </strong> {{ (total / 100)|number_format(2, ',', '.') }} €<br />
            <strong>Livraison : </strong> {{ (carrier.price / 100)|number_format(2, ',', '.') }} €
            <hr>
            <strong>Total : </strong> {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €


            <a class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | {{ ((total / 100) + (carrier.price / 100))|number_format(2, ',', '.') }} €</a>

        </div>
    </div>
{% endblock %}

{% block script %}
    <script type=\"text/javascript\">
        /*// Create an instance of the Stripe object with your publishable API key
        var stripe = Stripe(\"pk_test_51IC9puBDBKaV4yhuv4OVtJAfYz1WHNGQ7MRY2RPcnrKvvHar2LBMiuUX7T4CAye2wUuKHdGYxjP38LHFb1u8JeJP00RQ5jO9Ot\");
        var checkoutButton = document.getElementById(\"checkout-button\");

        checkoutButton.addEventListener(\"click\", function () {
                fetch(\"/commande/create-session/{{ reference }}\", {
                    method: \"POST\",
                })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    if (session.error == 'order') {
                        window.location.replace('{{ path('order') }}')

                    } else {
                        return stripe.redirectToCheckout({ sessionId: session.id });
                    }

                })
                .then(function (result) {
                    // If redirectToCheckout fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using error.message.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {

                    console.error(\"Error:\", error);
                });
        });*/
    </script>

{% endblock %}
", "order/add.html.twig", "C:\\Users\\oumayma\\PhpstormProjects\\blogsymfony\\ma-boutique\\templates\\order\\add.html.twig");
    }
}
