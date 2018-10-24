<?php

/* extension/module/modification_manager/list.twig */
class __TwigTemplate_86d6f082ab231846edb9e31e62d5965bf21fb8018519fe9ede956892bbd91a3e extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></a>
      \t<a href=\"";
        // line 6
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
      \t<a href=\"";
        // line 7
        echo (isset($context["clear"]) ? $context["clear"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-modification').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
       ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_refresh"]) ? $context["text_refresh"] : null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 32
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
          <li><a href=\"#tab-log\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_log"]) ? $context["tab_log"] : null);
        echo "</a></li>
          ";
        // line 38
        if ((isset($context["modified_files"]) ? $context["modified_files"] : null)) {
            echo "<li><a href=\"#tab-files\" data-toggle=\"tab\">";
            echo (isset($context["tab_files"]) ? $context["tab_files"] : null);
            echo "</a></li>";
        }
        // line 39
        echo "          ";
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            echo "<li><a href=\"#tab-error\" data-toggle=\"tab\">";
            echo (isset($context["tab_error"]) ? $context["tab_error"] : null);
            echo "</a></li>";
        }
        // line 40
        echo "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form id=\"form-filter\" method=\"get\" class=\"well\">
\t\t      <div class=\"row\">
\t\t        <div class=\"col-sm-4\">
\t\t          <div class=\"form-group\">
\t\t            <label class=\"control-label\" for=\"input-name\">";
        // line 47
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 48
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-4\">
\t              <div class=\"form-group\">
\t                <label class=\"control-label\" for=\"input-author\">";
        // line 53
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_author\" value=\"";
        // line 54
        echo (isset($context["filter_author"]) ? $context["filter_author"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "\" id=\"input-author\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-4\">
\t              <div class=\"form-group\">
\t                <label class=\"control-label\" for=\"input-xml\">";
        // line 59
        echo (isset($context["entry_xml"]) ? $context["entry_xml"] : null);
        echo "</label>
\t                <input type=\"text\" name=\"filter_xml\" value=\"";
        // line 60
        echo (isset($context["filter_xml"]) ? $context["filter_xml"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_xml"]) ? $context["entry_xml"] : null);
        echo "\" id=\"input-xml\" class=\"form-control\" />
\t              </div>
\t            </div>
\t            <div class=\"col-sm-12\">
\t              <div class=\"btn-group pull-right\">
\t\t            <button type=\"submit\" id=\"button-filter\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 65
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\"><i class=\"fa fa-search\"></i></button>
\t\t            ";
        // line 66
        if ((( !twig_test_empty((isset($context["filter_name"]) ? $context["filter_name"] : null)) ||  !twig_test_empty((isset($context["filter_author"]) ? $context["filter_author"] : null))) ||  !twig_test_empty((isset($context["filter_xml"]) ? $context["filter_xml"] : null)))) {
            echo "<a href=\"";
            echo (isset($context["reset_url"]) ? $context["reset_url"] : null);
            echo "\" id=\"button-filter\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_reset"]) ? $context["button_reset"] : null);
            echo "\"><i class=\"fa fa-times\"></i></a>";
        }
        // line 67
        echo "\t\t          </div>
\t            </div>
\t          </div>
\t        </form>
            <form action=\"";
        // line 71
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></th>
                      <th class=\"text-left\"><a href=\"";
        // line 77
        echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
        echo "\"";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\"";
        }
        echo ">";
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</a></th>
                      <th class=\"text-left\"><a href=\"";
        // line 78
        echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
        echo "\"";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "author")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\"";
        }
        echo ">";
        echo (isset($context["column_author"]) ? $context["column_author"] : null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 79
        echo (isset($context["sort_version"]) ? $context["sort_version"] : null);
        echo "\"";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "version")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\"";
        }
        echo ">";
        echo (isset($context["column_version"]) ? $context["column_version"] : null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 80
        echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
        echo "\"";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\"";
        }
        echo ">";
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 81
        echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
        echo "\"";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\"";
        }
        echo ">";
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</a></th>
                      <th class=\"text-center\"><a href=\"";
        // line 82
        echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
        echo "\"";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\"";
        }
        echo ">";
        echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
        echo "</a></th>
                      <th class=\"text-right\">";
        // line 83
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        if ((isset($context["modifications"]) ? $context["modifications"] : null)) {
            // line 88
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modifications"]) ? $context["modifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modification"]) {
                // line 89
                echo "                    <tr>
                      <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 90
                echo $this->getAttribute($context["modification"], "modification_id", array());
                echo "\"";
                if (twig_in_filter($this->getAttribute($context["modification"], "modification_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    echo " checked=\"checked\" ";
                }
                echo " /></td>
                      <td class=\"text-left\">";
                // line 91
                echo $this->getAttribute($context["modification"], "name", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 92
                echo $this->getAttribute($context["modification"], "author", array());
                echo "</td>
                      <td class=\"text-center\">";
                // line 93
                echo $this->getAttribute($context["modification"], "version", array());
                echo "</td>
                      <td class=\"text-center\"><i class=\"fa fa-";
                // line 94
                if ($this->getAttribute($context["modification"], "enabled", array())) {
                    echo "check-circle text-success";
                } else {
                    echo "times-circle text-warning";
                }
                echo " fa-2x\"></i></td>
                      <td class=\"text-center\">";
                // line 95
                echo $this->getAttribute($context["modification"], "date_added", array());
                echo "</td>
                      <td class=\"text-center\">";
                // line 96
                echo $this->getAttribute($context["modification"], "date_modified", array());
                echo "</td>
                      <td class=\"text-right\">
                      ";
                // line 98
                if ($this->getAttribute($context["modification"], "edit", array())) {
                    // line 99
                    echo "        \t            <a href=\"";
                    echo $this->getAttribute($context["modification"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                      ";
                } else {
                    // line 101
                    echo "\t\t\t            <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
\t\t              ";
                }
                // line 103
                echo "
      \t              ";
                // line 104
                if ($this->getAttribute($context["modification"], "link", array())) {
                    // line 105
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["modification"], "link", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_link"]) ? $context["button_link"] : null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-link\"></i></a>
                      ";
                } else {
                    // line 107
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-link\"></i></button>
                      ";
                }
                // line 109
                echo "\t\t\t\t\t   
\t\t\t\t\t   ";
                // line 110
                if ($this->getAttribute($context["modification"], "download", array())) {
                    // line 111
                    echo "                        <a href=\"";
                    echo $this->getAttribute($context["modification"], "download", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_download"]) ? $context["button_download"] : null);
                    echo "\" class=\"btn btn-info\" target=\"_blank\"><i class=\"fa fa-cloud-download\"></i></a>
                      ";
                } else {
                    // line 113
                    echo "                        <button type=\"button\" class=\"btn btn-info\" disabled=\"disabled\"><i class=\"fa fa-cloud-download\"></i></button>
                      ";
                }
                // line 115
                echo "\t\t\t\t\t  
                      ";
                // line 116
                if ($this->getAttribute($context["modification"], "enabled", array())) {
                    // line 117
                    echo "                          <a href=\"";
                    echo $this->getAttribute($context["modification"], "disable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                      ";
                } else {
                    // line 119
                    echo "                          <a href=\"";
                    echo $this->getAttribute($context["modification"], "enable", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                      ";
                }
                // line 120
                echo "</td>
\t\t\t\t\t  
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                    ";
        } else {
            // line 125
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 126
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 129
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 134
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 135
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
          ";
        // line 138
        if ((isset($context["error_log"]) ? $context["error_log"] : null)) {
            // line 139
            echo "          <div class=\"tab-pane\" id=\"tab-error\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
            // line 141
            echo (isset($context["error_log"]) ? $context["error_log"] : null);
            echo "</textarea>
            </p>
            <div class=\"text-right\"><a href=\"";
            // line 143
            echo (isset($context["clear_log"]) ? $context["clear_log"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
            echo "</a></div>
          </div>
          ";
        }
        // line 146
        echo "          ";
        if ((isset($context["modified_files"]) ? $context["modified_files"] : null)) {
            // line 147
            echo "          <div class=\"tab-pane\" id=\"tab-files\">
          \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-condensed\">
            \t<thead><tr>
            \t\t<th class=\"text-center\">File</th>
            \t\t<th class=\"text-center\">Modified By</th>
            \t</tr></thead>
            \t<tbody>
            \t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modified_files"]) ? $context["modified_files"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["modified_file"]) {
                // line 156
                echo "            \t<tr>
            \t\t<td style=\"vertical-align:top\">";
                // line 157
                echo $this->getAttribute($context["modified_file"], "file", array());
                echo "</td>
            \t\t<td>";
                // line 158
                if ($this->getAttribute($context["modified_file"], "modifications", array())) {
                    // line 159
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["modified_file"], "modifications", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["modified_file_modification"]) {
                        // line 160
                        echo "            \t\t\t\t";
                        if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                            echo "<br />";
                        }
                        // line 161
                        echo "            \t\t\t\t<b>";
                        echo $this->getAttribute($context["modified_file_modification"], "name", array());
                        echo "</b> by: ";
                        echo $this->getAttribute($context["modified_file_modification"], "author", array());
                        echo "
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file_modification'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "            \t\t";
                }
                echo "</td>
            \t</tr>
            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modified_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "            \t</tbody>
            </table>
            </div>
            <div class=\"text-right\"><a href=\"";
            // line 169
            echo (isset($context["clear_log"]) ? $context["clear_log"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
            echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
            echo "</a></div>
          </div>
          ";
        }
        // line 172
        echo "          <div class=\"tab-pane\" id=\"tab-log\">
            <p>
              <textarea wrap=\"off\" rows=\"15\" class=\"form-control\">";
        // line 174
        echo (isset($context["log"]) ? $context["log"] : null);
        echo "</textarea>
            </p>
            <div class=\"text-right\"><a href=\"";
        // line 176
        echo (isset($context["clear_log"]) ? $context["clear_log"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i> ";
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-filter').on('submit', function() {
\tvar url = 'index.php?route=marketplace/modification&user_token=";
        // line 185
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();
\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_xml = \$('input[name=\\'filter_xml\\']').val();
\tif (filter_xml) {
\t\turl += '&filter_xml=' + encodeURIComponent(filter_xml);
\t}

\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}

\tlocation = url;

\treturn false;
});
//--></script>
";
        // line 207
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/modification_manager/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 207,  578 => 185,  564 => 176,  559 => 174,  555 => 172,  547 => 169,  542 => 166,  532 => 163,  513 => 161,  508 => 160,  490 => 159,  488 => 158,  484 => 157,  481 => 156,  477 => 155,  467 => 147,  464 => 146,  456 => 143,  451 => 141,  447 => 139,  445 => 138,  439 => 135,  435 => 134,  428 => 129,  422 => 126,  419 => 125,  416 => 124,  407 => 120,  399 => 119,  391 => 117,  389 => 116,  386 => 115,  382 => 113,  374 => 111,  372 => 110,  369 => 109,  365 => 107,  357 => 105,  355 => 104,  352 => 103,  348 => 101,  340 => 99,  338 => 98,  333 => 96,  329 => 95,  321 => 94,  317 => 93,  313 => 92,  309 => 91,  301 => 90,  298 => 89,  293 => 88,  291 => 87,  284 => 83,  272 => 82,  260 => 81,  248 => 80,  236 => 79,  224 => 78,  212 => 77,  203 => 71,  197 => 67,  189 => 66,  185 => 65,  175 => 60,  171 => 59,  161 => 54,  157 => 53,  147 => 48,  143 => 47,  134 => 40,  127 => 39,  121 => 38,  117 => 37,  113 => 36,  106 => 32,  99 => 29,  91 => 25,  88 => 24,  80 => 20,  78 => 19,  72 => 15,  61 => 13,  57 => 12,  52 => 10,  45 => 8,  39 => 7,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-info"><i class="fa fa-refresh"></i></a>*/
/*       	<a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*       	<a href="{{ clear }}" data-toggle="tooltip" title="{{ button_clear }}" class="btn btn-warning"><i class="fa fa-eraser"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-modification').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*        {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_refresh }}</div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*           <li><a href="#tab-log" data-toggle="tab">{{ tab_log }}</a></li>*/
/*           {% if modified_files %}<li><a href="#tab-files" data-toggle="tab">{{ tab_files }}</a></li>{% endif %}*/
/*           {% if error_log %}<li><a href="#tab-error" data-toggle="tab">{{ tab_error }}</a></li>{% endif %}*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*           <div class="tab-pane active" id="tab-general">*/
/*             <form id="form-filter" method="get" class="well">*/
/* 		      <div class="row">*/
/* 		        <div class="col-sm-4">*/
/* 		          <div class="form-group">*/
/* 		            <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/* 	                <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/* 	              </div>*/
/* 	            </div>*/
/* 	            <div class="col-sm-4">*/
/* 	              <div class="form-group">*/
/* 	                <label class="control-label" for="input-author">{{ entry_author }}</label>*/
/* 	                <input type="text" name="filter_author" value="{{ filter_author }}" placeholder="{{ entry_author }}" id="input-author" class="form-control" />*/
/* 	              </div>*/
/* 	            </div>*/
/* 	            <div class="col-sm-4">*/
/* 	              <div class="form-group">*/
/* 	                <label class="control-label" for="input-xml">{{ entry_xml }}</label>*/
/* 	                <input type="text" name="filter_xml" value="{{ filter_xml }}" placeholder="{{ entry_xml }}" id="input-xml" class="form-control" />*/
/* 	              </div>*/
/* 	            </div>*/
/* 	            <div class="col-sm-12">*/
/* 	              <div class="btn-group pull-right">*/
/* 		            <button type="submit" id="button-filter" class="btn btn-primary" data-toggle="tooltip" title="{{ button_filter }}"><i class="fa fa-search"></i></button>*/
/* 		            {% if (filter_name is not empty) or (filter_author is not empty) or (filter_xml is not empty) %}<a href="{{ reset_url }}" id="button-filter" class="btn btn-danger" data-toggle="tooltip" title="{{ button_reset }}"><i class="fa fa-times"></i></a>{% endif %}*/
/* 		          </div>*/
/* 	            </div>*/
/* 	          </div>*/
/* 	        </form>*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-modification">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <th style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></th>*/
/*                       <th class="text-left"><a href="{{ sort_name }}"{% if sort == 'name' %} class="{{ order|lower }}"{% endif %}>{{ column_name }}</a></th>*/
/*                       <th class="text-left"><a href="{{ sort_author }}"{% if sort == 'author' %} class="{{ order|lower }}"{% endif %}>{{ column_author }}</a></th>*/
/*                       <th class="text-center"><a href="{{ sort_version }}"{% if sort == 'version' %} class="{{ order|lower }}"{% endif %}>{{ column_version }}</a></th>*/
/*                       <th class="text-center"><a href="{{ sort_status }}"{% if sort == 'status' %} class="{{ order|lower }}"{% endif %}>{{ column_status }}</a></th>*/
/*                       <th class="text-center"><a href="{{ sort_date_added }}"{% if sort == 'date_added' %} class="{{ order|lower }}"{% endif %}>{{ column_date_added }}</a></th>*/
/*                       <th class="text-center"><a href="{{ sort_date_modified }}"{% if sort == 'date_modified' %} class="{{ order|lower }}"{% endif %}>{{ column_date_modified }}</a></th>*/
/*                       <th class="text-right">{{ column_action }}</th>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if modifications %}*/
/*                     {% for modification in modifications %}*/
/*                     <tr>*/
/*                       <td class="text-center"><input type="checkbox" name="selected[]" value="{{ modification.modification_id }}"{% if modification.modification_id in selected %} checked="checked" {% endif %} /></td>*/
/*                       <td class="text-left">{{ modification.name }}</td>*/
/*                       <td class="text-left">{{ modification.author }}</td>*/
/*                       <td class="text-center">{{ modification.version }}</td>*/
/*                       <td class="text-center"><i class="fa fa-{% if modification.enabled %}check-circle text-success{% else %}times-circle text-warning{% endif %} fa-2x"></i></td>*/
/*                       <td class="text-center">{{ modification.date_added }}</td>*/
/*                       <td class="text-center">{{ modification.date_modified }}</td>*/
/*                       <td class="text-right">*/
/*                       {% if modification.edit %}*/
/*         	            <a href="{{ modification.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                       {% else %}*/
/* 			            <button type="button" class="btn btn-info" disabled="disabled"><i class="fa fa-link"></i></button>*/
/* 		              {% endif %}*/
/* */
/*       	              {% if modification.link %}*/
/*                         <a href="{{ modification.link }}" data-toggle="tooltip" title="{{ button_link }}" class="btn btn-info" target="_blank"><i class="fa fa-link"></i></a>*/
/*                       {% else %}*/
/*                         <button type="button" class="btn btn-info" disabled="disabled"><i class="fa fa-link"></i></button>*/
/*                       {% endif %}*/
/* 					   */
/* 					   {% if modification.download %}*/
/*                         <a href="{{ modification.download }}" data-toggle="tooltip" title="{{ button_download }}" class="btn btn-info" target="_blank"><i class="fa fa-cloud-download"></i></a>*/
/*                       {% else %}*/
/*                         <button type="button" class="btn btn-info" disabled="disabled"><i class="fa fa-cloud-download"></i></button>*/
/*                       {% endif %}*/
/* 					  */
/*                       {% if modification.enabled %}*/
/*                           <a href="{{ modification.disable }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                       {% else %}*/
/*                           <a href="{{ modification.enable }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/*                       {% endif %}</td>*/
/* 					  */
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*           {% if error_log %}*/
/*           <div class="tab-pane" id="tab-error">*/
/*             <p>*/
/*               <textarea wrap="off" rows="15" class="form-control">{{ error_log }}</textarea>*/
/*             </p>*/
/*             <div class="text-right"><a href="{{ clear_log }}" class="btn btn-danger"><i class="fa fa-eraser"></i> {{ button_clear }}</a></div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if modified_files %}*/
/*           <div class="tab-pane" id="tab-files">*/
/*           	<div class="table-responsive">*/
/*             <table class="table table-bordered table-condensed">*/
/*             	<thead><tr>*/
/*             		<th class="text-center">File</th>*/
/*             		<th class="text-center">Modified By</th>*/
/*             	</tr></thead>*/
/*             	<tbody>*/
/*             	{% for modified_file in modified_files %}*/
/*             	<tr>*/
/*             		<td style="vertical-align:top">{{ modified_file.file }}</td>*/
/*             		<td>{% if modified_file.modifications %}*/
/*                         {% for modified_file_modification in modified_file.modifications %}*/
/*             				{% if loop.index > 1 %}<br />{% endif %}*/
/*             				<b>{{ modified_file_modification.name }}</b> by: {{ modified_file_modification.author }}*/
/*                         {% endfor %}*/
/*             		{% endif %}</td>*/
/*             	</tr>*/
/*             	{% endfor %}*/
/*             	</tbody>*/
/*             </table>*/
/*             </div>*/
/*             <div class="text-right"><a href="{{ clear_log }}" class="btn btn-danger"><i class="fa fa-eraser"></i> {{ button_clear }}</a></div>*/
/*           </div>*/
/*           {% endif %}*/
/*           <div class="tab-pane" id="tab-log">*/
/*             <p>*/
/*               <textarea wrap="off" rows="15" class="form-control">{{ log }}</textarea>*/
/*             </p>*/
/*             <div class="text-right"><a href="{{ clear_log }}" class="btn btn-danger"><i class="fa fa-eraser"></i> {{ button_clear }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#form-filter').on('submit', function() {*/
/* 	var url = 'index.php?route=marketplace/modification&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_xml = $('input[name=\'filter_xml\']').val();*/
/* 	if (filter_xml) {*/
/* 		url += '&filter_xml=' + encodeURIComponent(filter_xml);*/
/* 	}*/
/* */
/* 	var filter_author = $('input[name=\'filter_author\']').val();*/
/* 	if (filter_author) {*/
/* 		url += '&filter_author=' + encodeURIComponent(filter_author);*/
/* 	}*/
/* */
/* 	location = url;*/
/* */
/* 	return false;*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
