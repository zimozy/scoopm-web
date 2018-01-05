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
        echo "Register";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container\">

    <br>

    <h1 class=\"display-4 text-center\">Register</h1>

    <br>

    <p class=\"h4 text-center\">
        <a id=\"aboutYouLink\" href=\"#\">About You</a> &raquo; <a href=\"\">Your Car</a> &raquo; <a href=\"\">Insurance Info</a> &raquo; <a href=\"\">Application</a>
    </p>
    
    <br>
</div>

<form id=\"needs-validation\" method=\"post\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("register"), "html", null, true);
        echo "\">

        <!-- ABOUT YOU -->
        <div id=\"aboutYou\" class=\"container d-none\">
            <h2>About You</h2>
            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">First Name</div>
                <div class=\"col\">
                    <input name=\"firstName\" type=\"text\" class=\"form-control\" placeholder=\"First Name\" required/>
                    <div class=\"invalid-feedback\">Required</div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Last Name</div>
                <div class=\"col\">
                        <input name=\"lastName\" type=\"text\" class=\"form-control\"  placeholder=\"Last Name\"/>
                        <div class=\"invalid-feedback\">Required</div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Phone Number</div>
                <div class=\"col\">
                        <input name=\"phone\" type=\"text\" class=\"form-control\"  placeholder=\"Phone Number\"/>
                        <div class=\"invalid-feedback\">Required</div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Email</div>
                <div class=\"col\">
                        <input name=\"email\" type=\"text\" class=\"form-control\"  placeholder=\"Email\"/>
                        <div class=\"invalid-feedback\">Required</div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Password</div>
                <div class=\"col\">
                        <input name=\"password\" type=\"text\" class=\"form-control\"  placeholder=\"Password\"/>
                        <div class=\"invalid-feedback\">Required</div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Confirm Password</div>
                <div class=\"col\">
                    <input name=\"confirmPassword\" type=\"text\" class=\"form-control\"  placeholder=\"Confirm Password\">
                    <div class=\"invalid-feedback\">Required</div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col\">
                    <button id=\"aboutCarNextButton\">Next...</button>
                </div>
            </div>
        </div>

        <!-- YOUR CAR -->
        <div id=\"aboutCar\" class=\"container d-none\">
            <h2>About your car</h2>
            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Driver's license</div>
                <div class=\"col\">
                    <button name=\"driversLicenseUpload\">Upload...</button>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Registration</div>
                <div class=\"col\"><button name=\"registrationUpload\">Upload...</button></div>
            </div>

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

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">License plate number</div>
                <div class=\"col\"><input name=\"licenseNumber\" type=\"text\" class=\"form-control\"  placeholder=\"License number\"></div>
            </div>

            <div class=\"form-group row\">
                <input name=\"step\" type=\"aboutCar\" value=\"aboutYou\">
                <div class=\"col\"><button id=\"aboutCarNextButton\">Next...</button></div>
            </div>
        </div>


        <!-- INSURANCE -->
        <div id=\"insuranceInfo\" class=\"container d-none\">
            <h2>Insurance info</h2>
            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Insurance provider</div>
                <div class=\"col\">
                    <select>
                        <option value=\"test\">test</option>
                    </select>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Policy number</div>
                <div class=\"col\">
                    <input name=\"policyNumber\" type=\"text\" class=\"form-control\"  placeholder=\"Policy number\"/>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Insurance card</div>
                <div class=\"col\"><button name=\"insuranceUpload\">Upload...</button></div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col\"><button id=\"submitButton\">Next...</button></div>
            </div>
        </div>


         <!-- APPLICATION -->
        <div id=\"applicationInfo\" class=\"container d-none\">
            <h2>Application</h2>
            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Social Security Number</div>
                <div class=\"col\">
                    <div class=\"col\">
                        <button name=\"ssn\">Upload...</button>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Upload a Photo of Yourself</div>
                <div class=\"col\">
                        <input name=\"lastName\" type=\"text\" class=\"form-control\"  placeholder=\"Last Name\"/>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Upload W-9</div>
                <div class=\"col\">
                    <div class=\"col\">
                        <button name=\"w9\">Upload...</button>
                        <p>
                            Download a blank copy of the W-9 <a href=\"\">here</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Upload Resume</div>
                <div class=\"col\">
                        <button name=\"resume\">Upload...</button>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\"></div>
                <div class=\"col\">
                        <h1>Please Provide Two References</h1>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Reference 1</div>
                <div class=\"col\">
                    <input name=\"ref1Name\" type=\"text\" class=\"form-control\"  placeholder=\"Name\" class=\"form-control\">
                    <input name=\"ref1Phone\" type=\"text\" class=\"form-control\"  placeholder=\"Phone Number\" class=\"form-control\">
                    <input name=\"ref1Email\" type=\"text\" class=\"form-control\"  placeholder=\"Email\" class=\"form-control\">
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-3 col-form-label text-right\">Reference 2</div>
                <div class=\"col\">
                    <input name=\"ref2Name\" type=\"text\" class=\"form-control\"  placeholder=\"Name\" class=\"form-control\">
                    <input name=\"ref2Phone\" type=\"text\" class=\"form-control\"  placeholder=\"Phone Number\" class=\"form-control\">
                    <input name=\"ref2Email\" type=\"text\" class=\"form-control\"  placeholder=\"Email\" class=\"form-control\">
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col\">
                    <button id=\"aboutCarNextButton\">Next...</button>
                </div>
            </div>
        </div>
</form>

<script>
\$('#aboutYouLink').on('click', function(e) {
    
    alert('hi');
    \$('\$aboutYou').removeClass('d-none');
});
</script>
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
        return array (  56 => 22,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register.twig.html", "/var/www/scoopm/templates/register.twig.html");
    }
}
