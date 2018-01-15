<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4528e42a531392f176707e0d0779d91de8b7e124e2aeb1fe166569012c6a0ae9 extends Twig_Template
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
        $__internal_b9d8366b06ef714a372b0bec44c27dde65b570f3f22cd7952b53d112925ca322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d8366b06ef714a372b0bec44c27dde65b570f3f22cd7952b53d112925ca322->enter($__internal_b9d8366b06ef714a372b0bec44c27dde65b570f3f22cd7952b53d112925ca322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6ccb5070903f0247653c207d1d1bb8b25cbfb1ca5e1f3dc1c8addd848372fe26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ccb5070903f0247653c207d1d1bb8b25cbfb1ca5e1f3dc1c8addd848372fe26->enter($__internal_6ccb5070903f0247653c207d1d1bb8b25cbfb1ca5e1f3dc1c8addd848372fe26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b9d8366b06ef714a372b0bec44c27dde65b570f3f22cd7952b53d112925ca322->leave($__internal_b9d8366b06ef714a372b0bec44c27dde65b570f3f22cd7952b53d112925ca322_prof);

        
        $__internal_6ccb5070903f0247653c207d1d1bb8b25cbfb1ca5e1f3dc1c8addd848372fe26->leave($__internal_6ccb5070903f0247653c207d1d1bb8b25cbfb1ca5e1f3dc1c8addd848372fe26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
