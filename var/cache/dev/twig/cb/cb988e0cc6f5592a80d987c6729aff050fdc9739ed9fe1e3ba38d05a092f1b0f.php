<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d900822d7689cb1a916fb9466eabb1710c279e238f5f1d3c97f6833c4251d2ee extends Twig_Template
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
        $__internal_71572e82d47fc2cb99a14ef2c2d82fa20eb0e070888e7199c1c29c06ba5dce48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71572e82d47fc2cb99a14ef2c2d82fa20eb0e070888e7199c1c29c06ba5dce48->enter($__internal_71572e82d47fc2cb99a14ef2c2d82fa20eb0e070888e7199c1c29c06ba5dce48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_71572e82d47fc2cb99a14ef2c2d82fa20eb0e070888e7199c1c29c06ba5dce48->leave($__internal_71572e82d47fc2cb99a14ef2c2d82fa20eb0e070888e7199c1c29c06ba5dce48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
