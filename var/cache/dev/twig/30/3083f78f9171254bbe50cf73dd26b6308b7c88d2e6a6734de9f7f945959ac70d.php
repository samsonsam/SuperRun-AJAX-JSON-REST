<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3e6e1da92babae78f27cc8f81e457398b4596d3c8b522640cf5cb89edf4fba7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_367c3ee8cfd9a59d727a7ab66de2b87c911b5851aebda72495b0c5522ea7b76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367c3ee8cfd9a59d727a7ab66de2b87c911b5851aebda72495b0c5522ea7b76f->enter($__internal_367c3ee8cfd9a59d727a7ab66de2b87c911b5851aebda72495b0c5522ea7b76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f29598ab67196906670899972912b54ec585ffe0cc44462119bab4c3924cb381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29598ab67196906670899972912b54ec585ffe0cc44462119bab4c3924cb381->enter($__internal_f29598ab67196906670899972912b54ec585ffe0cc44462119bab4c3924cb381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367c3ee8cfd9a59d727a7ab66de2b87c911b5851aebda72495b0c5522ea7b76f->leave($__internal_367c3ee8cfd9a59d727a7ab66de2b87c911b5851aebda72495b0c5522ea7b76f_prof);

        
        $__internal_f29598ab67196906670899972912b54ec585ffe0cc44462119bab4c3924cb381->leave($__internal_f29598ab67196906670899972912b54ec585ffe0cc44462119bab4c3924cb381_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad1f7d98bee0f9220a8175500dce71f5420736cdef006894dbb65d548395c208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1f7d98bee0f9220a8175500dce71f5420736cdef006894dbb65d548395c208->enter($__internal_ad1f7d98bee0f9220a8175500dce71f5420736cdef006894dbb65d548395c208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_915b49f787d84608d0af3a6c9d59a36b1b8c47b6309c90206bfff49212ad97c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915b49f787d84608d0af3a6c9d59a36b1b8c47b6309c90206bfff49212ad97c5->enter($__internal_915b49f787d84608d0af3a6c9d59a36b1b8c47b6309c90206bfff49212ad97c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_915b49f787d84608d0af3a6c9d59a36b1b8c47b6309c90206bfff49212ad97c5->leave($__internal_915b49f787d84608d0af3a6c9d59a36b1b8c47b6309c90206bfff49212ad97c5_prof);

        
        $__internal_ad1f7d98bee0f9220a8175500dce71f5420736cdef006894dbb65d548395c208->leave($__internal_ad1f7d98bee0f9220a8175500dce71f5420736cdef006894dbb65d548395c208_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
