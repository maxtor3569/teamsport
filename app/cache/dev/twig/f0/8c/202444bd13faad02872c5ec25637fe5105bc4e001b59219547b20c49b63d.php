<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_f08c202444bd13faad02872c5ec25637fe5105bc4e001b59219547b20c49b63d extends Twig_Template
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
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 328,  350 => 327,  306 => 286,  216 => 96,  20 => 1,  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 242,  487 => 221,  482 => 219,  478 => 217,  450 => 200,  431 => 192,  422 => 188,  418 => 186,  331 => 145,  327 => 143,  280 => 126,  262 => 120,  213 => 100,  207 => 98,  233 => 133,  433 => 174,  424 => 172,  415 => 167,  405 => 180,  376 => 165,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 145,  328 => 139,  313 => 133,  286 => 128,  277 => 116,  236 => 104,  222 => 99,  167 => 74,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 150,  332 => 134,  329 => 133,  323 => 132,  321 => 137,  316 => 139,  307 => 127,  275 => 112,  272 => 111,  270 => 123,  231 => 106,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 55,  212 => 95,  134 => 51,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 173,  386 => 225,  383 => 156,  380 => 167,  375 => 222,  373 => 221,  367 => 339,  338 => 142,  335 => 141,  318 => 189,  297 => 131,  292 => 171,  281 => 118,  194 => 136,  191 => 82,  186 => 92,  118 => 36,  23 => 2,  65 => 11,  287 => 140,  267 => 122,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 64,  198 => 96,  192 => 94,  126 => 69,  113 => 34,  84 => 27,  77 => 12,  114 => 65,  299 => 126,  293 => 122,  324 => 138,  308 => 287,  304 => 120,  301 => 133,  291 => 129,  279 => 161,  276 => 125,  271 => 112,  265 => 121,  250 => 126,  223 => 130,  185 => 83,  181 => 90,  172 => 73,  155 => 65,  153 => 70,  146 => 61,  266 => 103,  263 => 102,  257 => 106,  248 => 114,  245 => 106,  237 => 104,  218 => 128,  211 => 96,  152 => 78,  148 => 67,  53 => 15,  242 => 124,  234 => 103,  232 => 102,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 37,  81 => 14,  100 => 56,  70 => 24,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 250,  538 => 392,  527 => 243,  520 => 240,  517 => 382,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 175,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 160,  357 => 309,  349 => 303,  347 => 152,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 130,  288 => 118,  282 => 114,  259 => 119,  255 => 141,  251 => 115,  249 => 110,  239 => 110,  210 => 99,  205 => 92,  200 => 87,  188 => 81,  184 => 91,  180 => 81,  178 => 76,  174 => 90,  161 => 84,  137 => 59,  124 => 61,  110 => 61,  76 => 27,  480 => 162,  474 => 161,  469 => 213,  461 => 209,  457 => 153,  453 => 355,  444 => 197,  440 => 148,  437 => 344,  435 => 194,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 158,  355 => 329,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 137,  309 => 128,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 127,  278 => 86,  268 => 85,  264 => 112,  258 => 129,  252 => 144,  247 => 138,  241 => 135,  229 => 101,  220 => 96,  214 => 95,  177 => 76,  169 => 104,  140 => 79,  132 => 71,  128 => 75,  107 => 52,  61 => 23,  273 => 124,  269 => 114,  254 => 105,  243 => 112,  240 => 101,  238 => 94,  235 => 93,  230 => 132,  227 => 100,  224 => 99,  221 => 98,  219 => 97,  217 => 95,  208 => 95,  204 => 94,  179 => 77,  159 => 83,  143 => 60,  135 => 63,  119 => 46,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  93 => 38,  88 => 17,  78 => 18,  28 => 3,  87 => 32,  46 => 13,  44 => 11,  94 => 54,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  27 => 7,  25 => 5,  21 => 6,  201 => 89,  196 => 91,  183 => 63,  171 => 87,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 72,  136 => 57,  121 => 37,  117 => 66,  105 => 58,  91 => 25,  62 => 41,  49 => 14,  31 => 8,  38 => 12,  26 => 6,  24 => 3,  19 => 1,  79 => 44,  72 => 27,  69 => 26,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 244,  157 => 71,  145 => 59,  139 => 55,  131 => 46,  123 => 68,  120 => 67,  115 => 38,  111 => 64,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 21,  66 => 33,  55 => 38,  52 => 14,  50 => 18,  43 => 7,  41 => 9,  35 => 9,  32 => 4,  29 => 3,  209 => 92,  203 => 84,  199 => 118,  193 => 83,  189 => 93,  187 => 93,  182 => 78,  176 => 89,  173 => 88,  168 => 77,  164 => 85,  162 => 68,  154 => 73,  149 => 77,  147 => 82,  144 => 57,  141 => 73,  133 => 65,  130 => 40,  125 => 41,  122 => 52,  116 => 43,  112 => 35,  109 => 59,  106 => 63,  103 => 62,  99 => 36,  95 => 34,  92 => 28,  86 => 49,  82 => 9,  80 => 29,  73 => 33,  64 => 21,  60 => 18,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 3,);
    }
}
