<?php

/* signup.twig.html */
class __TwigTemplate_271c82676d4c3c9cb99a49eed462cec53de066adaa970c9544721a6c1b84239e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "signup.twig.html", 1);
        $this->blocks = array(
            'car_query' => array($this, 'block_car_query'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
            'body_scripts' => array($this, 'block_body_scripts'),
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
    public function block_car_query($context, array $blocks = array())
    {
    }

    // line 5
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 6
        echo "    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<h1 class=\"fw-400 text-center\">Application</h1>
<h3>First, create a user account.</h3>
<div id=\"firebaseui-auth-container\"></div>
<div id=\"loader\">Loading...</div>


";
    }

    // line 19
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 20
        $this->displayParentBlock("body_scripts", $context, $blocks);
        echo "
<script>
    // Initialize the FirebaseUI Widget using Firebase.
    var ui = new firebaseui.auth.AuthUI(firebase.auth());

    var uiConfig = {
        callbacks: {
          signInSuccess: function(currentUser, credential, redirectUrl) {
            // User successfully signed in.
            // Return type determines whether we continue the redirect automatically
            // or whether we leave that to developer to handle.
            return true;
          },
          uiShown: function() {
            // The widget is rendered.
            // Hide the loader.
            document.getElementById('loader').style.display = 'none';
          }
        },
        // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
        signInFlow: 'popup',
        signInSuccessUrl: '<url-to-redirect-to-on-success>',
        signInOptions: [ firebase.auth.EmailAuthProvider.PROVIDER_ID ],
        // Terms of service url.
        tosUrl: '<your-tos-url>'
      };

      // The start method will wait until the DOM is loaded.
    ui.start('#firebaseui-auth-container', uiConfig);  
</script>
";
    }

    public function getTemplateName()
    {
        return "signup.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  58 => 19,  48 => 11,  45 => 10,  39 => 6,  36 => 5,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block car_query %}{% endblock %}

{% block head_scripts %}
    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
{% endblock %}

{% block content %}
<h1 class=\"fw-400 text-center\">Application</h1>
<h3>First, create a user account.</h3>
<div id=\"firebaseui-auth-container\"></div>
<div id=\"loader\">Loading...</div>


{% endblock %}

{% block body_scripts %}
{{parent()}}
<script>
    // Initialize the FirebaseUI Widget using Firebase.
    var ui = new firebaseui.auth.AuthUI(firebase.auth());

    var uiConfig = {
        callbacks: {
          signInSuccess: function(currentUser, credential, redirectUrl) {
            // User successfully signed in.
            // Return type determines whether we continue the redirect automatically
            // or whether we leave that to developer to handle.
            return true;
          },
          uiShown: function() {
            // The widget is rendered.
            // Hide the loader.
            document.getElementById('loader').style.display = 'none';
          }
        },
        // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
        signInFlow: 'popup',
        signInSuccessUrl: '<url-to-redirect-to-on-success>',
        signInOptions: [ firebase.auth.EmailAuthProvider.PROVIDER_ID ],
        // Terms of service url.
        tosUrl: '<your-tos-url>'
      };

      // The start method will wait until the DOM is loaded.
    ui.start('#firebaseui-auth-container', uiConfig);  
</script>
{% endblock %}", "signup.twig.html", "/var/www/scoopm/templates/signup.twig.html");
    }
}
