<?php

/* SportimimiuserBundle:Page:homepageContent.html.twig */
class __TwigTemplate_5bca68b5a6b1fcfc0ab5e74493e63b3381b51e12764ce410f456fddea4718635 extends Twig_Template
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
        echo "<div class=\"innerAll\">
   <div class=\"widget\">
      <div class=\"widget-body padding-none\">
         <div class=\"margin-none center bg-white\">
            <h1 class=\"separator bottom\">Bạn tìm người chơi thể thao ?</h1>
            <p>Tham gia vào mạng lưới thể thao tốt nhất tại Việt Nam. Tìm bạn bè để chơi, tìm phòng để chơi, Tạo nhóm của bạn.</p>
            <div id=\"register\" class=\"row\">
               <form class=\"form-horizontal margin-none\" id=\"validateSubmitForm\" method=\"post\" autocomplete=\"off\" novalidate=\"novalidate\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
               <div class=\"col-md-6\">
                  <img class=\"col-xs-12\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image_homepage.jpg"), "html", null, true);
        echo "\" />
               </div>
               <div class=\"col-md-6\">
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "                         
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">                                 
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sports"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-6\" style=\"margin-top:15px;\">
                     <div class=\"form-group\" style=\"margin:0;\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget');
        echo "
                     </div>
                  </div>
                  <div class=\"col-md-11\" style=\"margin-top:15px;margin-bottom:15px\">
                     Bằng cách đăng ký trên Teamsport, bạn đồng ý với Điều khoản Dịch vụ, Chính sách bảo mật và Chính sách cookie Teamsport.
                  </div>
                  <div class=\"col-md-11\" style=\"margin-top:15px;margin-bottom:15px\">
                     <div style=\"display:none\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "</div>
                     <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"fa fa-check-circle\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
        echo "</button>
                     <a id=\"fb_button\" class=\"btn btn-primary btn-lg\" style=\"background:#4c66a4\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facebook"]) ? $context["facebook"] : $this->getContext($context, "facebook")), "loginUrl", array(0 => array("redirect_uri" => $this->env->getExtension('routing')->getUrl("FacebookLogin"), "scope" => "email")), "method"), "html", null, true);
        echo "\" title=\"Connect With Facebook\">
                     ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng ký"), "html", null, true);
        echo " với Facebook</a>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class=\"row\">
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <p class=\"margin-none\">
                     <img class=\"img-responsive\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/562px-Adidas_Logo.svg.png"), "html", null, true);
        echo "\" style=\"height:200px\" />
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <p class=\"margin-none\">
                     <img class=\"img-responsive\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Nike_logo.png"), "html", null, true);
        echo "\" style=\"height:200px\" />
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <p class=\"margin-none\">
                     <img class=\"img-responsive\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Puma-Logo.png"), "html", null, true);
        echo "\"  style=\"height:200px\"/>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class=\"row\">
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top group\">
                  <i></i>
                  <h4>Tìm người chơi và Tạo đội</h4>
                  <p class=\"margin-none\"> Không có người để cùng luyện tập thể thao?
                     Hãy đăng ký và bắt đầu tìm kiếm những thành viên
                     thích hợp để cùng chơi.
                     <br /><br />
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top soccer_ball\">
                  <i></i>
                  <h4>Tìm sân chơi</h4>
                  <p class=\"margin-none\">Bạn băn khoăn không biết trong quận của bạn có những sân chơi nào, và những ai đang chơi tại đó? 
                     Chức năng này sẽ giúp bạn tìm được sân chơi phù hợp nhất.
                     <br>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class=\"col-md-4\">
         <div class=\"widget widget-heading-simple widget-body-white\">
            <div class=\"widget-body innerAll inner-2x\">
               <div class=\"glyphicons glyphicon-xlarge glyphicon-top message_new\">
                  <i></i>
                  <h4>Kết nối và chơi</h4>
                  <p class=\"margin-none\"> Bạn cò thể kết bạn mới, gửi lời mời chơi,
                     thành lập đội, tổ chức sự kiện và rất nhiều tiện ích khác.<br />
                     <br>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   \$( document ).ready(function() {
   \tjQuery('#profile_sports').prepend('<option value=\"\" disabled selected>Bạn chơi thể thao nào?</option>');
   });
   
</script>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:homepageContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 86,  134 => 75,  120 => 64,  103 => 50,  99 => 49,  95 => 48,  91 => 47,  81 => 40,  73 => 35,  65 => 30,  57 => 25,  49 => 20,  41 => 15,  33 => 10,  28 => 8,  19 => 1,);
    }
}
