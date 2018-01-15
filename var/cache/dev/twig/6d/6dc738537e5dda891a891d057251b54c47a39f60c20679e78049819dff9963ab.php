<?php

/* overview/overview.html.twig */
class __TwigTemplate_7714d205a4498b76d400a23304fcbabdb12aa5f80193fc974fc9f8741acbded3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "overview/overview.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b51659d01ce08d7920a3d5dd26a5a6156f0fb68b4a82ea3c07652d391175c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b51659d01ce08d7920a3d5dd26a5a6156f0fb68b4a82ea3c07652d391175c60->enter($__internal_1b51659d01ce08d7920a3d5dd26a5a6156f0fb68b4a82ea3c07652d391175c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview/overview.html.twig"));

        $__internal_d0f89b95fcf47d639f0c9590ef7ddcdd44c7bdf9a3d8c142287c4d3e4b4fdd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f89b95fcf47d639f0c9590ef7ddcdd44c7bdf9a3d8c142287c4d3e4b4fdd3e->enter($__internal_d0f89b95fcf47d639f0c9590ef7ddcdd44c7bdf9a3d8c142287c4d3e4b4fdd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "overview/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b51659d01ce08d7920a3d5dd26a5a6156f0fb68b4a82ea3c07652d391175c60->leave($__internal_1b51659d01ce08d7920a3d5dd26a5a6156f0fb68b4a82ea3c07652d391175c60_prof);

        
        $__internal_d0f89b95fcf47d639f0c9590ef7ddcdd44c7bdf9a3d8c142287c4d3e4b4fdd3e->leave($__internal_d0f89b95fcf47d639f0c9590ef7ddcdd44c7bdf9a3d8c142287c4d3e4b4fdd3e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39ea0f4b232228338e4884d3090b6602d4e309978b95ab512fe9845f7b236424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ea0f4b232228338e4884d3090b6602d4e309978b95ab512fe9845f7b236424->enter($__internal_39ea0f4b232228338e4884d3090b6602d4e309978b95ab512fe9845f7b236424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ef1f12df401a5714c47e80da6f3f8433c69f1b8932b5d62ab775ab78e5d4dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef1f12df401a5714c47e80da6f3f8433c69f1b8932b5d62ab775ab78e5d4dca->enter($__internal_1ef1f12df401a5714c47e80da6f3f8433c69f1b8932b5d62ab775ab78e5d4dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/overview.css"), "html", null, true);
        echo "\">
";
        
        $__internal_1ef1f12df401a5714c47e80da6f3f8433c69f1b8932b5d62ab775ab78e5d4dca->leave($__internal_1ef1f12df401a5714c47e80da6f3f8433c69f1b8932b5d62ab775ab78e5d4dca_prof);

        
        $__internal_39ea0f4b232228338e4884d3090b6602d4e309978b95ab512fe9845f7b236424->leave($__internal_39ea0f4b232228338e4884d3090b6602d4e309978b95ab512fe9845f7b236424_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_730d9c0ca5b08d64ac2bd04b55a62e096dd49b490b89d57405d81d08f8492736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730d9c0ca5b08d64ac2bd04b55a62e096dd49b490b89d57405d81d08f8492736->enter($__internal_730d9c0ca5b08d64ac2bd04b55a62e096dd49b490b89d57405d81d08f8492736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e1a6d6111e52b7644411388c9ee9f1ed13c4d6b328cdc53299cc438d0db4496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1a6d6111e52b7644411388c9ee9f1ed13c4d6b328cdc53299cc438d0db4496->enter($__internal_6e1a6d6111e52b7644411388c9ee9f1ed13c4d6b328cdc53299cc438d0db4496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <table id=\"overview_table\">
            <thead>
            <tr>
                <th>Läufername</th>
                <th>Anzahl der Lauftage</th>
                <th>Gelaufene Strecke</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "name", array())), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "day_amount", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["person"], "overall_distance", array()), "html", null, true);
            echo " km</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_6e1a6d6111e52b7644411388c9ee9f1ed13c4d6b328cdc53299cc438d0db4496->leave($__internal_6e1a6d6111e52b7644411388c9ee9f1ed13c4d6b328cdc53299cc438d0db4496_prof);

        
        $__internal_730d9c0ca5b08d64ac2bd04b55a62e096dd49b490b89d57405d81d08f8492736->leave($__internal_730d9c0ca5b08d64ac2bd04b55a62e096dd49b490b89d57405d81d08f8492736_prof);

    }

    public function getTemplateName()
    {
        return "overview/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  101 => 20,  97 => 19,  91 => 18,  88 => 17,  84 => 16,  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/overview.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container\">
        <table id=\"overview_table\">
            <thead>
            <tr>
                <th>Läufername</th>
                <th>Anzahl der Lauftage</th>
                <th>Gelaufene Strecke</th>
            </tr>
            </thead>
            <tbody>
            {% for person in data %}
            <tr>
                <td><a href=\"{{ path('profile', {'id': person.id}) }}\">{{ person.name|title }}</a></td>
                <td>{{ person.day_amount }} </td>
                <td>{{ person.overall_distance }} km</td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "overview/overview.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/overview/overview.html.twig");
    }
}
