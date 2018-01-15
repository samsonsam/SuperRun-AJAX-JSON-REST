<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab1972e964d0c2604b16289a8dce10c501236c720b19fb1f22db3f3d6d1a68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c5abb9604e418af799a2fe1a89c20fba469d192572b010e76f39dc819ecf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c5abb9604e418af799a2fe1a89c20fba469d192572b010e76f39dc819ecf6f->enter($__internal_17c5abb9604e418af799a2fe1a89c20fba469d192572b010e76f39dc819ecf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bf52d59e766e4bced5da6b5be2d0b5aff0df3c264499b8c707d89e6c965eccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf52d59e766e4bced5da6b5be2d0b5aff0df3c264499b8c707d89e6c965eccd1->enter($__internal_bf52d59e766e4bced5da6b5be2d0b5aff0df3c264499b8c707d89e6c965eccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_17c5abb9604e418af799a2fe1a89c20fba469d192572b010e76f39dc819ecf6f->leave($__internal_17c5abb9604e418af799a2fe1a89c20fba469d192572b010e76f39dc819ecf6f_prof);

        
        $__internal_bf52d59e766e4bced5da6b5be2d0b5aff0df3c264499b8c707d89e6c965eccd1->leave($__internal_bf52d59e766e4bced5da6b5be2d0b5aff0df3c264499b8c707d89e6c965eccd1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fe3c8d1264bd932ea5e491b5cac84e254fd110eb95b59e536998cb2f794f4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe3c8d1264bd932ea5e491b5cac84e254fd110eb95b59e536998cb2f794f4b0->enter($__internal_3fe3c8d1264bd932ea5e491b5cac84e254fd110eb95b59e536998cb2f794f4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f1b469a8e0c6a46b4e441bdbf9bddc03143d7554440b7632b0cf52fce93e72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1b469a8e0c6a46b4e441bdbf9bddc03143d7554440b7632b0cf52fce93e72c->enter($__internal_6f1b469a8e0c6a46b4e441bdbf9bddc03143d7554440b7632b0cf52fce93e72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f1b469a8e0c6a46b4e441bdbf9bddc03143d7554440b7632b0cf52fce93e72c->leave($__internal_6f1b469a8e0c6a46b4e441bdbf9bddc03143d7554440b7632b0cf52fce93e72c_prof);

        
        $__internal_3fe3c8d1264bd932ea5e491b5cac84e254fd110eb95b59e536998cb2f794f4b0->leave($__internal_3fe3c8d1264bd932ea5e491b5cac84e254fd110eb95b59e536998cb2f794f4b0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cb9701bc5afac897b6433e9b24566924e12c235cd29b202f61e41d7365b1c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb9701bc5afac897b6433e9b24566924e12c235cd29b202f61e41d7365b1c64->enter($__internal_3cb9701bc5afac897b6433e9b24566924e12c235cd29b202f61e41d7365b1c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe610fd6ab2a5011b2ac37864b225cda64acbbc806dc0b63a3fcb02959f37a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe610fd6ab2a5011b2ac37864b225cda64acbbc806dc0b63a3fcb02959f37a9b->enter($__internal_fe610fd6ab2a5011b2ac37864b225cda64acbbc806dc0b63a3fcb02959f37a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fe610fd6ab2a5011b2ac37864b225cda64acbbc806dc0b63a3fcb02959f37a9b->leave($__internal_fe610fd6ab2a5011b2ac37864b225cda64acbbc806dc0b63a3fcb02959f37a9b_prof);

        
        $__internal_3cb9701bc5afac897b6433e9b24566924e12c235cd29b202f61e41d7365b1c64->leave($__internal_3cb9701bc5afac897b6433e9b24566924e12c235cd29b202f61e41d7365b1c64_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab41981a11743e7f70fb1edb994633b09c08e3eb44ecb2dcc75f5c9333b3a52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab41981a11743e7f70fb1edb994633b09c08e3eb44ecb2dcc75f5c9333b3a52c->enter($__internal_ab41981a11743e7f70fb1edb994633b09c08e3eb44ecb2dcc75f5c9333b3a52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_481a6d0108b1aef83a6683b1c17bef72f185bb9ccafaf09b94e32df0572e9f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481a6d0108b1aef83a6683b1c17bef72f185bb9ccafaf09b94e32df0572e9f10->enter($__internal_481a6d0108b1aef83a6683b1c17bef72f185bb9ccafaf09b94e32df0572e9f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_481a6d0108b1aef83a6683b1c17bef72f185bb9ccafaf09b94e32df0572e9f10->leave($__internal_481a6d0108b1aef83a6683b1c17bef72f185bb9ccafaf09b94e32df0572e9f10_prof);

        
        $__internal_ab41981a11743e7f70fb1edb994633b09c08e3eb44ecb2dcc75f5c9333b3a52c->leave($__internal_ab41981a11743e7f70fb1edb994633b09c08e3eb44ecb2dcc75f5c9333b3a52c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
