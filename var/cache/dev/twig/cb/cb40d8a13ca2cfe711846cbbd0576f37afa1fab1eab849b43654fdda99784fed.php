<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_72fbd46dbf40f9d90c8f78e093ac81cf0233c922a6749264cac9edd5b4804543 extends Twig_Template
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
        $__internal_447850abfafdfe8c68caf8801cbc0e77066165867e4edd14c123ff6acc5f6e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447850abfafdfe8c68caf8801cbc0e77066165867e4edd14c123ff6acc5f6e4d->enter($__internal_447850abfafdfe8c68caf8801cbc0e77066165867e4edd14c123ff6acc5f6e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_447850abfafdfe8c68caf8801cbc0e77066165867e4edd14c123ff6acc5f6e4d->leave($__internal_447850abfafdfe8c68caf8801cbc0e77066165867e4edd14c123ff6acc5f6e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
