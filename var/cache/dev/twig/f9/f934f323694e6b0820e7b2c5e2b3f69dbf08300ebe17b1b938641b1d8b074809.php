<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_9a28dc23960eaac78c38160f33068620cc15664aaa49bb9c02779c0cb69b74d4 extends Twig_Template
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
        $__internal_c65f2c9c3aba69d1403da3b0843af9865e1645606575791168203f962ab31ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65f2c9c3aba69d1403da3b0843af9865e1645606575791168203f962ab31ea7->enter($__internal_c65f2c9c3aba69d1403da3b0843af9865e1645606575791168203f962ab31ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_ba6cd6fea403137914a9283ea73779fb0b96d86332731ab31a5c130915f993b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6cd6fea403137914a9283ea73779fb0b96d86332731ab31a5c130915f993b3->enter($__internal_ba6cd6fea403137914a9283ea73779fb0b96d86332731ab31a5c130915f993b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_c65f2c9c3aba69d1403da3b0843af9865e1645606575791168203f962ab31ea7->leave($__internal_c65f2c9c3aba69d1403da3b0843af9865e1645606575791168203f962ab31ea7_prof);

        
        $__internal_ba6cd6fea403137914a9283ea73779fb0b96d86332731ab31a5c130915f993b3->leave($__internal_ba6cd6fea403137914a9283ea73779fb0b96d86332731ab31a5c130915f993b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
