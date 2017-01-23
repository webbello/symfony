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
        $__internal_4df6ab3c5abd0372dc51ea9a30bf9bfde5869d19dd5a1a98c62b808718c7e113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df6ab3c5abd0372dc51ea9a30bf9bfde5869d19dd5a1a98c62b808718c7e113->enter($__internal_4df6ab3c5abd0372dc51ea9a30bf9bfde5869d19dd5a1a98c62b808718c7e113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e94b8e91bb53810eff5f4d0646276f431bf25c7486c3f8f7d92f093744795b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94b8e91bb53810eff5f4d0646276f431bf25c7486c3f8f7d92f093744795b21->enter($__internal_e94b8e91bb53810eff5f4d0646276f431bf25c7486c3f8f7d92f093744795b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_4df6ab3c5abd0372dc51ea9a30bf9bfde5869d19dd5a1a98c62b808718c7e113->leave($__internal_4df6ab3c5abd0372dc51ea9a30bf9bfde5869d19dd5a1a98c62b808718c7e113_prof);

        
        $__internal_e94b8e91bb53810eff5f4d0646276f431bf25c7486c3f8f7d92f093744795b21->leave($__internal_e94b8e91bb53810eff5f4d0646276f431bf25c7486c3f8f7d92f093744795b21_prof);

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
