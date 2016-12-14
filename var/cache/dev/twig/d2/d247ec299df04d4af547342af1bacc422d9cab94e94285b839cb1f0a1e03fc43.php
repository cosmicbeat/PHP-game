<?php

/* user/profile.html.twig */
class __TwigTemplate_1dd57ba4c663a47ccd9e2fbd2cfd640dad7b0b69c98499398deed290ac6ddd4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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
        $__internal_f857ea71c2401257dacdc3b43afcb731496400901ad4fdc9c54427785bd7f386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f857ea71c2401257dacdc3b43afcb731496400901ad4fdc9c54427785bd7f386->enter($__internal_f857ea71c2401257dacdc3b43afcb731496400901ad4fdc9c54427785bd7f386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f857ea71c2401257dacdc3b43afcb731496400901ad4fdc9c54427785bd7f386->leave($__internal_f857ea71c2401257dacdc3b43afcb731496400901ad4fdc9c54427785bd7f386_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_910bd482c166d7615cf8e599bea14b9e42fa0b96bb1078dc58a3a3ed6d83da8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910bd482c166d7615cf8e599bea14b9e42fa0b96bb1078dc58a3a3ed6d83da8e->enter($__internal_910bd482c166d7615cf8e599bea14b9e42fa0b96bb1078dc58a3a3ed6d83da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_910bd482c166d7615cf8e599bea14b9e42fa0b96bb1078dc58a3a3ed6d83da8e->leave($__internal_910bd482c166d7615cf8e599bea14b9e42fa0b96bb1078dc58a3a3ed6d83da8e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_f0caeefb17192eae9520de49585295d3bc4600f453d22585fa01fff79b6a26df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0caeefb17192eae9520de49585295d3bc4600f453d22585fa01fff79b6a26df->enter($__internal_f0caeefb17192eae9520de49585295d3bc4600f453d22585fa01fff79b6a26df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_f0caeefb17192eae9520de49585295d3bc4600f453d22585fa01fff79b6a26df->leave($__internal_f0caeefb17192eae9520de49585295d3bc4600f453d22585fa01fff79b6a26df_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
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
