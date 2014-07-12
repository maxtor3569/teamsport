<?php

/* SportimimiuserBundle:Profile:addProfileStep2.html.twig */
class __TwigTemplate_f2dd2ce0c8a1cdaf6c463256fcb37d6c2ee045fe81ab58c777fcc3a643e24522 extends Twig_Template
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
        echo "\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/googleCompletion.js"), "html", null, true);
        echo "\" ></script>

  <script type=\"text/javascript\">
var fb_param = {};
fb_param.pixel_id = '6013213815888';
fb_param.value = '0.00';
fb_param.currency = 'VND';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})();
</script>
<noscript><img height=\"1\" width=\"1\" alt=\"\" style=\"display:none\" src=\"https://www.facebook.com/offsite_event.php?id=6013213815888&amp;value=0&amp;currency=VND\" /></noscript>
";
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký bước 2"), "html", null, true);
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "<style>
\ta.button-next{
\t\tcolor: white!important;
\t\ttext-transform: uppercase;
\t\tfont-size: 15px;
\t\tpadding: 5px 15px;
\t\tbackground-color: #0ca245;
\t\tborder-radius: 3px;
\t}
\ta.button-next img{
\t\tmargin-left: 5px;
\t\tvertical-align: middle;
\t}
\ta.button-next:hover {color:green!important}
</style>
\t<div id=\"select-place\" style=\"padding:25px;font-size:14pt;border:1px solid #ccc;background:white;margin-top:15px\">
\t<div style=\"float:left;margin-right:80px;height:140px;padding:20px;line-height:30px;font-size:16pt;width:300px\">
\t Bạn đang chơi thể thao ở những địa điểm nào? <br/>
\t Hãy chia sẻ với Teamsport để các thành viên có thể cùng tham gia và<br/> kết nối bạn bè nhé!
\t</div>
\t<div>
\t<form id=\"place\" method=\"post\">
\t\t<div class=\"col-md-6\" style=\"margin-top:15px;\">
\t\t\t<div class=\"form-group\">
\t\t\t\tChọn sân chơi có sẵn trong list<br/>
\t\t\t
\t\t\t\t<select multiple name=\"placeSelected[]\" class=\"form-control\">
\t\t\t\t\t<option> - Không - </option>
\t\t\t\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 57
            echo "\t\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\" style=\"margin-top:15px;\">
\t\t<div class=\"form-group\">
\t\t\tHoặc tạo 1 sân chơi mới <br/>
\t\t\t<input type=\"text\" name=\"new_name_place\" placeholder=\"Hãy nhập tên của nơi\" class=\"form-control\" /><br />
\t\t\t<input type=\"text\" name=\"new_adress_place\" placeholder=\"Hãy nhập địa chỉ của nơi\" class=\"form-control\"/>
\t\t</div>
\t\t</div>
\t</form>
\t</div>
<div style=\"clear:both\"></div>
\t\t
\t\t
\t\t<center>
\t\t\t<div style=\"margin-top:25px\">
\t\t\t<a class=\"button-next\" href=\"#\" onclick=\"jQuery('#place').submit();\">
\t\t\tSave and continue<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icons/double-arr.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</a>
\t\t\t</div>
\t\t</center>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:addProfileStep2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  118 => 59,  109 => 57,  105 => 56,  75 => 28,  72 => 27,  66 => 26,  45 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
