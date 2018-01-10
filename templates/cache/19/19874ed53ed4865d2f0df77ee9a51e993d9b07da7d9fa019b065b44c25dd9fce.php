<?php

/* base.twig.html */
class __TwigTemplate_6f6812ee07e0e5024e939c1d8f33effbe98f3af258d3c9d3d00847cdd48a7702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--<link href=\"../vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>-->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/fa/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "            </div>
        </div>
        
    </div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " | ScoopM";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  52 => 5,  43 => 17,  41 => 16,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig.html", "/var/www/scoopm/templates/base.twig.html");
    }
}
