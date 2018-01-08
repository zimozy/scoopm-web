<?php

/* form_macros.twig */
class __TwigTemplate_18e41b0b8e96478c2ac096c79986b85376b7edf22e7b8e85d087e740a9770df5 extends Twig_Template
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
    public function macro_textInput($__title__ = null, $__name__ = null, $__value__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
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
            echo "\" type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
            <div class=\"invalid-feedback\">Required</div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_password($__title__ = null, $__name__ = null, $__value__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
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
            <small class=\"form-text text-muted\">Password must be between 6 and 20 characters</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_confirm($__title__ = null, $__name__ = null, $__value__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
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
            echo "\" type=\"password\" class=\"confirm-password form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" maxlength=\"20\" required/>
            <small class=\"form-text text-invalid d-none\">Passwords don't match</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 31
    public function macro_email($__title__ = null, $__name__ = null, $__value__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
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
            <div class=\"invalid-feedback\">Required</div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 41
    public function macro_upload($__title__ = null, $__name__ = null, $__hint__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
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
    public function macro_select($__title__ = null, $__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "options" => $__options__,
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
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
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
                echo "Back\" class=\"back-button btn btn-outline-secondary mr-5 px-5\">Back</button>
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
                echo "Next\" class=\"next-button btn btn-outline-primary px-5\">Next</button>
        ";
            } else {
                // line 96
                echo "            <input type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\"/>
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
        return array (  442 => 98,  438 => 96,  432 => 94,  430 => 93,  427 => 92,  421 => 90,  419 => 89,  414 => 86,  400 => 85,  387 => 80,  383 => 78,  371 => 77,  358 => 72,  354 => 70,  342 => 69,  329 => 65,  317 => 64,  305 => 59,  294 => 57,  290 => 56,  282 => 53,  279 => 52,  265 => 51,  252 => 46,  248 => 45,  241 => 43,  238 => 42,  224 => 41,  204 => 35,  197 => 33,  194 => 32,  180 => 31,  160 => 25,  153 => 23,  150 => 22,  136 => 21,  116 => 15,  109 => 13,  106 => 12,  92 => 11,  72 => 5,  65 => 3,  62 => 2,  48 => 1,  43 => 84,  40 => 76,  37 => 68,  34 => 63,  31 => 50,  28 => 40,  25 => 30,  22 => 20,  19 => 10,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_macros.twig", "/var/www/scoopm/templates/form_macros.twig");
    }
}
