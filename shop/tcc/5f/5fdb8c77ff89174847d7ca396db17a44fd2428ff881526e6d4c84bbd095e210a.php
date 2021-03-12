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

/* catalog.twig */
class __TwigTemplate_3a3f8014366ff55197f47a83c5b159f452a41a0efb8f126f275454b108a85d79 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("main.twig", "catalog.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-5\">
    <div class=\"row\">

        <div class=\"col-lg-2\">
            <h1>WebShop</h1>
            ";
        // line 11
        if ((($context["userid"] ?? null) == null)) {
            // line 12
            echo "                <h4 class=\"my-4\">Демо режим</h4>
                <h6 class=\"my-4\">Для оформления заказа</h6>
                <h6 class=\"my-4\">Войдите под своим аккаунтом</h6>
            ";
        } else {
            // line 16
            echo "                <h4 class=\"my-4\">Обычный режим</h4>
                <h6 class=\"my-4\">Обычный аккаунт</h6>
            ";
        }
        // line 19
        echo "        </div>
    <div class=\"col-lg-10 \">
        <h1 class=\"text-lg-center\">";
        // line 21
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    <div class=\"d-flex flex-wrap justify-content-around mt-4\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 24
            echo "            <div class=\"item card border-secondary p-4 m-2\" style=\"width: 18rem;\">

                    <a href=\"index.php?class=product&method=viewItem&id=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, (("img/products/small/" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 26)) . ".jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</h4>
                        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 29) == 0)) {
                // line 30
                echo "                            ";
                $context["score"] = "☆ ☆ ☆ ☆ ☆";
                // line 31
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 31) == 1)) {
                // line 32
                echo "                            ";
                $context["score"] = "★ ☆ ☆ ☆ ☆";
                // line 33
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 33) == 2)) {
                // line 34
                echo "                            ";
                $context["score"] = "★ ★ ☆ ☆ ☆";
                // line 35
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 35) == 3)) {
                // line 36
                echo "                            ";
                $context["score"] = "★ ★ ★ ☆ ☆";
                // line 37
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 37) == 4)) {
                // line 38
                echo "                            ";
                $context["score"] = "★ ★ ★ ★ ☆";
                // line 39
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 39) == 5)) {
                // line 40
                echo "                            ";
                $context["score"] = "★ ★ ★ ★ ★";
                // line 41
                echo "                        ";
            }
            // line 42
            echo "
                            <span class=\"text-warning\">";
            // line 43
            echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
            echo "</span>


                        <h4 class=\"card-title\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46), "html", null, true);
            echo " руб.</h4>
                        <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "short_description", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                        <br>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id=";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" />
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-block btn-warning\" />
                        </form>
                    </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </div>
    </div>
</div>
";
    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 65,  200 => 64,  193 => 60,  180 => 53,  176 => 52,  172 => 51,  167 => 49,  162 => 47,  158 => 46,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  111 => 29,  107 => 28,  100 => 26,  96 => 24,  92 => 23,  87 => 21,  83 => 19,  78 => 16,  72 => 12,  70 => 11,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}
{% block header %}
    {{ parent() }}
{% endblock %}
{% block body %}
<div class=\"container mt-5\">
    <div class=\"row\">

        <div class=\"col-lg-2\">
            <h1>WebShop</h1>
            {% if userid == NULL %}
                <h4 class=\"my-4\">Демо режим</h4>
                <h6 class=\"my-4\">Для оформления заказа</h6>
                <h6 class=\"my-4\">Войдите под своим аккаунтом</h6>
            {% else %}
                <h4 class=\"my-4\">Обычный режим</h4>
                <h6 class=\"my-4\">Обычный аккаунт</h6>
            {% endif %}
        </div>
    <div class=\"col-lg-10 \">
        <h1 class=\"text-lg-center\">{{ title }}</h1>
    <div class=\"d-flex flex-wrap justify-content-around mt-4\">
        {% for product in products %}
            <div class=\"item card border-secondary p-4 m-2\" style=\"width: 18rem;\">

                    <a href=\"index.php?class=product&method=viewItem&id={{product.id}}\"><img class=\"card-img-top\" src=\"{{\"img/products/small/\" ~ product.id ~ \".jpg\"}}\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{product.title}}</h4>
                        {% if      product.reviews_score == 0 %}
                            {% set score = \"☆ ☆ ☆ ☆ ☆\" %}
                        {% elseif  product.reviews_score == 1 %}
                            {% set score = \"★ ☆ ☆ ☆ ☆\" %}
                        {% elseif  product.reviews_score == 2 %}
                            {% set score = \"★ ★ ☆ ☆ ☆\" %}
                        {% elseif  product.reviews_score == 3 %}
                            {% set score = \"★ ★ ★ ☆ ☆\" %}
                        {% elseif  product.reviews_score == 4 %}
                            {% set score = \"★ ★ ★ ★ ☆\" %}
                        {% elseif  product.reviews_score == 5 %}
                            {% set score = \"★ ★ ★ ★ ★\" %}
                        {% endif %}

                            <span class=\"text-warning\">{{score}}</span>


                        <h4 class=\"card-title\">{{product.price}} руб.</h4>
                        <p>{{product.short_description}}</p>
                        <br>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id={{product.id}}\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"{{product.title}}\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"{{product.price}}\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"{{product.id}}\" />
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-block btn-warning\" />
                        </form>
                    </div>

            </div>
        {% endfor %}
    </div>
    </div>
</div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "catalog.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\catalog.twig");
    }
}
