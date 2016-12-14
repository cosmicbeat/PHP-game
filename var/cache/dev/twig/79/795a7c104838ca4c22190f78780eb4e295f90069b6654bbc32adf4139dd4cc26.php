<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b286b6bc065857ce2859aa34acb10a92def66c4df113335a91502734843a1f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_2118cde18e4a5d6cd5b130570faa1f6646b2fe2b7a458519d94a40282a984af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2118cde18e4a5d6cd5b130570faa1f6646b2fe2b7a458519d94a40282a984af5->enter($__internal_2118cde18e4a5d6cd5b130570faa1f6646b2fe2b7a458519d94a40282a984af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2118cde18e4a5d6cd5b130570faa1f6646b2fe2b7a458519d94a40282a984af5->leave($__internal_2118cde18e4a5d6cd5b130570faa1f6646b2fe2b7a458519d94a40282a984af5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_facdbe9d95e23861525a8fdb446db8e7e2334d87bc3cee243faa685f4711b4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facdbe9d95e23861525a8fdb446db8e7e2334d87bc3cee243faa685f4711b4a3->enter($__internal_facdbe9d95e23861525a8fdb446db8e7e2334d87bc3cee243faa685f4711b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_facdbe9d95e23861525a8fdb446db8e7e2334d87bc3cee243faa685f4711b4a3->leave($__internal_facdbe9d95e23861525a8fdb446db8e7e2334d87bc3cee243faa685f4711b4a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff5aab37f57ef0b89254c1cf6d94b6fe33d65718d3bce83d39dd84987b7a4f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5aab37f57ef0b89254c1cf6d94b6fe33d65718d3bce83d39dd84987b7a4f7c->enter($__internal_ff5aab37f57ef0b89254c1cf6d94b6fe33d65718d3bce83d39dd84987b7a4f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ff5aab37f57ef0b89254c1cf6d94b6fe33d65718d3bce83d39dd84987b7a4f7c->leave($__internal_ff5aab37f57ef0b89254c1cf6d94b6fe33d65718d3bce83d39dd84987b7a4f7c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48fdadbc31084311d58540ceabe972df06a052d7b6c58768aa758db8b23ad896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fdadbc31084311d58540ceabe972df06a052d7b6c58768aa758db8b23ad896->enter($__internal_48fdadbc31084311d58540ceabe972df06a052d7b6c58768aa758db8b23ad896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_48fdadbc31084311d58540ceabe972df06a052d7b6c58768aa758db8b23ad896->leave($__internal_48fdadbc31084311d58540ceabe972df06a052d7b6c58768aa758db8b23ad896_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
