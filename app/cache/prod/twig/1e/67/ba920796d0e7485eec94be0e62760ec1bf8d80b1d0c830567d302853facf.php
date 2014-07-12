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
        return array (  183 => 63,  172 => 58,  166 => 54,  153 => 49,  144 => 43,  139 => 42,  133 => 41,  121 => 37,  118 => 36,  116 => 35,  113 => 34,  108 => 33,  105 => 32,  100 => 31,  72 => 18,  65 => 17,  53 => 14,  44 => 11,  28 => 6,  425 => 168,  416 => 162,  407 => 160,  403 => 158,  389 => 152,  380 => 150,  377 => 149,  367 => 145,  360 => 141,  352 => 139,  346 => 138,  343 => 137,  335 => 135,  332 => 134,  329 => 133,  323 => 132,  321 => 131,  316 => 130,  312 => 129,  309 => 128,  307 => 127,  301 => 124,  297 => 122,  291 => 119,  275 => 112,  272 => 111,  270 => 110,  257 => 106,  254 => 105,  245 => 102,  240 => 101,  237 => 100,  231 => 99,  228 => 98,  223 => 97,  220 => 96,  217 => 95,  214 => 94,  208 => 93,  201 => 91,  193 => 88,  182 => 80,  173 => 77,  164 => 53,  145 => 59,  131 => 48,  123 => 43,  114 => 36,  112 => 35,  103 => 29,  93 => 27,  84 => 23,  68 => 17,  62 => 16,  59 => 15,  54 => 14,  45 => 11,  27 => 4,  23 => 3,  21 => 2,  19 => 1,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  499 => 377,  496 => 376,  491 => 374,  486 => 373,  483 => 372,  468 => 362,  465 => 361,  453 => 355,  448 => 353,  437 => 344,  432 => 343,  430 => 342,  426 => 340,  423 => 339,  417 => 337,  413 => 335,  410 => 334,  404 => 333,  401 => 332,  398 => 331,  395 => 330,  390 => 329,  387 => 328,  385 => 327,  369 => 146,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  322 => 289,  319 => 288,  317 => 287,  302 => 275,  295 => 271,  288 => 118,  282 => 114,  273 => 258,  259 => 107,  255 => 248,  251 => 246,  249 => 245,  246 => 244,  239 => 241,  224 => 231,  210 => 226,  205 => 92,  200 => 220,  188 => 217,  184 => 216,  180 => 214,  178 => 213,  174 => 212,  161 => 208,  147 => 203,  137 => 196,  130 => 40,  124 => 38,  110 => 186,  95 => 174,  87 => 23,  85 => 167,  82 => 22,  80 => 45,  76 => 19,  61 => 20,  48 => 12,  38 => 5,  35 => 3,  33 => 2,  26 => 5,  74 => 42,  71 => 18,  66 => 20,  60 => 15,  51 => 13,  46 => 11,  41 => 10,  39 => 9,  36 => 8,  30 => 5,  505 => 384,  502 => 378,  497 => 380,  494 => 375,  492 => 378,  488 => 377,  484 => 375,  481 => 371,  479 => 373,  473 => 370,  434 => 336,  427 => 334,  420 => 332,  402 => 318,  399 => 156,  396 => 316,  355 => 140,  338 => 136,  325 => 290,  267 => 109,  243 => 182,  194 => 136,  165 => 110,  102 => 50,  81 => 22,  69 => 25,  63 => 17,  58 => 18,  56 => 15,  50 => 13,  47 => 12,  40 => 7,  37 => 9,  31 => 7,);
    }
}
