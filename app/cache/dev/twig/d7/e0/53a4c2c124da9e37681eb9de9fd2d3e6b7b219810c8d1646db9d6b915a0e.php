<?php

/* SportimimiuserBundle:Profile:detailTeam.html.twig */
class __TwigTemplate_d7e053a4c2c124da9e37681eb9de9fd2d3e6b7b219810c8d1646db9d6b915a0e extends Twig_Template
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

    // line 4
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("shadowbox-3.0.3/shadowbox.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/team.css"), "html", null, true);
        echo "\">

";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "
\t
\t<script type=\"text/javascript\">

\tfunction challengeTeam(idProfileTeam) 
\t{
            var value=\$('#teamSelected').val();
            \$.ajax({
                type: \"POST\",
\t\tdata :{ idTeam : value,idTeamProfile : idProfileTeam },
                url: \"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ChallengeTeam");
        echo "\",
                cache: false,
                success: function(data){
                    alert('Challenge send ');
\t
                }
            });    
\t\t
\t}
\tfunction changePositionF(value,idTeam,idProfile) 
\t{
            \$.ajax({
                type: \"POST\",
\t\tdata :{ positionName : value,team_id: idTeam, profile_id : idProfile },
                url: \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ChangePosition");
        echo "\",
                cache: false,
                success: function(data){
                    window.location.reload();
\t
                }
            });    
\t\t
\t}
\tfunction inviteMe(idTeam) 
\t{

\t\t\$.ajax({
        type: \"POST\",
\t\tdata :{ team_id: idTeam},
        url: \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("InviteMeToTeam");
        echo "\",
        cache: false,
\t\tdataType: 'text',
        success: function(data){
\t\t\talert('Invitation send');
\t\t\twindow.location.reload();
        }
\t\t});    
\t}
\t
    \$(document).ready(function() {
        \$('.edit').editable('";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ChangeNameTeam");
        echo "', { 
            submitdata : {id_team: ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
        echo "}
        });
\t\$(\".draggable\").draggable(
            { 
                containment: \$('#terrain')
            }
\t 
\t);
    });
    </script>
    <style>
        .draggable {width:115px}
    </style>

";
    }

    // line 77
    public function block_title($context, array $blocks = array())
    {
        echo "Đội ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        // line 80
        $context["i"] = 1;
        // line 81
        $context["check"] = 0;
        // line 82
        echo "\t<div class=\"col-lg-12\">
\t\t<h2 class=\"media-heading text-large text-primary\">
\t\t\tTeam ";
        // line 84
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "leader"), "id"))) {
            echo "<span class=\"edit\" name=\"team_name\">";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
        echo "</span> - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "nameVn"), "html", null, true);
        echo " </h2>
\t\t<div class=\"relativeWrap\">
\t        <div class=\"box-generic\">
\t            <!-- Tabs Heading -->
\t            <div class=\"tabsbar\">
\t                <ul>
\t                    <li class=\"glyphicons user active\"><a href=\"#tab1-3\" data-toggle=\"tab\"><i></i>Thành viên <strong>";
        // line 90
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "profile")), "html", null, true);
        echo "</strong></a>
\t                    </li>
\t                    <li class=\"glyphicons charts\"><a href=\"#tab2-3\" data-toggle=\"tab\"><i></i> Kết Quả & thống kê</a>
\t                    </li>
\t                   
\t                </ul>
\t            </div>
\t            <!-- // Tabs Heading END -->
\t            <div class=\"tab-content\">
\t            \t
\t            \t ";
        // line 100
        echo twig_include($this->env, $context, "SportimimiuserBundle:Team:detailTeam-tab1.html.twig");
        echo "              
\t\t\t\t\t ";
        // line 101
        echo twig_include($this->env, $context, "SportimimiuserBundle:Team:detailTeam-tab2.html.twig");
        echo "    
\t
\t            </div>
\t        </div>
\t\t</div>
\t
\t</div>

";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:detailTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  212 => 95,  134 => 59,  253 => 141,  150 => 65,  58 => 14,  127 => 66,  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 54,  23 => 2,  65 => 25,  287 => 140,  267 => 132,  202 => 119,  175 => 78,  170 => 93,  104 => 59,  129 => 57,  198 => 89,  192 => 95,  126 => 56,  113 => 54,  84 => 27,  77 => 32,  114 => 62,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 98,  185 => 77,  181 => 112,  172 => 105,  155 => 65,  153 => 68,  146 => 63,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 104,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 46,  70 => 22,  34 => 5,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 93,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 60,  124 => 191,  110 => 61,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 21,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 123,  208 => 121,  204 => 72,  179 => 100,  159 => 60,  143 => 80,  135 => 63,  119 => 46,  102 => 37,  71 => 24,  67 => 16,  63 => 20,  59 => 16,  93 => 29,  88 => 31,  78 => 35,  28 => 3,  87 => 28,  46 => 10,  44 => 10,  94 => 42,  89 => 31,  85 => 29,  75 => 28,  68 => 26,  56 => 12,  27 => 6,  25 => 5,  21 => 2,  201 => 101,  196 => 117,  183 => 101,  171 => 77,  166 => 90,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 55,  117 => 47,  105 => 56,  91 => 43,  62 => 24,  49 => 11,  31 => 4,  38 => 5,  26 => 3,  24 => 3,  19 => 1,  79 => 26,  72 => 27,  69 => 17,  47 => 10,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 81,  139 => 82,  131 => 58,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 50,  101 => 31,  98 => 36,  96 => 50,  83 => 37,  74 => 23,  66 => 26,  55 => 17,  52 => 11,  50 => 11,  43 => 8,  41 => 8,  35 => 4,  32 => 4,  29 => 3,  209 => 94,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 75,  173 => 94,  168 => 77,  164 => 76,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 70,  141 => 48,  133 => 77,  130 => 59,  125 => 41,  122 => 49,  116 => 36,  112 => 52,  109 => 34,  106 => 34,  103 => 47,  99 => 46,  95 => 33,  92 => 29,  86 => 26,  82 => 33,  80 => 25,  73 => 19,  64 => 14,  60 => 13,  57 => 17,  54 => 16,  51 => 10,  48 => 13,  45 => 8,  42 => 7,  39 => 6,  36 => 6,  33 => 10,  30 => 3,);
    }
}
