<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3877491bcab4bca65c24b22826704f77fccc62c4d2cc645c98712c0afca87160 extends Twig_Template
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
        $__internal_a2013cc8d505db100bb99d350d2d6b1bb54a64b0cf3cc233876e8963658b6886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2013cc8d505db100bb99d350d2d6b1bb54a64b0cf3cc233876e8963658b6886->enter($__internal_a2013cc8d505db100bb99d350d2d6b1bb54a64b0cf3cc233876e8963658b6886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_41a20e1f1d86dbc171a1e407404384cc76f371905519bd7a13288f1eb48fa323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a20e1f1d86dbc171a1e407404384cc76f371905519bd7a13288f1eb48fa323->enter($__internal_41a20e1f1d86dbc171a1e407404384cc76f371905519bd7a13288f1eb48fa323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a2013cc8d505db100bb99d350d2d6b1bb54a64b0cf3cc233876e8963658b6886->leave($__internal_a2013cc8d505db100bb99d350d2d6b1bb54a64b0cf3cc233876e8963658b6886_prof);

        
        $__internal_41a20e1f1d86dbc171a1e407404384cc76f371905519bd7a13288f1eb48fa323->leave($__internal_41a20e1f1d86dbc171a1e407404384cc76f371905519bd7a13288f1eb48fa323_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
