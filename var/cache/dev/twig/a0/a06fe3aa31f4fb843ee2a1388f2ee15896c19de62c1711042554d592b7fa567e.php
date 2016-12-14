<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_525bd6dc781dff4c8f971c715ee450d549a4249e8db83b1e3102446adcbb3a58 extends Twig_Template
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
        $__internal_499a8ccdb21f32166083e565c9de16c2faf690356368b8e8f395e19ece0dc5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499a8ccdb21f32166083e565c9de16c2faf690356368b8e8f395e19ece0dc5a8->enter($__internal_499a8ccdb21f32166083e565c9de16c2faf690356368b8e8f395e19ece0dc5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_499a8ccdb21f32166083e565c9de16c2faf690356368b8e8f395e19ece0dc5a8->leave($__internal_499a8ccdb21f32166083e565c9de16c2faf690356368b8e8f395e19ece0dc5a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
