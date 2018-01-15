<?php

/* user/profile.html.twig */
class __TwigTemplate_76f1e3f2ab3bee0f44ca2d1bbbefff392216fe75e0f34ef5d6a83fef0113afe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_1dbeec540bdba57a08c8f11939bfd9d853439b990ee793451e4c822091df6785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbeec540bdba57a08c8f11939bfd9d853439b990ee793451e4c822091df6785->enter($__internal_1dbeec540bdba57a08c8f11939bfd9d853439b990ee793451e4c822091df6785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_b2ad97a91df36e76179bf912321ff1033c4a4bb2561d0b5f01733f46ae73c0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ad97a91df36e76179bf912321ff1033c4a4bb2561d0b5f01733f46ae73c0ba->enter($__internal_b2ad97a91df36e76179bf912321ff1033c4a4bb2561d0b5f01733f46ae73c0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dbeec540bdba57a08c8f11939bfd9d853439b990ee793451e4c822091df6785->leave($__internal_1dbeec540bdba57a08c8f11939bfd9d853439b990ee793451e4c822091df6785_prof);

        
        $__internal_b2ad97a91df36e76179bf912321ff1033c4a4bb2561d0b5f01733f46ae73c0ba->leave($__internal_b2ad97a91df36e76179bf912321ff1033c4a4bb2561d0b5f01733f46ae73c0ba_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66fb6f130e93fd84bfb050e70d1736f1f40ce453bd7510301b978ef9589f1bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fb6f130e93fd84bfb050e70d1736f1f40ce453bd7510301b978ef9589f1bb0->enter($__internal_66fb6f130e93fd84bfb050e70d1736f1f40ce453bd7510301b978ef9589f1bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9c581f8da3ab1d3c686f940ab9b1ea6b6893b36a8f9749de275b9c330cf5eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c581f8da3ab1d3c686f940ab9b1ea6b6893b36a8f9749de275b9c330cf5eed->enter($__internal_e9c581f8da3ab1d3c686f940ab9b1ea6b6893b36a8f9749de275b9c330cf5eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
";
        
        $__internal_e9c581f8da3ab1d3c686f940ab9b1ea6b6893b36a8f9749de275b9c330cf5eed->leave($__internal_e9c581f8da3ab1d3c686f940ab9b1ea6b6893b36a8f9749de275b9c330cf5eed_prof);

        
        $__internal_66fb6f130e93fd84bfb050e70d1736f1f40ce453bd7510301b978ef9589f1bb0->leave($__internal_66fb6f130e93fd84bfb050e70d1736f1f40ce453bd7510301b978ef9589f1bb0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4ada379b06522cf80d0b02f1f8267f7cd50632d7ca66eb4717ba813c888c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ada379b06522cf80d0b02f1f8267f7cd50632d7ca66eb4717ba813c888c63e->enter($__internal_b4ada379b06522cf80d0b02f1f8267f7cd50632d7ca66eb4717ba813c888c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6826835fba698a69adcb1ed5b1876420d7a9913d317f2181e2e2664bfec7a3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6826835fba698a69adcb1ed5b1876420d7a9913d317f2181e2e2664bfec7a3dd->enter($__internal_6826835fba698a69adcb1ed5b1876420d7a9913d317f2181e2e2664bfec7a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"content-box col col-sm-7 col-md-7 col-lg-5\">
                <div class=\"content-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new Twig_Error_Runtime('Variable "owner" does not exist.', 14, $this->getSourceContext()); })()), "username", array())), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <table class=\"table table-user-information\">
                                <tbody>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <a href=\"mailto:";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new Twig_Error_Runtime('Variable "owner" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new Twig_Error_Runtime('Variable "owner" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Anzahl der Lauftage:</td>
                                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panel_data"]) || array_key_exists("panel_data", $context) ? $context["panel_data"] : (function () { throw new Twig_Error_Runtime('Variable "panel_data" does not exist.', 27, $this->getSourceContext()); })()), "day_amount", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Tage seit dem 1. Lauf:</td>
                                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panel_data"]) || array_key_exists("panel_data", $context) ? $context["panel_data"] : (function () { throw new Twig_Error_Runtime('Variable "panel_data" does not exist.', 31, $this->getSourceContext()); })()), "days_since_first_run", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Strecke insgesamt</td>
                                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["panel_data"]) || array_key_exists("panel_data", $context) ? $context["panel_data"] : (function () { throw new Twig_Error_Runtime('Variable "panel_data" does not exist.', 35, $this->getSourceContext()); })()), "overall_distance", array()), "html", null, true);
        echo " km</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"content-box col col-12 col-12 col-sm-12 col-md-12 col-lg-6\">
                <div class=\"content-wrapper\" style=\"overflow: auto\">
                    <h4>Laufeinträge</h4>
                    ";
        // line 48
        if (( !(null === (isset($context["table_data"]) || array_key_exists("table_data", $context) ? $context["table_data"] : (function () { throw new Twig_Error_Runtime('Variable "table_data" does not exist.', 48, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["table_data"]) || array_key_exists("table_data", $context) ? $context["table_data"] : (function () { throw new Twig_Error_Runtime('Variable "table_data" does not exist.', 48, $this->getSourceContext()); })())) > 0))) {
            // line 49
            echo "                        <table id=\"run_table\">
                            <thead>
                            <tr>
                                <th>Datum</th>
                                <th>Gelaufene Strecke</th>
                                <th>Gelaufene Zeit</th>
                                <th>Ø-Geschwindigkeit</th>
                                ";
            // line 56
            if ((isset($context["isProfileOwner"]) || array_key_exists("isProfileOwner", $context) ? $context["isProfileOwner"] : (function () { throw new Twig_Error_Runtime('Variable "isProfileOwner" does not exist.', 56, $this->getSourceContext()); })())) {
                // line 57
                echo "                                    <th>";
                echo "</th>
                                ";
            }
            // line 59
            echo "                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["table_data"]) || array_key_exists("table_data", $context) ? $context["table_data"] : (function () { throw new Twig_Error_Runtime('Variable "table_data" does not exist.', 62, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 63
                echo "                                <tr id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "id", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "date", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "distance", array()), "html", null, true);
                echo " km</td>
                                    <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "time", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "average_speed", array()), "html", null, true);
                echo " km/h</td>
                                    ";
                // line 68
                if ((isset($context["isProfileOwner"]) || array_key_exists("isProfileOwner", $context) ? $context["isProfileOwner"] : (function () { throw new Twig_Error_Runtime('Variable "isProfileOwner" does not exist.', 68, $this->getSourceContext()); })())) {
                    // line 69
                    echo "                                        <td>
                                            <i id=\"minus-";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "id", array()), "html", null, true);
                    echo "\" class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>

                                        </td>
                                    ";
                }
                // line 74
                echo "                                </tr>
                                ";
                // line 75
                if ((isset($context["isProfileOwner"]) || array_key_exists("isProfileOwner", $context) ? $context["isProfileOwner"] : (function () { throw new Twig_Error_Runtime('Variable "isProfileOwner" does not exist.', 75, $this->getSourceContext()); })())) {
                    // line 76
                    echo "                                <script type=\"text/javascript\">
                                    \$(\"#minus-";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "id", array()), "html", null, true);
                    echo "\").click(function () {
                                        \$(\"#";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "id", array()), "html", null, true);
                    echo "\").remove();
                                        \$.post(\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("run_id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["run"], "id", array()))), "html", null, true);
                    echo "\",
                                            {},
                                            function (data, status) {
                                                console.log(\"Data: \" + data + \"\\nStatus: \" + status);
                                            });
                                    });
                                </script>
                                ";
                }
                // line 87
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "
                            </tbody>
                        </table>
                    ";
        } else {
            // line 92
            echo "                        <br>
                        Keine Einträge vorhanden.
                    ";
        }
        // line 95
        echo "                </div>
            </div>


            ";
        // line 99
        if ((isset($context["isProfileOwner"]) || array_key_exists("isProfileOwner", $context) ? $context["isProfileOwner"] : (function () { throw new Twig_Error_Runtime('Variable "isProfileOwner" does not exist.', 99, $this->getSourceContext()); })())) {
            // line 100
            echo "                <div class=\"content-box col-7 col-sm-7 col-md-6 col-lg-4 \">
                    <div class=\"content-wrapper\">
                        <h4>Neuer Laufeintrag</h4>
                        <div class=\"form-group\">
                            ";
            // line 104
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->getSourceContext()); })()), array(0 => "bootstrap_3_layout.html.twig"), true);
            // line 105
            echo "                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), 'form_start');
            echo "
                            ";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), 'widget');
            echo "
                            ";
            // line 107
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), 'form_end');
            echo "
                        </div>
                        ";
            // line 109
            if (array_key_exists("errors", $context)) {
                // line 110
                echo "                            <h5>Ihre Eingabe enthält folgende Fehler.</h5>
                            <ul>
                                ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 112, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 113
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                    echo "</li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "                            </ul>
                        ";
            }
            // line 117
            echo "                    </div>
                </div>
            ";
        }
        // line 120
        echo "        </div>
    </div>
