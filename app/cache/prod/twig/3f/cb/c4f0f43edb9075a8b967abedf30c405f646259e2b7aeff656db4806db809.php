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
        return array (  434 => 239,  425 => 236,  420 => 235,  417 => 234,  411 => 233,  408 => 232,  402 => 230,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  362 => 215,  355 => 211,  338 => 196,  335 => 195,  325 => 191,  322 => 190,  318 => 189,  308 => 181,  297 => 173,  292 => 171,  281 => 162,  279 => 161,  265 => 150,  257 => 147,  252 => 144,  234 => 130,  229 => 127,  227 => 126,  223 => 125,  220 => 124,  217 => 123,  211 => 122,  208 => 121,  202 => 119,  199 => 118,  196 => 117,  194 => 116,  191 => 115,  186 => 114,  183 => 113,  181 => 112,  172 => 105,  169 => 104,  166 => 103,  163 => 102,  160 => 101,  157 => 100,  151 => 98,  101 => 52,  83 => 37,  75 => 32,  59 => 19,  45 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
