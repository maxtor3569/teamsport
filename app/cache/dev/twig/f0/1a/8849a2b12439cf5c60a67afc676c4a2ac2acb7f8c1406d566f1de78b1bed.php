<?php

/* SportimimiuserBundle:Message:new-message.html.twig */
class __TwigTemplate_f01a8849a2b12439cf5c60a67afc676c4a2ac2acb7f8c1406d566f1de78b1bed extends Twig_Template
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
        echo "
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/components/modules/admin/notifications/notyfy/assets/custom/js/notyfy.init.js?v=v1.0.1-rc2&sv=v0.0.1.1"), "html", null, true);
        echo "\"></script>   
<script> 

\$(document).ready(function(){
    
    // tagging support
    \$(\"#select2_5\").select2({
        ajax: {
            dataType: \"json\",
            url: \"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ProfileListJson");
        echo "\",
            results: function (data) {
                return {results: data,text: 'client'};
            }
        },
        formatResult: function (data) {
        return \"<div class='select2-user-result'>\" + data.prenom +\" \" + data.nom + \"</div>\";
        },
        
        formatSelection: function (data) {
            return data.prenom + \" \" + data.nom;
        }

    });
    
          
});
</script>
";
    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tin nhắn"), "html", null, true);
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "<form method=\"POST\" id=\"send\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")), "html", null, true);
        echo "\">
    <div class=\"layout-app\">
        <div class=\"row row-app\">
            <div class=\"col-md-12\">
                <div class=\"col-separator col-separator-first box\">
                    <div class=\"innerAll border-bottom\">
                        <div class=\"pull-left\">
                            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("Message");
        echo "\" class=\" btn btn-default btn-sm\"><i class=\"fa fa-fw fa-arrow-left\"></i> back</a> 
                        </div>

                       
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"bg-gray innerAll\">
                        <form class=\"form-horizontal innerR\" role=\"form\">
                            <div class=\"form-group\">
                                <label for=\"to\" class=\"col-sm-2 control-label\">To:</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group\" style=\"width:200px\">
                                        <input type=\"hidden\" class=\"form-control\" id=\"select2_5\" style=\"width:100%\" name=\"profile_recieve\" />
                                    </div>
                                </div>
                            </div>


                            <div class=\"clearfix\"></div>
                        </form>
                    </div>
                    <hr class=\"margin-none\" />
                    <div class=\"innerAll inner-2x\">
                        <textarea id=\"message\" class=\"notebook border-none form-control padding-none\" rows=\"8\" placeholder=\"Write your content here...\" name=\"message\"></textarea>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"col-separator-h\"></div>
                    <div class=\"innerAll text-center\">
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("Message");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-fw icon-crossing\"></i> Cancel</a>
                        <a href=\"javascript:{}\" class=\"btn btn-primary\" data-layout=\"top\" data-type=\"error\" data-toggle=\"notyfy\"><i class=\"fa fa-fw icon-outbox-fill\"></i>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Gửi tin nhắn"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal-compose\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!-- Modal heading -->
                <!-- <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h3 class=\"modal-title\">Login</h3>
                </div> -->
                <!-- // Modal heading END -->
                <div class=\"innerAll border-bottom\">
                    <div class=\"pull-left\">
                        <a href=\"\" class=\" btn btn-default btn-sm\"><i class=\"fa fa-fw fa-arrow-left\"></i> back</a> 
                    </div>
                    <div class=\"pull-left innerL\">
                        <a href=\"\" class=\" btn btn-success btn-sm strong\"><i class=\"fa fa-fw icon-paperclip\"></i> Save Draft</a>
                    </div>
                    <a href=\"\" class=\"pull-right btn btn-primary btn-sm strong\"><i class=\"fa fa-fw icon-outbox-fill\"></i> Send Email</a>
                    <div class=\"clearfix\"></div>
                </div>
                <!-- Modal body -->
                <div class=\"modal-body padding-none\">
                    <form class=\"form-horizontal\" role=\"form\">
                        <div class=\"bg-gray innerAll border-bottom\">
                            <div class=\"innerLR\">
                                <div class=\"form-group\">
                                    <label for=\"to\" class=\"col-sm-2 control-label\">To:</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" id=\"to\">
                                            <div class=\"input-group-btn\">
                                                <button type=\"button\" data-toggle=\"collapse\" data-target=\"#cc\" class=\"btn btn-default\">CC/BCC
                                                    <span class=\"caret\"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"cc\" class=\"collapse\">
                                    <div class=\"form-group\">
                                        <label for=\"Cc\" class=\"col-sm-2 control-label\">Cc:</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"Cc\">
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"Bcc\" class=\"col-sm-2 control-label\">Bcc:</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" class=\"form-control\" id=\"Bcc\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"Bcc\" class=\"col-sm-2 control-label\">From:</label>
                                    <div class=\"col-sm-6\">
                                        <select class=\"selectpicker\">
                                            <option>contact@mosaicpro.biz</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"Bcc\" class=\"col-sm-2 control-label\">Signature:</label>
                                    <div class=\"col-sm-6\">
                                        <select class=\"selectpicker\">
                                            <option>Select Signature</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                        <div class=\"innerAll inner-2x\">
                            <textarea class=\"notebook border-none form-control padding-none\" rows=\"4\" placeholder=\"Write your content here...\"></textarea>
                            <div class=\"clearfix\"></div>
                        </div>
                    </form>
                </div>
                <!-- // Modal body END -->
                <div class=\"innerAll text-center border-top\">
                    <a href=\"\" class=\"btn btn-default\"><i class=\"fa fa-fw icon-crossing\"></i> Cancel</a>
                    <a href=\"\" class=\"btn btn-primary\"><i class=\"fa fa-fw icon-outbox-fill\"></i> Send email</a>
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal END -->

