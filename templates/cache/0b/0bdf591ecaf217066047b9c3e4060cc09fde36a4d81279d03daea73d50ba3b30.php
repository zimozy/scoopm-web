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
        echo "    <link rel=\"stylesheet\" href=\"/css/home.css\">
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "</div>
<div class=\"col-sm-10 offset-sm-1\">
    <div class=\"row\">
            <div class=\"col\">

                ";
        // line 21
        echo "                <div class=\"my-sm-1\">&nbsp; </div>
                
                <div class=\"row\">
                    <div class=\"col-lg\">
                        <div id=\"card1\" class=\"card hidden-card\">
                            <div class=\"card-body\"><span>Earn more</span> Our safety-first standards mean we can charge&mdash;and pay you&mdash;more.</div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg\">
                        <div id=\"card2\" class=\"card hidden-card\">
                            <div class=\"card-body\"><span>You're covered</span> Our corporate insurance policy means you can drive with greater peace of mind.</div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg\">
                        <div id=\"card3\" class=\"card hidden-card\">
                            <div class=\"card-body\"><span>Lorem Ipsum</span> Dolor sit amet blha wjij foie je jie wo ioij ji ijieee.</div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-10 offset-sm-1 col-lg-6 offset-lg-3 sign-up-box\">

                        <div id=\"signUp\">
                            <h1 class=\"text-center\">Sign up now!</h1>
                            
                            <div id=\"errorMessage\" class=\"alert d-none\"></div>
                            
                            <form id=\"sign-up\">
                                <div class=\"form-group\">
                                    <input id=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                                    <small class=\"form-text scoopm-error\">Please enter your email</small>
                                </div>
                                <div class=\"form-group\">
                                        <input id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                        <small class=\"form-text scoopm-error\">Please enter your email</small>
                                    </div>
                                <div class=\"text-center\">
                                    <input id=\"createAccount\" type=\"submit\" class=\"btn btn-block\" value=\"Let's go!\"/>
                                </div>
                                <p class=\"text-center my-3\">
                                    Already have an account? <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("application-login"), "html", null, true);
        echo "\">Sign in.</a>
                                </p>
                            </form>
                        </div>
                        <div id=\"startNewApplication\" class=\"d-none\">
                            <h1 class=\"text-center my-5\"><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\" class=\"underlined\">Apply now!</a></h1>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

";
    }

    // line 80
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 81
        echo "<script type=\"text/javascript\" src=\"/js/home.js\"></script>
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
        return array (  140 => 81,  137 => 80,  124 => 69,  116 => 64,  71 => 21,  64 => 15,  61 => 14,  56 => 11,  53 => 10,  47 => 9,  42 => 7,  36 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% import \"form_macros.twig.html\" as form %}

{% block title %}Welcome{% endblock %}

{% block car_query %}{% endblock %}

{% block body_class %}class=\"ad-background\"{% endblock %}
{% block head_styles %}
    <link rel=\"stylesheet\" href=\"/css/home.css\">
{% endblock %}

{% block content %}
</div>
<div class=\"col-sm-10 offset-sm-1\">
    <div class=\"row\">
            <div class=\"col\">

                {# <div class=\"mt-sm-1\">&nbsp; </div> #}
                <div class=\"my-sm-1\">&nbsp; </div>
                
                <div class=\"row\">
                    <div class=\"col-lg\">
                        <div id=\"card1\" class=\"card hidden-card\">
                            <div class=\"card-body\"><span>Earn more</span> Our safety-first standards mean we can charge&mdash;and pay you&mdash;more.</div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg\">
                        <div id=\"card2\" class=\"card hidden-card\">
                            <div class=\"card-body\"><span>You're covered</span> Our corporate insurance policy means you can drive with greater peace of mind.</div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg\">
                        <div id=\"card3\" class=\"card hidden-card\">
                            <div class=\"card-body\"><span>Lorem Ipsum</span> Dolor sit amet blha wjij foie je jie wo ioij ji ijieee.</div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-10 offset-sm-1 col-lg-6 offset-lg-3 sign-up-box\">

                        <div id=\"signUp\">
                            <h1 class=\"text-center\">Sign up now!</h1>
                            
                            <div id=\"errorMessage\" class=\"alert d-none\"></div>
                            
                            <form id=\"sign-up\">
                                <div class=\"form-group\">
                                    <input id=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                                    <small class=\"form-text scoopm-error\">Please enter your email</small>
                                </div>
                                <div class=\"form-group\">
                                        <input id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                                        <small class=\"form-text scoopm-error\">Please enter your email</small>
                                    </div>
                                <div class=\"text-center\">
                                    <input id=\"createAccount\" type=\"submit\" class=\"btn btn-block\" value=\"Let's go!\"/>
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
        </div>
    </div>
</div>

{% endblock %}


{% block body_scripts %}
<script type=\"text/javascript\" src=\"/js/home.js\"></script>
<script type=\"text/javascript\" src=\"/js/createUser.js\"></script>
{% endblock %}", "home.twig.html", "/var/www/templates/home.twig.html");
    }
}
