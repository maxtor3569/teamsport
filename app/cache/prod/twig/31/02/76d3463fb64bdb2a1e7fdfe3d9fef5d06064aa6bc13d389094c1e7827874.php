<?php

/* SportimimiuserBundle:Map:currentlyPlay.html.twig */
class __TwigTemplate_310276d3463fb64bdb2a1e7fdfe3d9fef5d06064aa6bc13d389094c1e7827874 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Người đang chơi"), "html", null, true);
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initGoogleMaps\"></script>

";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            echo "\t
 <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn margin-none\">Đăng nhập để có thể check-in, tìm kiếm bạn bè, gửi tin nhắn và sử dụng nhiều tính năng khác</a>
";
        }
        // line 16
        echo " 

<div id=\"map-currently-play\" class=\"maps-google-fs\"></div>
    <!--<h3 id=\"maps_fs_heading\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
        echo "<i class=\"fa fa-fw fa-map-marker text-muted\"></i>
    </h3>-->
    <div class=\"btn-group\" id=\"maps_fs_buttons\">
        <div class=\"btn-group\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("MapFields");
        echo "\" data-toggle=\"\" class=\"btn btn-default\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sân Chơi"), "html", null, true);
        echo "</a>
            
        </div>
        <div class=\"btn-group bg-white\">
            <a href=\"\" class=\"btn btn-primary\" data-toggle=\"\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Người đang chơi"), "html", null, true);
        echo "</a>
           
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Map:currentlyPlay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  81 => 23,  74 => 19,  69 => 16,  64 => 15,  60 => 14,  57 => 13,  54 => 12,  48 => 9,  45 => 8,  40 => 6,  37 => 5,  31 => 4,);
    }
}
