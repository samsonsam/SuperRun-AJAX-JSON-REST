<?php

/* default/index.html.twig */
class __TwigTemplate_d55f8e3fee4ca47dab3b81c8cac3c8c2825dcaa872a6b8ce0ab46b89905ab4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e1ce271f4dfefa63d6cec42f66da4ede5aa306ef489500059eb655ed056eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e1ce271f4dfefa63d6cec42f66da4ede5aa306ef489500059eb655ed056eae->enter($__internal_35e1ce271f4dfefa63d6cec42f66da4ede5aa306ef489500059eb655ed056eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_8950a154aa8c824dd71eaba60db45ae89202ba899cf2898bca4b1a6186d60a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8950a154aa8c824dd71eaba60db45ae89202ba899cf2898bca4b1a6186d60a6c->enter($__internal_8950a154aa8c824dd71eaba60db45ae89202ba899cf2898bca4b1a6186d60a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 2
        $context["page_title"] = "Index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e1ce271f4dfefa63d6cec42f66da4ede5aa306ef489500059eb655ed056eae->leave($__internal_35e1ce271f4dfefa63d6cec42f66da4ede5aa306ef489500059eb655ed056eae_prof);

        
        $__internal_8950a154aa8c824dd71eaba60db45ae89202ba899cf2898bca4b1a6186d60a6c->leave($__internal_8950a154aa8c824dd71eaba60db45ae89202ba899cf2898bca4b1a6186d60a6c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_443c992b11e5ce99309b25beb51f6c1b6b31b82200f9b686ee91231272cf46b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443c992b11e5ce99309b25beb51f6c1b6b31b82200f9b686ee91231272cf46b0->enter($__internal_443c992b11e5ce99309b25beb51f6c1b6b31b82200f9b686ee91231272cf46b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70a37227736c561e76905302a7b16b6c2528967fec93cf018ffe866558310cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a37227736c561e76905302a7b16b6c2528967fec93cf018ffe866558310cec->enter($__internal_70a37227736c561e76905302a7b16b6c2528967fec93cf018ffe866558310cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"mt-1\">
            <h2>Willkommen auf <strong>SuperRun</strong>.</h2>
            <p class=\"lead\">Nutzen Sie dieses Lauftagebuch um einen Überblick ihrer Aktivitaten zu bekommen.</p>
            <p>Hier einen <a href=\"";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
            echo "
";
        } else {
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "
";
        }
        // line 13
        echo "\">Eintrag</a> erstellen.</p>
        </div>
    </div>
";
        
        $__internal_70a37227736c561e76905302a7b16b6c2528967fec93cf018ffe866558310cec->leave($__internal_70a37227736c561e76905302a7b16b6c2528967fec93cf018ffe866558310cec_prof);

        
        $__internal_443c992b11e5ce99309b25beb51f6c1b6b31b82200f9b686ee91231272cf46b0->leave($__internal_443c992b11e5ce99309b25beb51f6c1b6b31b82200f9b686ee91231272cf46b0_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  65 => 12,  60 => 10,  58 => 9,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% set page_title = 'Index' %}

{% block body %}
    <div class=\"container\">
        <div class=\"mt-1\">
            <h2>Willkommen auf <strong>SuperRun</strong>.</h2>
            <p class=\"lead\">Nutzen Sie dieses Lauftagebuch um einen Überblick ihrer Aktivitaten zu bekommen.</p>
            <p>Hier einen <a href=\"{% if is_granted('ROLE_USER') %}
{{ path('profile', {'id': app.user.id}) }}
{% else %}
{{ path('login') }}
{% endif %}\">Eintrag</a> erstellen.</p>
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/default/index.html.twig");
    }
}
