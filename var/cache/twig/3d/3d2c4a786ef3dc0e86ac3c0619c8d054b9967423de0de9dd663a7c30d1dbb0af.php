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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bc97fe7534cf77eddb751500d675010b64b16e0216cb52cac15fcae5f0f4c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc97fe7534cf77eddb751500d675010b64b16e0216cb52cac15fcae5f0f4c08->enter($__internal_1bc97fe7534cf77eddb751500d675010b64b16e0216cb52cac15fcae5f0f4c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $__internal_7a6d9ca4aee9f14bded9567ffa0916f876056c81aad615be85529bd6c8c7d67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6d9ca4aee9f14bded9567ffa0916f876056c81aad615be85529bd6c8c7d67a->enter($__internal_7a6d9ca4aee9f14bded9567ffa0916f876056c81aad615be85529bd6c8c7d67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc97fe7534cf77eddb751500d675010b64b16e0216cb52cac15fcae5f0f4c08->leave($__internal_1bc97fe7534cf77eddb751500d675010b64b16e0216cb52cac15fcae5f0f4c08_prof);

        
        $__internal_7a6d9ca4aee9f14bded9567ffa0916f876056c81aad615be85529bd6c8c7d67a->leave($__internal_7a6d9ca4aee9f14bded9567ffa0916f876056c81aad615be85529bd6c8c7d67a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e5d42b93cbb47e34edd8a1a3f0257bb1995e6f508055eb298b4f46039c9b598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5d42b93cbb47e34edd8a1a3f0257bb1995e6f508055eb298b4f46039c9b598->enter($__internal_4e5d42b93cbb47e34edd8a1a3f0257bb1995e6f508055eb298b4f46039c9b598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0eec81770bc5ba83687646434d0bd49ea79f76a639cad11d3587f54b55aaed6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eec81770bc5ba83687646434d0bd49ea79f76a639cad11d3587f54b55aaed6d->enter($__internal_0eec81770bc5ba83687646434d0bd49ea79f76a639cad11d3587f54b55aaed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <button class=\"btn btn-default ajout_panier\">Ajouter au panier</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
";
        
        $__internal_0eec81770bc5ba83687646434d0bd49ea79f76a639cad11d3587f54b55aaed6d->leave($__internal_0eec81770bc5ba83687646434d0bd49ea79f76a639cad11d3587f54b55aaed6d_prof);

        
        $__internal_4e5d42b93cbb47e34edd8a1a3f0257bb1995e6f508055eb298b4f46039c9b598->leave($__internal_4e5d42b93cbb47e34edd8a1a3f0257bb1995e6f508055eb298b4f46039c9b598_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bc05bd37e08632a2653e4ac00d6e1795b1ee79711b0a9d48e40831166522b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc05bd37e08632a2653e4ac00d6e1795b1ee79711b0a9d48e40831166522b8c->enter($__internal_8bc05bd37e08632a2653e4ac00d6e1795b1ee79711b0a9d48e40831166522b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a904cb11fa3240f4acfa2d428a4bd97bd9b80c90706339d68c1f320d8d169c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a904cb11fa3240f4acfa2d428a4bd97bd9b80c90706339d68c1f320d8d169c80->enter($__internal_a904cb11fa3240f4acfa2d428a4bd97bd9b80c90706339d68c1f320d8d169c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script>
            var ajaxApiUrlPanier = \"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api_panier");
        echo "\";
        </script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_a904cb11fa3240f4acfa2d428a4bd97bd9b80c90706339d68c1f320d8d169c80->leave($__internal_a904cb11fa3240f4acfa2d428a4bd97bd9b80c90706339d68c1f320d8d169c80_prof);

        
        $__internal_8bc05bd37e08632a2653e4ac00d6e1795b1ee79711b0a9d48e40831166522b8c->leave($__internal_8bc05bd37e08632a2653e4ac00d6e1795b1ee79711b0a9d48e40831166522b8c_prof);

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
        return array (  124 => 34,  119 => 32,  113 => 30,  104 => 29,  93 => 36,  91 => 29,  77 => 18,  71 => 15,  65 => 14,  57 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
                        <button class=\"btn btn-default ajout_panier\">Ajouter au panier</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {% block javascripts %}
        {{ parent() }}
        <script>
            var ajaxApiUrlPanier = \"{{ path('ajax_api_panier') }}\";
        </script>
        <script src=\"{{ asset('script/script.js') }}\"></script>
    {% endblock %}

{% endblock %}", "produit/produit.html.twig", "C:\\wamp64\\www\\custom-shirt\\templates\\produit\\produit.html.twig");
    }
}
