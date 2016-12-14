<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6451a1cb9942b547e6203e4fc07a4add7f9ad7bb3bc80accccada67993ed2c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff3174d15d0adde802e605a678b3e27f85e931f042b5d7f118b80e5ac7e3e8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3174d15d0adde802e605a678b3e27f85e931f042b5d7f118b80e5ac7e3e8f4->enter($__internal_ff3174d15d0adde802e605a678b3e27f85e931f042b5d7f118b80e5ac7e3e8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ff3174d15d0adde802e605a678b3e27f85e931f042b5d7f118b80e5ac7e3e8f4->leave($__internal_ff3174d15d0adde802e605a678b3e27f85e931f042b5d7f118b80e5ac7e3e8f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d94e5864e60f059a7bccda1b214f5f427845eec5124215d729b68136cbf15ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d94e5864e60f059a7bccda1b214f5f427845eec5124215d729b68136cbf15ef->enter($__internal_1d94e5864e60f059a7bccda1b214f5f427845eec5124215d729b68136cbf15ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1d94e5864e60f059a7bccda1b214f5f427845eec5124215d729b68136cbf15ef->leave($__internal_1d94e5864e60f059a7bccda1b214f5f427845eec5124215d729b68136cbf15ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
