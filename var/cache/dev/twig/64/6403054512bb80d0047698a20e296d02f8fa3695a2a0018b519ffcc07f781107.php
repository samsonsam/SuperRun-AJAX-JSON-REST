<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6a9b8f367ddee4b6cb7c92aa9c9b38bd8a0f7bede2cfec2288a29fca84b86088 extends Twig_Template
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
        $__internal_10225a30675fc0ff9e7ac01706aeb21c4b9bf04a98860b850803b5648bc39125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10225a30675fc0ff9e7ac01706aeb21c4b9bf04a98860b850803b5648bc39125->enter($__internal_10225a30675fc0ff9e7ac01706aeb21c4b9bf04a98860b850803b5648bc39125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6bcd5adef32a4f7002fd9c405fef9ed6d1a4aaf843eda6948e2aa8eb24176103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcd5adef32a4f7002fd9c405fef9ed6d1a4aaf843eda6948e2aa8eb24176103->enter($__internal_6bcd5adef32a4f7002fd9c405fef9ed6d1a4aaf843eda6948e2aa8eb24176103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_10225a30675fc0ff9e7ac01706aeb21c4b9bf04a98860b850803b5648bc39125->leave($__internal_10225a30675fc0ff9e7ac01706aeb21c4b9bf04a98860b850803b5648bc39125_prof);

        
        $__internal_6bcd5adef32a4f7002fd9c405fef9ed6d1a4aaf843eda6948e2aa8eb24176103->leave($__internal_6bcd5adef32a4f7002fd9c405fef9ed6d1a4aaf843eda6948e2aa8eb24176103_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
