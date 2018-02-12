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
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/v4-shims.js\"></script><!--upgrade from v.4-->

    <!-- GOOGLE FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\"><!--Google Font-->

    <!-- jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    ";
        // line 20
        $this->displayBlock('car_query', $context, $blocks);
        // line 32
        echo "
    ";
        // line 34
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>

    <!-- BOOTSTRAP -->
    <link rel=\"stylesheet\" href=\"/bootstrap/css/bootstrap.min.css\">
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\"> -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

    <!-- OURS -->
    <link rel=\"stylesheet\" href=\"/css/scoopm.css\">
    
    ";
        // line 44
        $this->displayBlock('head_styles', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 47
        echo "</head>
<body ";
        // line 48
        $this->displayBlock('body_class', $context, $blocks);
        echo ">
    ";
        // line 49
        $this->displayBlock('body_content', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "    
    ";
        // line 66
        $this->displayBlock('firebase', $context, $blocks);
        // line 81
        echo "    
    ";
        // line 82
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 83
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_car_query($context, array $blocks = array())
    {
        // line 21
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

    // line 44
    public function block_head_styles($context, array $blocks = array())
    {
    }

    // line 46
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body_content($context, array $blocks = array())
    {
        // line 50
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <h1 class=\"display-2 text-center logo-font blue-text mt-4\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">ScoopM</a><small>&nbsp;</small></h1>
                    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "        <footer class=\"footer\">
            <div class=\"container text-center\">&copy; ScoopM 2018</div>
        </footer>
    ";
    }

    // line 66
    public function block_firebase($context, array $blocks = array())
    {
        // line 67
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

    // line 82
    public function block_body_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  199 => 82,  182 => 67,  179 => 66,  172 => 61,  169 => 60,  164 => 54,  157 => 55,  155 => 54,  151 => 53,  146 => 50,  143 => 49,  138 => 48,  133 => 46,  128 => 44,  114 => 21,  111 => 20,  106 => 8,  101 => 83,  99 => 82,  96 => 81,  94 => 66,  91 => 65,  89 => 60,  86 => 59,  84 => 49,  80 => 48,  77 => 47,  75 => 46,  72 => 45,  70 => 44,  58 => 34,  55 => 32,  53 => 20,  38 => 8,  29 => 1,);
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
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/v4-shims.js\"></script><!--upgrade from v.4-->

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
        <div class=\"container-fluid\">
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
