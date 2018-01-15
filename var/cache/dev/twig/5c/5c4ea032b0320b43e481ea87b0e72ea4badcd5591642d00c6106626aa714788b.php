<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_64ad1278e29b04f820618d452bef0af302180abbb8059cc0c9bd0cbfd1837170 extends Twig_Template
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
        $__internal_241b18447a200cfdb48e3596a774139b68d742f57427fafe4faab360fdb7e9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241b18447a200cfdb48e3596a774139b68d742f57427fafe4faab360fdb7e9d6->enter($__internal_241b18447a200cfdb48e3596a774139b68d742f57427fafe4faab360fdb7e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_bae569ff2f864622400bcbe07bc83d377956dae3abd9e1a65c172654be83be93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae569ff2f864622400bcbe07bc83d377956dae3abd9e1a65c172654be83be93->enter($__internal_bae569ff2f864622400bcbe07bc83d377956dae3abd9e1a65c172654be83be93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_241b18447a200cfdb48e3596a774139b68d742f57427fafe4faab360fdb7e9d6->leave($__internal_241b18447a200cfdb48e3596a774139b68d742f57427fafe4faab360fdb7e9d6_prof);

        
        $__internal_bae569ff2f864622400bcbe07bc83d377956dae3abd9e1a65c172654be83be93->leave($__internal_bae569ff2f864622400bcbe07bc83d377956dae3abd9e1a65c172654be83be93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
