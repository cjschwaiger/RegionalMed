<?php

/* themes/gavias_emon/templates/page/page.html.twig */
class __TwigTemplate_d2a639872093baf3b3f96e38a4f40a3219db369a5af319fcc4b8205a6c122642 extends Twig_Template
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
        $tags = array("include" => 8, "if" => 10, "set" => 62);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if', 'set'),
                array(),
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

        // line 7
        echo "<div class=\"body-page\">
   ";
        // line 8
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . (isset($context["header_skin"]) ? $context["header_skin"] : null)), "themes/gavias_emon/templates/page/page.html.twig", 8)->display($context);
        // line 9
        echo "\t
   ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array())) {
            // line 11
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t\t\t</div>\t
\t\t\t</div> 
\t\t</div>
\t";
        }
        // line 19
        echo "\t

\t<div role=\"main\" class=\"main main-page\">
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t<div class=\"slideshow_content area\">
\t\t\t";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_content", array()), "html", null, true));
        echo "
\t\t</div>
\t\t
\t\t";
        // line 28
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 29
            echo "\t\t\t<div class=\"help\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 37
        echo "
\t\t";
        // line 38
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_before_content", array())) {
            // line 39
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 45
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
            // line 46
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 56
        echo "\t<div class=\"clearfix\"></div>
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"content-main-inner\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 62
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 63
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()))) {
            echo "\t
\t\t\t\t\t\t\t";
            // line 64
            $context["cl_main"] = "col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ";
            // line 65
            echo "\t\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()))) {
            echo "\t
\t\t\t\t\t\t\t";
            // line 66
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
                // line 67
                echo "\t\t\t\t\t\t\t \t";
                $context["cl_main"] = "col-xs-12 col-md-8 sb-r ";
                // line 68
                echo "\t\t\t\t\t\t\t";
            }
            echo " \t\t
\t\t\t\t\t\t\t";
            // line 69
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
                // line 70
                echo "\t\t\t\t\t\t\t\t";
                $context["cl_main"] = "col-xs-12 col-md-8 col-md-push-4 sb-l ";
                // line 71
                echo "\t\t\t\t\t\t\t";
            }
            echo "\t\t\t\t
                  ";
        }
        // line 72
        echo " 

\t\t\t\t\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cl_main"]) ? $context["cl_main"] : null), "html", null, true));
        echo "\">

\t\t\t\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 83
        echo "
\t\t\t\t\t\t\t\t";
        // line 84
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t\t\t\t\t";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "
\t\t\t\t\t\t\t\t";
        // line 90
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t\t\t\t\t";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Sidebar Left -->
\t\t\t\t\t\t";
        // line 100
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
            // line 101
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 102
            $context["cl_left"] = "col-md-4 col-md-pull-8 col-sm-12 col-xs-12";
            // line 103
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
                // line 104
                echo "\t\t\t\t\t\t\t \t";
                $context["cl_left"] = "col-md-3 col-md-pull-6 col-sm-12 col-xs-12";
                // line 105
                echo "\t\t\t\t\t\t\t";
            }
            echo " \t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cl_left"]) ? $context["cl_left"] : null), "html", null, true));
            echo " sidebar sidebar-left\">
\t\t\t\t\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t\t\t\t\t";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t<!-- End Sidebar Left -->

\t\t\t\t\t\t<!-- Sidebar Right -->
\t\t\t\t\t\t";
        // line 116
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            // line 117
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 118
            $context["cl_right"] = "col-lg-4 col-md-4 col-sm-12 col-xs-12";
            // line 119
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
                // line 120
                echo "\t\t\t\t\t\t\t\t";
                $context["cl_right"] = "col-lg-3 col-md-3 col-sm-12 col-xs-12";
                // line 121
                echo "\t\t\t\t\t\t\t";
            }
            echo "\t 

\t\t\t\t\t\t\t<div class=\"";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["cl_right"]) ? $context["cl_right"] : null), "html", null, true));
            echo " sidebar sidebar-right theiaStickySidebar\">
\t\t\t\t\t\t\t\t<div class=\"sidebar-inner\">
\t\t\t\t\t\t\t\t\t";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t<!-- End Sidebar Right -->
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 136
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 137
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 143
        echo "
\t\t";
        // line 144
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
            // line 145
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 148
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 153
        echo "\t\t
\t\t";
        // line 154
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content", array())) {
            // line 155
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 159
        echo "
\t</div>

