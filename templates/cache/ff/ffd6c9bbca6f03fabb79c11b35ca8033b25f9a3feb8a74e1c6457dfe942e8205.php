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
<h1>";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()), "empty", array())) {
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
        echo "\"  enctype=\"multipart/form-data\" novalidate>
    <input type=\"submit\"/>

    <!-- ABOUT YOU -->
    <div id=\"aboutYouPage\" class=\"current-page page\">
            ";
        // line 23
        echo twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "name", array()), "empty", array());
        echo "
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "name", array()), "empty", array())) {
            echo "test ";
        }
        // line 25
        echo "        ";
        echo $context["form"]->macro_title("About You");
        echo "  
        ";
        // line 26
        echo $context["form"]->macro_textInput("First Name", "firstName", ($context["firstName"] ?? null));
        echo "
        ";
        // line 27
        echo $context["form"]->macro_textInput("Last Name", "lastName", ($context["lastName"] ?? null));
        echo "
        ";
        // line 28
        echo $context["form"]->macro_textInput("Phone Number", "phone", ($context["phone"] ?? null));
        echo "
        ";
        // line 29
        echo $context["form"]->macro_email("Email", "email", ($context["email"] ?? null));
        echo "
        ";
        // line 30
        echo $context["form"]->macro_password("Password", "password", ($context["password"] ?? null));
        echo "
        ";
        // line 31
        echo $context["form"]->macro_confirm("Confirm Password", "confirmPassword", ($context["confirmPassword"] ?? null));
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
        echo $context["form"]->macro_upload("Driver's License", "licenseImage");
        echo "
        ";
        // line 40
        echo $context["form"]->macro_upload("Registration", "registration");
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
        echo $context["form"]->macro_textInput("License plate number", "licenseNumber", ($context["licenseNumber"] ?? null));
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
        echo $context["form"]->macro_textInput("Policy Provider", "provider", ($context["provider"] ?? null));
        echo "
        ";
        // line 76
        echo $context["form"]->macro_select("Policy number", "policyNumber", array());
        echo "
        ";
        // line 77
        echo $context["form"]->macro_upload("Insurance card", "insurance");
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
        echo $context["form"]->macro_textInput("Social Security Number", "ssn", ($context["ssn"] ?? null));
        echo "
        ";
        // line 87
        echo $context["form"]->macro_upload("Upload a Photo of Yourself", "photo");
        echo "
        ";
        // line 88
        echo $context["form"]->macro_upload("Upload W-9", "w9", "Download a blank copy of the W-9 <a href=\"\">here</a>.");
        echo "
        ";
        // line 89
        echo $context["form"]->macro_upload("Upload Resume", "resume");
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
        echo $context["form"]->macro_textInput("Name", "ref1Name", ($context["ref1Name"] ?? null));
        echo "
        ";
        // line 94
        echo $context["form"]->macro_textInput("Phone Number", "ref1Phone", ($context["ref1Phone"] ?? null));
        echo "
        ";
        // line 95
        echo $context["form"]->macro_email("Email Address", "ref1Email", ($context["ref1Email"] ?? null));
        echo "
        
        ";
        // line 97
        echo $context["form"]->macro_subHeading("<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Reference 2");
        echo "
        ";
        // line 98
        echo $context["form"]->macro_textInput("Name", "ref2Name", ($context["ref2Name"] ?? null));
        echo "
        ";
        // line 99
        echo $context["form"]->macro_textInput("Phone Number", "ref2Phone", ($context["ref2Phone"] ?? null));
        echo "
        ";
        // line 100
        echo $context["form"]->macro_email("Email Address", "ref2Email", ($context["ref2Email"] ?? null));
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
        return array (  249 => 102,  244 => 100,  240 => 99,  236 => 98,  232 => 97,  227 => 95,  223 => 94,  219 => 93,  215 => 92,  211 => 91,  206 => 89,  202 => 88,  198 => 87,  194 => 86,  189 => 84,  180 => 78,  176 => 77,  172 => 76,  168 => 75,  164 => 74,  155 => 68,  151 => 67,  121 => 40,  117 => 39,  113 => 38,  105 => 33,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  75 => 25,  71 => 24,  67 => 23,  59 => 18,  46 => 10,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
