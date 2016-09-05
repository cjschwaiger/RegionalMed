<?php

/* themes/gavias_emon/customize/form.php */
class __TwigTemplate_5dec50f8ac1740652b58516fa08a7d5b82f5a3fbfa418234720170a235c2ba16 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<div id=\"gavias_customize_form\" class=\"gavias_customize_form\">
   
   <div class=\"form-group action\">
      <input type=\"button\" id=\"gavias_customize_save\" class=\"btn form-submit\" value=\"Save\" />
      <input type=\"button\" id=\"gavias_customize_preview\" class=\"btn form-submit\" value=\"Preview\" />
      <input type=\"button\" id=\"gavias_customize_reset\" class=\"btn form-submit\" value=\"Reset\" />
      <input type=\"hidden\" id=\"gva_theme_name\" name=\"theme_name\" value=\"gavias_emon\" />
   </div>   

   <div class=\"clearfix\"></div>
   <div id=\"customize-gavias-preivew\">
      <div class=\"panel-group\" id=\"customize-accordion\" role=\"tablist\" aria-multiselectable=\"true\">   
         
         <!-- General -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-general\" aria-expanded=\"true\">
                   General
                 </a>
               </h4>
            </div>
            <div id=\"customize-general\" class=\"panel-collapse collapse in\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Theme Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"theme_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"text_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Link color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"link_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Link hover color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"link_hover_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div> 

         <!-- Header -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-header\" aria-expanded=\"true\">
                   Header
                 </a>
               </h4>
            </div>
            <div id=\"customize-header\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Header Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"header_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <!-- Main menu -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-mainmenu\" aria-expanded=\"true\">
                   Main Menu
                 </a>
               </h4>
            </div>
            <div id=\"customize-mainmenu\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Menu | Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Menu | Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"menu_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_background\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Sub Menu | Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"submenu_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <!-- Footer -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-footer\" aria-expanded=\"true\">
                   Footer
                 </a>
               </h4>
            </div>
            <div id=\"customize-footer\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"footer_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div> 
         </div>

         <!-- Copyright -->
         <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\">
               <h4 class=\"panel-title\">
                 <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#customize-accordion\" href=\"#customize-copyright\" aria-expanded=\"true\">
                   Copyright
                 </a>
               </h4>
            </div>
            <div id=\"customize-copyright\" class=\"panel-collapse collapse\" role=\"tabpanel\" >
               <div class=\"panel-body\">
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Background</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_bg\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Text color</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Link</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color_link\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>
                  <div class=\"form-wrapper\">
                     <div class=\"form-group\">
                        <label>Color Hover</label>
                        <div class=\"input-group colorselector\">
                            <input type=\"text\" value=\"\" name=\"copyright_color_link_hover\" class=\"form-control customize-option\" />
                            <span class=\"input-group-addon\"><i></i></span>
                            <span class=\"remove\">x</span>
                        </div>
                     </div>
                  </div>

               </div>
            </div> 
         </div>

      </div>    
   </div>   
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_emon/customize/form.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div id="gavias_customize_form" class="gavias_customize_form">*/
/*    */
/*    <div class="form-group action">*/
/*       <input type="button" id="gavias_customize_save" class="btn form-submit" value="Save" />*/
/*       <input type="button" id="gavias_customize_preview" class="btn form-submit" value="Preview" />*/
/*       <input type="button" id="gavias_customize_reset" class="btn form-submit" value="Reset" />*/
/*       <input type="hidden" id="gva_theme_name" name="theme_name" value="gavias_emon" />*/
/*    </div>   */
/* */
/*    <div class="clearfix"></div>*/
/*    <div id="customize-gavias-preivew">*/
/*       <div class="panel-group" id="customize-accordion" role="tablist" aria-multiselectable="true">   */
/*          */
/*          <!-- General -->*/
/*          <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab">*/
/*                <h4 class="panel-title">*/
/*                  <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-general" aria-expanded="true">*/
/*                    General*/
/*                  </a>*/
/*                </h4>*/
/*             </div>*/
/*             <div id="customize-general" class="panel-collapse collapse in" role="tabpanel" >*/
/*                <div class="panel-body">*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Theme Color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="theme_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Text color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="text_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Link color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="link_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Link hover color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="link_hover_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div> */
/*          </div> */
/* */
/*          <!-- Header -->*/
/*          <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab">*/
/*                <h4 class="panel-title">*/
/*                  <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-header" aria-expanded="true">*/
/*                    Header*/
/*                  </a>*/
/*                </h4>*/
/*             </div>*/
/*             <div id="customize-header" class="panel-collapse collapse" role="tabpanel" >*/
/*                <div class="panel-body">*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Background</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="header_bg" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Header Color Link</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="header_color_link" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Header Color Hover</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="header_color_link_hover" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div> */
/*          </div>*/
/* */
/*          <!-- Main menu -->*/
/*          <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab">*/
/*                <h4 class="panel-title">*/
/*                  <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-mainmenu" aria-expanded="true">*/
/*                    Main Menu*/
/*                  </a>*/
/*                </h4>*/
/*             </div>*/
/*             <div id="customize-mainmenu" class="panel-collapse collapse" role="tabpanel" >*/
/*                <div class="panel-body">*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Background</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="menu_bg" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Menu | Color Link</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="menu_color_link" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Menu | Color Hover</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="menu_color_link_hover" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Sub Menu | Background</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="submenu_background" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Sub Menu | Color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="submenu_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Sub Menu | Color Link</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="submenu_color_link" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Sub Menu | Color Hover</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="submenu_color_link_hover" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             </div> */
/*          </div>*/
/* */
/*          <!-- Footer -->*/
/*          <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab">*/
/*                <h4 class="panel-title">*/
/*                  <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-footer" aria-expanded="true">*/
/*                    Footer*/
/*                  </a>*/
/*                </h4>*/
/*             </div>*/
/*             <div id="customize-footer" class="panel-collapse collapse" role="tabpanel" >*/
/*                <div class="panel-body">*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Background</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="footer_bg" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Text color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="footer_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Color Link</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="footer_color_link" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Color Hover</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="footer_color_link_hover" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/* */
/*                </div>*/
/*             </div> */
/*          </div>*/
/* */
/*          <!-- Copyright -->*/
/*          <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab">*/
/*                <h4 class="panel-title">*/
/*                  <a role="button" data-toggle="collapse" data-parent="#customize-accordion" href="#customize-copyright" aria-expanded="true">*/
/*                    Copyright*/
/*                  </a>*/
/*                </h4>*/
/*             </div>*/
/*             <div id="customize-copyright" class="panel-collapse collapse" role="tabpanel" >*/
/*                <div class="panel-body">*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Background</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="copyright_bg" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Text color</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="copyright_color" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Color Link</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="copyright_color_link" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/*                   <div class="form-wrapper">*/
/*                      <div class="form-group">*/
/*                         <label>Color Hover</label>*/
/*                         <div class="input-group colorselector">*/
/*                             <input type="text" value="" name="copyright_color_link_hover" class="form-control customize-option" />*/
/*                             <span class="input-group-addon"><i></i></span>*/
/*                             <span class="remove">x</span>*/
/*                         </div>*/
/*                      </div>*/
/*                   </div>*/
/* */
/*                </div>*/
/*             </div> */
/*          </div>*/
/* */
/*       </div>    */
/*    </div>   */
/* </div>*/
/* */
