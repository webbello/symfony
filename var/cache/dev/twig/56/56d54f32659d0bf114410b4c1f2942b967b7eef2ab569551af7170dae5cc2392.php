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
        $__internal_2c1daf57451382714d51d171d0f94363dfb28e0550031fd5a91096c7dabf085f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1daf57451382714d51d171d0f94363dfb28e0550031fd5a91096c7dabf085f->enter($__internal_2c1daf57451382714d51d171d0f94363dfb28e0550031fd5a91096c7dabf085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $__internal_95d07c696eaadca3749ddab9dc924417828ac45864b0c238a9fde852fa0c3d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d07c696eaadca3749ddab9dc924417828ac45864b0c238a9fde852fa0c3d8f->enter($__internal_95d07c696eaadca3749ddab9dc924417828ac45864b0c238a9fde852fa0c3d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1daf57451382714d51d171d0f94363dfb28e0550031fd5a91096c7dabf085f->leave($__internal_2c1daf57451382714d51d171d0f94363dfb28e0550031fd5a91096c7dabf085f_prof);

        
        $__internal_95d07c696eaadca3749ddab9dc924417828ac45864b0c238a9fde852fa0c3d8f->leave($__internal_95d07c696eaadca3749ddab9dc924417828ac45864b0c238a9fde852fa0c3d8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5076b14c9dd8709ea07ab41289a6a601e5ba08586d5ed8e00796a0b05fe177af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5076b14c9dd8709ea07ab41289a6a601e5ba08586d5ed8e00796a0b05fe177af->enter($__internal_5076b14c9dd8709ea07ab41289a6a601e5ba08586d5ed8e00796a0b05fe177af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd4450a446143dda1fcc2bd00da29f2c50d7855aaf4bef3afe7f52ffb1e1fa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4450a446143dda1fcc2bd00da29f2c50d7855aaf4bef3afe7f52ffb1e1fa1f->enter($__internal_cd4450a446143dda1fcc2bd00da29f2c50d7855aaf4bef3afe7f52ffb1e1fa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Security:login";
        
        $__internal_cd4450a446143dda1fcc2bd00da29f2c50d7855aaf4bef3afe7f52ffb1e1fa1f->leave($__internal_cd4450a446143dda1fcc2bd00da29f2c50d7855aaf4bef3afe7f52ffb1e1fa1f_prof);

        
        $__internal_5076b14c9dd8709ea07ab41289a6a601e5ba08586d5ed8e00796a0b05fe177af->leave($__internal_5076b14c9dd8709ea07ab41289a6a601e5ba08586d5ed8e00796a0b05fe177af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a796ed16735c273cd05a113e3f8c380749f0d6d0a800f7427133938a4c1d6a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a796ed16735c273cd05a113e3f8c380749f0d6d0a800f7427133938a4c1d6a84->enter($__internal_a796ed16735c273cd05a113e3f8c380749f0d6d0a800f7427133938a4c1d6a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1d2648902be74a3415f65745911ff54345b176214cbc2d457b6f0d94d3418a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d2648902be74a3415f65745911ff54345b176214cbc2d457b6f0d94d3418a6->enter($__internal_f1d2648902be74a3415f65745911ff54345b176214cbc2d457b6f0d94d3418a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f1d2648902be74a3415f65745911ff54345b176214cbc2d457b6f0d94d3418a6->leave($__internal_f1d2648902be74a3415f65745911ff54345b176214cbc2d457b6f0d94d3418a6_prof);

        
        $__internal_a796ed16735c273cd05a113e3f8c380749f0d6d0a800f7427133938a4c1d6a84->leave($__internal_a796ed16735c273cd05a113e3f8c380749f0d6d0a800f7427133938a4c1d6a84_prof);

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
