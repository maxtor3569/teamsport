<?php

/* SportimimiuserBundle:Events:detailEvent.html.twig */
class __TwigTemplate_00ed34d03b5b1a60dc73d38d6e94b066d6169f29db0b05ee7cf1076e931c3273 extends Twig_Template
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
        echo "Sự Kiện ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
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
        echo "
    <div class=\"innerLR spacing-x2\">
        <h3>Events</h3>
        <!-- Row -->
        <div class=\"row\">
            <!-- Col -->
            <div class=\"col-md-6 col-lg-6\">
                <!-- Widget -->
                <div class=\"widget\">
                    <h4 class=\"innerAll half margin-none border-bottom\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "</h4>

                    <hr class=\"margin-none\" />
                </div>
                <!-- End Widget -->
                <!-- widget -->
                <div class=\" widget media innerAll half\" style=\"display:none\">
                    <div class=\"pull-left innerT\">
                        <img data-src=\"holder.js/50x50/dark\" alt=\"\" class=\"img-responsive img-circle\" />
                    </div>
                    <div class=\"media-body\">
                        <div class=\"pull-right innerAll half\">
                            <div class=\"btn-group-vertical btn-group-sm\">
                                <a href=\"#\" class=\"btn btn-inverse\">Follow</a>
                                <a href=\"#\" class=\"btn btn-default margin-none\">Contact</a>
                            </div>
                        </div>
                        <div class=\"innerAll half media  margin-none\">
                            <div class=\"pull-left innerAll half\">
                                <p class=\"strong margin-none\">Company, Inc</p>
                                <p>Official Organizer</p>
                            </div>
                            <div class=\"media-body border-left innerLR\">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dicta, odio id
                                cumque voluptates debitis asperiores. Dolorum,
                                quod, cupiditate.
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <!-- End Col -->
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <!-- Widget -->
                <div class=\"widget\">
                    <h4 class=\"bg-primary innerAll half border-bottom margin-none text-white\">Event</h4>
                    <div class=\"innerAll half bg-primary border-bottom\">
                        <div class=\"media innerAll half margin-none text-white\">
                            <div class=\"pull-left\">
                                <i class=\"fa fa-fw fa-calendar fa-3x \"></i>
                            </div>
                            <div class=\"media-body\">
                                <p class=\"strong lead margin-none\">";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "dateEventStart"), "d/m/Y"), "html", null, true);
        echo "</p>
                                <p class=\"strong margin-none\">1:00 - 5:00 pm</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"innerAll half bg-gray border-bottom\">
                        <div class=\"media innerAll half margin-none\">
                            <div class=\"pull-left\">
                                <i class=\"fa fa-fw fa-map-marker fa-3x\"></i>
                            </div>
                            <div class=\"media-body\">
                                <p class=\"strong lead margin-none\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "location"), "html", null, true);
        echo "</p>
                                <p class=\"strong margin-none\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"innerAll text-center half\">
                        <div class=\"btn-group\">
                            <button class=\"btn btn-success\"><i class=\"fa fa-fw fa-check\"></i> Attend</button>
                            <button class=\"btn btn-default\">I might go</button>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <!-- Widget -->
                <div class=\"widget\">
                    <h4 class=\"border-bottom margin-none innerAll half\">Friends</h4>
                    <div class=\"border-bottom\">
                        <div class=\"innerAll half\">
                            <span class=\"badge bg-primary pull-right\">";
        // line 93
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "profile")), "html", null, true);
        echo "</span>Attending
                        </div>
                    </div>

                    <div class=\"innerAll half text-center\">
                        <a href=\"#\" class=\"border-none\" data-toggle=\"image-preview\" data-title=\"Lorem ipsum\"
                           data-image-preview=\"../assets/images/people/250/1.jpg\"
                           width=\"100\" href=\"#\" class=\"pull-left border-none\">
                            <img src=\"../assets/images/people/80/1.jpg\" alt=\"photo\" width=\"35\" class=\"innerB half\"></img>
                        </a>

                    </div>
                    <!-- End Widget -->
                </div>


            </div>
            <!-- End Col -->
        </div>
        <!-- Col -->

        <!--  End Row -->
    </div>
    <!-- End Inner -->
</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Events:detailEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 114,  276 => 113,  271 => 112,  265 => 109,  250 => 97,  223 => 91,  185 => 72,  181 => 70,  172 => 66,  155 => 58,  153 => 57,  146 => 56,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 94,  218 => 86,  211 => 85,  152 => 72,  148 => 71,  53 => 11,  242 => 96,  234 => 103,  232 => 93,  215 => 96,  206 => 94,  195 => 77,  190 => 89,  165 => 81,  160 => 79,  90 => 38,  81 => 23,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 85,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 81,  178 => 213,  174 => 212,  161 => 75,  137 => 53,  124 => 191,  110 => 186,  76 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 118,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 98,  247 => 96,  241 => 95,  229 => 92,  220 => 70,  214 => 87,  177 => 65,  169 => 79,  140 => 55,  132 => 52,  128 => 75,  107 => 47,  61 => 15,  273 => 258,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 69,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 20,  63 => 17,  59 => 15,  93 => 42,  88 => 27,  78 => 21,  28 => 3,  87 => 25,  46 => 8,  44 => 11,  94 => 28,  89 => 35,  85 => 35,  75 => 23,  68 => 21,  56 => 16,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 72,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 23,  49 => 9,  31 => 4,  38 => 5,  26 => 1,  24 => 3,  19 => 1,  79 => 23,  72 => 22,  69 => 16,  47 => 9,  40 => 5,  37 => 6,  22 => 1,  246 => 244,  157 => 74,  145 => 70,  139 => 69,  131 => 52,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 27,  74 => 19,  66 => 20,  55 => 10,  52 => 9,  50 => 10,  43 => 6,  41 => 6,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 79,  193 => 90,  189 => 71,  187 => 82,  182 => 87,  176 => 84,  173 => 65,  168 => 64,  164 => 76,  162 => 80,  154 => 73,  149 => 93,  147 => 72,  144 => 70,  141 => 48,  133 => 55,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 43,  106 => 36,  103 => 56,  99 => 33,  95 => 40,  92 => 39,  86 => 26,  82 => 34,  80 => 26,  73 => 19,  64 => 15,  60 => 14,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 8,  33 => 4,  30 => 3,);
    }
}
