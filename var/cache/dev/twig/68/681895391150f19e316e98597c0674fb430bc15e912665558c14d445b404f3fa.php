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
        $__internal_4292d4c1730a3dfc338d755be0ae18327c4e2f16a0b340d620727ab632da46d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4292d4c1730a3dfc338d755be0ae18327c4e2f16a0b340d620727ab632da46d7->enter($__internal_4292d4c1730a3dfc338d755be0ae18327c4e2f16a0b340d620727ab632da46d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_70c01465a52ca33f301f361ef08a80c3f5208aad6dc4144cf7ad34b4096099ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c01465a52ca33f301f361ef08a80c3f5208aad6dc4144cf7ad34b4096099ab->enter($__internal_70c01465a52ca33f301f361ef08a80c3f5208aad6dc4144cf7ad34b4096099ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4292d4c1730a3dfc338d755be0ae18327c4e2f16a0b340d620727ab632da46d7->leave($__internal_4292d4c1730a3dfc338d755be0ae18327c4e2f16a0b340d620727ab632da46d7_prof);

        
        $__internal_70c01465a52ca33f301f361ef08a80c3f5208aad6dc4144cf7ad34b4096099ab->leave($__internal_70c01465a52ca33f301f361ef08a80c3f5208aad6dc4144cf7ad34b4096099ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_217bc400c5e1d0049bf63fbe1546a7feca8263a167201b79f5697aa5ee2d9941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217bc400c5e1d0049bf63fbe1546a7feca8263a167201b79f5697aa5ee2d9941->enter($__internal_217bc400c5e1d0049bf63fbe1546a7feca8263a167201b79f5697aa5ee2d9941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91a05d7b4ac4196b2fe4aca93838f000c02872f62c8c303cf979c8357d0e2f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a05d7b4ac4196b2fe4aca93838f000c02872f62c8c303cf979c8357d0e2f28->enter($__internal_91a05d7b4ac4196b2fe4aca93838f000c02872f62c8c303cf979c8357d0e2f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91a05d7b4ac4196b2fe4aca93838f000c02872f62c8c303cf979c8357d0e2f28->leave($__internal_91a05d7b4ac4196b2fe4aca93838f000c02872f62c8c303cf979c8357d0e2f28_prof);

        
        $__internal_217bc400c5e1d0049bf63fbe1546a7feca8263a167201b79f5697aa5ee2d9941->leave($__internal_217bc400c5e1d0049bf63fbe1546a7feca8263a167201b79f5697aa5ee2d9941_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fe5f85975e9cde23a1f8f0e21792cdbf586baa53cfceac3a8d15db803c8d3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe5f85975e9cde23a1f8f0e21792cdbf586baa53cfceac3a8d15db803c8d3ba->enter($__internal_5fe5f85975e9cde23a1f8f0e21792cdbf586baa53cfceac3a8d15db803c8d3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7db9f130c1d901935de2947267ee31cb2f52d99b3c41c66981bebfa31a2b818f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db9f130c1d901935de2947267ee31cb2f52d99b3c41c66981bebfa31a2b818f->enter($__internal_7db9f130c1d901935de2947267ee31cb2f52d99b3c41c66981bebfa31a2b818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7db9f130c1d901935de2947267ee31cb2f52d99b3c41c66981bebfa31a2b818f->leave($__internal_7db9f130c1d901935de2947267ee31cb2f52d99b3c41c66981bebfa31a2b818f_prof);

        
        $__internal_5fe5f85975e9cde23a1f8f0e21792cdbf586baa53cfceac3a8d15db803c8d3ba->leave($__internal_5fe5f85975e9cde23a1f8f0e21792cdbf586baa53cfceac3a8d15db803c8d3ba_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_130a9938e99716bde92e811d0a153c2a108e187503786b3273a2e85e01b79543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130a9938e99716bde92e811d0a153c2a108e187503786b3273a2e85e01b79543->enter($__internal_130a9938e99716bde92e811d0a153c2a108e187503786b3273a2e85e01b79543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58c51268bd9f93ad8e09a51340a8f9e42589b7b9593fbd4c125ff6db76a48796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c51268bd9f93ad8e09a51340a8f9e42589b7b9593fbd4c125ff6db76a48796->enter($__internal_58c51268bd9f93ad8e09a51340a8f9e42589b7b9593fbd4c125ff6db76a48796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_58c51268bd9f93ad8e09a51340a8f9e42589b7b9593fbd4c125ff6db76a48796->leave($__internal_58c51268bd9f93ad8e09a51340a8f9e42589b7b9593fbd4c125ff6db76a48796_prof);

        
        $__internal_130a9938e99716bde92e811d0a153c2a108e187503786b3273a2e85e01b79543->leave($__internal_130a9938e99716bde92e811d0a153c2a108e187503786b3273a2e85e01b79543_prof);

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
