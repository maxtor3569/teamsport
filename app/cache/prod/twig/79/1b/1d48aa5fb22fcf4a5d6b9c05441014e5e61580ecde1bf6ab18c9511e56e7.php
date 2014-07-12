<?php

/* SportimimiuserBundle::layout.html.twig */
class __TwigTemplate_791b1d48aa5fb22fcf4a5d6b9c05441014e5e61580ecde1bf6ab18c9511e56e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        // line 10
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
  ";
        // line 17
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo " 
";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo " 
  ";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  71 => 17,  66 => 20,  60 => 15,  51 => 12,  46 => 11,  41 => 10,  39 => 9,  36 => 8,  30 => 6,  505 => 384,  502 => 383,  497 => 380,  494 => 379,  492 => 378,  488 => 377,  484 => 375,  481 => 374,  479 => 373,  473 => 370,  434 => 336,  427 => 334,  420 => 332,  402 => 318,  399 => 317,  396 => 316,  355 => 277,  338 => 263,  325 => 258,  267 => 203,  243 => 182,  194 => 136,  165 => 110,  102 => 50,  81 => 32,  69 => 22,  63 => 17,  58 => 18,  56 => 17,  50 => 13,  47 => 12,  40 => 7,  37 => 6,  31 => 4,);
    }
}
