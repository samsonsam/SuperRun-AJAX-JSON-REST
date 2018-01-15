<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_99a8881b04805d52fe2f9e1fa97d1a67501da0e9207168d9da5b6f43ca2e73f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ab7383a37f80e8831f366f6eeea431f019e16dda46c91da208e83dc28047912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab7383a37f80e8831f366f6eeea431f019e16dda46c91da208e83dc28047912->enter($__internal_9ab7383a37f80e8831f366f6eeea431f019e16dda46c91da208e83dc28047912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a784505f505490021303cb628aad350bdda3ca7e24a5053213997f6a84567870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a784505f505490021303cb628aad350bdda3ca7e24a5053213997f6a84567870->enter($__internal_a784505f505490021303cb628aad350bdda3ca7e24a5053213997f6a84567870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9ab7383a37f80e8831f366f6eeea431f019e16dda46c91da208e83dc28047912->leave($__internal_9ab7383a37f80e8831f366f6eeea431f019e16dda46c91da208e83dc28047912_prof);

        
        $__internal_a784505f505490021303cb628aad350bdda3ca7e24a5053213997f6a84567870->leave($__internal_a784505f505490021303cb628aad350bdda3ca7e24a5053213997f6a84567870_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
