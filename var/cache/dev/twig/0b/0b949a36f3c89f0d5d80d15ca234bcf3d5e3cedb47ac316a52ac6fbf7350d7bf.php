<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c0b96b8ea536a7a8b24016691338242bd7f192fde6341ac0d01af25516cde55e extends Twig_Template
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
        $__internal_31d031663d3d8551c9cebd98b2e68c48595878ddfe19da873bcf2a76a8cbde63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d031663d3d8551c9cebd98b2e68c48595878ddfe19da873bcf2a76a8cbde63->enter($__internal_31d031663d3d8551c9cebd98b2e68c48595878ddfe19da873bcf2a76a8cbde63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c185783aaccae4fe1c2c6dc8b1d51fe1f1e624ff1f8d3c3a0fca2d59b0d28ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c185783aaccae4fe1c2c6dc8b1d51fe1f1e624ff1f8d3c3a0fca2d59b0d28ae6->enter($__internal_c185783aaccae4fe1c2c6dc8b1d51fe1f1e624ff1f8d3c3a0fca2d59b0d28ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_31d031663d3d8551c9cebd98b2e68c48595878ddfe19da873bcf2a76a8cbde63->leave($__internal_31d031663d3d8551c9cebd98b2e68c48595878ddfe19da873bcf2a76a8cbde63_prof);

        
        $__internal_c185783aaccae4fe1c2c6dc8b1d51fe1f1e624ff1f8d3c3a0fca2d59b0d28ae6->leave($__internal_c185783aaccae4fe1c2c6dc8b1d51fe1f1e624ff1f8d3c3a0fca2d59b0d28ae6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
