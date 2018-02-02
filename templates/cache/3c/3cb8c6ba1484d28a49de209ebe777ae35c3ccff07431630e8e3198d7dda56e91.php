<?php

/* form_macros.twig.html */
class __TwigTemplate_8f3098d5702daeaea306348df904f616a14796cfdb875062add76c8b6e69a121 extends Twig_Template
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
        // line 2
        echo "
";
        // line 19
        echo "
";
        // line 33
        echo "
";
        // line 60
        echo "
";
        // line 77
        echo "
";
        // line 100
        echo "
";
        // line 168
        echo "
";
        // line 194
        echo "








";
        // line 204
        echo "
";
        // line 209
        echo "
";
        // line 217
        echo "
";
        // line 225
        echo "
";
    }

    // line 3
    public function macro_textInput($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, $__type__ = "text", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 5
                echo "        ";
                // line 6
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 7
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 8
                echo "    ";
            } else {
                // line 9
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 10
                echo "    ";
            }
            // line 11
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" class=\"form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" bplaceholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
            <small class=\"form-text scoopm-error\">Must include a valid ";
            // line 15
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_simpleTextInput($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, $__type__ = "text", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 22
                echo "        ";
                // line 23
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 24
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 25
                echo "    ";
            } else {
                // line 26
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 27
                echo "    ";
            }
            // line 28
            echo "    <div class=\"form-group\">
        <input id=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" class=\"form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
        <small class=\"form-text scoopm-error\">Must include a valid ";
            // line 30
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</small>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_password($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, $__simple__ = false, $__confirm__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "simple" => $__simple__,
            "confirm" => $__confirm__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 36
                echo "        ";
                // line 37
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 38
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 39
                echo "    ";
            } else {
                // line 40
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 41
                echo "    ";
            }
            // line 42
            echo "    <div class=\"form-group\">
        ";
            // line 43
            if ( !($context["simple"] ?? null)) {
                // line 44
                echo "        <div class=\"row\">
            <label for=\"";
                // line 45
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"col-sm-3 col-form-label\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"col-sm\">
                ";
            }
            // line 48
            echo "                <input id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" class=\"form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" maxlength=\"20\" required/>
                ";
            // line 49
            if ( !($context["confirm"] ?? null)) {
                // line 50
                echo "                    <small id=\"password-size\" class=\"form-text scoopm-hint\">Must be between 6 and 20 characters, and contain both letters and numbers.</small>
                ";
            } else {
                // line 52
                echo "                    <small id=\"password-match\" class=\"form-text scoopm-error\">Passwords don't match</small>
                ";
            }
            // line 54
            echo "        ";
            if ( !($context["simple"] ?? null)) {
                // line 55
                echo "            </div>
       </div>
       ";
            }
            // line 58
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 61
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
            // line 62
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 63
                echo "        ";
                // line 64
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 65
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 66
                echo "    ";
            } else {
                // line 67
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 68
                echo "    ";
            }
            // line 69
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" class=\"email form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" bplaceholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
            <small class=\"form-text scoopm-error\">Must use a valid email address</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 78
    public function macro_textArea($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, $__hint__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "hint" => $__hint__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 79
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 80
                echo "        ";
                // line 81
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 82
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 83
                echo "    ";
            } else {
                // line 84
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 85
                echo "    ";
            }
            // line 86
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 87
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">

            ";
            // line 90
            if (($context["hint"] ?? null)) {
                // line 91
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 93
            echo "
            <textarea id=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" rows=\"3\" required>";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</textarea>
            
            <small class=\"form-text scoopm-hint\">Must be under 5000 characters</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 101
    public function macro_upload($__title__ = null, $__name__ = null, $__value__ = null, $__type__ = null, $__errors__ = null, $__hint__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "errors" => $__errors__,
            "hint" => $__hint__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 102
            echo "
    ";
            // line 104
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 105
                echo "        ";
                // line 106
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 107
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 108
                echo "    ";
            } else {
                // line 109
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 110
                echo "    ";
            }
            // line 111
            echo "
    ";
            // line 113
            echo "    ";
            if ((($context["type"] ?? null) == "img")) {
                // line 114
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: JPEG, PNG, GIF";
                // line 115
                echo "        ";
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, .png, .jpeg, .jpg, .gif";
                // line 116
                echo "    ";
            } elseif ((($context["type"] ?? null) == "pdf")) {
                echo "    
        ";
                // line 117
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF";
                // line 118
                echo "        ";
                $context["allowed_types"] = "application/pdf, .pdf";
                // line 119
                echo "    ";
            } elseif ((($context["type"] ?? null) == "doc")) {
                // line 120
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, Word Document";
                // line 121
                echo "        ";
                $context["allowed_types"] = "application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, .pdf, .doc, .docx";
                // line 122
                echo "    ";
            } elseif ((($context["type"] ?? null) == "img/pdf")) {
                // line 123
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, JPEG, PNG, GIF";
                // line 124
                echo "        ";
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, application/pdf, .png, .jpeg, .jpg, .gif, .pdf";
                // line 125
                echo "    ";
            }
            // line 126
            echo "
    ";
            // line 128
            echo "    ";
            if ((($context["value"] ?? null) == "")) {
                // line 129
                echo "        ";
                $context["buttonText"] = "Browse...";
                // line 130
                echo "    ";
            } else {
                // line 131
                echo "        ";
                $context["buttonText"] = "Change File...";
                // line 132
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 133
                echo "    ";
            }
            // line 134
            echo "    
    <div class=\"form-group row\">

        <label for=\"";
            // line 137
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        
        <div class=\"col-sm\">

            ";
            // line 141
            if (($context["hint"] ?? null)) {
                // line 142
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 144
            echo "
            <div class=\"input-group ";
            // line 145
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo " upload-input-group\">
                ";
            // line 147
            echo "                <input type=\"text\" class=\"form-control upload-text\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">

                <div class=\"input-group-addon p-0\">
                    <input id=\"";
            // line 150
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\" type=\"file\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-actual\" class=\"d-none\" accept=\"";
            echo twig_escape_filter($this->env, ($context["allowed_types"] ?? null), "html", null, true);
            echo "\">
                    <label class=\"input-group-text mb-0 px-3 w-100 h-100 d-flex align-items-center\" for=\"";
            // line 151
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\">";
            echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
            echo "</label>
                </div>
            </div>
            
            ";
            // line 155
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "empty", array())) {
                // line 156
                echo "                <small class=\"form-text scoopm-error\">Required. Please try again</small>
            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 157
($context["errors"] ?? null), "invalid", array())) {
                // line 158
                echo "                <small class=\"form-text scoopm-error\">Incorrect file type. Please try again</small>
            ";
            }
            // line 160
            echo "            
            <small class=\"form-text scoopm-error\">Oops, there was an error. Please try again</small>

            <small class=\"form-text scoopm-hint\">";
            // line 163
            echo ($context["type_phrase"] ?? null);
            echo " (under 5MB)</small>

        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 169
    public function macro_select($__title__ = null, $__name__ = null, $__errors__ = null, $__options__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "errors" => $__errors__,
            "options" => $__options__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 170
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 171
                echo "        ";
                // line 172
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 173
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 174
                echo "    ";
            } else {
                // line 175
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 176
                echo "    ";
            }
            // line 177
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 178
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <select id=\"";
            // line 180
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"custom-select form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 181
            if (($context["options"] ?? null)) {
                // line 182
                echo "                    <option value=\"\">Choose...</option>
                    ";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 184
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "\" ";
                    if (($context["option"] == ($context["value"] ?? null))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</option>    
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                ";
            }
            // line 187
            echo "            </select>
            ";
            // line 188
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "invalid", array())) {
                // line 189
                echo "                <small class=\"form-text scoopm-error\">Required</small>
            ";
            }
            // line 191
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 205
    public function macro_title($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
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

    // line 210
    public function macro_heading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 211
            echo "    <div class=\"row pt-4\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>";
            // line 213
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

    // line 218
    public function macro_subHeading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 219
            echo "    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <p class=\"h5 fw-400\">";
            // line 221
            echo ($context["text"] ?? null);
            echo "</p>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 226
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
            // line 227
            echo "    <div class=\"form-group text-center mt-4\">

        ";
            // line 229
            if (($context["goingBack"] ?? null)) {
                // line 230
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Back\" class=\"back-button btn btn-outline-secondary mr-sm-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        ";
            }
            // line 232
            echo "
        ";
            // line 233
            if ( !($context["submitting"] ?? null)) {
                // line 234
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        ";
            } else {
                // line 236
                echo "            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\" disabled/>
        ";
            }
            // line 238
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
        return "form_macros.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 238,  853 => 236,  847 => 234,  845 => 233,  842 => 232,  836 => 230,  834 => 229,  830 => 227,  816 => 226,  803 => 221,  799 => 219,  787 => 218,  774 => 213,  770 => 211,  758 => 210,  745 => 206,  733 => 205,  722 => 191,  718 => 189,  716 => 188,  713 => 187,  710 => 186,  695 => 184,  691 => 183,  688 => 182,  686 => 181,  678 => 180,  671 => 178,  668 => 177,  665 => 176,  662 => 175,  659 => 174,  656 => 173,  653 => 172,  651 => 171,  648 => 170,  632 => 169,  618 => 163,  613 => 160,  609 => 158,  607 => 157,  604 => 156,  602 => 155,  593 => 151,  585 => 150,  576 => 147,  572 => 145,  569 => 144,  563 => 142,  561 => 141,  552 => 137,  547 => 134,  544 => 133,  541 => 132,  538 => 131,  535 => 130,  532 => 129,  529 => 128,  526 => 126,  523 => 125,  520 => 124,  517 => 123,  514 => 122,  511 => 121,  508 => 120,  505 => 119,  502 => 118,  500 => 117,  495 => 116,  492 => 115,  489 => 114,  486 => 113,  483 => 111,  480 => 110,  477 => 109,  474 => 108,  471 => 107,  468 => 106,  466 => 105,  463 => 104,  460 => 102,  443 => 101,  422 => 94,  419 => 93,  413 => 91,  411 => 90,  403 => 87,  400 => 86,  397 => 85,  394 => 84,  391 => 83,  388 => 82,  385 => 81,  383 => 80,  380 => 79,  364 => 78,  342 => 72,  335 => 70,  332 => 69,  329 => 68,  326 => 67,  323 => 66,  320 => 65,  317 => 64,  315 => 63,  312 => 62,  297 => 61,  287 => 58,  282 => 55,  279 => 54,  275 => 52,  271 => 50,  269 => 49,  256 => 48,  248 => 45,  245 => 44,  243 => 43,  240 => 42,  237 => 41,  234 => 40,  231 => 39,  228 => 38,  225 => 37,  223 => 36,  220 => 35,  203 => 34,  191 => 30,  177 => 29,  174 => 28,  171 => 27,  168 => 26,  165 => 25,  162 => 24,  159 => 23,  157 => 22,  154 => 21,  138 => 20,  125 => 15,  111 => 14,  104 => 12,  101 => 11,  98 => 10,  95 => 9,  92 => 8,  89 => 7,  86 => 6,  84 => 5,  81 => 4,  65 => 3,  60 => 225,  57 => 217,  54 => 209,  51 => 204,  40 => 194,  37 => 168,  34 => 100,  31 => 77,  28 => 60,  25 => 33,  22 => 19,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# INPUT TYPES #}

{% macro textInput(title, name, value, errors=null, type='text') %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"{{type}}\" class=\"form-control {{validation_class}}\" value=\"{{value}}\" bplaceholder=\"{{title}}\" required/>
            <small class=\"form-text scoopm-error\">Must include a valid {{title}}</small>
        </div>
    </div>
{% endmacro %}

{% macro simpleTextInput(title, name, value, errors=null, type='text') %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group\">
        <input id=\"{{name}}\" name=\"{{name}}\" type=\"{{type}}\" class=\"form-control {{validation_class}}\" value=\"{{value}}\" placeholder=\"{{title}}\" required/>
        <small class=\"form-text scoopm-error\">Must include a valid {{title}}</small>
    </div>
{% endmacro %}

{% macro password(title, name, value, errors, simple=false, confirm=false) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group\">
        {% if not simple %}
        <div class=\"row\">
            <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
            <div class=\"col-sm\">
                {% endif %}
                <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control {{validation_class}}\" value=\"{{value}}\" placeholder=\"{{title}}\" maxlength=\"20\" required/>
                {% if not confirm %}
                    <small id=\"password-size\" class=\"form-text scoopm-hint\">Must be between 6 and 20 characters, and contain both letters and numbers.</small>
                {% else %}
                    <small id=\"password-match\" class=\"form-text scoopm-error\">Passwords don't match</small>
                {% endif %}
        {% if not simple %}
            </div>
       </div>
       {% endif %}
    </div>
{% endmacro %}

{% macro email(title, name, value, errors) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"email\" class=\"email form-control {{validation_class}}\" value=\"{{value}}\" bplaceholder=\"{{title}}\" required/>
            <small class=\"form-text scoopm-error\">Must use a valid email address</small>
        </div>
    </div>
{% endmacro %}

{% macro textArea(title, name, value, errors=null, hint) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
        <div class=\"col-sm\">

            {% if hint %}
                <p>{{hint|raw}}</p>
            {% endif %}

            <textarea id=\"{{name}}\" name=\"{{name}}\" class=\"form-control {{validation_class}}\" rows=\"3\" required>{{value}}</textarea>
            
            <small class=\"form-text scoopm-hint\">Must be under 5000 characters</small>
        </div>
    </div>
{% endmacro %}

{% macro upload(title, name, value, type, errors, hint) %}

    {# CSS ERROR CLASS #}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}

    {# INPUT FILE TYPES (accepts=\"...\") #}
    {% if type == 'img' %}
        {% set type_phrase = '<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: JPEG, PNG, GIF' %}
        {% set allowed_types = 'image/png, image/jpeg, image/gif, .png, .jpeg, .jpg, .gif' %}
    {% elseif type == 'pdf' %}    
        {% set type_phrase = '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF' %}
        {% set allowed_types = 'application/pdf, .pdf' %}
    {% elseif type == 'doc' %}
        {% set type_phrase = '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, Word Document' %}
        {% set allowed_types = 'application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, .pdf, .doc, .docx' %}
    {% elseif type == 'img/pdf' %}
        {% set type_phrase = '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, JPEG, PNG, GIF' %}
        {% set allowed_types = 'image/png, image/jpeg, image/gif, application/pdf, .png, .jpeg, .jpg, .gif, .pdf' %}
    {% endif %}

    {# UPLOAD SUCCESS #}
    {% if value == '' %}
        {% set buttonText = 'Browse...' %}
    {% else %}
        {% set buttonText = 'Change File...' %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% endif %}
    
    <div class=\"form-group row\">

        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
        
        <div class=\"col-sm\">

            {% if hint %}
                <p>{{hint|raw}}</p>
            {% endif %}

            <div class=\"input-group {{validation_class}} upload-input-group\">
                {# This field uses the name attribute so it can re-display the file name if the field is returned with errors #}
                <input type=\"text\" class=\"form-control upload-text\" name=\"{{name}}\" value=\"{{value}}\">

                <div class=\"input-group-addon p-0\">
                    <input id=\"{{name}}-input\" type=\"file\" name=\"{{name}}-actual\" class=\"d-none\" accept=\"{{allowed_types}}\">
                    <label class=\"input-group-text mb-0 px-3 w-100 h-100 d-flex align-items-center\" for=\"{{name}}-input\">{{buttonText}}</label>
                </div>
            </div>
            
            {% if errors.empty %}
                <small class=\"form-text scoopm-error\">Required. Please try again</small>
            {% elseif errors.invalid %}
                <small class=\"form-text scoopm-error\">Incorrect file type. Please try again</small>
            {% endif %}
            
            <small class=\"form-text scoopm-error\">Oops, there was an error. Please try again</small>

            <small class=\"form-text scoopm-hint\">{{type_phrase|raw}} (under 5MB)</small>

        </div>
    </div>
{% endmacro %}

{% macro select(title, name, errors, options=null, value=null) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
        <div class=\"col-sm\">
            <select id=\"{{name}}\" name=\"{{name}}\" class=\"custom-select form-control {{validation_class}}\">
                {% if options %}
                    <option value=\"\">Choose...</option>
                    {% for option in options %}
                        <option value=\"{{option}}\" {% if option == value %}selected{% endif %}>{{option}}</option>    
                    {% endfor %}
                {% endif %}
            </select>
            {% if errors.invalid %}
                <small class=\"form-text scoopm-error\">Required</small>
            {% endif %}
        </div>
    </div>
{% endmacro %}









{# FORMATTING #}

{% macro title(text) %}
    <!-- <h1 class=\"text-center\">{{text}}</h1> -->
    <!-- <br> -->
{% endmacro %}

{% macro heading(text) %}
    <div class=\"row pt-4\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>{{text}}</h4>
        </div>
    </div>
{% endmacro %}

{% macro subHeading(text) %}
    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <p class=\"h5 fw-400\">{{text|raw}}</p>
        </div>
    </div>
{% endmacro %}

{% macro buttons(thisPage, goingBack=false, submitting=false) %}
    <div class=\"form-group text-center mt-4\">

        {% if goingBack %}
            <button id=\"{{thisPage}}Back\" class=\"back-button btn btn-outline-secondary mr-sm-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        {% endif %}

        {% if not submitting %}
            <button id=\"{{thisPage}}Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        {% else %}
            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\" disabled/>
        {% endif %}

    </div>
{% endmacro %}
", "form_macros.twig.html", "/var/www/templates/form_macros.twig.html");
    }
}
