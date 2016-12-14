<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e803082b489fb83b2d43aaf8cee1c1001181083f95250543dccca5631510c10f extends Twig_Template
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
        $__internal_d39b809e23e229259ffe87205309b9fe922809c56aa7e01720637605760dc1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39b809e23e229259ffe87205309b9fe922809c56aa7e01720637605760dc1d2->enter($__internal_d39b809e23e229259ffe87205309b9fe922809c56aa7e01720637605760dc1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d39b809e23e229259ffe87205309b9fe922809c56aa7e01720637605760dc1d2->leave($__internal_d39b809e23e229259ffe87205309b9fe922809c56aa7e01720637605760dc1d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
