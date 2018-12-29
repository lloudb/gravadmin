<?php

/* partials/base.html.twig */
class __TwigTemplate_5fcc4465c25f82927adfe3062779674b7f81c86a015f3b9ce65d604516b1b77d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Title -->
  <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo "</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

  <!-- Favicon -->
  <link rel=\"shortcut icon\" href=\"../../favicon.ico\">
  <!-- Google Fonts -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\">
  <!-- CSS Global Compulsory -->
  ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
</head>

<body>
  ";
        // line 39
        $this->loadTemplate("partials/menu.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "  ";
        $this->loadTemplate("partials/banner.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('showcase', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "
  <!-- JS Global Compulsory -->
  ";
        // line 53
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/jquery/jquery.min.js"), "method");
        // line 54
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/jquery-migrate/jquery-migrate.min.js"), "method");
        // line 55
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/popper.js/popper.min.js"), "method");
        // line 56
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/bootstrap/bootstrap.min.js"), "method");
        // line 57
        echo "
  <!-- JS Implementing Plugins -->
  ";
        // line 59
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/hs-megamenu/src/hs.megamenu.js"), "method");
        // line 60
        echo "
  <!-- JS Unify -->
  ";
        // line 62
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://vendor/hs-megamenu/src/hs.megamenu.js"), "method");
        // line 63
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/hs.core.js"), "method");
        // line 64
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/components/hs.header.js"), "method");
        // line 65
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/helpers/hs.hamburgers.js"), "method");
        // line 66
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/components/hs.tabs.js"), "method");
        // line 67
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/components/hs.go-to.js"), "method");
        // line 68
        echo "
  <!-- JS Customization -->
  ";
        // line 70
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/custom.js"), "method");
        // line 71
        echo "
  ";
        // line 72
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

  <!-- JS Plugins Init. -->
  <script>
    \$(document).on('ready', function () {
        // initialization of tabs
        \$.HSCore.components.HSTabs.init('[role=\"tablist\"]');

        // initialization of go to
        \$.HSCore.components.HSGoTo.init('.js-go-to');
      });

      \$(window).on('load', function () {
        // initialization of header
        \$.HSCore.components.HSHeader.init(\$('#js-header'));
        \$.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        \$('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: \$('.container'),
          breakpoint: 991
        });
      });

      \$(window).on('resize', function () {
        setTimeout(function () {
          \$.HSCore.components.HSTabs.init('[role=\"tablist\"]');
        }, 200);
      });
  </script>







</body>

</html>
";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "
  ";
        // line 20
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/bootstrap/bootstrap.min.css"), "method");
        // line 21
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/icon-awesome/css/font-awesome.min.css"), "method");
        // line 22
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/icon-line-pro/style.css"), "method");
        // line 23
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/icon-hs/style.css"), "method");
        // line 24
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/animate.css"), "method");
        // line 25
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/hs-megamenu/src/hs.megamenu.css"), "method");
        // line 26
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://vendor/hamburgers/hamburgers.min.css"), "method");
        // line 27
        echo "  <!-- CSS Unify -->
  ";
        // line 28
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/unify.css"), "method");
        // line 29
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/unify-core.css"), "method");
        // line 30
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/unify-components.css"), "method");
        // line 31
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/unify-globals.css"), "method");
        // line 32
        echo "  <!-- CSS Customization -->
  ";
        // line 33
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 34
        echo "  ";
    }

    // line 42
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "  <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "  </section>
  ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 46,  244 => 47,  242 => 46,  237 => 45,  234 => 44,  229 => 42,  225 => 34,  223 => 33,  220 => 32,  217 => 31,  214 => 30,  211 => 29,  209 => 28,  206 => 27,  203 => 26,  200 => 25,  197 => 24,  194 => 23,  191 => 22,  188 => 21,  186 => 20,  183 => 19,  180 => 18,  134 => 72,  131 => 71,  129 => 70,  125 => 68,  122 => 67,  119 => 66,  116 => 65,  113 => 64,  110 => 63,  108 => 62,  104 => 60,  102 => 59,  98 => 57,  95 => 56,  92 => 55,  89 => 54,  87 => 53,  83 => 51,  81 => 50,  78 => 49,  76 => 44,  73 => 43,  71 => 42,  68 => 41,  65 => 40,  63 => 39,  55 => 35,  53 => 18,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Title -->
  <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}{% if header.title %}{{ header.title|e('html') }} | {% endif %}</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

  <!-- Favicon -->
  <link rel=\"shortcut icon\" href=\"../../favicon.ico\">
  <!-- Google Fonts -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\">
  <!-- CSS Global Compulsory -->
  {%  block stylesheets %}

  {% do assets.addCss('theme://vendor/bootstrap/bootstrap.min.css') %}
  {% do assets.addCss('theme://vendor/icon-awesome/css/font-awesome.min.css') %}
  {% do assets.addCss('theme://vendor/icon-line-pro/style.css') %}
  {% do assets.addCss('theme://vendor/icon-hs/style.css') %}
  {% do assets.addCss('theme://vendor/animate.css') %}
  {% do assets.addCss('theme://vendor/hs-megamenu/src/hs.megamenu.css') %}
  {% do assets.addCss('theme://vendor/hamburgers/hamburgers.min.css') %}
  <!-- CSS Unify -->
  {% do assets.addCss('theme://css/unify.css') %}
  {% do assets.addCss('theme://css/unify-core.css') %}
  {% do assets.addCss('theme://css/unify-components.css') %}
  {% do assets.addCss('theme://css/unify-globals.css') %}
  <!-- CSS Customization -->
  {% do assets.addCss('theme://css/custom.css') %}
  {%  endblock %}
  {{ assets.css() | raw }}
