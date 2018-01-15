<?php

/* login/login.html.twig */
class __TwigTemplate_b61ce6a319e0ffc30fb653c720dae62bf39591b5db066e324ce69fbb3a29ccf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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
        $__internal_1b56b1670d5eee2e0f1e90305dddd527cd51474953f473ab046c048246542683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b56b1670d5eee2e0f1e90305dddd527cd51474953f473ab046c048246542683->enter($__internal_1b56b1670d5eee2e0f1e90305dddd527cd51474953f473ab046c048246542683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_cf9ec7749e0d56e0aed862c93e0691ed6b9b5ec8eadf8ed5c7acc380129bab3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9ec7749e0d56e0aed862c93e0691ed6b9b5ec8eadf8ed5c7acc380129bab3c->enter($__internal_cf9ec7749e0d56e0aed862c93e0691ed6b9b5ec8eadf8ed5c7acc380129bab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 2
        $context["page_title"] = "Login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b56b1670d5eee2e0f1e90305dddd527cd51474953f473ab046c048246542683->leave($__internal_1b56b1670d5eee2e0f1e90305dddd527cd51474953f473ab046c048246542683_prof);

        
        $__internal_cf9ec7749e0d56e0aed862c93e0691ed6b9b5ec8eadf8ed5c7acc380129bab3c->leave($__internal_cf9ec7749e0d56e0aed862c93e0691ed6b9b5ec8eadf8ed5c7acc380129bab3c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d0f56a5c342927158ba77cf2508b6deae3e8b928f59cfb6f54e1811899e11e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0f56a5c342927158ba77cf2508b6deae3e8b928f59cfb6f54e1811899e11e5->enter($__internal_7d0f56a5c342927158ba77cf2508b6deae3e8b928f59cfb6f54e1811899e11e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b7ed354c7579596218b5219bdb477b8e29c860e4beb047fdc8079e5aa303bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7ed354c7579596218b5219bdb477b8e29c860e4beb047fdc8079e5aa303bbf->enter($__internal_9b7ed354c7579596218b5219bdb477b8e29c860e4beb047fdc8079e5aa303bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">
            <br>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <h2>Bitte tragen Sie hier ihre Accountdaten ein.</h2>
                    <hr>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div id=\"email_input_container\"
                         class=\"form-group ";
        // line 19
        if ((array_key_exists("error", $context) &&  !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->getSourceContext()); })())))) {
            echo "has-danger";
        }
        echo "\">
                        <label class=\"sr-only\" for=\"username\">E-Mail Address</label>
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\" style=\"width: 2.6rem\"><i class=\"fa ";
        // line 22
        echo " fa-user\"></i></div>
                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        if (array_key_exists("last_username", $context)) {
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        }
        echo "\" required
                                   autofocus placeholder=\"E-Mail\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">

                    ";
        // line 30
        if ((array_key_exists("error", $context) &&  !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 30, $this->getSourceContext()); })())))) {
            // line 31
            echo "                        <div class=\"form-control-feedback\">
                        <span class=\"text-danger align-middle\">
                            <i class=\"fa fa-close\"></i>
                            <div id=\"email_error_feedback_text\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 35, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                            </div>
                        </span>
                        </div>
                    ";
        }
        // line 40
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"password\">Password</label>
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\" style=\"width: 2.6rem\"><i class=\"fa fa-key\"></i></div>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"
                                   placeholder=\"Password\" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\" style=\"padding-top: .35rem\">
                    <div class=\"form-check mb-2 mr-sm-2 mb-sm-0\">
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" name=\"remember\"
                                   type=\"checkbox\">
                            <span style=\"padding-bottom: .15rem\">Remember me</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"padding-top: 1rem\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-sign-in\"></i> Login</button>
                    <a class=\"btn btn-link\" href=\"/password/reset\">Forgot Your Password?</a>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_9b7ed354c7579596218b5219bdb477b8e29c860e4beb047fdc8079e5aa303bbf->leave($__internal_9b7ed354c7579596218b5219bdb477b8e29c860e4beb047fdc8079e5aa303bbf_prof);

        
        $__internal_7d0f56a5c342927158ba77cf2508b6deae3e8b928f59cfb6f54e1811899e11e5->leave($__internal_7d0f56a5c342927158ba77cf2508b6deae3e8b928f59cfb6f54e1811899e11e5_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  102 => 35,  96 => 31,  94 => 30,  82 => 23,  79 => 22,  71 => 19,  55 => 6,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% set page_title = 'Login' %}

{% block body %}
    <div class=\"container\">
        <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"{{ path('login') }}\">
            <br>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <h2>Bitte tragen Sie hier ihre Accountdaten ein.</h2>
                    <hr>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div id=\"email_input_container\"
                         class=\"form-group {% if error is defined and error is not null %}has-danger{% endif %}\">
                        <label class=\"sr-only\" for=\"username\">E-Mail Address</label>
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\" style=\"width: 2.6rem\"><i class=\"fa {#fa-at#} fa-user\"></i></div>
                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{% if last_username is defined %}{{ last_username }}{% endif %}\" required
                                   autofocus placeholder=\"E-Mail\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">

                    {% if error is defined and error is not null %}
                        <div class=\"form-control-feedback\">
                        <span class=\"text-danger align-middle\">
                            <i class=\"fa fa-close\"></i>
                            <div id=\"email_error_feedback_text\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        </span>
                        </div>
                    {% endif %}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"password\">Password</label>
                        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
                            <div class=\"input-group-addon\" style=\"width: 2.6rem\"><i class=\"fa fa-key\"></i></div>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"
                                   placeholder=\"Password\" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\" style=\"padding-top: .35rem\">
                    <div class=\"form-check mb-2 mr-sm-2 mb-sm-0\">
                        <label class=\"form-check-label\">
                            <input class=\"form-check-input\" name=\"remember\"
                                   type=\"checkbox\">
                            <span style=\"padding-bottom: .15rem\">Remember me</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"row\" style=\"padding-top: 1rem\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-sign-in\"></i> Login</button>
                    <a class=\"btn btn-link\" href=\"/password/reset\">Forgot Your Password?</a>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "login/login.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/templates/login/login.html.twig");
    }
}
