<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_cc48abe13c971e8cb43099e69053565a6e128731e9f963974c298140ceeec87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93591a41e44ccdffd96aa2da4518fb3b2ad2f1690a5a8d54a36a5d55dcca815a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93591a41e44ccdffd96aa2da4518fb3b2ad2f1690a5a8d54a36a5d55dcca815a->enter($__internal_93591a41e44ccdffd96aa2da4518fb3b2ad2f1690a5a8d54a36a5d55dcca815a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c1780fda586659351b23d4b09fa2e134bcd5866fc8c203f14788279d6ec064ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1780fda586659351b23d4b09fa2e134bcd5866fc8c203f14788279d6ec064ae->enter($__internal_c1780fda586659351b23d4b09fa2e134bcd5866fc8c203f14788279d6ec064ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_93591a41e44ccdffd96aa2da4518fb3b2ad2f1690a5a8d54a36a5d55dcca815a->leave($__internal_93591a41e44ccdffd96aa2da4518fb3b2ad2f1690a5a8d54a36a5d55dcca815a_prof);

        
        $__internal_c1780fda586659351b23d4b09fa2e134bcd5866fc8c203f14788279d6ec064ae->leave($__internal_c1780fda586659351b23d4b09fa2e134bcd5866fc8c203f14788279d6ec064ae_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_18dd5cc77d640fae59d225984de304f5651d29cbcff19d95908a2c57bd3ae1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18dd5cc77d640fae59d225984de304f5651d29cbcff19d95908a2c57bd3ae1d6->enter($__internal_18dd5cc77d640fae59d225984de304f5651d29cbcff19d95908a2c57bd3ae1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f517f73b7d01ee6f925b23b80487a2a86cb87d1013b5c6f793acc2052fd55cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f517f73b7d01ee6f925b23b80487a2a86cb87d1013b5c6f793acc2052fd55cdd->enter($__internal_f517f73b7d01ee6f925b23b80487a2a86cb87d1013b5c6f793acc2052fd55cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f517f73b7d01ee6f925b23b80487a2a86cb87d1013b5c6f793acc2052fd55cdd->leave($__internal_f517f73b7d01ee6f925b23b80487a2a86cb87d1013b5c6f793acc2052fd55cdd_prof);

        
        $__internal_18dd5cc77d640fae59d225984de304f5651d29cbcff19d95908a2c57bd3ae1d6->leave($__internal_18dd5cc77d640fae59d225984de304f5651d29cbcff19d95908a2c57bd3ae1d6_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b2ba29d598a388f514d3a5011340e136faaee41e3abafee13dbe5d5176bb77ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ba29d598a388f514d3a5011340e136faaee41e3abafee13dbe5d5176bb77ff->enter($__internal_b2ba29d598a388f514d3a5011340e136faaee41e3abafee13dbe5d5176bb77ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5817e415a2c7e5b773771228acfb481dae35eb67fde3e702e6df3b730fa5dd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5817e415a2c7e5b773771228acfb481dae35eb67fde3e702e6df3b730fa5dd26->enter($__internal_5817e415a2c7e5b773771228acfb481dae35eb67fde3e702e6df3b730fa5dd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5817e415a2c7e5b773771228acfb481dae35eb67fde3e702e6df3b730fa5dd26->leave($__internal_5817e415a2c7e5b773771228acfb481dae35eb67fde3e702e6df3b730fa5dd26_prof);

        
        $__internal_b2ba29d598a388f514d3a5011340e136faaee41e3abafee13dbe5d5176bb77ff->leave($__internal_b2ba29d598a388f514d3a5011340e136faaee41e3abafee13dbe5d5176bb77ff_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f01255af673ae244a023a35878960964bd63f56c9e9e5aa0e032f0fc9f4c39da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01255af673ae244a023a35878960964bd63f56c9e9e5aa0e032f0fc9f4c39da->enter($__internal_f01255af673ae244a023a35878960964bd63f56c9e9e5aa0e032f0fc9f4c39da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_956571f36f4c121fc19bf8acfb7419ac1e6ad5d805c842a3b7b4f790737acdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956571f36f4c121fc19bf8acfb7419ac1e6ad5d805c842a3b7b4f790737acdc1->enter($__internal_956571f36f4c121fc19bf8acfb7419ac1e6ad5d805c842a3b7b4f790737acdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_956571f36f4c121fc19bf8acfb7419ac1e6ad5d805c842a3b7b4f790737acdc1->leave($__internal_956571f36f4c121fc19bf8acfb7419ac1e6ad5d805c842a3b7b4f790737acdc1_prof);

        
        $__internal_f01255af673ae244a023a35878960964bd63f56c9e9e5aa0e032f0fc9f4c39da->leave($__internal_f01255af673ae244a023a35878960964bd63f56c9e9e5aa0e032f0fc9f4c39da_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ad7d446d2a5aa8a7de8283757fc9cce0fe8129adc5045fe0f27313fa6fba3d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7d446d2a5aa8a7de8283757fc9cce0fe8129adc5045fe0f27313fa6fba3d76->enter($__internal_ad7d446d2a5aa8a7de8283757fc9cce0fe8129adc5045fe0f27313fa6fba3d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8eb5a44cb78ee35a11f9726717fce0e92de8e8a829dc9822c3fdbd1c24953587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb5a44cb78ee35a11f9726717fce0e92de8e8a829dc9822c3fdbd1c24953587->enter($__internal_8eb5a44cb78ee35a11f9726717fce0e92de8e8a829dc9822c3fdbd1c24953587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_8eb5a44cb78ee35a11f9726717fce0e92de8e8a829dc9822c3fdbd1c24953587->leave($__internal_8eb5a44cb78ee35a11f9726717fce0e92de8e8a829dc9822c3fdbd1c24953587_prof);

        
        $__internal_ad7d446d2a5aa8a7de8283757fc9cce0fe8129adc5045fe0f27313fa6fba3d76->leave($__internal_ad7d446d2a5aa8a7de8283757fc9cce0fe8129adc5045fe0f27313fa6fba3d76_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cc5a057f5377fb72c1479943fad9f8038325eacf0888ea49d0d06ba1d059eed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5a057f5377fb72c1479943fad9f8038325eacf0888ea49d0d06ba1d059eed4->enter($__internal_cc5a057f5377fb72c1479943fad9f8038325eacf0888ea49d0d06ba1d059eed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_396ffca986522c72ad8be42e556cbfe00b886b2e86b4d4389c12b68c9d72893e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396ffca986522c72ad8be42e556cbfe00b886b2e86b4d4389c12b68c9d72893e->enter($__internal_396ffca986522c72ad8be42e556cbfe00b886b2e86b4d4389c12b68c9d72893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_396ffca986522c72ad8be42e556cbfe00b886b2e86b4d4389c12b68c9d72893e->leave($__internal_396ffca986522c72ad8be42e556cbfe00b886b2e86b4d4389c12b68c9d72893e_prof);

        
        $__internal_cc5a057f5377fb72c1479943fad9f8038325eacf0888ea49d0d06ba1d059eed4->leave($__internal_cc5a057f5377fb72c1479943fad9f8038325eacf0888ea49d0d06ba1d059eed4_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5be4fdad2f513fb980af6fe01a1f574c23efab7412689e291c66b16250261120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be4fdad2f513fb980af6fe01a1f574c23efab7412689e291c66b16250261120->enter($__internal_5be4fdad2f513fb980af6fe01a1f574c23efab7412689e291c66b16250261120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6ad844d09b135b36fa95fa7a296a104faaf0af6f8c0f93946a3bef679a4f59f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad844d09b135b36fa95fa7a296a104faaf0af6f8c0f93946a3bef679a4f59f5->enter($__internal_6ad844d09b135b36fa95fa7a296a104faaf0af6f8c0f93946a3bef679a4f59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6ad844d09b135b36fa95fa7a296a104faaf0af6f8c0f93946a3bef679a4f59f5->leave($__internal_6ad844d09b135b36fa95fa7a296a104faaf0af6f8c0f93946a3bef679a4f59f5_prof);

        
        $__internal_5be4fdad2f513fb980af6fe01a1f574c23efab7412689e291c66b16250261120->leave($__internal_5be4fdad2f513fb980af6fe01a1f574c23efab7412689e291c66b16250261120_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_129b7dffa92fe5b0a00efea78657227b4de058f88cda808e77ca5613ca15f656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129b7dffa92fe5b0a00efea78657227b4de058f88cda808e77ca5613ca15f656->enter($__internal_129b7dffa92fe5b0a00efea78657227b4de058f88cda808e77ca5613ca15f656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_f6fa463aa43bc0b09d75c04fe49aa4c2dd21e29576124dfd15fdca2f8b839449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fa463aa43bc0b09d75c04fe49aa4c2dd21e29576124dfd15fdca2f8b839449->enter($__internal_f6fa463aa43bc0b09d75c04fe49aa4c2dd21e29576124dfd15fdca2f8b839449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f6fa463aa43bc0b09d75c04fe49aa4c2dd21e29576124dfd15fdca2f8b839449->leave($__internal_f6fa463aa43bc0b09d75c04fe49aa4c2dd21e29576124dfd15fdca2f8b839449_prof);

        
        $__internal_129b7dffa92fe5b0a00efea78657227b4de058f88cda808e77ca5613ca15f656->leave($__internal_129b7dffa92fe5b0a00efea78657227b4de058f88cda808e77ca5613ca15f656_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_55c86296017315392437fa9ba4f91328f8ac7536969d9ee8294ffd587c01a51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c86296017315392437fa9ba4f91328f8ac7536969d9ee8294ffd587c01a51a->enter($__internal_55c86296017315392437fa9ba4f91328f8ac7536969d9ee8294ffd587c01a51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_b30c29065b64e5fb3f79c52850ebb7725b5cee6d16c833087f377c83a8454a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30c29065b64e5fb3f79c52850ebb7725b5cee6d16c833087f377c83a8454a89->enter($__internal_b30c29065b64e5fb3f79c52850ebb7725b5cee6d16c833087f377c83a8454a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b30c29065b64e5fb3f79c52850ebb7725b5cee6d16c833087f377c83a8454a89->leave($__internal_b30c29065b64e5fb3f79c52850ebb7725b5cee6d16c833087f377c83a8454a89_prof);

        
        $__internal_55c86296017315392437fa9ba4f91328f8ac7536969d9ee8294ffd587c01a51a->leave($__internal_55c86296017315392437fa9ba4f91328f8ac7536969d9ee8294ffd587c01a51a_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c0b7ae5ebec98011fbdb37739517d7c67e3c9c595140f7bd5cc571f253be6391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b7ae5ebec98011fbdb37739517d7c67e3c9c595140f7bd5cc571f253be6391->enter($__internal_c0b7ae5ebec98011fbdb37739517d7c67e3c9c595140f7bd5cc571f253be6391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ce4b6f881da02105649f027b7010af47034631f5a1b4ae2855deb8c0640aafbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4b6f881da02105649f027b7010af47034631f5a1b4ae2855deb8c0640aafbe->enter($__internal_ce4b6f881da02105649f027b7010af47034631f5a1b4ae2855deb8c0640aafbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_ce4b6f881da02105649f027b7010af47034631f5a1b4ae2855deb8c0640aafbe->leave($__internal_ce4b6f881da02105649f027b7010af47034631f5a1b4ae2855deb8c0640aafbe_prof);

        
        $__internal_c0b7ae5ebec98011fbdb37739517d7c67e3c9c595140f7bd5cc571f253be6391->leave($__internal_c0b7ae5ebec98011fbdb37739517d7c67e3c9c595140f7bd5cc571f253be6391_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6acb8eb5b2222cf54d33c3bb72434fd01cbfd7c54e90b0f6764d9d51ff2c41e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acb8eb5b2222cf54d33c3bb72434fd01cbfd7c54e90b0f6764d9d51ff2c41e9->enter($__internal_6acb8eb5b2222cf54d33c3bb72434fd01cbfd7c54e90b0f6764d9d51ff2c41e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7bf093cfa322ad8b669d40be26b484abbcb732ad9c40834bfc2043ca4f010e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf093cfa322ad8b669d40be26b484abbcb732ad9c40834bfc2043ca4f010e9b->enter($__internal_7bf093cfa322ad8b669d40be26b484abbcb732ad9c40834bfc2043ca4f010e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_7bf093cfa322ad8b669d40be26b484abbcb732ad9c40834bfc2043ca4f010e9b->leave($__internal_7bf093cfa322ad8b669d40be26b484abbcb732ad9c40834bfc2043ca4f010e9b_prof);

        
        $__internal_6acb8eb5b2222cf54d33c3bb72434fd01cbfd7c54e90b0f6764d9d51ff2c41e9->leave($__internal_6acb8eb5b2222cf54d33c3bb72434fd01cbfd7c54e90b0f6764d9d51ff2c41e9_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_950bc495fb704eb59535339e50147beef8f02299eab52342bdfc7173f232f845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950bc495fb704eb59535339e50147beef8f02299eab52342bdfc7173f232f845->enter($__internal_950bc495fb704eb59535339e50147beef8f02299eab52342bdfc7173f232f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d784632cb1b0892ed62e8e0f680ee739933bb09fabf467b352d3ac91e9674b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d784632cb1b0892ed62e8e0f680ee739933bb09fabf467b352d3ac91e9674b5f->enter($__internal_d784632cb1b0892ed62e8e0f680ee739933bb09fabf467b352d3ac91e9674b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_d784632cb1b0892ed62e8e0f680ee739933bb09fabf467b352d3ac91e9674b5f->leave($__internal_d784632cb1b0892ed62e8e0f680ee739933bb09fabf467b352d3ac91e9674b5f_prof);

        
        $__internal_950bc495fb704eb59535339e50147beef8f02299eab52342bdfc7173f232f845->leave($__internal_950bc495fb704eb59535339e50147beef8f02299eab52342bdfc7173f232f845_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1d83f1f858678f5f5d0f81dd7aa50266c58f165c05d9b15f79a23204fcb46d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d83f1f858678f5f5d0f81dd7aa50266c58f165c05d9b15f79a23204fcb46d91->enter($__internal_1d83f1f858678f5f5d0f81dd7aa50266c58f165c05d9b15f79a23204fcb46d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_3eb5dfeae2fab6f519094d17631c3debc364e360000e720955c0f8f0fa5e39ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb5dfeae2fab6f519094d17631c3debc364e360000e720955c0f8f0fa5e39ff->enter($__internal_3eb5dfeae2fab6f519094d17631c3debc364e360000e720955c0f8f0fa5e39ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3eb5dfeae2fab6f519094d17631c3debc364e360000e720955c0f8f0fa5e39ff->leave($__internal_3eb5dfeae2fab6f519094d17631c3debc364e360000e720955c0f8f0fa5e39ff_prof);

        
        $__internal_1d83f1f858678f5f5d0f81dd7aa50266c58f165c05d9b15f79a23204fcb46d91->leave($__internal_1d83f1f858678f5f5d0f81dd7aa50266c58f165c05d9b15f79a23204fcb46d91_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_19c9de1a3b1895dda3f943f83f2a44b7e4f30002f4adf6a37b21393cafef7ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c9de1a3b1895dda3f943f83f2a44b7e4f30002f4adf6a37b21393cafef7ca5->enter($__internal_19c9de1a3b1895dda3f943f83f2a44b7e4f30002f4adf6a37b21393cafef7ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_16cf41c76835d88adb6cbf4c047f3257b7e38024e37128ad4b4bc0e615475ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cf41c76835d88adb6cbf4c047f3257b7e38024e37128ad4b4bc0e615475ab8->enter($__internal_16cf41c76835d88adb6cbf4c047f3257b7e38024e37128ad4b4bc0e615475ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_16cf41c76835d88adb6cbf4c047f3257b7e38024e37128ad4b4bc0e615475ab8->leave($__internal_16cf41c76835d88adb6cbf4c047f3257b7e38024e37128ad4b4bc0e615475ab8_prof);

        
        $__internal_19c9de1a3b1895dda3f943f83f2a44b7e4f30002f4adf6a37b21393cafef7ca5->leave($__internal_19c9de1a3b1895dda3f943f83f2a44b7e4f30002f4adf6a37b21393cafef7ca5_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7a56fa4604c5cd54b3ac54167ed03381a311cb2ad94e25461e614bd97da9063c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a56fa4604c5cd54b3ac54167ed03381a311cb2ad94e25461e614bd97da9063c->enter($__internal_7a56fa4604c5cd54b3ac54167ed03381a311cb2ad94e25461e614bd97da9063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ee41db9098b927dd7804b25c78dc7ba85e8df36997bce5f4d41e0ea3cd76f3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee41db9098b927dd7804b25c78dc7ba85e8df36997bce5f4d41e0ea3cd76f3c6->enter($__internal_ee41db9098b927dd7804b25c78dc7ba85e8df36997bce5f4d41e0ea3cd76f3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ee41db9098b927dd7804b25c78dc7ba85e8df36997bce5f4d41e0ea3cd76f3c6->leave($__internal_ee41db9098b927dd7804b25c78dc7ba85e8df36997bce5f4d41e0ea3cd76f3c6_prof);

        
        $__internal_7a56fa4604c5cd54b3ac54167ed03381a311cb2ad94e25461e614bd97da9063c->leave($__internal_7a56fa4604c5cd54b3ac54167ed03381a311cb2ad94e25461e614bd97da9063c_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5addc3b0b0c3c2180f4f94f879356b75672df29c4a97051b532429fa4b6829d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5addc3b0b0c3c2180f4f94f879356b75672df29c4a97051b532429fa4b6829d0->enter($__internal_5addc3b0b0c3c2180f4f94f879356b75672df29c4a97051b532429fa4b6829d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6b3d8a791a5b4645d1141e2c74f28eedee26430efb59bd2358ead66ef2bba450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3d8a791a5b4645d1141e2c74f28eedee26430efb59bd2358ead66ef2bba450->enter($__internal_6b3d8a791a5b4645d1141e2c74f28eedee26430efb59bd2358ead66ef2bba450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6b3d8a791a5b4645d1141e2c74f28eedee26430efb59bd2358ead66ef2bba450->leave($__internal_6b3d8a791a5b4645d1141e2c74f28eedee26430efb59bd2358ead66ef2bba450_prof);

        
        $__internal_5addc3b0b0c3c2180f4f94f879356b75672df29c4a97051b532429fa4b6829d0->leave($__internal_5addc3b0b0c3c2180f4f94f879356b75672df29c4a97051b532429fa4b6829d0_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5db58f7d092468fca919e6349e531b802ee8814795e4ba51687af8b733b14368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db58f7d092468fca919e6349e531b802ee8814795e4ba51687af8b733b14368->enter($__internal_5db58f7d092468fca919e6349e531b802ee8814795e4ba51687af8b733b14368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c8e71888710f2204447bfdcc9ef098f3e153f11987e34cf608e2727661d7783b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e71888710f2204447bfdcc9ef098f3e153f11987e34cf608e2727661d7783b->enter($__internal_c8e71888710f2204447bfdcc9ef098f3e153f11987e34cf608e2727661d7783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_c8e71888710f2204447bfdcc9ef098f3e153f11987e34cf608e2727661d7783b->leave($__internal_c8e71888710f2204447bfdcc9ef098f3e153f11987e34cf608e2727661d7783b_prof);

        
        $__internal_5db58f7d092468fca919e6349e531b802ee8814795e4ba51687af8b733b14368->leave($__internal_5db58f7d092468fca919e6349e531b802ee8814795e4ba51687af8b733b14368_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4e9735e70ce4f04716547f025075285b73ffbc22521ec2358f9f58037c2df36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9735e70ce4f04716547f025075285b73ffbc22521ec2358f9f58037c2df36b->enter($__internal_4e9735e70ce4f04716547f025075285b73ffbc22521ec2358f9f58037c2df36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f4b0694d8e2d141d103429c969553e76b20a3ebaba32d0a21fee02c1a0ac5914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b0694d8e2d141d103429c969553e76b20a3ebaba32d0a21fee02c1a0ac5914->enter($__internal_f4b0694d8e2d141d103429c969553e76b20a3ebaba32d0a21fee02c1a0ac5914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_f4b0694d8e2d141d103429c969553e76b20a3ebaba32d0a21fee02c1a0ac5914->leave($__internal_f4b0694d8e2d141d103429c969553e76b20a3ebaba32d0a21fee02c1a0ac5914_prof);

        
        $__internal_4e9735e70ce4f04716547f025075285b73ffbc22521ec2358f9f58037c2df36b->leave($__internal_4e9735e70ce4f04716547f025075285b73ffbc22521ec2358f9f58037c2df36b_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f73dd0f5d3da8d6607fe0f8e8db006b03cf257eb896eef55ea15090f560a7c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73dd0f5d3da8d6607fe0f8e8db006b03cf257eb896eef55ea15090f560a7c11->enter($__internal_f73dd0f5d3da8d6607fe0f8e8db006b03cf257eb896eef55ea15090f560a7c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f10692b5cac63ba768930705017aa198a0e1a3d72f1cbde824a1dc75344dc12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10692b5cac63ba768930705017aa198a0e1a3d72f1cbde824a1dc75344dc12c->enter($__internal_f10692b5cac63ba768930705017aa198a0e1a3d72f1cbde824a1dc75344dc12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_f10692b5cac63ba768930705017aa198a0e1a3d72f1cbde824a1dc75344dc12c->leave($__internal_f10692b5cac63ba768930705017aa198a0e1a3d72f1cbde824a1dc75344dc12c_prof);

        
        $__internal_f73dd0f5d3da8d6607fe0f8e8db006b03cf257eb896eef55ea15090f560a7c11->leave($__internal_f73dd0f5d3da8d6607fe0f8e8db006b03cf257eb896eef55ea15090f560a7c11_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
