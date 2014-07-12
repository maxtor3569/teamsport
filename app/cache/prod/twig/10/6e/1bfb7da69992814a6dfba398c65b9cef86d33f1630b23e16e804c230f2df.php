<?php

/* SportimimiuserBundle:Comment:renderOneComment.html.twig */
class __TwigTemplate_106e1bfb7da69992814a6dfba398c65b9cef86d33f1630b23e16e804c230f2df extends Twig_Template
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
        $context["url"] = "";
        // line 2
        echo "<div id =\"comment";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
        echo "\"class=\"media border-top margin-none bg-gray\" >
   ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "profile", array(), "any", false, true), "document", array(), "any", true, true)) {
            // line 4
            echo "   \t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "document"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 5
                echo "   \t\t\t";
                if (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "type") == "image")) {
                    // line 6
                    echo "   \t\t\t\t";
                    $context["url"] = (($this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "id") . ".") . $this->getAttribute((isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "url"));
                    // line 7
                    echo "   \t\t\t";
                }
                // line 8
                echo "   \t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 9
                echo "   \t\t\t\t";
                $context["url"] = "img_profile_default.jpg";
                // line 10
                echo "   \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "   ";
        }
        // line 12
        echo "   
   <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id"))), "html", null, true);
        echo "\" class=\"pull-left innerAll\">
   <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl(("uploads/img/" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "my_thumb_60"), "html", null, true);
        echo "\"
      width=\"50\" class=\"media-object\">
   </a>
   <div class=\"media-body innerTB\">
      ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) {
            // line 19
            echo "      <a href=\"#\" data-reactid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo "\" class=\"pull-right innerT innerR text-muted deleteCommentAction\">
      <i class=\"icon-circle-delete fa fa-2x \"></i>
      </a>
      ";
        }
        // line 22
        echo "      
      <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("DetailProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "id"))), "html", null, true);
        echo "\" class=\"strong text-inverse\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "profile"), "prenom"), "html", null, true);
        echo "</a> 
      <small class=\"text-muted \">wrote on Jan 15th, 2014</small>
      <div>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
        echo "</div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Comment:renderOneComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  87 => 23,  84 => 22,  76 => 19,  74 => 18,  67 => 14,  63 => 13,  60 => 12,  57 => 11,  51 => 10,  48 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
