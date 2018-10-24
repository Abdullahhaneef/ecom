<?php

/* so-ladaz/template/extension/module/featured.twig */
class __TwigTemplate_64e57f9cc7d526930637d890aa355cb70923937a73fdd56271e1102741189f51 extends Twig_Template
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
        if ((isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null)) {
            echo " ";
            $context["thumbgallery"] = (isset($context["url_thumbgallery"]) ? $context["url_thumbgallery"] : null);
        } else {
            // line 3
            echo " ";
            $context["thumbgallery"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "card_gallery"), "method");
        }
        // line 4
        echo "
";
        // line 5
        if ((isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null)) {
            echo " ";
            $context["cartinfo"] = (isset($context["url_cartinfo"]) ? $context["url_cartinfo"] : null);
        } else {
            // line 6
            echo " ";
            $context["cartinfo"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "desktop_addcart_position"), "method");
        }
        // line 7
        echo "

<div class=\"clearfix module\">
    <h3 class=\"modtitle\">";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    <div class=\"slider-products products-list  contentslider\" data-rtl=\"";
        // line 11
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" data-autoplay=\"no\"  data-pagination=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"10\"  data-items_column0=\"5\" data-items_column1=\"4\" data-items_column2=\"3\" data-items_column3=\"2\" data-items_column4=\"1\" data-arrows=\"yes\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">
        <!-- Products list -->
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
            <div class=\"product-layout product-grid\">
                <div class=\"product-item-container\">
                    <div class=\"left-block\">
