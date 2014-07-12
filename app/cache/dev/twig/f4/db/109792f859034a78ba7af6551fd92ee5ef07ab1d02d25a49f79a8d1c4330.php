<?php

/* SportimimiuserBundle:Message:loadMessage.html.twig */
class __TwigTemplate_f4db109792f859034a78ba7af6551fd92ee5ef07ab1d02d25a49f79a8d1c4330 extends Twig_Template
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
        $context["url"] = "";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["replies"]) ? $context["replies"] : $this->getContext($context, "replies")));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 3
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                // line 4
                echo "
        ";
                // line 5
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 6
                    echo "
            ";
                    // line 7
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 8
                        echo "                    ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 9
                        echo "            ";
                    }
                    // line 10
                    echo "
            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 12
                    echo "                    ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 13
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "    ";
            }
            // line 15
            echo "   <div class=\"media margin-none border-top innerAll\">
       <a href=\"\" class=\"pull-left hidden-xs\">
           <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
            echo "\" width=\"60\" class=\"media-object\">
       </a>
       <div class=\"media-body innerTB\">
           <div class=\"row\">
               <div class=\"col-sm-6\">
                   <div class=\"innerT half\">
                       <div class=\"media\">
                           <div class=\"pull-left\">
                               <a href=\"\" class=\"strong text-inverse \">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "nom"), "html", null, true);
            echo "</a>
                               <span class=\"innerR text-muted visible-xs\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "created"), "Y-m-d"), "html", null, true);
            echo "</span>
                           </div>
                           <div class=\"media-body\">
                               ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "content"), "html", null, true);
            echo "
                           </div>
                       </div>
                   </div>
               </div>
               <div class=\"col-sm-6 hidden-xs\">
                   <i class=\"icon-time-clock pull-right text-muted innerT half fa fa-2x\"></i>
                   <span class=\"pull-right innerR innerT text-right  text-muted\">
                       ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "created"), "Y-m-d"), "html", null, true);
            echo "
                   </span>
               </div>
           </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Message:loadMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  287 => 140,  267 => 132,  202 => 103,  175 => 95,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 95,  126 => 77,  113 => 45,  84 => 37,  77 => 27,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 135,  276 => 134,  271 => 112,  265 => 109,  250 => 126,  223 => 91,  185 => 72,  181 => 97,  172 => 66,  155 => 58,  153 => 57,  146 => 85,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 85,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 103,  232 => 93,  215 => 96,  206 => 101,  195 => 77,  190 => 100,  165 => 92,  160 => 90,  90 => 38,  81 => 28,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 223,  200 => 220,  188 => 94,  184 => 93,  180 => 81,  178 => 96,  174 => 90,  161 => 75,  137 => 53,  124 => 191,  110 => 186,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 127,  247 => 125,  241 => 95,  229 => 116,  220 => 70,  214 => 87,  177 => 65,  169 => 88,  140 => 55,  132 => 52,  128 => 75,  107 => 60,  61 => 15,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 69,  135 => 81,  119 => 46,  102 => 32,  71 => 41,  67 => 14,  63 => 13,  59 => 15,  93 => 34,  88 => 27,  78 => 35,  28 => 4,  87 => 38,  46 => 8,  44 => 9,  94 => 28,  89 => 32,  85 => 35,  75 => 23,  68 => 21,  56 => 13,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 101,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 87,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 14,  49 => 9,  31 => 5,  38 => 5,  26 => 3,  24 => 3,  19 => 1,  79 => 23,  72 => 25,  69 => 17,  47 => 10,  40 => 7,  37 => 6,  22 => 1,  246 => 244,  157 => 89,  145 => 70,  139 => 82,  131 => 53,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 57,  96 => 25,  83 => 27,  74 => 18,  66 => 20,  55 => 16,  52 => 9,  50 => 10,  43 => 8,  41 => 8,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 102,  193 => 90,  189 => 71,  187 => 99,  182 => 87,  176 => 84,  173 => 94,  168 => 64,  164 => 76,  162 => 91,  154 => 88,  149 => 93,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 43,  106 => 36,  103 => 37,  99 => 37,  95 => 40,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 15,  60 => 12,  57 => 11,  54 => 11,  51 => 10,  48 => 9,  45 => 10,  42 => 9,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
