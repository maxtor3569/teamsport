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
        return array (  505 => 384,  502 => 383,  497 => 380,  494 => 379,  492 => 378,  488 => 377,  484 => 375,  481 => 374,  479 => 373,  473 => 370,  434 => 336,  427 => 334,  420 => 332,  402 => 318,  399 => 317,  396 => 316,  355 => 277,  338 => 263,  325 => 258,  267 => 203,  243 => 182,  194 => 136,  165 => 110,  102 => 50,  81 => 32,  69 => 22,  63 => 19,  58 => 18,  56 => 17,  50 => 13,  47 => 12,  40 => 7,  37 => 6,  31 => 4,);
    }
}
