<?php

/* SportimimiuserBundle:Place:detailPlace.html.twig */
class __TwigTemplate_3b218c7f2a462c332a94e224daf8426f1ed74509a3841f1f73008b034128484e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets_include' => array($this, 'block_stylesheets_include'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SportimimiuserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Sân ";
        if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "placeName", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
        }
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/place.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "
<script type=\"text/javascript\">
\$(document).ready(function() {
\tvar msg = '#message';

\t\$(msg).keypress(function(e) {
\t\tif(e.which == 13) {
\t\t\tvar val = \$(msg).val();

\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("comment.php"), "html", null, true);
        echo "',
\t\t\t\ttype: 'GET',
\t\t\t\tdata: 'token=";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "&msg='+escape(val),
\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\$(msg).val('');
\t\t\t\t\t\$(msg).css('height','14px');
\t\t\t\t\t\$('#commentscontainer').append(data);
\t\t\t\t}
\t\t\t});
\t\t}
\t});

});
</script>
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "<style>
.comments, .like {
  background: #edeff4;
  padding: 4px;
  margin-bottom: 1px;
}
.text-holder {
  resize: none;
  border: 1px solid #bdc7d8;
  height: 22px;
  padding: 3px;
  width: 394px;
}
.iconRight {
\twidth: 175px;
    height: 40px;
    float: right;
    position: relative;
    top: -2px;
    right: 2px;


}
</style>
\t<div class=\"widget\">
\t
\t\t
\t\t<h2 style=\"font-size:22pt!important;\">";
        // line 63
        if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "placeName", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
        }
        echo "</h2>
\t\t<div class=\"iconRight\">
\t\t";
        // line 65
        if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "type", array(), "any", true, true)) {
            // line 66
            echo "\t\t\t";
            if ((trim($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type")) == "Sân")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/soccer-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t
\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/soccer-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/basketball-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/tennis-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/volleyball-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/badminton-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t";
            }
            // line 75
            echo "\t\t";
        }
        // line 76
        echo "\t\t</div>
\t\t
\t\t<div style=\"margin-top:15px\">
\t\t";
        // line 79
        if (array_key_exists("place", $context)) {
            // line 80
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Giá"), "html", null, true);
            echo " : ";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "price", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "price"), "html", null, true);
            }
            echo " <br />
\t\t\t";
            // line 81
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "capacity", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Capacity"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "capacity"), "html", null, true);
                echo "<br />";
            }
            // line 82
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Điện thoại liên hệ"), "html", null, true);
            echo " : ";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "price", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "phoneContact"), "html", null, true);
                echo "<br />";
            }
            // line 83
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "contactName", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tên liên hệ"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "contactName"), "html", null, true);
                echo "<br />";
            }
            // line 84
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "address", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Địa chỉ"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "address"), "html", null, true);
                echo "<br />";
            }
            // line 85
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "district", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quận"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "district"), "html", null, true);
            }
            // line 86
            echo "\t\t";
        }
        // line 87
        echo "\t\t</div>
\t</div>
\t<div class=\"comments clearfix\">
\t\t<div class=\"pull-left lh-fix\">
\t\t\t";
        // line 91
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "document", array(), "any", true, true)) {
            // line 92
            echo "
\t\t\t\t";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 94
                echo "\t\t\t\t
\t\t\t\t\t";
                // line 95
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 96
                    echo "\t\t\t\t\t\t";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 97
                    echo "\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t
\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 100
                echo "\t\t\t\t\t";
                $context["url"] = "img_profile_default.jpg";
                // line 101
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t";
        }
        // line 103
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" style=\"width:25px;float:left;margin-right:15px\" />
\t\t</div>

\t\t<div class=\"comment-text pull-left\">
\t\t\t<textarea class=\"text-holder\" placeholder=\"Write a comment..\" id=\"message\"></textarea>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Place:detailPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 94,  218 => 86,  211 => 85,  152 => 72,  148 => 71,  53 => 11,  242 => 96,  234 => 103,  232 => 93,  215 => 96,  206 => 94,  195 => 83,  190 => 89,  165 => 81,  160 => 79,  90 => 27,  81 => 23,  100 => 55,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 288,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 264,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 226,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 81,  178 => 213,  174 => 212,  161 => 75,  137 => 196,  124 => 191,  110 => 186,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 92,  220 => 70,  214 => 69,  177 => 65,  169 => 79,  140 => 55,  132 => 51,  128 => 65,  107 => 47,  61 => 15,  273 => 258,  269 => 94,  254 => 100,  243 => 88,  240 => 95,  238 => 85,  235 => 74,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 69,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 20,  63 => 17,  59 => 15,  93 => 42,  88 => 27,  78 => 21,  28 => 3,  87 => 25,  46 => 7,  44 => 11,  94 => 28,  89 => 35,  85 => 167,  75 => 23,  68 => 18,  56 => 12,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 72,  142 => 59,  138 => 54,  136 => 56,  121 => 63,  117 => 44,  105 => 31,  91 => 26,  62 => 23,  49 => 9,  31 => 4,  38 => 5,  26 => 1,  24 => 3,  19 => 1,  79 => 23,  72 => 22,  69 => 16,  47 => 9,  40 => 5,  37 => 5,  22 => 1,  246 => 244,  157 => 74,  145 => 70,  139 => 69,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 27,  74 => 19,  66 => 20,  55 => 10,  52 => 9,  50 => 10,  43 => 6,  41 => 10,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 67,  193 => 90,  189 => 71,  187 => 82,  182 => 87,  176 => 84,  173 => 65,  168 => 82,  164 => 76,  162 => 80,  154 => 73,  149 => 51,  147 => 72,  144 => 70,  141 => 48,  133 => 55,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 34,  106 => 36,  103 => 56,  99 => 33,  95 => 27,  92 => 36,  86 => 26,  82 => 166,  80 => 26,  73 => 19,  64 => 15,  60 => 14,  57 => 16,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 8,  33 => 2,  30 => 6,);
    }
}
