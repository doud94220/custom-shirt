<?php

/* index.html.twig */
class __TwigTemplate_dee1ab1178d5d0132b8785bde1881efd2363352db86b6e7476a15a47d3b0e157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        $__internal_5dda74a85fe0ebb438188db10c3f398559870200247f5a6712c94a7478a798c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dda74a85fe0ebb438188db10c3f398559870200247f5a6712c94a7478a798c1->enter($__internal_5dda74a85fe0ebb438188db10c3f398559870200247f5a6712c94a7478a798c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_41dc6018922cc0eb053f661d90cb836eccffa0fea1c9d48c734d82ff29382b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41dc6018922cc0eb053f661d90cb836eccffa0fea1c9d48c734d82ff29382b0c->enter($__internal_41dc6018922cc0eb053f661d90cb836eccffa0fea1c9d48c734d82ff29382b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dda74a85fe0ebb438188db10c3f398559870200247f5a6712c94a7478a798c1->leave($__internal_5dda74a85fe0ebb438188db10c3f398559870200247f5a6712c94a7478a798c1_prof);

        
        $__internal_41dc6018922cc0eb053f661d90cb836eccffa0fea1c9d48c734d82ff29382b0c->leave($__internal_41dc6018922cc0eb053f661d90cb836eccffa0fea1c9d48c734d82ff29382b0c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5fd555b8f080946e70150815a25953b254eac874d203988e4953601a2e30fc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd555b8f080946e70150815a25953b254eac874d203988e4953601a2e30fc71->enter($__internal_5fd555b8f080946e70150815a25953b254eac874d203988e4953601a2e30fc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2d8b1dcccfe8100aeb9fdc1b62cc5522122bf0133d814e625627a96cf983f347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8b1dcccfe8100aeb9fdc1b62cc5522122bf0133d814e625627a96cf983f347->enter($__internal_2d8b1dcccfe8100aeb9fdc1b62cc5522122bf0133d814e625627a96cf983f347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <form action=\"\">
                    <div class=\"form-group\">
                        <label for=\"categorie\">Categorie</label>
                        <select name=\"categorie\" id=\"categorie\" class=\"form-control request\">
                            <option value=\"\">Coisissez une catégorie</option>
                            <option value=\"chemise-pret-a-porter\">Chemise prêt-à-porter</option>
                            <option value=\"chemise-sur-mesure\">Chemises sur-mesure</option>
                            <option value=\"accessoire\">Accessoires</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"type\">Type</label>
                        <select name=\"type\" id=\"type\" class=\"form-control request\">
                            <option value=\"\">Coisissez un type</option>
                            <option value=\"cintre\">Cintré</option>
                            <option value=\"m_longue\">Manche longue</option>
                            <option value=\"m_courte\">Manche courte</option>
                        </select>
                    </div>


                    <div class=\"form-group\">
                        <label for=\"couleur\">Couleur</label>
                        <select name=\"couleur\" id=\"couleur\" class=\"form-control request\">
                            <option value=\"\">Coisissez une couleur</option>
                            <option value=\"noir\">Noir</option>
                            <option value=\"blanc\">Blanc</option>
                            <option value=\"vert\">Vert</option>
                            <option value=\"gris\">Gris</option>
                            <option value=\"bleu\">Bleu</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"taille\">Taille</label>
                        <select name=\"taille\" id=\"taille\" class=\"form-control request\">
                            <option value=\"\">Coisissez une taille</option>
                            <option value=\"XS\">XS</option>
                            <option value=\"S\">S</option>
                            <option value=\"M\">M</option>
                            <option value=\"L\">L</option>
                            <option value=\"XL\">XL</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sexe\">Public</label>
                        <select name=\"sexe\" id=\"sexe\" class=\"form-control request\">
                            <option value=\"\">Coisissez votre sexe</option>
                            <option value=\"m\">Homme</option>
                            <option value=\"f\">Femme</option>
                            <option value=\"mixte\">Mixte</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"prix\">Prix</label>
                        <select name=\"prix\" id=\"prix\" class=\"form-control request\">
                            <option value=\"\">Coisissez un prix</option>
                            <option value=\"50\">0€ - 50€</option>
                            <option value=\"100\">50€ - 100€</option>
                            <option value=\"150\">100€ - 150€</option>
                            <option value=\"200\">150€ - 200€</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class=\"col-sm-9 col-sm-offset-1 container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <select name=\"range\" id=\"range\" class=\"form-control request\">
                                    <option value=\"\">Trier par</option>
                                    <option value=\"price_up\">Prix croissant</option>
                                    <option value=\"price_down\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-4 col-sm-offset-5\">
                            <div class=\"form-group\">
                                <span>Résultats par page <span><a href=\"\" class=\"nb_resultat\">10</a>  -  <a href=\"\" class=\"nb_resultat\">30</a>  -  <a href=\"\" class=\"nb_resultat\">50</a>  -  <a href=\"\" class=\"nb_resultat\">200</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                <div class=\"col-sm-12 display\">
               ";
        // line 98
        $this->loadTemplate("produit/produit_list.html.twig", "index.html.twig", 98)->display($context);
        // line 99
        echo "                </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2d8b1dcccfe8100aeb9fdc1b62cc5522122bf0133d814e625627a96cf983f347->leave($__internal_2d8b1dcccfe8100aeb9fdc1b62cc5522122bf0133d814e625627a96cf983f347_prof);

        
        $__internal_5fd555b8f080946e70150815a25953b254eac874d203988e4953601a2e30fc71->leave($__internal_5fd555b8f080946e70150815a25953b254eac874d203988e4953601a2e30fc71_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ecfd0934621a656fe94a3d3f84ca7cb0a51f2289610d2f79bda76d185370e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecfd0934621a656fe94a3d3f84ca7cb0a51f2289610d2f79bda76d185370e37->enter($__internal_4ecfd0934621a656fe94a3d3f84ca7cb0a51f2289610d2f79bda76d185370e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d20765f6f204d457960734548c5c34557b2a155f7b4d98cfd1040d3aab6f5bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20765f6f204d457960734548c5c34557b2a155f7b4d98cfd1040d3aab6f5bcf->enter($__internal_d20765f6f204d457960734548c5c34557b2a155f7b4d98cfd1040d3aab6f5bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrl = \"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api");
        echo "\";
    </script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d20765f6f204d457960734548c5c34557b2a155f7b4d98cfd1040d3aab6f5bcf->leave($__internal_d20765f6f204d457960734548c5c34557b2a155f7b4d98cfd1040d3aab6f5bcf_prof);

        
        $__internal_4ecfd0934621a656fe94a3d3f84ca7cb0a51f2289610d2f79bda76d185370e37->leave($__internal_4ecfd0934621a656fe94a3d3f84ca7cb0a51f2289610d2f79bda76d185370e37_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 111,  178 => 109,  172 => 107,  163 => 106,  148 => 99,  146 => 98,  50 => 4,  41 => 3,  11 => 1,);
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
            <div class=\"col-sm-2\">
                <form action=\"\">
                    <div class=\"form-group\">
                        <label for=\"categorie\">Categorie</label>
                        <select name=\"categorie\" id=\"categorie\" class=\"form-control request\">
                            <option value=\"\">Coisissez une catégorie</option>
                            <option value=\"chemise-pret-a-porter\">Chemise prêt-à-porter</option>
                            <option value=\"chemise-sur-mesure\">Chemises sur-mesure</option>
                            <option value=\"accessoire\">Accessoires</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"type\">Type</label>
                        <select name=\"type\" id=\"type\" class=\"form-control request\">
                            <option value=\"\">Coisissez un type</option>
                            <option value=\"cintre\">Cintré</option>
                            <option value=\"m_longue\">Manche longue</option>
                            <option value=\"m_courte\">Manche courte</option>
                        </select>
                    </div>


                    <div class=\"form-group\">
                        <label for=\"couleur\">Couleur</label>
                        <select name=\"couleur\" id=\"couleur\" class=\"form-control request\">
                            <option value=\"\">Coisissez une couleur</option>
                            <option value=\"noir\">Noir</option>
                            <option value=\"blanc\">Blanc</option>
                            <option value=\"vert\">Vert</option>
                            <option value=\"gris\">Gris</option>
                            <option value=\"bleu\">Bleu</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"taille\">Taille</label>
                        <select name=\"taille\" id=\"taille\" class=\"form-control request\">
                            <option value=\"\">Coisissez une taille</option>
                            <option value=\"XS\">XS</option>
                            <option value=\"S\">S</option>
                            <option value=\"M\">M</option>
                            <option value=\"L\">L</option>
                            <option value=\"XL\">XL</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"sexe\">Public</label>
                        <select name=\"sexe\" id=\"sexe\" class=\"form-control request\">
                            <option value=\"\">Coisissez votre sexe</option>
                            <option value=\"m\">Homme</option>
                            <option value=\"f\">Femme</option>
                            <option value=\"mixte\">Mixte</option>
                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"prix\">Prix</label>
                        <select name=\"prix\" id=\"prix\" class=\"form-control request\">
                            <option value=\"\">Coisissez un prix</option>
                            <option value=\"50\">0€ - 50€</option>
                            <option value=\"100\">50€ - 100€</option>
                            <option value=\"150\">100€ - 150€</option>
                            <option value=\"200\">150€ - 200€</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class=\"col-sm-9 col-sm-offset-1 container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <select name=\"range\" id=\"range\" class=\"form-control request\">
                                    <option value=\"\">Trier par</option>
                                    <option value=\"price_up\">Prix croissant</option>
                                    <option value=\"price_down\">Prix décroissant</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-4 col-sm-offset-5\">
                            <div class=\"form-group\">
                                <span>Résultats par page <span><a href=\"\" class=\"nb_resultat\">10</a>  -  <a href=\"\" class=\"nb_resultat\">30</a>  -  <a href=\"\" class=\"nb_resultat\">50</a>  -  <a href=\"\" class=\"nb_resultat\">200</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                <div class=\"col-sm-12 display\">
               {% include 'produit/produit_list.html.twig' %}
                </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        var ajaxApiUrl = \"{{ path('ajax_api') }}\";
    </script>
    <script src=\"{{ asset('script/script.js') }}\"></script>
{% endblock %}", "index.html.twig", "C:\\wamp64\\www\\custom-shirt\\templates\\index.html.twig");
    }
}
