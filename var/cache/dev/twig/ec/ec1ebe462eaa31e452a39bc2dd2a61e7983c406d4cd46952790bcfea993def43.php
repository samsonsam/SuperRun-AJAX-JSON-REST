<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_a46c02da6c8c68e25440a8a348cd7acc221c0e38e0736e6289341e300f716156 extends Twig_Template
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
        $__internal_e7365e0b53ec21791c9e515346e66164e71a3af32b8ef8c06ad51aa2860f7062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7365e0b53ec21791c9e515346e66164e71a3af32b8ef8c06ad51aa2860f7062->enter($__internal_e7365e0b53ec21791c9e515346e66164e71a3af32b8ef8c06ad51aa2860f7062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_f541a40c957a7b008439ead0afb96d2b22a6071d95ecf4f6dd4212ad76d16ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f541a40c957a7b008439ead0afb96d2b22a6071d95ecf4f6dd4212ad76d16ad5->enter($__internal_f541a40c957a7b008439ead0afb96d2b22a6071d95ecf4f6dd4212ad76d16ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_e7365e0b53ec21791c9e515346e66164e71a3af32b8ef8c06ad51aa2860f7062->leave($__internal_e7365e0b53ec21791c9e515346e66164e71a3af32b8ef8c06ad51aa2860f7062_prof);

        
        $__internal_f541a40c957a7b008439ead0afb96d2b22a6071d95ecf4f6dd4212ad76d16ad5->leave($__internal_f541a40c957a7b008439ead0afb96d2b22a6071d95ecf4f6dd4212ad76d16ad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
