<?php

/* themes/gavias_emon/templates/page/header-2.html.twig */
class __TwigTemplate_831462a4ac64e87e18c22c3124e724019a7a391a64cb791c6543e574d274127d extends Twig_Template
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
        echo "<header id=\"header\" class=\"header-v2\">
  
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
         <div class=\"header-main-inner\">
            <div class=\"row\">
               <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 block-logo\">
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
        echo "               </div>

               <div class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12 header-right\">
                  ";
        // line 24
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array())) {
            // line 25
            echo "                     <div class=\"header-right-inner\">
                        ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array()), "html", null, true));
            echo "
                     </div>
                   ";
        }
        // line 29
        echo "               </div>
            </div>
         </div>
      </div>
   </div>

    <div class=\"header-bottom\">
      <div class=\"main-menu gv-sticky-menu\">
          <div class=\"container\">
             <div class=\"row\">
                <div class=\"col-xs-12 area-main-menu\">
                  <div class=\"area-inner\">
                    ";
        // line 41
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 42
            echo "                      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                    ";
        }
        // line 43
        echo "  
                    ";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 45
            echo "                      <div class=\"gva-search-region search-region\">
                        <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                        <div class=\"search-content\">  
                          ";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
                        </div>  
                      </div>
                    ";
        }
        // line 52
        echo "                  </div>   
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
        return "themes/gavias_emon/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  126 => 48,  121 => 45,  119 => 44,  116 => 43,  110 => 42,  108 => 41,  94 => 29,  88 => 26,  85 => 25,  83 => 24,  78 => 21,  72 => 19,  70 => 18,  62 => 12,  54 => 7,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <header id="header" class="header-v2">*/
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
/*          <div class="header-main-inner">*/
/*             <div class="row">*/
/*                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 block-logo">*/
/*                {% if page.branding %}*/
/*                   {{ page.branding }}*/
/*                {% endif %}*/
/*                </div>*/
/* */
/*                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 header-right">*/
/*                   {% if page.header_right %}*/
/*                      <div class="header-right-inner">*/
/*                         {{ page.header_right }}*/
/*                      </div>*/
/*                    {% endif %}*/
/*                </div>*/
/*             </div>*/
/*          </div>*/
/*       </div>*/
/*    </div>*/
/* */
/*     <div class="header-bottom">*/
/*       <div class="main-menu gv-sticky-menu">*/
/*           <div class="container">*/
/*              <div class="row">*/
/*                 <div class="col-xs-12 area-main-menu">*/
/*                   <div class="area-inner">*/
/*                     {% if page.main_menu %}*/
/*                       {{ page.main_menu }}*/
/*                     {% endif %}  */
/*                     {% if page.search %}*/
/*                       <div class="gva-search-region search-region">*/
/*                         <span class="icon"><i class="fa fa-search"></i></span>*/
/*                         <div class="search-content">  */
/*                           {{ page.search }}*/
/*                         </div>  */
/*                       </div>*/
/*                     {% endif %}*/
/*                   </div>   */
/*                 </div>*/
/*              </div>*/
/*           </div>*/
/*        </div>*/
/*     </div>  */
/* */
/* </header>*/
/* */
