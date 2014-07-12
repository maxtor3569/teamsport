<?php

/* SportimimiuserBundle:Place:listPlace.html.twig */
class __TwigTemplate_44e5d1c73919a94768d598174d3d373a8e18a2ff99c522f12050984e818349bc extends Twig_Template
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
        echo "Danh Sách Các Môn Thể Thao";
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t <!-- <div class=\"layout-app\">  -->
            <div class=\"innerLR\">
                <h3 class=\"pull-left margin-none innerR\">TÌM SÂN CHƠI</h3>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("CreatePlace");
        echo "\" class=\"btn btn-primary pull-left\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Không tìm thấy Nơi bạn đang chơi?"), "html", null, true);
        echo "</a>
                
                <div class=\"clearfix\"></div>
                <div class=\"separator-h\"></div>
                <!-- Row -->
                <div class=\"row\">
                    <!-- Col -->
                    <div class=\"col-md-9\">
                        <!-- Start Featured -->
                        <!-- content -->
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 26
            echo "                        <div class=\"widget media margin-none \">
                            <a class=\"pull-left bg-success innerAll text-center text-white\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailPlace", array("name" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "alias"))), "html", null, true);
            echo "\"><i class=\"fa fa-fw icon-soccer-field fa-5x\"></i>
                            </a>
                            <div class=\"media-body innerAll\">
                                <h4 class=\"media-heading innerT\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailPlace", array("name" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "alias"))), "html", null, true);
            echo "\" class=\"text-inverse\">";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "placeName", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
            }
            echo "</a> 
                                    <small><i class=\"fa fa-fw fa-clock-o\"></i> 5:15</small>
                                </h4>
                                Quận ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "address"), "html", null, true);
            echo "
                            </div>
                        </div>
                        <div class=\"separator bottom\"></div>
                        <!-- // END content -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </div>
                    <!-- // END col -->
                    <!-- col -->
                    <div class=\"col-md-3\">
                        <div class=\"widget  padding-none\">
                            <div class=\"widget-body padding-none\">
                                <h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4>
                                <ul class=\"list-group list-group-1 margin-none borders-none\">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class=\"widget\">
                            <h4 class=\"innerAll margin-none border-bottom bg-white\">Sân vận động nổi tiếng</h4>
                            
                            <a href=\"#\" class=\"display-block media margin-none bg-white innerAll border-bottom\">
                                <img class=\"pull-left\" data-src=\"holder.js/50x50\" alt=\"...\" />
                                <span class=\"display-block media-body \">
                                    <h5 class=\"innerT half\">Video Tutorial</h5>
                                    <div class=\"clearfix\"></div>
                                    <small class=\"text-center text-inverse muted\"><i class=\"fa fa-fw fa-clock-o\"></i> 5:15</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- // END col -->
            </div>
            <!-- // END row -->
             <!-- Pagination: Aligned center -->
             ";
        // line 69
        $context["counter"] = (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page"));
        // line 70
        echo "            ";
        $context["counterDes"] = (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page"));
        // line 71
        echo "            ";
        $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
        // line 72
        echo "            ";
        $context["counterDes"] = ((isset($context["counterDes"]) ? $context["counterDes"] : $this->getContext($context, "counterDes")) - 1);
        // line 73
        echo "               
            ";
        // line 74
        echo (isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"));
        echo "
                                
                            
                <!-- // Pagination: Aligned center END -->
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Place:listPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 71,  53 => 11,  242 => 105,  234 => 103,  232 => 102,  215 => 96,  206 => 94,  195 => 91,  190 => 89,  165 => 81,  160 => 79,  90 => 27,  81 => 23,  100 => 45,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 288,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 264,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 226,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 86,  178 => 213,  174 => 212,  161 => 208,  137 => 196,  124 => 191,  110 => 186,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 101,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 47,  61 => 15,  273 => 258,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 231,  221 => 99,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 69,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 20,  63 => 17,  59 => 15,  93 => 42,  88 => 27,  78 => 21,  28 => 3,  87 => 25,  46 => 11,  44 => 11,  94 => 28,  89 => 30,  85 => 167,  75 => 23,  68 => 18,  56 => 12,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 72,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 31,  91 => 26,  62 => 23,  49 => 9,  31 => 4,  38 => 5,  26 => 1,  24 => 3,  19 => 1,  79 => 23,  72 => 16,  69 => 16,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 244,  157 => 74,  145 => 70,  139 => 45,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 39,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 27,  74 => 19,  66 => 20,  55 => 11,  52 => 10,  50 => 10,  43 => 7,  41 => 10,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 93,  199 => 67,  193 => 90,  189 => 71,  187 => 84,  182 => 87,  176 => 84,  173 => 65,  168 => 82,  164 => 59,  162 => 80,  154 => 73,  149 => 51,  147 => 72,  144 => 49,  141 => 48,  133 => 55,  130 => 194,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 27,  92 => 21,  86 => 26,  82 => 166,  80 => 26,  73 => 19,  64 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 8,  33 => 2,  30 => 6,);
    }
}
