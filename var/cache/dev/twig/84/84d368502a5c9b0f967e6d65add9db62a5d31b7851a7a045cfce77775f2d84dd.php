<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a7f6496f99d6d7072afe3a4baa17916ad41e13a77d989519e6f30274ed69dad9 extends Twig_Template
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
        $__internal_f3dd550c31541edc502e82cabd38df0e580d778d1ab1774677c4db6a4c9065a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dd550c31541edc502e82cabd38df0e580d778d1ab1774677c4db6a4c9065a1->enter($__internal_f3dd550c31541edc502e82cabd38df0e580d778d1ab1774677c4db6a4c9065a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0a0b72f9d1ff52e5ed2810cb9e355151bab67f7190b262cd0044aca74862ce86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0b72f9d1ff52e5ed2810cb9e355151bab67f7190b262cd0044aca74862ce86->enter($__internal_0a0b72f9d1ff52e5ed2810cb9e355151bab67f7190b262cd0044aca74862ce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f3dd550c31541edc502e82cabd38df0e580d778d1ab1774677c4db6a4c9065a1->leave($__internal_f3dd550c31541edc502e82cabd38df0e580d778d1ab1774677c4db6a4c9065a1_prof);

        
        $__internal_0a0b72f9d1ff52e5ed2810cb9e355151bab67f7190b262cd0044aca74862ce86->leave($__internal_0a0b72f9d1ff52e5ed2810cb9e355151bab67f7190b262cd0044aca74862ce86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
