<?php

/* themes/gavias_emon/templates/page/header-3.html.twig */
class __TwigTemplate_5d11477b1261524988189a0ec9642908e18a137c95d45a540b972a03f7eb121d extends Twig_Template
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
        $tags = array("if" => 3, "set" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
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
        echo "<header id=\"header\" class=\"header-v3\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array())) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"content\">";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array()), "html", null, true));
            echo "</div> 
        </div>
      </div>
    </div>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        $context["class_sticky"] = "";
        // line 14
        echo "  ";
        if (((isset($context["sticky_menu"]) ? $context["sticky_menu"] : null) == 1)) {
            // line 15
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 16
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class_sticky"]) ? $context["class_sticky"] : null), "html", null, true));
        echo "\">
      <div class=\"container\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-xs-6 branding\">
                ";
        // line 23
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 24
            echo "                  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
                ";
        }
        // line 26
        echo "              </div>

              <div class=\"col-md-9 col-xs-6 p-static\">
                <div class=\"main-menu\">
                    <div class=\"navigation area-main-menu\">
                      <div class=\"area-inner\">
                        ";
        // line 32
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 33
            echo "                          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                        ";
        }
        // line 34
        echo "  
                         ";
        // line 35
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 36
            echo "                            <div class=\"gva-search-region search-region\">
                              <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                              <div class=\"search-content\">  
                                ";
            // line 39
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
                              </div>  
                            </div>
                         ";
        }
        // line 43
        echo "                      </div>
                   </div>
                </div> 
              </div>
            </div>
         </div>
      </div>
   </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_emon/templates/page/header-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  121 => 39,  116 => 36,  114 => 35,  111 => 34,  105 => 33,  103 => 32,  95 => 26,  89 => 24,  87 => 23,  79 => 18,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <header id="header" class="header-v3">*/
/*   */
/*   {% if page.topbar %}*/
/*     <div class="topbar">*/
/*       <div class="topbar-inner">*/
/*         <div class="container">*/
/*           <div class="content">{{ page.topbar }}</div> */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% set class_sticky = '' %}*/
/*   {% if sticky_menu == 1 %}*/
/*     {% set class_sticky = 'gv-sticky-menu' %}*/
/*   {% endif %}  */
/* */
/*    <div class="header-main {{ class_sticky }}">*/
/*       <div class="container">*/
/*          <div class="header-main-inner p-relative">*/
/*             <div class="row">*/
/*               <div class="col-md-3 col-xs-6 branding">*/
/*                 {% if page.branding %}*/
/*                   {{ page.branding }}*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               <div class="col-md-9 col-xs-6 p-static">*/
/*                 <div class="main-menu">*/
/*                     <div class="navigation area-main-menu">*/
/*                       <div class="area-inner">*/
/*                         {% if page.main_menu %}*/
/*                           {{ page.main_menu }}*/
/*                         {% endif %}  */
/*                          {% if page.search %}*/
/*                             <div class="gva-search-region search-region">*/
/*                               <span class="icon"><i class="fa fa-search"></i></span>*/
/*                               <div class="search-content">  */
/*                                 {{ page.search }}*/
/*                               </div>  */
/*                             </div>*/
/*                          {% endif %}*/
/*                       </div>*/
/*                    </div>*/
/*                 </div> */
/*               </div>*/
/*             </div>*/
/*          </div>*/
/*       </div>*/
/*    </div>*/
/* </header>*/
/* */
