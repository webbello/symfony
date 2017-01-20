<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
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
        $__internal_3890582274e405f15dfe18bae5020dfc17b1ea0f3f35f4dad774449ff1c78eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3890582274e405f15dfe18bae5020dfc17b1ea0f3f35f4dad774449ff1c78eb0->enter($__internal_3890582274e405f15dfe18bae5020dfc17b1ea0f3f35f4dad774449ff1c78eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b2311b2a87106e201d725ad21b268985d479987497d4b9e49ac58ddde77d7073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2311b2a87106e201d725ad21b268985d479987497d4b9e49ac58ddde77d7073->enter($__internal_b2311b2a87106e201d725ad21b268985d479987497d4b9e49ac58ddde77d7073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3890582274e405f15dfe18bae5020dfc17b1ea0f3f35f4dad774449ff1c78eb0->leave($__internal_3890582274e405f15dfe18bae5020dfc17b1ea0f3f35f4dad774449ff1c78eb0_prof);

        
        $__internal_b2311b2a87106e201d725ad21b268985d479987497d4b9e49ac58ddde77d7073->leave($__internal_b2311b2a87106e201d725ad21b268985d479987497d4b9e49ac58ddde77d7073_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cbf581bb8ca1b0ccd93970a7cde9e8ffa8ce9851af7f90ea2ca1b9092edbef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbf581bb8ca1b0ccd93970a7cde9e8ffa8ce9851af7f90ea2ca1b9092edbef7->enter($__internal_6cbf581bb8ca1b0ccd93970a7cde9e8ffa8ce9851af7f90ea2ca1b9092edbef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37a75082413bcc56712c25d9f1a7a497f41b5784ecf8fe707acebde29fdee5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a75082413bcc56712c25d9f1a7a497f41b5784ecf8fe707acebde29fdee5dc->enter($__internal_37a75082413bcc56712c25d9f1a7a497f41b5784ecf8fe707acebde29fdee5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37a75082413bcc56712c25d9f1a7a497f41b5784ecf8fe707acebde29fdee5dc->leave($__internal_37a75082413bcc56712c25d9f1a7a497f41b5784ecf8fe707acebde29fdee5dc_prof);

        
        $__internal_6cbf581bb8ca1b0ccd93970a7cde9e8ffa8ce9851af7f90ea2ca1b9092edbef7->leave($__internal_6cbf581bb8ca1b0ccd93970a7cde9e8ffa8ce9851af7f90ea2ca1b9092edbef7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2255156c74b0c85ea97e076ab4b86f66ac97191dbd00e1bf6d1dfe76ec70f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2255156c74b0c85ea97e076ab4b86f66ac97191dbd00e1bf6d1dfe76ec70f2f->enter($__internal_a2255156c74b0c85ea97e076ab4b86f66ac97191dbd00e1bf6d1dfe76ec70f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3eed03a16ec8a3a87cc308c35c502df395bc3f21e061069781ffa5e9c0b7adfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eed03a16ec8a3a87cc308c35c502df395bc3f21e061069781ffa5e9c0b7adfc->enter($__internal_3eed03a16ec8a3a87cc308c35c502df395bc3f21e061069781ffa5e9c0b7adfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3eed03a16ec8a3a87cc308c35c502df395bc3f21e061069781ffa5e9c0b7adfc->leave($__internal_3eed03a16ec8a3a87cc308c35c502df395bc3f21e061069781ffa5e9c0b7adfc_prof);

        
        $__internal_a2255156c74b0c85ea97e076ab4b86f66ac97191dbd00e1bf6d1dfe76ec70f2f->leave($__internal_a2255156c74b0c85ea97e076ab4b86f66ac97191dbd00e1bf6d1dfe76ec70f2f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f95ed0f1a92c53120af64016731f07f5de098d9201d80ecfad09db93cb0da85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f95ed0f1a92c53120af64016731f07f5de098d9201d80ecfad09db93cb0da85->enter($__internal_4f95ed0f1a92c53120af64016731f07f5de098d9201d80ecfad09db93cb0da85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18edfb60741b151c9e4af5b35231912c021f34f5b953a024c2fb57a387979216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18edfb60741b151c9e4af5b35231912c021f34f5b953a024c2fb57a387979216->enter($__internal_18edfb60741b151c9e4af5b35231912c021f34f5b953a024c2fb57a387979216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_18edfb60741b151c9e4af5b35231912c021f34f5b953a024c2fb57a387979216->leave($__internal_18edfb60741b151c9e4af5b35231912c021f34f5b953a024c2fb57a387979216_prof);

        
        $__internal_4f95ed0f1a92c53120af64016731f07f5de098d9201d80ecfad09db93cb0da85->leave($__internal_4f95ed0f1a92c53120af64016731f07f5de098d9201d80ecfad09db93cb0da85_prof);

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
