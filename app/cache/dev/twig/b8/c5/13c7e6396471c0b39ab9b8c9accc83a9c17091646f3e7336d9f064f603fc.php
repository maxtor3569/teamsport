<?php

/* SportimimiuserBundle:Profile:videoProfil.html.twig */
class __TwigTemplate_b8c513c7e6396471c0b39ab9b8c9accc83a9c17091646f3e7336d9f064f603fc extends Twig_Template
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
        // line 1
        echo "<div class=\"part\">
\t\t";
        // line 2
        $context["i"] = 0;
        // line 3
        echo "\t\t
\t\t<div class=\"topPart\">
\t\t\t<div style=\"float:left\"><h2 class=\"titlePart\" style=\"margin-top:8px;margin-left:17px\">Video</h2></div>
\t\t\t";
        // line 6
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) {
            // line 7
            echo "\t\t\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
                // line 8
                echo "\t\t\t\t\t<div class=\"button\" style=\"float:right;background:#00A751;margin:3px\">\t
\t\t\t\t\t";
                // line 9
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 1)) {
                    // line 10
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array(), "any", true, true)) {
                        // line 11
                        echo "\t\t\t\t\t
\t\t\t\t\t\t\t";
                        // line 12
                        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
                            // line 13
                            echo "\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PhotoProfile", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\tThêm video</a>
\t\t\t\t\t\t\t";
                        }
                        // line 16
                        echo "\t\t\t\t\t\t";
                    }
                    // line 17
                    echo "\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 20
            echo "\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "document"));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 23
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "type") == "video")) {
                // line 24
                echo "\t\t\t\t";
                $context["i"] = 1;
                // line 25
                echo "\t\t\t\t<div id=\"videoSportif\" style=\"clear:both\">
\t\t\t\t\t
\t\t\t\t\t<video id=\"example_video_1\" class=\"video-js vjs-default-skin\"
\t\t\t\t\tcontrols preload=\"auto\" width=\"640\" height=\"264\"
\t\t\t\t\tposter=\"\"
\t\t\t\t\tdata-setup='{\"example_option\":true}'>
\t\t\t\t\t\t<source src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                echo "uploads/img/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id"), "html", null, true);
                echo ".mp4\" type='video/mp4' />
\t\t\t\t\t\t<source src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                echo "uploads/img/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id"), "html", null, true);
                echo ".webm\" type='video/webm' />
\t\t\t\t\t\t<source src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                echo "uploads/img/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id"), "html", null, true);
                echo ".ogv\" type='video/ogg' />
\t\t\t\t\t\t <embed src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
                echo "uploads/img/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : $this->getContext($context, "doc")), "id"), "html", null, true);
                echo ".flv\" type=\"application/x-shockwave-flash\" width=\"1024\" height=\"798\" allowscriptaccess=\"always\" allowfullscreen=\"true\">
\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t\t";
            }
            // line 39
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t
\t
\t";
        // line 41
        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 1)) {
            // line 42
            echo "\t\tBạn chưa có vidéo
\t";
        }
        // line 44
        echo "\t</div>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:videoProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 38,  23 => 2,  65 => 21,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 83,  126 => 58,  113 => 54,  84 => 37,  77 => 24,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 125,  185 => 77,  181 => 112,  172 => 105,  155 => 58,  153 => 68,  146 => 85,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 93,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 90,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 33,  70 => 22,  34 => 8,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 90,  200 => 87,  188 => 82,  184 => 81,  180 => 81,  178 => 96,  174 => 90,  161 => 70,  137 => 53,  124 => 191,  110 => 186,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 127,  220 => 124,  214 => 87,  177 => 87,  169 => 104,  140 => 65,  132 => 52,  128 => 75,  107 => 60,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 98,  217 => 123,  208 => 121,  204 => 72,  179 => 79,  159 => 60,  143 => 54,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 21,  63 => 20,  59 => 30,  93 => 43,  88 => 31,  78 => 35,  28 => 3,  87 => 38,  46 => 12,  44 => 9,  94 => 32,  89 => 35,  85 => 29,  75 => 27,  68 => 32,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 89,  196 => 117,  183 => 113,  171 => 77,  166 => 103,  163 => 79,  158 => 67,  156 => 59,  151 => 98,  142 => 65,  138 => 64,  136 => 56,  121 => 63,  117 => 51,  105 => 42,  91 => 32,  62 => 14,  49 => 13,  31 => 7,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 25,  69 => 17,  47 => 13,  40 => 11,  37 => 9,  22 => 2,  246 => 244,  157 => 69,  145 => 55,  139 => 82,  131 => 44,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 45,  101 => 52,  98 => 36,  96 => 25,  83 => 37,  74 => 23,  66 => 20,  55 => 17,  52 => 14,  50 => 17,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 6,  209 => 95,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 99,  182 => 89,  176 => 84,  173 => 94,  168 => 81,  164 => 76,  162 => 91,  154 => 73,  149 => 71,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 59,  125 => 41,  122 => 53,  116 => 39,  112 => 37,  109 => 53,  106 => 34,  103 => 43,  99 => 46,  95 => 33,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 20,  60 => 18,  57 => 17,  54 => 16,  51 => 10,  48 => 9,  45 => 12,  42 => 11,  39 => 10,  36 => 6,  33 => 6,  30 => 5,);
    }
}
