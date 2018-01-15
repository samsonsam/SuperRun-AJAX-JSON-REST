<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5577a6cc86a6ff97eef4e528658699028c241477a402918876f5daac1b1e6905 extends Twig_Template
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
        $__internal_9a56fa96018bd10e2f23907dbfcf7aacb6239a34287d2d01ddab7287b2a901ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a56fa96018bd10e2f23907dbfcf7aacb6239a34287d2d01ddab7287b2a901ac->enter($__internal_9a56fa96018bd10e2f23907dbfcf7aacb6239a34287d2d01ddab7287b2a901ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7241ec7c9b85dc06814b983730aa9aa79d7f733bf9c2698c12de3c02175e71b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7241ec7c9b85dc06814b983730aa9aa79d7f733bf9c2698c12de3c02175e71b2->enter($__internal_7241ec7c9b85dc06814b983730aa9aa79d7f733bf9c2698c12de3c02175e71b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9a56fa96018bd10e2f23907dbfcf7aacb6239a34287d2d01ddab7287b2a901ac->leave($__internal_9a56fa96018bd10e2f23907dbfcf7aacb6239a34287d2d01ddab7287b2a901ac_prof);

        
        $__internal_7241ec7c9b85dc06814b983730aa9aa79d7f733bf9c2698c12de3c02175e71b2->leave($__internal_7241ec7c9b85dc06814b983730aa9aa79d7f733bf9c2698c12de3c02175e71b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
