<?php

/* register.twig.html */
class __TwigTemplate_f0c185b9a4e00e1a19365c36c3b168aece165c5e80465094346ced322e020471 extends Twig_Template
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
<br>
<p id=\"progressLinks\" class=\"h3 text-center text-muted\">
    <a id=\"aboutYouLink\" href=\"#\" class=\"underlined\">About You</a> &raquo; <a id=\"yourCarLink\" href=\"#\" class=\"text-muted\">Your Car</a> &raquo; <a id=\"insuranceLink\" href=\"#\" class=\"text-muted\">Insurance Info</a> &raquo; <a id=\"applicationLink\" href=\"#\" class=\"text-muted\">Application</a>
</p>
<br>


<form id=\"needs-validation\" method=\"post\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\">

    <!-- ABOUT YOU -->
    <div id=\"aboutYouPage\" class=\"current-page\">
        ";
        // line 21
        echo $context["form"]->macro_title("About You");
        echo "  
        ";
        // line 22
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null));
        echo "
        ";
        // line 23
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null));
        echo "
        ";
        // line 24
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null));
        echo "
        ";
        // line 25
        echo $context["form"]->macro_email("Email", "email", ($context["email"] ?? null));
        echo "
        ";
        // line 26
        echo $context["form"]->macro_password("Password", "password", ($context["password"] ?? null));
        echo "
        ";
        // line 27
        echo $context["form"]->macro_confirm("Confirm Password", "confirmPassword", ($context["confirmPassword"] ?? null));
        echo "

        ";
        // line 29
        echo $context["form"]->macro_buttons("aboutYou");
        echo "
    </div>

    <!-- YOUR CAR -->
    <div id=\"yourCarPage\" class=\"container d-none\">
        ";
        // line 34
        echo $context["form"]->macro_title("About your car");
        echo "  
        ";
        // line 35
        echo $context["form"]->macro_upload("Driver's License", "driversLicenseUpload");
        echo "
        ";
        // line 36
        echo $context["form"]->macro_upload("Registration", "registrationUpload");
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
        // line 63
        echo $context["form"]->macro_textInput("License plate number", "licenseNumber", ($context["licenseNumber"] ?? null));
        echo "
        ";
        // line 64
        echo $context["form"]->macro_buttons("yourCar", true);
        echo "
    </div>


    <!-- INSURANCE -->
    <div id=\"insurancePage\" class=\"container d-none\">
        ";
        // line 70
        echo $context["form"]->macro_title("Insurance info");
        echo "
        ";
        // line 71
        echo $context["form"]->macro_email("Email", "email", ($context["email"] ?? null));
        echo "
        ";
        // line 72
        echo $context["form"]->macro_select("Policy number", "policyNumber", array());
        echo "
        ";
        // line 73
        echo $context["form"]->macro_upload("Insurance card", "insuranceUpload");
        echo "
        ";
        // line 74
        echo $context["form"]->macro_buttons("insurance", true);
        echo "
    </div>


        <!-- APPLICATION -->
    <div id=\"applicationPage\" class=\"container d-none\">
        ";
        // line 80
        echo $context["form"]->macro_title("Application");
        echo "
        ";
        // line 81
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null));
        echo "
        ";
        // line 82
        echo $context["form"]->macro_upload("Upload a Photo of Yourself", "photoUpload");
        echo "
        ";
        // line 83
        echo $context["form"]->macro_upload("Upload W-9", "w9Upload", "Download a blank copy of the W-9 <a href=\"\">here</a>.");
        echo "
        ";
        // line 84
        echo $context["form"]->macro_upload("Upload Resume", "resumeUpload");
        echo "

        ";
        // line 86
        echo $context["form"]->macro_heading("Please Provide Two References");
        echo "
        ";
        // line 87
        echo $context["form"]->macro_subHeading("Reference 1");
        echo "
        ";
        // line 88
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null));
        echo "
        ";
        // line 89
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null));
        echo "
        ";
        // line 90
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null));
        echo "
        
        ";
        // line 92
        echo $context["form"]->macro_subHeading("Reference 2");
        echo "
        ";
        // line 93
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null));
        echo "
        ";
        // line 94
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null));
        echo "
        ";
        // line 95
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null));
        echo "

        ";
        // line 97
        echo $context["form"]->macro_buttons("application", true, true);
        echo "
    </div>
</form>
 
<script type=\"text/javascript\" src=\"/js/scoopm.js\"></script>

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
        return array (  232 => 97,  227 => 95,  223 => 94,  219 => 93,  215 => 92,  210 => 90,  206 => 89,  202 => 88,  198 => 87,  194 => 86,  189 => 84,  185 => 83,  181 => 82,  177 => 81,  173 => 80,  164 => 74,  160 => 73,  156 => 72,  152 => 71,  148 => 70,  139 => 64,  135 => 63,  105 => 36,  101 => 35,  97 => 34,  89 => 29,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  53 => 17,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
