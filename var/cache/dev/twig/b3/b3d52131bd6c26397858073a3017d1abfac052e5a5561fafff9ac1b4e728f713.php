<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_fb8c3844eed9b238384b383188cb324089f893ca74b6395869e77f855c4fc01d extends Twig_Template
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
        $__internal_1c874ea582e05a638af5834176e705373503a198743656c7279028b591c1b435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c874ea582e05a638af5834176e705373503a198743656c7279028b591c1b435->enter($__internal_1c874ea582e05a638af5834176e705373503a198743656c7279028b591c1b435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1c874ea582e05a638af5834176e705373503a198743656c7279028b591c1b435->leave($__internal_1c874ea582e05a638af5834176e705373503a198743656c7279028b591c1b435_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
