<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_050e98605b3b580ee6f395fd38494be2a2336913ebddeaa1676b5fe25f22dafc extends Twig_Template
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
        $__internal_01151d4e84911097de3a66a97dc2572c6e48b0d93ef27adeeca3c6c016690e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01151d4e84911097de3a66a97dc2572c6e48b0d93ef27adeeca3c6c016690e7c->enter($__internal_01151d4e84911097de3a66a97dc2572c6e48b0d93ef27adeeca3c6c016690e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f5a953fc5217ff8e6294ab451f5ed0a92f725d3e5e2b6f539ae6233b339166d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a953fc5217ff8e6294ab451f5ed0a92f725d3e5e2b6f539ae6233b339166d6->enter($__internal_f5a953fc5217ff8e6294ab451f5ed0a92f725d3e5e2b6f539ae6233b339166d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_01151d4e84911097de3a66a97dc2572c6e48b0d93ef27adeeca3c6c016690e7c->leave($__internal_01151d4e84911097de3a66a97dc2572c6e48b0d93ef27adeeca3c6c016690e7c_prof);

        
        $__internal_f5a953fc5217ff8e6294ab451f5ed0a92f725d3e5e2b6f539ae6233b339166d6->leave($__internal_f5a953fc5217ff8e6294ab451f5ed0a92f725d3e5e2b6f539ae6233b339166d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
