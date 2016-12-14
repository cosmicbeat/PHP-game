<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9756aeb1f3c6dff21d07be17283e6cf5f8a7e57d1c86a69fb90fb11d677a365d extends Twig_Template
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
        $__internal_d8abaf798ec581a32d2d6bd89a9b85913af665daa8695b166d2dcc8c683e06be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8abaf798ec581a32d2d6bd89a9b85913af665daa8695b166d2dcc8c683e06be->enter($__internal_d8abaf798ec581a32d2d6bd89a9b85913af665daa8695b166d2dcc8c683e06be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d8abaf798ec581a32d2d6bd89a9b85913af665daa8695b166d2dcc8c683e06be->leave($__internal_d8abaf798ec581a32d2d6bd89a9b85913af665daa8695b166d2dcc8c683e06be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
