<?php

/* form_macros.twig.html */
class __TwigTemplate_30a50cc10b313f5582519d3fceb5f37458729a0a60ea5901a61917654a212f09 extends Twig_Template
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
        // line 42
        echo "    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>


";
        // line 61
        echo "
";
        // line 78
        echo "
";
        // line 95
        echo "
";
        // line 163
        echo "
";
        // line 189
        echo "








";
        // line 199
        echo "
";
        // line 204
        echo "
";
        // line 212
        echo "
";
        // line 220
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
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">

            ";
            // line 32
            if (($context["hint"] ?? null)) {
                // line 33
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 35
            echo "
            <textarea id=\"";
            // line 36
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

    // line 45
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
            // line 46
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 47
                echo "        ";
                // line 48
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 49
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 50
                echo "    ";
            } else {
                // line 51
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 52
                echo "    ";
            }
            // line 53
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" class=\"form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" bplaceholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" maxlength=\"20\" required/>
            <small id=\"password-size\" class=\"form-text scoopm-hint\">Password must be between 6 and 20 characters</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
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
            // line 63
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 64
                echo "        ";
                // line 65
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 66
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 67
                echo "    ";
            } else {
                // line 68
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 69
                echo "    ";
            }
            // line 70
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 71
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 73
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" bplaceholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" maxlength=\"20\" required/>
            <small id=\"password-match\" class=\"form-text scoopm-error\">Passwords don't match</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 79
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
            // line 80
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 81
                echo "        ";
                // line 82
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 83
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 84
                echo "    ";
            } else {
                // line 85
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 86
                echo "    ";
            }
            // line 87
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 90
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

    // line 96
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
            // line 97
            echo "
    ";
            // line 99
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 100
                echo "        ";
                // line 101
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 102
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 103
                echo "    ";
            } else {
                // line 104
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 105
                echo "    ";
            }
            // line 106
            echo "
    ";
            // line 108
            echo "    ";
            if ((($context["type"] ?? null) == "img")) {
                // line 109
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: JPEG, PNG, GIF";
                // line 110
                echo "        ";
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, .png, .jpeg, .jpg, .gif";
                // line 111
                echo "    ";
            } elseif ((($context["type"] ?? null) == "pdf")) {
                echo "    
        ";
                // line 112
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF";
                // line 113
                echo "        ";
                $context["allowed_types"] = "application/pdf, .pdf";
                // line 114
                echo "    ";
            } elseif ((($context["type"] ?? null) == "doc")) {
                // line 115
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, Word Document";
                // line 116
                echo "        ";
                $context["allowed_types"] = "application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, .pdf, .doc, .docx";
                // line 117
                echo "    ";
            } elseif ((($context["type"] ?? null) == "img/pdf")) {
                // line 118
                echo "        ";
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed: PDF, JPEG, PNG, GIF";
                // line 119
                echo "        ";
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, application/pdf, .png, .jpeg, .jpg, .gif, .pdf";
                // line 120
                echo "    ";
            }
            // line 121
            echo "
    ";
            // line 123
            echo "    ";
            if ((($context["value"] ?? null) == "")) {
                // line 124
                echo "        ";
                $context["buttonText"] = "Browse...";
                // line 125
                echo "    ";
            } else {
                // line 126
                echo "        ";
                $context["buttonText"] = "Change File...";
                // line 127
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 128
                echo "    ";
            }
            // line 129
            echo "    
    <div class=\"form-group row\">

        <label for=\"";
            // line 132
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        
        <div class=\"col-sm\">

            ";
            // line 136
            if (($context["hint"] ?? null)) {
                // line 137
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 139
            echo "
            <div class=\"input-group ";
            // line 140
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo " upload-input-group\">
                ";
            // line 142
            echo "                <input type=\"text\" class=\"form-control upload-text\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">

                <div class=\"input-group-addon p-0\">
                    <input id=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\" type=\"file\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-actual\" class=\"d-none\" accept=\"";
            echo twig_escape_filter($this->env, ($context["allowed_types"] ?? null), "html", null, true);
            echo "\">
                    <label class=\"input-group-text mb-0 px-3 w-100 h-100 d-flex align-items-center\" for=\"";
            // line 146
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\">";
            echo twig_escape_filter($this->env, ($context["buttonText"] ?? null), "html", null, true);
            echo "</label>
                </div>
            </div>
            
            ";
            // line 150
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "empty", array())) {
                // line 151
                echo "                <small class=\"form-text scoopm-error\">Required. Please try again</small>
            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 152
($context["errors"] ?? null), "invalid", array())) {
                // line 153
                echo "                <small class=\"form-text scoopm-error\">Incorrect file type. Please try again</small>
            ";
            }
            // line 155
            echo "            
            <small class=\"form-text scoopm-error\">Oops, there was an error. Please try again</small>

            <small class=\"form-text scoopm-hint\">";
            // line 158
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

    // line 164
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
            // line 165
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 166
                echo "        ";
                // line 167
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 168
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 169
                echo "    ";
            } else {
                // line 170
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 171
                echo "    ";
            }
            // line 172
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 173
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <select id=\"";
            // line 175
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"custom-select form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 176
            if (($context["options"] ?? null)) {
                // line 177
                echo "                    <option value=\"\">Choose...</option>
                    ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 179
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
                // line 181
                echo "                ";
            }
            // line 182
            echo "            </select>
            ";
            // line 183
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "invalid", array())) {
                // line 184
                echo "                <small class=\"form-text scoopm-error\">Required</small>
            ";
            }
            // line 186
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_title($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 201
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

    // line 205
    public function macro_heading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            echo "    <div class=\"row pt-4\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>";
            // line 208
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

    // line 213
    public function macro_subHeading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 214
            echo "    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <p class=\"h5 fw-400\">";
            // line 216
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

    // line 221
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
            // line 222
            echo "    <div class=\"form-group text-center mt-4\">

        ";
            // line 224
            if (($context["goingBack"] ?? null)) {
                // line 225
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Back\" class=\"back-button btn btn-outline-secondary mr-sm-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        ";
            }
            // line 227
            echo "
        ";
            // line 228
            if ( !($context["submitting"] ?? null)) {
                // line 229
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        ";
            } else {
                // line 231
                echo "            <input id=\"submit\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\"/>
        ";
            }
            // line 233
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
        return array (  832 => 233,  828 => 231,  822 => 229,  820 => 228,  817 => 227,  811 => 225,  809 => 224,  805 => 222,  791 => 221,  778 => 216,  774 => 214,  762 => 213,  749 => 208,  745 => 206,  733 => 205,  720 => 201,  708 => 200,  697 => 186,  693 => 184,  691 => 183,  688 => 182,  685 => 181,  670 => 179,  666 => 178,  663 => 177,  661 => 176,  653 => 175,  646 => 173,  643 => 172,  640 => 171,  637 => 170,  634 => 169,  631 => 168,  628 => 167,  626 => 166,  623 => 165,  607 => 164,  593 => 158,  588 => 155,  584 => 153,  582 => 152,  579 => 151,  577 => 150,  568 => 146,  560 => 145,  551 => 142,  547 => 140,  544 => 139,  538 => 137,  536 => 136,  527 => 132,  522 => 129,  519 => 128,  516 => 127,  513 => 126,  510 => 125,  507 => 124,  504 => 123,  501 => 121,  498 => 120,  495 => 119,  492 => 118,  489 => 117,  486 => 116,  483 => 115,  480 => 114,  477 => 113,  475 => 112,  470 => 111,  467 => 110,  464 => 109,  461 => 108,  458 => 106,  455 => 105,  452 => 104,  449 => 103,  446 => 102,  443 => 101,  441 => 100,  438 => 99,  435 => 97,  418 => 96,  396 => 90,  389 => 88,  386 => 87,  383 => 86,  380 => 85,  377 => 84,  374 => 83,  371 => 82,  369 => 81,  366 => 80,  351 => 79,  331 => 73,  324 => 71,  321 => 70,  318 => 69,  315 => 68,  312 => 67,  309 => 66,  306 => 65,  304 => 64,  301 => 63,  286 => 62,  264 => 56,  257 => 54,  254 => 53,  251 => 52,  248 => 51,  245 => 50,  242 => 49,  239 => 48,  237 => 47,  234 => 46,  219 => 45,  198 => 36,  195 => 35,  189 => 33,  187 => 32,  179 => 29,  176 => 28,  173 => 27,  170 => 26,  167 => 25,  164 => 24,  161 => 23,  159 => 22,  156 => 21,  140 => 20,  127 => 15,  113 => 14,  106 => 12,  103 => 11,  100 => 10,  97 => 9,  94 => 8,  91 => 7,  88 => 6,  86 => 5,  83 => 4,  67 => 3,  62 => 220,  59 => 212,  56 => 204,  53 => 199,  42 => 189,  39 => 163,  36 => 95,  33 => 78,  30 => 61,  25 => 42,  22 => 19,  19 => 2,);
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
    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>


{% macro password(title, name, value, errors) %}
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
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control {{validation_class}}\" value=\"{{value}}\" bplaceholder=\"{{title}}\" maxlength=\"20\" required/>
            <small id=\"password-size\" class=\"form-text scoopm-hint\">Password must be between 6 and 20 characters</small>
        </div>
    </div>
{% endmacro %}

{% macro confirm(title, name, value, errors) %}
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
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control\" value=\"{{value}}\" bplaceholder=\"{{title}}\" maxlength=\"20\" required/>
            <small id=\"password-match\" class=\"form-text scoopm-error\">Passwords don't match</small>
        </div>
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
            <input id=\"submit\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\"/>
        {% endif %}

    </div>
{% endmacro %}
", "form_macros.twig.html", "/var/www/scoopm/templates/form_macros.twig.html");
    }
}
