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
        $__internal_eed0a372ac0682fd8893ea5314d7336dcf6c2e3aa9963bc0780b469cb89f4b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed0a372ac0682fd8893ea5314d7336dcf6c2e3aa9963bc0780b469cb89f4b28->enter($__internal_eed0a372ac0682fd8893ea5314d7336dcf6c2e3aa9963bc0780b469cb89f4b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_8df059e4a89a13bcea7cb189ec7379e1e9b9aa9b947f8cd0e5b580bead3a1a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df059e4a89a13bcea7cb189ec7379e1e9b9aa9b947f8cd0e5b580bead3a1a31->enter($__internal_8df059e4a89a13bcea7cb189ec7379e1e9b9aa9b947f8cd0e5b580bead3a1a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed0a372ac0682fd8893ea5314d7336dcf6c2e3aa9963bc0780b469cb89f4b28->leave($__internal_eed0a372ac0682fd8893ea5314d7336dcf6c2e3aa9963bc0780b469cb89f4b28_prof);

        
        $__internal_8df059e4a89a13bcea7cb189ec7379e1e9b9aa9b947f8cd0e5b580bead3a1a31->leave($__internal_8df059e4a89a13bcea7cb189ec7379e1e9b9aa9b947f8cd0e5b580bead3a1a31_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3410626d613f37409ab24b06aa4ddd76e0111d8e20c36392dcae573fe8de5472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3410626d613f37409ab24b06aa4ddd76e0111d8e20c36392dcae573fe8de5472->enter($__internal_3410626d613f37409ab24b06aa4ddd76e0111d8e20c36392dcae573fe8de5472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6e12da9e777700296938d8990176f4f4b288406d87c0b5966d0429b157e9900e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e12da9e777700296938d8990176f4f4b288406d87c0b5966d0429b157e9900e->enter($__internal_6e12da9e777700296938d8990176f4f4b288406d87c0b5966d0429b157e9900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                <select name=\"nombre\" id=\"nombre\" class=\"form-control request nombre\">
                                    <option value=\"\">Résultats par page</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"30\">30</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"200\">200</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                <div class=\"col-sm-12 display\">
               ";
        // line 104
        $this->loadTemplate("produit/produit_list.html.twig", "index.html.twig", 104)->display($context);
        // line 105
        echo "                </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6e12da9e777700296938d8990176f4f4b288406d87c0b5966d0429b157e9900e->leave($__internal_6e12da9e777700296938d8990176f4f4b288406d87c0b5966d0429b157e9900e_prof);

        
        $__internal_3410626d613f37409ab24b06aa4ddd76e0111d8e20c36392dcae573fe8de5472->leave($__internal_3410626d613f37409ab24b06aa4ddd76e0111d8e20c36392dcae573fe8de5472_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c0ffbbbf3991a5453dc17fcea3aabdd43f4be2a2a2a0cba517f8648282933f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0ffbbbf3991a5453dc17fcea3aabdd43f4be2a2a2a0cba517f8648282933f3->enter($__internal_6c0ffbbbf3991a5453dc17fcea3aabdd43f4be2a2a2a0cba517f8648282933f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4b3af5ab14702d0e64c39915621bdaa8518debe072ac0dc3e23e23a621d08c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3af5ab14702d0e64c39915621bdaa8518debe072ac0dc3e23e23a621d08c6a->enter($__internal_4b3af5ab14702d0e64c39915621bdaa8518debe072ac0dc3e23e23a621d08c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrl = \"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api");
        echo "\";
    </script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4b3af5ab14702d0e64c39915621bdaa8518debe072ac0dc3e23e23a621d08c6a->leave($__internal_4b3af5ab14702d0e64c39915621bdaa8518debe072ac0dc3e23e23a621d08c6a_prof);

        
        $__internal_6c0ffbbbf3991a5453dc17fcea3aabdd43f4be2a2a2a0cba517f8648282933f3->leave($__internal_6c0ffbbbf3991a5453dc17fcea3aabdd43f4be2a2a2a0cba517f8648282933f3_prof);

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
        return array (  189 => 117,  184 => 115,  178 => 113,  169 => 112,  154 => 105,  152 => 104,  50 => 4,  41 => 3,  11 => 1,);
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
                                <select name=\"nombre\" id=\"nombre\" class=\"form-control request nombre\">
                                    <option value=\"\">Résultats par page</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"30\">30</option>
                                    <option value=\"50\">50</option>
                                    <option value=\"200\">200</option>
                                </select>
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
