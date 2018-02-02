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
<h1 class=\"fw-400 text-center\">Application</h1>

";
        // line 11
        echo "
    <p id=\"progress-links\" class=\"h6 text-center my-4 my-lg-5 ";
        // line 12
        if (($context["errors"] ?? null)) {
            echo "re-visit";
        }
        echo "\">
        <a id=\"aboutYouLink\" href=\"#\" class=\"underlined page-visited\">About&nbsp;You</a>
        <span> &raquo; </span><a id=\"yourCarLink\" href=\"#\">Your&nbsp;Car</a>
        <span> &raquo; </span><a id=\"insuranceLink\" href=\"#\">Insurance&nbsp;Info</a>
        <span> &raquo; </span><a id=\"applicationLink\" href=\"#\">Application</a>
        <span> &raquo; </span><a id=\"referencesLink\" href=\"#\">References</a>
        <span> &raquo; </span><a id=\"userAccountLink\" href=\"#\">User&nbsp;Account</a>
    </p>

    <br>

    <form id=\"application-form\" method=\"post\" action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\"  enctype=\"multipart/form-data\" ";
        if (($context["errors"] ?? null)) {
            echo "class=\"scoopm-was-validated\"";
        }
        echo " autocomplete=\"off\" novalidate>
            

        <!-- ABOUT YOU -->
        <div id=\"aboutYouPage\" class=\"current-page page\">
            ";
        // line 28
        echo $context["form"]->macro_title("About You");
        echo "  
            ";
        // line 29
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()));
        echo "
            ";
        // line 30
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "lastName", array()));
        echo "
            ";
        // line 31
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "phone", array()), "tel");
        echo "
            ";
        // line 32
        echo $context["form"]->macro_upload("Profile Photo", "photo", ($context["photo"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "photo", array()));
        echo "
            ";
        // line 33
        echo $context["form"]->macro_buttons("aboutYou");
        echo "
        </div>


        <!-- YOUR CAR -->
        <div id=\"yourCarPage\" class=\"page d-none\">
            ";
        // line 39
        echo $context["form"]->macro_title("About your car");
        echo "  
            ";
        // line 40
        echo $context["form"]->macro_upload("Driver's License", "licenseImage", ($context["licenseImage"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseImage", array()));
        echo "
            ";
        // line 41
        echo $context["form"]->macro_upload("Registration", "registration", ($context["registration"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration", array()));
        echo "
            ";
        // line 42
        echo $context["form"]->macro_select("Year", "year", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "year", array()));
        echo "
            ";
        // line 43
        echo $context["form"]->macro_select("Make", "make", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "make", array()));
        echo "
            ";
        // line 44
        echo $context["form"]->macro_select("Model", "model", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array()));
        echo "
            ";
        // line 46
        echo "            ";
        echo $context["form"]->macro_select("Color", "color", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "color", array()), array(0 => "Beige", 1 => "Black", 2 => "Blue", 3 => "Brown", 4 => "Burgundy", 5 => "Charcoal", 6 => "Gold", 7 => "Gray", 8 => "Green", 9 => "Off White", 10 => "Orange", 11 => "Pink", 12 => "Purple", 13 => "Red", 14 => "Silver", 15 => "Tan", 16 => "Turquoise", 17 => "White", 18 => "Yellow"), ($context["color"] ?? null));
        echo "
            ";
        // line 47
        echo $context["form"]->macro_textInput("License plate number", "licenseNumber", ($context["licenseNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseNumber", array()));
        echo "
            ";
        // line 48
        echo $context["form"]->macro_buttons("yourCar", true);
        echo "
        </div>


        <!-- INSURANCE -->
        <div id=\"insurancePage\" class=\"page d-none\">
            ";
        // line 54
        echo $context["form"]->macro_title("Insurance info");
        echo "
            ";
        // line 55
        echo $context["form"]->macro_textInput("Policy provider", "policyProvider", ($context["policyProvider"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyProvider", array()));
        echo "
            ";
        // line 56
        echo $context["form"]->macro_textInput("Policy number", "policyNumber", ($context["policyNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyNumber", array()), "number");
        echo "
            ";
        // line 57
        echo $context["form"]->macro_upload("Insurance card", "insurance", ($context["insurance"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance", array()));
        echo "
            ";
        // line 58
        echo $context["form"]->macro_buttons("insurance", true);
        echo "
        </div>


            <!-- APPLICATION -->
        <div id=\"applicationPage\" class=\"page d-none\">
            ";
        // line 64
        echo $context["form"]->macro_title("Application");
        echo "
            ";
        // line 65
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ssn", array()));
        echo "
            ";
        // line 66
        echo $context["form"]->macro_upload("Upload W-9", "w9", ($context["w9"] ?? null), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "w9", array()), "<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.");
        echo "
            ";
        // line 67
        echo $context["form"]->macro_upload("Upload Resume", "resume", ($context["resume"] ?? null), "doc", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "resume", array()));
        echo "
            ";
        // line 68
        echo $context["form"]->macro_upload("Fingerprints", "fingerprints", ($context["fingerprints"] ?? null), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "fingerprints", array()), "You can get your fingerprints taken at the local police station. Scan the fingerprint document or upload a PDF.");
        echo "
            ";
        // line 69
        echo $context["form"]->macro_textArea("Felonies Committed, if applicable", "felonies", ($context["felonies"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "felonies", array()));
        echo "
            ";
        // line 70
        echo $context["form"]->macro_buttons("application", true);
        echo "
        </div>


        <!-- REFFERENCES -->
        <div id=\"referencesPage\" class=\"page d-none\">
            ";
        // line 76
        echo $context["form"]->macro_title("Please Provide Two References");
        echo "
            ";
        // line 77
        echo $context["form"]->macro_subHeading("Reference 1");
        echo "
            ";
        // line 78
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Name", array()));
        echo "
            ";
        // line 79
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Phone", array()));
        echo "
            ";
        // line 80
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Email", array()));
        echo "
            
            ";
        // line 82
        echo $context["form"]->macro_subHeading("Reference 2");
        echo "
            ";
        // line 83
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Name", array()));
        echo "
            ";
        // line 84
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Phone", array()));
        echo "
            ";
        // line 85
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Email", array()));
        echo "
        
            ";
        // line 87
        echo $context["form"]->macro_buttons("references", true);
        echo "
        </div>

        <!-- USER ACCOUNT -->
        <div id=\"userAccountPage\" class=\"page d-none\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <div id=\"accountCard\" class=\"card mt-md-3 mb-md-5\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Create User Account</h5>
                            <p class=\"card-text\">
                                ";
        // line 98
        echo $context["form"]->macro_simpleTextInput("Email", "email", "tim@example.com", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array()));
        echo "
                                ";
        // line 99
        echo $context["form"]->macro_password("Password", "password", "123abc", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array()), true);
        echo "
                                ";
        // line 100
        echo $context["form"]->macro_password("Confirm Password", "confirmPassword", "123abc", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "confirmPassword", array()), true, true);
        echo "            
                            </p>
                            <div class=\"text-center\">
                                <button id=\"createAccount\" type=\"button\" class=\"btn btn-outline-primary my-1\" disabled>Create Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 110
        echo $context["form"]->macro_buttons("userAccount", true, true);
        echo " ";
        // line 111
        echo "        </div>

        <input id=\"userKey\" name=\"userKey\" type=\"hidden\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["userKey"] ?? null), "html", null, true);
        echo "\">
        <input id=\"userID\" name=\"userID\" type=\"hidden\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["userID"] ?? null), "html", null, true);
        echo "\">
        
    </form>

 ";
    }

    // line 121
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("body_scripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"/js/variables.js\"></script>
    <script type=\"text/javascript\" src=\"/js/wizard.js\"></script>
    <script type=\"text/javascript\" src=\"/js/form.js\"></script>
    <script type=\"text/javascript\" src=\"/js/uploader.js\"></script>
    <script type=\"text/javascript\" src=\"/js/firebaseUser.js\"></script>
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
        return array (  303 => 122,  300 => 121,  291 => 114,  287 => 113,  283 => 111,  280 => 110,  267 => 100,  263 => 99,  259 => 98,  245 => 87,  240 => 85,  236 => 84,  232 => 83,  228 => 82,  223 => 80,  219 => 79,  215 => 78,  211 => 77,  207 => 76,  198 => 70,  194 => 69,  190 => 68,  186 => 67,  182 => 66,  178 => 65,  174 => 64,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  140 => 48,  136 => 47,  131 => 46,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  66 => 23,  50 => 12,  47 => 11,  42 => 7,  39 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig.html\" %}
{% import \"form_macros.twig.html\" as form %}

{% block title %}Register{% endblock %}

{% block content %}

<h1 class=\"fw-400 text-center\">Application</h1>

{# <div class=\"scoopm-box-DISABLED\"> #}

    <p id=\"progress-links\" class=\"h6 text-center my-4 my-lg-5 {% if errors %}re-visit{% endif %}\">
        <a id=\"aboutYouLink\" href=\"#\" class=\"underlined page-visited\">About&nbsp;You</a>
        <span> &raquo; </span><a id=\"yourCarLink\" href=\"#\">Your&nbsp;Car</a>
        <span> &raquo; </span><a id=\"insuranceLink\" href=\"#\">Insurance&nbsp;Info</a>
        <span> &raquo; </span><a id=\"applicationLink\" href=\"#\">Application</a>
        <span> &raquo; </span><a id=\"referencesLink\" href=\"#\">References</a>
        <span> &raquo; </span><a id=\"userAccountLink\" href=\"#\">User&nbsp;Account</a>
    </p>

    <br>

    <form id=\"application-form\" method=\"post\" action=\"{{ path_for('register') }}\"  enctype=\"multipart/form-data\" {% if errors %}class=\"scoopm-was-validated\"{% endif %} autocomplete=\"off\" novalidate>
            

        <!-- ABOUT YOU -->
        <div id=\"aboutYouPage\" class=\"current-page page\">
            {{form.title('About You')}}  
            {{form.textInput('First Name', 'firstName', firstName, errors.firstName)}}
            {{form.textInput('Last Name', 'lastName', lastName, errors.lastName)}}
            {{form.textInput('Phone Number', 'phone', phone, errors.phone, 'tel')}}
            {{form.upload('Profile Photo', 'photo', photo, 'img', errors.photo)}}
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
        
            {{form.buttons('references', true)}}
        </div>

        <!-- USER ACCOUNT -->
        <div id=\"userAccountPage\" class=\"page d-none\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <div id=\"accountCard\" class=\"card mt-md-3 mb-md-5\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Create User Account</h5>
                            <p class=\"card-text\">
                                {{form.simpleTextInput('Email', 'email', \"tim@example.com\", errors.email)}}
                                {{form.password('Password', 'password', \"123abc\", errors.password, true)}}
                                {{form.password('Confirm Password', 'confirmPassword', \"123abc\", errors.confirmPassword, true, true)}}            
                            </p>
                            <div class=\"text-center\">
                                <button id=\"createAccount\" type=\"button\" class=\"btn btn-outline-primary my-1\" disabled>Create Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{form.buttons('userAccount', true, true)}} {# SUBMIT #}
        </div>

        <input id=\"userKey\" name=\"userKey\" type=\"hidden\" value=\"{{userKey}}\">
        <input id=\"userID\" name=\"userID\" type=\"hidden\" value=\"{{userID}}\">
        
    </form>

 {# </div>    #}
{% endblock %}

{% block body_scripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"/js/variables.js\"></script>
    <script type=\"text/javascript\" src=\"/js/wizard.js\"></script>
    <script type=\"text/javascript\" src=\"/js/form.js\"></script>
    <script type=\"text/javascript\" src=\"/js/uploader.js\"></script>
    <script type=\"text/javascript\" src=\"/js/firebaseUser.js\"></script>
{% endblock %}
", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
