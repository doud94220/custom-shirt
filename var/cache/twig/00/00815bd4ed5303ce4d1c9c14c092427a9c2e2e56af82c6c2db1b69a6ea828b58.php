<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_523c69a8887fec9a3176d521456817df37a29f7f381fd7ea2e260e0da05353cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc21a6a810b0e4d35cdfcc0f132fdfaf9ed4557be4ea8d44b454bf355ef025e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc21a6a810b0e4d35cdfcc0f132fdfaf9ed4557be4ea8d44b454bf355ef025e2->enter($__internal_bc21a6a810b0e4d35cdfcc0f132fdfaf9ed4557be4ea8d44b454bf355ef025e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e05b428670363ddb2bea28d4bb1438130367b488ed19c2f2e1f38c10920ba41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05b428670363ddb2bea28d4bb1438130367b488ed19c2f2e1f38c10920ba41b->enter($__internal_e05b428670363ddb2bea28d4bb1438130367b488ed19c2f2e1f38c10920ba41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc21a6a810b0e4d35cdfcc0f132fdfaf9ed4557be4ea8d44b454bf355ef025e2->leave($__internal_bc21a6a810b0e4d35cdfcc0f132fdfaf9ed4557be4ea8d44b454bf355ef025e2_prof);

        
        $__internal_e05b428670363ddb2bea28d4bb1438130367b488ed19c2f2e1f38c10920ba41b->leave($__internal_e05b428670363ddb2bea28d4bb1438130367b488ed19c2f2e1f38c10920ba41b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87d8d852a560e805ad9b2d186df07fcd52c488540555c1b2e8f38b78df0e5a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d8d852a560e805ad9b2d186df07fcd52c488540555c1b2e8f38b78df0e5a70->enter($__internal_87d8d852a560e805ad9b2d186df07fcd52c488540555c1b2e8f38b78df0e5a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e45d00b555677c3939dceeb6252610d4007db6d1d9a2c196ef5489673dbb88f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45d00b555677c3939dceeb6252610d4007db6d1d9a2c196ef5489673dbb88f6->enter($__internal_e45d00b555677c3939dceeb6252610d4007db6d1d9a2c196ef5489673dbb88f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e45d00b555677c3939dceeb6252610d4007db6d1d9a2c196ef5489673dbb88f6->leave($__internal_e45d00b555677c3939dceeb6252610d4007db6d1d9a2c196ef5489673dbb88f6_prof);

        
        $__internal_87d8d852a560e805ad9b2d186df07fcd52c488540555c1b2e8f38b78df0e5a70->leave($__internal_87d8d852a560e805ad9b2d186df07fcd52c488540555c1b2e8f38b78df0e5a70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
