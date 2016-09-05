<?php

/* themes/gavias_emon/templates/page/html.html.twig */
class __TwigTemplate_cd494e563223f88db1728d24b3fa02a614829da7e687d47851f28420c47b3ca8 extends Twig_Template
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
        $tags = array("if" => 37, "include" => 64);
        $filters = array("raw" => 29, "safe_join" => 30, "t" => 56);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
                array('raw', 'safe_join', 't'),
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

        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
        echo "/css/custom.css\" media=\"screen\" />
    
    ";
        // line 37
        if ((isset($context["customize_css"]) ? $context["customize_css"] : null)) {
            // line 38
            echo "      <style class=\"gva-custom-css\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["customize_css"]) ? $context["customize_css"] : null), "html", null, true));
            echo "</style>
    ";
        }
        // line 39
        echo "  

    
  </head>
  <body";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  
  <!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-TG6DWF\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TG6DWF');</script>
<!-- End Google Tag Manager -->

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Accident Doctor")));
        echo "
    </a>
    ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    ";
        // line 62
        if ((isset($context["addon_template"]) ? $context["addon_template"] : null)) {
            // line 63
            echo "      <div class=\"permission-save-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["save_customize_permission"]) ? $context["save_customize_permission"] : null), "html", null, true));
            echo "\">
        ";
            // line 64
            $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . (isset($context["addon_template"]) ? $context["addon_template"] : null)), "themes/gavias_emon/templates/page/html.html.twig", 64)->display($context);
            // line 65
            echo "      </div>  
    ";
        }
        // line 67
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_emon/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  134 => 65,  132 => 64,  127 => 63,  125 => 62,  121 => 61,  117 => 60,  113 => 59,  109 => 58,  104 => 56,  88 => 43,  82 => 39,  76 => 38,  74 => 37,  69 => 35,  64 => 33,  59 => 31,  55 => 30,  51 => 29,  46 => 27,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - logged_in: A flag indicating if user is logged in.*/
/*  * - root_path: The root path of the current page (e.g., node, admin, user).*/
/*  * - node_type: The content type for the current node, if the page is a node.*/
/*  * - head_title: List of text elements that make up the head_title variable.*/
/*  *   May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  *//* */
/* #}*/
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*   <head> */
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/* */
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/* */
/*     <link rel="stylesheet" href="{{ theme_path }}/css/custom.css" media="screen" />*/
/*     */
/*     {% if customize_css %}*/
/*       <style class="gva-custom-css">{{ customize_css }}</style>*/
/*     {% endif %}  */
/* */
/*     */
/*   </head>*/
/*   <body{{ attributes }}>*/
/*   */
/*   <!-- Google Tag Manager -->*/
/* <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TG6DWF"*/
/* height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>*/
/* <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':*/
/* new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],*/
/* j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=*/
/* '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);*/
/* })(window,document,'script','dataLayer','GTM-TG6DWF');</script>*/
/* <!-- End Google Tag Manager -->*/
/* */
/*     <a href="#main-content" class="visually-hidden focusable">*/
/*       {{ 'Accident Doctor'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*     {% if addon_template %}*/
/*       <div class="permission-save-{{ save_customize_permission }}">*/
/*         {% include directory ~ addon_template %}*/
/*       </div>  */
/*     {% endif %}*/
/*   </body>*/
/* </html>*/
/* */
