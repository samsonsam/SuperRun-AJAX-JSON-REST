<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a8e261f62f3956fd9514489c08f9ab0ced076c323a96eb3257b6e9c6094a43bf extends Twig_Template
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
        $__internal_84b334a83cc9258626101e983697c8f50b3f643867921242ef12e34c8f13adde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b334a83cc9258626101e983697c8f50b3f643867921242ef12e34c8f13adde->enter($__internal_84b334a83cc9258626101e983697c8f50b3f643867921242ef12e34c8f13adde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_02c4b03d8cf2000c85e980508fad133f4359cbf9041587d1b4369d2f4d0fced6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c4b03d8cf2000c85e980508fad133f4359cbf9041587d1b4369d2f4d0fced6->enter($__internal_02c4b03d8cf2000c85e980508fad133f4359cbf9041587d1b4369d2f4d0fced6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_84b334a83cc9258626101e983697c8f50b3f643867921242ef12e34c8f13adde->leave($__internal_84b334a83cc9258626101e983697c8f50b3f643867921242ef12e34c8f13adde_prof);

        
        $__internal_02c4b03d8cf2000c85e980508fad133f4359cbf9041587d1b4369d2f4d0fced6->leave($__internal_02c4b03d8cf2000c85e980508fad133f4359cbf9041587d1b4369d2f4d0fced6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
