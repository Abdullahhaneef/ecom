<?php

/* so-ladaz/template/extension/module/category.twig */
class __TwigTemplate_9cbd3ded33bb678974a7e38a3c094024a78d89c5a92fa925c51c2679a937f3eb extends Twig_Template
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
        echo "
<div class=\"module category-style\">
  <h3 class=\"modtitle\"><span>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </span></h3>
  <div class=\"mod-content box-category\">
    <ul class=\"accordion\" id=\"accordion-category\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            echo " 
\t\t<li class=\"panel\">
\t\t\t";
            // line 8
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                echo " 
\t\t\t\t<a href=\"";
                // line 9
                echo $this->getAttribute($context["category"], "href", array());
                echo " \" class=\"active\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo " </a>
\t\t\t";
            } else {
                // line 10
                echo "   
\t\t\t\t<a href=\"";
                // line 11
                echo $this->getAttribute($context["category"], "href", array());
                echo " \">";
                echo $this->getAttribute($context["category"], "name", array());
                echo " </a>
\t\t\t";
            }
            // line 12
            echo " 
\t\t\t\t\t\t
\t\t\t";
            // line 14
            if ($this->getAttribute($context["category"], "children", array())) {
                echo " 
\t\t\t\t<span class=\"head\"><a  class=\"pull-right accordion-toggle";
                // line 15
                if (($this->getAttribute($context["category"], "category_id", array()) != (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    echo " ";
                    echo " collapsed";
                    echo " ";
                }
                echo " \" data-toggle=\"collapse\" data-parent=\"#accordion-category\" href=\"#category";
                echo $context["i"];
                echo " \"></a></span>
\t\t\t\t<div id=\"category";
                // line 16
                echo $context["i"];
                echo "\" class=\"panel-collapse collapse ";
                if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    echo " ";
                    echo "in";
                    echo " ";
                }
                echo " \" style=\"clear:both\">
\t\t\t\t\t<ul>
\t\t\t\t\t   ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    echo " 
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                    // line 20
                    if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                        echo " 
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 21
                        echo $this->getAttribute($context["child"], "href", array());
                        echo " \" class=\"active\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo " </a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 22
                        echo "   
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 23
                        echo $this->getAttribute($context["child"], "href", array());
                        echo " \">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo " </a>
\t\t\t\t\t\t\t";
                    }
                    // line 24
                    echo " 
\t\t\t\t\t\t</li>
\t\t\t\t\t   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t";
            }
            // line 30
            echo " 
\t\t</li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  128 => 30,  122 => 27,  114 => 24,  107 => 23,  104 => 22,  97 => 21,  93 => 20,  86 => 18,  75 => 16,  65 => 15,  61 => 14,  57 => 12,  50 => 11,  47 => 10,  40 => 9,  36 => 8,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* */
/* <div class="module category-style">*/
/*   <h3 class="modtitle"><span>{{ heading_title }} </span></h3>*/
/*   <div class="mod-content box-category">*/
/*     <ul class="accordion" id="accordion-category">*/
/*       {% for i,category in categories %} */
/* 		<li class="panel">*/
/* 			{% if category.category_id == category_id %} */
/* 				<a href="{{ category.href }} " class="active">{{ category.name }} </a>*/
/* 			{% else %}   */
/* 				<a href="{{ category.href }} ">{{ category.name }} </a>*/
/* 			{% endif %} */
/* 						*/
/* 			{% if category.children %} */
/* 				<span class="head"><a  class="pull-right accordion-toggle{% if category.category_id  !=  category_id %} {{ ' collapsed' }} {% endif %} " data-toggle="collapse" data-parent="#accordion-category" href="#category{{ i }} "></a></span>*/
/* 				<div id="category{{ i }}" class="panel-collapse collapse {% if category.category_id  == category_id %} {{ 'in' }} {% endif %} " style="clear:both">*/
/* 					<ul>*/
/* 					   {% for child in category.children %} */
/* 						<li>*/
/* 							{% if child.category_id  ==  child_id %} */
/* 								<a href="{{ child.href }} " class="active">{{ child.name }} </a>*/
/* 							{% else %}   */
/* 								<a href="{{ child.href }} ">{{ child.name }} </a>*/
/* 							{% endif %} */
/* 						</li>*/
/* 					   {% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/* 			{% endif %} */
/* 		</li>*/
/*        {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
