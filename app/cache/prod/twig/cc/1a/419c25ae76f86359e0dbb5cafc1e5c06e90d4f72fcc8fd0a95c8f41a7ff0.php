<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_cc1a419c25ae76f86359e0dbb5cafc1e5c06e90d4f72fcc8fd0a95c8f41a7ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"innerLR\">
    <div class=\"widget widget-heading-simple widget-body-white\" style=\"margin-top:10px\">
        <div class=\"widget-body\">
         <h3>Thiết lập lại mật khẩu của bạn</h3>
            <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"form-horizontal margin-none\">
                ";
        // line 6
        if (array_key_exists("invalid_username", $context)) {
            // line 7
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nhập email của bạn"), "html", null, true);
            echo "</p>
                ";
        }
        // line 9
        echo "                <div class=\"form-group\">
                    <label for=\"username\" class=\"col-sm-2 control-label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nhập email của bạn"), "html", null, true);
        echo "</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" style=\"width:40%\" />
                    </div>
                </div>
                <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thiết lập lại mật khẩu của bạn"), "html", null, true);
        echo "\" />
                </div>
                </div>

            </form>
        </div>  
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  40 => 10,  37 => 9,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
