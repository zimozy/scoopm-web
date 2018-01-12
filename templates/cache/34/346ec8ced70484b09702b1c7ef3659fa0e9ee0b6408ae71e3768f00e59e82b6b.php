<?php

/* base.twig.html */
class __TwigTemplate_00f979c2a097eb783b8373103564dc0879066f9d717454d77f3ba2d8d8984d8f extends Twig_Template
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
    <script type=\"text/javascript\" src=\"http://www.carqueryapi.com/js/carquery.0.3.4.js\"></script>
    <!--CAR QUERY-->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
             var carquery = new CarQuery();
             carquery.init();
             carquery.setFilters( {sold_in_us:true} );
             carquery.initYearMakeModelTrim('year', 'make', 'model', 'na');
        });
    </script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                    ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
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

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  68 => 26,  62 => 5,  53 => 27,  51 => 26,  27 => 5,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} | ScoopM{% endblock %}</title>
    <!--<link href=\"../vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>-->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/fa/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"http://www.carqueryapi.com/js/carquery.0.3.4.js\"></script>
    <!--CAR QUERY-->
    <script type=\"text/javascript\">
        \$(document).ready(function() {
             var carquery = new CarQuery();
             carquery.init();
             carquery.setFilters( {sold_in_us:true} );
             carquery.initYearMakeModelTrim('year', 'make', 'model', 'na');
        });
    </script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 offset-lg-2\">
                    {% block content %}{% endblock %}
            </div>
        </div>
        
    </div>
</body>
</html>", "base.twig.html", "/var/www/scoopm/templates/base.twig.html");
    }
}
