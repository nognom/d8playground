<?php

/* themes/nognom/templates/page.html.twig */
class __TwigTemplate_18bf8527eb9c39b43501ffda89d916b5e4998f6704d95e060b4971861547ffeb extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array("t" => 8);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 6
        echo "<div id=\"page-wrapper\" style=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_wrapper_style"]) ? $context["page_wrapper_style"] : null), "html", null, true));
        echo "\">
  <div id=\"page\"";
        // line 7
        if ((isset($context["page_style"]) ? $context["page_style"] : null)) {
            echo " style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_style"]) ? $context["page_style"] : null), "html", null, true));
            echo "\"";
        }
        echo ">
    <header id=\"header\" role=\"banner\" style=\"";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_style"]) ? $context["header_style"] : null), "html", null, true));
        echo "\" aria-label=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
      <div class=\"section clearfix\">
        <div id=\"header-watermark\"";
        // line 10
        if ((isset($context["header_watermark_style"]) ? $context["header_watermark_style"] : null)) {
            echo " style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_watermark_style"]) ? $context["header_watermark_style"] : null), "html", null, true));
            echo "\" ";
        }
        echo " class=\"columns-wrapper\">
          <div class=\"clearfix columns-100\">
            ";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
            <div class=\"clearfix\"></div>
          </div> <!-- /.section -->
        </div> <!-- /#header-watermark -->
      </div>
    </header> <!-- /#header -->

    <div class=\"clearfix cfie\"></div>


    <div class=\"columns-wrapper\">
      <!-- messages -->
      <div class=\"column columns-100\">
        ";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 26
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        ";
        }
        // line 28
        echo "      </div>
    </div>

    <!-- space between menus and contents -->
    <div class=\"clearfix\"></div>

    <div id=\"main-wrapper\">
    <div id=\"main\" class=\"clearfix\"
      ";
        // line 36
        if ((isset($context["main_style"]) ? $context["main_style"] : null)) {
            // line 37
            echo "        style=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_style"]) ? $context["main_style"] : null), "html", null, true));
            echo "\"
        ";
        }
        // line 38
        echo ">

      ";
        // line 40
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_top", array())) {
            // line 41
            echo "      <div id=\"banner-top\" class=\"banner clearfix\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_top", array()), "html", null, true));
            echo "</div>
      <div class=\"spacer clearfix cfie\"></div>
      ";
        }
        // line 44
        echo "

     ";
        // line 46
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_second", array())) || $this->getAttribute(        // line 47
(isset($context["page"]) ? $context["page"] : null), "top_column_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_fourth", array()))) {
            // line 48
            echo "      <div id=\"top-wrapper\" class=\"columns-wrapper\">
        <div id=\"top-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 52
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_first", array())) {
                // line 53
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\" style=\"";
                // line 54
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_first"]) ? $context["column_first"] : null), "html", null, true));
                echo "\">
                      ";
                // line 55
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 59
            echo "
                ";
            // line 60
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_second", array())) {
                // line 61
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\" style=\"";
                // line 62
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_between"]) ? $context["column_between"] : null), "html", null, true));
                echo "\">
                        ";
                // line 63
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 67
            echo "
                ";
            // line 68
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_third", array())) {
                // line 69
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\" style=\"";
                // line 70
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_between"]) ? $context["column_between"] : null), "html", null, true));
                echo "\">
                        ";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 75
            echo "
                ";
            // line 76
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_fourth", array())) {
                // line 77
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_columns_width"]) ? $context["top_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\" style=\"";
                // line 78
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_last"]) ? $context["column_last"] : null), "html", null, true));
                echo "\">
                        ";
                // line 79
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 83
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>
        </div> <!--/#top-columns -->
      </div> <!-- /#top-wrapper -->
      ";
        }
        // line 88
        echo "

      <div class=\"clearfix cfie\"></div>

      <div class=\"columns-wrapper\">
        <!-- main content -->
        <main id=\"content\" class=\"column columns-75-75-stayOut\"><section class=\"section\">

        ";
        // line 96
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar", array()) - (isset($context["firstcrumb"]) ? $context["firstcrumb"] : null))) {
            // line 97
            echo "          <div id=\"breadcrumb\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 99
        echo "
        <a id=\"main-content\"></a>
        ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
        ";
        // line 102
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo "<h1 class=\"title\" id=\"page-title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>";
        }
        // line 103
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
        ";
        // line 104
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 105
            echo "          <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
            ";
            // line 106
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "
          </nav>
        ";
        }
        // line 109
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
        ";
        // line 110
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            echo "<ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>";
        }
        // line 111
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "


      </section></main> <!-- /.section, /#content -->

        ";
        // line 116
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 117
            echo "          <div id=\"sidebar-second\" class=\"column sidebar columns-25-25-slideOut columns-slideOut\"><div class=\"section\">
            ";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div></div> <!-- /.section, /#sidebar-second -->
        ";
        }
        // line 121
        echo "      </div>


      <div class=\"clearfix cfie\"></div>

     ";
        // line 126
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_second", array())) || $this->getAttribute(        // line 127
(isset($context["page"]) ? $context["page"] : null), "bottom_column_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_fourth", array()))) {
            // line 128
            echo "      <div id=\"bottom-wrapper\">
        <div id=\"bottom-columns\" class=\"clearfix\">
          <div class=\"column-blocks clearfix\">
                <!--column-blocks -->
                ";
            // line 132
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_first", array())) {
                // line 133
                echo "                  <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                    <div class=\"column-block clearfix\" style=\"";
                // line 134
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_first"]) ? $context["column_first"] : null), "html", null, true));
                echo "\">
                      ";
                // line 135
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_first", array()), "html", null, true));
                echo "
                    </div>
                  </div>
                ";
            }
            // line 139
            echo "
                ";
            // line 140
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_second", array())) {
                // line 141
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\" style=\"";
                // line 142
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_between"]) ? $context["column_between"] : null), "html", null, true));
                echo "\">
                        ";
                // line 143
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_second", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 147
            echo "
                ";
            // line 148
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_third", array())) {
                // line 149
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\" style=\"";
                // line 150
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_between"]) ? $context["column_between"] : null), "html", null, true));
                echo "\">
                        ";
                // line 151
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_third", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 155
            echo "
                ";
            // line 156
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_fourth", array())) {
                // line 157
                echo "                    <div class=\"column-block-wrapper clearfix\" style=\"width: ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_columns_width"]) ? $context["bottom_columns_width"] : null), "html", null, true));
                echo "\">
                      <div class=\"column-block clearfix\" style=\"";
                // line 158
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_last"]) ? $context["column_last"] : null), "html", null, true));
                echo "\">
                        ";
                // line 159
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_column_fourth", array()), "html", null, true));
                echo "
                      </div>
                    </div>
                ";
            }
            // line 163
            echo "          </div>  <!--/.column-blocks -->
          <div class=\"spacer clearfix cfie\"></div>


        </div> <!--/#bottom-columns -->
      </div> <!-- /#bottom-wrapper -->
      ";
        }
        // line 170
        echo "
      <div class=\"clearfix cfie\"></div>


      ";
        // line 174
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom", array())) {
            // line 175
            echo "      <div id=\"spacer\" class=\"clearfix cfie\"></div>
      <div id=\"banner-bottom\" class=\"banner clearfix\">";
            // line 176
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner_bottom", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 178
        echo "
    </div> <!-- /#main -->
    </div> <!-- /#main-wrapper -->

    <!-- space between contents and footer -->
    <div id=\"spacer\" class=\"clearfix cfie\"></div>

    <div id=\"footer-wrapper\">


      ";
        // line 188
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 189
            echo "      <div id=\"footer\" class=\"columns-wrapper\"><div class=\"section columns-100\">
        ";
            // line 190
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
      <div class=\"clearfix\"></div>
      </div> <!-- /.section, /#footer -->
      ";
        }
        // line 195
        echo "
    </div> <!-- /#footer-wrapper -->


  </div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/nognom/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 195,  450 => 190,  447 => 189,  445 => 188,  433 => 178,  428 => 176,  425 => 175,  423 => 174,  417 => 170,  408 => 163,  401 => 159,  397 => 158,  392 => 157,  390 => 156,  387 => 155,  380 => 151,  376 => 150,  371 => 149,  369 => 148,  366 => 147,  359 => 143,  355 => 142,  350 => 141,  348 => 140,  345 => 139,  338 => 135,  334 => 134,  329 => 133,  327 => 132,  321 => 128,  319 => 127,  318 => 126,  311 => 121,  305 => 118,  302 => 117,  300 => 116,  291 => 111,  285 => 110,  280 => 109,  274 => 106,  269 => 105,  267 => 104,  262 => 103,  256 => 102,  252 => 101,  248 => 99,  242 => 97,  240 => 96,  230 => 88,  223 => 83,  216 => 79,  212 => 78,  207 => 77,  205 => 76,  202 => 75,  195 => 71,  191 => 70,  186 => 69,  184 => 68,  181 => 67,  174 => 63,  170 => 62,  165 => 61,  163 => 60,  160 => 59,  153 => 55,  149 => 54,  144 => 53,  142 => 52,  136 => 48,  134 => 47,  133 => 46,  129 => 44,  122 => 41,  120 => 40,  116 => 38,  110 => 37,  108 => 36,  98 => 28,  92 => 26,  90 => 25,  72 => 12,  63 => 10,  56 => 8,  48 => 7,  43 => 6,);
    }
}
/* {#*/
/* /***/
/* */
/*  *//* */
/* #}*/
/* <div id="page-wrapper" style="{{ page_wrapper_style }}">*/
/*   <div id="page"{% if page_style %} style="{{ page_style }}"{% endif %}>*/
/*     <header id="header" role="banner" style="{{ header_style }}" aria-label="{{ 'Site header'|t}}">*/
/*       <div class="section clearfix">*/
/*         <div id="header-watermark"{% if header_watermark_style %} style="{{ header_watermark_style }}" {% endif %} class="columns-wrapper">*/
/*           <div class="clearfix columns-100">*/
/*             {{ page.header }} {{ page.primary_menu }}*/
/*             <div class="clearfix"></div>*/
/*           </div> <!-- /.section -->*/
/*         </div> <!-- /#header-watermark -->*/
/*       </div>*/
/*     </header> <!-- /#header -->*/
/* */
/*     <div class="clearfix cfie"></div>*/
/* */
/* */
/*     <div class="columns-wrapper">*/
/*       <!-- messages -->*/
/*       <div class="column columns-100">*/
/*         {% if page.highlighted %}*/
/*           {{ page.highlighted }}*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <!-- space between menus and contents -->*/
/*     <div class="clearfix"></div>*/
/* */
/*     <div id="main-wrapper">*/
/*     <div id="main" class="clearfix"*/
/*       {%  if main_style %}*/
/*         style="{{ main_style }}"*/
/*         {% endif %}>*/
/* */
/*       {% if page.banner_top %}*/
/*       <div id="banner-top" class="banner clearfix">{{ page.banner_top }}</div>*/
/*       <div class="spacer clearfix cfie"></div>*/
/*       {% endif %}*/
/* */
/* */
/*      {% if page.top_column_first or page.top_column_second or*/
/*               page.top_column_third or page.top_column_fourth %}*/
/*       <div id="top-wrapper" class="columns-wrapper">*/
/*         <div id="top-columns" class="clearfix">*/
/*           <div class="column-blocks clearfix">*/
/*                 <!--column-blocks -->*/
/*                 {% if page.top_column_first %}*/
/*                   <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                     <div class="column-block clearfix" style="{{ column_first }}">*/
/*                       {{ page.top_column_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.top_column_second %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                       <div class="column-block clearfix" style="{{ column_between }}">*/
/*                         {{ page.top_column_second }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.top_column_third %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                       <div class="column-block clearfix" style="{{ column_between }}">*/
/*                         {{ page.top_column_third }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.top_column_fourth %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ top_columns_width }}">*/
/*                       <div class="column-block clearfix" style="{{ column_last }}">*/
/*                         {{ page.top_column_fourth }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*           </div>  <!--/.column-blocks -->*/
/*           <div class="spacer clearfix cfie"></div>*/
/*         </div> <!--/#top-columns -->*/
/*       </div> <!-- /#top-wrapper -->*/
/*       {% endif %}*/
/* */
/* */
/*       <div class="clearfix cfie"></div>*/
/* */
/*       <div class="columns-wrapper">*/
/*         <!-- main content -->*/
/*         <main id="content" class="column columns-75-75-stayOut"><section class="section">*/
/* */
/*         {% if page.sidebar-firstcrumb %}*/
/*           <div id="breadcrumb">{{ page.breadcrumb }}</div>*/
/*         {% endif %}*/
/* */
/*         <a id="main-content"></a>*/
/*         {{ title_prefix }}*/
/*         {% if title %}<h1 class="title" id="page-title">{{ title }}</h1>{% endif %}*/
/*         {{ title_suffix }}*/
/*         {% if tabs %}*/
/*           <nav class="tabs" role="navigation" aria-label="{{ 'Tabs'|t }}">*/
/*             {{ tabs }}*/
/*           </nav>*/
/*         {% endif %}*/
/*         {{ page.help }}*/
/*         {% if action_links %}<ul class="action-links">{{ action_links }}</ul>{% endif %}*/
/*         {{ page.content }}*/
/* */
/* */
/*       </section></main> <!-- /.section, /#content -->*/
/* */
/*         {% if (page.sidebar_second) %}*/
/*           <div id="sidebar-second" class="column sidebar columns-25-25-slideOut columns-slideOut"><div class="section">*/
/*             {{ page.sidebar_second }}*/
/*           </div></div> <!-- /.section, /#sidebar-second -->*/
/*         {% endif %}*/
/*       </div>*/
/* */
/* */
/*       <div class="clearfix cfie"></div>*/
/* */
/*      {% if page.bottom_column_first or page.bottom_column_second or*/
/*               page.bottom_column_third or page.bottom_column_fourth %}*/
/*       <div id="bottom-wrapper">*/
/*         <div id="bottom-columns" class="clearfix">*/
/*           <div class="column-blocks clearfix">*/
/*                 <!--column-blocks -->*/
/*                 {% if page.bottom_column_first %}*/
/*                   <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                     <div class="column-block clearfix" style="{{ column_first }}">*/
/*                       {{ page.bottom_column_first }}*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.bottom_column_second %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                       <div class="column-block clearfix" style="{{ column_between }}">*/
/*                         {{ page.bottom_column_second }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.bottom_column_third %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                       <div class="column-block clearfix" style="{{ column_between }}">*/
/*                         {{ page.bottom_column_third }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if page.bottom_column_fourth %}*/
/*                     <div class="column-block-wrapper clearfix" style="width: {{ bottom_columns_width }}">*/
/*                       <div class="column-block clearfix" style="{{ column_last }}">*/
/*                         {{ page.bottom_column_fourth }}*/
/*                       </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*           </div>  <!--/.column-blocks -->*/
/*           <div class="spacer clearfix cfie"></div>*/
/* */
/* */
/*         </div> <!--/#bottom-columns -->*/
/*       </div> <!-- /#bottom-wrapper -->*/
/*       {% endif %}*/
/* */
/*       <div class="clearfix cfie"></div>*/
/* */
/* */
/*       {% if page.banner_bottom %}*/
/*       <div id="spacer" class="clearfix cfie"></div>*/
/*       <div id="banner-bottom" class="banner clearfix">{{ page.banner_bottom }}</div>*/
/*       {% endif %}*/
/* */
/*     </div> <!-- /#main -->*/
/*     </div> <!-- /#main-wrapper -->*/
/* */
/*     <!-- space between contents and footer -->*/
/*     <div id="spacer" class="clearfix cfie"></div>*/
/* */
/*     <div id="footer-wrapper">*/
/* */
/* */
/*       {% if page.footer %}*/
/*       <div id="footer" class="columns-wrapper"><div class="section columns-100">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*       <div class="clearfix"></div>*/
/*       </div> <!-- /.section, /#footer -->*/
/*       {% endif %}*/
/* */
/*     </div> <!-- /#footer-wrapper -->*/
/* */
/* */
/*   </div> <!-- /#page -->*/
/* </div> <!-- /#page-wrapper -->*/
/* */
