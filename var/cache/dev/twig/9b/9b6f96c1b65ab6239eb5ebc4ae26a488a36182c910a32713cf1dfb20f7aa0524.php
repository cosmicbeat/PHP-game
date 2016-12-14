<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b033887013850a7411fa3f0e6da35e97ec6ac891be91a18e2f38ef3664850a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_292504d9b2c2c3de189d34803e4edaffde6aa9168865e1b2ddf50e06533f4770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292504d9b2c2c3de189d34803e4edaffde6aa9168865e1b2ddf50e06533f4770->enter($__internal_292504d9b2c2c3de189d34803e4edaffde6aa9168865e1b2ddf50e06533f4770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292504d9b2c2c3de189d34803e4edaffde6aa9168865e1b2ddf50e06533f4770->leave($__internal_292504d9b2c2c3de189d34803e4edaffde6aa9168865e1b2ddf50e06533f4770_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_191e9a2cccba02ac2d6c5624bd98bc3b3a6206520adf54696f2374152b764a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191e9a2cccba02ac2d6c5624bd98bc3b3a6206520adf54696f2374152b764a4a->enter($__internal_191e9a2cccba02ac2d6c5624bd98bc3b3a6206520adf54696f2374152b764a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_191e9a2cccba02ac2d6c5624bd98bc3b3a6206520adf54696f2374152b764a4a->leave($__internal_191e9a2cccba02ac2d6c5624bd98bc3b3a6206520adf54696f2374152b764a4a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd5249a2472bc4bfb0ee59e43e07feb4db2f79c2efd0966dd650381efcb27edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5249a2472bc4bfb0ee59e43e07feb4db2f79c2efd0966dd650381efcb27edc->enter($__internal_bd5249a2472bc4bfb0ee59e43e07feb4db2f79c2efd0966dd650381efcb27edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bd5249a2472bc4bfb0ee59e43e07feb4db2f79c2efd0966dd650381efcb27edc->leave($__internal_bd5249a2472bc4bfb0ee59e43e07feb4db2f79c2efd0966dd650381efcb27edc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33212d54e624e04c47d089be57c6fa06a498613a12d9d5fcef9dc0714637615b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33212d54e624e04c47d089be57c6fa06a498613a12d9d5fcef9dc0714637615b->enter($__internal_33212d54e624e04c47d089be57c6fa06a498613a12d9d5fcef9dc0714637615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_33212d54e624e04c47d089be57c6fa06a498613a12d9d5fcef9dc0714637615b->leave($__internal_33212d54e624e04c47d089be57c6fa06a498613a12d9d5fcef9dc0714637615b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
