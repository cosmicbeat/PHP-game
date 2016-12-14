<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_16181bf63684580e31c4f473fca7c27e02961c44bbe37799596babf8a2204978 extends Twig_Template
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
        $__internal_d67e7d68fec18d561af76bcb6525834975658c006ef97599878c262435dc0a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67e7d68fec18d561af76bcb6525834975658c006ef97599878c262435dc0a49->enter($__internal_d67e7d68fec18d561af76bcb6525834975658c006ef97599878c262435dc0a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d67e7d68fec18d561af76bcb6525834975658c006ef97599878c262435dc0a49->leave($__internal_d67e7d68fec18d561af76bcb6525834975658c006ef97599878c262435dc0a49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
