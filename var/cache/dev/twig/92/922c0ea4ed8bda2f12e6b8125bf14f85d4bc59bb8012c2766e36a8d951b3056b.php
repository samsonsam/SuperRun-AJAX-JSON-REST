<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9719b1de52b18b9229d5c9590cfa18b29284f99f4484cac69106935c8cd80549 extends Twig_Template
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
        $__internal_8c266c0332f723c2a6ef918a038a07e7a2d377bb5b8bf4e985b5a55b67adc46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c266c0332f723c2a6ef918a038a07e7a2d377bb5b8bf4e985b5a55b67adc46c->enter($__internal_8c266c0332f723c2a6ef918a038a07e7a2d377bb5b8bf4e985b5a55b67adc46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_09f37d84cda2dd8f1148e672dac0f200223d7256d0c620257b839905ed7c37df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f37d84cda2dd8f1148e672dac0f200223d7256d0c620257b839905ed7c37df->enter($__internal_09f37d84cda2dd8f1148e672dac0f200223d7256d0c620257b839905ed7c37df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8c266c0332f723c2a6ef918a038a07e7a2d377bb5b8bf4e985b5a55b67adc46c->leave($__internal_8c266c0332f723c2a6ef918a038a07e7a2d377bb5b8bf4e985b5a55b67adc46c_prof);

        
        $__internal_09f37d84cda2dd8f1148e672dac0f200223d7256d0c620257b839905ed7c37df->leave($__internal_09f37d84cda2dd8f1148e672dac0f200223d7256d0c620257b839905ed7c37df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
