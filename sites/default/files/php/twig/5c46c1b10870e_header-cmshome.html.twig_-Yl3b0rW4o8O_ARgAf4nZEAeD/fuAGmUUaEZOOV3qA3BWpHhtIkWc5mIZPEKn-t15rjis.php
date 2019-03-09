<?php

/* @korone/header-cmshome.html.twig */
class __TwigTemplate_c7caba2894bf19a2bf1ec057419852f1935ba4e2ae044d9f27e9938cd6375478 extends Twig_Template
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

        // line 9
        echo "<!--Home Section-->
<div class=\"nav-container\">
    <nav>
      <div class=\"nav-bar\">
\t\t<div class=\"Logo\">\t  
\t\t";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
\t\t</div>
        <div class=\"headerRight\">
          <div class=\"headerRightTop\">\t\t 
\t\t\t <div class=\"request-button-right\"><!--<a href=\"/request-consultation\" target=\"_blank\" class=\"btn-default btn cmspdfdownload webform-button--submit button button--primary js-form-submit form-submit\">Request a Consultation</a>--></div>
\t\t\t\t 
            <!--Search-->
                 ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right_top", array()), "html", null, true));
        echo "
            <!--Search End--> 
            
          </div>
          <!--Main Nav-->
          <div class=\"headerRightBopttom menu\">                     
            
\t\t  </div>
          <!--Main Nav--> 
        </div>
      </div>
    </nav>
  </div>
<!--Home Section End-->";
    }

    public function getTemplateName()
    {
        return "@korone/header-cmshome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  50 => 14,  43 => 9,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Korone's theme implementation to display a single page.
 *
 * Header file
 */
#}
<!--Home Section-->
<div class=\"nav-container\">
    <nav>
      <div class=\"nav-bar\">
\t\t<div class=\"Logo\">\t  
\t\t{{ page.header }}
\t\t</div>
        <div class=\"headerRight\">
          <div class=\"headerRightTop\">\t\t 
\t\t\t <div class=\"request-button-right\"><!--<a href=\"/request-consultation\" target=\"_blank\" class=\"btn-default btn cmspdfdownload webform-button--submit button button--primary js-form-submit form-submit\">Request a Consultation</a>--></div>
\t\t\t\t 
            <!--Search-->
                 {{ page.header_right_top }}
            <!--Search End--> 
            
          </div>
          <!--Main Nav-->
          <div class=\"headerRightBopttom menu\">                     
            
\t\t  </div>
          <!--Main Nav--> 
        </div>
      </div>
    </nav>
  </div>
<!--Home Section End-->";
    }
}
