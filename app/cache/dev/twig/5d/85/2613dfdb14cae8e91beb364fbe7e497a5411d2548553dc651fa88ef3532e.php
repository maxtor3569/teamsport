<?php

/* SportimimiuserBundle:Page:index.html.twig */
class __TwigTemplate_5d852613dfdb14cae8e91beb364fbe7e497a5411d2548553dc651fa88ef3532e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Trang Chủ"), "html", null, true);
    }

    // line 6
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 7
        echo "


";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "
    <script src=\"https://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.5/gmaps.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.jeditable/1.7.3/jquery.jeditable.js\"></script>
    ";
        // line 17
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 18
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/validator/assets/lib/jquery-validation/dist/jquery.validate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/form-validator-fast-register.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
            echo "\"></script>
        
    ";
        } else {
            // line 22
            echo "    
    <script>
        //DELETE Comment
\tfunction deleteComment(id) {
            var commentIdPass = id;

            \$.ajax({
                type: \"POST\",\t\t
                data :{ id_comment : commentIdPass },
                dataType: 'text',
                url: \"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("DeleteComment");
            echo "\",
                cache: false,
                success: function(data){
                        jQuery('#comment'+id).remove();

                }
            });   
\t
\t}
        function comment(id)
        {
            var contentPosted = \$('#message' + id).val();
            var idNews = \$('#message' + id).attr(\"data-reactid\");

            \$.ajax({
                type: \"POST\",
                data: {content: contentPosted, newsID: idNews},
                dataType: 'text',
                url: \"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("AddComment");
            echo "\",
                cache: false,
                success: function(data) {
                    \$('#message' + id).val('');
                    \$('#news'+ idNews +' .commentBlock').append(data);

                }
            });

        }
        // VIEW MORE NEWS
        var startVar = 5; // we start at the news 0 by default
        var temp;
        var newPlace = 0;
        function viewMore()
        {
            
            \$.ajax({
                type: \"POST\",
                data: {
                    start: startVar,
                },
                dataType: 'html',
                //url: \"ajax/loadNews.php\",
                url: Routing.generate('LoadMore', {start: startVar}),
                cache: false,
                success: function(data) {
                    //window.location.reload();
                    \$('.col-lg-9').append(data);
                    startVar = startVar + 5;
                    load = false;

                },
                progress: function(e) {
                        if(e.lengthComputable) {
                            var pct = (e.loaded / e.total) * 100;

                            \$('#prog')
                                .progressbar('option', 'value', pct)
                                .children('.ui-progressbar-value')
                                .html(pct.toPrecision(3) + '%')
                                .css('display', 'block');
                        } else {
                            console.warn('Content Length not reported!');
                        }
                }
            });

        }
        // POST STATUS
        function StatusPost()
        {
            var statusContent = jQuery('#statusText').val();
            var doSports = jQuery('#doSportsInput').val();
            var sport = jQuery('#sportPlay').val();
            var file_name = jQuery('#file-input').val();
            \$.ajax({
                type: \"POST\",
                data: {status: statusContent, doingSportPost: doSports, sportPlay: sport, file: file_name},
                dataType: 'text',
                url: \"";
            // line 110
            echo $this->env->getExtension('routing')->getPath("AddStatus");
            echo "\",
                cache: false,
                success: function(data) {
                    jQuery('.timeline-cover').after(data);
                }
            });
            jQuery('#statusText').val('')
        }
        // POST STATUS DOING SPORTS
        function StatusPostSports()
        {
            var statusContent = jQuery('#place_played').val();
            var doSports = jQuery('#doSportsInput').val(); // get the type of the post
            var file_name = jQuery('#file-input').val();
            var sport = jQuery('#sportPlay').val();
\t\t\tif (doSports == \"\" || statusContent == \"\")
\t\t\t{
\t\t\t\tjQuery('#errors').html('Địa điểm và môn thể thao chơi là bắt buộc');
\t\t\t\treturn false;
\t\t\t\t
\t\t\t}
            \t
            \$.ajax({
                type: \"POST\",
                data: {status: statusContent, doingSportPost: doSports, sportPlay: sport, file: file_name,newPlace : newPlace},
                dataType: 'text',
                url: \"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("AddStatus");
            echo "\",
                cache: false,
                success: function(data) {
                \tnewPlace = 0;
                    jQuery('.timeline-cover').after(data);
                }
            });
            jQuery('#errors').html('');
        }
        function DoSport()
        {
        \tif(jQuery('#doSportsInput').val() == 0)
        \t{
\t            // set news ->Doing sports
\t            jQuery('#doSportsInput').val(1);
\t            jQuery('#li-sport').attr('class', 'active');
\t            jQuery('#li-nosport').attr('class', '');
\t            jQuery('#noplay').hide();
\t            jQuery('#play').show();
            }
            else
            {
              \t// set news ->Doing sports
\t            jQuery('#doSportsInput').val(0);
\t            jQuery('#li-sport').attr('class', '');
\t            jQuery('#li-nosport').attr('class', 'active');
\t            jQuery('#noplay').show();
\t            jQuery('#play').hide();        
            
            }
        }
        
        //SCROLL BOTTOM
        //comment delete
            \$(document).on('click', '.deleteCommentAction', function(){ 
                var id = jQuery(this).attr('data-reactid');
                deleteComment(id); 
                
                return false; 
            });

        \$(document).ready(function() {
            \$(\"#sportPlay\").select2({
                ajax: {
                    dataType: \"json\",
                    maximumSelectionSize: 1,
                    url: \"";
            // line 182
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
              //tag select2
\t\t\t
\t\t\t  \$(\"#place_played\").select2({
\t\t\t      tags: [],
\t\t\t      maximumSelectionSize: 1,
\t\t\t      ajax: {
\t\t\t          dataType: \"json\",
\t\t\t          maximumSelectionSize: 1,
\t\t\t          url: \"";
            // line 203
            echo $this->env->getExtension('routing')->getPath("PlaceListJson");
            echo "\",
\t\t\t          results: function (data) {
\t\t\t              return {
\t\t\t                  results: data
\t\t\t              };
\t\t\t          }
\t\t\t      },
\t\t\t      formatResult: function (term) {
\t\t\t          return \"<div class='select2-user-result'>\" + term.placeName + \" <i>\" + term.address + \"</i></div>\";
\t\t\t      },
\t\t\t      formatSelection: function (data) {
\t\t\t          return data.placeName;
\t\t\t      },
\t\t\t      id: function (data) {
\t\t\t          return data.address;
\t\t\t      },
\t\t\t      createSearchChoice: function (term, data) {
\t\t\t      \t
\t\t\t          if (\$(data).filter(function () {
\t\t\t          \t
\t\t\t              return this.placeName.localeCompare(term) === 0;
\t\t\t          }).length === 0) {
\t\t\t              return {
\t\t\t                  placeName: term,
\t\t\t                  address: term,
\t\t\t                  custom: true
\t\t\t              };
\t\t\t          }
\t\t\t
\t\t\t      }
\t\t\t  }).on(\"change\", function (evt) {
\t\t\t      if (evt.added) {
\t\t\t          if (evt.added.custom) {
\t\t\t              newPlace = 1;
\t\t\t          }
\t\t\t      }
\t\t\t  });
 \t\t\tvar load = false; // aucun chargement de commentaire n'est en cours

            \$(window).scroll(function()
            {
                // cette condition vaut true lorsque le visiteur atteint le bas de page
                // si c'est un iDevice, l'évènement est déclenché 150px avant le bas de page
                if ((\$(window).scrollTop() + \$(window).height()) == \$(document).height()
                        )
                {

                    viewMore();// on effectue nos traitements
                }
            });
        });

         //PARTICIPATE
\tfunction participate(idPass)
\t{
\t\t\$('#participant'+idPass).append('";
            // line 258
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prenom", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
                echo " ";
            }
            echo "');
\t\t\$.ajax({
\t\t\ttype: \"POST\",\t\t
\t\t\tdata :{ id: idPass },
\t\t\tdataType: 'text',
\t\t\turl: \"";
            // line 263
            echo $this->env->getExtension('routing')->getPath("Participate");
            echo "\",
\t\t\tcache: false,
\t\t\tsuccess: function(data){
\t\t\t\twindow.location.reload();
\t\t\t}
\t\t});    
\t}
\t// NO PARTICIPATE
\tfunction noparticipate(idPass)
\t{
\t\t\$.ajax({
\t\t\ttype: \"POST\",\t\t\t
\t\t\tdata :{ id: idPass },
\t\t\tdataType: 'text',
\t\t\turl: \"";
            // line 277
            echo $this->env->getExtension('routing')->getPath("RemoveParticipate");
            echo "\",
\t\t\tcache: false,
\t\t\tsuccess: function(data){
\t\t\t\twindow.location.reload();
\t\t\t}
\t\t});    
\t}
\t
        if (typeof \$.fn.bdatepicker == 'undefined')
\t\$.fn.bdatepicker = \$.fn.datepicker.noConflict();
        \$(function()
        {
           // today button
           \$('#timePlay').bdatepicker({
               format: \"dd MM yyyy\",
               startDate: \"2013-02-14\",
               todayBtn: true
           });

        });
     function deleteNews(idPass)
     {
     
     \t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\tdataType: 'text',
\t\t\turl: Routing.generate('DeleteNews', { id: idPass }),\t\t\t
\t\t\tcache: false,
\t\t\tsuccess: function(data){
\t\t\t\tjQuery('#news'+idPass).remove();
\t\t\t}
\t\t});    

     }     
    </script>
    ";
        }
    }

    // line 316
    public function block_body($context, array $blocks = array())
    {
        // line 317
        echo "    ";
        $context["max"] = 0;
        // line 318
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "\t
            <div class=\"row\" style=\"margin-top: 70px;\">

                <div class=\"col-lg-9 col-md-8\">
                    <div class=\"timeline-cover\">
                        <div class=\"cover\">
                            <div class=\"top\">
                                <input id=\"doSportsInput\" type=\"hidden\" value = 0 />
                            </div>
                            <ul class=\"list-unstyled\">
                                <li id=\"li-nosport\" class=\"active\" onclick=\"DoSport();\" style=\"cursor:pointer;color: white;font-weight: bold;\"><i class=\"fa fa-fw fa-clock-o\"></i> <span>Tìm người chơi</span>
                                </li>
                                <li id=\"li-sport\" class=\"\" onclick=\"DoSport();\" style=\"cursor:pointer;color: white;font-weight: bold;\"><i class=\"fa fa-fw icon-location-2\"></i> <span>Đang chơi</span>
                                </li>
                                <li><a href=\"";
            // line 332
            echo $this->env->getExtension('routing')->getPath("DetailProfile");
            echo "\"><i class=\"fa fa-fw fa-user\"></i> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hồ Sơ Của Tôi"), "html", null, true);
            echo "</span></a>
                                </li>
                                <li><a href=\"";
            // line 334
            echo $this->env->getExtension('routing')->getPath("ListTeam");
            echo "\"><i class=\"fa fa-fw icon-group\"></i><span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Đội"), "html", null, true);
            echo " </span><!--<small>(19)</small>--></a>
                                </li>
                                <li><a href=\"";
            // line 336
            echo $this->env->getExtension('routing')->getPath("Message");
            echo "\"><i class=\"fa fa-fw icon-envelope-fill-1\"></i> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
            echo "</span> <!--<small>(2 new)</small>--></a>
                                </li>
                            </ul>
                        </div>
                        <div id=\"noplay\" class=\"widget\">
                            <div class=\"widget-body padding-none margin-none\">
                                <div class=\"innerAll\">
                                    <div class=\"input-group\">
                                        <textarea name=\"statusText\" id=\"statusText\" type=\"text\" class=\"form-control rounded-none border-none\" placeholder=\"Bạn tìm người chơi ha?\"></textarea>
                                        <div class=\"input-group-btn btn-group dropup\">
                                            <button class=\"btn btn-info rounded-none\" tabindex=\"-1\" onclick=\"StatusPost();\">Share</button>
                                        </div>  
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id=\"play\" class=\"widget\" style=\"display:none\">
                            <div class=\"widget-body padding-none margin-none\">
                                <div class=\"innerAll\">
                                    <div class=\"input-group\">
                                        Bạn đang chơi thể thao gì? 
                                        <input type=\"hidden\" id=\"sportPlay\" style=\"width: 30%;\" value=\"\" /> ở đâu ?
                                        <input type=\"hidden\" id=\"place_played\" style=\"width: 30%;\" value=\"\" />
                                        <div class=\"input-group-btn btn-group dropup\">
                                            <button class=\"btn btn-info rounded-none\" tabindex=\"-1\" onclick=\"StatusPostSports();\">Share</button>
                                        </div>  
                                    </div>
