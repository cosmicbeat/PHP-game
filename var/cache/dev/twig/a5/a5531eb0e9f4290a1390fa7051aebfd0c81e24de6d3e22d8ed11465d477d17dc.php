<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_84abaeb99190171293fbc8c8fe90769b611fb5ba3f348c038f25b3e23543dfec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8196f11662b48dc3108006008e493e7542d475f07750e81030d3df5a56d5e140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8196f11662b48dc3108006008e493e7542d475f07750e81030d3df5a56d5e140->enter($__internal_8196f11662b48dc3108006008e493e7542d475f07750e81030d3df5a56d5e140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8196f11662b48dc3108006008e493e7542d475f07750e81030d3df5a56d5e140->leave($__internal_8196f11662b48dc3108006008e493e7542d475f07750e81030d3df5a56d5e140_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a725b73663aab4e86f0416c4fc3e0b5c24a8f14d44cfa081e98d6b53a67130ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a725b73663aab4e86f0416c4fc3e0b5c24a8f14d44cfa081e98d6b53a67130ca->enter($__internal_a725b73663aab4e86f0416c4fc3e0b5c24a8f14d44cfa081e98d6b53a67130ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a725b73663aab4e86f0416c4fc3e0b5c24a8f14d44cfa081e98d6b53a67130ca->leave($__internal_a725b73663aab4e86f0416c4fc3e0b5c24a8f14d44cfa081e98d6b53a67130ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e44c6ed5b309826c038438d84547ff99e67bbec15331415e8d7b4d86a9fef23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44c6ed5b309826c038438d84547ff99e67bbec15331415e8d7b4d86a9fef23e->enter($__internal_e44c6ed5b309826c038438d84547ff99e67bbec15331415e8d7b4d86a9fef23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e44c6ed5b309826c038438d84547ff99e67bbec15331415e8d7b4d86a9fef23e->leave($__internal_e44c6ed5b309826c038438d84547ff99e67bbec15331415e8d7b4d86a9fef23e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42e3a88b883fcb024d8b4e1360724d7addf1729e1814db501328a49cf7044455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e3a88b883fcb024d8b4e1360724d7addf1729e1814db501328a49cf7044455->enter($__internal_42e3a88b883fcb024d8b4e1360724d7addf1729e1814db501328a49cf7044455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42e3a88b883fcb024d8b4e1360724d7addf1729e1814db501328a49cf7044455->leave($__internal_42e3a88b883fcb024d8b4e1360724d7addf1729e1814db501328a49cf7044455_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
