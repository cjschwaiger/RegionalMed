<?php

/* themes/gavias_emon/templates/page/header-3.html.twig */
class __TwigTemplate_0bbda98d97189597dec35ab08e294623d528979f12738157e6f7b99a218e7600 extends Twig_Template
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
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
   <div class=\"header-main\">
      <div class=\"container\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-xs-3 branding\">
                ";
        // line 18
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 19
            echo "                  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
                ";
        }
        // line 21
        echo "              </div>

              <div class=\"col-xs-9 p-static\">
                <div class=\"main-menu gv-sticky-menu\">
                    <div class=\"navigation area-main-menu\">
                      <div class=\"area-inner\">
                        ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 28
            echo "                          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                        ";
        }
        // line 29
        echo "  
                         ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 31
            echo "                            <div class=\"gva-search-region search-region\">
                              <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                              <div class=\"search-content\">  
                                ";
            // line 34
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
                              </div>  
                            </div>
                         ";
        }
        // line 38
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
        return array (  111 => 38,  104 => 34,  99 => 31,  97 => 30,  94 => 29,  88 => 28,  86 => 27,  78 => 21,  72 => 19,  70 => 18,  62 => 12,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
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
/*    <div class="header-main">*/
/*       <div class="container">*/
/*          <div class="header-main-inner p-relative">*/
/*             <div class="row">*/
/*               <div class="col-xs-3 branding">*/
/*                 {% if page.branding %}*/
/*                   {{ page.branding }}*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               <div class="col-xs-9 p-static">*/
/*                 <div class="main-menu gv-sticky-menu">*/
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
