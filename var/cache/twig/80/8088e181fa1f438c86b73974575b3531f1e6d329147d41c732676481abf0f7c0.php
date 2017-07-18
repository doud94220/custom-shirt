<?php

/* custom/tissu.html.twig */
class __TwigTemplate_9394d18f69aa954daa4d175b59f376ef11071f9ec11bc97c6ed399ecefa28ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/tissu.html.twig", 1);
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
        $__internal_9e3fd5755bb76179945f8a22f943f1b3f252eb58ca239e20d268a4e3f07b3e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3fd5755bb76179945f8a22f943f1b3f252eb58ca239e20d268a4e3f07b3e27->enter($__internal_9e3fd5755bb76179945f8a22f943f1b3f252eb58ca239e20d268a4e3f07b3e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $__internal_8fb9abd546458992a0e8e1d1f46b6b70652df63dda2d528037009da6855752ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb9abd546458992a0e8e1d1f46b6b70652df63dda2d528037009da6855752ed->enter($__internal_8fb9abd546458992a0e8e1d1f46b6b70652df63dda2d528037009da6855752ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3fd5755bb76179945f8a22f943f1b3f252eb58ca239e20d268a4e3f07b3e27->leave($__internal_9e3fd5755bb76179945f8a22f943f1b3f252eb58ca239e20d268a4e3f07b3e27_prof);

        
        $__internal_8fb9abd546458992a0e8e1d1f46b6b70652df63dda2d528037009da6855752ed->leave($__internal_8fb9abd546458992a0e8e1d1f46b6b70652df63dda2d528037009da6855752ed_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8155953cbc648678a5b0301183661645f394f047a3399468391e754eef1ef4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8155953cbc648678a5b0301183661645f394f047a3399468391e754eef1ef4cb->enter($__internal_8155953cbc648678a5b0301183661645f394f047a3399468391e754eef1ef4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39e667756ef74fabb7ca1bfc0130c5e6a64224ee5e9f57ba4661672cf3f9176d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e667756ef74fabb7ca1bfc0130c5e6a64224ee5e9f57ba4661672cf3f9176d->enter($__internal_39e667756ef74fabb7ca1bfc0130c5e6a64224ee5e9f57ba4661672cf3f9176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_39e667756ef74fabb7ca1bfc0130c5e6a64224ee5e9f57ba4661672cf3f9176d->leave($__internal_39e667756ef74fabb7ca1bfc0130c5e6a64224ee5e9f57ba4661672cf3f9176d_prof);

        
        $__internal_8155953cbc648678a5b0301183661645f394f047a3399468391e754eef1ef4cb->leave($__internal_8155953cbc648678a5b0301183661645f394f047a3399468391e754eef1ef4cb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffaec57abc8617bd59aefa5d857b1160b4458f760ea94daffd6f56ee4426a5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffaec57abc8617bd59aefa5d857b1160b4458f760ea94daffd6f56ee4426a5ca->enter($__internal_ffaec57abc8617bd59aefa5d857b1160b4458f760ea94daffd6f56ee4426a5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e4d4ad905b45244674ef51ecc091ec9c4d4a4a77a9b533cced4a61f813de2f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d4ad905b45244674ef51ecc091ec9c4d4a4a77a9b533cced4a61f813de2f39->enter($__internal_e4d4ad905b45244674ef51ecc091ec9c4d4a4a77a9b533cced4a61f813de2f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de votre tissu </h1>
    <form method=\"post\" action=\"";
        // line 7
        echo "\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Description</th>
                   <th>Photo</th>
                   <th>Prix</th> 
                   <th width=\"200px\"></th>
               </tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tissus"]) ? $context["tissus"] : $this->getContext($context, "tissus")));
        foreach ($context['_seq'] as $context["_key"] => $context["tissu"]) {
            // line 17
            echo "               <tr>
                   <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "description", array()), "html", null, true);
            echo " </td>
                   <td><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\"/> </td>
                   <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "prix", array()), "html", null, true);
            echo " € </td>                   
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tissu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
    
    </form>

";
        
        $__internal_e4d4ad905b45244674ef51ecc091ec9c4d4a4a77a9b533cced4a61f813de2f39->leave($__internal_e4d4ad905b45244674ef51ecc091ec9c4d4a4a77a9b533cced4a61f813de2f39_prof);

        
        $__internal_ffaec57abc8617bd59aefa5d857b1160b4458f760ea94daffd6f56ee4426a5ca->leave($__internal_ffaec57abc8617bd59aefa5d857b1160b4458f760ea94daffd6f56ee4426a5ca_prof);

    }

    public function getTemplateName()
    {
        return "custom/tissu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  97 => 20,  93 => 19,  89 => 18,  86 => 17,  82 => 16,  71 => 7,  68 => 6,  59 => 5,  41 => 2,  11 => 1,);
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
    <h1> Choix de votre tissu </h1>
    <form method=\"post\" action=\"{#{{ path('bouton.html.twig')}}#}\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Description</th>
                   <th>Photo</th>
                   <th>Prix</th> 
                   <th width=\"200px\"></th>
               </tr>
            {% for tissu in tissus %}
               <tr>
                   <td>{{ tissu.description }} </td>
                   <td><img src=\"{{ tissu.photo }}\" alt=\"\" width=\"200\"/> </td>
                   <td>{{ tissu.prix }} € </td>                   
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
    
    </form>

{% endblock %}
", "custom/tissu.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\tissu.html.twig");
    }
}
