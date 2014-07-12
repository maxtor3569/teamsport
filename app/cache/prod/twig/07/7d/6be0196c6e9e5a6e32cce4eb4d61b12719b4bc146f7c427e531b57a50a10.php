<?php

/* SportimimiuserBundle:Profile:listProfile.html.twig */
class __TwigTemplate_077d6be0196c6e9e5a6e32cce4eb4d61b12719b4bc146f7c427e531b57a50a10 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm kiếm người chơi"), "html", null, true);
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
        echo "    <script>
    \$(document).ready(function(){
        \$('#filter_contact').on('input', function() {
            \$('.col-sm-3').hide() // hide all the selected elements
                .filter(':contains(\"' + \$('#filter_contact').val()  + '\")')
                .show(); // show the filtered elements
        }); 
    }); 
    </script>
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"innerLR\">
        <h3 class=\"pull-left margin-none innerR\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm kiếm người chơi"), "html", null, true);
        echo "</h3>

        <div class=\"clearfix\"></div>
        <div class=\"separator\"></div>
        <div class=\"separator\"></div>
        <div class=\"input-group innerB\">
            <input id=\"filter_contact\" type=\"text\" class=\"form-control \" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm người chơi"), "html", null, true);
        echo "\">
            <div class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i>
                </button>
            </div>
        </div>
            <!-- Row -->
        <div class=\"row\">
            <!-- Col sport slide -->
            <div class=\"col-md-9\">
                <!-- Start Featured -->
                ";
        // line 43
        $context["i"] = 0;
        // line 44
        echo "                <div class=\"row\">
                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")));
        foreach ($context['_seq'] as $context["_key"] => $context["prof"]) {
            // line 46
            echo "                  ";
            if (((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != 0))) {
                // line 47
                echo "                    </div>
                      <div class=\"row\">
                  ";
            }
            // line 50
            echo "                           <div class=\"col-sm-3\">
                                <div class=\"widget\">
                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))), "html", null, true);
            echo "\" class=\"display-block bg-success innerAll text-center text-white\">
                                    ";
            // line 53
            if ($this->getAttribute((isset($context["prof"]) ? $context["prof"] : null), "document", array(), "any", true, true)) {
                // line 54
                echo "
                                ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 56
                    echo "
                                        ";
                    // line 57
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 58
                        echo "                                                ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 59
                        echo "                                        ";
                    }
                    // line 60
                    echo "
                                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 62
                    echo "                                        ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 63
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                        ";
            }
            // line 65
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_80"), "html", null, true);
            echo "\">
                                </a>
                                <div class=\"text-center innerAll\">
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "id"))), "html", null, true);
            echo "\" class=\"strong\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")), "prenom"), "html", null, true);
            echo "</a>
                                <div class=\"clearfix\"></div>
                                <!--<small class=\"text-center\"><i class=\"fa fa-clock-o\"></i> 5:15</small>-->
                                </div>
                                </div>
                         </div>

                 ";
            // line 75
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 76
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prof'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </div>
                <!-- End Featured -->
                <div class=\"clearfix\"></div>



            </div>
            <!-- Col -->
            <div class=\"col-md-3\">

                <div class=\"widget\">
                    <div class=\"widget-body padding-none\">
                        <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("ListProfile");
        echo "\">
                            <h4 class=\"innerAll bg-primary text-white margin-bottom-none\">Chọn Thể thao</h4>
                        </a>
                        <ul class=\"list-group list-group-1 margin-none borders-none\">
                          ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 94
            echo "                              ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "profiles")) > 0)) {
                // line 95
                echo "                              <li class=\"list-group-item border-top-none\">
                                <a href=\"?sport=";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
                echo "\">
                                    <span class=\"badge pull-right bg-primary \">";
                // line 97
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "profiles")), "html", null, true);
                echo "</span><i class=\"fa fa-exclamation-circle\"></i>&nbsp;
                                    ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nameVn"), "html", null, true);
                echo "</a>
                                </li>
                               ";
            }
            // line 101
            echo "

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        return "SportimimiuserBundle:Profile:listProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 104,  229 => 101,  223 => 98,  219 => 97,  215 => 96,  212 => 95,  209 => 94,  205 => 93,  198 => 89,  184 => 77,  178 => 76,  176 => 75,  162 => 68,  155 => 65,  152 => 64,  146 => 63,  143 => 62,  137 => 60,  134 => 59,  131 => 58,  129 => 57,  126 => 56,  121 => 55,  118 => 54,  116 => 53,  112 => 52,  108 => 50,  103 => 47,  100 => 46,  96 => 45,  93 => 44,  91 => 43,  77 => 32,  68 => 26,  65 => 25,  62 => 24,  49 => 13,  46 => 12,  40 => 6,  37 => 5,  31 => 3,);
    }
}
