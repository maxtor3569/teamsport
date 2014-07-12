<?php

/* SportimimiuserBundle:Page:changeImageProfile.html.twig */
class __TwigTemplate_fd8c70ee5c7f9d442d05637ed02153a3802c445126ba0b8c9e611309b1392afd extends Twig_Template
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
        echo "<!-- Form Modal 3 -->

<!-- Modal -->
<div class=\"modal fade\" id=\"modal-changeImageProfile\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <!-- Modal body -->
            <div class=\"modal-body padding-none\">
                <!-- Form Wizard / Widget Pills -->
                <div class=\"wizard\">
                    <div class=\"widget margin-none border-none widget-tabs widget-wizard-pills widget-tabs-responsive\">
                        <!-- Widget heading -->
                        <div class=\"widget-head bg-gray\">
                            <ul>
                                <li class=\"status\">
                                    <span class=\"r\">Step
                                        <span class=\"step-current\">2</span> of
                                        <span
                                            class=\"steps-total\">5</span>
                                    </span>
                                    <span class=\"r text-primary\">Completed:
                                        <span class=\"steps-complete\">1</span>
                                    </span>
                                </li>
                              
                                
                            </ul>
                        </div>
                        <!-- // Widget heading END -->
                        <div class=\"widget-body innerAll inner-2x\">
                            <div class=\"tab-content\">
                                <!-- Step 1 -->
                                <div class=\"tab-pane active\" id=\"tab1-3\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Khi nào bạn muốn chơi?"), "html", null, true);
        echo "</strong>

                                        </div>
                                        <div class=\"col-md-9\">
                                           
                                            <div class=\"input-group date\" id=\"datepicker3\">
                                                 <input id=\"timePlay\" class=\"col-md-6 form-control\" type=\"text\" placeholder=\"Select date...\" />
                                                <span class=\"input-group-addon\"><i class=\"fa fa-th\"></i>
                                                </span>
                                            </div>
                                            <div class=\"separator\"></div>
                                        </div>
                                    </div>
                                </div>
                              
                                
                            </div>
                            <!-- Wizard pagination controls -->
                           
                            <ul class=\"pagination margin-bottom-none pull-right\">
                                <li class=\"primary previous\"><a href=\"#\" class=\"no-ajaxify\">Previous</a>
                                </li>
                                <li class=\"next primary\"><a href=\"#\" class=\"no-ajaxify\">Next</a>
                                </li>
                                <li class=\"next finish primary\" style=\"display:none;\"><a href=\"#\" class=\"no-ajaxify\">Finish</a>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                            <!-- // Wizard pagination controls END -->
                        </div>
                    </div>
                </div>
                <!-- // Form Wizard / Widget Pills END -->
            </div>
            <!-- // Modal body END -->
        </div>
    </div>
</div>
<!-- // Modal END -->";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:changeImageProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 36,  19 => 1,  434 => 239,  425 => 236,  420 => 235,  417 => 234,  411 => 233,  408 => 232,  402 => 230,  399 => 229,  396 => 228,  394 => 227,  391 => 226,  386 => 225,  383 => 224,  380 => 223,  375 => 222,  373 => 221,  367 => 218,  362 => 215,  355 => 211,  338 => 196,  335 => 195,  325 => 191,  322 => 190,  318 => 189,  308 => 181,  297 => 173,  292 => 171,  281 => 162,  279 => 161,  265 => 150,  257 => 147,  252 => 144,  234 => 130,  229 => 127,  227 => 126,  223 => 125,  220 => 124,  217 => 123,  211 => 122,  208 => 121,  202 => 119,  199 => 118,  196 => 117,  194 => 116,  191 => 115,  186 => 114,  183 => 113,  181 => 112,  172 => 105,  169 => 104,  166 => 103,  163 => 102,  160 => 101,  157 => 100,  151 => 98,  101 => 52,  83 => 37,  75 => 32,  59 => 19,  45 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
