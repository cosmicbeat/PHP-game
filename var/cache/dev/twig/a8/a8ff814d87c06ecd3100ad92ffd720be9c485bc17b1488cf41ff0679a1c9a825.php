<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_960686298b0ce4fa59fde34efd8563d09f2397aa45d3f31a455090cad771b1aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6b853e93935ed814e819e4abb4c2e83dd417950ee4921b018b8b6986055a7b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b853e93935ed814e819e4abb4c2e83dd417950ee4921b018b8b6986055a7b28->enter($__internal_6b853e93935ed814e819e4abb4c2e83dd417950ee4921b018b8b6986055a7b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b853e93935ed814e819e4abb4c2e83dd417950ee4921b018b8b6986055a7b28->leave($__internal_6b853e93935ed814e819e4abb4c2e83dd417950ee4921b018b8b6986055a7b28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7f09c29f84ec6037d0d9c82bc04a8b0d6a71810063873a72106a066172712a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f09c29f84ec6037d0d9c82bc04a8b0d6a71810063873a72106a066172712a0->enter($__internal_c7f09c29f84ec6037d0d9c82bc04a8b0d6a71810063873a72106a066172712a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7f09c29f84ec6037d0d9c82bc04a8b0d6a71810063873a72106a066172712a0->leave($__internal_c7f09c29f84ec6037d0d9c82bc04a8b0d6a71810063873a72106a066172712a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fecabfb7e68540e43d262495bb391b01963f48549fbb23f672a189a538a0d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fecabfb7e68540e43d262495bb391b01963f48549fbb23f672a189a538a0d93->enter($__internal_4fecabfb7e68540e43d262495bb391b01963f48549fbb23f672a189a538a0d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4fecabfb7e68540e43d262495bb391b01963f48549fbb23f672a189a538a0d93->leave($__internal_4fecabfb7e68540e43d262495bb391b01963f48549fbb23f672a189a538a0d93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff1974890c0aed79467cfa0446d918d3f942d4a45c2b947699c39d6c18cd6162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1974890c0aed79467cfa0446d918d3f942d4a45c2b947699c39d6c18cd6162->enter($__internal_ff1974890c0aed79467cfa0446d918d3f942d4a45c2b947699c39d6c18cd6162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff1974890c0aed79467cfa0446d918d3f942d4a45c2b947699c39d6c18cd6162->leave($__internal_ff1974890c0aed79467cfa0446d918d3f942d4a45c2b947699c39d6c18cd6162_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
