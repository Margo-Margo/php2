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

/* product.twig */
class __TwigTemplate_c990ae10c27e397cf78c0ccbea71a02b51b4375d1a6a7ce2d1a643cde41e00e5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "product.twig", 1);
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
        echo "    <div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-lg-2\">
            <h1 class=\"my-4\">WebShop</h1>
            ";
        // line 10
        if ((($context["userid"] ?? null) == null)) {
            // line 11
            echo "                <h4 class=\"my-4\">Демо режим</h4>
                <h6 class=\"my-4\">Для оформления заказа</h6>
                <h6 class=\"my-4\">Войдите под своим аккаунтом</h6>
            ";
        } else {
            // line 15
            echo "                <h4 class=\"my-4\">Обычный режим</h4>
                <h6 class=\"my-4\">Обычный аккаунт</h6>
            ";
        }
        // line 18
        echo "        </div>
            <div class=\"col-lg-10 d-flex-column justify-content-center text-center\">
                <h1 class=\"text-lg-center\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                <div class=\"mt-4\">
                    <img class=\"card-img-top\" style=\"height: 500px; width: 500px;\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (("img/products/big/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 22)) . ".jpg"), "html", null, true);
        echo "\" alt=\"\">

                        <h3 class=\"card-title\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
                        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 25) == 0)) {
            // line 26
            echo "                            ";
            $context["score"] = "☆ ☆ ☆ ☆ ☆";
            // line 27
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 27) == 1)) {
            // line 28
            echo "                            ";
            $context["score"] = "★ ☆ ☆ ☆ ☆";
            // line 29
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 29) == 2)) {
            // line 30
            echo "                            ";
            $context["score"] = "★ ★ ☆ ☆ ☆";
            // line 31
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 31) == 3)) {
            // line 32
            echo "                            ";
            $context["score"] = "★ ★ ★ ☆ ☆";
            // line 33
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 33) == 4)) {
            // line 34
            echo "                            ";
            $context["score"] = "★ ★ ★ ★ ☆";
            // line 35
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_score", [], "any", false, false, false, 35) == 5)) {
            // line 36
            echo "                            ";
            $context["score"] = "★ ★ ★ ★ ★";
            // line 37
            echo "                        ";
        }
        // line 38
        echo "
                        <span class=\"text-warning\">";
        // line 39
        echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
        echo "</span>
                        <h4 class=\"card-title mt-3\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 40), "html", null, true);
        echo " руб.</h4>
                        <p class=\"card-text\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                        <br>
                        <h6>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reviews_count", [], "any", false, false, false, 43), "html", null, true);
        echo " отзывов</h6>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id=";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 47), "html", null, true);
        echo "\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\" />
                            <span class=\"d-block mt-2\"><input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-warning mt-3 click\" style=\"width: 262px; align-self: center;\" /></span>
                        </form>
                    <span class=\"d-block mt-2\"> <a style=\"width: 262px;\"  class=\"btn  btn-outline-dark click\" href=\"?class=catalog&method=viewCatalog\">Вернуться в каталог</a></span>
                </div>
            </div>
        <br>
        <br>
    </div>
    </div>
";
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 60,  186 => 59,  171 => 48,  167 => 47,  163 => 46,  158 => 44,  154 => 43,  149 => 41,  145 => 40,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  100 => 25,  96 => 24,  91 => 22,  86 => 20,  82 => 18,  77 => 15,  71 => 11,  69 => 10,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
            <h1 class=\"my-4\">WebShop</h1>
            {% if userid == NULL %}
                <h4 class=\"my-4\">Демо режим</h4>
                <h6 class=\"my-4\">Для оформления заказа</h6>
                <h6 class=\"my-4\">Войдите под своим аккаунтом</h6>
            {% else %}
                <h4 class=\"my-4\">Обычный режим</h4>
                <h6 class=\"my-4\">Обычный аккаунт</h6>
            {% endif %}
        </div>
            <div class=\"col-lg-10 d-flex-column justify-content-center text-center\">
                <h1 class=\"text-lg-center\">{{ title }}</h1>
                <div class=\"mt-4\">
                    <img class=\"card-img-top\" style=\"height: 500px; width: 500px;\" src=\"{{\"img/products/big/\" ~ product.id ~ \".jpg\"}}\" alt=\"\">

                        <h3 class=\"card-title\">{{product.title}}</h3>
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
                        <h4 class=\"card-title mt-3\">{{product.price}} руб.</h4>
                        <p class=\"card-text\">{{product.description}}</p>
                        <br>
                        <h6>{{product.reviews_count}} отзывов</h6>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id={{product.id}}\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"{{product.title}}\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"{{product.price}}\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"{{product.id}}\" />
                            <span class=\"d-block mt-2\"><input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-warning mt-3 click\" style=\"width: 262px; align-self: center;\" /></span>
                        </form>
                    <span class=\"d-block mt-2\"> <a style=\"width: 262px;\"  class=\"btn  btn-outline-dark click\" href=\"?class=catalog&method=viewCatalog\">Вернуться в каталог</a></span>
                </div>
            </div>
        <br>
        <br>
    </div>
    </div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "product.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\product.twig");
    }
}
