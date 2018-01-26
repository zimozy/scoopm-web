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
<h1 class=\"fw-400 text-center\">Register</h1>

";
        // line 11
        echo "
    <p id=\"progress-links\" class=\"h4 fw-400 text-center mt-4\">
        <a id=\"aboutYouLink\" href=\"#\" class=\"underlined page-visited\">About&nbsp;You</a>
        <span> &raquo; </span>
        <a id=\"yourCarLink\" href=\"#\">Your&nbsp;Car</a>
        <span> &raquo; </span>
        <a id=\"insuranceLink\" href=\"#\">Insurance&nbsp;Info</a>
        <span> &raquo; </span>
        <a id=\"applicationLink\" href=\"#\">Application</a><span> &raquo; </span><a id=\"referencesLink\" href=\"#\">References</a>
    </p>

    <br>

    <form id=\"form\" method=\"post\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\"  enctype=\"multipart/form-data\" ";
        if (($context["errors"] ?? null)) {
            echo "class=\"scoopm-was-validated\"";
        }
        echo " novalidate>
            

        <!-- ABOUT YOU -->
        <div id=\"aboutYouPage\" class=\"current-page page\">
            ";
        // line 29
        echo $context["form"]->macro_title("About You");
        echo "  
            ";
        // line 30
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()));
        echo "
            ";
        // line 31
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "lastName", array()));
        echo "
            ";
        // line 32
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "phone", array()), "tel");
        echo "
            ";
        // line 33
        echo $context["form"]->macro_email("Email", "email", ($context["email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array()));
        echo "
            ";
        // line 34
        echo $context["form"]->macro_password("Password", "password", ($context["password"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array()));
        echo "
            ";
        // line 35
        echo $context["form"]->macro_confirm("Confirm Password", "confirmPassword", ($context["confirmPassword"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "confirmPassword", array()));
        echo "
            ";
        // line 36
        echo $context["form"]->macro_buttons("aboutYou");
        echo "
        </div>


        <!-- YOUR CAR -->
        <div id=\"yourCarPage\" class=\"page d-none\">
            ";
        // line 42
        echo $context["form"]->macro_title("About your car");
        echo "  
            ";
        // line 43
        echo $context["form"]->macro_upload("Driver's License", "licenseImage", ($context["licenseImage"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseImage", array()));
        echo "
            ";
        // line 44
        echo $context["form"]->macro_upload("Registration", "registration", ($context["registration"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration", array()));
        echo "
            ";
        // line 45
        echo $context["form"]->macro_select("Year", "year", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "year", array()));
        echo "
            ";
        // line 46
        echo $context["form"]->macro_select("Make", "make", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "make", array()));
        echo "
            ";
        // line 47
        echo $context["form"]->macro_select("Model", "model", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array()));
        echo "
            ";
        // line 49
        echo "            ";
        echo $context["form"]->macro_select("Color", "color", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "color", array()), array(0 => "Beige", 1 => "Black", 2 => "Blue", 3 => "Brown", 4 => "Burgundy", 5 => "Charcoal", 6 => "Gold", 7 => "Gray", 8 => "Green", 9 => "Off White", 10 => "Orange", 11 => "Pink", 12 => "Purple", 13 => "Red", 14 => "Silver", 15 => "Tan", 16 => "Turquoise", 17 => "White", 18 => "Yellow"), ($context["color"] ?? null));
        echo "
            ";
        // line 50
        echo $context["form"]->macro_textInput("License plate number", "licenseNumber", ($context["licenseNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseNumber", array()));
        echo "
            ";
        // line 51
        echo $context["form"]->macro_buttons("yourCar", true);
        echo "
        </div>


        <!-- INSURANCE -->
        <div id=\"insurancePage\" class=\"page d-none\">
            ";
        // line 57
        echo $context["form"]->macro_title("Insurance info");
        echo "
            ";
        // line 58
        echo $context["form"]->macro_textInput("Policy provider", "policyProvider", ($context["policyProvider"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyProvider", array()));
        echo "
            ";
        // line 59
        echo $context["form"]->macro_textInput("Policy number", "policyNumber", ($context["policyNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyNumber", array()), "number");
        echo "
            ";
        // line 60
        echo $context["form"]->macro_upload("Insurance card", "insurance", ($context["insurance"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance", array()));
        echo "
            ";
        // line 61
        echo $context["form"]->macro_buttons("insurance", true);
        echo "
        </div>


            <!-- APPLICATION -->
        <div id=\"applicationPage\" class=\"page d-none\">
            ";
        // line 67
        echo $context["form"]->macro_title("Application");
        echo "
            ";
        // line 68
        echo $context["form"]->macro_upload("Upload a Photo of Yourself", "photo", ($context["photo"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "photo", array()));
        echo "
            ";
        // line 69
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ssn", array()));
        echo "
            ";
        // line 70
        echo $context["form"]->macro_upload("Upload W-9", "w9", ($context["w9"] ?? null), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "w9", array()), "<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.");
        echo "
            ";
        // line 71
        echo $context["form"]->macro_upload("Upload Resume", "resume", ($context["resume"] ?? null), "doc", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "resume", array()));
        echo "
            ";
        // line 72
        echo $context["form"]->macro_upload("Fingerprints", "fingerprints", ($context["fingerprints"] ?? null), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "fingerprints", array()), "You can get your fingerprints taken at the local police station. Scan the fingerprint document or upload a PDF.");
        echo "
            ";
        // line 73
        echo $context["form"]->macro_textArea("Felonies Committed, if applicable", "felonies", ($context["felonies"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "felonies", array()));
        echo "
            ";
        // line 74
        echo $context["form"]->macro_buttons("application", true);
        echo "
        </div>


        <!-- REFFERENCES -->
        <div id=\"referencesPage\" class=\"page d-none\">
            ";
        // line 80
        echo $context["form"]->macro_title("Please Provide Two References");
        echo "
            ";
        // line 81
        echo $context["form"]->macro_subHeading("Reference 1");
        echo "
            ";
        // line 82
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Name", array()));
        echo "
            ";
        // line 83
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Phone", array()));
        echo "
            ";
        // line 84
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Email", array()));
        echo "
            
            ";
        // line 86
        echo $context["form"]->macro_subHeading("Reference 2");
        echo "
            ";
        // line 87
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Name", array()));
        echo "
            ";
        // line 88
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Phone", array()));
        echo "
            ";
        // line 89
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Email", array()));
        echo "

            <input id=\"applicationKey\" name=\"applicationKey\" type=\"hidden\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["applicationKey"] ?? null), "html", null, true);
        echo "\">
            
            ";
        // line 93
        echo $context["form"]->macro_buttons("references", true, true);
        echo " ";
        // line 94
        echo "        </div>

    </form>

 ";
    }

    // line 101
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 102
        echo "    <script type=\"text/javascript\" src=\"/js/wizard.js\"></script>
    ";
        // line 104
        echo "    ";
        // line 105
        echo "    
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
        return array (  277 => 105,  275 => 104,  272 => 102,  269 => 101,  261 => 94,  258 => 93,  253 => 91,  248 => 89,  244 => 88,  240 => 87,  236 => 86,  231 => 84,  227 => 83,  223 => 82,  219 => 81,  215 => 80,  206 => 74,  202 => 73,  198 => 72,  194 => 71,  190 => 70,  186 => 69,  182 => 68,  178 => 67,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  144 => 51,  140 => 50,  135 => 49,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  62 => 24,  47 => 11,  42 => 7,  39 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig.html\" %}
{% import \"form_macros.twig.html\" as form %}

{% block title %}Register{% endblock %}

{% block content %}

<h1 class=\"fw-400 text-center\">Register</h1>

{# <div class=\"scoopm-box-DISABLED\"> #}

    <p id=\"progress-links\" class=\"h4 fw-400 text-center mt-4\">
        <a id=\"aboutYouLink\" href=\"#\" class=\"underlined page-visited\">About&nbsp;You</a>
        <span> &raquo; </span>
        <a id=\"yourCarLink\" href=\"#\">Your&nbsp;Car</a>
        <span> &raquo; </span>
        <a id=\"insuranceLink\" href=\"#\">Insurance&nbsp;Info</a>
        <span> &raquo; </span>
        <a id=\"applicationLink\" href=\"#\">Application</a><span> &raquo; </span><a id=\"referencesLink\" href=\"#\">References</a>
    </p>

    <br>

    <form id=\"form\" method=\"post\" action=\"{{ path_for('register') }}\"  enctype=\"multipart/form-data\" {% if errors %}class=\"scoopm-was-validated\"{% endif %} novalidate>
            

        <!-- ABOUT YOU -->
        <div id=\"aboutYouPage\" class=\"current-page page\">
            {{form.title('About You')}}  
            {{form.textInput('First Name', 'firstName', firstName, errors.firstName)}}
            {{form.textInput('Last Name', 'lastName', lastName, errors.lastName)}}
            {{form.textInput('Phone Number', 'phone', phone, errors.phone, 'tel')}}
            {{form.email('Email', 'email', email, errors.email)}}
            {{form.password('Password', 'password', password, errors.password)}}
            {{form.confirm('Confirm Password', 'confirmPassword', confirmPassword, errors.confirmPassword)}}
            {{form.buttons('aboutYou')}}
        </div>


        <!-- YOUR CAR -->
        <div id=\"yourCarPage\" class=\"page d-none\">
            {{form.title('About your car')}}  
            {{form.upload('Driver\\'s License', 'licenseImage', licenseImage, 'img', errors.licenseImage)}}
            {{form.upload('Registration', 'registration', registration, 'img', errors.registration)}}
            {{form.select('Year', 'year', errors.year)}}
            {{form.select('Make', 'make', errors.make)}}
            {{form.select('Model', 'model', errors.model)}}
            {# {{form.select('Trim', 'trim', errors.trim)}} #}
            {{form.select('Color', 'color', errors.color, [\"Beige\",\"Black\",\"Blue\",\"Brown\",\"Burgundy\",\"Charcoal\",\"Gold\",\"Gray\",\"Green\",\"Off White\",\"Orange\",\"Pink\",\"Purple\" ,\"Red\",\"Silver\",\"Tan\",\"Turquoise\",\"White\",\"Yellow\"], color)}}
            {{form.textInput('License plate number', 'licenseNumber', licenseNumber, errors.licenseNumber)}}
            {{form.buttons('yourCar', true)}}
        </div>


        <!-- INSURANCE -->
        <div id=\"insurancePage\" class=\"page d-none\">
            {{form.title('Insurance info')}}
            {{form.textInput('Policy provider', 'policyProvider', policyProvider, errors.policyProvider)}}
            {{form.textInput('Policy number', 'policyNumber', policyNumber, errors.policyNumber, 'number')}}
            {{form.upload('Insurance card', 'insurance', insurance, 'img', errors.insurance)}}
            {{form.buttons('insurance', true)}}
        </div>


            <!-- APPLICATION -->
        <div id=\"applicationPage\" class=\"page d-none\">
            {{form.title('Application')}}
            {{form.upload('Upload a Photo of Yourself', 'photo', photo, 'img', errors.photo)}}
            {{form.textInput('Social Security Number', 'ssn', ssn, errors.ssn)}}
            {{form.upload('Upload W-9', 'w9', w9, 'img/pdf', errors.w9, '<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.')}}
            {{form.upload('Upload Resume', 'resume', resume, 'doc', errors.resume)}}
            {{form.upload('Fingerprints', 'fingerprints', fingerprints, 'img/pdf', errors.fingerprints, 'You can get your fingerprints taken at the local police station. Scan the fingerprint document or upload a PDF.')}}
            {{form.textArea('Felonies Committed, if applicable', 'felonies', felonies, errors.felonies)}}
            {{form.buttons('application', true)}}
        </div>


        <!-- REFFERENCES -->
        <div id=\"referencesPage\" class=\"page d-none\">
            {{form.title('Please Provide Two References')}}
            {{form.subHeading('Reference 1')}}
            {{form.textInput('Name', 'ref1Name', ref1Name, errors.ref1Name)}}
            {{form.textInput('Phone Number', 'ref1Phone', ref1Phone, errors.ref1Phone)}}
            {{form.email('Email Address', 'ref1Email', ref1Email, errors.ref1Email)}}
            
            {{form.subHeading('Reference 2')}}
            {{form.textInput('Name', 'ref2Name', ref2Name, errors.ref2Name)}}
            {{form.textInput('Phone Number', 'ref2Phone', ref2Phone, errors.ref2Phone)}}
            {{form.email('Email Address', 'ref2Email', ref2Email, errors.ref2Email)}}

            <input id=\"applicationKey\" name=\"applicationKey\" type=\"hidden\" value=\"{{applicationKey}}\">
            
            {{form.buttons('references', true, true)}} {# SUBMIT #}
        </div>

    </form>

 {# </div>    #}
{% endblock %}

{% block body_scripts %}
    <script type=\"text/javascript\" src=\"/js/wizard.js\"></script>
    {# <script type=\"text/javascript\" src=\"/js/firebaseApplication.js\"></script> #}
    {# <script type=\"text/javascript\" src=\"/js/uploader.js\"></script> #}
    
{% endblock %}
", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
