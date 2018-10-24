<?php

/* so-ladaz/template/soconfig/related_product.twig */
class __TwigTemplate_d0169017fc4ddc6640003e3b2d43f6a04a5641c40fd23f4b30023dcca338236a extends Twig_Template
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
        // line 10
        if ((isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null)) {
            echo " ";
            $context["thumbgallery"] = (isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null);
        } else {
            // line 11
            echo " ";
            $context["thumbgallery"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "card_gallery"), "method");
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null)) {
            echo " ";
            $context["cartinfo"] = (isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null);
        } else {
            // line 14
            echo " ";
            $context["cartinfo"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_position"), "method");
        }
        // line 15
        echo "
";
        // line 17
        $context["related_col_lg"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_related_column_lg"), "method");
        // line 18
        $context["related_col_md"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_related_column_md"), "method");
        // line 19
        $context["related_col_sm"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_related_column_sm"), "method");
        // line 20
        $context["related_col_xs"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_related_column_xs"), "method");
        // line 21
        echo "
<div class=\"clearfix module related-horizontal \">
\t<h3 class=\"modtitle hidden\"><span>";
        // line 23
        echo (isset($context["text_related"]) ? $context["text_related"] : null);
        echo " </span></h3>
\t
    <div class=\"related-products products-list  contentslider\" data-rtl=\"";
        // line 25
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" data-autoplay=\"no\"  data-pagination=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"30\"  data-items_column0=\"";
        echo (isset($context["related_col_lg"]) ? $context["related_col_lg"] : null);
        echo "\" data-items_column1=\"";
        echo (isset($context["related_col_md"]) ? $context["related_col_md"] : null);
        echo "\" data-items_column2=\"";
        echo (isset($context["related_col_sm"]) ? $context["related_col_sm"] : null);
        echo "\"
\t\t\tdata-items_column3=\"";
        // line 26
        echo (isset($context["related_col_xs"]) ? $context["related_col_xs"] : null);
        echo "\" data-items_column4=\"1\" data-arrows=\"yes\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">
\t\t<!-- Products list -->
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
            <div class=\"product-layout product-grid\">
\t\t\t  \t<div class=\"product-item-container\">
\t\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t\t<div class=\"product-image-container\">
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->getAttribute($context["product"], "href", array());
            echo " \" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \">
\t\t\t\t\t\t\t\t<img  src=\"";
            // line 34
            echo $this->getAttribute($context["product"], "thumb", array());
            echo " \"  title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" class=\"img-1 img-responsive\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
            // line 40
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                echo " 
\t\t\t\t\t\t\t";
                // line 41
                if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                    echo " 
\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t\t ";
                    // line 43
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 45
                echo " 
\t\t\t\t\t\t\t";
            }
            // line 46
            echo " 
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 50
            echo "\t\t\t\t\t\t";
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "right")) {
                // line 51
                echo "\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--right";
                // line 52
                echo "\t\t\t\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 53
                echo "\t\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--static";
                // line 54
                echo "\t\t\t\t\t\t";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "center")) {
                // line 55
                echo "\t\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--center";
                // line 56
                echo "\t\t\t\t\t\t";
            } else {
                // line 57
                echo "\t\t\t\t\t\t\t";
                $context["class_cart_info"] = "cartinfo--left";
                // line 58
                echo "\t\t\t\t\t\t";
            }
            // line 59
            echo "
\t\t\t\t\t\t<div class=\"button-group ";
            // line 60
            echo (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null);
            echo "\">
\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
            // line 61
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "', '";
            echo $this->getAttribute($context["product"], "minimum", array());
            echo "');\"><i class=\"fa fa-shopping-basket\"></i><span>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
            // line 62
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "</span></button>
\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
            // line 63
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-refresh\"></i><span>";
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "</span></button>
\t\t\t\t\t\t\t";
            // line 64
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                echo "\" data-fancybox-type=\"iframe\"  href=\"";
                echo $this->getAttribute((isset($context["our_url"]) ? $context["our_url"] : null), "link", array(0 => "extension/soconfig/quickview", 1 => ("product_id=" . $this->getAttribute($context["product"], "product_id", array()))), "method");
                echo "\"> <i class=\"fa fa-eye\"></i><span>";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                echo "</span> </a>
\t\t\t\t\t\t\t";
            }
            // line 66
            echo " 
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 73
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                echo " 
\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 79
                        echo "   
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 81
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 86
            echo " 

\t\t\t\t\t\t\t<h4><a href=\"";
            // line 88
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>

\t\t\t\t\t\t\t";
            // line 90
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " 
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 92
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " 
\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 93
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 94
                    echo "   
\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 95
                    echo $this->getAttribute($context["product"], "special", array());
                    echo " </span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 98
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo " 
    </div>
\t
</div>

