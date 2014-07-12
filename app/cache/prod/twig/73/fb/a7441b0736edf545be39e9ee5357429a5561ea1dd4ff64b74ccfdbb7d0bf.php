<?php

/* SportimimiuserBundle:Profile:addProfile.html.twig */
class __TwigTemplate_73fba7441b0736edf545be39e9ee5357429a5561ea1dd4ff64b74ccfdbb7d0bf extends Twig_Template
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

    // line 4
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/fuelux-checkbox/fuelux-checkbox.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/validator/assets/lib/jquery-validation/dist/jquery.validate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/form-validator-register.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>

";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
        echo "</h3>
    <div class=\"innerLR\">
        <!-- Form -->
        <form class=\"form-horizontal margin-none\" id=\"validateSubmitForm\" method=\"post\" 
              autocomplete=\"off\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <!-- Widget -->
            <div class=\"widget\">
               
                <div class=\"widget-body innerAll inner-2x\">
                    <!-- Row -->
                    <div class=\"row innerLR\">
                        <!-- Column -->
                        <div class=\"col-md-4\">
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                   ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                             <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'label');
        echo " 
                                <div class=\"col-md-8\">
                                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                              <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'label');
        echo " 
                                <div class=\"col-md-8\">
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance"), 'widget');
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
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                   ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                <label class=\"col-md-4 control-label\" for=\"password\">Xác nhận mật khẩu</label>
                                <div class=\"col-md-8\">
                                    <input class=\"form-control\" id=\"confirm_password\"
                                           name=\"confirm_password\" type=\"password\" placeholder=\"Xác nhận mật khẩu\"/>
                                </div>
                            </div>
                            <!-- // Group END -->
                            
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                            <!-- Group -->
                            <div class=\"form-group\">
                                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'label');
        echo "
                                <div class=\"col-md-8\">
                                    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe"), 'widget');
        echo "
                                </div>
                            </div>
                            <!-- // Group END -->
                        </div>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                    <!-- Row -->
                    <div class=\"bg-gray innerAll inner-2x\">
                        <div class=\"row\">
                            <!-- Column -->
                            <div class=\"col-md-8\">
                               
                                <div class=\"checkbox\">
                                    <label class=\"checkbox-custom\" for=\"agree\">
                                        <i class=\"fa fa-fw fa-square-o\"></i>
                                        <input type=\"checkbox\" class=\"checkbox\" id=\"agree\" name=\"agree\" />Tôi đã đọc và đồng ý về Chính sách bảo mật và Điều khoản sử dụng
                                    </label>
                                </div>
                               
                            </div>
                            <!-- // Column END -->
                            
                        </div>
                        <!-- // Row END -->
                    </div>
                    <div class=\"separator\"></div>
                    <!-- Form actions -->
                    <div class=\"form-actions\" style=\"text-align:center\">
                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i> Đăng ký</button>                  
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
        return "SportimimiuserBundle:Profile:addProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 141,  220 => 111,  215 => 109,  206 => 103,  201 => 101,  192 => 95,  187 => 93,  168 => 77,  163 => 75,  150 => 65,  145 => 63,  136 => 57,  131 => 55,  122 => 49,  117 => 47,  108 => 41,  103 => 39,  94 => 33,  89 => 31,  75 => 20,  67 => 16,  64 => 15,  58 => 14,  51 => 10,  47 => 9,  42 => 8,  39 => 7,  34 => 5,  31 => 4,);
    }
}
