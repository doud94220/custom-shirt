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
        $__internal_06aaeec23dc2d730186b7e58cb85cacf16fadac434ca08200abe2924c816fc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aaeec23dc2d730186b7e58cb85cacf16fadac434ca08200abe2924c816fc60->enter($__internal_06aaeec23dc2d730186b7e58cb85cacf16fadac434ca08200abe2924c816fc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f34c68d8a98e69e6a44fc38ddda7b0484563b3e97ea6174d12c4bcc3a60052c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34c68d8a98e69e6a44fc38ddda7b0484563b3e97ea6174d12c4bcc3a60052c9->enter($__internal_f34c68d8a98e69e6a44fc38ddda7b0484563b3e97ea6174d12c4bcc3a60052c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06aaeec23dc2d730186b7e58cb85cacf16fadac434ca08200abe2924c816fc60->leave($__internal_06aaeec23dc2d730186b7e58cb85cacf16fadac434ca08200abe2924c816fc60_prof);

        
        $__internal_f34c68d8a98e69e6a44fc38ddda7b0484563b3e97ea6174d12c4bcc3a60052c9->leave($__internal_f34c68d8a98e69e6a44fc38ddda7b0484563b3e97ea6174d12c4bcc3a60052c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7f4bb916338b7988ef833da5405e642fee721fc99bb8b0701d49b24e7dbf36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f4bb916338b7988ef833da5405e642fee721fc99bb8b0701d49b24e7dbf36e->enter($__internal_e7f4bb916338b7988ef833da5405e642fee721fc99bb8b0701d49b24e7dbf36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_209218f7a6fe18ea416042c2f4479d76b41367771d81eb62d0fcd75a3a09f799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209218f7a6fe18ea416042c2f4479d76b41367771d81eb62d0fcd75a3a09f799->enter($__internal_209218f7a6fe18ea416042c2f4479d76b41367771d81eb62d0fcd75a3a09f799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_209218f7a6fe18ea416042c2f4479d76b41367771d81eb62d0fcd75a3a09f799->leave($__internal_209218f7a6fe18ea416042c2f4479d76b41367771d81eb62d0fcd75a3a09f799_prof);

        
        $__internal_e7f4bb916338b7988ef833da5405e642fee721fc99bb8b0701d49b24e7dbf36e->leave($__internal_e7f4bb916338b7988ef833da5405e642fee721fc99bb8b0701d49b24e7dbf36e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17f24d39fff01fca02c07a996dbcaa848d2b1db6674e6845b947b7c1ac03d8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f24d39fff01fca02c07a996dbcaa848d2b1db6674e6845b947b7c1ac03d8be->enter($__internal_17f24d39fff01fca02c07a996dbcaa848d2b1db6674e6845b947b7c1ac03d8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c136069e9d91c438912fa74a97135e482d90c16c9810d1bccb25a0d7c419999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c136069e9d91c438912fa74a97135e482d90c16c9810d1bccb25a0d7c419999->enter($__internal_2c136069e9d91c438912fa74a97135e482d90c16c9810d1bccb25a0d7c419999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c136069e9d91c438912fa74a97135e482d90c16c9810d1bccb25a0d7c419999->leave($__internal_2c136069e9d91c438912fa74a97135e482d90c16c9810d1bccb25a0d7c419999_prof);

        
        $__internal_17f24d39fff01fca02c07a996dbcaa848d2b1db6674e6845b947b7c1ac03d8be->leave($__internal_17f24d39fff01fca02c07a996dbcaa848d2b1db6674e6845b947b7c1ac03d8be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eb6c55897479aa819ddbfb1464686fdaf0b8012a9b05f3169b42d5b42c1ecee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb6c55897479aa819ddbfb1464686fdaf0b8012a9b05f3169b42d5b42c1ecee->enter($__internal_3eb6c55897479aa819ddbfb1464686fdaf0b8012a9b05f3169b42d5b42c1ecee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37a5a53006c65455ea1138ccbe88f4b66646ee1bee0a2b1eb2248dbe666dc770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a5a53006c65455ea1138ccbe88f4b66646ee1bee0a2b1eb2248dbe666dc770->enter($__internal_37a5a53006c65455ea1138ccbe88f4b66646ee1bee0a2b1eb2248dbe666dc770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37a5a53006c65455ea1138ccbe88f4b66646ee1bee0a2b1eb2248dbe666dc770->leave($__internal_37a5a53006c65455ea1138ccbe88f4b66646ee1bee0a2b1eb2248dbe666dc770_prof);

        
        $__internal_3eb6c55897479aa819ddbfb1464686fdaf0b8012a9b05f3169b42d5b42c1ecee->leave($__internal_3eb6c55897479aa819ddbfb1464686fdaf0b8012a9b05f3169b42d5b42c1ecee_prof);

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
