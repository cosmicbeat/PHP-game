<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_06257b633cc86ded6c054c4f67567ddaff37b705ab56fad475a599dfe1df6ce8 extends Twig_Template
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
        $__internal_869a76106d5701d7bea9502c9127e82e783108dc9bc7f63aa07d24a7a948516b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869a76106d5701d7bea9502c9127e82e783108dc9bc7f63aa07d24a7a948516b->enter($__internal_869a76106d5701d7bea9502c9127e82e783108dc9bc7f63aa07d24a7a948516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_869a76106d5701d7bea9502c9127e82e783108dc9bc7f63aa07d24a7a948516b->leave($__internal_869a76106d5701d7bea9502c9127e82e783108dc9bc7f63aa07d24a7a948516b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
