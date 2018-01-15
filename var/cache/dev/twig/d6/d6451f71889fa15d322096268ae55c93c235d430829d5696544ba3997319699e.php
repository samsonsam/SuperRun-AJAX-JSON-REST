<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f1e6740d9c59c0fa7a4c947c789fcc0e1a76636386065bb3da959a7d6d6114ad extends Twig_Template
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
        $__internal_bb252ffea482470f0c7f53208a5d9236281e34fbf048ca95e27e720a7128e235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb252ffea482470f0c7f53208a5d9236281e34fbf048ca95e27e720a7128e235->enter($__internal_bb252ffea482470f0c7f53208a5d9236281e34fbf048ca95e27e720a7128e235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_25f9238c764537ca7046436ba604dd35c444ed112d1960e0a79dab2667a26944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f9238c764537ca7046436ba604dd35c444ed112d1960e0a79dab2667a26944->enter($__internal_25f9238c764537ca7046436ba604dd35c444ed112d1960e0a79dab2667a26944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_bb252ffea482470f0c7f53208a5d9236281e34fbf048ca95e27e720a7128e235->leave($__internal_bb252ffea482470f0c7f53208a5d9236281e34fbf048ca95e27e720a7128e235_prof);

        
        $__internal_25f9238c764537ca7046436ba604dd35c444ed112d1960e0a79dab2667a26944->leave($__internal_25f9238c764537ca7046436ba604dd35c444ed112d1960e0a79dab2667a26944_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
