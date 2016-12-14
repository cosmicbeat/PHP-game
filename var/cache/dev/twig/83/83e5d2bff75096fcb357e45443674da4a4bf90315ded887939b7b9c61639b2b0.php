<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_19b7d492ae30803eeb26bf8162740c1ef2c446349886a65521f2ade0972ee5a1 extends Twig_Template
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
        $__internal_fe70f5a0ddb7cbfe2fcf3bf354db12c34d18e65c702c12be67def3587deb6a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe70f5a0ddb7cbfe2fcf3bf354db12c34d18e65c702c12be67def3587deb6a65->enter($__internal_fe70f5a0ddb7cbfe2fcf3bf354db12c34d18e65c702c12be67def3587deb6a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fe70f5a0ddb7cbfe2fcf3bf354db12c34d18e65c702c12be67def3587deb6a65->leave($__internal_fe70f5a0ddb7cbfe2fcf3bf354db12c34d18e65c702c12be67def3587deb6a65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
