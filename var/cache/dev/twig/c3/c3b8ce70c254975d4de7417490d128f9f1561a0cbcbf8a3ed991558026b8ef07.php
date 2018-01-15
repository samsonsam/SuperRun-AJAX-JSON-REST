<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3fa0043299e99729afbbec5b5141d3efc082d207fb7b2631f753e74b3ba259b8 extends Twig_Template
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
        $__internal_f72dde011313f059b379c7d7521a56ef43af02b2aa052532ddf4eb6a1597eae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72dde011313f059b379c7d7521a56ef43af02b2aa052532ddf4eb6a1597eae5->enter($__internal_f72dde011313f059b379c7d7521a56ef43af02b2aa052532ddf4eb6a1597eae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ada221c673e40b39f54533bc8e45b69f50b2ef4c8f6c155302ed986a46ffcdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada221c673e40b39f54533bc8e45b69f50b2ef4c8f6c155302ed986a46ffcdf0->enter($__internal_ada221c673e40b39f54533bc8e45b69f50b2ef4c8f6c155302ed986a46ffcdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f72dde011313f059b379c7d7521a56ef43af02b2aa052532ddf4eb6a1597eae5->leave($__internal_f72dde011313f059b379c7d7521a56ef43af02b2aa052532ddf4eb6a1597eae5_prof);

        
        $__internal_ada221c673e40b39f54533bc8e45b69f50b2ef4c8f6c155302ed986a46ffcdf0->leave($__internal_ada221c673e40b39f54533bc8e45b69f50b2ef4c8f6c155302ed986a46ffcdf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
