<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f1c385ab8bc5eb6adf5bdafad21f7befde300422f5bf647961b81dc59b91c5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<style>
#wrapper {
width: 100%!important;
}
</style>
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
  <!-- Main Container Fluid -->
    <div class=\"container-fluid \">
        <!-- Content START -->
        <div id=\"content\">
            <div class=\"container\" style=\"margin-top:20px\">
                <div class=\"layout-app col-fs\">
                    <div class=\"row row-app\">
                        <div class=\"col-md-12\">
                            <div class=\"col-separator col-separator-first box col-unscrollable col-fs\">
                                <div class=\"col-table\" style=\"padding:10px\">
                                    <div class=\"col-table-row\">
                                        <div class=\"col-app col-unscrollable tab-content\">
                                            <div class=\"\" id=\"lock-1-1\">
                                                <h3 class=\"innerB text-center\">Đăng nhập</h3>
                                                <div class=\"lock-container\">
                                                    <div class=\"innerAll text-center\">
                                                       
                                                        <div style=\"width:30%;margin:auto\">
                                                            <input id=\"username\" name=\"_username\" class=\"form-control text-center bg-gray\" type=\"text\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nhập email của bạn"), "html", null, true);
        echo "\" style=\"\"
                                                            />
                                                            <input id=\"password\" name=\"_password\" class=\"form-control text-center bg-gray\" type=\"password\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nhập mật khẩu của bạn"), "html", null, true);
        echo "\" style=\"margin-top:10px\"
                                                            />
                                                        </div>
                                                        <div class=\"innerT\">
                                                            
                                                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"Đăng nhập\" /> <i class=\"fa fa-fw fa-unlock-alt\"></i>
                                                        </div>
                                                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn margin-none\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quên mật khẩu?"), "html", null, true);
        echo "</a>
                                                       <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("AddProfile");
        echo "\" class=\"btn margin-none\"> Chưa có tài khoản?  Xin vui lòng đăng ký</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 41,  83 => 40,  73 => 33,  68 => 31,  46 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
