<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9ab06c9f3d735b864e607d8f26a515baf94f3105c347fd2db9e6452ab8a7962c extends Twig_Template
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
        $__internal_9a512655f80a2c279d92a4aef5757d6891dd79f7f0ff7e3b6e2e1304ad175227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a512655f80a2c279d92a4aef5757d6891dd79f7f0ff7e3b6e2e1304ad175227->enter($__internal_9a512655f80a2c279d92a4aef5757d6891dd79f7f0ff7e3b6e2e1304ad175227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9a512655f80a2c279d92a4aef5757d6891dd79f7f0ff7e3b6e2e1304ad175227->leave($__internal_9a512655f80a2c279d92a4aef5757d6891dd79f7f0ff7e3b6e2e1304ad175227_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
