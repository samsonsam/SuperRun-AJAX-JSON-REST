<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_65dcc24e0b58a7ee80518b30275baff969c4a5cdf334ff0f41f02546e712e24d extends Twig_Template
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
        $__internal_b1085ad748171ba2078689ebfb2be3a36a6462f95c8f452b54fc872c4f7eaacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1085ad748171ba2078689ebfb2be3a36a6462f95c8f452b54fc872c4f7eaacf->enter($__internal_b1085ad748171ba2078689ebfb2be3a36a6462f95c8f452b54fc872c4f7eaacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_07d6b4162ef383cc06995180da3b260130a1e03fa2ddf967f72f098bcae4e3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d6b4162ef383cc06995180da3b260130a1e03fa2ddf967f72f098bcae4e3cb->enter($__internal_07d6b4162ef383cc06995180da3b260130a1e03fa2ddf967f72f098bcae4e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b1085ad748171ba2078689ebfb2be3a36a6462f95c8f452b54fc872c4f7eaacf->leave($__internal_b1085ad748171ba2078689ebfb2be3a36a6462f95c8f452b54fc872c4f7eaacf_prof);

        
        $__internal_07d6b4162ef383cc06995180da3b260130a1e03fa2ddf967f72f098bcae4e3cb->leave($__internal_07d6b4162ef383cc06995180da3b260130a1e03fa2ddf967f72f098bcae4e3cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
