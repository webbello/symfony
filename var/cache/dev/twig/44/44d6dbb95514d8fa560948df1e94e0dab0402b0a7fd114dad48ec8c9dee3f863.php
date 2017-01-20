<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e0a08a9e63098d7fd77dc39cd31996b160816c6f8a8f0b70bbd7b56aa7f0d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0a08a9e63098d7fd77dc39cd31996b160816c6f8a8f0b70bbd7b56aa7f0d00->enter($__internal_4e0a08a9e63098d7fd77dc39cd31996b160816c6f8a8f0b70bbd7b56aa7f0d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a9c70b312ccab296c7923d7a4d4a4aa24fc16d33e791b2ade33a2887ffaeaa7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c70b312ccab296c7923d7a4d4a4aa24fc16d33e791b2ade33a2887ffaeaa7a->enter($__internal_a9c70b312ccab296c7923d7a4d4a4aa24fc16d33e791b2ade33a2887ffaeaa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4e0a08a9e63098d7fd77dc39cd31996b160816c6f8a8f0b70bbd7b56aa7f0d00->leave($__internal_4e0a08a9e63098d7fd77dc39cd31996b160816c6f8a8f0b70bbd7b56aa7f0d00_prof);

        
        $__internal_a9c70b312ccab296c7923d7a4d4a4aa24fc16d33e791b2ade33a2887ffaeaa7a->leave($__internal_a9c70b312ccab296c7923d7a4d4a4aa24fc16d33e791b2ade33a2887ffaeaa7a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8723554fd06b924f5cb5e22d1bc2ba8c28aa2d8c4d18c1c1b35a96caf10df330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8723554fd06b924f5cb5e22d1bc2ba8c28aa2d8c4d18c1c1b35a96caf10df330->enter($__internal_8723554fd06b924f5cb5e22d1bc2ba8c28aa2d8c4d18c1c1b35a96caf10df330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_339ad73cf5f31f4b84a461d71c70a95a458af1efabefd3b5c99d4b1b0af9be14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339ad73cf5f31f4b84a461d71c70a95a458af1efabefd3b5c99d4b1b0af9be14->enter($__internal_339ad73cf5f31f4b84a461d71c70a95a458af1efabefd3b5c99d4b1b0af9be14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_339ad73cf5f31f4b84a461d71c70a95a458af1efabefd3b5c99d4b1b0af9be14->leave($__internal_339ad73cf5f31f4b84a461d71c70a95a458af1efabefd3b5c99d4b1b0af9be14_prof);

        
        $__internal_8723554fd06b924f5cb5e22d1bc2ba8c28aa2d8c4d18c1c1b35a96caf10df330->leave($__internal_8723554fd06b924f5cb5e22d1bc2ba8c28aa2d8c4d18c1c1b35a96caf10df330_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_890f9f71d87db03a14e17114cdf6df95f95ff4bd316772ffee00099045adaeb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890f9f71d87db03a14e17114cdf6df95f95ff4bd316772ffee00099045adaeb9->enter($__internal_890f9f71d87db03a14e17114cdf6df95f95ff4bd316772ffee00099045adaeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_446451e53c0a71ab67e988154dc551f193531c28cd4c90c56c3bb686490329aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446451e53c0a71ab67e988154dc551f193531c28cd4c90c56c3bb686490329aa->enter($__internal_446451e53c0a71ab67e988154dc551f193531c28cd4c90c56c3bb686490329aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_446451e53c0a71ab67e988154dc551f193531c28cd4c90c56c3bb686490329aa->leave($__internal_446451e53c0a71ab67e988154dc551f193531c28cd4c90c56c3bb686490329aa_prof);

        
        $__internal_890f9f71d87db03a14e17114cdf6df95f95ff4bd316772ffee00099045adaeb9->leave($__internal_890f9f71d87db03a14e17114cdf6df95f95ff4bd316772ffee00099045adaeb9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bce16c7dad10f732323138176e18887c3bc3a411bf284576f29ddb93b0960f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce16c7dad10f732323138176e18887c3bc3a411bf284576f29ddb93b0960f50->enter($__internal_bce16c7dad10f732323138176e18887c3bc3a411bf284576f29ddb93b0960f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_530504d1d1c5a01137b20ab94c6d3c4d3fc3ae9df07e3d21842f702bb46f6a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530504d1d1c5a01137b20ab94c6d3c4d3fc3ae9df07e3d21842f702bb46f6a2c->enter($__internal_530504d1d1c5a01137b20ab94c6d3c4d3fc3ae9df07e3d21842f702bb46f6a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_530504d1d1c5a01137b20ab94c6d3c4d3fc3ae9df07e3d21842f702bb46f6a2c->leave($__internal_530504d1d1c5a01137b20ab94c6d3c4d3fc3ae9df07e3d21842f702bb46f6a2c_prof);

        
        $__internal_bce16c7dad10f732323138176e18887c3bc3a411bf284576f29ddb93b0960f50->leave($__internal_bce16c7dad10f732323138176e18887c3bc3a411bf284576f29ddb93b0960f50_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1102006934cd646d8c3600a90d21b1035993a85f7905a75c44ed6787ea65d0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1102006934cd646d8c3600a90d21b1035993a85f7905a75c44ed6787ea65d0e8->enter($__internal_1102006934cd646d8c3600a90d21b1035993a85f7905a75c44ed6787ea65d0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bd0d2aa139257e6e9b190273d98494158cc6e7dcdcbae3e412c5cbf3d8fa81c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0d2aa139257e6e9b190273d98494158cc6e7dcdcbae3e412c5cbf3d8fa81c4->enter($__internal_bd0d2aa139257e6e9b190273d98494158cc6e7dcdcbae3e412c5cbf3d8fa81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd0d2aa139257e6e9b190273d98494158cc6e7dcdcbae3e412c5cbf3d8fa81c4->leave($__internal_bd0d2aa139257e6e9b190273d98494158cc6e7dcdcbae3e412c5cbf3d8fa81c4_prof);

        
        $__internal_1102006934cd646d8c3600a90d21b1035993a85f7905a75c44ed6787ea65d0e8->leave($__internal_1102006934cd646d8c3600a90d21b1035993a85f7905a75c44ed6787ea65d0e8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/symfony/app/Resources/views/base.html.twig");
    }
}
