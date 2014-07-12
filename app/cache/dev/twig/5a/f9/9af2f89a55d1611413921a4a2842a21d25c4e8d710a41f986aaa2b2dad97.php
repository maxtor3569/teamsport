<?php

/* SportimimiuserBundle:Admin:index.html.twig */
class __TwigTemplate_5af99af2f89a55d1611413921a4a2842a21d25c4e8d710a41f986aaa2b2dad97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div style=\"padding:20px\">
<span style=\"font-size:15pt\"><a href=\"#listProfile\" onclick=\"jQuery('#listProf').toggle()\"> LIST PROFILE</a></span><br/>
<div id=\"listProf\" style=\"display:none\">
\t<table>
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allusers"]) ? $context["allusers"] : $this->getContext($context, "allusers")));
        foreach ($context['_seq'] as $context["_key"] => $context["userRow"]) {
            // line 12
            echo "\t\t<tr>
\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRow"]) ? $context["userRow"] : $this->getContext($context, "userRow")), "email"), "html", null, true);
            echo "</td>
\t\t\t<td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userRow"]) ? $context["userRow"] : $this->getContext($context, "userRow")), "nom"), "html", null, true);
            echo " </td>
\t\t\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DeleteUser", array("id" => $this->getAttribute($this->getAttribute((isset($context["userRow"]) ? $context["userRow"] : $this->getContext($context, "userRow")), "user"), "id"))), "html", null, true);
            echo "\">Delete</a></td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</table>
</div>
<span style=\"font-size:15pt\"><a href=\"#listProfile\" onclick=\"jQuery('#listPlace').toggle()\"> LIST PLACE</a></span>
<div id=\"listPlace\" style=\"display:none\">
<table>
\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allplaces"]) ? $context["allplaces"] : $this->getContext($context, "allplaces")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 24
            echo "\t\t<tr>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
            echo "</td>
\t\t\t<td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "address"), "html", null, true);
            echo " </td>
\t\t\t<!--<td>Delete</td>-->
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</table>



</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 15,  93 => 28,  88 => 6,  78 => 21,  28 => 3,  87 => 25,  46 => 7,  44 => 11,  94 => 28,  89 => 20,  85 => 25,  75 => 23,  68 => 18,  56 => 9,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  31 => 4,  38 => 7,  26 => 6,  24 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 6,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 26,  82 => 25,  80 => 41,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 13,  48 => 12,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
