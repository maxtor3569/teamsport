<?php

/* SportimimiuserBundle:News:renderOneNews.html.twig */
class __TwigTemplate_a4ca35a02a59ace3b93faf716e3528d7d7b72b0eb4d85cd2ec932987e7bde7d1 extends Twig_Template
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
        echo "
";
        // line 2
        $context["url"] = "";
        // line 3
        echo "
    <!-- Widget -->
    <div id=\"news";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
        echo "\" class=\"widget\">
        <!-- Info -->
        <div class=\"bg-primary\">
            <div class=\"media\">
                ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
            // line 10
            echo "
                    ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 12
                echo "
                        ";
                // line 13
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 14
                    echo "                            ";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 15
                    echo "                        ";
                }
                // line 16
                echo "
                         ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 18
                echo "                            ";
                $context["url"] = "img_profile_default.jpg";
                // line 19
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                ";
        }
        // line 21
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "id"))), "html", null, true);
        echo "\" class=\"pull-left\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
        echo "\" width=\"50\" class=\"media-object\">
                </a>
                <div class=\"media-body innerTB half\">
                    ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
            // line 26
            echo "                        <span class=\"pull-right innerT innerR text-muted\">
                            <i class=\"icon-circle-delete fa fa-2x\" onclick=\"deleteNews(";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
            echo ")\" style=\"cursor:pointer\"></i>
                        </span>
                    ";
        }
        // line 30
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "id"))), "html", null, true);
        echo "\" class=\"text-white strong display-block\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "prenom"), "html", null, true);
        echo "</a>
                    <span><a href=\"\" class=\"text-white strong\">bài</a> lúc
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "dateCreated"), "html", null, true);
        echo " <i class=\"icon-time-clock\"></i>
                    </span>
                </div>
            </div>
        </div>
        <!-- Content -->
        ";
        // line 38
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "doingSports") == 1)) {
            // line 39
            echo "            <div class=\"innerAll\">
                <div class=\"row\">
                    <div class=\"col-md-6\" style=\"width:100%!important\">
                        <script>
                            // ADD MARKERS TO THE MAP
                            jQuery(document).ready(function() {
                                map = new GMaps({
                                    div: '#google";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
            echo "',
                                    lat: 10.58,
                                    lng: 106.40
                                });
                                GMaps.geocode({
                                    address: '";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "content"), "html", null, true);
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
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "profile"), "nom"), "html", null, true);
            echo " <br />";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "content"), "html", null, true);
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
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
            echo "\" style=\"height: 180px\"></div>
                    </div>
                        <div class=\"col-md-6\" style=\"width:100%!important\">
                            <div class=\"strong text-inverse innerB half\">Đang chơi </div>
                            <div class=\"media margin-none\">
                                <a href=\"\" class=\"pull-left \">
                                    <img src=\"\" data-src=\"";
            // line 80
            if ($this->getAttribute($this->getAttribute((isset($context["line"]) ? $context["line"] : null), "sport", array(), "any", false, true), "classIcons", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "sport"), "classIcons"), "html", null, true);
                echo " ";
            }
            echo "\" class=\"media-object\">
                                </a>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"strong\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "content"), "html", null, true);
            echo "</a>
                                    <!-- <p class=\"margin-none text-small\">
                                        <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                                        <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                                        <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                                        <i class=\"fa fa-star\" style=\"color:#EB9618;\"></i>
                                        <i class=\"fa fa-star\" style=\"color:#ccc;\"></i>
                                    </p>-->
                                    <small class=\"text-muted \">";
            // line 91
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "participants")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("người chơi"), "html", null, true);
            echo "</small>
                                </div>
                                <p class=\"margin-none innerTB half\">
                                    ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "participants"));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 95
                echo "                                        ";
                if ($this->getAttribute((isset($context["participant"]) ? $context["participant"] : null), "document", array(), "any", true, true)) {
                    // line 96
                    echo "
                                            ";
                    // line 97
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "document"));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 98
                        echo "
                                                ";
                        // line 99
                        if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                            // line 100
                            echo "                                                    ";
                            $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                            // line 101
                            echo "                                                ";
                        }
                        // line 102
                        echo "
                                                ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 104
                        echo "                                                    ";
                        $context["url"] = "img_profile_default.jpg";
                        // line 105
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                                        ";
                }
                // line 107
                echo "
                                            <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "id"))), "html", null, true);
                echo "\">
                                                <img src=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
                echo "\" class=\"pull-left media-object\" style=\"cursor:pointer;\"/>
                                            </a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                            </p>
                                            ";
            // line 113
            if (!twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "participants"))) {
                // line 114
                echo "                                                <a href=\"#\" class=\"btn btn-xs btn-inverse\" onclick=\"participate(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
                echo ");\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tham gia"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 116
            echo "                                        
                                        </div>
                                            ";
            // line 118
            if (twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "participants"))) {
                // line 119
                echo "                                            <br />
                                             <a href=\"#\" class=\"btn btn-xs btn-inverse\" onclick=\"noparticipate(";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
                echo ")\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tôi không còn tham gia"), "html", null, true);
                echo "</a>  
                                            ";
            }
            // line 122
            echo "                                    </div>
                </div>
            </div>
        ";
        } else {
            // line 126
            echo "            <p>
                ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "content"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 130
        echo "        <!-- //Content -->
        <a href=\"#comments-collapse\" class=\"innerAll border-top display-block \" data-toggle=\"collapse\"><i class=\"innerLR fa fa-bars\"></i> View all
            comments
            <span class=\"text-muted\">";
        // line 133
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "comments")), "html", null, true);
        echo "+ comments</span>
        </a>
        <div class=\"commentBlock\">
        ";
        // line 136
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "comments")) != 0)) {
            // line 137
            echo "            <!--  Comment -->          
            ";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "comments"));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 139
                echo "                <div id =\"comment";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\"class=\"media border-top margin-none bg-gray\" >
                    ";
                // line 140
                if ($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                    // line 141
                    echo "
                        ";
                    // line 142
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "document"));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 143
                        echo "
                            ";
                        // line 144
                        if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                            // line 145
                            echo "                                ";
                            $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                            // line 146
                            echo "                            ";
                        }
                        // line 147
                        echo "                            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 148
                        echo "                                ";
                        $context["url"] = "img_profile_default.jpg";
                        // line 149
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                    ";
                }
                // line 151
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id"))), "html", null, true);
                echo "\" class=\"pull-left innerAll\">
                                                            <img src=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
                echo "\"
                                                                 width=\"50\" class=\"media-object\">
                                                        </a>
                                                        <div class=\"media-body innerTB\">
                                                            ";
                // line 156
                if (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                    // line 157
                    echo "                                                                <a href=\"#\" data-reactid=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                    echo "\" class=\"pull-right innerT innerR text-muted deleteCommentAction\">
                                                                    <i class=\"icon-circle-delete fa fa-2x \"></i>
                                                                </a>
                                                            ";
                }
                // line 160
                echo "      
                                                            <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id"))), "html", null, true);
                echo "\" class=\"strong text-inverse\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "prenom"), "html", null, true);
                echo "</a> 
                                                            <small class=\"text-muted \">đã viết vào ngày </small>
                                                            <div>";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
                echo "</div>
                                                        </div>
                                                    </div>
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "            
             <!--  END Comment -->
        ";
        }
        // line 170
        echo "         </div>
        <div class=\"input-group comment\">
            <input id=\"message";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
        echo "\" data-reactid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
        echo "\"type=\"text\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bình luận..."), "html", null, true);
        echo "\">
            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-primary\" href=\"#\" onclick=\"comment(";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"), "html", null, true);
        echo ")\"><i class=\"fa fa-comment\"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- //End Widget -->


