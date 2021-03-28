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

/* homepage.twig */
class __TwigTemplate_f24fe31794cc1fa67099f72b67fa2fbc7d067e5778c3aaa38e2607385eb1f1b5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "homepage.twig", 1);
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
    <h1 class=\"text-lg-center\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
        <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-ride=\"carousel\" style=\"height: 75vh;\">
            <ol class=\"carousel-indicators\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 11
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 12
                echo "                        <li type=\"button\" data-target=\"#carouselExampleDark\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"active pagination-link\"></li>
                    ";
            } else {
                // line 14
                echo "                        <li type=\"button\" data-target=\"#carouselExampleDark\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"pagination-link\"></li>
                    ";
            }
            // line 16
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ol>
            <div class=\"carousel-inner\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 20
            echo "                    ";
            if (($context["key"] == 0)) {
                // line 21
                echo "                <div class=\"carousel-item active\">
                    ";
            } else {
                // line 23
                echo "                    <div class=\"carousel-item\">
                    ";
            }
            // line 25
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, (("img/products/big/" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25)) . ".jpg"), "html", null, true);
            echo "\" class=\"d-block  mt-5\" style=\"max-height: 550px; margin-left: 15%\" alt=\"...\">
                    <div class=\"carousel-caption  d-md-block\" style=\"text-align: right; color: #0d0d0d;\">
                        <h4>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h4>
                        <h4>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo " руб.</h4>
                        <span class=\"d-block mt-4\"> <a style=\"width: 232px;\"  class=\"btn  btn-warning click\" href=\"?class=catalog&method=viewCatalog\">Перейти в каталог</a></span>

                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleDark\" role=\"button\" data-slide=\"prev\">
                    <svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" width=\"50\" height=\"50\">
                        <path
                                d=\"M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z\">
                        </path>
                    </svg>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleDark\" role=\"button\" data-slide=\"next\">
                    <svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" width=\"50\" height=\"50\">
                        <path
                                d=\"M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z\">
                        </path>
                    </svg>
                    <span class=\"sr-only\">Next</span>
                </a>
        </div>

  </div>
";
    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  163 => 56,  138 => 34,  126 => 28,  122 => 27,  116 => 25,  112 => 23,  108 => 21,  105 => 20,  101 => 19,  97 => 17,  91 => 16,  85 => 14,  79 => 12,  76 => 11,  72 => 10,  66 => 7,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}
{% block header %}
    {{ parent() }}
{% endblock %}
{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-lg-center\">{{ title }}</h1>
        <div id=\"carouselExampleDark\" class=\"carousel carousel-dark slide\" data-ride=\"carousel\" style=\"height: 75vh;\">
            <ol class=\"carousel-indicators\">
                {% for key, product in products  %}
                    {% if key==0 %}
                        <li type=\"button\" data-target=\"#carouselExampleDark\" data-slide-to=\"{{key}}\" class=\"active pagination-link\"></li>
                    {% else %}
                        <li type=\"button\" data-target=\"#carouselExampleDark\" data-slide-to=\"{{key}}\" class=\"pagination-link\"></li>
                    {% endif %}
                {% endfor %}
            </ol>
            <div class=\"carousel-inner\">
                {% for key, product in products %}
                    {% if key==0 %}
                <div class=\"carousel-item active\">
                    {% else %}
                    <div class=\"carousel-item\">
                    {% endif %}
                    <img src=\"{{\"img/products/big/\" ~ product.id ~ \".jpg\"}}\" class=\"d-block  mt-5\" style=\"max-height: 550px; margin-left: 15%\" alt=\"...\">
                    <div class=\"carousel-caption  d-md-block\" style=\"text-align: right; color: #0d0d0d;\">
                        <h4>{{product.title}}</h4>
                        <h4>{{product.price}} руб.</h4>
                        <span class=\"d-block mt-4\"> <a style=\"width: 232px;\"  class=\"btn  btn-warning click\" href=\"?class=catalog&method=viewCatalog\">Перейти в каталог</a></span>

                    </div>
                </div>
                {% endfor %}

            </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleDark\" role=\"button\" data-slide=\"prev\">
                    <svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" width=\"50\" height=\"50\">
                        <path
                                d=\"M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z\">
                        </path>
                    </svg>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleDark\" role=\"button\" data-slide=\"next\">
                    <svg class=\"arrow\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" width=\"50\" height=\"50\">
                        <path
                                d=\"M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z\">
                        </path>
                    </svg>
                    <span class=\"sr-only\">Next</span>
                </a>
        </div>

  </div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "homepage.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\homepage.twig");
    }
}
