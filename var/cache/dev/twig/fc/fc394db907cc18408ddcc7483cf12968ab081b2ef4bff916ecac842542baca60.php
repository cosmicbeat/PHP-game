<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8988a7ae1ca38bd2c41660714a02269605a6542217d3089eebb597417bb65c5c extends Twig_Template
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
        $__internal_21a449f63e9ac29581fcd5d83bbcbc3197a7648f9e514a5c91392b75f2219c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a449f63e9ac29581fcd5d83bbcbc3197a7648f9e514a5c91392b75f2219c6e->enter($__internal_21a449f63e9ac29581fcd5d83bbcbc3197a7648f9e514a5c91392b75f2219c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a449f63e9ac29581fcd5d83bbcbc3197a7648f9e514a5c91392b75f2219c6e->leave($__internal_21a449f63e9ac29581fcd5d83bbcbc3197a7648f9e514a5c91392b75f2219c6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2014d122cdecca081a6ce7ff3d43d139d3ca552ae297003672aef10f2762886c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2014d122cdecca081a6ce7ff3d43d139d3ca552ae297003672aef10f2762886c->enter($__internal_2014d122cdecca081a6ce7ff3d43d139d3ca552ae297003672aef10f2762886c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2014d122cdecca081a6ce7ff3d43d139d3ca552ae297003672aef10f2762886c->leave($__internal_2014d122cdecca081a6ce7ff3d43d139d3ca552ae297003672aef10f2762886c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8b4a9a5028bdccd427efa58c19258dccb20761ac440d97178653afb6bf4ac48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b4a9a5028bdccd427efa58c19258dccb20761ac440d97178653afb6bf4ac48->enter($__internal_f8b4a9a5028bdccd427efa58c19258dccb20761ac440d97178653afb6bf4ac48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8b4a9a5028bdccd427efa58c19258dccb20761ac440d97178653afb6bf4ac48->leave($__internal_f8b4a9a5028bdccd427efa58c19258dccb20761ac440d97178653afb6bf4ac48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_811f77f8217306baab77d3ca82474e18bb18e8255cf20adf73885950ef71eee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811f77f8217306baab77d3ca82474e18bb18e8255cf20adf73885950ef71eee8->enter($__internal_811f77f8217306baab77d3ca82474e18bb18e8255cf20adf73885950ef71eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_811f77f8217306baab77d3ca82474e18bb18e8255cf20adf73885950ef71eee8->leave($__internal_811f77f8217306baab77d3ca82474e18bb18e8255cf20adf73885950ef71eee8_prof);

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
