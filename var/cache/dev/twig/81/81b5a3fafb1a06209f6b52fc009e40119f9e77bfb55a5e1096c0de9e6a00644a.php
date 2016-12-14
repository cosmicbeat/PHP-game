<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a7bc73d9055936fd35703b3c851334fbafbb1e8841fa55631231fb365e795f16 extends Twig_Template
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
        $__internal_2f2ca7f397d78b4810199bd5719a137ef97320a7fb8b490eb321fb345c995d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ca7f397d78b4810199bd5719a137ef97320a7fb8b490eb321fb345c995d41->enter($__internal_2f2ca7f397d78b4810199bd5719a137ef97320a7fb8b490eb321fb345c995d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f2ca7f397d78b4810199bd5719a137ef97320a7fb8b490eb321fb345c995d41->leave($__internal_2f2ca7f397d78b4810199bd5719a137ef97320a7fb8b490eb321fb345c995d41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
