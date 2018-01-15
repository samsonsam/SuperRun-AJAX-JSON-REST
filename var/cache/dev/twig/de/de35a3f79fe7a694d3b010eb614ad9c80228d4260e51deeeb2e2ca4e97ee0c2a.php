<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d8d77ecc2ac8378c58aca14be40ef41c5d0a6618ed01d5a0a62fa99790e2c435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a56ba69b0c538acd0b2741a8fdd2cccdf275e4f00cc202311330273860929898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56ba69b0c538acd0b2741a8fdd2cccdf275e4f00cc202311330273860929898->enter($__internal_a56ba69b0c538acd0b2741a8fdd2cccdf275e4f00cc202311330273860929898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a149bdbbabb521047d1f96248cff50cc4a1971f3f8eb21a1bbb81f48680d7d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a149bdbbabb521047d1f96248cff50cc4a1971f3f8eb21a1bbb81f48680d7d13->enter($__internal_a149bdbbabb521047d1f96248cff50cc4a1971f3f8eb21a1bbb81f48680d7d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a56ba69b0c538acd0b2741a8fdd2cccdf275e4f00cc202311330273860929898->leave($__internal_a56ba69b0c538acd0b2741a8fdd2cccdf275e4f00cc202311330273860929898_prof);

        
        $__internal_a149bdbbabb521047d1f96248cff50cc4a1971f3f8eb21a1bbb81f48680d7d13->leave($__internal_a149bdbbabb521047d1f96248cff50cc4a1971f3f8eb21a1bbb81f48680d7d13_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e152da913e03d66fdcd104246e2066ec527556e7fbe588931066de720a915e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e152da913e03d66fdcd104246e2066ec527556e7fbe588931066de720a915e2->enter($__internal_5e152da913e03d66fdcd104246e2066ec527556e7fbe588931066de720a915e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39e2c1202dc5fad6917689aa619f75a01e62eea6cc2a7d18c151980bea4b5a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e2c1202dc5fad6917689aa619f75a01e62eea6cc2a7d18c151980bea4b5a4e->enter($__internal_39e2c1202dc5fad6917689aa619f75a01e62eea6cc2a7d18c151980bea4b5a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39e2c1202dc5fad6917689aa619f75a01e62eea6cc2a7d18c151980bea4b5a4e->leave($__internal_39e2c1202dc5fad6917689aa619f75a01e62eea6cc2a7d18c151980bea4b5a4e_prof);

        
        $__internal_5e152da913e03d66fdcd104246e2066ec527556e7fbe588931066de720a915e2->leave($__internal_5e152da913e03d66fdcd104246e2066ec527556e7fbe588931066de720a915e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
