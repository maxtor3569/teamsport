<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_97767853e89e774b1401aac3cf22c5d0e827e40f4417d0d09a2f1d400b229935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 242,  487 => 221,  482 => 219,  478 => 217,  450 => 200,  431 => 192,  422 => 188,  418 => 186,  331 => 145,  327 => 143,  280 => 126,  262 => 120,  213 => 100,  207 => 98,  233 => 133,  433 => 174,  424 => 172,  415 => 167,  405 => 180,  376 => 165,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 145,  328 => 139,  313 => 133,  286 => 128,  277 => 116,  236 => 104,  222 => 99,  167 => 74,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 150,  332 => 134,  329 => 133,  323 => 132,  321 => 137,  316 => 139,  307 => 127,  275 => 112,  272 => 111,  270 => 123,  231 => 106,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 37,  212 => 95,  134 => 51,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 173,  386 => 225,  383 => 156,  380 => 167,  375 => 222,  373 => 221,  367 => 145,  338 => 142,  335 => 141,  318 => 189,  297 => 131,  292 => 171,  281 => 118,  194 => 136,  191 => 115,  186 => 92,  118 => 36,  23 => 3,  65 => 19,  287 => 140,  267 => 122,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 70,  198 => 96,  192 => 94,  126 => 69,  113 => 34,  84 => 23,  77 => 32,  114 => 65,  299 => 126,  293 => 122,  324 => 138,  308 => 130,  304 => 120,  301 => 133,  291 => 129,  279 => 161,  276 => 125,  271 => 112,  265 => 121,  250 => 126,  223 => 130,  185 => 83,  181 => 90,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 106,  248 => 114,  245 => 106,  237 => 134,  218 => 128,  211 => 96,  152 => 78,  148 => 62,  53 => 15,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 27,  81 => 45,  100 => 31,  70 => 22,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 250,  538 => 392,  527 => 243,  520 => 240,  517 => 382,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 175,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 160,  357 => 309,  349 => 303,  347 => 152,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 130,  288 => 118,  282 => 114,  259 => 119,  255 => 141,  251 => 115,  249 => 110,  239 => 110,  210 => 99,  205 => 92,  200 => 87,  188 => 82,  184 => 91,  180 => 81,  178 => 76,  174 => 90,  161 => 84,  137 => 59,  124 => 48,  110 => 61,  76 => 43,  480 => 162,  474 => 161,  469 => 213,  461 => 209,  457 => 153,  453 => 355,  444 => 197,  440 => 148,  437 => 344,  435 => 194,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 158,  355 => 140,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 137,  309 => 128,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 127,  278 => 86,  268 => 85,  264 => 112,  258 => 129,  252 => 144,  247 => 138,  241 => 135,  229 => 101,  220 => 96,  214 => 97,  177 => 87,  169 => 104,  140 => 79,  132 => 71,  128 => 75,  107 => 52,  61 => 22,  273 => 124,  269 => 114,  254 => 105,  243 => 112,  240 => 101,  238 => 94,  235 => 93,  230 => 132,  227 => 131,  224 => 100,  221 => 104,  219 => 103,  217 => 95,  208 => 95,  204 => 94,  179 => 100,  159 => 83,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 20,  67 => 15,  63 => 19,  59 => 31,  93 => 55,  88 => 32,  78 => 29,  28 => 3,  87 => 26,  46 => 12,  44 => 11,  94 => 52,  89 => 41,  85 => 31,  75 => 35,  68 => 31,  56 => 16,  27 => 4,  25 => 5,  21 => 2,  201 => 97,  196 => 91,  183 => 63,  171 => 87,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 72,  136 => 57,  121 => 37,  117 => 66,  105 => 32,  91 => 25,  62 => 32,  49 => 13,  31 => 4,  38 => 7,  26 => 11,  24 => 6,  19 => 1,  79 => 44,  72 => 18,  69 => 21,  47 => 21,  40 => 10,  37 => 9,  22 => 1,  246 => 244,  157 => 69,  145 => 59,  139 => 55,  131 => 46,  123 => 68,  120 => 67,  115 => 38,  111 => 64,  108 => 39,  101 => 61,  98 => 36,  96 => 30,  83 => 40,  74 => 21,  66 => 33,  55 => 14,  52 => 14,  50 => 17,  43 => 8,  41 => 7,  35 => 9,  32 => 6,  29 => 6,  209 => 94,  203 => 84,  199 => 118,  193 => 88,  189 => 93,  187 => 93,  182 => 80,  176 => 89,  173 => 88,  168 => 77,  164 => 85,  162 => 68,  154 => 73,  149 => 77,  147 => 82,  144 => 57,  141 => 73,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 43,  112 => 35,  109 => 41,  106 => 63,  103 => 62,  99 => 36,  95 => 48,  92 => 35,  86 => 49,  82 => 22,  80 => 37,  73 => 33,  64 => 33,  60 => 18,  57 => 17,  54 => 16,  51 => 13,  48 => 11,  45 => 20,  42 => 8,  39 => 6,  36 => 5,  33 => 3,  30 => 1,);
    }
}
