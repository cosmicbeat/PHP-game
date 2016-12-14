<?php

/* blog/index.html.twig */
class __TwigTemplate_c30ae3e5207de88b469c4ce99938896b6f208c4bff860e0690eb6c9aa28ee548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c28368214b5242162f835f6ef4b9c4b35c57faf2e2296f5d98842e2110ea665c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28368214b5242162f835f6ef4b9c4b35c57faf2e2296f5d98842e2110ea665c->enter($__internal_c28368214b5242162f835f6ef4b9c4b35c57faf2e2296f5d98842e2110ea665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c28368214b5242162f835f6ef4b9c4b35c57faf2e2296f5d98842e2110ea665c->leave($__internal_c28368214b5242162f835f6ef4b9c4b35c57faf2e2296f5d98842e2110ea665c_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6e9aade384ea54cbd2c4a8c3fb737faf32733bff5b431424ebf8b40b4d721208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9aade384ea54cbd2c4a8c3fb737faf32733bff5b431424ebf8b40b4d721208->enter($__internal_6e9aade384ea54cbd2c4a8c3fb737faf32733bff5b431424ebf8b40b4d721208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        
        $__internal_6e9aade384ea54cbd2c4a8c3fb737faf32733bff5b431424ebf8b40b4d721208->leave($__internal_6e9aade384ea54cbd2c4a8c3fb737faf32733bff5b431424ebf8b40b4d721208_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}

{% endblock %}
";
    }
}
