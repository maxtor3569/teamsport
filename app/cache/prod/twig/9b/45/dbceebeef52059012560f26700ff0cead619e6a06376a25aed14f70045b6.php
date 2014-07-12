<?php

/* SportimimiuserBundle:Place:createPlace.html.twig */
class __TwigTemplate_9b45dbceebeef52059012560f26700ff0cead619e6a06376a25aed14f70045b6 extends Twig_Template
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
        echo "Tạo sân chơi mới";
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
\t<script>

\t\$('#searchPlace_placeName').autocomplete({
\t\tsource: function( request, response ) {
\t\t
\t\t\t\$.ajax({
\t\t\t\turl : '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("getPlace.php"), "html", null, true);
        echo "',
\t\t\t\tdata: {term: request.term},
\t\t\t\tdataType: \"json\",
\t\t\t\tsuccess: function( data ) {
\t\t\t\t\tresponse( \$.map( data.myData, function( item ) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.name
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t   messages: {
        noResults: '',
        results: function() {}
    }
    });
\tfunction verify() {
\tvar error = 0;
\t\tif (jQuery('#placeName').val() == '')
\t\t{
\t\t\t
\t\t\tjQuery('#placeName').css('border','1px solid red');
\t\t\terror++;
\t\t}
\t\tif (jQuery('#addressName').val()== '')
\t\t{
\t\t\tjQuery('#addressName').css('border','1px solid red');
\t\t\terror++;
\t\t}
\t\tif (error > 0)
\t\t\treturn false;
\t\telse
\t\t\tjQuery('#place').submit();
\t}
</script>

";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"widget widget-heading-simple widget-body-white\">
    <div class=\"widget-body\">
    <h2>Tạo sân chơi mới</h2>
    <div style=\"margin-top:15px\">
                    <form id=\"place\" method=\"post\">
        <div class=\"form-group\">              
            <input id=\"placeName\" type=\"text\" name=\"new_name_place\" placeholder=\"Nhập tên của sân chơi\" class=\"form-control\"/><br />
        </div>            
        <input id=\"addressName\" type=\"text\" name=\"new_adress_place\" placeholder=\"Nhập địa chỉ\" class=\"form-control\"/> <br />
        <button class=\"btn btn-primary\" onclick=\"verify();return false;\">Tạo</button>
                    </form>
            </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Place:createPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 56,  100 => 55,  57 => 16,  48 => 9,  45 => 8,  40 => 6,  37 => 5,  31 => 4,);
    }
}
