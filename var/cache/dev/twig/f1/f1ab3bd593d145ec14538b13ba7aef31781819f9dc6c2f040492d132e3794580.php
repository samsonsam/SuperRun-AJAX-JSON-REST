<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_41096fc7222016f6c9abff86aa075cea5df67e1dbaed652af1e16a69ff2d9ab7 extends Twig_Template
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
        $__internal_70410cfc9623a4df6a2601f1e8c612b3ac2e48bbc7a3833b538f2ecc3c1556f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70410cfc9623a4df6a2601f1e8c612b3ac2e48bbc7a3833b538f2ecc3c1556f7->enter($__internal_70410cfc9623a4df6a2601f1e8c612b3ac2e48bbc7a3833b538f2ecc3c1556f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4f2d0080cc9eb6f6e45d9c3aa2c2ca91b5b79554cddc184c577fc80ac7e0d924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2d0080cc9eb6f6e45d9c3aa2c2ca91b5b79554cddc184c577fc80ac7e0d924->enter($__internal_4f2d0080cc9eb6f6e45d9c3aa2c2ca91b5b79554cddc184c577fc80ac7e0d924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_70410cfc9623a4df6a2601f1e8c612b3ac2e48bbc7a3833b538f2ecc3c1556f7->leave($__internal_70410cfc9623a4df6a2601f1e8c612b3ac2e48bbc7a3833b538f2ecc3c1556f7_prof);

        
        $__internal_4f2d0080cc9eb6f6e45d9c3aa2c2ca91b5b79554cddc184c577fc80ac7e0d924->leave($__internal_4f2d0080cc9eb6f6e45d9c3aa2c2ca91b5b79554cddc184c577fc80ac7e0d924_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
