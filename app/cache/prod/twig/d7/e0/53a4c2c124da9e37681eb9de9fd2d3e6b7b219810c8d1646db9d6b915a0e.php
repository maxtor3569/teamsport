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
        return array (  183 => 101,  179 => 100,  166 => 90,  151 => 84,  147 => 82,  145 => 81,  143 => 80,  140 => 79,  133 => 77,  114 => 62,  110 => 61,  96 => 50,  78 => 35,  61 => 21,  49 => 11,  46 => 10,  39 => 6,  34 => 5,  31 => 4,);
    }
}
