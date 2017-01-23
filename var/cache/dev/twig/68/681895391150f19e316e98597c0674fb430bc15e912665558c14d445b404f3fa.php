<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aab7d9bd148e442a431a693ebc39a4b291dc67480708d54ae9b32efad15ff8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab7d9bd148e442a431a693ebc39a4b291dc67480708d54ae9b32efad15ff8ca->enter($__internal_aab7d9bd148e442a431a693ebc39a4b291dc67480708d54ae9b32efad15ff8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c5836cbac7ded3ae19c66f0d6450af4c686003bf3869fd3b46852008f2b0f7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5836cbac7ded3ae19c66f0d6450af4c686003bf3869fd3b46852008f2b0f7d0->enter($__internal_c5836cbac7ded3ae19c66f0d6450af4c686003bf3869fd3b46852008f2b0f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aab7d9bd148e442a431a693ebc39a4b291dc67480708d54ae9b32efad15ff8ca->leave($__internal_aab7d9bd148e442a431a693ebc39a4b291dc67480708d54ae9b32efad15ff8ca_prof);

        
        $__internal_c5836cbac7ded3ae19c66f0d6450af4c686003bf3869fd3b46852008f2b0f7d0->leave($__internal_c5836cbac7ded3ae19c66f0d6450af4c686003bf3869fd3b46852008f2b0f7d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edeb231c7c9c70c6148f1c33087f85d7082779f78e58f35a79cffceef8bc3801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edeb231c7c9c70c6148f1c33087f85d7082779f78e58f35a79cffceef8bc3801->enter($__internal_edeb231c7c9c70c6148f1c33087f85d7082779f78e58f35a79cffceef8bc3801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3ca77f1036281afe7a1dbd1a34d84f91fcfa83c281739cbbb1f56e06ed47d948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca77f1036281afe7a1dbd1a34d84f91fcfa83c281739cbbb1f56e06ed47d948->enter($__internal_3ca77f1036281afe7a1dbd1a34d84f91fcfa83c281739cbbb1f56e06ed47d948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3ca77f1036281afe7a1dbd1a34d84f91fcfa83c281739cbbb1f56e06ed47d948->leave($__internal_3ca77f1036281afe7a1dbd1a34d84f91fcfa83c281739cbbb1f56e06ed47d948_prof);

        
        $__internal_edeb231c7c9c70c6148f1c33087f85d7082779f78e58f35a79cffceef8bc3801->leave($__internal_edeb231c7c9c70c6148f1c33087f85d7082779f78e58f35a79cffceef8bc3801_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_71cde574170f354bc0d173c5927f9a1296c98f5428ec9bf475d098b91156faa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cde574170f354bc0d173c5927f9a1296c98f5428ec9bf475d098b91156faa7->enter($__internal_71cde574170f354bc0d173c5927f9a1296c98f5428ec9bf475d098b91156faa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4d5f6454d520a71aa9f121c62599940941c4dc6ede7d8be1ec6c36284a8c961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d5f6454d520a71aa9f121c62599940941c4dc6ede7d8be1ec6c36284a8c961->enter($__internal_a4d5f6454d520a71aa9f121c62599940941c4dc6ede7d8be1ec6c36284a8c961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4d5f6454d520a71aa9f121c62599940941c4dc6ede7d8be1ec6c36284a8c961->leave($__internal_a4d5f6454d520a71aa9f121c62599940941c4dc6ede7d8be1ec6c36284a8c961_prof);

        
        $__internal_71cde574170f354bc0d173c5927f9a1296c98f5428ec9bf475d098b91156faa7->leave($__internal_71cde574170f354bc0d173c5927f9a1296c98f5428ec9bf475d098b91156faa7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25343c3b79bf01d39adb309edffd18fc6875d5b9466d22e9878142543ce461f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25343c3b79bf01d39adb309edffd18fc6875d5b9466d22e9878142543ce461f0->enter($__internal_25343c3b79bf01d39adb309edffd18fc6875d5b9466d22e9878142543ce461f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3a0da5deebe46bbccef19e7859b6ef6892af43c1e72364a6569963b169377e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a0da5deebe46bbccef19e7859b6ef6892af43c1e72364a6569963b169377e7->enter($__internal_d3a0da5deebe46bbccef19e7859b6ef6892af43c1e72364a6569963b169377e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d3a0da5deebe46bbccef19e7859b6ef6892af43c1e72364a6569963b169377e7->leave($__internal_d3a0da5deebe46bbccef19e7859b6ef6892af43c1e72364a6569963b169377e7_prof);

        
        $__internal_25343c3b79bf01d39adb309edffd18fc6875d5b9466d22e9878142543ce461f0->leave($__internal_25343c3b79bf01d39adb309edffd18fc6875d5b9466d22e9878142543ce461f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