\t";
        // line 162
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/footer.html.twig"), "themes/gavias_emon/templates/page/page.html.twig", 162)->display($context);
        // line 163
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_emon/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 163,  356 => 162,  351 => 159,  345 => 156,  342 => 155,  340 => 154,  337 => 153,  329 => 148,  324 => 145,  322 => 144,  319 => 143,  312 => 139,  308 => 137,  306 => 136,  297 => 129,  290 => 125,  285 => 123,  279 => 121,  276 => 120,  273 => 119,  271 => 118,  268 => 117,  266 => 116,  261 => 113,  254 => 109,  249 => 107,  243 => 105,  240 => 104,  237 => 103,  235 => 102,  232 => 101,  230 => 100,  223 => 95,  217 => 92,  214 => 91,  212 => 90,  209 => 89,  203 => 86,  200 => 85,  198 => 84,  195 => 83,  189 => 80,  186 => 79,  184 => 78,  177 => 74,  173 => 72,  167 => 71,  164 => 70,  162 => 69,  157 => 68,  154 => 67,  152 => 66,  147 => 65,  145 => 64,  140 => 63,  138 => 62,  130 => 56,  121 => 50,  115 => 46,  113 => 45,  109 => 43,  103 => 40,  100 => 39,  98 => 38,  95 => 37,  87 => 32,  82 => 29,  80 => 28,  74 => 25,  66 => 19,  58 => 14,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Gavias's theme implementation to display a single Drupal page.*/
/*  *//* */
/* #}*/
/* <div class="body-page">*/
/*    {% include directory ~ header_skin %}*/
/* 	*/
/*    {% if page.breadcrumbs %}*/
/* 		<div class="breadcrumbs">*/
/* 			<div class="container">*/
/* 				<div class="content-inner">*/
/* 					{{ page.breadcrumbs }}*/
/* 				</div>	*/
/* 			</div> */
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* */
/* 	<div role="main" class="main main-page">*/
/* 		*/
/* 		<div class="clearfix"></div>*/
/* 		<div class="slideshow_content area">*/
/* 			{{ page.slideshow_content }}*/
/* 		</div>*/
/* 		*/
/* 		{% if page.help %}*/
/* 			<div class="help">*/
/* 				<div class="container">*/
/* 					<div class="content-inner">*/
/* 						{{ page.help }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if page.fw_before_content %}*/
/* 			<div class="fw-before-content area">*/
/* 				{{ page.fw_before_content }}*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		<div class="clearfix"></div>*/
/* 		{% if page.before_content %}*/
/* 			<div class="before_content area">*/
/* 				<div class="container">*/
/* 					<div class="row">*/
/* 						<div class="col-xs-12">*/
/* 							{{ page.before_content }}*/
/* 							</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	<div class="clearfix"></div>*/
/* 		<div id="content" class="content content-full">*/
/* 			<div class="container">*/
/* 				<div class="content-main-inner">*/
/* 					<div class="row">*/
/* 						*/
/* 						{% set cl_main = 'col-md-12 col-xs-12' %}*/
/* 						{% if page.sidebar_right and page.sidebar_left %}	*/
/* 							{% set cl_main = 'col-xs-12 col-md-6 col-md-push-3 sb-r sb-l ' %}*/
/* 						{% elseif page.sidebar_right or page.sidebar_left %}	*/
/* 							{% if page.sidebar_right %}*/
/* 							 	{% set cl_main = 'col-xs-12 col-md-8 sb-r ' %}*/
/* 							{% endif %} 		*/
/* 							{% if page.sidebar_left %}*/
/* 								{% set cl_main = 'col-xs-12 col-md-8 col-md-push-4 sb-l ' %}*/
/* 							{% endif %}				*/
/*                   {% endif %} */
/* */
/* 						<div id="page-main-content" class="main-content {{ cl_main }}">*/
/* */
/* 							<div class="main-content-inner">*/
/* 								*/
/* 								{% if page.content_top %}*/
/* 									<div class="content-top">*/
/* 										{{ page.content_top }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* */
/* 								{% if page.content %}*/
/* 									<div class="content-main">*/
/* 										{{ page.content }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* */
/* 								{% if page.content_bottom %}*/
/* 									<div class="content-bottom">*/
/* 										{{ page.content_bottom }}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* */
/* 						</div>*/
/* */
/* 						<!-- Sidebar Left -->*/
/* 						{% if page.sidebar_left %}*/
/* 							*/
/* 							{% set cl_left = 'col-md-4 col-md-pull-8 col-sm-12 col-xs-12' %}*/
/* 							{%	if page.sidebar_right %}*/
/* 							 	{% set cl_left = 'col-md-3 col-md-pull-6 col-sm-12 col-xs-12' %}*/
/* 							{% endif %} 		*/
/* 							*/
/* 							<div class="{{ cl_left }} sidebar sidebar-left">*/
/* 								<div class="sidebar-inner">*/
/* 									{{ page.sidebar_left }}*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						<!-- End Sidebar Left -->*/
/* */
/* 						<!-- Sidebar Right -->*/
/* 						{% if page.sidebar_right %}*/
/* 							*/
/* 							{% set cl_right = 'col-lg-4 col-md-4 col-sm-12 col-xs-12'  %}*/
/* 							{% if page.sidebar_left %}*/
/* 								{% set cl_right = 'col-lg-3 col-md-3 col-sm-12 col-xs-12' %}*/
/* 							{% endif %}	 */
/* */
/* 							<div class="{{ cl_right }} sidebar sidebar-right theiaStickySidebar">*/
/* 								<div class="sidebar-inner">*/
/* 									{{ page.sidebar_right }}*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						<!-- End Sidebar Right -->*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{% if page.highlighted %}*/
/* 			<div class="highlighted area">*/
/* 				<div class="container">*/
/* 					{{ page.highlighted }}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if page.after_content %}*/
/* 			<div class="area after_content">*/
/* 				<div class="container-fw">*/
/* 	          	<div class="content-inner">*/
/* 						 {{ page.after_content }}*/
/* 	          	</div>*/
/*         		</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		{% if page.fw_after_content %}*/
/* 			<div class="fw-before-content area">*/
/* 				{{ page.fw_after_content }}*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 	</div>*/
/* */
/* 	{% include directory ~ '/templates/page/footer.html.twig' %}*/
/* */
/* </div>*/
/* */
/* */
