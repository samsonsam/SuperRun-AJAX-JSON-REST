<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_65fca56ef45bb6d95328bbab4bb4e916812fbc21d53e4b70d920617aa4447ed6 extends Twig_Template
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
        $__internal_ddd954d62e4ed263e0a88ca3850845a610601adf1e1e74b7881a3abd8d3f93a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd954d62e4ed263e0a88ca3850845a610601adf1e1e74b7881a3abd8d3f93a6->enter($__internal_ddd954d62e4ed263e0a88ca3850845a610601adf1e1e74b7881a3abd8d3f93a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7075a8d8ec465e27ea4aa14928023f077004a1c8ab65a96b614cb511133ffe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7075a8d8ec465e27ea4aa14928023f077004a1c8ab65a96b614cb511133ffe47->enter($__internal_7075a8d8ec465e27ea4aa14928023f077004a1c8ab65a96b614cb511133ffe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ddd954d62e4ed263e0a88ca3850845a610601adf1e1e74b7881a3abd8d3f93a6->leave($__internal_ddd954d62e4ed263e0a88ca3850845a610601adf1e1e74b7881a3abd8d3f93a6_prof);

        
        $__internal_7075a8d8ec465e27ea4aa14928023f077004a1c8ab65a96b614cb511133ffe47->leave($__internal_7075a8d8ec465e27ea4aa14928023f077004a1c8ab65a96b614cb511133ffe47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
