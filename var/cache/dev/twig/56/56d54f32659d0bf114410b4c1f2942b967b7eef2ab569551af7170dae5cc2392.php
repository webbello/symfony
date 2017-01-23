<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_924dd070ce01e827234c57befb44328d2d660e3bacb19426e17944f7f36188f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27daff2fdf67a53dfb0dc5ced046a8ecad69ec3cbcc02d17e54a4a7cb7e57b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27daff2fdf67a53dfb0dc5ced046a8ecad69ec3cbcc02d17e54a4a7cb7e57b2f->enter($__internal_27daff2fdf67a53dfb0dc5ced046a8ecad69ec3cbcc02d17e54a4a7cb7e57b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $__internal_194ba954b5569e6e4c77681f6aca35792e83192b72a2dc41c724d9e3651d5833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194ba954b5569e6e4c77681f6aca35792e83192b72a2dc41c724d9e3651d5833->enter($__internal_194ba954b5569e6e4c77681f6aca35792e83192b72a2dc41c724d9e3651d5833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27daff2fdf67a53dfb0dc5ced046a8ecad69ec3cbcc02d17e54a4a7cb7e57b2f->leave($__internal_27daff2fdf67a53dfb0dc5ced046a8ecad69ec3cbcc02d17e54a4a7cb7e57b2f_prof);

        
        $__internal_194ba954b5569e6e4c77681f6aca35792e83192b72a2dc41c724d9e3651d5833->leave($__internal_194ba954b5569e6e4c77681f6aca35792e83192b72a2dc41c724d9e3651d5833_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecc5302a43b7ab7e7b96d16961141bcc994d57b5b67f30877c96f64478360f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc5302a43b7ab7e7b96d16961141bcc994d57b5b67f30877c96f64478360f9d->enter($__internal_ecc5302a43b7ab7e7b96d16961141bcc994d57b5b67f30877c96f64478360f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88fd835f7ae234b0e0cf574e7f418922478a0509b76dbdda2cc693e89a4d1b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fd835f7ae234b0e0cf574e7f418922478a0509b76dbdda2cc693e89a4d1b94->enter($__internal_88fd835f7ae234b0e0cf574e7f418922478a0509b76dbdda2cc693e89a4d1b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Security:login";
        
        $__internal_88fd835f7ae234b0e0cf574e7f418922478a0509b76dbdda2cc693e89a4d1b94->leave($__internal_88fd835f7ae234b0e0cf574e7f418922478a0509b76dbdda2cc693e89a4d1b94_prof);

        
        $__internal_ecc5302a43b7ab7e7b96d16961141bcc994d57b5b67f30877c96f64478360f9d->leave($__internal_ecc5302a43b7ab7e7b96d16961141bcc994d57b5b67f30877c96f64478360f9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b2e1895a55d6bf07bf0aa83b67c3485cc7f66dcc08be0e72de0311f5a6a1442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b2e1895a55d6bf07bf0aa83b67c3485cc7f66dcc08be0e72de0311f5a6a1442->enter($__internal_4b2e1895a55d6bf07bf0aa83b67c3485cc7f66dcc08be0e72de0311f5a6a1442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_890bcce66d2c2d2bb1bb9227b82a7b04646a3c8b3ded67856066e843788f3a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890bcce66d2c2d2bb1bb9227b82a7b04646a3c8b3ded67856066e843788f3a8f->enter($__internal_890bcce66d2c2d2bb1bb9227b82a7b04646a3c8b3ded67856066e843788f3a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Security:login page</h1>

";
        // line 10
        echo "
";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "
<form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 27
        echo "
    <button type=\"submit\">login</button>
</form>

";
        
        $__internal_890bcce66d2c2d2bb1bb9227b82a7b04646a3c8b3ded67856066e843788f3a8f->leave($__internal_890bcce66d2c2d2bb1bb9227b82a7b04646a3c8b3ded67856066e843788f3a8f_prof);

        
        $__internal_4b2e1895a55d6bf07bf0aa83b67c3485cc7f66dcc08be0e72de0311f5a6a1442->leave($__internal_4b2e1895a55d6bf07bf0aa83b67c3485cc7f66dcc08be0e72de0311f5a6a1442_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  91 => 17,  86 => 15,  83 => 14,  77 => 12,  75 => 11,  72 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:Security:login{% endblock %}

{% block body %}
<h1>Welcome to the Security:login page</h1>

{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>

{% endblock %}
", "AppBundle:Security:login.html.twig", "/opt/lampp/htdocs/symfony/src/AppBundle/Resources/views/Security/login.html.twig");
    }
}
