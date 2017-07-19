<?php

/* user/login.html.twig */
class __TwigTemplate_188493630b4fdc1d24028c4ff63fc4cb8c27b35b2b0972251917621a7bd8a4e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "user/login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea619459f2a6ab42efa44a152e758626584cfb23559567e12bf08f8630c1727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea619459f2a6ab42efa44a152e758626584cfb23559567e12bf08f8630c1727->enter($__internal_2ea619459f2a6ab42efa44a152e758626584cfb23559567e12bf08f8630c1727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_f661dcd69cfe2628997c5f4d53b33d6e1a7ba2e4cfac8240760437cc41a62f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f661dcd69cfe2628997c5f4d53b33d6e1a7ba2e4cfac8240760437cc41a62f04->enter($__internal_f661dcd69cfe2628997c5f4d53b33d6e1a7ba2e4cfac8240760437cc41a62f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea619459f2a6ab42efa44a152e758626584cfb23559567e12bf08f8630c1727->leave($__internal_2ea619459f2a6ab42efa44a152e758626584cfb23559567e12bf08f8630c1727_prof);

        
        $__internal_f661dcd69cfe2628997c5f4d53b33d6e1a7ba2e4cfac8240760437cc41a62f04->leave($__internal_f661dcd69cfe2628997c5f4d53b33d6e1a7ba2e4cfac8240760437cc41a62f04_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89d171f1f0af08d1e3bb40738b0d43b2079bdcf6674901f64b4e55dc9278335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89d171f1f0af08d1e3bb40738b0d43b2079bdcf6674901f64b4e55dc9278335->enter($__internal_e89d171f1f0af08d1e3bb40738b0d43b2079bdcf6674901f64b4e55dc9278335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f1cf8b5a48241f9685d06f16f5a287d2d05acf2106042c39c54cba61d711c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1cf8b5a48241f9685d06f16f5a287d2d05acf2106042c39c54cba61d711c37->enter($__internal_1f1cf8b5a48241f9685d06f16f5a287d2d05acf2106042c39c54cba61d711c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_1f1cf8b5a48241f9685d06f16f5a287d2d05acf2106042c39c54cba61d711c37->leave($__internal_1f1cf8b5a48241f9685d06f16f5a287d2d05acf2106042c39c54cba61d711c37_prof);

        
        $__internal_e89d171f1f0af08d1e3bb40738b0d43b2079bdcf6674901f64b4e55dc9278335->leave($__internal_e89d171f1f0af08d1e3bb40738b0d43b2079bdcf6674901f64b4e55dc9278335_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7e6822e6f334d439f7c2c43a66ae386622be28ce0fe28c8499db129c4a2258e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e6822e6f334d439f7c2c43a66ae386622be28ce0fe28c8499db129c4a2258e->enter($__internal_e7e6822e6f334d439f7c2c43a66ae386622be28ce0fe28c8499db129c4a2258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c35c276566c215a5bb56155ca79c05094140af24e399aa4727e6fc7bcae7514d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35c276566c215a5bb56155ca79c05094140af24e399aa4727e6fc7bcae7514d->enter($__internal_c35c276566c215a5bb56155ca79c05094140af24e399aa4727e6fc7bcae7514d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<h1>Connexion</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Email</label>
            <input type=\"text\" name=\"email\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label>Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">
            Se connecter
        </button>
    </form>
 ";
        
        $__internal_c35c276566c215a5bb56155ca79c05094140af24e399aa4727e6fc7bcae7514d->leave($__internal_c35c276566c215a5bb56155ca79c05094140af24e399aa4727e6fc7bcae7514d_prof);

        
        $__internal_e7e6822e6f334d439f7c2c43a66ae386622be28ce0fe28c8499db129c4a2258e->leave($__internal_e7e6822e6f334d439f7c2c43a66ae386622be28ce0fe28c8499db129c4a2258e_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout.html.twig\" %}

{% block title 'Connexion' %}

{% block content %}
<h1>Connexion</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label>Email</label>
            <input type=\"text\" name=\"email\" value=\"{{ email }}\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label>Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">
            Se connecter
        </button>
    </form>
 {% endblock %}
", "user/login.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\user\\login.html.twig");
    }
}
