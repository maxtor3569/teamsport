<?php

/* SportimimiuserBundle:Team:listTeams.html.twig */
class __TwigTemplate_9b950bc13591af1ee617725a6083dff0057f1474b59af93fc42bdcebddfa867e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Đội"), "html", null, true);
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
        echo "
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t<div class=\"innerLR\">
\t\t<h3 class=\"pull-left margin-none innerR\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Đội"), "html", null, true);
        echo "</h3>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("CreateTeam");
        echo "\" class=\"btn btn-primary pull-left\">Tạo Đội</a>
               
        <div class=\"clearfix\"></div>
        <div class=\"separator-h\"></div>
                <!-- Row -->
                <div class=\"row\">
                    <!-- Col sport slide -->
                    <div class=\"col-md-9\">
                        <!-- Start Featured -->
                        ";
        // line 28
        $context["i"] = 0;
        // line 29
        echo "                        <div class=\"row\">
                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 31
            echo "                          ";
            if (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 0))) {
                // line 32
                echo "                            </div>
                              <div class=\"row\">
                          ";
            }
            // line 35
            echo "                                   <div class=\"col-sm-3\">
                                        <div class=\"widget\">
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ViewTeam", array("name" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "alias"))), "html", null, true);
            echo "\" class=\"display-block bg-success innerAll text-center text-white\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "classIcons"), "html", null, true);
            echo " fa-5x\"></i>
                                        <br />";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "nameVn"), "html", null, true);
            echo "
                                        </a>
                                        <div class=\"text-center innerAll\">
                                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ViewTeam", array("name" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "alias"))), "html", null, true);
            echo "\" class=\"strong  \">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
            echo "</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"icon-user-2\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "profile")), "html", null, true);
            echo " thành viên</small>
                                        </div>
                                        </div>
                                 </div>
                         
                         ";
            // line 48
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 49
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </div>
                        <!-- End Featured -->
                        <div class=\"clearfix\"></div>
                        <div class=\"widget\">
                            <div class=\"text-center innerAll inner-2x\">
                                <h2 class=\"innerT\">";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams"))), "html", null, true);
        echo " Teams</h2>
                                <p class=\"lead\">Join the turnament.</p>
                                <p class=\"lead\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("CreateTeam");
        echo "\" class=\"btn btn-primary\">Tạo Đội</a>
                                </p>
                            </div>
                        </div>
                        <!--
                        <div class=\"widget\">
                            <div class=\"innerTB\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"innerAll text-center\">
                                            <h4 class=\"text-primary \">Our Tutors</h4>
                                            <p class=\"margin-none\">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Laborum, ducimus.</p>
                                            <p><a href=\"\">learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"innerAll text-center\">
                                            <h4 class=\"text-primary \">The Courses</h4>
                                            <p class=\"margin-none\">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Laborum, ducimus.</p>
                                            <p><a href=\"\">learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"innerAll text-center\">
                                            <h4 class=\"text-primary \">Achievments</h4>
                                            <p class=\"margin-none\">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Laborum, ducimus.</p>
                                            <p><a href=\"\">learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       -->
                       <!--
                        <div class=\"row\">
                            <div class=\"col-sm-6 \">
                                <h4 class=\"innerTB margin-none icon-refresh-heart\"><i></i>&nbsp; Most Viewed</h4>
                                <div class=\"widget innerAll margin-none\">
                                    <a href=\"\" class=\"display-block bg-inverse innerAll text-center\"><i class=\"text-white icon-clipboard fa-5x\"></i></a>
                                    <div class=\"text-center innerT\">
                                        <a href=\"\" class=\"strong text-inverse \">To Do List</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <h4 class=\"innerTB margin-none icon-cool\"><i></i>&nbsp; Popular this Month</h4>
                                <div class=\"widget innerAll margin-none\">
                                    <a href=\"\" class=\"display-block bg-inverse innerAll text-center\"><i class=\"text-white icon-clipboard fa-5x\"></i></a>
                                    <div class=\"text-center innerT\">
                                        <a href=\"\" class=\"strong text-inverse \">To Do List</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                   
                    <!-- Col -->
                    <div class=\"col-md-3\">
                 
                        <div class=\"widget\">
                            <div class=\"widget-body padding-none\">
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("ListTeam");
        echo "\"><h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4></a>
                                <ul class=\"list-group list-group-1 margin-none borders-none\">
                                  ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 131
            echo "                                      ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "teams")) > 0)) {
                // line 132
                echo "                                      <li class=\"list-group-item border-top-none\">
                                        <a href=\"?sport=";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
                echo "\">
                                            <span class=\"badge pull-right bg-primary \">";
                // line 134
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "teams")), "html", null, true);
                echo "</span><i class=\"fa fa-exclamation-circle\"></i>&nbsp;
                                            ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), "html", null, true);
                echo "</a>
                                        </li>
                                       ";
            }
            // line 138
            echo "                                      
                                      
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                    
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Team:listTeams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 133,  433 => 174,  424 => 172,  415 => 167,  405 => 163,  376 => 152,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 145,  328 => 139,  313 => 133,  286 => 120,  277 => 116,  236 => 104,  222 => 99,  167 => 74,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 143,  332 => 134,  329 => 133,  323 => 132,  321 => 137,  316 => 130,  307 => 127,  275 => 112,  272 => 111,  270 => 110,  231 => 99,  228 => 98,  505 => 384,  497 => 380,  492 => 378,  488 => 377,  484 => 375,  479 => 373,  473 => 370,  97 => 37,  212 => 95,  134 => 51,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 226,  386 => 225,  383 => 156,  380 => 150,  375 => 222,  373 => 221,  367 => 145,  338 => 142,  335 => 141,  318 => 189,  297 => 122,  292 => 171,  281 => 118,  194 => 136,  191 => 115,  186 => 114,  118 => 36,  23 => 3,  65 => 19,  287 => 140,  267 => 113,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 49,  113 => 34,  84 => 23,  77 => 32,  114 => 41,  299 => 126,  293 => 122,  324 => 138,  308 => 130,  304 => 120,  301 => 124,  291 => 119,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 130,  185 => 83,  181 => 112,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 106,  248 => 107,  245 => 106,  237 => 134,  218 => 128,  211 => 96,  152 => 64,  148 => 62,  53 => 15,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 27,  81 => 30,  100 => 31,  70 => 22,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 383,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 271,  288 => 118,  282 => 114,  259 => 107,  255 => 141,  251 => 108,  249 => 110,  239 => 105,  210 => 108,  205 => 92,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 48,  110 => 61,  76 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 132,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 141,  355 => 140,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 129,  309 => 128,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 119,  278 => 86,  268 => 85,  264 => 112,  258 => 129,  252 => 144,  247 => 138,  241 => 135,  229 => 101,  220 => 96,  214 => 97,  177 => 87,  169 => 104,  140 => 79,  132 => 50,  128 => 75,  107 => 52,  61 => 22,  273 => 133,  269 => 114,  254 => 105,  243 => 182,  240 => 101,  238 => 94,  235 => 93,  230 => 132,  227 => 131,  224 => 100,  221 => 87,  219 => 98,  217 => 95,  208 => 95,  204 => 94,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 20,  67 => 15,  63 => 19,  59 => 15,  93 => 35,  88 => 32,  78 => 29,  28 => 5,  87 => 26,  46 => 12,  44 => 11,  94 => 52,  89 => 31,  85 => 31,  75 => 35,  68 => 17,  56 => 16,  27 => 4,  25 => 5,  21 => 2,  201 => 91,  196 => 91,  183 => 63,  171 => 77,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 37,  117 => 42,  105 => 32,  91 => 25,  62 => 18,  49 => 13,  31 => 3,  38 => 7,  26 => 5,  24 => 4,  19 => 1,  79 => 22,  72 => 18,  69 => 21,  47 => 12,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 59,  139 => 55,  131 => 46,  123 => 43,  120 => 64,  115 => 38,  111 => 44,  108 => 39,  101 => 43,  98 => 36,  96 => 30,  83 => 60,  74 => 21,  66 => 33,  55 => 14,  52 => 14,  50 => 14,  43 => 8,  41 => 7,  35 => 9,  32 => 5,  29 => 4,  209 => 94,  203 => 84,  199 => 118,  193 => 88,  189 => 71,  187 => 93,  182 => 80,  176 => 80,  173 => 77,  168 => 77,  164 => 71,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 57,  141 => 48,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 43,  112 => 35,  109 => 41,  106 => 32,  103 => 38,  99 => 36,  95 => 48,  92 => 35,  86 => 49,  82 => 22,  80 => 37,  73 => 22,  64 => 19,  60 => 18,  57 => 17,  54 => 16,  51 => 13,  48 => 14,  45 => 12,  42 => 6,  39 => 10,  36 => 3,  33 => 10,  30 => 5,);
    }
}
