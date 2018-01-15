<?php

/* form_table_layout.html.twig */
class __TwigTemplate_af17fc375f5969e8c9bb9904ae1f7182b555c587d920bdd6e8e18f5e072a8f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e97028948738c06543682ca4c56398635b1dc06cca9d05672fbd7ba7fae4de76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97028948738c06543682ca4c56398635b1dc06cca9d05672fbd7ba7fae4de76->enter($__internal_e97028948738c06543682ca4c56398635b1dc06cca9d05672fbd7ba7fae4de76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_298f25adb73cad8fe76a93df1ff594be8bc65969a14125e952f9c88d33d70a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298f25adb73cad8fe76a93df1ff594be8bc65969a14125e952f9c88d33d70a25->enter($__internal_298f25adb73cad8fe76a93df1ff594be8bc65969a14125e952f9c88d33d70a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e97028948738c06543682ca4c56398635b1dc06cca9d05672fbd7ba7fae4de76->leave($__internal_e97028948738c06543682ca4c56398635b1dc06cca9d05672fbd7ba7fae4de76_prof);

        
        $__internal_298f25adb73cad8fe76a93df1ff594be8bc65969a14125e952f9c88d33d70a25->leave($__internal_298f25adb73cad8fe76a93df1ff594be8bc65969a14125e952f9c88d33d70a25_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_979642e967f20e9689275ad6bdaf1fb9142e04843bf0c271247f4d9eefc617fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979642e967f20e9689275ad6bdaf1fb9142e04843bf0c271247f4d9eefc617fc->enter($__internal_979642e967f20e9689275ad6bdaf1fb9142e04843bf0c271247f4d9eefc617fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a83bc7d8b2c858cad0473c3c812802d77a7c690674d0d35b625ba05c91f89c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83bc7d8b2c858cad0473c3c812802d77a7c690674d0d35b625ba05c91f89c75->enter($__internal_a83bc7d8b2c858cad0473c3c812802d77a7c690674d0d35b625ba05c91f89c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a83bc7d8b2c858cad0473c3c812802d77a7c690674d0d35b625ba05c91f89c75->leave($__internal_a83bc7d8b2c858cad0473c3c812802d77a7c690674d0d35b625ba05c91f89c75_prof);

        
        $__internal_979642e967f20e9689275ad6bdaf1fb9142e04843bf0c271247f4d9eefc617fc->leave($__internal_979642e967f20e9689275ad6bdaf1fb9142e04843bf0c271247f4d9eefc617fc_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1581602af2e8c4867b790ea0089b9142a2838af79f9eafd5415f6d797d0a6f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1581602af2e8c4867b790ea0089b9142a2838af79f9eafd5415f6d797d0a6f6f->enter($__internal_1581602af2e8c4867b790ea0089b9142a2838af79f9eafd5415f6d797d0a6f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4193cbf54a433c1d9fb8f3345117238c7e314e0a4704ba3e41030986b0552ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4193cbf54a433c1d9fb8f3345117238c7e314e0a4704ba3e41030986b0552ac3->enter($__internal_4193cbf54a433c1d9fb8f3345117238c7e314e0a4704ba3e41030986b0552ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_4193cbf54a433c1d9fb8f3345117238c7e314e0a4704ba3e41030986b0552ac3->leave($__internal_4193cbf54a433c1d9fb8f3345117238c7e314e0a4704ba3e41030986b0552ac3_prof);

        
        $__internal_1581602af2e8c4867b790ea0089b9142a2838af79f9eafd5415f6d797d0a6f6f->leave($__internal_1581602af2e8c4867b790ea0089b9142a2838af79f9eafd5415f6d797d0a6f6f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0e6d7c8f1fd989da908e89fb41321727f77a066ebd176357cfaa0265d2dd668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6d7c8f1fd989da908e89fb41321727f77a066ebd176357cfaa0265d2dd668d->enter($__internal_0e6d7c8f1fd989da908e89fb41321727f77a066ebd176357cfaa0265d2dd668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_45eaee7e5039bd98dc6255e6ee4f6f50b95794224f456a60786035f87937ffcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45eaee7e5039bd98dc6255e6ee4f6f50b95794224f456a60786035f87937ffcb->enter($__internal_45eaee7e5039bd98dc6255e6ee4f6f50b95794224f456a60786035f87937ffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_45eaee7e5039bd98dc6255e6ee4f6f50b95794224f456a60786035f87937ffcb->leave($__internal_45eaee7e5039bd98dc6255e6ee4f6f50b95794224f456a60786035f87937ffcb_prof);

        
        $__internal_0e6d7c8f1fd989da908e89fb41321727f77a066ebd176357cfaa0265d2dd668d->leave($__internal_0e6d7c8f1fd989da908e89fb41321727f77a066ebd176357cfaa0265d2dd668d_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bda32ceb676f29f5a54751118ae07a1877c3ff01762cf870b7132567952e0848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda32ceb676f29f5a54751118ae07a1877c3ff01762cf870b7132567952e0848->enter($__internal_bda32ceb676f29f5a54751118ae07a1877c3ff01762cf870b7132567952e0848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_60f105b0734f8ffd840445cfecccb7a197205593f4dcaae4c29625cec15dbe23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f105b0734f8ffd840445cfecccb7a197205593f4dcaae4c29625cec15dbe23->enter($__internal_60f105b0734f8ffd840445cfecccb7a197205593f4dcaae4c29625cec15dbe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_60f105b0734f8ffd840445cfecccb7a197205593f4dcaae4c29625cec15dbe23->leave($__internal_60f105b0734f8ffd840445cfecccb7a197205593f4dcaae4c29625cec15dbe23_prof);

        
        $__internal_bda32ceb676f29f5a54751118ae07a1877c3ff01762cf870b7132567952e0848->leave($__internal_bda32ceb676f29f5a54751118ae07a1877c3ff01762cf870b7132567952e0848_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
