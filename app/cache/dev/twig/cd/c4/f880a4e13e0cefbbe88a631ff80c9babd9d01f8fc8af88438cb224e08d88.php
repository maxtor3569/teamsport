<?php

/* SportimimiuserBundle:Team:detailTeam-tab1.html.twig */
class __TwigTemplate_cdc4f880a4e13e0cefbbe88a631ff80c9babd9d01f8fc8af88438cb224e08d88 extends Twig_Template
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
        echo "<!-- Tab content -->
<div class=\"tab-pane active\" id=\"tab1-3\">
\t<div class=\"row\">
\t\t<h4>Thành viên</h4>
        <div class=\"col-lg-4\">
\t\t\t ";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id") == 1)) {
            // line 7
            echo "\t\t\t\t<div id=\"bloc_terrain\">
\t\t\t\t\t<div id=\"terrain\">
\t\t\t\t\t\t<div id=\"goalPosition\"></div>
\t\t\t\t\t\t<div id=\"defenderPosition\"></div>
\t\t\t\t\t\t<div id=\"midfielder\"></div>\t\t\t
\t\t\t\t\t\t<div id=\"attackerLeftPosition\"></div>
\t\t\t\t\t\t<div id=\"attackerRightPosition\"></div>\t
\t\t\t\t\t\t<div id=\"attackerPosition\"></div>\t
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t ";
        }
        // line 19
        echo "\t\t\t\t
\t\t\t ";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id") == 5)) {
            // line 21
            echo "\t\t\t\t\t<div id=\"bloc_terrain\" style=\"width:300px\">
\t\t\t\t\t\t<div id=\"terrainBasket\">
\t\t\t\t\t\t\t<div id=\"point-guard\"></div>
\t\t\t\t\t\t\t<div id=\"shooting-guard\"></div>
\t\t\t\t\t\t\t<div id=\"small-forward\"></div>
\t\t\t\t\t\t\t<div id=\"center-forward\"></div>
\t\t\t\t\t\t\t<div id=\"power-forward\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t ";
        }
        // line 31
        echo "\t\t\t\t
\t\t\t ";
        // line 32
        if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id") == 3)) {
            // line 33
            echo "\t\t\t\t\t<div id=\"bloc_terrain\" style=\"width:300px\">
\t\t\t\t\t\t<div id=\"terrainVolley\">
\t\t\t\t\t\t\t<div id=\"point-guard\"></div>
\t\t\t\t\t\t\t<div id=\"shooting-guard\"></div>
\t\t\t\t\t\t\t<div id=\"small-forward\"></div>
\t\t\t\t\t\t\t<div id=\"center-forward\"></div>
\t\t\t\t\t\t\t<div id=\"power-forward\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t ";
        }
        // line 43
        echo "\t\t\t\t
\t\t\t ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id") == 2)) {
            // line 45
            echo "\t\t\t\t\t<div id=\"bloc_terrain\" style=\"width:300px\">
\t\t\t\t\t\t<div id=\"terrainVolley\">
\t\t\t\t\t\t\t<div id=\"point-guard\"></div>
\t\t\t\t\t\t\t<div id=\"shooting-guard\"></div>
\t\t\t\t\t\t\t<div id=\"small-forward\"></div>
\t\t\t\t\t\t\t<div id=\"center-forward\"></div>
\t\t\t\t\t\t\t<div id=\"power-forward\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t ";
        }
        // line 55
        echo "\t\t</div>
