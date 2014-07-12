<?php

/* SportimimiuserBundle:Message:index.html.twig */
class __TwigTemplate_d25a46b52fcb0f43e3d72a02ddcd35626a13d8ea80673c0d475d0a08e1dd7a7a extends Twig_Template
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
        echo "    <style>
        .message {cursor:pointer}
        
    </style>
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    <script>
    \$(document).ready(function(){
      \$('#filter_message').on('input', function() {
        \$('.messageContent').parents('li').hide() // hide all the selected elements
                .filter(':contains(\"' + \$('#filter_message').val()  + '\")')
                .show(); // show the filtered elements
      }); 
    }); 
    \$(\".message\").click(function(){
        var id_message = jQuery(this).attr('data-id');
        jQuery('#answerMessage').attr('data-idMessage',id_message);
        jQuery(this).attr('class','border-bottom bg-primary active');
         \$.ajax({
            type: \"POST\",
            data: {
                id:id_message
            },
            dataType: 'html',
            //url: \"ajax/loadNews.php\",
            url: Routing.generate('LoadReply'),
            cache: false,
            success: function(data) {
                jQuery('#replyBlock').html(data);
            }
        });
    });
    \$('#answerMessage').live(\"keyup\",function(e) 
    {
        if (event.keyCode == 13){
             var contentPosted = jQuery(this).val();
             var idMessage =jQuery(this).attr('data-idMessage');
             \$.ajax({
                type: \"POST\",
                data: {message_content: contentPosted, id: idMessage},
                dataType: 'text',
                url: \"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ReplyMessage");
        echo "\",
                cache: false,
                success: function(data) {
                    \$('#answerMessage').val('');
                    window.location.reload();
                }
            });
        }
    });
</script>
  
";
    }

    // line 57
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "<div class=\"innerAll\">
        <!-- Widget -->
        <div class=\"widget widget-messages widget-heading-simple widget-body-white\">
            <div class=\"widget-body padding-none margin-none\">
                <div class=\"row row-merge borders\">
                    <div class=\"col-md-3 listWrapper\">
                        <div class=\"innerAll\">
                            <form autocomplete=\"off\" class=\"form-inline margin-none\">
                                <div class=\"input-group input-group-sm\">
                                    <input id=\"filter_message\" type=\"text\" class=\"form-control\" placeholder=\"Find messages ..\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-primary btn-xs pull-right\"><i class=\"fa fa-search\"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class=\"bg-gray text-center strong border-top innerAll half\">";
        // line 77
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
        echo " <i class=\"fa fa-circle-arrow-down\"></i>
                        </div>
                       
                        <ul class=\"list-unstyled\">
                           ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "                            <li class=\"border-bottom message\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
            echo "\">
                                <div class=\"media innerAll\">
                                    <div class=\"media-object pull-left hidden-phone\">
                                        ";
            // line 85
            $context["profilePrint"] = $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "profile_send");
            // line 86
            echo "                                        ";
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "profile_send") == (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
                // line 87
                echo "                                            ";
                $context["profilePrint"] = $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "profile_recieve");
                // line 88
                echo "                                        ";
            }
            // line 89
            echo "                                             
                                        ";
            // line 90
            if ($this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : null), "document", array(), "any", true, true)) {
                // line 91
                echo "
                                            ";
                // line 92
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : $this->getContext($context, "profilePrint")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 93
                    echo "
                                                ";
                    // line 94
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 95
                        echo "                                                        ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 96
                        echo "                                                ";
                    }
                    // line 97
                    echo "
                                                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 99
                    echo "                                                        ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 100
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                        ";
            }
            // line 102
            echo "                                        <a href=\"\">
                                            <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
            echo "\" alt=\"Image\" />
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <div>
                                            <span class=\"strong\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : $this->getContext($context, "profilePrint")), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : $this->getContext($context, "profilePrint")), "nom"), "html", null, true);
            echo "</span>
                                            <small class=\"text-italic pull-right label label-default\">2 days</small>
                                        </div>
                                        <div class=\"messageContent\">";
            // line 111
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute(twig_last($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message_reply")), "content"), 0, 20) . "..."), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </ul>
                    </div>
                    <div class=\"col-md-9 detailsWrapper\">
                        <!-- User -->
                        <div class=\"bg-primary\">
                            <div class=\"media\">
                                 ";
        // line 122
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "document", array(), "any", true, true)) {
            // line 123
            echo "
                                            ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 125
                echo "
                                                ";
                // line 126
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 127
                    echo "                                                        ";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 128
                    echo "                                                ";
                }
                // line 129
                echo "
                                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 131
                echo "                                                        ";
                $context["url"] = "img_profile_default.jpg";
                // line 132
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                                    ";
        }
        // line 134
        echo "                                <a href=\"\" class=\"pull-left\">
                                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
        echo "\" width=\"65\" class=\"media-object\">
                                </a>
                                <div class=\"media-body innerTB innerR\">
                                    <div class=\"innerT half pull-right\">
                                        
                                        <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("SendMessage");
        echo "\" class=\"btn btn-default bg-white btn-sm\">
                                            <i class=\"fa fa-pencil\"></i> Tin nhắn mới
                                        </a>
                                    </div>
                                    <h4 href=\"\" class=\"text-white pull-left innerAll strong display-block margin-none\">";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo " </h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-gray innerAll text-center margin-none\"><a href=\"\" class=\"text-muted lead\"><i class=\"icon-time-clock\"></i> View Archive</a>
                        </div>
                        <div id=\"type\" class=\"collapse in border-top\">
                            <textarea id=\"answerMessage\" data-idMessage =\"\" type=\"text\" class=\"form-control rounded-none border-none\" placeholder=\"Viết tin nhắn...\"></textarea>
                        </div>
                        
    <div id=\"replyBlock\" class=\"widget border-top padding-none margin-none\">

                             
                           

    </div>
    
