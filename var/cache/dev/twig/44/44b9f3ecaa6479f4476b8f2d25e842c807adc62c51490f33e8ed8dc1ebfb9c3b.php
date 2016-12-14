<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5a1ca963c45bc06a9c09c3601767d42356e93a08d7b6c4d24ea64fbc5ff15727 extends Twig_Template
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
        $__internal_5c6353c993acf111548ea2d3bbdf10b33a13650edc1b5e5456c6ebecacfbd52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6353c993acf111548ea2d3bbdf10b33a13650edc1b5e5456c6ebecacfbd52d->enter($__internal_5c6353c993acf111548ea2d3bbdf10b33a13650edc1b5e5456c6ebecacfbd52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5c6353c993acf111548ea2d3bbdf10b33a13650edc1b5e5456c6ebecacfbd52d->leave($__internal_5c6353c993acf111548ea2d3bbdf10b33a13650edc1b5e5456c6ebecacfbd52d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
