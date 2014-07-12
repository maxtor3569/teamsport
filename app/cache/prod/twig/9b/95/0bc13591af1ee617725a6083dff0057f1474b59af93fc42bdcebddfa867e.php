<?php

/* SportimimiuserBundle:Team:listTeams.html.twig */
class __TwigTemplate_9b950bc13591af1ee617725a6083dff0057f1474b59af93fc42bdcebddfa867e extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Đội"), "html", null, true);
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
\t
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t<div class=\"innerLR\">
\t\t<h3 class=\"pull-left margin-none innerR\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Đội"), "html", null, true);
        echo "</h3>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("CreateTeam");
        echo "\" class=\"btn btn-primary pull-left\">Tạo Đội</a>
               
        <div class=\"clearfix\"></div>
        <div class=\"separator-h\"></div>
                <!-- Row -->
                <div class=\"row\">
                    <!-- Col sport slide -->
                    <div class=\"col-md-9\">
                        <!-- Start Featured -->
                        ";
        // line 28
        $context["i"] = 0;
        // line 29
        echo "                        <div class=\"row\">
                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams")));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 31
            echo "                          ";
            if (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 0))) {
                // line 32
                echo "                            </div>
                              <div class=\"row\">
                          ";
            }
            // line 35
            echo "                                   <div class=\"col-sm-3\">
                                        <div class=\"widget\">
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ViewTeam", array("name" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "alias"))), "html", null, true);
            echo "\" class=\"display-block bg-success innerAll text-center text-white\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "classIcons"), "html", null, true);
            echo " fa-5x\"></i>
                                        <br />";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "category"), "nameVn"), "html", null, true);
            echo "
                                        </a>
                                        <div class=\"text-center innerAll\">
                                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ViewTeam", array("name" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "alias"))), "html", null, true);
            echo "\" class=\"strong  \">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
            echo "</a>
                                        <div class=\"clearfix\"></div>
                                        <small class=\"text-center\"><i class=\"icon-user-2\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "profile")), "html", null, true);
            echo " thành viên</small>
                                        </div>
                                        </div>
                                 </div>
                         
                         ";
            // line 48
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 49
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </div>
                        <!-- End Featured -->
                        <div class=\"clearfix\"></div>
                        <div class=\"widget\">
                            <div class=\"text-center innerAll inner-2x\">
                                <h2 class=\"innerT\">";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["teams"]) ? $context["teams"] : $this->getContext($context, "teams"))), "html", null, true);
        echo " Teams</h2>
                                <p class=\"lead\">Join the turnament.</p>
                                <p class=\"lead\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("CreateTeam");
        echo "\" class=\"btn btn-primary\">Tạo Đội</a>
                                </p>
                            </div>
                        </div>
                        <!--
                        <div class=\"widget\">
                            <div class=\"innerTB\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"innerAll text-center\">
                                            <h4 class=\"text-primary \">Our Tutors</h4>
                                            <p class=\"margin-none\">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Laborum, ducimus.</p>
                                            <p><a href=\"\">learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"innerAll text-center\">
                                            <h4 class=\"text-primary \">The Courses</h4>
                                            <p class=\"margin-none\">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Laborum, ducimus.</p>
                                            <p><a href=\"\">learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"innerAll text-center\">
                                            <h4 class=\"text-primary \">Achievments</h4>
                                            <p class=\"margin-none\">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Laborum, ducimus.</p>
                                            <p><a href=\"\">learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       -->
                       <!--
                        <div class=\"row\">
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
                        </div>-->
                    </div>
                   
                    <!-- Col -->
                    <div class=\"col-md-3\">
                 
                        <div class=\"widget\">
                            <div class=\"widget-body padding-none\">
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("ListTeam");
        echo "\"><h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4></a>
                                <ul class=\"list-group list-group-1 margin-none borders-none\">
                                  ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 131
            echo "                                      ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "teams")) > 0)) {
                // line 132
                echo "                                      <li class=\"list-group-item border-top-none\">
                                        <a href=\"?sport=";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
                echo "\">
                                            <span class=\"badge pull-right bg-primary \">";
                // line 134
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "teams")), "html", null, true);
                echo "</span><i class=\"fa fa-exclamation-circle\"></i>&nbsp;
                                            ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), "html", null, true);
                echo "</a>
                                        </li>
                                       ";
            }
            // line 138
            echo "                                      
                                      
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                    
                                    
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Team:listTeams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 141,  247 => 138,  241 => 135,  237 => 134,  233 => 133,  230 => 132,  227 => 131,  223 => 130,  218 => 128,  144 => 57,  139 => 55,  132 => 50,  126 => 49,  124 => 48,  116 => 43,  109 => 41,  103 => 38,  97 => 37,  93 => 35,  88 => 32,  85 => 31,  81 => 30,  78 => 29,  76 => 28,  64 => 19,  60 => 18,  57 => 17,  54 => 16,  49 => 13,  46 => 12,  40 => 6,  37 => 5,  31 => 3,);
    }
}
