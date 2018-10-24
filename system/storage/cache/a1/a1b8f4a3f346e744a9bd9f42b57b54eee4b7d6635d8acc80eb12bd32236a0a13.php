<?php

/* so-ladaz/template/common/home.twig */
class __TwigTemplate_aa01b5b703f9725eb870eca9944c857c841efbc70e5dabb3b04e1750962e6ba3 extends Twig_Template
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
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

  
 
 <div id=\"content\" class=\"";
        // line 6
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t
\t
\t<div class=\"container\">

\t\t<div class=\"block_slide\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-12 slide-left\">
\t\t\t\t\t ";
        // line 14
        echo (isset($context["content_home1"]) ? $context["content_home1"] : null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12 slide-right\">
\t\t\t\t\t";
        // line 17
        echo (isset($context["content_home2"]) ? $context["content_home2"] : null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 21
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t";
        // line 22
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t</div>
\t
</div>  

";
        // line 27
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  57 => 22,  53 => 21,  46 => 17,  40 => 14,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
/* */
/*   */
/*  */
/*  <div id="content" class="{{ class }}">*/
/* 	*/
/* 	*/
/* 	<div class="container">*/
/* */
/* 		<div class="block_slide">*/
/* 			<div class="row">*/
/* 				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 slide-left">*/
/* 					 {{ content_home1 }}*/
/* 				</div>*/
/* 				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 slide-right">*/
/* 					{{ content_home2 }}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		{{ content_top }}*/
/* 		{{ content_bottom }}*/
/* 	</div>*/
/* 	*/
/* </div>  */
/* */
/* {{ footer }}*/
