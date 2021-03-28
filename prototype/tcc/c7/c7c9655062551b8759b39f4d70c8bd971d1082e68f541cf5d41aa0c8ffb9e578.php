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

/* main.twig */
class __TwigTemplate_e96ca8e00f1b689182288c20f5d4fe10b66d898f74c296c95fc874187036b584 extends \Twig\Template
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
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "main.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.php\"> <img src=\"img/content/online-shop.png\" width=\"50\" height=\"50\" class=\"d-inline-block align-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   loading=\"lazy\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
\t\t\t\t\taria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Главная
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Каталог</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=guestbook&method=viewGuestbook\">Отзывы</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=contacts&method=viewContacts\">Контакты</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 29
        if ((($context["user"] ?? null) == true)) {
            // line 30
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=getUser\">Личный кабинет</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=logout\">Выйти (";
            // line 34
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo ")</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t";
        if ((($context["user"] ?? null) == false)) {
            // line 38
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=login\">Войти</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=regUser\">Регистрация</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"btn btn-outline-warning my-2 my-sm-0 cart-button\" href=\"index.php?class=product&method=viewBasket\">Корзина</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
";
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "\t<div id=\"body\">
\t    ";
        // line 55
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "
\t</div>
";
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 60,  130 => 59,  123 => 55,  120 => 54,  116 => 53,  105 => 45,  96 => 38,  93 => 37,  87 => 34,  81 => 30,  79 => 29,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block header %}
\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.php\"> <img src=\"img/content/online-shop.png\" width=\"50\" height=\"50\" class=\"d-inline-block align-top\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   loading=\"lazy\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
\t\t\t\t\taria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"menu\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Главная
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=catalog&method=viewCatalog\">Каталог</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=guestbook&method=viewGuestbook\">Отзывы</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=contacts&method=viewContacts\">Контакты</a>
\t\t\t\t\t</li>

\t\t\t\t\t{% if user == true %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=getUser\">Личный кабинет</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=logout\">Выйти ({{user}})</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if user == false %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=login\">Войти</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?class=user&method=regUser\">Регистрация</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"btn btn-outline-warning my-2 my-sm-0 cart-button\" href=\"index.php?class=product&method=viewBasket\">Корзина</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
{% endblock %}
{% block body %}
\t<div id=\"body\">
\t    {{text}}
\t</div>
{% endblock %}
        
{% block footer %}
\t{{ parent() }}
{% endblock %}
", "main.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\main.twig");
    }
}
