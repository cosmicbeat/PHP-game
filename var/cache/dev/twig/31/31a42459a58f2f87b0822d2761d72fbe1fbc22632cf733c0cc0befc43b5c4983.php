<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6f9c60ece91bc31905fe708e5a2732dd227a182e6e8eb9d61b4e40bed545d44f extends Twig_Template
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
        $__internal_bd8c8995555ab686bab0ca0f0601e9aee720a8a7851edee4918cb6ee997d1cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8c8995555ab686bab0ca0f0601e9aee720a8a7851edee4918cb6ee997d1cc6->enter($__internal_bd8c8995555ab686bab0ca0f0601e9aee720a8a7851edee4918cb6ee997d1cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd8c8995555ab686bab0ca0f0601e9aee720a8a7851edee4918cb6ee997d1cc6->leave($__internal_bd8c8995555ab686bab0ca0f0601e9aee720a8a7851edee4918cb6ee997d1cc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
