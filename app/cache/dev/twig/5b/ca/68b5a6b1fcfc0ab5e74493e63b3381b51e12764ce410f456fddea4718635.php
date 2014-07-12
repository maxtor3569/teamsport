<?php

/* SportimimiuserBundle:Page:homepageContent.html.twig */
class __TwigTemplate_5bca68b5a6b1fcfc0ab5e74493e63b3381b51e12764ce410f456fddea4718635 extends Twig_Template
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
        echo "<div class=\"innerAll\">
   <div class=\"widget\">
      <div class=\"widget-body padding-none\">
         <div class=\"margin-none center bg-white\">
            <h1 class=\"separator bottom\">Bạn tìm người chơi thể thao ?</h1>
            <p>Tham gia vào mạng lưới thể thao tốt nhất tại Việt Nam. Tìm bạn bè để chơi, tìm phòng để chơi, Tạo nhóm của bạn.</p>
            <div id=\"register\" class=\"row\">
               <form class=\"form-horizontal margin-none\" id=\"validateSubmitForm\" method=\"post\" autocomplete=\"off\" novalidate=\"novalidate\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
               <div class=\"col-md-6\">
                  <img class=\"col-xs-12\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image_homepage.jpg"), "html", null, true);
        echo "\" />
               </div>
               <div class=\"col-md-6\">
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "                         
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">                                 
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-11\" style=\"margin-top:15px;margin-bottom:15px\">
                     Bằng cách đăng ký trên Teamsport, bạn đồng ý với Điều khoản Dịch vụ, Chính sách bảo mật và Chính sách cookie Teamsport.
                  </div>
                  <div class=\"col-md-11\" style=\"margin-top:15px;margin-bottom:15px\">
                     <div style=\"display:none\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
                     <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"fa fa-check-circle\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
        echo "</button>
                     <a id=\"fb_button\" class=\"btn btn-primary btn-lg\" style=\"background:#4c66a4\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")), "loginUrl", array(0 => array("redirect_uri" => $this->env->getExtension('routing')->getUrl("FacebookLogin"), "scope" => "email")), "method"), "html", null, true);
        echo "\" title=\"Connect With Facebook\">
                     ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
        echo " với Facebook</a>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class=\"row\">
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <p class=\"margin-none\">
                     <img class=\"img-responsive\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/562px-Adidas_Logo.svg.png"), "html", null, true);
        echo "\" style=\"height:200px\" />
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <p class=\"margin-none\">
                     <img class=\"img-responsive\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Nike_logo.png"), "html", null, true);
        echo "\" style=\"height:200px\" />
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <p class=\"margin-none\">
                     <img class=\"img-responsive\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Puma-Logo.png"), "html", null, true);
        echo "\"  style=\"height:200px\"/>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class=\"row\">
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <i></i>
                  <h4>Tìm người chơi và Tạo đội</h4>
                  <p class=\"margin-none\"> Không có người để cùng luyện tập thể thao?
                     Hãy đăng ký và bắt đầu tìm kiếm những thành viên
                     thích hợp để cùng chơi.
                     <br /><br />
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top soccer_ball\">
                  <i></i>
                  <h4>Tìm sân chơi</h4>
                  <p class=\"margin-none\">Bạn băn khoăn không biết trong quận của bạn có những sân chơi nào, và những ai đang chơi tại đó? 
                     Chức năng này sẽ giúp bạn tìm được sân chơi phù hợp nhất.
                     <br>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top message_new\">
                  <i></i>
                  <h4>Kết nối và chơi</h4>
                  <p class=\"margin-none\"> Bạn cò thể kết bạn mới, gửi lời mời chơi,
                     thành lập đội, tổ chức sự kiện và rất nhiều tiện ích khác.<br />
                     <br>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   \$( document ).ready(function() {
   \tjQuery('#profile_sports').prepend('<option value=\"\" disabled selected>Bạn chơi thể thao nào?</option>');
   });
   
</script>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:homepageContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  212 => 95,  134 => 75,  253 => 141,  150 => 65,  58 => 30,  127 => 66,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 36,  23 => 2,  65 => 30,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 53,  113 => 34,  84 => 27,  77 => 32,  114 => 62,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 98,  185 => 77,  181 => 112,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 104,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 14,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 40,  100 => 31,  70 => 22,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 93,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 38,  110 => 61,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 31,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 123,  208 => 121,  204 => 72,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 17,  63 => 16,  59 => 15,  93 => 29,  88 => 31,  78 => 36,  28 => 8,  87 => 23,  46 => 10,  44 => 11,  94 => 42,  89 => 31,  85 => 29,  75 => 35,  68 => 26,  56 => 15,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 63,  171 => 77,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 37,  117 => 47,  105 => 32,  91 => 47,  62 => 16,  49 => 20,  31 => 7,  38 => 5,  26 => 5,  24 => 3,  19 => 1,  79 => 26,  72 => 18,  69 => 34,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 81,  139 => 42,  131 => 58,  123 => 48,  120 => 64,  115 => 43,  111 => 44,  108 => 33,  101 => 43,  98 => 36,  96 => 50,  83 => 38,  74 => 23,  66 => 33,  55 => 17,  52 => 11,  50 => 11,  43 => 8,  41 => 15,  35 => 15,  32 => 4,  29 => 3,  209 => 94,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 75,  173 => 94,  168 => 77,  164 => 53,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 43,  141 => 48,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 35,  112 => 52,  109 => 45,  106 => 34,  103 => 50,  99 => 49,  95 => 48,  92 => 41,  86 => 39,  82 => 33,  80 => 37,  73 => 35,  64 => 32,  60 => 13,  57 => 25,  54 => 16,  51 => 28,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 10,  30 => 3,);
    }
}
