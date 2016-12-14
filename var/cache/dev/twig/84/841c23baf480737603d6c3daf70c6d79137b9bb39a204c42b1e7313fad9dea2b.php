<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e3d9e82d857815f3fd9a4dc9c8729ff14e6f97e7f9ff9d96d2d74e9dfeb8ba88 extends Twig_Template
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
        $__internal_d6009deac5e0b3dd718c32bb26ad7db75e9a9226e45c67dcec55d72439a6dce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6009deac5e0b3dd718c32bb26ad7db75e9a9226e45c67dcec55d72439a6dce2->enter($__internal_d6009deac5e0b3dd718c32bb26ad7db75e9a9226e45c67dcec55d72439a6dce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d6009deac5e0b3dd718c32bb26ad7db75e9a9226e45c67dcec55d72439a6dce2->leave($__internal_d6009deac5e0b3dd718c32bb26ad7db75e9a9226e45c67dcec55d72439a6dce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
