<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html.twig */
class __TwigTemplate_efa3db1b6e3ffe7683423f894eac598c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <main>
            <div class=\"container\">
                <div class=\"row align-center mt-s\">
                    <div class=\"col-xl-6 col-12\">
                        <div class=\"web-logo\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/layout/logo.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>        
                <div id=\"content\">";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
            </div>
        </main>
        
        <footer>
            <div class=\"container\">
                <div class=\"row align-center\">
                    <div class=\"col-xl-6 col-12\">
                        ";
        // line 28
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo " - LePasTropBonCoin</title>
            ";
        // line 7
        $this->loadTemplate("base_styles.html.twig", "layout.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        echo "                            &copy; Copyright 2022 by <a href=\"http://domain.invalid/\">us</a>.
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 29,  137 => 28,  125 => 20,  113 => 6,  106 => 8,  104 => 7,  99 => 6,  92 => 5,  80 => 31,  78 => 28,  67 => 20,  60 => 16,  51 => 9,  49 => 5,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/layout.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <title>{% block title %}{% endblock %} - LePasTropBonCoin</title>
            {% include 'base_styles.html.twig' %}
        {% endblock %}
    </head>
    <body>
        <main>
            <div class=\"container\">
                <div class=\"row align-center mt-s\">
                    <div class=\"col-xl-6 col-12\">
                        <div class=\"web-logo\">
                            <img src=\"{{asset('img/layout/logo.png')}}\">
                        </div>
                    </div>
                </div>        
                <div id=\"content\">{% block content %}{% endblock %}</div>
            </div>
        </main>
        
        <footer>
            <div class=\"container\">
                <div class=\"row align-center\">
                    <div class=\"col-xl-6 col-12\">
                        {% block footer %}
                            &copy; Copyright 2022 by <a href=\"http://domain.invalid/\">us</a>.
                        {% endblock %}
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>", "layout.html.twig", "/var/www/html/templates/layout.html.twig");
    }
}
