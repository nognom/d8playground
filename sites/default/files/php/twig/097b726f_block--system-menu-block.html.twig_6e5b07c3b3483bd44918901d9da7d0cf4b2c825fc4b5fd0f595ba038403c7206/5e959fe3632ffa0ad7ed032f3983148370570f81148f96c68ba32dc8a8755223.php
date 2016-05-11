<?php

/* themes/nognom/templates/block--system-menu-block.html.twig */
class __TwigTemplate_befc7bfe1ceb18c8280f8cffd8db4db40612e2ac132453c2b0f78a4beded1940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 35, "block" => 61);
        $filters = array("clean_class" => 39, "clean_id" => 42, "without" => 43);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class', 'clean_id', 'without'),
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

        // line 35
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => "navigation", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 39
(isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))));
        // line 42
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 45
        echo "  ";
        // line 46
        echo "    ";
        // line 47
        echo "  ";
        // line 48
        echo "  ";
        // line 49
        echo "  ";
        // line 50
        echo "  ";
        // line 51
        echo "
  ";
        // line 53
        echo "  <div id=\"mobileMenuButton\" class=\"showOnMobile\">
    <span class=\"text\">Menu</span>
    <span class=\"icon\">
      <span></span>
      ";
        // line 58
        echo "      ";
        // line 59
        echo "      ";
        // line 60
        echo "    </span></div>
  ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "</nav>
";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/nognom/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 62,  91 => 61,  86 => 64,  84 => 61,  81 => 60,  79 => 59,  77 => 58,  71 => 53,  68 => 51,  66 => 50,  64 => 49,  62 => 48,  60 => 47,  58 => 46,  56 => 45,  49 => 43,  47 => 42,  45 => 39,  44 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  *//* */
/* #}*/
/* {%*/
/* set classes = [*/
/* 'block',*/
/* 'block-menu',*/
/* 'navigation',*/
/* 'menu--' ~ derivative_plugin_id|clean_class,*/
/* ]*/
/* %}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav role="navigation" aria-labelledby="{{ heading_id }}"{{ attributes.addClass(classes)|without('role', 'aria-labelledby') }}>*/
/*   {# Label. If not displayed, we still provide it for screen readers. #}*/
/*   {#{% if not configuration.label_display %}#}*/
/*     {#{% set title_attributes = title_attributes.addClass('visually-hidden') %}#}*/
/*   {#{% endif %}#}*/
/*   {#{{ title_prefix }}#}*/
/*   {#<h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>#}*/
/*   {#{{ title_suffix }}#}*/
/* */
/*   {# Menu. #}*/
/*   <div id="mobileMenuButton" class="showOnMobile">*/
/*     <span class="text">Menu</span>*/
/*     <span class="icon">*/
/*       <span></span>*/
/*       {#<span class="bar1">&mdash;</span>#}*/
/*       {#<span class="bar2">&mdash;</span>#}*/
/*       {#<span class="bar3">&mdash;</span>#}*/
/*     </span></div>*/
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </nav>*/
/* */