\t\t\t
   \t<div class=\"col-lg-8\">
            <div class=\"widget-head\">
                
                <div class=\" pull-right\">
                    ";
        // line 61
        if (!twig_in_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "profile"))) {
            // line 62
            echo "                        ";
            $context["receiveInvit"] = 0;
            // line 63
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "invitations_team_send"));
            foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                // line 64
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["invitation"]) ? $context["invitation"] : $this->getContext($context, "invitation")), "profile"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                    // line 65
                    echo "                                        ";
                    if ($this->getAttribute($this->getAttribute((isset($context["invitation"]) ? $context["invitation"] : null), "team", array(), "any", false, true), "id", array(), "any", true, true)) {
                        // line 66
                        echo "                                                ";
                        if (($this->getAttribute($this->getAttribute((isset($context["invitation"]) ? $context["invitation"] : $this->getContext($context, "invitation")), "team"), "id") == $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"))) {
                            // line 67
                            echo "                                                        ";
                            $context["receiveInvit"] = 1;
                            // line 68
                            echo "                                                ";
                        }
                        // line 69
                        echo "                                        ";
                    }
                    // line 70
                    echo "                                ";
                }
                // line 71
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invitation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                        ";
            if (((isset($context["receiveInvit"]) ? $context["receiveInvit"] : $this->getContext($context, "receiveInvit")) != 1)) {
                // line 73
                echo "                            <button class=\"btn btn-xs btn-default\" onclick=\"inviteMe(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
                echo ");\"><i class=\"fa fa-plus\"></i>Tham gia nhóm này
                                <i class=\"fa fa-user fa-fw\"></i>
                            </button>
                        ";
            }
            // line 77
            echo "                    ";
        }
        // line 78
        echo "                   
                </div>
               
            </div>
\t\t
\t\t";
        // line 83
        $context["item"] = 1;
        // line 84
        echo "\t\t
\t\t";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "profile"));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            echo "\t
\t\t\t<div class=\"col-md-6\" style=\"margin-bottom:20px\">
\t\t\t\t";
            // line 87
            if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "document", array(), "any", true, true)) {
                // line 88
                echo "\t\t\t
\t\t\t\t\t";
                // line 89
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 90
                    echo "\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 91
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 92
                        echo "\t\t\t\t\t\t\t";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 93
                        echo "\t\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t
\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 96
                    echo "\t\t\t\t\t\t";
                    $context["url"] = "img_profile_default.jpg";
                    // line 97
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t<div id=\"imageProfileSportif\">
\t\t\t\t\t<img src=\"../uploads/img/";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" style=\"cursor:pointer;width:50px;height:50px;float:left;margin-right:15px\" />
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 103
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") != $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
                // line 104
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "prenom"), "html", null, true);
                echo "\t</a>
\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<span style=\"color:blue\">Tôi</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t
\t\t\t
\t\t\t\t";
            // line 112
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id") == $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "leader"), "id"))) {
                echo " ( Leader )
\t\t\t\t";
            } else {
                // line 114
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "leader"), "id"))) {
                    // line 115
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("RemoveProfileToTeam", array("id_profile" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"), "id_team" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<span style=\"color:red\">X</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t";
            }
            // line 120
            echo "\t\t\t\t
\t\t\t\t";
            // line 121
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))) {
                // line 122
                echo "\t\t\t\t\t";
                $context["check"] = 1;
                // line 123
                echo "\t\t\t\t";
            }
            // line 124
            echo "\t\t\t
