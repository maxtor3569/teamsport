<?php

/* SportimimiuserBundle:Map:index.html.twig */
class __TwigTemplate_01fd859dc14ce0cbf91005bc8c50c3f824a4ab489fc2d4dcb3d3a02795975749 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Sân Chơi"), "html", null, true);
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

<div id=\"google-fs\" class=\"maps-google-fs\"></div>
    <h3 id=\"maps_fs_heading\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Sân Chơi"), "html", null, true);
        echo "<i class=\"fa fa-fw fa-map-marker text-muted\"></i>
    </h3>
    <div class=\"btn-group\" id=\"maps_fs_buttons\">
        <div class=\"btn-group\">
            <a href=\"\" data-toggle=\"\" class=\"btn btn-primary\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sân Chơi"), "html", null, true);
        echo "</a>
            
        </div>
        <div class=\"btn-group bg-white\">
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("MapCurrentlyPlay");
        echo "\" class=\"btn btn-default\" data-toggle=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Người đang chơi"), "html", null, true);
        echo "</a>
           
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Map:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  81 => 23,  74 => 19,  69 => 16,  64 => 15,  60 => 14,  57 => 13,  54 => 12,  48 => 9,  45 => 8,  40 => 6,  37 => 5,  31 => 4,);
    }
}
