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

/* basket.twig */
class __TwigTemplate_4868d8404c64809dadaf82da5ded1e0cba573e4d7163e28a7529f17c31ce3fa8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "basket.twig", 1);
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
            echo "            <h4 class=\"my-4\">Демо режим</h4>
            <h6 class=\"my-4\">Для оформления заказа</h6>
            <h6 class=\"my-4\">Войдите под своим аккаунтом</h6>
        ";
        } else {
            // line 16
            echo "            <h4 class=\"my-4\">Обычный режим</h4>
            <h6 class=\"my-4\">Обычный аккаунт</h6>
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"col-lg-10 d-flex-column justify-content-center text-center\">
        <h1>Корзина</h1>
        <div style=\"clear:both\"></div>
        <br />
        ";
        // line 24
        $context["sum"] = 0;
        // line 25
        echo "        ";
        if (twig_test_empty(($context["products"] ?? null))) {
            // line 26
            echo "
        <tr>
            <td colspan=\"5\" align=\"center\" class=\"my-4\">В корзине пока нет товаров.</td>
        </tr>

        ";
        } elseif ((        // line 31
($context["num"] ?? null) > 1)) {
            // line 32
            echo "        <h3>Подробная информация</h3>
        <div class=\"table-responsive\">
            <div align=\"right\">
                <a href=\"index.php?class=product&method=clearCart&user=";
            // line 35
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><b>Очистить корзину</b></a>
            </div>

            <table class=\"table table-bordered\">
                <tr>
                    <th width=\"30%\">Название</th>
                    <th width=\"10%\" align=\"center\">Количество</th>
                    <th width=\"15%\" align=\"center\">Цена</th>
                    <th width=\"25%\" align=\"center\">Всего</th>
                    <th width=\"5%\" align=\"center\">Добавить</th>
                    <th width=\"5%\" align=\"center\">Удалить</th>
                </tr>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 48
                echo "                <tr>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "good_title", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                    <td align=\"center\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                    <td align=\"center\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51), "html", null, true);
                echo " руб.</td>
                    <td align=\"center\">";
                // line 52
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 52) * twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 52)), "html", null, true);
                echo " руб.</td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id=";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_good", [], "any", false, false, false, 53), "html", null, true);
                echo "&user=";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "\"><span class=\"btn btn-warning mb-2 click\">+</span></a></td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id=";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id_good", [], "any", false, false, false, 54), "html", null, true);
                echo "&user=";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "\"><span class=\"btn btn-warning mb-2 click\">-</span></a></td>
                </tr>
                    ";
                // line 56
                $context["sum"] = (($context["sum"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 56) * twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56)));
                // line 57
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                <tr>
                    <td colspan=\"3\" align=\"right\">Всего</td>
                    <td align=\"center\">";
            // line 60
            echo twig_escape_filter($this->env, ($context["sum"] ?? null), "html", null, true);
            echo " руб.</td>
                    <td></td>
                </tr>
            </table>
            ";
            // line 64
            if ((($context["userid"] ?? null) == null)) {
                // line 65
                echo "                <p>Для оформления заказа необходимо зарегистрироваться</p>
                <a href=\"index.php?class=user&method=login\">Уже зарегистрированы ? Войдите в систему.</a>
            ";
            } else {
                // line 68
                echo "            <form action=\"index.php?class=product&method=viewOrder&user=";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "\" method=\"post\" name=\"cart\">
                <div class=\"form-group mt-4 mb-0\">
                    <input type=\"submit\" class=\"btn btn-warning btn-block click\" name=\"order\" value=\"Оформить заказ\"/>
                </div>
                <br>
            </form>
            ";
            }
            // line 75
            echo "        </div>
            ";
        } else {
            // line 77
            echo "                <h3>Подробная информация</h3>
                <div class=\"table-responsive\">
                    <div align=\"right\">
                        <a href=\"index.php?class=product&method=clearCart&user=";
            // line 80
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><b>Очистить корзину</b></a>
                    </div>

                    <table class=\"table table-bordered\">
                        <tr>
                            <th width=\"30%\">Название</th>
                            <th width=\"10%\" align=\"center\">Количество</th>
                            <th width=\"15%\" align=\"center\">Цена</th>
                            <th width=\"25%\" align=\"center\">Всего</th>
                            <th width=\"5%\" align=\"center\">Добавить</th>
                            <th width=\"5%\" align=\"center\">Удалить</th>
                        </tr>
                            <tr>
                                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["products"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "good_title", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                                <td align=\"center\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["products"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "amount", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                <td align=\"center\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["products"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "price", [], "any", false, false, false, 95), "html", null, true);
            echo " руб.</td>
                                <td align=\"center\">";
            // line 96
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["products"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "amount", [], "any", false, false, false, 96) * twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["products"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "price", [], "any", false, false, false, 96)), "html", null, true);
            echo " руб.</td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id=";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["products"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "id_good", [], "any", false, false, false, 97), "html", null, true);
            echo "&user=";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><span class=\"btn btn-warning mb-2 click\">+</span></a></td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id=";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["products"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "id_good", [], "any", false, false, false, 98), "html", null, true);
            echo "&user=";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "\"><span class=\"btn btn-warning mb-2 click\">-</span></a></td>
                            </tr>
                        <tr>
                            <td colspan=\"3\" align=\"right\">Всего</td>
                            <td align=\"center\">";
            // line 102
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["products"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "amount", [], "any", false, false, false, 102) * twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["products"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "price", [], "any", false, false, false, 102)), "html", null, true);
            echo " руб.</td>
                            <td></td>
                        </tr>
                    </table>
                    ";
            // line 106
            if ((($context["userid"] ?? null) == null)) {
                // line 107
                echo "                    <p>Для оформления заказа необходимо зарегистрироваться</p>
                    <a href=\"index.php?class=user&method=login\">Уже зарегистрированы ? Войдите в систему.</a>
                    ";
            } else {
                // line 110
                echo "                    <form action=\"index.php?class=product&method=viewOrder&user=";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "\" method=\"post\" name=\"cart\">
                        <div class=\"form-group mt-4 mb-0\">
                            <input type=\"submit\" class=\"btn btn-warning btn-block click\" name=\"order\" value=\"Оформить заказ\"/>
                        </div>
                        <br>
                    </form>
                    ";
            }
            // line 117
            echo "                </div>
        ";
        }
        // line 119
        echo "    </div>
    </div>
