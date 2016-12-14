<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7da831a8f7c2192c43d257719f37abaf5834feaacd4eb8986ce0ef54663d94d8 extends Twig_Template
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
        $__internal_7b1c283769d836a63f8498ffdc3a5d5dda4e8da00fb1c80875d7d2fba61def07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1c283769d836a63f8498ffdc3a5d5dda4e8da00fb1c80875d7d2fba61def07->enter($__internal_7b1c283769d836a63f8498ffdc3a5d5dda4e8da00fb1c80875d7d2fba61def07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7b1c283769d836a63f8498ffdc3a5d5dda4e8da00fb1c80875d7d2fba61def07->leave($__internal_7b1c283769d836a63f8498ffdc3a5d5dda4e8da00fb1c80875d7d2fba61def07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
