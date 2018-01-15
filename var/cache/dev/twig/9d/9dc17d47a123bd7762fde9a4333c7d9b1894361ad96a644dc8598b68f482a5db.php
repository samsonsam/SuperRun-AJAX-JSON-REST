<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_fce87e19837eb036a4b353f5d15902be94cb55f1ad67b2a8d90d969323c96d27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0ac4fa5deedf842538c2e07bc7f49a79ba37d3e30f20cec15ce38d01fe6026e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ac4fa5deedf842538c2e07bc7f49a79ba37d3e30f20cec15ce38d01fe6026e->enter($__internal_a0ac4fa5deedf842538c2e07bc7f49a79ba37d3e30f20cec15ce38d01fe6026e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_004078bf909669810945027d895a515a45ff2c071765fa8c85d0345b3f2afd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004078bf909669810945027d895a515a45ff2c071765fa8c85d0345b3f2afd30->enter($__internal_004078bf909669810945027d895a515a45ff2c071765fa8c85d0345b3f2afd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ac4fa5deedf842538c2e07bc7f49a79ba37d3e30f20cec15ce38d01fe6026e->leave($__internal_a0ac4fa5deedf842538c2e07bc7f49a79ba37d3e30f20cec15ce38d01fe6026e_prof);

        
        $__internal_004078bf909669810945027d895a515a45ff2c071765fa8c85d0345b3f2afd30->leave($__internal_004078bf909669810945027d895a515a45ff2c071765fa8c85d0345b3f2afd30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f545c1f910aa9cb323f0ddc2b9d772161be71039ed79f79716f46e704a749daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f545c1f910aa9cb323f0ddc2b9d772161be71039ed79f79716f46e704a749daa->enter($__internal_f545c1f910aa9cb323f0ddc2b9d772161be71039ed79f79716f46e704a749daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f4c7c4de8a3c62d3eb317e49c7d711553d9fca8dd04487ef366bfc6a4e16ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4c7c4de8a3c62d3eb317e49c7d711553d9fca8dd04487ef366bfc6a4e16ed3->enter($__internal_6f4c7c4de8a3c62d3eb317e49c7d711553d9fca8dd04487ef366bfc6a4e16ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6f4c7c4de8a3c62d3eb317e49c7d711553d9fca8dd04487ef366bfc6a4e16ed3->leave($__internal_6f4c7c4de8a3c62d3eb317e49c7d711553d9fca8dd04487ef366bfc6a4e16ed3_prof);

        
        $__internal_f545c1f910aa9cb323f0ddc2b9d772161be71039ed79f79716f46e704a749daa->leave($__internal_f545c1f910aa9cb323f0ddc2b9d772161be71039ed79f79716f46e704a749daa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8bdc31329b8eedfe005d02580661caee6321fa5d8463801efd098edc3b374c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8bdc31329b8eedfe005d02580661caee6321fa5d8463801efd098edc3b374c->enter($__internal_ed8bdc31329b8eedfe005d02580661caee6321fa5d8463801efd098edc3b374c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b29b071ac0a914a5e76b9ae709994de2be5b9a72d9056d47790832482694c633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29b071ac0a914a5e76b9ae709994de2be5b9a72d9056d47790832482694c633->enter($__internal_b29b071ac0a914a5e76b9ae709994de2be5b9a72d9056d47790832482694c633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_b29b071ac0a914a5e76b9ae709994de2be5b9a72d9056d47790832482694c633->leave($__internal_b29b071ac0a914a5e76b9ae709994de2be5b9a72d9056d47790832482694c633_prof);

        
        $__internal_ed8bdc31329b8eedfe005d02580661caee6321fa5d8463801efd098edc3b374c->leave($__internal_ed8bdc31329b8eedfe005d02580661caee6321fa5d8463801efd098edc3b374c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
