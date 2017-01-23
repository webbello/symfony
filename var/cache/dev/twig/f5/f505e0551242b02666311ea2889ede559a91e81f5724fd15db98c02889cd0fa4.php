<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e732f78e0cebeadee8685f830dd0f5cd6341daac3a248390b890a991e0d198d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e732f78e0cebeadee8685f830dd0f5cd6341daac3a248390b890a991e0d198d->enter($__internal_8e732f78e0cebeadee8685f830dd0f5cd6341daac3a248390b890a991e0d198d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c53f9f90e97c896f54da94c36452bd501ca738b91447be9521933ec7543dfdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53f9f90e97c896f54da94c36452bd501ca738b91447be9521933ec7543dfdd0->enter($__internal_c53f9f90e97c896f54da94c36452bd501ca738b91447be9521933ec7543dfdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e732f78e0cebeadee8685f830dd0f5cd6341daac3a248390b890a991e0d198d->leave($__internal_8e732f78e0cebeadee8685f830dd0f5cd6341daac3a248390b890a991e0d198d_prof);

        
        $__internal_c53f9f90e97c896f54da94c36452bd501ca738b91447be9521933ec7543dfdd0->leave($__internal_c53f9f90e97c896f54da94c36452bd501ca738b91447be9521933ec7543dfdd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_408b38dd9195e18101a0900f3597006c305cca6cc9b0d7b4e481077789ef94d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408b38dd9195e18101a0900f3597006c305cca6cc9b0d7b4e481077789ef94d9->enter($__internal_408b38dd9195e18101a0900f3597006c305cca6cc9b0d7b4e481077789ef94d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2f7f7c7958e15cb70966997f0b99f22fb5f541f6b76018867cc5a3a82e8e86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f7f7c7958e15cb70966997f0b99f22fb5f541f6b76018867cc5a3a82e8e86b->enter($__internal_b2f7f7c7958e15cb70966997f0b99f22fb5f541f6b76018867cc5a3a82e8e86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b2f7f7c7958e15cb70966997f0b99f22fb5f541f6b76018867cc5a3a82e8e86b->leave($__internal_b2f7f7c7958e15cb70966997f0b99f22fb5f541f6b76018867cc5a3a82e8e86b_prof);

        
        $__internal_408b38dd9195e18101a0900f3597006c305cca6cc9b0d7b4e481077789ef94d9->leave($__internal_408b38dd9195e18101a0900f3597006c305cca6cc9b0d7b4e481077789ef94d9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea43616dd96d6f59014cffc06480fd39b3fa124954e1a77ca234b6ef8712ded0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea43616dd96d6f59014cffc06480fd39b3fa124954e1a77ca234b6ef8712ded0->enter($__internal_ea43616dd96d6f59014cffc06480fd39b3fa124954e1a77ca234b6ef8712ded0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ee93e9aa7e3adbb29aa390522b10d22a05bfe89a7254764ff9458f2d25dc160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee93e9aa7e3adbb29aa390522b10d22a05bfe89a7254764ff9458f2d25dc160->enter($__internal_1ee93e9aa7e3adbb29aa390522b10d22a05bfe89a7254764ff9458f2d25dc160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ee93e9aa7e3adbb29aa390522b10d22a05bfe89a7254764ff9458f2d25dc160->leave($__internal_1ee93e9aa7e3adbb29aa390522b10d22a05bfe89a7254764ff9458f2d25dc160_prof);

        
        $__internal_ea43616dd96d6f59014cffc06480fd39b3fa124954e1a77ca234b6ef8712ded0->leave($__internal_ea43616dd96d6f59014cffc06480fd39b3fa124954e1a77ca234b6ef8712ded0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87613008d8dac431922f9bdd5e2478ef460541988cd89c350b339939600b0bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87613008d8dac431922f9bdd5e2478ef460541988cd89c350b339939600b0bb1->enter($__internal_87613008d8dac431922f9bdd5e2478ef460541988cd89c350b339939600b0bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc50736c4259fd0159ebd992f54f819c86f495b58743dea2ceff4d6156615919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc50736c4259fd0159ebd992f54f819c86f495b58743dea2ceff4d6156615919->enter($__internal_cc50736c4259fd0159ebd992f54f819c86f495b58743dea2ceff4d6156615919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cc50736c4259fd0159ebd992f54f819c86f495b58743dea2ceff4d6156615919->leave($__internal_cc50736c4259fd0159ebd992f54f819c86f495b58743dea2ceff4d6156615919_prof);

        
        $__internal_87613008d8dac431922f9bdd5e2478ef460541988cd89c350b339939600b0bb1->leave($__internal_87613008d8dac431922f9bdd5e2478ef460541988cd89c350b339939600b0bb1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
