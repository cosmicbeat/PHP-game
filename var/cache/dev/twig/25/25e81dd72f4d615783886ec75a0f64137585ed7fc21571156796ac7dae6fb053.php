<?php

/* blog/index.html.twig */
class __TwigTemplate_a371641b17264d12cd4909d22a08d812e0ea9abb356760c60a64fb1da04d08db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_027d4d718f04b00c38ba9c91aa49f433f66aa21173c84d1f9c5fb370241729de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027d4d718f04b00c38ba9c91aa49f433f66aa21173c84d1f9c5fb370241729de->enter($__internal_027d4d718f04b00c38ba9c91aa49f433f66aa21173c84d1f9c5fb370241729de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027d4d718f04b00c38ba9c91aa49f433f66aa21173c84d1f9c5fb370241729de->leave($__internal_027d4d718f04b00c38ba9c91aa49f433f66aa21173c84d1f9c5fb370241729de_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4e2d71f1a1985c515547a04eb2435fe9f5da758998255ceff4dda36d987cd339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2d71f1a1985c515547a04eb2435fe9f5da758998255ceff4dda36d987cd339->enter($__internal_4e2d71f1a1985c515547a04eb2435fe9f5da758998255ceff4dda36d987cd339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_4e2d71f1a1985c515547a04eb2435fe9f5da758998255ceff4dda36d987cd339->leave($__internal_4e2d71f1a1985c515547a04eb2435fe9f5da758998255ceff4dda36d987cd339_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
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
