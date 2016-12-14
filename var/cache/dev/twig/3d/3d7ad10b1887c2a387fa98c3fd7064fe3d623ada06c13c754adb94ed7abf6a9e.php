<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4ba08ebb1ef45c1e849ae5efd6da2c43918f354dee3beba689f20238471b8e01 extends Twig_Template
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
        $__internal_192af7feb16916f38d572a0fa2950e7bb7b55c55cb96a71500fd0bdf10fe5376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192af7feb16916f38d572a0fa2950e7bb7b55c55cb96a71500fd0bdf10fe5376->enter($__internal_192af7feb16916f38d572a0fa2950e7bb7b55c55cb96a71500fd0bdf10fe5376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_192af7feb16916f38d572a0fa2950e7bb7b55c55cb96a71500fd0bdf10fe5376->leave($__internal_192af7feb16916f38d572a0fa2950e7bb7b55c55cb96a71500fd0bdf10fe5376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
