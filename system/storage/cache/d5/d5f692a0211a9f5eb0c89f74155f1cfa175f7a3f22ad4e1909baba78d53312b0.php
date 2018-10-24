<?php

/* so-ladaz/template/common/header.twig */
class __TwigTemplate_037b4669f7527f728c750ea1d309af7bcc51855d47cd3eaf6c47d7b84fb8f65c extends Twig_Template
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
        // line 9
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 18
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 19
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->

";
        // line 22
        if (((isset($context["direction"]) ? $context["direction"] : null) == "ltr")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo "
";
        } elseif ((        // line 23
(isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"), "method");
            echo " 
";
        } else {
            // line 24
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo " ";
        }
        // line 25
        echo "
";
        // line 26
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        echo "
";
        // line 27
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/lib.css"), "method");
        echo "
";
        // line 28
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/ie9-and-up.css")), "method");
        echo "
";
        // line 29
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/custom.css")), "method");
        echo "

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_status"), "method")) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_url"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                echo " ";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $context["cssfile"]), "method");
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        // line 33
        echo "
";
        // line 35
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "method");
        echo "
";
        // line 36
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "method");
        echo "
";
        // line 37
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/libs.js"), "method");
        echo "

";
        // line 39
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/so.system.js"), "method");
        echo "
";
        // line 40
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"), "method");
        echo "
";
        // line 41
        if (((isset($context["class"]) ? $context["class"] : null) == "information-information")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/typo/element.js"), "method");
            echo " ";
        }
        // line 42
        echo "

";
        // line 44
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/so.custom.js")), "method");
        echo "
";
        // line 45
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/common.js")), "method");
        echo "

";
        // line 47
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_status"), "method")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/toppanel.js"), "method");
        }
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => $context["script"]), "method");
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

";
        // line 52
        echo "
";
        // line 53
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "scss_compass", array());
        echo "
";
        // line 54
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "css_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssExclude"), "method")), "method");
        echo "
";
        // line 55
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "js_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsExclude"), "method")), "method");
        echo "


";
        // line 59
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 60
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 61
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 62
        if ((isset($context["selector_body"]) ? $context["selector_body"] : null)) {
            // line 63
            echo "\t<style type=\"text/css\">
\t\t";
            // line 64
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_body"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 65
                echo "  ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_body"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 67
        echo " 
";
        // line 68
        if ((isset($context["selector_menu"]) ? $context["selector_menu"] : null)) {
            // line 69
            echo "\t<style type=\"text/css\">
\t\t";
            // line 70
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_menu"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 71
                echo "  ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_menu"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 73
        echo " 
";
        // line 74
        if ((isset($context["selector_heading"]) ? $context["selector_heading"] : null)) {
            // line 75
            echo "\t<style type=\"text/css\">
\t\t";
            // line 76
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_heading"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 77
                echo "  ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_heading"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 79
        echo " 


";
        // line 83
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method")))) {
            // line 84
            echo "    <style type=\"text/css\">";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method");
            echo " </style>
";
        }
        // line 85
        echo " 

";
        // line 87
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method")))) {
            // line 88
            echo "   <script type=\"text/javascript\"><!--";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method");
            echo "  //--></script>
";
        }
        // line 89
        echo " 


";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 95
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
";
        // line 99
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method") == "boxed")) {
            echo " 
\t<style type=\"text/css\">
\tbody {
\t\tbackground-color:";
            // line 102
            echo (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) : ("none"));
            echo " ;\t\t
\t\t";
            // line 103
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method") != "")) {
                // line 104
                echo "\t\t\tbackground-image: url(\"image/";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method");
                echo " \");
\t\t";
            }
            // line 106
            echo "\t\tbackground-repeat:";
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method")) : ("no-repeat"));
            echo " ;
\t\tbackground-attachment:";
            // line 107
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method")) : ("inherit"));
            echo " ;
\t\tbackground-position:top center; 
\t}
\t</style>
";
        }
        // line 111
        echo " \t

</head>
";
        // line 115
        echo "
\t";
        // line 116
        $context["layoutbox"] = (( !twig_test_empty((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null))) ? ((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method")));
        // line 117
        echo "\t";
        $context["pattern"] = (( !twig_test_empty((isset($context["url_pattern"]) ? $context["url_pattern"] : null))) ? ((isset($context["url_pattern"]) ? $context["url_pattern"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "pattern"), "method")));
        // line 118
        echo "

\t";
        // line 120
        $context["cls_body"] = ((isset($context["class"]) ? $context["class"] : null) . " ");
        // line 121
        echo "\t";
        $context["cls_body"] = ((isset($context["cls_body"]) ? $context["cls_body"] : null) . (isset($context["direction"]) ? $context["direction"] : null));
        // line 122
        echo "\t";
        $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " layout-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typelayout"), "method"));
        // line 123
        if (((((isset($context["layoutbox"]) ? $context["layoutbox"] : null) == "boxed") && ((isset($context["pattern"]) ? $context["pattern"] : null) != "none")) && twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method")))) {
            // line 124
            echo "\t";
            $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " pattern-") . (isset($context["pattern"]) ? $context["pattern"] : null));
        }
        // line 125
        echo " 

