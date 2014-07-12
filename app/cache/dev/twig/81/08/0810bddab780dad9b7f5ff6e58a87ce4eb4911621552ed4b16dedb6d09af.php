<?php

/* SportimimiuserBundle:Page:basepart_right.html.twig */
class __TwigTemplate_81080810bddab780dad9b7f5ff6e58a87ce4eb4911621552ed4b16dedb6d09af extends Twig_Template
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
        echo "
<div>
    <button class=\"btn btn-inverse btn-xs btn-close\" data-toggle=\"sidr-close\" data-menu=\"menu-right\"><i class=\"fa fa-times\"></i>
    </button>
    <div class=\"tab-content\">
        <div class=\"tab-pane\" id=\"chat-conversation\">
            <ul>
                <li>
                    <div class=\"innerAll\">
                        <button class=\"btn btn-primary\" data-toggle=\"tab\"
                                data-target=\"#chat-list\"><i class=\"fa fa-fw fa-user\"></i> friends</button>
                    </div>
                </li>      
                <li id=\"messages\" class=\"conversation innerAll\">
                   ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SportimimiuserBundle:Page:baseMessage"));
        echo "  
                   
                </li>
            </ul>
        </div>
        <div class=\"tab-pane active\" id=\"chat-list\">
            <div class=\"mixitup\" id=\"mixitup-chat\" data-show-default=\"mixit-chat-1\" data-layout-mode=\"list\"
                 data-target-selector=\".mix\" data-filter-selector=\".filter-chat\">
                <ul>

                    <li class=\"category border-bottom\">Online</li>

                    <li>
                        ";
        // line 28
        if (array_key_exists("profileOnline", $context)) {
            // line 29
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profileOnline"]) ? $context["profileOnline"] : $this->getContext($context, "profileOnline")));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 30
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id") != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                    // line 31
                    echo "                                <div class=\"mixit-chat-1 mix media border-bottom innerAll margin-none\" style=\"display: block; opacity: 1;\">
                                    ";
                    // line 32
                    $context["url"] = "";
                    // line 33
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                        // line 34
                        echo "                                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "document"));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                            // line 35
                            echo "
                                        ";
                            // line 36
                            if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                                // line 37
                                echo "                                            ";
                                $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                                // line 38
                                echo "                                        ";
                            }
                            // line 39
                            echo "
                                        ";
                            $context['_iterated'] = true;
                        }
                        if (!$context['_iterated']) {
                            // line 41
                            echo "                                            ";
                            $context["url"] = "img_profile_default.jpg";
                            // line 42
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "                                    ";
                    }
                    // line 44
                    echo "                                <a href=\"#chat-conversation\" onclick=\"dynamicLoadMessage(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id"), "html", null, true);
                    echo ");\" data-toggle=\"tab\" class=\"pull-left media-object\">
                                    <img src=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_25"), "html", null, true);
                    echo "\"
                                         class=\"img-circle\" />
                                </a>
                                <div class=\"media-body\">
                                    <a href=\"#chat-conversation\" onclick=\"dynamicLoadMessage(";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id"), "html", null, true);
                    echo ");\" data-toggle=\"tab\" class=\"pull-right text-muted innerT half\">
                                        <i class=\"fa fa-comments\"></i> 4
                                    </a>
                                    <h5 class=\"margin-none\"><a href=\"#chat-conversation\" onclick=\"dynamicLoadMessage(";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id"), "html", null, true);
                    echo ");\" data-toggle=\"tab\"
                                                               class=\"text-white\">";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "nom"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "prenom"), "html", null, true);
                    echo "</a>
                                    </h5>
                                    <small></small>
                                </div>
                            </div>
                            ";
                }
                // line 59
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        ";
        }
        // line 61
        echo "                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:basepart_right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  212 => 95,  134 => 59,  253 => 141,  150 => 65,  58 => 30,  127 => 66,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 54,  23 => 2,  65 => 25,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 53,  113 => 54,  84 => 27,  77 => 32,  114 => 62,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 98,  185 => 77,  181 => 112,  172 => 105,  155 => 65,  153 => 68,  146 => 61,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 104,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 29,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 46,  70 => 22,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 93,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 191,  110 => 61,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 31,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 123,  208 => 121,  204 => 72,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 17,  63 => 16,  59 => 15,  93 => 29,  88 => 31,  78 => 36,  28 => 3,  87 => 28,  46 => 10,  44 => 10,  94 => 42,  89 => 31,  85 => 29,  75 => 35,  68 => 26,  56 => 12,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 101,  171 => 77,  166 => 90,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 55,  117 => 47,  105 => 56,  91 => 43,  62 => 24,  49 => 11,  31 => 4,  38 => 5,  26 => 3,  24 => 3,  19 => 1,  79 => 26,  72 => 27,  69 => 34,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 81,  139 => 82,  131 => 58,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 50,  101 => 43,  98 => 36,  96 => 50,  83 => 38,  74 => 23,  66 => 33,  55 => 17,  52 => 11,  50 => 11,  43 => 8,  41 => 8,  35 => 15,  32 => 4,  29 => 3,  209 => 94,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 75,  173 => 94,  168 => 77,  164 => 76,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 70,  141 => 48,  133 => 77,  130 => 59,  125 => 41,  122 => 52,  116 => 49,  112 => 52,  109 => 45,  106 => 34,  103 => 47,  99 => 46,  95 => 42,  92 => 41,  86 => 39,  82 => 33,  80 => 37,  73 => 19,  64 => 32,  60 => 13,  57 => 17,  54 => 16,  51 => 28,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 6,  33 => 10,  30 => 3,);
    }
}
