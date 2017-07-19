<?php

/* produit/produit_list.html.twig */
class __TwigTemplate_feadbe1d905df1e7e63fd960e574c056050bf3bfc6aebbba4ddbb09b55806ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["produitId"] = 0;
        // line 2
        $context["nbRows"] = twig_round((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) / 3), 0, "ceil");
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbRows"]) ? $context["nbRows"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "

    <div class=\"row\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 9
                echo "            ";
                if ($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array", true, true)) {
                    // line 10
                    echo "                <div class=\"col-sm-4 chemise\">
                    <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, ("http://localhost/test/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "photo", array())), "html", null, true);
                    echo "\" alt=\"chemise\"></a>
                    <hr>
                    <div class=\"desc\">
                        <p class=\"title\"><a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "titre", array()), "html", null, true);
                    echo "</a></p>
                        <p class=\"price\">";
                    // line 15
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "prix", array()) . " €"), "html", null, true);
                    echo "</p>
                    </div>
                    <hr>
                    <p>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : null), array(), "array"), "description", array()), "html", null, true);
                    echo "</p>
                </div>
            ";
                }
                // line 21
                echo "            ";
                $context["produitId"] = ((isset($context["produitId"]) ? $context["produitId"] : null) + 1);
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "produit/produit_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  74 => 22,  71 => 21,  65 => 18,  59 => 15,  53 => 14,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "produit/produit_list.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\produit\\produit_list.html.twig");
    }
}
