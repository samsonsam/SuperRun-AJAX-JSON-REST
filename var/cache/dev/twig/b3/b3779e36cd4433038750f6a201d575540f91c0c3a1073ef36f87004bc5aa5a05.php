<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_81a179d50c04a3bf25074b47934610375b784e3c146093d07b63c5a0f6ded5c7 extends Twig_Template
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
        $__internal_ec32f35ac858b7df7f94f3ab64128fc6fef1cc041187f7a0d90c8fa7f1526a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec32f35ac858b7df7f94f3ab64128fc6fef1cc041187f7a0d90c8fa7f1526a31->enter($__internal_ec32f35ac858b7df7f94f3ab64128fc6fef1cc041187f7a0d90c8fa7f1526a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8d1cbfb00946da71baf94d7b91556b04f03b135d41cfe3e174d346463c913155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1cbfb00946da71baf94d7b91556b04f03b135d41cfe3e174d346463c913155->enter($__internal_8d1cbfb00946da71baf94d7b91556b04f03b135d41cfe3e174d346463c913155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ec32f35ac858b7df7f94f3ab64128fc6fef1cc041187f7a0d90c8fa7f1526a31->leave($__internal_ec32f35ac858b7df7f94f3ab64128fc6fef1cc041187f7a0d90c8fa7f1526a31_prof);

        
        $__internal_8d1cbfb00946da71baf94d7b91556b04f03b135d41cfe3e174d346463c913155->leave($__internal_8d1cbfb00946da71baf94d7b91556b04f03b135d41cfe3e174d346463c913155_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
