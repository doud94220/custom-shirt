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
        $__internal_4b24fbd61ce646d61537bdf17f2940633972e71ee118ca5c7179caa3088ceab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b24fbd61ce646d61537bdf17f2940633972e71ee118ca5c7179caa3088ceab8->enter($__internal_4b24fbd61ce646d61537bdf17f2940633972e71ee118ca5c7179caa3088ceab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $__internal_fdd0f26279784e092fabc9c8f223729f8fa63cd513be320fa73e26e7c64fb0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd0f26279784e092fabc9c8f223729f8fa63cd513be320fa73e26e7c64fb0be->enter($__internal_fdd0f26279784e092fabc9c8f223729f8fa63cd513be320fa73e26e7c64fb0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/tissu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b24fbd61ce646d61537bdf17f2940633972e71ee118ca5c7179caa3088ceab8->leave($__internal_4b24fbd61ce646d61537bdf17f2940633972e71ee118ca5c7179caa3088ceab8_prof);

        
        $__internal_fdd0f26279784e092fabc9c8f223729f8fa63cd513be320fa73e26e7c64fb0be->leave($__internal_fdd0f26279784e092fabc9c8f223729f8fa63cd513be320fa73e26e7c64fb0be_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5141e975ff8ff4cf55392df0b9ae62d45e84aa5d0c02c42d6abbe33c72582ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5141e975ff8ff4cf55392df0b9ae62d45e84aa5d0c02c42d6abbe33c72582ee->enter($__internal_f5141e975ff8ff4cf55392df0b9ae62d45e84aa5d0c02c42d6abbe33c72582ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_874347c67367a0b985314f47d8639d794e583136f32365b4e1dbde25fe78344b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874347c67367a0b985314f47d8639d794e583136f32365b4e1dbde25fe78344b->enter($__internal_874347c67367a0b985314f47d8639d794e583136f32365b4e1dbde25fe78344b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_874347c67367a0b985314f47d8639d794e583136f32365b4e1dbde25fe78344b->leave($__internal_874347c67367a0b985314f47d8639d794e583136f32365b4e1dbde25fe78344b_prof);

        
        $__internal_f5141e975ff8ff4cf55392df0b9ae62d45e84aa5d0c02c42d6abbe33c72582ee->leave($__internal_f5141e975ff8ff4cf55392df0b9ae62d45e84aa5d0c02c42d6abbe33c72582ee_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c903379ce649250f256bdb4a9239ae7a3cce2ff5379b1318d15fa276372e01a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c903379ce649250f256bdb4a9239ae7a3cce2ff5379b1318d15fa276372e01a2->enter($__internal_c903379ce649250f256bdb4a9239ae7a3cce2ff5379b1318d15fa276372e01a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_886554e887316788321b282d5e587acf3e5430941f36faa1d66b02d2a8ec4672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886554e887316788321b282d5e587acf3e5430941f36faa1d66b02d2a8ec4672->enter($__internal_886554e887316788321b282d5e587acf3e5430941f36faa1d66b02d2a8ec4672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de votre tissu </h1>
    <form name=\"choix_tissu\" method=\"post\">
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
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tissu"], "id_tissu", array()), "html", null, true);
            echo "\"/> </td>
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
        <button type=\"submit\" class=\"btn btn-primary\">Etape suivante</button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
    
    </form>

";
        
        $__internal_886554e887316788321b282d5e587acf3e5430941f36faa1d66b02d2a8ec4672->leave($__internal_886554e887316788321b282d5e587acf3e5430941f36faa1d66b02d2a8ec4672_prof);

        
        $__internal_c903379ce649250f256bdb4a9239ae7a3cce2ff5379b1318d15fa276372e01a2->leave($__internal_c903379ce649250f256bdb4a9239ae7a3cce2ff5379b1318d15fa276372e01a2_prof);

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
        return array (  106 => 22,  97 => 20,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  68 => 6,  59 => 5,  41 => 2,  11 => 1,);
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
    <form name=\"choix_tissu\" method=\"post\">
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
                   <td><img src=\"{{ tissu.photo }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ tissu.id_tissu }}\"/> </td>
                   <td>{{ tissu.prix }} € </td>                   
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Etape suivante</button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
    
    </form>

{% endblock %}
", "custom/tissu.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\tissu.html.twig");
    }
}
