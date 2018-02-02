<?php

/* home.twig.html */
class __TwigTemplate_1df0e2cb52aa95877c153198d52a165e424309e08b1c10f2f90567c1958a1c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "home.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "Welcome";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"my-sm-5\">&nbsp;</div>

<div class=\"my-lg-5\">&nbsp;</div>

<div class=\"row\">
    <div class=\"col-md mb-4 mb-md-0\">
        <div class=\"card\">
            <div class=\"card-body\">Earn more. We pay higher rates because our service is safer.</div>
        </div>
    </div>
    <div class=\"col-md mb-4 mb-md-0\">
        <div class=\"card\">
            <div class=\"card-body\">Background checks make the ride safer.</div>
        </div>
    </div>
    <div class=\"col-md mb-4 mb-md-0\">
        <div class=\"card\">
            <div class=\"card-body\">There are so many reasons to sign up for this service.</div>
        </div>
    </div>
</div>

<div class=\"row mt-5\">
    <div class=\"col text-center mt-5\">
        <h3><a href=\"\">Sign Up</a></h3>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Welcome{% endblock %}

{% block content %}

<div class=\"my-sm-5\">&nbsp;</div>

<div class=\"my-lg-5\">&nbsp;</div>

<div class=\"row\">
    <div class=\"col-md mb-4 mb-md-0\">
        <div class=\"card\">
            <div class=\"card-body\">Earn more. We pay higher rates because our service is safer.</div>
        </div>
    </div>
    <div class=\"col-md mb-4 mb-md-0\">
        <div class=\"card\">
            <div class=\"card-body\">Background checks make the ride safer.</div>
        </div>
    </div>
    <div class=\"col-md mb-4 mb-md-0\">
        <div class=\"card\">
            <div class=\"card-body\">There are so many reasons to sign up for this service.</div>
        </div>
    </div>
</div>

<div class=\"row mt-5\">
    <div class=\"col text-center mt-5\">
        <h3><a href=\"\">Sign Up</a></h3>
    </div>
</div>
{% endblock %}", "home.twig.html", "/var/www/templates/home.twig.html");
    }
}
