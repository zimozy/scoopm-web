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
        // line 22
        echo "
";
        // line 36
        echo "
";
        // line 63
        echo "
";
        // line 80
        echo "
";
        // line 103
        echo "
";
        // line 171
        echo "
";
        // line 197
        echo "
";
        // line 216
        echo "




    















";
        // line 238
        echo "
";
        // line 243
        echo "
";
        // line 251
        echo "
";
        // line 259
        echo "
";
    }

    // line 3
    public function macro_textInput($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, $__hint__ = null, $__type__ = "text", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "name" => $__name__,
            "value" => $__value__,
            "errors" => $__errors__,
            "hint" => $__hint__,
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
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["title"] ?? null)), "html", null, true);
            echo "</small>
            ";
            // line 16
            if (($context["hint"] ?? null)) {
                // line 17
                echo "                <small class=\"form-text scoopm-hint\">";
                echo twig_escape_filter($this->env, ($context["hint"] ?? null), "html", null, true);
                echo "</small>
            ";
            }
            // line 19
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
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
            // line 24
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 25
                echo "        ";
                // line 26
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 27
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 30
                echo "    ";
            }
            // line 31
            echo "    <div class=\"form-group\">
        <input id=\"";
            // line 32
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
            // line 33
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</small>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
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
            // line 38
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 39
                echo "        ";
                // line 40
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 41
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 42
                echo "    ";
            } else {
                // line 43
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 44
                echo "    ";
            }
            // line 45
            echo "    <div class=\"form-group\">
        ";
            // line 46
            if ( !($context["simple"] ?? null)) {
                // line 47
                echo "        <div class=\"row\">
            <label for=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"col-sm-3 col-form-label\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</label>
            <div class=\"col-sm\">
                ";
            }
            // line 51
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
            // line 52
            if ( !($context["confirm"] ?? null)) {
                // line 53
                echo "                    <small id=\"password-size\" class=\"form-text scoopm-hint\">Must be between 6 and 20 characters, and contain both letters and numbers.</small>
                ";
            } else {
                // line 55
                echo "                    <small id=\"password-match\" class=\"form-text scoopm-error\">Passwords don't match</small>
                ";
            }
            // line 57
            echo "        ";
            if ( !($context["simple"] ?? null)) {
                // line 58
                echo "            </div>
       </div>
       ";
            }
            // line 61
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
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
            // line 65
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 66
                echo "        ";
                // line 67
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 68
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 69
                echo "    ";
            } else {
                // line 70
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 71
                echo "    ";
            }
            // line 72
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 73
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 75
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

    // line 81
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
            // line 82
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 83
                echo "        ";
                // line 84
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 85
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 86
                echo "    ";
            } else {
                // line 87
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 88
                echo "    ";
            }
            // line 89
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">

            ";
            // line 93
            if (($context["hint"] ?? null)) {
                // line 94
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 96
            echo "
            <textarea id=\"";
            // line 97
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

    // line 104
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
            // line 105
            echo "
    ";
            // line 107
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 108
                echo "        ";
                // line 109
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 110
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 111
                echo "    ";
            } else {
                // line 112
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 113
                echo "    ";
            }
            // line 114
            echo "
    ";
            // line 116
            echo "    ";
            if ((($context["type"] ?? null) == "img")) {
                // line 117
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: JPEG, PNG, GIF";
                // line 118
                echo "        ";
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, .png, .jpeg, .jpg, .gif";
                // line 119
                echo "    ";
            } elseif ((($context["type"] ?? null) == "pdf")) {
                echo "    
        ";
                // line 120
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF";
                // line 121
                echo "        ";
                $context["allowed_types"] = "application/pdf, .pdf";
                // line 122
                echo "    ";
            } elseif ((($context["type"] ?? null) == "doc")) {
                // line 123
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, Word Document";
                // line 124
                echo "        ";
                $context["allowed_types"] = "application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, .pdf, .doc, .docx";
                // line 125
                echo "    ";
            } elseif ((($context["type"] ?? null) == "img/pdf")) {
                // line 126
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, JPEG, PNG, GIF";
                // line 127
                echo "        ";
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, application/pdf, .png, .jpeg, .jpg, .gif, .pdf";
                // line 128
                echo "    ";
            }
            // line 129
            echo "
    ";
            // line 131
            echo "    ";
            if ((($context["value"] ?? null) == "")) {
                // line 132
                echo "        ";
                $context["buttonText"] = "Browse...";
                // line 133
                echo "    ";
            } else {
                // line 134
                echo "        ";
                $context["buttonText"] = "Change File...";
                // line 135
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 136
                echo "    ";
            }
            // line 137
            echo "    
    <div class=\"form-group row\">

        <label for=\"";
            // line 140
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        
        <div class=\"col-sm\">

            ";
            // line 144
            if (($context["hint"] ?? null)) {
                // line 145
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 147
            echo "
            <div class=\"input-group ";
            // line 148
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo " upload-input-group\">
                ";
            // line 150
            echo "                <input type=\"text\" class=\"form-control upload-text\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">

                <div class=\"input-group-addon p-0\">
                    <input id=\"";
            // line 153
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\" type=\"file\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-actual\" class=\"d-none\" accept=\"";
            echo twig_escape_filter($this->env, ($context["allowed_types"] ?? null), "html", null, true);
            echo "\">
                    <label class=\"input-group-text mb-0 px-3 w-100 h-100 d-flex align-items-center\" for=\"";
            // line 154
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\">";
            echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
            echo "</label>
                </div>
            </div>
            
            ";
            // line 158
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "empty", array())) {
                // line 159
                echo "                <small class=\"form-text scoopm-error\">Required. Please try again</small>
            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 160
($context["errors"] ?? null), "invalid", array())) {
                // line 161
                echo "                <small class=\"form-text scoopm-error\">Incorrect file type. Please try again</small>
            ";
            }
            // line 163
            echo "            
            <small class=\"form-text scoopm-error\">Oops, there was an error. Please try again</small>

            <small class=\"form-text scoopm-hint\">";
            // line 166
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

    // line 172
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
            // line 173
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 174
                echo "        ";
                // line 175
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 176
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 177
                echo "    ";
            } else {
                // line 178
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 179
                echo "    ";
            }
            // line 180
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 181
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <select id=\"";
            // line 183
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"custom-select form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 184
            if (($context["options"] ?? null)) {
                // line 185
                echo "                    <option value=\"\">Choose...</option>
                    ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["option_value"] => $context["text"]) {
                    // line 187
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["option_value"], "html", null, true);
                    echo "\" ";
                    if (($context["option_value"] == ($context["value"] ?? null))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                    echo "</option>    
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option_value'], $context['text'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "                ";
            }
            // line 190
            echo "            </select>
            ";
            // line 191
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "invalid", array())) {
                // line 192
                echo "                <small class=\"form-text scoopm-error\">Required</small>
            ";
            }
            // line 194
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 198
    public function macro_agreement($__title__ = null, $__name__ = null, $__value__ = null, $__errors__ = null, ...$__varargs__)
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
            // line 199
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 200
                echo "        ";
                // line 201
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 202
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 203
                echo "    ";
            } else {
                // line 204
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 205
                echo "    ";
            }
            // line 206
            echo "    <div class=\"form-group row mt-3\">
        <label for=\"";
            // line 207
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <p class=\"";
            // line 209
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">I authorize ScoopM to perform a background check, including a criminal background check and motor vehicle report.</p>
            <input id=\"";
            // line 210
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"checkbox\" value=\"1\" ";
            if ((($context["value"] ?? null) == "1")) {
                echo "checked";
            }
            // line 211
            echo "            > <label for=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">I Agree</label>
            <small class=\"form-text scoopm-error\">You must agree to these terms</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 239
    public function macro_title($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 240
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

    // line 244
    public function macro_heading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 245
            echo "    <div class=\"row pt-4\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>";
            // line 247
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

    // line 252
    public function macro_subHeading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 253
            echo "    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <p class=\"h5 fw-400\">";
            // line 255
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

    // line 260
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
            // line 261
            echo "    <div class=\"form-group text-center mt-4\">

        ";
            // line 263
            if (($context["goingBack"] ?? null)) {
                // line 264
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Back\" class=\"back-button btn btn-outline-secondary mr-sm-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        ";
            }
            // line 266
            echo "
        ";
            // line 267
            if ( !($context["submitting"] ?? null)) {
                // line 268
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        ";
            } else {
                // line 270
                echo "            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\" disabled/>
        ";
            }
            // line 272
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
        return array (  957 => 272,  953 => 270,  947 => 268,  945 => 267,  942 => 266,  936 => 264,  934 => 263,  930 => 261,  916 => 260,  903 => 255,  899 => 253,  887 => 252,  874 => 247,  870 => 245,  858 => 244,  845 => 240,  833 => 239,  816 => 211,  808 => 210,  804 => 209,  797 => 207,  794 => 206,  791 => 205,  788 => 204,  785 => 203,  782 => 202,  779 => 201,  777 => 200,  774 => 199,  759 => 198,  748 => 194,  744 => 192,  742 => 191,  739 => 190,  736 => 189,  721 => 187,  717 => 186,  714 => 185,  712 => 184,  704 => 183,  697 => 181,  694 => 180,  691 => 179,  688 => 178,  685 => 177,  682 => 176,  679 => 175,  677 => 174,  674 => 173,  658 => 172,  644 => 166,  639 => 163,  635 => 161,  633 => 160,  630 => 159,  628 => 158,  619 => 154,  611 => 153,  602 => 150,  598 => 148,  595 => 147,  589 => 145,  587 => 144,  578 => 140,  573 => 137,  570 => 136,  567 => 135,  564 => 134,  561 => 133,  558 => 132,  555 => 131,  552 => 129,  549 => 128,  546 => 127,  543 => 126,  540 => 125,  537 => 124,  534 => 123,  531 => 122,  528 => 121,  526 => 120,  521 => 119,  518 => 118,  515 => 117,  512 => 116,  509 => 114,  506 => 113,  503 => 112,  500 => 111,  497 => 110,  494 => 109,  492 => 108,  489 => 107,  486 => 105,  469 => 104,  448 => 97,  445 => 96,  439 => 94,  437 => 93,  429 => 90,  426 => 89,  423 => 88,  420 => 87,  417 => 86,  414 => 85,  411 => 84,  409 => 83,  406 => 82,  390 => 81,  368 => 75,  361 => 73,  358 => 72,  355 => 71,  352 => 70,  349 => 69,  346 => 68,  343 => 67,  341 => 66,  338 => 65,  323 => 64,  313 => 61,  308 => 58,  305 => 57,  301 => 55,  297 => 53,  295 => 52,  282 => 51,  274 => 48,  271 => 47,  269 => 46,  266 => 45,  263 => 44,  260 => 43,  257 => 42,  254 => 41,  251 => 40,  249 => 39,  246 => 38,  229 => 37,  217 => 33,  203 => 32,  200 => 31,  197 => 30,  194 => 29,  191 => 28,  188 => 27,  185 => 26,  183 => 25,  180 => 24,  164 => 23,  153 => 19,  147 => 17,  145 => 16,  141 => 15,  127 => 14,  120 => 12,  117 => 11,  114 => 10,  111 => 9,  108 => 8,  105 => 7,  102 => 6,  100 => 5,  97 => 4,  80 => 3,  75 => 259,  72 => 251,  69 => 243,  66 => 238,  43 => 216,  40 => 197,  37 => 171,  34 => 103,  31 => 80,  28 => 63,  25 => 36,  22 => 22,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# INPUT TYPES #}

{% macro textInput(title, name, value, errors=null, hint=null, type='text') %}
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
            <small class=\"form-text scoopm-error\">Must include a valid {{title|lower}}</small>
            {% if hint %}
                <small class=\"form-text scoopm-hint\">{{hint}}</small>
            {% endif %}
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
                    {% for option_value, text in options %}
                        <option value=\"{{option_value}}\" {% if option_value == value %}selected{% endif %}>{{text}}</option>    
                    {% endfor %}
                {% endif %}
            </select>
            {% if errors.invalid %}
                <small class=\"form-text scoopm-error\">Required</small>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro agreement(title, name, value, errors=null) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row mt-3\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label\">{{title}}</label>
        <div class=\"col-sm\">
            <p class=\"{{validation_class}}\">I authorize ScoopM to perform a background check, including a criminal background check and motor vehicle report.</p>
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"checkbox\" value=\"1\" {% if value == '1' %}checked{% endif %}
            > <label for=\"{{name}}\" class=\"{{validation_class}}\">I Agree</label>
            <small class=\"form-text scoopm-error\">You must agree to these terms</small>
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
