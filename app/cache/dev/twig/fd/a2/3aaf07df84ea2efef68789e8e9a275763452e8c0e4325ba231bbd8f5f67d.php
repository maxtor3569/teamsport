<?php

/* SportimimiuserBundle:Match:detailMatch.html.twig */
class __TwigTemplate_fda23aaf07df84ea2efef68789e8e9a275763452e8c0e4325ba231bbd8f5f67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t<script src=\"http://vjs.zencdn.net/4.0/video.js\"></script>

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("shadowbox-3.0.3/shadowbox.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/team.css"), "html", null, true);
        echo "\">
\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("shadowbox-3.0.3/shadowbox.js"), "html", null, true);
        echo "\"></script>
\t<script>
\tfunction changeWinner() 
\t{
\t\tvar value=\$('#winner').val();
\t\t\$.ajax({
        type: \"POST\",
\t\tdata :{ winner : value},
        url: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SetWinnerMatch", array("id" => $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "id"))), "html", null, true);
        echo "\",
        cache: false,
        success: function(data){
\t\t\talert('Winner change ');
\t\t\twindow.location.reload();
\t
        }
\t\t});    
\t\t
\t}
\t
\t</script>

\t

";
    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        echo "Match";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
\t<div style=\"padding:15px\">
\t\t<div style=\"position:absolute;left:572px\">
\t\t\t";
        // line 38
        $context["category"] = 0;
        // line 39
        echo "\t\t\t";
        $context["i"] = 1;
        // line 40
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "teams"));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 41
            echo "\t\t\t\t <div id=\"team";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
\t\t\t\t\t TEAM ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " :
\t\t\t\t\t\t";
            // line 43
            if (($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "winner") == (isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")))) {
                // line 44
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                echo "\t
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t</div> 
\t\t\t\t<br />
\t\t
\t\t\t\t\t";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "profile"));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 52
                echo "\t\t\t\t\t\t<div id=\"teaminfo";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "positions"));
                foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                    // line 56
                    echo "\t\t\t\t\t\t\t<div id=\"position";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"), "html", null, true);
                    echo "\">Position: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 57
                    if (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Goal")) {
                        // line 58
                        echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#goalPosition').html('<b><a href=\"";
                        // line 60
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                        echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Attacker")) {
                        // line 64
                        echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#attackerPosition').html('<b><a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                        echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Attacker Left")) {
                        // line 70
                        echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#attackerLeftPosition').html('<b><a href=\"";
                        // line 72
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                        echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Attacker Right")) {
                        // line 77
                        echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#attackerRightPosition').html('<b><a href=\"";
                        // line 79
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                        echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Midfielder")) {
                        // line 85
                        echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#midfielder').html('<b><a href=\"";
                        // line 87
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                        echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t";
            $context["category"] = $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id");
            // line 94
            echo "\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 95
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t</div>
\t\t";
        // line 97
        if (((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")) == 1)) {
            // line 98
            echo "\t\t\t<div id=\"bloc_terrain\" style=\"display: block; opacity: 1; height: 480px;\">
\t\t\t\t<div id=\"terrain\">
\t\t\t\t\t<div id=\"goalPosition\"></div>
\t\t\t\t\t<div id=\"defenderPosition\"></div>
\t\t\t\t\t<div id=\"midfielder\"></div>\t\t\t
\t\t\t\t\t<div id=\"attackerLeftPosition\"></div>
\t\t\t\t\t<div id=\"attackerRightPosition\"></div>\t
\t\t\t\t\t<div id=\"attackerPosition\"></div>\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 109
        echo "\t\t<div style=\"float:right;position:absolute;top:218px;left:814px\">
\t\t\t<span style=\"color:green\">Chiến Thắng : </span>
\t\t";
        // line 111
        $context["leader"] = 0;
        // line 112
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "teams"));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 113
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "leader"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                // line 114
                echo "\t\t\t\t";
                $context["leader"] = 1;
                // line 115
                echo "\t\t\t";
            }
            // line 116
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t";
        if (((isset($context["leader"]) ? $context["leader"] : $this->getContext($context, "leader")) == 1)) {
            // line 118
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "winner", array(), "any", false, true), "name", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "winner"), "name"), "html", null, true);
                echo " ";
            }
            // line 119
            echo "\t\t\t<select id=\"winner\">
\t\t\t\t";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "teams"));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 121
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                echo "</option> 
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t</select>
\t\t\t<button onclick=\"changeWinner()\">Đổi chiến thắng</button>
\t\t\t";
        }
        // line 126
        echo "\t\t</div> 
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Match:detailMatch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 114,  276 => 113,  271 => 112,  265 => 109,  250 => 97,  223 => 91,  185 => 72,  181 => 70,  172 => 66,  155 => 58,  153 => 57,  146 => 56,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 94,  218 => 86,  211 => 85,  152 => 72,  148 => 71,  53 => 11,  242 => 96,  234 => 103,  232 => 93,  215 => 96,  206 => 94,  195 => 77,  190 => 89,  165 => 81,  160 => 79,  90 => 38,  81 => 23,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 85,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 81,  178 => 213,  174 => 212,  161 => 75,  137 => 53,  124 => 191,  110 => 186,  76 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 118,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 98,  247 => 96,  241 => 95,  229 => 92,  220 => 70,  214 => 87,  177 => 65,  169 => 79,  140 => 55,  132 => 52,  128 => 51,  107 => 47,  61 => 15,  273 => 258,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 69,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 20,  63 => 17,  59 => 15,  93 => 42,  88 => 27,  78 => 21,  28 => 3,  87 => 25,  46 => 7,  44 => 11,  94 => 28,  89 => 35,  85 => 35,  75 => 23,  68 => 18,  56 => 16,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 72,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 23,  49 => 9,  31 => 4,  38 => 5,  26 => 1,  24 => 3,  19 => 1,  79 => 23,  72 => 22,  69 => 16,  47 => 9,  40 => 5,  37 => 6,  22 => 1,  246 => 244,  157 => 74,  145 => 70,  139 => 69,  131 => 52,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 27,  74 => 19,  66 => 20,  55 => 10,  52 => 9,  50 => 10,  43 => 6,  41 => 7,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 79,  193 => 90,  189 => 71,  187 => 82,  182 => 87,  176 => 84,  173 => 65,  168 => 64,  164 => 76,  162 => 80,  154 => 73,  149 => 51,  147 => 72,  144 => 70,  141 => 48,  133 => 55,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 43,  106 => 36,  103 => 56,  99 => 33,  95 => 40,  92 => 39,  86 => 26,  82 => 34,  80 => 26,  73 => 19,  64 => 15,  60 => 14,  57 => 16,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 8,  33 => 4,  30 => 3,);
    }
}
