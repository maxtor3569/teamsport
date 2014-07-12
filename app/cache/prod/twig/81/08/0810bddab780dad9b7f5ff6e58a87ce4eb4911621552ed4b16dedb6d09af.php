<?php

/* SportimimiuserBundle:Page:basepart_right.html.twig */
class __TwigTemplate_81080810bddab780dad9b7f5ff6e58a87ce4eb4911621552ed4b16dedb6d09af extends Twig_Template
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
<div>
    <button class=\"btn btn-inverse btn-xs btn-close\" data-toggle=\"sidr-close\" data-menu=\"menu-right\"><i class=\"fa fa-times\"></i>
    </button>
    <div class=\"tab-content\">
        <div class=\"tab-pane\" id=\"chat-conversation\">
            <ul>
                <li>
                    <div class=\"innerAll\">
                        <button class=\"btn btn-primary\" data-toggle=\"tab\"
                                data-target=\"#chat-list\"><i class=\"fa fa-fw fa-user\"></i> friends</button>
                    </div>
                </li>      
                <li id=\"messages\" class=\"conversation innerAll\">
                   ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SportimimiuserBundle:Page:baseMessage"));
        echo "  
                   
                </li>
            </ul>
        </div>
        <div class=\"tab-pane active\" id=\"chat-list\">
            <div class=\"mixitup\" id=\"mixitup-chat\" data-show-default=\"mixit-chat-1\" data-layout-mode=\"list\"
                 data-target-selector=\".mix\" data-filter-selector=\".filter-chat\">
                <ul>

                    <li class=\"category border-bottom\">Online</li>

                    <li>
                        ";
        // line 28
        if (array_key_exists("profileOnline", $context)) {
            // line 29
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profileOnline"]) ? $context["profileOnline"] : $this->getContext($context, "profileOnline")));
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 30
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id") != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                    // line 31
                    echo "                                <div class=\"mixit-chat-1 mix media border-bottom innerAll margin-none\" style=\"display: block; opacity: 1;\">
                                    ";
                    // line 32
                    $context["url"] = "";
                    // line 33
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                        // line 34
                        echo "                                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "document"));
                        $context['_iterated'] = false;
                        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                            // line 35
                            echo "
                                        ";
                            // line 36
                            if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                                // line 37
                                echo "                                            ";
                                $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                                // line 38
                                echo "                                        ";
                            }
                            // line 39
                            echo "
                                        ";
                            $context['_iterated'] = true;
                        }
                        if (!$context['_iterated']) {
                            // line 41
                            echo "                                            ";
                            $context["url"] = "img_profile_default.jpg";
                            // line 42
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "                                    ";
                    }
                    // line 44
                    echo "                                <a href=\"#chat-conversation\" onclick=\"dynamicLoadMessage(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id"), "html", null, true);
                    echo ");\" data-toggle=\"tab\" class=\"pull-left media-object\">
                                    <img src=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_25"), "html", null, true);
                    echo "\"
                                         class=\"img-circle\" />
                                </a>
                                <div class=\"media-body\">
                                    <a href=\"#chat-conversation\" onclick=\"dynamicLoadMessage(";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id"), "html", null, true);
                    echo ");\" data-toggle=\"tab\" class=\"pull-right text-muted innerT half\">
                                        <i class=\"fa fa-comments\"></i> 4
                                    </a>
                                    <h5 class=\"margin-none\"><a href=\"#chat-conversation\" onclick=\"dynamicLoadMessage(";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "id"), "html", null, true);
                    echo ");\" data-toggle=\"tab\"
                                                               class=\"text-white\">";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "nom"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "profile"), "prenom"), "html", null, true);
                    echo "</a>
                                    </h5>
                                    <small></small>
                                </div>
                            </div>
                            ";
                }
                // line 59
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                        ";
        }
        // line 61
        echo "                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:basepart_right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 61,  143 => 60,  137 => 59,  126 => 53,  122 => 52,  116 => 49,  109 => 45,  104 => 44,  101 => 43,  95 => 42,  92 => 41,  86 => 39,  83 => 38,  80 => 37,  78 => 36,  75 => 35,  69 => 34,  66 => 33,  64 => 32,  61 => 31,  58 => 30,  53 => 29,  51 => 28,  35 => 15,  19 => 1,);
    }
}
