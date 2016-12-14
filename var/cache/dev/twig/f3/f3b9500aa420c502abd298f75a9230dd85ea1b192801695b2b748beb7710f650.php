<?php

/* form/fields.html.twig */
class __TwigTemplate_ebfc8ae448d8958f8db0ea34ac469ba3345d156165b5b13b174177d583506b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8914d8b6680eb6fc567cfc4ae59eed031cdb15712af6ffd65a82ef4603679ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8914d8b6680eb6fc567cfc4ae59eed031cdb15712af6ffd65a82ef4603679ea7->enter($__internal_8914d8b6680eb6fc567cfc4ae59eed031cdb15712af6ffd65a82ef4603679ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_8914d8b6680eb6fc567cfc4ae59eed031cdb15712af6ffd65a82ef4603679ea7->leave($__internal_8914d8b6680eb6fc567cfc4ae59eed031cdb15712af6ffd65a82ef4603679ea7_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_14131721c9bd67b1e6a51f8e712565c88dceb6f412a4d352b2ea51dac83e690e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14131721c9bd67b1e6a51f8e712565c88dceb6f412a4d352b2ea51dac83e690e->enter($__internal_14131721c9bd67b1e6a51f8e712565c88dceb6f412a4d352b2ea51dac83e690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_14131721c9bd67b1e6a51f8e712565c88dceb6f412a4d352b2ea51dac83e690e->leave($__internal_14131721c9bd67b1e6a51f8e712565c88dceb6f412a4d352b2ea51dac83e690e_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
