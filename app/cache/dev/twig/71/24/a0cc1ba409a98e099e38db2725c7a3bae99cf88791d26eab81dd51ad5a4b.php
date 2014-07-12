<?php

/* SportimimiuserBundle:Profile:detailProfileTop.html.twig */
class __TwigTemplate_7124a0cc1ba409a98e099e38db2725c7a3bae99cf88791d26eab81dd51ad5a4b extends Twig_Template
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
        echo "<div id=\"FirstPart\" style=\"margin-top:40px\">
\t\t
\t\t<div style=\"padding-left:18px\">
\t\t\t<!-- Profile Image -->
\t\t\t";
        // line 5
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "document", array(), "any", true, true)) {
            // line 6
            echo "\t\t
\t\t\t\t";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 8
                echo "\t\t\t\t
\t\t\t\t\t";
                // line 9
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 10
                    echo "\t\t\t\t\t\t";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 11
                    echo "\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t
\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 14
                echo "\t\t\t\t\t";
                $context["url"] = "img_profile_default.jpg";
                // line 15
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t";
        }
        // line 17
        echo "\t\t\t<div id=\"imageProfileSportif\">
\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_200"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
            echo "onclick=\"Shadowbox.open({
\t\t\t\t\t\tcontent:    contentBox,
\t\t\t\t\t\tplayer:     'html',
\t\t\t\t\t\ttitle:      'Sửa Ảnh Đại Diện',
\t\t\t\t\t\theight:     502,
\t\t\t\t\t\twidth:      350
\t\t\t\t\t\t});\"";
        }
        // line 24
        echo " style=\"cursor:pointer;\" >
\t\t\t</div>
\t\t\t<!-- End Profile Image -->
\t\t\t<div style=\"background:#00A751;margin-left:250px;height:40px;color:white;font-size:16pt;line-height:30px;padding-left:20px;\">
\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "prenom"), "html", null, true);
        echo "
\t\t\t\t
\t\t\t</div><br />
\t\t\t
\t\t\t<div class=\"infos-profile\" style=\"margin-left:251px;width:500px\">
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span style=\"color:#5EC28E\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thể Thao"), "html", null, true);
        echo " :</span> ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "sports"));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport")), "nameVn"), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  <br/>
\t\t\t\t\t\t\t<span style=\"color:#5EC28E\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Ngày Sinh"), "html", null, true);
        echo " :</span> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "dateNaissance"), "d/m/Y"), "html", null, true);
        echo " <br/>
\t\t\t\t\t\t\t<span style=\"color:#5EC28E\"> Mô tả Thể thao:</span> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "description"), "html", null, true);
        echo " <br/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLiên hệ với tôi để chơi với tôi : <br/>
\t\t\t\t\t\t\t<span style=\"color:#5EC28E\">Email:</span> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "email"), "html", null, true);
        echo " <br/>
\t\t\t\t\t\t\t<span style=\"color:#5EC28E\">Điện thoại:</span> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "phone"), "html", null, true);
        echo " <br/>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- HIDE SKILLS FOR NOW
