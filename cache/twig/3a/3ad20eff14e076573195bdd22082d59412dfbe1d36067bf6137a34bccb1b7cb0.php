<?php

/* default.html.twig */
class __TwigTemplate_2dd5cc12e659b4fde4524ca3e2785150bd23631dcd50a5b644bc53609ab1feb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"container g-py-25\">
    ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'partials/base.html.twig' %}

{% block content %}
  <div class=\"container g-py-25\">
    {{ page.content }}
  </div>
{% endblock %}
", "default.html.twig", "C:\\xampp\\htdocs\\grav-admin\\user\\themes\\unify\\templates\\default.html.twig");
    }
}
