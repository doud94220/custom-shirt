<?php

/* custom/custom_recap.html.twig */
class __TwigTemplate_6f93b38cedc5fe80faaa5ccc69a00b0d65aad4616e33dd52a088829dafb87566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "custom/custom_recap.html.twig", 1);
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
        $__internal_df0149b179e31de7c0c56847479845ca93822bdaa13e70e8a30f7d9aea6ab4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0149b179e31de7c0c56847479845ca93822bdaa13e70e8a30f7d9aea6ab4ec->enter($__internal_df0149b179e31de7c0c56847479845ca93822bdaa13e70e8a30f7d9aea6ab4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/custom_recap.html.twig"));

        $__internal_8ced6005ce627761c6cd8351842f42b2436234a2968924917fc11f3b0aab7ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ced6005ce627761c6cd8351842f42b2436234a2968924917fc11f3b0aab7ca0->enter($__internal_8ced6005ce627761c6cd8351842f42b2436234a2968924917fc11f3b0aab7ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/custom_recap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df0149b179e31de7c0c56847479845ca93822bdaa13e70e8a30f7d9aea6ab4ec->leave($__internal_df0149b179e31de7c0c56847479845ca93822bdaa13e70e8a30f7d9aea6ab4ec_prof);

        
        $__internal_8ced6005ce627761c6cd8351842f42b2436234a2968924917fc11f3b0aab7ca0->leave($__internal_8ced6005ce627761c6cd8351842f42b2436234a2968924917fc11f3b0aab7ca0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_85dce8f7f55b630a4dd02249c7d131cba1d6f7a9b772249afec8b71527670691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dce8f7f55b630a4dd02249c7d131cba1d6f7a9b772249afec8b71527670691->enter($__internal_85dce8f7f55b630a4dd02249c7d131cba1d6f7a9b772249afec8b71527670691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d64f1c4ba055596d77e7eb2f02825451328f804d95239aaa6f9e3cb24d6fa23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64f1c4ba055596d77e7eb2f02825451328f804d95239aaa6f9e3cb24d6fa23b->enter($__internal_d64f1c4ba055596d77e7eb2f02825451328f804d95239aaa6f9e3cb24d6fa23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_d64f1c4ba055596d77e7eb2f02825451328f804d95239aaa6f9e3cb24d6fa23b->leave($__internal_d64f1c4ba055596d77e7eb2f02825451328f804d95239aaa6f9e3cb24d6fa23b_prof);

        
        $__internal_85dce8f7f55b630a4dd02249c7d131cba1d6f7a9b772249afec8b71527670691->leave($__internal_85dce8f7f55b630a4dd02249c7d131cba1d6f7a9b772249afec8b71527670691_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c20300c46f4fec1e007c662f9228e5eb4b0665b0b7fab4f812cc906d3e1334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c20300c46f4fec1e007c662f9228e5eb4b0665b0b7fab4f812cc906d3e1334f->enter($__internal_7c20300c46f4fec1e007c662f9228e5eb4b0665b0b7fab4f812cc906d3e1334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_355245420230244d58a15c2587f082d5c0fa2bd39a83b6b1bf815f52950eabff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355245420230244d58a15c2587f082d5c0fa2bd39a83b6b1bf815f52950eabff->enter($__internal_355245420230244d58a15c2587f082d5c0fa2bd39a83b6b1bf815f52950eabff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1> Résumé de votre configuration </h1>
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recaps"]) ? $context["recaps"] : $this->getContext($context, "recaps")));
        foreach ($context['_seq'] as $context["_key"] => $context["recap"]) {
            // line 16
            echo "               <tr>
                   <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["recap"], "titre", array()), "html", null, true);
            echo " </td>
                   <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["recap"], "description", array()), "html", null, true);
            echo " </td>
                   <td><img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["recap"], "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\"/> </td>
                   <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["recap"], "prix", array()), "html", null, true);
            echo " € </td>      
               </tr>              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "           </table>      
        <button type=\"submit\" class=\"btn btn-primary\" > Passez au prise de mesures </button>
     </form>
";
        
        $__internal_355245420230244d58a15c2587f082d5c0fa2bd39a83b6b1bf815f52950eabff->leave($__internal_355245420230244d58a15c2587f082d5c0fa2bd39a83b6b1bf815f52950eabff_prof);

        
        $__internal_7c20300c46f4fec1e007c662f9228e5eb4b0665b0b7fab4f812cc906d3e1334f->leave($__internal_7c20300c46f4fec1e007c662f9228e5eb4b0665b0b7fab4f812cc906d3e1334f_prof);

    }

    public function getTemplateName()
    {
        return "custom/custom_recap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 23,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    <h1> Résumé de votre configuration </h1>
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
            {% for recap in recaps %}
               <tr>
                   <td>{{ recap.titre }} </td>
                   <td>{{ recap.description }} </td>
                   <td><img src=\"{{ recap.photo }}\" alt=\"\" width=\"200\"/> </td>
                   <td>{{ recap.prix }} € </td>      
               </tr>              
            {% endfor %}
           </table>      
        <button type=\"submit\" class=\"btn btn-primary\" > Passez au prise de mesures </button>
     </form>
{% endblock %}", "custom/custom_recap.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\custom_recap.html.twig");
    }
}
