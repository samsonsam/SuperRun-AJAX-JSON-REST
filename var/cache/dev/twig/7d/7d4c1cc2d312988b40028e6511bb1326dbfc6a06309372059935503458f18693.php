<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_08299869abb49c102869ad090e90bf4d1ff4fddf5817dfa1ed39295b69409e8f extends Twig_Template
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
        $__internal_830584e2bbcdccb3eea7a1b2d8a353c413e8e07a0bc999b77824056dd906d840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830584e2bbcdccb3eea7a1b2d8a353c413e8e07a0bc999b77824056dd906d840->enter($__internal_830584e2bbcdccb3eea7a1b2d8a353c413e8e07a0bc999b77824056dd906d840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f9c08d66e5915346cae0387ad4cb5172878b8b95d3667a52e32ebd96b41db4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c08d66e5915346cae0387ad4cb5172878b8b95d3667a52e32ebd96b41db4f6->enter($__internal_f9c08d66e5915346cae0387ad4cb5172878b8b95d3667a52e32ebd96b41db4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_830584e2bbcdccb3eea7a1b2d8a353c413e8e07a0bc999b77824056dd906d840->leave($__internal_830584e2bbcdccb3eea7a1b2d8a353c413e8e07a0bc999b77824056dd906d840_prof);

        
        $__internal_f9c08d66e5915346cae0387ad4cb5172878b8b95d3667a52e32ebd96b41db4f6->leave($__internal_f9c08d66e5915346cae0387ad4cb5172878b8b95d3667a52e32ebd96b41db4f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
