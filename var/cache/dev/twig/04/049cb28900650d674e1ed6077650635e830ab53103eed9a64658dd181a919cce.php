<?php

/* base.html.twig */
class __TwigTemplate_d8727e7d7a7a2a3252e365cbcf6e7d35ad4396ba4914a405426490cd56fec21e extends Twig_Template
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
        $__internal_c027d012bf54f3d8cac6c41118f66df55050aeaa173b74a3d7dd622e253d4273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c027d012bf54f3d8cac6c41118f66df55050aeaa173b74a3d7dd622e253d4273->enter($__internal_c027d012bf54f3d8cac6c41118f66df55050aeaa173b74a3d7dd622e253d4273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ee5c6e754cd2bcfb7f272fdf132b5c73d34c129d5c4849935e18b2fbb8679879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5c6e754cd2bcfb7f272fdf132b5c73d34c129d5c4849935e18b2fbb8679879->enter($__internal_ee5c6e754cd2bcfb7f272fdf132b5c73d34c129d5c4849935e18b2fbb8679879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>
<body>
";
        // line 21
        $this->displayBlock('navbar', $context, $blocks);
        // line 76
        echo "<br>
";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        $this->displayBlock('scripts', $context, $blocks);
        // line 94
        echo "    ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "            ";
        // line 98
        echo "                ";
        // line 99
        echo "            ";
        // line 100
        echo "                ";
        // line 101
        echo "            ";
        // line 102
        echo "        ";
        // line 103
        echo "    ";
        // line 105
        echo "</body>
</html>";
        
        $__internal_c027d012bf54f3d8cac6c41118f66df55050aeaa173b74a3d7dd622e253d4273->leave($__internal_c027d012bf54f3d8cac6c41118f66df55050aeaa173b74a3d7dd622e253d4273_prof);

        
        $__internal_ee5c6e754cd2bcfb7f272fdf132b5c73d34c129d5c4849935e18b2fbb8679879->leave($__internal_ee5c6e754cd2bcfb7f272fdf132b5c73d34c129d5c4849935e18b2fbb8679879_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac0971a6613020883e465863bace7cde789f112db1215bbe50bbdf6fdbb192ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0971a6613020883e465863bace7cde789f112db1215bbe50bbdf6fdbb192ad->enter($__internal_ac0971a6613020883e465863bace7cde789f112db1215bbe50bbdf6fdbb192ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50b35f36e67cf8b410022ce38db6dc243182cc8dc7117c056737776bad65e0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b35f36e67cf8b410022ce38db6dc243182cc8dc7117c056737776bad65e0b3->enter($__internal_50b35f36e67cf8b410022ce38db6dc243182cc8dc7117c056737776bad65e0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new Twig_Error_Runtime('Variable "page_title" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_50b35f36e67cf8b410022ce38db6dc243182cc8dc7117c056737776bad65e0b3->leave($__internal_50b35f36e67cf8b410022ce38db6dc243182cc8dc7117c056737776bad65e0b3_prof);

        
        $__internal_ac0971a6613020883e465863bace7cde789f112db1215bbe50bbdf6fdbb192ad->leave($__internal_ac0971a6613020883e465863bace7cde789f112db1215bbe50bbdf6fdbb192ad_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9bd97c45f09daf2652f50e64b59c9074ebd1b86ac0535e2180a9f88a73ca543a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd97c45f09daf2652f50e64b59c9074ebd1b86ac0535e2180a9f88a73ca543a->enter($__internal_9bd97c45f09daf2652f50e64b59c9074ebd1b86ac0535e2180a9f88a73ca543a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c393174f75da369de637db852f445721334da27f2f005d62188835adf037cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c393174f75da369de637db852f445721334da27f2f005d62188835adf037cf0->enter($__internal_2c393174f75da369de637db852f445721334da27f2f005d62188835adf037cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        
        $__internal_2c393174f75da369de637db852f445721334da27f2f005d62188835adf037cf0->leave($__internal_2c393174f75da369de637db852f445721334da27f2f005d62188835adf037cf0_prof);

        
        $__internal_9bd97c45f09daf2652f50e64b59c9074ebd1b86ac0535e2180a9f88a73ca543a->leave($__internal_9bd97c45f09daf2652f50e64b59c9074ebd1b86ac0535e2180a9f88a73ca543a_prof);

    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_e41d7952fd97752d7309751884935372e440a3fe423162849830cf567e85f1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41d7952fd97752d7309751884935372e440a3fe423162849830cf567e85f1a9->enter($__internal_e41d7952fd97752d7309751884935372e440a3fe423162849830cf567e85f1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_01432024ddeb821f2dbc7dfd3cc55ad7f66ac1c021026b6477af15ed63322f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01432024ddeb821f2dbc7dfd3cc55ad7f66ac1c021026b6477af15ed63322f52->enter($__internal_01432024ddeb821f2dbc7dfd3cc55ad7f66ac1c021026b6477af15ed63322f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 22
        echo "    <nav id=\"navbar\" class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-toggleable-md bg-faded navbar-inverse\">
        <button id=\"data-toggle\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\"><b>SuperRun</b></a>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview");
        echo "\">Übersicht</a>
                </li>
            </ul>

            <ul class=\"navbar-nav ml-auto\">
                <form class=\"form-inline mt-2 mt-md-0\" role=\"search\" method=\"post\" action=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("go");
        echo "\">
                    <input id=\"autocomplete\" class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Profil\" aria-label=\"Search\" name=\"name\">
                    <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Go!</button>
                </form>
                <div class=\"seperator\"></div>
                ";
        // line 43
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED") && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 44
            echo "
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                           id=\"navbarDropdownMenuLink\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "user", array()), "username", array())), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-left\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->getSourceContext()); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                <strong>";
            // line 54
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "user", array()), "username", array())), "html", null, true);
            echo "</strong>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
                                <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                                Abmelden
                            </a>
                        </div>
                    </li>
                ";
        } else {
            // line 64
            echo "
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                            Login
                        </a>
                    </li>
                ";
        }
        // line 72
        echo "            </ul>
        </div>
    </nav>
";
        
        $__internal_01432024ddeb821f2dbc7dfd3cc55ad7f66ac1c021026b6477af15ed63322f52->leave($__internal_01432024ddeb821f2dbc7dfd3cc55ad7f66ac1c021026b6477af15ed63322f52_prof);

        
        $__internal_e41d7952fd97752d7309751884935372e440a3fe423162849830cf567e85f1a9->leave($__internal_e41d7952fd97752d7309751884935372e440a3fe423162849830cf567e85f1a9_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_844dbc6fe16137f20e69b26542c94e47abc55f1d08c135b969a098f0b1c6c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844dbc6fe16137f20e69b26542c94e47abc55f1d08c135b969a098f0b1c6c9a5->enter($__internal_844dbc6fe16137f20e69b26542c94e47abc55f1d08c135b969a098f0b1c6c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7def57cdb31802c7143bd9b323efc2f24c0437c51feb5e52e18f946594877607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7def57cdb31802c7143bd9b323efc2f24c0437c51feb5e52e18f946594877607->enter($__internal_7def57cdb31802c7143bd9b323efc2f24c0437c51feb5e52e18f946594877607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7def57cdb31802c7143bd9b323efc2f24c0437c51feb5e52e18f946594877607->leave($__internal_7def57cdb31802c7143bd9b323efc2f24c0437c51feb5e52e18f946594877607_prof);

        
        $__internal_844dbc6fe16137f20e69b26542c94e47abc55f1d08c135b969a098f0b1c6c9a5->leave($__internal_844dbc6fe16137f20e69b26542c94e47abc55f1d08c135b969a098f0b1c6c9a5_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f3f3b9b054154acdc71a4a46e2fa8a2ebaf1ede4b07905624a53036b7aa68f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f3b9b054154acdc71a4a46e2fa8a2ebaf1ede4b07905624a53036b7aa68f60->enter($__internal_f3f3b9b054154acdc71a4a46e2fa8a2ebaf1ede4b07905624a53036b7aa68f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_48b083e8555dcffd015d66e5c26281db99b6d7f2090a6b1783b3b925f912edac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b083e8555dcffd015d66e5c26281db99b6d7f2090a6b1783b3b925f912edac->enter($__internal_48b083e8555dcffd015d66e5c26281db99b6d7f2090a6b1783b3b925f912edac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "    <footer class=\"footer text-center\">
        <div class=\"container\">
        <span class=\"text-muted\">
            <p>© Samuel Erb</p>
        </span>
        </div>
    </footer>
";
        
        $__internal_48b083e8555dcffd015d66e5c26281db99b6d7f2090a6b1783b3b925f912edac->leave($__internal_48b083e8555dcffd015d66e5c26281db99b6d7f2090a6b1783b3b925f912edac_prof);

        
        $__internal_f3f3b9b054154acdc71a4a46e2fa8a2ebaf1ede4b07905624a53036b7aa68f60->leave($__internal_f3f3b9b054154acdc71a4a46e2fa8a2ebaf1ede4b07905624a53036b7aa68f60_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d47fb7640123a25629a440ff496295efd02718ef68da4406d4eeb120fee1a817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47fb7640123a25629a440ff496295efd02718ef68da4406d4eeb120fee1a817->enter($__internal_d47fb7640123a25629a440ff496295efd02718ef68da4406d4eeb120fee1a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6983103af1e6e8d094b50999f83b0be20b5b036bbad4069ef8bbb3ea2a53601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6983103af1e6e8d094b50999f83b0be20b5b036bbad4069ef8bbb3ea2a53601e->enter($__internal_6983103af1e6e8d094b50999f83b0be20b5b036bbad4069ef8bbb3ea2a53601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    <script rel=\"script\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script rel=\"script\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tether.min.js"), "html", null, true);
        echo "\"></script>
    <script rel=\"script\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6983103af1e6e8d094b50999f83b0be20b5b036bbad4069ef8bbb3ea2a53601e->leave($__internal_6983103af1e6e8d094b50999f83b0be20b5b036bbad4069ef8bbb3ea2a53601e_prof);

        
        $__internal_d47fb7640123a25629a440ff496295efd02718ef68da4406d4eeb120fee1a817->leave($__internal_d47fb7640123a25629a440ff496295efd02718ef68da4406d4eeb120fee1a817_prof);

    }

    // line 92
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_844a6ce5b87de91b3fc4367a25ce92a416eb1eed1a50818984aa1b1a4b8ab2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844a6ce5b87de91b3fc4367a25ce92a416eb1eed1a50818984aa1b1a4b8ab2ab->enter($__internal_844a6ce5b87de91b3fc4367a25ce92a416eb1eed1a50818984aa1b1a4b8ab2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6d0a05596c5fc651d7280fd0210ae76ca2b1542d2fcb454f4cd696b925594763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0a05596c5fc651d7280fd0210ae76ca2b1542d2fcb454f4cd696b925594763->enter($__internal_6d0a05596c5fc651d7280fd0210ae76ca2b1542d2fcb454f4cd696b925594763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_6d0a05596c5fc651d7280fd0210ae76ca2b1542d2fcb454f4cd696b925594763->leave($__internal_6d0a05596c5fc651d7280fd0210ae76ca2b1542d2fcb454f4cd696b925594763_prof);

        
        $__internal_844a6ce5b87de91b3fc4367a25ce92a416eb1eed1a50818984aa1b1a4b8ab2ab->leave($__internal_844a6ce5b87de91b3fc4367a25ce92a416eb1eed1a50818984aa1b1a4b8ab2ab_prof);

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
        return array (  333 => 92,  321 => 90,  317 => 89,  312 => 88,  303 => 87,  286 => 79,  277 => 78,  260 => 77,  247 => 72,  238 => 66,  234 => 64,  224 => 57,  218 => 54,  213 => 52,  207 => 49,  201 => 46,  197 => 44,  195 => 43,  187 => 38,  179 => 33,  171 => 28,  163 => 22,  154 => 21,  144 => 18,  135 => 17,  117 => 5,  106 => 105,  104 => 103,  102 => 102,  100 => 101,  98 => 100,  96 => 99,  94 => 98,  92 => 97,  90 => 96,  88 => 95,  86 => 94,  84 => 92,  82 => 87,  80 => 78,  78 => 77,  75 => 76,  73 => 21,  69 => 19,  66 => 17,  64 => 16,  62 => 15,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  38 => 5,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}{{ page_title }}{% endblock %}</title>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\">
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    {#<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\">#}
    {#<script src=\"//code.jquery.com/jquery-1.12.4.js\"></script>#}
    {#<script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>#}
    {% block stylesheets %}
    {% endblock %}
</head>
<body>
{% block navbar %}
    <nav id=\"navbar\" class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-toggleable-md bg-faded navbar-inverse\">
        <button id=\"data-toggle\" class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path('start') }}\"><b>SuperRun</b></a>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('overview') }}\">Übersicht</a>
                </li>
            </ul>

            <ul class=\"navbar-nav ml-auto\">
                <form class=\"form-inline mt-2 mt-md-0\" role=\"search\" method=\"post\" action=\"{{ path('go') }}\">
                    <input id=\"autocomplete\" class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Profil\" aria-label=\"Search\" name=\"name\">
                    <button class=\"btn btn-outline-warning my-2 my-sm-0\" type=\"submit\">Go!</button>
                </form>
                <div class=\"seperator\"></div>
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') %}

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"{{ path('profile', {'id': app.user.id}) }}\"
                           id=\"navbarDropdownMenuLink\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ app.user.username|title }}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-left\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"{{ path('profile', {'id': app.user.id}) }}\">
                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                <strong>{{ app.user.username|title }}</strong>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"{{ path('logout') }}\">
                                <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                                Abmelden
                            </a>
                        </div>
                    </li>
                {% else %}

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('login') }}\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                            Login
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </nav>
{% endblock %}
<br>
{% block body %}{% endblock %}
{% block footer %}
    <footer class=\"footer text-center\">
        <div class=\"container\">
        <span class=\"text-muted\">
            <p>© Samuel Erb</p>
        </span>
        </div>
    </footer>
{% endblock %}
{% block javascripts %}
    <script rel=\"script\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script rel=\"script\" src=\"{{ asset('js/tether.min.js') }}\"></script>
    <script rel=\"script\" src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
{% endblock %}
{% block scripts %}{% endblock %}
{#<script>#}
    {#\$(\"#data-toggle\").addEventListener('onclick', function (ev) {#}
        {#var toggling_content = \$('#navbarSupportedContent');#}
        {#if (toggling_content.hasClass('collapsing')) {#}
            {#if (toggling_content.getAttribute('aria-expanded') === true) {#}
                {##}
            {#}else {#}
                {##}
            {#}#}
        {#}#}
    {#})#}
{#</script>#}
</body>
</html>", "base.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/base.html.twig");
    }
}
