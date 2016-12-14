<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a7040cee9b5ced1fad80460b342e98fe4029a78125aa135be077b0435b85187 extends Twig_Template
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
        $__internal_6649c686a3fab576a4523160303ea671098b648652af409508c38dd95568f05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6649c686a3fab576a4523160303ea671098b648652af409508c38dd95568f05d->enter($__internal_6649c686a3fab576a4523160303ea671098b648652af409508c38dd95568f05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6649c686a3fab576a4523160303ea671098b648652af409508c38dd95568f05d->leave($__internal_6649c686a3fab576a4523160303ea671098b648652af409508c38dd95568f05d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
