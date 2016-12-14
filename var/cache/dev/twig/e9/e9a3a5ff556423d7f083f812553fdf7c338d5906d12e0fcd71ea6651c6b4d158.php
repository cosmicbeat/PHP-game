<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6fd2de8642b3db48dfcc0a84f382dd5c675802576c8dd3a8a2b3f61be07ccd6d extends Twig_Template
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
        $__internal_aba3a1635a9108614c4efcc53e99bea9f531f4fd7c786f8bd61cd8070c166e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba3a1635a9108614c4efcc53e99bea9f531f4fd7c786f8bd61cd8070c166e42->enter($__internal_aba3a1635a9108614c4efcc53e99bea9f531f4fd7c786f8bd61cd8070c166e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_aba3a1635a9108614c4efcc53e99bea9f531f4fd7c786f8bd61cd8070c166e42->leave($__internal_aba3a1635a9108614c4efcc53e99bea9f531f4fd7c786f8bd61cd8070c166e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}
