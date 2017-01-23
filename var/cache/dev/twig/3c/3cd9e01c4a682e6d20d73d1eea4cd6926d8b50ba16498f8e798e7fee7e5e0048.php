<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_74d70744922d3e1b660a8049e159ecd29b286bd72950155e82126c11bb71304a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d70744922d3e1b660a8049e159ecd29b286bd72950155e82126c11bb71304a->enter($__internal_74d70744922d3e1b660a8049e159ecd29b286bd72950155e82126c11bb71304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cc0ab9772400227de2a171a2830b647c896c31dd6c67355c11a8f6b94f3d8e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0ab9772400227de2a171a2830b647c896c31dd6c67355c11a8f6b94f3d8e2a->enter($__internal_cc0ab9772400227de2a171a2830b647c896c31dd6c67355c11a8f6b94f3d8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d70744922d3e1b660a8049e159ecd29b286bd72950155e82126c11bb71304a->leave($__internal_74d70744922d3e1b660a8049e159ecd29b286bd72950155e82126c11bb71304a_prof);

        
        $__internal_cc0ab9772400227de2a171a2830b647c896c31dd6c67355c11a8f6b94f3d8e2a->leave($__internal_cc0ab9772400227de2a171a2830b647c896c31dd6c67355c11a8f6b94f3d8e2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2351dc65e9d4ba89eb53cb3e92ca5b722958bb09f409236017ef5c61265ad6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2351dc65e9d4ba89eb53cb3e92ca5b722958bb09f409236017ef5c61265ad6da->enter($__internal_2351dc65e9d4ba89eb53cb3e92ca5b722958bb09f409236017ef5c61265ad6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_098f1879f569f5bc1f70c681145c31ed7dc77e88e07eff5657eeddd4074348db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098f1879f569f5bc1f70c681145c31ed7dc77e88e07eff5657eeddd4074348db->enter($__internal_098f1879f569f5bc1f70c681145c31ed7dc77e88e07eff5657eeddd4074348db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_098f1879f569f5bc1f70c681145c31ed7dc77e88e07eff5657eeddd4074348db->leave($__internal_098f1879f569f5bc1f70c681145c31ed7dc77e88e07eff5657eeddd4074348db_prof);

        
        $__internal_2351dc65e9d4ba89eb53cb3e92ca5b722958bb09f409236017ef5c61265ad6da->leave($__internal_2351dc65e9d4ba89eb53cb3e92ca5b722958bb09f409236017ef5c61265ad6da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1e508f48783c06314c8f16dddcf337484df6cc84032f4e41ceb4b80c3169cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e508f48783c06314c8f16dddcf337484df6cc84032f4e41ceb4b80c3169cb5->enter($__internal_c1e508f48783c06314c8f16dddcf337484df6cc84032f4e41ceb4b80c3169cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d5d2e0b1ed47b9ed2c2c9d549c5194484dd43a0892f4628e104ae51cd783740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5d2e0b1ed47b9ed2c2c9d549c5194484dd43a0892f4628e104ae51cd783740->enter($__internal_9d5d2e0b1ed47b9ed2c2c9d549c5194484dd43a0892f4628e104ae51cd783740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d5d2e0b1ed47b9ed2c2c9d549c5194484dd43a0892f4628e104ae51cd783740->leave($__internal_9d5d2e0b1ed47b9ed2c2c9d549c5194484dd43a0892f4628e104ae51cd783740_prof);

        
        $__internal_c1e508f48783c06314c8f16dddcf337484df6cc84032f4e41ceb4b80c3169cb5->leave($__internal_c1e508f48783c06314c8f16dddcf337484df6cc84032f4e41ceb4b80c3169cb5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae842b9743b87970557dbf831c962bb9563bd0944ddadb167d668e35e4d2acfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae842b9743b87970557dbf831c962bb9563bd0944ddadb167d668e35e4d2acfa->enter($__internal_ae842b9743b87970557dbf831c962bb9563bd0944ddadb167d668e35e4d2acfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbf2ddfe39baeb80de0f38742281eb2c944339bd8c5da3f21ead31f6ed889ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf2ddfe39baeb80de0f38742281eb2c944339bd8c5da3f21ead31f6ed889ef4->enter($__internal_dbf2ddfe39baeb80de0f38742281eb2c944339bd8c5da3f21ead31f6ed889ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbf2ddfe39baeb80de0f38742281eb2c944339bd8c5da3f21ead31f6ed889ef4->leave($__internal_dbf2ddfe39baeb80de0f38742281eb2c944339bd8c5da3f21ead31f6ed889ef4_prof);

        
        $__internal_ae842b9743b87970557dbf831c962bb9563bd0944ddadb167d668e35e4d2acfa->leave($__internal_ae842b9743b87970557dbf831c962bb9563bd0944ddadb167d668e35e4d2acfa_prof);

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
