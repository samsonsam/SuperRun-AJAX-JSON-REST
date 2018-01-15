<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_39e258140537ce1f31e47fbfaf1f4181f5d7aab396047bb1dba8e11823cd2a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e602e0bc72c85f58d90b7089eccf1def2a26d16754386f852941aef2f5d5dc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e602e0bc72c85f58d90b7089eccf1def2a26d16754386f852941aef2f5d5dc3d->enter($__internal_e602e0bc72c85f58d90b7089eccf1def2a26d16754386f852941aef2f5d5dc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_9fb2d6ca445e80766e0e5bf88725cb6188c4ae95225e265de1691ab893362e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb2d6ca445e80766e0e5bf88725cb6188c4ae95225e265de1691ab893362e01->enter($__internal_9fb2d6ca445e80766e0e5bf88725cb6188c4ae95225e265de1691ab893362e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e602e0bc72c85f58d90b7089eccf1def2a26d16754386f852941aef2f5d5dc3d->leave($__internal_e602e0bc72c85f58d90b7089eccf1def2a26d16754386f852941aef2f5d5dc3d_prof);

        
        $__internal_9fb2d6ca445e80766e0e5bf88725cb6188c4ae95225e265de1691ab893362e01->leave($__internal_9fb2d6ca445e80766e0e5bf88725cb6188c4ae95225e265de1691ab893362e01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cac5ca5524d0cef811d0545ee54f8ee8d37ae1286d7924abdfbd2ef91a0b0f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac5ca5524d0cef811d0545ee54f8ee8d37ae1286d7924abdfbd2ef91a0b0f9d->enter($__internal_cac5ca5524d0cef811d0545ee54f8ee8d37ae1286d7924abdfbd2ef91a0b0f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d84851988795d5dab9e2446826ac2e0404041d6df6ff43d11150308e179d128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d84851988795d5dab9e2446826ac2e0404041d6df6ff43d11150308e179d128->enter($__internal_9d84851988795d5dab9e2446826ac2e0404041d6df6ff43d11150308e179d128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d84851988795d5dab9e2446826ac2e0404041d6df6ff43d11150308e179d128->leave($__internal_9d84851988795d5dab9e2446826ac2e0404041d6df6ff43d11150308e179d128_prof);

        
        $__internal_cac5ca5524d0cef811d0545ee54f8ee8d37ae1286d7924abdfbd2ef91a0b0f9d->leave($__internal_cac5ca5524d0cef811d0545ee54f8ee8d37ae1286d7924abdfbd2ef91a0b0f9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5116daa8a5b67c571e391ee7730f4b482795652f1e9a7f4ea85ec4f5ed50a925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5116daa8a5b67c571e391ee7730f4b482795652f1e9a7f4ea85ec4f5ed50a925->enter($__internal_5116daa8a5b67c571e391ee7730f4b482795652f1e9a7f4ea85ec4f5ed50a925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b00d3fec7c67ba564c33d959ccc6c4769e4b9d492ec8496cf90df9f1ddd86c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b00d3fec7c67ba564c33d959ccc6c4769e4b9d492ec8496cf90df9f1ddd86c8->enter($__internal_5b00d3fec7c67ba564c33d959ccc6c4769e4b9d492ec8496cf90df9f1ddd86c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5b00d3fec7c67ba564c33d959ccc6c4769e4b9d492ec8496cf90df9f1ddd86c8->leave($__internal_5b00d3fec7c67ba564c33d959ccc6c4769e4b9d492ec8496cf90df9f1ddd86c8_prof);

        
        $__internal_5116daa8a5b67c571e391ee7730f4b482795652f1e9a7f4ea85ec4f5ed50a925->leave($__internal_5116daa8a5b67c571e391ee7730f4b482795652f1e9a7f4ea85ec4f5ed50a925_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