</div>    
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 140,  267 => 132,  202 => 103,  175 => 95,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 95,  126 => 77,  113 => 45,  84 => 37,  77 => 27,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 135,  276 => 134,  271 => 112,  265 => 109,  250 => 126,  223 => 91,  185 => 72,  181 => 97,  172 => 66,  155 => 58,  153 => 57,  146 => 85,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 85,  152 => 72,  148 => 86,  53 => 13,  242 => 124,  234 => 103,  232 => 93,  215 => 96,  206 => 101,  195 => 77,  190 => 100,  165 => 92,  160 => 90,  90 => 38,  81 => 28,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 223,  200 => 220,  188 => 94,  184 => 93,  180 => 81,  178 => 96,  174 => 90,  161 => 75,  137 => 53,  124 => 191,  110 => 186,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 127,  247 => 125,  241 => 95,  229 => 116,  220 => 70,  214 => 87,  177 => 65,  169 => 88,  140 => 55,  132 => 52,  128 => 75,  107 => 60,  61 => 15,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 69,  135 => 81,  119 => 46,  102 => 32,  71 => 41,  67 => 14,  63 => 13,  59 => 15,  93 => 34,  88 => 27,  78 => 35,  28 => 4,  87 => 38,  46 => 8,  44 => 11,  94 => 28,  89 => 32,  85 => 35,  75 => 23,  68 => 21,  56 => 14,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 101,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 87,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 23,  49 => 9,  31 => 3,  38 => 5,  26 => 3,  24 => 3,  19 => 1,  79 => 23,  72 => 25,  69 => 16,  47 => 9,  40 => 7,  37 => 6,  22 => 1,  246 => 244,  157 => 89,  145 => 70,  139 => 82,  131 => 53,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 57,  96 => 25,  83 => 27,  74 => 18,  66 => 20,  55 => 16,  52 => 9,  50 => 10,  43 => 8,  41 => 6,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 102,  193 => 90,  189 => 71,  187 => 99,  182 => 87,  176 => 84,  173 => 94,  168 => 64,  164 => 76,  162 => 91,  154 => 88,  149 => 93,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 43,  106 => 36,  103 => 56,  99 => 37,  95 => 40,  92 => 39,  86 => 26,  82 => 45,  80 => 26,  73 => 19,  64 => 15,  60 => 12,  57 => 11,  54 => 11,  51 => 10,  48 => 9,  45 => 10,  42 => 9,  39 => 6,  36 => 8,  33 => 4,  30 => 3,);
    }
}
