<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ba6472cf374e4998d7286c94187fe79e0599c4ace9b6ae1049338180df6aa32e extends Twig_Template
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
        $__internal_8aba412573a488638e7a136454bf212f974c6c3312ce74cafdc4f2b9f2260187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aba412573a488638e7a136454bf212f974c6c3312ce74cafdc4f2b9f2260187->enter($__internal_8aba412573a488638e7a136454bf212f974c6c3312ce74cafdc4f2b9f2260187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_83cf600f68dd09096354738677ebd467fe69aa073e50bf177038dd2aaa5ad6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cf600f68dd09096354738677ebd467fe69aa073e50bf177038dd2aaa5ad6b6->enter($__internal_83cf600f68dd09096354738677ebd467fe69aa073e50bf177038dd2aaa5ad6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8aba412573a488638e7a136454bf212f974c6c3312ce74cafdc4f2b9f2260187->leave($__internal_8aba412573a488638e7a136454bf212f974c6c3312ce74cafdc4f2b9f2260187_prof);

        
        $__internal_83cf600f68dd09096354738677ebd467fe69aa073e50bf177038dd2aaa5ad6b6->leave($__internal_83cf600f68dd09096354738677ebd467fe69aa073e50bf177038dd2aaa5ad6b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/choice_options.html.php");
    }
}
