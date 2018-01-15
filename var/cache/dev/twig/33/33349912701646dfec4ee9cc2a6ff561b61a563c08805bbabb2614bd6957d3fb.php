<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_09d1ac56b2673894d28a080065e9a10f2fc797ded9df70c290839c498a92372e extends Twig_Template
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
        $__internal_df2d12f98b066c4a5af2fe956d69f50ac9771b6c5fa450f963210b2d554a7c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2d12f98b066c4a5af2fe956d69f50ac9771b6c5fa450f963210b2d554a7c05->enter($__internal_df2d12f98b066c4a5af2fe956d69f50ac9771b6c5fa450f963210b2d554a7c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_33b53a46468cbc763efb284f22841c0dd97206aade4ec844475dce5dd416eabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b53a46468cbc763efb284f22841c0dd97206aade4ec844475dce5dd416eabf->enter($__internal_33b53a46468cbc763efb284f22841c0dd97206aade4ec844475dce5dd416eabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_df2d12f98b066c4a5af2fe956d69f50ac9771b6c5fa450f963210b2d554a7c05->leave($__internal_df2d12f98b066c4a5af2fe956d69f50ac9771b6c5fa450f963210b2d554a7c05_prof);

        
        $__internal_33b53a46468cbc763efb284f22841c0dd97206aade4ec844475dce5dd416eabf->leave($__internal_33b53a46468cbc763efb284f22841c0dd97206aade4ec844475dce5dd416eabf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
