<?php

/* base.html.twig */
class __TwigTemplate_f636cfca211e9f29f25dfee79f5e9e2355fe9721bd52517946d5408ce8e9dd33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body>
";
        // line 22
        $this->displayBlock('navbar', $context, $blocks);
        // line 77
        echo "<br>
";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        $this->displayBlock('scripts', $context, $blocks);
        // line 95
        echo "    ";
        // line 96
        echo "        ";
        // line 97
        echo "        ";
        // line 98
        echo "            ";
        // line 99
        echo "                ";
        // line 100
        echo "            ";
        // line 101
        echo "                ";
        // line 102
        echo "            ";
        // line 103
        echo "        ";
        // line 104
        echo "    ";
        // line 106
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    // line 22
    public function block_navbar($context, array $blocks = array())
    {
        // line 23
        echo "    <nav id=\"navbar\" class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-toggleable-md bg-faded navbar-inverse\">
        <button id=\"data-toggle\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\"><b>SuperRun</b></a>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview");
        echo "\">Übersicht</a>
                </li>
            </ul>

            <ul class=\"navbar-nav ml-auto\">
                <form class=\"form-inline mt-2 mt-md-0\" role=\"search\" method=\"post\" action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">
                    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Profil\" aria-label=\"Search\" name=\"query\">
                    <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Suche</button>
                </form>
                <div class=\"seperator\"></div>
                ";
        // line 44
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 45
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                           id=\"navbarDropdownMenuLink\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 50
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array())), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-left\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                <strong>";
            // line 55
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array())), "html", null, true);
            echo "</strong>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
                                <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                                Abmelden
                            </a>
                        </div>
                    </li>
                ";
        } else {
            // line 65
            echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                            Login
                        </a>
                    </li>
                ";
        }
        // line 73
        echo "            </ul>
        </div>
    </nav>
";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "    <footer class=\"footer text-center\">
        <div class=\"container\">
        <span class=\"text-muted\">
            <p>© Samuel Erb</p>
        </span>
        </div>
    </footer>
";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "    <script rel=\"script\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script rel=\"script\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script rel=\"script\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 93
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 93,  245 => 91,  241 => 90,  236 => 89,  233 => 88,  222 => 80,  219 => 79,  214 => 78,  207 => 73,  198 => 67,  194 => 65,  184 => 58,  178 => 55,  173 => 53,  167 => 50,  161 => 47,  157 => 45,  155 => 44,  147 => 39,  139 => 34,  131 => 29,  123 => 23,  120 => 22,  116 => 19,  113 => 18,  107 => 5,  102 => 106,  100 => 104,  98 => 103,  96 => 102,  94 => 101,  92 => 100,  90 => 99,  88 => 98,  86 => 97,  84 => 96,  82 => 95,  80 => 93,  78 => 88,  76 => 79,  74 => 78,  71 => 77,  69 => 22,  65 => 20,  62 => 18,  60 => 17,  58 => 16,  56 => 15,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Users/samuelerb/Code/IdeaProjects/SuperRun-Symfony/templates/base.html.twig");
    }
}
