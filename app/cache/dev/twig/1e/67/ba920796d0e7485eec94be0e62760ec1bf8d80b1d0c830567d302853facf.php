<?php

/* SportimimiuserBundle:Page:sidebar_right.html.twig */
class __TwigTemplate_1e67ba920796d0e7485eec94be0e62760ec1bf8d80b1d0c830567d302853facf extends Twig_Template
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
        $this->env->loadTemplate("SportimimiuserBundle:Page:inviteToPlayPopUp.html.twig")->display($context);
        // line 2
        echo "<div class=\"col-md-4 col-lg-3\">
    <div class=\"widget\">
        <div class=\"widget-body text-center\">
            ";
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "document", array(), "any", true, true)) {
            // line 6
            echo "
                ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 8
                echo "
                    ";
                // line 9
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 10
                    echo "                        ";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 11
                    echo "                    ";
                }
                // line 12
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 14
                echo "                        ";
                $context["url"] = "img_profile_default.jpg";
                // line 15
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        // line 17
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("DetailProfile");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
        echo "\" style=\"cursor:pointer;\" ></a>
                                                <h2 class=\"strong margin-none\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo "</h2>
                                                <!--<div class=\"innerB\">Working at MOSAICPRO</div>-->
                                                <!--<a href=\"\" class=\"btn btn-primary text-center btn-block\">PRO Account</a>-->
                                                <div class=\"btn-group-vertical btn-block\">
                                                    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("DetailProfile");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-cog pull-right\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Chỉnh sửa tài khoản của tôi"), "html", null, true);
        echo "</a>
                                                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thoát"), "html", null, true);
        echo "</a>
                                                </div>
                                            </div>
                                        </div>

    <div class=\"widget\">
        <h5 class=\"innerAll margin-none border-bottom bg-gray\">Những thành viên hiện tại đang tìm người chơi cùng</h5>
        <div class=\"widget-body padding-none\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profileMatch"]) ? $context["profileMatch"] : $this->getContext($context, "profileMatch")));
        foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
            if (($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "searchPlayer") == 1)) {
                // line 32
                echo "                <div class=\"media border-bottom innerAll margin-none\">
                    ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 34
                    echo "\t\t\t\t\t\t
\t\t\t";
                    // line 35
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 36
                        echo "                            ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 37
                        echo "                        ";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t\t
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 40
                    echo "                            ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 41
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))), "html", null, true);
                echo "\">
                <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_25"), "html", null, true);
                echo "\" class=\"pull-left media-object\" />
                </a>
                <div class=\"media-body\">
                    <!--<a href=\"\" class=\"pull-right text-muted innerT half\">
                        <i class=\"fa fa-comments\"></i> 4
                    </a>-->
                    <h5 class=\"margin-none\"><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))), "html", null, true);
                echo "\" class=\"text-inverse\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenom"), "html", null, true);
                echo "</a>
                    </h5>
                    <br />
                    <small>
                    ";
                // line 53
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") != $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))) {
                    // line 54
                    echo "                        <a href=\"#modal-3\" data-toggle=\"modal\"  class=\"btn btn-info btn-sm\">
                            <i class=\"icon-turn-right\"></i> Mời chơi cùng
                        </a>
                    ";
                }
                // line 58
                echo "                    </small>
                    <!-- <small>on February 2nd, 2014</small>-->
                </div>
            </div>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:sidebar_right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  212 => 95,  134 => 59,  253 => 141,  150 => 65,  58 => 30,  127 => 66,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 36,  23 => 2,  65 => 17,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 53,  113 => 34,  84 => 27,  77 => 32,  114 => 62,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 98,  185 => 77,  181 => 112,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 104,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 14,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 22,  100 => 31,  70 => 22,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 93,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 38,  110 => 61,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 31,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 123,  208 => 121,  204 => 72,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 17,  63 => 16,  59 => 15,  93 => 29,  88 => 31,  78 => 36,  28 => 6,  87 => 23,  46 => 10,  44 => 11,  94 => 42,  89 => 31,  85 => 29,  75 => 35,  68 => 26,  56 => 15,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 63,  171 => 77,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 37,  117 => 47,  105 => 32,  91 => 43,  62 => 16,  49 => 11,  31 => 7,  38 => 5,  26 => 5,  24 => 3,  19 => 1,  79 => 26,  72 => 18,  69 => 34,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 81,  139 => 42,  131 => 58,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 33,  101 => 43,  98 => 36,  96 => 50,  83 => 38,  74 => 23,  66 => 33,  55 => 17,  52 => 11,  50 => 11,  43 => 8,  41 => 10,  35 => 15,  32 => 4,  29 => 3,  209 => 94,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 75,  173 => 94,  168 => 77,  164 => 53,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 43,  141 => 48,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 35,  112 => 52,  109 => 45,  106 => 34,  103 => 47,  99 => 46,  95 => 42,  92 => 41,  86 => 39,  82 => 33,  80 => 37,  73 => 19,  64 => 32,  60 => 13,  57 => 17,  54 => 16,  51 => 28,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 10,  30 => 3,);
    }
}
