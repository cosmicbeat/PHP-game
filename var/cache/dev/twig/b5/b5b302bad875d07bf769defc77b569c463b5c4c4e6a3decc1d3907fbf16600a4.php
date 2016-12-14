<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9ef5a5436808f0241b441014988a8b2ca73d9e5b1329fcb33b0168854a83fa16 extends Twig_Template
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
        $__internal_b9381622c0f6fa9fca6258a3db1ee83bf5a32cf7dc8cfef5ca17e9b61fc29793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9381622c0f6fa9fca6258a3db1ee83bf5a32cf7dc8cfef5ca17e9b61fc29793->enter($__internal_b9381622c0f6fa9fca6258a3db1ee83bf5a32cf7dc8cfef5ca17e9b61fc29793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9381622c0f6fa9fca6258a3db1ee83bf5a32cf7dc8cfef5ca17e9b61fc29793->leave($__internal_b9381622c0f6fa9fca6258a3db1ee83bf5a32cf7dc8cfef5ca17e9b61fc29793_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
