<?php

/* themes/gavias_emon/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_4fc46d602d50e49defc812f85fa318917e53180a9138ba84c3dfae0e8287e636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/gavias_emon/templates/block/block--system-branding-block.html.twig", 1);
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
        $tags = array("set" => 17, "if" => 19);
        $filters = array("t" => 20, "replace" => 25);
        $functions = array("path" => 20);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t', 'replace'),
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

        // line 17
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  ";
        if ($this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "use_default", array())) {
            // line 20
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Accident Doctor")));
            echo "\" rel=\"home\" class=\"site-branding-logo padding-top-20\">
        <img src=\"";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Accident Doctor")));
            echo "\" />
    </a>    
  ";
        } else {
            // line 23
            echo " 
    <a href=\"";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Accident Doctor")));
            echo "\" rel=\"home\" class=\"site-branding-logo padding-top-20\">
      <img src=\"";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter((isset($context["site_logo"]) ? $context["site_logo"] : null), array(".svg" => ".png")), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Accident Doctor")));
            echo "\" />
    </a>  
  ";
        }
        // line 27
        echo " 
   
  ";
        // line 29
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 30
            echo "    <div class=\"site-branding__text\">
      ";
            // line 31
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 32
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 33
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Accident Doctor")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 36
            echo "      ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 37
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 39
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_emon/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  120 => 37,  117 => 36,  107 => 33,  104 => 32,  102 => 31,  99 => 30,  97 => 29,  93 => 27,  85 => 25,  79 => 24,  76 => 23,  68 => 21,  61 => 20,  58 => 19,  55 => 18,  51 => 1,  49 => 17,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a branding block.*/
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
/* */
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {% block content %}*/
/*   {% if logo.use_default %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Accident Doctor'|t }}" rel="home" class="site-branding-logo padding-top-20">*/
/*         <img src="{{ site_logo }}" alt="{{ 'Accident Doctor'|t }}" />*/
/*     </a>    */
/*   {% else %} */
/*     <a href="{{ path('<front>') }}" title="{{ 'Accident Doctor'|t }}" rel="home" class="site-branding-logo padding-top-20">*/
/*       <img src="{{ site_logo|replace({'.svg':'.png'}) }}" alt="{{ 'Accident Doctor'|t }}" />*/
/*     </a>  */
/*   {% endif %} */
/*    */
/*   {% if site_name or site_slogan %}*/
/*     <div class="site-branding__text">*/
/*       {% if site_name %}*/
/*         <div class="site-branding__name">*/
/*           <a href="{{ path('<front>') }}" title="{{ 'Accident Doctor'|t }}" rel="home">{{ site_name }}</a>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if site_slogan %}*/
/*         <div class="site-branding__slogan">{{ site_slogan }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
