<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0b9b7dea0e37a9c28c3a2bb6e4b70c1c1faa3e1c52f192a9c6fb9e1bc500bffe extends Twig_Template
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
        $__internal_a929d8701823bab8144e3d7d4fd37406474a6d1e61f1c195cf8dadedd2b3dd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a929d8701823bab8144e3d7d4fd37406474a6d1e61f1c195cf8dadedd2b3dd07->enter($__internal_a929d8701823bab8144e3d7d4fd37406474a6d1e61f1c195cf8dadedd2b3dd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a929d8701823bab8144e3d7d4fd37406474a6d1e61f1c195cf8dadedd2b3dd07->leave($__internal_a929d8701823bab8144e3d7d4fd37406474a6d1e61f1c195cf8dadedd2b3dd07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
