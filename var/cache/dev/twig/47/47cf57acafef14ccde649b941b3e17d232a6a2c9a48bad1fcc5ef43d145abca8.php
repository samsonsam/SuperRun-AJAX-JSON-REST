<?php

/* input/input.html.twig */
class __TwigTemplate_42f2f212b69e3344c39c4806e1df45a666d554999cca0cc7ae7a6f1cd03f18d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "input/input.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bd7edbbacc14a2d9e32dab9648a582c7421d49eb193ad0132693bd1ccea5e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd7edbbacc14a2d9e32dab9648a582c7421d49eb193ad0132693bd1ccea5e89->enter($__internal_7bd7edbbacc14a2d9e32dab9648a582c7421d49eb193ad0132693bd1ccea5e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "input/input.html.twig"));

        $__internal_792cad69c1c8618bc2f7deb901444427c03e3a22ab93878f7329101d20d036d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792cad69c1c8618bc2f7deb901444427c03e3a22ab93878f7329101d20d036d0->enter($__internal_792cad69c1c8618bc2f7deb901444427c03e3a22ab93878f7329101d20d036d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "input/input.html.twig"));

        // line 2
        $context["page_title"] = "Input";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bd7edbbacc14a2d9e32dab9648a582c7421d49eb193ad0132693bd1ccea5e89->leave($__internal_7bd7edbbacc14a2d9e32dab9648a582c7421d49eb193ad0132693bd1ccea5e89_prof);

        
        $__internal_792cad69c1c8618bc2f7deb901444427c03e3a22ab93878f7329101d20d036d0->leave($__internal_792cad69c1c8618bc2f7deb901444427c03e3a22ab93878f7329101d20d036d0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_85e566c5e7e7a7fc3b9cb6b0a9e70381f1feb4ac745261b89b26424d11948137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e566c5e7e7a7fc3b9cb6b0a9e70381f1feb4ac745261b89b26424d11948137->enter($__internal_85e566c5e7e7a7fc3b9cb6b0a9e70381f1feb4ac745261b89b26424d11948137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d8357a16b3ae0b05417f5e48a359ffb5b036e4c733eb940b8ad39acb6473a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8357a16b3ae0b05417f5e48a359ffb5b036e4c733eb940b8ad39acb6473a9f->enter($__internal_8d8357a16b3ae0b05417f5e48a359ffb5b036e4c733eb940b8ad39acb6473a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"col-sm-4 col-md-4 col-xs-4\">
            <h2>Neuer Lauf Eintrag</h2>
            <form method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("input");
        echo "\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Datum:</label>
                    <input id=\"datePicker\" name=\"date\" class=\"form-control\" type=\"date\" data-format=\"dd.mm.yyyy\">
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Strecke:</label>
                    <input name=\"distance\" class=\"form-control\" type=\"text\" data-format=\"nn.n\" placeholder=\"Strecke in km\">
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Zeit:</label>
                    <input name=\"time\" class=\"form-control\" type=\"text\" data-format=\"hh:mm:ss\" placeholder=\"HH:MM:SS\">
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">Speichern</button>
            </form>
        </div>
    </div>
";
        
        $__internal_8d8357a16b3ae0b05417f5e48a359ffb5b036e4c733eb940b8ad39acb6473a9f->leave($__internal_8d8357a16b3ae0b05417f5e48a359ffb5b036e4c733eb940b8ad39acb6473a9f_prof);

        
        $__internal_85e566c5e7e7a7fc3b9cb6b0a9e70381f1feb4ac745261b89b26424d11948137->leave($__internal_85e566c5e7e7a7fc3b9cb6b0a9e70381f1feb4ac745261b89b26424d11948137_prof);

    }

    // line 26
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ee76b3871d31e188bddc8a26a141e05c02c168a05bdc107e35ea798ba67bef8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee76b3871d31e188bddc8a26a141e05c02c168a05bdc107e35ea798ba67bef8b->enter($__internal_ee76b3871d31e188bddc8a26a141e05c02c168a05bdc107e35ea798ba67bef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_8abab4f662b23d0a4a3a63de178b5b7bec61bf68c744b8f09eb0efdca8b93927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abab4f662b23d0a4a3a63de178b5b7bec61bf68c744b8f09eb0efdca8b93927->enter($__internal_8abab4f662b23d0a4a3a63de178b5b7bec61bf68c744b8f09eb0efdca8b93927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 27
        echo "    <script type=\"text/javascript\">
        Date.prototype.toDateInputValue = (function () {
            var local = new Date(this);
            local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
            return local.toJSON().slice(0, 10);
        });
        document.getElementById('datePicker').value = new Date().toDateInputValue();

    </script>
";
        
        $__internal_8abab4f662b23d0a4a3a63de178b5b7bec61bf68c744b8f09eb0efdca8b93927->leave($__internal_8abab4f662b23d0a4a3a63de178b5b7bec61bf68c744b8f09eb0efdca8b93927_prof);

        
        $__internal_ee76b3871d31e188bddc8a26a141e05c02c168a05bdc107e35ea798ba67bef8b->leave($__internal_ee76b3871d31e188bddc8a26a141e05c02c168a05bdc107e35ea798ba67bef8b_prof);

    }

    public function getTemplateName()
    {
        return "input/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  86 => 26,  58 => 8,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% set page_title = 'Input' %}

{% block body %}
    <div class=\"container\">
        <div class=\"col-sm-4 col-md-4 col-xs-4\">
            <h2>Neuer Lauf Eintrag</h2>
            <form method=\"post\" action=\"{{ path('input') }}\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Datum:</label>
                    <input id=\"datePicker\" name=\"date\" class=\"form-control\" type=\"date\" data-format=\"dd.mm.yyyy\">
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Strecke:</label>
                    <input name=\"distance\" class=\"form-control\" type=\"text\" data-format=\"nn.n\" placeholder=\"Strecke in km\">
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Zeit:</label>
                    <input name=\"time\" class=\"form-control\" type=\"text\" data-format=\"hh:mm:ss\" placeholder=\"HH:MM:SS\">
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">Speichern</button>
            </form>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script type=\"text/javascript\">
        Date.prototype.toDateInputValue = (function () {
            var local = new Date(this);
            local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
            return local.toJSON().slice(0, 10);
        });
        document.getElementById('datePicker').value = new Date().toDateInputValue();

    </script>
{% endblock %}", "input/input.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/input/input.html.twig");
    }
}