";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:News:renderOneNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 174,  424 => 172,  420 => 170,  415 => 167,  405 => 163,  396 => 161,  393 => 160,  385 => 157,  383 => 156,  376 => 152,  371 => 151,  368 => 150,  362 => 149,  359 => 148,  354 => 147,  351 => 146,  348 => 145,  346 => 144,  343 => 143,  338 => 142,  335 => 141,  333 => 140,  328 => 139,  324 => 138,  321 => 137,  319 => 136,  313 => 133,  308 => 130,  302 => 127,  299 => 126,  293 => 122,  286 => 120,  283 => 119,  281 => 118,  277 => 116,  269 => 114,  267 => 113,  264 => 112,  255 => 109,  251 => 108,  248 => 107,  245 => 106,  239 => 105,  236 => 104,  230 => 102,  227 => 101,  224 => 100,  222 => 99,  219 => 98,  214 => 97,  211 => 96,  208 => 95,  204 => 94,  196 => 91,  185 => 83,  176 => 80,  167 => 74,  148 => 62,  134 => 51,  126 => 46,  117 => 39,  115 => 38,  106 => 32,  96 => 30,  90 => 27,  87 => 26,  85 => 25,  79 => 22,  74 => 21,  71 => 20,  65 => 19,  62 => 18,  56 => 16,  53 => 15,  50 => 14,  48 => 13,  45 => 12,  40 => 11,  37 => 10,  35 => 9,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
