<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8d74d6794f200b824feb8c29626a5dbe4e698334beecb23f432237a37c4f2a0a extends Twig_Template
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
        $__internal_c679d497612f56a946250ab90380265520fddaaa37fe0408cb690cf68ff59c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c679d497612f56a946250ab90380265520fddaaa37fe0408cb690cf68ff59c61->enter($__internal_c679d497612f56a946250ab90380265520fddaaa37fe0408cb690cf68ff59c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d1017260a1a301c1c3ccf1888f54e6650c3c892e2a4fd73b5f6e094c4bdd7b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1017260a1a301c1c3ccf1888f54e6650c3c892e2a4fd73b5f6e094c4bdd7b0b->enter($__internal_d1017260a1a301c1c3ccf1888f54e6650c3c892e2a4fd73b5f6e094c4bdd7b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c679d497612f56a946250ab90380265520fddaaa37fe0408cb690cf68ff59c61->leave($__internal_c679d497612f56a946250ab90380265520fddaaa37fe0408cb690cf68ff59c61_prof);

        
        $__internal_d1017260a1a301c1c3ccf1888f54e6650c3c892e2a4fd73b5f6e094c4bdd7b0b->leave($__internal_d1017260a1a301c1c3ccf1888f54e6650c3c892e2a4fd73b5f6e094c4bdd7b0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea21ab87ed7274aa11237fa166c214e72bf472e9de11819428c45715f49a3cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea21ab87ed7274aa11237fa166c214e72bf472e9de11819428c45715f49a3cd4->enter($__internal_ea21ab87ed7274aa11237fa166c214e72bf472e9de11819428c45715f49a3cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f122a302a20ebebdaa62f2dadfc3195a81860cfc6452ff802db798f2798b1b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f122a302a20ebebdaa62f2dadfc3195a81860cfc6452ff802db798f2798b1b8d->enter($__internal_f122a302a20ebebdaa62f2dadfc3195a81860cfc6452ff802db798f2798b1b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f122a302a20ebebdaa62f2dadfc3195a81860cfc6452ff802db798f2798b1b8d->leave($__internal_f122a302a20ebebdaa62f2dadfc3195a81860cfc6452ff802db798f2798b1b8d_prof);

        
        $__internal_ea21ab87ed7274aa11237fa166c214e72bf472e9de11819428c45715f49a3cd4->leave($__internal_ea21ab87ed7274aa11237fa166c214e72bf472e9de11819428c45715f49a3cd4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7de20107cce27ee7eea2b9802ad4f43520358646a4136128a3e0345d6542b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7de20107cce27ee7eea2b9802ad4f43520358646a4136128a3e0345d6542b93->enter($__internal_a7de20107cce27ee7eea2b9802ad4f43520358646a4136128a3e0345d6542b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4fd53af9ca874bd288210a8c07dd2b3c519398268818ade698b87002aa02a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fd53af9ca874bd288210a8c07dd2b3c519398268818ade698b87002aa02a3d->enter($__internal_e4fd53af9ca874bd288210a8c07dd2b3c519398268818ade698b87002aa02a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e4fd53af9ca874bd288210a8c07dd2b3c519398268818ade698b87002aa02a3d->leave($__internal_e4fd53af9ca874bd288210a8c07dd2b3c519398268818ade698b87002aa02a3d_prof);

        
        $__internal_a7de20107cce27ee7eea2b9802ad4f43520358646a4136128a3e0345d6542b93->leave($__internal_a7de20107cce27ee7eea2b9802ad4f43520358646a4136128a3e0345d6542b93_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fd6b5e3ec7ca976b003fa0649d0b5e75b2b316aa85389dbe155fd9001090341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd6b5e3ec7ca976b003fa0649d0b5e75b2b316aa85389dbe155fd9001090341->enter($__internal_0fd6b5e3ec7ca976b003fa0649d0b5e75b2b316aa85389dbe155fd9001090341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae4135015fc76204e6cd1e1d07e5117b17b4b36bcefd615660f0e3dfeb6f896b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4135015fc76204e6cd1e1d07e5117b17b4b36bcefd615660f0e3dfeb6f896b->enter($__internal_ae4135015fc76204e6cd1e1d07e5117b17b4b36bcefd615660f0e3dfeb6f896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ae4135015fc76204e6cd1e1d07e5117b17b4b36bcefd615660f0e3dfeb6f896b->leave($__internal_ae4135015fc76204e6cd1e1d07e5117b17b4b36bcefd615660f0e3dfeb6f896b_prof);

        
        $__internal_0fd6b5e3ec7ca976b003fa0649d0b5e75b2b316aa85389dbe155fd9001090341->leave($__internal_0fd6b5e3ec7ca976b003fa0649d0b5e75b2b316aa85389dbe155fd9001090341_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
