<?php

/* custom/col.html.twig */
class __TwigTemplate_c0c9f1a765e777a9ab1e59d47611eff804e6c55809acc9ba6bfc4447a054ddcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/col.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d96bb41ced74e1a3ad640d3a72038ae793822cd359b4066d5299c0e8243a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d96bb41ced74e1a3ad640d3a72038ae793822cd359b4066d5299c0e8243a91->enter($__internal_23d96bb41ced74e1a3ad640d3a72038ae793822cd359b4066d5299c0e8243a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/col.html.twig"));

        $__internal_08d844918180b2a2773f7e635eeb2d2956697eed5577c49026dea3d5d34aeef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d844918180b2a2773f7e635eeb2d2956697eed5577c49026dea3d5d34aeef4->enter($__internal_08d844918180b2a2773f7e635eeb2d2956697eed5577c49026dea3d5d34aeef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/col.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d96bb41ced74e1a3ad640d3a72038ae793822cd359b4066d5299c0e8243a91->leave($__internal_23d96bb41ced74e1a3ad640d3a72038ae793822cd359b4066d5299c0e8243a91_prof);

        
        $__internal_08d844918180b2a2773f7e635eeb2d2956697eed5577c49026dea3d5d34aeef4->leave($__internal_08d844918180b2a2773f7e635eeb2d2956697eed5577c49026dea3d5d34aeef4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_65b1db06deb2785296eacfe89180d32b9067153bd16e75e1a7420bbe4391a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b1db06deb2785296eacfe89180d32b9067153bd16e75e1a7420bbe4391a446->enter($__internal_65b1db06deb2785296eacfe89180d32b9067153bd16e75e1a7420bbe4391a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8470768c0dfa8dd67784b6af677d250731ea477a28a0f571c9057ed948cc2f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8470768c0dfa8dd67784b6af677d250731ea477a28a0f571c9057ed948cc2f81->enter($__internal_8470768c0dfa8dd67784b6af677d250731ea477a28a0f571c9057ed948cc2f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_8470768c0dfa8dd67784b6af677d250731ea477a28a0f571c9057ed948cc2f81->leave($__internal_8470768c0dfa8dd67784b6af677d250731ea477a28a0f571c9057ed948cc2f81_prof);

        
        $__internal_65b1db06deb2785296eacfe89180d32b9067153bd16e75e1a7420bbe4391a446->leave($__internal_65b1db06deb2785296eacfe89180d32b9067153bd16e75e1a7420bbe4391a446_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4fa737acdb8a561f86378e2e9f12f8e78114170ad9090fa1a1f1dff5bc00662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa737acdb8a561f86378e2e9f12f8e78114170ad9090fa1a1f1dff5bc00662a->enter($__internal_4fa737acdb8a561f86378e2e9f12f8e78114170ad9090fa1a1f1dff5bc00662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5aeab6fffb890b4af4a56e1cb639bf88e6b67f10588f47237bf6a91a2aafa1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aeab6fffb890b4af4a56e1cb639bf88e6b67f10588f47237bf6a91a2aafa1b7->enter($__internal_5aeab6fffb890b4af4a56e1cb639bf88e6b67f10588f47237bf6a91a2aafa1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de votre col </h1>
    <form method=\"post\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Titre</th>
                   <th>Description</th>
                   <th>Photo</th>
                   <th>Prix</th> 
                   <th width=\"200px\"></th>
               </tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 18
            echo "               <tr>
                   <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "titre", array()), "html", null, true);
            echo " </td>
                   <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "description", array()), "html", null, true);
            echo " </td>
                   <td><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "id_col", array()), "html", null, true);
            echo "\"/> </td>
                   <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["col"], "prix", array()), "html", null, true);
            echo " € </td>                   
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante  </button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
    </form>

";
        
        $__internal_5aeab6fffb890b4af4a56e1cb639bf88e6b67f10588f47237bf6a91a2aafa1b7->leave($__internal_5aeab6fffb890b4af4a56e1cb639bf88e6b67f10588f47237bf6a91a2aafa1b7_prof);

        
        $__internal_4fa737acdb8a561f86378e2e9f12f8e78114170ad9090fa1a1f1dff5bc00662a->leave($__internal_4fa737acdb8a561f86378e2e9f12f8e78114170ad9090fa1a1f1dff5bc00662a_prof);

    }

    public function getTemplateName()
    {
        return "custom/col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 24,  102 => 22,  96 => 21,  92 => 20,  88 => 19,  85 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 2,  11 => 1,);
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
{% block title 'Customisation' %}
    

{% block content %}
    <h1> Choix de votre col </h1>
    <form method=\"post\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Titre</th>
                   <th>Description</th>
                   <th>Photo</th>
                   <th>Prix</th> 
                   <th width=\"200px\"></th>
               </tr>
            {% for col in cols %}
               <tr>
                   <td>{{ col.titre }} </td>
                   <td>{{ col.description }} </td>
                   <td><img src=\"{{ col.photo }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ col.id_col }}\"/> </td>
                   <td>{{ col.prix }} € </td>                   
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante  </button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
    </form>

{% endblock %}

", "custom/col.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\col.html.twig");
    }
}
