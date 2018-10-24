<?php

/* so-ladaz/template/header/header1.twig */
class __TwigTemplate_0b144f4bd2dfc5ed516c34e93545baa649b5bb2e04c4a3e81dd5b17671794eca extends Twig_Template
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
        // line 2
        $context["hidden_headercenter"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2")) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headerbottom"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1")) ? ("hidden-compact") : (""));
        // line 4
        echo "
<header id=\"header\" class=\" variant typeheader-";
        // line 5
        echo (((isset($context["typeheader"]) ? $context["typeheader"] : null)) ? ((isset($context["typeheader"]) ? $context["typeheader"] : null)) : ("1"));
        echo "\">
\t";
        // line 6
        echo "  
\t<div class=\"header-top hidden-compact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-top-left col-lg-6 col-sm-6 col-xs-4 hidden-sm hidden-xs\">
\t\t\t\t\t";
        // line 11
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message_status"), "method")) {
            // line 12
            echo "\t\t\t\t\t\t";
            if ( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method"))) {
                // line 13
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method")), "method");
                echo "
\t\t\t\t\t\t";
            }
            // line 14
            echo " 
\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-6 col-sm-12 col-xs-12 text-right\">\t
\t\t\t\t\t<ul class=\"top-link list-inline\">
\t\t\t\t\t\t<li class=\"account\" id=\"my_account\"><a href=\"";
        // line 20
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " \" class=\"btn-xs dropdown-toggle\" data-toggle=\"dropdown\"> <span class=\"hidden-xs\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " </span> <span class=\"fa fa-angle-down\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu \">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\"  title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" title=\"";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t";
        // line 24
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 25
            echo "\t\t\t\t\t\t            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 26
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 27
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 28
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 29
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t            ";
        } else {
            // line 31
            echo "
\t\t\t\t\t\t            <li><a href=\"";
            // line 32
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 33
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t            ";
        }
        // line 34
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 38
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "checkout_status"), "method")) {
            // line 39
            echo "\t\t\t\t\t\t\t<li class=\"checkout hidden-xs\"><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo " \" class=\"btn-link\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " \"><span >";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " </span></a></li>
\t\t\t\t\t\t";
        }
        // line 40
        echo " 
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "lang_status"), "method")) {
            // line 43
            echo "\t\t\t\t\t<ul class=\"top-link list-inline \">
\t\t\t\t\t\t";
            // line 44
            if ((isset($context["language"]) ? $context["language"] : null)) {
                echo " <li class=\"language\">";
                echo (isset($context["language"]) ? $context["language"] : null);
                echo " </li>\t";
            }
            echo "\t\t\t
\t\t\t\t\t\t";
            // line 45
            if ((isset($context["currency"]) ? $context["currency"] : null)) {
                echo "<li class=\"currency\"> ";
                echo (isset($context["currency"]) ? $context["currency"] : null);
                echo "  </li> ";
            }
            // line 46
            echo "\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t";
        }
        // line 47
        echo " \t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 55
        echo " 
