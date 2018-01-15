<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8e3efcb98fda3298fde05dd6288fe77f27f7b124f56dfcb204e9d59e732bfda9 extends Twig_Template
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
        $__internal_18e64e609c0e2b0eaebe7b69882d64c97c186d8946a9c5a506fbe1ec9bec728b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e64e609c0e2b0eaebe7b69882d64c97c186d8946a9c5a506fbe1ec9bec728b->enter($__internal_18e64e609c0e2b0eaebe7b69882d64c97c186d8946a9c5a506fbe1ec9bec728b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_34d7e01792c81a151df6b00e950cdc023770af8c5834b695f56ab5b179b806d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d7e01792c81a151df6b00e950cdc023770af8c5834b695f56ab5b179b806d3->enter($__internal_34d7e01792c81a151df6b00e950cdc023770af8c5834b695f56ab5b179b806d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_18e64e609c0e2b0eaebe7b69882d64c97c186d8946a9c5a506fbe1ec9bec728b->leave($__internal_18e64e609c0e2b0eaebe7b69882d64c97c186d8946a9c5a506fbe1ec9bec728b_prof);

        
        $__internal_34d7e01792c81a151df6b00e950cdc023770af8c5834b695f56ab5b179b806d3->leave($__internal_34d7e01792c81a151df6b00e950cdc023770af8c5834b695f56ab5b179b806d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
