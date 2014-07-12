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
        return array (  249 => 110,  242 => 105,  234 => 103,  232 => 102,  229 => 101,  221 => 99,  219 => 98,  215 => 96,  209 => 95,  206 => 94,  203 => 93,  195 => 91,  193 => 90,  190 => 89,  182 => 87,  180 => 86,  176 => 84,  171 => 83,  168 => 82,  165 => 81,  162 => 80,  160 => 79,  156 => 78,  147 => 72,  143 => 71,  123 => 54,  116 => 50,  112 => 49,  107 => 47,  100 => 45,  96 => 43,  93 => 42,  67 => 20,  55 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  37 => 5,  31 => 4,);
    }
}
