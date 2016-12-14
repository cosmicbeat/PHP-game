<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_35fc5a6e6b20fd8bf8f2701925dde0586426c97f833e7e65190c8bb4639c287b extends Twig_Template
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
        $__internal_3456bc71d368cc1d7f43ee8e0e73b001fd018c097eba26c45e8a747282f4ba9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3456bc71d368cc1d7f43ee8e0e73b001fd018c097eba26c45e8a747282f4ba9c->enter($__internal_3456bc71d368cc1d7f43ee8e0e73b001fd018c097eba26c45e8a747282f4ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3456bc71d368cc1d7f43ee8e0e73b001fd018c097eba26c45e8a747282f4ba9c->leave($__internal_3456bc71d368cc1d7f43ee8e0e73b001fd018c097eba26c45e8a747282f4ba9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
