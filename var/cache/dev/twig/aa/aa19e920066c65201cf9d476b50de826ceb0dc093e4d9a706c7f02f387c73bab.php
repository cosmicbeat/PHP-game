<?php

/* :blog:index.html.twig */
class __TwigTemplate_d5a0543b144d97b56b2858e1caa4c0cd1356bb8b643407467f82edf44bf63a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61aa206899edcffc49b1d41c1693e98dc971fc62f2194dcde4f5469c9c360b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61aa206899edcffc49b1d41c1693e98dc971fc62f2194dcde4f5469c9c360b06->enter($__internal_61aa206899edcffc49b1d41c1693e98dc971fc62f2194dcde4f5469c9c360b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61aa206899edcffc49b1d41c1693e98dc971fc62f2194dcde4f5469c9c360b06->leave($__internal_61aa206899edcffc49b1d41c1693e98dc971fc62f2194dcde4f5469c9c360b06_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9ee7d07f6ca07386c180e3d666e0b6c4cf25c5cab2c3bd1f3c4fd8c3581e50b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee7d07f6ca07386c180e3d666e0b6c4cf25c5cab2c3bd1f3c4fd8c3581e50b7->enter($__internal_9ee7d07f6ca07386c180e3d666e0b6c4cf25c5cab2c3bd1f3c4fd8c3581e50b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_9ee7d07f6ca07386c180e3d666e0b6c4cf25c5cab2c3bd1f3c4fd8c3581e50b7->leave($__internal_9ee7d07f6ca07386c180e3d666e0b6c4cf25c5cab2c3bd1f3c4fd8c3581e50b7_prof);

    }

    public function getTemplateName()
    {
        return ":blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

{% endblock %}
";
    }
}
