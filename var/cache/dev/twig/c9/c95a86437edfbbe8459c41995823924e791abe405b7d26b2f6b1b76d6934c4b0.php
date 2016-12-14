<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f4bddeabeba06cfc150295f71f376ce3e4306b4b3e0e75fcdde47242855af009 extends Twig_Template
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
        $__internal_9f17a154698dc88b9ec72ed0874d26072164f0fe9420178fe6c9281b50f48bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f17a154698dc88b9ec72ed0874d26072164f0fe9420178fe6c9281b50f48bd0->enter($__internal_9f17a154698dc88b9ec72ed0874d26072164f0fe9420178fe6c9281b50f48bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9f17a154698dc88b9ec72ed0874d26072164f0fe9420178fe6c9281b50f48bd0->leave($__internal_9f17a154698dc88b9ec72ed0874d26072164f0fe9420178fe6c9281b50f48bd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
