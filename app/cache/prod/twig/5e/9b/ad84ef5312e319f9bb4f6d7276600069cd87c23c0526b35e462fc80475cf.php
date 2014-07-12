<?php

/* SportimimiuserBundle:Notification:pullNotification.html.twig */
class __TwigTemplate_5e9bad84ef5312e319f9bb4f6d7276600069cd87c23c0526b35e462fc80475cf extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 2
            echo "<li class=\"media\">
   <!--
      <a class=\"pull-left\" href=\"#\">
          <img class=\"media-object thumb\" src=\"../assets/images/people/100/15.jpg\"
               alt=\"50x50\" width=\"50\" />
      </a>
      -->
   <div class=\"media-body\">
      <span class=\"label label-default pull-right\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "Diff"), "html", null, true);
            echo "</span>
      <h5 class=\"media-heading\"></h5>
      <p class=\"margin-none\">";
            // line 12
            echo $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "message");
            echo "</p>
   </div>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Notification:pullNotification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  33 => 10,  23 => 2,  19 => 1,);
    }
}
