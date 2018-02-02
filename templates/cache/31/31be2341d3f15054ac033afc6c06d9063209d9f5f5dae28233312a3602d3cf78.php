<?php

/* admin.twig.html */
class __TwigTemplate_4e57c795b36c8a65d4988b7269b0f712439f783e470015383b5f4df7ab091d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "admin.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 id=\"adminH1\">Admin</h1>

<table id=\"usersTable\" class=\"table\">
    <thead>
        <th scope=\"col\">Name</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Year</th>
    </thead>
</table>
";
    }

    // line 17
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 18
        $this->displayParentBlock("body_scripts", $context, $blocks);
        echo "
<script src=\"/js/admin.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "admin.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  52 => 17,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Admin{% endblock %}

{% block content %}
<h1 id=\"adminH1\">Admin</h1>

<table id=\"usersTable\" class=\"table\">
    <thead>
        <th scope=\"col\">Name</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Year</th>
    </thead>
</table>
{% endblock %}

{% block body_scripts %}
{{parent()}}
<script src=\"/js/admin.js\"></script>
{% endblock %}", "admin.twig.html", "/var/www/scoopm/templates/admin.twig.html");
    }
}
