<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c69061402c3473d1b95992cd2a7d0597af2e719e9f067d40029666a5566b5199 extends Twig_Template
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
        $__internal_04663e2bc72868c1b7ddd3f4b6b2d5fc3678bc0a06e967760e247f89ad59b947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04663e2bc72868c1b7ddd3f4b6b2d5fc3678bc0a06e967760e247f89ad59b947->enter($__internal_04663e2bc72868c1b7ddd3f4b6b2d5fc3678bc0a06e967760e247f89ad59b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_04663e2bc72868c1b7ddd3f4b6b2d5fc3678bc0a06e967760e247f89ad59b947->leave($__internal_04663e2bc72868c1b7ddd3f4b6b2d5fc3678bc0a06e967760e247f89ad59b947_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
