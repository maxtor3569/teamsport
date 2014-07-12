<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_600df567a5173a6167038b953d30bded46449a967d1de889c112e9e554d7f0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  903 => 229,  900 => 228,  897 => 227,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  772 => 172,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  724 => 154,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  696 => 140,  695 => 139,  683 => 135,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  617 => 112,  598 => 107,  596 => 106,  555 => 95,  550 => 94,  547 => 93,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  442 => 62,  428 => 59,  414 => 52,  400 => 47,  388 => 42,  344 => 24,  311 => 14,  260 => 363,  225 => 298,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  429 => 188,  320 => 127,  289 => 113,  256 => 96,  226 => 84,  378 => 157,  363 => 32,  358 => 151,  340 => 145,  326 => 138,  296 => 121,  290 => 5,  197 => 249,  810 => 492,  796 => 183,  792 => 488,  788 => 486,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  522 => 406,  361 => 146,  345 => 147,  334 => 141,  315 => 125,  303 => 122,  300 => 121,  274 => 110,  353 => 149,  350 => 26,  306 => 107,  216 => 79,  20 => 1,  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 90,  487 => 221,  482 => 219,  478 => 74,  450 => 64,  431 => 189,  422 => 184,  418 => 186,  331 => 140,  327 => 114,  280 => 126,  262 => 98,  213 => 78,  207 => 269,  233 => 304,  433 => 60,  424 => 172,  415 => 180,  405 => 49,  376 => 165,  371 => 35,  359 => 148,  354 => 147,  351 => 141,  348 => 140,  328 => 139,  313 => 15,  286 => 112,  277 => 116,  236 => 104,  222 => 297,  167 => 71,  416 => 162,  403 => 48,  389 => 160,  377 => 37,  352 => 139,  346 => 144,  343 => 146,  332 => 20,  329 => 131,  323 => 128,  321 => 135,  316 => 16,  307 => 128,  275 => 105,  272 => 111,  270 => 102,  231 => 83,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 28,  212 => 279,  134 => 161,  253 => 342,  150 => 55,  58 => 9,  127 => 35,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 50,  399 => 156,  396 => 161,  394 => 168,  391 => 173,  386 => 159,  383 => 156,  380 => 160,  375 => 222,  373 => 156,  367 => 155,  338 => 135,  335 => 21,  318 => 111,  297 => 104,  292 => 171,  281 => 388,  194 => 248,  191 => 246,  186 => 239,  118 => 49,  23 => 1,  65 => 16,  287 => 140,  267 => 101,  202 => 266,  175 => 58,  170 => 56,  104 => 90,  129 => 148,  198 => 96,  192 => 94,  126 => 147,  113 => 38,  84 => 24,  77 => 25,  114 => 111,  299 => 8,  293 => 6,  324 => 113,  308 => 13,  304 => 120,  301 => 133,  291 => 102,  279 => 161,  276 => 381,  271 => 374,  265 => 105,  250 => 341,  223 => 130,  185 => 66,  181 => 232,  172 => 62,  155 => 47,  153 => 56,  146 => 181,  266 => 366,  263 => 365,  257 => 106,  248 => 336,  245 => 335,  237 => 104,  218 => 128,  211 => 96,  152 => 46,  148 => 67,  53 => 5,  242 => 124,  234 => 103,  232 => 88,  215 => 280,  206 => 103,  195 => 77,  190 => 76,  165 => 60,  160 => 101,  90 => 27,  81 => 30,  100 => 36,  70 => 17,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 233,  894 => 226,  883 => 77,  866 => 63,  862 => 212,  858 => 61,  854 => 60,  844 => 204,  840 => 52,  836 => 51,  832 => 50,  828 => 197,  824 => 48,  820 => 47,  815 => 46,  812 => 190,  807 => 491,  801 => 185,  790 => 31,  783 => 177,  780 => 176,  775 => 485,  769 => 171,  767 => 170,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 155,  725 => 485,  721 => 153,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 141,  693 => 477,  689 => 137,  684 => 474,  680 => 134,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 464,  629 => 454,  621 => 433,  619 => 113,  614 => 111,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 105,  576 => 101,  573 => 407,  564 => 99,  557 => 96,  553 => 397,  545 => 250,  538 => 392,  527 => 91,  520 => 240,  517 => 404,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 79,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 58,  417 => 234,  410 => 334,  404 => 333,  401 => 172,  395 => 175,  390 => 43,  385 => 41,  369 => 146,  366 => 33,  364 => 160,  357 => 123,  349 => 303,  347 => 152,  342 => 23,  333 => 140,  325 => 129,  319 => 136,  317 => 287,  302 => 125,  295 => 130,  288 => 4,  282 => 114,  259 => 103,  255 => 353,  251 => 115,  249 => 110,  239 => 110,  210 => 270,  205 => 92,  200 => 72,  188 => 90,  184 => 233,  180 => 81,  178 => 64,  174 => 217,  161 => 202,  137 => 59,  124 => 132,  110 => 38,  76 => 21,  480 => 75,  474 => 161,  469 => 213,  461 => 70,  457 => 153,  453 => 199,  444 => 197,  440 => 148,  437 => 61,  435 => 194,  430 => 342,  427 => 334,  423 => 57,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 149,  360 => 158,  355 => 27,  341 => 105,  337 => 22,  322 => 190,  314 => 99,  312 => 124,  309 => 129,  305 => 95,  298 => 120,  294 => 144,  285 => 3,  283 => 115,  278 => 387,  268 => 373,  264 => 112,  258 => 354,  252 => 144,  247 => 138,  241 => 90,  229 => 85,  220 => 290,  214 => 95,  177 => 76,  169 => 210,  140 => 79,  132 => 71,  128 => 75,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 105,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 98,  219 => 97,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 63,  119 => 117,  102 => 30,  71 => 19,  67 => 18,  63 => 18,  59 => 6,  93 => 27,  88 => 25,  78 => 14,  28 => 3,  87 => 26,  46 => 6,  44 => 13,  94 => 57,  89 => 35,  85 => 26,  75 => 13,  68 => 20,  56 => 14,  27 => 3,  25 => 5,  21 => 2,  201 => 89,  196 => 92,  183 => 63,  171 => 216,  166 => 209,  163 => 53,  158 => 80,  156 => 195,  151 => 188,  142 => 65,  138 => 56,  136 => 168,  121 => 131,  117 => 39,  105 => 30,  91 => 29,  62 => 15,  49 => 12,  31 => 4,  38 => 7,  26 => 4,  24 => 2,  19 => 2,  79 => 32,  72 => 21,  69 => 12,  47 => 22,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 71,  145 => 74,  139 => 169,  131 => 160,  123 => 42,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 29,  98 => 29,  96 => 67,  83 => 33,  74 => 11,  66 => 12,  55 => 12,  52 => 12,  50 => 7,  43 => 9,  41 => 7,  35 => 9,  32 => 5,  29 => 5,  209 => 92,  203 => 73,  199 => 265,  193 => 83,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 54,  144 => 176,  141 => 175,  133 => 65,  130 => 46,  125 => 45,  122 => 41,  116 => 116,  112 => 39,  109 => 31,  106 => 104,  103 => 62,  99 => 68,  95 => 34,  92 => 31,  86 => 19,  82 => 26,  80 => 23,  73 => 20,  64 => 19,  60 => 20,  57 => 12,  54 => 11,  51 => 14,  48 => 13,  45 => 12,  42 => 5,  39 => 4,  36 => 5,  33 => 6,  30 => 3,);
    }
}
