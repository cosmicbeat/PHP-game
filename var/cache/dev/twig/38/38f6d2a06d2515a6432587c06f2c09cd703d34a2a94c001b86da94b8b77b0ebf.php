<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45aaa429736ef9d5a09f58b5b2a61090a2eedd164e67946f7fbf0af92dca378f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2f7295a84a47a068a48f232856fec69b67b89854b22798c34d56c325e274a5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7295a84a47a068a48f232856fec69b67b89854b22798c34d56c325e274a5c4->enter($__internal_2f7295a84a47a068a48f232856fec69b67b89854b22798c34d56c325e274a5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7295a84a47a068a48f232856fec69b67b89854b22798c34d56c325e274a5c4->leave($__internal_2f7295a84a47a068a48f232856fec69b67b89854b22798c34d56c325e274a5c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9f4dc4e6e1d6ffe72109a165bd16530c35d88f8e5831d361e74a1068e8ee0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f4dc4e6e1d6ffe72109a165bd16530c35d88f8e5831d361e74a1068e8ee0d7->enter($__internal_d9f4dc4e6e1d6ffe72109a165bd16530c35d88f8e5831d361e74a1068e8ee0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d9f4dc4e6e1d6ffe72109a165bd16530c35d88f8e5831d361e74a1068e8ee0d7->leave($__internal_d9f4dc4e6e1d6ffe72109a165bd16530c35d88f8e5831d361e74a1068e8ee0d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b36034ecbc5e2f4f238e98c8187c2fee2f1da00a51b754a641fc1af0379e6714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36034ecbc5e2f4f238e98c8187c2fee2f1da00a51b754a641fc1af0379e6714->enter($__internal_b36034ecbc5e2f4f238e98c8187c2fee2f1da00a51b754a641fc1af0379e6714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b36034ecbc5e2f4f238e98c8187c2fee2f1da00a51b754a641fc1af0379e6714->leave($__internal_b36034ecbc5e2f4f238e98c8187c2fee2f1da00a51b754a641fc1af0379e6714_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f889a29a7bd28b91bdacdffd27432159a286607537f4e0b264508890bd93d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f889a29a7bd28b91bdacdffd27432159a286607537f4e0b264508890bd93d1f->enter($__internal_7f889a29a7bd28b91bdacdffd27432159a286607537f4e0b264508890bd93d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7f889a29a7bd28b91bdacdffd27432159a286607537f4e0b264508890bd93d1f->leave($__internal_7f889a29a7bd28b91bdacdffd27432159a286607537f4e0b264508890bd93d1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
