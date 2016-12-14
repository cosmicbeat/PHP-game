<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_280ef2ee297e24f3fef63b783ecd01ed07cb91447be2887938f0890c9ee743a1 extends Twig_Template
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
        $__internal_f10fd3275c9e35442e64ed6345ba2366d043da58405e1a045ee71ae7e6884b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10fd3275c9e35442e64ed6345ba2366d043da58405e1a045ee71ae7e6884b7b->enter($__internal_f10fd3275c9e35442e64ed6345ba2366d043da58405e1a045ee71ae7e6884b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f10fd3275c9e35442e64ed6345ba2366d043da58405e1a045ee71ae7e6884b7b->leave($__internal_f10fd3275c9e35442e64ed6345ba2366d043da58405e1a045ee71ae7e6884b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
