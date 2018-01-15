<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f246ee16f6155f06c08f197a2fef3fedb24be01a12d3336ac30a88dc3fcae939 extends Twig_Template
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
        $__internal_74109ff19763099b67d9d035db98928fd59375682b70d1b531676c95ff76376e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74109ff19763099b67d9d035db98928fd59375682b70d1b531676c95ff76376e->enter($__internal_74109ff19763099b67d9d035db98928fd59375682b70d1b531676c95ff76376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d1634a171d1e36f94da8e87c8e4bf676241af86b761872d8429c81027dfaa36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1634a171d1e36f94da8e87c8e4bf676241af86b761872d8429c81027dfaa36f->enter($__internal_d1634a171d1e36f94da8e87c8e4bf676241af86b761872d8429c81027dfaa36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_74109ff19763099b67d9d035db98928fd59375682b70d1b531676c95ff76376e->leave($__internal_74109ff19763099b67d9d035db98928fd59375682b70d1b531676c95ff76376e_prof);

        
        $__internal_d1634a171d1e36f94da8e87c8e4bf676241af86b761872d8429c81027dfaa36f->leave($__internal_d1634a171d1e36f94da8e87c8e4bf676241af86b761872d8429c81027dfaa36f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
