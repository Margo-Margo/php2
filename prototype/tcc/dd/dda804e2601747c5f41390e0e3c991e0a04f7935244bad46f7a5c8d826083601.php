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

/* guestbook.twig */
class __TwigTemplate_59f1b019cc8c352f79c0f3500c69930b2bbac42bea9244e8d8ef4783cc7be65f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("main.twig", "guestbook.twig", 1);
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
                <h1>WebShop</h1>
                ";
        // line 10
        if ((($context["userid"] ?? null) == null)) {
            // line 11
            echo "                    <h4 class=\"my-4\">Демо режим</h4>
                    <h6 class=\"my-4\">Для оформления заказа</h6>
                    <h6 class=\"my-4\">Войдите под своим аккаунтом</h6>
                ";
        } else {
            // line 15
            echo "                    <h4 class=\"my-4\">Обычный режим</h4>
                    <h6 class=\"my-4\">Обычный аккаунт</h6>
                ";
        }
        // line 18
        echo "            </div>
            <div class=\"col-lg-10 pl-5 pr-5\">
                <h1 class=\"text-lg-center mb-4\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
                <div>

                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["coments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coment"]) {
            // line 24
            echo "                <div style='border: 1px solid #ced4da; border-radius: 0.25rem; margin: 10px; padding: 10px; text-align: left;'>ФИО: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "fio", [], "any", false, false, false, 24), "html", null, true);
            echo "<br>Email: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "email", [], "any", false, false, false, 24), "html", null, true);
            echo "<br>Текст: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "text", [], "any", false, false, false, 24), "html", null, true);
            echo "<br><i>Дата: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "date", [], "any", false, false, false, 24), "html", null, true);
            echo "</i></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                    <div style=\"display: inline-block;\" class=\"form-group col-md-12 mt-5\">
                    <form  method=\"post\">
                        <h3><strong>Оставить свой отзыв:</strong></h3><br>
                        <p>Введите ФИО: <input class=\"form-control py-3 mt-2\" type=\"text\" name=\"fio\" maxlength=\"30\" required></p>
                        <p>Введите Email: <input class=\"form-control py-3 mt-2\" type=\"email\" name=\"email\" maxlength=\"20\" required></p>
                        <p>Введите Текст: <textarea class=\"form-control py-3 mt-2\" type=\"text\" name=\"text\" rows=\"7\" required></textarea></p>
                        <p><input class=\"btn btn-warning mt-3\" style=\"width: 282px;\" type=\"submit\" name=\"submit\"></p>
                    </form>
                </div>
                </div>
                </div>

            </div>
        </div>

    </div>

";
    }

    // line 45
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "guestbook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  133 => 45,  111 => 26,  96 => 24,  92 => 23,  86 => 20,  82 => 18,  77 => 15,  71 => 11,  69 => 10,  63 => 6,  59 => 5,  52 => 3,  48 => 2,  37 => 1,);
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
            <div class=\"col-lg-10 pl-5 pr-5\">
                <h1 class=\"text-lg-center mb-4\">{{ title }}</h1>
                <div>

                    {% for coment in coments %}
                <div style='border: 1px solid #ced4da; border-radius: 0.25rem; margin: 10px; padding: 10px; text-align: left;'>ФИО: {{coment.fio}}<br>Email: {{coment.email}}<br>Текст: {{coment.text}}<br><i>Дата: {{coment.date}}</i></div>
                    {% endfor %}

                    <div style=\"display: inline-block;\" class=\"form-group col-md-12 mt-5\">
                    <form  method=\"post\">
                        <h3><strong>Оставить свой отзыв:</strong></h3><br>
                        <p>Введите ФИО: <input class=\"form-control py-3 mt-2\" type=\"text\" name=\"fio\" maxlength=\"30\" required></p>
                        <p>Введите Email: <input class=\"form-control py-3 mt-2\" type=\"email\" name=\"email\" maxlength=\"20\" required></p>
                        <p>Введите Текст: <textarea class=\"form-control py-3 mt-2\" type=\"text\" name=\"text\" rows=\"7\" required></textarea></p>
                        <p><input class=\"btn btn-warning mt-3\" style=\"width: 282px;\" type=\"submit\" name=\"submit\"></p>
                    </form>
                </div>
                </div>
                </div>

            </div>
        </div>

    </div>

{% endblock %}
{% block footer %}
    {{ parent() }}
{% endblock %}



", "guestbook.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\guestbook.twig");
    }
}
