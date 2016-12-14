<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ce366e58f00ee171637aca94e3cdb480b9601493f142f094f470da0159e19d0c extends Twig_Template
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
        $__internal_14345581aec4cc8fa1cec17428f91c764f91795cf3db52bd261ee6986d08ee28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14345581aec4cc8fa1cec17428f91c764f91795cf3db52bd261ee6986d08ee28->enter($__internal_14345581aec4cc8fa1cec17428f91c764f91795cf3db52bd261ee6986d08ee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_14345581aec4cc8fa1cec17428f91c764f91795cf3db52bd261ee6986d08ee28->leave($__internal_14345581aec4cc8fa1cec17428f91c764f91795cf3db52bd261ee6986d08ee28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
