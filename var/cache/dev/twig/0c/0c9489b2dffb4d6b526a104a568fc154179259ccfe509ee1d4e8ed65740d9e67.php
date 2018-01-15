<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0f70e759fe85dddca0362cdcba9b276cef28b5fe6c8ae62c72a1476e576704c extends Twig_Template
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
        $__internal_cbe52f551aa74d45749cdc20d58372b6cab5e726aedc5e75382547d70bd7accf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe52f551aa74d45749cdc20d58372b6cab5e726aedc5e75382547d70bd7accf->enter($__internal_cbe52f551aa74d45749cdc20d58372b6cab5e726aedc5e75382547d70bd7accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7fdbe4eb9ed91609a3fc59e083b296b63c03598324c03b84fd024adf215f1939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdbe4eb9ed91609a3fc59e083b296b63c03598324c03b84fd024adf215f1939->enter($__internal_7fdbe4eb9ed91609a3fc59e083b296b63c03598324c03b84fd024adf215f1939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cbe52f551aa74d45749cdc20d58372b6cab5e726aedc5e75382547d70bd7accf->leave($__internal_cbe52f551aa74d45749cdc20d58372b6cab5e726aedc5e75382547d70bd7accf_prof);

        
        $__internal_7fdbe4eb9ed91609a3fc59e083b296b63c03598324c03b84fd024adf215f1939->leave($__internal_7fdbe4eb9ed91609a3fc59e083b296b63c03598324c03b84fd024adf215f1939_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
