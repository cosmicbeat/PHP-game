<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_11c0e1fea40bfce5956c3b1223463205c4180c78dc8b228fbf2c6e0b67c0da46 extends Twig_Template
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
        $__internal_c1d862dee33ae086296c8966465f182b4da69697b4688c3447e43433f3d28d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d862dee33ae086296c8966465f182b4da69697b4688c3447e43433f3d28d54->enter($__internal_c1d862dee33ae086296c8966465f182b4da69697b4688c3447e43433f3d28d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c1d862dee33ae086296c8966465f182b4da69697b4688c3447e43433f3d28d54->leave($__internal_c1d862dee33ae086296c8966465f182b4da69697b4688c3447e43433f3d28d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
