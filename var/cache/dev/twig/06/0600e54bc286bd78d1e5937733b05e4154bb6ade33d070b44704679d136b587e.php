<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1c4a71c85211614b03025c730db4aa0cc7574aff259c0ed992f468af13baf5cc extends Twig_Template
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
        $__internal_d98db1f18ee6a62eebef03f73b27ca1f305ce80f5792b341ddd5c031cbea88da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98db1f18ee6a62eebef03f73b27ca1f305ce80f5792b341ddd5c031cbea88da->enter($__internal_d98db1f18ee6a62eebef03f73b27ca1f305ce80f5792b341ddd5c031cbea88da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ad6caf1d1e8badda969ebb6075efd79e71a87a2051a323944bbd98efc775ecfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6caf1d1e8badda969ebb6075efd79e71a87a2051a323944bbd98efc775ecfa->enter($__internal_ad6caf1d1e8badda969ebb6075efd79e71a87a2051a323944bbd98efc775ecfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d98db1f18ee6a62eebef03f73b27ca1f305ce80f5792b341ddd5c031cbea88da->leave($__internal_d98db1f18ee6a62eebef03f73b27ca1f305ce80f5792b341ddd5c031cbea88da_prof);

        
        $__internal_ad6caf1d1e8badda969ebb6075efd79e71a87a2051a323944bbd98efc775ecfa->leave($__internal_ad6caf1d1e8badda969ebb6075efd79e71a87a2051a323944bbd98efc775ecfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
