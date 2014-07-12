<?php

/* SportimimiuserBundle:Mail:reminder.html.twig */
class __TwigTemplate_0b673c57d076521d31d83f3febcde16ce25c93c3d8859e37644249877f1e26d2 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
<head style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
<meta name=\"viewport\" content=\"width=device-width\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
<title style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">Teamsport</title>
\t
<style style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">

/* ------------------------------------- 
\t\tGLOBAL 
------------------------------------- */
* { 
\tmargin:0;
\tpadding:0;
}
* { font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif; }

img { 
\tmax-width: 100%; 
}
.collapse {
\tmargin:0;
\tpadding:0;
}
body {
\t-webkit-font-smoothing:antialiased; 
\t-webkit-text-size-adjust:none; 
\twidth: 100%!important; 
\theight: 100%;
}


/* ------------------------------------- 
\t\tELEMENTS 
------------------------------------- */
a { color: #2BA6CB;}

.btn {
\ttext-decoration:none;
\tcolor: #FFF;
\tbackground-color: #666;
\tpadding:10px 16px;
\tfont-weight:bold;
\tmargin-right:10px;
\ttext-align:center;
\tcursor:pointer;
\tdisplay: inline-block;
}

p.callout {
\tpadding:15px;
\tbackground-color:#ECF8FF;
\tmargin-bottom: 15px;
}
.callout a {
\tfont-weight:bold;
\tcolor: #2BA6CB;
}

table.social {
/* \tpadding:15px; */
\tbackground-color: #ebebeb;
\t
}
.social .soc-btn {
\tpadding: 3px 7px;
\tfont-size:12px;
\tmargin-bottom:10px;
\ttext-decoration:none;
\tcolor: #FFF;font-weight:bold;
\tdisplay:block;
\ttext-align:center;
}
a.fb { background-color: #3B5998!important; }
a.tw { background-color: #1daced!important; }
a.gp { background-color: #DB4A39!important; }
a.ms { background-color: #000!important; }

.sidebar .soc-btn { 
\tdisplay:block;
\twidth:100%;
}

/* ------------------------------------- 
\t\tHEADER 
------------------------------------- */
table.head-wrap { width: 100%;}

.header.container table td.logo { padding: 15px; }
.header.container table td.label { padding: 15px; padding-left:0px;}


/* ------------------------------------- 
\t\tBODY 
------------------------------------- */
table.body-wrap { width: 100%;}


/* ------------------------------------- 
\t\tFOOTER 
------------------------------------- */
table.footer-wrap { width: 100%;\tclear:both!important;
}
.footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
.footer-wrap .container td.content p {
\tfont-size:10px;
\tfont-weight: bold;
\t
}


/* ------------------------------------- 
\t\tTYPOGRAPHY 
------------------------------------- */
h1,h2,h3,h4,h5,h6 {
font-family: \"HelveticaNeue-Light\", \"Helvetica Neue Light\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 27px;}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:900; font-size: 17px;}
h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

.collapse { margin:0!important;}

p, ul { 
\tmargin-bottom: 10px; 
\tfont-weight: normal; 
\tfont-size:14px; 
\tline-height:1.6;
}
p.lead { font-size:17px; }
p.last { margin-bottom:0px;}

ul li {
\tmargin-left:5px;
\tlist-style-position: inside;
}

/* ------------------------------------- 
\t\tSIDEBAR 
------------------------------------- */
ul.sidebar {
\tbackground:#ebebeb;
\tdisplay:block;
\tlist-style-type: none;
}
ul.sidebar li { display: block; margin:0;}
ul.sidebar li a {
\ttext-decoration:none;
\tcolor: #666;
\tpadding:10px 16px;
/* \tfont-weight:bold; */
\tmargin-right:10px;
/* \ttext-align:center; */
\tcursor:pointer;
\tborder-bottom: 1px solid #777777;
\tborder-top: 1px solid #FFFFFF;
\tdisplay:block;
\tmargin:0;
}
ul.sidebar li a.last { border-bottom-width:0px;}
ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



/* --------------------------------------------------- 
\t\tRESPONSIVENESS
\t\tNuke it from orbit. It's the only way to be sure. 
------------------------------------------------------ */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
\tdisplay:block!important;
\tmax-width:600px!important;
\tmargin:0 auto!important; /* makes it centered */
\tclear:both!important;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
\tpadding:15px;
\tmax-width:600px;
\tmargin:0 auto;
\tdisplay:block; 
}

/* Let's make sure tables in the content area are 100% wide */
.content table { width: 100%; }


/* Odds and ends */
.column {
\twidth: 300px;
\tfloat:left;
}
.column tr td { padding: 15px; }
.column-wrap { 
\tpadding:0!important; 
\tmargin:0 auto; 
\tmax-width:600px!important;
}
.column table { width:100%;}
.social .column {
\twidth: 280px;
\tmin-width: 279px;
\tfloat:left;
}

/* Be sure to place a .clear element after each set of columns, just to be safe */
.clear { display: block; clear: both; }


/* ------------------------------------------- 
\t\tPHONE
\t\tFor clients that support media queries.
\t\tNothing fancy. 
-------------------------------------------- */
@media only screen and (max-width: 600px) {
\t
\ta[class=\"btn\"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

\tdiv[class=\"column\"] { width: auto!important; float:none!important;}
\t
\ttable.social div[class=\"column\"] {
\t\twidth:auto!important;
\t}
\t

}
</style>

</head>
 
<body bgcolor=\"#FFFFFF\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;-webkit-text-size-adjust: none;height: 100%;width: 100%!important;\">

<!-- HEADER -->
<table class=\"head-wrap\" bgcolor=\"#00A650\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;\">
\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"></td>
\t\t<td class=\"header container\" style=\"margin: 0 auto!important;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;\">
\t\t\t\t
\t\t\t\t<div class=\"content\" style=\"margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block;\">
\t\t\t\t<table bgcolor=\"#00A650\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;\">
\t\t\t\t\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"><img src=\"https://teamsport.vn/mail/iconTs.png\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 100%;\"></td>
\t\t\t\t\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"><h6 class=\"collapse\" style=\"color: white;font-size: 25pt;margin: 0!important;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;font-weight: 900;text-transform: uppercase;\">Teamsport.vn</h6></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t
\t\t</td>
\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"></td>
\t</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class=\"body-wrap\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;\">
\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"></td>
\t\t<td class=\"container\" bgcolor=\"#FFFFFF\" style=\"margin: 0 auto!important;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;\">

\t\t\t<div class=\"content\" style=\"margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block;\">
\t\t\t<table style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;\">
\t\t\t\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t<h3 style=\"margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 500;font-size: 27px;\">Xin chào, ";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile"), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile"), "nom"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<p class=\"lead\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 17px;line-height: 1.6;\">Chúng tôi nhớ bạn trên <a href=\"https://teamsport.vn\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;\">Teamsport.vn</a></p>
\t\t\t\t\t\t<p style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6;\">Đã lâu không thấy bạn ghé thăm chúng tôi. <br style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">Teamsport cải thiện để tốt hơn mỗi ngày. Khám phá chức năng mới của chúng tôi : <br style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t<br style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"> <a href=\"https://teamsport.vn/map/fields\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;\">- Xem địa điểm sân chơi tại Việt Nam </a>
\t\t\t\t\t\t<br style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"><a href=\"https://teamsport.vn/dang-nhap\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;\">- Check in địa điểm bạn đang chơi </a><br style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"><a href=\"https://teamsport.vn/dang-nhap\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;\">- Tìm người chơi và sân chơi mới</a></p>
\t\t\t\t\t\t<!-- Callout Panel -->
\t\t\t\t\t\t<p class=\"callout\" style=\"margin: 0;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 15px;font-weight: normal;font-size: 14px;line-height: 1.6;background-color: #ECF8FF;\">
\t\t\t\t\t\t\tĐể đăng nhập vào tài khoản của bạn trên trang web <a href=\"https://teamsport.vn/dang-nhap\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;font-weight: bold;\">Click vào đây</a> <br style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t\tHoặc để sử dụng ứng Teamsport App Android mới  <a href=\"https://play.google.com/store/apps/details?id=com.teamsport.app\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;font-weight: bold;\">Click vào đây</a>
\t\t\t\t\t\t</p><!-- /Callout Panel -->\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<!-- social & contact -->
\t\t\t\t\t\t<table class=\"social\" width=\"100%\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;background-color: #ebebeb;width: 100%;\">
\t\t\t\t\t\t\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- column 1 -->
\t\t\t\t\t\t\t\t\t<table align=\"left\" class=\"column\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 280px;float: left;min-width: 279px;\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t\t\t\t\t\t<td style=\"margin: 0;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\" style=\"margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 900;font-size: 17px;\">Kết nối với Teamsport.vn :</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6;\"><a href=\"https://www.facebook.com/teamsport.vn\" class=\"soc-btn fb\" style=\"margin: 0;padding: 3px 7px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #FFF;font-size: 12px;margin-bottom: 10px;text-decoration: none;font-weight: bold;display: block;text-align: center;background-color: #3B5998!important;\">Facebook</a> <!--<a href=\"#\" class=\"soc-btn tw\">Twitter</a> <a href=\"#\" class=\"soc-btn gp\">Google+</a>--></p>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table><!-- /column 1 -->\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- column 2 -->
\t\t\t\t\t\t\t\t\t<table align=\"left\" class=\"column\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 280px;float: left;min-width: 279px;\">
\t\t\t\t\t\t\t\t\t\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t\t\t\t\t\t<td style=\"margin: 0;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\" style=\"margin: 0;padding: 0;font-family: &quot;HelveticaNeue-Light&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Lucida Grande&quot;, sans-serif;line-height: 1.1;margin-bottom: 15px;color: #000;font-weight: 900;font-size: 17px;\">Liên hệ:</h5>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<!--<p>Phone: <strong>408.341.0600</strong><br/>-->
                Email: <strong style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"><a href=\"emailto:admin@teamsport.vn\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;\">admin@teamsport.vn</a></strong>
                
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table><!-- /column 2 -->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"clear\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block;clear: both;\"></span>\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table><!-- /social & contact -->
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</div><!-- /content -->
\t\t\t\t\t\t\t\t\t
\t\t</td>
\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"></td>
\t</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class=\"footer-wrap\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;clear: both!important;\">
\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"></td>
\t\t<td class=\"container\" style=\"margin: 0 auto!important;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;display: block!important;max-width: 600px!important;clear: both!important;\">
\t\t\t
\t\t\t\t<!-- content -->
\t\t\t\t<div class=\"content\" style=\"margin: 0 auto;padding: 15px;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;max-width: 600px;display: block;\">
\t\t\t\t<table style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;width: 100%;\">
\t\t\t\t<tr style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t<td align=\"center\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">
\t\t\t\t\t\t<p style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;margin-bottom: 10px;font-weight: normal;font-size: 14px;line-height: 1.6;\">
\t\t\t\t\t\t\t<!-- <a href=\"#\">Terms</a> |
\t\t\t\t\t\t\t<a href=\"#\">Privacy</a> |-->
\t\t\t\t\t\t\t<a href=\"https://teamsport.vn\" style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;color: #2BA6CB;\"><unsubscribe style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\">Unsubscribe</unsubscribe></a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t\t</div><!-- /content -->
\t\t\t\t
\t\t</td>
\t\t<td style=\"margin: 0;padding: 0;font-family: &quot;Helvetica Neue&quot;, &quot;Helvetica&quot;, Helvetica, Arial, sans-serif;\"></td>
\t</tr>
</table><!-- /FOOTER -->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Mail:reminder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 274,  293 => 273,  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 114,  276 => 113,  271 => 112,  265 => 109,  250 => 97,  223 => 91,  185 => 72,  181 => 70,  172 => 66,  155 => 58,  153 => 57,  146 => 56,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 94,  218 => 86,  211 => 85,  152 => 72,  148 => 71,  53 => 11,  242 => 96,  234 => 103,  232 => 93,  215 => 96,  206 => 94,  195 => 77,  190 => 89,  165 => 81,  160 => 79,  90 => 38,  81 => 23,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 85,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 81,  178 => 213,  174 => 212,  161 => 75,  137 => 53,  124 => 191,  110 => 186,  76 => 32,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 118,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 98,  247 => 96,  241 => 95,  229 => 92,  220 => 70,  214 => 87,  177 => 65,  169 => 79,  140 => 55,  132 => 52,  128 => 51,  107 => 47,  61 => 15,  273 => 258,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 69,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 20,  63 => 17,  59 => 15,  93 => 42,  88 => 27,  78 => 21,  28 => 3,  87 => 25,  46 => 7,  44 => 11,  94 => 28,  89 => 35,  85 => 35,  75 => 23,  68 => 18,  56 => 16,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 72,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 23,  49 => 9,  31 => 4,  38 => 5,  26 => 1,  24 => 3,  19 => 1,  79 => 23,  72 => 22,  69 => 16,  47 => 9,  40 => 5,  37 => 6,  22 => 1,  246 => 244,  157 => 74,  145 => 70,  139 => 69,  131 => 52,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 27,  74 => 19,  66 => 20,  55 => 10,  52 => 9,  50 => 10,  43 => 6,  41 => 7,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 79,  193 => 90,  189 => 71,  187 => 82,  182 => 87,  176 => 84,  173 => 65,  168 => 64,  164 => 76,  162 => 80,  154 => 73,  149 => 51,  147 => 72,  144 => 70,  141 => 48,  133 => 55,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 43,  106 => 36,  103 => 56,  99 => 33,  95 => 40,  92 => 39,  86 => 26,  82 => 34,  80 => 26,  73 => 19,  64 => 15,  60 => 14,  57 => 16,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 8,  33 => 4,  30 => 3,);
    }
}
