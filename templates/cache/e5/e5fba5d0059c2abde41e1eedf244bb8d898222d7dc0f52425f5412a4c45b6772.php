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
            'body_class' => array($this, 'block_body_class'),
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

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " | ScoopM</title>

    <!-- FONT AWESOME -->
    <link rel=\"stylesheet\" href=\"/css/fa/css/font-awesome.min.css\">

    <!-- GOOGLE FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\"><!--Google Font-->

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    ";
        // line 19
        $this->displayBlock('car_query', $context, $blocks);
        // line 31
        echo "
    ";
        // line 33
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>

    <!-- BOOTSTRAP -->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <!-- OURS -->
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">
    
    ";
        // line 43
        $this->displayBlock('head_styles', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 46
        echo "</head>
<body ";
        // line 47
        $this->displayBlock('body_class', $context, $blocks);
        echo ">
    ";
        // line 48
        $this->displayBlock('body_content', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "    
    ";
        // line 65
        $this->displayBlock('firebase', $context, $blocks);
        // line 80
        echo "    
    ";
        // line 81
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 82
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 19
    public function block_car_query($context, array $blocks = array())
    {
        // line 20
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

    // line 43
    public function block_head_styles($context, array $blocks = array())
    {
    }

    // line 45
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body_content($context, array $blocks = array())
    {
        // line 49
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <h1 class=\"display-2 text-center logo-font blue-text mt-4\"><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">ScoopM</a><small>&nbsp;</small></h1>
                    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "        <footer class=\"footer\">
            <div class=\"container text-center\">&copy; ScoopM 2018</div>
        </footer>
    ";
    }

    // line 65
    public function block_firebase($context, array $blocks = array())
    {
        // line 66
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

    // line 81
    public function block_body_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  198 => 81,  181 => 66,  178 => 65,  171 => 60,  168 => 59,  163 => 53,  156 => 54,  154 => 53,  150 => 52,  145 => 49,  142 => 48,  137 => 47,  132 => 45,  127 => 43,  113 => 20,  110 => 19,  105 => 8,  100 => 82,  98 => 81,  95 => 80,  93 => 65,  90 => 64,  88 => 59,  85 => 58,  83 => 48,  79 => 47,  76 => 46,  74 => 45,  71 => 44,  69 => 43,  57 => 33,  54 => 31,  52 => 19,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>

    <!-- BOOTSTRAP -->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <!-- OURS -->
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">
    
    {% block head_styles %}{% endblock %}

    {% block head_scripts %}{% endblock %}
</head>
<body {% block body_class %}{% endblock %}>
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
