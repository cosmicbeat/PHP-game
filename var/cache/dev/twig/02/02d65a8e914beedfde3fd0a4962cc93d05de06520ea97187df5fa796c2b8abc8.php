<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e616b0556d81af1f5a4cdcbdb1b1764ca2ab47e77941c1515cb4f57326bea0d2 extends Twig_Template
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
        $__internal_273b58f8e354923dc3f00f98819fc6cb10d92fdb4ed19f3ad132c5b06c8530a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273b58f8e354923dc3f00f98819fc6cb10d92fdb4ed19f3ad132c5b06c8530a6->enter($__internal_273b58f8e354923dc3f00f98819fc6cb10d92fdb4ed19f3ad132c5b06c8530a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_273b58f8e354923dc3f00f98819fc6cb10d92fdb4ed19f3ad132c5b06c8530a6->leave($__internal_273b58f8e354923dc3f00f98819fc6cb10d92fdb4ed19f3ad132c5b06c8530a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
