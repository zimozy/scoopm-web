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
        // line 36
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 139
        echo "
";
        // line 165
        echo "








";
        // line 175
        echo "
";
        // line 180
        echo "
";
        // line 188
        echo "
";
        // line 196
        echo "
";
    }

    // line 3
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
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"text\" class=\"form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" required/>
            <small class=\"form-text scoopm-error\">Required</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
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
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 31
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
            <small id=\"password-size\" class=\"form-text scoopm-hint\">Password must be between 6 and 20 characters</small>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
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
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 48
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"password\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
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

    // line 54
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
            // line 55
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 56
                echo "        ";
                // line 57
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 58
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 59
                echo "    ";
            } else {
                // line 60
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 61
                echo "    ";
            }
            // line 62
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 63
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <input id=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" class=\"email form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" placeholder=\"";
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

    // line 71
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
            // line 72
            echo "
    ";
            // line 74
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 75
                echo "        ";
                // line 76
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 77
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 78
                echo "    ";
            } else {
                // line 79
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 80
                echo "    ";
            }
            // line 81
            echo "
    ";
            // line 83
            echo "    ";
            if ((($context["type"] ?? null) == "img")) {
                // line 84
                echo "
        ";
                // line 85
                $context["type_phrase"] = "<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: JPEG, PNG, GIF";
                // line 86
                echo "    
        ";
                // line 87
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, .png, .jpeg, .jpg, .gif";
                // line 88
                echo "
    ";
            } elseif ((            // line 89
($context["type"] ?? null) == "pdf")) {
                // line 90
                echo "    
        ";
                // line 91
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: PDF";
                // line 92
                echo "    
        ";
                // line 93
                $context["allowed_types"] = "application/pdf, .pdf";
                // line 94
                echo "
    ";
            } elseif ((            // line 95
($context["type"] ?? null) == "doc")) {
                // line 96
                echo "
        ";
                // line 97
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: PDF, Word Document";
                // line 98
                echo "
        ";
                // line 99
                $context["allowed_types"] = "application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, .pdf, .doc, .docx";
                // line 100
                echo "        
    ";
            } elseif ((            // line 101
($context["type"] ?? null) == "img/pdf")) {
                // line 102
                echo "
        ";
                // line 103
                $context["type_phrase"] = "<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: PDF, JPEG, PNG, GIF";
                // line 104
                echo "
        ";
                // line 105
                $context["allowed_types"] = "image/png, image/jpeg, image/gif, application/pdf, .png, .jpeg, .jpg, .gif, .pdf";
                // line 106
                echo "
    ";
            }
            // line 108
            echo "
    <div class=\"form-group row\">

        <label for=\"";
            // line 111
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label \">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        
        <div class=\"col-sm\">

            ";
            // line 115
            if (($context["hint"] ?? null)) {
                // line 116
                echo "                <p>";
                echo ($context["hint"] ?? null);
                echo "</p>
            ";
            }
            // line 118
            echo "
            <div class=\"input-group ";
            // line 119
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">
                <input type=\"text\" class=\"form-control upload-text\">
                ";
            // line 122
            echo "                <div class=\"input-group-addon p-0\">
                    <input id=\"";
            // line 123
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\" type=\"file\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"d-none\" accept=\"";
            echo twig_escape_filter($this->env, ($context["allowed_types"] ?? null), "html", null, true);
            echo "\">
                    <label class=\"input-group-text mb-0 px-3 py-1 w-100 h-100\" for=\"";
            // line 124
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "-input\">Browse...</label>
                </div>
            </div>
            
            ";
            // line 128
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "empty", array())) {
                // line 129
                echo "                <small class=\"form-text scoopm-error\">Required. Please try again</small>
            ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 130
($context["errors"] ?? null), "invalid", array())) {
                // line 131
                echo "                <small class=\"form-text scoopm-error\">Incorrect file type. Please try again</small>
            ";
            }
            // line 133
            echo "
            <small class=\"form-text scoopm-hint\">";
            // line 134
            echo ($context["type_phrase"] ?? null);
            echo "</small>

        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 140
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
            // line 141
            echo "    ";
            if ((($context["errors"] ?? null) == null)) {
                // line 142
                echo "        ";
                // line 143
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "passed", array())) {
                // line 144
                echo "        ";
                $context["validation_class"] = "scoopm-is-valid";
                // line 145
                echo "    ";
            } else {
                // line 146
                echo "        ";
                $context["validation_class"] = "scoopm-is-invalid";
                // line 147
                echo "    ";
            }
            // line 148
            echo "    <div class=\"form-group row\">
        <label for=\"";
            // line 149
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-3 col-form-label\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</label>
        <div class=\"col-sm\">
            <select id=\"";
            // line 151
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"custom-select form-control ";
            echo twig_escape_filter($this->env, ($context["validation_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 152
            if (($context["options"] ?? null)) {
                // line 153
                echo "                    <option value=\"\">Choose...</option>
                    ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 155
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
                // line 157
                echo "                ";
            }
            // line 158
            echo "            </select>
            ";
            // line 159
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "invalid", array())) {
                // line 160
                echo "                <small class=\"form-text scoopm-error\">Required</small>
            ";
            }
            // line 162
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_title($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 177
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

    // line 181
    public function macro_heading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 182
            echo "    <div class=\"row pt-4\">
        <div class=\"col-sm-9 offset-sm-3\">
                <h4>";
            // line 184
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

    // line 189
    public function macro_subHeading($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 190
            echo "    <div class=\"row\">
        <div class=\"col-sm-9 offset-sm-3\">
                <p>";
            // line 192
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

    // line 197
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
            // line 198
            echo "    <br>
    <div class=\"form-group\" style=\"text-align:center;\">

        ";
            // line 201
            if (($context["goingBack"] ?? null)) {
                // line 202
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Back\" class=\"back-button btn btn-outline-secondary mr-5 px-5\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Back&nbsp;</button>
        ";
            }
            // line 204
            echo "
        ";
            // line 205
            if ( !($context["submitting"] ?? null)) {
                // line 206
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, ($context["thisPage"] ?? null), "html", null, true);
                echo "Next\" class=\"next-button btn btn-outline-primary px-5\">&nbsp;Next&nbsp;&nbsp;<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></button>
        ";
            } else {
                // line 208
                echo "            <input id=\"submit\" type=\"submit\" class=\"btn btn-primary px-5\" value=\"Submit\"/>
        ";
            }
            // line 210
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
        return array (  735 => 210,  731 => 208,  725 => 206,  723 => 205,  720 => 204,  714 => 202,  712 => 201,  707 => 198,  693 => 197,  680 => 192,  676 => 190,  664 => 189,  651 => 184,  647 => 182,  635 => 181,  622 => 177,  610 => 176,  599 => 162,  595 => 160,  593 => 159,  590 => 158,  587 => 157,  572 => 155,  568 => 154,  565 => 153,  563 => 152,  555 => 151,  548 => 149,  545 => 148,  542 => 147,  539 => 146,  536 => 145,  533 => 144,  530 => 143,  528 => 142,  525 => 141,  509 => 140,  495 => 134,  492 => 133,  488 => 131,  486 => 130,  483 => 129,  481 => 128,  474 => 124,  466 => 123,  463 => 122,  458 => 119,  455 => 118,  449 => 116,  447 => 115,  438 => 111,  433 => 108,  429 => 106,  427 => 105,  424 => 104,  422 => 103,  419 => 102,  417 => 101,  414 => 100,  412 => 99,  409 => 98,  407 => 97,  404 => 96,  402 => 95,  399 => 94,  397 => 93,  394 => 92,  392 => 91,  389 => 90,  387 => 89,  384 => 88,  382 => 87,  379 => 86,  377 => 85,  374 => 84,  371 => 83,  368 => 81,  365 => 80,  362 => 79,  359 => 78,  356 => 77,  353 => 76,  351 => 75,  348 => 74,  345 => 72,  328 => 71,  306 => 65,  299 => 63,  296 => 62,  293 => 61,  290 => 60,  287 => 59,  284 => 58,  281 => 57,  279 => 56,  276 => 55,  261 => 54,  241 => 48,  234 => 46,  231 => 45,  228 => 44,  225 => 43,  222 => 42,  219 => 41,  216 => 40,  214 => 39,  211 => 38,  196 => 37,  174 => 31,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  155 => 25,  152 => 24,  149 => 23,  147 => 22,  144 => 21,  129 => 20,  107 => 14,  100 => 12,  97 => 11,  94 => 10,  91 => 9,  88 => 8,  85 => 7,  82 => 6,  80 => 5,  77 => 4,  62 => 3,  57 => 196,  54 => 188,  51 => 180,  48 => 175,  37 => 165,  34 => 139,  31 => 70,  28 => 53,  25 => 36,  22 => 19,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# INPUT TYPES #}

{% macro textInput(title, name, value, errors=null) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"text\" class=\"form-control {{validation_class}}\" value=\"{{value}}\" placeholder=\"{{title}}\" required/>
            <small class=\"form-text scoopm-error\">Required</small>
        </div>
    </div>
{% endmacro %}

{% macro password(title, name, value, errors) %}
    {% if errors == null %}
        {# Do nothing. #}
    {% elseif errors.passed %}
        {% set validation_class = 'scoopm-is-valid' %}
    {% else %}
        {% set validation_class = 'scoopm-is-invalid' %}
    {% endif %}
    <div class=\"form-group row\">
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control {{validation_class}}\" value=\"{{value}}\" placeholder=\"{{title}}\" maxlength=\"20\" required/>
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
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"password\" class=\"form-control\" value=\"{{value}}\" placeholder=\"{{title}}\" maxlength=\"20\" required/>
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
        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        <div class=\"col-sm\">
            <input id=\"{{name}}\" name=\"{{name}}\" type=\"email\" class=\"email form-control {{validation_class}}\" value=\"{{value}}\" placeholder=\"{{title}}\" required/>
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

        {% set type_phrase = '<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: JPEG, PNG, GIF' %}
    
        {% set allowed_types = 'image/png, image/jpeg, image/gif, .png, .jpeg, .jpg, .gif' %}

    {% elseif type == 'pdf' %}
    
        {% set type_phrase = '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: PDF' %}
    
        {% set allowed_types = 'application/pdf, .pdf' %}

    {% elseif type == 'doc' %}

        {% set type_phrase = '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-text\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: PDF, Word Document' %}

        {% set allowed_types = 'application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, .pdf, .doc, .docx' %}
        
    {% elseif type == 'img/pdf' %}

        {% set type_phrase = '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;<i class=\"fa fa-file-image-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Allowed types: PDF, JPEG, PNG, GIF' %}

        {% set allowed_types = 'image/png, image/jpeg, image/gif, application/pdf, .png, .jpeg, .jpg, .gif, .pdf' %}

    {% endif %}

    <div class=\"form-group row\">

        <label for=\"{{name}}\" class=\"col-sm-3 col-form-label \">{{title}}</label>
        
        <div class=\"col-sm\">

            {% if hint %}
                <p>{{hint|raw}}</p>
            {% endif %}

            <div class=\"input-group {{validation_class}}\">
                <input type=\"text\" class=\"form-control upload-text\">
                {# {% if value %}value=\"{{value}}\"{% endif %} #}
                <div class=\"input-group-addon p-0\">
                    <input id=\"{{name}}-input\" type=\"file\" name=\"{{name}}\" class=\"d-none\" accept=\"{{allowed_types}}\">
                    <label class=\"input-group-text mb-0 px-3 py-1 w-100 h-100\" for=\"{{name}}-input\">Browse...</label>
                </div>
            </div>
            
            {% if errors.empty %}
                <small class=\"form-text scoopm-error\">Required. Please try again</small>
            {% elseif errors.invalid %}
                <small class=\"form-text scoopm-error\">Incorrect file type. Please try again</small>
            {% endif %}

            <small class=\"form-text scoopm-hint\">{{type_phrase|raw}}</small>

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
                <p>{{text|raw}}</p>
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
", "form_macros.twig.html", "/var/www/scoopm/templates/form_macros.twig.html");
    }
}