\t";
        // line 127
        $context["cls_wrapper"] = ("wrapper-" . (isset($context["layoutbox"]) ? $context["layoutbox"] : null));
        // line 128
        echo "\t";
        $context["cls_wrapper"] = (((isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null) . " banners-effect-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "type_banner"), "method"));
        // line 129
        echo "
\t
<body class=\"";
        // line 131
        echo (isset($context["cls_body"]) ? $context["cls_body"] : null);
        echo "\">
<div id=\"wrapper\" class=\"";
        // line 132
        echo (isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null);
        echo "\">  
 
";
        // line 135
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader"), "method")) {
            // line 136
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/preloader.twig"), "so-ladaz/template/common/header.twig", 136)->display(array_merge($context, array("preloader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader_animation"), "method"))));
        }
        // line 138
        echo "
";
        // line 140
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "1")) {
            // line 141
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-ladaz/template/common/header.twig", 141)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
            // line 142
            echo "
";
        } else {
            // line 143
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 155
        echo "

";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 155,  446 => 143,  442 => 142,  439 => 141,  437 => 140,  434 => 138,  430 => 136,  428 => 135,  423 => 132,  419 => 131,  415 => 129,  412 => 128,  410 => 127,  406 => 125,  402 => 124,  400 => 123,  397 => 122,  394 => 121,  392 => 120,  388 => 118,  385 => 117,  383 => 116,  380 => 115,  375 => 111,  367 => 107,  362 => 106,  356 => 104,  354 => 103,  350 => 102,  344 => 99,  341 => 97,  332 => 95,  327 => 94,  314 => 93,  309 => 89,  303 => 88,  301 => 87,  297 => 85,  291 => 84,  289 => 83,  284 => 79,  276 => 77,  269 => 76,  266 => 75,  264 => 74,  261 => 73,  253 => 71,  246 => 70,  243 => 69,  241 => 68,  238 => 67,  230 => 65,  223 => 64,  220 => 63,  218 => 62,  210 => 61,  202 => 60,  194 => 59,  188 => 55,  184 => 54,  180 => 53,  177 => 52,  173 => 49,  162 => 48,  158 => 47,  153 => 45,  149 => 44,  145 => 42,  139 => 41,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  115 => 33,  101 => 32,  92 => 31,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 23,  56 => 22,  52 => 19,  46 => 18,  40 => 17,  35 => 15,  31 => 14,  22 => 10,  19 => 9,);
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
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1"> */
/* {% if description %}<meta name="description" content="{{ description }}" />{% endif %}*/
/* {% if keywords %}<meta name="keywords" content="{{ keywords }}" />{% endif %}*/
/* <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/* */
/* {# =========== Begin General CSS ==============#}*/
/* {% if direction=='ltr' %} {{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}*/
/* {% elseif direction=='rtl' %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css')}} */
/* {% else %}{{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}} {% endif %}*/
/* */
/* {{soconfig.addCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}*/
/* {{soconfig.addCss('catalog/view/javascript/soconfig/css/lib.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/ie9-and-up.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/custom.css')}}*/
/* */
/* {% for style in styles %}{{ soconfig.addCss(style.href)}}{% endfor %}*/
/* {% if soconfig.get_settings('cssfile_status') %}{% for cssfile in soconfig.get_settings('cssfile_url') %} {{soconfig.addCss(cssfile)}} {% endfor %} {% endif %}*/
/* */
/* {# =========== Begin General Scripts ==============#}*/
/* {{soconfig.addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/libs.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/so.system.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js')}}*/
/* {% if class=='information-information' %} {{soconfig.addJs('catalog/view/javascript/soconfig/js/typo/element.js')}} {% endif %}*/
/* */
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/so.custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/common.js')}}*/
/* */
/* {% if soconfig.get_settings('toppanel_status') %}{{soconfig.addJs('catalog/view/javascript/soconfig/js/toppanel.js')}}{% endif %}*/
/* {% for script in scripts %} {{soconfig.addJs(script)}} {% endfor %}*/
/* */
/* */
/* {# =========== Begin Other CSS & JS  ==============#}*/
/* */
/* {{soconfig.scss_compass}}*/
/* {{soconfig.css_out(soconfig.get_settings('cssExclude'))}}*/
/* {{soconfig.js_out(soconfig.get_settings('jsExclude'))}}*/
/* */
/* */
/* {# =========== Begin Google Font ==============#}*/
/* {% if soconfig.get_settings('url_body')  and  soconfig.get_settings('body_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_body') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_menu')  and  soconfig.get_settings('menu_status')  ==  'google' %} <link href='{{ soconfig.get_settings('url_menu') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_heading')  and  soconfig.get_settings('heading_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_heading') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if selector_body %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('body_status') == 'google' %} {{ (selector_body|raw~'{font-family:'~ soconfig.get_settings('family_body')~'}') }}*/
/* 		{% else %}  {{ selector_body|raw~'{font-family:'~ soconfig.get_settings('normal_body')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_menu %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('menu_status') == 'google' %} {{ (selector_menu|raw~'{font-family:'~ soconfig.get_settings('family_menu')~'}') }}*/
/* 		{% else %}  {{ selector_menu|raw~'{font-family:'~ soconfig.get_settings('normal_menu')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_heading %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('heading_status') == 'google' %} {{ (selector_heading|raw~'{font-family:'~ soconfig.get_settings('family_heading')~'}') }}*/
/* 		{% else %}  {{ selector_heading|raw~'{font-family:'~ soconfig.get_settings('normal_heading')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Custom Code Editor ==============#}*/
/* {% if soconfig.get_settings('cssinput_status') and (soconfig.get_settings('cssinput_content')) is not empty %}*/
/*     <style type="text/css">{{ soconfig.get_settings('cssinput_content')  }} </style>*/
/* {% endif %} */
/* */
/* {% if soconfig.get_settings('jsinput_status') and (soconfig.get_settings('jsinput_content')) is not empty %}*/
/*    <script type="text/javascript"><!--{{ soconfig.get_settings('jsinput_content')  }}  //--></script>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Begin Google Analytics ==============#}*/
/* {% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" />{% endfor %}*/
/* 	{% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* */
/* {# =========== Begin Cusom Code ==============#}*/
/* {% if soconfig.get_settings('layoutstyle') == 'boxed'  %} */
/* 	<style type="text/css">*/
/* 	body {*/
/* 		background-color:{{ soconfig.get_settings('theme_bgcolor') ? soconfig.get_settings('theme_bgcolor') : 'none' }} ;		*/
/* 		{% if soconfig.get_settings('contentbg') !='' %}*/
/* 			background-image: url("image/{{soconfig.get_settings('contentbg') }} ");*/
/* 		{% endif %}*/
/* 		background-repeat:{{ soconfig.get_settings('content_bg_mode') is not empty ? soconfig.get_settings('content_bg_mode') : 'no-repeat' }} ;*/
/* 		background-attachment:{{ soconfig.get_settings('content_attachment') is not empty ? soconfig.get_settings('content_attachment') : 'inherit' }} ;*/
/* 		background-position:top center; */
/* 	}*/
/* 	</style>*/
/* {% endif %} 	*/
/* */
/* </head>*/
/* {# =========== Add class Body ==============#}*/
/* */
/* 	{% set layoutbox =  url_layoutbox is not empty  ? url_layoutbox : soconfig.get_settings('layoutstyle') %}*/
/* 	{% set pattern  =  url_pattern is not empty    ? url_pattern : soconfig.get_settings('pattern') %}*/
/* */
/* */
/* 	{% set cls_body = class ~ ' ' %}*/
/* 	{% set cls_body = cls_body ~ direction %}*/
/* 	{% set cls_body = cls_body ~ ' layout-'~soconfig.get_settings('typelayout')%}*/
/* {% if layoutbox=='boxed' and pattern !='none' and soconfig.get_settings('contentbg') is empty %}*/
/* 	{% set cls_body = cls_body ~ ' pattern-'~pattern%}*/
/* {% endif %} */
/* */
/* 	{% set cls_wrapper = 'wrapper-'~layoutbox%}*/
/* 	{% set cls_wrapper = cls_wrapper ~ ' banners-effect-'~soconfig.get_settings('type_banner')%}*/
/* */
/* 	*/
/* <body class="{{cls_body}}">*/
/* <div id="wrapper" class="{{cls_wrapper}}">  */
/*  */
/* {# =========== Show Preloader ==============#}*/
/* {% if soconfig.get_settings('preloader')%}*/
/* 	{% include theme_directory~'/template/soconfig/preloader.twig' with {preloader: soconfig.get_settings('preloader_animation')} %}*/
/* {% endif %}*/
/* */
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('typeheader') =='1'%}*/
/* 	{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* */
/* {% else%}	*/
/* 	<style>*/
/* 		.alert-primary .alert-link {color: #002752;}*/
/* 		.alert-link {font-weight: 700;text-decoration: none;}*/
/* 		.alert-link:hover{text-decoration: underline;}*/
/* 		.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;*/
/* 		}*/
/* 	</style>*/
/* 	<div class="alert alert-primary">*/
/* 			Go to admin, find Extensions >>  <a class="alert-link" href="admin/index.php?route=marketplace/modification"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* */
/* */