</div>
";
    }

    // line 123
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "basket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 124,  289 => 123,  282 => 119,  278 => 117,  267 => 110,  262 => 107,  260 => 106,  253 => 102,  244 => 98,  238 => 97,  234 => 96,  230 => 95,  226 => 94,  222 => 93,  206 => 80,  201 => 77,  197 => 75,  186 => 68,  181 => 65,  179 => 64,  172 => 60,  168 => 58,  162 => 57,  160 => 56,  153 => 54,  147 => 53,  143 => 52,  139 => 51,  135 => 50,  131 => 49,  128 => 48,  124 => 47,  109 => 35,  104 => 32,  102 => 31,  95 => 26,  92 => 25,  90 => 24,  83 => 19,  78 => 16,  72 => 12,  70 => 11,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
    <div class=\"col-lg-10 d-flex-column justify-content-center text-center\">
        <h1>Корзина</h1>
        <div style=\"clear:both\"></div>
        <br />
        {% set sum = 0 %}
        {% if products is empty %}

        <tr>
            <td colspan=\"5\" align=\"center\" class=\"my-4\">В корзине пока нет товаров.</td>
        </tr>

        {% elseif num > 1 %}
        <h3>Подробная информация</h3>
        <div class=\"table-responsive\">
            <div align=\"right\">
                <a href=\"index.php?class=product&method=clearCart&user={{ user }}\"><b>Очистить корзину</b></a>
            </div>

            <table class=\"table table-bordered\">
                <tr>
                    <th width=\"30%\">Название</th>
                    <th width=\"10%\" align=\"center\">Количество</th>
                    <th width=\"15%\" align=\"center\">Цена</th>
                    <th width=\"25%\" align=\"center\">Всего</th>
                    <th width=\"5%\" align=\"center\">Добавить</th>
                    <th width=\"5%\" align=\"center\">Удалить</th>
                </tr>
                {% for product in products %}
                <tr>
                    <td>{{product.good_title}}</td>
                    <td align=\"center\">{{product.amount}}</td>
                    <td align=\"center\">{{product.price}} руб.</td>
                    <td align=\"center\">{{ product.amount * product.price }} руб.</td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id={{ product.id_good }}&user={{ user }}\"><span class=\"btn btn-warning mb-2 click\">+</span></a></td>
                    <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id={{ product.id_good }}&user={{ user }}\"><span class=\"btn btn-warning mb-2 click\">-</span></a></td>
                </tr>
                    {% set sum = sum + product.amount * product.price %}
                {% endfor %}
                <tr>
                    <td colspan=\"3\" align=\"right\">Всего</td>
                    <td align=\"center\">{{sum}} руб.</td>
                    <td></td>
                </tr>
            </table>
            {% if userid == NULL %}
                <p>Для оформления заказа необходимо зарегистрироваться</p>
                <a href=\"index.php?class=user&method=login\">Уже зарегистрированы ? Войдите в систему.</a>
            {% else %}
            <form action=\"index.php?class=product&method=viewOrder&user={{ user }}\" method=\"post\" name=\"cart\">
                <div class=\"form-group mt-4 mb-0\">
                    <input type=\"submit\" class=\"btn btn-warning btn-block click\" name=\"order\" value=\"Оформить заказ\"/>
                </div>
                <br>
            </form>
            {% endif %}
        </div>
            {% else %}
                <h3>Подробная информация</h3>
                <div class=\"table-responsive\">
                    <div align=\"right\">
                        <a href=\"index.php?class=product&method=clearCart&user={{user}}\"><b>Очистить корзину</b></a>
                    </div>

                    <table class=\"table table-bordered\">
                        <tr>
                            <th width=\"30%\">Название</th>
                            <th width=\"10%\" align=\"center\">Количество</th>
                            <th width=\"15%\" align=\"center\">Цена</th>
                            <th width=\"25%\" align=\"center\">Всего</th>
                            <th width=\"5%\" align=\"center\">Добавить</th>
                            <th width=\"5%\" align=\"center\">Удалить</th>
                        </tr>
                            <tr>
                                <td>{{products[0].good_title}}</td>
                                <td align=\"center\">{{products[0].amount}}</td>
                                <td align=\"center\">{{products[0].price}} руб.</td>
                                <td align=\"center\">{{products[0].amount * products[0].price}} руб.</td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=addToCart&id={{products[0].id_good }}&user={{user}}\"><span class=\"btn btn-warning mb-2 click\">+</span></a></td>
                                <td align=\"center\"><a href=\"index.php?class=product&method=deleteFromCart&id={{products[0].id_good }}&user={{user}}\"><span class=\"btn btn-warning mb-2 click\">-</span></a></td>
                            </tr>
                        <tr>
                            <td colspan=\"3\" align=\"right\">Всего</td>
                            <td align=\"center\">{{products[0].amount * products[0].price}} руб.</td>
                            <td></td>
                        </tr>
                    </table>
                    {% if userid == NULL %}
                    <p>Для оформления заказа необходимо зарегистрироваться</p>
                    <a href=\"index.php?class=user&method=login\">Уже зарегистрированы ? Войдите в систему.</a>
                    {% else %}
                    <form action=\"index.php?class=product&method=viewOrder&user={{user}}\" method=\"post\" name=\"cart\">
                        <div class=\"form-group mt-4 mb-0\">
                            <input type=\"submit\" class=\"btn btn-warning btn-block click\" name=\"order\" value=\"Оформить заказ\"/>
                        </div>
                        <br>
                    </form>
                    {% endif %}
                </div>
        {% endif %}
    </div>
    </div>
</div>
{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "basket.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\basket.twig");
    }
}
