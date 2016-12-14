<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_64a253762218fb78868a7506352dcb631affc91ee996f30689d598ad8a412480 extends Twig_Template
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
        $__internal_e3371380ca60ae71cb7d233a6c97dd8d094a7e4dc99fc018b85136694c7906af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3371380ca60ae71cb7d233a6c97dd8d094a7e4dc99fc018b85136694c7906af->enter($__internal_e3371380ca60ae71cb7d233a6c97dd8d094a7e4dc99fc018b85136694c7906af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e3371380ca60ae71cb7d233a6c97dd8d094a7e4dc99fc018b85136694c7906af->leave($__internal_e3371380ca60ae71cb7d233a6c97dd8d094a7e4dc99fc018b85136694c7906af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
