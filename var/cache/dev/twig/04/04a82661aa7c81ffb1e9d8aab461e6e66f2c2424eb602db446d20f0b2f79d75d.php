<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3b403a1133a85d3cf51f754c097e9abe99c5c9a8b10d9ecd76dc5e48fdf34d70 extends Twig_Template
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
        $__internal_aec00e303e9c1749db32a220e2b7df51a7737902a44d9ed1a211f6ca7ffaec32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec00e303e9c1749db32a220e2b7df51a7737902a44d9ed1a211f6ca7ffaec32->enter($__internal_aec00e303e9c1749db32a220e2b7df51a7737902a44d9ed1a211f6ca7ffaec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_059acfe3b81009ee1077ae2eb1935b20511c8acf0ddd68478049c86bf8c7b94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059acfe3b81009ee1077ae2eb1935b20511c8acf0ddd68478049c86bf8c7b94a->enter($__internal_059acfe3b81009ee1077ae2eb1935b20511c8acf0ddd68478049c86bf8c7b94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aec00e303e9c1749db32a220e2b7df51a7737902a44d9ed1a211f6ca7ffaec32->leave($__internal_aec00e303e9c1749db32a220e2b7df51a7737902a44d9ed1a211f6ca7ffaec32_prof);

        
        $__internal_059acfe3b81009ee1077ae2eb1935b20511c8acf0ddd68478049c86bf8c7b94a->leave($__internal_059acfe3b81009ee1077ae2eb1935b20511c8acf0ddd68478049c86bf8c7b94a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
