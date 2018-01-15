<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e3cb4e950a8e91329120561411ab38752d2f8b1138673dfa06a1075141f4d541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_557adde8786cf5698eff4a11b660373b9bf4ccf888a05ce2365e8b9aa08c39f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557adde8786cf5698eff4a11b660373b9bf4ccf888a05ce2365e8b9aa08c39f9->enter($__internal_557adde8786cf5698eff4a11b660373b9bf4ccf888a05ce2365e8b9aa08c39f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_560c04e20679446ccbb4e080d98c1aa94abfd342f5e761d442c8367cde0c7adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560c04e20679446ccbb4e080d98c1aa94abfd342f5e761d442c8367cde0c7adc->enter($__internal_560c04e20679446ccbb4e080d98c1aa94abfd342f5e761d442c8367cde0c7adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_557adde8786cf5698eff4a11b660373b9bf4ccf888a05ce2365e8b9aa08c39f9->leave($__internal_557adde8786cf5698eff4a11b660373b9bf4ccf888a05ce2365e8b9aa08c39f9_prof);

        
        $__internal_560c04e20679446ccbb4e080d98c1aa94abfd342f5e761d442c8367cde0c7adc->leave($__internal_560c04e20679446ccbb4e080d98c1aa94abfd342f5e761d442c8367cde0c7adc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0af3dc2815cc0b1d32a8b194c147f0c6f8ed3d10a199026f352c74d043738bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af3dc2815cc0b1d32a8b194c147f0c6f8ed3d10a199026f352c74d043738bef->enter($__internal_0af3dc2815cc0b1d32a8b194c147f0c6f8ed3d10a199026f352c74d043738bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_de4fdd60a8780abb5f32fed91b61d5ab40f62fbfe18f976a686f11f3900370a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4fdd60a8780abb5f32fed91b61d5ab40f62fbfe18f976a686f11f3900370a5->enter($__internal_de4fdd60a8780abb5f32fed91b61d5ab40f62fbfe18f976a686f11f3900370a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_de4fdd60a8780abb5f32fed91b61d5ab40f62fbfe18f976a686f11f3900370a5->leave($__internal_de4fdd60a8780abb5f32fed91b61d5ab40f62fbfe18f976a686f11f3900370a5_prof);

        
        $__internal_0af3dc2815cc0b1d32a8b194c147f0c6f8ed3d10a199026f352c74d043738bef->leave($__internal_0af3dc2815cc0b1d32a8b194c147f0c6f8ed3d10a199026f352c74d043738bef_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_69643372850f640ce3ae7970d619521c3f66cd92276a4bbd11a247b0d7b5ddb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69643372850f640ce3ae7970d619521c3f66cd92276a4bbd11a247b0d7b5ddb1->enter($__internal_69643372850f640ce3ae7970d619521c3f66cd92276a4bbd11a247b0d7b5ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65569f056b518425d0fb9be0cc03d7cf3a101d38c6f8a33f39f5b8073dd647b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65569f056b518425d0fb9be0cc03d7cf3a101d38c6f8a33f39f5b8073dd647b4->enter($__internal_65569f056b518425d0fb9be0cc03d7cf3a101d38c6f8a33f39f5b8073dd647b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_65569f056b518425d0fb9be0cc03d7cf3a101d38c6f8a33f39f5b8073dd647b4->leave($__internal_65569f056b518425d0fb9be0cc03d7cf3a101d38c6f8a33f39f5b8073dd647b4_prof);

        
        $__internal_69643372850f640ce3ae7970d619521c3f66cd92276a4bbd11a247b0d7b5ddb1->leave($__internal_69643372850f640ce3ae7970d619521c3f66cd92276a4bbd11a247b0d7b5ddb1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_07aa0bbb01c25f81a6ce730eea12f66bbd0ebc473c513cbab9ea96595e2abb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07aa0bbb01c25f81a6ce730eea12f66bbd0ebc473c513cbab9ea96595e2abb0d->enter($__internal_07aa0bbb01c25f81a6ce730eea12f66bbd0ebc473c513cbab9ea96595e2abb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52ecb411302bf7ce47dde3d58a1566bd71087caefe73d01ab3f6e834e5e08a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ecb411302bf7ce47dde3d58a1566bd71087caefe73d01ab3f6e834e5e08a84->enter($__internal_52ecb411302bf7ce47dde3d58a1566bd71087caefe73d01ab3f6e834e5e08a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_52ecb411302bf7ce47dde3d58a1566bd71087caefe73d01ab3f6e834e5e08a84->leave($__internal_52ecb411302bf7ce47dde3d58a1566bd71087caefe73d01ab3f6e834e5e08a84_prof);

        
        $__internal_07aa0bbb01c25f81a6ce730eea12f66bbd0ebc473c513cbab9ea96595e2abb0d->leave($__internal_07aa0bbb01c25f81a6ce730eea12f66bbd0ebc473c513cbab9ea96595e2abb0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
