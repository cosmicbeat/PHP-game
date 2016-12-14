<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f0033bf3bbe26855e8044b6ea0c143308e02c9b24ddae24707909ba494f40a55 extends Twig_Template
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
        $__internal_3ce3d82c3e96b87fe94564a47ebd81a1623b4af7761db7e66af16c305dcb799c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce3d82c3e96b87fe94564a47ebd81a1623b4af7761db7e66af16c305dcb799c->enter($__internal_3ce3d82c3e96b87fe94564a47ebd81a1623b4af7761db7e66af16c305dcb799c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3ce3d82c3e96b87fe94564a47ebd81a1623b4af7761db7e66af16c305dcb799c->leave($__internal_3ce3d82c3e96b87fe94564a47ebd81a1623b4af7761db7e66af16c305dcb799c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
