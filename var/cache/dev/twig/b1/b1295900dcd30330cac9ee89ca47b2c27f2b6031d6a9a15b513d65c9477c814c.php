<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_1ba4d80f828a0230f274c48895ed75dbdfd4da7d856c0a8a12343c7c48f6d78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0141b157f2ae186a5278e552c24af04535d1baa8c47d8c51598bd4daf62a0788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0141b157f2ae186a5278e552c24af04535d1baa8c47d8c51598bd4daf62a0788->enter($__internal_0141b157f2ae186a5278e552c24af04535d1baa8c47d8c51598bd4daf62a0788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0141b157f2ae186a5278e552c24af04535d1baa8c47d8c51598bd4daf62a0788->leave($__internal_0141b157f2ae186a5278e552c24af04535d1baa8c47d8c51598bd4daf62a0788_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