</form>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Message:new-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  198 => 98,  192 => 95,  126 => 51,  113 => 45,  84 => 37,  77 => 27,  114 => 64,  299 => 274,  293 => 273,  324 => 126,  308 => 121,  304 => 120,  301 => 119,  291 => 117,  279 => 114,  276 => 113,  271 => 112,  265 => 109,  250 => 97,  223 => 91,  185 => 72,  181 => 92,  172 => 66,  155 => 58,  153 => 57,  146 => 56,  266 => 103,  263 => 102,  257 => 101,  248 => 98,  245 => 97,  237 => 94,  218 => 86,  211 => 85,  152 => 72,  148 => 71,  53 => 13,  242 => 96,  234 => 103,  232 => 93,  215 => 96,  206 => 101,  195 => 77,  190 => 89,  165 => 81,  160 => 79,  90 => 38,  81 => 28,  100 => 41,  70 => 18,  34 => 4,  1000 => 509,  995 => 424,  990 => 167,  957 => 137,  940 => 123,  930 => 115,  915 => 103,  894 => 85,  883 => 77,  866 => 63,  862 => 62,  858 => 61,  854 => 60,  844 => 53,  840 => 52,  836 => 51,  832 => 50,  828 => 49,  824 => 48,  820 => 47,  815 => 46,  812 => 45,  807 => 42,  801 => 39,  790 => 31,  783 => 26,  780 => 25,  775 => 20,  769 => 510,  767 => 509,  745 => 490,  741 => 489,  737 => 488,  733 => 487,  729 => 486,  725 => 485,  721 => 484,  717 => 483,  713 => 482,  709 => 481,  705 => 480,  701 => 479,  697 => 478,  693 => 477,  689 => 476,  684 => 474,  680 => 473,  676 => 472,  672 => 471,  668 => 470,  664 => 469,  660 => 468,  629 => 439,  621 => 433,  619 => 432,  614 => 429,  608 => 426,  605 => 425,  603 => 424,  600 => 423,  593 => 420,  576 => 408,  573 => 407,  564 => 402,  557 => 398,  553 => 397,  545 => 394,  538 => 392,  527 => 386,  520 => 383,  517 => 382,  511 => 381,  508 => 380,  502 => 378,  499 => 377,  496 => 376,  494 => 375,  491 => 374,  486 => 373,  483 => 372,  481 => 371,  468 => 362,  465 => 361,  448 => 353,  432 => 343,  426 => 340,  417 => 337,  410 => 334,  404 => 333,  401 => 332,  395 => 330,  390 => 329,  385 => 327,  369 => 316,  366 => 315,  364 => 314,  357 => 309,  349 => 303,  347 => 302,  342 => 299,  333 => 293,  325 => 290,  319 => 123,  317 => 287,  302 => 275,  295 => 271,  288 => 267,  282 => 115,  259 => 249,  255 => 248,  251 => 246,  249 => 110,  239 => 241,  210 => 85,  205 => 223,  200 => 220,  188 => 94,  184 => 93,  180 => 81,  178 => 91,  174 => 90,  161 => 75,  137 => 53,  124 => 191,  110 => 186,  76 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 355,  444 => 149,  440 => 148,  437 => 344,  435 => 146,  430 => 342,  427 => 143,  423 => 339,  413 => 335,  409 => 132,  407 => 131,  402 => 130,  398 => 331,  393 => 126,  387 => 328,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 289,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 118,  285 => 116,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 98,  247 => 96,  241 => 95,  229 => 92,  220 => 70,  214 => 87,  177 => 65,  169 => 88,  140 => 55,  132 => 52,  128 => 75,  107 => 47,  61 => 15,  273 => 258,  269 => 111,  254 => 100,  243 => 88,  240 => 95,  238 => 94,  235 => 93,  230 => 82,  227 => 91,  224 => 231,  221 => 87,  219 => 98,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 69,  135 => 53,  119 => 46,  102 => 32,  71 => 41,  67 => 14,  63 => 13,  59 => 15,  93 => 34,  88 => 27,  78 => 35,  28 => 4,  87 => 38,  46 => 8,  44 => 11,  94 => 28,  89 => 32,  85 => 35,  75 => 23,  68 => 21,  56 => 14,  27 => 4,  25 => 3,  21 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 80,  166 => 71,  163 => 62,  158 => 67,  156 => 73,  151 => 72,  142 => 55,  138 => 54,  136 => 56,  121 => 63,  117 => 46,  105 => 42,  91 => 26,  62 => 23,  49 => 9,  31 => 3,  38 => 5,  26 => 3,  24 => 3,  19 => 1,  79 => 23,  72 => 25,  69 => 16,  47 => 9,  40 => 7,  37 => 6,  22 => 1,  246 => 244,  157 => 74,  145 => 70,  139 => 69,  131 => 53,  123 => 48,  120 => 40,  115 => 43,  111 => 44,  108 => 36,  101 => 32,  98 => 45,  96 => 25,  83 => 27,  74 => 18,  66 => 20,  55 => 16,  52 => 9,  50 => 10,  43 => 8,  41 => 6,  35 => 3,  32 => 4,  29 => 4,  209 => 95,  203 => 84,  199 => 79,  193 => 90,  189 => 71,  187 => 82,  182 => 87,  176 => 84,  173 => 65,  168 => 64,  164 => 76,  162 => 80,  154 => 73,  149 => 93,  147 => 72,  144 => 70,  141 => 48,  133 => 74,  130 => 66,  125 => 44,  122 => 43,  116 => 50,  112 => 49,  109 => 43,  106 => 36,  103 => 56,  99 => 37,  95 => 40,  92 => 39,  86 => 26,  82 => 34,  80 => 26,  73 => 19,  64 => 15,  60 => 12,  57 => 11,  54 => 11,  51 => 10,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 8,  33 => 4,  30 => 3,);
    }
}
