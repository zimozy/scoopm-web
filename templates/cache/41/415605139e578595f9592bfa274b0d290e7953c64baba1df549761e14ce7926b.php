<?php

/* new_user.twig.html */
class __TwigTemplate_13ac713fcfa8e34efd23e2065d6035253b4e7241fe1921056549a631860a1a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "new_user.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_content' => array($this, 'block_body_content'),
            'body_scripts' => array($this, 'block_body_scripts'),
            'footer' => array($this, 'block_footer'),
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
        echo "Please Wait...";
    }

    // line 5
    public function block_body_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row h-100 align-items-center\" style=\"margin-top:15%;\">
            <div class=\"col-lg-8 offset-lg-2 text-center\">
                <p class=\"lead text-muted\">Creating user accont...</p>
            </div>
        </div>
    </div>
";
    }

    // line 15
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("body_scripts", $context, $blocks);
        echo "
    <script>
         firebase.auth().createUserWithEmailAndPassword('";
        // line 18
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "').catch(function(error) {
            console.log(error);
            return false;
         });
         
         firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                var database = firebase.database();
                var oldRef = database.ref('applications/";
        // line 26
        echo twig_escape_filter($this->env, ($context["applicationKey"] ?? null), "html", null, true);
        echo "');
                
                oldRef.once('value').then(function(snapshot) {
                    database.ref('users/' + user.uid).set(snapshot.toJSON());
                });
                
                oldRef.remove();

//                window.location.replace('";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("thanks"), "html", null, true);
        echo "');
            } else {
              // No user is signed in.
            }
          });
    </script>
";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "new_user.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  84 => 34,  73 => 26,  60 => 18,  54 => 16,  51 => 15,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Please Wait...{% endblock %}

{% block body_content %}
    <div class=\"container\">
        <div class=\"row h-100 align-items-center\" style=\"margin-top:15%;\">
            <div class=\"col-lg-8 offset-lg-2 text-center\">
                <p class=\"lead text-muted\">Creating user accont...</p>
            </div>
        </div>
    </div>
{% endblock %}

{% block body_scripts %}
    {{parent()}}
    <script>
         firebase.auth().createUserWithEmailAndPassword('{{email}}', '{{password}}').catch(function(error) {
            console.log(error);
            return false;
         });
         
         firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                var database = firebase.database();
                var oldRef = database.ref('applications/{{applicationKey}}');
                
                oldRef.once('value').then(function(snapshot) {
                    database.ref('users/' + user.uid).set(snapshot.toJSON());
                });
                
                oldRef.remove();

//                window.location.replace('{{path_for(\"thanks\")}}');
            } else {
              // No user is signed in.
            }
          });
    </script>
{% endblock %}

{% block footer %}{% endblock %}", "new_user.twig.html", "/var/www/scoopm/templates/new_user.twig.html");
    }
}
