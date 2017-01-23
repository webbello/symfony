<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_35d9165c8a8bcd1c978980c9a88924822fce6ed95e2c1c4ecae4388f244f6193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b16cecb124c746de5f25a467806e89d7cd6fca7e158c77d7288d520dac907a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b16cecb124c746de5f25a467806e89d7cd6fca7e158c77d7288d520dac907a6->enter($__internal_7b16cecb124c746de5f25a467806e89d7cd6fca7e158c77d7288d520dac907a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b4cea99daa666c1e73ab57f8a34f2595a2748ed4233c4947c8183105fb93a0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cea99daa666c1e73ab57f8a34f2595a2748ed4233c4947c8183105fb93a0c0->enter($__internal_b4cea99daa666c1e73ab57f8a34f2595a2748ed4233c4947c8183105fb93a0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b16cecb124c746de5f25a467806e89d7cd6fca7e158c77d7288d520dac907a6->leave($__internal_7b16cecb124c746de5f25a467806e89d7cd6fca7e158c77d7288d520dac907a6_prof);

        
        $__internal_b4cea99daa666c1e73ab57f8a34f2595a2748ed4233c4947c8183105fb93a0c0->leave($__internal_b4cea99daa666c1e73ab57f8a34f2595a2748ed4233c4947c8183105fb93a0c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a12b7a68c7138f1c0cc8df564fba9bc86ab612e0dfe172bc3d681a8f9b56d68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12b7a68c7138f1c0cc8df564fba9bc86ab612e0dfe172bc3d681a8f9b56d68d->enter($__internal_a12b7a68c7138f1c0cc8df564fba9bc86ab612e0dfe172bc3d681a8f9b56d68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_126a99501ac5bfe1bd8999bb165f0e6dca92d4275ad1e00cceaaba04427cef36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126a99501ac5bfe1bd8999bb165f0e6dca92d4275ad1e00cceaaba04427cef36->enter($__internal_126a99501ac5bfe1bd8999bb165f0e6dca92d4275ad1e00cceaaba04427cef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_126a99501ac5bfe1bd8999bb165f0e6dca92d4275ad1e00cceaaba04427cef36->leave($__internal_126a99501ac5bfe1bd8999bb165f0e6dca92d4275ad1e00cceaaba04427cef36_prof);

        
        $__internal_a12b7a68c7138f1c0cc8df564fba9bc86ab612e0dfe172bc3d681a8f9b56d68d->leave($__internal_a12b7a68c7138f1c0cc8df564fba9bc86ab612e0dfe172bc3d681a8f9b56d68d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
