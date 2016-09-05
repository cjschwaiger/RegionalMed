<?php

/* themes/gavias_emon/templates/addon/skins.html.twig */
class __TwigTemplate_55ecb427c5e2ec0d8505c6e6216ee800ceef1bd9296ee809ce16d1e2babf2265 extends Twig_Template
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
        $tags = array("include" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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

        // line 1
        echo "<div class=\"gavias-skins-panel hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-eyedropper\"></i></div>
\t<div class=\"gavias-skins-panel-inner\">
\t   ";
        // line 4
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/customize/form.php"), "themes/gavias_emon/templates/addon/skins.html.twig", 4)->display($context);
        // line 5
        echo "\t</div>   
</div>

<div class=\"gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Color skins</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"item-color default\" href=\"\"></a>
\t\t\t<a class=\"item-color green\" href=\"//";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=green\"></a>
\t\t\t<a class=\"item-color lilac\" href=\"//";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=lilac\"></a>
\t\t\t<a class=\"item-color orange\" href=\"//";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=orange\"></a>
\t\t\t<a class=\"item-color red\" href=\"//";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=red\"></a>
\t\t\t<a class=\"item-color yellow\" href=\"//";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=yellow\"></a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Body layout</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"layout\" data-layout=\"boxed\">Boxed</a>
\t\t\t<a class=\"layout\" data-layout=\"wide\">Wide</a>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_emon/templates/addon/skins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  50 => 5,  48 => 4,  43 => 1,);
    }
}
/* <div class="gavias-skins-panel hidden-xs hidden-sm">*/
/* 	<div class="control-panel"><i class="fa fa-eyedropper"></i></div>*/
/* 	<div class="gavias-skins-panel-inner">*/
/* 	   {% include directory ~ '/customize/form.php' %}*/
/* 	</div>   */
/* </div>*/
/* */
/* <div class="gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm">*/
/* 	<div class="control-panel"><i class="fa fa-cogs"></i></div>*/
/* 	<div class="panel-skins-content">*/
/* 		<div class="title">Color skins</div>*/
/* 		<div class="text-center">*/
/* 			<a class="item-color default" href=""></a>*/
/* 			<a class="item-color green" href="//{{ current_url }}gvas=green"></a>*/
/* 			<a class="item-color lilac" href="//{{ current_url }}gvas=lilac"></a>*/
/* 			<a class="item-color orange" href="//{{ current_url }}gvas=orange"></a>*/
/* 			<a class="item-color red" href="//{{ current_url }}gvas=red"></a>*/
/* 			<a class="item-color yellow" href="//{{ current_url }}gvas=yellow"></a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="clearfix"></div>*/
/* */
/* 	<div class="panel-skins-content">*/
/* 		<div class="title">Body layout</div>*/
/* 		<div class="text-center">*/
/* 			<a class="layout" data-layout="boxed">Boxed</a>*/
/* 			<a class="layout" data-layout="wide">Wide</a>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
