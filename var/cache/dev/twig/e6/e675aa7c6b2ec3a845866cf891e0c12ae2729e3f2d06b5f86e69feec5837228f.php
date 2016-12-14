<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_97c0c0661c56e06095ce3f3b66c112cab904149ca134c4c35d52c153036a1b6d extends Twig_Template
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
        $__internal_bde4ac645f011ae6ff0b294052f25cdbb13e6d074930305e869b00e07593a3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde4ac645f011ae6ff0b294052f25cdbb13e6d074930305e869b00e07593a3b0->enter($__internal_bde4ac645f011ae6ff0b294052f25cdbb13e6d074930305e869b00e07593a3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bde4ac645f011ae6ff0b294052f25cdbb13e6d074930305e869b00e07593a3b0->leave($__internal_bde4ac645f011ae6ff0b294052f25cdbb13e6d074930305e869b00e07593a3b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
