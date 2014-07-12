<?php

/* SportimimiuserBundle:Page:about.html.twig */
class __TwigTemplate_3a6bdeeb6a0ca73666a4c66c68878fb850bf960c9ed42916fc70dd7ee9ecd5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo "Giới thiệu";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget\">
      <div class=\"widget-body padding-none\">
         <div class=\"margin-none bg-white\" style=\"padding:25px\">
            <h1 class=\"separator bottom\">Giới thiệu TeamSport.vn</h1>
            Trong cuộc sống và công việc hằng ngày, bạn luôn luôn phải đối mặt với áp lực, khó khăn, cũng như là không thể tránh được sự mệt mõi. Chúng tôi đã nắm bắt được những điều đó và tự đặt ra câu hỏi: <br>
\t\t\t- Làm sao để giải phóng bản thân ra khỏi những mệt mõi, áp lực trong cuộc sống hằng ngày ?<br><br>
\t\t\tTeamSport.vn: thể thao hằng ngày sẽ giúp các bạn giải quyết các vấn đề trên, ngoài ra thể thao còn mang lại vô số các lợi ích khác.<br><br>
\t\t\t- Tôi không có một nhóm (hội) để cùng chơi một môn thể thao ưa thích ?<br><br>
\t\t\tTeamSport.vn: website được thành lập với mục đích tạo ra một sân chơi, một cộng đồng Thể thao. Đến với TeamSport.vn các thành viên sẽ trải nghiệm những chức năng thật sự thú vị như sau:<br><br>
\t\t\t\t+ Tạo tài khoản cá nhân, bắt đầu tham gia mạng xã hội thể thao TeamSport.vn.<br><br>
\t\t\t\t+ Bảng kỹ năng. Tại đây, bạn sẽ đăng ký các môn thể thao ưa thích và cũng như đánh giá các kỹ năng thể thao của bạn thông qua bảng này.<br><br>
\t\t\t\t+ Giao lưu, kết bạn với các thành viên khác trong TeamSport.vn.<br><br>
\t\t\t\t+ Tham gia các sự kiện thể thao, gia nhập các nhóm(hội) thể thao.<br><br>
\t\t\t\t+ Tuyệt vời hơn nữa, chính bạn cũng có thể tạo một sự kiện thể thao hoặc một nhóm(hội), và mời các thành viên khác tham gia cùng bạn.<br><br>
\t\t\t\t+ Và sẽ còn nhiều chức năng khác đang được TeamSport.vn phát triển để phục vụ các bạn một cách tốt hơn.<br>
\t\t\tHy vọng các bạn sẽ ngày càng yêu thích và ủng hộ TeamSport.vn. 
                  
              
            
         </div>
      </div>
   </div>
         
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,);
    }
}
