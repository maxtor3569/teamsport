<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_3c7c226a52f878bf5199b26e0b47a7aac5f8588312d85b953b22ed00d3a7ddca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  320 => 127,  289 => 113,  256 => 96,  226 => 84,  378 => 157,  363 => 153,  358 => 151,  340 => 145,  326 => 138,  296 => 121,  290 => 119,  197 => 71,  810 => 492,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  361 => 146,  345 => 147,  334 => 141,  315 => 125,  303 => 122,  300 => 121,  274 => 110,  353 => 149,  350 => 327,  306 => 107,  216 => 79,  20 => 1,  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 242,  487 => 221,  482 => 219,  478 => 217,  450 => 200,  431 => 189,  422 => 184,  418 => 186,  331 => 140,  327 => 114,  280 => 126,  262 => 98,  213 => 78,  207 => 75,  233 => 87,  433 => 174,  424 => 172,  415 => 180,  405 => 180,  376 => 165,  371 => 156,  359 => 148,  354 => 147,  351 => 141,  348 => 140,  328 => 139,  313 => 133,  286 => 112,  277 => 116,  236 => 104,  222 => 83,  167 => 71,  416 => 162,  403 => 158,  389 => 160,  377 => 149,  352 => 139,  346 => 144,  343 => 146,  332 => 116,  329 => 131,  323 => 128,  321 => 135,  316 => 139,  307 => 128,  275 => 105,  272 => 111,  270 => 102,  231 => 83,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 55,  212 => 78,  134 => 47,  253 => 100,  150 => 55,  58 => 14,  127 => 35,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 176,  399 => 156,  396 => 161,  394 => 168,  391 => 173,  386 => 159,  383 => 156,  380 => 160,  375 => 222,  373 => 156,  367 => 155,  338 => 135,  335 => 134,  318 => 111,  297 => 104,  292 => 171,  281 => 114,  194 => 70,  191 => 69,  186 => 92,  118 => 49,  23 => 2,  65 => 22,  287 => 140,  267 => 101,  202 => 94,  175 => 58,  170 => 56,  104 => 31,  129 => 64,  198 => 96,  192 => 94,  126 => 69,  113 => 38,  84 => 25,  77 => 25,  114 => 65,  299 => 126,  293 => 120,  324 => 113,  308 => 287,  304 => 120,  301 => 133,  291 => 102,  279 => 161,  276 => 111,  271 => 112,  265 => 105,  250 => 126,  223 => 130,  185 => 66,  181 => 65,  172 => 62,  155 => 47,  153 => 56,  146 => 61,  266 => 103,  263 => 95,  257 => 106,  248 => 94,  245 => 106,  237 => 104,  218 => 128,  211 => 96,  152 => 46,  148 => 67,  53 => 12,  242 => 124,  234 => 103,  232 => 88,  215 => 96,  206 => 103,  195 => 77,  190 => 76,  165 => 60,  160 => 101,  90 => 27,  81 => 24,  100 => 36,  70 => 19,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 491,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 485,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 464,  629 => 454,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 250,  538 => 392,  527 => 408,  520 => 240,  517 => 404,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 172,  395 => 175,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 160,  357 => 123,  349 => 303,  347 => 152,  342 => 137,  333 => 140,  325 => 129,  319 => 136,  317 => 287,  302 => 125,  295 => 130,  288 => 118,  282 => 114,  259 => 103,  255 => 101,  251 => 115,  249 => 110,  239 => 110,  210 => 77,  205 => 92,  200 => 72,  188 => 90,  184 => 63,  180 => 81,  178 => 64,  174 => 65,  161 => 63,  137 => 59,  124 => 61,  110 => 61,  76 => 17,  480 => 162,  474 => 161,  469 => 213,  461 => 209,  457 => 153,  453 => 199,  444 => 197,  440 => 148,  437 => 344,  435 => 194,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 158,  355 => 143,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 124,  309 => 129,  305 => 95,  298 => 120,  294 => 144,  285 => 116,  283 => 115,  278 => 106,  268 => 85,  264 => 112,  258 => 94,  252 => 144,  247 => 138,  241 => 90,  229 => 85,  220 => 81,  214 => 95,  177 => 76,  169 => 104,  140 => 79,  132 => 71,  128 => 75,  107 => 52,  61 => 12,  273 => 124,  269 => 107,  254 => 105,  243 => 92,  240 => 101,  238 => 94,  235 => 89,  230 => 132,  227 => 86,  224 => 81,  221 => 98,  219 => 97,  217 => 95,  208 => 76,  204 => 78,  179 => 77,  159 => 83,  143 => 51,  135 => 63,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 18,  59 => 13,  93 => 28,  88 => 32,  78 => 18,  28 => 3,  87 => 26,  46 => 10,  44 => 10,  94 => 21,  89 => 30,  85 => 24,  75 => 19,  68 => 30,  56 => 12,  27 => 3,  25 => 5,  21 => 2,  201 => 89,  196 => 92,  183 => 63,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 84,  142 => 65,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 14,  49 => 14,  31 => 5,  38 => 6,  26 => 3,  24 => 2,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 8,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 71,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 38,  111 => 47,  108 => 33,  101 => 31,  98 => 29,  96 => 30,  83 => 33,  74 => 21,  66 => 25,  55 => 9,  52 => 13,  50 => 22,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 4,  209 => 92,  203 => 73,  199 => 93,  193 => 83,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 73,  149 => 77,  147 => 54,  144 => 42,  141 => 51,  133 => 65,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 62,  99 => 31,  95 => 34,  92 => 43,  86 => 49,  82 => 19,  80 => 27,  73 => 20,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
