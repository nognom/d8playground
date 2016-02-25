<?php

/* themes/nognom/templates/block--system-branding-block.html.twig */
class __TwigTemplate_5d9ed3c0087091d74c3d64fe17154269ddef921e0771a0b482ec172b74b9d6bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/nognom/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 20);
        $filters = array("t" => 21);
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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

        // line 16
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 21
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"siteBranding siteBrandingLogo\">
      <img src=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 25
        echo "  ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 26
            echo "    <div class=\"siteBranding siteBrandingText\">
      ";
            // line 27
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 28
                echo "        <div class=\"siteBranding siteBrandingName\">
          <a href=\"";
                // line 29
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 32
            echo "      ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 33
                echo "        <div class=\"siteBranding siteBrandingSlogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 35
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/nognom/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  100 => 33,  97 => 32,  87 => 29,  84 => 28,  82 => 27,  79 => 26,  76 => 25,  68 => 22,  61 => 21,  58 => 20,  55 => 19,  51 => 1,  49 => 16,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Nognoms's theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {#{% set attributes = attributes.addClass('tacotacotaco') %}#}*/
/* */
/* {% block content %}*/
/*   {% if site_logo %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" class="siteBranding siteBrandingLogo">*/
/*       <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*     </a>*/
/*   {% endif %}*/
/*   {% if site_name or site_slogan %}*/
/*     <div class="siteBranding siteBrandingText">*/
/*       {% if site_name %}*/
/*         <div class="siteBranding siteBrandingName">*/
/*           <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if site_slogan %}*/
/*         <div class="siteBranding siteBrandingSlogan">{{ site_slogan }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
