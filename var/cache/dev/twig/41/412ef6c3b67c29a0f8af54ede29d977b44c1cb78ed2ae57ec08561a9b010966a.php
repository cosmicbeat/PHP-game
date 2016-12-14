<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ffbd8a3c41288d0c5e82054aec891d9d1e53de4e3c57f3d4108986a40e16aa18 extends Twig_Template
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
        $__internal_a3d3321ac3d5896aaa63017de785c90d3b3769fad9a7f0438700db096ce9c370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d3321ac3d5896aaa63017de785c90d3b3769fad9a7f0438700db096ce9c370->enter($__internal_a3d3321ac3d5896aaa63017de785c90d3b3769fad9a7f0438700db096ce9c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a3d3321ac3d5896aaa63017de785c90d3b3769fad9a7f0438700db096ce9c370->leave($__internal_a3d3321ac3d5896aaa63017de785c90d3b3769fad9a7f0438700db096ce9c370_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
