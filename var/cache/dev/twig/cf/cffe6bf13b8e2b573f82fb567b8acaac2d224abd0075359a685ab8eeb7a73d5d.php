<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_863358ce756e75b48d6a3e6a15f3b248d3ea4e099719dab557da9598d1b66691 extends Twig_Template
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
        $__internal_9df10ec216bb5a95f973fb5c6c28972856c1d6b348f9e0bc21b22c229db89179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df10ec216bb5a95f973fb5c6c28972856c1d6b348f9e0bc21b22c229db89179->enter($__internal_9df10ec216bb5a95f973fb5c6c28972856c1d6b348f9e0bc21b22c229db89179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9df10ec216bb5a95f973fb5c6c28972856c1d6b348f9e0bc21b22c229db89179->leave($__internal_9df10ec216bb5a95f973fb5c6c28972856c1d6b348f9e0bc21b22c229db89179_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
