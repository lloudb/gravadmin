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
        // line 26
        echo "

";
        // line 28
        echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
        echo "
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "    ";
                if (($this->getAttribute($context["p"], "visible", array()) && ($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0))) {
                    // line 4
                    echo "        <li class=\"nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl\" data-animation-in=\"fadeIn\" data-animation-out=\"fadeOut\">
            <a id=\"nav-link--features\" class=\"nav-link g-py-7 g-px-0\" href=\"#!\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"nav-submenu--features\">";
                    // line 5
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>

            <ul class=\"hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling\" id=\"nav-submenu--features\" aria-labelledby=\"nav-link--features\">
            ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pc"]) {
                        // line 9
                        echo "                    <li class=\"dropdown-item \">
                        <a class=\"nav-link\" href=\"";
                        // line 10
                        echo $this->getAttribute($context["pc"], "url", array());
                        echo "\">";
                        echo $this->getAttribute($context["pc"], "menu", array());
                        echo "</a>
                    </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pc'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "            </ul>


        </li>

    ";
                } else {
                    // line 19
                    echo "        <li class=\"nav-item  g-mx-10--lg g-mx-15--xl\">
            <a href=\"";
                    // line 20
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"nav-link g-py-7 g-px-0\">";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>
        </li>
    ";
                }
                // line 23
                echo "
  ";
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
        return array (  95 => 23,  87 => 20,  84 => 19,  76 => 13,  65 => 10,  62 => 9,  58 => 8,  52 => 5,  49 => 4,  46 => 3,  41 => 2,  29 => 1,  23 => 28,  19 => 26,);
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
  {% for p in page.children %}
    {% if p.visible and p.children.count > 0 %}
        <li class=\"nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl\" data-animation-in=\"fadeIn\" data-animation-out=\"fadeOut\">
            <a id=\"nav-link--features\" class=\"nav-link g-py-7 g-px-0\" href=\"#!\" aria-haspopup=\"true\" aria-expanded=\"false\" aria-controls=\"nav-submenu--features\">{{ p.menu }}</a>

            <ul class=\"hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling\" id=\"nav-submenu--features\" aria-labelledby=\"nav-link--features\">
            {% for pc in p.children %}
                    <li class=\"dropdown-item \">
                        <a class=\"nav-link\" href=\"{{ pc.url }}\">{{ pc.menu }}</a>
                    </li>
            {% endfor %}
            </ul>


        </li>

    {% else %}
        <li class=\"nav-item  g-mx-10--lg g-mx-15--xl\">
            <a href=\"{{ p.url }}\" class=\"nav-link g-py-7 g-px-0\">{{ p.menu }}</a>
        </li>
    {% endif %}

  {% endfor %}
{% endmacro %}


{{ _self.loop(pages) }}
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\unify\\templates\\partials\\navigation.html.twig");
    }
}
