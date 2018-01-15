<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_83562511750f53413c4a341663e3f3f16ae28801a866e0986f85fbd34e821455 extends Twig_Template
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
        $__internal_ba400f1837405f8bc88b23b1b9ecb3dd9272a47b6ffb16e8615485c4ef398611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba400f1837405f8bc88b23b1b9ecb3dd9272a47b6ffb16e8615485c4ef398611->enter($__internal_ba400f1837405f8bc88b23b1b9ecb3dd9272a47b6ffb16e8615485c4ef398611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_bc8e940551590cf7fa2d8555af60ad9d46e1a61d7739e9f67ec0d832d92ccbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8e940551590cf7fa2d8555af60ad9d46e1a61d7739e9f67ec0d832d92ccbe5->enter($__internal_bc8e940551590cf7fa2d8555af60ad9d46e1a61d7739e9f67ec0d832d92ccbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ba400f1837405f8bc88b23b1b9ecb3dd9272a47b6ffb16e8615485c4ef398611->leave($__internal_ba400f1837405f8bc88b23b1b9ecb3dd9272a47b6ffb16e8615485c4ef398611_prof);

        
        $__internal_bc8e940551590cf7fa2d8555af60ad9d46e1a61d7739e9f67ec0d832d92ccbe5->leave($__internal_bc8e940551590cf7fa2d8555af60ad9d46e1a61d7739e9f67ec0d832d92ccbe5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
