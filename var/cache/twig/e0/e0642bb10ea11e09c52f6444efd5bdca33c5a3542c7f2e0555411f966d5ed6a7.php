<?php

/* produit/produit_list.html.twig */
class __TwigTemplate_c588ecaaeb41e032ed81307a3beb2de2f7dae4e4d482880df69447c350bfe81a extends Twig_Template
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
        $__internal_692db9a7abb4d2fafda558c514200a2e57318a6092bbf5c4c0a04b57ee3f60e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692db9a7abb4d2fafda558c514200a2e57318a6092bbf5c4c0a04b57ee3f60e4->enter($__internal_692db9a7abb4d2fafda558c514200a2e57318a6092bbf5c4c0a04b57ee3f60e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit_list.html.twig"));

        $__internal_903ce52ff59f837a5893b3de36fc2d4fe77d9e1156293d89229898325e44dc99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903ce52ff59f837a5893b3de36fc2d4fe77d9e1156293d89229898325e44dc99->enter($__internal_903ce52ff59f837a5893b3de36fc2d4fe77d9e1156293d89229898325e44dc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produit/produit_list.html.twig"));

        // line 1
        $context["produitId"] = 0;
        // line 2
        $context["nbRows"] = twig_round((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) / 3), 0, "ceil");
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["nbRows"]) ? $context["nbRows"] : $this->getContext($context, "nbRows"))));
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
                if ($this->getAttribute((isset($context["produits"]) ? $context["produits"] : null), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array", true, true)) {
                    // line 10
                    echo "                <div class=\"col-sm-4 chemise\">
                    <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "id", array()))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, ("http://localhost/custom-shirt/web/img/" . $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "photo", array())), "html", null, true);
                    echo "\" alt=\"chemise\"></a>
                    <hr>
                    <div class=\"desc\">
                        <p class=\"title\"><a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_product", array("id" => $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "titre", array()), "html", null, true);
                    echo "</a></p>
                        <p class=\"price\">";
                    // line 15
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "prix", array()) . " €"), "html", null, true);
                    echo "</p>
                    </div>
                    <hr>
                    <p>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")), (isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")), array(), "array"), "description", array()), "html", null, true);
                    echo "</p>
                </div>
            ";
                }
                // line 21
                echo "            ";
                $context["produitId"] = ((isset($context["produitId"]) ? $context["produitId"] : $this->getContext($context, "produitId")) + 1);
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
        
        $__internal_692db9a7abb4d2fafda558c514200a2e57318a6092bbf5c4c0a04b57ee3f60e4->leave($__internal_692db9a7abb4d2fafda558c514200a2e57318a6092bbf5c4c0a04b57ee3f60e4_prof);

        
        $__internal_903ce52ff59f837a5893b3de36fc2d4fe77d9e1156293d89229898325e44dc99->leave($__internal_903ce52ff59f837a5893b3de36fc2d4fe77d9e1156293d89229898325e44dc99_prof);

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
        return array (  86 => 23,  80 => 22,  77 => 21,  71 => 18,  65 => 15,  59 => 14,  51 => 11,  48 => 10,  45 => 9,  41 => 8,  36 => 5,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set produitId = 0 %}
{% set nbRows = (produits|length/3)|round(0, 'ceil') %}

{% for i in 0..nbRows %}


    <div class=\"row\">
        {% for j in 0..2 %}
            {% if produits[produitId] is defined %}
                <div class=\"col-sm-4 chemise\">
                    <a href=\"{{ path('show_product', {\"id\":  produits[produitId].id}) }}\"><img src=\"{{ 'http://localhost/custom-shirt/web/img/' ~ produits[produitId].photo }}\" alt=\"chemise\"></a>
                    <hr>
                    <div class=\"desc\">
                        <p class=\"title\"><a href=\"{{ path('show_product', {\"id\":  produits[produitId].id}) }}\">{{ produits[produitId].titre }}</a></p>
                        <p class=\"price\">{{ produits[produitId].prix ~ ' €'}}</p>
                    </div>
                    <hr>
                    <p>{{ produits[produitId].description }}</p>
                </div>
            {% endif %}
            {% set produitId = produitId + 1 %}
        {% endfor %}
    </div>
{% endfor %}
", "produit/produit_list.html.twig", "C:\\wamp64\\www\\custom-shirt\\templates\\produit\\produit_list.html.twig");
    }
}
