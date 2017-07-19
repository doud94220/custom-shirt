<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a0e9671b370715281b6cd89e1c7781d863348c4aa667abcac904a8bedb980253 extends Twig_Template
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
        $__internal_5be8e788c73649fb7614034a5353fa9c371743d297c19d46300ee033e663c416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be8e788c73649fb7614034a5353fa9c371743d297c19d46300ee033e663c416->enter($__internal_5be8e788c73649fb7614034a5353fa9c371743d297c19d46300ee033e663c416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3c00180cec4841d3bef4ed1dc73997a12abd0e820ccbb08507d25ad88cae383b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c00180cec4841d3bef4ed1dc73997a12abd0e820ccbb08507d25ad88cae383b->enter($__internal_3c00180cec4841d3bef4ed1dc73997a12abd0e820ccbb08507d25ad88cae383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5be8e788c73649fb7614034a5353fa9c371743d297c19d46300ee033e663c416->leave($__internal_5be8e788c73649fb7614034a5353fa9c371743d297c19d46300ee033e663c416_prof);

        
        $__internal_3c00180cec4841d3bef4ed1dc73997a12abd0e820ccbb08507d25ad88cae383b->leave($__internal_3c00180cec4841d3bef4ed1dc73997a12abd0e820ccbb08507d25ad88cae383b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_095df8984c57d2885ed1fc0a077843abf7fe5f51e5449cd184b8605418e21086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095df8984c57d2885ed1fc0a077843abf7fe5f51e5449cd184b8605418e21086->enter($__internal_095df8984c57d2885ed1fc0a077843abf7fe5f51e5449cd184b8605418e21086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9959a6c25b0142d57e5551794eb7a4534cab15690cef806c4c919f8fb0848c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9959a6c25b0142d57e5551794eb7a4534cab15690cef806c4c919f8fb0848c8e->enter($__internal_9959a6c25b0142d57e5551794eb7a4534cab15690cef806c4c919f8fb0848c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9959a6c25b0142d57e5551794eb7a4534cab15690cef806c4c919f8fb0848c8e->leave($__internal_9959a6c25b0142d57e5551794eb7a4534cab15690cef806c4c919f8fb0848c8e_prof);

        
        $__internal_095df8984c57d2885ed1fc0a077843abf7fe5f51e5449cd184b8605418e21086->leave($__internal_095df8984c57d2885ed1fc0a077843abf7fe5f51e5449cd184b8605418e21086_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
