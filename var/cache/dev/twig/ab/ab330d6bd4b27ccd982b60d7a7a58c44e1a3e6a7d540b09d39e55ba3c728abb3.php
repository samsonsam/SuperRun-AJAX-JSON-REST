<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f633f645fa3be2d93840e41489405938801d277076469aa286c00cd111976810 extends Twig_Template
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
        $__internal_5904cbfa0f76e5cb3fbdde6355e3a80a68a879cdd3695acc38d36a0f1ad17aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5904cbfa0f76e5cb3fbdde6355e3a80a68a879cdd3695acc38d36a0f1ad17aac->enter($__internal_5904cbfa0f76e5cb3fbdde6355e3a80a68a879cdd3695acc38d36a0f1ad17aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_ea3a15292a496135ccd62dca5e45089b3892f62373bd86d50ecd7e85cd414a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3a15292a496135ccd62dca5e45089b3892f62373bd86d50ecd7e85cd414a12->enter($__internal_ea3a15292a496135ccd62dca5e45089b3892f62373bd86d50ecd7e85cd414a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_5904cbfa0f76e5cb3fbdde6355e3a80a68a879cdd3695acc38d36a0f1ad17aac->leave($__internal_5904cbfa0f76e5cb3fbdde6355e3a80a68a879cdd3695acc38d36a0f1ad17aac_prof);

        
        $__internal_ea3a15292a496135ccd62dca5e45089b3892f62373bd86d50ecd7e85cd414a12->leave($__internal_ea3a15292a496135ccd62dca5e45089b3892f62373bd86d50ecd7e85cd414a12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
