<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_adcf64d609d476ed77954b922d77169f34360e6705dc4465df2e5673b4aa8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 125,  345 => 120,  334 => 117,  315 => 110,  303 => 106,  300 => 105,  274 => 97,  353 => 328,  350 => 327,  306 => 107,  216 => 96,  20 => 1,  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 242,  487 => 221,  482 => 219,  478 => 217,  450 => 200,  431 => 192,  422 => 188,  418 => 186,  331 => 145,  327 => 114,  280 => 126,  262 => 120,  213 => 100,  207 => 98,  233 => 133,  433 => 174,  424 => 172,  415 => 167,  405 => 180,  376 => 165,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 121,  328 => 139,  313 => 133,  286 => 128,  277 => 116,  236 => 104,  222 => 99,  167 => 71,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 150,  332 => 116,  329 => 133,  323 => 132,  321 => 112,  316 => 139,  307 => 127,  275 => 112,  272 => 111,  270 => 123,  231 => 83,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 55,  212 => 78,  134 => 54,  253 => 141,  150 => 65,  58 => 14,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 173,  386 => 225,  383 => 156,  380 => 167,  375 => 222,  373 => 221,  367 => 128,  338 => 119,  335 => 141,  318 => 111,  297 => 104,  292 => 171,  281 => 118,  194 => 136,  191 => 77,  186 => 92,  118 => 49,  23 => 2,  65 => 22,  287 => 140,  267 => 122,  202 => 77,  175 => 78,  170 => 93,  104 => 32,  129 => 64,  198 => 96,  192 => 94,  126 => 69,  113 => 48,  84 => 27,  77 => 25,  114 => 65,  299 => 126,  293 => 122,  324 => 113,  308 => 287,  304 => 120,  301 => 133,  291 => 102,  279 => 161,  276 => 125,  271 => 112,  265 => 96,  250 => 126,  223 => 130,  185 => 74,  181 => 90,  172 => 73,  155 => 65,  153 => 69,  146 => 61,  266 => 103,  263 => 95,  257 => 106,  248 => 114,  245 => 106,  237 => 104,  218 => 128,  211 => 96,  152 => 78,  148 => 67,  53 => 17,  242 => 124,  234 => 103,  232 => 102,  215 => 96,  206 => 103,  195 => 77,  190 => 76,  165 => 110,  160 => 101,  90 => 37,  81 => 14,  100 => 36,  70 => 26,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 250,  538 => 392,  527 => 243,  520 => 240,  517 => 382,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 175,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 160,  357 => 123,  349 => 303,  347 => 152,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 130,  288 => 101,  282 => 114,  259 => 119,  255 => 93,  251 => 115,  249 => 110,  239 => 110,  210 => 99,  205 => 92,  200 => 87,  188 => 76,  184 => 91,  180 => 81,  178 => 76,  174 => 65,  161 => 63,  137 => 59,  124 => 61,  110 => 61,  76 => 25,  480 => 162,  474 => 161,  469 => 213,  461 => 209,  457 => 153,  453 => 355,  444 => 197,  440 => 148,  437 => 344,  435 => 194,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 158,  355 => 122,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 100,  278 => 98,  268 => 85,  264 => 112,  258 => 94,  252 => 144,  247 => 138,  241 => 135,  229 => 101,  220 => 96,  214 => 95,  177 => 76,  169 => 104,  140 => 79,  132 => 71,  128 => 75,  107 => 52,  61 => 17,  273 => 124,  269 => 114,  254 => 105,  243 => 92,  240 => 101,  238 => 94,  235 => 85,  230 => 132,  227 => 100,  224 => 81,  221 => 98,  219 => 97,  217 => 95,  208 => 95,  204 => 78,  179 => 77,  159 => 83,  143 => 51,  135 => 63,  119 => 40,  102 => 41,  71 => 23,  67 => 20,  63 => 18,  59 => 22,  93 => 38,  88 => 32,  78 => 18,  28 => 6,  87 => 34,  46 => 10,  44 => 9,  94 => 54,  89 => 30,  85 => 24,  75 => 19,  68 => 12,  56 => 16,  27 => 3,  25 => 5,  21 => 2,  201 => 89,  196 => 91,  183 => 63,  171 => 73,  166 => 54,  163 => 75,  158 => 67,  156 => 62,  151 => 84,  142 => 65,  138 => 56,  136 => 48,  121 => 50,  117 => 39,  105 => 58,  91 => 33,  62 => 21,  49 => 11,  31 => 8,  38 => 7,  26 => 3,  24 => 2,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 244,  157 => 71,  145 => 52,  139 => 49,  131 => 45,  123 => 68,  120 => 67,  115 => 38,  111 => 47,  108 => 47,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 21,  66 => 25,  55 => 13,  52 => 12,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 92,  203 => 84,  199 => 118,  193 => 83,  189 => 93,  187 => 75,  182 => 78,  176 => 89,  173 => 88,  168 => 77,  164 => 70,  162 => 68,  154 => 73,  149 => 77,  147 => 82,  144 => 57,  141 => 73,  133 => 65,  130 => 40,  125 => 42,  122 => 41,  116 => 43,  112 => 36,  109 => 35,  106 => 63,  103 => 62,  99 => 36,  95 => 34,  92 => 27,  86 => 49,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 12,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
