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
            'car_query' => array($this, 'block_car_query'),
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
    public function block_car_query($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body_content($context, array $blocks = array())
    {
        // line 12
        echo "
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <span class=\"navbar-brand mb-0 h1\"><span class=\"logo-font blue-text\">ScoopM</span> Admin</span>
    ";
        // line 47
        echo "</nav>
<div class=\"container-fluid px-0 px-sm-3\">

    <h3 class=\"m-2 mx-sm-0 mt-sm-3\">Current Applicants</h3>
    
    <div class=\"table-responsive\">
        <table id=\"usersTable\" class=\"table table-sm table-hover table-striped\">
            <thead>
                <th scope=\"col-sm\">Name</th>
                <th scope=\"col-sm\">Email</th>
                <th scope=\"col-sm\">Car</th>
                <th scope=\"col-sm\">Accepted</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    
</div>

<!-- Modal -->
<div id=\"applicationModal\" class=\"modal fade scoopm-application-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\"><span id=\"firstName\">First</span> <span id=\"middleName\"></span><span id=\"lastName\">Last</span></h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    ";
        // line 80
        echo "                    <div class=\"col-sm\">
                        ";
        // line 82
        echo "                        <ul class=\"list-unstyled\">
                            <li><i class=\"fas fa-phone\"></i> <a id=\"phone\" href=\"tel:\">000-000-0000</a></li>
                            <li><i class=\"fas fa-envelope\"></i> <a id=\"email\" href=\"mailto:\">email@example.com</a></h6></li>
                            <li><p>SSN: <span id=\"ssn\">111-11-1111</span></p></li>
                        </ul>

                        <h4><i class=\"fas fa-users\"></i> References</h4>
                        <ul class=\"list-unstyled\">
                            <li><b id=\"ref1Name\" scope=\"row\">First Name</b> (<a id=\"ref1Phone\" href=\"tel:\">###-####</a> / <a id=\"ref1Email\" href=\"mailto:\">email@example.com</a>)</li>
                            <li><b id=\"ref2Name\" scope=\"row\">First Name</b> (<a id=\"ref2Phone\" href=\"tel:\">###-####</a> / <a id=\"ref2Email\" href=\"mailto:\">email@example.com</a>)</li>
                        </ul>

                        <div class=\"row\">
                            <div class=\"col-lg-auto\">
                                Resume
                                <div id=\"resume\" class=\"file-link\">Open resume file</div>
                            </div>
                            <div class=\"col-lg-auto\">
                                W-9
                                <div id=\"w9\" class=\"file-link\">Open W-9 file</div>
                            </div>
                            <div class=\"col-lg-auto\">
                                Fingerprints
                                <div id=\"fingerprints\" class=\"file-link\">Open fingerprints file</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-auto\">
                        &nbsp;
                        <div id=\"profilePhoto\" class=\"file-link\">No profile photo</div>
                    </div>
                </div>

                ";
        // line 116
        echo "                <hr>
                <div class=\"row\">
                    <div class=\"col-sm\">
                        <h4><i class=\"fas fa-car\"></i> <span id=\"year\">'99</span> <span id=\"make\">Make</span> <span id=\"model\">model</span></h4>
                        <p id=\"licenseNumber\">123-ITFL</p>
                        <div class=\"row\">
                            <div class=\"col-sm-auto\">
                                Driver's License
                                <div id=\"licenseImage\" class=\"file-link\">Open driver's license file</div>
                            </div>
                            <div class=\"col-sm-auto\">
                                Registration
                                <div id=\"registration\" class=\"file-link\">Open registration file</div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 135
        echo "                <hr>
                <div class=\"row\">
                    <div class=\"col-sm\">
                        <h4><i class=\"fas fa-gavel\"></i> <span id=\"policyProvider\">Insurance Company Name</span></h4>
                        <ul class=\"list-unstyled\">
                            <li>Policy number: <span id=\"policyNumber\">##########</span></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3\">
                        Insurance Card
                        <div id=\"insuranceImage\" class=\"file-link\">Open insurance card file</div>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"modal-footer\">
            <button id=\"approveButton\" type=\"button\" class=\"btn btn-primary\">Approve</button>
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        </div>

      </div>
    </div>
  </div>

";
    }

    // line 163
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 164
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
        return array (  184 => 164,  181 => 163,  151 => 135,  131 => 116,  96 => 82,  93 => 80,  59 => 47,  54 => 12,  51 => 11,  46 => 9,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Admin{% endblock %}

{% block head_styles %}
    <link rel=\"stylesheet\" href=\"/css/admin.css\">
{% endblock %}

{% block car_query %}{% endblock %}

{% block body_content %}

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <span class=\"navbar-brand mb-0 h1\"><span class=\"logo-font blue-text\">ScoopM</span> Admin</span>
    {# <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
      
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Dropdown
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            </div>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
        </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div> #}
</nav>
<div class=\"container-fluid px-0 px-sm-3\">

    <h3 class=\"m-2 mx-sm-0 mt-sm-3\">Current Applicants</h3>
    
    <div class=\"table-responsive\">
        <table id=\"usersTable\" class=\"table table-sm table-hover table-striped\">
            <thead>
                <th scope=\"col-sm\">Name</th>
                <th scope=\"col-sm\">Email</th>
                <th scope=\"col-sm\">Car</th>
                <th scope=\"col-sm\">Accepted</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    
</div>

<!-- Modal -->
<div id=\"applicationModal\" class=\"modal fade scoopm-application-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\"><span id=\"firstName\">First</span> <span id=\"middleName\"></span><span id=\"lastName\">Last</span></h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    {# ABOUT THE USER #}
                    <div class=\"col-sm\">
                        {# <h2></h2> #}
                        <ul class=\"list-unstyled\">
                            <li><i class=\"fas fa-phone\"></i> <a id=\"phone\" href=\"tel:\">000-000-0000</a></li>
                            <li><i class=\"fas fa-envelope\"></i> <a id=\"email\" href=\"mailto:\">email@example.com</a></h6></li>
                            <li><p>SSN: <span id=\"ssn\">111-11-1111</span></p></li>
                        </ul>

                        <h4><i class=\"fas fa-users\"></i> References</h4>
                        <ul class=\"list-unstyled\">
                            <li><b id=\"ref1Name\" scope=\"row\">First Name</b> (<a id=\"ref1Phone\" href=\"tel:\">###-####</a> / <a id=\"ref1Email\" href=\"mailto:\">email@example.com</a>)</li>
                            <li><b id=\"ref2Name\" scope=\"row\">First Name</b> (<a id=\"ref2Phone\" href=\"tel:\">###-####</a> / <a id=\"ref2Email\" href=\"mailto:\">email@example.com</a>)</li>
                        </ul>

                        <div class=\"row\">
                            <div class=\"col-lg-auto\">
                                Resume
                                <div id=\"resume\" class=\"file-link\">Open resume file</div>
                            </div>
                            <div class=\"col-lg-auto\">
                                W-9
                                <div id=\"w9\" class=\"file-link\">Open W-9 file</div>
                            </div>
                            <div class=\"col-lg-auto\">
                                Fingerprints
                                <div id=\"fingerprints\" class=\"file-link\">Open fingerprints file</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-auto\">
                        &nbsp;
                        <div id=\"profilePhoto\" class=\"file-link\">No profile photo</div>
                    </div>
                </div>

                {# ABOUT THE CAR #}
                <hr>
                <div class=\"row\">
                    <div class=\"col-sm\">
                        <h4><i class=\"fas fa-car\"></i> <span id=\"year\">'99</span> <span id=\"make\">Make</span> <span id=\"model\">model</span></h4>
                        <p id=\"licenseNumber\">123-ITFL</p>
                        <div class=\"row\">
                            <div class=\"col-sm-auto\">
                                Driver's License
                                <div id=\"licenseImage\" class=\"file-link\">Open driver's license file</div>
                            </div>
                            <div class=\"col-sm-auto\">
                                Registration
                                <div id=\"registration\" class=\"file-link\">Open registration file</div>
                            </div>
                        </div>
                    </div>
                </div>

                {# ABOUT THEIR INSURANCE #}
                <hr>
                <div class=\"row\">
                    <div class=\"col-sm\">
                        <h4><i class=\"fas fa-gavel\"></i> <span id=\"policyProvider\">Insurance Company Name</span></h4>
                        <ul class=\"list-unstyled\">
                            <li>Policy number: <span id=\"policyNumber\">##########</span></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-3\">
                        Insurance Card
                        <div id=\"insuranceImage\" class=\"file-link\">Open insurance card file</div>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"modal-footer\">
            <button id=\"approveButton\" type=\"button\" class=\"btn btn-primary\">Approve</button>
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
