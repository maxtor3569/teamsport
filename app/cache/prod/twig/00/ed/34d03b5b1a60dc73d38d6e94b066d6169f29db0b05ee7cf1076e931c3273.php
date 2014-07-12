<?php

/* SportimimiuserBundle:Events:detailEvent.html.twig */
class __TwigTemplate_00ed34d03b5b1a60dc73d38d6e94b066d6169f29db0b05ee7cf1076e931c3273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SportimimiuserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets_include' => array($this, 'block_stylesheets_include'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Sự Kiện ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
    }

    // line 5
    public function block_stylesheets_include($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
    <div class=\"innerLR spacing-x2\">
        <h3>Events</h3>
        <!-- Row -->
        <div class=\"row\">
            <!-- Col -->
            <div class=\"col-md-6 col-lg-6\">
                <!-- Widget -->
                <div class=\"widget\">
                    <h4 class=\"innerAll half margin-none border-bottom\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
        echo "</h4>

                    <hr class=\"margin-none\" />
                </div>
                <!-- End Widget -->
                <!-- widget -->
                <div class=\" widget media innerAll half\" style=\"display:none\">
                    <div class=\"pull-left innerT\">
                        <img data-src=\"holder.js/50x50/dark\" alt=\"\" class=\"img-responsive img-circle\" />
                    </div>
                    <div class=\"media-body\">
                        <div class=\"pull-right innerAll half\">
                            <div class=\"btn-group-vertical btn-group-sm\">
                                <a href=\"#\" class=\"btn btn-inverse\">Follow</a>
                                <a href=\"#\" class=\"btn btn-default margin-none\">Contact</a>
                            </div>
                        </div>
                        <div class=\"innerAll half media  margin-none\">
                            <div class=\"pull-left innerAll half\">
                                <p class=\"strong margin-none\">Company, Inc</p>
                                <p>Official Organizer</p>
                            </div>
                            <div class=\"media-body border-left innerLR\">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dicta, odio id
                                cumque voluptates debitis asperiores. Dolorum,
                                quod, cupiditate.
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <!-- End Col -->
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <!-- Widget -->
                <div class=\"widget\">
                    <h4 class=\"bg-primary innerAll half border-bottom margin-none text-white\">Event</h4>
                    <div class=\"innerAll half bg-primary border-bottom\">
                        <div class=\"media innerAll half margin-none text-white\">
                            <div class=\"pull-left\">
                                <i class=\"fa fa-fw fa-calendar fa-3x \"></i>
                            </div>
                            <div class=\"media-body\">
                                <p class=\"strong lead margin-none\">";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "dateEventStart"), "d/m/Y"), "html", null, true);
        echo "</p>
                                <p class=\"strong margin-none\">1:00 - 5:00 pm</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"innerAll half bg-gray border-bottom\">
                        <div class=\"media innerAll half margin-none\">
                            <div class=\"pull-left\">
                                <i class=\"fa fa-fw fa-map-marker fa-3x\"></i>
                            </div>
                            <div class=\"media-body\">
                                <p class=\"strong lead margin-none\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "location"), "html", null, true);
        echo "</p>
                                <p class=\"strong margin-none\"></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"innerAll text-center half\">
                        <div class=\"btn-group\">
                            <button class=\"btn btn-success\"><i class=\"fa fa-fw fa-check\"></i> Attend</button>
                            <button class=\"btn btn-default\">I might go</button>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <!-- Widget -->
                <div class=\"widget\">
                    <h4 class=\"border-bottom margin-none innerAll half\">Friends</h4>
                    <div class=\"border-bottom\">
                        <div class=\"innerAll half\">
                            <span class=\"badge bg-primary pull-right\">";
        // line 93
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "profile")), "html", null, true);
        echo "</span>Attending
                        </div>
                    </div>

                    <div class=\"innerAll half text-center\">
                        <a href=\"#\" class=\"border-none\" data-toggle=\"image-preview\" data-title=\"Lorem ipsum\"
                           data-image-preview=\"../assets/images/people/250/1.jpg\"
                           width=\"100\" href=\"#\" class=\"pull-left border-none\">
                            <img src=\"../assets/images/people/80/1.jpg\" alt=\"photo\" width=\"35\" class=\"innerB half\"></img>
                        </a>

                    </div>
                    <!-- End Widget -->
                </div>


            </div>
            <!-- End Col -->
        </div>
        <!-- Col -->

        <!--  End Row -->
    </div>
    <!-- End Inner -->
</div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Events:detailEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 93,  128 => 75,  114 => 64,  68 => 21,  57 => 12,  54 => 11,  49 => 9,  46 => 8,  41 => 6,  38 => 5,  31 => 4,);
    }
}
