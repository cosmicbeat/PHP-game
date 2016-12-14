<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_055b8d1a70a6e29e63823031faac6ce242493abc38636671e4f3852de8cd1c47 extends Twig_Template
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
        $__internal_ca1ce743da8666ad880aa5bb13663b39b3deb200dc17cb82c03a3944428deaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1ce743da8666ad880aa5bb13663b39b3deb200dc17cb82c03a3944428deaa7->enter($__internal_ca1ce743da8666ad880aa5bb13663b39b3deb200dc17cb82c03a3944428deaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_ca1ce743da8666ad880aa5bb13663b39b3deb200dc17cb82c03a3944428deaa7->leave($__internal_ca1ce743da8666ad880aa5bb13663b39b3deb200dc17cb82c03a3944428deaa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
