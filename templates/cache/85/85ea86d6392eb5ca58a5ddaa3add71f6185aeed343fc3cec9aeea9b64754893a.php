<?php

/* register.twig.html */
class __TwigTemplate_faeffdf24f59994b80868aafbb178680254091432d9fa792a9e8dc67374811e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "register.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_styles' => array($this, 'block_head_styles'),
            'body_class' => array($this, 'block_body_class'),
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
        $context["form"] = $this->loadTemplate("form_macros.twig.html", "register.twig.html", 2);
        // line 10
        $context["theStates"] = array("AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" => "California", "CO" => "Colorado", "CT" => "Connecticut", "DE" => "Delaware", "DC" => "District Of Columbia", "FL" => "Florida", "GA" => "Georgia", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana", "IA" => "Iowa", "KS" => "Kansas", "KY" => "Kentucky", "LA" => "Louisiana", "ME" => "Maine", "MD" => "Maryland", "MA" => "Massachusetts", "MI" => "Michigan", "MN" => "Minnesota", "MS" => "Mississippi", "MO" => "Missouri", "MT" => "Montana", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire", "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota", "OH" => "Ohio", "OK" => "Oklahoma", "OR" => "Oregon", "PA" => "Pennsylvania", "RI" => "Rhode Island", "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX" => "Texas", "UT" => "Utah", "VT" => "Vermont", "VA" => "Virginia", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin", "WY" => "Wyoming");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Register";
    }

    // line 6
    public function block_head_styles($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"/css/register.css\">
";
    }

    // line 12
    public function block_body_class($context, array $blocks = array())
    {
        echo "class=\"register\"";
    }

    // line 14
    public function block_body_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div id=\"mainContainer\" class=\"col-md-10 offset-md-1 col-lg-8 offset-lg-2\">

            <div class=\"text-center mb-4\">
                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\" class=\"h1 d-inline logo-font blue-text\">ScoopM</a>
                <span>&nbsp;&nbsp;</span>
                <span class=\"h3 d-inline\">Driver&nbsp;Application</span>
            </div>

            <div id=\"progress-links\" class=\"row\"> ";
        // line 26
        echo "                ";
        // line 27
        echo "                    <div class=\"col-sm\">
                        <a id=\"aboutYouLink\" href=\"#\" class=\"current-page page-visited\"><span class=\"circle\">1</span><span class=\"link\">About&nbsp;You</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"yourCarLink\" href=\"#\"><span class=\"circle\">2</span><span class=\"link\">Your&nbsp;Car</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"insuranceLink\" href=\"#\"><span class=\"circle\">3</span><span class=\"link\">Insurance&nbsp;Info</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"applicationLink\" href=\"#\"><span class=\"circle\">4</span><span class=\"link\">Application</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"referencesLink\" href=\"#\"><span class=\"circle\">5</span><span class=\"link\">References</span></a>
                    </div>
                ";
        // line 43
        echo "            </div>

            <div class=\"clearfix\"></div>

            <form id=\"application-form\" method=\"post\" action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\"  enctype=\"multipart/form-data\" ";
        if (($context["errors"] ?? null)) {
            echo "class=\"scoopm-was-validated\"";
        }
        echo " autocomplete=\"off\" novalidate>
                    
                <input type=\"submit\">

                <!-- ABOUT YOU -->
                <div id=\"aboutYouPage\" class=\"current-page page\">

                    ";
        // line 54
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "userID", array()), "empty", array())) {
            // line 55
            echo "                        <h6 class=\"error scoopm-is-invalid my-4\">Woops, something went wrong. If you have disabled JavaScript in your web browser, please enable it and try again. If the problem continues, please contact us.</h6>
                    ";
        }
        // line 57
        echo "
                    ";
        // line 58
        echo $context["form"]->macro_title("About You");
        echo "  
                    ";
        // line 59
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()));
        echo "
                    ";
        // line 60
        echo $context["form"]->macro_textInput("Middle Name", "middleName", ($context["middleName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "middleName", array()));
        echo "
                    ";
        // line 61
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "lastName", array()));
        echo "
                    ";
        // line 62
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "phone", array()), null, "tel");
        echo "

                    ";
        // line 64
        echo $context["form"]->macro_textInput("Street Address", "address", ($context["address"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "address", array()));
        echo "
                    ";
        // line 65
        echo $context["form"]->macro_textInput("City", "city", ($context["city"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "city", array()));
        echo "
                    ";
        // line 66
        echo $context["form"]->macro_select("State", "state", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "state", array()), ($context["theStates"] ?? null), ($context["state"] ?? null));
        echo "
                    ";
        // line 67
        echo $context["form"]->macro_textInput("ZIP Code", "zip", ($context["zip"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "zip", array()), null, "number");
        echo "

                    ";
        // line 69
        echo $context["form"]->macro_textInput("Date of Birth", "dob", ($context["dob"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array()), "If typing: YYYY-MM-DD", "date");
        echo "

                    ";
        // line 71
        echo $context["form"]->macro_upload("Profile Photo", "photo", ($context["photo"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "photo", array()));
        echo "

                    ";
        // line 73
        echo $context["form"]->macro_buttons("aboutYou");
        echo "
                </div>


                <!-- YOUR CAR -->
                <div id=\"yourCarPage\" class=\"page\">
                    ";
        // line 79
        echo $context["form"]->macro_title("About your car");
        echo "  
                    
                    ";
        // line 81
        echo $context["form"]->macro_upload("Driver's License", "licenseImage", ($context["licenseImage"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseImage", array()));
        echo "
                    ";
        // line 82
        echo $context["form"]->macro_textInput("Driver's License Number", "licenseNumber", ($context["licenseNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseNumber", array()));
        echo "
                    ";
        // line 83
        echo $context["form"]->macro_select("Driver's License State", "licenseState", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licenseState", array()), ($context["theStates"] ?? null), ($context["licenseState"] ?? null));
        echo "

                    ";
        // line 85
        echo $context["form"]->macro_upload("Registration", "registration", ($context["registration"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration", array()));
        echo "
                    
                    ";
        // line 87
        echo $context["form"]->macro_select("Year", "year", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "year", array()));
        echo "
                    ";
        // line 88
        echo $context["form"]->macro_select("Make", "make", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "make", array()));
        echo "
                    ";
        // line 89
        echo $context["form"]->macro_select("Model", "model", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array()));
        echo "
                    ";
        // line 91
        echo "                    ";
        echo $context["form"]->macro_select("Color", "color", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "color", array()), array("Beige" => "Beige", "Black" => "Black", "Blue" => "Blue", "Brown" => "Brown", "Burgundy" => "Burgundy", "Charcoal" => "Charcoal", "Gold" => "Gold", "Gray" => "Gray", "Green" => "Green", "Off White" => "Off White", "Orange" => "Orange", "Pink" => "Pink", "Purple" => "Purple", "Red" => "Red", "Silver" => "Silver", "Tan" => "Tan", "Turquoise" => "Turquoise", "White" => "White", "Yellow" => "White"),         // line 111
($context["color"] ?? null));
        echo "
                    
                    ";
        // line 113
        echo $context["form"]->macro_textInput("License Plate Number", "licensePlateNumber", ($context["licensePlateNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "licensePlateNumber", array()));
        echo "

                    ";
        // line 115
        echo $context["form"]->macro_buttons("yourCar", true);
        echo "
                </div>


                <!-- INSURANCE -->
                <div id=\"insurancePage\" class=\"page\">
                    ";
        // line 121
        echo $context["form"]->macro_title("Insurance info");
        echo "
                    ";
        // line 122
        echo $context["form"]->macro_textInput("Policy provider", "policyProvider", ($context["policyProvider"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyProvider", array()));
        echo "
                    ";
        // line 123
        echo $context["form"]->macro_textInput("Policy number", "policyNumber", ($context["policyNumber"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "policyNumber", array()));
        echo "
                    ";
        // line 124
        echo $context["form"]->macro_upload("Insurance card", "insuranceImage", ($context["insuranceImage"] ?? null), "img", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance", array()));
        echo "
                    ";
        // line 125
        echo $context["form"]->macro_buttons("insurance", true);
        echo "
                    <!-- <div style=\"position: absolute; top:100%; height:600px;\">&nbsp;</div> -->
                </div>


                    <!-- APPLICATION -->
                <div id=\"applicationPage\" class=\"page\">
                    ";
        // line 132
        echo $context["form"]->macro_title("Application");
        echo "
                    ";
        // line 133
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ssn", array()), "Format: ###-##-####");
        echo "
                    ";
        // line 134
        echo $context["form"]->macro_upload("Upload W-9", "w9", ($context["w9"] ?? null), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "w9", array()), "<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.");
        echo "
                    ";
        // line 135
        echo $context["form"]->macro_upload("Upload Resume", "resume", ($context["resume"] ?? null), "doc", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "resume", array()));
        echo "
                    ";
        // line 136
        echo $context["form"]->macro_upload("Fingerprints", "fingerprints", ($context["fingerprints"] ?? null), "img/pdf", twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "fingerprints", array()), "You can get your fingerprints taken at the local police station. Scan the fingerprint document or upload a PDF.");
        echo "
                    ";
        // line 137
        echo $context["form"]->macro_textArea("Felonies Committed, if applicable", "felonies", ($context["felonies"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "felonies", array()));
        echo "
                    ";
        // line 138
        echo $context["form"]->macro_agreement("Background Check", "backgroundCheck", ($context["backgroundCheck"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "backgroundCheck", array()));
        echo "
                    ";
        // line 139
        echo $context["form"]->macro_buttons("application", true);
        echo "
                </div>


                <!-- REFFERENCES -->
                <div id=\"referencesPage\" class=\"page\">
                    ";
        // line 145
        echo $context["form"]->macro_heading("Please provide two references.");
        echo "
                    ";
        // line 146
        echo $context["form"]->macro_subHeading("Reference 1");
        echo "
                    ";
        // line 147
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Name", array()));
        echo "
                    ";
        // line 148
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Phone", array()), null, "tel");
        echo "
                    ";
        // line 149
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref1Email", array()));
        echo "
                    
                    ";
        // line 151
        echo $context["form"]->macro_subHeading("Reference 2");
        echo "
                    ";
        // line 152
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Name", array()));
        echo "
                    ";
        // line 153
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Phone", array()), null, "tel");
        echo "
                    ";
        // line 154
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "ref2Email", array()));
        echo "
                
                    ";
        // line 157
        echo "
                    ";
        // line 158
        if ((((((( !($context["photo"] ?? null) ||  !($context["licenseImage"] ?? null)) ||  !($context["registration"] ?? null)) ||  !($context["insuranceImage"] ?? null)) ||  !($context["w9"] ?? null)) ||  !($context["resume"] ?? null)) ||  !($context["fingerprints"] ?? null))) {
            // line 159
            echo "                        ";
            $context["disabled"] = "disabled";
            // line 160
            echo "                    ";
        }
        // line 161
        echo "
                    ";
        // line 162
        echo $context["form"]->macro_buttons("userAccount", true, true, ($context["disabled"] ?? null));
        echo " ";
        // line 163
        echo "
                </div>

                ";
        // line 188
        echo "
                <input id=\"email\" name=\"email\" type=\"hidden\">
                
                ";
        // line 192
        echo "                <input id=\"userID\" name=\"userID\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, ($context["userID"] ?? null), "html", null, true);
        echo "\">
                
            </form>

        </div>
    </div>
</div>
 ";
    }

    // line 202
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 203
        echo "    ";
        $this->displayParentBlock("body_scripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"/js/variables.js\"></script>
    <script type=\"text/javascript\" src=\"/js/wizard.js\"></script>
    <script type=\"text/javascript\" src=\"/js/form.js\"></script>
    <script type=\"text/javascript\" src=\"/js/uploader.js\"></script>
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
        return array (  380 => 203,  377 => 202,  364 => 192,  359 => 188,  354 => 163,  351 => 162,  348 => 161,  345 => 160,  342 => 159,  340 => 158,  337 => 157,  332 => 154,  328 => 153,  324 => 152,  320 => 151,  315 => 149,  311 => 148,  307 => 147,  303 => 146,  299 => 145,  290 => 139,  286 => 138,  282 => 137,  278 => 136,  274 => 135,  270 => 134,  266 => 133,  262 => 132,  252 => 125,  248 => 124,  244 => 123,  240 => 122,  236 => 121,  227 => 115,  222 => 113,  217 => 111,  215 => 91,  211 => 89,  207 => 88,  203 => 87,  198 => 85,  193 => 83,  189 => 82,  185 => 81,  180 => 79,  171 => 73,  166 => 71,  161 => 69,  156 => 67,  152 => 66,  148 => 65,  144 => 64,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  120 => 57,  116 => 55,  114 => 54,  100 => 47,  94 => 43,  77 => 27,  75 => 26,  67 => 20,  60 => 15,  57 => 14,  51 => 12,  46 => 7,  43 => 6,  37 => 4,  33 => 1,  31 => 10,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.twig.html\" %}
{% import \"form_macros.twig.html\" as form %}

{% block title %}Register{% endblock %}

{% block head_styles %}
    <link rel=\"stylesheet\" href=\"/css/register.css\">
{% endblock %}

{% set theStates = { 'AL': 'Alabama', 'AK': 'Alaska', 'AZ': 'Arizona', 'AR': 'Arkansas', 'CA': 'California', 'CO': 'Colorado', 'CT': 'Connecticut', 'DE': 'Delaware', 'DC': 'District Of Columbia', 'FL': 'Florida', 'GA': 'Georgia', 'HI': 'Hawaii', 'ID': 'Idaho', 'IL': 'Illinois', 'IN': 'Indiana', 'IA': 'Iowa', 'KS': 'Kansas', 'KY': 'Kentucky', 'LA': 'Louisiana', 'ME': 'Maine', 'MD': 'Maryland', 'MA': 'Massachusetts', 'MI': 'Michigan', 'MN': 'Minnesota', 'MS': 'Mississippi', 'MO': 'Missouri', 'MT': 'Montana', 'NE': 'Nebraska', 'NV': 'Nevada', 'NH': 'New Hampshire', 'NJ': 'New Jersey', 'NM': 'New Mexico', 'NY': 'New York', 'NC': 'North Carolina', 'ND': 'North Dakota', 'OH': 'Ohio', 'OK': 'Oklahoma', 'OR': 'Oregon', 'PA': 'Pennsylvania', 'RI': 'Rhode Island', 'SC': 'South Carolina', 'SD': 'South Dakota', 'TN': 'Tennessee', 'TX': 'Texas', 'UT': 'Utah', 'VT': 'Vermont', 'VA': 'Virginia', 'WA': 'Washington', 'WV': 'West Virginia', 'WI': 'Wisconsin', 'WY': 'Wyoming' } %}

{% block body_class %}class=\"register\"{% endblock %}

{% block body_content %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div id=\"mainContainer\" class=\"col-md-10 offset-md-1 col-lg-8 offset-lg-2\">

            <div class=\"text-center mb-4\">
                <a href=\"{{path_for('home')}}\" class=\"h1 d-inline logo-font blue-text\">ScoopM</a>
                <span>&nbsp;&nbsp;</span>
                <span class=\"h3 d-inline\">Driver&nbsp;Application</span>
            </div>

            <div id=\"progress-links\" class=\"row\"> {# {% if errors %}DISABLE-re-visit{% endif %} #}
                {# <div> #}
                    <div class=\"col-sm\">
                        <a id=\"aboutYouLink\" href=\"#\" class=\"current-page page-visited\"><span class=\"circle\">1</span><span class=\"link\">About&nbsp;You</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"yourCarLink\" href=\"#\"><span class=\"circle\">2</span><span class=\"link\">Your&nbsp;Car</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"insuranceLink\" href=\"#\"><span class=\"circle\">3</span><span class=\"link\">Insurance&nbsp;Info</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"applicationLink\" href=\"#\"><span class=\"circle\">4</span><span class=\"link\">Application</span></a>
                    </div>
                    <div class=\"col-sm\">
                        <a id=\"referencesLink\" href=\"#\"><span class=\"circle\">5</span><span class=\"link\">References</span></a>
                    </div>
                {# </div> #}
            </div>

            <div class=\"clearfix\"></div>

            <form id=\"application-form\" method=\"post\" action=\"{{ path_for('register') }}\"  enctype=\"multipart/form-data\" {% if errors %}class=\"scoopm-was-validated\"{% endif %} autocomplete=\"off\" novalidate>
                    
                <input type=\"submit\">

                <!-- ABOUT YOU -->
                <div id=\"aboutYouPage\" class=\"current-page page\">

                    {% if errors.userID.empty %}
                        <h6 class=\"error scoopm-is-invalid my-4\">Woops, something went wrong. If you have disabled JavaScript in your web browser, please enable it and try again. If the problem continues, please contact us.</h6>
                    {% endif %}

                    {{form.title('About You')}}  
                    {{form.textInput('First Name', 'firstName', firstName, errors.firstName)}}
                    {{form.textInput('Middle Name', 'middleName', middleName, errors.middleName)}}
                    {{form.textInput('Last Name', 'lastName', lastName, errors.lastName)}}
                    {{form.textInput('Phone Number', 'phone', phone, errors.phone, null, 'tel')}}

                    {{form.textInput('Street Address', 'address', address, errors.address)}}
                    {{form.textInput('City', 'city', city, errors.city)}}
                    {{form.select('State', 'state', errors.state, theStates, state)}}
                    {{form.textInput('ZIP Code', 'zip', zip, errors.zip, null, 'number')}}

                    {{form.textInput('Date of Birth', 'dob', dob, errors.dob, 'If typing: YYYY-MM-DD', 'date')}}

                    {{form.upload('Profile Photo', 'photo', photo, 'img', errors.photo)}}

                    {{form.buttons('aboutYou')}}
                </div>


                <!-- YOUR CAR -->
                <div id=\"yourCarPage\" class=\"page\">
                    {{form.title('About your car')}}  
                    
                    {{form.upload('Driver\\'s License', 'licenseImage', licenseImage, 'img', errors.licenseImage)}}
                    {{form.textInput('Driver\\'s License Number', 'licenseNumber', licenseNumber, errors.licenseNumber)}}
                    {{form.select('Driver\\'s License State', 'licenseState', errors.licenseState, theStates, licenseState)}}

                    {{form.upload('Registration', 'registration', registration, 'img', errors.registration)}}
                    
                    {{form.select('Year', 'year', errors.year)}}
                    {{form.select('Make', 'make', errors.make)}}
                    {{form.select('Model', 'model', errors.model)}}
                    {# {{form.select('Trim', 'trim', errors.trim)}} #}
                    {{form.select('Color', 'color', errors.color, {
                        'Beige': 'Beige',
                        'Black': 'Black',
                        'Blue': 'Blue',
                        'Brown': 'Brown',
                        'Burgundy': 'Burgundy',
                        'Charcoal': 'Charcoal',
                        'Gold': 'Gold',
                        'Gray': 'Gray',
                        'Green': 'Green',
                        'Off White': 'Off White',
                        'Orange': 'Orange',
                        'Pink': 'Pink',
                        'Purple': 'Purple',
                        'Red': 'Red',
                        'Silver': 'Silver',
                        'Tan': 'Tan',
                        'Turquoise': 'Turquoise',
                        'White': 'White',
                        'Yellow': 'White'
                    }, color)}}
                    
                    {{form.textInput('License Plate Number', 'licensePlateNumber', licensePlateNumber, errors.licensePlateNumber)}}

                    {{form.buttons('yourCar', true)}}
                </div>


                <!-- INSURANCE -->
                <div id=\"insurancePage\" class=\"page\">
                    {{form.title('Insurance info')}}
                    {{form.textInput('Policy provider', 'policyProvider', policyProvider, errors.policyProvider)}}
                    {{form.textInput('Policy number', 'policyNumber', policyNumber, errors.policyNumber)}}
                    {{form.upload('Insurance card', 'insuranceImage', insuranceImage, 'img', errors.insurance)}}
                    {{form.buttons('insurance', true)}}
                    <!-- <div style=\"position: absolute; top:100%; height:600px;\">&nbsp;</div> -->
                </div>


                    <!-- APPLICATION -->
                <div id=\"applicationPage\" class=\"page\">
                    {{form.title('Application')}}
                    {{form.textInput('Social Security Number', 'ssn', ssn, errors.ssn, 'Format: ###-##-####')}}
                    {{form.upload('Upload W-9', 'w9', w9, 'img/pdf', errors.w9, '<a href=\"https://www.irs.gov/pub/irs-pdf/fw9.pdf\"  target=\"_blank\">Download</a> and fill out a blank copy of the W-9.')}}
                    {{form.upload('Upload Resume', 'resume', resume, 'doc', errors.resume)}}
                    {{form.upload('Fingerprints', 'fingerprints', fingerprints, 'img/pdf', errors.fingerprints, 'You can get your fingerprints taken at the local police station. Scan the fingerprint document or upload a PDF.')}}
                    {{form.textArea('Felonies Committed, if applicable', 'felonies', felonies, errors.felonies)}}
                    {{form.agreement('Background Check', 'backgroundCheck', backgroundCheck, errors.backgroundCheck)}}
                    {{form.buttons('application', true)}}
                </div>


                <!-- REFFERENCES -->
                <div id=\"referencesPage\" class=\"page\">
                    {{form.heading('Please provide two references.')}}
                    {{form.subHeading('Reference 1')}}
                    {{form.textInput('Name', 'ref1Name', ref1Name, errors.ref1Name)}}
                    {{form.textInput('Phone Number', 'ref1Phone', ref1Phone, errors.ref1Phone, null, 'tel')}}
                    {{form.email('Email Address', 'ref1Email', ref1Email, errors.ref1Email)}}
                    
                    {{form.subHeading('Reference 2')}}
                    {{form.textInput('Name', 'ref2Name', ref2Name, errors.ref2Name)}}
                    {{form.textInput('Phone Number', 'ref2Phone', ref2Phone, errors.ref2Phone, null, 'tel')}}
                    {{form.email('Email Address', 'ref2Email', ref2Email, errors.ref2Email)}}
                
                    {# {{form.buttons('references', true)}} #}

                    {% if not photo or not licenseImage or not registration or not insuranceImage or not w9 or not resume or not fingerprints  %}
                        {% set disabled = 'disabled' %}
                    {% endif %}

                    {{form.buttons('userAccount', true, true, disabled)}} {# SUBMIT #}

                </div>

                {# <!-- USER ACCOUNT -->
                <div id=\"userAccountPage\" class=\"page\">
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

                    {{form.buttons('userAccount', true, true)}} {# SUBMIT
                </div> #}

                <input id=\"email\" name=\"email\" type=\"hidden\">
                
                {# <input id=\"userKey\" name=\"userKey\" type=\"hidden\" value=\"{{userKey}}\"> #}
                <input id=\"userID\" name=\"userID\" type=\"hidden\" value=\"{{userID}}\">
                
            </form>

        </div>
    </div>
</div>
 {# </div>    #}
{% endblock %}

{% block body_scripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"/js/variables.js\"></script>
    <script type=\"text/javascript\" src=\"/js/wizard.js\"></script>
    <script type=\"text/javascript\" src=\"/js/form.js\"></script>
    <script type=\"text/javascript\" src=\"/js/uploader.js\"></script>
{% endblock %}
", "register.twig.html", "/var/www/templates/register.twig.html");
    }
}
