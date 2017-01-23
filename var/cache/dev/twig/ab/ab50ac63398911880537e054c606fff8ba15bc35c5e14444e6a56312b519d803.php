<?php

/* ::base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
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
        $__internal_af4ef8b6a8a34252f7f48bdea38af47da07dfee8f0c9d6883bf6ab187314f48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4ef8b6a8a34252f7f48bdea38af47da07dfee8f0c9d6883bf6ab187314f48e->enter($__internal_af4ef8b6a8a34252f7f48bdea38af47da07dfee8f0c9d6883bf6ab187314f48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3fadc26b6c36f05f93f0ed9eca7926cb4cd2d51bfa5f67b6ab314b34e68b2317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fadc26b6c36f05f93f0ed9eca7926cb4cd2d51bfa5f67b6ab314b34e68b2317->enter($__internal_3fadc26b6c36f05f93f0ed9eca7926cb4cd2d51bfa5f67b6ab314b34e68b2317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_af4ef8b6a8a34252f7f48bdea38af47da07dfee8f0c9d6883bf6ab187314f48e->leave($__internal_af4ef8b6a8a34252f7f48bdea38af47da07dfee8f0c9d6883bf6ab187314f48e_prof);

        
        $__internal_3fadc26b6c36f05f93f0ed9eca7926cb4cd2d51bfa5f67b6ab314b34e68b2317->leave($__internal_3fadc26b6c36f05f93f0ed9eca7926cb4cd2d51bfa5f67b6ab314b34e68b2317_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2a00cadae868d73f82317d8df4f41413f70f80e186b7370ad5061cd63d46d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a00cadae868d73f82317d8df4f41413f70f80e186b7370ad5061cd63d46d48->enter($__internal_d2a00cadae868d73f82317d8df4f41413f70f80e186b7370ad5061cd63d46d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1483f987aa1caf8775f77b9f0ec06062525b15e1fbbce54686602b0b2a1bcb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1483f987aa1caf8775f77b9f0ec06062525b15e1fbbce54686602b0b2a1bcb3c->enter($__internal_1483f987aa1caf8775f77b9f0ec06062525b15e1fbbce54686602b0b2a1bcb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1483f987aa1caf8775f77b9f0ec06062525b15e1fbbce54686602b0b2a1bcb3c->leave($__internal_1483f987aa1caf8775f77b9f0ec06062525b15e1fbbce54686602b0b2a1bcb3c_prof);

        
        $__internal_d2a00cadae868d73f82317d8df4f41413f70f80e186b7370ad5061cd63d46d48->leave($__internal_d2a00cadae868d73f82317d8df4f41413f70f80e186b7370ad5061cd63d46d48_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_feaf03f43225fcd8a072a7dc4e81fdcc563de1440e35a3ae0a8da7b231ed1453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaf03f43225fcd8a072a7dc4e81fdcc563de1440e35a3ae0a8da7b231ed1453->enter($__internal_feaf03f43225fcd8a072a7dc4e81fdcc563de1440e35a3ae0a8da7b231ed1453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e5262cf54ce42fd42c49aa7aac31d60819b63baa23d8aa3e156bae0007abce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5262cf54ce42fd42c49aa7aac31d60819b63baa23d8aa3e156bae0007abce3->enter($__internal_7e5262cf54ce42fd42c49aa7aac31d60819b63baa23d8aa3e156bae0007abce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e5262cf54ce42fd42c49aa7aac31d60819b63baa23d8aa3e156bae0007abce3->leave($__internal_7e5262cf54ce42fd42c49aa7aac31d60819b63baa23d8aa3e156bae0007abce3_prof);

        
        $__internal_feaf03f43225fcd8a072a7dc4e81fdcc563de1440e35a3ae0a8da7b231ed1453->leave($__internal_feaf03f43225fcd8a072a7dc4e81fdcc563de1440e35a3ae0a8da7b231ed1453_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b043fb5101046f158498123f6cff5c3173047bb20ceae7a6b156c9f8fe1d6015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b043fb5101046f158498123f6cff5c3173047bb20ceae7a6b156c9f8fe1d6015->enter($__internal_b043fb5101046f158498123f6cff5c3173047bb20ceae7a6b156c9f8fe1d6015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f036e9efddd6ff185fa9f9eda485ae7a00b941da08a30359675d6e4c10231a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f036e9efddd6ff185fa9f9eda485ae7a00b941da08a30359675d6e4c10231a39->enter($__internal_f036e9efddd6ff185fa9f9eda485ae7a00b941da08a30359675d6e4c10231a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f036e9efddd6ff185fa9f9eda485ae7a00b941da08a30359675d6e4c10231a39->leave($__internal_f036e9efddd6ff185fa9f9eda485ae7a00b941da08a30359675d6e4c10231a39_prof);

        
        $__internal_b043fb5101046f158498123f6cff5c3173047bb20ceae7a6b156c9f8fe1d6015->leave($__internal_b043fb5101046f158498123f6cff5c3173047bb20ceae7a6b156c9f8fe1d6015_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f02ef14e450a84678055b16f255e6672ba53100fae946f955ca0057aba866c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f02ef14e450a84678055b16f255e6672ba53100fae946f955ca0057aba866c0->enter($__internal_9f02ef14e450a84678055b16f255e6672ba53100fae946f955ca0057aba866c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_990f521c77d08209e245e7190ef181547924adc55ae1dcfed0642286c011445f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990f521c77d08209e245e7190ef181547924adc55ae1dcfed0642286c011445f->enter($__internal_990f521c77d08209e245e7190ef181547924adc55ae1dcfed0642286c011445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_990f521c77d08209e245e7190ef181547924adc55ae1dcfed0642286c011445f->leave($__internal_990f521c77d08209e245e7190ef181547924adc55ae1dcfed0642286c011445f_prof);

        
        $__internal_9f02ef14e450a84678055b16f255e6672ba53100fae946f955ca0057aba866c0->leave($__internal_9f02ef14e450a84678055b16f255e6672ba53100fae946f955ca0057aba866c0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/opt/lampp/htdocs/symfony/app/Resources/views/base.html.twig");
    }
}
