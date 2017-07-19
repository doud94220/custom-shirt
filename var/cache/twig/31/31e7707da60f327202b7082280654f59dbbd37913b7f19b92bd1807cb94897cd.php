<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_38bd20c0ff1350803ecb62810c6a8ccdc807a1a91a5fda86f617b371e8987744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1e1a2da4215ca4d04211ae4cf5659b9a7b6a6c9fc2fa2318618ee49f00a0b7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1a2da4215ca4d04211ae4cf5659b9a7b6a6c9fc2fa2318618ee49f00a0b7a0->enter($__internal_1e1a2da4215ca4d04211ae4cf5659b9a7b6a6c9fc2fa2318618ee49f00a0b7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8711c56e5f82a3f25a37c23eb839496204de01ac671e0cd2b5afdcab72834c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8711c56e5f82a3f25a37c23eb839496204de01ac671e0cd2b5afdcab72834c43->enter($__internal_8711c56e5f82a3f25a37c23eb839496204de01ac671e0cd2b5afdcab72834c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e1a2da4215ca4d04211ae4cf5659b9a7b6a6c9fc2fa2318618ee49f00a0b7a0->leave($__internal_1e1a2da4215ca4d04211ae4cf5659b9a7b6a6c9fc2fa2318618ee49f00a0b7a0_prof);

        
        $__internal_8711c56e5f82a3f25a37c23eb839496204de01ac671e0cd2b5afdcab72834c43->leave($__internal_8711c56e5f82a3f25a37c23eb839496204de01ac671e0cd2b5afdcab72834c43_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_895d4aaa36f906abf550b7e33167ed4ec37761e385ef927ccc7db3b28e9608a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895d4aaa36f906abf550b7e33167ed4ec37761e385ef927ccc7db3b28e9608a1->enter($__internal_895d4aaa36f906abf550b7e33167ed4ec37761e385ef927ccc7db3b28e9608a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d8079eacfad94b03c1c61b6cc04b8f073449bf47bb40c0f7fe92d6501a02820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8079eacfad94b03c1c61b6cc04b8f073449bf47bb40c0f7fe92d6501a02820->enter($__internal_9d8079eacfad94b03c1c61b6cc04b8f073449bf47bb40c0f7fe92d6501a02820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d8079eacfad94b03c1c61b6cc04b8f073449bf47bb40c0f7fe92d6501a02820->leave($__internal_9d8079eacfad94b03c1c61b6cc04b8f073449bf47bb40c0f7fe92d6501a02820_prof);

        
        $__internal_895d4aaa36f906abf550b7e33167ed4ec37761e385ef927ccc7db3b28e9608a1->leave($__internal_895d4aaa36f906abf550b7e33167ed4ec37761e385ef927ccc7db3b28e9608a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e7f680f558582023b9b7f99474f506d0cb81301699bdad556eda99ddcb7b87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7f680f558582023b9b7f99474f506d0cb81301699bdad556eda99ddcb7b87b->enter($__internal_6e7f680f558582023b9b7f99474f506d0cb81301699bdad556eda99ddcb7b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56f0a7556f6f13386dfbf922f10e12f9755858084db4008388670bb9abb6a576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f0a7556f6f13386dfbf922f10e12f9755858084db4008388670bb9abb6a576->enter($__internal_56f0a7556f6f13386dfbf922f10e12f9755858084db4008388670bb9abb6a576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56f0a7556f6f13386dfbf922f10e12f9755858084db4008388670bb9abb6a576->leave($__internal_56f0a7556f6f13386dfbf922f10e12f9755858084db4008388670bb9abb6a576_prof);

        
        $__internal_6e7f680f558582023b9b7f99474f506d0cb81301699bdad556eda99ddcb7b87b->leave($__internal_6e7f680f558582023b9b7f99474f506d0cb81301699bdad556eda99ddcb7b87b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db1eb3a14ddadb5212557d20dcb30affd41da89ea8379cdd0094d3d09e769b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1eb3a14ddadb5212557d20dcb30affd41da89ea8379cdd0094d3d09e769b56->enter($__internal_db1eb3a14ddadb5212557d20dcb30affd41da89ea8379cdd0094d3d09e769b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99f12e560735a5393b25ae6fa563a423419c5d7900531f46b488b0cc7a321823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f12e560735a5393b25ae6fa563a423419c5d7900531f46b488b0cc7a321823->enter($__internal_99f12e560735a5393b25ae6fa563a423419c5d7900531f46b488b0cc7a321823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99f12e560735a5393b25ae6fa563a423419c5d7900531f46b488b0cc7a321823->leave($__internal_99f12e560735a5393b25ae6fa563a423419c5d7900531f46b488b0cc7a321823_prof);

        
        $__internal_db1eb3a14ddadb5212557d20dcb30affd41da89ea8379cdd0094d3d09e769b56->leave($__internal_db1eb3a14ddadb5212557d20dcb30affd41da89ea8379cdd0094d3d09e769b56_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
