<?php

/* SportimimiuserBundle:Events:listEvents.html.twig */
class __TwigTemplate_9b8bfcc172ef5338096d6964117eafcc1db1229bc1451a41e9d2fe2704b02df3 extends Twig_Template
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
        echo "Danh Sách Các Môn Sự Kiện";
    }

    // line 6
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 7
        echo "\t
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t<div class=\"innerLR\">
                <h3 class=\"pull-left margin-none innerR\">Danh Sách Các Môn Sự Kiện</h3>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("AddEvent");
        echo "\" class=\"btn btn-primary pull-left\">Tạo Sự Kiện</a>
               
                <div class=\"clearfix\"></div>
                <div class=\"separator-h\"></div>
                <!-- Row -->
                <div class=\"row\">
                    <!-- Col sport slide -->
                    <div class=\"col-md-9\">
                        <!-- Start Featured -->
                        ";
        // line 25
        $context["i"] = 0;
        // line 26
        echo "                        <div class=\"row\">
                        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 28
            echo "                          ";
            if (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 0))) {
                // line 29
                echo "                            </div>
                              <div class=\"row\">
                          ";
            }
            // line 32
            echo "                                   <div class=\"col-sm-3\">
                                        <div class=\"widget\">
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailEvent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\" class=\"display-block bg-success innerAll text-center text-white\"><i class=\"icon-desktop-play fa-5x\"></i>
                                        </a>
                                        <div class=\"text-center innerAll\">
                                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailEvent", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\" class=\"strong  \">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
            echo "</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                        </div>
                                        </div>
                                 </div>
                         
                         ";
            // line 44
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 45
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </div>
                        <!-- End Featured -->
                        <div class=\"clearfix\"></div>
                        <div class=\"widget\">
                            <div class=\"text-center innerAll inner-2x\">
                                <h2 class=\"innerT\">";
        // line 51
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events"))), "html", null, true);
        echo " Events</h2>
                                <p class=\"lead\">Join teamsport.</p>
                                <p class=\"lead\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("AddEvent");
        echo "\" class=\"btn btn-primary\">Tạo Sự Kiện</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class=\"row\" style=\"display:none\">
                            <div class=\"col-sm-6 \">
                                <h4 class=\"innerTB margin-none icon-refresh-heart\"><i></i>&nbsp; Most Viewed</h4>
                                <div class=\"widget innerAll margin-none\">
                                    <a href=\"\" class=\"display-block bg-inverse innerAll text-center\"><i class=\"text-white icon-clipboard fa-5x\"></i></a>
                                    <div class=\"text-center innerT\">
                                        <a href=\"\" class=\"strong text-inverse \">To Do List</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <h4 class=\"innerTB margin-none icon-cool\"><i></i>&nbsp; Popular this Month</h4>
                                <div class=\"widget innerAll margin-none\">
                                    <a href=\"\" class=\"display-block bg-inverse innerAll text-center\"><i class=\"text-white icon-clipboard fa-5x\"></i></a>
                                    <div class=\"text-center innerT\">
                                        <a href=\"\" class=\"strong text-inverse \">To Do List</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col -->
                    <div class=\"col-md-3\">
                       
                        <div class=\"widget\">
                            <div class=\"widget-body padding-none\">
                                <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ListEvent");
        echo "\"><h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4></a>
                                <ul class=\"list-group list-group-1 margin-none borders-none\">
                                  ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 91
            echo "                                      ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "events")) > 0)) {
                // line 92
                echo "                                      <li class=\"list-group-item border-top-none\">
                                        <a href=\"?sport=";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
                echo "\">
                                            <span class=\"badge pull-right bg-primary \">";
                // line 94
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "events")), "html", null, true);
                echo "</span><i class=\"fa fa-exclamation-circle\"></i>&nbsp;
                                            ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), "html", null, true);
                echo "</a>
                                        </li>
                                       ";
            }
            // line 98
            echo "                                      
                                      
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                    
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Events:listEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 101,  198 => 98,  192 => 95,  188 => 94,  184 => 93,  181 => 92,  178 => 91,  174 => 90,  169 => 88,  131 => 53,  126 => 51,  119 => 46,  113 => 45,  111 => 44,  99 => 37,  93 => 34,  89 => 32,  84 => 29,  81 => 28,  77 => 27,  74 => 26,  72 => 25,  60 => 16,  56 => 14,  53 => 13,  48 => 11,  45 => 10,  40 => 7,  37 => 6,  31 => 4,);
    }
}
