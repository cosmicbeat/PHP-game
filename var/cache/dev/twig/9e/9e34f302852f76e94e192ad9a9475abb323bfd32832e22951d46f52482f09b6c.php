<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c09062ea6c0a9a53f4e275cde780faedc5903c78d4770ba59c6c321da80448fa extends Twig_Template
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
        $__internal_1a6cddca66f3218c9178be510cc1f086cbc65a9a68ded4ee1234978a6e3ee622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6cddca66f3218c9178be510cc1f086cbc65a9a68ded4ee1234978a6e3ee622->enter($__internal_1a6cddca66f3218c9178be510cc1f086cbc65a9a68ded4ee1234978a6e3ee622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1a6cddca66f3218c9178be510cc1f086cbc65a9a68ded4ee1234978a6e3ee622->leave($__internal_1a6cddca66f3218c9178be510cc1f086cbc65a9a68ded4ee1234978a6e3ee622_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