\t\t\t<div id=\"skills\" style=\"margin-top:15px;height:80px;text-align:center;padding-left:175px\">
\t\t\t
\t\t\t\t";
        // line 54
        if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "skills", array(), "any", false, true), "agility", array(), "any", true, true)) {
            // line 55
            echo "\t\t\t\t\t<input type=\"text\" data-width=\"75\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "skills"), "agility"), "html", null, true);
            echo "\" class=\"dial\" data-readOnly=true >
\t\t\t\t\t
\t\t\t\t\t<input type=\"text\" data-width=\"75\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "skills"), "speed"), "html", null, true);
            echo "\" class=\"dial\" data-readOnly=true>
\t\t\t\t\t
\t\t\t\t\t<input type=\"text\" data-width=\"75\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "skills"), "stamina"), "html", null, true);
            echo "\" class=\"dial\" data-readOnly=true>
\t\t\t\t\t
\t\t\t\t\t<input type=\"text\" data-width=\"75\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "skills"), "strength"), "html", null, true);
            echo "\" class=\"dial\" data-readOnly=true>
\t\t\t\t\t
\t\t\t\t\t<script>
\t\t\t\t\t\$(function() {
\t\t\t\t\t\t   \$(\".dial\").knob({
\t\t\t\t\t\t\t\t\t\t'min':0
\t\t\t\t\t\t\t\t\t\t,'max':10,
\t\t\t\t\t\t\t\t\t\t'fgColor':'#00A751',
\t\t\t\t\t\t\t\t\t\t'inputColor': 'black'
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 76
        if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "skills", array(), "any", false, true), "agility", array(), "any", true, true)) {
            echo "<span style=\"padding-left:268px\">Agility | Speed | Stamina | Strenght</center>";
        }
        // line 77
        echo "\t\t\t-->
\t\t\t";
        // line 78
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") != $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
            // line 79
            echo "\t\t\t<center>
\t\t\t\t<a href=\"#alert-player\" title=\"\" rel=\"shadowbox;width=600;height=400\">
\t\t\t\t<div id=\"button-moi\" style=\"background:#00A751;color:white;padding:6px;margin-top:40px;
\t\t\t\tcursor:pointer;width:165px;height:40px;
\t\t\t\tline-height:40px;text-transform:uppercase\"> 
\t\t\t\t\tMời chơi cùng
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
            // line 87
            $this->env->loadTemplate("SportimimiuserBundle:Profile:alertPlay.html.twig")->display($context);
            // line 88
            echo "\t\t\t</center>
\t\t\t";
        }
        // line 90
        echo "\t\t\t<br />
\t\t\t<!--<div class=\"topPart\"><h2 class=\"titlePart\" style=\"margin-top:8px;margin-left:17px\">Thời gian tôi chơi</h2></div>
\t\t\t<div id=\"calendar\" style=\"background:white;\"></div>-->
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:detailProfileTop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  23 => 2,  65 => 15,  287 => 140,  267 => 132,  202 => 88,  175 => 95,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 95,  126 => 43,  113 => 45,  84 => 37,  77 => 27,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 135,  276 => 134,  271 => 112,  265 => 109,  250 => 126,  223 => 91,  185 => 77,  181 => 76,  172 => 66,  155 => 58,  153 => 57,  146 => 85,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 85,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 103,  232 => 93,  215 => 96,  206 => 90,  195 => 77,  190 => 79,  165 => 92,  160 => 90,  90 => 38,  81 => 28,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 223,  200 => 87,  188 => 78,  184 => 93,  180 => 81,  178 => 96,  174 => 90,  161 => 61,  137 => 53,  124 => 191,  110 => 186,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 127,  247 => 125,  241 => 95,  229 => 116,  220 => 70,  214 => 87,  177 => 74,  169 => 88,  140 => 55,  132 => 52,  128 => 75,  107 => 60,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 54,  135 => 81,  119 => 46,  102 => 32,  71 => 41,  67 => 18,  63 => 20,  59 => 15,  93 => 34,  88 => 27,  78 => 35,  28 => 3,  87 => 38,  46 => 12,  44 => 9,  94 => 28,  89 => 32,  85 => 28,  75 => 23,  68 => 21,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 92,  196 => 101,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 59,  151 => 57,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 14,  49 => 9,  31 => 4,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 25,  69 => 17,  47 => 10,  40 => 10,  37 => 6,  22 => 1,  246 => 244,  157 => 89,  145 => 55,  139 => 82,  131 => 53,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 36,  96 => 25,  83 => 27,  74 => 18,  66 => 20,  55 => 15,  52 => 14,  50 => 17,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 102,  193 => 90,  189 => 71,  187 => 99,  182 => 87,  176 => 84,  173 => 94,  168 => 64,  164 => 76,  162 => 91,  154 => 88,  149 => 93,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 44,  125 => 44,  122 => 43,  116 => 50,  112 => 37,  109 => 43,  106 => 36,  103 => 37,  99 => 37,  95 => 40,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 17,  60 => 12,  57 => 11,  54 => 18,  51 => 10,  48 => 9,  45 => 10,  42 => 9,  39 => 7,  36 => 6,  33 => 10,  30 => 7,);
    }
}
