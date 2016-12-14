<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_048f49ff5c0ed7f807f2604f0172cbefc91fd895c3f9fe22585be64cec926ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a26344f64669ac6dba4f1b47745bf5a44275aa07aca15f654e9c49ae0b8e083d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26344f64669ac6dba4f1b47745bf5a44275aa07aca15f654e9c49ae0b8e083d->enter($__internal_a26344f64669ac6dba4f1b47745bf5a44275aa07aca15f654e9c49ae0b8e083d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26344f64669ac6dba4f1b47745bf5a44275aa07aca15f654e9c49ae0b8e083d->leave($__internal_a26344f64669ac6dba4f1b47745bf5a44275aa07aca15f654e9c49ae0b8e083d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf4d80e71a08533b214530b7e5acaa106c71dd9ab162cebb2d8ede9351b45731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4d80e71a08533b214530b7e5acaa106c71dd9ab162cebb2d8ede9351b45731->enter($__internal_cf4d80e71a08533b214530b7e5acaa106c71dd9ab162cebb2d8ede9351b45731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cf4d80e71a08533b214530b7e5acaa106c71dd9ab162cebb2d8ede9351b45731->leave($__internal_cf4d80e71a08533b214530b7e5acaa106c71dd9ab162cebb2d8ede9351b45731_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7586719ee5c005cb1f4bb2a43be446cabb8841832941887bc610794a8b32ca3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7586719ee5c005cb1f4bb2a43be446cabb8841832941887bc610794a8b32ca3a->enter($__internal_7586719ee5c005cb1f4bb2a43be446cabb8841832941887bc610794a8b32ca3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7586719ee5c005cb1f4bb2a43be446cabb8841832941887bc610794a8b32ca3a->leave($__internal_7586719ee5c005cb1f4bb2a43be446cabb8841832941887bc610794a8b32ca3a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
