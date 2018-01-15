<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5915a72195d4f0b67788341c333fcf65ba9c09d7e32770bbfcfe796333f3ce5b extends Twig_Template
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
        $__internal_2776b7cdf4e79b0fc855c67d652da7d67d4ad288cc6f5b10a26edcfc10d322c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2776b7cdf4e79b0fc855c67d652da7d67d4ad288cc6f5b10a26edcfc10d322c3->enter($__internal_2776b7cdf4e79b0fc855c67d652da7d67d4ad288cc6f5b10a26edcfc10d322c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3fee1aee8bf318e07fd39d6634ee70a1a01b90d3f7c5943bd3044231bb81ad0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fee1aee8bf318e07fd39d6634ee70a1a01b90d3f7c5943bd3044231bb81ad0b->enter($__internal_3fee1aee8bf318e07fd39d6634ee70a1a01b90d3f7c5943bd3044231bb81ad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2776b7cdf4e79b0fc855c67d652da7d67d4ad288cc6f5b10a26edcfc10d322c3->leave($__internal_2776b7cdf4e79b0fc855c67d652da7d67d4ad288cc6f5b10a26edcfc10d322c3_prof);

        
        $__internal_3fee1aee8bf318e07fd39d6634ee70a1a01b90d3f7c5943bd3044231bb81ad0b->leave($__internal_3fee1aee8bf318e07fd39d6634ee70a1a01b90d3f7c5943bd3044231bb81ad0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
