<?php

/* SportimimiuserBundle:Profile:detailProfile.html.twig */
class __TwigTemplate_3fcbc4f0f43edb9075a8b967abedf30c405f646259e2b7aeff656db4806db809 extends Twig_Template
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
        echo "<script src=\"../assets/components/common/forms/elements/jasny-fileupload/assets/js/bootstrap-fileupload.js?v=v1.0.1-rc2&sv=v0.0.1.1\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/draggabilly.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script>

        function addSport()
        {

            var sport = jQuery('#addSportsList').val();
            \$.ajax({
                type: \"POST\",
                data: {id: sport},
                dataType: 'text',
                url: \"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("AddSportProfile");
        echo "\",
                cache: false,
                success: function(data) {

                    window.location.reload();
                }
            });

        }
        function invitePlayer()
        {
            var time = jQuery('#timePlay').val();
            var where = jQuery('#placePlayInvit').val();
        var id = \"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"), "html", null, true);
        echo "\";
            \$.ajax({
                type: \"POST\",
                data: {idProfileInvite: id, timePlay: time, placePlay: where},
                dataType: 'text',
            url: \"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("InviteToPlay");
        echo "\",
                cache: false,
                success: function(data) {

                    alert('Thông báo đã gửi. Cảm ơn bạn');
                    window.setTimeout(window.location.reload(), 2000);
                }
            });
        }
        \$(document).ready(function() {

            // tagging support
            \$(\"#addSportsList\").select2({
                ajax: {
                    dataType: \"json\",
                    url: \"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("SportsListJson");
        echo "\",
                    results: function(data) {
                        return {results: data, text: 'client'};
                    }
                },
                formatResult: function(data) {
                    return \"<div class='select2-user-result'>\" + data.nameVn + \"</div>\";
                },
                formatSelection: function(data) {
                    return data.nameVn;
                }

            });


        });
        if (typeof \$.fn.bdatepicker == 'undefined')
            \$.fn.bdatepicker = \$.fn.datepicker.noConflict();
        \$(function()
        {
            // today button
            \$('#timePlay').bdatepicker({
                format: \"dd MM yyyy\",
                startDate: \"2013-02-14\",
                todayBtn: true
            });

        });
        \$( \".box-generic\" ).on( \"click\", function() { 
        \tif (jQuery(this).attr('data-selected','false'))
        \t{
        \t\tjQuery(this).attr('style','background:gray');
        \t\tjQuery(this).attr('data-selected','true');
        \t\t
\t\t\t}
\t\t\telse if (jQuery(this).attr('data-selected','true'))
\t\t\t{
\t\t\t\tjQuery(this).attr('style','background:white');
        \t\tjQuery(this).attr('data-selected','false');
\t\t\t
\t\t\t}
        });
        
        
      </script>
