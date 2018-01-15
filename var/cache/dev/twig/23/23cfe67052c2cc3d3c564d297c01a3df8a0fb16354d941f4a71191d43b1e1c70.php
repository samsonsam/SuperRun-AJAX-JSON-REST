<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e31398c98240b78b2cbf39a3e6c4611c18969e42897dd31ef6fcb2422882f0ed extends Twig_Template
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
        $__internal_4cf39bce15cc11b921409c84417311c0236b299de511e53a109d4db8b158ed35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf39bce15cc11b921409c84417311c0236b299de511e53a109d4db8b158ed35->enter($__internal_4cf39bce15cc11b921409c84417311c0236b299de511e53a109d4db8b158ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d33aeb16b94758b8e42d62ee0e26cda70c43cb3e0d0dd4edb45464a1feaa1bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33aeb16b94758b8e42d62ee0e26cda70c43cb3e0d0dd4edb45464a1feaa1bdd->enter($__internal_d33aeb16b94758b8e42d62ee0e26cda70c43cb3e0d0dd4edb45464a1feaa1bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4cf39bce15cc11b921409c84417311c0236b299de511e53a109d4db8b158ed35->leave($__internal_4cf39bce15cc11b921409c84417311c0236b299de511e53a109d4db8b158ed35_prof);

        
        $__internal_d33aeb16b94758b8e42d62ee0e26cda70c43cb3e0d0dd4edb45464a1feaa1bdd->leave($__internal_d33aeb16b94758b8e42d62ee0e26cda70c43cb3e0d0dd4edb45464a1feaa1bdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
