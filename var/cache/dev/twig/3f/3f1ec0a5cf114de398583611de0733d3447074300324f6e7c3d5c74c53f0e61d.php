<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7c38fda90d58d41da469d4cf81961034511167dd87b0141cc9b02b44715f6441 extends Twig_Template
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
        $__internal_3c083d16d07b6d810431b1ab9dbb23a701c972104e1938d8a526e47f2c740e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c083d16d07b6d810431b1ab9dbb23a701c972104e1938d8a526e47f2c740e73->enter($__internal_3c083d16d07b6d810431b1ab9dbb23a701c972104e1938d8a526e47f2c740e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3c083d16d07b6d810431b1ab9dbb23a701c972104e1938d8a526e47f2c740e73->leave($__internal_3c083d16d07b6d810431b1ab9dbb23a701c972104e1938d8a526e47f2c740e73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
