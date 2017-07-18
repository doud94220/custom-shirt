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
        $__internal_c995d292555043a89b7e62662ed7d415e92ad1a2355e0601ca0740dedad0fc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c995d292555043a89b7e62662ed7d415e92ad1a2355e0601ca0740dedad0fc78->enter($__internal_c995d292555043a89b7e62662ed7d415e92ad1a2355e0601ca0740dedad0fc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/col.html.twig"));

        $__internal_42252d3b8615a8d68554ff6ace822fa891964a96e9cbe8b7b9bef5e460f207fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42252d3b8615a8d68554ff6ace822fa891964a96e9cbe8b7b9bef5e460f207fe->enter($__internal_42252d3b8615a8d68554ff6ace822fa891964a96e9cbe8b7b9bef5e460f207fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "custom/col.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c995d292555043a89b7e62662ed7d415e92ad1a2355e0601ca0740dedad0fc78->leave($__internal_c995d292555043a89b7e62662ed7d415e92ad1a2355e0601ca0740dedad0fc78_prof);

        
        $__internal_42252d3b8615a8d68554ff6ace822fa891964a96e9cbe8b7b9bef5e460f207fe->leave($__internal_42252d3b8615a8d68554ff6ace822fa891964a96e9cbe8b7b9bef5e460f207fe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_70177d27a206d375ae594cc4e0ceb5f4bc6bdb1d1eb2abda23f3ddd3e3fd2472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70177d27a206d375ae594cc4e0ceb5f4bc6bdb1d1eb2abda23f3ddd3e3fd2472->enter($__internal_70177d27a206d375ae594cc4e0ceb5f4bc6bdb1d1eb2abda23f3ddd3e3fd2472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cbf486deeccfceb82ccfb9f9d507af61d2e7ab8a33d4463572ba702f2b4fd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbf486deeccfceb82ccfb9f9d507af61d2e7ab8a33d4463572ba702f2b4fd10->enter($__internal_2cbf486deeccfceb82ccfb9f9d507af61d2e7ab8a33d4463572ba702f2b4fd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Customisation";
        
        $__internal_2cbf486deeccfceb82ccfb9f9d507af61d2e7ab8a33d4463572ba702f2b4fd10->leave($__internal_2cbf486deeccfceb82ccfb9f9d507af61d2e7ab8a33d4463572ba702f2b4fd10_prof);

        
        $__internal_70177d27a206d375ae594cc4e0ceb5f4bc6bdb1d1eb2abda23f3ddd3e3fd2472->leave($__internal_70177d27a206d375ae594cc4e0ceb5f4bc6bdb1d1eb2abda23f3ddd3e3fd2472_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d29b3d13c41aa84a1a729110f3143b3dd06d27eae00dd9af511afdf112abdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d29b3d13c41aa84a1a729110f3143b3dd06d27eae00dd9af511afdf112abdc6->enter($__internal_3d29b3d13c41aa84a1a729110f3143b3dd06d27eae00dd9af511afdf112abdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b5ff0abd562cd802f8b5abfb60a07ff3ce9f7e34aeb439ae67d21a6f6eb2031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5ff0abd562cd802f8b5abfb60a07ff3ce9f7e34aeb439ae67d21a6f6eb2031->enter($__internal_0b5ff0abd562cd802f8b5abfb60a07ff3ce9f7e34aeb439ae67d21a6f6eb2031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Choix de votre col </h1>
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
            echo "\" alt=\"\" width=\"200\"/> </td>
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
        <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
    
    </form>

";
        
        $__internal_0b5ff0abd562cd802f8b5abfb60a07ff3ce9f7e34aeb439ae67d21a6f6eb2031->leave($__internal_0b5ff0abd562cd802f8b5abfb60a07ff3ce9f7e34aeb439ae67d21a6f6eb2031_prof);

        
        $__internal_3d29b3d13c41aa84a1a729110f3143b3dd06d27eae00dd9af511afdf112abdc6->leave($__internal_3d29b3d13c41aa84a1a729110f3143b3dd06d27eae00dd9af511afdf112abdc6_prof);

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
    <h1> Choix de votre col </h1>
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
            {% for col in cols %}
               <tr>
                   <td>{{ col.titre }} </td>
                   <td>{{ col.description }} </td>
                   <td><img src=\"{{ col.photo }}\" alt=\"\" width=\"200\"/> </td>
                   <td>{{ col.prix }} € </td>                   
               </tr>
            {% endfor %}   
           </table>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" > Validation du formulaire </button>
    
    </form>

{% endblock %}

", "custom/col.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\templates\\custom\\col.html.twig");
    }
}
