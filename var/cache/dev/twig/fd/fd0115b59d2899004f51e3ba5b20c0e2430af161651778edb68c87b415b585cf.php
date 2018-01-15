<?php

/* search/search.html.twig */
class __TwigTemplate_c2447fb59e06a2f9b17ad9ca60d51e0769e5477da05c701f07c66b2cfc1b14a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/search.html.twig", 1);
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
        $__internal_c9d0ac71463e17fff5038bef8fd58765ecb09653f811b10db5b811bdc14636d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d0ac71463e17fff5038bef8fd58765ecb09653f811b10db5b811bdc14636d4->enter($__internal_c9d0ac71463e17fff5038bef8fd58765ecb09653f811b10db5b811bdc14636d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $__internal_c5b31411deb6919ab34beac0743c95735e8b4a412732b775a325c85b62f41700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b31411deb6919ab34beac0743c95735e8b4a412732b775a325c85b62f41700->enter($__internal_c5b31411deb6919ab34beac0743c95735e8b4a412732b775a325c85b62f41700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d0ac71463e17fff5038bef8fd58765ecb09653f811b10db5b811bdc14636d4->leave($__internal_c9d0ac71463e17fff5038bef8fd58765ecb09653f811b10db5b811bdc14636d4_prof);

        
        $__internal_c5b31411deb6919ab34beac0743c95735e8b4a412732b775a325c85b62f41700->leave($__internal_c5b31411deb6919ab34beac0743c95735e8b4a412732b775a325c85b62f41700_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c98c16dce60cded6170d9898342ec2ff8061a31f0a74a229d4b63302c95d3de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98c16dce60cded6170d9898342ec2ff8061a31f0a74a229d4b63302c95d3de4->enter($__internal_c98c16dce60cded6170d9898342ec2ff8061a31f0a74a229d4b63302c95d3de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c87e0e191d07951672b2f670ca25ca2e7742235cc132e5f78f2e5690928ea574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87e0e191d07951672b2f670ca25ca2e7742235cc132e5f78f2e5690928ea574->enter($__internal_c87e0e191d07951672b2f670ca25ca2e7742235cc132e5f78f2e5690928ea574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"content-box\">
            <div class=\"content-wrapper\">
                <h3>Searched for \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["search_string"]) || array_key_exists("search_string", $context) ? $context["search_string"] : (function () { throw new Twig_Error_Runtime('Variable "search_string" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "\"</h3>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 8
            echo "                    <hr>
                    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["elem"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["elem"], "username", array()), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_c87e0e191d07951672b2f670ca25ca2e7742235cc132e5f78f2e5690928ea574->leave($__internal_c87e0e191d07951672b2f670ca25ca2e7742235cc132e5f78f2e5690928ea574_prof);

        
        $__internal_c98c16dce60cded6170d9898342ec2ff8061a31f0a74a229d4b63302c95d3de4->leave($__internal_c98c16dce60cded6170d9898342ec2ff8061a31f0a74a229d4b63302c95d3de4_prof);

    }

    public function getTemplateName()
    {
        return "search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  65 => 9,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"content-box\">
            <div class=\"content-wrapper\">
                <h3>Searched for \"{{ search_string }}\"</h3>
                {% for elem in result %}
                    <hr>
                    <a href=\"{{ path('profile', {'id': elem.id}) }}\">{{ elem.username }}</a>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "search/search.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/search/search.html.twig");
    }
}
