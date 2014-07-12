<?php

/* SportimimiuserBundle:News:dynamicNews.html.twig */
class __TwigTemplate_4623bbc8304283e4369755dbc5f83d79778407a16fb389242cafc1acdd6e158c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["pager"] = 5;
        // line 2
        $context["url"] = "";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 4
            echo "<!-- Widget -->
<div id=\"news";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
            echo "\" class=\"widget\">
   <!-- Info -->
   <div class=\"bg-primary\">
      <div class=\"media\">
         ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                // line 10
                echo "         ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 11
                    echo "         ";
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 12
                        echo "         ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 13
                        echo "         ";
                    }
                    // line 14
                    echo "         ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 15
                    echo "         ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 16
                    echo "         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "         ";
            }
            // line 18
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "id"))), "html", null, true);
            echo "\" class=\"pull-left\">
         <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
            echo "\" width=\"50\" class=\"media-object\">
         </a>
         <div class=\"media-body innerTB half\">
            ";
            // line 22
            if (($this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                // line 23
                echo "            <span class=\"pull-right innerT innerR text-muted\">
            <i class=\"icon-circle-delete fa fa-2x\" onclick=\"deleteNews(";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
                echo ")\" style=\"cursor:pointer\"></i>
            </span>
            ";
            }
            // line 27
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "id"))), "html", null, true);
            echo "\" class=\"text-white strong display-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "prenom"), "html", null, true);
            echo "</a>
            <span><a href=\"\" class=\"text-white strong\">bài</a> lúc
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "dateCreated"), "html", null, true);
            echo " <i class=\"icon-time-clock\"></i>
            </span>
         </div>
      </div>
   </div>
   <!-- Content -->
   ";
            // line 35
            if (($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "doingSports") == 1)) {
                // line 36
                echo "   <div class=\"innerAll\">
      <div class=\"row\">
         <div class=\"col-md-6\" style=\"width:100%!important\">
            <script>
               // ADD MARKERS TO THE MAP
               jQuery(document).ready(function() {
                   map = new GMaps({
                       div: '#google";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
                echo "',
                       lat: 10.58,
                       lng: 106.40
                   });
                   GMaps.geocode({
                       address: '";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "content"), "html", null, true);
                echo "',
                       callback: function(results, status) {
                           if (status == 'OK') {
                               var latlng = results[0].geometry.location;
                               map.setCenter(latlng.lat(), latlng.lng());
                               map.setZoom(11);
                               map.addMarker({
                                   lat: latlng.lat(),
                                   lng: latlng.lng(),
                                   infoWindow: {
               //<div id=\"mapParticipant'+id+'\" style=\"height:100px;width:150px\" >'+button+'                                     <br />
                                       content: '";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "profile"), "nom"), "html", null, true);
                echo " <br />";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "content"), "html", null, true);
                echo "</div>'
                                   }
                               });
                           }
                       }
                   });
                   // This add participant into the div for the map
               
               });
               
               
            </script>
            <div class=\"map_canvas\" id=\"google";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
                echo "\" style=\"height: 180px\"></div>
         </div>
         <div class=\"col-md-6\" style=\"width:100%!important\">
            <div class=\"strong text-inverse innerB half\">Đang chơi </div>
            <div class=\"media margin-none\">
               <a href=\"\" class=\"pull-left \">
               <img src=\"\" data-src=\"";
                // line 77
                if ($this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "sport", array(), "any", false, true), "classIcons", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "sport"), "classIcons"), "html", null, true);
                    echo " ";
                }
                echo "\" class=\"media-object\">
               </a>
               <div class=\"media-body\">
                  <a href=\"#\" class=\"strong\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "content"), "html", null, true);
                echo "</a>
                  <!-- <p class=\"margin-none text-small\">
                     <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                     <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                     <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                     <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                     <i class=\"fa fa-star\" style=\"color:#ccc;\"></i>
                     </p>-->
                  <small class=\"text-muted \">";
                // line 88
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "participants")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("người chơi"), "html", null, true);
                echo "</small>
               </div>
               <p class=\"margin-none innerTB half\">
                  ";
                // line 91
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "participants"));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 92
                    echo "                  ";
                    if ($this->getAttribute((isset($context["participant"]) ? $context["participant"] : null), "document", array(), "any", true, true)) {
                        // line 93
                        echo "                  ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "document"));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                            // line 94
                            echo "                  ";
                            if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                                // line 95
                                echo "                  ";
                                $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                                // line 96
                                echo "                  ";
                            }
                            // line 97
                            echo "                  ";
                            $context['_iterated'] = true;
                        }
                        if (!$context['_iterated']) {
                            // line 98
                            echo "                  ";
                            $context["url"] = "img_profile_default.jpg";
                            // line 99
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 100
                        echo "                  ";
                    }
                    // line 101
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "id"))), "html", null, true);
                    echo "\">
                  <img src=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
                    echo "\" class=\"pull-left media-object\" style=\"cursor:pointer;\"/>
                  </a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "               </p>
               ";
                // line 106
                if (!twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "participants"))) {
                    // line 107
                    echo "               <a href=\"#\" class=\"btn btn-xs btn-inverse\" onclick=\"participate(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
                    echo ");\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tham gia"), "html", null, true);
                    echo "</a>
               ";
                }
                // line 109
                echo "            </div>
            ";
                // line 110
                if (twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "participants"))) {
                    // line 111
                    echo "            <br />
            <a href=\"#\" class=\"btn btn-xs btn-inverse\" onclick=\"noparticipate(";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
                    echo ")\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tôi không còn tham gia"), "html", null, true);
                    echo "</a>  
            ";
                }
                // line 114
                echo "         </div>
      </div>
   </div>
   ";
            } else {
                // line 118
                echo "   <p style=\"padding:15px;font-weight:bold\">
      ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "content"), "html", null, true);
                echo "
   </p>
   ";
            }
            // line 122
            echo "   <!-- //Content -->
   <a href=\"#comments-collapse\" class=\"innerAll border-top display-block \" data-toggle=\"collapse\"><i class=\"innerLR fa fa-bars\"></i> Bình luận
   <span class=\"text-muted\">";
            // line 124
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "comments")), "html", null, true);
            echo "+ comments</span>
   </a>
   <div class=\"commentBlock\">
      ";
            // line 127
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "comments")) != 0)) {
                // line 128
                echo "      <!--  Comment -->          
      ";
                // line 129
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "comments"));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 130
                    echo "      <div id =\"comment";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                    echo "\"class=\"media border-top margin-none bg-gray\" >
         ";
                    // line 131
                    if ($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                        // line 132
                        echo "         ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "document"));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                            // line 133
                            echo "         ";
                            if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                                // line 134
                                echo "         ";
                                $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                                // line 135
                                echo "         ";
                            }
                            // line 136
                            echo "         ";
                            $context['_iterated'] = true;
                        }
                        if (!$context['_iterated']) {
                            // line 137
                            echo "         ";
                            $context["url"] = "img_profile_default.jpg";
                            // line 138
                            echo "         ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "         ";
                    }
                    // line 140
                    echo "         <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id"))), "html", null, true);
                    echo "\" class=\"pull-left innerAll\">
         <img src=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
                    echo "\"
            width=\"50\" class=\"media-object\">
         </a>
         <div class=\"media-body innerTB\">
            ";
                    // line 145
                    if (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                        // line 146
                        echo "            <a href=\"#\" data-reactid=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                        echo "\" class=\"pull-right innerT innerR text-muted deleteCommentAction\">
            <i class=\"icon-circle-delete fa fa-2x \"></i>
            </a>
            ";
                    }
                    // line 149
                    echo "      
            <a href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id"))), "html", null, true);
                    echo "\" class=\"strong text-inverse\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "nom"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "prenom"), "html", null, true);
                    echo "</a> 
            <small class=\"text-muted \">đã viết vào ngày </small>
            <div>";
                    // line 152
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
                    echo "</div>
         </div>
      </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "      <!--  END Comment -->
      ";
            }
            // line 158
            echo "   </div>
   <div class=\"input-group comment\">
      <input id=\"message";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
            echo "\" data-reactid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
            echo "\"type=\"text\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bình luận..."), "html", null, true);
            echo "\">
      <div class=\"input-group-btn\">
         <button type=\"button\" class=\"btn btn-primary\" href=\"#\" onclick=\"comment(";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "id"), "html", null, true);
            echo ")\"><i class=\"fa fa-comment\"></i>
         </button>
      </div>
   </div>
