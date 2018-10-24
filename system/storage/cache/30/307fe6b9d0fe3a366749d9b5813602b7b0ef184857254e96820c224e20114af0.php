<?php

/* so-ladaz/template/footer/footer1.twig */
class __TwigTemplate_6cb82c9320a744cc4a66ae52a32b3c4d7aa4b9106d1afe98ecbe961ab19a6890 extends Twig_Template
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
        echo "<footer class=\"footer-container typefooter-";
        echo (((isset($context["typefooter"]) ? $context["typefooter"] : null)) ? ((isset($context["typefooter"]) ? $context["typefooter"] : null)) : ("1"));
        echo "\">
\t<div class=\"footer-navbar \">
\t";
        // line 3
        echo "  
\t";
        // line 4
        if ( !twig_test_empty((isset($context["footer_block1"]) ? $context["footer_block1"] : null))) {
            // line 5
            echo "\t<div class=\"footer-top desc-collapse showdown\" id=\"collapse-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"footer-left col-lg-3 col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t";
            // line 9
            echo (isset($context["footer_block1"]) ? $context["footer_block1"] : null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-right col-lg-9 col-md-9 col-sm-12 col-xs-12\">
\t\t\t\t\t";
            // line 12
            echo (isset($context["footer_block2"]) ? $context["footer_block2"] : null);
            echo "

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 box-account box-footer\">
\t\t\t\t\t\t\t<div class=\"module clearfix\">
\t\t\t\t\t\t\t\t<h3 class=\"modtitle\">";
            // line 18
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div  class=\"modcontent\" >
\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 21
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t  \t<li><a href=\"";
            // line 22
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t  \t<li><a href=\"";
            // line 23
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t  \t<li><a href=\"";
            // line 24
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "\">";
            echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t \t ";
            // line 30
            if ((isset($context["informations"]) ? $context["informations"] : null)) {
                // line 31
                echo "\t\t\t\t\t  \t<div class=\"col-lg-4 col-md-4 col-sm-4 box-information box-footer\">
\t\t\t\t\t  \t\t<div class=\"module clearfix\">
\t\t\t\t\t\t\t<h3 class=\"modtitle\">";
                // line 33
                echo (isset($context["text_information"]) ? $context["text_information"] : null);
                echo "</h3>
\t\t\t\t\t\t\t<div  class=\"modcontent\" >
\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t \t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t  \t\t<li><a href=\"";
                    echo $this->getAttribute($context["information"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["information"], "title", array());
                    echo "</a></li>
\t\t\t\t\t\t\t\t  \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  ";
            }
            // line 44
            echo "
\t\t\t\t\t  \t<div class=\" col-lg-4 col-md-4 col-sm-4 collapsed-block box-footer\">
\t\t\t\t\t\t\t<div class=\"module clearfix\">
\t\t\t\t\t\t\t\t<h3 class=\"footer-title\">";
            // line 47
            echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div  class=\"modcontent\" >
\t\t\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t\t\t <li><a href=\"";
            // line 50
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 51
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t <li><a href=\"";
            // line 52
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 53
            echo (isset($context["special"]) ? $context["special"] : null);
            echo "\">";
            echo (isset($context["text_special"]) ? $context["text_special"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 54
            echo (isset($context["contact"]) ? $context["contact"] : null);
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t \t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t";
        }
        // line 67
        echo "\t
\t<div class=\"button-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
        // line 70
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_more"), "method");
        echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
        // line 71
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_less"), "method");
        echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t</a>        
\t</div>
\t
\t
\t<!-- FOOTER CENTER -->
\t<div class=\"footer-center\">
\t\t<div class=\"container\">
\t\t\t";
        // line 79
        if ( !twig_test_empty((isset($context["footer_block3"]) ? $context["footer_block3"] : null))) {
            // line 80
            echo "\t\t\t\t";
            echo (isset($context["footer_block3"]) ? $context["footer_block3"] : null);
            echo "
\t\t\t";
        }
        // line 82
        echo "\t\t</div>
\t</div>\t
\t
\t</div>\t
\t";
        // line 86
        echo " 
\t<div class=\"footer-bottom \">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-bottom-pt\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-md-7 col-xs-12 copyright-text\">
\t\t\t\t\t";
        // line 92
        if (twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method"))) {
            // line 93
            echo "\t\t\t\t\t\t";
            echo (isset($context["powered"]) ? $context["powered"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method")), "method"), array("{year}" => twig_date_format_filter($this->env, "now", "Y")));
            echo "
\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 98
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment_status"), "method")) {
            echo " 
\t\t\t\t<div class=\"col-lg-4 col-md-5 col-xs-12 text-right\">
\t\t\t\t\t<img src=\"image/";
            // line 100
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment"), "method");
            echo "\"  alt=\"imgpayment\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/footer/footer1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 103,  237 => 100,  232 => 98,  229 => 97,  223 => 95,  217 => 93,  215 => 92,  207 => 86,  201 => 82,  195 => 80,  193 => 79,  182 => 71,  178 => 70,  173 => 67,  155 => 54,  149 => 53,  143 => 52,  137 => 51,  131 => 50,  125 => 47,  120 => 44,  113 => 39,  102 => 37,  98 => 36,  92 => 33,  88 => 31,  86 => 30,  75 => 24,  69 => 23,  63 => 22,  57 => 21,  51 => 18,  42 => 12,  36 => 9,  30 => 5,  28 => 4,  25 => 3,  19 => 1,);
    }
}
/* <footer class="footer-container typefooter-{{typefooter ? typefooter : '1'}}">*/
/* 	<div class="footer-navbar ">*/
/* 	{#======	FOOTER TOP	=======#}  */
/* 	{% if footer_block1 is not empty %}*/
/* 	<div class="footer-top desc-collapse showdown" id="collapse-footer">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="footer-left col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/* 					{{footer_block1}}*/
/* 				</div>*/
/* 				<div class="footer-right col-lg-9 col-md-9 col-sm-12 col-xs-12">*/
/* 					{{footer_block2}}*/
/* */
/* 					<div class="row">*/
/* */
/* 						<div class="col-lg-4 col-md-4 col-sm-4 box-account box-footer">*/
/* 							<div class="module clearfix">*/
/* 								<h3 class="modtitle">{{ text_account }}</h3>*/
/* 								<div  class="modcontent" >*/
/* 									<ul class="menu">*/
/* 										<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 									  	<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 									  	<li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/* 									  	<li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					 	 {% if informations %}*/
/* 					  	<div class="col-lg-4 col-md-4 col-sm-4 box-information box-footer">*/
/* 					  		<div class="module clearfix">*/
/* 							<h3 class="modtitle">{{ text_information }}</h3>*/
/* 							<div  class="modcontent" >*/
/* 								<ul class="menu">*/
/* 								 	{% for information in informations %}*/
/* 								  		<li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/* 								  	{% endfor %}*/
/* 								</ul>*/
/* 							</div>*/
/* 							</div>*/
/* 					  	</div>*/
/* 					  {% endif %}*/
/* */
/* 					  	<div class=" col-lg-4 col-md-4 col-sm-4 collapsed-block box-footer">*/
/* 							<div class="module clearfix">*/
/* 								<h3 class="footer-title">{{ text_extra }}</h3>*/
/* 								<div  class="modcontent" >*/
/* 									<ul class="menu">*/
/* 										 <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/* 										<li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/* 										 <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/* 										<li><a href="{{ special }}">{{ text_special }}</a></li>*/
/* 										<li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					 	*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	<div class="button-toggle hidden-lg hidden-md">*/
/*          <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">*/
/*             <span class="toggle-more">{{ objlang.get('show_more') }} <i class="fa fa-angle-down"></i></span> */
/*             <span class="toggle-less">{{ objlang.get('show_less') }} <i class="fa fa-angle-up"></i></span>           */
/* 		</a>        */
/* 	</div>*/
/* 	*/
/* 	*/
/* 	<!-- FOOTER CENTER -->*/
/* 	<div class="footer-center">*/
/* 		<div class="container">*/
/* 			{% if footer_block3 is not empty %}*/
/* 				{{footer_block3}}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>	*/
/* 	*/
/* 	</div>	*/
/* 	{#======	FOOTER BOTTOM	=======#} */
/* 	<div class="footer-bottom ">*/
/* 		<div class="container">*/
/* 			<div class="footer-bottom-pt">*/
/* 			<div class="row">*/
/* 				<div class="col-lg-8 col-md-7 col-xs-12 copyright-text">*/
/* 					{% if soconfig.get_settings('copyright') is empty %}*/
/* 						{{ powered }}*/
/* 					{% else %}*/
/* 						{{ soconfig.decode_entities(soconfig.get_settings('copyright'))|replace({'{year}': "now"|date("Y")}) }}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				{% if soconfig.get_settings('imgpayment_status')%} */
/* 				<div class="col-lg-4 col-md-5 col-xs-12 text-right">*/
/* 					<img src="image/{{  soconfig.get_settings('imgpayment') }}"  alt="imgpayment">*/
/* 				</div>*/
/* 				{% endif %}*/
/* 				*/
/* 				*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* */
/* 		*/
/* 	</div>*/
/* </footer>*/
