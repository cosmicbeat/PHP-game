<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4be94caca30b3a8c5519af9b80f14b3ac275868681938ed2521c37552186a9e5 extends Twig_Template
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
        $__internal_cafae7a5b7e5eea6c14039e8b44463e6a3890ea6b9a97e04fb6c237552fc394a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafae7a5b7e5eea6c14039e8b44463e6a3890ea6b9a97e04fb6c237552fc394a->enter($__internal_cafae7a5b7e5eea6c14039e8b44463e6a3890ea6b9a97e04fb6c237552fc394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cafae7a5b7e5eea6c14039e8b44463e6a3890ea6b9a97e04fb6c237552fc394a->leave($__internal_cafae7a5b7e5eea6c14039e8b44463e6a3890ea6b9a97e04fb6c237552fc394a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
