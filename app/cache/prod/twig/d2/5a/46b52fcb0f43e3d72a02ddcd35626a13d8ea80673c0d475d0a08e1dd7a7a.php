<?php

/* SportimimiuserBundle:Message:index.html.twig */
class __TwigTemplate_d25a46b52fcb0f43e3d72a02ddcd35626a13d8ea80673c0d475d0a08e1dd7a7a extends Twig_Template
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

    // line 3
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        .message {cursor:pointer}
        
    </style>
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    <script>
    \$(document).ready(function(){
      \$('#filter_message').on('input', function() {
        \$('.messageContent').parents('li').hide() // hide all the selected elements
                .filter(':contains(\"' + \$('#filter_message').val()  + '\")')
                .show(); // show the filtered elements
      }); 
    }); 
    \$(\".message\").click(function(){
        var id_message = jQuery(this).attr('data-id');
        jQuery('#answerMessage').attr('data-idMessage',id_message);
        jQuery(this).attr('class','border-bottom bg-primary active');
         \$.ajax({
            type: \"POST\",
            data: {
                id:id_message
            },
            dataType: 'html',
            //url: \"ajax/loadNews.php\",
            url: Routing.generate('LoadReply'),
            cache: false,
            success: function(data) {
                jQuery('#replyBlock').html(data);
            }
        });
    });
    \$('#answerMessage').live(\"keyup\",function(e) 
    {
        if (event.keyCode == 13){
             var contentPosted = jQuery(this).val();
             var idMessage =jQuery(this).attr('data-idMessage');
             \$.ajax({
                type: \"POST\",
                data: {message_content: contentPosted, id: idMessage},
                dataType: 'text',
                url: \"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ReplyMessage");
        echo "\",
                cache: false,
                success: function(data) {
                    \$('#answerMessage').val('');
                    window.location.reload();
                }
            });
        }
    });
</script>
  
";
    }

    // line 57
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "<div class=\"innerAll\">
        <!-- Widget -->
        <div class=\"widget widget-messages widget-heading-simple widget-body-white\">
            <div class=\"widget-body padding-none margin-none\">
                <div class=\"row row-merge borders\">
                    <div class=\"col-md-3 listWrapper\">
                        <div class=\"innerAll\">
                            <form autocomplete=\"off\" class=\"form-inline margin-none\">
                                <div class=\"input-group input-group-sm\">
                                    <input id=\"filter_message\" type=\"text\" class=\"form-control\" placeholder=\"Find messages ..\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-primary btn-xs pull-right\"><i class=\"fa fa-search\"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class=\"bg-gray text-center strong border-top innerAll half\">";
        // line 77
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
        echo " <i class=\"fa fa-circle-arrow-down\"></i>
                        </div>
                       
                        <ul class=\"list-unstyled\">
                           ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "                            <li class=\"border-bottom message\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"), "html", null, true);
            echo "\">
                                <div class=\"media innerAll\">
                                    <div class=\"media-object pull-left hidden-phone\">
                                        ";
            // line 85
            $context["profilePrint"] = $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "profile_send");
            // line 86
            echo "                                        ";
            if (($this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "profile_send") == (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
                // line 87
                echo "                                            ";
                $context["profilePrint"] = $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "profile_recieve");
                // line 88
                echo "                                        ";
            }
            // line 89
            echo "                                             
                                        ";
            // line 90
            if ($this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : null), "document", array(), "any", true, true)) {
                // line 91
                echo "
                                            ";
                // line 92
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : $this->getContext($context, "profilePrint")), "document"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 93
                    echo "
                                                ";
                    // line 94
                    if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                        // line 95
                        echo "                                                        ";
                        $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                        // line 96
                        echo "                                                ";
                    }
                    // line 97
                    echo "
                                                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 99
                    echo "                                                        ";
                    $context["url"] = "img_profile_default.jpg";
                    // line 100
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                        ";
            }
            // line 102
            echo "                                        <a href=\"\">
                                            <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
            echo "\" alt=\"Image\" />
                                        </a>
                                    </div>
                                    <div class=\"media-body\">
                                        <div>
                                            <span class=\"strong\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : $this->getContext($context, "profilePrint")), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profilePrint"]) ? $context["profilePrint"] : $this->getContext($context, "profilePrint")), "nom"), "html", null, true);
            echo "</span>
                                            <small class=\"text-italic pull-right label label-default\">2 days</small>
                                        </div>
                                        <div class=\"messageContent\">";
            // line 111
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute(twig_last($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message_reply")), "content"), 0, 20) . "..."), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </ul>
                    </div>
                    <div class=\"col-md-9 detailsWrapper\">
                        <!-- User -->
                        <div class=\"bg-primary\">
                            <div class=\"media\">
                                 ";
        // line 122
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "document", array(), "any", true, true)) {
            // line 123
            echo "
                                            ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 125
                echo "
                                                ";
                // line 126
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 127
                    echo "                                                        ";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 128
                    echo "                                                ";
                }
                // line 129
                echo "
                                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 131
                echo "                                                        ";
                $context["url"] = "img_profile_default.jpg";
                // line 132
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                                    ";
        }
        // line 134
        echo "                                <a href=\"\" class=\"pull-left\">
                                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
        echo "\" width=\"65\" class=\"media-object\">
                                </a>
                                <div class=\"media-body innerTB innerR\">
                                    <div class=\"innerT half pull-right\">
                                        
                                        <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("SendMessage");
        echo "\" class=\"btn btn-default bg-white btn-sm\">
                                            <i class=\"fa fa-pencil\"></i> Tin nhắn mới
                                        </a>
                                    </div>
                                    <h4 href=\"\" class=\"text-white pull-left innerAll strong display-block margin-none\">";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo " </h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-gray innerAll text-center margin-none\"><a href=\"\" class=\"text-muted lead\"><i class=\"icon-time-clock\"></i> View Archive</a>
                        </div>
                        <div id=\"type\" class=\"collapse in border-top\">
                            <textarea id=\"answerMessage\" data-idMessage =\"\" type=\"text\" class=\"form-control rounded-none border-none\" placeholder=\"Viết tin nhắn...\"></textarea>
                        </div>
                        
    <div id=\"replyBlock\" class=\"widget border-top padding-none margin-none\">

                             
                           

    </div>
    
</div>    
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 144,  287 => 140,  279 => 135,  276 => 134,  273 => 133,  267 => 132,  264 => 131,  258 => 129,  255 => 128,  252 => 127,  250 => 126,  247 => 125,  242 => 124,  239 => 123,  237 => 122,  229 => 116,  218 => 111,  210 => 108,  202 => 103,  199 => 102,  196 => 101,  190 => 100,  187 => 99,  181 => 97,  178 => 96,  175 => 95,  173 => 94,  170 => 93,  165 => 92,  162 => 91,  160 => 90,  157 => 89,  154 => 88,  151 => 87,  148 => 86,  146 => 85,  139 => 82,  135 => 81,  126 => 77,  107 => 60,  104 => 59,  98 => 57,  82 => 45,  45 => 10,  42 => 9,  34 => 4,  31 => 3,);
    }
}