\t\t\t\t\t\t\t\t\t<div id=\"errors\" style=\"color:red\"></div>
                                </div>
                            </div>
                        </div>       
                    </div>

        ";
            // line 370
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SportimimiuserBundle:Page:loadMore", array("max" => 20)));
            echo "
   
                </div>
                ";
            // line 373
            $this->env->loadTemplate("SportimimiuserBundle:Page:sidebar_right.html.twig")->display($context);
            // line 374
            echo "            ";
        }
        // line 375
        echo "

    ";
        // line 377
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            echo "\t
        ";
            // line 378
            $this->env->loadTemplate("SportimimiuserBundle:Page:homepageContent.html.twig")->display($context);
            // line 379
            echo "    ";
        } else {
            // line 380
            echo "

    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "\t
    \t</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 384,  497 => 380,  492 => 378,  488 => 377,  484 => 375,  479 => 373,  473 => 370,  97 => 30,  212 => 95,  134 => 75,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 236,  420 => 332,  411 => 233,  408 => 232,  399 => 317,  396 => 316,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  338 => 263,  335 => 195,  318 => 189,  297 => 173,  292 => 171,  281 => 162,  194 => 136,  191 => 115,  186 => 114,  118 => 36,  23 => 2,  65 => 18,  287 => 140,  267 => 203,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 53,  113 => 34,  84 => 27,  77 => 32,  114 => 62,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 119,  291 => 117,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 98,  185 => 77,  181 => 112,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 147,  248 => 98,  245 => 97,  237 => 104,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 14,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 38,  81 => 32,  100 => 31,  70 => 22,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 383,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 258,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 93,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 38,  110 => 61,  76 => 38,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 318,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 109,  355 => 277,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 111,  214 => 87,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 41,  273 => 133,  269 => 111,  254 => 100,  243 => 182,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 123,  208 => 121,  204 => 72,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 50,  71 => 24,  67 => 15,  63 => 19,  59 => 15,  93 => 29,  88 => 31,  78 => 36,  28 => 8,  87 => 23,  46 => 9,  44 => 11,  94 => 52,  89 => 31,  85 => 29,  75 => 35,  68 => 26,  56 => 17,  27 => 5,  25 => 5,  21 => 1,  201 => 101,  196 => 117,  183 => 63,  171 => 77,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 37,  117 => 47,  105 => 32,  91 => 25,  62 => 16,  49 => 10,  31 => 4,  38 => 6,  26 => 3,  24 => 4,  19 => 1,  79 => 26,  72 => 18,  69 => 22,  47 => 12,  40 => 7,  37 => 6,  22 => 2,  246 => 244,  157 => 69,  145 => 81,  139 => 42,  131 => 58,  123 => 48,  120 => 64,  115 => 43,  111 => 44,  108 => 33,  101 => 43,  98 => 36,  96 => 27,  83 => 60,  74 => 16,  66 => 33,  55 => 14,  52 => 14,  50 => 13,  43 => 8,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 94,  203 => 84,  199 => 118,  193 => 97,  189 => 71,  187 => 93,  182 => 89,  176 => 75,  173 => 94,  168 => 77,  164 => 53,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 43,  141 => 48,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 35,  112 => 35,  109 => 34,  106 => 77,  103 => 50,  99 => 73,  95 => 48,  92 => 41,  86 => 49,  82 => 19,  80 => 37,  73 => 35,  64 => 14,  60 => 13,  57 => 16,  54 => 16,  51 => 28,  48 => 10,  45 => 8,  42 => 6,  39 => 5,  36 => 3,  33 => 10,  30 => 1,);
    }
}
