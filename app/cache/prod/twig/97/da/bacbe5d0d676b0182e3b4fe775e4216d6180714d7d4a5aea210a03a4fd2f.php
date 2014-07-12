<?php

/* SportimimiuserBundle:Team:detailTeam-tab2.html.twig */
class __TwigTemplate_97dabacbe5d0d676b0182e3b4fe775e4216d6180714d7d4a5aea210a03a4fd2f extends Twig_Template
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
<div class=\"tab-pane\" id=\"tab2-3\">
   <h4>Kết Quả & thống kê</h4>
   ";
        // line 4
        if (((isset($context["check"]) ? $context["check"] : $this->getContext($context, "check")) == 0)) {
            // line 5
            echo "   <center>
      <button style=\"background:green;color:white;text-transform:uppercase\" onclick=\"jQuery('#selectTeam').slideToggle();\">Mời thi đấu</button>
      <div id=\"selectTeam\" style=\"display:none\">
         Select your team: 
         <select id=\"teamSelected\">
            ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams"));
            foreach ($context['_seq'] as $context["_key"] => $context["teamChallenge"]) {
                // line 11
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["teamChallenge"]) ? $context["teamChallenge"] : $this->getContext($context, "teamChallenge")), "category"), "id") == $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "id"))) {
                    // line 12
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamChallenge"]) ? $context["teamChallenge"] : $this->getContext($context, "teamChallenge")), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teamChallenge"]) ? $context["teamChallenge"] : $this->getContext($context, "teamChallenge")), "name"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teamChallenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
         </select>
         <button onclick=\"challengeTeam(";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id"), "html", null, true);
            echo ");\"> GO</button>
      </div>
   </center>
   ";
        }
        // line 20
        echo "   <p>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "matchs")), "html", null, true);
        echo " Match / 
      WIN : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "victory"), "html", null, true);
        echo " /
      LOSE: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "defeat"), "html", null, true);
        echo " /
   </p>
   <table>
      <tr style=\"background:#359500;color:white\">
         <td> Tên đội </td>
         <td> Ngày Thắng </td>
         <td> Tỷ số </td>
         <td> Thắng </td>
         <td> Thua </td>
         <td> Tên đội </td>
      </tr>
      <tr style=\"background:white\">
         ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "matchs"));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 35
            echo "         <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailMatch", array("id" => $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "id"))), "html", null, true);
            echo "\"><span style=\"color:red;\">VERSUS :</span> ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "teams"));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 36
                echo "            ";
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
                    // line 37
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                    echo " /
            ";
                } else {
                    // line 39
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "            ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 42
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </a>
         </td>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </tr>
   </table>
</div>
<!-- // Tab content END -->";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Team:detailTeam-tab2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  108 => 39,  102 => 37,  99 => 36,  92 => 35,  88 => 34,  73 => 22,  69 => 21,  57 => 16,  48 => 14,  40 => 12,  37 => 11,  33 => 10,  24 => 4,  551 => 252,  545 => 250,  543 => 249,  540 => 248,  533 => 246,  531 => 245,  527 => 243,  524 => 242,  520 => 240,  505 => 231,  502 => 230,  487 => 221,  484 => 220,  482 => 219,  478 => 217,  469 => 213,  465 => 211,  461 => 209,  450 => 200,  448 => 199,  444 => 197,  435 => 194,  431 => 192,  422 => 188,  418 => 186,  409 => 182,  405 => 180,  395 => 175,  391 => 173,  380 => 167,  376 => 165,  364 => 160,  360 => 158,  347 => 152,  343 => 150,  331 => 145,  327 => 143,  316 => 139,  312 => 137,  301 => 133,  297 => 131,  295 => 130,  291 => 129,  286 => 128,  283 => 127,  280 => 126,  276 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 121,  262 => 120,  259 => 119,  251 => 115,  248 => 114,  243 => 112,  239 => 110,  231 => 106,  221 => 104,  219 => 103,  213 => 100,  210 => 99,  207 => 98,  201 => 97,  198 => 96,  192 => 94,  189 => 93,  186 => 92,  184 => 91,  181 => 90,  176 => 89,  173 => 88,  171 => 87,  164 => 85,  161 => 84,  159 => 83,  152 => 78,  149 => 77,  141 => 73,  138 => 72,  132 => 71,  129 => 70,  126 => 69,  123 => 43,  120 => 67,  117 => 42,  111 => 64,  106 => 63,  103 => 62,  101 => 61,  93 => 55,  81 => 45,  79 => 44,  76 => 43,  64 => 20,  62 => 32,  59 => 31,  47 => 21,  45 => 20,  42 => 19,  28 => 7,  26 => 5,  19 => 1,  183 => 101,  179 => 100,  166 => 90,  151 => 84,  147 => 82,  145 => 81,  143 => 80,  140 => 79,  133 => 77,  114 => 41,  110 => 61,  96 => 50,  78 => 35,  61 => 21,  49 => 11,  46 => 10,  39 => 6,  34 => 5,  31 => 4,);
    }
}
