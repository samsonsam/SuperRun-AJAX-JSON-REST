<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_fb41d2b8ea5f7f1d40fabc7a703e538d13ea4a388875bdf95ffb334883740c9d extends Twig_Template
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
        $__internal_cf1628f5eb5c99a76db8a5e844fde98d236248273767b2317624ece11f4eea4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1628f5eb5c99a76db8a5e844fde98d236248273767b2317624ece11f4eea4e->enter($__internal_cf1628f5eb5c99a76db8a5e844fde98d236248273767b2317624ece11f4eea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_fbe36807ffd1e1b74d4ff6ee6d8d093d24c93b3eeedba1a537abc7dba4f90d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe36807ffd1e1b74d4ff6ee6d8d093d24c93b3eeedba1a537abc7dba4f90d1c->enter($__internal_fbe36807ffd1e1b74d4ff6ee6d8d093d24c93b3eeedba1a537abc7dba4f90d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cf1628f5eb5c99a76db8a5e844fde98d236248273767b2317624ece11f4eea4e->leave($__internal_cf1628f5eb5c99a76db8a5e844fde98d236248273767b2317624ece11f4eea4e_prof);

        
        $__internal_fbe36807ffd1e1b74d4ff6ee6d8d093d24c93b3eeedba1a537abc7dba4f90d1c->leave($__internal_fbe36807ffd1e1b74d4ff6ee6d8d093d24c93b3eeedba1a537abc7dba4f90d1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
