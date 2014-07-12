<?php

/* SportimimiuserBundle:Profile:addProfileStep2.html.twig */
class __TwigTemplate_f2dd2ce0c8a1cdaf6c463256fcb37d6c2ee045fe81ab58c777fcc3a643e24522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets_include' => array($this, 'block_stylesheets_include'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/googleCompletion.js"), "html", null, true);
        echo "\" ></script>

  <script type=\"text/javascript\">
var fb_param = {};
fb_param.pixel_id = '6013213815888';
fb_param.value = '0.00';
fb_param.currency = 'VND';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height=\"1\" width=\"1\" alt=\"\" style=\"display:none\" src=\"https://www.facebook.com/offsite_event.php?id=6013213815888&amp;value=0&amp;currency=VND\" /></noscript>
";
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký bước 2"), "html", null, true);
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "<style>
\ta.button-next{
\t\tcolor: white!important;
\t\ttext-transform: uppercase;
\t\tfont-size: 15px;
\t\tpadding: 5px 15px;
\t\tbackground-color: #0ca245;
\t\tborder-radius: 3px;
\t}
\ta.button-next img{
\t\tmargin-left: 5px;
\t\tvertical-align: middle;
\t}
\ta.button-next:hover {color:green!important}
</style>
\t<div id=\"select-place\" style=\"padding:25px;font-size:14pt;border:1px solid #ccc;background:white;margin-top:15px\">
\t<div style=\"float:left;margin-right:80px;height:140px;padding:20px;line-height:30px;font-size:16pt;width:300px\">
\t Bạn đang chơi thể thao ở những địa điểm nào? <br/>
\t Hãy chia sẻ với Teamsport để các thành viên có thể cùng tham gia và<br/> kết nối bạn bè nhé!
\t</div>
\t<div>
\t<form id=\"place\" method=\"post\">
\t\t<div class=\"col-md-6\" style=\"margin-top:15px;\">
\t\t\t<div class=\"form-group\">
\t\t\t\tChọn sân chơi có sẵn trong list<br/>
\t\t\t
\t\t\t\t<select multiple name=\"placeSelected[]\" class=\"form-control\">
\t\t\t\t\t<option> - Không - </option>
\t\t\t\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 57
            echo "\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\" style=\"margin-top:15px;\">
\t\t<div class=\"form-group\">
\t\t\tHoặc tạo 1 sân chơi mới <br/>
\t\t\t<input type=\"text\" name=\"new_name_place\" placeholder=\"Hãy nhập tên của nơi\" class=\"form-control\" /><br />
\t\t\t<input type=\"text\" name=\"new_adress_place\" placeholder=\"Hãy nhập địa chỉ của nơi\" class=\"form-control\"/>
\t\t</div>
\t\t</div>
\t</form>
\t</div>
<div style=\"clear:both\"></div>
\t\t
\t\t
\t\t<center>
\t\t\t<div style=\"margin-top:25px\">
\t\t\t<a class=\"button-next\" href=\"#\" onclick=\"jQuery('#place').submit();\">
\t\t\tSave and continue<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/double-arr.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</a>
\t\t\t</div>
\t\t</center>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:addProfileStep2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 141,  150 => 65,  58 => 14,  127 => 42,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 59,  23 => 2,  65 => 21,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 95,  126 => 58,  113 => 54,  84 => 37,  77 => 24,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 125,  185 => 77,  181 => 112,  172 => 105,  155 => 58,  153 => 68,  146 => 85,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 93,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 109,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 33,  70 => 22,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 90,  200 => 87,  188 => 82,  184 => 81,  180 => 81,  178 => 96,  174 => 90,  161 => 70,  137 => 53,  124 => 191,  110 => 186,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 127,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 65,  132 => 52,  128 => 75,  107 => 60,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 98,  217 => 123,  208 => 121,  204 => 72,  179 => 79,  159 => 60,  143 => 54,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 16,  63 => 20,  59 => 30,  93 => 43,  88 => 31,  78 => 35,  28 => 3,  87 => 38,  46 => 17,  44 => 9,  94 => 33,  89 => 31,  85 => 29,  75 => 28,  68 => 32,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 113,  171 => 77,  166 => 103,  163 => 75,  158 => 67,  156 => 59,  151 => 98,  142 => 65,  138 => 77,  136 => 57,  121 => 63,  117 => 47,  105 => 56,  91 => 32,  62 => 14,  49 => 13,  31 => 3,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 27,  69 => 17,  47 => 9,  40 => 11,  37 => 9,  22 => 2,  246 => 244,  157 => 69,  145 => 63,  139 => 82,  131 => 55,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 41,  101 => 52,  98 => 36,  96 => 25,  83 => 37,  74 => 23,  66 => 26,  55 => 17,  52 => 14,  50 => 17,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 6,  209 => 95,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 84,  173 => 94,  168 => 77,  164 => 76,  162 => 91,  154 => 73,  149 => 71,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 59,  125 => 41,  122 => 49,  116 => 39,  112 => 37,  109 => 57,  106 => 34,  103 => 39,  99 => 46,  95 => 33,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 15,  60 => 18,  57 => 17,  54 => 16,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 6,  33 => 10,  30 => 5,);
    }
}
