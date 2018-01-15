<?php

/* form_div_layout.html.twig */
class __TwigTemplate_e81dcddd9593889a36e5da6c4583e088d2ec663c9a5c423b74cab06b8f19db0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8b471c7be7284516240e1a9381f25c1f35931f654da057bdc1222a9d1e8188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8b471c7be7284516240e1a9381f25c1f35931f654da057bdc1222a9d1e8188->enter($__internal_bd8b471c7be7284516240e1a9381f25c1f35931f654da057bdc1222a9d1e8188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_a5d73305bea6ceff175944987cfa64fc20b7216d0ecc41bbdaff34b088406e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d73305bea6ceff175944987cfa64fc20b7216d0ecc41bbdaff34b088406e84->enter($__internal_a5d73305bea6ceff175944987cfa64fc20b7216d0ecc41bbdaff34b088406e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_bd8b471c7be7284516240e1a9381f25c1f35931f654da057bdc1222a9d1e8188->leave($__internal_bd8b471c7be7284516240e1a9381f25c1f35931f654da057bdc1222a9d1e8188_prof);

        
        $__internal_a5d73305bea6ceff175944987cfa64fc20b7216d0ecc41bbdaff34b088406e84->leave($__internal_a5d73305bea6ceff175944987cfa64fc20b7216d0ecc41bbdaff34b088406e84_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_48e2f365210c2a3f428c0785012fb28a8fd3a3ccc89b386325088dc975e67642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e2f365210c2a3f428c0785012fb28a8fd3a3ccc89b386325088dc975e67642->enter($__internal_48e2f365210c2a3f428c0785012fb28a8fd3a3ccc89b386325088dc975e67642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6888eeafd7c17b5ebc9668c7ee59edeb7212ae0f0a4c3740cc1692bac3e1f7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6888eeafd7c17b5ebc9668c7ee59edeb7212ae0f0a4c3740cc1692bac3e1f7fc->enter($__internal_6888eeafd7c17b5ebc9668c7ee59edeb7212ae0f0a4c3740cc1692bac3e1f7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6888eeafd7c17b5ebc9668c7ee59edeb7212ae0f0a4c3740cc1692bac3e1f7fc->leave($__internal_6888eeafd7c17b5ebc9668c7ee59edeb7212ae0f0a4c3740cc1692bac3e1f7fc_prof);

        
        $__internal_48e2f365210c2a3f428c0785012fb28a8fd3a3ccc89b386325088dc975e67642->leave($__internal_48e2f365210c2a3f428c0785012fb28a8fd3a3ccc89b386325088dc975e67642_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_617b42edef794b5bb2f73b505e57675c2ee594e11ff5552b54d9d02ea5826fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617b42edef794b5bb2f73b505e57675c2ee594e11ff5552b54d9d02ea5826fa1->enter($__internal_617b42edef794b5bb2f73b505e57675c2ee594e11ff5552b54d9d02ea5826fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e7a87bf9c5190039955768f2af238fa191b3ade627f1172815bf1d7b9ec4f377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a87bf9c5190039955768f2af238fa191b3ade627f1172815bf1d7b9ec4f377->enter($__internal_e7a87bf9c5190039955768f2af238fa191b3ade627f1172815bf1d7b9ec4f377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_e7a87bf9c5190039955768f2af238fa191b3ade627f1172815bf1d7b9ec4f377->leave($__internal_e7a87bf9c5190039955768f2af238fa191b3ade627f1172815bf1d7b9ec4f377_prof);

        
        $__internal_617b42edef794b5bb2f73b505e57675c2ee594e11ff5552b54d9d02ea5826fa1->leave($__internal_617b42edef794b5bb2f73b505e57675c2ee594e11ff5552b54d9d02ea5826fa1_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6965916cb39bf95f65050ed031a2541a9bfeb737b92262ef6c3ba4ca6384262b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6965916cb39bf95f65050ed031a2541a9bfeb737b92262ef6c3ba4ca6384262b->enter($__internal_6965916cb39bf95f65050ed031a2541a9bfeb737b92262ef6c3ba4ca6384262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a720ca0b3ebdbbab83ef4e664f9dac094117793e0219992c84ede291df1de778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a720ca0b3ebdbbab83ef4e664f9dac094117793e0219992c84ede291df1de778->enter($__internal_a720ca0b3ebdbbab83ef4e664f9dac094117793e0219992c84ede291df1de778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_a720ca0b3ebdbbab83ef4e664f9dac094117793e0219992c84ede291df1de778->leave($__internal_a720ca0b3ebdbbab83ef4e664f9dac094117793e0219992c84ede291df1de778_prof);

        
        $__internal_6965916cb39bf95f65050ed031a2541a9bfeb737b92262ef6c3ba4ca6384262b->leave($__internal_6965916cb39bf95f65050ed031a2541a9bfeb737b92262ef6c3ba4ca6384262b_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_5b7f5722a95ebae6faee99505e66bea5d5cc643973ba6b6f9c9082729f1d4b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7f5722a95ebae6faee99505e66bea5d5cc643973ba6b6f9c9082729f1d4b91->enter($__internal_5b7f5722a95ebae6faee99505e66bea5d5cc643973ba6b6f9c9082729f1d4b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_d75fbbc3134bd9037b689345651e497b7079188050b11b9ec036a75a511a1b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75fbbc3134bd9037b689345651e497b7079188050b11b9ec036a75a511a1b8b->enter($__internal_d75fbbc3134bd9037b689345651e497b7079188050b11b9ec036a75a511a1b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_d75fbbc3134bd9037b689345651e497b7079188050b11b9ec036a75a511a1b8b->leave($__internal_d75fbbc3134bd9037b689345651e497b7079188050b11b9ec036a75a511a1b8b_prof);

        
        $__internal_5b7f5722a95ebae6faee99505e66bea5d5cc643973ba6b6f9c9082729f1d4b91->leave($__internal_5b7f5722a95ebae6faee99505e66bea5d5cc643973ba6b6f9c9082729f1d4b91_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_05ac7d63fba245bd1229eec97c52c847570a92bcc3525db744da66e2be34022e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ac7d63fba245bd1229eec97c52c847570a92bcc3525db744da66e2be34022e->enter($__internal_05ac7d63fba245bd1229eec97c52c847570a92bcc3525db744da66e2be34022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d46eaf2babed93db577f5a7b9e058a80be39c25d615bbea36594106aaa22c7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46eaf2babed93db577f5a7b9e058a80be39c25d615bbea36594106aaa22c7a6->enter($__internal_d46eaf2babed93db577f5a7b9e058a80be39c25d615bbea36594106aaa22c7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_d46eaf2babed93db577f5a7b9e058a80be39c25d615bbea36594106aaa22c7a6->leave($__internal_d46eaf2babed93db577f5a7b9e058a80be39c25d615bbea36594106aaa22c7a6_prof);

        
        $__internal_05ac7d63fba245bd1229eec97c52c847570a92bcc3525db744da66e2be34022e->leave($__internal_05ac7d63fba245bd1229eec97c52c847570a92bcc3525db744da66e2be34022e_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_295e1f1689c5c7541af890b40388ffd9076a403b6756d5d8df34e460c1967035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295e1f1689c5c7541af890b40388ffd9076a403b6756d5d8df34e460c1967035->enter($__internal_295e1f1689c5c7541af890b40388ffd9076a403b6756d5d8df34e460c1967035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_440fc20593897c145dd79d1722f0a40751bf63a8c6d734e28a84ed056338b078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440fc20593897c145dd79d1722f0a40751bf63a8c6d734e28a84ed056338b078->enter($__internal_440fc20593897c145dd79d1722f0a40751bf63a8c6d734e28a84ed056338b078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_440fc20593897c145dd79d1722f0a40751bf63a8c6d734e28a84ed056338b078->leave($__internal_440fc20593897c145dd79d1722f0a40751bf63a8c6d734e28a84ed056338b078_prof);

        
        $__internal_295e1f1689c5c7541af890b40388ffd9076a403b6756d5d8df34e460c1967035->leave($__internal_295e1f1689c5c7541af890b40388ffd9076a403b6756d5d8df34e460c1967035_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d0ad07d4e87c93a2f65fa3b4eb819f442d819a4a51aff6e3f8b1d3fb31df50f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ad07d4e87c93a2f65fa3b4eb819f442d819a4a51aff6e3f8b1d3fb31df50f5->enter($__internal_d0ad07d4e87c93a2f65fa3b4eb819f442d819a4a51aff6e3f8b1d3fb31df50f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9209b6c5808e79c8d25cfbe3715892fc5b3f5b892a38820667b4947d84873dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9209b6c5808e79c8d25cfbe3715892fc5b3f5b892a38820667b4947d84873dff->enter($__internal_9209b6c5808e79c8d25cfbe3715892fc5b3f5b892a38820667b4947d84873dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_9209b6c5808e79c8d25cfbe3715892fc5b3f5b892a38820667b4947d84873dff->leave($__internal_9209b6c5808e79c8d25cfbe3715892fc5b3f5b892a38820667b4947d84873dff_prof);

        
        $__internal_d0ad07d4e87c93a2f65fa3b4eb819f442d819a4a51aff6e3f8b1d3fb31df50f5->leave($__internal_d0ad07d4e87c93a2f65fa3b4eb819f442d819a4a51aff6e3f8b1d3fb31df50f5_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c33d1f629321ef088247bfb247706f06c4fd1503bbefef5cd266e69872f78e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33d1f629321ef088247bfb247706f06c4fd1503bbefef5cd266e69872f78e30->enter($__internal_c33d1f629321ef088247bfb247706f06c4fd1503bbefef5cd266e69872f78e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d902ccd9c1677950389c243e00c7f6cd448db1807ef6f7c872f601c52e50c845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d902ccd9c1677950389c243e00c7f6cd448db1807ef6f7c872f601c52e50c845->enter($__internal_d902ccd9c1677950389c243e00c7f6cd448db1807ef6f7c872f601c52e50c845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_d902ccd9c1677950389c243e00c7f6cd448db1807ef6f7c872f601c52e50c845->leave($__internal_d902ccd9c1677950389c243e00c7f6cd448db1807ef6f7c872f601c52e50c845_prof);

        
        $__internal_c33d1f629321ef088247bfb247706f06c4fd1503bbefef5cd266e69872f78e30->leave($__internal_c33d1f629321ef088247bfb247706f06c4fd1503bbefef5cd266e69872f78e30_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_d6e6c74df8977bd9488bfe1a996a7b5916892bc500e12e636a6723563f228825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e6c74df8977bd9488bfe1a996a7b5916892bc500e12e636a6723563f228825->enter($__internal_d6e6c74df8977bd9488bfe1a996a7b5916892bc500e12e636a6723563f228825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_acd642d75c77b284b682468a62c0d7c34323342ddf83a8f0f33fb01dff87cfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd642d75c77b284b682468a62c0d7c34323342ddf83a8f0f33fb01dff87cfc8->enter($__internal_acd642d75c77b284b682468a62c0d7c34323342ddf83a8f0f33fb01dff87cfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_b7d574574a9973c15cb001e83bde251b3f2ed955bd176e4032902f36db3a43b8 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_b7d574574a9973c15cb001e83bde251b3f2ed955bd176e4032902f36db3a43b8)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_b7d574574a9973c15cb001e83bde251b3f2ed955bd176e4032902f36db3a43b8);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_acd642d75c77b284b682468a62c0d7c34323342ddf83a8f0f33fb01dff87cfc8->leave($__internal_acd642d75c77b284b682468a62c0d7c34323342ddf83a8f0f33fb01dff87cfc8_prof);

        
        $__internal_d6e6c74df8977bd9488bfe1a996a7b5916892bc500e12e636a6723563f228825->leave($__internal_d6e6c74df8977bd9488bfe1a996a7b5916892bc500e12e636a6723563f228825_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2f546c21ce9a79cab3720eeba1e033d907a8f976bc3319ae4e48d667d4e3ecb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f546c21ce9a79cab3720eeba1e033d907a8f976bc3319ae4e48d667d4e3ecb1->enter($__internal_2f546c21ce9a79cab3720eeba1e033d907a8f976bc3319ae4e48d667d4e3ecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6b6c8c1abe4da4a185e2468f261668289d7e681879f95bbedfcc92996c8b826f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6c8c1abe4da4a185e2468f261668289d7e681879f95bbedfcc92996c8b826f->enter($__internal_6b6c8c1abe4da4a185e2468f261668289d7e681879f95bbedfcc92996c8b826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6b6c8c1abe4da4a185e2468f261668289d7e681879f95bbedfcc92996c8b826f->leave($__internal_6b6c8c1abe4da4a185e2468f261668289d7e681879f95bbedfcc92996c8b826f_prof);

        
        $__internal_2f546c21ce9a79cab3720eeba1e033d907a8f976bc3319ae4e48d667d4e3ecb1->leave($__internal_2f546c21ce9a79cab3720eeba1e033d907a8f976bc3319ae4e48d667d4e3ecb1_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fe02d14832986025eb8d0b1de09a7554135025d96fcc1cac5d992764c8254b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe02d14832986025eb8d0b1de09a7554135025d96fcc1cac5d992764c8254b98->enter($__internal_fe02d14832986025eb8d0b1de09a7554135025d96fcc1cac5d992764c8254b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e4b998521ee4ec88daee329525bb56ede6d023ea4091b9805eb43cf0671a4487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b998521ee4ec88daee329525bb56ede6d023ea4091b9805eb43cf0671a4487->enter($__internal_e4b998521ee4ec88daee329525bb56ede6d023ea4091b9805eb43cf0671a4487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_e4b998521ee4ec88daee329525bb56ede6d023ea4091b9805eb43cf0671a4487->leave($__internal_e4b998521ee4ec88daee329525bb56ede6d023ea4091b9805eb43cf0671a4487_prof);

        
        $__internal_fe02d14832986025eb8d0b1de09a7554135025d96fcc1cac5d992764c8254b98->leave($__internal_fe02d14832986025eb8d0b1de09a7554135025d96fcc1cac5d992764c8254b98_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e7bc7852f1a4914f9f2ecad1cd6109a2b3df8a4a0ce9e84c35f9da0903ae245c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bc7852f1a4914f9f2ecad1cd6109a2b3df8a4a0ce9e84c35f9da0903ae245c->enter($__internal_e7bc7852f1a4914f9f2ecad1cd6109a2b3df8a4a0ce9e84c35f9da0903ae245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d867895d8001330ef1e2c6b0c63e9a0aaa99c6aea5ae9f765f78ca909898b043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d867895d8001330ef1e2c6b0c63e9a0aaa99c6aea5ae9f765f78ca909898b043->enter($__internal_d867895d8001330ef1e2c6b0c63e9a0aaa99c6aea5ae9f765f78ca909898b043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_d867895d8001330ef1e2c6b0c63e9a0aaa99c6aea5ae9f765f78ca909898b043->leave($__internal_d867895d8001330ef1e2c6b0c63e9a0aaa99c6aea5ae9f765f78ca909898b043_prof);

        
        $__internal_e7bc7852f1a4914f9f2ecad1cd6109a2b3df8a4a0ce9e84c35f9da0903ae245c->leave($__internal_e7bc7852f1a4914f9f2ecad1cd6109a2b3df8a4a0ce9e84c35f9da0903ae245c_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5949f981226ffe96bb54f7abe6bcebb1c666ce7bdbbfa20cc2ecedb08b800aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5949f981226ffe96bb54f7abe6bcebb1c666ce7bdbbfa20cc2ecedb08b800aa7->enter($__internal_5949f981226ffe96bb54f7abe6bcebb1c666ce7bdbbfa20cc2ecedb08b800aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9c98b86523bc357375bf9c65979f3e79775b43329bc7310f5f2d86fefe0e6f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c98b86523bc357375bf9c65979f3e79775b43329bc7310f5f2d86fefe0e6f48->enter($__internal_9c98b86523bc357375bf9c65979f3e79775b43329bc7310f5f2d86fefe0e6f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_9c98b86523bc357375bf9c65979f3e79775b43329bc7310f5f2d86fefe0e6f48->leave($__internal_9c98b86523bc357375bf9c65979f3e79775b43329bc7310f5f2d86fefe0e6f48_prof);

        
        $__internal_5949f981226ffe96bb54f7abe6bcebb1c666ce7bdbbfa20cc2ecedb08b800aa7->leave($__internal_5949f981226ffe96bb54f7abe6bcebb1c666ce7bdbbfa20cc2ecedb08b800aa7_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2245789cf2c7835a1a39e731e824779a3498478b990e1a3040b52ae5a89a2d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2245789cf2c7835a1a39e731e824779a3498478b990e1a3040b52ae5a89a2d98->enter($__internal_2245789cf2c7835a1a39e731e824779a3498478b990e1a3040b52ae5a89a2d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9c3f8d37724125fe63dca8345ef8974ff54812f098de5c8c258f7a6a821cd3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3f8d37724125fe63dca8345ef8974ff54812f098de5c8c258f7a6a821cd3ca->enter($__internal_9c3f8d37724125fe63dca8345ef8974ff54812f098de5c8c258f7a6a821cd3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_9c3f8d37724125fe63dca8345ef8974ff54812f098de5c8c258f7a6a821cd3ca->leave($__internal_9c3f8d37724125fe63dca8345ef8974ff54812f098de5c8c258f7a6a821cd3ca_prof);

        
        $__internal_2245789cf2c7835a1a39e731e824779a3498478b990e1a3040b52ae5a89a2d98->leave($__internal_2245789cf2c7835a1a39e731e824779a3498478b990e1a3040b52ae5a89a2d98_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b5f0db2e26f931204a941d0045bdda637c6a531ecb485f83735d809609bbeeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f0db2e26f931204a941d0045bdda637c6a531ecb485f83735d809609bbeeb6->enter($__internal_b5f0db2e26f931204a941d0045bdda637c6a531ecb485f83735d809609bbeeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c41e48e0335a2d58f76266b7935bdb03dd848abb264d0c832bdd7a52abeeeea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41e48e0335a2d58f76266b7935bdb03dd848abb264d0c832bdd7a52abeeeea6->enter($__internal_c41e48e0335a2d58f76266b7935bdb03dd848abb264d0c832bdd7a52abeeeea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_c41e48e0335a2d58f76266b7935bdb03dd848abb264d0c832bdd7a52abeeeea6->leave($__internal_c41e48e0335a2d58f76266b7935bdb03dd848abb264d0c832bdd7a52abeeeea6_prof);

        
        $__internal_b5f0db2e26f931204a941d0045bdda637c6a531ecb485f83735d809609bbeeb6->leave($__internal_b5f0db2e26f931204a941d0045bdda637c6a531ecb485f83735d809609bbeeb6_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_a2909f50d0f5aa0665e1dc78f726f25f872a05ad76f9a2b1c85bdc7b5a100c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2909f50d0f5aa0665e1dc78f726f25f872a05ad76f9a2b1c85bdc7b5a100c80->enter($__internal_a2909f50d0f5aa0665e1dc78f726f25f872a05ad76f9a2b1c85bdc7b5a100c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_a134b0e3c0c719d34ff68babecedb42a32192e74d213c8ed376bc8a3bebb91c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a134b0e3c0c719d34ff68babecedb42a32192e74d213c8ed376bc8a3bebb91c7->enter($__internal_a134b0e3c0c719d34ff68babecedb42a32192e74d213c8ed376bc8a3bebb91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a134b0e3c0c719d34ff68babecedb42a32192e74d213c8ed376bc8a3bebb91c7->leave($__internal_a134b0e3c0c719d34ff68babecedb42a32192e74d213c8ed376bc8a3bebb91c7_prof);

        
        $__internal_a2909f50d0f5aa0665e1dc78f726f25f872a05ad76f9a2b1c85bdc7b5a100c80->leave($__internal_a2909f50d0f5aa0665e1dc78f726f25f872a05ad76f9a2b1c85bdc7b5a100c80_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_0b209372af0dfef661d72de87b9f3547e1ca2e601cbffea5d5193ff264bf6337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b209372af0dfef661d72de87b9f3547e1ca2e601cbffea5d5193ff264bf6337->enter($__internal_0b209372af0dfef661d72de87b9f3547e1ca2e601cbffea5d5193ff264bf6337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_8fcbd368bb1fb229c583865f23fdab1185d1f1018b6720f95fa4cf738e00067a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcbd368bb1fb229c583865f23fdab1185d1f1018b6720f95fa4cf738e00067a->enter($__internal_8fcbd368bb1fb229c583865f23fdab1185d1f1018b6720f95fa4cf738e00067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8fcbd368bb1fb229c583865f23fdab1185d1f1018b6720f95fa4cf738e00067a->leave($__internal_8fcbd368bb1fb229c583865f23fdab1185d1f1018b6720f95fa4cf738e00067a_prof);

        
        $__internal_0b209372af0dfef661d72de87b9f3547e1ca2e601cbffea5d5193ff264bf6337->leave($__internal_0b209372af0dfef661d72de87b9f3547e1ca2e601cbffea5d5193ff264bf6337_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e567543362058173e3b7593f0dbcc736c305fe63273e3e2d47f43b005c147b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e567543362058173e3b7593f0dbcc736c305fe63273e3e2d47f43b005c147b86->enter($__internal_e567543362058173e3b7593f0dbcc736c305fe63273e3e2d47f43b005c147b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9c8a6001804f584c1b9fc2d3cbec52c14b267ad3014e97044ecc2596159c0edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8a6001804f584c1b9fc2d3cbec52c14b267ad3014e97044ecc2596159c0edf->enter($__internal_9c8a6001804f584c1b9fc2d3cbec52c14b267ad3014e97044ecc2596159c0edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_9c8a6001804f584c1b9fc2d3cbec52c14b267ad3014e97044ecc2596159c0edf->leave($__internal_9c8a6001804f584c1b9fc2d3cbec52c14b267ad3014e97044ecc2596159c0edf_prof);

        
        $__internal_e567543362058173e3b7593f0dbcc736c305fe63273e3e2d47f43b005c147b86->leave($__internal_e567543362058173e3b7593f0dbcc736c305fe63273e3e2d47f43b005c147b86_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_727d3f70ec4a9af797645b0c82a96cb562be8eed7281d6ac3636295eb01ace05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727d3f70ec4a9af797645b0c82a96cb562be8eed7281d6ac3636295eb01ace05->enter($__internal_727d3f70ec4a9af797645b0c82a96cb562be8eed7281d6ac3636295eb01ace05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_96324800135ca4adbc1a05bb3f9c2fc37ae16b598d2ade42f5a6f160f6761236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96324800135ca4adbc1a05bb3f9c2fc37ae16b598d2ade42f5a6f160f6761236->enter($__internal_96324800135ca4adbc1a05bb3f9c2fc37ae16b598d2ade42f5a6f160f6761236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_96324800135ca4adbc1a05bb3f9c2fc37ae16b598d2ade42f5a6f160f6761236->leave($__internal_96324800135ca4adbc1a05bb3f9c2fc37ae16b598d2ade42f5a6f160f6761236_prof);

        
        $__internal_727d3f70ec4a9af797645b0c82a96cb562be8eed7281d6ac3636295eb01ace05->leave($__internal_727d3f70ec4a9af797645b0c82a96cb562be8eed7281d6ac3636295eb01ace05_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_692a97fa9646750a68dc4fe8b5b90f5190a75f3a7831ae745e7b13e361673e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692a97fa9646750a68dc4fe8b5b90f5190a75f3a7831ae745e7b13e361673e51->enter($__internal_692a97fa9646750a68dc4fe8b5b90f5190a75f3a7831ae745e7b13e361673e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_71777fa6518f62dd673d1626fdccdd70a6fe7dd319324838c3f01a0de4ed358c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71777fa6518f62dd673d1626fdccdd70a6fe7dd319324838c3f01a0de4ed358c->enter($__internal_71777fa6518f62dd673d1626fdccdd70a6fe7dd319324838c3f01a0de4ed358c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_71777fa6518f62dd673d1626fdccdd70a6fe7dd319324838c3f01a0de4ed358c->leave($__internal_71777fa6518f62dd673d1626fdccdd70a6fe7dd319324838c3f01a0de4ed358c_prof);

        
        $__internal_692a97fa9646750a68dc4fe8b5b90f5190a75f3a7831ae745e7b13e361673e51->leave($__internal_692a97fa9646750a68dc4fe8b5b90f5190a75f3a7831ae745e7b13e361673e51_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8b64f229489bcfe7a3e681665de8c8707ad6be5efc35f9e47d05f2c9219452df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b64f229489bcfe7a3e681665de8c8707ad6be5efc35f9e47d05f2c9219452df->enter($__internal_8b64f229489bcfe7a3e681665de8c8707ad6be5efc35f9e47d05f2c9219452df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_763e17acc70998d82111b8cb643d2fa954e764fcc67a761a4239716031469460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763e17acc70998d82111b8cb643d2fa954e764fcc67a761a4239716031469460->enter($__internal_763e17acc70998d82111b8cb643d2fa954e764fcc67a761a4239716031469460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_763e17acc70998d82111b8cb643d2fa954e764fcc67a761a4239716031469460->leave($__internal_763e17acc70998d82111b8cb643d2fa954e764fcc67a761a4239716031469460_prof);

        
        $__internal_8b64f229489bcfe7a3e681665de8c8707ad6be5efc35f9e47d05f2c9219452df->leave($__internal_8b64f229489bcfe7a3e681665de8c8707ad6be5efc35f9e47d05f2c9219452df_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_683dff11435950bd73ae2f6c0531823e85428e11790be176da5037b87cf54c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683dff11435950bd73ae2f6c0531823e85428e11790be176da5037b87cf54c11->enter($__internal_683dff11435950bd73ae2f6c0531823e85428e11790be176da5037b87cf54c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_e5c93982645671080ed57230f3d8b2c551f08c7fc5f0652f452721a86156c275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c93982645671080ed57230f3d8b2c551f08c7fc5f0652f452721a86156c275->enter($__internal_e5c93982645671080ed57230f3d8b2c551f08c7fc5f0652f452721a86156c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e5c93982645671080ed57230f3d8b2c551f08c7fc5f0652f452721a86156c275->leave($__internal_e5c93982645671080ed57230f3d8b2c551f08c7fc5f0652f452721a86156c275_prof);

        
        $__internal_683dff11435950bd73ae2f6c0531823e85428e11790be176da5037b87cf54c11->leave($__internal_683dff11435950bd73ae2f6c0531823e85428e11790be176da5037b87cf54c11_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_f93418914b5c835664327a44ceef8f53d178761c5d9458f1b49c907b9146d545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93418914b5c835664327a44ceef8f53d178761c5d9458f1b49c907b9146d545->enter($__internal_f93418914b5c835664327a44ceef8f53d178761c5d9458f1b49c907b9146d545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_55eb59f33da3c914146b8e21ffe82514305edf28daf45d8a3c3716478428811b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55eb59f33da3c914146b8e21ffe82514305edf28daf45d8a3c3716478428811b->enter($__internal_55eb59f33da3c914146b8e21ffe82514305edf28daf45d8a3c3716478428811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_55eb59f33da3c914146b8e21ffe82514305edf28daf45d8a3c3716478428811b->leave($__internal_55eb59f33da3c914146b8e21ffe82514305edf28daf45d8a3c3716478428811b_prof);

        
        $__internal_f93418914b5c835664327a44ceef8f53d178761c5d9458f1b49c907b9146d545->leave($__internal_f93418914b5c835664327a44ceef8f53d178761c5d9458f1b49c907b9146d545_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_54d73c8e92d50c26f95fd37b1e1c48ed27330bd24069aceb9d17cfd8ea9fc6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d73c8e92d50c26f95fd37b1e1c48ed27330bd24069aceb9d17cfd8ea9fc6e9->enter($__internal_54d73c8e92d50c26f95fd37b1e1c48ed27330bd24069aceb9d17cfd8ea9fc6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_1bf3ec8ae77aa8d76353ff3313ca68cf5c3e0f832725b76960f96724a06a9083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf3ec8ae77aa8d76353ff3313ca68cf5c3e0f832725b76960f96724a06a9083->enter($__internal_1bf3ec8ae77aa8d76353ff3313ca68cf5c3e0f832725b76960f96724a06a9083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1bf3ec8ae77aa8d76353ff3313ca68cf5c3e0f832725b76960f96724a06a9083->leave($__internal_1bf3ec8ae77aa8d76353ff3313ca68cf5c3e0f832725b76960f96724a06a9083_prof);

        
        $__internal_54d73c8e92d50c26f95fd37b1e1c48ed27330bd24069aceb9d17cfd8ea9fc6e9->leave($__internal_54d73c8e92d50c26f95fd37b1e1c48ed27330bd24069aceb9d17cfd8ea9fc6e9_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_38d256560e5ed0a743b2c8c6a668f440ffd28dfd0075c67558389fb4eba54768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d256560e5ed0a743b2c8c6a668f440ffd28dfd0075c67558389fb4eba54768->enter($__internal_38d256560e5ed0a743b2c8c6a668f440ffd28dfd0075c67558389fb4eba54768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_4eec44f90643fca4e600300b0b0d7999c4776cfb7bb9d8e434f8b681dc9e125f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eec44f90643fca4e600300b0b0d7999c4776cfb7bb9d8e434f8b681dc9e125f->enter($__internal_4eec44f90643fca4e600300b0b0d7999c4776cfb7bb9d8e434f8b681dc9e125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4eec44f90643fca4e600300b0b0d7999c4776cfb7bb9d8e434f8b681dc9e125f->leave($__internal_4eec44f90643fca4e600300b0b0d7999c4776cfb7bb9d8e434f8b681dc9e125f_prof);

        
        $__internal_38d256560e5ed0a743b2c8c6a668f440ffd28dfd0075c67558389fb4eba54768->leave($__internal_38d256560e5ed0a743b2c8c6a668f440ffd28dfd0075c67558389fb4eba54768_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fbc04202208c9b2589269b14b806c871c548866fea8a6f76756c30a55708e170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc04202208c9b2589269b14b806c871c548866fea8a6f76756c30a55708e170->enter($__internal_fbc04202208c9b2589269b14b806c871c548866fea8a6f76756c30a55708e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_98444f5c95603798a297a0f6b663ad8c1c0afb427388f0d688e09e8972d3e0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98444f5c95603798a297a0f6b663ad8c1c0afb427388f0d688e09e8972d3e0eb->enter($__internal_98444f5c95603798a297a0f6b663ad8c1c0afb427388f0d688e09e8972d3e0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_98444f5c95603798a297a0f6b663ad8c1c0afb427388f0d688e09e8972d3e0eb->leave($__internal_98444f5c95603798a297a0f6b663ad8c1c0afb427388f0d688e09e8972d3e0eb_prof);

        
        $__internal_fbc04202208c9b2589269b14b806c871c548866fea8a6f76756c30a55708e170->leave($__internal_fbc04202208c9b2589269b14b806c871c548866fea8a6f76756c30a55708e170_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_88e9a6cdc82af5436bdbba0ced4b8f4e1ff33e0eb901a84ee3068cfae6fdc553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e9a6cdc82af5436bdbba0ced4b8f4e1ff33e0eb901a84ee3068cfae6fdc553->enter($__internal_88e9a6cdc82af5436bdbba0ced4b8f4e1ff33e0eb901a84ee3068cfae6fdc553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_6fa1cb3d648db5eef84a4685f69349adb26b4dbe73c7cf341ee9e9cd348cd89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa1cb3d648db5eef84a4685f69349adb26b4dbe73c7cf341ee9e9cd348cd89d->enter($__internal_6fa1cb3d648db5eef84a4685f69349adb26b4dbe73c7cf341ee9e9cd348cd89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_6fa1cb3d648db5eef84a4685f69349adb26b4dbe73c7cf341ee9e9cd348cd89d->leave($__internal_6fa1cb3d648db5eef84a4685f69349adb26b4dbe73c7cf341ee9e9cd348cd89d_prof);

        
        $__internal_88e9a6cdc82af5436bdbba0ced4b8f4e1ff33e0eb901a84ee3068cfae6fdc553->leave($__internal_88e9a6cdc82af5436bdbba0ced4b8f4e1ff33e0eb901a84ee3068cfae6fdc553_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_ec50f59ee5d5995f9500a40863926904a066b087c7ff947bb664fca3e2f9c41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec50f59ee5d5995f9500a40863926904a066b087c7ff947bb664fca3e2f9c41e->enter($__internal_ec50f59ee5d5995f9500a40863926904a066b087c7ff947bb664fca3e2f9c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_65178488ed9a449c1ee40fa56f5dd27c61613e2a6a7b16b7d570c44cd4cedd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65178488ed9a449c1ee40fa56f5dd27c61613e2a6a7b16b7d570c44cd4cedd63->enter($__internal_65178488ed9a449c1ee40fa56f5dd27c61613e2a6a7b16b7d570c44cd4cedd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_65178488ed9a449c1ee40fa56f5dd27c61613e2a6a7b16b7d570c44cd4cedd63->leave($__internal_65178488ed9a449c1ee40fa56f5dd27c61613e2a6a7b16b7d570c44cd4cedd63_prof);

        
        $__internal_ec50f59ee5d5995f9500a40863926904a066b087c7ff947bb664fca3e2f9c41e->leave($__internal_ec50f59ee5d5995f9500a40863926904a066b087c7ff947bb664fca3e2f9c41e_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_cd29d6c6a34c87304c14f5443c0520ab318731d10be7d9568d1193d008711030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd29d6c6a34c87304c14f5443c0520ab318731d10be7d9568d1193d008711030->enter($__internal_cd29d6c6a34c87304c14f5443c0520ab318731d10be7d9568d1193d008711030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_006b9da1c19bb952d34834f3685f46a44a3625f02d81d5a501adb1d020e67c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006b9da1c19bb952d34834f3685f46a44a3625f02d81d5a501adb1d020e67c23->enter($__internal_006b9da1c19bb952d34834f3685f46a44a3625f02d81d5a501adb1d020e67c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_006b9da1c19bb952d34834f3685f46a44a3625f02d81d5a501adb1d020e67c23->leave($__internal_006b9da1c19bb952d34834f3685f46a44a3625f02d81d5a501adb1d020e67c23_prof);

        
        $__internal_cd29d6c6a34c87304c14f5443c0520ab318731d10be7d9568d1193d008711030->leave($__internal_cd29d6c6a34c87304c14f5443c0520ab318731d10be7d9568d1193d008711030_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_39b8a8306f14d906c0b7f57afcf8adb6eab0c26f50299f62fd1baebf55105c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b8a8306f14d906c0b7f57afcf8adb6eab0c26f50299f62fd1baebf55105c86->enter($__internal_39b8a8306f14d906c0b7f57afcf8adb6eab0c26f50299f62fd1baebf55105c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_66715b95a9dab0fab3d7b1b2bcf6f448891f784e7cf107c918fc55b3ae74008a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66715b95a9dab0fab3d7b1b2bcf6f448891f784e7cf107c918fc55b3ae74008a->enter($__internal_66715b95a9dab0fab3d7b1b2bcf6f448891f784e7cf107c918fc55b3ae74008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_66715b95a9dab0fab3d7b1b2bcf6f448891f784e7cf107c918fc55b3ae74008a->leave($__internal_66715b95a9dab0fab3d7b1b2bcf6f448891f784e7cf107c918fc55b3ae74008a_prof);

        
        $__internal_39b8a8306f14d906c0b7f57afcf8adb6eab0c26f50299f62fd1baebf55105c86->leave($__internal_39b8a8306f14d906c0b7f57afcf8adb6eab0c26f50299f62fd1baebf55105c86_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8fc3898278390477448c6d56b238337f030869cd844c5d0f327a4ed3e138e003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc3898278390477448c6d56b238337f030869cd844c5d0f327a4ed3e138e003->enter($__internal_8fc3898278390477448c6d56b238337f030869cd844c5d0f327a4ed3e138e003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6b0c46cbdb41f59bb707f4b79d38e9a78b0a8339f15667f6a7cd810ab973d4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0c46cbdb41f59bb707f4b79d38e9a78b0a8339f15667f6a7cd810ab973d4d9->enter($__internal_6b0c46cbdb41f59bb707f4b79d38e9a78b0a8339f15667f6a7cd810ab973d4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_24bc652093b9a4bcb6890a1312863481a040f8e3836d511a856f6dd7292303a0 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_24bc652093b9a4bcb6890a1312863481a040f8e3836d511a856f6dd7292303a0)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_24bc652093b9a4bcb6890a1312863481a040f8e3836d511a856f6dd7292303a0);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_6b0c46cbdb41f59bb707f4b79d38e9a78b0a8339f15667f6a7cd810ab973d4d9->leave($__internal_6b0c46cbdb41f59bb707f4b79d38e9a78b0a8339f15667f6a7cd810ab973d4d9_prof);

        
        $__internal_8fc3898278390477448c6d56b238337f030869cd844c5d0f327a4ed3e138e003->leave($__internal_8fc3898278390477448c6d56b238337f030869cd844c5d0f327a4ed3e138e003_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_c54d93ebe5a2caf217d75c2c3381d03c2447b17d1e8abb798dc14c1fe8d35236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54d93ebe5a2caf217d75c2c3381d03c2447b17d1e8abb798dc14c1fe8d35236->enter($__internal_c54d93ebe5a2caf217d75c2c3381d03c2447b17d1e8abb798dc14c1fe8d35236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_f367fd844a26160191155f7e1e057ed5f7d4e539c0e47e63acce6b2f62300278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f367fd844a26160191155f7e1e057ed5f7d4e539c0e47e63acce6b2f62300278->enter($__internal_f367fd844a26160191155f7e1e057ed5f7d4e539c0e47e63acce6b2f62300278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_f367fd844a26160191155f7e1e057ed5f7d4e539c0e47e63acce6b2f62300278->leave($__internal_f367fd844a26160191155f7e1e057ed5f7d4e539c0e47e63acce6b2f62300278_prof);

        
        $__internal_c54d93ebe5a2caf217d75c2c3381d03c2447b17d1e8abb798dc14c1fe8d35236->leave($__internal_c54d93ebe5a2caf217d75c2c3381d03c2447b17d1e8abb798dc14c1fe8d35236_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_ddc904ed5b53c34dd22123502cfc23e46142d9d56bbe5b31ed1afb70c516a34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc904ed5b53c34dd22123502cfc23e46142d9d56bbe5b31ed1afb70c516a34a->enter($__internal_ddc904ed5b53c34dd22123502cfc23e46142d9d56bbe5b31ed1afb70c516a34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_2dae365c191cc5e2e9978cb42b0dbccb7b42af97727b6b4bbeeb189b6c939769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dae365c191cc5e2e9978cb42b0dbccb7b42af97727b6b4bbeeb189b6c939769->enter($__internal_2dae365c191cc5e2e9978cb42b0dbccb7b42af97727b6b4bbeeb189b6c939769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_2dae365c191cc5e2e9978cb42b0dbccb7b42af97727b6b4bbeeb189b6c939769->leave($__internal_2dae365c191cc5e2e9978cb42b0dbccb7b42af97727b6b4bbeeb189b6c939769_prof);

        
        $__internal_ddc904ed5b53c34dd22123502cfc23e46142d9d56bbe5b31ed1afb70c516a34a->leave($__internal_ddc904ed5b53c34dd22123502cfc23e46142d9d56bbe5b31ed1afb70c516a34a_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2f796409cc89d0eb7b35419abe5d331f44150ba61c84c3b5bbac2c6aed237c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f796409cc89d0eb7b35419abe5d331f44150ba61c84c3b5bbac2c6aed237c07->enter($__internal_2f796409cc89d0eb7b35419abe5d331f44150ba61c84c3b5bbac2c6aed237c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6c17f872b883c50df72c9ae09fc6efcc72764710c155201f7a01c03a245f0d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c17f872b883c50df72c9ae09fc6efcc72764710c155201f7a01c03a245f0d35->enter($__internal_6c17f872b883c50df72c9ae09fc6efcc72764710c155201f7a01c03a245f0d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_6c17f872b883c50df72c9ae09fc6efcc72764710c155201f7a01c03a245f0d35->leave($__internal_6c17f872b883c50df72c9ae09fc6efcc72764710c155201f7a01c03a245f0d35_prof);

        
        $__internal_2f796409cc89d0eb7b35419abe5d331f44150ba61c84c3b5bbac2c6aed237c07->leave($__internal_2f796409cc89d0eb7b35419abe5d331f44150ba61c84c3b5bbac2c6aed237c07_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a9d120ff66ffdfabe9601abf526f05a212fb5df335615b172bd015881c48ed0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d120ff66ffdfabe9601abf526f05a212fb5df335615b172bd015881c48ed0e->enter($__internal_a9d120ff66ffdfabe9601abf526f05a212fb5df335615b172bd015881c48ed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a75a03c436e1b008eb897432686ccb4207a4dec6987c7353452eaa5f3a52eeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75a03c436e1b008eb897432686ccb4207a4dec6987c7353452eaa5f3a52eeaf->enter($__internal_a75a03c436e1b008eb897432686ccb4207a4dec6987c7353452eaa5f3a52eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_a75a03c436e1b008eb897432686ccb4207a4dec6987c7353452eaa5f3a52eeaf->leave($__internal_a75a03c436e1b008eb897432686ccb4207a4dec6987c7353452eaa5f3a52eeaf_prof);

        
        $__internal_a9d120ff66ffdfabe9601abf526f05a212fb5df335615b172bd015881c48ed0e->leave($__internal_a9d120ff66ffdfabe9601abf526f05a212fb5df335615b172bd015881c48ed0e_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_6eb0a4fab77ffdd74118eb0eb3f46e525abd8361bb4b0db25bd2b7e5d042f618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb0a4fab77ffdd74118eb0eb3f46e525abd8361bb4b0db25bd2b7e5d042f618->enter($__internal_6eb0a4fab77ffdd74118eb0eb3f46e525abd8361bb4b0db25bd2b7e5d042f618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_f068f7fc1ecf417bff5fe325e0a5ae8dba9a9e9582fc0d5793ca515dd6e1f035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f068f7fc1ecf417bff5fe325e0a5ae8dba9a9e9582fc0d5793ca515dd6e1f035->enter($__internal_f068f7fc1ecf417bff5fe325e0a5ae8dba9a9e9582fc0d5793ca515dd6e1f035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_f068f7fc1ecf417bff5fe325e0a5ae8dba9a9e9582fc0d5793ca515dd6e1f035->leave($__internal_f068f7fc1ecf417bff5fe325e0a5ae8dba9a9e9582fc0d5793ca515dd6e1f035_prof);

        
        $__internal_6eb0a4fab77ffdd74118eb0eb3f46e525abd8361bb4b0db25bd2b7e5d042f618->leave($__internal_6eb0a4fab77ffdd74118eb0eb3f46e525abd8361bb4b0db25bd2b7e5d042f618_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_4c950680e2a5b6e690b29fe10f4c27be679636dac802b9ff4e27669e8011e518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c950680e2a5b6e690b29fe10f4c27be679636dac802b9ff4e27669e8011e518->enter($__internal_4c950680e2a5b6e690b29fe10f4c27be679636dac802b9ff4e27669e8011e518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_089b0dfaf3ae5a42622931e7d4be8004ac3eaad39254b730bfb3b53231f05329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089b0dfaf3ae5a42622931e7d4be8004ac3eaad39254b730bfb3b53231f05329->enter($__internal_089b0dfaf3ae5a42622931e7d4be8004ac3eaad39254b730bfb3b53231f05329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_089b0dfaf3ae5a42622931e7d4be8004ac3eaad39254b730bfb3b53231f05329->leave($__internal_089b0dfaf3ae5a42622931e7d4be8004ac3eaad39254b730bfb3b53231f05329_prof);

        
        $__internal_4c950680e2a5b6e690b29fe10f4c27be679636dac802b9ff4e27669e8011e518->leave($__internal_4c950680e2a5b6e690b29fe10f4c27be679636dac802b9ff4e27669e8011e518_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_f6f47646fb103151468fead4c1fb3bd9d5fe024e5e31167dea09f91a74413bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f47646fb103151468fead4c1fb3bd9d5fe024e5e31167dea09f91a74413bec->enter($__internal_f6f47646fb103151468fead4c1fb3bd9d5fe024e5e31167dea09f91a74413bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7d2f7be12be9cd4d38323cd11062ccf1456875945105f8025f5d753c3e1fe7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2f7be12be9cd4d38323cd11062ccf1456875945105f8025f5d753c3e1fe7eb->enter($__internal_7d2f7be12be9cd4d38323cd11062ccf1456875945105f8025f5d753c3e1fe7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_7d2f7be12be9cd4d38323cd11062ccf1456875945105f8025f5d753c3e1fe7eb->leave($__internal_7d2f7be12be9cd4d38323cd11062ccf1456875945105f8025f5d753c3e1fe7eb_prof);

        
        $__internal_f6f47646fb103151468fead4c1fb3bd9d5fe024e5e31167dea09f91a74413bec->leave($__internal_f6f47646fb103151468fead4c1fb3bd9d5fe024e5e31167dea09f91a74413bec_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_7ac96c3fa8f2bd7bc3744cb0025ee44543289c89b6da179f6000267a18455e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac96c3fa8f2bd7bc3744cb0025ee44543289c89b6da179f6000267a18455e4e->enter($__internal_7ac96c3fa8f2bd7bc3744cb0025ee44543289c89b6da179f6000267a18455e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_33e8b660d7662a213d57b211797a7c3fc5713ac19e732604f84203cb6beae2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e8b660d7662a213d57b211797a7c3fc5713ac19e732604f84203cb6beae2ba->enter($__internal_33e8b660d7662a213d57b211797a7c3fc5713ac19e732604f84203cb6beae2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_33e8b660d7662a213d57b211797a7c3fc5713ac19e732604f84203cb6beae2ba->leave($__internal_33e8b660d7662a213d57b211797a7c3fc5713ac19e732604f84203cb6beae2ba_prof);

        
        $__internal_7ac96c3fa8f2bd7bc3744cb0025ee44543289c89b6da179f6000267a18455e4e->leave($__internal_7ac96c3fa8f2bd7bc3744cb0025ee44543289c89b6da179f6000267a18455e4e_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_88189a06933db761162c52888fb1341d1968929c9f0b1d32a80340767e62ed82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88189a06933db761162c52888fb1341d1968929c9f0b1d32a80340767e62ed82->enter($__internal_88189a06933db761162c52888fb1341d1968929c9f0b1d32a80340767e62ed82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_eeba65e371c76818b70e76779d69411fc8e9e228f929e73a0a03ef41e386d502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeba65e371c76818b70e76779d69411fc8e9e228f929e73a0a03ef41e386d502->enter($__internal_eeba65e371c76818b70e76779d69411fc8e9e228f929e73a0a03ef41e386d502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_eeba65e371c76818b70e76779d69411fc8e9e228f929e73a0a03ef41e386d502->leave($__internal_eeba65e371c76818b70e76779d69411fc8e9e228f929e73a0a03ef41e386d502_prof);

        
        $__internal_88189a06933db761162c52888fb1341d1968929c9f0b1d32a80340767e62ed82->leave($__internal_88189a06933db761162c52888fb1341d1968929c9f0b1d32a80340767e62ed82_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_1f0f7a7751e076968a26f08ead801d108c3046ceb98e292125021d6bfd9e5564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0f7a7751e076968a26f08ead801d108c3046ceb98e292125021d6bfd9e5564->enter($__internal_1f0f7a7751e076968a26f08ead801d108c3046ceb98e292125021d6bfd9e5564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_57ecf04a17645614af483fe400cdd3cee3c95068c1c4d227dd4682cacc62b508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ecf04a17645614af483fe400cdd3cee3c95068c1c4d227dd4682cacc62b508->enter($__internal_57ecf04a17645614af483fe400cdd3cee3c95068c1c4d227dd4682cacc62b508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_57ecf04a17645614af483fe400cdd3cee3c95068c1c4d227dd4682cacc62b508->leave($__internal_57ecf04a17645614af483fe400cdd3cee3c95068c1c4d227dd4682cacc62b508_prof);

        
        $__internal_1f0f7a7751e076968a26f08ead801d108c3046ceb98e292125021d6bfd9e5564->leave($__internal_1f0f7a7751e076968a26f08ead801d108c3046ceb98e292125021d6bfd9e5564_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_c8dc3cec9e7e76c7fb74127824717cc78e67df39333cda00186fae7cac474f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dc3cec9e7e76c7fb74127824717cc78e67df39333cda00186fae7cac474f46->enter($__internal_c8dc3cec9e7e76c7fb74127824717cc78e67df39333cda00186fae7cac474f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_41dd74ebc174934aae56d3df0bb771619e3570744ffbdc336ff283e9d2c5e9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41dd74ebc174934aae56d3df0bb771619e3570744ffbdc336ff283e9d2c5e9bd->enter($__internal_41dd74ebc174934aae56d3df0bb771619e3570744ffbdc336ff283e9d2c5e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_41dd74ebc174934aae56d3df0bb771619e3570744ffbdc336ff283e9d2c5e9bd->leave($__internal_41dd74ebc174934aae56d3df0bb771619e3570744ffbdc336ff283e9d2c5e9bd_prof);

        
        $__internal_c8dc3cec9e7e76c7fb74127824717cc78e67df39333cda00186fae7cac474f46->leave($__internal_c8dc3cec9e7e76c7fb74127824717cc78e67df39333cda00186fae7cac474f46_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_813505966567b977907eb53d2e419c9e913f6412a998dacaea5e003961971a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813505966567b977907eb53d2e419c9e913f6412a998dacaea5e003961971a72->enter($__internal_813505966567b977907eb53d2e419c9e913f6412a998dacaea5e003961971a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_6fa699cda74e5f9f9413173498c017cc2535909d604dc514c3a4c2711bc53556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa699cda74e5f9f9413173498c017cc2535909d604dc514c3a4c2711bc53556->enter($__internal_6fa699cda74e5f9f9413173498c017cc2535909d604dc514c3a4c2711bc53556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_6fa699cda74e5f9f9413173498c017cc2535909d604dc514c3a4c2711bc53556->leave($__internal_6fa699cda74e5f9f9413173498c017cc2535909d604dc514c3a4c2711bc53556_prof);

        
        $__internal_813505966567b977907eb53d2e419c9e913f6412a998dacaea5e003961971a72->leave($__internal_813505966567b977907eb53d2e419c9e913f6412a998dacaea5e003961971a72_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_e5b79cf800a64d7a266d8eca41a2a816296a4e6fded48c7c06ed22f56584edb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b79cf800a64d7a266d8eca41a2a816296a4e6fded48c7c06ed22f56584edb9->enter($__internal_e5b79cf800a64d7a266d8eca41a2a816296a4e6fded48c7c06ed22f56584edb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_ce69aee87f7932a4fe1ebfb8f13a59c180277081651e89ca67cf5d72d8217975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce69aee87f7932a4fe1ebfb8f13a59c180277081651e89ca67cf5d72d8217975->enter($__internal_ce69aee87f7932a4fe1ebfb8f13a59c180277081651e89ca67cf5d72d8217975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_ce69aee87f7932a4fe1ebfb8f13a59c180277081651e89ca67cf5d72d8217975->leave($__internal_ce69aee87f7932a4fe1ebfb8f13a59c180277081651e89ca67cf5d72d8217975_prof);

        
        $__internal_e5b79cf800a64d7a266d8eca41a2a816296a4e6fded48c7c06ed22f56584edb9->leave($__internal_e5b79cf800a64d7a266d8eca41a2a816296a4e6fded48c7c06ed22f56584edb9_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_f92067094dc5aadd4386bfeba81d93dcf36d7a648aa9b55d28c048e743feba85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92067094dc5aadd4386bfeba81d93dcf36d7a648aa9b55d28c048e743feba85->enter($__internal_f92067094dc5aadd4386bfeba81d93dcf36d7a648aa9b55d28c048e743feba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_0b4061771b25f47f6b83336167063dc741b550b906d5785366fa6baf25689bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4061771b25f47f6b83336167063dc741b550b906d5785366fa6baf25689bac->enter($__internal_0b4061771b25f47f6b83336167063dc741b550b906d5785366fa6baf25689bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_0b4061771b25f47f6b83336167063dc741b550b906d5785366fa6baf25689bac->leave($__internal_0b4061771b25f47f6b83336167063dc741b550b906d5785366fa6baf25689bac_prof);

        
        $__internal_f92067094dc5aadd4386bfeba81d93dcf36d7a648aa9b55d28c048e743feba85->leave($__internal_f92067094dc5aadd4386bfeba81d93dcf36d7a648aa9b55d28c048e743feba85_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_ac0c10f3ce8a58ca97b710b2fbd2f13e805a533db08ad3f479f4d7e91c8c96b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0c10f3ce8a58ca97b710b2fbd2f13e805a533db08ad3f479f4d7e91c8c96b7->enter($__internal_ac0c10f3ce8a58ca97b710b2fbd2f13e805a533db08ad3f479f4d7e91c8c96b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_fb4444b9394ee4a6d4c47a89a80a9e6f07ec57b4191f52eba7905569ac7dea9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4444b9394ee4a6d4c47a89a80a9e6f07ec57b4191f52eba7905569ac7dea9f->enter($__internal_fb4444b9394ee4a6d4c47a89a80a9e6f07ec57b4191f52eba7905569ac7dea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fb4444b9394ee4a6d4c47a89a80a9e6f07ec57b4191f52eba7905569ac7dea9f->leave($__internal_fb4444b9394ee4a6d4c47a89a80a9e6f07ec57b4191f52eba7905569ac7dea9f_prof);

        
        $__internal_ac0c10f3ce8a58ca97b710b2fbd2f13e805a533db08ad3f479f4d7e91c8c96b7->leave($__internal_ac0c10f3ce8a58ca97b710b2fbd2f13e805a533db08ad3f479f4d7e91c8c96b7_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
