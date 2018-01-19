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
        $context["form"] = $this->loadTemplate("form_macros.twig.html", "register.twig.html", 2);
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

<br>

<p id=\"progress-links\" class=\"h3 text-center text-muted\">
    <a id=\"aboutYouLink\" href=\"#\" class=\"underlined\">About&nbsp;You</a> &raquo; <a id=\"yourCarLink\" href=\"#\" class=\"text-muted\">Your&nbsp;Car</a> &raquo; <a id=\"insuranceLink\" href=\"#\" class=\"text-muted\">Insurance&nbsp;Info</a> &raquo; <a id=\"applicationLink\" href=\"#\" class=\"text-muted\">Application</a>
</p>

<br>

<form id=\"form\" method=\"post\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\"  enctype=\"multipart/form-data\" ";
        if (($context["errors"] ?? null)) {
            echo "class=\"scoopm-was-validated\"";
        }
        echo " novalidate>
          
    <!-- ABOUT YOU -->
    <div id=\"aboutYouPage\" class=\"current-page page\">
        ";
        // line 24
        echo $context["form"]->macro_title("About You");
        echo "  
        ";
        // line 25
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()));
        echo "
        ";
        // line 26
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "lastName", array()));
        echo "
        ";
        // line 27
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "phone", array()));
        echo "
        ";
        // line 28
        echo $context["form"]->macro_email("Email", "email", ($context["email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array()));
        echo "
        ";
        // line 29
        echo $context["form"]->macro_password("Password", "password", ($context["password"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array()));
        echo "
        ";
        // line 30
        echo $context["form"]->macro_confirm("Confirm Password", "confirmPassword", ($context["confirmPassword"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "confirmPassword", array()));
        echo "
        ";
        // line 31
        echo $context["form"]->macro_buttons("aboutYou");
        echo "
    </div>

    <!-- YOUR CAR -->
    <div id=\"yourCarPage\" class=\"page container d-none\">
        ";
        // line 36
        echo $context["form"]->macro_title("About your car");
        echo "  
        ";
        // line 37
        echo $context["form"]->macro_upload("Driver's License", "licenseImage", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["files"] ?? null), "licenseImage", array()), "getClientFilename", array(), "method"), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseImage", array()));
        echo "
        ";
        // line 38
        echo $context["form"]->macro_upload("Registration", "registration", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["files"] ?? null), "registration", array()), "getClientFilename", array(), "method"), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration", array()));
        echo "
        ";
        // line 39
        echo $context["form"]->macro_select("Year", "year", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "year", array()));
        echo "
        ";
        // line 40
        echo $context["form"]->macro_select("Make", "make", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "make", array()));
        echo "
        ";
        // line 41
        echo $context["form"]->macro_select("Model", "model", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array()));
        echo "
        ";
        // line 43
        echo "        ";
        echo $context["form"]->macro_select("Color", "color", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "color", array()), array(0 => "Beige", 1 => "Black", 2 => "Blue", 3 => "Brown", 4 => "Burgundy", 5 => "Charcoal", 6 => "Gold", 7 => "Gray", 8 => "Green", 9 => "Off White", 10 => "Orange", 11 => "Pink", 12 => "Purple", 13 => "Red", 14 => "Silver", 15 => "Tan", 16 => "Turquoise", 17 => "White", 18 => "Yellow"), ($context["color"] ?? null));
        echo "
        ";
        // line 44
        echo $context["form"]->macro_textInput("License plate number", "licenseNumber", ($context["licenseNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseNumber", array()));
        echo "
        ";
        // line 45
        echo $context["form"]->macro_buttons("yourCar", true);
        echo "
    </div>


    <!-- INSURANCE -->
    <div id=\"insurancePage\" class=\"page container d-none\">
        ";
        // line 51
        echo $context["form"]->macro_title("Insurance info");
        echo "
        ";
        // line 52
        echo $context["form"]->macro_textInput("Policy provider", "policyProvider", ($context["policyProvider"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyProvider", array()));
        echo "
        ";
        // line 53
        echo $context["form"]->macro_textInput("Policy number", "policyNumber", ($context["policyNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyNumber", array()));
        echo "
        ";
        // line 54
        echo $context["form"]->macro_upload("Insurance card", "insurance", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["files"] ?? null), "insurance", array()), "getClientFilename", array(), "method"), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance", array()));
        echo "
        ";
        // line 55
        echo $context["form"]->macro_buttons("insurance", true);
        echo "
    </div>


        <!-- APPLICATION -->
    <div id=\"applicationPage\" class=\"page container d-none\">
        ";
        // line 61
        echo $context["form"]->macro_title("Application");
        echo "
        ";
        // line 62
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ssn", array()));
        echo "
        ";
        // line 63
        echo $context["form"]->macro_upload("Upload a Photo of Yourself", "photo", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["files"] ?? null), "photo", array()), "getClientFilename", array(), "method"), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "photo", array()));
        echo "
        ";
        // line 64
        echo $context["form"]->macro_upload("Upload W-9", "w9", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["files"] ?? null), "w9", array()), "getClientFilename", array(), "method"), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "w9", array()), "<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.");
        echo "
        ";
        // line 65
        echo $context["form"]->macro_upload("Upload Resume", "resume", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["files"] ?? null), "resume", array()), "getClientFilename", array(), "method"), "doc", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "resume", array()));
        echo "

        ";
        // line 67
        echo $context["form"]->macro_heading("Please Provide Two References");
        echo "
        ";
        // line 68
        echo $context["form"]->macro_subHeading("<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 1");
        echo "
        ";
        // line 69
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Name", array()));
        echo "
        ";
        // line 70
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Phone", array()));
        echo "
        ";
        // line 71
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Email", array()));
        echo "
        
        ";
        // line 73
        echo $context["form"]->macro_subHeading("<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 2");
        echo "
        ";
        // line 74
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Name", array()));
        echo "
        ";
        // line 75
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Phone", array()));
        echo "
        ";
        // line 76
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Email", array()));
        echo "

        ";
        // line 78
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
        return array (  229 => 78,  224 => 76,  220 => 75,  216 => 74,  212 => 73,  207 => 71,  203 => 70,  199 => 69,  195 => 68,  191 => 67,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  170 => 61,  161 => 55,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  136 => 45,  132 => 44,  127 => 43,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  56 => 20,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig.html\" %}
{% import \"form_macros.twig.html\" as form %}

{% block title %}Register{% endblock %}

{% block content %}

<br>

<h1 class=\"display-4 text-center\">Register</h1>

<br>

<p id=\"progress-links\" class=\"h3 text-center text-muted\">
    <a id=\"aboutYouLink\" href=\"#\" class=\"underlined\">About&nbsp;You</a> &raquo; <a id=\"yourCarLink\" href=\"#\" class=\"text-muted\">Your&nbsp;Car</a> &raquo; <a id=\"insuranceLink\" href=\"#\" class=\"text-muted\">Insurance&nbsp;Info</a> &raquo; <a id=\"applicationLink\" href=\"#\" class=\"text-muted\">Application</a>
</p>

<br>

<form id=\"form\" method=\"post\" action=\"{{ path_for('register') }}\"  enctype=\"multipart/form-data\" {% if errors %}class=\"scoopm-was-validated\"{% endif %} novalidate>
          
    <!-- ABOUT YOU -->
    <div id=\"aboutYouPage\" class=\"current-page page\">
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
        {{form.upload('Driver\\'s License', 'licenseImage', files.licenseImage.getClientFilename(), 'img', errors.licenseImage)}}
        {{form.upload('Registration', 'registration', files.registration.getClientFilename(), 'img', errors.registration)}}
        {{form.select('Year', 'year', errors.year)}}
        {{form.select('Make', 'make', errors.make)}}
        {{form.select('Model', 'model', errors.model)}}
        {# {{form.select('Trim', 'trim', errors.trim)}} #}
        {{form.select('Color', 'color', errors.color, [\"Beige\",\"Black\",\"Blue\",\"Brown\",\"Burgundy\",\"Charcoal\",\"Gold\",\"Gray\",\"Green\",\"Off White\",\"Orange\",\"Pink\",\"Purple\" ,\"Red\",\"Silver\",\"Tan\",\"Turquoise\",\"White\",\"Yellow\"], color)}}
        {{form.textInput('License plate number', 'licenseNumber', licenseNumber, errors.licenseNumber)}}
        {{form.buttons('yourCar', true)}}
    </div>


    <!-- INSURANCE -->
    <div id=\"insurancePage\" class=\"page container d-none\">
        {{form.title('Insurance info')}}
        {{form.textInput('Policy provider', 'policyProvider', policyProvider, errors.policyProvider)}}
        {{form.textInput('Policy number', 'policyNumber', policyNumber, errors.policyNumber)}}
        {{form.upload('Insurance card', 'insurance', files.insurance.getClientFilename(), 'img', errors.insurance)}}
        {{form.buttons('insurance', true)}}
    </div>


        <!-- APPLICATION -->
    <div id=\"applicationPage\" class=\"page container d-none\">
        {{form.title('Application')}}
        {{form.textInput('Social Security Number', 'ssn', ssn, errors.ssn)}}
        {{form.upload('Upload a Photo of Yourself', 'photo', files.photo.getClientFilename(), 'img', errors.photo)}}
        {{form.upload('Upload W-9', 'w9', files.w9.getClientFilename(), 'img/pdf', errors.w9, '<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.')}}
        {{form.upload('Upload Resume', 'resume', files.resume.getClientFilename(), 'doc', errors.resume)}}

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