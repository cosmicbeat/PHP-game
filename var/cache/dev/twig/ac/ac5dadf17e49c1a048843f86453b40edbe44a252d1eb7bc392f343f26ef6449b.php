<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_649d310064fcec8b7cdc44068947e4bdd9c8c3c06cfa4ecab69a700751a736ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a8891527e200ef7715feed47d32bbad16d5f4cc8363707a42476a0e1935c15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8891527e200ef7715feed47d32bbad16d5f4cc8363707a42476a0e1935c15c->enter($__internal_3a8891527e200ef7715feed47d32bbad16d5f4cc8363707a42476a0e1935c15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8891527e200ef7715feed47d32bbad16d5f4cc8363707a42476a0e1935c15c->leave($__internal_3a8891527e200ef7715feed47d32bbad16d5f4cc8363707a42476a0e1935c15c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccd3c91b05a51c94af40fcd6435f0d3eeeef6f11ae4accdbdf2c4c144b89dddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd3c91b05a51c94af40fcd6435f0d3eeeef6f11ae4accdbdf2c4c144b89dddd->enter($__internal_ccd3c91b05a51c94af40fcd6435f0d3eeeef6f11ae4accdbdf2c4c144b89dddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ccd3c91b05a51c94af40fcd6435f0d3eeeef6f11ae4accdbdf2c4c144b89dddd->leave($__internal_ccd3c91b05a51c94af40fcd6435f0d3eeeef6f11ae4accdbdf2c4c144b89dddd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3566d660f5d312edfd534059d4aae40c2276da665b5aeeb7af98ede478b033b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3566d660f5d312edfd534059d4aae40c2276da665b5aeeb7af98ede478b033b5->enter($__internal_3566d660f5d312edfd534059d4aae40c2276da665b5aeeb7af98ede478b033b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3566d660f5d312edfd534059d4aae40c2276da665b5aeeb7af98ede478b033b5->leave($__internal_3566d660f5d312edfd534059d4aae40c2276da665b5aeeb7af98ede478b033b5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
