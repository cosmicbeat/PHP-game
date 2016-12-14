<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f9dec0f167c09caec06b71aef863e5f8a573a15259a34f86d5e7281b86dc18ac extends Twig_Template
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
        $__internal_085bc464448de4e071b8939a6fe17383169cb466759092e004cf603ef9f8e238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085bc464448de4e071b8939a6fe17383169cb466759092e004cf603ef9f8e238->enter($__internal_085bc464448de4e071b8939a6fe17383169cb466759092e004cf603ef9f8e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_085bc464448de4e071b8939a6fe17383169cb466759092e004cf603ef9f8e238->leave($__internal_085bc464448de4e071b8939a6fe17383169cb466759092e004cf603ef9f8e238_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4010834ccf817fdd67c41f7b7e9a80d757e0ee1a6286e2d734ff5d0bbf7d027b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4010834ccf817fdd67c41f7b7e9a80d757e0ee1a6286e2d734ff5d0bbf7d027b->enter($__internal_4010834ccf817fdd67c41f7b7e9a80d757e0ee1a6286e2d734ff5d0bbf7d027b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4010834ccf817fdd67c41f7b7e9a80d757e0ee1a6286e2d734ff5d0bbf7d027b->leave($__internal_4010834ccf817fdd67c41f7b7e9a80d757e0ee1a6286e2d734ff5d0bbf7d027b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
