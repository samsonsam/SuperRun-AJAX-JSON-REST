<?php

/* default/index.html.twig */
class __TwigTemplate_1be70edd5573442722f003cd14f1d3c09ea94fe9994e874d233253b2699c365c extends Twig_Template
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
        // line 2
        $context["page_title"] = "Index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"mt-1\">
            <h2>Willkommen auf <strong>SuperRun</strong>.</h2>
            <p class=\"lead\">Nutzen Sie dieses Lauftagebuch um einen Überblick ihrer Aktivitaten zu bekommen.</p>
            <p>Hier einen <a href=\"";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        return array (  52 => 13,  47 => 12,  42 => 10,  40 => 9,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/Users/samuelerb/Code/IdeaProjects/SuperRun-Symfony/templates/default/index.html.twig");
    }
}
