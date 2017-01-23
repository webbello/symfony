<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_927ad7f7ac205e27329306fb47edfc09abb1423bc7b6241b8a97a18345e71dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927ad7f7ac205e27329306fb47edfc09abb1423bc7b6241b8a97a18345e71dcc->enter($__internal_927ad7f7ac205e27329306fb47edfc09abb1423bc7b6241b8a97a18345e71dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2bccdde53a6ec4e5dc5b915d608e22ff8f31917236d5e6296d017a76dbfbc8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bccdde53a6ec4e5dc5b915d608e22ff8f31917236d5e6296d017a76dbfbc8e0->enter($__internal_2bccdde53a6ec4e5dc5b915d608e22ff8f31917236d5e6296d017a76dbfbc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_927ad7f7ac205e27329306fb47edfc09abb1423bc7b6241b8a97a18345e71dcc->leave($__internal_927ad7f7ac205e27329306fb47edfc09abb1423bc7b6241b8a97a18345e71dcc_prof);

        
        $__internal_2bccdde53a6ec4e5dc5b915d608e22ff8f31917236d5e6296d017a76dbfbc8e0->leave($__internal_2bccdde53a6ec4e5dc5b915d608e22ff8f31917236d5e6296d017a76dbfbc8e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7931635c26ad67b499df4a3c59eff6f20a8ddd3497b780c7111d8410f07a5ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931635c26ad67b499df4a3c59eff6f20a8ddd3497b780c7111d8410f07a5ea4->enter($__internal_7931635c26ad67b499df4a3c59eff6f20a8ddd3497b780c7111d8410f07a5ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fee03a9fb448fe78a77764715017a75e177818713478063e22f16bd1b18f5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fee03a9fb448fe78a77764715017a75e177818713478063e22f16bd1b18f5d8->enter($__internal_6fee03a9fb448fe78a77764715017a75e177818713478063e22f16bd1b18f5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6fee03a9fb448fe78a77764715017a75e177818713478063e22f16bd1b18f5d8->leave($__internal_6fee03a9fb448fe78a77764715017a75e177818713478063e22f16bd1b18f5d8_prof);

        
        $__internal_7931635c26ad67b499df4a3c59eff6f20a8ddd3497b780c7111d8410f07a5ea4->leave($__internal_7931635c26ad67b499df4a3c59eff6f20a8ddd3497b780c7111d8410f07a5ea4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79cd34af6fe8bf3320f9f9061cf3d00c44f7d7b3a23f8213a7b5104ead89e15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cd34af6fe8bf3320f9f9061cf3d00c44f7d7b3a23f8213a7b5104ead89e15b->enter($__internal_79cd34af6fe8bf3320f9f9061cf3d00c44f7d7b3a23f8213a7b5104ead89e15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d01c4148740ceec2ab3063efa488f34a896ab072a8d73d9147a512b77c24453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d01c4148740ceec2ab3063efa488f34a896ab072a8d73d9147a512b77c24453->enter($__internal_2d01c4148740ceec2ab3063efa488f34a896ab072a8d73d9147a512b77c24453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d01c4148740ceec2ab3063efa488f34a896ab072a8d73d9147a512b77c24453->leave($__internal_2d01c4148740ceec2ab3063efa488f34a896ab072a8d73d9147a512b77c24453_prof);

        
        $__internal_79cd34af6fe8bf3320f9f9061cf3d00c44f7d7b3a23f8213a7b5104ead89e15b->leave($__internal_79cd34af6fe8bf3320f9f9061cf3d00c44f7d7b3a23f8213a7b5104ead89e15b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7795e37a3d00b7ea7a6e7fe403d463ef50defaf25a0b366230ed4f39659e6889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7795e37a3d00b7ea7a6e7fe403d463ef50defaf25a0b366230ed4f39659e6889->enter($__internal_7795e37a3d00b7ea7a6e7fe403d463ef50defaf25a0b366230ed4f39659e6889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3236027da9144a8ae56b9aa0192b7018c762aaf0df62bf4bf43cd3a084a4f448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3236027da9144a8ae56b9aa0192b7018c762aaf0df62bf4bf43cd3a084a4f448->enter($__internal_3236027da9144a8ae56b9aa0192b7018c762aaf0df62bf4bf43cd3a084a4f448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3236027da9144a8ae56b9aa0192b7018c762aaf0df62bf4bf43cd3a084a4f448->leave($__internal_3236027da9144a8ae56b9aa0192b7018c762aaf0df62bf4bf43cd3a084a4f448_prof);

        
        $__internal_7795e37a3d00b7ea7a6e7fe403d463ef50defaf25a0b366230ed4f39659e6889->leave($__internal_7795e37a3d00b7ea7a6e7fe403d463ef50defaf25a0b366230ed4f39659e6889_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
