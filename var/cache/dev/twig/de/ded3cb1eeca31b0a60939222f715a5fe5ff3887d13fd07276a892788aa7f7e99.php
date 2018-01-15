<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_ba9f2253cd5a068882ebe49db3a101853f6aefd7776dd2fb31022e2f28d1b992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e925f3c15f993b0d75b18bbbf5a7174c2c865ee0b8473c6af896c115f916209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e925f3c15f993b0d75b18bbbf5a7174c2c865ee0b8473c6af896c115f916209->enter($__internal_7e925f3c15f993b0d75b18bbbf5a7174c2c865ee0b8473c6af896c115f916209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_1196c462ad495d9c78472007f05bcc7f7b0b2e234c82782b6d37cd4ac5d7c035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1196c462ad495d9c78472007f05bcc7f7b0b2e234c82782b6d37cd4ac5d7c035->enter($__internal_1196c462ad495d9c78472007f05bcc7f7b0b2e234c82782b6d37cd4ac5d7c035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_7e925f3c15f993b0d75b18bbbf5a7174c2c865ee0b8473c6af896c115f916209->leave($__internal_7e925f3c15f993b0d75b18bbbf5a7174c2c865ee0b8473c6af896c115f916209_prof);

        
        $__internal_1196c462ad495d9c78472007f05bcc7f7b0b2e234c82782b6d37cd4ac5d7c035->leave($__internal_1196c462ad495d9c78472007f05bcc7f7b0b2e234c82782b6d37cd4ac5d7c035_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ec5c208687a0accd010522ba4be79495e732eb87a5f49988fc2eeffc2a1062e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5c208687a0accd010522ba4be79495e732eb87a5f49988fc2eeffc2a1062e4->enter($__internal_ec5c208687a0accd010522ba4be79495e732eb87a5f49988fc2eeffc2a1062e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ed87dd26520b4f4c149b617d47fffd96cf4279b5b66a97a88294d7890ab38a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed87dd26520b4f4c149b617d47fffd96cf4279b5b66a97a88294d7890ab38a16->enter($__internal_ed87dd26520b4f4c149b617d47fffd96cf4279b5b66a97a88294d7890ab38a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ed87dd26520b4f4c149b617d47fffd96cf4279b5b66a97a88294d7890ab38a16->leave($__internal_ed87dd26520b4f4c149b617d47fffd96cf4279b5b66a97a88294d7890ab38a16_prof);

        
        $__internal_ec5c208687a0accd010522ba4be79495e732eb87a5f49988fc2eeffc2a1062e4->leave($__internal_ec5c208687a0accd010522ba4be79495e732eb87a5f49988fc2eeffc2a1062e4_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8f09ee80456098371c346140a9996603fdeaeac21b0cc4d3e72e4dc6faf1e535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f09ee80456098371c346140a9996603fdeaeac21b0cc4d3e72e4dc6faf1e535->enter($__internal_8f09ee80456098371c346140a9996603fdeaeac21b0cc4d3e72e4dc6faf1e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cc998ca7a037e7aa2cc9a67a97c443d7a24e87c26af328a2ad704c2ebdc99105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc998ca7a037e7aa2cc9a67a97c443d7a24e87c26af328a2ad704c2ebdc99105->enter($__internal_cc998ca7a037e7aa2cc9a67a97c443d7a24e87c26af328a2ad704c2ebdc99105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_cc998ca7a037e7aa2cc9a67a97c443d7a24e87c26af328a2ad704c2ebdc99105->leave($__internal_cc998ca7a037e7aa2cc9a67a97c443d7a24e87c26af328a2ad704c2ebdc99105_prof);

        
        $__internal_8f09ee80456098371c346140a9996603fdeaeac21b0cc4d3e72e4dc6faf1e535->leave($__internal_8f09ee80456098371c346140a9996603fdeaeac21b0cc4d3e72e4dc6faf1e535_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_cce0bff1a6d31ad27c7958467c2774d38c0cd47325fb6943f8966876023fb2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce0bff1a6d31ad27c7958467c2774d38c0cd47325fb6943f8966876023fb2df->enter($__internal_cce0bff1a6d31ad27c7958467c2774d38c0cd47325fb6943f8966876023fb2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8be6093b5988533928db1197386659f367b09858a6922877342db56ee6ce4deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be6093b5988533928db1197386659f367b09858a6922877342db56ee6ce4deb->enter($__internal_8be6093b5988533928db1197386659f367b09858a6922877342db56ee6ce4deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_8be6093b5988533928db1197386659f367b09858a6922877342db56ee6ce4deb->leave($__internal_8be6093b5988533928db1197386659f367b09858a6922877342db56ee6ce4deb_prof);

        
        $__internal_cce0bff1a6d31ad27c7958467c2774d38c0cd47325fb6943f8966876023fb2df->leave($__internal_cce0bff1a6d31ad27c7958467c2774d38c0cd47325fb6943f8966876023fb2df_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0283955efdd25be8a930d33f85730aa1ddb7f2dd58b4852e94c0829803312096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0283955efdd25be8a930d33f85730aa1ddb7f2dd58b4852e94c0829803312096->enter($__internal_0283955efdd25be8a930d33f85730aa1ddb7f2dd58b4852e94c0829803312096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7ca69da9d3633aad9089625a76ecaa219486d3257e660039c3460cb170271ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca69da9d3633aad9089625a76ecaa219486d3257e660039c3460cb170271ef0->enter($__internal_7ca69da9d3633aad9089625a76ecaa219486d3257e660039c3460cb170271ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_7ca69da9d3633aad9089625a76ecaa219486d3257e660039c3460cb170271ef0->leave($__internal_7ca69da9d3633aad9089625a76ecaa219486d3257e660039c3460cb170271ef0_prof);

        
        $__internal_0283955efdd25be8a930d33f85730aa1ddb7f2dd58b4852e94c0829803312096->leave($__internal_0283955efdd25be8a930d33f85730aa1ddb7f2dd58b4852e94c0829803312096_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a0e8c0a4ff7fbc4d33da34588a90db563844ec97ae6a47c17f10372155613abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e8c0a4ff7fbc4d33da34588a90db563844ec97ae6a47c17f10372155613abe->enter($__internal_a0e8c0a4ff7fbc4d33da34588a90db563844ec97ae6a47c17f10372155613abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9e07dcc455f217fd49f681f22065493489feab09f531b53d77109ba6dd3de6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e07dcc455f217fd49f681f22065493489feab09f531b53d77109ba6dd3de6f7->enter($__internal_9e07dcc455f217fd49f681f22065493489feab09f531b53d77109ba6dd3de6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_9e07dcc455f217fd49f681f22065493489feab09f531b53d77109ba6dd3de6f7->leave($__internal_9e07dcc455f217fd49f681f22065493489feab09f531b53d77109ba6dd3de6f7_prof);

        
        $__internal_a0e8c0a4ff7fbc4d33da34588a90db563844ec97ae6a47c17f10372155613abe->leave($__internal_a0e8c0a4ff7fbc4d33da34588a90db563844ec97ae6a47c17f10372155613abe_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_eafa82eeb5a0f5d3772f9c2a6e2723c1038a9c5f5473070e5c6401e2fa884cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafa82eeb5a0f5d3772f9c2a6e2723c1038a9c5f5473070e5c6401e2fa884cdd->enter($__internal_eafa82eeb5a0f5d3772f9c2a6e2723c1038a9c5f5473070e5c6401e2fa884cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_3952da7a421584b1d1918a5fa88a6d97964eeb8e81c5c679fc737d8347d00d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3952da7a421584b1d1918a5fa88a6d97964eeb8e81c5c679fc737d8347d00d30->enter($__internal_3952da7a421584b1d1918a5fa88a6d97964eeb8e81c5c679fc737d8347d00d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_3952da7a421584b1d1918a5fa88a6d97964eeb8e81c5c679fc737d8347d00d30->leave($__internal_3952da7a421584b1d1918a5fa88a6d97964eeb8e81c5c679fc737d8347d00d30_prof);

        
        $__internal_eafa82eeb5a0f5d3772f9c2a6e2723c1038a9c5f5473070e5c6401e2fa884cdd->leave($__internal_eafa82eeb5a0f5d3772f9c2a6e2723c1038a9c5f5473070e5c6401e2fa884cdd_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_220bde873be5f5f06d8dc53ec5f1e08bd3896f6b29e851904083d38a09e4ce2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220bde873be5f5f06d8dc53ec5f1e08bd3896f6b29e851904083d38a09e4ce2a->enter($__internal_220bde873be5f5f06d8dc53ec5f1e08bd3896f6b29e851904083d38a09e4ce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9eac5550a48919d6d19ba5ff8c8008c2c721bc6a61029915ce7638fbf4a44648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eac5550a48919d6d19ba5ff8c8008c2c721bc6a61029915ce7638fbf4a44648->enter($__internal_9eac5550a48919d6d19ba5ff8c8008c2c721bc6a61029915ce7638fbf4a44648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_9eac5550a48919d6d19ba5ff8c8008c2c721bc6a61029915ce7638fbf4a44648->leave($__internal_9eac5550a48919d6d19ba5ff8c8008c2c721bc6a61029915ce7638fbf4a44648_prof);

        
        $__internal_220bde873be5f5f06d8dc53ec5f1e08bd3896f6b29e851904083d38a09e4ce2a->leave($__internal_220bde873be5f5f06d8dc53ec5f1e08bd3896f6b29e851904083d38a09e4ce2a_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_250af5882801916b40727ad46eac1941f699c7ca1606e419106f6c5114004133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250af5882801916b40727ad46eac1941f699c7ca1606e419106f6c5114004133->enter($__internal_250af5882801916b40727ad46eac1941f699c7ca1606e419106f6c5114004133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_fa9ec36e0b17f14954dc5145ee7e9870b4fb89f20f8bf023b67fab0ef9aabc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9ec36e0b17f14954dc5145ee7e9870b4fb89f20f8bf023b67fab0ef9aabc19->enter($__internal_fa9ec36e0b17f14954dc5145ee7e9870b4fb89f20f8bf023b67fab0ef9aabc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_fa9ec36e0b17f14954dc5145ee7e9870b4fb89f20f8bf023b67fab0ef9aabc19->leave($__internal_fa9ec36e0b17f14954dc5145ee7e9870b4fb89f20f8bf023b67fab0ef9aabc19_prof);

        
        $__internal_250af5882801916b40727ad46eac1941f699c7ca1606e419106f6c5114004133->leave($__internal_250af5882801916b40727ad46eac1941f699c7ca1606e419106f6c5114004133_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Users/samuelerb/Code/PhpstormProjects/SuperRun-AJAX-JSON-REST/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
