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
            'car_query' => array($this, 'block_car_query'),
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
        // line 3
        $context["form"] = $this->loadTemplate("form_macros.twig.html", "home.twig.html", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 7
    public function block_car_query($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"row\">
        <div class=\"col\">

            <div class=\"mt-1\">&nbsp; </div>
            <div class=\"my-1 d-none d-sm-block\">&nbsp; </div>
                
            <div class=\"row\">
                
                <div class=\"col-md mb-4 mb-md-0\">
                    <div id=\"card1\" class=\"card hidden-card\">
                        <div class=\"card-body\">Earn more. We pay higher rates because our service is safer.</div>
                    </div>
                </div>
                
                <div class=\"col-md mb-4 mb-md-0\">
                    <div id=\"card2\" class=\"card hidden-card\">
                        <div class=\"card-body\">Background checks make the ride safer.</div>
                    </div>
                </div>
                
                <div class=\"col-md mb-4 mb-md-0\">
                    <div id=\"card3\" class=\"card hidden-card\">
                        <div class=\"card-body\">There are so many reasons to sign up for this service.</div>
                    </div>
                </div>

            </div>

            <div class=\"row\">
                <div class=\"col-sm-8 offset-sm-2\">

                    <div id=\"signUp\">
                        <h1 class=\"text-center mt-5 mb-4\">Sign up now!</h1>
                        
                        <div id=\"errorMessage\" class=\"alert alert-primary d-none\"></div>
                        
                        <form id=\"sign-up\">
                            <div class=\"form-group\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Email\"/>
                                <small class=\"form-text scoopm-error\">Please enter your email</small>
                            </div>
                            <div class=\"form-group\">
                                    <input id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                    <small class=\"form-text scoopm-error\">Please enter your email</small>
                                </div>
                            <div class=\"text-center\">
                                <button id=\"createAccount\" type=\"button\" class=\"btn btn-outline-primary btn-block\">Let's go! </button>
                            </div>
                        </form>
                    </div>
                    <div id=\"startNewApplication\" class=\"d-none\">
                        <h1 class=\"text-center my-5\"><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\" class=\"underlined\">Apply now!</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 73
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 74
        echo "<script type=\"text/javascript\" src=\"/js/greeting.js\"></script>
<script type=\"text/javascript\" src=\"/js/createUser.js\"></script>
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
        return array (  118 => 74,  115 => 73,  102 => 62,  48 => 10,  45 => 9,  40 => 7,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% import \"form_macros.twig.html\" as form %}

{% block title %}Welcome{% endblock %}

{% block car_query %}{% endblock %}

{% block content %}

<div class=\"row\">
        <div class=\"col\">

            <div class=\"mt-1\">&nbsp; </div>
            <div class=\"my-1 d-none d-sm-block\">&nbsp; </div>
                
            <div class=\"row\">
                
                <div class=\"col-md mb-4 mb-md-0\">
                    <div id=\"card1\" class=\"card hidden-card\">
                        <div class=\"card-body\">Earn more. We pay higher rates because our service is safer.</div>
                    </div>
                </div>
                
                <div class=\"col-md mb-4 mb-md-0\">
                    <div id=\"card2\" class=\"card hidden-card\">
                        <div class=\"card-body\">Background checks make the ride safer.</div>
                    </div>
                </div>
                
                <div class=\"col-md mb-4 mb-md-0\">
                    <div id=\"card3\" class=\"card hidden-card\">
                        <div class=\"card-body\">There are so many reasons to sign up for this service.</div>
                    </div>
                </div>

            </div>

            <div class=\"row\">
                <div class=\"col-sm-8 offset-sm-2\">

                    <div id=\"signUp\">
                        <h1 class=\"text-center mt-5 mb-4\">Sign up now!</h1>
                        
                        <div id=\"errorMessage\" class=\"alert alert-primary d-none\"></div>
                        
                        <form id=\"sign-up\">
                            <div class=\"form-group\">
                                <input id=\"email\" type=\"email\" class=\"form-control\" placeholder=\"Email\"/>
                                <small class=\"form-text scoopm-error\">Please enter your email</small>
                            </div>
                            <div class=\"form-group\">
                                    <input id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                    <small class=\"form-text scoopm-error\">Please enter your email</small>
                                </div>
                            <div class=\"text-center\">
                                <button id=\"createAccount\" type=\"button\" class=\"btn btn-outline-primary btn-block\">Let's go! </button>
                            </div>
                        </form>
                    </div>
                    <div id=\"startNewApplication\" class=\"d-none\">
                        <h1 class=\"text-center my-5\"><a href=\"{{ path_for('register') }}\" class=\"underlined\">Apply now!</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}


{% block body_scripts %}
<script type=\"text/javascript\" src=\"/js/greeting.js\"></script>
<script type=\"text/javascript\" src=\"/js/createUser.js\"></script>
{% endblock %}", "home.twig.html", "/var/www/templates/home.twig.html");
    }
}
