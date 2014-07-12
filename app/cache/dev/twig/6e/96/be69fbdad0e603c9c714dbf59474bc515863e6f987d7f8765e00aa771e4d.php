<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6e96be69fbdad0e603c9c714dbf59474bc515863e6f987d7f8765e00aa771e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  796 => 489,  792 => 488,  788 => 486,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  361 => 125,  345 => 120,  334 => 117,  315 => 110,  303 => 106,  300 => 105,  274 => 97,  353 => 328,  350 => 327,  306 => 107,  216 => 96,  20 => 1,  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 242,  487 => 221,  482 => 219,  478 => 217,  450 => 200,  431 => 192,  422 => 188,  418 => 186,  331 => 145,  327 => 114,  280 => 126,  262 => 120,  213 => 100,  207 => 98,  233 => 133,  433 => 174,  424 => 172,  415 => 167,  405 => 180,  376 => 165,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 121,  328 => 139,  313 => 133,  286 => 128,  277 => 116,  236 => 104,  222 => 99,  167 => 71,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 150,  332 => 116,  329 => 133,  323 => 132,  321 => 112,  316 => 139,  307 => 127,  275 => 112,  272 => 111,  270 => 123,  231 => 83,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 55,  212 => 78,  134 => 54,  253 => 141,  150 => 65,  58 => 25,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 173,  386 => 225,  383 => 156,  380 => 167,  375 => 222,  373 => 221,  367 => 128,  338 => 119,  335 => 141,  318 => 111,  297 => 104,  292 => 171,  281 => 118,  194 => 136,  191 => 77,  186 => 92,  118 => 49,  23 => 2,  65 => 22,  287 => 140,  267 => 122,  202 => 94,  175 => 78,  170 => 84,  104 => 32,  129 => 64,  198 => 96,  192 => 94,  126 => 69,  113 => 48,  84 => 40,  77 => 25,  114 => 65,  299 => 126,  293 => 122,  324 => 113,  308 => 287,  304 => 120,  301 => 133,  291 => 102,  279 => 161,  276 => 125,  271 => 112,  265 => 96,  250 => 126,  223 => 130,  185 => 74,  181 => 90,  172 => 73,  155 => 65,  153 => 77,  146 => 61,  266 => 103,  263 => 95,  257 => 106,  248 => 114,  245 => 106,  237 => 104,  218 => 128,  211 => 96,  152 => 78,  148 => 67,  53 => 17,  242 => 124,  234 => 103,  232 => 102,  215 => 96,  206 => 103,  195 => 77,  190 => 76,  165 => 83,  160 => 101,  90 => 42,  81 => 14,  100 => 36,  70 => 26,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 491,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 485,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 464,  629 => 454,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 250,  538 => 392,  527 => 408,  520 => 240,  517 => 404,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 175,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 160,  357 => 123,  349 => 303,  347 => 152,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 130,  288 => 101,  282 => 114,  259 => 119,  255 => 93,  251 => 115,  249 => 110,  239 => 110,  210 => 99,  205 => 92,  200 => 87,  188 => 90,  184 => 91,  180 => 81,  178 => 76,  174 => 65,  161 => 63,  137 => 59,  124 => 61,  110 => 61,  76 => 34,  480 => 162,  474 => 161,  469 => 213,  461 => 209,  457 => 153,  453 => 355,  444 => 197,  440 => 148,  437 => 344,  435 => 194,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 158,  355 => 122,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 100,  278 => 98,  268 => 85,  264 => 112,  258 => 94,  252 => 144,  247 => 138,  241 => 135,  229 => 101,  220 => 96,  214 => 95,  177 => 76,  169 => 104,  140 => 79,  132 => 71,  128 => 75,  107 => 52,  61 => 17,  273 => 124,  269 => 114,  254 => 105,  243 => 92,  240 => 101,  238 => 94,  235 => 85,  230 => 132,  227 => 100,  224 => 81,  221 => 98,  219 => 97,  217 => 95,  208 => 95,  204 => 78,  179 => 77,  159 => 83,  143 => 51,  135 => 63,  119 => 40,  102 => 41,  71 => 23,  67 => 20,  63 => 18,  59 => 22,  93 => 38,  88 => 32,  78 => 18,  28 => 3,  87 => 41,  46 => 13,  44 => 20,  94 => 54,  89 => 30,  85 => 24,  75 => 19,  68 => 30,  56 => 16,  27 => 3,  25 => 5,  21 => 2,  201 => 89,  196 => 92,  183 => 63,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 84,  142 => 65,  138 => 56,  136 => 71,  121 => 50,  117 => 39,  105 => 58,  91 => 33,  62 => 27,  49 => 14,  31 => 8,  38 => 7,  26 => 3,  24 => 2,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 21,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 71,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 67,  115 => 38,  111 => 47,  108 => 47,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 21,  66 => 25,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 92,  203 => 84,  199 => 93,  193 => 83,  189 => 93,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 77,  164 => 70,  162 => 68,  154 => 73,  149 => 77,  147 => 75,  144 => 57,  141 => 73,  133 => 65,  130 => 40,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 62,  99 => 36,  95 => 34,  92 => 43,  86 => 49,  82 => 28,  80 => 27,  73 => 33,  64 => 23,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 12,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
