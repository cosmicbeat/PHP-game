<?php

/* :user:profile.html.twig */
class __TwigTemplate_38db33dc04c074a741afeb7534f6f6cc2482e7bd7c5bb2e8f63ea1b409c6a425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b74257614e957c71210af74720d633af8d5d3070319b4c058ac1469bbc482f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b74257614e957c71210af74720d633af8d5d3070319b4c058ac1469bbc482f2->enter($__internal_1b74257614e957c71210af74720d633af8d5d3070319b4c058ac1469bbc482f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b74257614e957c71210af74720d633af8d5d3070319b4c058ac1469bbc482f2->leave($__internal_1b74257614e957c71210af74720d633af8d5d3070319b4c058ac1469bbc482f2_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6ac0f8c1090dd5282505088d29dee146f2d6103c5b60d5f8cbe35fe0ac9f64e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac0f8c1090dd5282505088d29dee146f2d6103c5b60d5f8cbe35fe0ac9f64e1->enter($__internal_6ac0f8c1090dd5282505088d29dee146f2d6103c5b60d5f8cbe35fe0ac9f64e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_6ac0f8c1090dd5282505088d29dee146f2d6103c5b60d5f8cbe35fe0ac9f64e1->leave($__internal_6ac0f8c1090dd5282505088d29dee146f2d6103c5b60d5f8cbe35fe0ac9f64e1_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a5e5c83459b971be6874257b56af155c1e4b93fb5586ed47417f691df5570067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e5c83459b971be6874257b56af155c1e4b93fb5586ed47417f691df5570067->enter($__internal_a5e5c83459b971be6874257b56af155c1e4b93fb5586ed47417f691df5570067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_a5e5c83459b971be6874257b56af155c1e4b93fb5586ed47417f691df5570067->leave($__internal_a5e5c83459b971be6874257b56af155c1e4b93fb5586ed47417f691df5570067_prof);

    }

    public function getTemplateName()
    {
        return ":user:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
