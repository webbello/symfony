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
        $__internal_9ee03689e3b0449bda86d791a511f5b48a314e46978304f38ac942b2cd353559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee03689e3b0449bda86d791a511f5b48a314e46978304f38ac942b2cd353559->enter($__internal_9ee03689e3b0449bda86d791a511f5b48a314e46978304f38ac942b2cd353559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6be718ed87e2145e3852773b614fe2c2d97649587b76eddcfcbeb618b8f90110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be718ed87e2145e3852773b614fe2c2d97649587b76eddcfcbeb618b8f90110->enter($__internal_6be718ed87e2145e3852773b614fe2c2d97649587b76eddcfcbeb618b8f90110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ee03689e3b0449bda86d791a511f5b48a314e46978304f38ac942b2cd353559->leave($__internal_9ee03689e3b0449bda86d791a511f5b48a314e46978304f38ac942b2cd353559_prof);

        
        $__internal_6be718ed87e2145e3852773b614fe2c2d97649587b76eddcfcbeb618b8f90110->leave($__internal_6be718ed87e2145e3852773b614fe2c2d97649587b76eddcfcbeb618b8f90110_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b7f853de49195ab891e50663eab7b6dcc03c27a4b8d1c930982c63250b95da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7f853de49195ab891e50663eab7b6dcc03c27a4b8d1c930982c63250b95da4->enter($__internal_1b7f853de49195ab891e50663eab7b6dcc03c27a4b8d1c930982c63250b95da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_82e3ae1ba4b8c937a915f63b06db580e579813b6afb97edf8e836030934693cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e3ae1ba4b8c937a915f63b06db580e579813b6afb97edf8e836030934693cc->enter($__internal_82e3ae1ba4b8c937a915f63b06db580e579813b6afb97edf8e836030934693cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_82e3ae1ba4b8c937a915f63b06db580e579813b6afb97edf8e836030934693cc->leave($__internal_82e3ae1ba4b8c937a915f63b06db580e579813b6afb97edf8e836030934693cc_prof);

        
        $__internal_1b7f853de49195ab891e50663eab7b6dcc03c27a4b8d1c930982c63250b95da4->leave($__internal_1b7f853de49195ab891e50663eab7b6dcc03c27a4b8d1c930982c63250b95da4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_786b99b6eda343c07cda45393f309659147349b605d9a25cfc2fd589cb1ede1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786b99b6eda343c07cda45393f309659147349b605d9a25cfc2fd589cb1ede1d->enter($__internal_786b99b6eda343c07cda45393f309659147349b605d9a25cfc2fd589cb1ede1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d3e572f9c827dc6bee57e3cd87a41502caa17abacc2f3f740a7d4d5c1f99a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3e572f9c827dc6bee57e3cd87a41502caa17abacc2f3f740a7d4d5c1f99a9f->enter($__internal_7d3e572f9c827dc6bee57e3cd87a41502caa17abacc2f3f740a7d4d5c1f99a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d3e572f9c827dc6bee57e3cd87a41502caa17abacc2f3f740a7d4d5c1f99a9f->leave($__internal_7d3e572f9c827dc6bee57e3cd87a41502caa17abacc2f3f740a7d4d5c1f99a9f_prof);

        
        $__internal_786b99b6eda343c07cda45393f309659147349b605d9a25cfc2fd589cb1ede1d->leave($__internal_786b99b6eda343c07cda45393f309659147349b605d9a25cfc2fd589cb1ede1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fea8ce9ee118cc28e61636fbfad6dec0433441db8aefdc46d34b0b0f80f9088f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea8ce9ee118cc28e61636fbfad6dec0433441db8aefdc46d34b0b0f80f9088f->enter($__internal_fea8ce9ee118cc28e61636fbfad6dec0433441db8aefdc46d34b0b0f80f9088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66581d32994669b6181fed86a1a61c1dd6f0fea3a278e9bafb46d4cdcdc1770c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66581d32994669b6181fed86a1a61c1dd6f0fea3a278e9bafb46d4cdcdc1770c->enter($__internal_66581d32994669b6181fed86a1a61c1dd6f0fea3a278e9bafb46d4cdcdc1770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66581d32994669b6181fed86a1a61c1dd6f0fea3a278e9bafb46d4cdcdc1770c->leave($__internal_66581d32994669b6181fed86a1a61c1dd6f0fea3a278e9bafb46d4cdcdc1770c_prof);

        
        $__internal_fea8ce9ee118cc28e61636fbfad6dec0433441db8aefdc46d34b0b0f80f9088f->leave($__internal_fea8ce9ee118cc28e61636fbfad6dec0433441db8aefdc46d34b0b0f80f9088f_prof);

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
