<?php

/* index.html.twig */
class __TwigTemplate_0a0729c0b513e6095db7a77152b1707f1f0282d13d73a3fbda6819f17f764464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
 <h1>Accueil</h1>
    ";
        // line 11
        echo "
    ";
        // line 12
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "admin", array())) {
            // line 13
            echo "        <h1>Hello Admin ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } elseif ($this->getAttribute(        // line 14
(isset($context["user_manager"]) ? $context["user_manager"] : null), "user", array())) {
            // line 15
            echo "        <h1>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : null), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 17
            echo "    <h1>Hello visiteur</h1>
    ";
        }
        // line 19
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
        // line 113
        $this->loadTemplate("produit/produit_list.html.twig", "index.html.twig", 113)->display($context);
        // line 114
        echo "                </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrl = \"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api");
        echo "\";
    </script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  186 => 126,  181 => 124,  175 => 122,  172 => 121,  163 => 114,  161 => 113,  65 => 19,  61 => 17,  55 => 15,  53 => 14,  48 => 13,  46 => 12,  43 => 11,  39 => 8,  36 => 7,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\index.html.twig");
    }
}
