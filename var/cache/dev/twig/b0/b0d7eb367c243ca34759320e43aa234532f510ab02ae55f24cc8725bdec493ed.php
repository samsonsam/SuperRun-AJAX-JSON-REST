<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c612c53ca3db8890bf84660a20e90457204c664b7f185fa2dbae3a2ea7607f35 extends Twig_Template
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
        $__internal_69a080a4e20839e03444de2f13e65bb27c3ab99621bdbbc59e6c02c3493e4cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a080a4e20839e03444de2f13e65bb27c3ab99621bdbbc59e6c02c3493e4cae->enter($__internal_69a080a4e20839e03444de2f13e65bb27c3ab99621bdbbc59e6c02c3493e4cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1daaedcf996b06d51c273a20719cbd13715d5ec71442e4d4c0aa390f9e8fd31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1daaedcf996b06d51c273a20719cbd13715d5ec71442e4d4c0aa390f9e8fd31b->enter($__internal_1daaedcf996b06d51c273a20719cbd13715d5ec71442e4d4c0aa390f9e8fd31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_69a080a4e20839e03444de2f13e65bb27c3ab99621bdbbc59e6c02c3493e4cae->leave($__internal_69a080a4e20839e03444de2f13e65bb27c3ab99621bdbbc59e6c02c3493e4cae_prof);

        
        $__internal_1daaedcf996b06d51c273a20719cbd13715d5ec71442e4d4c0aa390f9e8fd31b->leave($__internal_1daaedcf996b06d51c273a20719cbd13715d5ec71442e4d4c0aa390f9e8fd31b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
