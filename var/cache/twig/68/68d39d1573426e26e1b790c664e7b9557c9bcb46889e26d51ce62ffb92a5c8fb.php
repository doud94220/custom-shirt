<?php

/* layout.html.twig */
class __TwigTemplate_1555518c93fdc2801b99edc1247ef8c4ba9a636428d87c507555de3da5a7f68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7c77521d51344bb01a50548300e621347304aacb0a56e14287983a69d4cb627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c77521d51344bb01a50548300e621347304aacb0a56e14287983a69d4cb627->enter($__internal_a7c77521d51344bb01a50548300e621347304aacb0a56e14287983a69d4cb627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_06bf1d03bca43163369504ec88711307a98cc851928765e921f573054e5953bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bf1d03bca43163369504ec88711307a98cc851928765e921f573054e5953bf->enter($__internal_06bf1d03bca43163369504ec88711307a98cc851928765e921f573054e5953bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - Custom Shirt</title>

        ";
        // line 19
        echo "        
        <meta charset=\"utf-8\">
        
        <meta http-equiv=\"X-UA-compatible\" content=\"IE-edge\">
        ";
        // line 24
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 26
        echo "        

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "        
    </head>
    <body>

        ";
        // line 39
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "admin", array())) {
            // line 40
            echo "            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <a class=\"navbar-brand\">Menu admin</a>
                    <ul class=\"nav navbar-nav\">
                        <li>

                            ";
            // line 47
            echo "                        </li>
                        <li>
                            ";
            // line 50
            echo "
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_commandes");
            echo "\">Gestion commandes</a>
                        </li>
                    </ul>
                </div>
            </nav>
        ";
        }
        // line 59
        echo "        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Custom Shirt</a>
                ";
        // line 64
        echo "                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 66
        echo "                    ";
        if ($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array())) {
            // line 67
            echo "                        <li>

                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("user" => $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
            echo "</a>


                        </li>
                        <li>
                            <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Se déconnecter</a>
                        </li>
                    ";
        } else {
            // line 77
            echo "                        <li>
                            <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">Créer un compte</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Se connecter</a>
                        </li>
                    ";
        }
        // line 84
        echo "                </ul>
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 89
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 90
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 91
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 92
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 93
                    echo "                    ";
                }
                // line 94
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 95
                echo $context["flash"];
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "        </div>
        
    
        ";
        // line 104
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "
    </body>
