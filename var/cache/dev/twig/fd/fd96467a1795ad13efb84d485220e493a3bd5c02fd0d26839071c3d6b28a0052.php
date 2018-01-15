<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d6de40c90560c0ab58bd069e7a86abc14847e5d08b8d4f2d5c3746d22f6353fe extends Twig_Template
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
        $__internal_5367d13e3dac27e9a9500bf702fc9ef35ed370ad3bfe7e406d85b69d3ba95e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5367d13e3dac27e9a9500bf702fc9ef35ed370ad3bfe7e406d85b69d3ba95e4f->enter($__internal_5367d13e3dac27e9a9500bf702fc9ef35ed370ad3bfe7e406d85b69d3ba95e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_afbaee6a744cdb2cd4e123a2967c1711f1dc900760bba56d4edda77e7a12b945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afbaee6a744cdb2cd4e123a2967c1711f1dc900760bba56d4edda77e7a12b945->enter($__internal_afbaee6a744cdb2cd4e123a2967c1711f1dc900760bba56d4edda77e7a12b945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_5367d13e3dac27e9a9500bf702fc9ef35ed370ad3bfe7e406d85b69d3ba95e4f->leave($__internal_5367d13e3dac27e9a9500bf702fc9ef35ed370ad3bfe7e406d85b69d3ba95e4f_prof);

        
        $__internal_afbaee6a744cdb2cd4e123a2967c1711f1dc900760bba56d4edda77e7a12b945->leave($__internal_afbaee6a744cdb2cd4e123a2967c1711f1dc900760bba56d4edda77e7a12b945_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
