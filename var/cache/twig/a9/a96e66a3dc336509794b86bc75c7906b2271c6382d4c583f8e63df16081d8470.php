<?php

/* user/modif.html.twig */
class __TwigTemplate_e32ab3d349280a44f74d362b288d7758a23765074c769cbcf2228a5f0b32ff45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/modif.html.twig", 1);
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
        $__internal_7cb395fa10115b2933192d8780554ce6fac079c8a57cf54ce1fced822c3d0d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb395fa10115b2933192d8780554ce6fac079c8a57cf54ce1fced822c3d0d7f->enter($__internal_7cb395fa10115b2933192d8780554ce6fac079c8a57cf54ce1fced822c3d0d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/modif.html.twig"));

        $__internal_b8792b142a38a3da33604a2693709bfaeaad6839851f17c09876ab56ebb942cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8792b142a38a3da33604a2693709bfaeaad6839851f17c09876ab56ebb942cb->enter($__internal_b8792b142a38a3da33604a2693709bfaeaad6839851f17c09876ab56ebb942cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb395fa10115b2933192d8780554ce6fac079c8a57cf54ce1fced822c3d0d7f->leave($__internal_7cb395fa10115b2933192d8780554ce6fac079c8a57cf54ce1fced822c3d0d7f_prof);

        
        $__internal_b8792b142a38a3da33604a2693709bfaeaad6839851f17c09876ab56ebb942cb->leave($__internal_b8792b142a38a3da33604a2693709bfaeaad6839851f17c09876ab56ebb942cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5af7066035bc6fd90d27ce3e14d8ab8cf72f6643a50beb018105f482732c5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5af7066035bc6fd90d27ce3e14d8ab8cf72f6643a50beb018105f482732c5a7->enter($__internal_e5af7066035bc6fd90d27ce3e14d8ab8cf72f6643a50beb018105f482732c5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de90ed39839c891257f2d9a32fac4409b073297db37b5b8fe7866dc54611cec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de90ed39839c891257f2d9a32fac4409b073297db37b5b8fe7866dc54611cec6->enter($__internal_de90ed39839c891257f2d9a32fac4409b073297db37b5b8fe7866dc54611cec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_de90ed39839c891257f2d9a32fac4409b073297db37b5b8fe7866dc54611cec6->leave($__internal_de90ed39839c891257f2d9a32fac4409b073297db37b5b8fe7866dc54611cec6_prof);

        
        $__internal_e5af7066035bc6fd90d27ce3e14d8ab8cf72f6643a50beb018105f482732c5a7->leave($__internal_e5af7066035bc6fd90d27ce3e14d8ab8cf72f6643a50beb018105f482732c5a7_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_f2a333e5c539c68b2c90078bb2655c4cc7a45baa231bfb9bfa299d85a47da44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a333e5c539c68b2c90078bb2655c4cc7a45baa231bfb9bfa299d85a47da44e->enter($__internal_f2a333e5c539c68b2c90078bb2655c4cc7a45baa231bfb9bfa299d85a47da44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_23af82a19378ae249db782f70c57c82e337c29cadfb362e2cd1c5bdb67f3bae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23af82a19378ae249db782f70c57c82e337c29cadfb362e2cd1c5bdb67f3bae1->enter($__internal_23af82a19378ae249db782f70c57c82e337c29cadfb362e2cd1c5bdb67f3bae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Modification</h1>
    <div class=\"container\">
    <row class=\"col-xl-12\">
    <form method=\"post\">
        <div class=\"form-group\">
            <label for=\"prenom\" class=\"form-control\">Prénom</label>
            <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"prenom\" value=";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"nom\">Nom</label>
            <input type=\"text\" name=\"nom\" class=\"form-control\" id=\"nom\" value=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"date_naissance\">Date de naissance</label>
            <input type=\"date\" name=\"date_naissance\" class=\"form-control\" id=\"date_naissance\" value=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date_naissance", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"email\">Courriel</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" value=";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"adresse\">Adresse</label>
            <input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\" value=";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"complement_adresse\">Complément d'adresse</label>
            <input type=\"text\" name=\"complement_adresse\" class=\"form-control\" id=\"complement_adresse\" value=";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "complement_adresse", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"code_postal\">Code postal</label>
            <input type=\"number\" name=\"code_postal\" class=\"form-control\" id=\"code_postal\" value=";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "code_postal", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"ville\">Ville</label>
            <input type=\"text\" name=\"ville\" class=\"form-control\" id=\"ville\" value=";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo ">
        </div>

        <div class=\"form-group\">
            <label for=\"tel\">Téléphone</label>
            <input type=\"text\" name=\"tel\" class=\"form-control\" id=\"tel\" value=";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()), "html", null, true);
        echo ">
        </div>


        <div class=\"form-group\">
            <label for=\"\">Sexe</label>
            <select name=\"depart\" id=\"depart\">
                                <option value=\"masculin\">Masculin</option>
                <option value=\"feminin\">Féminin</option>
                            </select>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\" Value=\"Envoi\">
            Enregistrer
        </button>
    </form>
    </row>
    </div>
";
        
        $__internal_23af82a19378ae249db782f70c57c82e337c29cadfb362e2cd1c5bdb67f3bae1->leave($__internal_23af82a19378ae249db782f70c57c82e337c29cadfb362e2cd1c5bdb67f3bae1_prof);

        
        $__internal_f2a333e5c539c68b2c90078bb2655c4cc7a45baa231bfb9bfa299d85a47da44e->leave($__internal_f2a333e5c539c68b2c90078bb2655c4cc7a45baa231bfb9bfa299d85a47da44e_prof);

    }

    public function getTemplateName()
    {
        return "user/modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 58,  140 => 53,  132 => 48,  124 => 43,  116 => 38,  108 => 33,  100 => 28,  92 => 23,  84 => 18,  76 => 13,  68 => 7,  59 => 6,  41 => 3,  11 => 1,);
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
    <h1>Modification</h1>
    <div class=\"container\">
    <row class=\"col-xl-12\">
    <form method=\"post\">
        <div class=\"form-group\">
            <label for=\"prenom\" class=\"form-control\">Prénom</label>
            <input type=\"text\" name=\"prenom\" class=\"form-control\" id=\"prenom\" value={{ user.prenom }}>
        </div>

        <div class=\"form-group\">
            <label for=\"nom\">Nom</label>
            <input type=\"text\" name=\"nom\" class=\"form-control\" id=\"nom\" value={{ user.nom }}>
        </div>

        <div class=\"form-group\">
            <label for=\"date_naissance\">Date de naissance</label>
            <input type=\"date\" name=\"date_naissance\" class=\"form-control\" id=\"date_naissance\" value={{ user.date_naissance }}>
        </div>

        <div class=\"form-group\">
            <label for=\"email\">Courriel</label>
            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value={{ user.email }}>
        </div>

        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" value={{ user.password }}>
        </div>

        <div class=\"form-group\">
            <label for=\"adresse\">Adresse</label>
            <input type=\"text\" name=\"adresse\" class=\"form-control\" id=\"adresse\" value={{ user.adresse }}>
        </div>

        <div class=\"form-group\">
            <label for=\"complement_adresse\">Complément d'adresse</label>
            <input type=\"text\" name=\"complement_adresse\" class=\"form-control\" id=\"complement_adresse\" value={{ user.complement_adresse }}>
        </div>

        <div class=\"form-group\">
            <label for=\"code_postal\">Code postal</label>
            <input type=\"number\" name=\"code_postal\" class=\"form-control\" id=\"code_postal\" value={{ user.code_postal }}>
        </div>

        <div class=\"form-group\">
            <label for=\"ville\">Ville</label>
            <input type=\"text\" name=\"ville\" class=\"form-control\" id=\"ville\" value={{ user.ville }}>
        </div>

        <div class=\"form-group\">
            <label for=\"tel\">Téléphone</label>
            <input type=\"text\" name=\"tel\" class=\"form-control\" id=\"tel\" value={{ user.tel }}>
        </div>


        <div class=\"form-group\">
            <label for=\"\">Sexe</label>
            <select name=\"depart\" id=\"depart\">
                                <option value=\"masculin\">Masculin</option>
                <option value=\"feminin\">Féminin</option>
                            </select>
        </div>

        <button type=\"submit\" class=\"btn btn-primary\" Value=\"Envoi\">
            Enregistrer
        </button>
    </form>
    </row>
    </div>
{% endblock %}
", "user/modif.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\user\\modif.html.twig");
    }
}
