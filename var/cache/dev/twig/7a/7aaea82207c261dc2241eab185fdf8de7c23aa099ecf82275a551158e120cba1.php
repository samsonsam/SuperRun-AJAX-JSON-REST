<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4969c4d0e5f3d4a5cd7c55a61421cfd86b123f07db7e679bbba9555a405edb17 extends Twig_Template
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
        $__internal_e60ce94e5c31b6153cfbfba14805a6538a227e2b9b1d8e31eae3ac8a1fc4ed7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60ce94e5c31b6153cfbfba14805a6538a227e2b9b1d8e31eae3ac8a1fc4ed7c->enter($__internal_e60ce94e5c31b6153cfbfba14805a6538a227e2b9b1d8e31eae3ac8a1fc4ed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4f45b8bb0d7ed902aafc640e9d34dc2b4949279bf15ce3c19d658c0164731b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f45b8bb0d7ed902aafc640e9d34dc2b4949279bf15ce3c19d658c0164731b2d->enter($__internal_4f45b8bb0d7ed902aafc640e9d34dc2b4949279bf15ce3c19d658c0164731b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e60ce94e5c31b6153cfbfba14805a6538a227e2b9b1d8e31eae3ac8a1fc4ed7c->leave($__internal_e60ce94e5c31b6153cfbfba14805a6538a227e2b9b1d8e31eae3ac8a1fc4ed7c_prof);

        
        $__internal_4f45b8bb0d7ed902aafc640e9d34dc2b4949279bf15ce3c19d658c0164731b2d->leave($__internal_4f45b8bb0d7ed902aafc640e9d34dc2b4949279bf15ce3c19d658c0164731b2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
