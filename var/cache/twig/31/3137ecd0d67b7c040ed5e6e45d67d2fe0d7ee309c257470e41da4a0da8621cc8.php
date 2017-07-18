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
        $__internal_f982c2c42626056ace8e5cc96876a32ef3f7db477c2e68909e929ab08d306885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f982c2c42626056ace8e5cc96876a32ef3f7db477c2e68909e929ab08d306885->enter($__internal_f982c2c42626056ace8e5cc96876a32ef3f7db477c2e68909e929ab08d306885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/bouton.html.twig"));

        $__internal_17c35d0799b93b7e20e7c5f1e502bf4dfa1ea03573b4e6b48993755a40eba0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c35d0799b93b7e20e7c5f1e502bf4dfa1ea03573b4e6b48993755a40eba0c3->enter($__internal_17c35d0799b93b7e20e7c5f1e502bf4dfa1ea03573b4e6b48993755a40eba0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/bouton.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f982c2c42626056ace8e5cc96876a32ef3f7db477c2e68909e929ab08d306885->leave($__internal_f982c2c42626056ace8e5cc96876a32ef3f7db477c2e68909e929ab08d306885_prof);

        
        $__internal_17c35d0799b93b7e20e7c5f1e502bf4dfa1ea03573b4e6b48993755a40eba0c3->leave($__internal_17c35d0799b93b7e20e7c5f1e502bf4dfa1ea03573b4e6b48993755a40eba0c3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac1df8232bd37fe2d79e2849580efb77e00075977ca4f66191c977e1224cfce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1df8232bd37fe2d79e2849580efb77e00075977ca4f66191c977e1224cfce4->enter($__internal_ac1df8232bd37fe2d79e2849580efb77e00075977ca4f66191c977e1224cfce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ce4e890218498a21fdc1390b43e20dce687baeb804ebf63625460ece17905cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce4e890218498a21fdc1390b43e20dce687baeb804ebf63625460ece17905cd->enter($__internal_1ce4e890218498a21fdc1390b43e20dce687baeb804ebf63625460ece17905cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_1ce4e890218498a21fdc1390b43e20dce687baeb804ebf63625460ece17905cd->leave($__internal_1ce4e890218498a21fdc1390b43e20dce687baeb804ebf63625460ece17905cd_prof);

        
        $__internal_ac1df8232bd37fe2d79e2849580efb77e00075977ca4f66191c977e1224cfce4->leave($__internal_ac1df8232bd37fe2d79e2849580efb77e00075977ca4f66191c977e1224cfce4_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c202eb3528afe75d14ee10bd45d9ae23f114c0a9fbb67db58ee07bec014b793f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c202eb3528afe75d14ee10bd45d9ae23f114c0a9fbb67db58ee07bec014b793f->enter($__internal_c202eb3528afe75d14ee10bd45d9ae23f114c0a9fbb67db58ee07bec014b793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3529df60e09ad61b1888dd872a9278cb550c8aa09debe7ad345fc6b6abfa5b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3529df60e09ad61b1888dd872a9278cb550c8aa09debe7ad345fc6b6abfa5b57->enter($__internal_3529df60e09ad61b1888dd872a9278cb550c8aa09debe7ad345fc6b6abfa5b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de vos boutons </h1>
    <form method=\"post\" action=\"";
        // line 7
        echo "\">
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
            echo "\" alt=\"\" width=\"200\"/> </td>
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
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
    
    </form>

";
        
        $__internal_3529df60e09ad61b1888dd872a9278cb550c8aa09debe7ad345fc6b6abfa5b57->leave($__internal_3529df60e09ad61b1888dd872a9278cb550c8aa09debe7ad345fc6b6abfa5b57_prof);

        
        $__internal_c202eb3528afe75d14ee10bd45d9ae23f114c0a9fbb67db58ee07bec014b793f->leave($__internal_c202eb3528afe75d14ee10bd45d9ae23f114c0a9fbb67db58ee07bec014b793f_prof);

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
        return array (  111 => 24,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  87 => 18,  83 => 17,  71 => 7,  68 => 6,  59 => 5,  41 => 2,  11 => 1,);
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
    <form method=\"post\" action=\"{#{{ path('bouton.html.twig')}}#}\">
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
                   <td><img src=\"{{ bouton.photo }}\" alt=\"\" width=\"200\"/> </td>
                   <td>{{ bouton.prix }} € </td>                   
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Etape suivante </button>
    
    </form>

{% endblock %}
", "custom/bouton.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\bouton.html.twig");
    }
}
