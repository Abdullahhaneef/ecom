<?php

/* so-ladaz/template/common/footer.twig */
class __TwigTemplate_ef5ad1f4762c22b61421f7cd56a735fc0dadead278b5ccefa170aecf15d6777a extends Twig_Template
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
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method") == "1")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/footer/footer1.twig"), "so-ladaz/template/common/footer.twig", 4)->display(array_merge($context, array("typefooter" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typefooter"), "method"))));
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/icon-defs.twig"), "so-ladaz/template/common/footer.twig", 7)->display($context);
        // line 8
        echo "
\t
";
        // line 11
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "backtop"), "method")) {
            // line 12
            echo "<div class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></div>
";
        }
        // line 14
        echo "

";
        // line 16
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method")) {
            // line 17
            echo "\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_sidebar"), "method") == 1)) {
                // line 18
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-left";
                // line 19
                echo "\t";
            } else {
                // line 20
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-right";
                // line 21
                echo "\t";
            }
            // line 22
            echo "\t<section class=\"social-widgets visible-lg ";
            echo (isset($context["social_sidebar"]) ? $context["social_sidebar"] : null);
            echo " \">
\t\t<ul class=\"items\">
\t\t\t";
            // line 24
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_fb_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 26
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/facebook.php?account_fb=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "facebook"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/";
                // line 30
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 34
            echo " 

\t\t\t";
            // line 36
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_twitter_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-02 twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 38
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/template/social/twitter.php?account_twitter=";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "twitter"), "method");
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img src=\"catalog/view/theme/";
                // line 42
                echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 46
            echo " 

\t\t\t";
            // line 48
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "social_custom_status"), "method")) {
                echo " 
\t\t\t<li class=\"item item-03 youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t";
                // line 53
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "video_code"), "method")), "method");
                    echo "
\t\t\t\t\t\t";
                }
                // line 55
                echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 59
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 63
        echo " 

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 63,  145 => 59,  138 => 55,  132 => 54,  130 => 53,  122 => 48,  118 => 46,  110 => 42,  101 => 38,  96 => 36,  92 => 34,  84 => 30,  75 => 26,  70 => 24,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  47 => 16,  43 => 14,  39 => 12,  37 => 11,  33 => 8,  31 => 7,  28 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# =========== Show Header==============#}*/
/* */
/* {% if soconfig.get_settings('typefooter') =='1'%}*/
/* 	{% include theme_directory~'/template/footer/footer1.twig' with {typefooter: soconfig.get_settings('typefooter')} %}*/
/* {% endif %}*/
/* */
/* {% include theme_directory~'/template/soconfig/icon-defs.twig' %}*/
/* */
/* 	*/
/* {# =========== Show BackToTop==============#}*/
/* {% if soconfig.get_settings('backtop') %}*/
/* <div class="back-to-top"><i class="fa fa-angle-up"></i></div>*/
/* {% endif %}*/
/* */
/* */
/* {% if soconfig.get_settings('social_sidebar')  %}*/
/* 	{% if soconfig.get_settings('social_sidebar') == 1 %}*/
/* 		{% set  social_sidebar = 'socialwidgets-left'%}*/
/* 	{% else %}*/
/* 		{% set  social_sidebar = 'socialwidgets-right'%}*/
/* 	{% endif %}*/
/* 	<section class="social-widgets visible-lg {{social_sidebar}} ">*/
/* 		<ul class="items">*/
/* 			{% if soconfig.get_settings('social_fb_status') %} */
/* 			<li class="item item-01 facebook">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/facebook.php?account_fb={{soconfig.get_settings('facebook')}} " class="tab-icon"><span class="fa fa-facebook"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>FACEBOOK</h5></div>*/
/* 					<div class="loading">*/
/* 						<img src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_twitter_status') %} */
/* 			<li class="item item-02 twitter">*/
/* 				<a href="catalog/view/theme/{{ theme_directory }}/template/social/twitter.php?account_twitter={{ soconfig.get_settings('twitter')}} " class="tab-icon"><span class="fa fa-twitter"></span></a>*/
/* 				<div class="tab-content">*/
/* 					<div class="title"><h5>TWITTER FEEDS</h5></div>*/
/* 					<div class="loading">*/
/* 						<img src="catalog/view/theme/{{ theme_directory }}/images/ajax-loader.gif" class="ajaxloader" alt="loader">*/
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* */
/* 			{% if soconfig.get_settings('social_custom_status') %} */
/* 			<li class="item item-03 youtube">*/
/* 				<div class="tab-icon"><span class="fa fa-youtube"></span></div>*/
/* 				<div class="tab-content">*/
/* 					<div class="loading">*/
/* 						{% if soconfig.get_settings('video_code') %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('video_code') ) }}*/
/* 						{% endif %} */
/* 					</div>*/
/* 				</div>*/
/* 			</li>*/
/* 			{% endif %} */
/* 		</ul>*/
/* 	</section>*/
/* 	*/
/* {% endif %} */
/* */
/* </div>*/
/* </body>*/
/* </html>*/
