<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e949c39ff2fa0379d7fbdc71d5be62a5b57e91a2ece8215ac8346fefab02c7fe extends Twig_Template
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
        $__internal_9b83971c9c11271d461f24eeb6ca29c6677fa24f706b767d70912fcf48bcfb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b83971c9c11271d461f24eeb6ca29c6677fa24f706b767d70912fcf48bcfb14->enter($__internal_9b83971c9c11271d461f24eeb6ca29c6677fa24f706b767d70912fcf48bcfb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9b83971c9c11271d461f24eeb6ca29c6677fa24f706b767d70912fcf48bcfb14->leave($__internal_9b83971c9c11271d461f24eeb6ca29c6677fa24f706b767d70912fcf48bcfb14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
