<?php

/* base.html.twig */
class __TwigTemplate_512b76320df09a7acc3b78baa9dd5a3b42c4c63d385070120dde9727499f2aad extends Twig_Template
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
        $__internal_ddc3d1399e8e2298100b552edc3d3a1082fb0a497d15e375ca32dd730fa28acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc3d1399e8e2298100b552edc3d3a1082fb0a497d15e375ca32dd730fa28acf->enter($__internal_ddc3d1399e8e2298100b552edc3d3a1082fb0a497d15e375ca32dd730fa28acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ddc3d1399e8e2298100b552edc3d3a1082fb0a497d15e375ca32dd730fa28acf->leave($__internal_ddc3d1399e8e2298100b552edc3d3a1082fb0a497d15e375ca32dd730fa28acf_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceff3d15e02e996e86f30ffbc68622bc7b8632be74c74b090c3fe034bfb08a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceff3d15e02e996e86f30ffbc68622bc7b8632be74c74b090c3fe034bfb08a3d->enter($__internal_ceff3d15e02e996e86f30ffbc68622bc7b8632be74c74b090c3fe034bfb08a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_ceff3d15e02e996e86f30ffbc68622bc7b8632be74c74b090c3fe034bfb08a3d->leave($__internal_ceff3d15e02e996e86f30ffbc68622bc7b8632be74c74b090c3fe034bfb08a3d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d95265a01d1a5af99341d0b09c8e9e0a4929260ceda58705f71f5f993d4e8513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95265a01d1a5af99341d0b09c8e9e0a4929260ceda58705f71f5f993d4e8513->enter($__internal_d95265a01d1a5af99341d0b09c8e9e0a4929260ceda58705f71f5f993d4e8513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_d95265a01d1a5af99341d0b09c8e9e0a4929260ceda58705f71f5f993d4e8513->leave($__internal_d95265a01d1a5af99341d0b09c8e9e0a4929260ceda58705f71f5f993d4e8513_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3ca1733881e380600029e5e5f1aa2106af4251c5698bbcb56208d32aabf82f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca1733881e380600029e5e5f1aa2106af4251c5698bbcb56208d32aabf82f01->enter($__internal_3ca1733881e380600029e5e5f1aa2106af4251c5698bbcb56208d32aabf82f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_3ca1733881e380600029e5e5f1aa2106af4251c5698bbcb56208d32aabf82f01->leave($__internal_3ca1733881e380600029e5e5f1aa2106af4251c5698bbcb56208d32aabf82f01_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_419b9849ef79e4d69169743701964b44afe7fea94f2409f0b3f1cc7ba25e8347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419b9849ef79e4d69169743701964b44afe7fea94f2409f0b3f1cc7ba25e8347->enter($__internal_419b9849ef79e4d69169743701964b44afe7fea94f2409f0b3f1cc7ba25e8347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_419b9849ef79e4d69169743701964b44afe7fea94f2409f0b3f1cc7ba25e8347->leave($__internal_419b9849ef79e4d69169743701964b44afe7fea94f2409f0b3f1cc7ba25e8347_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b18568b022a90e273fb9b819333ef5f7f3fa868a9145882cfe711e2c62a9f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b18568b022a90e273fb9b819333ef5f7f3fa868a9145882cfe711e2c62a9f6e->enter($__internal_4b18568b022a90e273fb9b819333ef5f7f3fa868a9145882cfe711e2c62a9f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b18568b022a90e273fb9b819333ef5f7f3fa868a9145882cfe711e2c62a9f6e->leave($__internal_4b18568b022a90e273fb9b819333ef5f7f3fa868a9145882cfe711e2c62a9f6e_prof);

    }

    // line 70
    public function block_main($context, array $blocks = array())
    {
        $__internal_8160ef063e782f55c48ffa2d7742df009fdec1350dffbf46a6d627339daa43b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8160ef063e782f55c48ffa2d7742df009fdec1350dffbf46a6d627339daa43b5->enter($__internal_8160ef063e782f55c48ffa2d7742df009fdec1350dffbf46a6d627339daa43b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_8160ef063e782f55c48ffa2d7742df009fdec1350dffbf46a6d627339daa43b5->leave($__internal_8160ef063e782f55c48ffa2d7742df009fdec1350dffbf46a6d627339daa43b5_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_22660b4f7cb432d954de700df8de2600a4426c9eee59eea8fc771f1435f6bf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22660b4f7cb432d954de700df8de2600a4426c9eee59eea8fc771f1435f6bf99->enter($__internal_22660b4f7cb432d954de700df8de2600a4426c9eee59eea8fc771f1435f6bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_22660b4f7cb432d954de700df8de2600a4426c9eee59eea8fc771f1435f6bf99->leave($__internal_22660b4f7cb432d954de700df8de2600a4426c9eee59eea8fc771f1435f6bf99_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88ad3fbc3707238777b4d62dc45378fd6a92a351125fc24348785d5ab28e7ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ad3fbc3707238777b4d62dc45378fd6a92a351125fc24348785d5ab28e7ab5->enter($__internal_88ad3fbc3707238777b4d62dc45378fd6a92a351125fc24348785d5ab28e7ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_88ad3fbc3707238777b4d62dc45378fd6a92a351125fc24348785d5ab28e7ab5->leave($__internal_88ad3fbc3707238777b4d62dc45378fd6a92a351125fc24348785d5ab28e7ab5_prof);

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
