<?php

/* SportimimiuserBundle:Team:detailTeam-tab2.html.twig */
class __TwigTemplate_97dabacbe5d0d676b0182e3b4fe775e4216d6180714d7d4a5aea210a03a4fd2f extends Twig_Template
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
        echo "<!-- Tab content -->
<div class=\"tab-pane\" id=\"tab2-3\">
   <h4>Kết Quả & thống kê</h4>
   ";
        // line 4
        if (((isset($context["check"]) ? $context["check"] : $this->getContext($context, "check")) == 0)) {
            // line 5
            echo "   <center>
      <button style=\"background:green;color:white;text-transform:uppercase\" onclick=\"jQuery('#selectTeam').slideToggle();\">Mời thi đấu</button>
      <div id=\"selectTeam\" style=\"display:none\">
         Select your team: 
         <select id=\"teamSelected\">
            ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams"));
            foreach ($context['_seq'] as $context["_key"] => $context["teamChallenge"]) {
                // line 11
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["teamChallenge"]) ? $context["teamChallenge"] : $this->getContext($context, "teamChallenge")), "category"), "id") == $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id"))) {
                    // line 12
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamChallenge"]) ? $context["teamChallenge"] : $this->getContext($context, "teamChallenge")), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamChallenge"]) ? $context["teamChallenge"] : $this->getContext($context, "teamChallenge")), "name"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teamChallenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
         </select>
         <button onclick=\"challengeTeam(";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
            echo ");\"> GO</button>
      </div>
   </center>
   ";
        }
        // line 20
        echo "   <p>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "matchs")), "html", null, true);
        echo " Match / 
      WIN : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "victory"), "html", null, true);
        echo " /
      LOSE: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "defeat"), "html", null, true);
        echo " /
   </p>
   <table>
      <tr style=\"background:#359500;color:white\">
         <td> Tên đội </td>
         <td> Ngày Thắng </td>
         <td> Tỷ số </td>
         <td> Thắng </td>
         <td> Thua </td>
         <td> Tên đội </td>
      </tr>
      <tr style=\"background:white\">
         ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "matchs"));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 35
            echo "         <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailMatch", array("id" => $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "id"))), "html", null, true);
            echo "\"><span style=\"color:red;\">VERSUS :</span> ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "teams"));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 36
                echo "            ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                    // line 37
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                    echo " /
            ";
                } else {
                    // line 39
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "            ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 42
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </a>
         </td>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </tr>
   </table>
</div>
<!-- // Tab content END -->";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Team:detailTeam-tab2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 174,  424 => 172,  415 => 167,  405 => 163,  376 => 152,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 145,  328 => 139,  313 => 133,  286 => 120,  277 => 116,  236 => 104,  222 => 99,  167 => 74,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 143,  332 => 134,  329 => 133,  323 => 132,  321 => 137,  316 => 130,  307 => 127,  275 => 112,  272 => 111,  270 => 110,  231 => 99,  228 => 98,  505 => 384,  497 => 380,  492 => 378,  488 => 377,  484 => 375,  479 => 373,  473 => 370,  97 => 30,  212 => 95,  134 => 51,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 226,  386 => 225,  383 => 156,  380 => 150,  375 => 222,  373 => 221,  367 => 145,  338 => 142,  335 => 141,  318 => 189,  297 => 122,  292 => 171,  281 => 118,  194 => 136,  191 => 115,  186 => 114,  118 => 36,  23 => 3,  65 => 19,  287 => 140,  267 => 113,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 46,  113 => 34,  84 => 23,  77 => 32,  114 => 41,  299 => 126,  293 => 122,  324 => 138,  308 => 130,  304 => 120,  301 => 124,  291 => 119,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 97,  185 => 83,  181 => 112,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 106,  248 => 107,  245 => 106,  237 => 100,  218 => 111,  211 => 96,  152 => 64,  148 => 62,  53 => 15,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 27,  81 => 32,  100 => 31,  70 => 22,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 383,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 271,  288 => 118,  282 => 114,  259 => 107,  255 => 109,  251 => 108,  249 => 110,  239 => 105,  210 => 108,  205 => 92,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 38,  110 => 61,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 132,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 141,  355 => 140,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 129,  309 => 128,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 119,  278 => 86,  268 => 85,  264 => 112,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 96,  214 => 97,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 22,  273 => 133,  269 => 114,  254 => 105,  243 => 182,  240 => 101,  238 => 94,  235 => 93,  230 => 102,  227 => 101,  224 => 100,  221 => 87,  219 => 98,  217 => 95,  208 => 95,  204 => 94,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 20,  67 => 15,  63 => 19,  59 => 15,  93 => 27,  88 => 34,  78 => 36,  28 => 5,  87 => 26,  46 => 9,  44 => 11,  94 => 52,  89 => 31,  85 => 25,  75 => 35,  68 => 17,  56 => 16,  27 => 4,  25 => 5,  21 => 2,  201 => 91,  196 => 91,  183 => 63,  171 => 77,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 37,  117 => 42,  105 => 32,  91 => 25,  62 => 18,  49 => 10,  31 => 4,  38 => 7,  26 => 5,  24 => 4,  19 => 1,  79 => 22,  72 => 18,  69 => 21,  47 => 12,  40 => 12,  37 => 11,  22 => 2,  246 => 244,  157 => 69,  145 => 59,  139 => 42,  131 => 46,  123 => 43,  120 => 64,  115 => 38,  111 => 44,  108 => 39,  101 => 43,  98 => 36,  96 => 30,  83 => 60,  74 => 21,  66 => 33,  55 => 14,  52 => 14,  50 => 14,  43 => 8,  41 => 7,  35 => 9,  32 => 5,  29 => 4,  209 => 94,  203 => 84,  199 => 118,  193 => 88,  189 => 71,  187 => 93,  182 => 80,  176 => 80,  173 => 77,  168 => 77,  164 => 71,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 43,  141 => 48,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 35,  112 => 35,  109 => 34,  106 => 32,  103 => 29,  99 => 36,  95 => 48,  92 => 35,  86 => 49,  82 => 22,  80 => 37,  73 => 22,  64 => 20,  60 => 13,  57 => 16,  54 => 14,  51 => 13,  48 => 14,  45 => 12,  42 => 6,  39 => 10,  36 => 3,  33 => 10,  30 => 5,);
    }
}