\t\t\t\t\t\t";
            // line 17
            if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) && $this->getAttribute($context["product"], "image_galleries", array()))) {
                // line 18
                echo "
\t\t\t\t\t\t";
                // line 19
                if (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 1)) {
                    // line 20
                    echo "\t\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__left";
                    // line 21
                    echo "\t\t\t\t\t\t";
                } elseif (((isset($context["thumbgallery"]) ? $context["thumbgallery"] : null) == 2)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__right";
                    // line 23
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                    $context["class_thumbgallery"] = "product-card__bottom";
                    // line 25
                    echo "\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t<div class=\"product-card__gallery ";
                echo (isset($context["class_thumbgallery"]) ? $context["class_thumbgallery"] : null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"item-img thumb-active\" data-src=\"";
                // line 27
                echo $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "thumb", array(), "array");
                echo "\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($context["product"], "first_gallery", array()), "cart", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"></div>
\t\t\t\t\t\t\t\t";
                // line 28
                $context["total_gallery"] = 2;
                // line 29
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "image_galleries", array()));
                foreach ($context['_seq'] as $context["number_gallery"] => $context["image_gallery"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["number_gallery"] < (isset($context["total_gallery"]) ? $context["total_gallery"] : null))) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"item-img\" data-src=\"";
                        echo $this->getAttribute($context["image_gallery"], "thumb", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["image_gallery"], "cart", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\"></div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['number_gallery'], $context['image_gallery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t
                        <div class=\"product-image-container\">
                            <a href=\"";
            // line 38
            echo $this->getAttribute($context["product"], "href", array());
            echo " \" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \">
                                <img  src=\"";
            // line 39
            echo $this->getAttribute($context["product"], "thumb", array());
            echo " \"  title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo " \" class=\"img-1 img-responsive\" />
                            </a>
                        </div>
                        
\t\t\t\t\t\t";
            // line 44
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "countdown_status"), "method") && $this->getAttribute($context["product"], "special_end_date", array()))) {
                // line 45
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/countdown.twig"), "so-ladaz/template/extension/module/featured.twig", 45)->display(array_merge($context, array("product" => $context["product"], "special_end_date" => $this->getAttribute($context["product"], "special_end_date", array()))));
                // line 46
                echo "\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 48
            if (($this->getAttribute($context["product"], "quantity", array()) == 0)) {
                // line 49
                echo "\t\t\t\t\t\t\t<div class=\"label-stock label label-success \">";
                echo $this->getAttribute($context["product"], "stock_status", array());
                echo "</div> 
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t
                        ";
            // line 52
            if (($this->getAttribute($context["product"], "price", array()) && $this->getAttribute($context["product"], "special", array()))) {
                echo " 
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "discount_status"), "method")) {
                    echo " 
\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t\t ";
                    // line 57
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 59
                echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t";
            }
            // line 62
            echo " 

                        ";
            // line 65
            echo "                        ";
            if (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "right")) {
                // line 66
                echo "                        ";
                $context["class_cart_info"] = "cartinfo--right";
                // line 67
                echo "                        ";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "bottom")) {
                // line 68
                echo "                            ";
                $context["class_cart_info"] = "cartinfo--static";
                // line 69
                echo "                        ";
            } elseif (((isset($context["cartinfo"]) ? $context["cartinfo"] : null) == "center")) {
                // line 70
                echo "                            ";
                $context["class_cart_info"] = "cartinfo--center";
                // line 71
                echo "                        ";
            } else {
                // line 72
                echo "                            ";
                $context["class_cart_info"] = "cartinfo--left";
                // line 73
                echo "                        ";
            }
            // line 74
            echo "
                        <div class=\"button-group ";
            // line 75
            echo (isset($context["class_cart_info"]) ? $context["class_cart_info"] : null);
            echo "\">
                            <button class=\"addToCart btn-button\" type=\"button\" title=\"";
            // line 76
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "\" onclick=\"cart.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "', '";
            echo $this->getAttribute($context["product"], "minimum", array());
            echo "');\"><i class=\"fa fa-shopping-basket\"></i><span>";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
                            <button class=\"wishlist btn-button\" type=\"button\" title=\"";
            // line 77
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "</span></button>
                            <button class=\"compare btn-button\" type=\"button\" title=\"";
            // line 78
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-refresh\"></i><span>";
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "</span></button>
                            ";
            // line 79
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "quick_status"), "method")) {
                // line 80
                echo "                                <a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                echo "\" data-fancybox-type=\"iframe\"  href=\"";
                echo $this->getAttribute((isset($context["our_url"]) ? $context["our_url"] : null), "link", array(0 => "extension/soconfig/quickview", 1 => ("product_id=" . $this->getAttribute($context["product"], "product_id", array()))), "method");
                echo "\"> <i class=\"fa fa-eye\"></i><span>";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_quickview"), "method");
                echo "</span> </a>
                            ";
            }
            // line 81
            echo " 
                        </div>

                    </div>
                     
                    <div class=\"right-block\">
                            
                            ";
            // line 88
            if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "rating_status"), "method")) {
                echo " 
                            <div class=\"ratings\">
                                <div class=\"rating-box\">
                                ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 92
                    echo "                                ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " 
                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                                ";
                    } else {
                        // line 94
                        echo "   
                                    <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                                ";
                    }
                    // line 96
                    echo " 
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "
                                </div>
                            </div>
                            ";
            }
            // line 101
            echo " 

                            <h4><a href=\"";
            // line 103
            echo $this->getAttribute($context["product"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["product"], "name", array());
            echo " </a></h4>

                            ";
            // line 105
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " 
                            <div class=\"price\">
                                ";
                // line 107
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " 
                                    <span class=\"price-new\">";
                    // line 108
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
                                ";
                } else {
                    // line 109
                    echo "   
                                    <span class=\"price-new\">";
                    // line 110
                    echo $this->getAttribute($context["product"], "special", array());
                    echo " </span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " </span>
                                ";
                }
                // line 111
                echo " 
                            </div>
                            ";
            }
            // line 113
            echo " 
                           
                    </div>
                </div>
            </div>
     ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo " 
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 118,  369 => 113,  364 => 111,  357 => 110,  354 => 109,  349 => 108,  345 => 107,  340 => 105,  333 => 103,  329 => 101,  323 => 98,  316 => 96,  311 => 94,  304 => 92,  300 => 91,  294 => 88,  285 => 81,  275 => 80,  273 => 79,  265 => 78,  257 => 77,  247 => 76,  243 => 75,  240 => 74,  237 => 73,  234 => 72,  231 => 71,  228 => 70,  225 => 69,  222 => 68,  219 => 67,  216 => 66,  213 => 65,  209 => 62,  203 => 59,  197 => 57,  191 => 55,  186 => 52,  183 => 51,  177 => 49,  175 => 48,  172 => 47,  169 => 46,  166 => 45,  163 => 44,  154 => 39,  148 => 38,  144 => 36,  140 => 34,  134 => 33,  124 => 31,  121 => 30,  116 => 29,  114 => 28,  106 => 27,  101 => 26,  98 => 25,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  81 => 19,  78 => 18,  76 => 17,  54 => 13,  49 => 11,  45 => 10,  40 => 7,  36 => 6,  31 => 5,  28 => 4,  24 => 3,  19 => 2,);
    }
}
/* {#====  Variables url parameter ==== #}*/
/* {% if url_thumbgallery %} {% set thumbgallery = url_thumbgallery %}*/
/* {% else %} {% set thumbgallery = soconfig.get_settings('card_gallery') %}{% endif %}*/
/* */
/* {% if url_cartinfo %} {% set cartinfo = url_cartinfo %}*/
/* {% else %} {% set cartinfo = soconfig.get_settings('desktop_addcart_position') %}{% endif %}*/
/* */
/* */
/* <div class="clearfix module">*/
/*     <h3 class="modtitle">{{ heading_title }}</h3>*/
/*     <div class="slider-products products-list  contentslider" data-rtl="{{direction}}" data-autoplay="no"  data-pagination="no" data-delay="4" data-speed="0.6" data-margin="10"  data-items_column0="5" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">*/
/*         <!-- Products list -->*/
/*         {% for product in products %} */
/*             <div class="product-layout product-grid">*/
/*                 <div class="product-item-container">*/
/*                     <div class="left-block">*/
/* 						{% if thumbgallery   and product.image_galleries %}*/
/* */
/* 						{% if thumbgallery == 1 %}*/
/* 							{% set  class_thumbgallery = 'product-card__left' %}*/
/* 						{% elseif thumbgallery == 2 %}*/
/* 							{% set  class_thumbgallery = 'product-card__right' %}*/
/* 						{% else %}*/
/* 							{% set  class_thumbgallery = 'product-card__bottom' %}*/
/* 						{% endif %}*/
/* 						<div class="product-card__gallery {{class_thumbgallery}}">*/
/* 								<div class="item-img thumb-active" data-src="{{product.first_gallery['thumb']}}"><img src="{{product.first_gallery['cart']}}" alt="{{ product.name }}"></div>*/
/* 								{% set total_gallery = 2 %}*/
/* 								{% for number_gallery,image_gallery in product.image_galleries %}*/
/* 									{% if number_gallery < total_gallery %}*/
/* 									<div class="item-img" data-src="{{image_gallery.thumb}}"><img src="{{image_gallery.cart}}" alt="{{ product.name }}"></div>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						*/
/*                         <div class="product-image-container">*/
/*                             <a href="{{ product.href }} " title="{{ product.name }} ">*/
/*                                 <img  src="{{ product.thumb }} "  title="{{ product.name }} " class="img-1 img-responsive" />*/
/*                             </a>*/
/*                         </div>*/
/*                         */
/* 						{#===== Show CountDown Product =======#}*/
/* 						{% if soconfig.get_settings('countdown_status') and product.special_end_date %}*/
/* 							{% include theme_directory~'/template/soconfig/countdown.twig' with {product: product,special_end_date:product.special_end_date} %}*/
/* 						{% endif %}*/
/* 						*/
/* 						{% if product.quantity== 0 %}*/
/* 							<div class="label-stock label label-success ">{{ product.stock_status}}</div> */
/* 						{% endif %}*/
/* 					*/
/*                         {% if product.price  and  product.special  %} */
/* 						<div class="box-label">*/
/* 							{#=======Discount Label======= #}*/
/* 							{% if soconfig.get_settings('discount_status')  %} */
/* 								<span class="label-product label-sale">*/
/* 									 {{ product.discount }}*/
/* 								</span>*/
/* 							{% endif %} */
/* 							*/
/* 						</div> */
/* 						{% endif %} */
/* */
/*                         {#=======Show Group_cart_info ======= #}*/
/*                         {% if cartinfo == 'right' %}*/
/*                         {% set class_cart_info = 'cartinfo--right' %}*/
/*                         {% elseif cartinfo == 'bottom' %}*/
/*                             {% set class_cart_info = 'cartinfo--static' %}*/
/*                         {% elseif cartinfo == 'center' %}*/
/*                             {% set class_cart_info = 'cartinfo--center' %}*/
/*                         {% else %}*/
/*                             {% set class_cart_info = 'cartinfo--left' %}*/
/*                         {% endif %}*/
/* */
/*                         <div class="button-group {{class_cart_info}}">*/
/*                             <button class="addToCart btn-button" type="button" title="{{ button_cart}}" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-basket"></i><span>{{ button_cart }}</span></button>*/
/*                             <button class="wishlist btn-button" type="button" title="{{ button_wishlist}}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart-o"></i><span>{{ button_wishlist }}</span></button>*/
/*                             <button class="compare btn-button" type="button" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-refresh"></i><span>{{ button_compare }}</span></button>*/
/*                             {% if soconfig.get_settings('quick_status') %}*/
/*                                 <a class="quickview iframe-link visible-lg btn-button" title="{{ objlang.get('text_quickview')}}" data-fancybox-type="iframe"  href="{{ our_url.link('extension/soconfig/quickview','product_id='~product.product_id) }}"> <i class="fa fa-eye"></i><span>{{ objlang.get('text_quickview')}}</span> </a>*/
/*                             {% endif %} */
/*                         </div>*/
/* */
/*                     </div>*/
/*                      */
/*                     <div class="right-block">*/
/*                             */
/*                             {% if soconfig.get_settings('rating_status') %} */
/*                             <div class="ratings">*/
/*                                 <div class="rating-box">*/
/*                                 {% for i in 1..5 %}*/
/*                                 {% if product.rating < i %} */
/*                                     <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                                 {% else %}   */
/*                                     <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                                 {% endif %} */
/*                                 {% endfor %}*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                             {% endif %} */
/* */
/*                             <h4><a href="{{ product.href }} ">{{ product.name }} </a></h4>*/
/* */
/*                             {% if product.price %} */
/*                             <div class="price">*/
/*                                 {% if not product.special %} */
/*                                     <span class="price-new">{{ product.price }} </span>*/
/*                                 {% else %}   */
/*                                     <span class="price-new">{{ product.special }} </span> <span class="price-old">{{ product.price }} </span>*/
/*                                 {% endif %} */
/*                             </div>*/
/*                             {% endif %} */
/*                            */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*      {% endfor %} */
/*     </div>*/
/* </div>*/
/* */
