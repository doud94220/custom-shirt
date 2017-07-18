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
        $__internal_37da10aaaf4b637d72bd095b5f03f7813121545c719f2620385a751e69657cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37da10aaaf4b637d72bd095b5f03f7813121545c719f2620385a751e69657cc7->enter($__internal_37da10aaaf4b637d72bd095b5f03f7813121545c719f2620385a751e69657cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_d21c9d3f4bc5832d8e7a3c3d97166fa58037017e19aa35c3fbec3fefa255ac4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21c9d3f4bc5832d8e7a3c3d97166fa58037017e19aa35c3fbec3fefa255ac4e->enter($__internal_d21c9d3f4bc5832d8e7a3c3d97166fa58037017e19aa35c3fbec3fefa255ac4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37da10aaaf4b637d72bd095b5f03f7813121545c719f2620385a751e69657cc7->leave($__internal_37da10aaaf4b637d72bd095b5f03f7813121545c719f2620385a751e69657cc7_prof);

        
        $__internal_d21c9d3f4bc5832d8e7a3c3d97166fa58037017e19aa35c3fbec3fefa255ac4e->leave($__internal_d21c9d3f4bc5832d8e7a3c3d97166fa58037017e19aa35c3fbec3fefa255ac4e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_03bf606094048bf3154ccf4a3aab3efbeea88432cda9f0fa1a5f8c02aac4c47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bf606094048bf3154ccf4a3aab3efbeea88432cda9f0fa1a5f8c02aac4c47b->enter($__internal_03bf606094048bf3154ccf4a3aab3efbeea88432cda9f0fa1a5f8c02aac4c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2921663e75527d1817cde312e39b195c27507cb7fcdaf3134473eab6e17c1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2921663e75527d1817cde312e39b195c27507cb7fcdaf3134473eab6e17c1dd->enter($__internal_a2921663e75527d1817cde312e39b195c27507cb7fcdaf3134473eab6e17c1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_a2921663e75527d1817cde312e39b195c27507cb7fcdaf3134473eab6e17c1dd->leave($__internal_a2921663e75527d1817cde312e39b195c27507cb7fcdaf3134473eab6e17c1dd_prof);

        
        $__internal_03bf606094048bf3154ccf4a3aab3efbeea88432cda9f0fa1a5f8c02aac4c47b->leave($__internal_03bf606094048bf3154ccf4a3aab3efbeea88432cda9f0fa1a5f8c02aac4c47b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1b501b9d3cd860d80e399f78221ab2bb0b10090bac90ad44cc43ee25c26b1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b501b9d3cd860d80e399f78221ab2bb0b10090bac90ad44cc43ee25c26b1f1->enter($__internal_f1b501b9d3cd860d80e399f78221ab2bb0b10090bac90ad44cc43ee25c26b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8d154a12323443f9d9ddb64837f2972c9904c13e9e25432127004e4c58a7ba54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d154a12323443f9d9ddb64837f2972c9904c13e9e25432127004e4c58a7ba54->enter($__internal_8d154a12323443f9d9ddb64837f2972c9904c13e9e25432127004e4c58a7ba54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8d154a12323443f9d9ddb64837f2972c9904c13e9e25432127004e4c58a7ba54->leave($__internal_8d154a12323443f9d9ddb64837f2972c9904c13e9e25432127004e4c58a7ba54_prof);

        
        $__internal_f1b501b9d3cd860d80e399f78221ab2bb0b10090bac90ad44cc43ee25c26b1f1->leave($__internal_f1b501b9d3cd860d80e399f78221ab2bb0b10090bac90ad44cc43ee25c26b1f1_prof);

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
