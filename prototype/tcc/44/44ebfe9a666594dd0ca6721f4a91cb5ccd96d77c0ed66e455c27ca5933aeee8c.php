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
class __TwigTemplate_68cf9ba2e88bd59543f1d141c8e7501098be3af88af3f314274b3c19f712d48f extends \Twig\Template
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
</head>
<body>
    <div class=\"wrapper\" id=\"wrapper\">
        <div id=\"header\">
           ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "        </div>
        <div id=\"body\" style=\"min-height: 100vh; position: relative; z-index: 1;\">
           ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.bundle.min.js\"></script>
</body>
</html>";
    }

    // line 16
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "               <p>header  ! base.twig</p>
           ";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "               <p>body ! base.twig</p>
           ";
    }

    // line 26
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                    <footer  style=\"height: 100px; margin-top: 100px; position: relative; z-index: 2;\" class=\"bg-dark\">
                        <div  class=\"container d-flex justify-content-between\">
                            <a class=\"navbar-brand\" href=\"index.php\">
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
        return array (  103 => 27,  99 => 26,  94 => 22,  90 => 21,  85 => 17,  81 => 16,  71 => 38,  69 => 26,  65 => 24,  63 => 21,  59 => 19,  57 => 16,  40 => 1,);
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
</head>
<body>
    <div class=\"wrapper\" id=\"wrapper\">
        <div id=\"header\">
           {% block header %}
               <p>header  ! base.twig</p>
           {% endblock %}
        </div>
        <div id=\"body\" style=\"min-height: 100vh; position: relative; z-index: 1;\">
           {% block body %}
               <p>body ! base.twig</p>
           {% endblock %}
        </div>
        <div id=\"footer\">
            {% block footer %}
                    <footer  style=\"height: 100px; margin-top: 100px; position: relative; z-index: 2;\" class=\"bg-dark\">
                        <div  class=\"container d-flex justify-content-between\">
                            <a class=\"navbar-brand\" href=\"index.php\">
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
