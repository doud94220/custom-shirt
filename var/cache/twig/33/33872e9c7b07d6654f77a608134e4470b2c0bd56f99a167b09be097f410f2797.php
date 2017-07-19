<?php

/* custom/coupe.html.twig */
class __TwigTemplate_28b5b943600f46a342ce81e8d37f1907a24e4165f99a0a61cb9f887d13cc7248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/coupe.html.twig", 1);
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
        $__internal_004296cf79667a4994a7fa555fb36bf8fc52b18cb6ebad2877805172ecb55ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004296cf79667a4994a7fa555fb36bf8fc52b18cb6ebad2877805172ecb55ddc->enter($__internal_004296cf79667a4994a7fa555fb36bf8fc52b18cb6ebad2877805172ecb55ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/coupe.html.twig"));

        $__internal_bd3596711d0e5e13023b67cb3185f5b9a618ef894cc9ee953056c6e64f2d64c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3596711d0e5e13023b67cb3185f5b9a618ef894cc9ee953056c6e64f2d64c8->enter($__internal_bd3596711d0e5e13023b67cb3185f5b9a618ef894cc9ee953056c6e64f2d64c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/coupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004296cf79667a4994a7fa555fb36bf8fc52b18cb6ebad2877805172ecb55ddc->leave($__internal_004296cf79667a4994a7fa555fb36bf8fc52b18cb6ebad2877805172ecb55ddc_prof);

        
        $__internal_bd3596711d0e5e13023b67cb3185f5b9a618ef894cc9ee953056c6e64f2d64c8->leave($__internal_bd3596711d0e5e13023b67cb3185f5b9a618ef894cc9ee953056c6e64f2d64c8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e398c982ec083205c68d11705678c943b56aede946eb4a77afef87d97ac9af3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e398c982ec083205c68d11705678c943b56aede946eb4a77afef87d97ac9af3b->enter($__internal_e398c982ec083205c68d11705678c943b56aede946eb4a77afef87d97ac9af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6abae26386038019c264cae7c7d5a7076e689efedcdb560ca3bb3b514406ff45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abae26386038019c264cae7c7d5a7076e689efedcdb560ca3bb3b514406ff45->enter($__internal_6abae26386038019c264cae7c7d5a7076e689efedcdb560ca3bb3b514406ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_6abae26386038019c264cae7c7d5a7076e689efedcdb560ca3bb3b514406ff45->leave($__internal_6abae26386038019c264cae7c7d5a7076e689efedcdb560ca3bb3b514406ff45_prof);

        
        $__internal_e398c982ec083205c68d11705678c943b56aede946eb4a77afef87d97ac9af3b->leave($__internal_e398c982ec083205c68d11705678c943b56aede946eb4a77afef87d97ac9af3b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba96d2d2a6fb9a93925de182461fffe90ad9cb8205963a28dd23cfd7d4e93e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba96d2d2a6fb9a93925de182461fffe90ad9cb8205963a28dd23cfd7d4e93e92->enter($__internal_ba96d2d2a6fb9a93925de182461fffe90ad9cb8205963a28dd23cfd7d4e93e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ea3221e8868efc39d98f3833e46cfd4045780de9175a167b8baeccc5f9b48ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3221e8868efc39d98f3833e46cfd4045780de9175a167b8baeccc5f9b48ea5->enter($__internal_ea3221e8868efc39d98f3833e46cfd4045780de9175a167b8baeccc5f9b48ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de votre coupe </h1>
    <form method=\"post\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Coupe</th>
                   <th>Description</th>
                   <th>Photo</th>
                   <th width=\"200px\"></th>
               </tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coupes"]) ? $context["coupes"] : $this->getContext($context, "coupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupe"]) {
            // line 17
            echo "               <tr>
                   <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "titre", array()), "html", null, true);
            echo " </td>
                   <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "description", array()), "html", null, true);
            echo " </td>
                   <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coupe"], "id_coupe", array()), "html", null, true);
            echo "\"/> </td>
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">        
    </form>

";
        
        $__internal_ea3221e8868efc39d98f3833e46cfd4045780de9175a167b8baeccc5f9b48ea5->leave($__internal_ea3221e8868efc39d98f3833e46cfd4045780de9175a167b8baeccc5f9b48ea5_prof);

        
        $__internal_ba96d2d2a6fb9a93925de182461fffe90ad9cb8205963a28dd23cfd7d4e93e92->leave($__internal_ba96d2d2a6fb9a93925de182461fffe90ad9cb8205963a28dd23cfd7d4e93e92_prof);

    }

    public function getTemplateName()
    {
        return "custom/coupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  95 => 20,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  68 => 6,  59 => 5,  41 => 2,  11 => 1,);
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
    <h1> Choix de votre coupe </h1>
    <form method=\"post\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Coupe</th>
                   <th>Description</th>
                   <th>Photo</th>
                   <th width=\"200px\"></th>
               </tr>
            {% for coupe in coupes %}
               <tr>
                   <td>{{ coupe.titre }} </td>
                   <td>{{ coupe.description }} </td>
                   <td><img src=\"{{ coupe.photo }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ coupe.id_coupe }}\"/> </td>
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">        
    </form>

{% endblock %}", "custom/coupe.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\coupe.html.twig");
    }
}
