<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8f8c15a6e9df229e9cbe60121c78d4653b40ca367c9337360759278348fd6fc9 extends Twig_Template
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
        $__internal_b4ddf1303ddd7456866130f8702fde2ef04a0dac79bb786e1b2fed03610c13e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ddf1303ddd7456866130f8702fde2ef04a0dac79bb786e1b2fed03610c13e3->enter($__internal_b4ddf1303ddd7456866130f8702fde2ef04a0dac79bb786e1b2fed03610c13e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_411593d8fa952d310dfe1a7267576730c7276bb90db70c990f1e615b8b393041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411593d8fa952d310dfe1a7267576730c7276bb90db70c990f1e615b8b393041->enter($__internal_411593d8fa952d310dfe1a7267576730c7276bb90db70c990f1e615b8b393041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b4ddf1303ddd7456866130f8702fde2ef04a0dac79bb786e1b2fed03610c13e3->leave($__internal_b4ddf1303ddd7456866130f8702fde2ef04a0dac79bb786e1b2fed03610c13e3_prof);

        
        $__internal_411593d8fa952d310dfe1a7267576730c7276bb90db70c990f1e615b8b393041->leave($__internal_411593d8fa952d310dfe1a7267576730c7276bb90db70c990f1e615b8b393041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
