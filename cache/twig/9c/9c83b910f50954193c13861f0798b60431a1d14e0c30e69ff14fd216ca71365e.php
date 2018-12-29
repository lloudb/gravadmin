<?php

/* partials/navigation.html.twig */
class __TwigTemplate_45783e80b680fd0a1de9d4c4142b22b54a620cf1e3153899c9dd6df97462bccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        echo "
<ul class=\"navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto\">
    ";
        // line 20
        echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
        echo "
</ul>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 4
                    echo "    <li class=\"hs-has-mega-menu nav-item  g-mx-10--lg g-mx-15--xl\" data-animation-in=\"fadeIn\" data-animation-out=\"fadeOut\" data-max-width=\"60%\" data-position=\"left\">
      <a id=\"nav-link--features\" class=\"nav-link g-py-7 g-px-0\" href=\"#!\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"nav-submenu--features\">
        ";
                    // line 6
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
      <i class=\"hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7\"></i>
      </a>
      <ul class=\"hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling\" id=\"nav-submenu--features\" aria-labelledby=\"nav-link--features\">
        <li class=\"dropdown-item \">
          <a class=\"nav-link\" href=\"../../unify-main/shortcodes/headers/index.html\">Headers</a>
        </li>
      </ul>
    </li>
    ";
                }
                // line 16
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  54 => 6,  50 => 4,  47 => 3,  42 => 2,  30 => 1,  23 => 20,  19 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
  {% for p in page.children.visible %}
    {% if p.children.visible.count > 0 %}
    <li class=\"hs-has-mega-menu nav-item  g-mx-10--lg g-mx-15--xl\" data-animation-in=\"fadeIn\" data-animation-out=\"fadeOut\" data-max-width=\"60%\" data-position=\"left\">
      <a id=\"nav-link--features\" class=\"nav-link g-py-7 g-px-0\" href=\"#!\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"nav-submenu--features\">
        {{ p.menu }}
      <i class=\"hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7\"></i>
      </a>
      <ul class=\"hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling\" id=\"nav-submenu--features\" aria-labelledby=\"nav-link--features\">
        <li class=\"dropdown-item \">
          <a class=\"nav-link\" href=\"../../unify-main/shortcodes/headers/index.html\">Headers</a>
        </li>
      </ul>
    </li>
    {% endif %}
  {% endfor %}
{% endmacro %}

<ul class=\"navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto\">
    {{ _self.loop(pages) }}
</ul>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\unify\\templates\\partials\\navigation.html.twig");
    }
}
