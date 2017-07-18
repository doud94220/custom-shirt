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
        $__internal_19742b802f5f3da150f10d617d479ce118986590dfef76b700f2dc302632b3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19742b802f5f3da150f10d617d479ce118986590dfef76b700f2dc302632b3a9->enter($__internal_19742b802f5f3da150f10d617d479ce118986590dfef76b700f2dc302632b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/coupe.html.twig"));

        $__internal_534cc152494e008c64995363a31353367cc28316b1ad018239f2b49ce1c0d346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534cc152494e008c64995363a31353367cc28316b1ad018239f2b49ce1c0d346->enter($__internal_534cc152494e008c64995363a31353367cc28316b1ad018239f2b49ce1c0d346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/coupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19742b802f5f3da150f10d617d479ce118986590dfef76b700f2dc302632b3a9->leave($__internal_19742b802f5f3da150f10d617d479ce118986590dfef76b700f2dc302632b3a9_prof);

        
        $__internal_534cc152494e008c64995363a31353367cc28316b1ad018239f2b49ce1c0d346->leave($__internal_534cc152494e008c64995363a31353367cc28316b1ad018239f2b49ce1c0d346_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b9cf082ee49f963aeffd0182d4383fb083d7f41434edbe0a8085f79c03ed616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9cf082ee49f963aeffd0182d4383fb083d7f41434edbe0a8085f79c03ed616->enter($__internal_7b9cf082ee49f963aeffd0182d4383fb083d7f41434edbe0a8085f79c03ed616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_682f96499799c925eb810650f7b48f975d457b3c52838d79eafc51bf76d726b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682f96499799c925eb810650f7b48f975d457b3c52838d79eafc51bf76d726b7->enter($__internal_682f96499799c925eb810650f7b48f975d457b3c52838d79eafc51bf76d726b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_682f96499799c925eb810650f7b48f975d457b3c52838d79eafc51bf76d726b7->leave($__internal_682f96499799c925eb810650f7b48f975d457b3c52838d79eafc51bf76d726b7_prof);

        
        $__internal_7b9cf082ee49f963aeffd0182d4383fb083d7f41434edbe0a8085f79c03ed616->leave($__internal_7b9cf082ee49f963aeffd0182d4383fb083d7f41434edbe0a8085f79c03ed616_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_41b7ce6c796a153f2ed6f67e7ea398d01d05ac99829ff80fbf27796320475829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b7ce6c796a153f2ed6f67e7ea398d01d05ac99829ff80fbf27796320475829->enter($__internal_41b7ce6c796a153f2ed6f67e7ea398d01d05ac99829ff80fbf27796320475829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7d76e7fe4ddc739df0bf4778ce2afd28a00c7f988c03fb04ee898bfca3a8842e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d76e7fe4ddc739df0bf4778ce2afd28a00c7f988c03fb04ee898bfca3a8842e->enter($__internal_7d76e7fe4ddc739df0bf4778ce2afd28a00c7f988c03fb04ee898bfca3a8842e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de votre coupe </h1>
    <form method=\"post\" action=\"";
        // line 7
        echo "\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["coupe"]) ? $context["coupe"] : $this->getContext($context, "coupe")));
        foreach ($context['_seq'] as $context["_key"] => $context["coupes"]) {
            // line 17
            echo "               <tr>
                   <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupe"]) ? $context["coupe"] : $this->getContext($context, "coupe")), "titre", array()), "html", null, true);
            echo " </td>
                   <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupe"]) ? $context["coupe"] : $this->getContext($context, "coupe")), "description", array()), "html", null, true);
            echo " </td>
                   <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coupe"]) ? $context["coupe"] : $this->getContext($context, "coupe")), "photo", array()), "html", null, true);
            echo "\" alt=\"\" width=\"200\"/> </td>
               </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
    
    </form>

";
        
        $__internal_7d76e7fe4ddc739df0bf4778ce2afd28a00c7f988c03fb04ee898bfca3a8842e->leave($__internal_7d76e7fe4ddc739df0bf4778ce2afd28a00c7f988c03fb04ee898bfca3a8842e_prof);

        
        $__internal_41b7ce6c796a153f2ed6f67e7ea398d01d05ac99829ff80fbf27796320475829->leave($__internal_41b7ce6c796a153f2ed6f67e7ea398d01d05ac99829ff80fbf27796320475829_prof);

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
    <h1> Choix de votre coupe </h1>
    <form method=\"post\" action=\"{#{{ path('bouton.html.twig')}}#}\">
        <div class=\"form-group\">
           <table class=\"table\">
               <tr>
                   <th>Coupe</th>
                   <th>Description</th>
                   <th>Photo</th>
                   <th width=\"200px\"></th>
               </tr>
            {% for coupes in coupe %}
               <tr>
                   <td>{{ coupe.titre }} </td>
                   <td>{{ coupe.description }} </td>
                   <td><img src=\"{{ coupe.photo }}\" alt=\"\" width=\"200\"/> </td>
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
    
    </form>

{% endblock %}", "custom/coupe.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\coupe.html.twig");
    }
}
