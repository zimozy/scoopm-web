<?php

/* base.twig.html */
class __TwigTemplate_19592e90ed0d5de2136572bad9928a6df3e60250ff98d4f7e7df3c54c9c87654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'car_query' => array($this, 'block_car_query'),
            'head_styles' => array($this, 'block_head_styles'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body_content' => array($this, 'block_body_content'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'firebase' => array($this, 'block_firebase'),
            'body_scripts' => array($this, 'block_body_scripts'),
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
        echo " | ScoopM</title>

    <!-- FONT AWESOME -->
    <link rel=\"stylesheet\" href=\"/css/fa/css/font-awesome.min.css\">

    <!-- GOOGLE FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\"><!--Google Font-->

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    ";
        // line 16
        $this->displayBlock('car_query', $context, $blocks);
        // line 28
        echo "
    ";
        // line 30
        echo "    ";
        // line 31
        echo "
    <!-- BOOTSTRAP -->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    ";
        // line 37
        $this->displayBlock('head_styles', $context, $blocks);
        // line 38
        echo "
    <!-- OURS -->
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">

    ";
        // line 42
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 43
        echo "</head>
<body>
    ";
        // line 45
        $this->displayBlock('body_content', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "    
    ";
        // line 62
        $this->displayBlock('firebase', $context, $blocks);
        // line 77
        echo "    
    ";
        // line 78
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 79
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_car_query($context, array $blocks = array())
    {
        // line 17
        echo "        <!-- CAR QUERY -->
        <script type=\"text/javascript\" src=\"http://www.carqueryapi.com/js/carquery.0.3.4.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                var carquery = new CarQuery();
                carquery.init();
                carquery.setFilters( {sold_in_us:true} );
                carquery.initYearMakeModelTrim('year', 'make', 'model', 'na');
            });
        </script>
    ";
    }

    // line 37
    public function block_head_styles($context, array $blocks = array())
    {
    }

    // line 42
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body_content($context, array $blocks = array())
    {
        // line 46
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <h1 class=\"display-2 text-center logo-font blue-text mt-4\"><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">ScoopM</a><small>&nbsp;</small></h1>
                    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "        <footer class=\"footer\">
            <div class=\"container text-center\">&copy; ScoopM 2018</div>
        </footer>
    ";
    }

    // line 62
    public function block_firebase($context, array $blocks = array())
    {
        // line 63
        echo "        <script src=\"https://www.gstatic.com/firebasejs/4.9.0/firebase.js\"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: \"AIzaSyAjBxmEhdP51alX7u26mSiMwSXtCMxYMpc\",
                authDomain: \"scoopm-8975f.firebaseapp.com\",
                databaseURL: \"https://scoopm-8975f.firebaseio.com\",
                projectId: \"scoopm-8975f\",
                storageBucket: \"scoopm-8975f.appspot.com\",
                messagingSenderId: \"342193276323\"
            };
            firebase.initializeApp(config);
        </script>
    ";
    }

    // line 78
    public function block_body_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  187 => 78,  170 => 63,  167 => 62,  160 => 57,  157 => 56,  152 => 50,  145 => 51,  143 => 50,  139 => 49,  134 => 46,  131 => 45,  126 => 42,  121 => 37,  107 => 17,  104 => 16,  99 => 5,  94 => 79,  92 => 78,  89 => 77,  87 => 62,  84 => 61,  82 => 56,  79 => 55,  77 => 45,  73 => 43,  71 => 42,  65 => 38,  63 => 37,  55 => 31,  53 => 30,  50 => 28,  48 => 16,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}{% endblock %} | ScoopM</title>

    <!-- FONT AWESOME -->
    <link rel=\"stylesheet\" href=\"/css/fa/css/font-awesome.min.css\">

    <!-- GOOGLE FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\"><!--Google Font-->

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    {% block car_query %}
        <!-- CAR QUERY -->
        <script type=\"text/javascript\" src=\"http://www.carqueryapi.com/js/carquery.0.3.4.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                var carquery = new CarQuery();
                carquery.init();
                carquery.setFilters( {sold_in_us:true} );
                carquery.initYearMakeModelTrim('year', 'make', 'model', 'na');
            });
        </script>
    {% endblock %}

    {# <!-- POPPER --> #}
    {# <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script> #}

    <!-- BOOTSTRAP -->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    {% block head_styles %}{% endblock %}

    <!-- OURS -->
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">

    {% block head_scripts %}{% endblock %}
</head>
<body>
    {% block body_content %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <h1 class=\"display-2 text-center logo-font blue-text mt-4\"><a href=\"{{path_for('home')}}\">ScoopM</a><small>&nbsp;</small></h1>
                    {% block content %}{% endblock %}
                </div>
            </div>
        </div>
    {% endblock body_content %}

    {% block footer %}
        <footer class=\"footer\">
            <div class=\"container text-center\">&copy; ScoopM 2018</div>
        </footer>
    {% endblock %}
    
    {% block firebase %}
        <script src=\"https://www.gstatic.com/firebasejs/4.9.0/firebase.js\"></script>
        <script>
            // Initialize Firebase
            var config = {
                apiKey: \"AIzaSyAjBxmEhdP51alX7u26mSiMwSXtCMxYMpc\",
                authDomain: \"scoopm-8975f.firebaseapp.com\",
                databaseURL: \"https://scoopm-8975f.firebaseio.com\",
                projectId: \"scoopm-8975f\",
                storageBucket: \"scoopm-8975f.appspot.com\",
                messagingSenderId: \"342193276323\"
            };
            firebase.initializeApp(config);
        </script>
    {% endblock %}
    
    {% block body_scripts %}{% endblock %}
</body>
</html>", "base.twig.html", "/var/www/templates/base.twig.html");
    }
}
