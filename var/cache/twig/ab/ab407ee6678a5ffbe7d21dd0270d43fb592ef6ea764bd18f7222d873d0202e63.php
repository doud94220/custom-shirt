<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6a1ecdef6b23fc1bee6f5d05ee36823e1a008c7ebacc7551a6939e001d42691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87395bec22198d0d9565502f16a5de1082dd1597b80b145e685e36ca0093234f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87395bec22198d0d9565502f16a5de1082dd1597b80b145e685e36ca0093234f->enter($__internal_87395bec22198d0d9565502f16a5de1082dd1597b80b145e685e36ca0093234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a9003b6c193acd5fe4cb54e69f3492bcff02640b1b0d38d2b5e83de75271f90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9003b6c193acd5fe4cb54e69f3492bcff02640b1b0d38d2b5e83de75271f90e->enter($__internal_a9003b6c193acd5fe4cb54e69f3492bcff02640b1b0d38d2b5e83de75271f90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87395bec22198d0d9565502f16a5de1082dd1597b80b145e685e36ca0093234f->leave($__internal_87395bec22198d0d9565502f16a5de1082dd1597b80b145e685e36ca0093234f_prof);

        
        $__internal_a9003b6c193acd5fe4cb54e69f3492bcff02640b1b0d38d2b5e83de75271f90e->leave($__internal_a9003b6c193acd5fe4cb54e69f3492bcff02640b1b0d38d2b5e83de75271f90e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ab0d026b054336845c6a2524a8a1bd86a44c1f9860c08b70aa663cbce2974a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab0d026b054336845c6a2524a8a1bd86a44c1f9860c08b70aa663cbce2974a9->enter($__internal_5ab0d026b054336845c6a2524a8a1bd86a44c1f9860c08b70aa663cbce2974a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4564e5ea523469a87989d9e5461637ff44eced2ea00645ec80bc1e4eaca12ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4564e5ea523469a87989d9e5461637ff44eced2ea00645ec80bc1e4eaca12ba9->enter($__internal_4564e5ea523469a87989d9e5461637ff44eced2ea00645ec80bc1e4eaca12ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4564e5ea523469a87989d9e5461637ff44eced2ea00645ec80bc1e4eaca12ba9->leave($__internal_4564e5ea523469a87989d9e5461637ff44eced2ea00645ec80bc1e4eaca12ba9_prof);

        
        $__internal_5ab0d026b054336845c6a2524a8a1bd86a44c1f9860c08b70aa663cbce2974a9->leave($__internal_5ab0d026b054336845c6a2524a8a1bd86a44c1f9860c08b70aa663cbce2974a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b233f42ee1935fedc1db66c3212cd0e1a883d4aa7050e23dd59c9c4c2002b226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b233f42ee1935fedc1db66c3212cd0e1a883d4aa7050e23dd59c9c4c2002b226->enter($__internal_b233f42ee1935fedc1db66c3212cd0e1a883d4aa7050e23dd59c9c4c2002b226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57681f2ca6d0508064c9d3da0b431a1584c656252b5e8e669280fc0a3f4404be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57681f2ca6d0508064c9d3da0b431a1584c656252b5e8e669280fc0a3f4404be->enter($__internal_57681f2ca6d0508064c9d3da0b431a1584c656252b5e8e669280fc0a3f4404be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_57681f2ca6d0508064c9d3da0b431a1584c656252b5e8e669280fc0a3f4404be->leave($__internal_57681f2ca6d0508064c9d3da0b431a1584c656252b5e8e669280fc0a3f4404be_prof);

        
        $__internal_b233f42ee1935fedc1db66c3212cd0e1a883d4aa7050e23dd59c9c4c2002b226->leave($__internal_b233f42ee1935fedc1db66c3212cd0e1a883d4aa7050e23dd59c9c4c2002b226_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b44af8da85d25d67d1347a13630b5671fff40ad6558324470eb89ceef9e0daaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44af8da85d25d67d1347a13630b5671fff40ad6558324470eb89ceef9e0daaa->enter($__internal_b44af8da85d25d67d1347a13630b5671fff40ad6558324470eb89ceef9e0daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f5d91fae9b5739f74378da931053e52fca27b30bbb7d3a8aa7dcbccfba9b1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5d91fae9b5739f74378da931053e52fca27b30bbb7d3a8aa7dcbccfba9b1a9->enter($__internal_4f5d91fae9b5739f74378da931053e52fca27b30bbb7d3a8aa7dcbccfba9b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4f5d91fae9b5739f74378da931053e52fca27b30bbb7d3a8aa7dcbccfba9b1a9->leave($__internal_4f5d91fae9b5739f74378da931053e52fca27b30bbb7d3a8aa7dcbccfba9b1a9_prof);

        
        $__internal_b44af8da85d25d67d1347a13630b5671fff40ad6558324470eb89ceef9e0daaa->leave($__internal_b44af8da85d25d67d1347a13630b5671fff40ad6558324470eb89ceef9e0daaa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
