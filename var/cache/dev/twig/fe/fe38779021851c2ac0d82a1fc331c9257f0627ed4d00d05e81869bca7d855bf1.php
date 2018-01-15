<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2fb9d987b65430ace2ca9e79079afb62f281191bb0388e27cff18f3a0ede3863 extends Twig_Template
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
        $__internal_552dd13993f48525a90f8ac3e5356728d63f9425c75ef500a264b3a4a38eee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552dd13993f48525a90f8ac3e5356728d63f9425c75ef500a264b3a4a38eee8d->enter($__internal_552dd13993f48525a90f8ac3e5356728d63f9425c75ef500a264b3a4a38eee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0d95b14e4087b5fa2da203c42578c38609a0e18c8481d85aed0d2300820fe103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d95b14e4087b5fa2da203c42578c38609a0e18c8481d85aed0d2300820fe103->enter($__internal_0d95b14e4087b5fa2da203c42578c38609a0e18c8481d85aed0d2300820fe103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_552dd13993f48525a90f8ac3e5356728d63f9425c75ef500a264b3a4a38eee8d->leave($__internal_552dd13993f48525a90f8ac3e5356728d63f9425c75ef500a264b3a4a38eee8d_prof);

        
        $__internal_0d95b14e4087b5fa2da203c42578c38609a0e18c8481d85aed0d2300820fe103->leave($__internal_0d95b14e4087b5fa2da203c42578c38609a0e18c8481d85aed0d2300820fe103_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
