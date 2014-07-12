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
        return array (  551 => 252,  545 => 250,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  527 => 243,  524 => 242,  520 => 240,  505 => 231,  502 => 230,  487 => 221,  484 => 220,  482 => 219,  478 => 217,  469 => 213,  465 => 211,  461 => 209,  450 => 200,  448 => 199,  444 => 197,  435 => 194,  431 => 192,  422 => 188,  418 => 186,  409 => 182,  405 => 180,  395 => 175,  391 => 173,  380 => 167,  376 => 165,  364 => 160,  360 => 158,  347 => 152,  343 => 150,  331 => 145,  327 => 143,  316 => 139,  312 => 137,  301 => 133,  297 => 131,  295 => 130,  291 => 129,  286 => 128,  283 => 127,  280 => 126,  276 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 121,  262 => 120,  259 => 119,  251 => 115,  248 => 114,  243 => 112,  239 => 110,  231 => 106,  221 => 104,  219 => 103,  213 => 100,  210 => 99,  207 => 98,  201 => 97,  198 => 96,  192 => 94,  189 => 93,  186 => 92,  184 => 91,  181 => 90,  176 => 89,  173 => 88,  171 => 87,  164 => 85,  161 => 84,  159 => 83,  152 => 78,  149 => 77,  141 => 73,  138 => 72,  132 => 71,  129 => 70,  126 => 69,  123 => 68,  120 => 67,  117 => 66,  111 => 64,  106 => 63,  103 => 62,  101 => 61,  93 => 55,  81 => 45,  79 => 44,  76 => 43,  64 => 33,  62 => 32,  59 => 31,  47 => 21,  45 => 20,  42 => 19,  28 => 7,  26 => 6,  19 => 1,  183 => 101,  179 => 100,  166 => 90,  151 => 84,  147 => 82,  145 => 81,  143 => 80,  140 => 79,  133 => 77,  114 => 65,  110 => 61,  96 => 50,  78 => 35,  61 => 21,  49 => 11,  46 => 10,  39 => 6,  34 => 5,  31 => 4,);
    }
}
