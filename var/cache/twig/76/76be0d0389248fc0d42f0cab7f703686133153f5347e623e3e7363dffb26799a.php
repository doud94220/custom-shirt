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
        $__internal_e5f6cc0e1176bd78cc62ec7ed8cdc35416909dd51cecc19a2ef1bbdd2115ea9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f6cc0e1176bd78cc62ec7ed8cdc35416909dd51cecc19a2ef1bbdd2115ea9f->enter($__internal_e5f6cc0e1176bd78cc62ec7ed8cdc35416909dd51cecc19a2ef1bbdd2115ea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_275adc5a9345f160159193a4d85f4ebb5fb48d391263483081d6f133656ebf5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275adc5a9345f160159193a4d85f4ebb5fb48d391263483081d6f133656ebf5b->enter($__internal_275adc5a9345f160159193a4d85f4ebb5fb48d391263483081d6f133656ebf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5f6cc0e1176bd78cc62ec7ed8cdc35416909dd51cecc19a2ef1bbdd2115ea9f->leave($__internal_e5f6cc0e1176bd78cc62ec7ed8cdc35416909dd51cecc19a2ef1bbdd2115ea9f_prof);

        
        $__internal_275adc5a9345f160159193a4d85f4ebb5fb48d391263483081d6f133656ebf5b->leave($__internal_275adc5a9345f160159193a4d85f4ebb5fb48d391263483081d6f133656ebf5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b34c16d4567810cfa30d9753e606dbb315731cecd0dc21f41e9951a8a2da22de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34c16d4567810cfa30d9753e606dbb315731cecd0dc21f41e9951a8a2da22de->enter($__internal_b34c16d4567810cfa30d9753e606dbb315731cecd0dc21f41e9951a8a2da22de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7df1e6d1385488ccf2382f8c36e8f77d540871ab507bc9f0c3d06e4f80040ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7df1e6d1385488ccf2382f8c36e8f77d540871ab507bc9f0c3d06e4f80040ab->enter($__internal_c7df1e6d1385488ccf2382f8c36e8f77d540871ab507bc9f0c3d06e4f80040ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_c7df1e6d1385488ccf2382f8c36e8f77d540871ab507bc9f0c3d06e4f80040ab->leave($__internal_c7df1e6d1385488ccf2382f8c36e8f77d540871ab507bc9f0c3d06e4f80040ab_prof);

        
        $__internal_b34c16d4567810cfa30d9753e606dbb315731cecd0dc21f41e9951a8a2da22de->leave($__internal_b34c16d4567810cfa30d9753e606dbb315731cecd0dc21f41e9951a8a2da22de_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_78907fe4594351f9e54b6505f91027acd210c9d5bb06f557abf52683b9045624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78907fe4594351f9e54b6505f91027acd210c9d5bb06f557abf52683b9045624->enter($__internal_78907fe4594351f9e54b6505f91027acd210c9d5bb06f557abf52683b9045624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd65d6d50e6521d7e2b44580ebb8aa2091cf71899ef624dfdaf41f8c7d50d4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd65d6d50e6521d7e2b44580ebb8aa2091cf71899ef624dfdaf41f8c7d50d4e1->enter($__internal_fd65d6d50e6521d7e2b44580ebb8aa2091cf71899ef624dfdaf41f8c7d50d4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "        <h1>Hello Admin</h1>
    ";
        } elseif ($this->getAttribute(        // line 14
(isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 15
            echo "        <h1>Hello user</h1>
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
        
        $__internal_fd65d6d50e6521d7e2b44580ebb8aa2091cf71899ef624dfdaf41f8c7d50d4e1->leave($__internal_fd65d6d50e6521d7e2b44580ebb8aa2091cf71899ef624dfdaf41f8c7d50d4e1_prof);

        
        $__internal_78907fe4594351f9e54b6505f91027acd210c9d5bb06f557abf52683b9045624->leave($__internal_78907fe4594351f9e54b6505f91027acd210c9d5bb06f557abf52683b9045624_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c3a594cd4ff454e15fc353c35ad204a310d906088c0274fefffcec6610c2318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3a594cd4ff454e15fc353c35ad204a310d906088c0274fefffcec6610c2318->enter($__internal_8c3a594cd4ff454e15fc353c35ad204a310d906088c0274fefffcec6610c2318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74145e85ace348dad409a0d7c044750e1a845d5546b267b6c7bec20f74168abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74145e85ace348dad409a0d7c044750e1a845d5546b267b6c7bec20f74168abb->enter($__internal_74145e85ace348dad409a0d7c044750e1a845d5546b267b6c7bec20f74168abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_74145e85ace348dad409a0d7c044750e1a845d5546b267b6c7bec20f74168abb->leave($__internal_74145e85ace348dad409a0d7c044750e1a845d5546b267b6c7bec20f74168abb_prof);

        
        $__internal_8c3a594cd4ff454e15fc353c35ad204a310d906088c0274fefffcec6610c2318->leave($__internal_8c3a594cd4ff454e15fc353c35ad204a310d906088c0274fefffcec6610c2318_prof);

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
        return array (  224 => 126,  219 => 124,  213 => 122,  204 => 121,  189 => 114,  187 => 113,  91 => 19,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  69 => 8,  60 => 7,  42 => 3,  11 => 1,);
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
        <h1>Hello Admin</h1>
    {% elseif user_manager.user %}
        <h1>Hello user</h1>
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
