<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ff4828e69cb2de153e070c3a7e328af6d8cb0b6a641e68697b0f5c49379e91d3 extends Twig_Template
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
        $__internal_fa446221b5edb40774dc9aeb47c2402b2dd1ba171dc8657228518e0ea806e50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa446221b5edb40774dc9aeb47c2402b2dd1ba171dc8657228518e0ea806e50b->enter($__internal_fa446221b5edb40774dc9aeb47c2402b2dd1ba171dc8657228518e0ea806e50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fa446221b5edb40774dc9aeb47c2402b2dd1ba171dc8657228518e0ea806e50b->leave($__internal_fa446221b5edb40774dc9aeb47c2402b2dd1ba171dc8657228518e0ea806e50b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