\t\t\t\t\t";
            // line 125
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "positions"));
            foreach ($context['_seq'] as $context["_key"] => $context["position"]) {
                // line 126
                echo "\t\t\t\t\t";
                if ($this->getAttribute($this->getAttribute((isset($context["position"]) ? $context["position"] : null), "team", array(), "any", false, true), "id", array(), "any", true, true)) {
                    // line 127
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "team"), "id") == $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"))) {
                        // line 128
                        echo "\t\t\t\t\t\t<div id=\"position";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\tPosition: ";
                        // line 129
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t";
                        // line 130
                        if (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Goal")) {
                            // line 131
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#goalPosition').html('<div class=\"draggable\"><center><b><img src=\"";
                            // line 133
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/player_red.png"), "html", null, true);
                            echo "\" style=\"width:25px\" /><br /><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b></center></div>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Attacker")) {
                            // line 137
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#attackerPosition').html('<center><b><img src=\"";
                            // line 139
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/player_red.png"), "html", null, true);
                            echo "\" style=\"width:25px\" /><br /><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b></center>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Attacker Left")) {
                            // line 143
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#attackerLeftPosition').html('<center><b><img src=\"";
                            // line 145
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/player_red.png"), "html", null, true);
                            echo "\" style=\"width:25px\" /><br /><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b></center>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Attacker Right")) {
                            // line 150
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#attackerRightPosition').html('<center><b><img src=\"";
                            // line 152
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/player_red.png"), "html", null, true);
                            echo "\" style=\"width:25px\" /><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b></center>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Midfielder")) {
                            // line 158
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#midfielder').html('<center><b><img src=\"";
                            // line 160
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/player_red.png"), "html", null, true);
                            echo "\" style=\"width:25px\" /><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b></center>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Point Guard")) {
                            // line 165
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#point-guard').html('<b><a href=\"";
                            // line 167
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Small Forward")) {
                            // line 173
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#small-forward').html('<b><a href=\"";
                            // line 175
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Shooting Guard")) {
                            // line 180
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#shooting-guard').html('<b><a href=\"";
                            // line 182
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Center Forward")) {
                            // line 186
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#center-forward').html('<b><a href=\"";
                            // line 188
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "name") == "Power Forward")) {
                            // line 192
                            echo "\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$( document ).ready(function() {
\t\t\t\t\t\t\t\t\tjQuery('#power-forward').html('<b><a href=\"";
                            // line 194
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nom"), "html", null, true);
                            echo "</a></b>');\t\t\t\t\t
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                        }
                        // line 197
                        echo "<!-- end script position -->
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                        // line 199
                        if ((!array_key_exists("position", $context))) {
                            // line 200
                            echo "\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<option>Goalkeeper</option>
\t\t\t\t\t\t\t\t\t<option>Midfielder</option>
\t\t\t\t\t\t\t\t\t<option>Attacker Left</option>
\t\t\t\t\t\t\t\t\t<option>Attacker Right</option>
\t\t\t\t\t\t\t\t\t<option>Attacker</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
                        }
                        // line 209
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 213
                echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['position'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "\t\t\t\t<!-- end for position -->
\t\t\t\t
\t\t\t\t";
            // line 219
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "leader"), "id"))) {
                // line 220
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id") == 1)) {
                    // line 221
                    echo "\t\t\t\t\t\t<select id=\"positionSelect\" name=\"positionSelect\" onChange=\"changePositionF(jQuery(this).val(),";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"), "html", null, true);
                    echo ")\">
\t\t\t\t\t\t\t<option value=\"\"> - Chọn - </option>
\t\t\t\t\t\t\t<option value=\"Goal\">Goalkeeper</option>
\t\t\t\t\t\t\t<option value=\"Midfielder\">Midfielder</option>
\t\t\t\t\t\t\t<option value=\"Attacker Right\">Attacker Right</option>
\t\t\t\t\t\t\t<option value=\"Attacker Left\">Attacker Left</option>
\t\t\t\t\t\t\t<option value=\"Attacker\">Attacker</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
                }
                // line 230
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id") == 5)) {
                    // line 231
                    echo "\t\t\t\t\t\t<select id=\"positionSelect\" name=\"positionSelect\" onChange=\"changePositionF(jQuery(this).val(),";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id"), "html", null, true);
                    echo ")\">
\t\t\t\t\t\t\t<option value=\"\"> - Chọn - </option>
\t\t\t\t\t\t\t<option value=\"Point Guard\">Point Guard</option>
\t\t\t\t\t\t\t<option value=\"Shooting Guard\">Shooting Guard</option>
\t\t\t\t\t\t\t<option value=\"Small Forward\">Small Forward</option>
\t\t\t\t\t\t\t<option value=\"Center Forward\">Center Forward</option>
\t\t\t\t\t\t\t<option value=\"Power Forward\">Power Forward</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
                }
                // line 240
                echo "\t\t\t\t\t
