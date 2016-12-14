<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_32fb6ec11188bd4cf5a8df867a7162e7b358a63b51f0fc23b371aa8f05759604 extends Twig_Template
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
        $__internal_4e74ed010b70fd4a13cec3964bf96382f7dbb05b93602f87ef4e03e5232b8ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e74ed010b70fd4a13cec3964bf96382f7dbb05b93602f87ef4e03e5232b8ba4->enter($__internal_4e74ed010b70fd4a13cec3964bf96382f7dbb05b93602f87ef4e03e5232b8ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4e74ed010b70fd4a13cec3964bf96382f7dbb05b93602f87ef4e03e5232b8ba4->leave($__internal_4e74ed010b70fd4a13cec3964bf96382f7dbb05b93602f87ef4e03e5232b8ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
