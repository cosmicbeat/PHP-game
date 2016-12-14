<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9b445f0bc9710d934b596fb8c4db7a26b7de523635448f4639e479d47382a172 extends Twig_Template
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
        $__internal_564cc67ceaf6981a8b37b1684a6efb5a8f92cecc64fd21c08863726e8bd7c9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564cc67ceaf6981a8b37b1684a6efb5a8f92cecc64fd21c08863726e8bd7c9ed->enter($__internal_564cc67ceaf6981a8b37b1684a6efb5a8f92cecc64fd21c08863726e8bd7c9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_564cc67ceaf6981a8b37b1684a6efb5a8f92cecc64fd21c08863726e8bd7c9ed->leave($__internal_564cc67ceaf6981a8b37b1684a6efb5a8f92cecc64fd21c08863726e8bd7c9ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
