<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e6261a04717b0d1177965f0b15c8c4ae886a99aca3fee3a0a8a97b7332924467 extends Twig_Template
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
        $__internal_c60c34e7a1db05aacf9fb0375f11b68a67cdd84795db0ba032ba8211c0316163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60c34e7a1db05aacf9fb0375f11b68a67cdd84795db0ba032ba8211c0316163->enter($__internal_c60c34e7a1db05aacf9fb0375f11b68a67cdd84795db0ba032ba8211c0316163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2fd2b539236eade7c61cd8e568347f2d8e4051379a3ea06b90994234b0e40ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd2b539236eade7c61cd8e568347f2d8e4051379a3ea06b90994234b0e40ee5->enter($__internal_2fd2b539236eade7c61cd8e568347f2d8e4051379a3ea06b90994234b0e40ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c60c34e7a1db05aacf9fb0375f11b68a67cdd84795db0ba032ba8211c0316163->leave($__internal_c60c34e7a1db05aacf9fb0375f11b68a67cdd84795db0ba032ba8211c0316163_prof);

        
        $__internal_2fd2b539236eade7c61cd8e568347f2d8e4051379a3ea06b90994234b0e40ee5->leave($__internal_2fd2b539236eade7c61cd8e568347f2d8e4051379a3ea06b90994234b0e40ee5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
