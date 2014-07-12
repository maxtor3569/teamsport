<?php

/* ::base.html.twig */
class __TwigTemplate_bb2f68f912e30216a3549a709bb9914b0d8f73518287807f9066e06445243905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets_include' => array($this, 'block_stylesheets_include'),
            'javascripts_top' => array($this, 'block_javascripts_top'),
            'javascript_top_include' => array($this, 'block_javascript_top_include'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "sidebar sidebar-social footer-sticky";
        }
        echo "-->
";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            $context["currentPath"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"));
        }
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "username"), "method"), "html", null, true);
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"ie lt-ie9 lt-ie8 lt-ie7 \"> <![endif]-->
<!--[if IE 7]>    <html class=\"ie lt-ie9 lt-ie8 \"> <![endif]-->
<!--[if IE 8]>    <html class=\"ie lt-ie9 \"> <![endif]-->
<!--[if gt IE 8]> <html class=\"ie \"> <![endif]-->
<!--[if !IE]><!-->
<html class=\"";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "sidebar sidebar-social footer-sticky";
        }
        echo "\">
<!-- <![endif]-->

    <head>
        <!-- Meta -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo " - TeamSport</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "        <!-- Stylesheets END -->
    ";
        // line 42
        $this->displayBlock('stylesheets_include', $context, $blocks);
        // line 43
        echo "

    ";
        // line 45
        $this->displayBlock('javascripts_top', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('javascript_top_include', $context, $blocks);
        // line 168
        echo "
</head>

    <body class=\"menu-right-hidden\">
        <!-- Main Container Fluid -->
        <div class=\"container-fluid menu-hidden \">
            ";
        // line 174
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "\t
                <!-- Main Sidebar Menu -->
                <div id=\"menu\" class=\"hidden-print hidden-xs sidebar-default sidebar-brand-primary\">
                    <div id=\"sidebar-social-wrapper\">
                        <div id=\"brandWrapper\">
                            <a href=\"/\">
                                <span class=\"text\">Teamsport</span>
                            </a>
                        </div>
                        <ul class=\"menu list-unstyled\" id=\"navigation_current_page\">
                            <li class=\"category\">Navigation</li>
                            <li class=\"hasSubmenu\">
                                <a href=\"";
            // line 186
            echo $this->env->getExtension('routing')->getPath("ListProfile");
            echo "\" ";
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/tim-nguoi-choi")) {
                echo " class=\"active\" ";
            }
            echo "title=\"Xem đăng ký hồ sơ cá nhân trong teamsport.vn\"><i class=\"icon-user-1\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Người Chơi"), "html", null, true);
            echo "</a>

                            </li>
                            <li class=\"hasSubmenu\">
                              
                                 <a href=\"#san-choi\" data-toggle=\"collapse\"><i class=\"icon-soccer-field\"></i>";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Sân Chơi"), "html", null, true);
            echo "</a>

                                 <ul id=\"san-choi\" class=\"collapse\">
\t                                 <li><a href=\"";
            // line 194
            echo $this->env->getExtension('routing')->getPath("ListPlace");
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Danh sách Sân Chơi"), "html", null, true);
            echo "</span></a>
\t                                 </li>
\t                                 <li><a href=\"";
            // line 196
            echo $this->env->getExtension('routing')->getPath("MapFields");
            echo "\"><span>Map</span></a>
