<?php

/* SportimimiuserBundle:Profile:addTeam.html.twig */
class __TwigTemplate_1598f05322b1e53391cd11e4e1169596927abc4a47e835274c9cf06c4b5858c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/googleCompletion.js"), "html", null, true);
        echo "\" ></script>

";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Tạo Đội";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <h3>Tạo Đội</h3>
    <div class=\"innerLR\">
        <!-- Form -->
        <form class=\"form-horizontal margin-none\" id=\"validateSubmitForm\" method=\"post\"
              autocomplete=\"off\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <!-- Widget -->
            <div class=\"widget\">
                <!-- Widget heading -->
                <div class=\"widget-head\">
                    <h4 class=\"heading\">Tạo Đội</h4>
                </div>
                <!-- // Widget heading END -->
                <div class=\"widget-body innerAll inner-2x\">
                    <!-- Row -->
                    <div class=\"row innerLR\">
                        <!-- Column -->
                        <div class=\"col-md-4\">
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                           
                            <!-- Group -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"Sân\">Sân</label>
                                <div class=\"col-md-8\">
                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mainLocationRelation"), 'widget', array("id" => "EventForm_location"));
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                        </div>
                        <!-- // Column END -->
                        <!-- Column -->
                        <div class=\"col-md-8\">
                            <!-- Group -->
                            <div class=\"form-group\">
                               ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                        </div>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                  
                    <div class=\"separator\"></div>
                    <!-- Form actions -->
                    <div class=\"form-actions\" style=\"text-align:center\">
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i> Tạo</button>
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i> Hủy bỏ</button>
                    </div>
                    <!-- // Form actions END -->
                </div>
            </div>
            <!-- // Widget END -->
        </form>
        <!-- // Form END -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Profile:addTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 66,  112 => 54,  107 => 52,  94 => 42,  82 => 33,  77 => 31,  59 => 16,  53 => 12,  50 => 11,  44 => 10,  37 => 6,  33 => 4,  30 => 3,);
    }
}
