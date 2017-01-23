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
        $__internal_a0bef38bff04f4f667cab8b6a32c3918f4036712b31d2da38a2c32755d5806b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bef38bff04f4f667cab8b6a32c3918f4036712b31d2da38a2c32755d5806b8->enter($__internal_a0bef38bff04f4f667cab8b6a32c3918f4036712b31d2da38a2c32755d5806b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2d9a4d006a54021274316a23b22c761137aa394bbd9338569a0d5d20358c6a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9a4d006a54021274316a23b22c761137aa394bbd9338569a0d5d20358c6a6f->enter($__internal_2d9a4d006a54021274316a23b22c761137aa394bbd9338569a0d5d20358c6a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a0bef38bff04f4f667cab8b6a32c3918f4036712b31d2da38a2c32755d5806b8->leave($__internal_a0bef38bff04f4f667cab8b6a32c3918f4036712b31d2da38a2c32755d5806b8_prof);

        
        $__internal_2d9a4d006a54021274316a23b22c761137aa394bbd9338569a0d5d20358c6a6f->leave($__internal_2d9a4d006a54021274316a23b22c761137aa394bbd9338569a0d5d20358c6a6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5bfa3da616d43daaff970bcb58912f74fdfb7157c76e3be1b21750e55e75537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bfa3da616d43daaff970bcb58912f74fdfb7157c76e3be1b21750e55e75537->enter($__internal_b5bfa3da616d43daaff970bcb58912f74fdfb7157c76e3be1b21750e55e75537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c0d004a83c475ab253d9ef360e45f6ccd457f1add53148b0639e90dced65c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0d004a83c475ab253d9ef360e45f6ccd457f1add53148b0639e90dced65c57->enter($__internal_0c0d004a83c475ab253d9ef360e45f6ccd457f1add53148b0639e90dced65c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c0d004a83c475ab253d9ef360e45f6ccd457f1add53148b0639e90dced65c57->leave($__internal_0c0d004a83c475ab253d9ef360e45f6ccd457f1add53148b0639e90dced65c57_prof);

        
        $__internal_b5bfa3da616d43daaff970bcb58912f74fdfb7157c76e3be1b21750e55e75537->leave($__internal_b5bfa3da616d43daaff970bcb58912f74fdfb7157c76e3be1b21750e55e75537_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22f5f2482f138892c3026bae002a94f620024967fdbbe1c25964a38e585e3d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f5f2482f138892c3026bae002a94f620024967fdbbe1c25964a38e585e3d03->enter($__internal_22f5f2482f138892c3026bae002a94f620024967fdbbe1c25964a38e585e3d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a063078cbff3d7998227729ac35130fff037ab5e878964584bcce3077995612d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a063078cbff3d7998227729ac35130fff037ab5e878964584bcce3077995612d->enter($__internal_a063078cbff3d7998227729ac35130fff037ab5e878964584bcce3077995612d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a063078cbff3d7998227729ac35130fff037ab5e878964584bcce3077995612d->leave($__internal_a063078cbff3d7998227729ac35130fff037ab5e878964584bcce3077995612d_prof);

        
        $__internal_22f5f2482f138892c3026bae002a94f620024967fdbbe1c25964a38e585e3d03->leave($__internal_22f5f2482f138892c3026bae002a94f620024967fdbbe1c25964a38e585e3d03_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bc6051aeec34891669da470787b5fce9dfe2eea84dd7e4209fa4d4075759255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc6051aeec34891669da470787b5fce9dfe2eea84dd7e4209fa4d4075759255->enter($__internal_5bc6051aeec34891669da470787b5fce9dfe2eea84dd7e4209fa4d4075759255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f5a5a42afd9f7fa50048239d5ba21f79ba226c4f91ce8e664861b16d37d88ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5a5a42afd9f7fa50048239d5ba21f79ba226c4f91ce8e664861b16d37d88ee->enter($__internal_1f5a5a42afd9f7fa50048239d5ba21f79ba226c4f91ce8e664861b16d37d88ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f5a5a42afd9f7fa50048239d5ba21f79ba226c4f91ce8e664861b16d37d88ee->leave($__internal_1f5a5a42afd9f7fa50048239d5ba21f79ba226c4f91ce8e664861b16d37d88ee_prof);

        
        $__internal_5bc6051aeec34891669da470787b5fce9dfe2eea84dd7e4209fa4d4075759255->leave($__internal_5bc6051aeec34891669da470787b5fce9dfe2eea84dd7e4209fa4d4075759255_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_748c6811ce0a32aef59771c7ac90df3feafc0de19d9bca66b27c1ed7f2aff073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748c6811ce0a32aef59771c7ac90df3feafc0de19d9bca66b27c1ed7f2aff073->enter($__internal_748c6811ce0a32aef59771c7ac90df3feafc0de19d9bca66b27c1ed7f2aff073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_05755dd24676477b55fcc50f4ceb8fed13a923a7a193e849f47544d0c852be50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05755dd24676477b55fcc50f4ceb8fed13a923a7a193e849f47544d0c852be50->enter($__internal_05755dd24676477b55fcc50f4ceb8fed13a923a7a193e849f47544d0c852be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_05755dd24676477b55fcc50f4ceb8fed13a923a7a193e849f47544d0c852be50->leave($__internal_05755dd24676477b55fcc50f4ceb8fed13a923a7a193e849f47544d0c852be50_prof);

        
        $__internal_748c6811ce0a32aef59771c7ac90df3feafc0de19d9bca66b27c1ed7f2aff073->leave($__internal_748c6811ce0a32aef59771c7ac90df3feafc0de19d9bca66b27c1ed7f2aff073_prof);

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