";
        
        $__internal_6826835fba698a69adcb1ed5b1876420d7a9913d317f2181e2e2664bfec7a3dd->leave($__internal_6826835fba698a69adcb1ed5b1876420d7a9913d317f2181e2e2664bfec7a3dd_prof);

        
        $__internal_b4ada379b06522cf80d0b02f1f8267f7cd50632d7ca66eb4717ba813c888c63e->leave($__internal_b4ada379b06522cf80d0b02f1f8267f7cd50632d7ca66eb4717ba813c888c63e_prof);

    }

    // line 124
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_5d0f345ab001f3620316bb5ce063e144426efe24982c73a702cbd4c25d6aac2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0f345ab001f3620316bb5ce063e144426efe24982c73a702cbd4c25d6aac2a->enter($__internal_5d0f345ab001f3620316bb5ce063e144426efe24982c73a702cbd4c25d6aac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_25ab3a769537bd1303d75fa7dbea83c9276e903a159e6211b15e6021d88eb036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ab3a769537bd1303d75fa7dbea83c9276e903a159e6211b15e6021d88eb036->enter($__internal_25ab3a769537bd1303d75fa7dbea83c9276e903a159e6211b15e6021d88eb036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 125
        echo "    <script type=\"text/javascript\">
        window.onload = function () {
            date = new Date();
            \$('#form_Date_day').val(date.getDate());
            \$('#form_Date_month').val(date.getMonth() + 1);
            \$('#form_Date_year').val(date.getFullYear());
            \$('#form_Distance').val(1);
        };
    </script>
";
        
        $__internal_25ab3a769537bd1303d75fa7dbea83c9276e903a159e6211b15e6021d88eb036->leave($__internal_25ab3a769537bd1303d75fa7dbea83c9276e903a159e6211b15e6021d88eb036_prof);

        
        $__internal_5d0f345ab001f3620316bb5ce063e144426efe24982c73a702cbd4c25d6aac2a->leave($__internal_5d0f345ab001f3620316bb5ce063e144426efe24982c73a702cbd4c25d6aac2a_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 125,  306 => 124,  294 => 120,  289 => 117,  285 => 115,  276 => 113,  272 => 112,  268 => 110,  266 => 109,  261 => 107,  257 => 106,  252 => 105,  250 => 104,  244 => 100,  242 => 99,  236 => 95,  231 => 92,  225 => 88,  219 => 87,  208 => 79,  204 => 78,  200 => 77,  197 => 76,  195 => 75,  192 => 74,  185 => 70,  182 => 69,  180 => 68,  176 => 67,  172 => 66,  168 => 65,  164 => 64,  159 => 63,  155 => 62,  150 => 59,  145 => 57,  143 => 56,  134 => 49,  132 => 48,  116 => 35,  109 => 31,  102 => 27,  92 => 22,  81 => 14,  73 => 8,  64 => 7,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
{% endblock %}


{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"content-box col col-sm-7 col-md-7 col-lg-5\">
                <div class=\"content-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">{{ owner.username|title }}</h3>
                        </div>
                        <div class=\"panel-body\">
                            <table class=\"table table-user-information\">
                                <tbody>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <a href=\"mailto:{{ owner.email }}\">{{ owner.email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Anzahl der Lauftage:</td>
                                    <td>{{ panel_data.day_amount }}</td>
                                </tr>
                                <tr>
                                    <td>Tage seit dem 1. Lauf:</td>
                                    <td>{{ panel_data.days_since_first_run }}</td>
                                </tr>
                                <tr>
                                    <td>Strecke insgesamt</td>
                                    <td>{{ panel_data.overall_distance }} km</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"content-box col col-12 col-12 col-sm-12 col-md-12 col-lg-6\">
                <div class=\"content-wrapper\" style=\"overflow: auto\">
                    <h4>Laufeinträge</h4>
                    {% if table_data is not null and table_data|length > 0 %}
                        <table id=\"run_table\">
                            <thead>
                            <tr>
                                <th>Datum</th>
                                <th>Gelaufene Strecke</th>
                                <th>Gelaufene Zeit</th>
                                <th>Ø-Geschwindigkeit</th>
                                {% if isProfileOwner %}
                                    <th>{# <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i> #}</th>
                                {% endif %}
                            </tr>
                            </thead>
                            <tbody>
                            {% for run in table_data %}
                                <tr id=\"{{ run.id }}\">
                                    <td>{{ run.date }}</td>
                                    <td>{{ run.distance }} km</td>
                                    <td>{{ run.time }}</td>
                                    <td>{{ run.average_speed }} km/h</td>
                                    {% if isProfileOwner %}
                                        <td>
                                            <i id=\"minus-{{ run.id }}\" class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>

                                        </td>
                                    {% endif %}
                                </tr>
                                {% if isProfileOwner %}
                                <script type=\"text/javascript\">
                                    \$(\"#minus-{{ run.id }}\").click(function () {
                                        \$(\"#{{ run.id }}\").remove();
                                        \$.post(\"{{ path('delete', {'run_id': run.id } ) }}\",
                                            {},
                                            function (data, status) {
                                                console.log(\"Data: \" + data + \"\\nStatus: \" + status);
                                            });
                                    });
                                </script>
                                {% endif %}
                            {% endfor %}

                            </tbody>
                        </table>
                    {% else %}
                        <br>
                        Keine Einträge vorhanden.
                    {% endif %}
                </div>
            </div>


            {% if isProfileOwner %}
                <div class=\"content-box col-7 col-sm-7 col-md-6 col-lg-4 \">
                    <div class=\"content-wrapper\">
                        <h4>Neuer Laufeintrag</h4>
                        <div class=\"form-group\">
                            {% form_theme form 'bootstrap_3_layout.html.twig' %}
                            {{ form_start(form) }}
                            {{ form_widget(form) }}
                            {{ form_end(form) }}
                        </div>
                        {% if errors is defined %}
                            <h5>Ihre Eingabe enthält folgende Fehler.</h5>
                            <ul>
                                {% for error in errors %}
                                    <li>{{ error.message }}</li>
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        window.onload = function () {
            date = new Date();
            \$('#form_Date_day').val(date.getDate());
            \$('#form_Date_month').val(date.getMonth() + 1);
            \$('#form_Date_year').val(date.getFullYear());
            \$('#form_Distance').val(1);
        };
    </script>
{% endblock %}", "user/profile.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/user/profile.html.twig");
    }
}
