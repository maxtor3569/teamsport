<?php

/* SportimimiuserBundle:Profile:addProfile.html.twig */
class __TwigTemplate_73fba7441b0736edf545be39e9ee5357429a5561ea1dd4ff64b74ccfdbb7d0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets_include' => array($this, 'block_stylesheets_include'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SportimimiuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/validator/assets/lib/jquery-validation/dist/jquery.validate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/form-validator-register.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>

";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
        echo "</h3>
    <div class=\"innerLR\">
        <!-- Form -->
        <form class=\"form-horizontal margin-none\" id=\"validateSubmitForm\" method=\"post\" 
              autocomplete=\"off\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <!-- Widget -->
            <div class=\"widget\">
               
                <div class=\"widget-body innerAll inner-2x\">
                    <!-- Row -->
                    <div class=\"row innerLR\">
                        <!-- Column -->
                        <div class=\"col-md-4\">
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                   ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                             <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'label');
        echo " 
                                <div class=\"col-md-8\">
                                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                              <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'label');
        echo " 
                                <div class=\"col-md-8\">
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                        </div>
                        <!-- // Column END -->
                        <!-- Column -->
                        <div class=\"col-md-8\">
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                   ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"password\">Xác nhận mật khẩu</label>
                                <div class=\"col-md-8\">
                                    <input class=\"form-control\" id=\"confirm_password\"
                                           name=\"confirm_password\" type=\"password\" placeholder=\"Xác nhận mật khẩu\"/>
                                </div>
                            </div>
                            <!-- // Group END -->
                            
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                        </div>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                    <!-- Row -->
                    <div class=\"bg-gray innerAll inner-2x\">
                        <div class=\"row\">
                            <!-- Column -->
                            <div class=\"col-md-8\">
                               
                                <div class=\"checkbox\">
                                    <label class=\"checkbox-custom\" for=\"agree\">
                                        <i class=\"fa fa-fw fa-square-o\"></i>
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"agree\" name=\"agree\" />Tôi đã đọc và đồng ý về Chính sách bảo mật và Điều khoản sử dụng
                                    </label>
                                </div>
                               
                            </div>
                            <!-- // Column END -->
                            
                        </div>
                        <!-- // Row END -->
                    </div>
                    <div class=\"separator\"></div>
                    <!-- Form actions -->
                    <div class=\"form-actions\" style=\"text-align:center\">
                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i> Đăng ký</button>                  
                    </div>
                    <!-- // Form actions END -->
                </div>
            </div>
            <!-- // Widget END -->
        </form>
        <!-- // Form END -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:addProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 141,  150 => 65,  58 => 14,  127 => 42,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 38,  23 => 2,  65 => 21,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 95,  126 => 58,  113 => 54,  84 => 37,  77 => 24,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 125,  185 => 77,  181 => 112,  172 => 105,  155 => 58,  153 => 68,  146 => 85,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 93,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 109,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 33,  70 => 22,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 90,  200 => 87,  188 => 82,  184 => 81,  180 => 81,  178 => 96,  174 => 90,  161 => 70,  137 => 53,  124 => 191,  110 => 186,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 127,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 65,  132 => 52,  128 => 75,  107 => 60,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 98,  217 => 123,  208 => 121,  204 => 72,  179 => 79,  159 => 60,  143 => 54,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 16,  63 => 20,  59 => 30,  93 => 43,  88 => 31,  78 => 35,  28 => 3,  87 => 38,  46 => 17,  44 => 9,  94 => 33,  89 => 31,  85 => 29,  75 => 20,  68 => 32,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 113,  171 => 77,  166 => 103,  163 => 75,  158 => 67,  156 => 59,  151 => 98,  142 => 65,  138 => 64,  136 => 57,  121 => 63,  117 => 47,  105 => 42,  91 => 32,  62 => 14,  49 => 13,  31 => 4,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 25,  69 => 17,  47 => 9,  40 => 11,  37 => 9,  22 => 2,  246 => 244,  157 => 69,  145 => 63,  139 => 82,  131 => 55,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 41,  101 => 52,  98 => 36,  96 => 25,  83 => 37,  74 => 23,  66 => 20,  55 => 17,  52 => 14,  50 => 17,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 6,  209 => 95,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 84,  173 => 94,  168 => 77,  164 => 76,  162 => 91,  154 => 73,  149 => 71,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 59,  125 => 41,  122 => 49,  116 => 39,  112 => 37,  109 => 53,  106 => 34,  103 => 39,  99 => 46,  95 => 33,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 15,  60 => 18,  57 => 17,  54 => 16,  51 => 10,  48 => 9,  45 => 12,  42 => 8,  39 => 7,  36 => 6,  33 => 10,  30 => 5,);
    }
}
