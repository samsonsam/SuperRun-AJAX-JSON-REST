<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a6b6427517234e8367e073fe5346c1f414b15acaadd48c2802bfd62dd041395d extends Twig_Template
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
        $__internal_f3c5846aaba5b713090e369da7bb7aba5eb93d0a4abf607d674590a65b3dbe89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c5846aaba5b713090e369da7bb7aba5eb93d0a4abf607d674590a65b3dbe89->enter($__internal_f3c5846aaba5b713090e369da7bb7aba5eb93d0a4abf607d674590a65b3dbe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4a5eea86a20ec5ae2117227037275fe8952d68a6769c818eba95137d8f04b471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5eea86a20ec5ae2117227037275fe8952d68a6769c818eba95137d8f04b471->enter($__internal_4a5eea86a20ec5ae2117227037275fe8952d68a6769c818eba95137d8f04b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f3c5846aaba5b713090e369da7bb7aba5eb93d0a4abf607d674590a65b3dbe89->leave($__internal_f3c5846aaba5b713090e369da7bb7aba5eb93d0a4abf607d674590a65b3dbe89_prof);

        
        $__internal_4a5eea86a20ec5ae2117227037275fe8952d68a6769c818eba95137d8f04b471->leave($__internal_4a5eea86a20ec5ae2117227037275fe8952d68a6769c818eba95137d8f04b471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
