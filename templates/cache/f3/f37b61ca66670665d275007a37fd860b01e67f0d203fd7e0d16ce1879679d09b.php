<?php

/* profile.twig.html */
class __TwigTemplate_31f2529e4dd407c8d4416b6186ab7205963ee5f38a552619118a2b046596ccad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "profile.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_content' => array($this, 'block_body_content'),
            'body_scripts' => array($this, 'block_body_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["form"] = $this->loadTemplate("form_macros.twig.html", "profile.twig.html", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 6
    public function block_body_content($context, array $blocks = array())
    {
        // line 7
        echo "    <nav class=\"navbar navbar-light justify-content-between\">
        <a class=\"navbar-brand logo-font blue-text\">ScoopM</a>
        <a href=\"#\">Sign Out</a>
    </nav>

    <div id=\"profile\" class=\"container-fluid bg-light\">
        <div class=\"row\">
            <div class=\"col-sm-8 offset-sm-2 bg-white px-5\">
                <h1 class=\"fw-400\">Profile</h1>

                <div class=\"row\">
                    <div class=\"col-sm-3\">
                        <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                            <a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</a>
                            <a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</a>
                            <a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Messages</a>
                            <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Settings</a>    
                        </div>
                    </div>
                    <div class=\"col-sm-9\">
                        <div class=\"tab-content\" id=\"v-pills-tabContent\">
                            <form action=\"\" method=\"post\">
                                <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                                    <div class=\"form-row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <input id=\"firstName\" name=\"lastName\" type=\"text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["firstName"] ?? null), "html", null, true);
        echo "\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                    <div class=\"col\">
                                                        <div class=\"form-group\">
                                                            <input id=\"lastName\" name=\"lastName\" type=\"text\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["lastName"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["lastName"] ?? null), "html", null, true);
        echo "\" class=\"form-control\">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <input id=\"email\" name=\"email\" type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <input id=\"phone\" name=\"phone\" type=\"text\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
            
                                            </div>
                                        <div class=\"col-sm-6\">
                                            <img id=\"photo\" src=\"\" class=\"w-100 h-100 bg-light\">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">Profile</div>
                                <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">Messages</div>
                                <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">Settings</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

";
    }

    // line 83
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 84
        $this->displayParentBlock("body_scripts", $context, $blocks);
        echo "
<script src=\"/js/profile.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "profile.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 84,  140 => 83,  108 => 56,  96 => 49,  84 => 42,  72 => 35,  42 => 7,  39 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}
{% import \"form_macros.twig.html\" as form %}

{% block title %}Profile{% endblock %}

{% block body_content %}
    <nav class=\"navbar navbar-light justify-content-between\">
        <a class=\"navbar-brand logo-font blue-text\">ScoopM</a>
        <a href=\"#\">Sign Out</a>
    </nav>

    <div id=\"profile\" class=\"container-fluid bg-light\">
        <div class=\"row\">
            <div class=\"col-sm-8 offset-sm-2 bg-white px-5\">
                <h1 class=\"fw-400\">Profile</h1>

                <div class=\"row\">
                    <div class=\"col-sm-3\">
                        <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                            <a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">Home</a>
                            <a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Profile</a>
                            <a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Messages</a>
                            <a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Settings</a>    
                        </div>
                    </div>
                    <div class=\"col-sm-9\">
                        <div class=\"tab-content\" id=\"v-pills-tabContent\">
                            <form action=\"\" method=\"post\">
                                <div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
                                    <div class=\"form-row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <input id=\"firstName\" name=\"lastName\" type=\"text\" value=\"{{firstName}}\" placeholder=\"{{firstName}}\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                    <div class=\"col\">
                                                        <div class=\"form-group\">
                                                            <input id=\"lastName\" name=\"lastName\" type=\"text\" value=\"{{lastName}}\" placeholder=\"{{lastName}}\" class=\"form-control\">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <input id=\"email\" name=\"email\" type=\"text\" value=\"{{email}}\" placeholder=\"{{email}}\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <div class=\"form-group\">
                                                        <input id=\"phone\" name=\"phone\" type=\"text\" value=\"{{phone}}\" placeholder=\"{{phone}}\" class=\"form-control\">
                                                    </div>
                                                </div>
                                            </div>
            
                                            </div>
                                        <div class=\"col-sm-6\">
                                            <img id=\"photo\" src=\"\" class=\"w-100 h-100 bg-light\">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">Profile</div>
                                <div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">Messages</div>
                                <div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">Settings</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

{% endblock %}

{% block body_scripts %}
{{parent()}}
<script src=\"/js/profile.js\"></script>
{% endblock %}", "profile.twig.html", "/var/www/scoopm/templates/profile.twig.html");
    }
}