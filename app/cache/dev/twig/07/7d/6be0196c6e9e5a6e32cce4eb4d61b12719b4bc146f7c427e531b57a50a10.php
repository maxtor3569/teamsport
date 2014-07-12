<?php

/* SportimimiuserBundle:Profile:listProfile.html.twig */
class __TwigTemplate_077d6be0196c6e9e5a6e32cce4eb4d61b12719b4bc146f7c427e531b57a50a10 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm kiếm người chơi"), "html", null, true);
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
\t
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    <script>
    \$(document).ready(function(){
        \$('#filter_contact').on('input', function() {
            \$('.col-sm-3').hide() // hide all the selected elements
                .filter(':contains(\"' + \$('#filter_contact').val()  + '\")')
                .show(); // show the filtered elements
        }); 
    }); 
    </script>
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"innerLR\">
        <h3 class=\"pull-left margin-none innerR\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm kiếm người chơi"), "html", null, true);
        echo "</h3>

        <div class=\"clearfix\"></div>
        <div class=\"separator\"></div>
        <div class=\"separator\"></div>
        <div class=\"input-group innerB\">
            <input id=\"filter_contact\" type=\"text\" class=\"form-control \" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm người chơi"), "html", null, true);
        echo "\">
            <div class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i>
                </button>
            </div>
        </div>
            <!-- Row -->
        <div class=\"row\">
            <!-- Col sport slide -->
            <div class=\"col-md-9\">
                <!-- Start Featured -->
                ";
        // line 43
        $context["i"] = 0;
        // line 44
        echo "                <div class=\"row\">
                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")));
        foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
            // line 46
            echo "                  ";
            if (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 0))) {
                // line 47
                echo "                    </div>
                      <div class=\"row\">
                  ";
            }
            // line 50
            echo "                           <div class=\"col-sm-3\">
                                <div class=\"widget\">
                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))), "html", null, true);
            echo "\" class=\"display-block bg-success innerAll text-center text-white\">
                                    ";
            // line 53
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "document", array(), "any", true, true)) {
                // line 54
                echo "
                                ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 56
                    echo "
                                        ";
                    // line 57
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 58
                        echo "                                                ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 59
                        echo "                                        ";
                    }
                    // line 60
                    echo "
                                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 62
                    echo "                                        ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 63
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                        ";
            }
            // line 65
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_80"), "html", null, true);
            echo "\">
                                </a>
                                <div class=\"text-center innerAll\">
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))), "html", null, true);
            echo "\" class=\"strong\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenom"), "html", null, true);
            echo "</a>
                                <div class=\"clearfix\"></div>
                                <!--<small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>-->
                                </div>
                                </div>
                         </div>

                 ";
            // line 75
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 76
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </div>
                <!-- End Featured -->
                <div class=\"clearfix\"></div>



            </div>
            <!-- Col -->
            <div class=\"col-md-3\">

                <div class=\"widget\">
                    <div class=\"widget-body padding-none\">
                        <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("ListProfile");
        echo "\">
                            <h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4>
                        </a>
                        <ul class=\"list-group list-group-1 margin-none borders-none\">
                          ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 94
            echo "                              ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "profiles")) > 0)) {
                // line 95
                echo "                              <li class=\"list-group-item border-top-none\">
                                <a href=\"?sport=";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
                echo "\">
                                    <span class=\"badge pull-right bg-primary \">";
                // line 97
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "profiles")), "html", null, true);
                echo "</span><i class=\"fa fa-exclamation-circle\"></i>&nbsp;
                                    ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nameVn"), "html", null, true);
                echo "</a>
                                </li>
                               ";
            }
            // line 101
            echo "

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:listProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 95,  134 => 59,  253 => 141,  150 => 65,  58 => 14,  127 => 66,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 54,  23 => 2,  65 => 25,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 59,  129 => 57,  198 => 89,  192 => 95,  126 => 56,  113 => 54,  84 => 37,  77 => 32,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 98,  185 => 77,  181 => 112,  172 => 105,  155 => 65,  153 => 68,  146 => 63,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 104,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 46,  70 => 22,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 93,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 60,  124 => 191,  110 => 186,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 65,  132 => 52,  128 => 75,  107 => 52,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 123,  208 => 121,  204 => 72,  179 => 79,  159 => 60,  143 => 62,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 16,  63 => 20,  59 => 16,  93 => 44,  88 => 31,  78 => 35,  28 => 3,  87 => 38,  46 => 12,  44 => 10,  94 => 42,  89 => 31,  85 => 29,  75 => 28,  68 => 26,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 113,  171 => 77,  166 => 103,  163 => 75,  158 => 67,  156 => 59,  151 => 98,  142 => 65,  138 => 77,  136 => 57,  121 => 55,  117 => 47,  105 => 56,  91 => 43,  62 => 24,  49 => 13,  31 => 3,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 27,  69 => 17,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 63,  139 => 82,  131 => 58,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 50,  101 => 52,  98 => 36,  96 => 45,  83 => 37,  74 => 23,  66 => 26,  55 => 17,  52 => 14,  50 => 11,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 6,  209 => 94,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 75,  173 => 94,  168 => 77,  164 => 76,  162 => 68,  154 => 73,  149 => 71,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 59,  125 => 41,  122 => 49,  116 => 53,  112 => 52,  109 => 57,  106 => 34,  103 => 47,  99 => 46,  95 => 33,  92 => 29,  86 => 26,  82 => 33,  80 => 25,  73 => 19,  64 => 15,  60 => 18,  57 => 17,  54 => 16,  51 => 10,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 6,  33 => 10,  30 => 3,);
    }
}
