<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1bd5b4bce6ca581761ca3434796a2094180fd8b25c95f93d31d7114205228244 extends Twig_Template
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
        $__internal_4d900843588ffc51a3c305222c65dc1faf48c8f34a8224949e94d9b742cc50b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d900843588ffc51a3c305222c65dc1faf48c8f34a8224949e94d9b742cc50b7->enter($__internal_4d900843588ffc51a3c305222c65dc1faf48c8f34a8224949e94d9b742cc50b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9db116e9a0fe86ea60bd0da4176320cdb77fdb04bf1dda4a0dc3beddcf634ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db116e9a0fe86ea60bd0da4176320cdb77fdb04bf1dda4a0dc3beddcf634ebc->enter($__internal_9db116e9a0fe86ea60bd0da4176320cdb77fdb04bf1dda4a0dc3beddcf634ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4d900843588ffc51a3c305222c65dc1faf48c8f34a8224949e94d9b742cc50b7->leave($__internal_4d900843588ffc51a3c305222c65dc1faf48c8f34a8224949e94d9b742cc50b7_prof);

        
        $__internal_9db116e9a0fe86ea60bd0da4176320cdb77fdb04bf1dda4a0dc3beddcf634ebc->leave($__internal_9db116e9a0fe86ea60bd0da4176320cdb77fdb04bf1dda4a0dc3beddcf634ebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
