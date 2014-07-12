<?php

/* SportimimiuserBundle:Page:email.txt.twig */
class __TwigTemplate_f183d3a944a799f9326176789a08309e859ebb91659d5f9f447645ebb68dcd67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿";
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_text', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 2
        echo "Email Confirmation
";
    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        // line 6
        echo "
Chào mừng bạn đến TeamSport.vn!                                                

To activate and edit your profil, please follow this link:                                                                    
";
        // line 10
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

You will be able to log-in using the email you given:  
                                                                                                                                         
Email    : ";
        // line 14
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email");
        echo "                                                                                                 

TeamSport.vn thanks you, and see you on soon on teamsport.vn
";
    }

    public function getTemplateName()
    {
        return "SportimimiuserBundle:Page:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  48 => 10,  42 => 6,  39 => 5,  34 => 2,  31 => 1,  27 => 5,  24 => 4,  21 => 1,);
    }
}
