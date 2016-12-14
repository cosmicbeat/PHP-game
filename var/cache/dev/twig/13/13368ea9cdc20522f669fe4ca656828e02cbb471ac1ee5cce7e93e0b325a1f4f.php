<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b41821e1309176ad5d0d101b52bf937881109b1ef3ed0ceb979cf699f05a24f6 extends Twig_Template
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
        $__internal_1c9629bfa975c7e788b662ad53da70ae0434da0f828c6a0535193203d1e3c0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9629bfa975c7e788b662ad53da70ae0434da0f828c6a0535193203d1e3c0e1->enter($__internal_1c9629bfa975c7e788b662ad53da70ae0434da0f828c6a0535193203d1e3c0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9629bfa975c7e788b662ad53da70ae0434da0f828c6a0535193203d1e3c0e1->leave($__internal_1c9629bfa975c7e788b662ad53da70ae0434da0f828c6a0535193203d1e3c0e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8864f57e5e8970640df7a3338ea13b160828e5fb3ac6022b62d01a131972e5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8864f57e5e8970640df7a3338ea13b160828e5fb3ac6022b62d01a131972e5e8->enter($__internal_8864f57e5e8970640df7a3338ea13b160828e5fb3ac6022b62d01a131972e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8864f57e5e8970640df7a3338ea13b160828e5fb3ac6022b62d01a131972e5e8->leave($__internal_8864f57e5e8970640df7a3338ea13b160828e5fb3ac6022b62d01a131972e5e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95ce54ad4f40922e0dd21f0535023cb82a875a6b6d904c0ffbadf85041aca0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ce54ad4f40922e0dd21f0535023cb82a875a6b6d904c0ffbadf85041aca0a0->enter($__internal_95ce54ad4f40922e0dd21f0535023cb82a875a6b6d904c0ffbadf85041aca0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95ce54ad4f40922e0dd21f0535023cb82a875a6b6d904c0ffbadf85041aca0a0->leave($__internal_95ce54ad4f40922e0dd21f0535023cb82a875a6b6d904c0ffbadf85041aca0a0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_402598c93f356acffd26eee59d1d1c5810592724d2b0ce34774471a1b7777621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402598c93f356acffd26eee59d1d1c5810592724d2b0ce34774471a1b7777621->enter($__internal_402598c93f356acffd26eee59d1d1c5810592724d2b0ce34774471a1b7777621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_402598c93f356acffd26eee59d1d1c5810592724d2b0ce34774471a1b7777621->leave($__internal_402598c93f356acffd26eee59d1d1c5810592724d2b0ce34774471a1b7777621_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
