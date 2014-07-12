<?php

/* SportimimiuserBundle:Place:listPlace.html.twig */
class __TwigTemplate_44e5d1c73919a94768d598174d3d373a8e18a2ff99c522f12050984e818349bc extends Twig_Template
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
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t <!-- <div class=\"layout-app\">  -->
            <div class=\"innerLR\">
                <h3 class=\"pull-left margin-none innerR\">TÌM SÂN CHƠI</h3>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("CreatePlace");
        echo "\" class=\"btn btn-primary pull-left\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Không tìm thấy Nơi bạn đang chơi?"), "html", null, true);
        echo "</a>
                
                <div class=\"clearfix\"></div>
                <div class=\"separator-h\"></div>
                <!-- Row -->
                <div class=\"row\">
                    <!-- Col -->
                    <div class=\"col-md-9\">
                        <!-- Start Featured -->
                        <!-- content -->
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 26
            echo "                        <div class=\"widget media margin-none \">
                            <a class=\"pull-left bg-success innerAll text-center text-white\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailPlace", array("name" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "alias"))), "html", null, true);
            echo "\"><i class=\"fa fa-fw icon-soccer-field fa-5x\"></i>
                            </a>
                            <div class=\"media-body innerAll\">
                                <h4 class=\"media-heading innerT\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailPlace", array("name" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "alias"))), "html", null, true);
            echo "\" class=\"text-inverse\">";
            if ($this->getAttribute((isset($context["place"]) ? $context["place"] : null), "placeName", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placeName"), "html", null, true);
            }
            echo "</a> 
                                    <small><i class=\"fa fa-fw fa-clock-o\"></i> 5:15</small>
                                </h4>
                                Quận ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "address"), "html", null, true);
            echo "
                            </div>
                        </div>
                        <div class=\"separator bottom\"></div>
                        <!-- // END content -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </div>
                    <!-- // END col -->
                    <!-- col -->
                    <div class=\"col-md-3\">
                        <div class=\"widget  padding-none\">
                            <div class=\"widget-body padding-none\">
                                <h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4>
                                <ul class=\"list-group list-group-1 margin-none borders-none\">
                                    
                                </ul>
                            </div>
                        </div>
                        <div class=\"widget\">
                            <h4 class=\"innerAll margin-none border-bottom bg-white\">Sân vận động nổi tiếng</h4>
                            
                            <a href=\"#\" class=\"display-block media margin-none bg-white innerAll border-bottom\">
                                <img class=\"pull-left\" data-src=\"holder.js/50x50\" alt=\"...\" />
                                <span class=\"display-block media-body \">
                                    <h5 class=\"innerT half\">Video Tutorial</h5>
                                    <div class=\"clearfix\"></div>
                                    <small class=\"text-center text-inverse muted\"><i class=\"fa fa-fw fa-clock-o\"></i> 5:15</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- // END col -->
            </div>
            <!-- // END row -->
             <!-- Pagination: Aligned center -->
             ";
        // line 69
        $context["counter"] = (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page"));
        // line 70
        echo "            ";
        $context["counterDes"] = (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page"));
        // line 71
        echo "            ";
        $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
        // line 72
        echo "            ";
        $context["counterDes"] = ((isset($context["counterDes"]) ? $context["counterDes"] : $this->getContext($context, "counterDes")) - 1);
        // line 73
        echo "               
            ";
        // line 74
        echo (isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"));
        echo "
                                
                            
                <!-- // Pagination: Aligned center END -->
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Place:listPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 74,  154 => 73,  151 => 72,  148 => 71,  145 => 70,  143 => 69,  111 => 39,  99 => 33,  89 => 30,  83 => 27,  80 => 26,  76 => 25,  61 => 15,  56 => 12,  53 => 11,  48 => 9,  45 => 8,  40 => 6,  37 => 5,  31 => 4,);
    }
}
