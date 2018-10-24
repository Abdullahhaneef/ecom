<?php

/* so-ladaz/template/common/language.twig */
class __TwigTemplate_a69d38fde878fac713fe21f38a025389c790437583e2f9f89ed40b5aac1e9b92 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "
  <form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group\">
      <button class=\"btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                echo "      ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    echo " 
      <img src=\"catalog/language/";
                    // line 8
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\">
      <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 9
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "</span>
      ";
                }
                // line 11
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "      <i class=\"fa fa-angle-down\"></i>
    </button>
      
    <ul class=\"dropdown-menu\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 17
                echo "        <li>
          <button class=\"btn-block language-select\" type=\"button\" name=\"";
                // line 18
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</button>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 24
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  92 => 21,  73 => 18,  70 => 17,  66 => 16,  60 => 12,  54 => 11,  49 => 9,  39 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* */
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-language">*/
/*     <div class="btn-group">*/
/*       <button class="btn-link dropdown-toggle" data-toggle="dropdown">*/
/*       {% for language in languages %}*/
/*       {% if language.code == code %} */
/*       <img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}">*/
/*       <span class="hidden-xs hidden-sm hidden-md">{{ language.name }}</span>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*       <i class="fa fa-angle-down"></i>*/
/*     </button>*/
/*       */
/*     <ul class="dropdown-menu">*/
/*         {% for language in languages %}*/
/*         <li>*/
/*           <button class="btn-block language-select" type="button" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" /> {{ language.name }}</button>*/
/*         </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* */
/* {% endif %}*/
/* */
