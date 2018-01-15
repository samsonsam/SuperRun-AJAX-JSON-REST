<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_75827c7e95fa6d055af08885e7708b29740915c8fe4d6df8795256eea28c2f24 extends Twig_Template
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
        $__internal_f5598af2f1cb6a0405c01cbd1a32afb1e74816b9c9e7eb64c76f79fecc8a2f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5598af2f1cb6a0405c01cbd1a32afb1e74816b9c9e7eb64c76f79fecc8a2f69->enter($__internal_f5598af2f1cb6a0405c01cbd1a32afb1e74816b9c9e7eb64c76f79fecc8a2f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0eda6a5d2dbfcdde654e75da280271b910b2be0398d7ab42416c00334f0c9d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eda6a5d2dbfcdde654e75da280271b910b2be0398d7ab42416c00334f0c9d93->enter($__internal_0eda6a5d2dbfcdde654e75da280271b910b2be0398d7ab42416c00334f0c9d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f5598af2f1cb6a0405c01cbd1a32afb1e74816b9c9e7eb64c76f79fecc8a2f69->leave($__internal_f5598af2f1cb6a0405c01cbd1a32afb1e74816b9c9e7eb64c76f79fecc8a2f69_prof);

        
        $__internal_0eda6a5d2dbfcdde654e75da280271b910b2be0398d7ab42416c00334f0c9d93->leave($__internal_0eda6a5d2dbfcdde654e75da280271b910b2be0398d7ab42416c00334f0c9d93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
