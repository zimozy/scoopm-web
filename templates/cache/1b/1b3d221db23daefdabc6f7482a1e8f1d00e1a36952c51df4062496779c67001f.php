<?php

/* thanks.twig.html */
class __TwigTemplate_9c9bddc73c584a15e054032d3a11f23458282b750f6679d228181431f90d5d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "thanks.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'car_query' => array($this, 'block_car_query'),
            'body_content' => array($this, 'block_body_content'),
            'content' => array($this, 'block_content'),
            'body_scripts' => array($this, 'block_body_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Thanks!";
    }

    // line 5
    public function block_car_query($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"container\">
    
    <div class=\"row mt-sm-4\">
        <div class=\"col\">
            <h1 class=\"display-4 text-center logo-font text-muted mt-2\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">ScoopM</a></h1>
        </div>
    </div>
    ";
        // line 24
        echo "
    <div class=\"row h-100 align-items-center\" style=\"margin-top: 10%;\">
        <div class=\"col-lg-8 offset-lg-2 text-center\">
            <h1 class=\"display-3 blue-text\">Thanks!</h1>
            <p class=\"lead\">You should get an email shortly.</p>
            <p class=\"lead blue-text underlined\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile"), "html", null, true);
        echo "\">View profile</a></p>
            ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "        </div>
    </div>

</div>

";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    // line 38
    public function block_body_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "thanks.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  81 => 30,  72 => 31,  70 => 30,  66 => 29,  59 => 24,  53 => 13,  46 => 8,  43 => 7,  38 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Thanks!{% endblock %}

{% block car_query %}{% endblock %}

{% block body_content %}

<div class=\"container\">
    
    <div class=\"row mt-sm-4\">
        <div class=\"col\">
            <h1 class=\"display-4 text-center logo-font text-muted mt-2\"><a href=\"{{path_for('home')}}\">ScoopM</a></h1>
        </div>
    </div>
    {# 
    <div class=\"row d-none d-sm-block\">
        <div class=\"col my-3\">&nbsp;</div>
    </div>

    <div class=\"row\">
        <div class=\"col my-2\">&nbsp;</div>
    </div> #}

    <div class=\"row h-100 align-items-center\" style=\"margin-top: 10%;\">
        <div class=\"col-lg-8 offset-lg-2 text-center\">
            <h1 class=\"display-3 blue-text\">Thanks!</h1>
            <p class=\"lead\">You should get an email shortly.</p>
            <p class=\"lead blue-text underlined\"><a href=\"{{path_for('profile')}}\">View profile</a></p>
            {% block content %}{% endblock %}
        </div>
    </div>

</div>

{% endblock %}

{% block body_scripts %}{% endblock %}", "thanks.twig.html", "/var/www/templates/thanks.twig.html");
    }
}
