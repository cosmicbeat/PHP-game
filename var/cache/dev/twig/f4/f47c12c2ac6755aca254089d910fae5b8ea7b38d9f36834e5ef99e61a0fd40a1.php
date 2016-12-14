<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_140c458d5cce302ab5f1e4f970e39bc07a8ca9ac340ee8c829d2276794d2b755 extends Twig_Template
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
        $__internal_afa7483db62f9d34139c63ba66dac12f6f120bdd4957c077e0d945b8bc6e80d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa7483db62f9d34139c63ba66dac12f6f120bdd4957c077e0d945b8bc6e80d0->enter($__internal_afa7483db62f9d34139c63ba66dac12f6f120bdd4957c077e0d945b8bc6e80d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_afa7483db62f9d34139c63ba66dac12f6f120bdd4957c077e0d945b8bc6e80d0->leave($__internal_afa7483db62f9d34139c63ba66dac12f6f120bdd4957c077e0d945b8bc6e80d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
