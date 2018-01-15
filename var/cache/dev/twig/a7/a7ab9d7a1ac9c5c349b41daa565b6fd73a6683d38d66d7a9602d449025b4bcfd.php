<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d4fac3b8949f959ce4cff044d36a4fc8409234fe1cc12c8ec23722bdb4ddca3b extends Twig_Template
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
        $__internal_3484dff63ecdaa537f9a238fbaf297199fbfe9c9bc8d17731f5fb7ed5d092534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3484dff63ecdaa537f9a238fbaf297199fbfe9c9bc8d17731f5fb7ed5d092534->enter($__internal_3484dff63ecdaa537f9a238fbaf297199fbfe9c9bc8d17731f5fb7ed5d092534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_dd37d994e0316765e5d89beac9c70f7eb95a7afe58e3144e78010d46258481f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd37d994e0316765e5d89beac9c70f7eb95a7afe58e3144e78010d46258481f2->enter($__internal_dd37d994e0316765e5d89beac9c70f7eb95a7afe58e3144e78010d46258481f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3484dff63ecdaa537f9a238fbaf297199fbfe9c9bc8d17731f5fb7ed5d092534->leave($__internal_3484dff63ecdaa537f9a238fbaf297199fbfe9c9bc8d17731f5fb7ed5d092534_prof);

        
        $__internal_dd37d994e0316765e5d89beac9c70f7eb95a7afe58e3144e78010d46258481f2->leave($__internal_dd37d994e0316765e5d89beac9c70f7eb95a7afe58e3144e78010d46258481f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
