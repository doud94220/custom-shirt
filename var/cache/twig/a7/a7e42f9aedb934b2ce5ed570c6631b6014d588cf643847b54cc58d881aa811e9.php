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
        $__internal_251d03f0ed6a2151af12d598919183c0ca678088bf379ff49c453d2703f22eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251d03f0ed6a2151af12d598919183c0ca678088bf379ff49c453d2703f22eaa->enter($__internal_251d03f0ed6a2151af12d598919183c0ca678088bf379ff49c453d2703f22eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_82276333441911d70c927a91133bd0491f780d1a69cd4e5ce922cb6cc8a19980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82276333441911d70c927a91133bd0491f780d1a69cd4e5ce922cb6cc8a19980->enter($__internal_82276333441911d70c927a91133bd0491f780d1a69cd4e5ce922cb6cc8a19980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251d03f0ed6a2151af12d598919183c0ca678088bf379ff49c453d2703f22eaa->leave($__internal_251d03f0ed6a2151af12d598919183c0ca678088bf379ff49c453d2703f22eaa_prof);

        
        $__internal_82276333441911d70c927a91133bd0491f780d1a69cd4e5ce922cb6cc8a19980->leave($__internal_82276333441911d70c927a91133bd0491f780d1a69cd4e5ce922cb6cc8a19980_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4384aa1ba3b1d1373ce8f8aac01856701009a65723e6a81f1a0e2f4845aab2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4384aa1ba3b1d1373ce8f8aac01856701009a65723e6a81f1a0e2f4845aab2f7->enter($__internal_4384aa1ba3b1d1373ce8f8aac01856701009a65723e6a81f1a0e2f4845aab2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5e952d663e899fadce65376c15b61e05759c4e5d188b132c53645d82e80a3141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e952d663e899fadce65376c15b61e05759c4e5d188b132c53645d82e80a3141->enter($__internal_5e952d663e899fadce65376c15b61e05759c4e5d188b132c53645d82e80a3141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5e952d663e899fadce65376c15b61e05759c4e5d188b132c53645d82e80a3141->leave($__internal_5e952d663e899fadce65376c15b61e05759c4e5d188b132c53645d82e80a3141_prof);

        
        $__internal_4384aa1ba3b1d1373ce8f8aac01856701009a65723e6a81f1a0e2f4845aab2f7->leave($__internal_4384aa1ba3b1d1373ce8f8aac01856701009a65723e6a81f1a0e2f4845aab2f7_prof);

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
