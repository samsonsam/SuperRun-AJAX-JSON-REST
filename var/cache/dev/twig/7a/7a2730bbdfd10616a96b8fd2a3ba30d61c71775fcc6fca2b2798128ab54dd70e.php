<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fede46c1f2ea56ee2eefe0ec546a3e8d30b9e6244a19247adfb920acd6f01c48 extends Twig_Template
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
        $__internal_592d910d6be8168ae5a75b8036747b87e8cbbbbeb5a46f757239bb3421630f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592d910d6be8168ae5a75b8036747b87e8cbbbbeb5a46f757239bb3421630f09->enter($__internal_592d910d6be8168ae5a75b8036747b87e8cbbbbeb5a46f757239bb3421630f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f40416880409699adefd98e3076137fa2aeb2d22d1f60158e1c9efcecd343608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40416880409699adefd98e3076137fa2aeb2d22d1f60158e1c9efcecd343608->enter($__internal_f40416880409699adefd98e3076137fa2aeb2d22d1f60158e1c9efcecd343608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_592d910d6be8168ae5a75b8036747b87e8cbbbbeb5a46f757239bb3421630f09->leave($__internal_592d910d6be8168ae5a75b8036747b87e8cbbbbeb5a46f757239bb3421630f09_prof);

        
        $__internal_f40416880409699adefd98e3076137fa2aeb2d22d1f60158e1c9efcecd343608->leave($__internal_f40416880409699adefd98e3076137fa2aeb2d22d1f60158e1c9efcecd343608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
