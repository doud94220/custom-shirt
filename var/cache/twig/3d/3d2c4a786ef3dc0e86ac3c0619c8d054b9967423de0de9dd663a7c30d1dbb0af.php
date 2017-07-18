<?php

/* produit/produit.html.twig */
class __TwigTemplate_2e35ab8f07b117618e5cea1eea3f197f5345b04a4403c768200dacde5102c865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "produit/produit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c87f5add0580a700971257a962606ca1129d390931c1e90adb7d49a6f6bfb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c87f5add0580a700971257a962606ca1129d390931c1e90adb7d49a6f6bfb9d->enter($__internal_9c87f5add0580a700971257a962606ca1129d390931c1e90adb7d49a6f6bfb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_1da5599f8e6f9250fbcbbb15574244933b9ec949d44e9777f00da291f8b4d227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da5599f8e6f9250fbcbbb15574244933b9ec949d44e9777f00da291f8b4d227->enter($__internal_1da5599f8e6f9250fbcbbb15574244933b9ec949d44e9777f00da291f8b4d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c87f5add0580a700971257a962606ca1129d390931c1e90adb7d49a6f6bfb9d->leave($__internal_9c87f5add0580a700971257a962606ca1129d390931c1e90adb7d49a6f6bfb9d_prof);

        
        $__internal_1da5599f8e6f9250fbcbbb15574244933b9ec949d44e9777f00da291f8b4d227->leave($__internal_1da5599f8e6f9250fbcbbb15574244933b9ec949d44e9777f00da291f8b4d227_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4f7fcfd4b7274e3b7c2ed4cba7c18cf578a0f59d06e8041bd61a5a39c4b86e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f7fcfd4b7274e3b7c2ed4cba7c18cf578a0f59d06e8041bd61a5a39c4b86e4->enter($__internal_a4f7fcfd4b7274e3b7c2ed4cba7c18cf578a0f59d06e8041bd61a5a39c4b86e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1fa8b3f54b8a6a66e2023351ef3f91173f3f2e5e2276edbd1193b0ba8f12fff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa8b3f54b8a6a66e2023351ef3f91173f3f2e5e2276edbd1193b0ba8f12fff8->enter($__internal_1fa8b3f54b8a6a66e2023351ef3f91173f3f2e5e2276edbd1193b0ba8f12fff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-6\">
                <img class=\"img_template\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, ("http://localhost/test/img/" . $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "photo", array())), "html", null, true);
        echo "\" alt=\"chemise\">
            </div>
            <div class=\"col-sm-6\">
                <div class=\"row\">
                    <div class=\"col-sm-12 description title\">
                        <h1 id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "titre", array()), "html", null, true);
        echo "</h1>
                        <h4>";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "prix", array()) . "€"), "html", null, true);
        echo " </h4>
                    </div>
                    <div class=\"col-sm-12 description desc\">
                        <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), "description", array()), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-sm-12 button\">
                        <button class=\"btn btn-default\">Ajouter au panier</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_1fa8b3f54b8a6a66e2023351ef3f91173f3f2e5e2276edbd1193b0ba8f12fff8->leave($__internal_1fa8b3f54b8a6a66e2023351ef3f91173f3f2e5e2276edbd1193b0ba8f12fff8_prof);

        
        $__internal_a4f7fcfd4b7274e3b7c2ed4cba7c18cf578a0f59d06e8041bd61a5a39c4b86e4->leave($__internal_a4f7fcfd4b7274e3b7c2ed4cba7c18cf578a0f59d06e8041bd61a5a39c4b86e4_prof);

    }

    public function getTemplateName()
    {
        return "produit/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  70 => 15,  64 => 14,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-6\">
                <img class=\"img_template\" src=\"{{ 'http://localhost/test/img/' ~ produits.photo }}\" alt=\"chemise\">
            </div>
            <div class=\"col-sm-6\">
                <div class=\"row\">
                    <div class=\"col-sm-12 description title\">
                        <h1 id=\"{{ produits.id }}\">{{ produits.titre }}</h1>
                        <h4>{{ produits.prix ~ '€'}} </h4>
                    </div>
                    <div class=\"col-sm-12 description desc\">
                        <p>{{ produits.description }}</p>
                    </div>
                    <div class=\"col-sm-12 button\">
                        <button class=\"btn btn-default\">Ajouter au panier</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "produit/produit.html.twig", "C:\\wamp64\\www\\custom-shirt\\templates\\produit\\produit.html.twig");
    }
}
