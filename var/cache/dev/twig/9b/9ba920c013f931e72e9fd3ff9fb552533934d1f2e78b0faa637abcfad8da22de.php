<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0c730d6ed066f16e3efe1115ce6ee573e6e25bda335e6ac608160d977fdcc4d5 extends Twig_Template
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
        $__internal_7d1f26f72e698faf9af79402bd3ad335808deb7122b25b9739c488607fe67b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1f26f72e698faf9af79402bd3ad335808deb7122b25b9739c488607fe67b86->enter($__internal_7d1f26f72e698faf9af79402bd3ad335808deb7122b25b9739c488607fe67b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_f2264609900060c7b809a89b59642682a4b41cd2c35f65f4fddc44fe35732b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2264609900060c7b809a89b59642682a4b41cd2c35f65f4fddc44fe35732b31->enter($__internal_f2264609900060c7b809a89b59642682a4b41cd2c35f65f4fddc44fe35732b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_7d1f26f72e698faf9af79402bd3ad335808deb7122b25b9739c488607fe67b86->leave($__internal_7d1f26f72e698faf9af79402bd3ad335808deb7122b25b9739c488607fe67b86_prof);

        
        $__internal_f2264609900060c7b809a89b59642682a4b41cd2c35f65f4fddc44fe35732b31->leave($__internal_f2264609900060c7b809a89b59642682a4b41cd2c35f65f4fddc44fe35732b31_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
