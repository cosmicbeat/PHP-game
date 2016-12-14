<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2a58dd311c7850214efe417ffff6a89a86ac1ffffb54f4e5f58db48934204e8f extends Twig_Template
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
        $__internal_6d120bd0d7cec046a0e05f01e99148b13734316f80de61235c8d2f16f22cc1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d120bd0d7cec046a0e05f01e99148b13734316f80de61235c8d2f16f22cc1e3->enter($__internal_6d120bd0d7cec046a0e05f01e99148b13734316f80de61235c8d2f16f22cc1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6d120bd0d7cec046a0e05f01e99148b13734316f80de61235c8d2f16f22cc1e3->leave($__internal_6d120bd0d7cec046a0e05f01e99148b13734316f80de61235c8d2f16f22cc1e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
