<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_c89d7b9289cd946648c50ad57979a3764ba91c1e45f1df9f361b2d0c7c89d420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e55b346e60fcaa2d2396147850b9b62f495094b2c2f927dd14ad11dc15fab294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55b346e60fcaa2d2396147850b9b62f495094b2c2f927dd14ad11dc15fab294->enter($__internal_e55b346e60fcaa2d2396147850b9b62f495094b2c2f927dd14ad11dc15fab294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_5d446af4e656e9bd3d10070cd971d0f094830e9c183eb79dfd4853240332eb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d446af4e656e9bd3d10070cd971d0f094830e9c183eb79dfd4853240332eb45->enter($__internal_5d446af4e656e9bd3d10070cd971d0f094830e9c183eb79dfd4853240332eb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55b346e60fcaa2d2396147850b9b62f495094b2c2f927dd14ad11dc15fab294->leave($__internal_e55b346e60fcaa2d2396147850b9b62f495094b2c2f927dd14ad11dc15fab294_prof);

        
        $__internal_5d446af4e656e9bd3d10070cd971d0f094830e9c183eb79dfd4853240332eb45->leave($__internal_5d446af4e656e9bd3d10070cd971d0f094830e9c183eb79dfd4853240332eb45_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b7271a93c702b4eb0cda7c8fa2c932f248e5fa5c474dafd3dd7e79f3eed98270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7271a93c702b4eb0cda7c8fa2c932f248e5fa5c474dafd3dd7e79f3eed98270->enter($__internal_b7271a93c702b4eb0cda7c8fa2c932f248e5fa5c474dafd3dd7e79f3eed98270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a55c5db4a184becda2a00930ae4b6fd829d61c2dd55381ecc26609efc1b21fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55c5db4a184becda2a00930ae4b6fd829d61c2dd55381ecc26609efc1b21fec->enter($__internal_a55c5db4a184becda2a00930ae4b6fd829d61c2dd55381ecc26609efc1b21fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a55c5db4a184becda2a00930ae4b6fd829d61c2dd55381ecc26609efc1b21fec->leave($__internal_a55c5db4a184becda2a00930ae4b6fd829d61c2dd55381ecc26609efc1b21fec_prof);

        
        $__internal_b7271a93c702b4eb0cda7c8fa2c932f248e5fa5c474dafd3dd7e79f3eed98270->leave($__internal_b7271a93c702b4eb0cda7c8fa2c932f248e5fa5c474dafd3dd7e79f3eed98270_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5494d7a09be1e7735f641208e97503579c9206ef60de3b1f07bb90d497d0a540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5494d7a09be1e7735f641208e97503579c9206ef60de3b1f07bb90d497d0a540->enter($__internal_5494d7a09be1e7735f641208e97503579c9206ef60de3b1f07bb90d497d0a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_44c4d2d9fdf4ab27730ac30437924da004af23b4e968120d8c1e4015c0369ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c4d2d9fdf4ab27730ac30437924da004af23b4e968120d8c1e4015c0369ddf->enter($__internal_44c4d2d9fdf4ab27730ac30437924da004af23b4e968120d8c1e4015c0369ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_44c4d2d9fdf4ab27730ac30437924da004af23b4e968120d8c1e4015c0369ddf->leave($__internal_44c4d2d9fdf4ab27730ac30437924da004af23b4e968120d8c1e4015c0369ddf_prof);

        
        $__internal_5494d7a09be1e7735f641208e97503579c9206ef60de3b1f07bb90d497d0a540->leave($__internal_5494d7a09be1e7735f641208e97503579c9206ef60de3b1f07bb90d497d0a540_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
