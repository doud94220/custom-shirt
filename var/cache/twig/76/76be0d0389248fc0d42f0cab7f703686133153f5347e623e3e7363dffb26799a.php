<?php

/* index.html.twig */
class __TwigTemplate_a667c1a1282ce89b9c6909e3b0bb836267e9c6454310bb07b60d36f4412a36bd extends Twig_Template
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
        $__internal_ea73596dd0a7834493365144ffff38120987eb125c39d5ddef2f792362faa5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea73596dd0a7834493365144ffff38120987eb125c39d5ddef2f792362faa5cc->enter($__internal_ea73596dd0a7834493365144ffff38120987eb125c39d5ddef2f792362faa5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_9b016458189a0017d4063e7775e5caec78449a0988630b1ae6a9465b42060d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b016458189a0017d4063e7775e5caec78449a0988630b1ae6a9465b42060d6a->enter($__internal_9b016458189a0017d4063e7775e5caec78449a0988630b1ae6a9465b42060d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea73596dd0a7834493365144ffff38120987eb125c39d5ddef2f792362faa5cc->leave($__internal_ea73596dd0a7834493365144ffff38120987eb125c39d5ddef2f792362faa5cc_prof);

        
        $__internal_9b016458189a0017d4063e7775e5caec78449a0988630b1ae6a9465b42060d6a->leave($__internal_9b016458189a0017d4063e7775e5caec78449a0988630b1ae6a9465b42060d6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d198331da73d6177a9bd69193a628458eb3e53689287389c1b3b703115b99661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d198331da73d6177a9bd69193a628458eb3e53689287389c1b3b703115b99661->enter($__internal_d198331da73d6177a9bd69193a628458eb3e53689287389c1b3b703115b99661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5032d7aa4f18f36770308d1846f2f47dbac8130954173d163b716a5136fa79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5032d7aa4f18f36770308d1846f2f47dbac8130954173d163b716a5136fa79c->enter($__internal_e5032d7aa4f18f36770308d1846f2f47dbac8130954173d163b716a5136fa79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_e5032d7aa4f18f36770308d1846f2f47dbac8130954173d163b716a5136fa79c->leave($__internal_e5032d7aa4f18f36770308d1846f2f47dbac8130954173d163b716a5136fa79c_prof);

        
        $__internal_d198331da73d6177a9bd69193a628458eb3e53689287389c1b3b703115b99661->leave($__internal_d198331da73d6177a9bd69193a628458eb3e53689287389c1b3b703115b99661_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0edafaf0a6432df85a5ae0b934f0eb35e2a5ebc7ac81335d22626a77840af1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0edafaf0a6432df85a5ae0b934f0eb35e2a5ebc7ac81335d22626a77840af1f->enter($__internal_a0edafaf0a6432df85a5ae0b934f0eb35e2a5ebc7ac81335d22626a77840af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_02f24fb9e1de721bf1b7d72be2b41c49a693e39309574e657da6b6b3adfac377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f24fb9e1de721bf1b7d72be2b41c49a693e39309574e657da6b6b3adfac377->enter($__internal_02f24fb9e1de721bf1b7d72be2b41c49a693e39309574e657da6b6b3adfac377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
 <h1>Accueil</h1>
    ";
        // line 11
        echo "
    ";
        // line 12
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "admin", array())) {
            // line 13
            echo "        <h1>Hello Admin ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
            echo "</h1>
    ";
        } elseif ($this->getAttribute(        // line 14
(isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 15
            echo "        <h1>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
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
        
        $__internal_02f24fb9e1de721bf1b7d72be2b41c49a693e39309574e657da6b6b3adfac377->leave($__internal_02f24fb9e1de721bf1b7d72be2b41c49a693e39309574e657da6b6b3adfac377_prof);

        
        $__internal_a0edafaf0a6432df85a5ae0b934f0eb35e2a5ebc7ac81335d22626a77840af1f->leave($__internal_a0edafaf0a6432df85a5ae0b934f0eb35e2a5ebc7ac81335d22626a77840af1f_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fbad5bf116f741e3edf4fe0a60a1794ab97a8f214de38b2b662a02edf5635fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbad5bf116f741e3edf4fe0a60a1794ab97a8f214de38b2b662a02edf5635fd->enter($__internal_7fbad5bf116f741e3edf4fe0a60a1794ab97a8f214de38b2b662a02edf5635fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7fbb7441455ac109b734ef6482c6bbdc00d14741e40926f3361b999b0aff35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fbb7441455ac109b734ef6482c6bbdc00d14741e40926f3361b999b0aff35e->enter($__internal_f7fbb7441455ac109b734ef6482c6bbdc00d14741e40926f3361b999b0aff35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f7fbb7441455ac109b734ef6482c6bbdc00d14741e40926f3361b999b0aff35e->leave($__internal_f7fbb7441455ac109b734ef6482c6bbdc00d14741e40926f3361b999b0aff35e_prof);

        
        $__internal_7fbad5bf116f741e3edf4fe0a60a1794ab97a8f214de38b2b662a02edf5635fd->leave($__internal_7fbad5bf116f741e3edf4fe0a60a1794ab97a8f214de38b2b662a02edf5635fd_prof);

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
        return array (  228 => 126,  223 => 124,  217 => 122,  208 => 121,  193 => 114,  191 => 113,  95 => 19,  91 => 17,  85 => 15,  83 => 14,  78 => 13,  76 => 12,  73 => 11,  69 => 8,  60 => 7,  42 => 3,  11 => 1,);
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

{% block title 'Accueil' %}
    {# équivaut à 
    {%block title %} Accueil {% endblock %}#}
    
{% block content %}

 <h1>Accueil</h1>
    {# {% include 'custom/tissu.html.twig' %} #}

    {% if user_manager.admin %}
        <h1>Hello Admin {{ user_manager.userName }}</h1>
    {% elseif user_manager.user %}
        <h1>Hello {{ user_manager.userName }}</h1>
    {% else %}
    <h1>Hello visiteur</h1>
    {% endif %}
    
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
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\index.html.twig");
    }
}
