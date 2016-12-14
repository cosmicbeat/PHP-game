<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0a50392298036dd659cba752c19b55edb9dc04c02a9b6f65ba5c301a1c19be56 extends Twig_Template
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
        $__internal_ddd9cfdbe553789b5f18d5735f0019c07d5e9752c3312f2efa5551722a2bc288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd9cfdbe553789b5f18d5735f0019c07d5e9752c3312f2efa5551722a2bc288->enter($__internal_ddd9cfdbe553789b5f18d5735f0019c07d5e9752c3312f2efa5551722a2bc288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ddd9cfdbe553789b5f18d5735f0019c07d5e9752c3312f2efa5551722a2bc288->leave($__internal_ddd9cfdbe553789b5f18d5735f0019c07d5e9752c3312f2efa5551722a2bc288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
