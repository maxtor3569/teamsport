<?php

/* SportimimiuserBundle:Place:detailPlace.html.twig */
class __TwigTemplate_3b218c7f2a462c332a94e224daf8426f1ed74509a3841f1f73008b034128484e extends Twig_Template
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
        echo "Sân ";
        if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "placeName", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
        }
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
<script type=\"text/javascript\">
\$(document).ready(function() {
\tvar msg = '#message';

\t\$(msg).keypress(function(e) {
\t\tif(e.which == 13) {
\t\t\tvar val = \$(msg).val();

\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("comment.php"), "html", null, true);
        echo "',
\t\t\t\ttype: 'GET',
\t\t\t\tdata: 'token=";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "&msg='+escape(val),
\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\$(msg).val('');
\t\t\t\t\t\$(msg).css('height','14px');
\t\t\t\t\t\$('#commentscontainer').append(data);
\t\t\t\t}
\t\t\t});
\t\t}
\t});

});
</script>
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "<style>
.comments, .like {
  background: #edeff4;
  padding: 4px;
  margin-bottom: 1px;
}
.text-holder {
  resize: none;
  border: 1px solid #bdc7d8;
  height: 22px;
  padding: 3px;
  width: 394px;
}
.iconRight {
\twidth: 175px;
    height: 40px;
    float: right;
    position: relative;
    top: -2px;
    right: 2px;


}
</style>
\t<div class=\"widget\">
\t
\t\t
\t\t<h2 style=\"font-size:22pt!important;\">";
        // line 63
        if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "placeName", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
        }
        echo "</h2>
\t\t<div class=\"iconRight\">
\t\t";
        // line 65
        if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "type", array(), "any", true, true)) {
            // line 66
            echo "\t\t\t";
            if ((trim($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "type")) == "Sân")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/soccer-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t
\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/soccer-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/basketball-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/tennis-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/volleyball-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t\t<img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/badminton-none-select.png"), "html", null, true);
                echo "\" style=\"float:right\">
\t\t\t";
            }
            // line 75
            echo "\t\t";
        }
        // line 76
        echo "\t\t</div>
\t\t
\t\t<div style=\"margin-top:15px\">
\t\t";
        // line 79
        if (array_key_exists("place", $context)) {
            // line 80
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Giá"), "html", null, true);
            echo " : ";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "price", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "price"), "html", null, true);
            }
            echo " <br />
\t\t\t";
            // line 81
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "capacity", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Capacity"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "capacity"), "html", null, true);
                echo "<br />";
            }
            // line 82
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Điện thoại liên hệ"), "html", null, true);
            echo " : ";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "price", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "phoneContact"), "html", null, true);
                echo "<br />";
            }
            // line 83
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "contactName", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tên liên hệ"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "contactName"), "html", null, true);
                echo "<br />";
            }
            // line 84
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "address", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Địa chỉ"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "address"), "html", null, true);
                echo "<br />";
            }
            // line 85
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "district", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quận"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "district"), "html", null, true);
            }
            // line 86
            echo "\t\t";
        }
        // line 87
        echo "\t\t</div>
\t</div>
\t<div class=\"comments clearfix\">
\t\t<div class=\"pull-left lh-fix\">
\t\t\t";
        // line 91
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "document", array(), "any", true, true)) {
            // line 92
            echo "
\t\t\t\t";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 94
                echo "\t\t\t\t
\t\t\t\t\t";
                // line 95
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 96
                    echo "\t\t\t\t\t\t";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 97
                    echo "\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t
\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 100
                echo "\t\t\t\t\t";
                $context["url"] = "img_profile_default.jpg";
                // line 101
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t";
        }
        // line 103
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" style=\"width:25px;float:left;margin-right:15px\" />
\t\t</div>

\t\t<div class=\"comment-text pull-left\">
\t\t\t<textarea class=\"text-holder\" placeholder=\"Write a comment..\" id=\"message\"></textarea>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Place:detailPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 103,  263 => 102,  257 => 101,  254 => 100,  248 => 98,  245 => 97,  242 => 96,  240 => 95,  237 => 94,  232 => 93,  229 => 92,  227 => 91,  221 => 87,  218 => 86,  211 => 85,  203 => 84,  195 => 83,  187 => 82,  180 => 81,  171 => 80,  169 => 79,  164 => 76,  161 => 75,  156 => 73,  152 => 72,  148 => 71,  144 => 70,  139 => 69,  130 => 66,  128 => 65,  121 => 63,  92 => 36,  89 => 35,  72 => 22,  67 => 20,  55 => 10,  52 => 9,  46 => 7,  43 => 6,  40 => 5,  31 => 4,);
    }
}
