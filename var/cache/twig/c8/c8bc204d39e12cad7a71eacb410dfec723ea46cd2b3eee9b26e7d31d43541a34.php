<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2ad46a4320dc8622ba758f93e022e68936f3976157d2ea41b66722bf5aeb7e1b extends Twig_Template
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
        $__internal_0636c0458cf3040b090251fb22f099265cd6d5e720d36c088ce7923c6a015160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0636c0458cf3040b090251fb22f099265cd6d5e720d36c088ce7923c6a015160->enter($__internal_0636c0458cf3040b090251fb22f099265cd6d5e720d36c088ce7923c6a015160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_43f5ae6e8109fd1d1e2929cb1a8b16f7c4e821d4257649dc8eca4426ae96466f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f5ae6e8109fd1d1e2929cb1a8b16f7c4e821d4257649dc8eca4426ae96466f->enter($__internal_43f5ae6e8109fd1d1e2929cb1a8b16f7c4e821d4257649dc8eca4426ae96466f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0636c0458cf3040b090251fb22f099265cd6d5e720d36c088ce7923c6a015160->leave($__internal_0636c0458cf3040b090251fb22f099265cd6d5e720d36c088ce7923c6a015160_prof);

        
        $__internal_43f5ae6e8109fd1d1e2929cb1a8b16f7c4e821d4257649dc8eca4426ae96466f->leave($__internal_43f5ae6e8109fd1d1e2929cb1a8b16f7c4e821d4257649dc8eca4426ae96466f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\custom-shirt\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