";
    }

    // line 98
    public function block_title($context, array $blocks = array())
    {
        echo "Thông tin";
    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        $context["url"] = "";
        // line 102
        echo "        ";
        $context["inTeam"] = 0;
        // line 103
        echo "            ";
        $this->env->loadTemplate("SportimimiuserBundle:Page:inviteToPlayPopUp.html.twig")->display($context);
        // line 104
        echo "            ";
        $this->env->loadTemplate("SportimimiuserBundle:Page:changeImageProfile.html.twig")->display($context);
        // line 105
        echo "            <div class=\"row\">
                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"timeline-cover\">
                        <div class=\"widget border-bottom\">
                            <div class=\"widget-body border-bottom\">
                                <div class=\"media\">
                                    <div class=\"pull-left innerAll\">
                                        ";
        // line 112
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "document", array(), "any", true, true)) {
            // line 113
            echo "
                                            ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 115
                echo "
                                                ";
                // line 116
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 117
                    echo "                                                    ";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 118
                    echo "                                                        ";
                }
                // line 119
                echo "
                                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 121
                echo "                                                                ";
                $context["url"] = "img_profile_default.jpg";
                // line 122
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                                                        ";
        }
        // line 124
        echo "
                                                                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_200"), "html", null, true);
        echo "\" class=\"img-circle\" >
                                                                            ";
        // line 126
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
            // line 127
            echo "                                                                                <br /> <br />
                                                                                
                                                                                <!-- change image button -->
                                                                                    <form action='";
            // line 130
            echo $this->env->getExtension('routing')->getPath("ImageProfile");
            echo "' method='post' enctype='multipart/form-data'>
                                                                                    <div class=\"fileupload fileupload-new margin-none\" data-provides=\"fileupload\">
                                                                                        
                                                                                           
                                                                                        <span class=\"btn btn-default btn-file\">
                                                                                            <span class=\"fileupload-new\">Thay đổi hình ảnh hồ sơ</span>
                                                                                            <span class=\"fileupload-exists\">Thay đổi</span>
                                                                                            <input id=\"imageProfile\" name=\"file\" type=\"file\" class=\"margin-none\" />
                                                                                         </span>
                                                                                        <span class=\"fileupload-preview\"></span>
                                                                                        <a href=\"#\" class=\"btn fileupload-exists\" data-dismiss=\"fileupload\">x</a>
                                                                                        <input class=\"btn fileupload-exists\" value=\"xác nhận\" type='submit'>
                                                                                    </div>
                                                                                    </form>
                                                                            ";
        }
        // line 144
        echo "  
                                                                        </div>
                                                                        <div class=\"media-body\">
                                                                            <h4><a href=\"\">";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "prenom"), "html", null, true);
        echo "</a>  <a href=\"\" class=\"text-muted\"><i class=\"fa fa-envelope\"></i></a>
                                                                            </h4>
                                                                            <div class=\"clearfix\"></div>
                                                                            <p>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "description"), "html", null, true);
        echo "</p>
                                                                            
                                                                                <a href=\"#modal-3\" data-toggle=\"modal\"  class=\"btn btn-info btn-sm\">
                                                                                    <i class=\"icon-turn-right\"></i> Mời chơi cùng
                                                                                </a>
                                                                            
                                                                            

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                ";
        // line 161
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
            // line 162
            echo "                                                                    <div class=\"\">
                                                                        <ul class=\"navigation\">
                                                                            <li>
                                                                                <a class=\"\" href=\"/\"><i class=\"fa fa-fw icon-road-sign\"></i>
                                                                                    <span>News</span>
                                                                                </a>
                                                                            </li>
                                                                            <li><a href=\"\"><i class=\"fa fa-fw icon-flip-camera\"></i><span> Photos</span></a>
                                                                            </li>
                                                                            <li><a href=\"\"><i class=\"fa fa-fw icon-group\"></i><span> ";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bạn"), "html", null, true);
            echo "</span></a>
                                                                            </li>
                                                                            <li><a href=\"";
            // line 173
            echo $this->env->getExtension('routing')->getPath("Message");
            echo "\"><i class=\"fa fa-fw fa-envelope\"></i><span> Messages</span></a>
                                                                            </li>
                                                                            <li class=\"pull-right active\"><a href=\"\"><i class=\"fa fa-fw fa-user\"></i><span> About</span></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class=\"clearfix\"></div>
                                                                    </div>
                                                                ";
        }
        // line 181
        echo "                                                            </div>
                                                        </div>
                                                        <div class=\"widget\">
                                                            <div class=\"innerAll\">
                                                                <div class=\"row border-top\">
                                                                    <div class=\"col-sm-6\">
                                                                        <h5 class=\"innerT\">Thể Thao</h5>
                                                                        <div class=\"widget bg-gray innerAll margin-none\" id=\"sports\">
                                                                            ";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "sports"));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            // line 190
            echo "                                                                                <span class=\"innerR innerB\">
                                                                                    <i class=\"box-generic innerAll ";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport")), "classIcons"), "html", null, true);
            echo " fa fa-4x\" 
                                                                                       data-placement=\"bottom\" data-selected=\"false\"></i>
                                                                                </span>
                                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                                                                            ";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
            // line 196
            echo "                                                                                <div>
                                                                                    <div id=\"addSports\" style=\"display:none\">
                                                                                        <table>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <input type=\"hidden\" class=\"form-control\" id=\"addSportsList\" style=\"width:150px\" name=\"add_sport\" />
                                                                                                </td>
                                                                                                <td>
                                                                                                    <button class=\"btn btn-circle btn-success\" onclick=\"addSport();\"><i class=\"fa icon-add-symbol\"></i></button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                    <button class=\"btn btn-success\" onclick=\"jQuery('#addSports').toggle();
                                                        jQuery(this).toggle()\"><i class=\"icon-add-symbol\"></i> Thêm thể thao</button>
                                                         <button class=\"btn btn-danger\" onclick=\"\"><i class=\"fa fa-trash-o\"></i> ";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Xóa thể thao"), "html", null, true);
            echo "</button>
                                                                                </div>

                                                                            ";
        }
        // line 215
        echo "                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-sm-6\">
                                                                        <h5 class=\"innerT\">";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bạn Bè"), "html", null, true);
        echo "</h5>
                                                                        <div class=\"widget bg-gray\">
                                                                            <div class=\"innerAll\">
                                                                                ";
        // line 221
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "friends", array(), "any", true, true)) {
            // line 222
            echo "                                                                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "friends"));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 223
                echo "                                                                                        ";
                if ($this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "document", array(), "any", true, true)) {
                    // line 224
                    echo "
                                                                                            ";
                    // line 225
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "document"));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 226
                        echo "
                                                                                                ";
                        // line 227
                        if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                            // line 228
                            echo "                                                                                                    ";
                            $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                            // line 229
                            echo "                                                                                                        ";
                        }
                        // line 230
                        echo "
                                                                                                            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 232
                        echo "                                                                                                                ";
                        $context["url"] = "img_profile_default.jpg";
                        // line 233
                        echo "                                                                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 234
                    echo "                                                                                                                        ";
                }
                // line 235
                echo "                                                                                                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "id"))), "html", null, true);
                echo "\">
                                                                                                                                <img src=\"";
                // line 236
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
                echo "\" alt=\"\" class=\"innerR innerB half\" />
                                                                                                                            </a>
                                                                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                                                                                                                                ";
        }
        echo "\t
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:detailProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 239,  425 => 236,  420 => 235,  411 => 233,  408 => 232,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 196,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 116,  191 => 115,  186 => 114,  118 => 38,  23 => 2,  65 => 15,  287 => 140,  267 => 132,  202 => 119,  175 => 95,  170 => 93,  104 => 59,  129 => 73,  198 => 98,  192 => 95,  126 => 43,  113 => 45,  84 => 37,  77 => 27,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 125,  185 => 77,  181 => 112,  172 => 105,  155 => 58,  153 => 57,  146 => 85,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 122,  218 => 111,  211 => 122,  152 => 72,  148 => 86,  53 => 12,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 90,  195 => 77,  190 => 79,  165 => 92,  160 => 101,  90 => 38,  81 => 28,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 191,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 223,  200 => 87,  188 => 78,  184 => 93,  180 => 81,  178 => 96,  174 => 90,  161 => 61,  137 => 53,  124 => 191,  110 => 186,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 230,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 211,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 127,  220 => 124,  214 => 87,  177 => 74,  169 => 104,  140 => 55,  132 => 52,  128 => 75,  107 => 60,  61 => 16,  273 => 133,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 98,  217 => 123,  208 => 121,  204 => 72,  179 => 69,  159 => 60,  143 => 54,  135 => 81,  119 => 46,  102 => 32,  71 => 41,  67 => 18,  63 => 20,  59 => 19,  93 => 34,  88 => 27,  78 => 35,  28 => 3,  87 => 38,  46 => 12,  44 => 9,  94 => 28,  89 => 32,  85 => 28,  75 => 32,  68 => 21,  56 => 13,  27 => 6,  25 => 5,  21 => 2,  201 => 92,  196 => 117,  183 => 113,  171 => 80,  166 => 103,  163 => 102,  158 => 67,  156 => 59,  151 => 98,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 14,  49 => 9,  31 => 3,  38 => 9,  26 => 3,  24 => 3,  19 => 1,  79 => 24,  72 => 25,  69 => 17,  47 => 10,  40 => 10,  37 => 6,  22 => 1,  246 => 244,  157 => 100,  145 => 55,  139 => 82,  131 => 53,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 52,  98 => 36,  96 => 25,  83 => 37,  74 => 18,  66 => 20,  55 => 15,  52 => 14,  50 => 17,  43 => 11,  41 => 8,  35 => 8,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 118,  193 => 90,  189 => 71,  187 => 99,  182 => 87,  176 => 84,  173 => 94,  168 => 64,  164 => 76,  162 => 91,  154 => 88,  149 => 93,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 44,  125 => 44,  122 => 43,  116 => 50,  112 => 37,  109 => 43,  106 => 36,  103 => 37,  99 => 37,  95 => 40,  92 => 29,  86 => 26,  82 => 45,  80 => 25,  73 => 19,  64 => 17,  60 => 12,  57 => 11,  54 => 18,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 6,  33 => 10,  30 => 7,);
    }
}
