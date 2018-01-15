<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6f8ec4a755137c8f444994696a8d8861c705f395e1cec15ab233614170ca2c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4e1c5e38c410f9bd621bdb6604a68fbaec267634f353b63724cfd21a43fcdf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1c5e38c410f9bd621bdb6604a68fbaec267634f353b63724cfd21a43fcdf03->enter($__internal_4e1c5e38c410f9bd621bdb6604a68fbaec267634f353b63724cfd21a43fcdf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e1d4e5ad4646e606c2cbe2df64f4b3b6645aac926194b9edd17bc1d2a9432db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d4e5ad4646e606c2cbe2df64f4b3b6645aac926194b9edd17bc1d2a9432db9->enter($__internal_e1d4e5ad4646e606c2cbe2df64f4b3b6645aac926194b9edd17bc1d2a9432db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e1c5e38c410f9bd621bdb6604a68fbaec267634f353b63724cfd21a43fcdf03->leave($__internal_4e1c5e38c410f9bd621bdb6604a68fbaec267634f353b63724cfd21a43fcdf03_prof);

        
        $__internal_e1d4e5ad4646e606c2cbe2df64f4b3b6645aac926194b9edd17bc1d2a9432db9->leave($__internal_e1d4e5ad4646e606c2cbe2df64f4b3b6645aac926194b9edd17bc1d2a9432db9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eacdcd3de7aaf7529c8fc6d601a00366c0b40a69f1ec293e89e225a16277b90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacdcd3de7aaf7529c8fc6d601a00366c0b40a69f1ec293e89e225a16277b90b->enter($__internal_eacdcd3de7aaf7529c8fc6d601a00366c0b40a69f1ec293e89e225a16277b90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7745fe34a6344185ee07fc53a6aa839eed1e04a79b375f1a8363333a71dab8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7745fe34a6344185ee07fc53a6aa839eed1e04a79b375f1a8363333a71dab8a3->enter($__internal_7745fe34a6344185ee07fc53a6aa839eed1e04a79b375f1a8363333a71dab8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7745fe34a6344185ee07fc53a6aa839eed1e04a79b375f1a8363333a71dab8a3->leave($__internal_7745fe34a6344185ee07fc53a6aa839eed1e04a79b375f1a8363333a71dab8a3_prof);

        
        $__internal_eacdcd3de7aaf7529c8fc6d601a00366c0b40a69f1ec293e89e225a16277b90b->leave($__internal_eacdcd3de7aaf7529c8fc6d601a00366c0b40a69f1ec293e89e225a16277b90b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aca50f893338c71611fed16eaadd376b196ca36287473ec81ba62388691eb10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca50f893338c71611fed16eaadd376b196ca36287473ec81ba62388691eb10b->enter($__internal_aca50f893338c71611fed16eaadd376b196ca36287473ec81ba62388691eb10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ba23408e618fedda2d4e11338c900c7ffb5dec7be4908a7b486625416352782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba23408e618fedda2d4e11338c900c7ffb5dec7be4908a7b486625416352782->enter($__internal_9ba23408e618fedda2d4e11338c900c7ffb5dec7be4908a7b486625416352782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9ba23408e618fedda2d4e11338c900c7ffb5dec7be4908a7b486625416352782->leave($__internal_9ba23408e618fedda2d4e11338c900c7ffb5dec7be4908a7b486625416352782_prof);

        
        $__internal_aca50f893338c71611fed16eaadd376b196ca36287473ec81ba62388691eb10b->leave($__internal_aca50f893338c71611fed16eaadd376b196ca36287473ec81ba62388691eb10b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f683d3799304047eeaa63dc2e200d7a10a39bf1efc44ac6e926d0e531f02b55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f683d3799304047eeaa63dc2e200d7a10a39bf1efc44ac6e926d0e531f02b55a->enter($__internal_f683d3799304047eeaa63dc2e200d7a10a39bf1efc44ac6e926d0e531f02b55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aed0a3d2374f73260b455ebb284136224afab9c36a5419ab678639ce2b473a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed0a3d2374f73260b455ebb284136224afab9c36a5419ab678639ce2b473a94->enter($__internal_aed0a3d2374f73260b455ebb284136224afab9c36a5419ab678639ce2b473a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_aed0a3d2374f73260b455ebb284136224afab9c36a5419ab678639ce2b473a94->leave($__internal_aed0a3d2374f73260b455ebb284136224afab9c36a5419ab678639ce2b473a94_prof);

        
        $__internal_f683d3799304047eeaa63dc2e200d7a10a39bf1efc44ac6e926d0e531f02b55a->leave($__internal_f683d3799304047eeaa63dc2e200d7a10a39bf1efc44ac6e926d0e531f02b55a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
