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
        $__internal_92c64198fd937ed75419de0093f9b6ba9ecc283339850340db1aedcf6dcf16d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c64198fd937ed75419de0093f9b6ba9ecc283339850340db1aedcf6dcf16d6->enter($__internal_92c64198fd937ed75419de0093f9b6ba9ecc283339850340db1aedcf6dcf16d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_1c1235a276b5c812b2d85b0a7dbd9274f2122744afc298fd0e55e746c4833f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1235a276b5c812b2d85b0a7dbd9274f2122744afc298fd0e55e746c4833f39->enter($__internal_1c1235a276b5c812b2d85b0a7dbd9274f2122744afc298fd0e55e746c4833f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "userName", array()), "html", null, true);
            echo "</a>

                        </li>
                        <li>
                            <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter</a>
                        </li>
                    ";
        } else {
            // line 76
            echo "                        <li>
                            <a href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">Créer un compte</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a>
                        </li>
                    ";
        }
        // line 83
        echo "                </ul>
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 88
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
            // line 89
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 90
                echo "                    ";
                if (($context["type"] == "error")) {
                    // line 91
                    echo "                        ";
                    $context["type"] = "danger";
                    // line 92
                    echo "                    ";
                }
                // line 93
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 94
                echo $context["flash"];
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "        </div>
        
    
        ";
        // line 103
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "
    </body>
