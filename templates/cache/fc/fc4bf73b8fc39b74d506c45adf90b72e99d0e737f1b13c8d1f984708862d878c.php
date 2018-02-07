<?php

/* admin.twig.html */
class __TwigTemplate_211cd56a86f14ee314377e77915862840be4d681b00210ab55623d896ab36075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "admin.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_styles' => array($this, 'block_head_styles'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Admin";
    }

    // line 5
    public function block_head_styles($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"/css/admin.css\">
";
    }

    // line 9
    public function block_body_content($context, array $blocks = array())
    {
        // line 10
        echo "<h1 id=\"adminH1\">Admin</h1>

<table id=\"usersTable\" class=\"table\">
    <thead>
        <th scope=\"col\">Name</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Year</th>
    </thead>
</table>

";
        // line 27
        echo "<!-- Modal -->
<div class=\"modal fade scoopm-application-modal\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Details</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h1><span>First</span> <span>Last</span></h1>
                        <h4><a id=\"email\" href=\"tel:\">000-000-0000</a> / <a id=\"email\" href=\"mailto:\">email@example.com</a></h4>
                        <!-- <h4></h4> -->
                        <p>SSN: <span id=\"ssn\">111-11-1111</span></p>
                        <h4>References</h4>
                        <table class=\"table\">
                            <thead>
                                <th scope=\"col\">Name</th>
                                <th scope=\"col\">Phone</th>
                                <th scope=\"col\">Email</th>
                            </thead>
                            <tr>
                                <th id=\"ref1Name\" scope=\"row\">Joe Bloggs</th>
                                <th><a id=\"ref1Phone\" href=\"tel:\">777-777-7777</a></th>
                                <th><a id=\"ref1Email\" href=\"mailto:\">joe@example.com</a></th>
                            </tr>
                            <tr>
                                    <th id=\"ref2Name\" scope=\"row\">Sarah Johnson</th>
                                    <th><a id=\"ref2Phone\" href=\"tel:\">999-999-9999</a></th>
                                    <th><a id=\"ref2Email\" href=\"mailto:\">sarah@example.com</a></th>
                            </tr>
                        </table>
                    </div>
                    <div class=\"col-sm-4\">
                        <img src=\"\" alt=\"Test\" class=\"w-100 h-100\">
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col\">
                        <hr>
                        <h1>Car</h1>
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col\">
                        <h2><span id=\"year\">'99</span> <span id=\"make\">Make</span> <span id=\"model\">model</span></h2>
                        <h4 id=\"licenseNumber\">123-ITFL</h4>
                    </div>
                    <div class=\"col\">
                        <img src=\"\" alt=\"License Image\"><br>
                        <img src=\"\" alt=\"Registration Image\">
                        
                    </div>
                </div>

                <div class=\"row\">
                        <div class=\"col\">
                            <hr>
                            <h1>Insurance</h1>
                        </div>
                    </div>                
                <div class=\"row\">
                    <div class=\"col\">
                        <h2 id=\"provider\">Nationwide</h2>
                        <h4 id=\"policyNumber\">123456789</h4>
                    </div>
                    <div class=\"col\">
                        <img src=\"\" alt=\"Insurance Car\">
                    </div>
                </div>

            </div>
        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\">Approve</button>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>

      </div>
    </div>
  </div>

";
    }

    // line 118
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 119
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
        return array (  156 => 119,  153 => 118,  60 => 27,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Admin{% endblock %}

{% block head_styles %}
    <link rel=\"stylesheet\" href=\"/css/admin.css\">
{% endblock %}

{% block body_content %}
<h1 id=\"adminH1\">Admin</h1>

<table id=\"usersTable\" class=\"table\">
    <thead>
        <th scope=\"col\">Name</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Year</th>
    </thead>
</table>

{# <div class=\"table\">
    <div class=\"row\">
        <div class=\"cell\">Test</div>
        <div class=\"cell\">Test</div>
        <div class=\"cell\">Test</div>
    </div>
</div> #}
<!-- Modal -->
<div class=\"modal fade scoopm-application-modal\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Details</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h1><span>First</span> <span>Last</span></h1>
                        <h4><a id=\"email\" href=\"tel:\">000-000-0000</a> / <a id=\"email\" href=\"mailto:\">email@example.com</a></h4>
                        <!-- <h4></h4> -->
                        <p>SSN: <span id=\"ssn\">111-11-1111</span></p>
                        <h4>References</h4>
                        <table class=\"table\">
                            <thead>
                                <th scope=\"col\">Name</th>
                                <th scope=\"col\">Phone</th>
                                <th scope=\"col\">Email</th>
                            </thead>
                            <tr>
                                <th id=\"ref1Name\" scope=\"row\">Joe Bloggs</th>
                                <th><a id=\"ref1Phone\" href=\"tel:\">777-777-7777</a></th>
                                <th><a id=\"ref1Email\" href=\"mailto:\">joe@example.com</a></th>
                            </tr>
                            <tr>
                                    <th id=\"ref2Name\" scope=\"row\">Sarah Johnson</th>
                                    <th><a id=\"ref2Phone\" href=\"tel:\">999-999-9999</a></th>
                                    <th><a id=\"ref2Email\" href=\"mailto:\">sarah@example.com</a></th>
                            </tr>
                        </table>
                    </div>
                    <div class=\"col-sm-4\">
                        <img src=\"\" alt=\"Test\" class=\"w-100 h-100\">
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col\">
                        <hr>
                        <h1>Car</h1>
                    </div>
                </div>
                
                <div class=\"row\">
                    <div class=\"col\">
                        <h2><span id=\"year\">'99</span> <span id=\"make\">Make</span> <span id=\"model\">model</span></h2>
                        <h4 id=\"licenseNumber\">123-ITFL</h4>
                    </div>
                    <div class=\"col\">
                        <img src=\"\" alt=\"License Image\"><br>
                        <img src=\"\" alt=\"Registration Image\">
                        
                    </div>
                </div>

                <div class=\"row\">
                        <div class=\"col\">
                            <hr>
                            <h1>Insurance</h1>
                        </div>
                    </div>                
                <div class=\"row\">
                    <div class=\"col\">
                        <h2 id=\"provider\">Nationwide</h2>
                        <h4 id=\"policyNumber\">123456789</h4>
                    </div>
                    <div class=\"col\">
                        <img src=\"\" alt=\"Insurance Car\">
                    </div>
                </div>

            </div>
        </div>

        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-primary\">Approve</button>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>

      </div>
    </div>
  </div>

{% endblock %}

{% block body_scripts %}
{{parent()}}
<script src=\"/js/admin.js\"></script>
{% endblock %}", "admin.twig.html", "/var/www/templates/admin.twig.html");
    }
}