\t<div class=\"header-middle ";
        // line 56
        echo (isset($context["hidden_headercenter"]) ? $context["hidden_headercenter"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t
\t\t\t\t<div class=\"middle-left col-lg-3 col-md-3 col-sm-4 hidden-xs \">\t\t\t\t\t
\t\t\t\t\t";
        // line 60
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "phone_status"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method"))) {
            // line 61
            echo "\t\t\t\t\t<svg class=\"icon icon-phone\"><use xlink:href=\"#icon-phone\"></use></svg>
\t\t\t\t\t<div class=\"phone-contact \" >
\t\t\t\t\t\t";
            // line 63
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method")), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t
\t\t\t\t</div>

\t\t\t\t<div class=\"navbar-logo col-lg-6 col-md-6 col-sm-4 col-xs-6\">
\t\t\t\t\t<div class=\"logo text-center\">
\t\t\t\t   \t\t";
        // line 70
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logo", array(), "method");
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"middle-right col-lg-3 col-md-3 col-sm-4 col-xs-6 text-right\">\t
\t\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t\t<div id=\"sosearchpro\" class=\"sosearchpro-wrapper dropdown so-search compact-hidden\">
\t\t\t\t\t\t\t<button id=\"dropdownSearch\" class=\"dropdown-toggle bt-search\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-search\" aria-labelledby=\"dropdownSearch\">
\t\t\t\t\t\t\t\t";
        // line 81
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t \t";
        // line 87
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"header-bottom ";
        // line 96
        echo (isset($context["hidden_headerbottom"]) ? $context["hidden_headerbottom"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header-bottom-inner\">
\t\t\t\t<div class=\"mainmenu\">
\t\t\t\t\t";
        // line 100
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t\t
</header>";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 100,  252 => 96,  240 => 87,  231 => 81,  217 => 70,  210 => 65,  204 => 63,  200 => 61,  198 => 60,  191 => 56,  188 => 55,  178 => 47,  174 => 46,  168 => 45,  160 => 44,  157 => 43,  155 => 42,  151 => 40,  141 => 39,  139 => 38,  133 => 34,  126 => 33,  120 => 32,  117 => 31,  110 => 29,  104 => 28,  98 => 27,  92 => 26,  85 => 25,  83 => 24,  75 => 23,  67 => 22,  58 => 20,  52 => 16,  48 => 14,  42 => 13,  39 => 12,  37 => 11,  30 => 6,  26 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#=====Get variable : Config Select Block on header=====#}*/
/* {% set hidden_headercenter = soconfig.get_settings('toppanel_type') =='2'? 'hidden-compact' : '' %}*/
/* {% set hidden_headerbottom = soconfig.get_settings('toppanel_type') =='1'? 'hidden-compact' : '' %}*/
/* */
/* <header id="header" class=" variant typeheader-{{ typeheader ? typeheader : '1'}}">*/
/* 	{#======	HEADER TOP	=======#}  */
/* 	<div class="header-top hidden-compact">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="header-top-left col-lg-6 col-sm-6 col-xs-4 hidden-sm hidden-xs">*/
/* 					{% if soconfig.get_settings('welcome_message_status') %}*/
/* 						{% if soconfig.get_settings('welcome_message') is not empty %}*/
/* 							{{ soconfig.decode_entities( soconfig.get_settings('welcome_message') ) }}*/
/* 						{% endif %} */
/* 					{% endif %}*/
/* 							*/
/* 				</div>*/
/* 				<div class="header-top-right collapsed-block col-lg-6 col-sm-12 col-xs-12 text-right">	*/
/* 					<ul class="top-link list-inline">*/
/* 						<li class="account" id="my_account"><a href="{{ account }}" title="{{ text_account }} " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">{{ text_account }} </span> <span class="fa fa-angle-down"></span></a>*/
/* 							<ul class="dropdown-menu ">*/
/* 									<li><a href="{{ wishlist }}"  title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/* 									<li><a href="{{ compare }}" title="{{ text_compare }}">{{ text_compare }}</a></li>*/
/* 								{% if logged %}*/
/* 						            <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 						            <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 						            <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 						            <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 						            <li><a href="{{ logout }}"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ text_logout }}</a></li>*/
/* 					            {% else %}*/
/* */
/* 						            <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* 						            <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* 					            {% endif %}															*/
/* 							</ul>*/
/* 						</li>	*/
/* 						*/
/* 						{% if soconfig.get_settings('checkout_status') %}*/
/* 							<li class="checkout hidden-xs"><a href="{{ checkout }} " class="btn-link" title="{{ text_checkout }} "><span >{{ text_checkout }} </span></a></li>*/
/* 						{% endif %} */
/* 					</ul>*/
/* 					{% if soconfig.get_settings('lang_status') %}*/
/* 					<ul class="top-link list-inline ">*/
/* 						{% if language %} <li class="language">{{ language }} </li>	{% endif %}			*/
/* 						{% if currency %}<li class="currency"> {{ currency }}  </li> {% endif %}*/
/* 					</ul>				*/
/* 					{% endif %} 					*/
/* 					*/
/* 				*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	{#======	HEADER CENTER	=======#} */
/* 	<div class="header-middle {{hidden_headercenter}}">*/
/* 		<div class="container">*/
/* 			<div class="row">	*/
/* 				<div class="middle-left col-lg-3 col-md-3 col-sm-4 hidden-xs ">					*/
/* 					{% if soconfig.get_settings('phone_status') and soconfig.get_settings('contact_number') %}*/
/* 					<svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>*/
/* 					<div class="phone-contact " >*/
/* 						{{ soconfig.decode_entities( soconfig.get_settings('contact_number') ) }}*/
/* 					</div>*/
/* 					{% endif %}						*/
/* 				</div>*/
/* */
/* 				<div class="navbar-logo col-lg-6 col-md-6 col-sm-4 col-xs-6">*/
/* 					<div class="logo text-center">*/
/* 				   		{{soconfig.get_logo()}}*/
/* 				   	</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="middle-right col-lg-3 col-md-3 col-sm-4 col-xs-6 text-right">	*/
/* 					<div class="header-search">*/
/* 						<div id="sosearchpro" class="sosearchpro-wrapper dropdown so-search compact-hidden">*/
/* 							<button id="dropdownSearch" class="dropdown-toggle bt-search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 								<i class="fa fa-search" aria-hidden="true"></i>*/
/* 							</button>*/
/* 							<div class="dropdown-menu dropdown-menu-search" aria-labelledby="dropdownSearch">*/
/* 								{{ search }}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>				*/
/* 					*/
/* 					<div class="shopping_cart">							*/
/* 					 	{{ cart }}*/
/* 					</div>	*/
/* 					*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="header-bottom {{hidden_headerbottom}}">*/
/* 		<div class="container">*/
/* 			<div class="header-bottom-inner">*/
/* 				<div class="mainmenu">*/
/* 					{{ menu }}*/
/* 				</div>*/
/* 				*/
/* 							*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		*/
/* </header>*/
