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
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\"><!--Google Font-->
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
                <h1 class=\"display-2 text-center logo-font blue-text\">ScoopM</h1>
                ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "            </div>
        </div>
        
    </div>
    <footer class=\"footer\">
        <div class=\"container text-center\">&copy; ScoopM 2018</div>
    </footer>
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " | ScoopM";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  67 => 5,  55 => 29,  53 => 28,  27 => 5,  21 => 1,);
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
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\"><!--Google Font-->
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
                <h1 class=\"display-2 text-center logo-font blue-text\">ScoopM</h1>
                {% block content %}{% endblock %}
            </div>
        </div>
        
    </div>
    <footer class=\"footer\">
        <div class=\"container text-center\">&copy; ScoopM 2018</div>
    </footer>
</body>
</html>", "base.twig.html", "/var/www/scoopm/templates/base.twig.html");
    }
}
