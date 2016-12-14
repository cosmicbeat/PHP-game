<?php

/* user/profile.html.twig */
class __TwigTemplate_34bde2b843738f12e4acae31a94d94366fa62fe74611c3215be35efec2b2dfce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b89b0abdd8ed2e2ec224df06ceb6e6f7a88a925d57fe7a6845e52a91feb7f6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89b0abdd8ed2e2ec224df06ceb6e6f7a88a925d57fe7a6845e52a91feb7f6a5->enter($__internal_b89b0abdd8ed2e2ec224df06ceb6e6f7a88a925d57fe7a6845e52a91feb7f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b89b0abdd8ed2e2ec224df06ceb6e6f7a88a925d57fe7a6845e52a91feb7f6a5->leave($__internal_b89b0abdd8ed2e2ec224df06ceb6e6f7a88a925d57fe7a6845e52a91feb7f6a5_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_baeecb7d3eade363abad537cb5a60b816630d4c8599226ad810d05406a4923be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baeecb7d3eade363abad537cb5a60b816630d4c8599226ad810d05406a4923be->enter($__internal_baeecb7d3eade363abad537cb5a60b816630d4c8599226ad810d05406a4923be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "profile";
        
        $__internal_baeecb7d3eade363abad537cb5a60b816630d4c8599226ad810d05406a4923be->leave($__internal_baeecb7d3eade363abad537cb5a60b816630d4c8599226ad810d05406a4923be_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_f68d1c73a14733f36a48091d2a747cf965df118e3296eb365baabec469b5b7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68d1c73a14733f36a48091d2a747cf965df118e3296eb365baabec469b5b7c3->enter($__internal_f68d1c73a14733f36a48091d2a747cf965df118e3296eb365baabec469b5b7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <div>
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
        <br>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
    </div>
";
        
        $__internal_f68d1c73a14733f36a48091d2a747cf965df118e3296eb365baabec469b5b7c3->leave($__internal_f68d1c73a14733f36a48091d2a747cf965df118e3296eb365baabec469b5b7c3_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body_id 'profile' %}

{% block main %}
    <div>
        {{ user.email }}
        <br>
        {{ user.fullName }}
    </div>
{% endblock %}
";
    }
}
