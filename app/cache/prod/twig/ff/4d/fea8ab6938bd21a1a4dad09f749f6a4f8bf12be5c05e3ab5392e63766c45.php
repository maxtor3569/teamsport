<?php

/* SportimimiuserBundle:Security:login.html.twig */
class __TwigTemplate_ff4dfea8ab6938bd21a1a4dad09f749f6a4f8bf12be5c05e3ab5392e63766c45 extends Twig_Template
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
        echo "
  <div class=\"form\">
      <form id=\"login\" class=\"vertical\" action=\"\" method=\"post\">
          <div class=\"form_title\">
              OAuth Authorization
          </div>
          ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "          <div class='form_error'></div>
          ";
        }
        // line 10
        echo "          <div class=\"form_item\">
              <div class=\"form_label\"><label for=\"username\">Username</label>:</div>
              <div class=\"form_widget\"><input type=\"text\" id=\"username\" name=\"_username\" /></div>
          </div>
          <div class=\"form_item\">
              <div class=\"form_label\"><label for=\"password\">Password</label>:</div>
              <div class=\"form_widget\"><input type=\"password\" id=\"password\" name=\"_password\" /></div>
          </div>
          <div class=\"form_button\">
              <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Log In\" />
          </div>
      </form>
  </div>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }
}
