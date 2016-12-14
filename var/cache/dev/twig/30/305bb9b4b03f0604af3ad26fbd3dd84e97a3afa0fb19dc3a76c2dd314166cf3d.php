<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_abba30250cd51e3c1a32b9943182775eb90f399798a1d3da484e9ca1934097fb extends Twig_Template
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
        $__internal_d9093ce40d17dc85835eed13a69f15b0fbaf0e55fe19cc6e7c64ebf0d111b230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9093ce40d17dc85835eed13a69f15b0fbaf0e55fe19cc6e7c64ebf0d111b230->enter($__internal_d9093ce40d17dc85835eed13a69f15b0fbaf0e55fe19cc6e7c64ebf0d111b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d9093ce40d17dc85835eed13a69f15b0fbaf0e55fe19cc6e7c64ebf0d111b230->leave($__internal_d9093ce40d17dc85835eed13a69f15b0fbaf0e55fe19cc6e7c64ebf0d111b230_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