\t                                 </li>
                                     
                                 </ul>

                            </li>
                            <li class=\"hasSubmenu\">
                                <a href=\"";
            // line 203
            echo $this->env->getExtension('routing')->getPath("ListEvent");
            echo "\" ";
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/tim-su-kien")) {
                echo "class=\"active\" ";
            }
            echo "  title=\"Tạo ra một sự kiện và mời bạn bè của bạn\"><i class=\"icon-trophy\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Sự Kiện"), "html", null, true);
            echo "</a>
                            </li>

                            <li class=\"hasSubmenu\">

                                <a href=\"";
            // line 208
            echo $this->env->getExtension('routing')->getPath("ListTeam");
            echo "\" ";
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/tim-doi")) {
                echo "class=\"active\" ";
            }
            echo " title=\"Tìm một nhóm hoặc tạo của bạn\"><i class=\"icon-group\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tìm Đội"), "html", null, true);
            echo "</a>

                            </li>
                            <li class=\"hasSubmenu\">
                                <a href=\"#sidebar-fusion-media\" data-toggle=\"collapse\"><i class=\"icon-group\"></i><span>";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quản lý đội của tôi"), "html", null, true);
            echo "</span></a>
                                ";
            // line 213
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "teams", array(), "any", true, true)) {
                // line 214
                echo "                                   
                                    <ul id=\"sidebar-fusion-media\" class=\"collapse\">
                                         ";
                // line 216
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "teams"));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 217
                    echo "                                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ViewTeam", array("name" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "alias"))), "html", null, true);
                    echo "\"><i class=\"icon-group\"></i><span>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name"), "html", null, true);
                    echo "</span></a>
                                            </li>
                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                                    </ul>
                                    
                                ";
            }
            // line 223
            echo "                            </li>
                            <li class=\"hasSubmenu\">

                                <a href=\"";
            // line 226
            echo $this->env->getExtension('routing')->getPath("DetailProfile");
            echo "\" ";
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "ho-so-cua-toi")) {
                echo "class=\"active\" data-toggle=\"collapse\"";
            }
            echo " ><i class=\"icon-user-1\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hồ Sơ Của Tôi"), "html", null, true);
            echo "</a>

                            </li>
                            <li>

                                <a href=\"";
            // line 231
            echo $this->env->getExtension('routing')->getPath("Message");
            echo "\"><i class=\"icon-comment-typing\"></i><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
            echo "</span></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- // Main Sidebar Menu END -->
                
                <!-- // Main Sidebar Right -->
                <div id=\"menu-right\">
                    ";
            // line 241
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SportimimiuserBundle:Page:baseRight"));
            echo "
                </div>
                <!-- // Main Sidebar Right END -->
            ";
        }
        // line 244
        echo "\t
            ";
        // line 245
        $context["url"] = "";
        // line 246
        echo "
            <!-- Start Header -->
            ";
        // line 248
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            echo "\t
                    <header id=\"header\" class=\"";
            // line 249
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "headerTopAction";
            }
            echo "\">

                        <div class=\"widget\">
                            <div class=\"row\"> 
                                <div class=\"col-md-9\" style=\"margin-left:20px\">
                                   

                                        <div id=\"logo\" class=\"col-md-4\">
                                            <h2 class=\"big\" style=\"display:none\">Sportimini</h2>
                                             <a href=\"/\" style=\"display: inline-block;\"><img src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl("images/logo_black.png"), "logo_top"), "html", null, true);
            echo "\" style=\"width:275px;\"/></a>\t\t\t\t\t\t\t\t
                                        </div>
                                        
                                        <ul class=\"nav navbar-nav main-menu\">

                                     \t<li>
                                        \t<a href=\"";
            // line 264
            echo $this->env->getExtension('routing')->getPath("MapCurrentlyPlay");
            echo "\">Tìm kiếm người chơi</a>
                                        </li>
                                        <li>
                                         \t<a href=\"";
            // line 267
            echo $this->env->getExtension('routing')->getPath("MapFields");
            echo "\">Tìm Sân Chơi</a>
                                        </li>
                                        
                                         <li>
                                         \t<a href=\"";
            // line 271
            echo $this->env->getExtension('routing')->getPath("AddProfile");
            echo "\">Đăng ký</a>
                                        </li>

                                        <li>
                                         \t<a href=\"";
            // line 275
            echo $this->env->getExtension('routing')->getPath("About");
            echo "\">Về chúng tôi</a>
                                        </li>
                                   
                                    
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t

                                   
                                     
                                </div>
                                <div class=\"col-md-2\">

                                    ";
            // line 287
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 288
                echo "                                    ";
            } else {
                // line 289
                echo "                                        <div class=\"login_bar\" style=\"padding:20px\">
                                            <a href=\"";
                // line 290
                echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
                echo "\" class=\"btn btn-primary btn-lg\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Đăng nhập"), "html", null, true);
                echo "</a>
                                        </div>
                                    ";
            }
            // line 293
            echo "                                </div>
                            </div>    
                        </div>


                    </header>
            ";
        }
        // line 299
        echo " 
            <!-- End Header -->

                ";
        // line 302
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 303
            echo "                    <section id=\"wrapper\">


                        <section class=\"main-col\">

                ";
        }
        // line 309
        echo "
                            
                        <!-- Content START -->
                        <div id=\"content\">

                            ";
        // line 314
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 315
            echo "                                <!-- Nav top bar START -->
                                <div class=\"navbar hidden-print navbar-default box main\" role=\"navigation\" ";
            // line 316
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/")) {
                echo " style=\"position:fixed;width:100%\"";
            }
            echo ">
                                    <div class=\"user-action user-action-btn-navbar pull-right border-left\">
                                        <a href=\"#menu-right\" class=\"btn btn-sm btn-navbar btn-open-right\"><i class=\"fa fa-comments fa-2x\"></i></a>
                                    </div>
                                    <div class=\"user-action user-action-btn-navbar pull-left\">
                                        <a href=\"#menu\" class=\"btn btn-sm btn-navbar btn-open-left\"><i class=\"fa fa-bars fa-2x\"></i></a>
                                    </div>
                                    <ul class=\"notifications pull-left hidden-xs\">
                                        <li class=\"dropdown notif\">
                                            <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onmouseover=\"setNotifsViewed()\"><i class=\"notif-block icon-earth\"></i>
                                                <!-- if there is a new notification -->
                                                ";
            // line 327
            $context["new"] = 0;
            // line 328
            echo "                                                ";
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "notifications", array(), "any", true, true)) {
                // line 329
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "notifications"));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 330
                    echo "                                                        ";
                    if (($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "viewed") == 0)) {
                        // line 331
                        echo "                                                            ";
                        $context["new"] = 1;
                        // line 332
                        echo "                                                        ";
                    }
                    // line 333
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                echo "                                                    ";
                if (((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")) == 0)) {
                    // line 335
                    echo "                                                         <span class=\"fa fa-star\" style=\"color:gray!important\"></span>
                                                    ";
                } else {
                    // line 337
                    echo "                                                        <span class=\"fa fa-star\">";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "notifications")), "html", null, true);
                    echo "</span>
                                                    ";
                }
                // line 339
                echo "                                                ";
            }
            // line 340
            echo "                                                    </a>
                                            <ul id=\"notifications\" class=\"dropdown-menu chat media-list\">
                                                ";
            // line 342
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "notifications", array(), "any", true, true)) {
                // line 343
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "notifications"), 0, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 344
                    echo "                                                        <li class=\"media\">
                                                            <!--
                                                            <a class=\"pull-left\" href=\"#\">
                                                                <img class=\"media-object thumb\" src=\"../assets/images/people/100/15.jpg\"
                                                                     alt=\"50x50\" width=\"50\" />
                                                            </a>
                                                            -->

                                                            <div class=\"media-body\">
                                                                <span class=\"label label-default pull-right\">";
                    // line 353
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "Diff"), "html", null, true);
                    echo "</span>
                                                                <h5 class=\"media-heading\"></h5>
                                                                <p class=\"margin-none\">";
                    // line 355
                    echo $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "message");
                    echo "</p>
                                                            </div>


                                                        </li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                echo "                                                ";
            }
            // line 362
            echo "                                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("NotificationViewAll");
            echo "\">xem tất cả</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class=\"user-action pull-left menu-right-hidden-xs menu-left-hidden-xs border-left\">
                                        <div class=\"dropdown username pull-left\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <span class=\"media margin-none\">
                                                    <span class=\"pull-left\">
                                                        ";
            // line 371
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "document", array(), "any", true, true)) {
                // line 372
                echo "
                                                            ";
                // line 373
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 374
                    echo "
                                                                ";
                    // line 375
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 376
                        echo "                                                                    ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 377
                        echo "                                                                ";
                    }
                    // line 378
                    echo "
                                                                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 380
                    echo "                                                                    ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 381
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 382
                echo "                                                        ";
            }
            // line 383
            echo "                                                                                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_25"), "html", null, true);
            echo "\" alt=\"user\"
                                                                                                 class=\"img-circle\">
                                                                                        </span>
                                                                                        <span class=\"media-body\">";
            // line 386
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "
                                                                                            <span class=\"caret\"></span>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                                <ul class=\"dropdown-menu\">
                                                                                    <li><a href=\"";
            // line 392
            echo $this->env->getExtension('routing')->getPath("DetailProfile");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hồ Sơ Của Tôi"), "html", null, true);
            echo "</a>
                                                                                    </li>
                                                                                    <li><a href=\"";
            // line 394
            echo $this->env->getExtension('routing')->getPath("Message");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
            echo "</a>
                                                                                    </li>
                                                                                    <li>
                                                                                        ";
            // line 397
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == "en")) {
                echo " 
                                                                                            <a href=\"";
                // line 398
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("_locale" => "vi"));
                echo "\" style=\"text-decoration:none\">
                                                                                                Vietnamese
                                                                                            </a>
                                                                                        ";
            } else {
                // line 402
                echo "                                                                                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), array("_locale" => "en"));
                echo "\" style=\"text-decoration:none\">
                                                                                                English
                                                                                            </a>

                                                                                        ";
            }
            // line 407
            echo "                                                                                    </li>
                                                                                    <li><a href=\"";
            // line 408
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thoát"), "html", null, true);
            echo "</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                    </div>
                                    <!--<div class=\"input-group hidden-xs pull-left\">
                                        <span class=\"input-group-addon\"><i class=\"icon-search\"></i>
                                        </span>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search a friend\" />
                                    </div>-->
                                </div>
                            ";
        }
        // line 420
        echo "                            ";
        if ((($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") && ((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) != "/map/fields")) && ((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) != "/map/nguoi-dang-choi"))) {
            echo " 
                                <div class=\"innerAll\">
                            ";
        }
        // line 423
        echo "                            
                                ";
        // line 424
        $this->displayBlock('body', $context, $blocks);
        // line 425
        echo "                                
                            ";
        // line 426
        if ((($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") && ((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) != "/map/fields")) && ((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) != "/map/nguoi-dang-choi"))) {
            echo " 
                                </div>
                            ";
        }
        // line 429
        echo "                        </div>
                        <!-- Content END -->

                ";
        // line 432
        if ((!$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED"))) {
            // line 433
            echo "                            </section>


                    </section>

                ";
        }
        // line 439
        echo "                <div class=\"clearfix\"></div>
                <!-- Footer -->

                <div id=\"footer\" class=\"hidden-print\">
                    <!--  Copyright Line -->
                    <div class=\"copy\">&copy; 2014 - <a href=\"http://www.teamsport.vn\">Teamsport</a> -
                        All Rights Reserved. - <a href=\"http://www.teamsport.vn\">Privacy Policy</a>
                    </div>
                    <!--  End Copyright Line -->
                </div>
                <!-- // Footer END -->\t

        </div>
        <!-- Global -->
        <script data-id=\"App.Config\">
            var App = {};
            var basePath = '',
                    commonPath = '../assets/',
                    rootPath = '../',
                    DEV = false,
                    componentsPath = '../assets/components/';
            var primaryColor = '#25ad9f',
                    dangerColor = '#b55151',
                    successColor = '#609450',
                    infoColor = '#4a8bc2',
                    warningColor = '#ab7a4b',
                    inverseColor = '#45484d';
            var themerPrimaryColor = primaryColor;
        </script>
        <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/menus/sidr/jquery.sidr.js?v=v1.0.1-rc2"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/holder/holder.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "../\"></script>
        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/gallery/gridalicious/assets/lib/jquery.gridalicious.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/maps/google/assets/custom/maps-google.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <!--<script src=\"http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initGoogleMaps\"></script>-->
        <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/modals/assets/js/bootbox.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/core/js/sidebar.main.init.js?v=v1.0.1-rc2"), "html", null, true);
        echo "../\"></script>
        <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/core/js/sidebar.collapse.init.js?v=v1.0.1-rc2"), "html", null, true);
        echo "../\"></script>
        <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/menus/menus.sidebar.chat.init.js?v=v1.0.1-rc2"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/mixitup/jquery.mixitup.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/mixitup/mixitup.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/core/js/core.init.js?v=v1.0.1-rc2"), "html", null, true);
        echo "../\"></script>
        <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/wizards/assets/lib/jquery.bootstrap.wizard.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/form-wizard-validator-inviteToPlay.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/modals/assets/js/modals.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/select2/assets/lib/js/select2.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/bootstrap-timepicker/assets/lib/js/bootstrap-timepicker.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/common/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>    
        <!-- Script de fin -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-43054347-1', 'teamsport.vn');
            ga('send', 'pageview');

        </script>
        ";
        // line 509
        $this->displayBlock('javascripts', $context, $blocks);
        // line 510
        echo "        <!-- End Script de fin -->
    </body>
</html>";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "

            <link href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css\" type=\"text/css\" rel=\"stylesheet\" />

            <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>              
            <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/admin/module.admin.stylesheet-complete.min.css"), "html", null, true);
        echo "\" />

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
                    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->

            <link rel=\"shortcut icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
    }

    // line 42
    public function block_stylesheets_include($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts_top($context, array $blocks = array())
    {
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/library/jquery/jquery.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/library/modernizr/modernizr.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/less-js/less.min.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/infinite-scroll/assets/lib/jquery.jscroll.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/notifications/notyfy/assets/lib/js/jquery.notyfy.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>
        <!--
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js\"></script>
            <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        -->
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/detectAndroid.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "\t
           
            <script>

                    function callComplete(response) {
                    \t//alert(\"Response received is: \"+response);
\t\t\t\t\t\tif (response != null)
                        {
                            jQuery('#notifs').html(response.content);
\t\t\t\t\t\t\tjQuery(\"#numberNotif\").val(response.number);
\t\t\t\t\t\t}
                    }
                    
                    function usersOnline(){
                        \$.getJSON('";
            // line 77
            echo $this->env->getExtension('routing')->getPath("UsersOnline");
            echo "', '', function (data, textStatus){
                            
                           if (jQuery('#chat-conversation').attr('class') == 'tab-pane')
                           {
                                \$('#menu-right').html(data['html']);
                                
                            }
                        });
                        \$.post('";
            // line 85
            echo $this->env->getExtension('routing')->getPath("PullNotifications");
            echo "', { },callComplete, 'json');
                      }    
                    \$(document).ready( function() {
                        //get user online
                       var refreshInterval = setInterval(usersOnline, 10 * 1000);   
                      
                    });
                     // chat send message
                     
                        \$('#sendMessage').live(\"keyup\",function(e) 
                        {
                            if (event.keyCode == 13){
                                 var contentPosted = jQuery(this).val();
                                 var idProfile =jQuery(this).attr('data-profile_recieve');
                                 \$.ajax({
                                    type: \"POST\",
                                    data: {message: contentPosted, profile_recieve: idProfile},
                                    dataType: 'text',
                                    url: \"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("SendMessage");
            echo "\",
                                    cache: false,
                                    success: function(data) {
                                        \$('#sendMessage').val('');
                                     
                                    }
                                });
                            }
                        });
            </script>
           
        ";
        }
        // line 115
        echo "        <script>
            function acceptFriend(idInvit)
            {

                \$.ajax({
                    type: \"POST\",
                    data: {id: idInvit},
                    dataType: 'text',
                    url: \"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("AcceptFriend");
        echo "\",
                    cache: false,
                    success: function(data) {
                        alert('Invitation accepted');
                        window.location.reload();
                    }
                });
            }

            function setNotifsViewed() {

                \$.ajax({
                    type: \"POST\",
                    dataType: 'text',
                    url: \"";
        // line 137
        echo $this->env->getExtension('routing')->getPath("NotificationViewed");
        echo "\",
                    cache: false,
                    success: function(data) {
                    }
                });


            }
            
            function dynamicLoadMessage(id_profile_select)
            {
                 \$.ajax({
                type: \"POST\",
                data: {
                    id_profile_select:id_profile_select
                },
                dataType: 'html',
                //url: \"ajax/loadNews.php\",
                url: Routing.generate('DynamicMessageChat'),
                cache: false,
                success: function(data) {
                    jQuery('#messages').html(data);

                }
            });
                
            }
        </script>
    ";
    }

    // line 167
    public function block_javascript_top_include($context, array $blocks = array())
    {
    }

    // line 424
    public function block_body($context, array $blocks = array())
    {
    }

    // line 509
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  499 => 377,  496 => 376,  491 => 374,  486 => 373,  483 => 372,  468 => 362,  465 => 361,  453 => 355,  448 => 353,  437 => 344,  432 => 343,  430 => 342,  426 => 340,  423 => 339,  417 => 337,  413 => 335,  410 => 334,  404 => 333,  401 => 332,  398 => 331,  395 => 330,  390 => 329,  387 => 328,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  322 => 289,  319 => 288,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 264,  273 => 258,  259 => 249,  255 => 248,  251 => 246,  249 => 245,  246 => 244,  239 => 241,  224 => 231,  210 => 226,  205 => 223,  200 => 220,  188 => 217,  184 => 216,  180 => 214,  178 => 213,  174 => 212,  161 => 208,  147 => 203,  137 => 196,  130 => 194,  124 => 191,  110 => 186,  95 => 174,  87 => 168,  85 => 167,  82 => 166,  80 => 45,  76 => 43,  61 => 20,  48 => 12,  38 => 5,  35 => 3,  33 => 2,  26 => 1,  74 => 42,  71 => 41,  66 => 20,  60 => 15,  51 => 12,  46 => 11,  41 => 10,  39 => 9,  36 => 8,  30 => 6,  505 => 384,  502 => 378,  497 => 380,  494 => 375,  492 => 378,  488 => 377,  484 => 375,  481 => 371,  479 => 373,  473 => 370,  434 => 336,  427 => 334,  420 => 332,  402 => 318,  399 => 317,  396 => 316,  355 => 277,  338 => 263,  325 => 290,  267 => 203,  243 => 182,  194 => 136,  165 => 110,  102 => 50,  81 => 32,  69 => 25,  63 => 17,  58 => 18,  56 => 17,  50 => 13,  47 => 12,  40 => 7,  37 => 6,  31 => 4,);
    }
}
