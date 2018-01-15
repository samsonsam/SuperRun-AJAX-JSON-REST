<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_b240c323f58c117413562d882399399b426fedcb1b397dc47c42ede65c2f1b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db15ce9c067f2d67c56502e15b6e20f7f4750e65e386a9cebc87acfce4be84d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db15ce9c067f2d67c56502e15b6e20f7f4750e65e386a9cebc87acfce4be84d1->enter($__internal_db15ce9c067f2d67c56502e15b6e20f7f4750e65e386a9cebc87acfce4be84d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_2934a9c48948c473f5fe6676b8a13f58157a460cb52fc7aabedf00e64a3a9314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2934a9c48948c473f5fe6676b8a13f58157a460cb52fc7aabedf00e64a3a9314->enter($__internal_2934a9c48948c473f5fe6676b8a13f58157a460cb52fc7aabedf00e64a3a9314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_db15ce9c067f2d67c56502e15b6e20f7f4750e65e386a9cebc87acfce4be84d1->leave($__internal_db15ce9c067f2d67c56502e15b6e20f7f4750e65e386a9cebc87acfce4be84d1_prof);

        
        $__internal_2934a9c48948c473f5fe6676b8a13f58157a460cb52fc7aabedf00e64a3a9314->leave($__internal_2934a9c48948c473f5fe6676b8a13f58157a460cb52fc7aabedf00e64a3a9314_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7cbfe9f900bbd91d4ede582b94c064d20ad7b297291862a8cf4cda8d259a6788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbfe9f900bbd91d4ede582b94c064d20ad7b297291862a8cf4cda8d259a6788->enter($__internal_7cbfe9f900bbd91d4ede582b94c064d20ad7b297291862a8cf4cda8d259a6788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_99acb4e53f08af7f664bb3a5dd6c29f26aa2ec6c8258a107f58b3c6db07ac375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99acb4e53f08af7f664bb3a5dd6c29f26aa2ec6c8258a107f58b3c6db07ac375->enter($__internal_99acb4e53f08af7f664bb3a5dd6c29f26aa2ec6c8258a107f58b3c6db07ac375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_99acb4e53f08af7f664bb3a5dd6c29f26aa2ec6c8258a107f58b3c6db07ac375->leave($__internal_99acb4e53f08af7f664bb3a5dd6c29f26aa2ec6c8258a107f58b3c6db07ac375_prof);

        
        $__internal_7cbfe9f900bbd91d4ede582b94c064d20ad7b297291862a8cf4cda8d259a6788->leave($__internal_7cbfe9f900bbd91d4ede582b94c064d20ad7b297291862a8cf4cda8d259a6788_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f2a780b1e38d34b70d20ec8cd7cf4b5dfe99dacf6582a6d8d421407efea1dc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a780b1e38d34b70d20ec8cd7cf4b5dfe99dacf6582a6d8d421407efea1dc8b->enter($__internal_f2a780b1e38d34b70d20ec8cd7cf4b5dfe99dacf6582a6d8d421407efea1dc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_db23d7a744b2629502acdf3d8f82b54582dd0db4ba1a851c4f107cfac750c003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db23d7a744b2629502acdf3d8f82b54582dd0db4ba1a851c4f107cfac750c003->enter($__internal_db23d7a744b2629502acdf3d8f82b54582dd0db4ba1a851c4f107cfac750c003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_db23d7a744b2629502acdf3d8f82b54582dd0db4ba1a851c4f107cfac750c003->leave($__internal_db23d7a744b2629502acdf3d8f82b54582dd0db4ba1a851c4f107cfac750c003_prof);

        
        $__internal_f2a780b1e38d34b70d20ec8cd7cf4b5dfe99dacf6582a6d8d421407efea1dc8b->leave($__internal_f2a780b1e38d34b70d20ec8cd7cf4b5dfe99dacf6582a6d8d421407efea1dc8b_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bb32d6bde45155ac77642a75574f3c74f1b35384312f565730b3b8ba5e818d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb32d6bde45155ac77642a75574f3c74f1b35384312f565730b3b8ba5e818d13->enter($__internal_bb32d6bde45155ac77642a75574f3c74f1b35384312f565730b3b8ba5e818d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_abd4529936f1062bfdcab0a0f04f677fc541293b8d727c8894e7ffed252b27ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd4529936f1062bfdcab0a0f04f677fc541293b8d727c8894e7ffed252b27ca->enter($__internal_abd4529936f1062bfdcab0a0f04f677fc541293b8d727c8894e7ffed252b27ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_abd4529936f1062bfdcab0a0f04f677fc541293b8d727c8894e7ffed252b27ca->leave($__internal_abd4529936f1062bfdcab0a0f04f677fc541293b8d727c8894e7ffed252b27ca_prof);

        
        $__internal_bb32d6bde45155ac77642a75574f3c74f1b35384312f565730b3b8ba5e818d13->leave($__internal_bb32d6bde45155ac77642a75574f3c74f1b35384312f565730b3b8ba5e818d13_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_f6fb0d12edd33322f4bcc72d098ed036153cfa4181a739a9500c5a6e4ab8bd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fb0d12edd33322f4bcc72d098ed036153cfa4181a739a9500c5a6e4ab8bd01->enter($__internal_f6fb0d12edd33322f4bcc72d098ed036153cfa4181a739a9500c5a6e4ab8bd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_14f2aa359fae39e5e35a72c21921091caa1b62bad8c23b927fdf8e04e4a841d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f2aa359fae39e5e35a72c21921091caa1b62bad8c23b927fdf8e04e4a841d5->enter($__internal_14f2aa359fae39e5e35a72c21921091caa1b62bad8c23b927fdf8e04e4a841d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_14f2aa359fae39e5e35a72c21921091caa1b62bad8c23b927fdf8e04e4a841d5->leave($__internal_14f2aa359fae39e5e35a72c21921091caa1b62bad8c23b927fdf8e04e4a841d5_prof);

        
        $__internal_f6fb0d12edd33322f4bcc72d098ed036153cfa4181a739a9500c5a6e4ab8bd01->leave($__internal_f6fb0d12edd33322f4bcc72d098ed036153cfa4181a739a9500c5a6e4ab8bd01_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_8d05753282e0f318aba227fc9c8f664faed0d5951e2c70e1a64563ae5b994b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d05753282e0f318aba227fc9c8f664faed0d5951e2c70e1a64563ae5b994b72->enter($__internal_8d05753282e0f318aba227fc9c8f664faed0d5951e2c70e1a64563ae5b994b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b3c963bda8052a8a8cd609741563504985f87aa7d04cd3289d54e5c29ea3c149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c963bda8052a8a8cd609741563504985f87aa7d04cd3289d54e5c29ea3c149->enter($__internal_b3c963bda8052a8a8cd609741563504985f87aa7d04cd3289d54e5c29ea3c149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_b3c963bda8052a8a8cd609741563504985f87aa7d04cd3289d54e5c29ea3c149->leave($__internal_b3c963bda8052a8a8cd609741563504985f87aa7d04cd3289d54e5c29ea3c149_prof);

        
        $__internal_8d05753282e0f318aba227fc9c8f664faed0d5951e2c70e1a64563ae5b994b72->leave($__internal_8d05753282e0f318aba227fc9c8f664faed0d5951e2c70e1a64563ae5b994b72_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_84623d241e0f194a53573b7e2931cbf9d201d05665725084fe55dbe2bdb6c1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84623d241e0f194a53573b7e2931cbf9d201d05665725084fe55dbe2bdb6c1a4->enter($__internal_84623d241e0f194a53573b7e2931cbf9d201d05665725084fe55dbe2bdb6c1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a11633b7700566a94c8dc58b4e3b9c83968260492f801a4ee3a14ee6dfd659c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11633b7700566a94c8dc58b4e3b9c83968260492f801a4ee3a14ee6dfd659c9->enter($__internal_a11633b7700566a94c8dc58b4e3b9c83968260492f801a4ee3a14ee6dfd659c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_a11633b7700566a94c8dc58b4e3b9c83968260492f801a4ee3a14ee6dfd659c9->leave($__internal_a11633b7700566a94c8dc58b4e3b9c83968260492f801a4ee3a14ee6dfd659c9_prof);

        
        $__internal_84623d241e0f194a53573b7e2931cbf9d201d05665725084fe55dbe2bdb6c1a4->leave($__internal_84623d241e0f194a53573b7e2931cbf9d201d05665725084fe55dbe2bdb6c1a4_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_081444216e1e3bb66d48307d66bcfd0fe1e5fb00f9ed153e04ac6443ecf5c2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081444216e1e3bb66d48307d66bcfd0fe1e5fb00f9ed153e04ac6443ecf5c2cb->enter($__internal_081444216e1e3bb66d48307d66bcfd0fe1e5fb00f9ed153e04ac6443ecf5c2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2628f45e1dc103ffd5222c4cae422eca59b40af023f9273ddd26aa49ddd99fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2628f45e1dc103ffd5222c4cae422eca59b40af023f9273ddd26aa49ddd99fdc->enter($__internal_2628f45e1dc103ffd5222c4cae422eca59b40af023f9273ddd26aa49ddd99fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_2628f45e1dc103ffd5222c4cae422eca59b40af023f9273ddd26aa49ddd99fdc->leave($__internal_2628f45e1dc103ffd5222c4cae422eca59b40af023f9273ddd26aa49ddd99fdc_prof);

        
        $__internal_081444216e1e3bb66d48307d66bcfd0fe1e5fb00f9ed153e04ac6443ecf5c2cb->leave($__internal_081444216e1e3bb66d48307d66bcfd0fe1e5fb00f9ed153e04ac6443ecf5c2cb_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b3bfc440287dda16c23328db069db318a3742879ef6de233ae273fc603fe6083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bfc440287dda16c23328db069db318a3742879ef6de233ae273fc603fe6083->enter($__internal_b3bfc440287dda16c23328db069db318a3742879ef6de233ae273fc603fe6083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1d237604d34e866a050e2ff8d9fb1ddbc6f911b372eae09b57307c63ebc48f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d237604d34e866a050e2ff8d9fb1ddbc6f911b372eae09b57307c63ebc48f30->enter($__internal_1d237604d34e866a050e2ff8d9fb1ddbc6f911b372eae09b57307c63ebc48f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_1d237604d34e866a050e2ff8d9fb1ddbc6f911b372eae09b57307c63ebc48f30->leave($__internal_1d237604d34e866a050e2ff8d9fb1ddbc6f911b372eae09b57307c63ebc48f30_prof);

        
        $__internal_b3bfc440287dda16c23328db069db318a3742879ef6de233ae273fc603fe6083->leave($__internal_b3bfc440287dda16c23328db069db318a3742879ef6de233ae273fc603fe6083_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
