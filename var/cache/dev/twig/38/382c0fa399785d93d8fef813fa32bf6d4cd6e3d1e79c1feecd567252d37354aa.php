<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f284aa9d91ae43fe5f336cdc468bee15a1a5b56484112f879e98b1c2572a0a77 extends Twig_Template
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
        $__internal_67a4666836bc0f8c69e3eee5cf757ddb7a660ada45b840b497d82629d8dfb9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a4666836bc0f8c69e3eee5cf757ddb7a660ada45b840b497d82629d8dfb9c2->enter($__internal_67a4666836bc0f8c69e3eee5cf757ddb7a660ada45b840b497d82629d8dfb9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_67a4666836bc0f8c69e3eee5cf757ddb7a660ada45b840b497d82629d8dfb9c2->leave($__internal_67a4666836bc0f8c69e3eee5cf757ddb7a660ada45b840b497d82629d8dfb9c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
