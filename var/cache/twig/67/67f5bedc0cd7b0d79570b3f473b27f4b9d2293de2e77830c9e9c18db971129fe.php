<?php

/* index.html.twig */
class __TwigTemplate_c4356d613350791b5335ec657c6f63f822b5f7ea90ef0b1fae5e472e692bc125 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
                    </div>
                </div>

                ";
        // line 91
        $context["produitId"] = 0;
        // line 92
        echo "
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 94
            echo "

                    <div class=\"row\">
                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 98
                echo "                            ";
                if ($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array", true, true)) {
                    // line 99
                    echo "                            <div class=\"col-sm-4 chemise\">
                                <a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, ("http://localhost/test/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "photo", array())), "html", null, true);
                    echo "\" alt=\"chemise\"></a>
                                <hr>
                                <div class=\"desc\">
                                    <p class=\"title\"><a href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "titre", array()), "html", null, true);
                    echo "</a></p>
                                    <p class=\"price\">";
                    // line 104
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "prix", array()) . " €"), "html", null, true);
                    echo "</p>
                                </div>
                                <hr>
                                <p>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "description", array()), "html", null, true);
                    echo "</p>
                            </div>
                            ";
                }
                // line 110
                echo "                            ";
                $context["produitId"] = ((isset($context["produitId"]) ? $context["produitId"] : null) + 1);
                // line 111
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                <div class=\"row\">
                    <div class=\"col-sm-12 voir\">
                        <a class=\"plus\" href=\"\">Voir plus</a>
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
        return array (  210 => 126,  205 => 124,  199 => 122,  196 => 121,  187 => 114,  180 => 112,  174 => 111,  171 => 110,  165 => 107,  159 => 104,  153 => 103,  145 => 100,  142 => 99,  139 => 98,  135 => 97,  130 => 94,  126 => 93,  123 => 92,  121 => 91,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\wamp64\\www\\custom-shirt\\templates\\index.html.twig");
    }
}
