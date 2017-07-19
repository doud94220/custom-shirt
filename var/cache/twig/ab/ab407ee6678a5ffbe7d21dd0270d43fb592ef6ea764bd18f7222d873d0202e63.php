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
        $__internal_e964806ef88ea2e89ff7f6a5ceb040d24101f57ea8a06bf540abcf41695e45e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e964806ef88ea2e89ff7f6a5ceb040d24101f57ea8a06bf540abcf41695e45e1->enter($__internal_e964806ef88ea2e89ff7f6a5ceb040d24101f57ea8a06bf540abcf41695e45e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e85229a0fb54cb7ecc7a2c1843ce77814731c4126c4beefeb439b20c35ec8794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85229a0fb54cb7ecc7a2c1843ce77814731c4126c4beefeb439b20c35ec8794->enter($__internal_e85229a0fb54cb7ecc7a2c1843ce77814731c4126c4beefeb439b20c35ec8794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e964806ef88ea2e89ff7f6a5ceb040d24101f57ea8a06bf540abcf41695e45e1->leave($__internal_e964806ef88ea2e89ff7f6a5ceb040d24101f57ea8a06bf540abcf41695e45e1_prof);

        
        $__internal_e85229a0fb54cb7ecc7a2c1843ce77814731c4126c4beefeb439b20c35ec8794->leave($__internal_e85229a0fb54cb7ecc7a2c1843ce77814731c4126c4beefeb439b20c35ec8794_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bb8c817acd954e14e458e077895761766a05aae2fa4e8aaabea8ab6699d0023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb8c817acd954e14e458e077895761766a05aae2fa4e8aaabea8ab6699d0023->enter($__internal_4bb8c817acd954e14e458e077895761766a05aae2fa4e8aaabea8ab6699d0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0e87e20578a3db2d771b19306ffa451b5e44b6698cdce9340a249d5c15a621f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e87e20578a3db2d771b19306ffa451b5e44b6698cdce9340a249d5c15a621f3->enter($__internal_0e87e20578a3db2d771b19306ffa451b5e44b6698cdce9340a249d5c15a621f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0e87e20578a3db2d771b19306ffa451b5e44b6698cdce9340a249d5c15a621f3->leave($__internal_0e87e20578a3db2d771b19306ffa451b5e44b6698cdce9340a249d5c15a621f3_prof);

        
        $__internal_4bb8c817acd954e14e458e077895761766a05aae2fa4e8aaabea8ab6699d0023->leave($__internal_4bb8c817acd954e14e458e077895761766a05aae2fa4e8aaabea8ab6699d0023_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7840b2979d9496ef5a40a8535b310266b26e3884e72643745863e93eaf0825ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7840b2979d9496ef5a40a8535b310266b26e3884e72643745863e93eaf0825ac->enter($__internal_7840b2979d9496ef5a40a8535b310266b26e3884e72643745863e93eaf0825ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_883004de2924063bd202545afa90424fe5c13fff1ad6ed4f02e43845a99f9fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883004de2924063bd202545afa90424fe5c13fff1ad6ed4f02e43845a99f9fb3->enter($__internal_883004de2924063bd202545afa90424fe5c13fff1ad6ed4f02e43845a99f9fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_883004de2924063bd202545afa90424fe5c13fff1ad6ed4f02e43845a99f9fb3->leave($__internal_883004de2924063bd202545afa90424fe5c13fff1ad6ed4f02e43845a99f9fb3_prof);

        
        $__internal_7840b2979d9496ef5a40a8535b310266b26e3884e72643745863e93eaf0825ac->leave($__internal_7840b2979d9496ef5a40a8535b310266b26e3884e72643745863e93eaf0825ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68ecc60f06b86aa891a6ec9cb1326f1f63514d9743185425c8e3bd34502310b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ecc60f06b86aa891a6ec9cb1326f1f63514d9743185425c8e3bd34502310b2->enter($__internal_68ecc60f06b86aa891a6ec9cb1326f1f63514d9743185425c8e3bd34502310b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e938e41c439a7a08e00d9011526cfc383f9ce7c29959959b5689c05f7c59dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e938e41c439a7a08e00d9011526cfc383f9ce7c29959959b5689c05f7c59dbe->enter($__internal_9e938e41c439a7a08e00d9011526cfc383f9ce7c29959959b5689c05f7c59dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e938e41c439a7a08e00d9011526cfc383f9ce7c29959959b5689c05f7c59dbe->leave($__internal_9e938e41c439a7a08e00d9011526cfc383f9ce7c29959959b5689c05f7c59dbe_prof);

        
        $__internal_68ecc60f06b86aa891a6ec9cb1326f1f63514d9743185425c8e3bd34502310b2->leave($__internal_68ecc60f06b86aa891a6ec9cb1326f1f63514d9743185425c8e3bd34502310b2_prof);

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
