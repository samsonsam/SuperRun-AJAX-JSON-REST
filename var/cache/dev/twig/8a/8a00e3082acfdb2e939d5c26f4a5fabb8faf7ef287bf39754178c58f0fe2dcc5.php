<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_54552eb227d6c162f4d17e08a60c2b693451e1a52302aa14f79c911904d642e0 extends Twig_Template
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
        $__internal_c23f32f0fb15488e93d4b158071a582f544814ff3b0dddda5a59d0fff921073f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23f32f0fb15488e93d4b158071a582f544814ff3b0dddda5a59d0fff921073f->enter($__internal_c23f32f0fb15488e93d4b158071a582f544814ff3b0dddda5a59d0fff921073f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4b8ffe453f2476690a4886cc8a223793f68cc246707fd6453aac4a944a3bf1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8ffe453f2476690a4886cc8a223793f68cc246707fd6453aac4a944a3bf1b0->enter($__internal_4b8ffe453f2476690a4886cc8a223793f68cc246707fd6453aac4a944a3bf1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c23f32f0fb15488e93d4b158071a582f544814ff3b0dddda5a59d0fff921073f->leave($__internal_c23f32f0fb15488e93d4b158071a582f544814ff3b0dddda5a59d0fff921073f_prof);

        
        $__internal_4b8ffe453f2476690a4886cc8a223793f68cc246707fd6453aac4a944a3bf1b0->leave($__internal_4b8ffe453f2476690a4886cc8a223793f68cc246707fd6453aac4a944a3bf1b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
