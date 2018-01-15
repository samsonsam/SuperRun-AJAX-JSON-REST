<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_48b571011ddf45c33cf995e2cf0de3ba31982203c57e95491e99d4276891ef99 extends Twig_Template
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
        $__internal_04709232a6f21f8fd56a08f7d4a5653b6657e21d363f00d73cf0ab21793fb2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04709232a6f21f8fd56a08f7d4a5653b6657e21d363f00d73cf0ab21793fb2e9->enter($__internal_04709232a6f21f8fd56a08f7d4a5653b6657e21d363f00d73cf0ab21793fb2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_e81de2241b724d3a68f5f8ddece6305a6b0c9454c3471cef741b69b45d676f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81de2241b724d3a68f5f8ddece6305a6b0c9454c3471cef741b69b45d676f33->enter($__internal_e81de2241b724d3a68f5f8ddece6305a6b0c9454c3471cef741b69b45d676f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_04709232a6f21f8fd56a08f7d4a5653b6657e21d363f00d73cf0ab21793fb2e9->leave($__internal_04709232a6f21f8fd56a08f7d4a5653b6657e21d363f00d73cf0ab21793fb2e9_prof);

        
        $__internal_e81de2241b724d3a68f5f8ddece6305a6b0c9454c3471cef741b69b45d676f33->leave($__internal_e81de2241b724d3a68f5f8ddece6305a6b0c9454c3471cef741b69b45d676f33_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
