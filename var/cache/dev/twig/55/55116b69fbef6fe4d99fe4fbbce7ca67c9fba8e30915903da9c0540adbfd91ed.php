<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_21a29044d13935a4fc45000bac6653f332d1ed57aff5084088c85936af78ac23 extends Twig_Template
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
        $__internal_0f18b666d6ea19ac4569a8e5718dfaf8f65eb430a5543582345f976c51827e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f18b666d6ea19ac4569a8e5718dfaf8f65eb430a5543582345f976c51827e2f->enter($__internal_0f18b666d6ea19ac4569a8e5718dfaf8f65eb430a5543582345f976c51827e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0f18b666d6ea19ac4569a8e5718dfaf8f65eb430a5543582345f976c51827e2f->leave($__internal_0f18b666d6ea19ac4569a8e5718dfaf8f65eb430a5543582345f976c51827e2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
