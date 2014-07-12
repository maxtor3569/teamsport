<?php

/* SportimimiuserBundle:Profile:updateProfile.html.twig */
class __TwigTemplate_2102feb9b34f8dd4c320548187adc122271d380f780ef9461eb51c0d210538bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts_top' => array($this, 'block_javascripts_top'),
            'title' => array($this, 'block_title'),
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

    // line 5
    public function block_javascripts_top($context, array $blocks = array())
    {
        // line 6
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
    <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t<script src=\"http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js\"></script>
\t<script>  
\t\$(function() {
\t\$(\"#profile_description\").tooltip({
 
      // place tooltip on the right edge
      position: \"center right\",
 
      // a little tweaking of the position
      offset: [-2, 10],
 
      // use the built-in fadeIn/fadeOut effect
      effect: \"fade\",
 
      // custom opacity setting
      opacity: 0.7
 
      });
\t});
  </script>
";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        echo "Cập nhật thông tin cá nhân";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "


    <h2>Cập nhật Thông tin cá nhân</h2>

<center>
<form id=\"addProfile\" action=\"\" method=\"post\" ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<div class=\"inline\">
\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo " <span class=\"requiredStar\">*</span> 
\t\t<div class=\"input-control text\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo " </div>
\t\t<div class=\"error(info, warning)-bar\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo " </div>
\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo " 
\t
\t\t<div class=\"input-control password\">
\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
\t\t\t
\t\t</div> 
\t\t
\t </div>
\t
\t<div class=\"inline\">
\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'label');
        echo " <span class=\"requiredStar\">*</span>
\t\t<div class=\"input-control select\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'widget');
        echo "</div>
\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'errors');
        echo "
\t\t
\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'label');
        echo " <span class=\"requiredStar\">*</span>
\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'widget');
        echo "
\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'errors');
        echo "
\t</div>
\t
\t<div class=\"inline\">
\t 
\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "
\t\t<div class=\"input-control text\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "</div>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'errors');
        echo "
\t\t
\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "
\t\t<div class=\"input-control text\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "</div>
\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'errors');
        echo "
\t\t<div class=\"input-control text\">";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
        echo "</div>
\t\t
\t
\t\t
\t\t
\t</div>
\t<div class=\"inline\">
\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label');
        echo "
\t\t\t<div class=\"input-control select\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "</div>
\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'errors');
        echo "
\t\t\t
\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label');
        echo "
\t\t\t<div class=\"input-control text\">";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "</div>
\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'errors');
        echo "
\t
\t</div>
\t<div class=\"inline\">
\t\t<div class=\"tooltip\" style=\"position: absolute; top: 258px; left: 760.5px; opacity: 0.7; display: none;\"></div>
\t
\t\t<div class=\"input-control textarea\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "</div>
\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
\t</div>

\t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <center><input type=\"submit\" value=\"Cập nhật\" style=\"margin:20px\"/></center>
</form>
</center>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:updateProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 38,  23 => 2,  65 => 31,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 83,  126 => 58,  113 => 54,  84 => 37,  77 => 27,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 125,  185 => 77,  181 => 112,  172 => 105,  155 => 58,  153 => 68,  146 => 85,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 93,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 90,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 40,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 90,  200 => 87,  188 => 82,  184 => 81,  180 => 81,  178 => 96,  174 => 90,  161 => 70,  137 => 53,  124 => 191,  110 => 186,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 127,  220 => 124,  214 => 87,  177 => 74,  169 => 104,  140 => 55,  132 => 52,  128 => 75,  107 => 60,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 98,  217 => 123,  208 => 121,  204 => 72,  179 => 79,  159 => 60,  143 => 54,  135 => 81,  119 => 46,  102 => 32,  71 => 41,  67 => 18,  63 => 20,  59 => 30,  93 => 43,  88 => 27,  78 => 35,  28 => 3,  87 => 38,  46 => 12,  44 => 9,  94 => 28,  89 => 42,  85 => 41,  75 => 32,  68 => 32,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 89,  196 => 117,  183 => 113,  171 => 77,  166 => 103,  163 => 102,  158 => 67,  156 => 59,  151 => 98,  142 => 65,  138 => 64,  136 => 56,  121 => 63,  117 => 55,  105 => 42,  91 => 26,  62 => 14,  49 => 9,  31 => 3,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 25,  69 => 17,  47 => 10,  40 => 10,  37 => 6,  22 => 1,  246 => 244,  157 => 69,  145 => 55,  139 => 82,  131 => 53,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 52,  98 => 36,  96 => 25,  83 => 37,  74 => 18,  66 => 20,  55 => 15,  52 => 14,  50 => 17,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 118,  193 => 90,  189 => 71,  187 => 99,  182 => 87,  176 => 84,  173 => 94,  168 => 64,  164 => 76,  162 => 91,  154 => 88,  149 => 67,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 59,  125 => 44,  122 => 57,  116 => 50,  112 => 37,  109 => 53,  106 => 36,  103 => 37,  99 => 46,  95 => 40,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 17,  60 => 12,  57 => 11,  54 => 18,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 6,  33 => 6,  30 => 5,);
    }
}
