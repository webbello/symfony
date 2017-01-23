<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
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
        $__internal_92d43b103113ab978465060404363a086273a5ae0534e70f279763f9ba2a967e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92d43b103113ab978465060404363a086273a5ae0534e70f279763f9ba2a967e->enter($__internal_92d43b103113ab978465060404363a086273a5ae0534e70f279763f9ba2a967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c0ede256739944de69702e718cffc494f779074d17e26b48e74dc55b5934c5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ede256739944de69702e718cffc494f779074d17e26b48e74dc55b5934c5ec->enter($__internal_c0ede256739944de69702e718cffc494f779074d17e26b48e74dc55b5934c5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92d43b103113ab978465060404363a086273a5ae0534e70f279763f9ba2a967e->leave($__internal_92d43b103113ab978465060404363a086273a5ae0534e70f279763f9ba2a967e_prof);

        
        $__internal_c0ede256739944de69702e718cffc494f779074d17e26b48e74dc55b5934c5ec->leave($__internal_c0ede256739944de69702e718cffc494f779074d17e26b48e74dc55b5934c5ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d8cca98d246c00024f2f60eaa972c4f202738e722c858859df5f2ce5ad88d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8cca98d246c00024f2f60eaa972c4f202738e722c858859df5f2ce5ad88d40->enter($__internal_3d8cca98d246c00024f2f60eaa972c4f202738e722c858859df5f2ce5ad88d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c39f65f000fede6af28326032f29938dbf7e67b03ab76e2ae27e342cd9c415f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c39f65f000fede6af28326032f29938dbf7e67b03ab76e2ae27e342cd9c415f->enter($__internal_3c39f65f000fede6af28326032f29938dbf7e67b03ab76e2ae27e342cd9c415f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3c39f65f000fede6af28326032f29938dbf7e67b03ab76e2ae27e342cd9c415f->leave($__internal_3c39f65f000fede6af28326032f29938dbf7e67b03ab76e2ae27e342cd9c415f_prof);

        
        $__internal_3d8cca98d246c00024f2f60eaa972c4f202738e722c858859df5f2ce5ad88d40->leave($__internal_3d8cca98d246c00024f2f60eaa972c4f202738e722c858859df5f2ce5ad88d40_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0adb56f6d9903d683194d3f18adbc8bcfe88a63bc2693caf16c6251b7da1bbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adb56f6d9903d683194d3f18adbc8bcfe88a63bc2693caf16c6251b7da1bbc6->enter($__internal_0adb56f6d9903d683194d3f18adbc8bcfe88a63bc2693caf16c6251b7da1bbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ed14f32e0cbba8f00c3d0854723fd1750f1684f673db77abe5f26aab652652d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed14f32e0cbba8f00c3d0854723fd1750f1684f673db77abe5f26aab652652d->enter($__internal_2ed14f32e0cbba8f00c3d0854723fd1750f1684f673db77abe5f26aab652652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2ed14f32e0cbba8f00c3d0854723fd1750f1684f673db77abe5f26aab652652d->leave($__internal_2ed14f32e0cbba8f00c3d0854723fd1750f1684f673db77abe5f26aab652652d_prof);

        
        $__internal_0adb56f6d9903d683194d3f18adbc8bcfe88a63bc2693caf16c6251b7da1bbc6->leave($__internal_0adb56f6d9903d683194d3f18adbc8bcfe88a63bc2693caf16c6251b7da1bbc6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_549b4fd25cf6ee33865dbd287f9208df63d8d857d1b87951fa3b87b01ae821a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549b4fd25cf6ee33865dbd287f9208df63d8d857d1b87951fa3b87b01ae821a8->enter($__internal_549b4fd25cf6ee33865dbd287f9208df63d8d857d1b87951fa3b87b01ae821a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa1c18d97caede11f3817c808ee4c932468af1bc8889ce1550dca6440bd98ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1c18d97caede11f3817c808ee4c932468af1bc8889ce1550dca6440bd98ae7->enter($__internal_aa1c18d97caede11f3817c808ee4c932468af1bc8889ce1550dca6440bd98ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aa1c18d97caede11f3817c808ee4c932468af1bc8889ce1550dca6440bd98ae7->leave($__internal_aa1c18d97caede11f3817c808ee4c932468af1bc8889ce1550dca6440bd98ae7_prof);

        
        $__internal_549b4fd25cf6ee33865dbd287f9208df63d8d857d1b87951fa3b87b01ae821a8->leave($__internal_549b4fd25cf6ee33865dbd287f9208df63d8d857d1b87951fa3b87b01ae821a8_prof);

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
