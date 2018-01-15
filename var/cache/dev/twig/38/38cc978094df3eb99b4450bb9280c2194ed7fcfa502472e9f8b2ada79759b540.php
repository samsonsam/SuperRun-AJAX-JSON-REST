<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e7fff899e2bcbf947aa1114a3ad9bc3ad58ff58260400d147a37fd3c17525609 extends Twig_Template
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
        $__internal_9847dc248ad77d620014496c538bc5e1c16b1515dd57724acdff2651d1d30190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9847dc248ad77d620014496c538bc5e1c16b1515dd57724acdff2651d1d30190->enter($__internal_9847dc248ad77d620014496c538bc5e1c16b1515dd57724acdff2651d1d30190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_d71c60abed1971184c2836accb3e0db740dd4350275a88999d7623bc18581af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71c60abed1971184c2836accb3e0db740dd4350275a88999d7623bc18581af9->enter($__internal_d71c60abed1971184c2836accb3e0db740dd4350275a88999d7623bc18581af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_9847dc248ad77d620014496c538bc5e1c16b1515dd57724acdff2651d1d30190->leave($__internal_9847dc248ad77d620014496c538bc5e1c16b1515dd57724acdff2651d1d30190_prof);

        
        $__internal_d71c60abed1971184c2836accb3e0db740dd4350275a88999d7623bc18581af9->leave($__internal_d71c60abed1971184c2836accb3e0db740dd4350275a88999d7623bc18581af9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
