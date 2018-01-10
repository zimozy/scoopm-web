<?php

/* register.twig.html */
class __TwigTemplate_bdd6a894d52d2e34e6e34d252e3d40040c2a3a789359871bb81c07f743edb41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "register.twig.html", 1);
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
        // line 2
        $context["form"] = $this->loadTemplate("form_macros.twig", "register.twig.html", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Register";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<br>
<h1 class=\"display-4 text-center\">Register</h1>
<h1>";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array())) {
            echo "HI ";
        }
        echo "</h1>
<br>
<p id=\"progress-links\" class=\"h3 text-center text-muted\">
    <a id=\"aboutYouLink\" href=\"#\" class=\"underlined\">About&nbsp;You</a> &raquo; <a id=\"yourCarLink\" href=\"#\" class=\"text-muted\">Your&nbsp;Car</a> &raquo; <a id=\"insuranceLink\" href=\"#\" class=\"text-muted\">Insurance&nbsp;Info</a> &raquo; <a id=\"applicationLink\" href=\"#\" class=\"text-muted\">Application</a>
</p>
<br>


<form id=\"form\" method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\"  enctype=\"multipart/form-data\" ";
        if (($context["errors"] ?? null)) {
            echo "class=\"scoopm-validated\"";
        }
        echo " novalidate>
    <input type=\"submit\"/>

    <!-- ABOUT YOU -->
    <div id=\"aboutYouPage\" class=\"current-page page\">
            ";
        // line 24
        echo "            
        ";
        // line 25
        echo $context["form"]->macro_title("About You");
        echo "  
        ";
        // line 26
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()));
        echo "
        ";
        // line 27
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "lastName", array()));
        echo "
        ";
        // line 28
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "phone", array()));
        echo "
        ";
        // line 29
        echo $context["form"]->macro_email("Email", "email", ($context["email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array()));
        echo "
        ";
        // line 30
        echo $context["form"]->macro_password("Password", "password", ($context["password"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array()));
        echo "
        ";
        // line 31
        echo $context["form"]->macro_confirm("Confirm Password", "confirmPassword", ($context["confirmPassword"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "confirmPassword", array()));
        echo "

        ";
        // line 33
        echo $context["form"]->macro_buttons("aboutYou");
        echo "
    </div>

    <!-- YOUR CAR -->
    <div id=\"yourCarPage\" class=\"page container d-none\">
        ";
        // line 38
        echo $context["form"]->macro_title("About your car");
        echo "  
        ";
        // line 39
        echo $context["form"]->macro_upload("Driver's License", "licenseImage", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseImage", array()));
        echo "
        ";
        // line 40
        echo $context["form"]->macro_upload("Registration", "registration", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration", array()));
        echo "

        <div class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label text-right\">Vehicle make</div>
            <div class=\"col\">
                <select>
                    <option value=\"test\">make...</option>
                </select>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label text-right\">Vehicle model</div>
            <div class=\"col\">
                <select>
                    <option value=\"test\">model...</option>
                </select>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label text-right\">Color</div>
            <div class=\"col\">
                <select>
                    <option value=\"test\">color...</option>
                </select>
            </div>
        </div>

        ";
        // line 67
        echo $context["form"]->macro_textInput("License plate number", "licenseNumber", ($context["licenseNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseNumber", array()));
        echo "
        ";
        // line 68
        echo $context["form"]->macro_buttons("yourCar", true);
        echo "
    </div>


    <!-- INSURANCE -->
    <div id=\"insurancePage\" class=\"page container d-none\">
        ";
        // line 74
        echo $context["form"]->macro_title("Insurance info");
        echo "
        ";
        // line 75
        echo $context["form"]->macro_textInput("Policy Provider", "provider", ($context["provider"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "provider", array()));
        echo "
        ";
        // line 76
        echo $context["form"]->macro_select("Policy number", "policyNumber", array(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyNumber", array()));
        echo "
        ";
        // line 77
        echo $context["form"]->macro_upload("Insurance card", "insurance", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance", array()));
        echo "
        ";
        // line 78
        echo $context["form"]->macro_buttons("insurance", true);
        echo "
    </div>


        <!-- APPLICATION -->
    <div id=\"applicationPage\" class=\"page container d-none\">
        ";
        // line 84
        echo $context["form"]->macro_title("Application");
        echo "

        ";
        // line 86
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ssn", array()));
        echo "
        ";
        // line 87
        echo $context["form"]->macro_upload("Upload a Photo of Yourself", "photo", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "photo", array()));
        echo "
        ";
        // line 88
        echo $context["form"]->macro_upload("Upload W-9", "w9", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "w9", array()), "Download a blank copy of the W-9 <a href=\"\">here</a>.");
        echo "
        ";
        // line 89
        echo $context["form"]->macro_upload("Upload Resume", "resume", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "resume", array()));
        echo "

        ";
        // line 91
        echo $context["form"]->macro_heading("Please Provide Two References");
        echo "
        ";
        // line 92
        echo $context["form"]->macro_subHeading("<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 1");
        echo "
        ";
        // line 93
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Name", array()));
        echo "
        ";
        // line 94
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Phone", array()));
        echo "
        ";
        // line 95
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Email", array()));
        echo "
        
        ";
        // line 97
        echo $context["form"]->macro_subHeading("<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 2");
        echo "
        ";
        // line 98
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Name", array()));
        echo "
        ";
        // line 99
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Phone", array()));
        echo "
        ";
        // line 100
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Email", array()));
        echo "

        ";
        // line 102
        echo $context["form"]->macro_buttons("application", true, true);
        echo "
    </div>
</form>
 
<script type=\"text/javascript\" src=\"/js/register.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "register.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 102,  242 => 100,  238 => 99,  234 => 98,  230 => 97,  225 => 95,  221 => 94,  217 => 93,  213 => 92,  209 => 91,  204 => 89,  200 => 88,  196 => 87,  192 => 86,  187 => 84,  178 => 78,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  153 => 68,  149 => 67,  119 => 40,  115 => 39,  111 => 38,  103 => 33,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  71 => 24,  59 => 18,  46 => 10,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig.html\" %}
{% import \"form_macros.twig\" as form %}

{% block title %}Register{% endblock %}

{% block content %}

<br>
<h1 class=\"display-4 text-center\">Register</h1>
<h1>{% if errors.firstName %}HI {% endif %}</h1>
<br>
<p id=\"progress-links\" class=\"h3 text-center text-muted\">
    <a id=\"aboutYouLink\" href=\"#\" class=\"underlined\">About&nbsp;You</a> &raquo; <a id=\"yourCarLink\" href=\"#\" class=\"text-muted\">Your&nbsp;Car</a> &raquo; <a id=\"insuranceLink\" href=\"#\" class=\"text-muted\">Insurance&nbsp;Info</a> &raquo; <a id=\"applicationLink\" href=\"#\" class=\"text-muted\">Application</a>
</p>
<br>


<form id=\"form\" method=\"post\" action=\"{{ path_for('register') }}\"  enctype=\"multipart/form-data\" {% if errors %}class=\"scoopm-validated\"{% endif %} novalidate>
    <input type=\"submit\"/>

    <!-- ABOUT YOU -->
    <div id=\"aboutYouPage\" class=\"current-page page\">
            {# {{ dump(errors.firstName.empty) }} #}
            
        {{form.title('About You')}}  
        {{form.textInput('First Name', 'firstName', firstName, errors.firstName)}}
        {{form.textInput('Last Name', 'lastName', lastName, errors.lastName)}}
        {{form.textInput('Phone Number', 'phone', phone, errors.phone)}}
        {{form.email('Email', 'email', email, errors.email)}}
        {{form.password('Password', 'password', password, errors.password)}}
        {{form.confirm('Confirm Password', 'confirmPassword', confirmPassword, errors.confirmPassword)}}

        {{form.buttons('aboutYou')}}
    </div>

    <!-- YOUR CAR -->
    <div id=\"yourCarPage\" class=\"page container d-none\">
        {{form.title('About your car')}}  
        {{form.upload('Driver\\'s License', 'licenseImage', errors.licenseImage)}}
        {{form.upload('Registration', 'registration', errors.registration)}}

        <div class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label text-right\">Vehicle make</div>
            <div class=\"col\">
                <select>
                    <option value=\"test\">make...</option>
                </select>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label text-right\">Vehicle model</div>
            <div class=\"col\">
                <select>
                    <option value=\"test\">model...</option>
                </select>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col-sm-3 col-form-label text-right\">Color</div>
            <div class=\"col\">
                <select>
                    <option value=\"test\">color...</option>
                </select>
            </div>
        </div>

        {{form.textInput('License plate number', 'licenseNumber', licenseNumber, errors.licenseNumber)}}
        {{form.buttons('yourCar', true)}}
    </div>


    <!-- INSURANCE -->
    <div id=\"insurancePage\" class=\"page container d-none\">
        {{form.title('Insurance info')}}
        {{form.textInput('Policy Provider', 'provider', provider, errors.provider)}}
        {{form.select('Policy number', 'policyNumber', [] , errors.policyNumber)}}
        {{form.upload('Insurance card', 'insurance', errors.insurance)}}
        {{form.buttons('insurance', true)}}
    </div>


        <!-- APPLICATION -->
    <div id=\"applicationPage\" class=\"page container d-none\">
        {{form.title('Application')}}

        {{form.textInput('Social Security Number', 'ssn', ssn, errors.ssn)}}
        {{form.upload('Upload a Photo of Yourself', 'photo', errors.photo)}}
        {{form.upload('Upload W-9', 'w9', errors.w9, 'Download a blank copy of the W-9 <a href=\"\">here</a>.')}}
        {{form.upload('Upload Resume', 'resume', errors.resume)}}

        {{form.heading('Please Provide Two References')}}
        {{form.subHeading('<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 1')}}
        {{form.textInput('Name', 'ref1Name', ref1Name, errors.ref1Name)}}
        {{form.textInput('Phone Number', 'ref1Phone', ref1Phone, errors.ref1Phone)}}
        {{form.email('Email Address', 'ref1Email', ref1Email, errors.ref1Email)}}
        
        {{form.subHeading('<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 2')}}
        {{form.textInput('Name', 'ref2Name', ref2Name, errors.ref2Name)}}
        {{form.textInput('Phone Number', 'ref2Phone', ref2Phone, errors.ref2Phone)}}
        {{form.email('Email Address', 'ref2Email', ref2Email, errors.ref2Email)}}

        {{form.buttons('application', true, true)}}
    </div>
</form>
 
<script type=\"text/javascript\" src=\"/js/register.js\"></script>

{% endblock %}
", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
