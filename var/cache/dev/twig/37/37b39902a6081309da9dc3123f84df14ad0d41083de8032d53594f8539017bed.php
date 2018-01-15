<?php

/* detail_view/detailview.html.twig */
class __TwigTemplate_b7f72e564290516b8be8443b3569dd2a542b4ee969e6d030bf97ddc1de32d747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "detail_view/detailview.html.twig", 1);
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
        $__internal_656460abf6110339a50504ca571e92776ee24d4cb1d4788285912c3178f46e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656460abf6110339a50504ca571e92776ee24d4cb1d4788285912c3178f46e36->enter($__internal_656460abf6110339a50504ca571e92776ee24d4cb1d4788285912c3178f46e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detail_view/detailview.html.twig"));

        $__internal_492731ad1f7c643574ffed78063df1ab625181820353bb836bf081ad5b540657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492731ad1f7c643574ffed78063df1ab625181820353bb836bf081ad5b540657->enter($__internal_492731ad1f7c643574ffed78063df1ab625181820353bb836bf081ad5b540657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detail_view/detailview.html.twig"));

        // line 2
        $context["page_title"] = "Detail View";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656460abf6110339a50504ca571e92776ee24d4cb1d4788285912c3178f46e36->leave($__internal_656460abf6110339a50504ca571e92776ee24d4cb1d4788285912c3178f46e36_prof);

        
        $__internal_492731ad1f7c643574ffed78063df1ab625181820353bb836bf081ad5b540657->leave($__internal_492731ad1f7c643574ffed78063df1ab625181820353bb836bf081ad5b540657_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa75466e1824143e2aa5a16b11fa78b3035940621572238dac815c067a312108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa75466e1824143e2aa5a16b11fa78b3035940621572238dac815c067a312108->enter($__internal_fa75466e1824143e2aa5a16b11fa78b3035940621572238dac815c067a312108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2853018e023540d8172692583ea014536b286815f7b2c9b3dda9832be0cb15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2853018e023540d8172692583ea014536b286815f7b2c9b3dda9832be0cb15d->enter($__internal_e2853018e023540d8172692583ea014536b286815f7b2c9b3dda9832be0cb15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new Twig_Error_Runtime('Variable "page_title" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>
";
        
        $__internal_e2853018e023540d8172692583ea014536b286815f7b2c9b3dda9832be0cb15d->leave($__internal_e2853018e023540d8172692583ea014536b286815f7b2c9b3dda9832be0cb15d_prof);

        
        $__internal_fa75466e1824143e2aa5a16b11fa78b3035940621572238dac815c067a312108->leave($__internal_fa75466e1824143e2aa5a16b11fa78b3035940621572238dac815c067a312108_prof);

    }

    public function getTemplateName()
    {
        return "detail_view/detailview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% set page_title = 'Detail View' %}
{% block body %}
    <h1>{{ page_title }}</h1>
{% endblock %}", "detail_view/detailview.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/detail_view/detailview.html.twig");
    }
}
