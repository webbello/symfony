<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
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
        $__internal_cf2c567069a1a2307781aba8e187bba37736bd606d1ea6a44ddfbfbbba15404e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2c567069a1a2307781aba8e187bba37736bd606d1ea6a44ddfbfbbba15404e->enter($__internal_cf2c567069a1a2307781aba8e187bba37736bd606d1ea6a44ddfbfbbba15404e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c0b87536b790d05a0a7ce17e077be6983c40efa0f9767eedf8ff90d3591cea9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b87536b790d05a0a7ce17e077be6983c40efa0f9767eedf8ff90d3591cea9b->enter($__internal_c0b87536b790d05a0a7ce17e077be6983c40efa0f9767eedf8ff90d3591cea9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf2c567069a1a2307781aba8e187bba37736bd606d1ea6a44ddfbfbbba15404e->leave($__internal_cf2c567069a1a2307781aba8e187bba37736bd606d1ea6a44ddfbfbbba15404e_prof);

        
        $__internal_c0b87536b790d05a0a7ce17e077be6983c40efa0f9767eedf8ff90d3591cea9b->leave($__internal_c0b87536b790d05a0a7ce17e077be6983c40efa0f9767eedf8ff90d3591cea9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_925edf3b199925a08ebb16861e3c0daff1fa22975447cb837a01c8dd1890f5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925edf3b199925a08ebb16861e3c0daff1fa22975447cb837a01c8dd1890f5b3->enter($__internal_925edf3b199925a08ebb16861e3c0daff1fa22975447cb837a01c8dd1890f5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18bcd654ae950eaa717a9a791236c1210a7e4d27fa25acd65d7100631974d409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bcd654ae950eaa717a9a791236c1210a7e4d27fa25acd65d7100631974d409->enter($__internal_18bcd654ae950eaa717a9a791236c1210a7e4d27fa25acd65d7100631974d409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18bcd654ae950eaa717a9a791236c1210a7e4d27fa25acd65d7100631974d409->leave($__internal_18bcd654ae950eaa717a9a791236c1210a7e4d27fa25acd65d7100631974d409_prof);

        
        $__internal_925edf3b199925a08ebb16861e3c0daff1fa22975447cb837a01c8dd1890f5b3->leave($__internal_925edf3b199925a08ebb16861e3c0daff1fa22975447cb837a01c8dd1890f5b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3f5d5e5deff4e625c614bd04839ed463414b350aec421936136e6c8a0d7f6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f5d5e5deff4e625c614bd04839ed463414b350aec421936136e6c8a0d7f6c9->enter($__internal_c3f5d5e5deff4e625c614bd04839ed463414b350aec421936136e6c8a0d7f6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd04eeceb8a595ca26597832b0bc8e3940245f28ed8838f8b39fda935e415f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd04eeceb8a595ca26597832b0bc8e3940245f28ed8838f8b39fda935e415f6b->enter($__internal_dd04eeceb8a595ca26597832b0bc8e3940245f28ed8838f8b39fda935e415f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd04eeceb8a595ca26597832b0bc8e3940245f28ed8838f8b39fda935e415f6b->leave($__internal_dd04eeceb8a595ca26597832b0bc8e3940245f28ed8838f8b39fda935e415f6b_prof);

        
        $__internal_c3f5d5e5deff4e625c614bd04839ed463414b350aec421936136e6c8a0d7f6c9->leave($__internal_c3f5d5e5deff4e625c614bd04839ed463414b350aec421936136e6c8a0d7f6c9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_067d7a5732b17be0c5df657350a506289a46bd80b5b574ac25b4444a3937b031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067d7a5732b17be0c5df657350a506289a46bd80b5b574ac25b4444a3937b031->enter($__internal_067d7a5732b17be0c5df657350a506289a46bd80b5b574ac25b4444a3937b031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_78fa2781e8367614b26de78fadbc99987c91a27ac7a75fae178fe684dd093b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fa2781e8367614b26de78fadbc99987c91a27ac7a75fae178fe684dd093b6f->enter($__internal_78fa2781e8367614b26de78fadbc99987c91a27ac7a75fae178fe684dd093b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_78fa2781e8367614b26de78fadbc99987c91a27ac7a75fae178fe684dd093b6f->leave($__internal_78fa2781e8367614b26de78fadbc99987c91a27ac7a75fae178fe684dd093b6f_prof);

        
        $__internal_067d7a5732b17be0c5df657350a506289a46bd80b5b574ac25b4444a3937b031->leave($__internal_067d7a5732b17be0c5df657350a506289a46bd80b5b574ac25b4444a3937b031_prof);

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
