<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_9b045132293395bb1c2d103841f71eaa9a7cb39659e0ea4ab18790eb158f3fcc extends Twig_Template
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
        $__internal_9908e663d45dc08a50b06c23e12b526b2018f4f1fc0e900685b2fd20cdbe3269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9908e663d45dc08a50b06c23e12b526b2018f4f1fc0e900685b2fd20cdbe3269->enter($__internal_9908e663d45dc08a50b06c23e12b526b2018f4f1fc0e900685b2fd20cdbe3269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_810ec1dd2088a5a5753133416c27c4a315871ea6233ac699b0dfe1cb21b67a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810ec1dd2088a5a5753133416c27c4a315871ea6233ac699b0dfe1cb21b67a09->enter($__internal_810ec1dd2088a5a5753133416c27c4a315871ea6233ac699b0dfe1cb21b67a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_9908e663d45dc08a50b06c23e12b526b2018f4f1fc0e900685b2fd20cdbe3269->leave($__internal_9908e663d45dc08a50b06c23e12b526b2018f4f1fc0e900685b2fd20cdbe3269_prof);

        
        $__internal_810ec1dd2088a5a5753133416c27c4a315871ea6233ac699b0dfe1cb21b67a09->leave($__internal_810ec1dd2088a5a5753133416c27c4a315871ea6233ac699b0dfe1cb21b67a09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
