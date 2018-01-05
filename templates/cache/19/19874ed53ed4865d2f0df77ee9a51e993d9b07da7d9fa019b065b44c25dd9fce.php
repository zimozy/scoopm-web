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
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">
</head>
<body>
    <div class=\"\">
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </div>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " | ScoopM";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  45 => 5,  39 => 13,  37 => 12,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.twig.html", "/var/www/scoopm/templates/base.twig.html");
    }
}
