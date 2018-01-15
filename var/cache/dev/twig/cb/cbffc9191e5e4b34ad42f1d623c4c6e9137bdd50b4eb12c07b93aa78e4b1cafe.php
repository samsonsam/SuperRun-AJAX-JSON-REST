<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_39d5bad7bd1158bdf775de018e81a83e1594f260e61efbcda2190133722016f7 extends Twig_Template
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
        $__internal_1334fcbea8be4ea271cddce51a209fb31f8e5545a12ebabd8eb89d74bf134d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1334fcbea8be4ea271cddce51a209fb31f8e5545a12ebabd8eb89d74bf134d85->enter($__internal_1334fcbea8be4ea271cddce51a209fb31f8e5545a12ebabd8eb89d74bf134d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1c2ba2aed3a3d13b1d5b690c2c2d64c189e5ee065fcb72eaa6c4c36cafdb661b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2ba2aed3a3d13b1d5b690c2c2d64c189e5ee065fcb72eaa6c4c36cafdb661b->enter($__internal_1c2ba2aed3a3d13b1d5b690c2c2d64c189e5ee065fcb72eaa6c4c36cafdb661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1334fcbea8be4ea271cddce51a209fb31f8e5545a12ebabd8eb89d74bf134d85->leave($__internal_1334fcbea8be4ea271cddce51a209fb31f8e5545a12ebabd8eb89d74bf134d85_prof);

        
        $__internal_1c2ba2aed3a3d13b1d5b690c2c2d64c189e5ee065fcb72eaa6c4c36cafdb661b->leave($__internal_1c2ba2aed3a3d13b1d5b690c2c2d64c189e5ee065fcb72eaa6c4c36cafdb661b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
