<?php

/* user/register.html.twig */
class __TwigTemplate_7b40f053dfc8f1e62879c0e0a96df0276218021549f4053c3b76fbf78acf6af4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/register.html.twig", 1);
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
        $__internal_db558e059c30295a0db1187a0caef9df33d3edaa1acda646dadb118e4027f497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db558e059c30295a0db1187a0caef9df33d3edaa1acda646dadb118e4027f497->enter($__internal_db558e059c30295a0db1187a0caef9df33d3edaa1acda646dadb118e4027f497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_b767da734fa9913e825ec52402744b840a95c583d26bdb0fc4afddae94cff023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b767da734fa9913e825ec52402744b840a95c583d26bdb0fc4afddae94cff023->enter($__internal_b767da734fa9913e825ec52402744b840a95c583d26bdb0fc4afddae94cff023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db558e059c30295a0db1187a0caef9df33d3edaa1acda646dadb118e4027f497->leave($__internal_db558e059c30295a0db1187a0caef9df33d3edaa1acda646dadb118e4027f497_prof);

        
        $__internal_b767da734fa9913e825ec52402744b840a95c583d26bdb0fc4afddae94cff023->leave($__internal_b767da734fa9913e825ec52402744b840a95c583d26bdb0fc4afddae94cff023_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81261b766b694bcd3cf21c0aa53990a284f6f98c2561410a9d1d52f61d8dd358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81261b766b694bcd3cf21c0aa53990a284f6f98c2561410a9d1d52f61d8dd358->enter($__internal_81261b766b694bcd3cf21c0aa53990a284f6f98c2561410a9d1d52f61d8dd358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_264464e78056ed7e6527fa729eff06c1b2d2f3654010ca49302f483a30a555c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264464e78056ed7e6527fa729eff06c1b2d2f3654010ca49302f483a30a555c2->enter($__internal_264464e78056ed7e6527fa729eff06c1b2d2f3654010ca49302f483a30a555c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_264464e78056ed7e6527fa729eff06c1b2d2f3654010ca49302f483a30a555c2->leave($__internal_264464e78056ed7e6527fa729eff06c1b2d2f3654010ca49302f483a30a555c2_prof);

        
        $__internal_81261b766b694bcd3cf21c0aa53990a284f6f98c2561410a9d1d52f61d8dd358->leave($__internal_81261b766b694bcd3cf21c0aa53990a284f6f98c2561410a9d1d52f61d8dd358_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ba92ae1e5ded7effaf1c961f58349c254536d20274ff75ab5fdd8866767148e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba92ae1e5ded7effaf1c961f58349c254536d20274ff75ab5fdd8866767148e->enter($__internal_2ba92ae1e5ded7effaf1c961f58349c254536d20274ff75ab5fdd8866767148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5547d34b63f94f515479454b473bd23a24615a3c5c7c32b05cb401dc3c3bef3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5547d34b63f94f515479454b473bd23a24615a3c5c7c32b05cb401dc3c3bef3a->enter($__internal_5547d34b63f94f515479454b473bd23a24615a3c5c7c32b05cb401dc3c3bef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container\">
        <h1>Inscription</h1>
        <form method=\"post\">
            <div class=\"form-group\">
                <label>Nom</label>
                <input type=\"text\" name=\"nom\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Prénom</label>
                <input type=\"text\" name=\"prenom\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Date de naissance</label>
                <input type=\"date\" name=\"date_naissance\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Email</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Confirmation du mot de passe</label>
                <input type=\"password\" name=\"password_confirm\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Adresse</label>
                <input type=\"text\" name=\"adresse\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Complément d'adresse</label>
                <input type=\"text\" name=\"complement_adresse\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "complement_adresse", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Code postal</label>
                <input type=\"number\" name=\"code_postal\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "code_postal", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Ville</label>
                <input type=\"text\" name=\"ville\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Téléphone</label>
                <input type=\"text\" name=\"tel\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Sexe</label>
                <select name='sexe'>
                    <option value=''>Quel est votre sexe ?</option>
                    <option value='m'>Homme</option>
                    <option value='f'>Femme</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                Enregistrer
            </button>
        </form>
    </div>
";
        
        $__internal_5547d34b63f94f515479454b473bd23a24615a3c5c7c32b05cb401dc3c3bef3a->leave($__internal_5547d34b63f94f515479454b473bd23a24615a3c5c7c32b05cb401dc3c3bef3a_prof);

        
        $__internal_2ba92ae1e5ded7effaf1c961f58349c254536d20274ff75ab5fdd8866767148e->leave($__internal_2ba92ae1e5ded7effaf1c961f58349c254536d20274ff75ab5fdd8866767148e_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  132 => 47,  125 => 43,  118 => 39,  111 => 35,  96 => 23,  89 => 19,  82 => 15,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title 'Inscription' %}

{% block content %}
    <div class=\"container\">
        <h1>Inscription</h1>
        <form method=\"post\">
            <div class=\"form-group\">
                <label>Nom</label>
                <input type=\"text\" name=\"nom\" value=\"{{ user.nom }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Prénom</label>
                <input type=\"text\" name=\"prenom\" value=\"{{ user.prenom }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Date de naissance</label>
                <input type=\"date\" name=\"date_naissance\" value=\"{{ user.date_naissance }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Email</label>
                <input type=\"text\" name=\"email\" value=\"{{ user.email }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Mot de passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Confirmation du mot de passe</label>
                <input type=\"password\" name=\"password_confirm\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Adresse</label>
                <input type=\"text\" name=\"adresse\" value=\"{{ user.adresse }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Complément d'adresse</label>
                <input type=\"text\" name=\"complement_adresse\" value=\"{{ user.complement_adresse }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Code postal</label>
                <input type=\"number\" name=\"code_postal\" value=\"{{ user.code_postal }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Ville</label>
                <input type=\"text\" name=\"ville\" value=\"{{ user.ville }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Téléphone</label>
                <input type=\"text\" name=\"tel\" value=\"{{ user.tel }}\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label>Sexe</label>
                <select name='sexe'>
                    <option value=''>Quel est votre sexe ?</option>
                    <option value='m'>Homme</option>
                    <option value='f'>Femme</option>
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                Enregistrer
            </button>
        </form>
    </div>
{% endblock %}
", "user/register.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\user\\register.html.twig");
    }
}
