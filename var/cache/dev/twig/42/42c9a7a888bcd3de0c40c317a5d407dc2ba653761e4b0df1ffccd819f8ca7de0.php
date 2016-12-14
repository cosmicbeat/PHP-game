<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_968a34cfa025a2a8298adb9e932e77ca29f88091570cf3883320d393e1650d4f extends Twig_Template
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
        $__internal_a13b69189028060f7e831af3fd7b5eea256638e795b13b0ee63549c8bf9f2bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13b69189028060f7e831af3fd7b5eea256638e795b13b0ee63549c8bf9f2bce->enter($__internal_a13b69189028060f7e831af3fd7b5eea256638e795b13b0ee63549c8bf9f2bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a13b69189028060f7e831af3fd7b5eea256638e795b13b0ee63549c8bf9f2bce->leave($__internal_a13b69189028060f7e831af3fd7b5eea256638e795b13b0ee63549c8bf9f2bce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
