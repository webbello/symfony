<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_18c16ca2c53592334c03fa11a1018bedee3cb9551b1407f4ca695eb737acead2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a98ffc3e96e987a17e8b83c5864543000bc6f1d2f4428a30d1b1d2280565f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a98ffc3e96e987a17e8b83c5864543000bc6f1d2f4428a30d1b1d2280565f10->enter($__internal_9a98ffc3e96e987a17e8b83c5864543000bc6f1d2f4428a30d1b1d2280565f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e0cfc97cf2617d9d60829bf75a65912ba0fc205c1bf0b5100358a78311d13049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cfc97cf2617d9d60829bf75a65912ba0fc205c1bf0b5100358a78311d13049->enter($__internal_e0cfc97cf2617d9d60829bf75a65912ba0fc205c1bf0b5100358a78311d13049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9a98ffc3e96e987a17e8b83c5864543000bc6f1d2f4428a30d1b1d2280565f10->leave($__internal_9a98ffc3e96e987a17e8b83c5864543000bc6f1d2f4428a30d1b1d2280565f10_prof);

        
        $__internal_e0cfc97cf2617d9d60829bf75a65912ba0fc205c1bf0b5100358a78311d13049->leave($__internal_e0cfc97cf2617d9d60829bf75a65912ba0fc205c1bf0b5100358a78311d13049_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/opt/lampp/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
