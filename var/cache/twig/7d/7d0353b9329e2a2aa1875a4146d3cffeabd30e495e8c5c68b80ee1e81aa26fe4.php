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
        $__internal_c4d9d5a601480e3200ee59cf3d465d88d813adef0c78d8e1f2c719979c624723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d9d5a601480e3200ee59cf3d465d88d813adef0c78d8e1f2c719979c624723->enter($__internal_c4d9d5a601480e3200ee59cf3d465d88d813adef0c78d8e1f2c719979c624723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_2617006d4445c3522ac65016dbd3eea48f5945f748de9e3134ade93abe6a7b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2617006d4445c3522ac65016dbd3eea48f5945f748de9e3134ade93abe6a7b50->enter($__internal_2617006d4445c3522ac65016dbd3eea48f5945f748de9e3134ade93abe6a7b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d9d5a601480e3200ee59cf3d465d88d813adef0c78d8e1f2c719979c624723->leave($__internal_c4d9d5a601480e3200ee59cf3d465d88d813adef0c78d8e1f2c719979c624723_prof);

        
        $__internal_2617006d4445c3522ac65016dbd3eea48f5945f748de9e3134ade93abe6a7b50->leave($__internal_2617006d4445c3522ac65016dbd3eea48f5945f748de9e3134ade93abe6a7b50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07c3c756781a545e1510b8bb34b61b3a1f86530892b5a0e84c65a94b74bfaff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c3c756781a545e1510b8bb34b61b3a1f86530892b5a0e84c65a94b74bfaff2->enter($__internal_07c3c756781a545e1510b8bb34b61b3a1f86530892b5a0e84c65a94b74bfaff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf31287e2ceaf6ba37b59ff0a5650715be7a7aaa186ebbd2b440d2975aa3fa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf31287e2ceaf6ba37b59ff0a5650715be7a7aaa186ebbd2b440d2975aa3fa6f->enter($__internal_cf31287e2ceaf6ba37b59ff0a5650715be7a7aaa186ebbd2b440d2975aa3fa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_cf31287e2ceaf6ba37b59ff0a5650715be7a7aaa186ebbd2b440d2975aa3fa6f->leave($__internal_cf31287e2ceaf6ba37b59ff0a5650715be7a7aaa186ebbd2b440d2975aa3fa6f_prof);

        
        $__internal_07c3c756781a545e1510b8bb34b61b3a1f86530892b5a0e84c65a94b74bfaff2->leave($__internal_07c3c756781a545e1510b8bb34b61b3a1f86530892b5a0e84c65a94b74bfaff2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e634e7cdf5d45d8a4047e15bb4a36e5a0cb6d8ea38f4187efab1b6f9ccf9ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e634e7cdf5d45d8a4047e15bb4a36e5a0cb6d8ea38f4187efab1b6f9ccf9ba0->enter($__internal_2e634e7cdf5d45d8a4047e15bb4a36e5a0cb6d8ea38f4187efab1b6f9ccf9ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2f32a2f6c94a628f7b96e183912be4d59a1174e66e98bdb80206e246076455d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f32a2f6c94a628f7b96e183912be4d59a1174e66e98bdb80206e246076455d3->enter($__internal_2f32a2f6c94a628f7b96e183912be4d59a1174e66e98bdb80206e246076455d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if ( !(null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "d/m/Y"), "html", null, true);
        }
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
        
        $__internal_2f32a2f6c94a628f7b96e183912be4d59a1174e66e98bdb80206e246076455d3->leave($__internal_2f32a2f6c94a628f7b96e183912be4d59a1174e66e98bdb80206e246076455d3_prof);

        
        $__internal_2e634e7cdf5d45d8a4047e15bb4a36e5a0cb6d8ea38f4187efab1b6f9ccf9ba0->leave($__internal_2e634e7cdf5d45d8a4047e15bb4a36e5a0cb6d8ea38f4187efab1b6f9ccf9ba0_prof);

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
        return array (  141 => 51,  134 => 47,  127 => 43,  120 => 39,  113 => 35,  98 => 23,  89 => 19,  82 => 15,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <input type=\"date\" name=\"date_naissance\" value=\"{% if user.date_naissance is not null %}{{ user.date_naissance|date('d/m/Y') }}{% endif %}\" class=\"form-control\">
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
