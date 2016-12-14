<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9bb2fd05e33fd8f5317c2548e33a97298a0a21eb7230d49687a3ffd977add2cf extends Twig_Template
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
        $__internal_4c686a7d07431cc9558d6115cb6f4930e5ef8d8964abed4cfa953e4f16b97f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c686a7d07431cc9558d6115cb6f4930e5ef8d8964abed4cfa953e4f16b97f41->enter($__internal_4c686a7d07431cc9558d6115cb6f4930e5ef8d8964abed4cfa953e4f16b97f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4c686a7d07431cc9558d6115cb6f4930e5ef8d8964abed4cfa953e4f16b97f41->leave($__internal_4c686a7d07431cc9558d6115cb6f4930e5ef8d8964abed4cfa953e4f16b97f41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
