<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21df51beffa5c9989307edcf6b45b1670897e8c3c4f0f18bea58e7d1934332be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e6e7c59fcb881849e751c9bf275093d6d4de71a949591e60ecc472325eba1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6e7c59fcb881849e751c9bf275093d6d4de71a949591e60ecc472325eba1c4->enter($__internal_7e6e7c59fcb881849e751c9bf275093d6d4de71a949591e60ecc472325eba1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a154d9d850ceb445dc9f89980da6ad3da41d1a7966f86518735be65a907a01e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a154d9d850ceb445dc9f89980da6ad3da41d1a7966f86518735be65a907a01e5->enter($__internal_a154d9d850ceb445dc9f89980da6ad3da41d1a7966f86518735be65a907a01e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e6e7c59fcb881849e751c9bf275093d6d4de71a949591e60ecc472325eba1c4->leave($__internal_7e6e7c59fcb881849e751c9bf275093d6d4de71a949591e60ecc472325eba1c4_prof);

        
        $__internal_a154d9d850ceb445dc9f89980da6ad3da41d1a7966f86518735be65a907a01e5->leave($__internal_a154d9d850ceb445dc9f89980da6ad3da41d1a7966f86518735be65a907a01e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b6b9cd6238eff340debf00763428d6735f9ed57692e65a65efe53c4a0c25760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6b9cd6238eff340debf00763428d6735f9ed57692e65a65efe53c4a0c25760->enter($__internal_5b6b9cd6238eff340debf00763428d6735f9ed57692e65a65efe53c4a0c25760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a67332aa248c19546756194429a9e8bb444a50e5c4537881956fc37520d7773c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67332aa248c19546756194429a9e8bb444a50e5c4537881956fc37520d7773c->enter($__internal_a67332aa248c19546756194429a9e8bb444a50e5c4537881956fc37520d7773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a67332aa248c19546756194429a9e8bb444a50e5c4537881956fc37520d7773c->leave($__internal_a67332aa248c19546756194429a9e8bb444a50e5c4537881956fc37520d7773c_prof);

        
        $__internal_5b6b9cd6238eff340debf00763428d6735f9ed57692e65a65efe53c4a0c25760->leave($__internal_5b6b9cd6238eff340debf00763428d6735f9ed57692e65a65efe53c4a0c25760_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_968360bbed1423890683459a1f6fcc639b712f53984c125a2d71f84b124c9576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968360bbed1423890683459a1f6fcc639b712f53984c125a2d71f84b124c9576->enter($__internal_968360bbed1423890683459a1f6fcc639b712f53984c125a2d71f84b124c9576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e1e7385bf605004c638405f0f19b252fceac338f1c9e3f357aba7e0fac69bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1e7385bf605004c638405f0f19b252fceac338f1c9e3f357aba7e0fac69bed->enter($__internal_4e1e7385bf605004c638405f0f19b252fceac338f1c9e3f357aba7e0fac69bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e1e7385bf605004c638405f0f19b252fceac338f1c9e3f357aba7e0fac69bed->leave($__internal_4e1e7385bf605004c638405f0f19b252fceac338f1c9e3f357aba7e0fac69bed_prof);

        
        $__internal_968360bbed1423890683459a1f6fcc639b712f53984c125a2d71f84b124c9576->leave($__internal_968360bbed1423890683459a1f6fcc639b712f53984c125a2d71f84b124c9576_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_429276c3aadeb451d542b0c27ed14c6a6bc7665e39949c827ef4da46bd7da071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429276c3aadeb451d542b0c27ed14c6a6bc7665e39949c827ef4da46bd7da071->enter($__internal_429276c3aadeb451d542b0c27ed14c6a6bc7665e39949c827ef4da46bd7da071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d03b7db0a36031d318edaee82c7a3e8ed67b2a41e62d61dad18058f0f4a1dc08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03b7db0a36031d318edaee82c7a3e8ed67b2a41e62d61dad18058f0f4a1dc08->enter($__internal_d03b7db0a36031d318edaee82c7a3e8ed67b2a41e62d61dad18058f0f4a1dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d03b7db0a36031d318edaee82c7a3e8ed67b2a41e62d61dad18058f0f4a1dc08->leave($__internal_d03b7db0a36031d318edaee82c7a3e8ed67b2a41e62d61dad18058f0f4a1dc08_prof);

        
        $__internal_429276c3aadeb451d542b0c27ed14c6a6bc7665e39949c827ef4da46bd7da071->leave($__internal_429276c3aadeb451d542b0c27ed14c6a6bc7665e39949c827ef4da46bd7da071_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
