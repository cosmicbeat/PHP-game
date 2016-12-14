<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_01a18564896c0e6c2fbcc139df6a6043e39409c43412781d21584494fb4aea2d extends Twig_Template
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
        $__internal_727c65375504de134bbce59b2daf613e055f86f8847f639f70095f8b26b011de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727c65375504de134bbce59b2daf613e055f86f8847f639f70095f8b26b011de->enter($__internal_727c65375504de134bbce59b2daf613e055f86f8847f639f70095f8b26b011de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_727c65375504de134bbce59b2daf613e055f86f8847f639f70095f8b26b011de->leave($__internal_727c65375504de134bbce59b2daf613e055f86f8847f639f70095f8b26b011de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
