<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7ac59eccb607c6d565c9dcddc50b528cd158b62e7a576acf3442fe6cf066c800 extends Twig_Template
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
        $__internal_5d684449810da2f89ff9ce37da3f131f3ba35b7a1770538c8b7484116e38d781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d684449810da2f89ff9ce37da3f131f3ba35b7a1770538c8b7484116e38d781->enter($__internal_5d684449810da2f89ff9ce37da3f131f3ba35b7a1770538c8b7484116e38d781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5d684449810da2f89ff9ce37da3f131f3ba35b7a1770538c8b7484116e38d781->leave($__internal_5d684449810da2f89ff9ce37da3f131f3ba35b7a1770538c8b7484116e38d781_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
