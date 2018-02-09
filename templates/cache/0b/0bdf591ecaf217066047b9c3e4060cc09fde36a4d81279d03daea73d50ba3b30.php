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
            'body_class' => array($this, 'block_body_class'),
            'head_styles' => array($this, 'block_head_styles'),
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
    public function block_body_class($context, array $blocks = array())
    {
        echo "class=\"ad-background\"";
    }

    // line 10
    public function block_head_styles($context, array $blocks = array())
    {
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"/css/ad.css\">
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"row\">
        <div class=\"col\">
";
        // line 21
        echo "                


            <div class=\"row\">
                <div class=\"col-sm-8 offset-sm-2 sign-up-box\">

                    <div id=\"signUp\">
                        <h1 class=\"text-center\">Sign up now!</h1>
                        
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
                            <p class=\"text-center my-3\">
                                Already have an account? <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("application-login"), "html", null, true);
        echo "\">Sign in.</a>
                            </p>
                        </form>
                    </div>
                    <div id=\"startNewApplication\" class=\"d-none\">
                        <h1 class=\"text-center my-5\"><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\" class=\"underlined\">Apply now!</a></h1>
                    </div>
                </div>
            </div>

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

    </div>
</div>


";
    }

    // line 84
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 85
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
        return array (  142 => 85,  139 => 84,  103 => 50,  95 => 45,  69 => 21,  64 => 15,  61 => 14,  56 => 11,  53 => 10,  47 => 9,  42 => 7,  36 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% import \"form_macros.twig.html\" as form %}

{% block title %}Welcome{% endblock %}

{% block car_query %}{% endblock %}

{% block body_class %}class=\"ad-background\"{% endblock %}
{% block head_styles %}
    <link rel=\"stylesheet\" href=\"/css/ad.css\">
{% endblock %}

{% block content %}

<div class=\"row\">
        <div class=\"col\">
{# 
            <div class=\"mt-1\">&nbsp; </div>
            <div class=\"my-1 d-none d-sm-block\">&nbsp; </div> #}
                


            <div class=\"row\">
                <div class=\"col-sm-8 offset-sm-2 sign-up-box\">

                    <div id=\"signUp\">
                        <h1 class=\"text-center\">Sign up now!</h1>
                        
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
                            <p class=\"text-center my-3\">
                                Already have an account? <a href=\"{{ path_for('application-login') }}\">Sign in.</a>
                            </p>
                        </form>
                    </div>
                    <div id=\"startNewApplication\" class=\"d-none\">
                        <h1 class=\"text-center my-5\"><a href=\"{{ path_for('register') }}\" class=\"underlined\">Apply now!</a></h1>
                    </div>
                </div>
            </div>

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

    </div>
</div>


{% endblock %}


{% block body_scripts %}
<script type=\"text/javascript\" src=\"/js/greeting.js\"></script>
<script type=\"text/javascript\" src=\"/js/createUser.js\"></script>
{% endblock %}", "home.twig.html", "/var/www/templates/home.twig.html");
    }
}
