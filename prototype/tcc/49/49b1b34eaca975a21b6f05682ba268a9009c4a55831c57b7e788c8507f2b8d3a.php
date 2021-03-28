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

/* base.twig */
class __TwigTemplate_304261beca6f7a98e0ac25c85d0f6e04f36e7f3fe064cad01444f7142ed163b7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Интернет-магазин</title>
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\" />
    <link href=\"css/webshop.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\"
          integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

</head>
<body>
    <div class=\"wrapper\" id=\"wrapper\" style=\"min-height: 100vh; position: relative; z-index: 1;\">
        <div id=\"header\">
           ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "        </div>
        <div id=\"body\" style=\"min-height: 100vh; position: relative; z-index: 1;\">
            <div class=\"up__btn\"\">
                <a href=\"#\"><svg class=\"web-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 -256 1792 1792\"
                                 width=\"49\" height=\"49\">
                        <path
                                d=\"M1664.153 697.644q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z\">
                        </path>
                    </svg></a>
            </div>
           ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>";
    }

    // line 19
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "               <p>header  ! base.twig</p>
           ";
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "               <p>body ! base.twig</p>
           ";
    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                    <footer  style=\"height: 100px; margin-top: 100px;\" class=\"bg-dark\">
                        <div  class=\"container d-flex justify-content-between\">
                            <a class=\"navbar-brand click\" href=\"index.php\">
                                <img src=\"img/content/online-shop.png\" width=\"90\" height=\"90\" class=\"d-inline-block align-top\" alt=\"\"
                                     loading=\"lazy\">

                            </a>
                            <span style=\"height: 100%; display: inline-block; align-self: center; color: white;\"> <h5>&copy; Все права защищены</h5></span>
                        </div>
                    </footer>
            ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  110 => 37,  105 => 33,  101 => 32,  96 => 20,  92 => 19,  82 => 49,  80 => 37,  76 => 35,  74 => 32,  62 => 22,  60 => 19,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Интернет-магазин</title>
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\" />
    <link href=\"css/webshop.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\"
          integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

</head>
<body>
    <div class=\"wrapper\" id=\"wrapper\" style=\"min-height: 100vh; position: relative; z-index: 1;\">
        <div id=\"header\">
           {% block header %}
               <p>header  ! base.twig</p>
           {% endblock %}
        </div>
        <div id=\"body\" style=\"min-height: 100vh; position: relative; z-index: 1;\">
            <div class=\"up__btn\"\">
                <a href=\"#\"><svg class=\"web-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 -256 1792 1792\"
                                 width=\"49\" height=\"49\">
                        <path
                                d=\"M1664.153 697.644q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z\">
                        </path>
                    </svg></a>
            </div>
           {% block body %}
               <p>body ! base.twig</p>
           {% endblock %}
        </div>
        <div id=\"footer\">
            {% block footer %}
                    <footer  style=\"height: 100px; margin-top: 100px;\" class=\"bg-dark\">
                        <div  class=\"container d-flex justify-content-between\">
                            <a class=\"navbar-brand click\" href=\"index.php\">
                                <img src=\"img/content/online-shop.png\" width=\"90\" height=\"90\" class=\"d-inline-block align-top\" alt=\"\"
                                     loading=\"lazy\">

                            </a>
                            <span style=\"height: 100%; display: inline-block; align-self: center; color: white;\"> <h5>&copy; Все права защищены</h5></span>
                        </div>
                    </footer>
            {% endblock %}
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>", "base.twig", "W:\\domains\\localhost\\дз4\\prototype\\v\\base.twig");
    }
}
