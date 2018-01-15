<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3e87d51259777109892595fbc905b068668cfc53a6f6c9f74b85175dc4c5ee0c extends Twig_Template
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
        $__internal_c1cf3efa210be8e3eb2a325e20c805b2ec5d33314e0bdd884c8f9e910794fa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cf3efa210be8e3eb2a325e20c805b2ec5d33314e0bdd884c8f9e910794fa3a->enter($__internal_c1cf3efa210be8e3eb2a325e20c805b2ec5d33314e0bdd884c8f9e910794fa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_700fa2332f310de7c5dce5e55e4b447d481b8b402ff9262a5a812673c7b5e767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700fa2332f310de7c5dce5e55e4b447d481b8b402ff9262a5a812673c7b5e767->enter($__internal_700fa2332f310de7c5dce5e55e4b447d481b8b402ff9262a5a812673c7b5e767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c1cf3efa210be8e3eb2a325e20c805b2ec5d33314e0bdd884c8f9e910794fa3a->leave($__internal_c1cf3efa210be8e3eb2a325e20c805b2ec5d33314e0bdd884c8f9e910794fa3a_prof);

        
        $__internal_700fa2332f310de7c5dce5e55e4b447d481b8b402ff9262a5a812673c7b5e767->leave($__internal_700fa2332f310de7c5dce5e55e4b447d481b8b402ff9262a5a812673c7b5e767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