";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/soconfig/related_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 105,  282 => 98,  277 => 96,  270 => 95,  267 => 94,  262 => 93,  258 => 92,  253 => 90,  246 => 88,  242 => 86,  236 => 83,  229 => 81,  224 => 79,  217 => 77,  213 => 76,  207 => 73,  198 => 66,  188 => 65,  186 => 64,  178 => 63,  170 => 62,  160 => 61,  156 => 60,  153 => 59,  150 => 58,  147 => 57,  144 => 56,  141 => 55,  138 => 54,  135 => 53,  132 => 52,  129 => 51,  126 => 50,  121 => 46,  117 => 45,  111 => 43,  106 => 41,  101 => 40,  91 => 34,  85 => 33,  75 => 28,  70 => 26,  60 => 25,  55 => 23,  51 => 21,  49 => 20,  47 => 19,  45 => 18,  43 => 17,  40 => 15,  36 => 14,  31 => 13,  28 => 12,  24 => 11,  19 => 10,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* {#====  Variables url parameter ==== #}*/
/* {% if url_thumbgallery %} {% set thumbgallery = url_thumbgallery %}*/
/* {% else %} {% set thumbgallery = soconfig.get_settings('card_gallery') %}{% endif %}*/
/* */
/* {% if url_cartinfo %} {% set cartinfo = url_cartinfo %}*/
/* {% else %} {% set cartinfo = soconfig.get_settings('desktop_addcart_position') %}{% endif %}*/
/* */
/* {#========== Product Detail - Releate Horizontal ============#}*/
/* {% set related_col_lg = soconfig.get_settings('product_related_column_lg')  %}*/
/* {% set related_col_md = soconfig.get_settings('product_related_column_md')  %}*/
/* {% set related_col_sm = soconfig.get_settings('product_related_column_sm')  %}*/
/* {% set related_col_xs = soconfig.get_settings('product_related_column_xs')  %}*/
/* */
/* <div class="clearfix module related-horizontal ">*/
/* 	<h3 class="modtitle hidden"><span>{{ text_related }} </span></h3>*/
/* 	*/
/*     <div class="related-products products-list  contentslider" data-rtl="{{direction}}" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="30"  data-items_column0="{{related_col_lg}}" data-items_column1="{{related_col_md}}" data-items_column2="{{related_col_sm}}"*/
/* 			data-items_column3="{{related_col_xs}}" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">*/
/* 		<!-- Products list -->*/
/* 		{% for product in products %} */
/*             <div class="product-layout product-grid">*/
/* 			  	<div class="product-item-container">*/
/* 					<div class="left-block">*/
/* 						<div class="product-image-container">*/
/* 							<a href="{{ product.href }} " title="{{ product.name }} ">*/
/* 								<img  src="{{ product.thumb }} "  title="{{ product.name }} " class="img-1 img-responsive" />*/
/* 							</a>*/
/* 						</div>*/
/* 														*/
/* 						<div class="box-label">*/
/* 							{#=======Discount Label======= #}*/
/* 							{% if soconfig.get_settings('discount_status')  %} */
/* 							{% if product.price  and  product.special  %} */
/* 								<span class="label-product label-sale">*/
/* 									 {{ product.discount }}*/
/* 								</span>*/
/* 							{% endif %} */
/* 							{% endif %} */
/* 						</div>*/
/* */
/* 						{#=======Show Group_cart_info ======= #}*/
/* 						{% if cartinfo == 'right' %}*/
/* 						{% set class_cart_info = 'cartinfo--right' %}*/
/* 						{% elseif cartinfo == 'bottom' %}*/
/* 							{% set class_cart_info = 'cartinfo--static' %}*/
/* 						{% elseif cartinfo == 'center' %}*/
/* 							{% set class_cart_info = 'cartinfo--center' %}*/
/* 						{% else %}*/
/* 							{% set class_cart_info = 'cartinfo--left' %}*/
/* 						{% endif %}*/
/* */
/* 						<div class="button-group {{class_cart_info}}">*/
/* 							<button class="addToCart btn-button" type="button" title="{{ button_cart}}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-basket"></i><span>{{ button_cart }}</span></button>*/
/* 							<button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ button_wishlist }}</span></button>*/
/* 							<button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i><span>{{ button_compare }}</span></button>*/
/* 							{% if soconfig.get_settings('quick_status') %}*/
/* 								<a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ our_url.link('extension/soconfig/quickview','product_id='~product.product_id) }}"> <i class="fa fa-eye"></i><span>{{ objlang.get('text_quickview')}}</span> </a>*/
/* 							{% endif %} */
/* 						</div>*/
/* */
/* 					</div>*/
/* 					 */
/* 					<div class="right-block">*/
/* 							*/
/* 							{% if soconfig.get_settings('rating_status') %} */
/* 							<div class="ratings">*/
/* 								<div class="rating-box">*/
/* 								{% for i in 1..5 %}*/
/* 								{% if product.rating < i %} */
/* 									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 								{% else %}   */
/* 									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 								{% endif %} */
/* 								{% endfor %}*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 							{% endif %} */
/* */
/* 							<h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* */
/* 							{% if product.price %} */
/* 							<div class="price">*/
/* 								{% if not product.special %} */
/* 									<span class="price-new">{{ product.price }} </span>*/
/* 								{% else %}   */
/* 									<span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/* 								{% endif %} */
/* 							</div>*/
/* 							{% endif %} */
/* 							*/
/* 						*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/*      {% endfor %} */
/*     </div>*/
/* 	*/
/* </div>*/
/* */
/* */
