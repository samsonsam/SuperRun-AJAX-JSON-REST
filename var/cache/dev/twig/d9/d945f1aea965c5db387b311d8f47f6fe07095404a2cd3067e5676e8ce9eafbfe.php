<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_fd6c7851b53944df14df86504cd5dffafe948474481520b43d1295ce3db12b3e extends Twig_Template
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
        $__internal_f4ecda5d86a551ad55d9ae036fefd54b95435dadbf116ed85c577777634c52cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ecda5d86a551ad55d9ae036fefd54b95435dadbf116ed85c577777634c52cd->enter($__internal_f4ecda5d86a551ad55d9ae036fefd54b95435dadbf116ed85c577777634c52cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0c42df94aa37ad875c5fd7caa2fd6db3402531f1d59878f10ea024b167c01bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c42df94aa37ad875c5fd7caa2fd6db3402531f1d59878f10ea024b167c01bb7->enter($__internal_0c42df94aa37ad875c5fd7caa2fd6db3402531f1d59878f10ea024b167c01bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f4ecda5d86a551ad55d9ae036fefd54b95435dadbf116ed85c577777634c52cd->leave($__internal_f4ecda5d86a551ad55d9ae036fefd54b95435dadbf116ed85c577777634c52cd_prof);

        
        $__internal_0c42df94aa37ad875c5fd7caa2fd6db3402531f1d59878f10ea024b167c01bb7->leave($__internal_0c42df94aa37ad875c5fd7caa2fd6db3402531f1d59878f10ea024b167c01bb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
