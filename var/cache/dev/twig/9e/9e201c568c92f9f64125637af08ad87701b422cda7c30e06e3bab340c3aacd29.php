<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cc08aa26ca29e16ec904ced7293c4899a2280e7f959e73c7b897439399032836 extends Twig_Template
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
        $__internal_c50e3a1c67cf8d9081b9fb3aef859f4ed7e9d4c8c58641a9a5d610be2425645d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50e3a1c67cf8d9081b9fb3aef859f4ed7e9d4c8c58641a9a5d610be2425645d->enter($__internal_c50e3a1c67cf8d9081b9fb3aef859f4ed7e9d4c8c58641a9a5d610be2425645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2d3099451a78d0d51024aa6b1866f8d867a213598e229a9ebf2f3438d99c58ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3099451a78d0d51024aa6b1866f8d867a213598e229a9ebf2f3438d99c58ed->enter($__internal_2d3099451a78d0d51024aa6b1866f8d867a213598e229a9ebf2f3438d99c58ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c50e3a1c67cf8d9081b9fb3aef859f4ed7e9d4c8c58641a9a5d610be2425645d->leave($__internal_c50e3a1c67cf8d9081b9fb3aef859f4ed7e9d4c8c58641a9a5d610be2425645d_prof);

        
        $__internal_2d3099451a78d0d51024aa6b1866f8d867a213598e229a9ebf2f3438d99c58ed->leave($__internal_2d3099451a78d0d51024aa6b1866f8d867a213598e229a9ebf2f3438d99c58ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
