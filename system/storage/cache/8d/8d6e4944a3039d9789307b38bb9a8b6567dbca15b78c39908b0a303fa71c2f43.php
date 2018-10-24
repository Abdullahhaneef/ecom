<?php

/* so-ladaz/template/extension/module/so_latest_blog/default.twig */
class __TwigTemplate_78228452e3a7658d9cc1d427bedfd04ea8bbf6fa338754f1884c695c5ac61835 extends Twig_Template
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
<div class=\"module so-latest-blog ";
        // line 2
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo " preset01-";
        echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
        echo " preset02-";
        echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
        echo " preset03-";
        echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
        echo " preset04-";
        echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
        echo " preset05-";
        echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
        echo "\">

\t";
        // line 4
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            // line 5
            echo "\t\t<h3 class=\"modtitle\"><span>";
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</span></h3>
\t";
        }
        // line 7
        echo "\t";
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 8
            echo "\t\t<div class=\"form-group\">";
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "</div>
\t";
        }
        // line 10
        echo "\t<div class=\"modcontent clearfix\">
\t\t";
        // line 11
        if ((( !twig_test_empty((isset($context["blogs"]) ? $context["blogs"] : null)) && array_key_exists("error_no_database", $context)) && ((isset($context["error_no_database"]) ? $context["error_no_database"] : null) == ""))) {
            echo "\t
\t\t\t";
            // line 12
            $context["count_item"] = twig_length_filter($this->env, (isset($context["blogs"]) ? $context["blogs"] : null));
            // line 13
            echo "\t\t\t";
            $context["cls_btn_page"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("buttom-type1") : ("button-type2"));
            // line 14
            echo "\t\t\t";
            $context["btn_type"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 15
            echo "\t\t\t";
            $context["btn_prev"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#171;") : ("&#139;"));
            // line 16
            echo "\t\t\t";
            $context["btn_next"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#187;") : ("&#155;"));
            // line 17
            echo "\t\t\t";
            $context["i"] = 0;
            // line 18
            echo "\t\t\t<div id=\"";
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "\" class=\"so-blog-external ";
            echo (isset($context["cls_btn_page"]) ? $context["cls_btn_page"] : null);
            echo " ";
            echo (isset($context["btn_type"]) ? $context["btn_type"] : null);
            echo "\">
\t\t\t\t";
            // line 19
            if (((isset($context["type_show"]) ? $context["type_show"] : null) == "simple")) {
                // line 20
                echo "\t\t\t\t\t<div class=\"blog-external-simple\">
\t\t\t\t\t\t";
                // line 21
                $context["k"] = 0;
                // line 22
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
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
                foreach ($context['_seq'] as $context["key"] => $context["blog"]) {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                    // line 24
                    echo "\t\t\t\t\t\t\t<div class=\"cat-wrap\">
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t";
                    // line 26
                    echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_latest_blog/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 29
                    $context["clear"] = "clr1";
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr2");
                    }
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr3");
                    }
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr4");
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr5");
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr6");
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t<div class=\"";
                    echo (isset($context["clear"]) ? $context["clear"] : null);
                    echo "\"></div>
\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t<div class=\"blog-external\" data-effect=\"";
                echo (isset($context["effect"]) ? $context["effect"] : null);
                echo "\">\t\t\t
\t\t\t\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
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
                foreach ($context['_seq'] as $context["key"] => $context["blog"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    if (((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1))) {
                        // line 43
                        echo "\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "
\t\t\t\t\t\t\t";
                    // line 46
                    echo twig_include($this->env, $context, ((isset($context["theme_config"]) ? $context["theme_config"] : null) . "/template/extension/module/so_latest_blog/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 48
                    if (((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ((isset($context["i"]) ? $context["i"] : null) == (isset($context["count_item"]) ? $context["count_item"] : null)))) {
                        // line 49
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t
\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 54
            echo "\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t;(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".blog-external\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 61
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo ",
\t\t\t\t\t\t_duration = ";
            // line 62
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo ",
\t\t\t\t\t\t_effect = '";
            // line 63
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo "';

\t\t\t\t\t\tthis_item = \$extraslider.find('div.media');
\t\t\t\t\t\tthis_item.find('div.item:eq(0)').addClass('head-button');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-heading').addClass('head-item');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-left').addClass('so-block');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-content').addClass('so-block');
\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 79
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                // line 80
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 86
            echo "
\t\t\t\t\t\t\t";
            // line 87
            if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\tmargin: ";
            // line 97
            echo (isset($context["margin"]) ? $context["margin"] : null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 98
            echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 99
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 100
            echo (isset($context["pausehover"]) ? $context["pausehover"] : null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 101
            echo (isset($context["autoplay_timeout"]) ? $context["autoplay_timeout"] : null);
            echo ",
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 102
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo ",
\t\t\t\t\t\t\tstartPosition: ";
            // line 103
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo ",
\t\t\t\t\t\t\tmouseDrag: ";
            // line 104
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 105
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo ",
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\trtl: ";
            // line 107
            echo ((((isset($context["direction"]) ? $context["direction"] : null) == "ltr")) ? ("false") : ("true"));
            echo ",
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 109
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 110
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 111
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 112
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 113
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo "},
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 117
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo ",
\t\t\t\t\t\t\tdotsSpeed:";
            // line 118
            echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
            echo ",
\t\t\t\t\t\t\tnav: ";
            // line 119
            echo (isset($context["nav"]) ? $context["nav"] : null);
            echo ",
\t\t\t\t\t\t\tloop: ";
            // line 120
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo ",
\t\t\t\t\t\t\tnavSpeed: ";
            // line 121
            echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
            echo ",
\t\t\t\t\t\t\tnavText: [\"";
            // line 122
            echo (isset($context["btn_prev"]) ? $context["btn_prev"] : null);
            echo "\", \"";
            echo (isset($context["btn_next"]) ? $context["btn_next"] : null);
            echo "\"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 127
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                // line 128
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 134
            echo "
\t\t\t\t\t\t\t//var \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t//_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t//_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 141
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                // line 142
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 148
            echo "
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t\t\t\t\t\t_UngetAnimate(\$item);

\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction _getAnimate(\$el) {
\t\t\t\t\t\t\tif (_effect == \"none\") return;
\t\t\t\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t}).animate({
\t\t\t\t\t\t\t\t\topacity: 1
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t})(\"#";
            // line 198
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "\");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>
\t\t";
        } elseif ((        // line 202
array_key_exists("error_no_database", $context) && ((isset($context["error_no_database"]) ? $context["error_no_database"] : null) != ""))) {
            // line 203
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_no_database"]) ? $context["error_no_database"] : null);
            echo "</div>
\t\t";
        } else {
            // line 205
            echo "    \t\t";
            echo (isset($context["NoItem"]) ? $context["NoItem"] : null);
            echo "
\t\t";
        }
        // line 207
        echo "\t</div>
\t";
        // line 208
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 209
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 210
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t</div>
\t";
        }
        // line 213
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-ladaz/template/extension/module/so_latest_blog/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 213,  514 => 210,  511 => 209,  509 => 208,  506 => 207,  500 => 205,  494 => 203,  492 => 202,  485 => 198,  433 => 148,  425 => 142,  423 => 141,  414 => 134,  406 => 128,  404 => 127,  394 => 122,  390 => 121,  386 => 120,  382 => 119,  378 => 118,  374 => 117,  367 => 113,  363 => 112,  359 => 111,  355 => 110,  351 => 109,  346 => 107,  341 => 105,  337 => 104,  333 => 103,  329 => 102,  325 => 101,  321 => 100,  317 => 99,  313 => 98,  309 => 97,  304 => 94,  299 => 91,  294 => 88,  292 => 87,  289 => 86,  281 => 80,  279 => 79,  260 => 63,  256 => 62,  252 => 61,  243 => 54,  239 => 52,  224 => 50,  220 => 49,  218 => 48,  213 => 46,  210 => 45,  206 => 43,  203 => 42,  200 => 41,  183 => 40,  178 => 39,  174 => 37,  157 => 35,  151 => 34,  145 => 33,  139 => 32,  133 => 31,  127 => 30,  125 => 29,  119 => 26,  115 => 24,  112 => 23,  94 => 22,  92 => 21,  89 => 20,  87 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  61 => 12,  57 => 11,  54 => 10,  48 => 8,  45 => 7,  39 => 5,  37 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* <div class="module so-latest-blog {{ class_suffix }} preset01-{{ nb_column0 }} preset02-{{ nb_column1 }} preset03-{{ nb_column2 }} preset04-{{ nb_column3 }} preset05-{{ nb_column4 }}">*/
/* */
/* 	{% if disp_title_module %}*/
/* 		<h3 class="modtitle"><span>{{ head_name }}</span></h3>*/
/* 	{% endif %}*/
/* 	{% if pre_text != '' %}*/
/* 		<div class="form-group">{{ pre_text }}</div>*/
/* 	{% endif %}*/
/* 	<div class="modcontent clearfix">*/
/* 		{% if blogs is not empty and error_no_database is defined and error_no_database == '' %}	*/
/* 			{% set count_item = blogs|length %}*/
/* 			{% set cls_btn_page = button_page == 'top' ? 'buttom-type1' : 'button-type2' %}*/
/* 			{% set btn_type 	= button_page == 'top' ? 'button-type1' : 'button-type2' %}*/
/* 			{% set btn_prev 	= button_page == 'top' ? '&#171;' : '&#139;' %}*/
/* 			{% set btn_next 	= button_page == 'top' ? '&#187;':'&#155;' %}*/
/* 			{% set i = 0 %}*/
/* 			<div id="{{ tag_id  }}" class="so-blog-external {{ cls_btn_page }} {{ btn_type }}">*/
/* 				{% if type_show == 'simple' %}*/
/* 					<div class="blog-external-simple">*/
/* 						{% set k=0 %}*/
/* 						{% for key, blog in blogs %}*/
/* 							{% set k = k + 1 %}*/
/* 							<div class="cat-wrap">*/
/* 								<div class="media">*/
/* 									{{ include (theme_config~"/template/extension/module/so_latest_blog/default_items.twig") }}*/
/* 								</div>*/
/* 							</div>*/
/* 							{% set clear = 'clr1' %}*/
/* 							{% if k % 2 == 0 %} {% set clear = clear ~' clr2' %}{% endif %}*/
/* 							{% if k % 3 == 0 %} {% set clear = clear ~' clr3' %}{% endif %}*/
/* 							{% if k % 4 == 0 %} {% set clear = clear ~' clr4' %}{% endif %}*/
/* 							{% if k % 5 == 0 %} {% set clear = clear ~' clr5' %}{% endif %}*/
/* 							{% if k % 6 == 0 %} {% set clear = clear ~' clr6' %}{% endif %}*/
/* 							<div class="{{ clear }}"></div>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				{% else %}*/
/* 					<div class="blog-external" data-effect="{{ effect }}">			*/
/* 						{% for key, blog in blogs %}*/
/* 							{% set i = i + 1 %}*/
/* 							{% if (i % nb_rows == 1 or nb_rows == 1) %}*/
/* 								<div class="media">*/
/* 							{% endif %}*/
/* */
/* 							{{ include (theme_config~"/template/extension/module/so_latest_blog/default_items.twig") }}*/
/* 							*/
/* 							{% if (i % nb_rows == 0 or i == count_item) %}*/
/* 								</div>*/
/* 							{% endif %}				*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<script type="text/javascript">*/
/* 				//<![CDATA[*/
/* 				jQuery(document).ready(function ($) {*/
/* 					;(function (element) {*/
/* 						var $element = $(element),*/
/* 								$extraslider = $(".blog-external", $element),*/
/* 								_delay = {{ delay }},*/
/* 						_duration = {{ duration }},*/
/* 						_effect = '{{ effect }}';*/
/* */
/* 						this_item = $extraslider.find('div.media');*/
/* 						this_item.find('div.item:eq(0)').addClass('head-button');*/
/* 						this_item.find('div.item:eq(0) .media-heading').addClass('head-item');*/
/* 						this_item.find('div.item:eq(0) .media-left').addClass('so-block');*/
/* 						this_item.find('div.item:eq(0) .media-content').addClass('so-block');*/
/* 						$extraslider.on("initialized.owl.carousel2", function () {*/
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							if ($item_active.length > 1 && _effect != "none") {*/
/* 								_getAnimate($item_active);*/
/* 							}*/
/* 							else {*/
/* 								var $item = $(".owl2-item", $element);*/
/* 								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 							}*/
/* 							{% if dots == "true" %}*/
/* 								if ($(".owl2-dot", $element).length < 2) {*/
/* 									$(".owl2-prev", $element).css("display", "none");*/
/* 									$(".owl2-next", $element).css("display", "none");*/
/* 									$(".owl2-dot", $element).css("display", "none");*/
/* 								}*/
/* 							{% endif %}*/
/* */
/* 							{% if button_page == "top" %}*/
/* 								$(".owl2-controls", $element).insertBefore($extraslider);*/
/* 								$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));*/
/* 							{% else %}*/
/* 								$(".owl2-nav", $element).insertBefore($extraslider);*/
/* 								$(".owl2-controls", $element).insertAfter($extraslider);*/
/* 							{% endif %}*/
/* 						});*/
/* */
/* 						$extraslider.owlCarousel2({*/
/* 							margin: {{ margin }},*/
/* 							slideBy: {{ slideBy }},*/
/* 							autoplay: {{ autoplay }},*/
/* 							autoplayHoverPause: {{ pausehover }},*/
/* 							autoplayTimeout: {{ autoplay_timeout }},*/
/* 							autoplaySpeed: {{ autoplaySpeed }},*/
/* 							startPosition: {{ startPosition }},*/
/* 							mouseDrag: {{ mouseDrag }},*/
/* 							touchDrag: {{ touchDrag }},*/
/* 							autoWidth: false,*/
/* 							rtl: {{ direction == 'ltr' ? 'false' : 'true' }},*/
/* 							responsive: {*/
/* 								0: 	{ items: {{ nb_column4 }} } ,*/
/* 								480: { items: {{ nb_column3 }} },*/
/* 								768: { items: {{ nb_column2 }} },*/
/* 								992: { items: {{ nb_column1 }} },*/
/* 								1200: {items: {{ nb_column0 }}},*/
/* 							},*/
/* 							dotClass: "owl2-dot",*/
/* 							dotsClass: "owl2-dots",*/
/* 							dots: {{ dots }},*/
/* 							dotsSpeed:{{ dotsSpeed }},*/
/* 							nav: {{ nav }},*/
/* 							loop: {{ loop }},*/
/* 							navSpeed: {{ navSpeed }},*/
/* 							navText: ["{{ btn_prev }}", "{{ btn_next }}"],*/
/* 							navClass: ["owl2-prev", "owl2-next"]*/
/* 						});*/
/* */
/* 						$extraslider.on("translate.owl.carousel2", function (e) {*/
/* 							{% if dots == "true" %}*/
/* 								if ($(".owl2-dot", $element).length < 2) {*/
/* 									$(".owl2-prev", $element).css("display", "none");*/
/* 									$(".owl2-next", $element).css("display", "none");*/
/* 									$(".owl2-dot", $element).css("display", "none");*/
/* 								}*/
/* 							{% endif %}*/
/* */
/* 							//var $item_active = $(".owl2-item.active", $element);*/
/* 							//_UngetAnimate($item_active);*/
/* 							//_getAnimate($item_active);*/
/* 						});*/
/* */
/* 						$extraslider.on("translated.owl.carousel2", function (e) {*/
/* 							{% if dots == "true" %}*/
/* 								if ($(".owl2-dot", $element).length < 2) {*/
/* 									$(".owl2-prev", $element).css("display", "none");*/
/* 									$(".owl2-next", $element).css("display", "none");*/
/* 									$(".owl2-dot", $element).css("display", "none");*/
/* 								}*/
/* 							{% endif %}*/
/* */
/* 							var $item_active = $(".owl2-item.active", $element);*/
/* 							var $item = $(".owl2-item", $element);*/
/* */
/* 							_UngetAnimate($item);*/
/* */
/* 							if ($item_active.length > 1 && _effect != "none") {*/
/* 								_getAnimate($item_active);*/
/* 							} else {*/
/* 								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 							}*/
/* 						});*/
/* */
/* 						function _getAnimate($el) {*/
/* 							if (_effect == "none") return;*/
/* 							//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;*/
/* 							$extraslider.removeClass("extra-animate");*/
/* 							$el.each(function (i) {*/
/* 								var $_el = $(this);*/
/* 								$(this).css({*/
/* 									"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 									"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 									"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 									"animation": _effect + " " + _duration + "ms ease both",*/
/* 									"-webkit-animation-delay": +i * _delay + "ms",*/
/* 									"-moz-animation-delay": +i * _delay + "ms",*/
/* 									"-o-animation-delay": +i * _delay + "ms",*/
/* 									"animation-delay": +i * _delay + "ms",*/
/* 									"opacity": 1*/
/* 								}).animate({*/
/* 									opacity: 1*/
/* 								});*/
/* */
/* 								if (i == $el.size() - 1) {*/
/* 									$extraslider.addClass("extra-animate");*/
/* 								}*/
/* 							});*/
/* 						}*/
/* */
/* 						function _UngetAnimate($el) {*/
/* 							$el.each(function (i) {*/
/* 								$(this).css({*/
/* 									"animation": "",*/
/* 									"-webkit-animation": "",*/
/* 									"-moz-animation": "",*/
/* 									"-o-animation": "",*/
/* 									"opacity": 1*/
/* 								});*/
/* 							});*/
/* 						}*/
/* 					})("#{{ tag_id }}");*/
/* 				});*/
/* 				//]]>*/
/* 			</script>*/
/* 		{% elseif error_no_database is defined and error_no_database != '' %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>{{ error_no_database }}</div>*/
/* 		{% else %}*/
/*     		{{ NoItem }}*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	{% if post_text != '' %}*/
/* 		<div class="form-group">*/
/* 			{{ post_text }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
