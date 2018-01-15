<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9f520d1393f1e20007fd13a991cc9a0ba2fda5692fc3915856f4167d34863872 extends Twig_Template
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
        $__internal_6f075b8949e05f36c874ab42a81b2ac2ffbe93f4e556be7f53ef9beba80156b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f075b8949e05f36c874ab42a81b2ac2ffbe93f4e556be7f53ef9beba80156b2->enter($__internal_6f075b8949e05f36c874ab42a81b2ac2ffbe93f4e556be7f53ef9beba80156b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dd236b24ef6f6f11d05f13309805dc6b55e97cf06de0cbc44bfb435bb9a9c06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd236b24ef6f6f11d05f13309805dc6b55e97cf06de0cbc44bfb435bb9a9c06e->enter($__internal_dd236b24ef6f6f11d05f13309805dc6b55e97cf06de0cbc44bfb435bb9a9c06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6f075b8949e05f36c874ab42a81b2ac2ffbe93f4e556be7f53ef9beba80156b2->leave($__internal_6f075b8949e05f36c874ab42a81b2ac2ffbe93f4e556be7f53ef9beba80156b2_prof);

        
        $__internal_dd236b24ef6f6f11d05f13309805dc6b55e97cf06de0cbc44bfb435bb9a9c06e->leave($__internal_dd236b24ef6f6f11d05f13309805dc6b55e97cf06de0cbc44bfb435bb9a9c06e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
