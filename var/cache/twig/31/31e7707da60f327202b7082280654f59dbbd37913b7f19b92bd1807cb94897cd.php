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
        $__internal_0a697e420901c1efe32ad28e0f793abfc765bcfb874eb32da8c2afc0f06a0965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a697e420901c1efe32ad28e0f793abfc765bcfb874eb32da8c2afc0f06a0965->enter($__internal_0a697e420901c1efe32ad28e0f793abfc765bcfb874eb32da8c2afc0f06a0965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b4e64f71044cb3c7cfbc1310f689309526a5cfa3e53c3c0edd25914f035d7792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e64f71044cb3c7cfbc1310f689309526a5cfa3e53c3c0edd25914f035d7792->enter($__internal_b4e64f71044cb3c7cfbc1310f689309526a5cfa3e53c3c0edd25914f035d7792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a697e420901c1efe32ad28e0f793abfc765bcfb874eb32da8c2afc0f06a0965->leave($__internal_0a697e420901c1efe32ad28e0f793abfc765bcfb874eb32da8c2afc0f06a0965_prof);

        
        $__internal_b4e64f71044cb3c7cfbc1310f689309526a5cfa3e53c3c0edd25914f035d7792->leave($__internal_b4e64f71044cb3c7cfbc1310f689309526a5cfa3e53c3c0edd25914f035d7792_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b981c2a82144af178f43c07f85b70d2cd5b45034c2e1cc912629515cea303a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b981c2a82144af178f43c07f85b70d2cd5b45034c2e1cc912629515cea303a7c->enter($__internal_b981c2a82144af178f43c07f85b70d2cd5b45034c2e1cc912629515cea303a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_58c38c915c8c071d9b30dec5733c0124e6c29da7c558a4ea9222255b3840efe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c38c915c8c071d9b30dec5733c0124e6c29da7c558a4ea9222255b3840efe3->enter($__internal_58c38c915c8c071d9b30dec5733c0124e6c29da7c558a4ea9222255b3840efe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58c38c915c8c071d9b30dec5733c0124e6c29da7c558a4ea9222255b3840efe3->leave($__internal_58c38c915c8c071d9b30dec5733c0124e6c29da7c558a4ea9222255b3840efe3_prof);

        
        $__internal_b981c2a82144af178f43c07f85b70d2cd5b45034c2e1cc912629515cea303a7c->leave($__internal_b981c2a82144af178f43c07f85b70d2cd5b45034c2e1cc912629515cea303a7c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6154de84fa5fabcfdd0d82b38a6f56ac459b9893bf2ff461131291d98bebb342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6154de84fa5fabcfdd0d82b38a6f56ac459b9893bf2ff461131291d98bebb342->enter($__internal_6154de84fa5fabcfdd0d82b38a6f56ac459b9893bf2ff461131291d98bebb342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18808662121ea7200d158e7a00b69290826c57e23a3b88920a1f32a5f11ebd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18808662121ea7200d158e7a00b69290826c57e23a3b88920a1f32a5f11ebd30->enter($__internal_18808662121ea7200d158e7a00b69290826c57e23a3b88920a1f32a5f11ebd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18808662121ea7200d158e7a00b69290826c57e23a3b88920a1f32a5f11ebd30->leave($__internal_18808662121ea7200d158e7a00b69290826c57e23a3b88920a1f32a5f11ebd30_prof);

        
        $__internal_6154de84fa5fabcfdd0d82b38a6f56ac459b9893bf2ff461131291d98bebb342->leave($__internal_6154de84fa5fabcfdd0d82b38a6f56ac459b9893bf2ff461131291d98bebb342_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1615d4484d00cf83c8b88d7eee3ef3aa4e68820358eac28afa2ca4f43020ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1615d4484d00cf83c8b88d7eee3ef3aa4e68820358eac28afa2ca4f43020ee6->enter($__internal_f1615d4484d00cf83c8b88d7eee3ef3aa4e68820358eac28afa2ca4f43020ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4bdd61f66d0f4392ee35340a9e3aac9deb519d7fcb744c0a38c56f913011db69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdd61f66d0f4392ee35340a9e3aac9deb519d7fcb744c0a38c56f913011db69->enter($__internal_4bdd61f66d0f4392ee35340a9e3aac9deb519d7fcb744c0a38c56f913011db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4bdd61f66d0f4392ee35340a9e3aac9deb519d7fcb744c0a38c56f913011db69->leave($__internal_4bdd61f66d0f4392ee35340a9e3aac9deb519d7fcb744c0a38c56f913011db69_prof);

        
        $__internal_f1615d4484d00cf83c8b88d7eee3ef3aa4e68820358eac28afa2ca4f43020ee6->leave($__internal_f1615d4484d00cf83c8b88d7eee3ef3aa4e68820358eac28afa2ca4f43020ee6_prof);

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