</html>";
        
        $__internal_a7c77521d51344bb01a50548300e621347304aacb0a56e14287983a69d4cb627->leave($__internal_a7c77521d51344bb01a50548300e621347304aacb0a56e14287983a69d4cb627_prof);

        
        $__internal_06bf1d03bca43163369504ec88711307a98cc851928765e921f573054e5953bf->leave($__internal_06bf1d03bca43163369504ec88711307a98cc851928765e921f573054e5953bf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_41298332889fb29f00ad69e390936b8fb62771a047256114727e9c1edf89a7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41298332889fb29f00ad69e390936b8fb62771a047256114727e9c1edf89a7f7->enter($__internal_41298332889fb29f00ad69e390936b8fb62771a047256114727e9c1edf89a7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcacab35953d78639f654110b5a1772f285d9a43823e618b3f7d58e30a05d6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcacab35953d78639f654110b5a1772f285d9a43823e618b3f7d58e30a05d6b4->enter($__internal_fcacab35953d78639f654110b5a1772f285d9a43823e618b3f7d58e30a05d6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_fcacab35953d78639f654110b5a1772f285d9a43823e618b3f7d58e30a05d6b4->leave($__internal_fcacab35953d78639f654110b5a1772f285d9a43823e618b3f7d58e30a05d6b4_prof);

        
        $__internal_41298332889fb29f00ad69e390936b8fb62771a047256114727e9c1edf89a7f7->leave($__internal_41298332889fb29f00ad69e390936b8fb62771a047256114727e9c1edf89a7f7_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c69b57dfbe58c4caaf369df95218a2503f88bf3c5dafb54909a255c5d2565a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c69b57dfbe58c4caaf369df95218a2503f88bf3c5dafb54909a255c5d2565a5->enter($__internal_3c69b57dfbe58c4caaf369df95218a2503f88bf3c5dafb54909a255c5d2565a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd6619767184ea86130155003881347754d43bbf483c0b5db78bc90c9959c216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6619767184ea86130155003881347754d43bbf483c0b5db78bc90c9959c216->enter($__internal_fd6619767184ea86130155003881347754d43bbf483c0b5db78bc90c9959c216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            
            <!-- Css créé nous mêmes -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_fd6619767184ea86130155003881347754d43bbf483c0b5db78bc90c9959c216->leave($__internal_fd6619767184ea86130155003881347754d43bbf483c0b5db78bc90c9959c216_prof);

        
        $__internal_3c69b57dfbe58c4caaf369df95218a2503f88bf3c5dafb54909a255c5d2565a5->leave($__internal_3c69b57dfbe58c4caaf369df95218a2503f88bf3c5dafb54909a255c5d2565a5_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_b664b00b95b06f11c3e9365c02d8fa1408c436a71638ddad59287647c8dcfd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b664b00b95b06f11c3e9365c02d8fa1408c436a71638ddad59287647c8dcfd46->enter($__internal_b664b00b95b06f11c3e9365c02d8fa1408c436a71638ddad59287647c8dcfd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a241467dff14acf51c709fc693bb1a77cafbd84f782bf4de2cac6daf412c889a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a241467dff14acf51c709fc693bb1a77cafbd84f782bf4de2cac6daf412c889a->enter($__internal_a241467dff14acf51c709fc693bb1a77cafbd84f782bf4de2cac6daf412c889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a241467dff14acf51c709fc693bb1a77cafbd84f782bf4de2cac6daf412c889a->leave($__internal_a241467dff14acf51c709fc693bb1a77cafbd84f782bf4de2cac6daf412c889a_prof);

        
        $__internal_b664b00b95b06f11c3e9365c02d8fa1408c436a71638ddad59287647c8dcfd46->leave($__internal_b664b00b95b06f11c3e9365c02d8fa1408c436a71638ddad59287647c8dcfd46_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f79d885b5b1827b7e2cbd7ac1a8ec53fa87c8f3ab3d82f48ae11c75e9b20e11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79d885b5b1827b7e2cbd7ac1a8ec53fa87c8f3ab3d82f48ae11c75e9b20e11f->enter($__internal_f79d885b5b1827b7e2cbd7ac1a8ec53fa87c8f3ab3d82f48ae11c75e9b20e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57f1bf96beebe4fa99fe33714d3afd9f7aa5a0bee3735cebf90ae9ebfb7ce32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f1bf96beebe4fa99fe33714d3afd9f7aa5a0bee3735cebf90ae9ebfb7ce32a->enter($__internal_57f1bf96beebe4fa99fe33714d3afd9f7aa5a0bee3735cebf90ae9ebfb7ce32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "
             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_57f1bf96beebe4fa99fe33714d3afd9f7aa5a0bee3735cebf90ae9ebfb7ce32a->leave($__internal_57f1bf96beebe4fa99fe33714d3afd9f7aa5a0bee3735cebf90ae9ebfb7ce32a_prof);

        
        $__internal_f79d885b5b1827b7e2cbd7ac1a8ec53fa87c8f3ab3d82f48ae11c75e9b20e11f->leave($__internal_f79d885b5b1827b7e2cbd7ac1a8ec53fa87c8f3ab3d82f48ae11c75e9b20e11f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 105,  267 => 104,  250 => 99,  238 => 33,  232 => 29,  223 => 28,  205 => 4,  193 => 112,  190 => 104,  185 => 100,  182 => 99,  176 => 98,  167 => 95,  162 => 94,  159 => 93,  156 => 92,  153 => 91,  148 => 90,  143 => 89,  137 => 84,  131 => 81,  125 => 78,  122 => 77,  116 => 74,  106 => 69,  102 => 67,  99 => 66,  96 => 64,  92 => 61,  88 => 59,  79 => 53,  74 => 50,  70 => 47,  62 => 40,  60 => 39,  54 => 35,  52 => 28,  48 => 26,  45 => 24,  39 => 19,  34 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - Custom Shirt</title>

        {#
        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        #}
        
        <meta charset=\"utf-8\">
        
        <meta http-equiv=\"X-UA-compatible\" content=\"IE-edge\">
        {# Les balises méta \"http-equiv\" qui envoie des informations supplémentaires via le protocole HTTP #}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {# Afin de forcer le bon niveau de zoom aux navigateurs mobiles, mais aussi pour leur imposer une largeur de viewport qui n'est pas égale à 980px (ou autres valeurs selon le navigateur), il vous sera nécessaire d'inclure une balise <meta> \"viewport\" au sein du <head> de votre document HTML #}
        

        {% block stylesheets %}
            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            
            <!-- Css créé nous mêmes -->
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% endblock %}
        
    </head>
    <body>

        {% if user_manager.admin %}
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container\">
                    <a class=\"navbar-brand\">Menu admin</a>
                    <ul class=\"nav navbar-nav\">
                        <li>

                            {#<a href=\"{{ path('admin_produits') }}\">Gestion produits</a>#}
                        </li>
                        <li>
                            {#<a href=\"{{ path('admin_users') }}\">Gestion utilisateurs</a>#}

                        </li>
                        <li>
                            <a href=\"{{ path('admin_commandes') }}\">Gestion commandes</a>
                        </li>
                    </ul>
                </div>
            </nav>
        {% endif %}
        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">Custom Shirt</a>
                {# affiche le rendu de la route category_menu 
                {{ render(url('category_menu')) }}#}
                <ul class=\"nav navbar-nav navbar-right\">
                    {# voir l'ajout de la globale user_manager dans twig dans src/app.php #}
                    {% if user_manager.user %}
                        <li>

                            <a href=\"{{ path('profile', {user:user_manager.user}) }}\">{{ user_manager.userName }}</a>


                        </li>
                        <li>
                            <a href=\"{{ path('logout') }}\">Se déconnecter</a>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('register') }}\">Créer un compte</a>
                        </li>
                        <li>
                            <a href=\"{{ path('login') }}\">Se connecter</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </nav>
        <div class=\"container\">
            {# bloc d'affichage des messages flash #}
            {% for type, flashes in app.session.flashbag.all %}
                {% for flash in flashes %}
                    {% if type == 'error' %}
                        {% set type = 'danger' %}
                    {% endif %}
                    <div class=\"alert alert-{{ type }}\">
                        {{ flash|raw }}
                    </div>
                {% endfor %}
            {% endfor %}
            {% block content %}{% endblock %}
        </div>
        
    
        {# Import js boostrap et jQuery #}
        {% block javascripts %}

             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        {% endblock %}

    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\layout.html.twig");
    }
}
