<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_90c1a63aba124899c905d7d2339310ea4f9245a4e490e264b8efbccfdfc55f2c extends Twig_Template
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
        $__internal_2441a90fb010679170211439f602c150a892d34e14dc8880f47fda94ba1a5f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2441a90fb010679170211439f602c150a892d34e14dc8880f47fda94ba1a5f8f->enter($__internal_2441a90fb010679170211439f602c150a892d34e14dc8880f47fda94ba1a5f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f96c4d8d82ddcca3e6e19b1e36fd1520d526d7db92458ce2322734e5469612c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96c4d8d82ddcca3e6e19b1e36fd1520d526d7db92458ce2322734e5469612c2->enter($__internal_f96c4d8d82ddcca3e6e19b1e36fd1520d526d7db92458ce2322734e5469612c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2441a90fb010679170211439f602c150a892d34e14dc8880f47fda94ba1a5f8f->leave($__internal_2441a90fb010679170211439f602c150a892d34e14dc8880f47fda94ba1a5f8f_prof);

        
        $__internal_f96c4d8d82ddcca3e6e19b1e36fd1520d526d7db92458ce2322734e5469612c2->leave($__internal_f96c4d8d82ddcca3e6e19b1e36fd1520d526d7db92458ce2322734e5469612c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdad5430f7214cafdd8cd3ab84b4bdbade5220c29b5543c50cb72568a86ea573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdad5430f7214cafdd8cd3ab84b4bdbade5220c29b5543c50cb72568a86ea573->enter($__internal_bdad5430f7214cafdd8cd3ab84b4bdbade5220c29b5543c50cb72568a86ea573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23a6a01999d8017774b4e8ec7ca28dc01242530965e962b947f141826c036c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a6a01999d8017774b4e8ec7ca28dc01242530965e962b947f141826c036c18->enter($__internal_23a6a01999d8017774b4e8ec7ca28dc01242530965e962b947f141826c036c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_23a6a01999d8017774b4e8ec7ca28dc01242530965e962b947f141826c036c18->leave($__internal_23a6a01999d8017774b4e8ec7ca28dc01242530965e962b947f141826c036c18_prof);

        
        $__internal_bdad5430f7214cafdd8cd3ab84b4bdbade5220c29b5543c50cb72568a86ea573->leave($__internal_bdad5430f7214cafdd8cd3ab84b4bdbade5220c29b5543c50cb72568a86ea573_prof);

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