</div>
<!-- //End Widget -->
";
            // line 168
            $context["pager"] = ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:News:dynamicNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 138,  343 => 137,  332 => 134,  329 => 133,  323 => 132,  321 => 131,  316 => 130,  307 => 127,  275 => 112,  272 => 111,  270 => 110,  231 => 99,  228 => 98,  505 => 384,  497 => 380,  492 => 378,  488 => 377,  484 => 375,  479 => 373,  473 => 370,  97 => 30,  212 => 95,  134 => 75,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 168,  420 => 332,  411 => 233,  408 => 232,  399 => 156,  396 => 316,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 150,  375 => 222,  373 => 221,  367 => 145,  338 => 136,  335 => 135,  318 => 189,  297 => 122,  292 => 171,  281 => 162,  194 => 136,  191 => 115,  186 => 114,  118 => 36,  23 => 3,  65 => 23,  287 => 140,  267 => 109,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 57,  198 => 89,  192 => 95,  126 => 53,  113 => 34,  84 => 23,  77 => 32,  114 => 36,  299 => 274,  293 => 273,  324 => 126,  308 => 181,  304 => 120,  301 => 124,  291 => 119,  279 => 161,  276 => 134,  271 => 112,  265 => 150,  250 => 126,  223 => 97,  185 => 77,  181 => 112,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 106,  248 => 98,  245 => 102,  237 => 100,  218 => 111,  211 => 93,  152 => 64,  148 => 86,  53 => 20,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 38,  81 => 32,  100 => 31,  70 => 22,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 383,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 146,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 258,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 118,  282 => 114,  259 => 107,  255 => 128,  251 => 246,  249 => 110,  239 => 123,  210 => 108,  205 => 92,  200 => 87,  188 => 82,  184 => 77,  180 => 81,  178 => 76,  174 => 90,  161 => 70,  137 => 59,  124 => 38,  110 => 61,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 132,  407 => 160,  402 => 318,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 215,  360 => 141,  355 => 140,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 129,  309 => 128,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 131,  258 => 129,  252 => 144,  247 => 125,  241 => 95,  229 => 101,  220 => 96,  214 => 94,  177 => 87,  169 => 104,  140 => 79,  132 => 52,  128 => 75,  107 => 52,  61 => 22,  273 => 133,  269 => 111,  254 => 105,  243 => 182,  240 => 101,  238 => 94,  235 => 93,  230 => 82,  227 => 126,  224 => 231,  221 => 87,  219 => 97,  217 => 95,  208 => 93,  204 => 72,  179 => 100,  159 => 60,  143 => 60,  135 => 63,  119 => 46,  102 => 50,  71 => 18,  67 => 15,  63 => 19,  59 => 15,  93 => 27,  88 => 31,  78 => 36,  28 => 8,  87 => 24,  46 => 9,  44 => 11,  94 => 52,  89 => 31,  85 => 29,  75 => 35,  68 => 17,  56 => 17,  27 => 4,  25 => 5,  21 => 2,  201 => 91,  196 => 117,  183 => 63,  171 => 77,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 77,  136 => 57,  121 => 37,  117 => 47,  105 => 32,  91 => 25,  62 => 16,  49 => 10,  31 => 4,  38 => 7,  26 => 3,  24 => 4,  19 => 1,  79 => 26,  72 => 18,  69 => 24,  47 => 12,  40 => 7,  37 => 9,  22 => 2,  246 => 244,  157 => 69,  145 => 59,  139 => 42,  131 => 48,  123 => 43,  120 => 64,  115 => 43,  111 => 44,  108 => 33,  101 => 43,  98 => 36,  96 => 27,  83 => 60,  74 => 16,  66 => 33,  55 => 14,  52 => 14,  50 => 13,  43 => 8,  41 => 7,  35 => 6,  32 => 5,  29 => 4,  209 => 94,  203 => 84,  199 => 118,  193 => 88,  189 => 71,  187 => 93,  182 => 80,  176 => 75,  173 => 77,  168 => 77,  164 => 71,  162 => 68,  154 => 73,  149 => 71,  147 => 82,  144 => 43,  141 => 48,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 35,  112 => 35,  109 => 34,  106 => 77,  103 => 29,  99 => 73,  95 => 48,  92 => 41,  86 => 49,  82 => 22,  80 => 37,  73 => 25,  64 => 14,  60 => 13,  57 => 21,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 6,  39 => 10,  36 => 3,  33 => 10,  30 => 5,);
    }
}
