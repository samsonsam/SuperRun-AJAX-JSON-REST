<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f3840a6d28a82d874f2bacf29fce82682df524ae93445d9ea8cc4472333f2266 extends Twig_Template
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
        $__internal_e6f34871f0394bcc751c9994319ea61da1eeb8913e0ca18ec1c31fed3baf2fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f34871f0394bcc751c9994319ea61da1eeb8913e0ca18ec1c31fed3baf2fa0->enter($__internal_e6f34871f0394bcc751c9994319ea61da1eeb8913e0ca18ec1c31fed3baf2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_06e6352b2915ad292da091da415b5edf67676f26ade33c8a0e2d3bdd2df42251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e6352b2915ad292da091da415b5edf67676f26ade33c8a0e2d3bdd2df42251->enter($__internal_06e6352b2915ad292da091da415b5edf67676f26ade33c8a0e2d3bdd2df42251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e6f34871f0394bcc751c9994319ea61da1eeb8913e0ca18ec1c31fed3baf2fa0->leave($__internal_e6f34871f0394bcc751c9994319ea61da1eeb8913e0ca18ec1c31fed3baf2fa0_prof);

        
        $__internal_06e6352b2915ad292da091da415b5edf67676f26ade33c8a0e2d3bdd2df42251->leave($__internal_06e6352b2915ad292da091da415b5edf67676f26ade33c8a0e2d3bdd2df42251_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
