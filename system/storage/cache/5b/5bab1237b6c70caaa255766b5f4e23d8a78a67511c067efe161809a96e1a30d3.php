<?php

/* default/template/extension/module/so_html_content/default.twig */
class __TwigTemplate_b8ee6ec311c009173933fc7d3b778c326f01466bad1f196f2c137f43f6625f08 extends Twig_Template
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
        echo "<div class=\"module ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo " \">
  ";
        // line 2
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            echo " 
    <h2>";
            // line 3
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo " </h2>
  ";
        }
        // line 4
        echo " 
  
  ";
        // line 6
        echo (isset($context["html"]) ? $context["html"] : null);
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_html_content/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="module {{ class_suffix }} ">*/
/*   {% if heading_title %} */
/*     <h2>{{ heading_title }} </h2>*/
/*   {% endif %} */
/*   */
/*   {{ html }} */
/* </div>*/
