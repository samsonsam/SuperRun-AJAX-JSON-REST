<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_66b27db179081d7cf6f459f93381d584bc668d134e60a85f1f5c6e016c87e512 extends Twig_Template
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
        $__internal_1d80c4ee33663153ddfc444e069e6f3645a43887140d533a54e04affc9146c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d80c4ee33663153ddfc444e069e6f3645a43887140d533a54e04affc9146c55->enter($__internal_1d80c4ee33663153ddfc444e069e6f3645a43887140d533a54e04affc9146c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_e650862e0f2d7038855ce4865e0b7ce88be0f0b4a1d7b3af5796c45032843f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e650862e0f2d7038855ce4865e0b7ce88be0f0b4a1d7b3af5796c45032843f3e->enter($__internal_e650862e0f2d7038855ce4865e0b7ce88be0f0b4a1d7b3af5796c45032843f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_1d80c4ee33663153ddfc444e069e6f3645a43887140d533a54e04affc9146c55->leave($__internal_1d80c4ee33663153ddfc444e069e6f3645a43887140d533a54e04affc9146c55_prof);

        
        $__internal_e650862e0f2d7038855ce4865e0b7ce88be0f0b4a1d7b3af5796c45032843f3e->leave($__internal_e650862e0f2d7038855ce4865e0b7ce88be0f0b4a1d7b3af5796c45032843f3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