</html>";
        
        $__internal_92c64198fd937ed75419de0093f9b6ba9ecc283339850340db1aedcf6dcf16d6->leave($__internal_92c64198fd937ed75419de0093f9b6ba9ecc283339850340db1aedcf6dcf16d6_prof);

        
        $__internal_1c1235a276b5c812b2d85b0a7dbd9274f2122744afc298fd0e55e746c4833f39->leave($__internal_1c1235a276b5c812b2d85b0a7dbd9274f2122744afc298fd0e55e746c4833f39_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91a2d497699d5612c6e68f7d43bed14a44af92c906357f4b49e8db98fefb7118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a2d497699d5612c6e68f7d43bed14a44af92c906357f4b49e8db98fefb7118->enter($__internal_91a2d497699d5612c6e68f7d43bed14a44af92c906357f4b49e8db98fefb7118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_397fed84b94cb45c089cbd7ec63a2ac299fd1dbc2879586ad8c6cef0d65558c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397fed84b94cb45c089cbd7ec63a2ac299fd1dbc2879586ad8c6cef0d65558c2->enter($__internal_397fed84b94cb45c089cbd7ec63a2ac299fd1dbc2879586ad8c6cef0d65558c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_397fed84b94cb45c089cbd7ec63a2ac299fd1dbc2879586ad8c6cef0d65558c2->leave($__internal_397fed84b94cb45c089cbd7ec63a2ac299fd1dbc2879586ad8c6cef0d65558c2_prof);

        
        $__internal_91a2d497699d5612c6e68f7d43bed14a44af92c906357f4b49e8db98fefb7118->leave($__internal_91a2d497699d5612c6e68f7d43bed14a44af92c906357f4b49e8db98fefb7118_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_392301191b276ec08480895508ebc9243988a35d0977fe7671da1633a9f4aa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392301191b276ec08480895508ebc9243988a35d0977fe7671da1633a9f4aa30->enter($__internal_392301191b276ec08480895508ebc9243988a35d0977fe7671da1633a9f4aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aec0deb8c6d08da426be380f59ea0cd3d0cc84a188fc4202553b6a8a6275b676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec0deb8c6d08da426be380f59ea0cd3d0cc84a188fc4202553b6a8a6275b676->enter($__internal_aec0deb8c6d08da426be380f59ea0cd3d0cc84a188fc4202553b6a8a6275b676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            
            <!-- Css créé nous mêmes -->
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        
        $__internal_aec0deb8c6d08da426be380f59ea0cd3d0cc84a188fc4202553b6a8a6275b676->leave($__internal_aec0deb8c6d08da426be380f59ea0cd3d0cc84a188fc4202553b6a8a6275b676_prof);

        
        $__internal_392301191b276ec08480895508ebc9243988a35d0977fe7671da1633a9f4aa30->leave($__internal_392301191b276ec08480895508ebc9243988a35d0977fe7671da1633a9f4aa30_prof);

    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        $__internal_8caa220f289bb067d947ffb86d7831cf6a4e949b3d58fd11c44c4743d0adbac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caa220f289bb067d947ffb86d7831cf6a4e949b3d58fd11c44c4743d0adbac3->enter($__internal_8caa220f289bb067d947ffb86d7831cf6a4e949b3d58fd11c44c4743d0adbac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_86d944d504c6b9fc020778ee42581868cec96e46f002b1c4b08a69c11ac74124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d944d504c6b9fc020778ee42581868cec96e46f002b1c4b08a69c11ac74124->enter($__internal_86d944d504c6b9fc020778ee42581868cec96e46f002b1c4b08a69c11ac74124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_86d944d504c6b9fc020778ee42581868cec96e46f002b1c4b08a69c11ac74124->leave($__internal_86d944d504c6b9fc020778ee42581868cec96e46f002b1c4b08a69c11ac74124_prof);

        
        $__internal_8caa220f289bb067d947ffb86d7831cf6a4e949b3d58fd11c44c4743d0adbac3->leave($__internal_8caa220f289bb067d947ffb86d7831cf6a4e949b3d58fd11c44c4743d0adbac3_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f4ab994f9110672eeb9e44bd24a4403242ca754042f24128f9f466d219d554a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4ab994f9110672eeb9e44bd24a4403242ca754042f24128f9f466d219d554a->enter($__internal_4f4ab994f9110672eeb9e44bd24a4403242ca754042f24128f9f466d219d554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e012cba48df5a6bef81c95463097ae8a1be6f6c825384309fe394ba4112bb40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e012cba48df5a6bef81c95463097ae8a1be6f6c825384309fe394ba4112bb40f->enter($__internal_e012cba48df5a6bef81c95463097ae8a1be6f6c825384309fe394ba4112bb40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "
             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("script/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e012cba48df5a6bef81c95463097ae8a1be6f6c825384309fe394ba4112bb40f->leave($__internal_e012cba48df5a6bef81c95463097ae8a1be6f6c825384309fe394ba4112bb40f_prof);

        
        $__internal_4f4ab994f9110672eeb9e44bd24a4403242ca754042f24128f9f466d219d554a->leave($__internal_4f4ab994f9110672eeb9e44bd24a4403242ca754042f24128f9f466d219d554a_prof);

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
        return array (  282 => 109,  275 => 104,  266 => 103,  249 => 98,  237 => 33,  231 => 29,  222 => 28,  204 => 4,  192 => 111,  189 => 103,  184 => 99,  181 => 98,  175 => 97,  166 => 94,  161 => 93,  158 => 92,  155 => 91,  152 => 90,  147 => 89,  142 => 88,  136 => 83,  130 => 80,  124 => 77,  121 => 76,  115 => 73,  106 => 69,  102 => 67,  99 => 66,  96 => 64,  92 => 61,  88 => 59,  79 => 53,  74 => 50,  70 => 47,  62 => 40,  60 => 39,  54 => 35,  52 => 28,  48 => 26,  45 => 24,  39 => 19,  34 => 4,  29 => 1,);
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

                            <a href=\"{{ path('profile', {user:user_manager.user}) }}\"><span class=\"glyphicon glyphicon-user\"></span> {{ user_manager.userName }}</a>

                        </li>
                        <li>
                            <a href=\"{{ path('logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter</a>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('register') }}\">Créer un compte</a>
                        </li>
                        <li>
                            <a href=\"{{ path('login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Se connecter</a>
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
            <script src=\"{{ asset('script/script.js') }}\"></script>
        {% endblock %}

    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\layout.html.twig");
    }
}
