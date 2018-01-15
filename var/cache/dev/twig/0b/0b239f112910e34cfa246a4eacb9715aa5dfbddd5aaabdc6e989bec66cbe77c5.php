<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d811a4d006e020be6efe43515bd5933b2b751826bb683044b9c00e8891d06823 extends Twig_Template
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
        $__internal_9cac44b11a7598d9f205e5500e6dbb2e19bc331b7e1444724b1ff9ebce048149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cac44b11a7598d9f205e5500e6dbb2e19bc331b7e1444724b1ff9ebce048149->enter($__internal_9cac44b11a7598d9f205e5500e6dbb2e19bc331b7e1444724b1ff9ebce048149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7952026e4b3124dd3c74fd3d4ceaefcb0fffa4ea41a51279730390d4e28a4404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7952026e4b3124dd3c74fd3d4ceaefcb0fffa4ea41a51279730390d4e28a4404->enter($__internal_7952026e4b3124dd3c74fd3d4ceaefcb0fffa4ea41a51279730390d4e28a4404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9cac44b11a7598d9f205e5500e6dbb2e19bc331b7e1444724b1ff9ebce048149->leave($__internal_9cac44b11a7598d9f205e5500e6dbb2e19bc331b7e1444724b1ff9ebce048149_prof);

        
        $__internal_7952026e4b3124dd3c74fd3d4ceaefcb0fffa4ea41a51279730390d4e28a4404->leave($__internal_7952026e4b3124dd3c74fd3d4ceaefcb0fffa4ea41a51279730390d4e28a4404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
