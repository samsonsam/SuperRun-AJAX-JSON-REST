<?php

/* login/login.html.twig */
class __TwigTemplate_f03f12115f363d11283ec5040b00df8d4cdf521fa75e646d33be13fe278bc337 extends Twig_Template
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
        // line 2
        $context["page_title"] = "Login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        if ((array_key_exists("error", $context) &&  !(null === ($context["error"] ?? null)))) {
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
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        }
        echo "\" required
                                   autofocus placeholder=\"E-Mail\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">

                    ";
        // line 30
        if ((array_key_exists("error", $context) &&  !(null === ($context["error"] ?? null)))) {
            // line 31
            echo "                        <div class=\"form-control-feedback\">
                        <span class=\"text-danger align-middle\">
                            <i class=\"fa fa-close\"></i>
                            <div id=\"email_error_feedback_text\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        return array (  92 => 40,  84 => 35,  78 => 31,  76 => 30,  64 => 23,  61 => 22,  53 => 19,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/login.html.twig", "/Users/samuelerb/Code/IdeaProjects/SuperRun-Symfony/templates/login/login.html.twig");
    }
}
