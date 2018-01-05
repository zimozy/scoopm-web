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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Register | Scoopm";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Register</h1>

";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "firstName", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "firstName", array()), "html", null, true);
        }
        // line 9
        echo "
<form method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\">

    ";
        // line 12
        if ((($context["currentStep"] ?? null) == 1)) {
            // line 13
            echo "        <div class=\"container\">
            <h2>Info about you</h2>

            <div class=\"row\">
                <div class=\"col text-right\">First name</div>
                <div class=\"col\">
                    <div class=\"col\"><input name=\"firstName\" type=\"text\" placeholder=\"First name\"/></div>
                    ";
            // line 20
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "firstName", array()), "empty", array())) {
                echo "<div class=\"col alert-warning\">Required</div>";
            }
            // line 21
            echo "                </div>
            </div>

            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Last name</div>
                <div class=\"col\"><input name=\"lastName\" type=\"text\" placeholder=\"Last name\"/>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Email</div>
                <div class=\"col\"><input name=\"email\" type=\"text\" placeholder=\"Email\"/></div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Phone number</div>
                <div class=\"col\"><input name=\"phoneNumber\" type=\"text\" placeholder=\"Phone number\"/></div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Social Security number</div>
                <div class=\"col\"><input name=\"ssn\" type=\"text\" placeholder=\"Social Security number\"/></div>
            </div>

            <div class=\"row\">
                <input name=\"step\" type=\"hidden\" value=\"aboutYou\">
                <div class=\"col\"><button id=\"aboutYouNextButton\" value=\"test\">Next...</button></div>
            </div>
        </div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if ((($context["step"] ?? null) == 2)) {
            // line 55
            echo "        <div class=\"container\">
            <h2>About your car</h2>
            <div class=\"row\">
                <div class=\"col text-right\">Driver's license</div>
                <div class=\"col\"><button name=\"driversLicenseUpload\">Upload...</button></div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Registration</div>
                <div class=\"col\"><button name=\"registrationUpload\">Upload...</button></div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Vehicle make</div>
                <div class=\"col\">
                    <select>
                        <option value=\"test\">make...</option>
                    </select>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Vehicle model</div>
                <div class=\"col\">
                    <select>
                        <option value=\"test\">model...</option>
                    </select>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Color</div>
                <div class=\"col\">
                    <select>
                        <option value=\"test\">color...</option>
                    </select>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">License plate number</div>
                <div class=\"col\"><input name=\"licenseNumber\" type=\"text\" placeholder=\"License number\"></div>
            </div>

            <div class=\"row\">
                <input name=\"step\" type=\"aboutCar\" value=\"aboutYou\">
                <div class=\"col\"><button id=\"aboutCarNextButton\">Next...</button></div>
            </div>
        </div>
    ";
        }
        // line 105
        echo "
    ";
        // line 106
        if ((($context["step"] ?? null) == 3)) {
            // line 107
            echo "        <div class=\"container\">
            <h2>Insurance info</h2>
            <div class=\"row\">
                <div class=\"col text-right\">Insurance provider</div>
                <div class=\"col\">
                    <select>
                        <option value=\"test\">test</option>
                    </select>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Policy number</div>
                <div class=\"col\">
                    <input name=\"policyNumber\" type=\"text\" placeholder=\"Policy number\"/>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col text-right\">Insurance card</div>
                <div class=\"col\"><button name=\"insuranceUpload\">Upload...</button></div>
            </div>

            <div class=\"row\">
                <input name=\"step\" type=\"insuranceInfo\" value=\"aboutYou\">
                <div class=\"col\"><button id=\"submitButton\">Submit</button></div>
            </div>
        </div>
    ";
        }
        // line 136
        echo "
</form>

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
        return array (  196 => 136,  165 => 107,  163 => 106,  160 => 105,  108 => 55,  106 => 54,  103 => 53,  69 => 21,  65 => 20,  56 => 13,  54 => 12,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
