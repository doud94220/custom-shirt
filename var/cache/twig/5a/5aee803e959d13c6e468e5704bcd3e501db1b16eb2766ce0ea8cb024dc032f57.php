<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_587fa8ae22ebbd226283874a6ea522d135005435989258ea2fa7a532d612dea4 extends Twig_Template
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
        $__internal_20f3140787097188baec87411057ebe48c7f21cf7f8d1e800379823d7cf36661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f3140787097188baec87411057ebe48c7f21cf7f8d1e800379823d7cf36661->enter($__internal_20f3140787097188baec87411057ebe48c7f21cf7f8d1e800379823d7cf36661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb7821199ff0514a97254238f522bf039a46bca1e9e9ad4c9ab02cf5795314f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7821199ff0514a97254238f522bf039a46bca1e9e9ad4c9ab02cf5795314f0->enter($__internal_cb7821199ff0514a97254238f522bf039a46bca1e9e9ad4c9ab02cf5795314f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20f3140787097188baec87411057ebe48c7f21cf7f8d1e800379823d7cf36661->leave($__internal_20f3140787097188baec87411057ebe48c7f21cf7f8d1e800379823d7cf36661_prof);

        
        $__internal_cb7821199ff0514a97254238f522bf039a46bca1e9e9ad4c9ab02cf5795314f0->leave($__internal_cb7821199ff0514a97254238f522bf039a46bca1e9e9ad4c9ab02cf5795314f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_941e969cfc51df4291d7cb1b5d2095e202afee98700c1526579cf596c8a00ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941e969cfc51df4291d7cb1b5d2095e202afee98700c1526579cf596c8a00ded->enter($__internal_941e969cfc51df4291d7cb1b5d2095e202afee98700c1526579cf596c8a00ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b88a9a1cb3ae13827f3ff3866a0fff9a4fa9db5c39033faabf3e5227ebc1c02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88a9a1cb3ae13827f3ff3866a0fff9a4fa9db5c39033faabf3e5227ebc1c02b->enter($__internal_b88a9a1cb3ae13827f3ff3866a0fff9a4fa9db5c39033faabf3e5227ebc1c02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b88a9a1cb3ae13827f3ff3866a0fff9a4fa9db5c39033faabf3e5227ebc1c02b->leave($__internal_b88a9a1cb3ae13827f3ff3866a0fff9a4fa9db5c39033faabf3e5227ebc1c02b_prof);

        
        $__internal_941e969cfc51df4291d7cb1b5d2095e202afee98700c1526579cf596c8a00ded->leave($__internal_941e969cfc51df4291d7cb1b5d2095e202afee98700c1526579cf596c8a00ded_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3957bcadfa9fe14ebe208cb7ea8c15ee4f5c5cb32e5747dd5fc0d09ca19c62ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3957bcadfa9fe14ebe208cb7ea8c15ee4f5c5cb32e5747dd5fc0d09ca19c62ba->enter($__internal_3957bcadfa9fe14ebe208cb7ea8c15ee4f5c5cb32e5747dd5fc0d09ca19c62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33a8e9d9b49fd28072d7f054717172850703a53adb3eef4620e34d56618a0083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a8e9d9b49fd28072d7f054717172850703a53adb3eef4620e34d56618a0083->enter($__internal_33a8e9d9b49fd28072d7f054717172850703a53adb3eef4620e34d56618a0083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33a8e9d9b49fd28072d7f054717172850703a53adb3eef4620e34d56618a0083->leave($__internal_33a8e9d9b49fd28072d7f054717172850703a53adb3eef4620e34d56618a0083_prof);

        
        $__internal_3957bcadfa9fe14ebe208cb7ea8c15ee4f5c5cb32e5747dd5fc0d09ca19c62ba->leave($__internal_3957bcadfa9fe14ebe208cb7ea8c15ee4f5c5cb32e5747dd5fc0d09ca19c62ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8457bd89342d13db7dda38f0c77cdcd60440c8ed2b63a6d3162c9e413697766b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8457bd89342d13db7dda38f0c77cdcd60440c8ed2b63a6d3162c9e413697766b->enter($__internal_8457bd89342d13db7dda38f0c77cdcd60440c8ed2b63a6d3162c9e413697766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d24646c4a03368c25ad7ecaa1d03c4bf9fe799e8682dfb66ed0e91c39cd9a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d24646c4a03368c25ad7ecaa1d03c4bf9fe799e8682dfb66ed0e91c39cd9a1a->enter($__internal_0d24646c4a03368c25ad7ecaa1d03c4bf9fe799e8682dfb66ed0e91c39cd9a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d24646c4a03368c25ad7ecaa1d03c4bf9fe799e8682dfb66ed0e91c39cd9a1a->leave($__internal_0d24646c4a03368c25ad7ecaa1d03c4bf9fe799e8682dfb66ed0e91c39cd9a1a_prof);

        
        $__internal_8457bd89342d13db7dda38f0c77cdcd60440c8ed2b63a6d3162c9e413697766b->leave($__internal_8457bd89342d13db7dda38f0c77cdcd60440c8ed2b63a6d3162c9e413697766b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
