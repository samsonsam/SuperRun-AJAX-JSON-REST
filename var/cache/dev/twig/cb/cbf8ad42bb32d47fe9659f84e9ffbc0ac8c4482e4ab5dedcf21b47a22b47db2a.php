<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f758db0b888ea7f27de0e414232cb6b58ea8f8cfa480259d13689e032912b985 extends Twig_Template
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
        $__internal_971359ee9546993f4a19c2ff25f48ed7c8d778772c06786934d42a06c5dfa044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971359ee9546993f4a19c2ff25f48ed7c8d778772c06786934d42a06c5dfa044->enter($__internal_971359ee9546993f4a19c2ff25f48ed7c8d778772c06786934d42a06c5dfa044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_238c407eb9797cb32902f4ce904064e248bddc554c0494b04475fb9ebf6d4654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238c407eb9797cb32902f4ce904064e248bddc554c0494b04475fb9ebf6d4654->enter($__internal_238c407eb9797cb32902f4ce904064e248bddc554c0494b04475fb9ebf6d4654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_971359ee9546993f4a19c2ff25f48ed7c8d778772c06786934d42a06c5dfa044->leave($__internal_971359ee9546993f4a19c2ff25f48ed7c8d778772c06786934d42a06c5dfa044_prof);

        
        $__internal_238c407eb9797cb32902f4ce904064e248bddc554c0494b04475fb9ebf6d4654->leave($__internal_238c407eb9797cb32902f4ce904064e248bddc554c0494b04475fb9ebf6d4654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
