<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_38c45397383adaa2ed9d2201bdd3c9b8daed740bed25a0b13f4fad2057491b40 extends Twig_Template
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
        $__internal_2260c9db7e1a774d24ce7227be4d796fcb600e21e2cff48d95f151e7b3c71e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2260c9db7e1a774d24ce7227be4d796fcb600e21e2cff48d95f151e7b3c71e8c->enter($__internal_2260c9db7e1a774d24ce7227be4d796fcb600e21e2cff48d95f151e7b3c71e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2260c9db7e1a774d24ce7227be4d796fcb600e21e2cff48d95f151e7b3c71e8c->leave($__internal_2260c9db7e1a774d24ce7227be4d796fcb600e21e2cff48d95f151e7b3c71e8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