</head>

<body>
  {% include 'partials/menu.html.twig' %}
  {% include 'partials/banner.html.twig' %}

  {% block showcase %}{% endblock %}

  {% block body %}
  <section id=\"body\" class=\"{{ class }}\">
      {% block content %}{% endblock %}
  </section>
  {% endblock %}

  {% include 'partials/footer.html.twig' %}

  <!-- JS Global Compulsory -->
  {% do assets.addJs('theme://vendor/jquery/jquery.min.js') %}
  {% do assets.addJs('theme://vendor/jquery-migrate/jquery-migrate.min.js') %}
  {% do assets.addJs('theme://vendor/popper.js/popper.min.js') %}
  {% do assets.addJs('theme://vendor/bootstrap/bootstrap.min.js') %}

  <!-- JS Implementing Plugins -->
  {% do assets.addJs('theme://vendor/hs-megamenu/src/hs.megamenu.js') %}

  <!-- JS Unify -->
  {% do assets.addJs('theme://vendor/hs-megamenu/src/hs.megamenu.js') %}
  {% do assets.addJs('theme://js/hs.core.js') %}
  {% do assets.addJs('theme://js/components/hs.header.js') %}
  {% do assets.addJs('theme://js/helpers/hs.hamburgers.js') %}
  {% do assets.addJs('theme://js/components/hs.tabs.js') %}
  {% do assets.addJs('theme://js/components/hs.go-to.js') %}

  <!-- JS Customization -->
  {% do assets.addJs('theme://js/custom.js') %}

  {{ assets.js() | raw }}

  <!-- JS Plugins Init. -->
  <script>
    \$(document).on('ready', function () {
        // initialization of tabs
        \$.HSCore.components.HSTabs.init('[role=\"tablist\"]');

        // initialization of go to
        \$.HSCore.components.HSGoTo.init('.js-go-to');
      });

      \$(window).on('load', function () {
        // initialization of header
        \$.HSCore.components.HSHeader.init(\$('#js-header'));
        \$.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        \$('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: \$('.container'),
          breakpoint: 991
        });
      });

      \$(window).on('resize', function () {
        setTimeout(function () {
          \$.HSCore.components.HSTabs.init('[role=\"tablist\"]');
        }, 200);
      });
  </script>







</body>

</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\unify\\templates\\partials\\base.html.twig");
    }
}
