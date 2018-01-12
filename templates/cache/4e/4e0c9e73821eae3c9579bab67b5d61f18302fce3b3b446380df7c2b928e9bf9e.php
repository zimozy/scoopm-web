<?php

/* form_macros.twig */
class __TwigTemplate_c9e368b842ac15b1c93ae73d76fd1cb0dee7e2bc86f55051e086faabcb0deb2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 20
        echo "
";
        // line 30
        echo "
";
        // line 40
        echo "
";
        // line 50
        echo "
";
        // line 63
        echo "
";
        // line 68
        echo "
";
        // line 76
        echo "
";
        // line 84
        echo "
";
    }

    // line 1
    public function macro_textInput($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" class=\"form-control ";
            if ((($context["errors"] ?? null) == "passed")) {
                echo "is-valid";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "empty", array())) {
                echo "is-invalid";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
            <div class=\"invalid-feedback ";
            // line 6
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "empty", array())) {
                echo "d-block";
            }
            echo "\">Required</div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_password($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" maxlength=\"20\" required/>
            <small id=\"password-size\" class=\"form-text text-muted\">Password must be between 6 and 20 characters</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_confirm($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 23
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" maxlength=\"20\" required/>
            <small id=\"password-match\" class=\"form-text invalid-feedback d-none\">Passwords don't match</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 31
    public function macro_email($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" class=\"email form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
            <div class=\"invalid-feedback\">Must use a valid email address</div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_upload($__title__ = null, $__name__ = null, $__errors__ = null, $__hint__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "errors" => $__errors__,
            "hint" => $__hint__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input type=\"file\" name=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control-file\"/>
            <small class=\"form-text text-muted\">";
            // line 46
            echo ($context["hint"] ?? null);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 51
    public function macro_select($__title__ = null, $__name__ = null, $__options__ = null, $__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "options" => $__options__,
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <select>
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 57
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "title", array()), "html", null, true);
                echo "</option>    
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            </select>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_title($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "    <!-- <h1 class=\"text-center\">";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "</h1> -->
    <!-- <br> -->
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 69
    public function macro_heading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>";
            // line 72
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "</h4>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 77
    public function macro_subHeading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h5 class=\"text-muted\">";
            // line 80
            echo ($context["text"] ?? null);
            echo "</h5>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 85
    public function macro_buttons($__thisPage__ = null, $__goingBack__ = false, $__submitting__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "thisPage" => $__thisPage__,
            "goingBack" => $__goingBack__,
            "submitting" => $__submitting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 86
            echo "    <br>
    <div class=\"form-group\" style=\"text-align:center;\">

        ";
            // line 89
            if (($context["goingBack"] ?? null)) {
                // line 90
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Back\" class=\"back-button btn btn-outline-secondary mr-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        ";
            }
            // line 92
            echo "
        ";
            // line 93
            if ( !($context["submitting"] ?? null)) {
                // line 94
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        ";
            } else {
                // line 96
                echo "            <input id=\"submit\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\"/>
        ";
            }
            // line 98
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "form_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 98,  455 => 96,  449 => 94,  447 => 93,  444 => 92,  438 => 90,  436 => 89,  431 => 86,  417 => 85,  404 => 80,  400 => 78,  388 => 77,  375 => 72,  371 => 70,  359 => 69,  346 => 65,  334 => 64,  322 => 59,  311 => 57,  307 => 56,  299 => 53,  296 => 52,  281 => 51,  268 => 46,  264 => 45,  257 => 43,  254 => 42,  239 => 41,  219 => 35,  212 => 33,  209 => 32,  194 => 31,  174 => 25,  167 => 23,  164 => 22,  149 => 21,  129 => 15,  122 => 13,  119 => 12,  104 => 11,  89 => 6,  73 => 5,  66 => 3,  63 => 2,  48 => 1,  43 => 84,  40 => 76,  37 => 68,  34 => 63,  31 => 50,  28 => 40,  25 => 30,  22 => 20,  19 => 10,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro textInput(title, name, value, errors=null) %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"text\" class=\"form-control {% if errors == 'passed' %}is-valid{% elseif errors.empty %}is-invalid{% endif %}\" value=\"{{value}}\" placeholder=\"{{title}}\" required/>
            <div class=\"invalid-feedback {% if errors.empty %}d-block{% endif %}\">Required</div>
        </div>
    </div>
{% endmacro %}

{% macro password(title, name, value, errors) %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control\" value=\"{{value}}\" placeholder=\"{{title}}\" maxlength=\"20\" required/>
            <small id=\"password-size\" class=\"form-text text-muted\">Password must be between 6 and 20 characters</small>
        </div>
    </div>
{% endmacro %}

{% macro confirm(title, name, value, errors) %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control\" value=\"{{value}}\" placeholder=\"{{title}}\" maxlength=\"20\" required/>
            <small id=\"password-match\" class=\"form-text invalid-feedback d-none\">Passwords don't match</small>
        </div>
    </div>
{% endmacro %}

{% macro email(title, name, value, errors) %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"email\" class=\"email form-control\" value=\"{{value}}\" placeholder=\"{{title}}\" required/>
            <div class=\"invalid-feedback\">Must use a valid email address</div>
        </div>
    </div>
{% endmacro %}

{% macro upload(title, name, errors, hint) %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input type=\"file\" name=\"{{name}}\" class=\"form-control-file\"/>
            <small class=\"form-text text-muted\">{{hint|raw}}</small>
        </div>
    </div>
{% endmacro %}

{% macro select(title, name, options, errors) %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <select>
                {% for option in options %}
                    <option value=\"{{option.name}}\">{{option.title}}</option>    
                {% endfor %}
            </select>
        </div>
    </div>
{% endmacro %}

{% macro title(text) %}
    <!-- <h1 class=\"text-center\">{{text}}</h1> -->
    <!-- <br> -->
{% endmacro %}

{% macro heading(text) %}
    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>{{text}}</h4>
        </div>
    </div>
{% endmacro %}

{% macro subHeading(text) %}
    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h5 class=\"text-muted\">{{text|raw}}</h5>
        </div>
    </div>
{% endmacro %}

{% macro buttons(thisPage, goingBack=false, submitting=false) %}
    <br>
    <div class=\"form-group\" style=\"text-align:center;\">

        {% if goingBack %}
            <button id=\"{{thisPage}}Back\" class=\"back-button btn btn-outline-secondary mr-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        {% endif %}

        {% if not submitting %}
            <button id=\"{{thisPage}}Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        {% else %}
            <input id=\"submit\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\"/>
        {% endif %}

    </div>
{% endmacro %}
", "form_macros.twig", "/var/www/scoopm/templates/form_macros.twig");
    }
}
