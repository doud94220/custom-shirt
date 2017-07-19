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
        $__internal_723b93ad753fcca71b99e54bb21ae1f65a8b4ad1613e32b2821469ce3b97dd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723b93ad753fcca71b99e54bb21ae1f65a8b4ad1613e32b2821469ce3b97dd01->enter($__internal_723b93ad753fcca71b99e54bb21ae1f65a8b4ad1613e32b2821469ce3b97dd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_475928ac1d116b1f08095b0d76a0493de53326d34c86b3fa3194e8513eeba734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475928ac1d116b1f08095b0d76a0493de53326d34c86b3fa3194e8513eeba734->enter($__internal_475928ac1d116b1f08095b0d76a0493de53326d34c86b3fa3194e8513eeba734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723b93ad753fcca71b99e54bb21ae1f65a8b4ad1613e32b2821469ce3b97dd01->leave($__internal_723b93ad753fcca71b99e54bb21ae1f65a8b4ad1613e32b2821469ce3b97dd01_prof);

        
        $__internal_475928ac1d116b1f08095b0d76a0493de53326d34c86b3fa3194e8513eeba734->leave($__internal_475928ac1d116b1f08095b0d76a0493de53326d34c86b3fa3194e8513eeba734_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5de94073d3c0617c44ad9d6cea6033b101cb29d142fccf11edf8f2dbd52d3cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de94073d3c0617c44ad9d6cea6033b101cb29d142fccf11edf8f2dbd52d3cc6->enter($__internal_5de94073d3c0617c44ad9d6cea6033b101cb29d142fccf11edf8f2dbd52d3cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_72b904050884c3d8b4ebfe58dc819af410908bf814ff8d7770153ba1347b016a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b904050884c3d8b4ebfe58dc819af410908bf814ff8d7770153ba1347b016a->enter($__internal_72b904050884c3d8b4ebfe58dc819af410908bf814ff8d7770153ba1347b016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2\">
                <form action=\"\">

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
                        <label for=\"tissu\">Tissu</label>
                        <select name=\"tissu\" id=\"tissu\" class=\"form-control request\">
                            <option value=\"\">Coisissez un tissu</option>
                            <option value=\"POPELINE CARREAUX VERT\">POPELINE CARREAUX VERT</option>
                            <option value=\"POPELINE RAYÉ BLEU\">POPELINE RAYÉ BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU\">POPELINE CARREAUX BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU ET MARRON\">POPELINE CARREAUX BLEU ET MARRON</option>
                            <option value=\"POPELINE RAYÉ ROSE\">POPELINE RAYÉ ROSE</option>
                            <option value=\"POPELINE UNI NOIR\">POPELINE UNI NOIR</option>
                            <option value=\"TWILL CARREAUX BLEU\">TWILL CARREAUX BLEU</option>
                            <option value=\"PIN-POINT UNI BLANC\">PIN-POINT UNI BLANC</option>
                            <option value=\"CHAMBRAY UNI BLEU\">CHAMBRAY UNI BLEU</option>
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
                        <div class=\"col-sm-3 col-sm-offset-6\">
                            <div class=\"form-group\">
                                <select name=\"nombre\" id=\"nombre\" class=\"form-control request\">
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
        // line 99
        $this->loadTemplate("produit/produit_list.html.twig", "index.html.twig", 99)->display($context);
        // line 100
        echo "                </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_72b904050884c3d8b4ebfe58dc819af410908bf814ff8d7770153ba1347b016a->leave($__internal_72b904050884c3d8b4ebfe58dc819af410908bf814ff8d7770153ba1347b016a_prof);

        
        $__internal_5de94073d3c0617c44ad9d6cea6033b101cb29d142fccf11edf8f2dbd52d3cc6->leave($__internal_5de94073d3c0617c44ad9d6cea6033b101cb29d142fccf11edf8f2dbd52d3cc6_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b4ece446d4bb408a730f2bf9148c00424c131a9dea18599f9e11086ae7c911d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4ece446d4bb408a730f2bf9148c00424c131a9dea18599f9e11086ae7c911d->enter($__internal_7b4ece446d4bb408a730f2bf9148c00424c131a9dea18599f9e11086ae7c911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_516a348a5a3a9aaec906de40fc444af8f58faa9c6da3865543bf2a125e009d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516a348a5a3a9aaec906de40fc444af8f58faa9c6da3865543bf2a125e009d08->enter($__internal_516a348a5a3a9aaec906de40fc444af8f58faa9c6da3865543bf2a125e009d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var ajaxApiUrl = \"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_api");
        echo "\";
    </script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_516a348a5a3a9aaec906de40fc444af8f58faa9c6da3865543bf2a125e009d08->leave($__internal_516a348a5a3a9aaec906de40fc444af8f58faa9c6da3865543bf2a125e009d08_prof);

        
        $__internal_7b4ece446d4bb408a730f2bf9148c00424c131a9dea18599f9e11086ae7c911d->leave($__internal_7b4ece446d4bb408a730f2bf9148c00424c131a9dea18599f9e11086ae7c911d_prof);

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
        return array (  184 => 112,  179 => 110,  173 => 108,  164 => 107,  149 => 100,  147 => 99,  50 => 4,  41 => 3,  11 => 1,);
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
                        <label for=\"type\">Type</label>
                        <select name=\"type\" id=\"type\" class=\"form-control request\">
                            <option value=\"\">Coisissez un type</option>
                            <option value=\"cintre\">Cintré</option>
                            <option value=\"m_longue\">Manche longue</option>
                            <option value=\"m_courte\">Manche courte</option>
                        </select>
                    </div>


                    <div class=\"form-group\">
                        <label for=\"tissu\">Tissu</label>
                        <select name=\"tissu\" id=\"tissu\" class=\"form-control request\">
                            <option value=\"\">Coisissez un tissu</option>
                            <option value=\"POPELINE CARREAUX VERT\">POPELINE CARREAUX VERT</option>
                            <option value=\"POPELINE RAYÉ BLEU\">POPELINE RAYÉ BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU\">POPELINE CARREAUX BLEU</option>
                            <option value=\"POPELINE CARREAUX BLEU ET MARRON\">POPELINE CARREAUX BLEU ET MARRON</option>
                            <option value=\"POPELINE RAYÉ ROSE\">POPELINE RAYÉ ROSE</option>
                            <option value=\"POPELINE UNI NOIR\">POPELINE UNI NOIR</option>
                            <option value=\"TWILL CARREAUX BLEU\">TWILL CARREAUX BLEU</option>
                            <option value=\"PIN-POINT UNI BLANC\">PIN-POINT UNI BLANC</option>
                            <option value=\"CHAMBRAY UNI BLEU\">CHAMBRAY UNI BLEU</option>
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
                        <div class=\"col-sm-3 col-sm-offset-6\">
                            <div class=\"form-group\">
                                <select name=\"nombre\" id=\"nombre\" class=\"form-control request\">
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