\t\t\t\t";
            }
            // line 242
            echo "\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 243
            echo "\t\t\t\t
\t\t\t\t
\t\t\t";
            // line 245
            $context["item"] = ((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")) + 1);
            // line 246
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\t\t
\t\t";
        // line 249
        if (((isset($context["check"]) ? $context["check"] : $this->getContext($context, "check")) == 1)) {
            // line 250
            echo "\t\t\t<div  style=\"margin-top:15px\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ListProfile");
            echo "\">Mời mọi người vào đội của tôi</a></div>
\t\t";
        }
        // line 252
        echo "\t\t
\t\t\t
\t\t</div> 
\t\t         
    </div>
    <!-- // row content END -->
</div>
<!-- // Tab content END -->
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Team:detailTeam-tab1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 252,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  524 => 242,  487 => 221,  482 => 219,  478 => 217,  450 => 200,  431 => 192,  422 => 188,  418 => 186,  331 => 145,  327 => 143,  280 => 126,  262 => 120,  213 => 100,  207 => 98,  233 => 133,  433 => 174,  424 => 172,  415 => 167,  405 => 180,  376 => 165,  371 => 151,  359 => 148,  354 => 147,  351 => 146,  348 => 145,  328 => 139,  313 => 133,  286 => 128,  277 => 116,  236 => 104,  222 => 99,  167 => 74,  416 => 162,  403 => 158,  389 => 152,  377 => 149,  352 => 139,  346 => 144,  343 => 150,  332 => 134,  329 => 133,  323 => 132,  321 => 137,  316 => 139,  307 => 127,  275 => 112,  272 => 111,  270 => 123,  231 => 106,  228 => 98,  505 => 231,  497 => 380,  492 => 378,  488 => 377,  484 => 220,  479 => 373,  473 => 370,  97 => 37,  212 => 95,  134 => 51,  253 => 141,  150 => 65,  58 => 18,  127 => 66,  434 => 336,  425 => 168,  420 => 170,  411 => 233,  408 => 232,  399 => 156,  396 => 161,  394 => 227,  391 => 173,  386 => 225,  383 => 156,  380 => 167,  375 => 222,  373 => 221,  367 => 145,  338 => 142,  335 => 141,  318 => 189,  297 => 131,  292 => 171,  281 => 118,  194 => 136,  191 => 115,  186 => 92,  118 => 36,  23 => 3,  65 => 19,  287 => 140,  267 => 122,  202 => 119,  175 => 78,  170 => 93,  104 => 44,  129 => 70,  198 => 96,  192 => 94,  126 => 69,  113 => 34,  84 => 23,  77 => 32,  114 => 65,  299 => 126,  293 => 122,  324 => 138,  308 => 130,  304 => 120,  301 => 133,  291 => 129,  279 => 161,  276 => 125,  271 => 112,  265 => 121,  250 => 126,  223 => 130,  185 => 83,  181 => 90,  172 => 58,  155 => 65,  153 => 49,  146 => 61,  266 => 103,  263 => 102,  257 => 106,  248 => 114,  245 => 106,  237 => 134,  218 => 128,  211 => 96,  152 => 78,  148 => 62,  53 => 15,  242 => 124,  234 => 130,  232 => 93,  215 => 96,  206 => 103,  195 => 77,  190 => 79,  165 => 110,  160 => 101,  90 => 27,  81 => 45,  100 => 31,  70 => 22,  34 => 2,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 250,  538 => 392,  527 => 243,  520 => 240,  517 => 382,  511 => 381,  508 => 380,  502 => 230,  499 => 377,  496 => 376,  494 => 379,  491 => 374,  486 => 373,  483 => 372,  481 => 374,  468 => 362,  465 => 211,  448 => 199,  432 => 343,  426 => 340,  417 => 234,  410 => 334,  404 => 333,  401 => 332,  395 => 175,  390 => 329,  385 => 157,  369 => 146,  366 => 315,  364 => 160,  357 => 309,  349 => 303,  347 => 152,  342 => 299,  333 => 140,  325 => 258,  319 => 136,  317 => 287,  302 => 127,  295 => 130,  288 => 118,  282 => 114,  259 => 119,  255 => 141,  251 => 115,  249 => 110,  239 => 110,  210 => 99,  205 => 92,  200 => 87,  188 => 82,  184 => 91,  180 => 81,  178 => 76,  174 => 90,  161 => 84,  137 => 59,  124 => 48,  110 => 61,  76 => 43,  480 => 162,  474 => 161,  469 => 213,  461 => 209,  457 => 153,  453 => 355,  444 => 197,  440 => 148,  437 => 344,  435 => 194,  430 => 342,  427 => 334,  423 => 339,  413 => 335,  409 => 182,  407 => 160,  402 => 318,  398 => 331,  393 => 160,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 150,  365 => 111,  362 => 149,  360 => 158,  355 => 140,  341 => 105,  337 => 103,  322 => 190,  314 => 99,  312 => 137,  309 => 128,  305 => 95,  298 => 91,  294 => 144,  285 => 116,  283 => 127,  278 => 86,  268 => 85,  264 => 112,  258 => 129,  252 => 144,  247 => 138,  241 => 135,  229 => 101,  220 => 96,  214 => 97,  177 => 87,  169 => 104,  140 => 79,  132 => 71,  128 => 75,  107 => 52,  61 => 22,  273 => 124,  269 => 114,  254 => 105,  243 => 112,  240 => 101,  238 => 94,  235 => 93,  230 => 132,  227 => 131,  224 => 100,  221 => 104,  219 => 103,  217 => 95,  208 => 95,  204 => 94,  179 => 100,  159 => 83,  143 => 60,  135 => 63,  119 => 46,  102 => 37,  71 => 20,  67 => 15,  63 => 19,  59 => 31,  93 => 55,  88 => 32,  78 => 29,  28 => 7,  87 => 26,  46 => 12,  44 => 11,  94 => 52,  89 => 31,  85 => 31,  75 => 35,  68 => 17,  56 => 16,  27 => 4,  25 => 5,  21 => 2,  201 => 97,  196 => 91,  183 => 63,  171 => 87,  166 => 54,  163 => 75,  158 => 67,  156 => 59,  151 => 84,  142 => 65,  138 => 72,  136 => 57,  121 => 37,  117 => 66,  105 => 32,  91 => 25,  62 => 32,  49 => 13,  31 => 3,  38 => 7,  26 => 6,  24 => 4,  19 => 1,  79 => 44,  72 => 18,  69 => 21,  47 => 21,  40 => 6,  37 => 5,  22 => 2,  246 => 244,  157 => 69,  145 => 59,  139 => 55,  131 => 46,  123 => 68,  120 => 67,  115 => 38,  111 => 64,  108 => 39,  101 => 61,  98 => 36,  96 => 30,  83 => 60,  74 => 21,  66 => 33,  55 => 14,  52 => 14,  50 => 14,  43 => 8,  41 => 7,  35 => 9,  32 => 5,  29 => 4,  209 => 94,  203 => 84,  199 => 118,  193 => 88,  189 => 93,  187 => 93,  182 => 80,  176 => 89,  173 => 88,  168 => 77,  164 => 85,  162 => 68,  154 => 73,  149 => 77,  147 => 82,  144 => 57,  141 => 73,  133 => 41,  130 => 40,  125 => 41,  122 => 52,  116 => 43,  112 => 35,  109 => 41,  106 => 63,  103 => 62,  99 => 36,  95 => 48,  92 => 35,  86 => 49,  82 => 22,  80 => 37,  73 => 22,  64 => 33,  60 => 18,  57 => 17,  54 => 16,  51 => 13,  48 => 14,  45 => 20,  42 => 19,  39 => 10,  36 => 3,  33 => 10,  30 => 5,);
    }
}
