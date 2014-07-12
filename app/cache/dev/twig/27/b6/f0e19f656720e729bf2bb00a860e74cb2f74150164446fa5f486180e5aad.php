<?php

/* SportimimiuserBundle:Place:homepage.html.twig */
class __TwigTemplate_27b6f0e19f656720e729bf2bb00a860e74cb2f74150164446fa5f486180e5aad extends Twig_Template
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
        echo "Danh Sách Các Môn Thể Thao";
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/place.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("chosen-master/public/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"//cdn.jsdelivr.net/jquery.pajinate/0.4/jquery.pajinate.min.js\"></script>
\t
\t<script>

\t\$('#searchPlace_placeName').autocomplete({
\t\tsource: function( request, response ) {
\t\t
\t\t\t\$.ajax({
\t\t\t\turl : '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("getPlace.php"), "html", null, true);
        echo "',
\t\t\t\tdata: {term: request.term},
\t\t\t\tdataType: \"json\",
\t\t\t\tsuccess: function( data ) {
\t\t\t\t\tresponse( \$.map( data.myData, function( item ) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.name
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t   messages: {
        noResults: '',
        results: function() {}
    }
    });

</script>

";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "<div style=\"border:1px solid black;margin:20px;padding:20px;width:300px;background:white;float:left\">
\t<h2 style=\"color:#00a751\">TÌM SÂN CHƠI</h2>
\t<form action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ListPlace");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placeName"), 'widget');
        echo "
\t\t\t\t<div style=\"margin-top:15px\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "district"), 'widget');
        echo "
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t\t<input type=\"submit\" value=\"Tìm địa điểm\" style=\"margin:20px;background:#00a751\"/>
\t\t\t
\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t
\t</form>
</div>\t
<div style=\"margin:20px;padding:20px;width:300px;float:right\">
<p style=\"font-size:15pt;margin-top:20px\">
\t
Bạn đang muốn tìm địa điểm sân chơi các môn thể thao tại thành phố HCM?</p>
<p style=\"font-size:15pt;margin-top:20px\">
Hãy chọn vị trí quận và môn thể thao phù hợp để tìm kiếm thông tin và phí thuê sân.
</p>

</div>
<div style=\"clear:both;\" </div>
<!--
\t<div id=\"bottom\" style=\"clear:both;\">

\t<h2>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Người Chơi"), "html", null, true);
        echo "</h2>
\t\t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/messi-xavi.jpg"), "html", null, true);
        echo "\" />
\t\t
\t</div>\t
-->
\t<hr />
\t<div style=\"width:400px;margin:20px;padding:20px;width:300px;background:white;\">
\t<h2>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Top place For you!"), "html", null, true);
        echo "</h2>
\t";
        // line 79
        $context["i"] = 0;
        // line 80
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "cacategory", array(), "any", false, true), "nameVn", array(), "any", true, true)) {
            // line 81
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "category"), "nameVn") == "Bóng Đá")) {
                // line 82
                echo "\t\t
\t\t\t";
                // line 83
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
                foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                    if (($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type") == "Sân")) {
                        // line 84
                        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
                        // line 86
                        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 10)) {
                            // line 87
                            echo "\t\t\t\t\t<span class=\"name\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailPlace", array("name" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "alias"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
                            echo "</a></span><br />
\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t
\t\t\t\t";
                        // line 90
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 91
                        echo "\t\t\t\t
\t\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "\t\t";
            }
            // line 94
            echo "\t";
        } else {
            // line 95
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
            foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                if (($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type") == "Sân")) {
                    // line 96
                    echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
                    // line 98
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 10)) {
                        // line 99
                        echo "\t\t\t\t\t<span class=\"name\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailPlace", array("name" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "alias"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
                        echo "</a></span><br />
\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t
\t\t\t\t";
                    // line 102
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 103
                    echo "\t\t\t\t
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t
\t
\t
\t
\t";
        }
        // line 110
        echo "\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Place:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 105,  234 => 103,  232 => 102,  215 => 96,  206 => 94,  195 => 91,  190 => 89,  165 => 81,  160 => 79,  90 => 27,  81 => 23,  100 => 45,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 288,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 264,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 226,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 86,  178 => 213,  174 => 212,  161 => 208,  137 => 196,  124 => 191,  110 => 186,  76 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 101,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 47,  61 => 20,  273 => 258,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 231,  221 => 99,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 71,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 20,  63 => 17,  59 => 15,  93 => 42,  88 => 27,  78 => 21,  28 => 3,  87 => 25,  46 => 11,  44 => 11,  94 => 28,  89 => 20,  85 => 167,  75 => 23,  68 => 18,  56 => 9,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 31,  91 => 26,  62 => 23,  49 => 9,  31 => 4,  38 => 5,  26 => 1,  24 => 3,  19 => 1,  79 => 23,  72 => 16,  69 => 16,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 244,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 54,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 24,  74 => 19,  66 => 20,  55 => 11,  52 => 10,  50 => 10,  43 => 7,  41 => 10,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 93,  199 => 67,  193 => 90,  189 => 71,  187 => 84,  182 => 87,  176 => 84,  173 => 65,  168 => 82,  164 => 59,  162 => 80,  154 => 58,  149 => 51,  147 => 72,  144 => 49,  141 => 48,  133 => 55,  130 => 194,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 27,  92 => 21,  86 => 26,  82 => 166,  80 => 21,  73 => 19,  64 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 8,  33 => 2,  30 => 6,);
    }
}
