<?php

/* SportimimiuserBundle:Page:chat_message.html.twig */
class __TwigTemplate_5631ec1958ba979741f5fc9dc336004c5260dd34c21e890b1c72f6e631cdb2b2 extends Twig_Template
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
        if (((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")) != null)) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "message_reply"));
            foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                // line 3
                echo "        ";
                $context["url"] = "";
                // line 4
                echo "        ";
                if ($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
                    // line 5
                    echo "        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "document"));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 6
                        echo "
            ";
                        // line 7
                        if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                            // line 8
                            echo "                ";
                            $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                            // line 9
                            echo "            ";
                        }
                        // line 10
                        echo "
            ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 12
                        echo "                ";
                        $context["url"] = "img_profile_default.jpg";
                        // line 13
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "    <div class=\"media ";
                if (($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "id") != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
                    echo "primary right";
                }
                echo "\">
        <small class=\"author\"><a href=\"#\" title=\"\" class=\"strong\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "nom"), "html", null, true);
                echo "</a>
        </small>
        <div class=\"media-object pull-left\">
            <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
                echo "\"
                 alt=\"Image\" class=\"img-circle\" />
        </div>
        <div class=\"media-body\">
            <blockquote>
                <small class=\"date\">
                    <cite>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "created"), "m/d/Y"), "html", null, true);
                echo "</cite>
                </small>
                <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "content"), "html", null, true);
                echo "</p>
            </blockquote>
        </div>
    </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 34
        echo "<div>
    <textarea id=\"sendMessage\" data-profile_recieve=\"";
        // line 35
        if (((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : $this->getContext($context, "conversation")), "profile_recieve"), "id"), "html", null, true);
        }
        echo "\" class=\"form-control\" placeholder=\"Viết tin nhắn của bạn ở đây...\"></textarea>
</div>";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:chat_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  96 => 27,  91 => 25,  82 => 19,  74 => 16,  67 => 15,  55 => 12,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  32 => 5,  29 => 4,  26 => 3,  21 => 2,  146 => 61,  143 => 60,  137 => 59,  126 => 53,  122 => 52,  116 => 49,  109 => 34,  104 => 44,  101 => 43,  95 => 42,  92 => 41,  86 => 39,  83 => 38,  80 => 37,  78 => 36,  75 => 35,  69 => 34,  66 => 33,  64 => 14,  61 => 31,  58 => 13,  53 => 29,  51 => 28,  35 => 15,  19 => 1,);
    }
}
