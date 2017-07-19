<?php

/* custom/bouton.html.twig */
class __TwigTemplate_b5467e519855d8e1a64dd824047a92728b4299ee7d89e1d8c037f1fc1224916b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/bouton.html.twig", 1);
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
        $__internal_bc490235475202ad5788bd565659124f94e26185392fad4412326f37d79f0ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc490235475202ad5788bd565659124f94e26185392fad4412326f37d79f0ab2->enter($__internal_bc490235475202ad5788bd565659124f94e26185392fad4412326f37d79f0ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/bouton.html.twig"));

        $__internal_f1ad431edf709139195003a4da853cb96d187d3fbc4514fbdfd9d5787c344b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ad431edf709139195003a4da853cb96d187d3fbc4514fbdfd9d5787c344b64->enter($__internal_f1ad431edf709139195003a4da853cb96d187d3fbc4514fbdfd9d5787c344b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/bouton.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc490235475202ad5788bd565659124f94e26185392fad4412326f37d79f0ab2->leave($__internal_bc490235475202ad5788bd565659124f94e26185392fad4412326f37d79f0ab2_prof);

        
        $__internal_f1ad431edf709139195003a4da853cb96d187d3fbc4514fbdfd9d5787c344b64->leave($__internal_f1ad431edf709139195003a4da853cb96d187d3fbc4514fbdfd9d5787c344b64_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c3db2d93301f5907a334283b33a627c2c67bfd6846e15393fa33bc2daf4cdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3db2d93301f5907a334283b33a627c2c67bfd6846e15393fa33bc2daf4cdb9->enter($__internal_5c3db2d93301f5907a334283b33a627c2c67bfd6846e15393fa33bc2daf4cdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a4cfb0a9d73498630b4107b2f779a39eb09d15e1538e674d7925b8b6753f71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4cfb0a9d73498630b4107b2f779a39eb09d15e1538e674d7925b8b6753f71f->enter($__internal_0a4cfb0a9d73498630b4107b2f779a39eb09d15e1538e674d7925b8b6753f71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_0a4cfb0a9d73498630b4107b2f779a39eb09d15e1538e674d7925b8b6753f71f->leave($__internal_0a4cfb0a9d73498630b4107b2f779a39eb09d15e1538e674d7925b8b6753f71f_prof);

        
        $__internal_5c3db2d93301f5907a334283b33a627c2c67bfd6846e15393fa33bc2daf4cdb9->leave($__internal_5c3db2d93301f5907a334283b33a627c2c67bfd6846e15393fa33bc2daf4cdb9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_152702f5b89b74b8b889ae82170b3fe0cc3e7041ec86ff0562d67242067b0ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152702f5b89b74b8b889ae82170b3fe0cc3e7041ec86ff0562d67242067b0ab1->enter($__internal_152702f5b89b74b8b889ae82170b3fe0cc3e7041ec86ff0562d67242067b0ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_60eca99c9c73b1eabee8b7d165a8ead2d6322a55065bf6a26b61d9bda7a3ec62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60eca99c9c73b1eabee8b7d165a8ead2d6322a55065bf6a26b61d9bda7a3ec62->enter($__internal_60eca99c9c73b1eabee8b7d165a8ead2d6322a55065bf6a26b61d9bda7a3ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de vos boutons </h1>
    <form name=\"choix_tissu\" method=\"post\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["boutons"]) ? $context["boutons"] : $this->getContext($context, "boutons")));
        foreach ($context['_seq'] as $context["_key"] => $context["bouton"]) {
            // line 18
            echo "               <tr>
                   <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "titre", array()), "html", null, true);
            echo " </td>
                   <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "description", array()), "html", null, true);
            echo " </td>
                   <td><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "id_bouton", array()), "html", null, true);
            echo "\"/> </td>
                   <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["bouton"], "prix", array()), "html", null, true);
            echo " € </td>                   
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bouton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "   
           </table>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
    </form>

";
        
        $__internal_60eca99c9c73b1eabee8b7d165a8ead2d6322a55065bf6a26b61d9bda7a3ec62->leave($__internal_60eca99c9c73b1eabee8b7d165a8ead2d6322a55065bf6a26b61d9bda7a3ec62_prof);

        
        $__internal_152702f5b89b74b8b889ae82170b3fe0cc3e7041ec86ff0562d67242067b0ab1->leave($__internal_152702f5b89b74b8b889ae82170b3fe0cc3e7041ec86ff0562d67242067b0ab1_prof);

    }

    public function getTemplateName()
    {
        return "custom/bouton.html.twig";
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
    <h1> Choix de vos boutons </h1>
    <form name=\"choix_tissu\" method=\"post\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Titre</th>
                   <th>Description</th>
                   <th>Photo</th>
                   <th>Prix</th> 
                   <th width=\"200px\"></th>
               </tr>
            {% for bouton in boutons %}
               <tr>
                   <td>{{ bouton.titre }} </td>
                   <td>{{ bouton.description }} </td>
                   <td><img src=\"{{ bouton.photo }}\" alt=\"\" width=\"200\" class=\"select_img\" data-id=\"{{ bouton.id_bouton }}\"/> </td>
                   <td>{{ bouton.prix }} € </td>                   
               </tr>
            {% endfor %}   
           </table>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
        <input type=\"hidden\" name=\"custom_product\" id=\"custom_product\">
    </form>

{% endblock %}
", "custom/bouton.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\bouton.html.twig");
    }
}
