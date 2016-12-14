<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4c42046c0ea5109fb3a572e0f7fbbadd68cc02b8e563433b12fd6dc92f13772b extends Twig_Template
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
        $__internal_cc90e8e67f5bf1d2d646e3d5976828a456277c35254f502036ad09cafe3b8c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc90e8e67f5bf1d2d646e3d5976828a456277c35254f502036ad09cafe3b8c85->enter($__internal_cc90e8e67f5bf1d2d646e3d5976828a456277c35254f502036ad09cafe3b8c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc90e8e67f5bf1d2d646e3d5976828a456277c35254f502036ad09cafe3b8c85->leave($__internal_cc90e8e67f5bf1d2d646e3d5976828a456277c35254f502036ad09cafe3b8c85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
