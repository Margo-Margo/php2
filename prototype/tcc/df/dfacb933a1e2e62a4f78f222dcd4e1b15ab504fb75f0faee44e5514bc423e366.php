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

/* primary.twig */
class __TwigTemplate_ad662848c71a9a7ffa490eb4d58daefa94a5633f5fd214e42d687341914c7b31 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "primary.twig", 1);
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

        <h1 class=\"text-lg-center\">";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    <div class=\"d-flex flex-wrap justify-content-around mt-4\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            <div class=\"item card border-secondary p-4 m-2\" style=\"width: 18rem;\">

                    <a href=\"index.php?class=product&method=viewItem&id=";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, (("img/products/small/" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 14)) . ".jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
                        ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 17) == 0)) {
                // line 18
                echo "                            ";
                $context["score"] = "☆ ☆ ☆ ☆ ☆";
                // line 19
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 19) == 1)) {
                // line 20
                echo "                            ";
                $context["score"] = "★ ☆ ☆ ☆ ☆";
                // line 21
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 21) == 2)) {
                // line 22
                echo "                            ";
                $context["score"] = "★ ★ ☆ ☆ ☆";
                // line 23
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 23) == 3)) {
                // line 24
                echo "                            ";
                $context["score"] = "★ ★ ★ ☆ ☆";
                // line 25
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 25) == 4)) {
                // line 26
                echo "                            ";
                $context["score"] = "★ ★ ★ ★ ☆";
                // line 27
                echo "                        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "reviews_score", [], "any", false, false, false, 27) == 5)) {
                // line 28
                echo "                            ";
                $context["score"] = "★ ★ ★ ★ ★";
                // line 29
                echo "                        ";
            }
            // line 30
            echo "
                            <span class=\"text-warning\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["score"] ?? null), "html", null, true);
            echo "</span>


                        <h4 class=\"card-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 34), "html", null, true);
            echo " руб.</h4>
                        <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "short_description", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                        <br>
                        <form method=\"post\" action=\"index.php?class=product&method=addToCart&id=";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"quantity\" value=\"1\"/>
                            <input type=\"hidden\" name=\"hidden_name\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" name=\"hidden_price\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40), "html", null, true);
            echo "\" />
                            <input type=\"hidden\" name=\"hidden_id\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" />
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-block btn-warning click\" />
                        </form>
                    </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </div>

</div>
";
    }

    // line 52
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "primary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  181 => 52,  174 => 48,  161 => 41,  157 => 40,  153 => 39,  148 => 37,  143 => 35,  139 => 34,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  88 => 16,  81 => 14,  77 => 12,  73 => 11,  68 => 9,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
                            <input type=\"submit\" name=\"add_to_cart\" value=\"Купить\" class=\"btn btn-block btn-warning click\" />
                        </form>
                    </div>

            </div>
        {% endfor %}
    </div>

</div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "primary.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\primary.twig");
    }
}
