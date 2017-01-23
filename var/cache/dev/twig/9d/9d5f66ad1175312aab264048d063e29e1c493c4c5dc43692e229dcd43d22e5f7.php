<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_fcb399db2b60a4930d4d66e945c1a586d8b439d85adfd9294a012673cd9297db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb399db2b60a4930d4d66e945c1a586d8b439d85adfd9294a012673cd9297db->enter($__internal_fcb399db2b60a4930d4d66e945c1a586d8b439d85adfd9294a012673cd9297db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_15b14c226fc2e70d77a16e137b90a585897615e9a493f691a3b8da7eb66b0578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b14c226fc2e70d77a16e137b90a585897615e9a493f691a3b8da7eb66b0578->enter($__internal_15b14c226fc2e70d77a16e137b90a585897615e9a493f691a3b8da7eb66b0578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fcb399db2b60a4930d4d66e945c1a586d8b439d85adfd9294a012673cd9297db->leave($__internal_fcb399db2b60a4930d4d66e945c1a586d8b439d85adfd9294a012673cd9297db_prof);

        
        $__internal_15b14c226fc2e70d77a16e137b90a585897615e9a493f691a3b8da7eb66b0578->leave($__internal_15b14c226fc2e70d77a16e137b90a585897615e9a493f691a3b8da7eb66b0578_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e823efae301fd6dd7c96196037772cda4d4272aeacf34e2302c814a59bfa1077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e823efae301fd6dd7c96196037772cda4d4272aeacf34e2302c814a59bfa1077->enter($__internal_e823efae301fd6dd7c96196037772cda4d4272aeacf34e2302c814a59bfa1077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_284ddd4ab04292902a175b03227fe583656d0c63e8e21f8382ee210f434c75f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284ddd4ab04292902a175b03227fe583656d0c63e8e21f8382ee210f434c75f0->enter($__internal_284ddd4ab04292902a175b03227fe583656d0c63e8e21f8382ee210f434c75f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_284ddd4ab04292902a175b03227fe583656d0c63e8e21f8382ee210f434c75f0->leave($__internal_284ddd4ab04292902a175b03227fe583656d0c63e8e21f8382ee210f434c75f0_prof);

        
        $__internal_e823efae301fd6dd7c96196037772cda4d4272aeacf34e2302c814a59bfa1077->leave($__internal_e823efae301fd6dd7c96196037772cda4d4272aeacf34e2302c814a59bfa1077_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f4ed5370799e8d360460eccc1756acd2db3adedbb3d7dd0a50e22f6e9931492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4ed5370799e8d360460eccc1756acd2db3adedbb3d7dd0a50e22f6e9931492->enter($__internal_3f4ed5370799e8d360460eccc1756acd2db3adedbb3d7dd0a50e22f6e9931492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ba2784fe44916fea3c307d1ff46c58015e87ce4cc964890e15d4bfd773ddac3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2784fe44916fea3c307d1ff46c58015e87ce4cc964890e15d4bfd773ddac3d->enter($__internal_ba2784fe44916fea3c307d1ff46c58015e87ce4cc964890e15d4bfd773ddac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba2784fe44916fea3c307d1ff46c58015e87ce4cc964890e15d4bfd773ddac3d->leave($__internal_ba2784fe44916fea3c307d1ff46c58015e87ce4cc964890e15d4bfd773ddac3d_prof);

        
        $__internal_3f4ed5370799e8d360460eccc1756acd2db3adedbb3d7dd0a50e22f6e9931492->leave($__internal_3f4ed5370799e8d360460eccc1756acd2db3adedbb3d7dd0a50e22f6e9931492_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e63b117de79b675ae24382630ff9ea12bc2a38d4bb4f8dc74ffa382c412f264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e63b117de79b675ae24382630ff9ea12bc2a38d4bb4f8dc74ffa382c412f264->enter($__internal_1e63b117de79b675ae24382630ff9ea12bc2a38d4bb4f8dc74ffa382c412f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cfd0a35a9c7f958f5b85305c5f543e847472eb30664c15f52d1c3da1668117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfd0a35a9c7f958f5b85305c5f543e847472eb30664c15f52d1c3da1668117d->enter($__internal_5cfd0a35a9c7f958f5b85305c5f543e847472eb30664c15f52d1c3da1668117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5cfd0a35a9c7f958f5b85305c5f543e847472eb30664c15f52d1c3da1668117d->leave($__internal_5cfd0a35a9c7f958f5b85305c5f543e847472eb30664c15f52d1c3da1668117d_prof);

        
        $__internal_1e63b117de79b675ae24382630ff9ea12bc2a38d4bb4f8dc74ffa382c412f264->leave($__internal_1e63b117de79b675ae24382630ff9ea12bc2a38d4bb4f8dc74ffa382c412f264_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41cddceb9148d29445a0172f14d9a3bebde869bbc2f8c6d67ac45b76f8e798f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cddceb9148d29445a0172f14d9a3bebde869bbc2f8c6d67ac45b76f8e798f5->enter($__internal_41cddceb9148d29445a0172f14d9a3bebde869bbc2f8c6d67ac45b76f8e798f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_842fec5ba2f2b4e7ec11243c8e378dd9029043e49ad1e76a712f627bb15783ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842fec5ba2f2b4e7ec11243c8e378dd9029043e49ad1e76a712f627bb15783ab->enter($__internal_842fec5ba2f2b4e7ec11243c8e378dd9029043e49ad1e76a712f627bb15783ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_842fec5ba2f2b4e7ec11243c8e378dd9029043e49ad1e76a712f627bb15783ab->leave($__internal_842fec5ba2f2b4e7ec11243c8e378dd9029043e49ad1e76a712f627bb15783ab_prof);

        
        $__internal_41cddceb9148d29445a0172f14d9a3bebde869bbc2f8c6d67ac45b76f8e798f5->leave($__internal_41cddceb9148d29445a0172f14d9a3bebde869bbc2f8c6d67ac45b76f8e798f5_prof);

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
