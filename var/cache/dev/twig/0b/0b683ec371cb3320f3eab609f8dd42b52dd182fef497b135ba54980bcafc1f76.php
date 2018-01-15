<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_78c53109910a03591ae7f54ae21ea9f16d9a14db20938e9dc21729df8b841de3 extends Twig_Template
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
        $__internal_d8d76067ddb15ed84f64d8ee126fd112a0f6c71aa3bb0dce2d886999d9edc2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d76067ddb15ed84f64d8ee126fd112a0f6c71aa3bb0dce2d886999d9edc2f4->enter($__internal_d8d76067ddb15ed84f64d8ee126fd112a0f6c71aa3bb0dce2d886999d9edc2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_24b28a0d0656ee217dc4c098bf8c23eb86bcc450adc891e617782c83e0c7714e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b28a0d0656ee217dc4c098bf8c23eb86bcc450adc891e617782c83e0c7714e->enter($__internal_24b28a0d0656ee217dc4c098bf8c23eb86bcc450adc891e617782c83e0c7714e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d8d76067ddb15ed84f64d8ee126fd112a0f6c71aa3bb0dce2d886999d9edc2f4->leave($__internal_d8d76067ddb15ed84f64d8ee126fd112a0f6c71aa3bb0dce2d886999d9edc2f4_prof);

        
        $__internal_24b28a0d0656ee217dc4c098bf8c23eb86bcc450adc891e617782c83e0c7714e->leave($__internal_24b28a0d0656ee217dc4c098bf8c23eb86bcc450adc891e617782c83e0c7714e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
