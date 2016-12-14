<?php

/* base.html.twig */
class __TwigTemplate_d1fb2bb070c535b731b9e05751f23f462a40eb9bfa242a6eef59ec4f3a226427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a16f01000e17a18aa039d9ade7f83c1ae64ae99bb741ab7599dbebc05df13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a16f01000e17a18aa039d9ade7f83c1ae64ae99bb741ab7599dbebc05df13e->enter($__internal_09a16f01000e17a18aa039d9ade7f83c1ae64ae99bb741ab7599dbebc05df13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "
<div class=\"container body-container\">
    ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "</div>

";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
</body>
</html>
";
        
        $__internal_09a16f01000e17a18aa039d9ade7f83c1ae64ae99bb741ab7599dbebc05df13e->leave($__internal_09a16f01000e17a18aa039d9ade7f83c1ae64ae99bb741ab7599dbebc05df13e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_579e48b3716152ef03573f1baeec20c4764e6b2969b3ff2dd0fb9dfbb7022117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579e48b3716152ef03573f1baeec20c4764e6b2969b3ff2dd0fb9dfbb7022117->enter($__internal_579e48b3716152ef03573f1baeec20c4764e6b2969b3ff2dd0fb9dfbb7022117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_579e48b3716152ef03573f1baeec20c4764e6b2969b3ff2dd0fb9dfbb7022117->leave($__internal_579e48b3716152ef03573f1baeec20c4764e6b2969b3ff2dd0fb9dfbb7022117_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10498d4e7d6d25a33fa6b0aaded9a9ec953a59605b58facabde4a976f43744e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10498d4e7d6d25a33fa6b0aaded9a9ec953a59605b58facabde4a976f43744e1->enter($__internal_10498d4e7d6d25a33fa6b0aaded9a9ec953a59605b58facabde4a976f43744e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_10498d4e7d6d25a33fa6b0aaded9a9ec953a59605b58facabde4a976f43744e1->leave($__internal_10498d4e7d6d25a33fa6b0aaded9a9ec953a59605b58facabde4a976f43744e1_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a4861532bb5c5a02345dd0a8cc92ef4f3e81d2c7a66ca632c348733f314349c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4861532bb5c5a02345dd0a8cc92ef4f3e81d2c7a66ca632c348733f314349c4->enter($__internal_a4861532bb5c5a02345dd0a8cc92ef4f3e81d2c7a66ca632c348733f314349c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_a4861532bb5c5a02345dd0a8cc92ef4f3e81d2c7a66ca632c348733f314349c4->leave($__internal_a4861532bb5c5a02345dd0a8cc92ef4f3e81d2c7a66ca632c348733f314349c4_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_eabd4b878ebf76f8b0b0488ff83d28d7c5c35c48fcf781ed8bd2f088cda63723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabd4b878ebf76f8b0b0488ff83d28d7c5c35c48fcf781ed8bd2f088cda63723->enter($__internal_eabd4b878ebf76f8b0b0488ff83d28d7c5c35c48fcf781ed8bd2f088cda63723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                            <li>
                                <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 48
            echo "                            <li>
                                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 59
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_eabd4b878ebf76f8b0b0488ff83d28d7c5c35c48fcf781ed8bd2f088cda63723->leave($__internal_eabd4b878ebf76f8b0b0488ff83d28d7c5c35c48fcf781ed8bd2f088cda63723_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ebf9591b1a7224321ec891ab37fde9d25b58e078a57f8933a015a19ffbc1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ebf9591b1a7224321ec891ab37fde9d25b58e078a57f8933a015a19ffbc1dd->enter($__internal_87ebf9591b1a7224321ec891ab37fde9d25b58e078a57f8933a015a19ffbc1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 71
        echo "            </div>
        </div>
    ";
        
        $__internal_87ebf9591b1a7224321ec891ab37fde9d25b58e078a57f8933a015a19ffbc1dd->leave($__internal_87ebf9591b1a7224321ec891ab37fde9d25b58e078a57f8933a015a19ffbc1dd_prof);

    }

    // line 70
    public function block_main($context, array $blocks = array())
    {
        $__internal_0feee42f5225cc08772a5111ab84e61ec32b2f80f2919698f113538dff8f5509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0feee42f5225cc08772a5111ab84e61ec32b2f80f2919698f113538dff8f5509->enter($__internal_0feee42f5225cc08772a5111ab84e61ec32b2f80f2919698f113538dff8f5509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_0feee42f5225cc08772a5111ab84e61ec32b2f80f2919698f113538dff8f5509->leave($__internal_0feee42f5225cc08772a5111ab84e61ec32b2f80f2919698f113538dff8f5509_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e81e117c45746bc33d7dd2966212e9ba724a967b71d0b1cd729547ded8649960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81e117c45746bc33d7dd2966212e9ba724a967b71d0b1cd729547ded8649960->enter($__internal_e81e117c45746bc33d7dd2966212e9ba724a967b71d0b1cd729547ded8649960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_e81e117c45746bc33d7dd2966212e9ba724a967b71d0b1cd729547ded8649960->leave($__internal_e81e117c45746bc33d7dd2966212e9ba724a967b71d0b1cd729547ded8649960_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fbeee68d97da7ba20cf1cf8a99a23248b55290eb10f02749cdcfec77673ac25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbeee68d97da7ba20cf1cf8a99a23248b55290eb10f02749cdcfec77673ac25->enter($__internal_5fbeee68d97da7ba20cf1cf8a99a23248b55290eb10f02749cdcfec77673ac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5fbeee68d97da7ba20cf1cf8a99a23248b55290eb10f02749cdcfec77673ac25->leave($__internal_5fbeee68d97da7ba20cf1cf8a99a23248b55290eb10f02749cdcfec77673ac25_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 88,  269 => 87,  265 => 86,  260 => 85,  254 => 84,  242 => 77,  236 => 76,  225 => 70,  216 => 71,  214 => 70,  210 => 68,  204 => 67,  192 => 59,  184 => 54,  176 => 49,  173 => 48,  165 => 43,  157 => 38,  154 => 37,  152 => 36,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 90,  72 => 84,  69 => 83,  67 => 76,  63 => 74,  61 => 67,  57 => 65,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
